<?php
$oldFilename = "old_name.txt";
$newFilename = "new_name.txt";
if (rename($oldFilename, $newFilename)) {
    echo "Файл успешно переименован.";
} else {
    echo "Не удалось переименовать файл.";
}