<?php
class Nodo {
    public $valor;
    public $izq;
    public $der;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izq = null;
        $this->der = null;
    }
}

class Arbol {

    public function construir($preorden, $inorden) {
        if (empty($preorden) || empty($inorden)) return null;

        $raiz = $preorden[0];
        $nodo = new Nodo($raiz);

        $indice = array_search($raiz, $inorden);

        $izqIn = array_slice($inorden, 0, $indice);
        $derIn = array_slice($inorden, $indice + 1);

        $izqPre = array_slice($preorden, 1, count($izqIn));
        $derPre = array_slice($preorden, 1 + count($izqIn));

        $nodo->izq = $this->construir($izqPre, $izqIn);
        $nodo->der = $this->construir($derPre, $derIn);

        return $nodo;
    }

    public function mostrar($nodo, $nivel = 0) {
        if ($nodo == null) return "";

        $texto = str_repeat("-", $nivel) . $nodo->valor . "<br>";
        $texto .= $this->mostrar($nodo->izq, $nivel + 1);
        $texto .= $this->mostrar($nodo->der, $nivel + 1);

        return $texto;
    }
}