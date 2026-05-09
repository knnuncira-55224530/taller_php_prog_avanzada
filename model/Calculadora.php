<?php
class Calculadora {

    public function operar($a, $b, $op) {

        // Validar q sean numeros
        if (!is_numeric($a) || !is_numeric($b)) {
            return "Error: ingrese números válidos";
        }

        switch($op) {
            case '+': return $a + $b;
            case '-': return $a - $b;
            case '*': return $a * $b;
            case '/': return $b != 0 ? $a / $b : "Error: división por cero";
            case '%': return ($a * $b) / 100;
            default: return "Operación inválida";
        }
    }
}