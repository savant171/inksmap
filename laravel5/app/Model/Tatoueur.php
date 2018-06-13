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



  // private $_styles;
  //
  // public function __construct(){
  //   $_styles = $this->belongsToMany('App\Model\Style', 'personnes-styles',
  //     'id-personnes', 'id-styles');
  // }

	public function nomComplet(){
		return $this->prenom." ".$this->nom;
	}

  public function styles()
  {
      return $this->belongsToMany('App\Model\Style', 'personnes-styles',
        'id-personnes', 'id-styles');
  }
}
