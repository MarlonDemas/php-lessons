<?php
    include_once("connect.php");

    $sql = "INSERT INTO films(title, director, year) VALUES (
            'Thor Ragnarok',
            'Taika Waititi',
            2017);";

            if (mysqli_query($conn, $sql)) {
                echo 'Data was inserted successfully you can now <a href="display.php">display</a> the data.';
            } else {
                echo "Failed to insert data: ". mysqli_error($conn);
            }
            
?>