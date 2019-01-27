<?php
    include_once("connect.php");

    $sql = "CREATE TABLE films (
            id INT AUTO_INCREMENT KEY,
            title VARCHAR(64),
            director VARCHAR(64),
            year INT(4));";

    if (mysqli_query($conn,$sql)) {
        echo 'Table was successfully created you can now <a href="add.php">add</a> data to the table.';
    } else {
        echo "Failed to create table: ". mysqli_error($conn);
    }
    
?>