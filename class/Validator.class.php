<?php

include_once 'Book.class.php';
include_once 'DVD.class.php';
include_once 'Furniture.class.php';

class Validator{

  //in this varieable will be stored data from the user input in addproduct page
  private $data;

  //array to store errors about user input in addproduct page if there will be any errors
  private $errors = [];

  //in this constructor all passed data from addproduct page is put in $data varieable
  public function __construct($post_data)
  {
    $this->data = $post_data;
  }

  //This is the main function responsible for form validation
  public function validateForm()
  {
    $this->validateField('sku');
    $this->validateField('name');
    $this->validateNumberField('price');
    if ($this->data['productType'] == 'select') {
      $this->adderror('typefield','Need to select some type!');
      return $this->errors;
    }
    else {
      $dynamic = new $this->data['productType']();
      //passing in validation field all data and then clases will seperately filter out what they need and validate it
      $error = $dynamic->validateData($this->data);
      if (!empty($error)) {
        $this->errors['typefield'] = $error;
      }
      return $this->errors;
    }
  }

  private function validateField($fieldname){

    $val = trim($this->data[$fieldname]);

    if (empty($val)) {

      $this->addError($fieldname, "$fieldname cannot be empty!");
    }
    else {
      if(preg_match('/^[a-zA-Z0-9]$/',$val)){

        $this->addError($fieldname, "$fieldname field have invalid characters or is too short!");
      }
    }
  }

  private function validateNumberField($fieldname)
    {
        $val = trim($this->data[$fieldname]);

        if (empty($val)) {
            $this->addError($fieldname, "$fieldname cannot be empty!");
        }
        else {
            if(!is_numeric($val)){
                $this->addError($fieldname, "$fieldname field must contain only numbers!");
            }
        }
    }

  //function to be used in other functions to add errors to error array
  public function addError($key, $value){
    $this->errors[$key] = $value;
  }
}