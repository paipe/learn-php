<?php
$filename = "example.txt";

$file = fopen($filename, "r") or die("Не удалось открыть файл");

$fileContents = fread($file, filesize($filename));

echo $fileContents;
fclose($file);