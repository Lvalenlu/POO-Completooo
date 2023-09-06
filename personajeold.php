<?php

    require_once 'conexion.php';
    class Personaje{
        private $id;
        private $nombre;
        private $apellido;
        const TABLA = 'personaje';

        public function getId(){
            return $this -> id;
        }
        public function getNombre(){
            return $this -> nombre;
        }
        public function getApellido(){
            return $this -> apellido;
        }
        public function setId(){
            return $this -> id = $id;
        }
        public function setNombre(){
            return $this -> nombre = $nombre;
        }
        public function setApellido(){
            return $this -> apellido = $apellido;
        }
        public function __construct($nombre, $apellido, $id = null) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->id = $id;
        }

        public function guardar(){
            $conexion = new Conexion();
            {
                $consulta = $conexion -> prepare('INSERT INTO' . self::TABLA . '(nombre, apellido) VALUES(:nombre, :apellido)');
                $consulta -> bindParam(':nombre', $this -> nombre);
                $consulta -> bindParam(':apellido', $this -> apellido);
                $consulta -> execute();
                $this -> id = $conexion -> lastInsert();
            }
            $conexion = null;
        }

    }

?>