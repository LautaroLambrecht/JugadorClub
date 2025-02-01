<?php 

    class Deporte {
        protected $nombre, $numeroJugadores;

        public function __construct($nombre, $numeroJugadores){
            $this->nombre = $nombre;
            $this->numeroJugadores = $numeroJugadores;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setNumeroJugadores($numeroJugadores){
            $this->numeroJugadores = $numeroJugadores;
        }

        public function getNombre(){
            echo $this->nombre;
        }

        public function getNumeroJugadores(){
            echo $this->numeroJugadores;
        }

        public function tipoBalon(){
            echo "Balon generico";
        }
    }
?>