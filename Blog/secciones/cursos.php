<?php
// INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Sitio web con PHP');

include_once '../configuraciones/bd.php';

$conexionBD = BD::crearInstancia();

print_r($_POST);

?>