<?php
    // Create a connection to the db
    $conn = mysqli_connect('localhost', 'root', '', 'db_comment');

    // Test Connection
    if (mysqli_connect_errno()) {
        // Connection Failed
        echo mysqli_connect_errno();
    } 
    // else {
    //     echo "Connection Successful";
    // }

    
?>