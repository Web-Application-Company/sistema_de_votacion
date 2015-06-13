<?php


class Candidato {

    private $dui;
    private $apellido;
    private $nombre;
    private $depto;
    private $muni;
    private $tipo;
    private $candidato_a;

    
    
        public function getDui() {
        return $this->dui;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getNombre() {
        return $this->nombre;
    }


    public function getDepto() {
        return $this->depto;
    }

    public function getMunicipio() {
        return $this->muni;
    }

    public function getTipo() {
        return $this->tipo;
    }
     public function getCandidato_a() {
        return $this->candidato_a;
    }
//* set 

    public function setDui($dui) {
        $this->dui = $dui;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

  
    public function setDepto($depto) {
        $this->depto = $depto;
    }
   	
   	public function setMunicipio($muni) {
        $this->muni = $muni;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }


    public function setCandidato_a($candidato_a) {
        $this->candidato_a = $candidato_a;
    }

}
