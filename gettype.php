<?php
$int = 729;
$type1 = gettype($int);
$str = "xyz";
$type2 = gettype($str);
$double = 9123.67;
$type3 = gettype($double);
echo "Значение переменной: ", $int, ", Тип переменной: ", $type1,"\n";
echo "Значение переменной: ", $str, ", Тип переменной: ", $type2,"\n";
echo "Значение переменной: ", $double, ", Тип переменной: ", $type3,"\n";