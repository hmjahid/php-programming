<?php

$age =20;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are not yet an adult.";
}

echo "<br>";

$number = 10;

if ($number < 0) {
    echo "The number is negative.";
} elseif ($number > 0) {
    echo "The number is positive.";
} else {
    echo "The number is zero.";
}