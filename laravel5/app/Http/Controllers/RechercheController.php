<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use Response;

use App\Model\Home;
use App\Model\Tatoueur;
use App\Model\Style;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class RechercheController extends Controller{

  public function autocomplete(){
    	$term = Input::get('term');

    	$results = array();

    	// this will query the users table matching the first name or last name.
    	// modify this accordingly as per your requirements

    	$queries = DB::table('personnes')
    		->where('nom', 'LIKE', '%'.$term.'%')
    		->orWhere('prenom', 'LIKE', '%'.$term.'%')->get();




    	foreach ($queries as $query)
    	{
    	    $results[] = [ 'id' => $query->id, 'value' => $query->nom.' '.$query->prenom ];
    	}
      return Response::json($results);
  }


}
