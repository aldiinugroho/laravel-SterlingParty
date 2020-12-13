<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class changecontroller extends Controller
{
    public function change()
    {
        return view('change');
    }

    public function changeRequest(Request $req)
    {
        // $datachange = [
        //     "name" => $req->name,
        //     "contact" => $req->contact,
        //     "address" => $req->address,
        //     "date" => $req->date,
        //     "theme" => $req->theme,
        //     "additional" => $req->additional,
        //     "acc" => $req->acc
        // ];

        // dd($datachange);

        return redirect('change');
    }
}
