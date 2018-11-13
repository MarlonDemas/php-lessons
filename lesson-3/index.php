<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Functions</title>
</head>
<body>
    <?php

        $br = "<br>";
        $example = 'where_in_the_world_is_caremen_sandiego';

        echo substr($example, 5);
        echo "<p></p>";
        echo substr($example, strpos($example,'c'));
        echo "<p></p>";
        echo substr($example, strpos($example,'i'), strpos($example,'d')-strpos($example,'i')+1);
        echo "<p></p>";
        echo substr($example,-5,3);
        echo "<p></p>";
        echo substr($example,5,-2);
        echo "<p></p>";
        echo str_replace('where','who',$example);

        // Starting with arrays

        $example_array = array('toyata','bmw','ferrari','hot wheels');
        echo "<p></p>";
        echo $example_array[0];

        var_dump($example_array);
        print_r($example_array);

        foreach($example_array as $car){
            echo "<p>$car</p>";
        }

        // Associative array

        $marlon = array('age'=> 21, 'hair' => 'pitte', 'height' => 'tall');

        echo $marlon['age'] . $br;
        echo $marlon['hair'];

        $example_array2 = array(
            array(
                2,3,4,5
            ), array(
                'jaguar','opel','fiat'
            ));

        var_dump($example_array2);
        echo $example_array2[1][0] . $br;

        $example_array2[1][0] = 'porche';
        echo $example_array2[1][0];

        var_dump($example_array2);

        $example_array2 = array(
            'numbers' => array(
                2,3,4,5
            ), 'cars' => array(
                'jaguar','opel','fiat'
            ));

            echo $example_array2['cars'][0] . $br;
            var_dump($example_array2);

            $example_array2['numbers']['people'] = array('reagan','nicholas','gedeon');
            var_dump($example_array2);

            $example_array2 = array(
                'numbers' => array(
                    2,3,4,5
                ), 'cars' => array(
                    'jaguar','opel','fiat'
            ));

            $example_array2['people'] = array('reagan','nicholas','gedeon');
            var_dump($example_array2);

            $example_array = array('michael', 'gcobisa', 'tyrone');

            rsort($example_array);
            var_dump($example_array);
    ?>
</body>
</html>