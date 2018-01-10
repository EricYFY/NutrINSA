<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConseilLaitController extends Controller
{
    //
    public function get(){
        $type="L";
        return view('/conseil')->with('type',$type);
    }
}
