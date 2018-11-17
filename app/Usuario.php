<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class Usuario extends Model
{
    private $id;
    private $nombre;
    private $apellido;
    private $domicilio;
    private $usuario;
    private $contrasena;

    

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
     * Gets the value of apellido.
     *
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Sets the value of apellido.
     *
     * @param mixed $apellido the apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Gets the value of domicilio.
     *
     * @return mixed
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Sets the value of domicilio.
     *
     * @param mixed $domicilio the domicilio
     *
     * @return self
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Gets the value of usuario.
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Sets the value of usuario.
     *
     * @param mixed $usuario the usuario
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Gets the value of contrasena.
     *
     * @return mixed
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Sets the value of contrasena.
     *
     * @param mixed $contrasena the contrasena
     *
     * @return self
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }
}
