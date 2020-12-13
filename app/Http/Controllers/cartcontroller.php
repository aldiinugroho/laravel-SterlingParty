<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    public function cart()
    {
        return view('cart');
    }

    public function countcart(Request $req, $item_id)
    {
        $req->validate([
            'amount'=>'required|integer|min:1' 
        ]);

        $id_to_cart = $item_id;
        $item_amount = $req->amount;
        // dd($item_amount);
        return redirect('cart');
    }
}
