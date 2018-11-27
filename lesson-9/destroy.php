<?php session_start()?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Destroy</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
    <?php
        session_unset();

        if($_SESSION) {
            echo "There is a session";
        } else {
            "There is no session";
        }
    ?>
    <a href="index.php">Home</a>
 </body>
 </html>