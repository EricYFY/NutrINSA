<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calculatriceModel extends Model
{
    //
    
    public $incrementing = false;
    
    public static function calorie($nomTable,$ingredient){
                          
        $calorie = \DB::table($nomTable)
            ->select("Calories")
            ->where("nom",$ingredient)->get()
            ;
        return $calorie;
    }
}