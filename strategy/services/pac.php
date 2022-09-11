<?php
require_once "shipping/freteStrategy.php";
require_once "shipping/correios.php";

// Concrete Strategy
class Pac implements FreteStrategy {
    function calcula(float $peso): float {
        $correios = new Correios();

        return $correios->calculaRemessa("PAC", $peso);
    }
}