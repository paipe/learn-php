<?php
$filename = "example.txt";
$data = "Пример данных для записи в файл.";
$file = fopen($filename, "w") or die("Не удалось открыть файл для записи");
fwrite($file, $data);
fclose($file);
echo "Данные успешно записаны в файл.";