<?php
require(__DIR__ . "/apiManager.php");

$data = (Object) $_REQUEST;
if (isset($data->route)) {
  $response = $client->request('GET', "$data->route");
  $response = json_decode($response->getBody());

  $html = "";
  foreach ($response->categories as $object) {
    $html .="
      <div class='col'>
        <div class='card' style='width: 18rem;'>
            <div class='card-header'>
              <h5 class='card-title'>".$object->strCategory."</h5>
            </div>
          <div class='card-body'>
            <img src='".$object->strCategoryThumb."' class='card-img-top' alt='Category Image'>
            <input type='hidden' name='idCategory' value'".$object->idCategory."'>
            <p class='card-text'>".$object->strCategoryDescription."</p>
          </div>
          <div class='card-footer'>
            <a href='#' class='btn btn-primary' onclick=''>Explorar</a>
          </div>
        </div>
      </div>
    ";
  }

  echo $html;
}


?>