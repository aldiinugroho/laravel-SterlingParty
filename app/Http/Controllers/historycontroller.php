<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historycontroller extends Controller
{
    public function history()
    {

        // ambil data dari db

        return view('history');
    }

    public function changeCheck(Request $req)
    {

        // check ticket in db
        // dd($req->ticket);

        return redirect('change');
    }
}
