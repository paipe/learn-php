<?php
$a = 123;
$type1 = gettype ($a);
$b = "abc";
$type2 = gettype ($b);
$c = false;
$type3 = gettype ($c);
$d = 123.123;
$type4 = gettype ($d);
$e = array(1, 2, "c");
$type5 = gettype ($e);
$f = null;
$type6 = gettype ($f);
echo "Значение переменной: ". $a, ", Тип переменной: " ,$type1, "\n";
echo "Значение переменной: ". $b, ", Тип переменной: " ,$type2, "\n";
echo "Значение переменной: false". $c, ", Тип переменной: " ,$type3, "\n";
echo "Значение переменной: ". $d, ", Тип переменной: " ,$type4, "\n";
foreach ($e as $value){
echo "Значение переменной: ". $value, ", Тип переменной: " ,$type5, " ","\n";}
echo "Значение переменной: null". $f, ", Тип переменной: " ,$type6, "\n";
