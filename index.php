<?php
    include_once 'class/ProductView.class.php'; 
    include_once 'class/ProductControl.class.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
    <h1>Product List</h1>
    <form action="" method="POST">
        <div class="right">
            <a href="addproduct.php" class="button1">ADD</a>
            <button type="submit" name="delete-product-btn" id="delete-product-btn" class="button1">MASS DELETE</button>
        </div>
        <hr>
        <div class="container-fluid ">
            <div class="row row-cols-5">
                <?php
                    //with bootsthap i made that there are 5 cols because when i apply style to the output then one row from cullums disapear and I didn't know how to fix it 
                    $obj = new ProductView();
                    $obj->viewData();
                ?>
            <div>
        </div>
    </form>
</body>
</html>
<?php
    //checking if delete button is pressed and if any checkboxes are selected then deletes them
    if (isset($_POST['delete-product-btn'])) {
        $delete = $_POST['num'] ?? "";
        if ('' !== $delete) {
            foreach ($delete as $key => $value) {
                $del = new ProductControl();
                $del->deleteProducts($value);
            }
        }   
    }
?>