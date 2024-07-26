<?php

$con=mysqli_connect("localhost","root","","10april");

if(isset($_POST['login'])){
    $e=$_POST['email'];
    $p=$_POST['pass'];
$sel="SELECT * FROM login WHERE email='$e' AND password='$p'";
$rs=$con->query($sel);
if($rs->num_rows>0){
    $row=$rs->fetch_assoc();
    $_SESSION['un']= $row['name'];
    header("location:xx.php");
}
else{
    echo "login failed";

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/singup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<section class="forms-section">
  <h1 class="section-title">Login & Signup Forms</h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>




      <form class="form form-login"  action="" method="POST">
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="login-email" name="email" type="email" required>
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input id="login-password" name="pass" type="password" required>
          </div>
        </fieldset>
        <button type="login" name="login" class="btn-login">Login</button>
      </form>





    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
      </button>




      <form class="form form-signup" action="ins.php" method="post">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-username">Username</label>
            <input id="signup-email" type="text" name="name" required>
          </div>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" name="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" name="pass" required>
          </div>
        </fieldset>
        <button type="submit" name="singup" class="btn-signup">Sign Up</button>
      </form>




    </div>
  </div>
</section>

<script src="script.js"></script>
</body>
</html>