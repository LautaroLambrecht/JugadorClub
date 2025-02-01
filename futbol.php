<?php 

    include_once "deporte.php";

    class Futbol extends Deporte {

        private $tiempoJuego;

        public function __construct($nombre = "Futbol", $numeroJugadores = 11, $tiempoJuego = 90){
            parent::__construct($nombre, $numeroJugadores);
            $this->tiempoJuego = $tiempoJuego;
        }

        public function getNombre(){
            parent::getNombre();
        }

        public function getNumeroJugadores(){
            parent::getNumeroJugadores();
        }

        public function getTiempoJuego(){
            echo $this->tiempoJuego;
        }
    }

?>