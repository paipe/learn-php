<?php
function HTML($array) {
    $html = '<ul>';
    foreach ($array as $item) {
        $html .= "<li>$item</li>";
    }
    $html .= '</ul>';
    return $html;
}
$myArray = ["Item 1", "Item 2", "Item 3"];
echo HTML($myArray);