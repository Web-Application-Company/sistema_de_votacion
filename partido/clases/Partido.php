<?php


class partido {
    private $id;
    private $partido;
    private $dui;
    private $nombre;
    private $apellido;
 
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getPartido() {
        return $this->partido;
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

    

    public function setPartido($partido) {
        $this->partido = $partido;
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

   



}
