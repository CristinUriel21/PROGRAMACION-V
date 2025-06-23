<!DOCTYPE html>
<html lang="es"> <
<head>
    <link rel="stylesheet" href="examen.css"> <!-- Enlaza una hoja de estilo externa llamada examen.css -->
    <meta charset="UTF-8"> 
    <title>Evaluación del Alumno</title> <
</head>
<body>

<h2>Formulario de Evaluación</h2> 

<form method="POST"> <!-- Inicio del formulario, enviará datos mediante el método POST -->
    <label>Nombre del alumno:</label><br>
    <input type="text" name="nombre" required><br><br> 

    <label>Género:</label><br>
    <input type="radio" name="genero" value="Masculino" required> Masculino 
    <input type="radio" name="genero" value="Femenino" required> Femenino<br><br> 

    <label>Materia:</label>
        <select name="materia" required> <!-- Menú desplegable para seleccionar la materia -->
            <option value="Programacion">Programacion</option>
            <option value="calculo">Calculo Integral</option>
            <option value="Electronica">Electronica</option>
        </select><br><br>

    <label>Calificación 1:</label><br>
    <input type="number" name="c1" min="0" max="100"><br><br> <!-- Campo numérico entre 0 y 10 -->

    <label>Calificación 2:</label><br>
    <input type="number" name="c2" min="0" max="100"><br><br> 

    <label>Calificación 3:</label><br>
    <input type="number" name="c3" min="0" max="100"><br><br> 

    <input type="submit" value="Evaluar">
</form>

<?php
// Si el formulario fue enviado mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Se obtienen los valores del formulario
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $materia = $_POST['materia'];

        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3= $_POST['c3'];
        $promedio=($c1+$c2+$c3)/3; // Se calcula el promedio de las tres calificaciones

    // Se evalúa el promedio para asignar un estatus
    if ($promedio < 69) {
            $estatus = "Reprobado";
        } elseif ($promedio >= 70 && $promedio <= 95) {
            $estatus = "Ordinario";
        } elseif ($promedio > 96) {
            $estatus = "Exento";
        } else {
            $estatus = "Indefinido"; // Caso por defecto (por si el promedio no encaja en ninguna condición)
        }

    // Se muestra el resultado al usuario
    echo "<h3>Resultado:</h3>";
    echo "Nombre: $nombre<br>";
    echo "Género: $genero<br>";
    echo "Materia: $materia<br>";
    echo "Calificaciones: $c1,$c2,$c3<br>";
    echo "Promedio final: " . number_format($promedio, 2) . "<br>"; // Se muestra con 2 decimales
    echo "Estatus: $estatus";
}
?>

</body>
</html>
