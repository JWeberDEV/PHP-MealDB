<?php
//Criação da configurção que torna possível extrair as informações de um país específico atravéz de um parâmetro que será passádo na chamada da função
$absolutePath = __DIR__ . '/../vendor/autoload.php';
require_once $absolutePath;

use \GuzzleHttp\Client;

$client = new Client(
  [
    'base_uri' => 'http://www.themealdb.com/api/json/v1/1/'
  ]
);

?>