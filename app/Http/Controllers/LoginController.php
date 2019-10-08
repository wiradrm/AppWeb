<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $r){
        $email = $r->email;
        $password = $r->password;

        if($email != "wirad24@gmail.com"){
            return "salah";
        }

        if($password != "1234"){
            return "salah";
        }

        return "Selamat Datang Administrator";
    }
}
