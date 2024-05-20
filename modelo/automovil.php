<?php

    class Automovil{ //con mayusculas
        
        //Atributos
        private $placa;
        private $color;
        private $marca;
        
        //Constructor
        public function _construct($placa, $color, $marca){
            $this -> placa = $placa;
            $this -> color = $color;
            $this -> marca = $marca;
        }
        //métodos
        //Placa
        //Set
        public function setPlaca($placa){
            $this -> placa = $placa;
        }
        
        //get
        public function getPlaca(){
            return $this -> placa;
        }
        
        //color
        //Set
        public function setColor($color){
            $this -> color = $color;
        }
        
        //get
        public function getColor(){
            return $this -> color;
        }
        
        //marca
        //Set
        public function setMarca($marca){
            $this -> marca = $marca;
        }
        
        //get
        public function getMarca(){
            return $this -> marca;
        }
    }          
     

?>
