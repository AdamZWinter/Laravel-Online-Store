<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CatController extends Controller
{
    public function index(Request $request)
    {
        $viewData = [];
        $viewData["title"] = "iscat app";
        $viewData["subtitle"] =  "Is it a Cat?";
        return view('iscat.index')->with("viewData", $viewData);
    }

    public function iscat(Request $request)
    {
        //return Http::get('https://iscat.topsecondhost.com');

        $response = Http::post('https://iscat.topsecondhost.com', [
            'imageLink' => 'https://www.spoon-tamago.com/wp-content/uploads/2021/08/dinos-cat-table-3.jpeg',
        ]);

        return $response->body();
        //return "test response";

        // $client = new \GuzzleHttp\Client();
        // $url = "https://iscat.topsecondhost.com";
   
        // $data['imageLink'] = "https://www.spoon-tamago.com/wp-content/uploads/2021/08/dinos-cat-table-3.jpeg";
        // $request = $client->post($url,  ['form_params'=>$data]);
        //$response = $request->send();

        // return $request;

        

        //return file_get_contents('http://iscat.topsecondhost.com');

    }

}