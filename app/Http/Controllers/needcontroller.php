<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class needcontroller extends Controller
{
    public function need()
    {
        $item = item::paginate(4);
        
        return view('need',['item'=>$item]);
    }
}
