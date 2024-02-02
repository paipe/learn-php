<?php
function reverseStr($str) {
    $reverse = '';
    $length = strlen($str);
    for ($i = $length - 1; $i >= 0; $i--) {
        $reverse .= $str[$i];
    }
    return $reverse;
}
$input = "chto suda pisat'?";
$reversedStr = reverseStr($input);
echo $reversedStr;