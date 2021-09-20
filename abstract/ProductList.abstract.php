<?php

abstract class ProductList {

    abstract public function viewData($ID,$sku,$name,$price,$size,$weight,$width,$height,$lenght);
    
    abstract public function insertData();

    abstract public function validateData($data);

}