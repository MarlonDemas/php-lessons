<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $example = 'MARLON';

        echo $example . "<br>";

        $example = strtolower($example);

       echo "<p>$example</p>";

       $example2 = 'where in the world is carmen sandiego';

       echo strpos($example2, 'carmen');

       var_dump(explode(' ',$example2));
       print_r(explode(' ',$example2));
       
       echo "<p></p>";
       
       echo trim($example2, 'w');
       ?>
</body>
</html>