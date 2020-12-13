<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class registercontroller extends Controller
{
    public function register()
    {
        return view('regis');
    }

    public function registerData(Request $req)
    {
        // validation
        $req->validate([
            'name'=>'required',
            'email'=>'required|unique:user,User_Email',
            'password'=>'required|min:6',
            'confrimpassword'=>'required|same:password',
            'acc'=>'required'
            
        ]);

        // input data ke db
        $user = new user;
        $user->User_Name = $req->name;
        $user->User_Email = $req->email;
        $user->User_Password = $req->password;
        $user->User_Term = $req->acc;
        $user->save();

        return redirect('index');
    }
}
