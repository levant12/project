<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/add.css">
    <title>Add Product</title>
</head>
<body>
    <header>
        <a href="add.php"><h1>Add Product</h1></a>
        <!-- <button onclick="test()">Save</button>
        <a href="index.php"><button id="cancel-btn">Cancel</button></a> -->
    </header>
    <hr>
    <div class="form">
        <form action="./includes/saveInc.php" method="POST" name="addProduct">
            <input type="submit" value="cancel" name="cancel" id="cancel-btn">
            <input type="submit" value="save" name="save" id="save-btn">
            <br>
            <label for="SKU">SKU</label>
            <input type="text" id="sku" name="SKU" placeholder="SKU" autocomplete="off">
            <br>
            <label for="productName">Name</label>
            <input type="text" id="name" name="name" placeholder="Product name" autocomplete="off">
            <br>
            <label for="productPrice">Price</label>
            <input type="number" step="0.01" id="price" name="price" placeholder="Product price" autocomplete="off">
            <br>
            <label for="productType"> Product Type</label>
            <select id="productType" name="productType" onchange="changeForm()">
                <option value="dvd" id="DVD">DVD</option>
                <option value="book" id="Furniture">Book</option>
                <option value="furniture" id="Book">Furniture</option>
            </select>
            <br>
            <div id="dInfo">
                <label for="DVDSize">Size</label>
                <input type="text" id="size" name="dvdSize" placeholder="DVD Size" autocomplete="off">
                <br>
                <label for="description">Please provide size in MB</label>
            </div>
            <div id="bInfo" class="hidden">
                <label for="bookWeight">Weight</label>
                <input type="text" id="weight" name="bookWeight" placeholder="Book Weight" autocomplete="off">
                <br>
                <label for="description">Please provide weight in KG</label>
            </div>
            <div id="fInfo" class="hidden">
                <label for="furnitureHeight">Height (CM)</label>
                <input type="text" id="height" name="furnH" placeholder="Furniture Height" autocomplete="off">
                <br>
                <label for="furnitureWidth">Width (CM)</label>
                <input type="text" id="width" name="furnW" placeholder="Furniture Width" autocomplete="off">
                <br>
                <label for="furnitureLenght">Lenght (CM)</label>
                <input type="text" id="length" name="furnL" placeholder="Furniture Lenght" autocomplete="off">
                <br>
                <label for="description">Please provide dimensions in HxWxL format</label>
            </div>
        </form>
    </div>

    <footer>
        <hr>
        Scandiweb Test Assigment
    </footer>
    <!-- JS link -->
    <script src="./js/add.js"></script>
    <!-- JQuery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>