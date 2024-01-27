<?php

function myFunction() {
    
    echo "Hello! It's my first function.";

    $username = "mdjahidhasan";

    if ($username == "mdjahidhasan") {
        echo "<br>Welcome, Mr. {$username}!";
    } else {
        echo "<br>Sorry, you are not allowed here.";
    }
}

myFunction();



echo "<br>";



function _PrintFullName($_FullName, $_Age) {

    echo "Your Full Name is: $_FullName";

    echo "<br>";

    echo "You are ". $_Age ." years old.";

}

_PrintFullName("Md Jahid Hasan", 30);