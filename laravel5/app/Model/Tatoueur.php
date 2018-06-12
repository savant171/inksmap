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
  private $_image;
  private $_ville;

	public function nomComplet(){
		return $this->prenom." ".$this->nom;
	}

}
