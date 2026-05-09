```php id="t9v3q1"
<?php
require_once("../model/Conjuntos.php");

$resultado = "";

if (isset($_GET['A'])) {

    $A = explode(",", $_GET['A']);
    $B = explode(",", $_GET['B']);

    $obj = new Conjuntos();

    $union = implode(",", $obj->union($A, $B));

    $inter = implode(",", $obj->interseccion($A, $B));

    $difA = implode(",", $obj->diferencia($A, $B));

    $difB = implode(",", $obj->diferencia($B, $A));

    $resultado = "
        <strong>Unión:</strong> $union <br><br>

        <strong>Intersección:</strong> $inter <br><br>

        <strong>A - B:</strong> $difA <br><br>

        <strong>B - A:</strong> $difB
    ";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Operaciones con Conjuntos</title>

    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>

<div class="container">

    <h1>Operaciones con Conjuntos</h1>

    <div class="card">

        <p>
            <strong>Instrucciones:</strong><br><br>

            Ingrese los elementos separados por comas y sin espacios.
        </p>

        <p>
            <strong>Ejemplo:</strong><br>

            A = 1,2,3<br>

            B = 2,3,4
        </p>

    </div>

    <form method="GET">

        <label>Conjunto A:</label>

        <input type="text" name="A" required>

        <label>Conjunto B:</label>

        <input type="text" name="B" required>

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
