<?php

class Validator {

    private $data;
    private $errors = [];
    private static $defaultfields = ['sku','name','price'];


    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm($type){
        foreach(self::$defaultfields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateField('sku');
        $this->validateField('name');
        $this->validateNumberField('price');
        $this->validateDynamicFields($type);
        return $this->errors;
    }

    private function validateField($fieldname)
    {
        $val = trim($this->data[$fieldname]);

        if (empty($val)) {
            $this->addError($fieldname, "$fieldname cannot be empty!");
        }
        else {
            if(preg_match('/^[a-zA-Z0-9]$/',$val)){
                $this->addError($fieldname, "$fieldname field have invalid characters!");
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

    private function validateDynamicFields($typename){
        switch ($typename) {
            case 'book':
                $val = trim($this->data['weight']);
                if (empty($val)) {
                    $this->addError('typefield', "Weight field cannot be empty!");
                    break;
                }
                else {
                    if(!is_numeric($val)){
                        $this->addError('typefield', "Weight field must contain only numbers!");
                        break;
                    }
                    break;
                }

            case 'DVD':
                $val = trim($this->data['size']);
                if (empty($val)) {
                    $this->addError('typefield', "Size field cannot be empty!");
                    break;
                }
                else {
                    if(!is_numeric($val)){
                        $this->addError('typefield', "Size field must contain only numbers!");
                        break;
                    }
                    break;
                }

            case 'furniture':
                $val1 = trim($this->data['width']);
                $val2= trim($this->data['height']);
                $val3 = trim($this->data['lenght']);
                if (empty($val1) || empty($val2) || empty($val3)) {
                    $this->addError('typefield', "All fields must be filled!");
                    break;
                }
                else {
                    if(!is_numeric($val1) || !is_numeric($val2) || !is_numeric($val3)){
                        $this->addError('typefield', "There must be only numbers in all fields");
                        break;
                    }
                    break;
                   
                }
                
            
            default:
                $this->adderror('typefield','Need to select some type!');
                break;
        }
    }
    
   

    private function addError($key, $value)
    {
        $this->errors[$key] = $value;
    }

}