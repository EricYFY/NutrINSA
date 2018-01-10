<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\restaurantModel;

class restaurantController extends Controller
{
    //
    
    public function get(){
        
        $restaurant =restaurantModel::NomResto();
        return view("/restaurant")->with('NomResto',$restaurant);
       
        
    }
    
}