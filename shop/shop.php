<?php
require_once 'MenuController.php';
include_once '../header/nav.php';
?>
<link rel="stylesheet" href="style.css">
<div>
    <?php
    $products = new MenuController;
    $all = $products->readData();
    for($i = 0; $i < count($all); $i++) {
        echo 
        '
        <div class="content" id="content"">
            <img id="img" src="' .$all[$i] ['menu_image'].'"> 
            <h3 id="h3">' .$all[$i]['menu_title'].'</h3>
            <p>'.$all[$i]['menu_body'].'</p>
            <br>
            <h6>$' .$all[$i]['menu_price'].'</h6>
            <a href="buyNow.php"><button class="buy">Buy Now</button> </a>
        </div>
        ';
    }
    ?>
</div>