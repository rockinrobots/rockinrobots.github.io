<?php
$lootdata = $conn->query($newQuery);
	if(!$lootdata)
		die($conn->error);
$lootrow = $lootdata->num_rows;
$repeatfix = $lootrow;
// Begin loop that runs through datbase.
	for($j = 0; $j < $repeatfix; ++$j) {
		$lootdata->data_seek($j);
		$lootrow = $lootdata->fetch_array(MYSQLI_ASSOC);
        // Output HTML 
         echo "<div id='productBox'>". 
        
        //Output Image
        "<img src=\"../img/robots/".$lootrow["platform"] ."/". $lootrow["title"] . ".jpg\"". "height=\"240\" width=\"270\">
        <h1 id='productName'>".  
            $lootrow["title"] . 
            "</h1>" .
            "<div class='marginFixer'>" . 
            "<ul id='productList'>" .
            "<li class='productInfo'>".$lootrow["item"]."</li>".
            "<li class='productInfo'> ".$lootrow["type"] . "</li>".
            "<li class='productInfo'> ".$lootrow["description"] . "</li>".
            "</ul>".
            "<button id='productCost'>Buy For: $".$lootrow["price"]. "</button>". //Adds Item to User's Cart
            
            "</ul>".
            "</div>".
            "</div>";
        
        
	}
?>