<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\event;
use App\user;
use App\theme;
use App\paymenttype;


class createcontroller extends Controller
{
    public function create()
    {
        $clientdata = Session::get('clientdata');
        $theme = theme::get();
        $paymenttype = paymenttype::get();
        
        return view('create',['clientdata'=>$clientdata,'theme'=>$theme,'paymenttype'=>$paymenttype]);
    }

    public function registerevent(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'contact'=>'required|integer',
            'address'=>'required',
            'date'=>'required',
            'theme'=>'required',
            'address'=>'required',
            'additional'=>'required',
            'numberguest'=>'required|integer|min:10',
            'paymentype'=>'required',
            'acc'=>'required'
        ]);

        // $event = [
        //     "name" => $req->name,
        //     "contact" => $req->contact,
        //     "address" => $req->address,
        //     "date" => $req->date,
        //     "theme" => $req->theme,
        //     "additional" => $req->additional,
        //     "numberguest" => $req->numberguest,
        //     "paymentype" => $req->paymentype,
        //     "total_amount" => $req->total_amount,
        //     "acc" => $req->acc
        // ];

        // dd($event);

        $clientdata = Session::get('clientdata');

        // input data ke db
        $event = new event;
        $event->User_ID = $clientdata[0]['User_ID'];
        $event->Theme_ID = 1;//$req->theme;
        $event->PaymentType_ID = 1;//$req->paymentype;
        $event->Event_Name = $req->name;
        $event->Event_Contact = $req->contact;
        $event->Event_Address = $req->address;
        $event->Event_Date = $req->date;
        $event->Event_Additional = $req->additional;
        $event->Event_Guest = $req->numberguest;
        $event->Event_Price = $req->total_amount;
        $event->Event_Term = $req->acc;
        $event->save();

        return redirect('create');
    }
}
