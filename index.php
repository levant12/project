<?php
include "./includes/displayInc.php";

function echoProducts(int $inSlides, int $inRows, $products, string $slidesClass){
    $typeDescription = ["furniture" => "dimension: ", "dvd" => "size: ", "book" => "weight: "];
    for ($i = 0; $i< sizeof($products); $i++) { 
        echo ($i%$inSlides == 0) ? "<div class='{$slidesClass} fade'>" : "";
        echo ($i%$inRows == 0) ? "<div class='row'>" : "";
        echo "<div class='p'>";
        echo "<input type='checkbox' value='{$products[$i]->p_ID}'>";
        echo "<br>";
        echo "<p>{$products[$i]->p_sku}</p>";
        echo "<h3>{$products[$i]->p_name}</h3>";
        $price = sprintf("%.2f",$products[$i]->p_price);
        echo "<p>{$price}$</p>";
        echo "<p>{$typeDescription[$products[$i]->p_type]}{$products[$i]->p_description}</p>";
        echo "</div>";
        echo ($i%$inRows == ($inRows - 1)) ? "</div>" : "";
        echo ($i%$inSlides == ($inSlides - 1)) ? "</div>" : "";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Product List</title>
</head>
<body>
    <header>
        <a href="#"><h1>Product List</h1></a>
        <a href="./add.php" id="linkAdd"><button>Add</button></a>
        <!-- <a href="./test.php"><button id="delete-product-btn" onclick="sendToPHP()">Mass Delete</button></a> -->
        <button id="delete-product-btn" onclick="sendToPHP()">Mass Delete</button>
    </header>
    <hr>
    <!-- Desktop version -->
    <section id="desktop" class="products slider">
        <?php 
        
            echoProducts(10,5,$products,"slidesD");

        ?>
    </section>
    <a class="prev" id="desk" onclick="plusSlidesD(-1)">&#10094;</a>
    <a class="next" id="desk" onclick="plusSlidesD(1)">&#10095;</a>
    <!-- Tablet version -->
    <section id="tablet" class="products slider">
    <?php 
        
        echoProducts(6,3,$products,"slidesT");
        
    ?>
    </section>
    <a class="prev" id="tab" onclick="plusSlidesT(-1)">&#10094;</a>
    <a class="next" id="tab" onclick="plusSlidesT(1)">&#10095;</a>
    <!-- Mobile version -->
    <section id="mobile" class="products slider">
    <?php 
        
        echoProducts(2,1,$products,"slidesM");
        
    ?>
    </section>
    <a class="prev" id="mob" onclick="plusSlidesM(-1)">&#10094;</a>
    <a class="next" id="mob" onclick="plusSlidesM(1)">&#10095;</a>
    <footer>
        <hr>
        Scandiweb Test Assigment
    </footer>
    <!-- JQuery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JS link -->
    <script type="text/javascript" src="./js/index.js"></script>
</body>
</html>