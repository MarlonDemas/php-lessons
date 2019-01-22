<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Exercise</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
    </head>
    <body>
    <?php
        $myName = 'Marlon';
        $age = 21;
        $favouriteFoods = array('Pizza','Pasta','Steak');

        $String = "Hello my name is $myName and my age is $age. Currently, my favorite foods are $favouriteFoods[0], $favouriteFoods[1], and $favouriteFoods[2]. <br><br>";

        echo $String;

        echo 'The variable called $myName is a datatype known as a '. gettype($myName). '.';
    ?>
    </body>
</html>