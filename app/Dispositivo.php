<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Cliente;
use App\EstadoDispositivo;

class Dispositivo extends Model
{
    private $id;
    private $nombre;
    private $kwHora;
    private $estado;
    private $cliente;


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
     * Gets the value of nombre.
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Sets the value of nombre.
     *
     * @param mixed $nombre the nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Gets the value of kwHora.
     *
     * @return mixed
     */
    public function getKwHora()
    {
        return $this->kwHora;
    }

    /**
     * Sets the value of kwHora.
     *
     * @param mixed $kwHora the kw hora
     *
     * @return self
     */
    public function setKwHora($kwHora)
    {
        $this->kwHora = $kwHora;

        return $this;
    }

    /**
     * Gets the value of estado.
     *
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Sets the value of estado.
     *
     * @param mixed $estado the estado
     *
     * @return self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Gets the value of cliente.
     *
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Sets the value of cliente.
     *
     * @param mixed $cliente the cliente
     *
     * @return self
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /*
    *
    * Declaring the Foreign Keys that will be used later
    *
	*/
	public function estadoDispositivo(){
    	return $this->belongsTo('App\EstadoDispositivo','id','estado');
    }

    public function cliente(){
    	return $this->belongsTo('App\Cliente','id','cliente');
    }

    public function encendido(){
    	return $this->estado==EstadoDispositivo::ENCENDIDO;
    }

    public function apagado(){
    	return $this->estado==EstadoDispositivo::APAGADO;
    }
}