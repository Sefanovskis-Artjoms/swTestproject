<?php
include './class/Dbh.class.php';

abstract class Product extends Dbh{
    //My firs experience with MVC model 
    //created functions fro productview and productcontrol to inherit

    protected function getAllData(){

        $sql = 'select*from products;';
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    protected function setProduct($sku,$name,$price,$weight,$size,$width,$height,$lenght,$type)
    {
        $sql = "insert into products (sku,name,price,weight,size,width,height,lenght,type) values (?,?,?,?,?,?,?,?,?);";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$sku,$name,$price,$weight,$size,$width,$height,$lenght,$type]);
    }
    //$sku,$name,$price,$weight,$size,$width,$height,$lenght,$type

    protected function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id=?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}