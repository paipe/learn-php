<?php
$array = array("wolf" => "волк", "bear" => "медведь", "coney" => "заяц");
echo "Ключи и значения массива: \n";
foreach ($array as $key => $value) {
    echo "Ключ: $key, Значение: $value \n";
}
echo "Только ключи массива:\n";
foreach ($array as $key => $value) {
    echo "$key\n";
}