 <?php session_start();?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Sessions</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
     <?php

        // $example['age'] = 2;

        // echo $example['age'];

        // $_SESSION['age'] = 368;

        // To remove the session age so that it does not exit anymore

        // echo $_SESSION['age'];

        // echo session_id();

        // session_id(123);

        // $_SESSION['favColour'] = 'red';

        // echo session_id();
        // echo '<br>';
        // echo session_cache_expire();

     ?>

     <form action="index.php" method="post">
        <input type="text" name="favColour" placeholder="Favourite Colour">
        <input type="submit" value="Submit!">
     </form>

     <?php
        if($_POST) {
            $_SESSION['favColour'] = $_POST['favColour'];
        } else {
            
        }
     ?>

     <a href="destroy.php">Boom</a>
     <a href="colours.php">Colour</a>
 </body>
 </html>