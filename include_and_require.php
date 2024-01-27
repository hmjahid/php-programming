<?php

// require can't bypass error

require "file.php";

echo "<br>";

echo "More from Include and Require";

echo "<br>";

echo "hello atlast";

echo "<br>";

// include bypass error

include "file0.php";