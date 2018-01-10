<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use Storage;
use Auth;
use App\CaloriesModel;


class chartsController extends Controller
{
    public function get() {
    
    if(Auth::check()){
        $user = Auth::user();
        if(! Storage::disk("users")->exists($user['email'])){
            return redirect('/commencer');
        }
        $parsage = new CaloriesModel;
        $tab = array();
        $tab = $parsage->parse($user['email']);

        $calories = \Lava::DataTable();
        $calories->addDateColumn('Date')
                ->addNumberColumn('Mon suivi en KiloCalories')
                ->addNumberColumn('Moyenne Nationale Homme')
                ->addNumberColumn('Moyenne Nationale Femme');
        foreach($tab as $table) {
            $calories->addRow([$table['date'],$table['cal'], 2800, 2200]);
        }
        
        $Chart = \Lava::LineChart('Calories', $calories, [
                        'title' => 'Suivi de vos KiloCalories',
                        'titleTextStyle' => [
                            'color' => '#eb6b2c',
                            'fontSize' => 24
                        ],
                        'backgroundColor' => 'white',
                        'lineWidth' => 4,
                        'titlePosition' => 'none'
                            
        ]);
                  
        return view('suivie');
    }
    else{
        return redirect('/login');
    
    }
    
    }
}

