<?php
include_once './abstract/ProductList.abstract.php';

class Book extends ProductList{

  public function viewData($ID,$sku,$name,$price,$size,$weight,$width,$height,$lenght)
  {
    echo  '<div class="col productbox">
      <input type="checkbox" name="num[]" value="'.$ID.'" >
      <br>
      <div class="centred">
      <span>'. $sku .'</span>
      <br>
      <span>'. $name .'</span>
      <br>
      <span>'. $price .' $</span>
      <br>';
      echo '<span>Weight: '. $weight .' KG</span>';
    echo '</div></div>';
  }

  public function validateData($data)
  {
 
    $val = trim($data['weight']);

    if (empty($val)) {
      return "Weight field cant be empty!";
    }
    else {
      if(!is_numeric($val)){
        return "Weight field must contain only numbers!";
      }
    }
  }

  public function insertData()
  {
    
  }

}