<?php #Девятое задание
try {
    throw new Exception("Это пользовательское исключение!");
} catch (Exception $e) {
    echo "Произошло исключение: " . $e->getMessage();
}