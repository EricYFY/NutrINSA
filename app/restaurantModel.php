<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurantModel extends Model
{
    //
    
    //protected $table = "Restaurants";
    
    public $incrementing = false;
    public static function NomResto(){
        $restaurant = \DB::table('Restaurants')->lists('Nom');
        return $restaurant;
    }
    

    
    
}