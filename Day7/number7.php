<?php
$directoryName = "example_directory";
if (mkdir($directoryName)) {
    echo "Директория \"$directoryName\" успешно создана.\n";
    if (rmdir($directoryName)) {
        echo "Директория \"$directoryName\" успешно удалена.";
    } else {
        echo "Не удалось удалить директорию \"$directoryName\".";
    }
} else {
    echo "Не удалось создать директорию \"$directoryName\".";
}