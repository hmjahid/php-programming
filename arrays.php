<?php

// indexed array

$users = array("jahid", "alamin", "osman", "shariful");

echo $users[0];

echo "<br>";

echo count($users);

echo "<br>";

print_r($users); // print all elements of an array

echo "<br>";

var_dump($users);  // show the type and value of variable

echo "<br>";




// associative array

$salary = ['rahim' => 5000, 'karim' => 5500, 'babul' => 6000];

echo $salary['rahim'];

echo "<br>";

echo count($salary);   // it will return number of key in array. In this

echo "<br>";

foreach ($salary as $key => $value) {
    echo "Salary of " . $key . " is: " . $value;
    echo "<br>";
}

echo "<br>";


// Multi-dimentional array


$multi = array(
    array('jahid', 'alamin', 'osman'),
    array('mango', 'apple', 'banana'),
    array('ssc', 'hsc', 'bsc'),
    array('5.00', '5.00', '3.40')
);

echo $multi[3][0] ;     // output apple

echo "<br>";

print_r($multi);

echo "<br>";

var_dump($multi);

