<?php
    require_once 'personajeold.php';

    $persona = new Personaje('Pepitoo1688', 'Perez16');
    $persona -> guardar();
    echo $persona -> getNombre() . ' se ha guardar correctamente con el id: '. $persona -> getId();
?>