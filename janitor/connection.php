<?php 
    $servername = "localhost";
    $username = "thalma";
    $password = "123";
    $db_name = "login";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>