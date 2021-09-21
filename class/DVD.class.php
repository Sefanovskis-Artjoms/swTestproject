<?php
include_once './abstract/ProductList.abstract.php';

class DVD extends ProductList{

  protected $errors = [];

  public function viewData($ID,$sku,$name,$price,$size,$weight,$width,$height,$lenght)
  {
    echo  '<div class="col productbox">
      <input type="checkbox" name="num[]" value="'.$ID.'" >
      <br>
      <div class="centred">
      <span>'.$sku.'</span>
      <br>
      <span>'.$name.'</span>
      <br>
      <span>'.$price.' $</span>
      <br>';
      echo '<span>Size: '. $size .' MB</span>';
    echo '</div></div>';
  }

  public function validateData($data)
  {
    $val = trim($data['size']);

    if (empty($val)) {
      return "Size field cant be empty!";
    }
    else {
      if(!is_numeric($val)){
        return "Size field must contain only numbers!";
      }
    }
  }
}