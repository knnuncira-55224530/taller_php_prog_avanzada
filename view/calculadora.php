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
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h1>Calculadora</h1>

<form method="GET">
    <input type="text" name="a" placeholder="Número 1">
    <input type="text" name="b" placeholder="Número 2">

    <select name="op">
        <option value="+">Suma (+)</option>
        <option value="-">Resta (-)</option>
        <option value="*">Multiplicación (*)</option>
        <option value="/">División (/)</option>
        <option value="%">Porcentaje (%)</option>
    </select>

    <button>Calcular</button>
</form>

<p><strong>Resultado:</strong> <?php echo $resultado; ?></p>

<h3>Historial</h3>

<?php
if (isset($_SESSION['historial'])) {
    foreach ($_SESSION['historial'] as $h) {
        echo "<p>$h</p>";
    }
}
?>

<form method="GET">
    <button name="borrar">Borrar historial</button>
</form>

<a href="index.php">Volver</a>

</body>
</html>