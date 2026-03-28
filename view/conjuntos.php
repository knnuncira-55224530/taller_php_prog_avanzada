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

    $resultado = "Unión: $union <br> Intersección: $inter <br> A-B: $difA <br> B-A: $difB";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h1>Conjuntos</h1>

<p><strong>Instrucciones:</strong><br>
Ingrese los conjuntos separados por comas.<br>
Ejemplo: A = 1,2,3 y B = 2,3,4
</p>

<form method="GET">
    A: <input type="text" name="A"><br>
    B: <input type="text" name="B"><br>
    <button>Calcular</button>
</form>

<p><?php echo $resultado; ?></p>

<a href="index.php">Volver</a>

</body>
</html>