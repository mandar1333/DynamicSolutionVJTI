<?php

namespace App\Http\Controllers;

use App\Models\users_account;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
     function uVerification(Request $req){
        $email= $req->input('email');
        $pass= $req->input('password');
        $u_id=users_account::where('email_id',$email)->where('password',$pass)->value('u_id');
        if ($u_id) {
            $u_name = users_account::where('email_id', $email)->where('password', $pass)->value('username');
            $req->session()->put('user', $u_name);
            return $req->session()->get('user');
        }
        else {
            return "false";
        }
    //   return $u_id;     
     }
}
