<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class createcontroller extends Controller
{
    public function create()
    {
        $clientdata = Session::get('clientdata');
        
        return view('create',['clientdata'=>$clientdata]);
    }

    public function registerevent(Request $req)
    {
        $event = [
            "name" => $req->name,
            "contact" => $req->contact,
            "address" => $req->address,
            "date" => $req->date,
            "theme" => $req->theme,
            "additional" => $req->additional,
            "numberguest" => $req->numberguest,
            "paymentype" => $req->paymentype,
            "acc" => $req->acc
        ];

        // dd($event);
        // input data ke db

        return redirect('create');
    }
}
