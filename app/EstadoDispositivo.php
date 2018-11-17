<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Dispositivo;

abstract class EstadoDispositivo extends Model
{
	private $id;

	const APAGADO = 0;
	const ENCENDIDO = 1;

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /*
    *
    * Declaring the Foreign Keys that will be used later
    *
	*/
	public function dispositivos(){
    	return $this->hasMany('App\Dispositivo','estado','id');
    }
}
