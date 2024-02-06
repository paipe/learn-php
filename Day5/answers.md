## День 5. Ответы на вопросы.
1. В PHP много операций, на действия со строками. Вот некоторые из них:
    ```php
    #Конкатенация строк! . или concat():

    $str1 = "Hello";
    $str2 = "world";
    $result = $str1 . " " . $str2;

    #Поиск подстрок:

    $str = "Hello world";
    $pos = strpos($str, "world"); #результат - 6

    $pos = stripos($str, "World"); #результат - 6, игнорирует регистр

    $pos = strstr($str, "world"); # результат - "world"

    $pos = stristr($str, "World"); # результат - "world", игнорирует регистр

    $pos = strpos($str, "world"); # результат - 6

    #Замена подстроки:

    $str = "Hello world";
    $new_str = str_replace("world", "PHP", $str); # Результат: "Hello PHP"

    $str = "Hello world";
    $new_str = preg_replace("/world/", "PHP", $str); # Результат: "Hello PHP"

    #Разделение строки на подстроки:

    $str = "apple,banana,orange";
    $fruits = explode(",", $str); # Результат: ["apple", "banana", "orange"]

    $str = "apple,banana,orange";
    $fruits = preg_split("/,/", $str); # Результат: ["apple", "banana", "orange"]

    #Преобразование регистра:

    $str = "hello world";
    $upper_str = strtoupper($str); # Результат: "HELLO WORLD"

    $str = "HELLO WORLD";
    $upper_str = strtoupper($str); # Результат: "hello world"

    $str = "hello world";
    $new_str = ucfirst($str); # Результат: "Hello world"

    $str = "hello world";
    $new_str = ucwords($str); # Результат: "Hello World"

    #Удаление пробелов:

    $str = "   Hello world   ";
    $trimmed_str = trim($str); # Результат: "Hello world"

    $str = "   Hello world";
    $new_str = ltrim($str); # Результат: "Hello world" (пробельные символы удалены с начала строки)

    $str = "Hello world    ";
    $new_str = rtrim($str); # Результат: "Hello world" (пробельные символы удалены с конца строки)

    #Форматирование:

    $name = "Andrey";
    $age = 20;
    $formatted_str = sprintf("My name is %s and I am %d years old.", $name, $age); # Результат: "My name is Andrey and I am 20 years old."

    $name = "Andrey";
    $age = 20;
    $string = vsprintf("My name is %s and I am %d years old.", [$name, $age]);
    # Результат: "My name is Andrey and I am 20 years old."

    # Длина строки:

    $str = "Hello world";
    $length = strlen($str); # Результат: 11
    ```
2. Регулярные выражения - это инструмент для поиска, замены и сопоставления текста на основе шаблонов. 
    - **preg_match()**: Используется для выполнения проверки, соответствует ли шаблон хотя бы одной части строки.
    - **preg_match_all()**: Используется для выполнения проверки, соответствует ли шаблон всем частям строки.
    - **preg_replace()**: Используется для замены всех вхождений шаблона в строке на другую строку.
    - **preg_split()**: Используется для разделения строки на массив подстрок, используя регулярное выражение в качестве разделителя.<br>
    ```php
    $str = "The quick brown fox jumps over the lazy dog.";
    # Поиск слова "fox" в строке
    if (preg_match("/fox/", $str)) {
    echo "Слово 'fox' найдено.";
    } else {
    echo "Слово 'fox' не найдено.";
    }

    # Поиск всех слов в строке
    $words = preg_match_all("/\b\w+\b/", $str, $matches);
    print_r($matches);

    # Замена слова "fox" на "cat"
    $new_str = preg_replace("/fox/", "cat", $str);
    echo $new_str;

    # Разделение строки на слова
    $words = preg_split("/\s+/", $str);
    print_r($words);
    ```
3. Существует несколько способов разделить строку на массив. Вот несколько из них:
```php
#Функиця explode():

$str = "apple,banana,orange";
$fruits = explode(",", $str); # Результат: ["apple", "banana", "orange"]

#Функция preg_split():

$str = "apple,banana,orange";
$fruits = preg_split("/,/", $str); # Результат: ["apple", "banana", "orange"]

#Функция str_split():

$str = "apple";
$letters = str_split($str); # Результат: ["a", "p", "p", "l", "e"]

#Через цикл:

$str = "apple";
$letters = [];
for ($i = 0; $i < strlen($str); $i++) {
    $letters[] = $str[$i];
}
```
4. Это можно сделать при помощи **implode()** или **join()**:
```php
$array = ["apple", "banana", "orange"];
$string = implode(", ", $array); # Результат: "apple, banana, orange"
```
5. 4 варианта поиска были указаны в ответе на первый вопрос. Но могу так же добавить ещё один:
```php
#Функция substr():

$str = "Hello world";
$result = substr($str, strpos($str, "world")); # Результат: "world"
```
6. Часть ответа была в первом вопросе. Но есть ещё один метод для замены части строки на другую:
```php
$str = "Hello world";
$new_str = substr_replace($str, "PHP", 6, 5); # Результат: "Hello PHP"
```
7. 4 способа были указаны в первом вопросе.
8. Ответ был в первом вопросе.
9. Escape-последовательности в строках - это специальные символы, которые используются для представления символов, которые трудно или невозможно ввести непосредственно в коде. Эти последовательности начинаются с обратной косой черты (\\) и за ней следует символ, обозначающий специальный символ или комбинацию символов. Вот некоторые общие escape-последовательности:
    - **\n** - перевод строки (newline).
    - **\r** - возврат каретки (carriage return).
    - **\t** - табуляция (horizontal tab).
    - **\\\ -** обратная косая черта.
    - **\\"** - двойная кавычка.
    - **\\'** - одинарная кавычка.
10. Ответ был во втором вопросе.