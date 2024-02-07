<?php
$filename = "example.txt"; 
$file = fopen($filename, "r") or die("Не удалось открыть файл");
while (!feof($file)) {
    $line = fgets($file);
    echo $line;
}
fclose($file);