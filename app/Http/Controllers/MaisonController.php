<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MaisonModel;

use Auth;
use Storage;
use App\CaloriesModel;
use App\SauvegardeModel;

class MaisonController extends Controller
{
    public function get(){
     $ingredients = \DB::select('select Nom from Ingredients');
     return view('maison')->with('ingredients',$ingredients);
    }
    
    
    public function post(){ 
        $tab=array();
        $nom = $_POST['ingredient']['nom'];
        $quantite = $_POST['ingredient']['quantite'];
        $unite = $_POST['ingredient']['unite'];
        $i = 0;
        foreach($nom as $caca){
            $tab[] = array('Nom' => $nom[$i], 'quantite' => $quantite[$i], 'unite' => $unite[$i]) ;
            $i++;
        }
        
        $total = MaisonModel::calcul($tab);
        
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
            
            $merde =SauvegardeModel::writeIngredients($user['email'].'.repas', $tab);
            
            $tab = array();
            $tab = $foo->parse($user['email']);

            $calories->addDateColumn('Date')
                    ->addNumberColumn('KiloCalories')
                    ->addNumberColumn('Moyenne Homme');
            foreach($tab as $table) {
                    $calories->addRow([$table['date'],$table['cal'], 3000]);
            }
        
            
            }
        
        
        return view("/calories")->with('Calorie',$total);
 
    }
}
