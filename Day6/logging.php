<?php #Третье задание
function divide($numerator, $denominator) {
    try {
        if ($denominator === 0) {
            throw new Exception("Деление на ноль невозможно");
        } else {
            return $numerator / $denominator;
        }
    } catch (Exception $e) {
        $errorMessage = "[" . date('Y-m-d H:i:s') . "] Ошибка: " . $e->getMessage() . "\n";
        error_log($errorMessage, 3, "error.log");
        return "Произошла ошибка при делении: " . $e->getMessage();
    }
}

echo divide(10, 2) . "\n";
echo divide(10, 0) . "\n";