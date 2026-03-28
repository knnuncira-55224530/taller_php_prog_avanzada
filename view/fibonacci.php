<?php
require_once("../model/Fibonacci.php");

$resultado = "";

if (isset($_GET['num'])) {

    $num = $_GET['num'];
    $tipo = $_GET['tipo'];

    $obj = new Fibonacci();

    if ($tipo == "fibo") {
        $res = $obj->fibonacci($num);

        if (is_array($res)) {
            $resultado = implode(", ", $res);
        } else {
            $resultado = $res;
        }

    } else {
        $resultado = $obj->factorial($num);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fibonacci / Factorial</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h1>Fibonacci / Factorial</h1>

<p><strong>Instrucciones:</strong><br>
Ingrese un número entero positivo.
</p>

<form method="GET">
    Número: <input type="text" name="num"><br>

    <select name="tipo">
        <option value="fibo">Fibonacci</option>
        <option value="fact">Factorial</option>
    </select>

    <button>Calcular</button>
</form>

<p><strong>Resultado:</strong> <?php echo $resultado; ?></p>

<a href="index.php">Volver</a>

</body>
</html>