<?php

include_once './abstract/Product.abstract.php';

class ProductControl extends Product{
  
  public function deleteProducts($id){
    $this->deleteProduct($id);
  }

  /*
    Data from form fields is passed in $post_data varieable 
    and put in temporary varieables to insert them later in function whitch will insert it in db
    In all fields whitch could potentialy be empty (after validation i am sure that 
    nesesary fields are filled) I use null coalescing operator and insert NULL in empty values.
    after little preparations data is inserted in function whitch inserts it in db
  */
  public function addproduct($post_data){
    $sku = $post_data['sku'];
    $name = $post_data['name'];
    $price = $post_data['price'];
    $size = $post_data['size'] ?? "NULL";
    $weight = $post_data['weight'] ?? "NULL";
    $width = $post_data['width'] ?? "NULL";
    $height = $post_data['height'] ?? "NULL";
    $lenght = $post_data['lenght'] ?? "NULL";
    $type = $post_data['productType'];

    $this->setProduct($sku,$name,$price,$weight,$size,$width,$height,$lenght,$type);
  }
}