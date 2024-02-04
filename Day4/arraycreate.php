<?php #Первое задание
$A = [1, 2, 3];
echo "Первое задание: \n";
print_r($A);
?>

<?php #Второе задание
$A = [1, 2, 3];
function printArray($A) {
    foreach ($A as $element){
        echo $element . "\n";
    }
}
echo "Второе задание: \n";
printArray($A);
?>

<?php #Третье задание
$array = ['a' => 'banana', 'b' => 'coconut', 'c' => 'pineapple'];
echo "Третье задание: \n";
print_r($array);
?>

<?php #Четвёртое задание
$array = ['a' => 'banana', 'b' => 'coconut', 'c' => 'pineapple'];
echo "Четвёртое задание: \n";
print_r($array);
array_pop($array);
print_r($array);
?>

<?php #Пятое задание
$array = [1, 4, 7, 9, 12];
function arraySum($array){
$sum = 0;
foreach ($array as $element) {
    $sum += $element;
}
return $sum;
}
echo "Пятое задание: \n";
echo "Сумма элементов массива: " . arraySum($array);
?>

<?php #Шестое задание
$array = [3, 5, 7, 1, 4];
echo "Шестое задание: \n";
print_r($array);
sort($array);
echo "По возрастанию: \n";
print_r($array);
rsort($array);
echo "По убыванию: \n";
print_r($array);
$array2 = ['1' => 'tree', '2' => 'bush', '3' => 'berry', '4' => 'grass'];
ksort($array2);
echo "По возрастанию ключей: \n";
print_r($array2);
krsort($array2);
echo "По убыванию ключей: \n";
print_r($array2);
?>

<?php #Седьмое задание
$array1 = ['1' => 'a', '2' => 'b'];
$array2 = ['3' => 'b', '4' => 'c'];
$result = $array1 + $array2;
echo "Седьмое задание: \n";
print_r($result);
$result = array_merge($array1, $array2);
print_r($result);
?>

<?php #Восьмое задание
$ucheniki = [
    ['name' => 'Andrey', 'grades' => [3, 5, 4]],
    ['name' => 'Egor', 'grades' => [4, 4, 5]],
    ['name' => 'Vlad', 'grades' => [2, 3, 3]]
];
echo "Восьмое задание: \n";
print_r($ucheniki);
?>

<?php #Девятое задание
$A = ['a' => 'derevo', 'b' => 'kust', 'c' => 'yagodi'];
echo "Девятое задание: \n";
if (isset ($A['a'])) {
    echo "Данный элемент массива существует\n";
} else {
    echo "Данный элемент массива не существует\n";
}
if (isset ($A['d'])) {
    echo "Данный элемент массива существует\n";
} else {
    echo "Данный элемент массива не существует\n";
}
?>

<?php #Десятое задание
$array = ['name' => 'Andrey', 'age' => 20, 'city' => 'Ufa'];
function swapoflip($array) {
    return array_flip($array);
}
echo "Десятое задание: \n";
$swapped = swapoflip($array);
print_r($swapped);
?>

<?php #Одиннадцатое задание 
$array = ['name' => 'Andrey', 'age' => 20, 'city' => 'Ufa'];
echo "Одиннадцатое задание: \n";
$keys = array_keys($array);
foreach ($keys as $key) {
    echo $key . "\n";
}
?>