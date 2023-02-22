<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    function serviceFetch(){
        $services=services::all();
        return view("/home",['serv_data'=>$services]);
    }
}
