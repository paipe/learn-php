<?php
$filename = "example.txt";
if (file_exists($filename)) {
    if (unlink($filename)) {
        echo "Файл $filename успешно удален.";
    } else {
        echo "Не удалось удалить файл $filename.";
    }
} else {
    echo "Файл $filename не существует.";
}