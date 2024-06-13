<?php 
defined('CONTROL') or die ('Acesso negado');
require('includes/header.php');
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1 class="title">Escolha um Prato</h1>
    </div>
    <div class="card col-md-12  p-2" style="background-color: #1d4b1f;">
      <div class="row">
        <div class="col-md-2">
          <label for="method" class="form-label text-white">Forma de Busca</label>
          <select id="method" class="form-control dropdown-toggle btn btn-success" data-toggle="dropdown" onchange="searchModules()">
            <option value="writed">Campo de Busca</option>
            <option value="alpha">Alfabética</option>
          </select>
        </div>
        <div class="col-md-2 filter">
          <label for="aplphabet" class="form-label text-white">Filtro Alfabético</label>
          <select id="aplphabet" class="form-control dropdown-toggle btn btn-success" data-toggle="dropdown">
          <option value="">SELECIONE</option>
            <?php
              foreach (range('A', 'Z') as $letter) {
                echo '<option value="' . $letter . '">' . $letter . '</option>';
              }
              echo '</select>';
            ?>
          </select>
        </div>
        <div class="col-md-3 writed">
          <label for="libreSearch" class="form-label text-white">Busque pelo prato</label>
          <input type="text" class="form-control" id="libreSearch">
        </div>
        <div class="col-md-1">
          <label class="form-label pt-3"> </label>
          <button type="button" class="form-control btn btn-success" onclick="getSearch()">Buscar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="card" style="border-color: #1d4b1f;">
    <div class="card-header text-white" style="background-color: #1d4b1f;">
      <strong>Pratos encontrados</strong>
    </div>
    <div class="card-body" style="background-color: #8bc34a;">
      <div class="row list">

      </div>
    </div>
    <div class="card-footer" style="background-color: #1d4b1f;">
      
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    searchModules();
    search({route: 'categories.php'});
  });

  const searchModules = () => {
    if ($('#method').val() == 'writed') {
      $('.filter').hide();
      $('.writed').show();
    }else{
      $('.filter').show();
      $('.writed').hide();
    }
  }

  const getSearch = () => {
    let arg = $("#libreSearch").val()  ? 'search.php?s' + $("#libreSearch").val() : 'search.php?f=' + $("#aplphabet").val();
    console.log(arg);
    search({route: arg});
    $("#aplphabet").val('');
    $("#libreSearch").val('');
  }

  const search = (arg) => {
    $.post("php/requisitions.php", arg)
    .done(function (response) {
      $(".list").html(response);
    });
  }

  const showMore = () => {
    let cardText = $('#card-text');
    if (cardText.hasClass('collapsed')) {
      cardText.removeClass('collapsed');
      $(this).text('Show More');
    } else {
      cardText.addClass('collapsed');
      $(this).text('Show Less');
    }
  }
</script>