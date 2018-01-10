<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConseilFruitLegumeController extends Controller
{
    //
    public function get(){
        $type="FL";
        return view('/conseil')->with('type',$type);
    }
}
