<?php


class ciudadano {
    private $id;
    private $dui;
    private $nombre;
    private $apellino;
    private $fecha;
    private $genero;
    private $dir;
    private $depto;
    private $muni;
    
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getDUI() {
        return $this->dui;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getGenero() {
        return $this->genero;
    }



     public function getDir() {
        return $this->dir;
    }

       public function getDepto() {
        return $this->depto;
    }

       public function getMuni() {
        return $this->muni;
    }

   
    public function setDUI($dui) {
        $this->dui = $dui;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }


    public function setDir($dir) {
        $this->dir = $dir;
    }

    public function setDepto($depto) {
        $this->depto = $depto;
    }

    public function setMuni($muni) {
        $this->muni = $muni;
    }
   

}
