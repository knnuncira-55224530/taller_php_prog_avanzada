<?php
require_once("../model/Acronimo.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Acrónimo</title>

    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>

<div class="container">

    <h1>Generador de Acrónimos</h1>

    <form method="POST">

        <label>Ingrese una frase:</label>

        <input type="text" name="frase" required>

        <button type="submit">Generar</button>

    </form>

    <?php

    if ($_POST) {

        $frase = $_POST['frase'];

        $obj = new Acronimo();

        $resultado = $obj->generar($frase);

        echo "<div class='card'>";
        echo "<h2>Resultado:</h2>";
        echo "<p>$resultado</p>";
        echo "</div>";
    }

    ?>

</div>

</body>
</html>