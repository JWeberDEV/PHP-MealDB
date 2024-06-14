<?php

//Define a constatnte que serve para controlar o fluxo da aplicação
define('CONTROL', true);

// Inclusão de arquivos
require 'vendor/autoload.php';
require 'php/apiManager.php';
$routes = require('includes/routes.php');

// Define rota padrão
$route = $_GET['route'] ?? 'home';

if (!in_array($route, $routes)) {
  $route = '404';
}

// https://www.themealdb.com/api.php
// Fluxo de rotas
switch ($route) {
  case 'home':
    require_once 'pages/home.php';
    break;

  case '404':
    require_once 'pages/404.php';
    break;
}