<?php
class Fibonacci {

    public function fibonacci($n) {

        if (!is_numeric($n) || $n < 0) {
            return "Error: ingrese un número válido";
        }

        $n = intval($n);

        if ($n == 0) return [0];
        if ($n == 1) return [0,1];

        $serie = [0,1];

        for ($i = 2; $i < $n; $i++) {
            $serie[] = $serie[$i-1] + $serie[$i-2];
        }

        return $serie;
    }

    public function factorial($n) {

        // Validación
        if (!is_numeric($n) || $n < 0) {
            return "Error: ingrese un número válido";
        }

        $n = intval($n);

        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact *= $i;
        }

        return $fact;
    }
}