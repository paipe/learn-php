<?php #Первое задание
try {
    $result = '10 / 0';
    echo "Результат деления: $result\n";
} catch (Exception $e) {
    echo "Произошла ошибка: " . $e->getMessage();
}
?>

<?php # Второе задание
class DivisionByZeroException extends Exception {
    public function errorMessage() {
        return "Деление на ноль невозможно";
    }
}

function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new DivisionByZeroException();
    } else {
        return $numerator / $denominator;
    }
}

try {
    $result = divide(10, 0);
    echo "Результат деления: $result";
} catch (DivisionByZeroException $e) {
    echo "Произошла ошибка: " . $e->errorMessage();
}
?>