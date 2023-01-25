<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index(){
        $dbArray = Train::all();
        // prendere solo i treni che partono durante la giornata
        //  $trains con il metodo statico ::whereDate e inserisco da tabella il `departure_time` con la data 
        // ed eseguo il ->get()
        return view(`index`, [
            "trainArray" => $dbArray
        ]);
    }
    function train(){
        $dbArray = new Train();
        $dbArray->save();
    }
}
