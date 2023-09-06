<?php
    require_once 'personaje.php';
    $personajes = Personaje::buscarPorId(1);
    if($personajes){
        echo 'El personaje ha sido encontrado';
    }else{
        echo 'El personaje no ha sido encontrado';
    }
?>

