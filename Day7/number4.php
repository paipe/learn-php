<?php
function copyFile($source, $destination) {
    $sourceFile = fopen($source, "rb");
    if (!$sourceFile) {
        return false;
    }
    $destinationFile = fopen($destination, "wb");
    if (!$destinationFile) {
        fclose($sourceFile);
        return false;
    }
    while (!feof($sourceFile)) {
        $data = fread($sourceFile, 8192);
        fwrite($destinationFile, $data);
    }
    fclose($sourceFile);
    fclose($destinationFile);
    
    return true;
}
$sourceFile = "example.txt";
$destinationFile = "destination.txt";
if (copyFile($sourceFile, $destinationFile)) {
    echo "Файл успешно скопирован.";
} else {
    echo "Не удалось скопировать файл.";
}