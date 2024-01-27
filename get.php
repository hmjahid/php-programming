<?php

  if(isset($_GET['lang']) AND isset($_GET['coursep'])) {
    
    $get = $_GET['lang'];

    $coursep = $_GET['coursep'];

    echo "My favourite language is: $get and my course provider is: $coursep";
  }

?>
