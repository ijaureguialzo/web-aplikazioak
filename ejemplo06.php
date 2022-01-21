<?php

$datos = [
    'nombre' => 'Ion',
    'apellido' => 'Jaureguialzo',
];

echo $datos['nombre'];
$datos['nombre'] = 'Luis';

var_dump($datos);
