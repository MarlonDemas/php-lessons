<?php

    function reduce_to_four(string $a) {
        if (strlen($a)<=4) {
            echo "$a is now 4 letters long!";
            return 1;
        }
        echo $a."</br>";
        $a = substr($a, 0, strlen($a)-1);

        reduce_to_four($a);
        return $a;
    }

    reduce_to_four('this_is_long');

    function array_output($array) {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                echo "<ul>";
                array_output($value);
                echo "</ul>";
            } else {
                echo $value . "</br>";
            }
        }
    }