<!DOCTYPE html>
    <html lang="en">  
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuctions are fun!</title>
    </head>
    <body>
        <p>
            <?php
                function teachFunctions($name,$age) {
                    echo "My name is $name ";
                    echo "and I am $age years old";
                    lineBreak();
                    echo "How about you?";
                    lineBreak();
                    return $age*365.25;
                }

                function lineBreak() {
                    echo "<br>";
                }

                $days = teachFunctions('Marlon', addNumbers(powerNumbers(2,4),6));
                echo $days;
                
                function addNumbers($num1, $num2) {
                    return $num1 + $num2;
                }
                
                function powerNumbers($num,$exponent) {
                    return $num**$exponent;
                }

                echo lineBreak();

                echo addNumbers(powerNumbers(2,4),6);
            ?>
        </p>

        <form action="index.php" method="post">
            <input type="text" placeholder="username" name="username">

            <input type="submit" value="Submit">
        </form>

        <?php

        function outputUpper (string $name) {
            $working = strtoupper($name);
            echo $working; 
        }
            if ($_POST) {
                outputUpper($_POST['username']);
            }
        ?>
    </body>
</html>