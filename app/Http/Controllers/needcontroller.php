<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class needcontroller extends Controller
{
    public function need()
    {

        // ambil data item yang dijual lalu tampilkan

        return view('need');
    }
}
