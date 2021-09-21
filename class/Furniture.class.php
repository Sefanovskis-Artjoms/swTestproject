<?php
include_once './abstract/ProductList.abstract.php';

class Furniture extends ProductList{

  public function viewData($ID,$sku,$name,$price,$size,$weight,$width,$height,$lenght)
  {
    echo  '<div class="col productbox">
      <input type="checkbox" name="num[]" value="'.$ID.'" >
      <br>
      <div class="centred">
      <span >'.$sku.'</span>
      <br>
      <span >'.$name.'</span>
      <br>
      <span >'.$price.' $</span>
      <br>';
      echo '<span>Dimensions: '. $height .'x'. $width.'x'. $lenght .'</span>';
    echo '</div></div>';
  }

  public function validateData($data)
  {
    $val1 = trim($data['width']);
    $val2= trim($data['height']);
    $val3 = trim($data['lenght']);
    if (empty($val1) || empty($val2) || empty($val3)) {
      return "All dimension fields must be filled!";
    }
    else {
      if(!is_numeric($val1) || !is_numeric($val2) || !is_numeric($val3)){
        return "There must be only numbers in all dimension fields";
      }
    }
  }
}