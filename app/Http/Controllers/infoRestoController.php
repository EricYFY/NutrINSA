<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class infoRestoController extends Controller
{
    //
    public function get(){
        return view('infoRestaurant');
    }
}
