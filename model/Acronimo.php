<?php
class Acronimo {

    public function generar($frase) {
        $frase = preg_replace("/[^a-zA-Z\s-]/", "", $frase);
        $palabras = preg_split("/[\s-]+/", $frase);

        $acronimo = "";
        foreach ($palabras as $p) {
            if (!empty($p)) {
                $acronimo .= strtoupper($p[0]);
            }
        }

        return $acronimo;
    }
}