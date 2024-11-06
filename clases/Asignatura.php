<?php

class Asignatura
{

    private $id;

    private $nombre;

    private $creditos;

    public function __construct($id, $nombre, $creditos)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }


    static function crearAsignaturasDeMuestra()
    {
        $asignaturas = [];

        $asignaturas = [
            new Asignatura(1, "DWES", "7"),
            new Asignatura(2, "DWEC", "6"),
            new Asignatura(3, "DIW", "4"),
            new Asignatura(4, "DAW", "4")
        ];

        return $asignaturas;
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

    public function getId()
    {
        return $this->id;
    }

  
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function __toString() {
        return "Nombre: $this->nombre, Créditos: $this->creditos";
    }
}
