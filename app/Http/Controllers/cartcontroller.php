<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Session;
use App\item;
use App\itemtransaction;
use App\itemtransactiondetail;

class cartcontroller extends Controller
{
    public function cart()
    {
        $datatomerge = Session::get('cartchange');

        if ($datatomerge == null) {
            $cart_tosee = 0;
            $stockalt = 0;
            $alrt = 1;
        } else {
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

            $stockalt = [];
            foreach ($cart_tosee as $keyVal => $dtCek) {
                $cekstock = item::where('Item_ID','=',$dtCek['Item_ID'])
                ->get();
                $stockVal = $cekstock[0]['Item_Amount'];
                $cekForstock = $stockVal - $dtCek['Item_Amount'];
                
                if ($cekForstock < 0) {
                    $stockalt[$keyVal] = [
                        'Item_Name' => $dtCek['Item_Name'],
                        'Item_max_take' => $stockVal,
                        'Item_taken' => $dtCek['Item_Amount']
                    ];
                } 
            }
            if (count($stockalt) > 0) {
                $alrt = 0;
            } else {
                $alrt = 1;
            }
        }

        return view('cart',['cart_tosee'=>$cart_tosee,'stockalt'=>$stockalt,'alrt'=>$alrt]);
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
    
    public function delete($item_id)
    {
        $datatomerge = Session::get('cartchange');
        foreach ($datatomerge as $key => $value) {
            if ($value['Item_ID'] == $item_id) {
                unset($datatomerge[$key]);
            }
        }
        Session::put('cartchange',$datatomerge);

        return redirect('cart');
    }

    public function checkout()
    {
        $datapay = Session::get('cartchange');
        $collectionpaid = new Collection();
        foreach($datapay as $item){
            $collectionpaid->push((object)
            [
                'Item_ID' => $item['Item_ID'],
                'Item_Name'=> $item['Item_Name'],
                'Item_Price'=> $item['Item_Price'],
                'Item_Amount'=> $item['Item_Amount']
            ]);
        }
        $groupedpayItem = $collectionpaid
        ->groupBy('Item_ID')
        ->map(function ($row, $key) {
            return ['Item_ID' => $key,'Item_Amount' => $row->sum('Item_Amount')];
        });
        $paid = [];
        foreach ($groupedpayItem as $a => $value) {
            $forCartitm = item::select('*')
            ->where('Item_ID','=',$value['Item_ID'])
            ->get();
            foreach ($forCartitm as $b => $itm) {
                $paid[$a] = collect(
                    [
                        'Item_ID' => $itm->Item_ID,
                        'Item_Name' => $itm->Item_Name,
                        'Item_Price' => $itm->Item_Price,
                        'Item_Amount' => $value['Item_Amount']
                    ]
                );
            }
        }

        $getclient = Session::get('clientdata');
        $itemtransaction = new itemtransaction;
        $itemtransaction->User_ID = $getclient[0]['User_ID'];
        $itemtransaction->save();

        $latesttrans = itemtransaction::select('Itemtransaction_ID')
        ->where('User_ID','=',$getclient[0]['User_ID'])
        ->orderBy('created_at','desc')
        ->limit(1)
        ->get();

        foreach ($paid as $m => $cart_value) {
            $Itemtransactiondetail = new Itemtransactiondetail;
            $Itemtransactiondetail->Itemtransaction_ID = $latesttrans[0]['Itemtransaction_ID'];
            $Itemtransactiondetail->Item_ID = $cart_value['Item_ID'];
            $Itemtransactiondetail->Itemtransactiondetail_Amount = $cart_value['Item_Amount'];
            $Itemtransactiondetail->save();
        }

        foreach ($paid as $idx => $count) {
            $tempStock = 0;
            $getForstock = item::where('Item_ID','=',$count['Item_ID'])
            ->get();
            $stockbefore = $getForstock[0]['Item_Amount'];
            $tempStock = $stockbefore - $count['Item_Amount'];
            item::where('Item_ID','=',$count['Item_ID'])
            ->update(array('Item_Amount'=>$tempStock));
        }
        
        Session::forget('cartchange');
        return redirect('index');
    }
}
