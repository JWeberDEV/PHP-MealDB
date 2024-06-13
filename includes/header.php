<?php 
defined('CONTROL') or die ('Acesso negado');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="icon" type="image/png" href="imgs/meal-icon.png"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rest API The Meal DB</title>
  <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg " style="background-color: #1d4b1f;">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.themealdb.com/">
      <img src="imgs/meal-icon.png" alt="Yakidon" width="50" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#"><strong>Home</strong></a>
        </li>
      </ul>
    </div>
  </div>
</nav>