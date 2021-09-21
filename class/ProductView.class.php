<?php

include_once './abstract/Product.abstract.php';
include_once 'Book.class.php';
include_once 'DVD.class.php';
include_once 'Furniture.class.php';

class ProductView extends Product {

  public function viewData(){

    //all data from database is stored in this array
    $data = $this->getAllData();

    //with while loop data is one by one displayed 
    while($row = $data->fetch()){
      
      //varieable x is counter to make different name for every object
      $x = 1;
      //type name is set in own varieble to make it look nice when object is created 
      $className = $row["type"];
      $obj = $x;
      //object is created taking class name from 'type' field in db
      $obj = new $className();
      //since in all three clases this function is called same, All data is passed inside this function
      //and clases then seperately decide whitch data they need to display info acurately
      $obj->viewData($row["ID"],$row["sku"],$row["name"],$row["price"],$row["size"],$row["weight"],$row["width"],$row["height"],$row["lenght"]);
      //increment x varieable to make next object name different
      $x++;
    }
  }
}