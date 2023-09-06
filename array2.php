<?php
    $aDias = array ("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

    $contador;

    for($contador = 0; $contador < 7; $contador++){
        echo "El valor de la posici{on [" .$contador. "] es [" .$aDias[$contador]. "] </br>";
    }
?>
