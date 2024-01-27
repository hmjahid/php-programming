<?php

  session_start();

?>



<html>
    <head></head>
    <body>
        <h1><?php echo "Username is: " . $_SESSION['username'] . ", age is: ". $_SESSION['age']. ", favourite color is: " . $_SESSION['favourite_color']; ?></h1>
    </body>
</html>