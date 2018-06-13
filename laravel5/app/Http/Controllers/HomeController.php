<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Home;
use App\Model\Tatoueur;
use App\Model\Style;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller{

    public function indexSite(){

        $tatoueurs = Tatoueur::all();

        // Tout les style du tatoueur 1
        $tatoueur = Tatoueur::find(3);
        $tatoueur->styles();



        return view('front-end/homepage')->with('listTatoueur', $tatoueurs);

    }




}
