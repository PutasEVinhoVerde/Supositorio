<?php

$servername = "94.62.181.63";
$username = "root";
$password = "";
$dbname = "lista_telefonica";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else{
        echo("Faggot");
    }

?>