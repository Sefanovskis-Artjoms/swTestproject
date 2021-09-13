<?php

include './abstract/product.abstract.php';

//this class is responsible for showing the data from db
class ProductView extends Product{


    //function to display all products from database
    public function viewData(){
        $data = $this->getAllData();
        while($row = $data->fetch()){
            echo  '<div class="col productbox">
                <input type="checkbox" name="num[]" value="'.$row["ID"].'" class="delete-checkbox" >
                <br>
                <div class="centred">
                <span class="">'.$row["sku"].'</span>
                <br>
                <span class="">'.$row["name"].'</span>
                <br>
                <span class="">'.$row["price"].' $</span>
                <br>';
            //dont know how not to use switch-case statement here
            switch($row["type"]) {
                case 1:
                        echo '<span>Size: '.$row["size"].' MB</span>';
                        break;
                case 2:
                    echo '<span>Weight: '.$row["weight"].' KG</span>';
                    break;
                case 3:
                    echo '<span>Dimensions: '.$row["height"].'x'.$row["width"].'x'.$row["lenght"].'</span>';

                default:
                    # code...
                    break;
                }
            echo '</div></div>';
        }

        return ;
    }
}