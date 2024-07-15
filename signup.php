<?php
 error_reporting(0);
 require('generalheader.php');
 require("connection.php");

 if(isset ($_POST['name'])){
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$password=$_POST["pass"];
$cpassword=$_POST["cpass"];

$filename=$_FILES['uploadfile']['name'];
$tempname=$_FILES['uploadfile']['tmp_name'];
$folder="assets/images/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);
echo $folder;
if($password==$cpassword){
$sql="INSERT INTO registration (name,email,mobile,password,image) VALUES('$name','$email','$mobile','$password','$folder')";
$query=mysqli_query($con,$sql);
if($query){
  
  ?><script>alert('Successfully'); location.href ="login.php"</script><?php
  // header('location:login.php');
  
}
else{
  echo"<script>alert('failed')</script>"; 
}
}
else{
  echo"<script>alert('Password is not match')</script>";
}
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- To add favicon icon  -->
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    

    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<body class="index" >
    <?php

   
    ?>



<!-- main section design  -->
<div class="container-fluid signup">
<main class=" w-25 my-5 m-auto">
  <form action="signup.php" method="post" enctype="multipart/form-data">
    
    <h1 class="h3 mb-3 fw-normal">Please Sign Up <i class="fa-solid fa-user-plus"></i></h1>

    <div class="form-floating mb-3">
      <input type="text" name="name" class="form-control" placeholder="Username" required>
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="number" name="mobile" class="form-control" placeholder="Mobile No." required>
      <label for="floatingInput">Mobile No.</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" name="pass" class="form-control" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required>
      <label for="floatingPassword">Confirm Password</label>
    </div>
    <div class="form-floating mb-3">
      <input type="file" name="uploadfile" accept=".png,.jpg,.jpeg" required>
      <!-- <label for="floatingPassword">Confirm Password</label> -->
    </div>

    <!-- <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div> -->
    <button class="btn btn-primary w-100 py-2" type="submit" name="sign">Sign Up</button>
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