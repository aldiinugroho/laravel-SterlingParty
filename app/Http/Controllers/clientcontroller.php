<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class clientcontroller extends Controller
{
    public function index()
    {
        $clientdata = Session::get('clientdata');
        
        return view('index',['clientdata'=>$clientdata]);
    }

    public function logout()
    {
        Session::forget('clientdata');
        Session::forget('zeromsg');
        Session::forget('cartchange');
        Session::flush();

        return redirect('/');
    }
}
