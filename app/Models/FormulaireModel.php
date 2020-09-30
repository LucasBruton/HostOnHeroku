<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FormulaireModel extends Model {

    public static function getFormulaires(){
        $formulaires = DB::table('Formulaire')->get();

        return $formulaires;
    }

   	public static function insertFormulaire($request) {
	DB::table('Formulaire')->insert(['Nom' => $request["nom"], 'Email' => $request["email"], 'Entreprise' => $request["entreprise"],'Message' => $request["message"]]); 		
   	}
}
