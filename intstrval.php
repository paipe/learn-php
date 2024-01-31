<?php
$str = "123";
$number = intval($str);
$type1 = gettype($number);
$string = strval($number);
$type2 = gettype($string);
echo "Значение строки: ", $str,"\n";
echo "Перевод строки в integer: ", $number, ", Проверка типа строки: ", $type1,"\n";
echo "Перевод строки обратно в string: ", $string, ", Проверка типа строки: ", $type2,"\n";