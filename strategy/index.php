<?php
include_once "services/frete.php";
include_once "services/pac.php";
include_once "services/sedex.php";
include_once "services/mercadoEnvio.php";

$sedex = new Sedex();
$mercadoLivre = new MercadoEnvio();

$peso = 3;

$frete = new Frete($sedex);
echo "Sedex: ". $frete->calcula($peso);
echo "\n";

$frete->setServico($mercadoLivre);
echo "Mercado Livre: ". $frete->calcula($peso);
