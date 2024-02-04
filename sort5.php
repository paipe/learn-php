<?php
$array = ["bunny", "wolf", "flamingo", "owl"];
$sort = function(&$arr) {
    $length = count($arr);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if (strlen($arr[$j]) > strlen($arr[$j + 1])) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
};
$sort($array);
print_r($array);