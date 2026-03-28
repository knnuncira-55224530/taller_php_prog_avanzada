<?php
require_once("../model/Acronimo.php");

$resultado = "";

if (isset($_GET['frase'])) {
    $obj = new Acronimo();
    $resultado = $obj->generar($_GET['frase']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h1>Acrónimo</h1>

<form method="GET">
    <input type="text" name="frase" placeholder="Ingrese frase">
    <button>Generar</button>
</form>

<p>Resultado: <?php echo $resultado; ?></p>

<a href="index.php">Volver</a>

</body>
</html>