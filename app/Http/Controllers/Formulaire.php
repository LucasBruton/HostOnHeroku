<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormulaireModel;

class Formulaire extends Controller
{
    public function index() {
    	$request=request()->post();
    	if(!is_null($request) {
    		$data=FormulaireModel::getFormulaires();
    		return view('resultats_formulaire',['data'=>$data,'request'=>$request]);
    	}

    }
}

