<?php
namespace App\Libraries;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class CommonFunction
{
    public static function checkTokenValid() {

    }

    public static function getToken($request) {
        // Data validation
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            ResponseController::apiResponse(400, 'Data is not validated', 'Eroor');
        }

        // search user on db
        $credentils = $validator->validated();
        $remember = $request->input('remember');
        if (Auth::guard('admin')->attempt($credentils)) {
            if (!Auth::user()) {
                $user = Admin::where('username', $credentils['username'])->first();
                Auth::login($user, $remember);
            }
            $key = config('constant.TOKEN_KEY');
            $payload = [
                'userId' => $credentils['username'],
                'regKey' => $credentils['password'],
                "exp" => time() + 60 * 60 * 24 // for 1 day
            ];
            $jwtToken = JWT::encode($payload, $key, 'HS256');
            $tokenArray = ['token' => $jwtToken,'type' => 'bearar'];
            if (filter_var($remember, FILTER_VALIDATE_BOOLEAN)) {
                $payload = [
                    'userId' => $credentils['username'],
                    'regKey' => $credentils['password'],
                    "exp" => time() + 60 * 60 * 24 * (365*2)  // for 2 years
                ];
                $jwtRememberMe = JWT::encode($payload, $key, 'HS256');
                $tokenArray['remember_me'] = $jwtRememberMe;
            }
            $userInfo = Admin::where(['username'=> $credentils['username']])
                                            ->first();
            if (Hash::check($credentils['password'], $userInfo->password)) $tokenArray['userInfo'] = $userInfo;
            return $tokenArray;
        } else {
            ResponseController::apiResponse(400, 'Credential is not valid', 'Error');
        }
    }

    public static function validateToken($request) {
        // Data validation
        $validator = Validator::make($request->all(), [
            'token' => 'required',
        ]);
        if ($validator->fails()) {
            ResponseController::apiResponse(400, 'Bearer token is required', 'Eroor');
        }

        $validatedData = $validator->validated();
        $token = substr($validatedData['token'], 7);
        $key = config('constant.TOKEN_KEY');
        $decoded = JWT::decode($token, new Key($key, 'HS256'));
        if (Auth::guard('admin')->attempt([
            'username' => $decoded->userId,
            'password' => $decoded->regKey
        ])) {
            if (!Auth::user()) {
                $user = Admin::where('username', $decoded->userId)->first();
                Auth::login($user);
            }
            return [];
        } else {
            ResponseController::apiResponse(400, 'Invalid token', 'Error');
        }
    }
}
