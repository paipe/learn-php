<?php #Четвёртое задание
function readDataFromFile($filename) {
    $file = fopen($filename, "r");

    try {
        while (!feof($file)) {
            echo fgets($file) . "\n";
        }
    } catch (Exception $e) {
        echo "Произошла ошибка: " . $e->getMessage();
    } finally {
        if (isset($file)) {
            fclose($file);
        }
    }
}

readDataFromFile("example.txt");
