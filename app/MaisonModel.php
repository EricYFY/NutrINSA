<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaisonModel extends Model
{
    public static function calcul($tab){
    
        $total = 0;
        foreach($tab as $ingredient){
            if($ingredient['Nom'] == "" || $ingredient['quantite'] == ""){
                
            }
            else {
            $recup = \DB::select("select Calories from Ingredients where Nom = :nom", ['nom' => $ingredient['Nom']]);
            $calorie = $recup[0]->Calories;
            $quantite = floatval($ingredient['quantite']);
            $unite = $ingredient['unite'];
           
            if ($unite == "kg")
                $quantite = $quantite *10;
            else if($unite == "g")
                $quantite = $quantite / 100;
            else if($unite == "mg")
                $quantite = $quantite / 100000;
            else if($unite == "l")
                $quantite = $quantite * 10;
            else if($unite == "cl")
                $quantite = $quantite / 10;
            else if($unite == "ml")
                $quantite = $quantite / 100;
    
            
            $total = $total + $calorie*$quantite;
        
        
            
            }
        
        
        }
        return $total;
        
    
    }
}
