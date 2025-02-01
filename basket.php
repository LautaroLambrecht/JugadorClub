<?php 

    include_once "deporte.php";

    class Basket extends Deporte {

        private $tiempoJuego;

        public function __construct($nombre = "Basket", $numeroJugadores = 5, $tiempoJuego = 90){
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