<?php
require_once("../model/Estadistica.php");

$resultado = "";

if (isset($_GET['nums'])) {
    $nums = explode(",", $_GET['nums']);
    $obj = new Estadistica();

    $prom = $obj->promedio($nums);
    $media = $obj->media($nums);
    $moda = $obj->moda($nums);

    $resultado = "Promedio: $prom | Media: $media | Moda: $moda";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h1>Estadística</h1>

<p><strong>Instrucciones:</strong><br>
Ingrese números separados por comas.<br>
Ejemplo: 1,2,3,4
</p>

<form method="GET">
    <input type="text" name="nums">
    <button>Calcular</button>
</form>

<p><?php echo $resultado; ?></p>

<a href="index.php">Volver</a>

</body>
</html>