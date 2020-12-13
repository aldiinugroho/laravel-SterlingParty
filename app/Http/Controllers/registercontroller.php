<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registercontroller extends Controller
{
    public function register()
    {
        return view('regis');
    }

    public function registerData(Request $req)
    {
        $data = [
            "name" => $req->name,
            "email" => $req->email,
            "password" => $req->password,
            "term" => $req->acc
        ];

        // dd($data);

        // input data ke db

        return redirect('index');
    }
}
