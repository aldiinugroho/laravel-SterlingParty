<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class adminitemcontroller extends Controller
{
    public function adminitem()
    {
        $item = item::paginate(4);
        return view('adminitem',['item'=>$item]);
    }
}
