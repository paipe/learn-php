<?php #Первое задание
$str1 = "plan";
$str2 = "base";
$result = $str1 . " " . $str2;
echo $result, "\n";
?>

<?php #Второе задание
$str1 = "В этой строке не одно слово";
$words = explode(" ", $str1);
print_r($words);"\n";
?>

<?php #Третье задание
$str = "В этой строке так же не одно слово";
$new_str = str_replace("этой", "данной", $str);
echo $new_str, "\n";
?>

<?php #Четвёртое задание
$str = "Hello World!";
$reversed = strrev($str);
echo $reversed, "\n";
?>

<?php #Пятое задание
$str = "am i grown?";
$bigstr = strtoupper($str);
echo $bigstr,"\n";
?>

<?php #Шестое задание
$str = "Am i here?";
if (strpos($str,"here") !== false) {
    echo "I am here\n";
} else {
    echo "I am not here\n";
}
?>

<?php #Седьмое задание
$mail = "laros0160@gmail.com";
if (preg_match_all("/\\w+@gmail.com/", $mail)) {
    echo "Данная строка соответствует почте\n";
} else {
    echo "Данная строка не соответствует\n";
}
?>

<?php #Восьмое задание
function howmuch($str) {
    $words = str_word_count($str);
    return $words;
}
$str = "Interesting how much words are here?";
$wordCount = howmuch($str);
echo "В этой строке: " . $wordCount . " слов.\n";
?>

<?php #Девятое задание
$text_with_dates = "
Сегодняшняя дата: 07-02-2024
Завтрашняя дата: 08-02-2024
Послезавтрашняя дата: 09-02-2024
Вчерашняя дата: 06-02-2024
Дата 10 дней назад: 28-01-2024
Дата 10 дней вперед: 17-02-2024
Дата в прошлом году: 07-02-2023
Дата в следующем году: 07-02-2025
";
if (preg_match_all("/\d{2}-\d{2}-\d{4}/",$text_with_dates, $dates)) {
    print_r($dates);"\n";
} else {
    echo "Дат не найдено.\n";
}
?>

<?php #Десятое задание
function generateRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
$randomString = generateRandomString(10);
echo $randomString,"\n";
?>