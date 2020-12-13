<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\event;

class historycontroller extends Controller
{
    public function history()
    {
        $clientdata = Session::get('clientdata');
        $errormsg = Session::get('zeromsg');
        Session::forget('zeromsg');

        $clientdata = Session::get('clientdata');
        $historyevent = event::select('*')
        ->join('theme','theme.Theme_ID','=','event.Theme_ID')
        ->where('User_ID','=',$clientdata[0]['User_ID'])
        ->get();

        return view('history',['clientdata'=>$clientdata,'errormsg'=>$errormsg,'historyevent'=>$historyevent]);
    }

    public function changeCheck(Request $req)
    {
        $clientdata = Session::get('clientdata');
        $clientevent = event::select('*')
        ->where('User_ID','=',$clientdata[0]['User_ID'])
        ->where('Event_ID','=',$req->ticket)
        ->get();

        $req->validate([
            'ticket'=>'required|exists:event,Event_ID'
        ]);
    
        if ($clientevent->isEmpty()) {
            $zeromsg = 'oopss.. wrong ticket.';
            Session::put('zeromsg',$zeromsg);
            return redirect('history');
        } else {
            Session::forget('zeromsg');
            return redirect('change');
        }
    }
}
