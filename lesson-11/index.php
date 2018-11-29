<?php
    declare(strict_types = 1);

    include_once 'functions.php';
    include_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Functions are Fun!</title>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/> -->
    </head>
    <body>
        <p>
            <?php
                array_output($example);
            ?>
        </p>
    </body>
</html>