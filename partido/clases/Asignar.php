<?php


class Asignar{
    private $id;
    private $id_part;
    private $id_coali;
    
    
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getId_part() {
        return $this->id_part;
    }

    public function getId_coali() {
        return $this->id_coali;
    }

    
   

    public function setId_part($id_part) {
        $this->id_part = $id_part;
    }

    public function setId_coali($id_coali) {
        $this->id_coali = $id_coali;
    }
}
