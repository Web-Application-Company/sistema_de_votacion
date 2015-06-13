<?php


class Coalicion {
    private $id;
    private $nombre;
    private $local;
  
    
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getNombre() {
        return $this->nombre;
    }

    public function getLocalidad() {
        return $this->local;
    }

   

   

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setLocalidad($local) {
        $this->local = $local;
    }

   
    


}
