<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// j'ai rajouté pour pouvoir utiler INPUT pour obtenir la  varible de GET 
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

use App\menuRestoModel;

class menuRestoController extends Controller
{
    //
    public function get(){
        $menuRestaurant = Input::get('nomResto');
        $menu = menuRestoModel::menu($menuRestaurant);
        
        return view('menuResto',['menu',$menu])->with('menu',$menu)
                               ->with('nom',$menuRestaurant);
    }
}