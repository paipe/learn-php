<?php
function generator() {
    for ($i = 1; $i <= 10; $i++) {
        yield $i;
    }
}
foreach (generator() as $number) {
    echo $number . "\t";
}