<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\Traits\RequestManager;
use App\Libraries\CommonFunction;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    use RequestManager;
    public function handle(Request $request) {
        try {
            $moduleType = $request->segment(1);
            $routeName = $request->segment(3);

            if ($moduleType == 'api' && $routeName == 'getToken') {
                $tokenArray = CommonFunction::getToken($request);
                ResponseController::apiResponse(200, 'Successfully Token Generated', 'Success', $tokenArray);
            } else if ($moduleType == 'api' && $routeName == 'validateToken') {
                $response = CommonFunction::validateToken($request);
                ResponseController::apiResponse(200, 'Token is valid', 'Success', $response);
            }

            // $tokenAccess = $this->checkTokenValid($request->header('Authorization'));
            // if( !$tokenAccess['status']) {
            //     ResponseController::apiResponse(401, 'Unauthorized','Error');
            // }
            // $this->handleRequest($request);
            // ResponseController::apiResponse(200, 'Unauthorized','Error', $response);
        } catch (\Exception $e) {
//            dd('M: '.$e->getMessage().' F: '.$e->getFile().' L: '.$e->getLine());
            ResponseController::apiResponse(500, $e->getMessage(), 'Error');
        }

    }
}
