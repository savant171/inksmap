<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'styles';

	/**
     * The lastname
     *
     * @var string
     */
	private $_style;
  	private $_id;

	public function nomComplet(){
		return $this->style;
	}

}
