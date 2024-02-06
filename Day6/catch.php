<?php #Пятое задание
class DivisionByZeroException extends Exception {
    public function errorMessage() {
        return "Деление на ноль невозможно";
    }
}

function divide($numerator, $denominator) {
    try {
        if ($denominator === 0) {
            throw new DivisionByZeroException();
        } else {
            return $numerator / $denominator;
        }
    } catch (DivisionByZeroException | Exception $e) {
        echo "Произошла ошибка: " . $e->errorMessage();
    }
}

echo divide(10, 2) . "\n"; 
echo divide(10, 0) . "\n"; 
