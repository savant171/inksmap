<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Tatoueur;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TatoueurController extends Controller{

    public function tatoueurList(){
		// Get tatoueurs list
		$tatoueurs = Tatoueur::all();
        return view('front-end/tatoueur/list')->with('listTatoueur', $tatoueurs);
    }

	public function tatoueurShow($n){
		// Get tatoueur
		$tatoueur = Tatoueur::find($n);
		$tatoueur = new Tatoueur;
		$tatoueur->nom = "Hug";
		$tatoueur->prenom = "Bastien";
		$tatoueur->adresse = "JJJ";
        return view('front-end/tatoueur/show')->with('numero', $n)->with('tatoueur', $tatoueur);
    }

	public function tatoueurAdd(){

        return view('back-end/add-tatoo');
    }

	public function postTatoueurAdd(){

        $personne = new Tatoueur;
		$personne->nom=request('nom');
		$personne->prenom=request('prenom');

		$personne->save();

		 return redirect('tatoueur');
    }
}
