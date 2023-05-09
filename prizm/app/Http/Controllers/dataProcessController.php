<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Log;

class dataProcessController extends Controller
{
    public function datas() {
    
        $client = new Client();
        
        $response = $client->request('GET','https://jsonplaceholder.typicode.com/users');
        
        $data = json_decode($response->getBody(), true);

        log::debug($data);
        
    }
}
   