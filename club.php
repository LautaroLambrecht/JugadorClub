<?php 
    class Club {
        private $nombre, $ciudad, $jugadores = [];

        public function __construct($nombre, $ciudad){
            $this->nombre = $nombre;
            $this->ciudad = $ciudad;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setCiudad($ciudad){
            $this->ciudad = $ciudad;
        }

        public function setJugador($jugador){
            $this->jugadores[] = $jugador;
        }

        public function getNombre(){
            echo $this->nombre;
        }

        public function getCiudad(){
            echo $this->ciudad;
        }

        public function getJugadores(){
            for ($i = 0; $i < count($this->jugadores); $i++){
                echo $this->jugadores[$i];
            }
        }
    }
?>