<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\calculatriceModel;
use App\CaloriesModel;
use Auth;

class calculatriceController extends Controller
{
    //
    
    public function post(){
        
        $caloEntree=0;
        $caloDessert=0;
        $caloPlats=0;
        
        $nomEntree = $_POST['Entree'];
        $nomPlats = $_POST['Plats'];
        $nomDessert = $_POST['Dessert'];
        
        
    
        if ($nomEntree != "NULL"){
            $entree = calculatriceModel::calorie('Entrees',$nomEntree);
            foreach($entree as $caloE){
                $caloEntree = $caloE->Calories;
            }
        }
        else{
            $caloEntree = 0;
        }
            
        if($nomPlats != "NULL"){
            $plats = calculatriceModel::calorie('Plats',$nomPlats);
            foreach($plats as $caloP){
                $caloPlats = $caloP->Calories;
            }
        }
        else{
            $caloPlats =0;
        }
            
        if ($nomDessert != "NULL"){
            $dessert = calculatriceModel::calorie('Desserts',$nomDessert);
            foreach($dessert as $caloD){
                $caloDessert = $caloD->Calories;
            }
        }   
        else{
            $caloDessert = 0;
        }
        
        
        
        $total = $caloEntree+$caloPlats+$caloDessert;
        $calories = \Lava::DataTable();
        $Chart = \Lava::LineChart('Calories', $calories, [
                        'title' => 'Suivi de vos KiloCalories',
                        'titleTextStyle' => [
                            'color' => '#eb6b2c',
                            'fontSize' => 24
                        ],
                        'backgroundColor' => 'white',
                        'lineWidth' => 4
                            
            ]);
        if (Auth::check()){
            $user = Auth::user();
            $foo = new CaloriesModel();
            $foo->write($user['email'], strval($total));
            
            $tab = array();
            $tab = $foo->parse($user['email']);

            $calories->addDateColumn('Date')
                    ->addNumberColumn('KiloCalories');
            foreach($tab as $table) {
                $calories->addRow([$table['date'],$table['cal']]);
            }
        
            
            }
        
        
        return view("/calories")->with('Calorie',$total);
        
    
    
    }
}