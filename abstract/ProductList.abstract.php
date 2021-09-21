<?php

abstract class ProductList {

    //abstract class with two functions whitch must be implemented in all child clases
    abstract public function viewData($ID,$sku,$name,$price,$size,$weight,$width,$height,$lenght);

    abstract public function validateData($data);

}