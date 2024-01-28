<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<?php 


  if(isset($_SESSION['username'])) {
      header("location: index.php");
  }


  if (isset($_POST['submit'])) {

    if($_POST['email'] == '' OR $_POST['password'] == '') {

      echo "Some fields are empty";

    } else {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $login = $conn->query("SELECT * FROM users where email = '$email");

      $login->execute();

      $data = $login->fetch(PDO::FETCH_ASSOC);

      


      if($login->rowCount() > 0) {

        if(password_verify($password, $data['mypassword'])) {

          $_SESSION['username'] = $data['username'];
          $_SESSION['email'] = $data['email'];

          header("location:index.php");
          
        } else {
          echo "Wrong Email/password!";
        }

      } else {
        echo "Email or Pssword is wrong!";
      }
    }
  }


?>



<main class="form-signin w-50 m-auto">
  <form method="POST" action="login.php">
    <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mt-5 fw-normal text-center">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <h6 class="mt-3">Don't have an account  <a href="register.php">Create your account</a></h6>
  </form>
</main>
<?php require "includes/footer.php"; ?>
