<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\eventchange;
use App\eventchangedetail;
use App\event;
use App\theme;

class changecontroller extends Controller
{
    public function change()
    {
        $themedata = theme::get();
        return view('change',['themedata'=>$themedata]);
    }

    public function changeRequest(Request $req)
    {
        $tickect_dlt = Session::get('deleteTicket');
        Session::forget('deleteTicket');
        $getusrid = Session::get('clientdata');
        $evenchange = new eventchange;
        $evenchange->User_ID = $getusrid[0]['User_ID'];
        $evenchange->save();

        $latestchangeid = eventchange::select('Eventchange_ID')
        ->where('User_ID','=',$getusrid[0]['User_ID'])
        ->orderBy('created_at','desc')
        ->limit(1)
        ->get();

        $olddata = event::select('*')
        ->where('Event_ID','=',$tickect_dlt)
        ->get();
        
        $eventchangedetail = new eventchangedetail;
        $eventchangedetail->Eventchange_ID = $latestchangeid[0]['Eventchange_ID'];
        $eventchangedetail->Event_ID = $tickect_dlt;
        $eventchangedetail->Theme_ID = $olddata[0]['Theme_ID'];
        $eventchangedetail->Eventchangedetail_Name = $olddata[0]['Event_Name'];
        $eventchangedetail->Eventchangedetail_Contact = $olddata[0]['Event_Contact'];
        $eventchangedetail->Eventchangedetail_Address = $olddata[0]['Event_Address'];
        $eventchangedetail->Eventchangedetail_Date = $olddata[0]['Event_Date'];
        $eventchangedetail->Eventchangedetail_Additional = $olddata[0]['Event_Additional'];
        $eventchangedetail->Eventchangdetail_Term = $olddata[0]['Event_Term'];
        $eventchangedetail->save();

        event::where('Event_ID','=',$tickect_dlt)
        ->update(array('Event_Name'=>$req->name,
        'Event_Contact'=>$req->contact,
        'Event_Address'=>$req->address,
        'Event_Date'=>$req->date,
        "Theme_ID" => $req->theme,
        "Event_Additional" => $req->additional,
        "Event_Term" => $req->acc));

        return redirect('change');
    }
}
