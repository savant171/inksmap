<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tatoueur extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personnes';

	/**
     * The lastname
     *
     * @var string
     */
	private $_nom;

	private $_prenom;
	private $_adresse;

	public function nomComplet(){
		return $this->prenom." ".$this->nom;
	}

}
