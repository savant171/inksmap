<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Home;
use App\Model\Tatoueur;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller{

    public function indexSite(){

        $tatoueurs = Tatoueur::all();
        return view('front-end/homepage')->with('listTatoueur', $tatoueurs);

    }



}
