<?php
echo "Patterns<br>";
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        continue;
    } 
    else {
        for ($j = 1; $j <= $i; $j++) {
            if ($j % 2 == 0) {
                echo "_";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }
}
