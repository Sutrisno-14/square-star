<?php 
    echo "# Basic #".PHP_EOL;
    $n = 10;
    for ($i = 1; $i <= $n; $i++ ) {
        for ($j = 1; $j <= $n; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    }

    echo PHP_EOL.PHP_EOL;

    echo "# LEVEL 1 #".PHP_EOL;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i == 1 || $i == 10 || $j == 1 || $j == 10) {
                echo "*";
            }else {
                echo " ";
            }
        }
        echo PHP_EOL;
    }

    echo PHP_EOL.PHP_EOL;

    echo "# LEVEL 2 #".PHP_EOL;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i == 1 || $i == $n || $j == 1 || $j == $n || $i == $j) {
                echo "*";
            }else {
                echo " ";
            }
        }
        echo PHP_EOL;
    }

    echo PHP_EOL.PHP_EOL;

    echo "# LEVEL 3 #".PHP_EOL;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            // echo $n-$j;
            if ($i == 1 || $i == $n || $j == 1 || $j == $n || $j == $n-($i-1)) {
                echo "*";
            }else {
                echo " ";
            }
        }
        echo PHP_EOL;
    }



?>
