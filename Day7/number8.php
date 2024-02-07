<?php
function getFilesInDirectory($directory) {
    $files = [];
    if (is_dir($directory)) {
        if ($dh = opendir($directory)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != "." && $file != "..") {
                    $files[] = $file;
                }
            }
            closedir($dh);
        }
    }
    return $files;
}
$directory = "example_directory";
$files = getFilesInDirectory($directory);
if (!empty($files)) {
    echo "Список файлов в директории \"$directory\":\n";
    foreach ($files as $file) {
        echo "$file\n";
    }
} else {
    echo "Директория \"$directory\" пуста.";
}