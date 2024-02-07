<?php
$sourceDirectory = "/path/to/source/directory/";
$destinationDirectory = "/path/to/destination/directory/";
$filename = "example.txt";
$sourceFile = $sourceDirectory . $filename;
if (file_exists($sourceFile)) {
    $destinationFile = $destinationDirectory . $filename;
    if (rename($sourceFile, $destinationFile)) {
        echo "Файл \"$filename\" успешно перемещен из \"$sourceDirectory\" в \"$destinationDirectory\".";
    } else {
        echo "Не удалось переместить файл \"$filename\".";
    }
} else {
    echo "Файл \"$filename\" не существует в директории \"$sourceDirectory\".";
}