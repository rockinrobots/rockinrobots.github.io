

<?php 
    include 'inc/header.php';
 ?>



<style>
    <?php include 'inc/style.css'; ?>
</style>

<head>
    <title>Shop</title>
</head>




    <div class="gallery">
        
        
        <?php 
            include("inc/connection.php");
            $robot = "SELECT * FROM `products`";
        
        ?>
    <?php
        $lootdata = $conn->query($robot);
        if(!$lootdata)
            die($conn->error);
        $lootrow = $lootdata->num_rows;
        $extra = $lootrow; 
        for($j = 0; $j < $extra; ++$j) {
            $lootdata->data_seek($j);
            $lootrow = $lootdata->fetch_array(MYSQLI_ASSOC);

            echo"
                <div>
                <article class='caption'>
                <img src=\"".$lootrow["img"]."\">".
                "<div class='caption__overlay'>".
                    "<p class='caption__overlay__content'>".$lootrow["description"]."</p>".
                    "</div>".
                "</article>".
                "<h2>".$lootrow["item"]."</h2>".
                "<h3>"."$ ".$lootrow["price"]."</h3>".
                "<button>"."Add to Cart"."</button>".
            "</div>";

                
        };

    ?>
        
    </div>
