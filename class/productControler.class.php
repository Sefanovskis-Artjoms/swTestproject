<?php

include_once './abstract/product.abstract.php';

//this class is responsible for handling with the data in db 
class ProductControler extends Product{

    private $sku;
    private $name;
    private $price;
    private $size;
    private $weight;
    private $width;
    private $height;
    private $lenght;
    private $type;

    //this is the function whitch inserts data into database
    public function addproduct($post_data)
    {
        $this->sku = $post_data['sku'];
        $this->name = $post_data['name'];
        $this->price = $post_data['price'];
        //had no idea to do it without switch-case statement 
        switch ($post_data['productType']) {
            case 'book':
                $this->weight = $post_data['weight'];
                $this->type = 2;
                $this->size = NULL;
                $this->width = NULL;
                $this->height = NULL;
                $this->lenght = NULL;
                break;
            
            case 'DVD':
                $this->weight = NULL;
                $this->size = $post_data['size'];
                $this->type = 1;
                $this->width = NULL;
                $this->height = NULL;
                $this->lenght = NULL;
                break;
            
            case 'furniture':
                $this->weight = NULL;
                $this->size = NULL;
                $this->type = 3;
                $this->width = $post_data['width'];
                $this->height = $post_data['height'];
                $this->lenght = $post_data['lenght'];
                break;
            
            default: 
                break;
        }
        $this->setProduct($this->sku,$this->name,$this->price,$this->weight,$this->size,$this->width,$this->height,$this->lenght,$this->type);
    }

    public function deleteProducts($id)
    {
        $this->deleteProduct($id);
    }
}