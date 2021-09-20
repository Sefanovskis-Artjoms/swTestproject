<?php

include_once './abstract/Product.class.php';
include_once 'Book.class.php';
include_once 'DVD.class.php';
include_once 'Furniture.class.php';

class ProductView extends Product {

  public function viewData(){

    $data = $this->getAllData();

    while($row = $data->fetch()){
      
      $x = 1;
      $className = $row["type"];
      $obj = $x;
      $obj = new $className();
      $obj->viewData($row["ID"],$row["sku"],$row["name"],$row["price"],$row["size"],$row["weight"],$row["width"],$row["height"],$row["lenght"]);
      $x++;
    }
  }

  
}