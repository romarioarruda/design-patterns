<?php
include_once "services/pac.php";
include_once "services/sedex.php";
include_once "services/mercadoEnvio.php";

$peso = 3;
$servico = 'mercadolivre';

if ($servico == 'sedex') {
    $sedex = new Sedex();
    $frete = $sedex->calcula($peso);
} else if($servico == 'pac') {
    $pac = new Pac();
    $frete = $pac->calcula($peso);
} else if($servico == 'mercadolivre') {
    $mercadoLivre = new MercadoEnvio();
    $frete = $mercadoLivre->calcula($peso);
}

echo "Valor do frete: ". $frete;
