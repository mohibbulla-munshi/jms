<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jmsApi extends Controller
{
    //
    function getData(){
        return [
            "ray"  =>"www.raylifebd.com",
            'email' =>'info@raylifebd.com'
        ];
    }
}
