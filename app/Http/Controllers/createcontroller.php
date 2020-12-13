<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createcontroller extends Controller
{
    public function create()
    {
        return view('create');
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
