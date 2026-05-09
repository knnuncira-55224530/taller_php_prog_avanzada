```php id="u4q8z2"
<?php
require_once("../model/Estadistica.php");

$resultado = "";

if (isset($_GET['nums'])) {

    $nums = explode(",", $_GET['nums']);

    $obj = new Estadistica();

    $prom = $obj->promedio($nums);

    $media = $obj->media($nums);

    $moda = $obj->moda($nums);

    $resultado = "
        <strong>Promedio:</strong> $prom <br><br>

        <strong>Media:</strong> $media <br><br>

        <strong>Moda:</strong> $moda
    ";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estadística</title>

    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>

<div class="container">

    <h1>Operaciones Estadísticas</h1>

    <div class="card">

        <p>
            <strong>Instrucciones:</strong><br><br>

            Ingrese números separados por comas y sin espacios.
        </p>

        <p>
            <strong>Ejemplo:</strong><br>

            1,2,3,4,5
        </p>

    </div>

    <form method="GET">

        <label>Ingrese los números:</label>

        <input type="text" name="nums" required>

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
