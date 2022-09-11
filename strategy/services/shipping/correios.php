<?php 

class Correios {

    public function calculaRemessa(string $servico, float $peso): float {
        $servicos = [
            "PAC" => $peso * 10,
            "SEDEX" => $peso * 30
        ];

        return $servicos[$servico] ?? 0;

    }

}
