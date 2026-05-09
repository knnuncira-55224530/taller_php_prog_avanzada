<?php
require_once("../model/Binario.php");

$resultado = "";

if (isset($_GET['num'])) {

    $obj = new Binario();

    $resultado = $obj->convertir($_GET['num']);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Conversor Binario</title>

    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>

<div class="container">

    <h1>Conversor a Binario</h1>

    <div class="card">

        <p>
            Ingrese un número decimal para convertirlo a binario.
        </p>

    </div>

    <form method="GET">

        <label>Número:</label>

        <input type="number" name="num" required>

        <button type="submit">Convertir</button>

    </form>

    <?php if ($resultado != "") { ?>

        <div class="card">

            <h2>Resultado:</h2>

            <p><?php echo $resultado; ?></p>

        </div>

    <?php } ?>

    <br>

    <a href="index.php">⬅ Volver al menú</a>

</div>

</body>
</html>
```
