<?php
$global = "abc";
function globe(){
    global $global;
    echo $global;
}
globe();