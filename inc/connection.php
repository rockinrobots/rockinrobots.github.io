<?php
    
    $hn = "localhost";
    $un = "root";
    $pw = "root";
    $dn = "products";

    // Create connection
    $conn = new mysqli($hn, $un, $pw, $dn);

    // Check connection
    if($conn->connect_error)
        die("This was the error connecting: " . $conn->connect_error);
            
            
?>