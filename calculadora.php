<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simple</title>
    <style>
        body {
            background-image: url('imagenes/5.jpg');
            font-family: Arial, sans-serif;
            background:rgb(4, 227, 235);
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .calculator {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="number"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            font-size: 16px;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Calculadora</h2>
        <form method="post">
            <input type="number" name="num1" step="any" placeholder="Número 1" required>
            <input type="number" name="num2" step="any" placeholder="Número 2" required>
            <select name="operacion" required>
                <option value="">Seleccione operación</option>
                <option value="suma">Suma (+)</option>
                <option value="resta">Resta (-)</option>
                <option value="multiplicacion">Multiplicación (×)</option>
                <option value="division">División (÷)</option>
            </select>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operacion = $_POST["operacion"];
            $resultado = "";

            switch ($operacion) {
                case "suma":
                    $resultado = $num1 + $num2;
                    break;
                case "resta":
                    $resultado = $num1 - $num2;
                    break;
                case "multiplicacion":
                    $resultado = $num1 * $num2;
                    break;
                case "division":
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        $resultado = "Error: División por cero";
                    }
                    break;
                default:
                    $resultado = "Operación no válida";
            }

            echo "<div class='result'><strong>Resultado:</strong> $resultado</div>";
        }
        ?>
    </div>
</body>
</html>
