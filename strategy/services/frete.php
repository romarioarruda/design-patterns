<?php
require_once "shipping/freteStrategy.php";

class Frete {
    private $servico;

    public function __construct (FreteStrategy $servico) {
        $this->servico = $servico;
    }

    public function setServico (FreteStrategy $servico): void {
        $this->servico = $servico;
    }

    public function calcula(float $peso): float {
        return $this->servico->calcula($peso);
    }
}
