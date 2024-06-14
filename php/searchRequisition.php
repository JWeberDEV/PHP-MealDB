<?php
require(__DIR__ . "/apiManager.php");

$data = (Object) $_REQUEST;

if (isset($data->route)) {
  $response = $client->request('GET', "$data->route");
  $response = json_decode($response->getBody());
  // var_dump($response);
  $html = "";
  $word = "search";
  $string = strpos($data->route, $word);

  foreach ($response->meals as $object) {
    $html .="
      <div class='col p-2'>
        <div class='card' id='card-".$object->idMeal."' style='width: 18rem;'>
          <div class='card-body'>
            <img src='".$object->strMealThumb."' class='card-img-top' alt='Category Image'>
            <h5 class='card-title'>".$object->strMeal."</h5>
            <br/>
            <h6 class='card-title'>".$object->strMeal."</h6>
            <input type='hidden' name='idCategory' value'".$object->strCategory."'>
            <p class='card-text' id='card-text-".$object->idMeal."'>".$object->strArea."</p>
          </div>
          <div class='card-footer'>
            <a href='#' class='btn btn-primary' onclick='getRecipie(".$object->idMeal.")'>Explorar</a>
          </div>
        </div>
      </div>
    ";
  }

  echo $html;
}

?>