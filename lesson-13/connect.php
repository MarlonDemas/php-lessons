<?php
    include_once("user.php");

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("the connection is unsuccessfull: ". mysqli_connect_errno());
    } else {
        // echo "Connection successful<br>";
    }
    
?>