<?php

require_once "vendor/autoload.php";

use Livecode\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddresFromZipcode('86705560');

print_r($resultado);