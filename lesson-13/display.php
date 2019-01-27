<?php
    include_once("connect.php");

    $sql = "SELECT * FROM films;";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: ". $row['id']. " title: ". $row['title']. " director: ". $row['director']. " year: ". $row['year']. "<br>";
        }
    } else {
        echo "0 results";
    }

    echo '<br><a href="index.php">home</a>';

    mysqli_close($conn);
?>