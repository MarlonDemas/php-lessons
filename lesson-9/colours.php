<?php session_start(); ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Colours</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
     <a href="index.php">Home</a>

     <p>My favourite colour is <?php echo $_SESSION['favColour']?></p>
 </body>
 </html>