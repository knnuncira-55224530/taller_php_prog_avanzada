<?php
require_once("../model/Arbol.php");

$resultado = "";

if (isset($_GET['pre'])) {

    $pre = explode(",", $_GET['pre']);
    $in = explode(",", $_GET['in']);

    $obj = new Arbol();

    $raiz = $obj->construir($pre, $in);

    $resultado = $obj->mostrar($raiz);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Árbol Binario</title>

    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>

<div class="container">

    <h1>Árbol Binario</h1>

    <div class="card">

        <p>
            <strong>Instrucciones:</strong><br><br>

            Ingrese los recorridos separados por comas y sin espacios.<br>

            Debe usar los mismos elementos en ambos recorridos.
        </p>

        <p>
            <strong>Ejemplo:</strong><br>

            Preorden: A,B,D,E,C<br>

            Inorden: D,B,E,A,C
        </p>

    </div>

    <form method="GET">

        <label>Preorden:</label>

        <input type="text" name="pre" required>

        <label>Inorden:</label>

        <input type="text" name="in" required>

        <button type="submit">Construir</button>

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