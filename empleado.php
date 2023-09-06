<?php
    class Empleado{
        private $first_name;
        private $last_name;
        private $age;
        public function __construct($first_name, $lastname, $edad){
            $this -> first_name = $first_name;//Acceder a esta variable, ya que es privada
            $this -> last_name = $last_name;
            $this -> age = $age;
        }
        public function getFirstName(){
            return $this -> first_name;
        }
        public function getLastName(){
            return $this -> last_name;
        }
        public function getAge(){
            return $this -> age;
        }
    }

?>