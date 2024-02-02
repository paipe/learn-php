<?php
function modify(&$var){
    $var *= 2;
}
$val = 15;
modify($val);
echo $val;