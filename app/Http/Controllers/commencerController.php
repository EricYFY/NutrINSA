<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class commencerController extends Controller
{
    //
    public function get(){
        return view('/commencer');
    }
}