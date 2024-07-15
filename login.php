<?php
error_reporting(0);
session_start();
require('generalheader.php');

require('connection.php');
if(isset ($_POST["email"])){
$email=$_POST["email"];
$password=$_POST["pass"];
$sql="SELECT * FROM registration WHERE email='$email' && password='$password'";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($query);
$result=mysqli_fetch_assoc($query);

  if($row==1){
    $_SESSION['email']=$result['id'];
  echo"<script>location.href='dashboard.php'</script>";
}
else{
  echo"<script>alert('you are not resgister this data')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- To add favicon icon  -->
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    

    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/signin.css">
</head>
<body class="index" >


<!-- main section design  -->
<div class="container-fluid signin">
<main class=" w-25 m-auto">
  <form action="login.php" method="post">
    
    <h1 class="h3 mb-3 fw-normal">Please sign in <i class="fa-solid fa-right-to-bracket"></i></h1>

    <div class="form-floating mb-3">
      <input type="email" class="form-control" name="email" placeholder="name@example.com">
      <label>Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" name="pass" placeholder="Password">
      <label>Password</label>
    </div>

    <!-- <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div> -->
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2024-2025</p>
  </form>
</main>
</div>

<!-- End main section design  -->

      <!-- footer section design -->
      <?php
      require('generalfooter.php');
      ?>
      <!-- End footer section design -->

      <script src="assets/js/custom.js"></script>
</body>
</html>