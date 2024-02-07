<?php
 function readBinaryFile($filename) {
    $file = fopen($filename, "rb");
    if (!$file) {
        return false;
    }
    $data = fread($file, filesize($filename));
    fclose($file);
    
    return $data;
}
function writeBinaryFile($filename, $data) {
    $file = fopen($filename, "wb");
    if (!$file) {
        return false;
    }
    fwrite($file, $data);
    fclose($file);
    return true;
}
$filename = "binary_file.bin";
$data = "\x48\x65\x6C\x6C\x6F\x20\x57\x6F\x72\x6C\x64";
if (writeBinaryFile($filename, $data)) {
    echo "Бинарный файл успешно записан.\n";
} else {
    echo "Не удалось записать бинарный файл.\n";
}
$readData = readBinaryFile($filename);
if ($readData !== false) {
    echo "Содержимое бинарного файла: $readData";
} else {
    echo "Не удалось прочитать бинарный файл.";
}