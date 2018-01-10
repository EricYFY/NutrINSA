<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Storage;
class CaloriesModel extends Model
{


    public function parse($file){
        
        $data = Storage::disk('users')->get($file);
        $tab = array();
        $cal=0;
        $i=0;
        $date;

        foreach(explode("\n", $data) as $line)
        {
            if(!empty($line))
            {
                foreach(explode(":", $line) as $part)
                {
                    if($i == 0) 
                    {
                        $date = $part;
                    }
                    else
                    {
                        $cal = $cal+ intval($part);
                    }
                    $i++;
                }
                $tab[] = array('date' => $date, 'cal' => $cal) ;
                $cal = 0;
            }
            $i=0;
        }
        
        return $tab;
    }




    public function write($file, $ajout){
        
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
                                $ligne = $ligne . ":" . $ajout;
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
                $tab[] = $date . ":" . $ajout;
            }
            
            //remplir fichier:
            Storage::disk('users')->put($file, '');
            foreach($tab as $line){
                Storage::disk('users')->append($file,$line);
            }
            return $tab;
    }
}
