<?php


class Usuario {
    private $id;
    private $nombre;
    private $usuario;
    private $clave;
    private $rango;

    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getNombre() {
        return $this->nombre;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getRango() {
        return $this->rango;
    }



    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setRango($rango) {
        $this->rango = $rango;
    }

   


}
