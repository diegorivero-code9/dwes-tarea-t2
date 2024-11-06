<?php

abstract class Miembro
{

    protected int $id;

    protected $nombre;

    protected $apellidos;

    protected $email;

    public function __construct($id, $nombre, $apellidos, $email)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

  
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function __toString()
    {
        return __CLASS__ . " " . $this->getId() . " " . $this->getNombre()
            . " " . $this->getApellidos() . " " . $this->getEmail();
    }
}