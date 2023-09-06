<?php

    $nombre = "Pepito";
    $apellido1 = "Peréz";
    $apellido2 = "Perez";

    $x = 35;

    $nombreCompleto = $nombre. " " .$apellido1;
    $nombreCompleto .= " " .$apellido2;

    echo "<p>Nombre: ".$nombreCompleto. "</p>";

    echo "<p>El número es " .(($x>=50) ? "mayor o igual de 50" : "menor de 50")."</p>";
    //Usamos el operador negación

    if(! ($x == 35))
        echo "<p>La expresión devuelve <b>true</b></p>";
    else
        echo "<p>La expresión devuelve <b>false</b></p>";
    echo"-----------------<br/>";
    echo"Fin de ejemplo";
?>