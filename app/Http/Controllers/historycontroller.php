<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class historycontroller extends Controller
{
    public function history()
    {

        // ambil data dari db
        $clientdata = Session::get('clientdata');
        
        return view('history',['clientdata'=>$clientdata]);
    }

    public function changeCheck(Request $req)
    {

        // check ticket in db
        // dd($req->ticket);

        return redirect('change');
    }
}
