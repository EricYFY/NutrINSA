<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantAleatoireModel extends Model
{
    public static function choixalea($calories, $prix){
        
        if($calories > 0) {
            if($prix > 0) {
                $nom_resto = \DB::select("select Nom from Restaurants WHERE PrixMax <= :prix AND Calories <= :calories ORDER BY RAND() LIMIT 1", ['prix' => $prix, 'calories' => $calories]);
            }
            else {
                $nom_resto = \DB::select("select Nom from Restaurants WHERE Calories <= :calories ORDER BY RAND() LIMIT 1", ['calories' => $calories]);
            }
        }
        else {
            if($prix > 0) {
                $nom_resto = \DB::select("select Nom from Restaurants WHERE PrixMax <= :prix ORDER BY RAND() LIMIT 1", ['prix' => $prix]);
            }
            else {
                $nom_resto = \DB::select("select Nom from Restaurants ORDER BY RAND() LIMIT 1");
            }
        }
        if($nom_resto == NULL)
            $nom = NULL;
        else
            $nom = $nom_resto[0]->Nom;
        
        if($nom != NULL) {
            $entrees = \DB::table($nom)->select('entrees')
                                      ->wherenotnull('entrees')
                                      ->orderby(\DB::raw('rand()'))
                                      ->take(1)
                                      ->first();
            $plats = \DB::table($nom)->select('plats')
                                      ->wherenotnull('plats')
                                      ->orderby(\DB::raw('rand()'))
                                      ->take(1)
                                      ->first();
            $desserts = \DB::table($nom)->select('dessert')
                                      ->wherenotnull('dessert')
                                      ->orderby(\DB::raw('rand()'))
                                      ->take(1)
                                      ->first();
            
            if($entrees == NULL)
                $entree = NULL;
            else
                $entree = $entrees->entrees;
            
            if($plats == NULL)
                $plat = NULL;
            else
                $plat = $plats->plats;
            
            if($desserts == NULL)
                $dessert = NULL;
            else
                $dessert = $desserts->dessert;

        }                       
        else {
            $entree = NULL;
            $plat = NULL;
            $dessert = NULL;
            $tab = array('resto' => NULL, 'entree' => NULL, 'plat' => NULL, 'dessert' => NULL);
            
        }

        
            
        $tab = array('resto' => $nom, 'entree' => $entree, 'plat' => $plat, 'dessert' =>$dessert);

        return $tab;
        
    }

}
