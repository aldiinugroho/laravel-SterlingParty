<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use Session;

class adminindexcontroller extends Controller
{
    public function adminindex()
    {
        $getevent = event::join('theme','theme.Theme_ID','=','event.Theme_ID')
        ->orderBy('event.created_at','desc')
        ->get();
        return view('adminindex',['getevent'=>$getevent]);
    }

    public function adminlogout()
    {
        Session::forget('clientdata');
        return redirect('/');
    }
}
