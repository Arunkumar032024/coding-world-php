<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- To add favicon icon  -->
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">


  <!-- stylesheet -->
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/contact.css">
</head>

<body class="index" >
  <?php

    require('generalheader.php');
    ?>

  <!-- main section design  -->
  <div class="container-fluid contact" style="background: url(./assets/images/signin.jpg) no-repeat; background-attachment: fixed; background-size: cover; background-position: center;">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10 mt-5" style=" border: 1px solid rgba(0,0,0,0.3); padding: 2%; border-radius: 5px; box-shadow: 1px 2px 2px 2px rgba(0,0,0,0.2);;">
        <div class="row mt-5">
      <div class="col-12 col-lg-6">
        <div class="col-12">
          <i class="fa-solid fa-phone"></i>
          <p><a href="tel:7817846019">helpline</a></p>
        </div>
        <div class="col-12">
          <i class="fa-solid fa-envelope"></i>
          <p><a href="#">coding@gmail.com</a></p>
        </div>
        <div class="col-12">
          <i class="fa-solid fa-location-dot"></i>
          <p>Govt. Leather Institute Nunhai Agra  <a href="#" id="location">view location</a></p>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3 text-center">Contact us</h4>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
            style="height: 100px"></textarea>
          <label for="floatingTextarea2">Comments</label>
        </div>
        <div class="col-12 mt-3">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </div>
        </div>
    </div>

    <div class="map-div">
      <div><i class="fa-solid fa-xmark" id="map-close"></i></div>
      <iframe id="map"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14194.224878794592!2d78.0524221!3d27.2016814!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39747092bf6bdfc5%3A0x13e9a2f63994c2bc!2sGovernment%20Leather%20Institute!5e0!3m2!1sen!2sin!4v1715235612652!5m2!1sen!2sin"
        width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    </div>
    <div class="col-sm-1"></div>
  </div>
  <!-- End main section design  -->

  <!-- footer section design -->
  <?php
      require('generalfooter.php');
      ?>
  <!-- End footer section design -->

  <script src="assets/js/custom.js"></script>
  <script src="assets/js/contact.js"></script>

</body>

</html>