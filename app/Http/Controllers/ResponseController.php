<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public static function apiResponse($status = 500, $message = '',$responseType = 'Success', $data = [])
    {
        http_response_code($status);
        header('Content-Type:application/json');

        $responseData = [
            'serviceType' => 'E-commerceBD-API-Service',
            'responseTime' => Carbon::now()->timestamp,
            'status' => $status,
            'response' => $responseType,
            'message' => $message,
            'data' => $data
        ];

        echo json_encode($responseData,$status);
        exit;
    }

    public static function tokenResponse($status = 500, $token = '',$message = '')
    {
        http_response_code($status);
        header('Content-Type:application/json');

        $responseData = [
            'serviceType' => 'E-commerceBD-API-Service',
            'responseTime' => Carbon::now()->timestamp,
            'status' => $status,
            'token_type' => 'bearer',
            'token' => $token,
            'msg' => $message
        ];

        echo json_encode($responseData,$status);
        exit;
    }
}
