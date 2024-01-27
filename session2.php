<?php

  session_start();

  $_SESSION['user'] = 'hmjahid';
  $_SESSION['myAge'] = 27;

  echo "My new username is: " . $_SESSION['user'] . ". My age is: " . $_SESSION['myAge'];

  
  echo "<br>";

  echo "It is now set.";