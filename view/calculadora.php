<?php
session_start();

require_once("../model/Calculadora.php");

$resultado = "";

if (isset($_GET['a'])) {

    $a = $_GET['a'];
    $b = $_GET['b'];
    $op = $_GET['op'];

    $obj = new Calculadora();

    $resultado = $obj->operar($a, $b, $op);

    $_SESSION['historial'][] = "$a $op $b = $resultado";
}

if (isset($_GET['borrar'])) {

    session_destroy();

    header("Location: calculadora.php");

    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculadora</title>

    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>

<div class="container">

    <h1>Calculadora</h1>

    <div class="card">

        <p>
            Realice operaciones matemáticas básicas.
        </p>

    </div>

    <form method="GET">

        <label>Número 1:</label>

        <input type="text" name="a" placeholder="Ingrese un número" required>

        <label>Número 2:</label>

        <input type="text" name="b" placeholder="Ingrese otro número" required>

        <label>Operación:</label>

        <select name="op">

            <option value="+">Suma (+)</option>

            <option value="-">Resta (-)</option>

            <option value="*">Multiplicación (*)</option>

            <option value="/">División (/)</option>

            <option value="%">Porcentaje (%)</option>

        </select>

        <button type="submit">Calcular</button>

    </form>

    <?php if ($resultado != "") { ?>

        <div class="card">

            <h2>Resultado:</h2>

            <p><?php echo $resultado; ?></p>

        </div>

    <?php } ?>

    <div class="card">

        <h2>Historial</h2>

        <?php

        if (isset($_SESSION['historial'])) {

            foreach ($_SESSION['historial'] as $h) {

                echo "<p>$h</p>";
            }

        } else {

            echo "<p>No hay operaciones realizadas.</p>";
        }

        ?>

    </div>

    <form method="GET">

        <button type="submit" name="borrar">
            Borrar historial
        </button>

    </form>

    <br>

    <a href="index.php">⬅ Volver al menú</a>

</div>

</body>
</html>
```
