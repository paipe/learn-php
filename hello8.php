<?php
function hello($name = "Guest", $time = "afternoon") {
    echo "Good $time, $name!\n";
}
hello();
hello("Andrew", "mo");