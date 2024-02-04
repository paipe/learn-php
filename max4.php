<?php
function Maximum($array) {
    $max = 0;

    foreach ($array as $value) {
        if ($max == 0 or $value > $max) {
            $max = $value;
        }
    }  
    return $max;
}
$numbers = [5, 10, 3, 8, 15];
$maxValue = Maximum($numbers);
echo "Максимальное значение: $maxValue";