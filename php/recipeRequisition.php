<?php
require(__DIR__ . "/apiManager.php");

$data = (Object) $_REQUEST;

if (isset($data->route)) {
  $response = $client->request('GET', "$data->route");
  $response = json_decode($response->getBody());
  
  $html = "";

  foreach ($response->meals as $object) {
    $html .="
      <div class='text-center'>
        <div class='card' id='card-".$object->idMeal."'>
          <div class='card-body'>
            <img src='".$object->strMealThumb."' class='card-img-top' alt='Category Image' style='width: 30rem;'>
            <h5 class='card-title'>".$object->strMeal."</h5>
            <br/>
            <h6 class='card-title'>".$object->strMeal."</h6>
            <input type='hidden' name='idCategory' value'".$object->strCategory."'>
            <p class='card-text'>".$object->strArea."</p>
            <h6 class='card-title'>Ingredientes</h6>";
            if($object->strIngredient1!= ''){$html.="<p>".$object->strIngredient1.' - '.$object->strMeasure1."</p>";}
            if($object->strIngredient2!= ''){$html.="<p>".$object->strIngredient2.' - '.$object->strMeasure2."</p>";}
            if($object->strIngredient3!= ''){$html.="<p>".$object->strIngredient3.' - '.$object->strMeasure3."</p>";}
            if($object->strIngredient4!= ''){$html.="<p>".$object->strIngredient4.' - '.$object->strMeasure4."</p>";}
            if($object->strIngredient5!= ''){$html.="<p>".$object->strIngredient5.' - '.$object->strMeasure5."</p>";}
            if($object->strIngredient6!= ''){$html.="<p>".$object->strIngredient6.' - '.$object->strMeasure6."</p>";}
            if($object->strIngredient7!= ''){$html.="<p>".$object->strIngredient7.' - '.$object->strMeasure7."</p>";}
            if($object->strIngredient8!= ''){$html.="<p>".$object->strIngredient8.' - '.$object->strMeasure8."</p>";}
            if($object->strIngredient9!= ''){$html.="<p>".$object->strIngredient9.' - '.$object->strMeasure9."</p>";}
            if($object->strIngredient10!= ''){$html.="<p>".$object->strIngredient10.' - '.$object->strMeasure10."</p>";}
            if($object->strIngredient11!= ''){$html.="<p>".$object->strIngredient11.' - '.$object->strMeasure11."</p>";}
            if($object->strIngredient11!= ''){$html.="<p>".$object->strIngredient12.' - '.$object->strMeasure12."</p>";}
            if($object->strIngredient12!= ''){$html.="<p>".$object->strIngredient13.' - '.$object->strMeasure13."</p>";}
            if($object->strIngredient13!= ''){$html.="<p>".$object->strIngredient14.' - '.$object->strMeasure14."</p>";}
            if($object->strIngredient14!= ''){$html.="<p>".$object->strIngredient15.' - '.$object->strMeasure15."</p>";}
            if($object->strIngredient15!= ''){$html.="<p>".$object->strIngredient16.' - '.$object->strMeasure16."</p>";}
            if($object->strIngredient16!= ''){$html.="<p>".$object->strIngredient17.' - '.$object->strMeasure17."</p>";}
            if($object->strIngredient17!= ''){$html.="<p>".$object->strIngredient18.' - '.$object->strMeasure18."</p>";}
            if($object->strIngredient19!= ''){$html.="<p>".$object->strIngredient19.' - '.$object->strMeasure19."</p>";}
            if($object->strIngredient20!= ''){$html.="<p>".$object->strIngredient20.' - '.$object->strMeasure20."</p>";}
            $html .="<h6 class='card-title'>Instruções</h6>
            <p>".$object->strInstructions."</p>
            <h6 class='card-title'>Site alternativo para consulta da receita</h6>
            <a href='".$object->strSource."' target='_blank' rel='noopener noreferrer'>Acessar</a>
          </div>
        </div>
      </div>
    ";
  }

  echo $html;
}

?>