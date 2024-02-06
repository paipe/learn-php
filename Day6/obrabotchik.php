<?php #Шестое задание
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Произошла ошибка: [$errno] $errstr в файле $errfile на строке $errline<\n>";
}
set_error_handler("customErrorHandler");
$result = 10 / 0;
restore_error_handler();
$file = fopen("nonexistent_file.txt", "r");
echo "Скрипт завершен успешно";
