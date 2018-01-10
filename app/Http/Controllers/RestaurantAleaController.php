<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\RestaurantAleatoireModel;

class RestaurantAleaController extends Controller
{
    public function get(){
        return view ('aleatoire');
        
    
    }
    
    public function post(){
        $calorie = $_POST['calorie'];
        $prix = $_POST['prix'];
        $tab = RestaurantAleatoireModel::choixalea($calorie, $prix);
        return view('proposition')->with('testchoix', $tab) 
                                ->with('calorie', $calorie)
                                ->with('prix', $prix);
        
    }
}
