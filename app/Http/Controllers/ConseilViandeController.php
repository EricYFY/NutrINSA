<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConseilViandeController extends Controller
{
    //
    public function get(){
        $type="V";
        return view('/conseil')->with('type',$type);
    }
}
