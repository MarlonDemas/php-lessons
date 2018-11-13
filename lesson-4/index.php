<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <?php

        $line = '<br>';
        $example_array = array('michael', 'gcobisa', 'tyrone');

        $array_to_string = implode(' ', $example_array);

        echo $array_to_string .$line;

        echo count($example_array) .$line;

        $example_array[7] = 'hello';

        echo count($example_array) .$line;

        echo end($example_array);

        $example_array = array('michael', 'gcobisa', 'tyrone','a', 'b', 'c',1,2,3,4);

        sort($example_array);
        var_dump($example_array);

        rsort($example_array);
        var_dump($example_array);

        echo end($example_array) .$line;

        echo key($example_array) .$line;

        echo array_search('tyrone', $example_array) .$line;

        echo key($example_array) .$line;

        array_push($example_array, 'natheer');

        echo end($example_array) .$line;

        echo array_unshift($example_array, 'evan') . $line;

        echo $example_array[0] .$line;

        var_dump($example_array);

        array_shift($example_array);

        var_dump($example_array);

        array_pop($example_array);

        var_dump($example_array);

        var_dump(array_slice($example_array, 2));

        // Slice is selecting and splice is cutting but both do same thing, only splice changes the array while slice does not change the array

        $example_array = array('michael','reagan', 'gedeon','natheer', 'josh', 'taariq', 'evan', 'gcobisa', 'tyrone', 'x', 'jp', 'taufeeq', 'jessie', 'kaylem', 'marlon', 'urick');

        $replace = array('nate', 'devon', 'garth', 'emma');

        $chunck = array_splice($example_array, 3, -2, $replace);

        var_dump($chunck);

        var_dump($example_array);

        unset($example_array[3]);
        var_dump($example_array);


        // Control Statements
        $name = 'Bob';

        if($name === "Bob"){
            echo 'yay' .$line;
        } else {
            echo 'nay' .$line;
        }

        $bob = array('car' => array('model' => 'm8',
                'make' => 'VW'),
                'pet' => 'cat');

        if ($bob['car']['make'] == 'BMW'){
            echo 'yay' .$line;
        } else {
            echo 'nay' .$line;
        }
        
        if ($bob['car']['make'] == 'BMW'){
            echo 'yay' .$line;
        } else if($bob['pet'] == 'cat') {
            echo 'achoo' .$line;
        }else {
            echo 'nay' .$line;
        }

        // 13 November 2018

        // Switch case

        $light = array('green','red','yellow','blue');

        switch ($light[rand(0,3)]) {
            case 'red':
               echo 'stop';
                break;
            case 'yellow':
               echo 'slow down';
                break;
            case 'green':
               echo 'go';
                break;
            
            default:
                echo 'treat as four way stop';
                break;
        }

        echo $line;

        $example_array = array('michael','reagan', 'gedeon','natheer', 'josh', 'taariq', 'evan',                      'gcobisa', 'tyrone', 'x', 'jp', 'taufeeq', 'jessie', 'kaylem', 'marlon',                     'urick');
        $class_size = count($example_array);
    ?>

    <!-- for loops -->

    <ul>
    <?php
        for ($i = 0; $i < $class_size; $i++){
            $length = count($example_array);
            $chosen = rand(0, $length - 1);
            $output = array_splice($example_array,$chosen,1);
    ?>
    <li><?php echo $output[0]?></li>
    <?php
        }
    ?>
    </ul>
</body>
</html>