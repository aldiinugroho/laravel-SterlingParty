<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\user;
use Session;

class logincontroller extends Controller
{
    public function login()
    {
        return view('login');
    }
    
    public function loginCheck(Request $req)
    {
        // cek data from db
        $req->validate([
            'email'=>'required|exists:user,User_Email',
            'password'=>'required|exists:user,User_Password'     
        ]);

        $user = user::select('*')
        ->where('User_Email','=',$req->email)
        ->get();

        Session::put('clientdata',$user);

        // dd(Session::get('clientdata'));

        return redirect('index');
    }
}
