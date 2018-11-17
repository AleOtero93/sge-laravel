<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Cliente;

abstract class TipoDocumento extends Model
{
	private $id;

	const DNI = 0;
	const LE = 1;
	const CI = 2;
	const LC = 3;

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
	public function clientes(){
    	return $this->hasMany('App\Cliente','tipoDocumento','id');
    }
}
