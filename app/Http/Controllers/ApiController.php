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
            if (($moduleType == 'api') && ($routeName !== 'admin')) {
                switch(true) {
                    case $routeName == 'getToken':
                        $tokenArray = CommonFunction::getToken($request);
                        ResponseController::apiResponse(200, 'Successfully Token Generated', 'Success', $tokenArray);
                        break;
                    case $routeName == 'validateToken':
                        $response = CommonFunction::validateToken($request);
                        ResponseController::apiResponse(200, 'Token is valid', 'Success', $response);
                        breadk;
                    default: 
                        ResponseController::apiResponse(500, 'Invalid API Request', 'Error');
                }
            }
        } catch (\Exception $e) {
//            dd('M: '.$e->getMessage().' F: '.$e->getFile().' L: '.$e->getLine());
            ResponseController::apiResponse(500, $e->getMessage(), 'Error');
        }

    }
}
