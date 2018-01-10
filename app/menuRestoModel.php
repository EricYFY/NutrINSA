<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class menuRestoModel extends Model
{
    //
    public $incrementing =false;
    
    public static function menu($nomTable){
        
        $today =date("Y-m-d");
        $menu = \DB::table($nomTable)->where("date", $today)->get();
        return $menu;
    }
    
}