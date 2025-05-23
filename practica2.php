<?php
$calificacion1=50;
$calificacion2=60;
$calificacion3=70;
$promedio=($calificacion1+$calificacion2+$calificacion3)/3;
echo "El promedio es: $promedio";
 
if($promedio<=69)
{
echo"reprobado";
}
else if($promedio>=70 && $promedio<=95)
{
echo"aprobado";
}
if($promedio>=96)
{
echo"aprobado";
}
?>
