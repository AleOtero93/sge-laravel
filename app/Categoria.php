<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Cliente;

class Categoria extends Model
{
    private $id;
    private $codigo;
    private $consumoMensualMinimo;
    private $consumoMensualMaximo;
    private $cargoFijo;
    private $cargoVariable;



    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of codigo.
     *
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Sets the value of codigo.
     *
     * @param mixed $codigo the codigo
     *
     * @return self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Gets the value of consumoMensualMinimo.
     *
     * @return mixed
     */
    public function getConsumoMensualMinimo()
    {
        return $this->consumoMensualMinimo;
    }

    /**
     * Sets the value of consumoMensualMinimo.
     *
     * @param mixed $consumoMensualMinimo the consumo mensual minimo
     *
     * @return self
     */
    public function setConsumoMensualMinimo($consumoMensualMinimo)
    {
        $this->consumoMensualMinimo = $consumoMensualMinimo;

        return $this;
    }

    /**
     * Gets the value of consumoMensualMaximo.
     *
     * @return mixed
     */
    public function getConsumoMensualMaximo()
    {
        return $this->consumoMensualMaximo;
    }

    /**
     * Sets the value of consumoMensualMaximo.
     *
     * @param mixed $consumoMensualMaximo the consumo mensual maximo
     *
     * @return self
     */
    public function setConsumoMensualMaximo($consumoMensualMaximo)
    {
        $this->consumoMensualMaximo = $consumoMensualMaximo;

        return $this;
    }

    /**
     * Gets the value of cargoFijo.
     *
     * @return mixed
     */
    public function getCargoFijo()
    {
        return $this->cargoFijo;
    }

    /**
     * Sets the value of cargoFijo.
     *
     * @param mixed $cargoFijo the cargo fijo
     *
     * @return self
     */
    public function setCargoFijo($cargoFijo)
    {
        $this->cargoFijo = $cargoFijo;

        return $this;
    }

    /**
     * Gets the value of cargoVariable.
     *
     * @return mixed
     */
    public function getCargoVariable()
    {
        return $this->cargoVariable;
    }

    /**
     * Sets the value of cargoVariable.
     *
     * @param mixed $cargoVariable the cargo variable
     *
     * @return self
     */
    public function setCargoVariable($cargoVariable)
    {
        $this->cargoVariable = $cargoVariable;

        return $this;
    }

    /*
    *
    * Declaring the Foreign Keys that will be used later
    *
	*/
	public function clientes(){
    	return $this->hasMany('App\Cliente','categoria','id');
    }
}
