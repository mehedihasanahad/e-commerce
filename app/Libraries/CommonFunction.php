<?php
namespace App\Libraries;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Auth;

class CommonFunction
{
    public static function checkTokenValid() {

    }

    public static function getToken(Request $request) {
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
        if (Auth::guard('admin')->attempt($credentils, $remember)) {
            $key = config('constant.TOKEN_KEY');
            $payload = [
                'userId' => $credentils['username'],
                'regKey' => $credentils['password'],
                "expire" => time() + 5 * 60 * 60
            ];
            $jwt = JWT::encode($payload, $key, 'HS256');
            return $jwt;
        }
    }
}
