<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Customers;
use Log;

class dataProcessController extends Controller
{
    public function datas() {
    
        $client = new Client();
        
        $response = $client->request('GET','https://jsonplaceholder.typicode.com/users');
        
        $data = json_decode($response->getBody(), true);

        foreach ($data as $value) {
            
            Customers::insert([
                'name' => $value['name'],
                'email' => $value['email'],
                'address' => ($value['address']['suite'].' '.$value['address']['street'].' '.$value['address']['zipcode'].' '.$value['address']['city']),
                'phone' => $value['phone'],
                'website' => $value['website'],
                'company_name' => $value['company']['name'],
            ]);

        }
    }

    public function insert($data) {
        
        foreach ($data as $value) {
            
            Customers::insert([
                'name' => $value['name'],
                'email' => $value['email'],
                'address' => ($value['address']['suite'].' '.$value['address']['street'].' '.$value['address']['zipcode'].' '.$value['address']['city']),
                'phone' => $value['phone'],
                'website' => $value['website'],
                'company_name' => $value['company']['name'],
            ]);

        }
    }
}
   