<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Storage;

class SauvegardeModel extends Model
{
        public static function writeRepas($file, $ajout){
            if(! Storage::disk('users')->exists($file)){
                Storage::disk('users')->put($file, '');
            }
            
            $data = Storage::disk('users')->get($file);
            $tab = array();
            $ligne = '';
            $date = date("Y-m-d");
            $i=0;
            $test=0; //savoir si date existe
            foreach(explode("\n", $data) as $line)
            {   
                $ligne = '';
                if(!empty($line))
                {
                    foreach(explode(":", $line) as $part)
                    {
                        if($i == 0){
                        $ligne = $ligne . $part;
                        //check date
                            if($part == $date){
                                $test = 1;
                                $ligne = $ligne . ":repas";
                                foreach($ajout as $mot){
                                    $ligne = $ligne.'/'.$mot;
                                }
                            }
                        }
                        else{
                            $ligne = $ligne . ":" . $part;
                        }
                        $i++;
                    }
                    $tab[] = $ligne;
                    $i = 0;
                }
            }
            
            //si la date n'est pas présente :
            if($test == 0){
                $ligne = $date.":repas";
                foreach($ajout as $mot){
                    $ligne = $ligne.'/'.$mot;
                }
                $tab[] = $ligne;
            }
            
            //remplir fichier:
            Storage::disk('users')->put($file, '');
            foreach($tab as $line){
                Storage::disk('users')->append($file,$line);
            }
            return $tab;
    }

    public static function writeIngredients($file, $ajout){
            if(! Storage::disk('users')->exists($file)){
                Storage::disk('users')->put($file, '');
            }
            
            $data = Storage::disk('users')->get($file);
            $tab = array();
            $ligne = '';
            $date = date("Y-m-d");
            $i=0;
            $test=0; //savoir si date existe
            foreach(explode("\n", $data) as $line)
            {   
                $ligne = '';
                if(!empty($line))
                {
                    foreach(explode(":", $line) as $part)
                    {
                        if($i == 0){
                        $ligne = $ligne . $part;
                        //check date
                            if($part == $date){
                                $test = 1;
                                $ligne = $ligne . ":ingredients";
                                foreach($ajout as $mot){
                                    $ligne = $ligne.'/'.$mot['Nom'];
                                }
                            }
                        }
                        else{
                            $ligne = $ligne . ":" . $part;
                        }
                        $i++;
                    }
                    $tab[] = $ligne;
                    $i = 0;
                }
            }
            
            //si la date n'est pas présente :
            if($test == 0){
                $ligne = $date.":ingredients";
                foreach($ajout as $mot){
                    $ligne = $ligne.'/'.$mot['Nom'];
                }
                $tab[] = $ligne;
            }
            
            //remplir fichier:
            Storage::disk('users')->put($file, '');
            foreach($tab as $line){
                Storage::disk('users')->append($file,$line);
            }
            return $tab;
    }
}