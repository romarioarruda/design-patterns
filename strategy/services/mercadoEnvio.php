<?php
require_once "shipping/freteStrategy.php";
require_once "shipping/mercadoLivre.php";

class MercadoEnvio implements FreteStrategy {
    public function calcula(float $peso): float {
        $mercadoenvio = new MercadoLivre();

        return $mercadoenvio->calcula($peso);        
    }
}