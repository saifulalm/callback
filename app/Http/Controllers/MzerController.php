<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class MzerController extends Controller
{
    public function callback_v1(){


        $data = file_get_contents('php://input');

        $response = Curl::to('http://grosirvoucher.com:2500/callback/v1/Mzer')
            ->withHeaders(array('Accept: application/xml', 'Content-Type: aplication/xml'))
            ->withData($data)
            ->post();


        return $response;

    }
}
