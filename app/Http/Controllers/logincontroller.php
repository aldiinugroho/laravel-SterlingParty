<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login()
    {
        return view('login');
    }
    
    public function loginCheck(Request $req)
    {
        // cek data from db
        
        $data = [
            "email" => $req->email,
            "password" => $req->password
        ];

        return redirect('index');
    }
}
