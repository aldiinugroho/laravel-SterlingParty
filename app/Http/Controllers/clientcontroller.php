<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }
}
