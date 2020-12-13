<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class needcontroller extends Controller
{
    public function need()
    {
        // ambil data item yang dijual lalu tampilkan
        $item = item::paginate(4);
        
        return view('need',['item'=>$item]);
    }
}
