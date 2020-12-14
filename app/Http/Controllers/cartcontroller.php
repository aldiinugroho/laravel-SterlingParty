<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Session;
use App\item;

class cartcontroller extends Controller
{
    public function cart()
    {

        $datatomerge = Session::get('cartchange');
        $datacollection = new Collection();
        foreach($datatomerge as $item){
            $datacollection->push((object)
            [
                'Item_ID' => $item['Item_ID'],
                'Item_Name'=> $item['Item_Name'],
                'Item_Price'=> $item['Item_Price'],
                'Item_Amount'=> $item['Item_Amount']
            ]);
        }

        $groupedCartItem = $datacollection
        ->groupBy('Item_ID')
        ->map(function ($row, $key) {
            return ['Item_ID' => $key,'Item_Amount' => $row->sum('Item_Amount')];
        });

        $cart_tosee = [];
        foreach ($groupedCartItem as $a => $value) {
            $fromdb_tocart = item::select('*')
            ->where('Item_ID','=',$value['Item_ID'])
            ->get();
            foreach ($fromdb_tocart as $b => $itm) {
                $cart_tosee[$a] = collect(
                    [
                        'Item_ID' => $itm->Item_ID,
                        'Item_Name' => $itm->Item_Name,
                        'Item_Price' => $itm->Item_Price,
                        'Item_Amount' => $value['Item_Amount']
                    ]
                );
            }
        }

        return view('cart',['cart_tosee'=>$cart_tosee]);
    }

    public function countcart(Request $req, $item_id)
    {
        $req->validate([
            'amount'=>'required|integer|min:1' 
        ]);

        $itmfromdb = item::select('*')
        ->where('Item_ID','=',$item_id)
        ->get();

        foreach ($itmfromdb as $c) {
            $cart_data = collect(
                [
                    'Item_ID' => $c->Item_ID,
                    'Item_Name' => $c->Item_Name,
                    'Item_Price' => $c->Item_Price,
                    'Item_Amount' => (int)$req->amount
                ]
            );
        }

        Session::push('cartchange',$cart_data);
        return redirect('cart');
    }
}
