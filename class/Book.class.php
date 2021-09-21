<?php
include_once './abstract/ProductList.abstract.php';

class Book extends ProductList{

  //same function is in DVD and furniture class too but with different type attribute output parts
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

  //this function validates only part of form whitch can be different on users choice 
  //first part of form is validated in validator class
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
}