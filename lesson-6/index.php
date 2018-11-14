 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Foreach Loops</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
     <?php
        $drinks = array('brandy'=>'klipdrift', 'trash'=>'russian bear', 'tequila'=>'olmeca', 'cider'=>'hunters', 'whiskey'=>'jack daniels');

        $chasers = array('jive', 'sprite', 'cranberry juice');
     ?>

     <ul>
        <?php
            foreach ($drinks as $key => $drink) {
                echo "<li>";
                foreach ($chasers as $chaser) {
                    echo  $key . " and " . $chaser . ", ";
                }
                echo "</li>";
            }
        ?>
     </ul>
 </body>
 </html>