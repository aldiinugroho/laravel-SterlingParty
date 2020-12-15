<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class adminitemcontroller extends Controller
{
    public function adminitem()
    {
        $items = item::paginate(4);
        return view('adminitem',['item'=>$items]);
    }

    public function newitemdata(Request $req)
    {
        $req->validate([
            'name'=>'required|unique:item,Item_Name',
            'price'=>'required|integer|min:5000',
            'amount'=>'required|integer',
            'picture'=>'required'
        ]);

        $imgtype = $req->file('picture')->extension();
        $imagedata = file_get_contents($req->file('picture'));
            // dd($imgtype);
        $item = new item;
        $item->Item_Name = $req->name;
        $item->Item_Price = $req->price;
        $item->Item_Amount = $req->amount;
        $item->Item_ImageType = $imgtype;
        $item->Item_Image = $imagedata;
        $item->save();

        return redirect('adminitem');
    }

    public function changeitemdata(Request $req, $item_id)
    {
        $req->validate([
            'itemname'=>'required|unique:item,Item_Name',
            'itemprice'=>'required|integer|min:5000',
            'itemamount'=>'required|integer|min:5'
        ]);
        
        item::where('Item_ID','=',$item_id)
        ->update(array('Item_Name'=>$req->itemname,
        'Item_Price'=>$req->itemprice,
        'Item_Amount'=>$req->itemamount));

        return redirect('adminitem');
    }
}
