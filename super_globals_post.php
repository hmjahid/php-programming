<?php

    if(isset($_POST['submit'])) {

        $username = $_POST['username'];

        $email = $_POST['email'];

        echo "My username is: $username and my email id is: $email";
    }


?>


<html>
    <head>Form</head>
    <body>
        <form method="POST" action="super_globals_post.php">
            username: <input type="text" name="username">

            <br>

            email: <input type="text" name="email">

            <br>

            <input type="submit" name="submit">
        </form>
    </body>
</html>