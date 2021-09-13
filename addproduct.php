<?php
    include_once 'class/productControler.class.php';
    include_once 'class/validator.class.php';

    //checking if save button is pressed 
    if (isset($_POST['Save'])) {
        //if button is pressed then if launch function to validate passed data
        $validation = new Validator($_POST);
        //and in err variable i load any errors witch validation function returned if it did
        $errors = $validation->validateForm($_POST['productType']);
        if (empty($errors)) {
            //after error varieable is checked for being empty i run function to insert data in db
            $datainsert = new productControler();
            $datainsert->addproduct($_POST);
            //as were the requirements this function returns user to main page after succesfull adding of product 
            header('Location: index.php?adding product=success');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <h1>Product Add</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="product_form" method="POST">
        <div class="right">
            <button type="submit" name="Save" class="button1">SAVE</button>
            <a href="index.php" class="button1">CANCEL</a>
        </div>
        <hr>
        <p class="inline"><b>SKU</b></p>
        <input id="sku" name="sku" value="<?php echo htmlspecialchars($_POST['sku'] ?? ''); ?>" class="inline" >
        <div class="error">
            <?php 
                echo $errors['sku'] ?? ''; 
            ?>
        </div>
        <br>
        <p class="inline"><b>NAME</b></p>
        <input id="name" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"  class="inline"> 
        <div class="error">
            <?php 
                echo $errors['name'] ?? ''; 
            ?>
        </div>
        <br>
        <p class="inline"><b>PRICE</b></p>
        <input id="price" name="price" value="<?php echo htmlspecialchars($_POST['price'] ?? ''); ?>"  class="inline"> 
        <div class="error">
            <?php 
                echo $errors['price'] ?? ''; 
            ?>
        </div>
        <br>
        <p class="inline"><b>Type Switcher</b></p>
        <select name="productType" id="productType" class="inline" >
            <option value="select">Select type</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
            <option value="DVD">Disc</option>
        </select>
        <div id="inputfield"></div>
        <div class="error">
            <?php 
                echo $errors['typefield'] ?? ''; 
            ?>
        </div>
    </form>
</body>
</html>
<script>
    //this is the code responsible for dynamic inputfield switch depending on users selected value
    $('#productType').on('change', function() {
        $('#inputfield').load('includes/'+this.value +'inputfields.txt');
    });
</script>