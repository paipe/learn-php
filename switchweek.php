<?php
$dow = 3;
switch ($dow) {
    case 1: 
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
        echo "Субботу";
        break;
    case 7:
        echo "Воскресенье";
        break;
    default:
        echo "Неверный номер дня недели";
}