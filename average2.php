<?php
function calcAverage($array){
    $sum = 0;
    $count = 0;
    foreach ($array as $value){
        $sum += $value;
        $count++;
    }
    return $sum / $count;
}
$massive = [5, 8, 4, 12, 64, 81];
echo "Среднее значение: ", calcAverage($massive);