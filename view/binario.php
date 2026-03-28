<?php
require_once("../model/Binario.php");

$resultado = "";

if (isset($_GET['num'])) {
    $obj = new Binario();
    $resultado = $obj->convertir($_GET['num']);
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h1>Binario</h1>

<form method="GET">
    Número: <input type="number" name="num">
    <button>Convertir</button>
</form>

<p>Resultado: <?php echo $resultado; ?></p>

<a href="index.php">Volver</a>

</body>
</html>