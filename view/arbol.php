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
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h1>Árbol Binario</h1>

<p><strong>Instrucciones:</strong><br>
Ingrese los recorridos separados por comas, sin espacios.<br>
Debe usar los mismos elementos en ambos.<br><br>

Ejemplo:<br>
Preorden: A,B,D,E,C<br>
Inorden: D,B,E,A,C
</p>

<form method="GET">
    Preorden: <input type="text" name="pre"><br>
    Inorden: <input type="text" name="in"><br>
    <button>Construir</button>
</form>

<p><?php echo $resultado; ?></p>

<a href="index.php">Volver</a>

</body>
</html>