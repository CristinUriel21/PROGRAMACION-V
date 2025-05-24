<?php

$usuario = 'admin';
$contraseña= 'admin';


$usuario2 = $_POST['usuario'];
$contraseña2 = $_POST['contraseña'];

if ($usuario2 === $usuario && $contraseña2 === $contraseña) 
{
    echo'<h1 style="font-size: 48px; color: green; text-align: center;">¡Ingreso Exitoso!</h1>';
}
else
{
  echo'<h1 style="font-size: 48px; color: green; text-align: center;">Datos Incorrectos :(</h1>';
}
