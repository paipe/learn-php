<?php #Десятое задание
function checkInput($data) {
    if (empty($data)) {
        throw new InvalidArgumentException("Входные данные не должны быть пустыми!");
    }
    if (!is_string($data)) {
        throw new InvalidArgumentException("Входные данные должны быть строкой!");
    }
    return $data;
}
try {
    $result = checkInput("example");
    echo "Входные данные корректны: $result";
} catch (InvalidArgumentException $e) {
    echo "Ошибка: " . $e->getMessage();
}