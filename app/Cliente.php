<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\TipoDocumento;
use App\Categoria;
use App\Dispositivo;

class Cliente extends Usuario
{
    private $tipoDocumento;
    private $numeroDNI;
    private $fechaAlta;
    private $categoria;
    private $dispositivos;



    /**
     * Gets the value of tipoDNI.
     *
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Sets the value of tipoDNI.
     *
     * @param mixed $tipoDNI the tipo d n i
     *
     * @return self
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Gets the value of numeroDNI.
     *
     * @return mixed
     */
    public function getNumeroDNI()
    {
        return $this->numeroDNI;
    }

    /**
     * Sets the value of numeroDNI.
     *
     * @param mixed $numeroDNI the numero d n i
     *
     * @return self
     */
    public function setNumeroDNI($numeroDNI)
    {
        $this->numeroDNI = $numeroDNI;

        return $this;
    }

    /**
     * Gets the value of fechaAlta.
     *
     * @return mixed
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Sets the value of fechaAlta.
     *
     * @param mixed $fechaAlta the fecha alta
     *
     * @return self
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Gets the value of categoria.
     *
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Sets the value of categoria.
     *
     * @param mixed $categoria the categoria
     *
     * @return self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Gets the value of dispositivos.
     *
     * @return mixed
     */
    public function getDispositivos()
    {
        return $this->dispositivos;
    }

    /**
     * Sets the value of dispositivos.
     *
     * @param mixed $dispositivos the dispositivos
     *
     * @return self
     */
    public function setDispositivos($dispositivos)
    {
        $this->dispositivos = $dispositivos;

        return $this;
    }

    /*
    *
    * Declaring the Foreign Keys that will be used later
    *
	*/
    public function tipoDocumento(){
    	return $this->belongsTo('App\TipoDocumento','id','tipoDocumento');
    }

    public function categoria(){
    	return $this->belongsTo('App\Categoria','id','categoria');
    }

    public function dispositivos(){
    	return $this->hasMany('App\Dispositivo','cliente','id');
    }


    /*
    *
    * Managing the Dispositivos list
    *
    */
    public function addDispositivo($dispositivo){
    	array_push($this->dispositivos, $dispositivo);
    }

    public function removeDispositivo($dispositivo){
    	$dispositivos = $this->dispositivos();
    	if (($key = array_search($dispositivo, $dispositivos)) !== false) {
		    unset($this->dispositivos[$key]);
		}
    }


    public function dispositivoEncendido($dispositivo){
    	return $dispositivo->encendido();
    }

    public function cantidadDispositivosEstado($estado){
    	$dispositivos = $this->dispositivos();
    	$cantidad = 0;
    	foreach($dispositivos as $d){
    		if($d->$estado()){
    			$cantidad++;
    		}
    	}

    	return $cantidad;
    }

    public function cantidadDispositivos(){
    	return count($this->dispositivos);
    }
}
