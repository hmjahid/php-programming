<?php

  if(isset($_GET['lang'])) {
    $get = $_GET['lang'];

    echo "My favourite language is: $get";
  }

?>


<html>
    <head></head>
    <body>

        <a href="get.php?lang=php&coursep=Udemy">Get Link</a>

    </body>
</html>