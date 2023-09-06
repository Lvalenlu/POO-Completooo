<?php
    require_once 'personajeold.php';
    $personajes = Personaje::recuperarTodos();
?>
<html>
<head></head>
<body></body>
    <ul></ul>
    <?php foreach($personajes as $items);?>
    <li><?php echo $item['id'].' - '. $item['nombre'].' - '. $item['apellido']; ?> </li>
    <?php endforeach; ?>
</body>
</html>
