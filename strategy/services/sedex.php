<?php
require_once "shipping/freteStrategy.php";
require_once "shipping/correios.php";

// Concrete Strategy
class Sedex implements FreteStrategy {
    public function calcula(float $peso): float {
        $correios = new Correios();

        return $correios->calculaRemessa("SEDEX", $peso);
    }
}