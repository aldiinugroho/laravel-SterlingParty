<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    public function cart()
    {
        return view('cart');
    }
}
