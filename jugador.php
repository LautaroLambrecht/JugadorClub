<?php 

    class Jugador {
        private $nombre, $edad, $posicion, $club;

        public function __construct($nombre = "", $edad = 0, $posicion = 0, $club = ""){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->posicion = $posicion;
            $this->club = $club;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function setPosicion($posicion){
            $this->posicion = $posicion;
        }

        public function setClub($club){
            $this->club = $club;
        }

        public function getNombre(){
            echo $this->nombre;
        }

        public function getEdad(){
            echo $this->edad;
        }

        public function getPosicion(){
            echo $this->posicion;
        }

        public function getClub(){
            echo $this->club;
        }
    }
?>