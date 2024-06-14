<?php
require(__DIR__ . "/apiManager.php");

$data = (Object) $_REQUEST;

// $data->route ?? ''
if (isset($data->route)) {
  $response = $client->request('GET', "$data->route");
  $response = json_decode($response->getBody());
  $html = "";
  $word = "search";
  $string = strpos($data->route, $word);

  foreach ($response->categories as $object) {
    $html .="
      <div class='col p-2'>
        <div class='card' id='card-".$object->idCategory."' style='width: 18rem;'>
          <div class='card-body'>
            <img src='".$object->strCategoryThumb."' class='card-img-top' alt='Category Image'>
            <h5 class='card-title'>".$object->strCategory."</h5>
            <br/>
            <input type='hidden' name='idCategory' value'".$object->idCategory."'>
            <p class='card-text overflow-y-scroll' id='card-text-".$object->idCategory."'>".$object->strCategoryDescription."</p>
            <span class='show-more' onclick='showMore(".$object->idCategory.")'>Mostrar mais...</span>
          </div>
          <div class='card-footer'>
            <a href='#' class='btn btn-primary' onclick='getRecipie(".$object->idCategory.")'>Explorar</a>
          </div>
        </div>
      </div>
    ";
  }

  echo $html;
}


?>