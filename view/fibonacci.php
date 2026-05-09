```php id="f8n2k4"
<?php
require_once("../model/Fibonacci.php");

$resultado = "";

if (isset($_GET['num'])) {

    $num = $_GET['num'];

    $tipo = $_GET['tipo'];

    $obj = new Fibonacci();

    if ($tipo == "fibo") {

        $res = $obj->fibonacci($num);

        if (is_array($res)) {

            $resultado = implode(", ", $res);

        } else {

            $resultado = $res;
        }

    } else {

        $resultado = $obj->factorial($num);
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fibonacci y Factorial</title>

    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>

<div class="container">

    <h1>Fibonacci y Factorial</h1>

    <div class="card">

        <p>
            <strong>Instrucciones:</strong><br><br>

            Ingrese un número entero positivo.
        </p>

        <p>
            Puede calcular la serie Fibonacci o el factorial.
        </p>

    </div>

    <form method="GET">

        <label>Número:</label>

        <input type="number" name="num" required>

        <label>Operación:</label>

        <select name="tipo">

            <option value="fibo">Fibonacci</option>

            <option value="fact">Factorial</option>

        </select>

        <button type="submit">Calcular</button>

    </form>

    <?php if ($resultado != "") { ?>

        <div class="card">

            <h2>Resultado</h2>

            <p><?php echo $resultado; ?></p>

        </div>

    <?php } ?>

    <br>

    <a href="index.php">⬅ Volver al menú</a>

</div>

</body>
</html>
```
