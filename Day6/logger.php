<?php #Восьмое задание
$logFile = 'error.log';
error_reporting(E_ALL);
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    $errorMessage = date('[Y-m-d H:i:s]') . " Ошибка: [$errno] $errstr в файле $errfile на строке $errline\n";
    file_put_contents('error.log', $errorMessage, FILE_APPEND);
    echo "Произошла ошибка. Подробности записаны в лог-файл.\n";
}
set_error_handler('customErrorHandler');
$file = fopen('nonexistent_file.txt', 'r');