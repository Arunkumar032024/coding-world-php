<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <!-- To add favicon icon  -->
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    

    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/faq1.css">
</head>
<body class="index" >
    <?php

    require('generalheader.php');
    ?>

      <!-- main section design -->
      <div class="container-fluid faq py-5">
      <div class="accordion w-75 mx-auto" id="accordionExample">
        <h3>Frequently Asked Question <i class="fa-solid fa-question"></i></h3>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      What programming languages do you teach?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      We offer courses in a wide range of programming languages, including Python, JavaScript, Java, HTML/CSS, and more. Our curriculum is designed to cater to both beginners and advanced learners.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      How do I get started on your platform?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Simply create an account on our website and explore our catalog of courses. You can choose a course that interests you and begin learning at your own pace.

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Are your courses suitable for beginners?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Yes, we offer courses specifically designed for beginners with no prior coding experience. Our step-by-step tutorials and interactive exercises make learning programming accessible to everyone.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      Do you offer certifications upon completion of courses?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Yes, we provide certificates of completion for most of our courses. These certificates can be a valuable addition to your resume and demonstrate your proficiency to potential employers.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseFive">
      Are there any fees or subscriptions required for access to learning materials?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      No, all our learning materials are completely free to access. There are no hidden fees or subscriptions required. We believe in making quality coding education accessible to everyone.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      How frequently are courses updated to reflect industry changes?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      We continuously update our courses to keep up with the latest industry trends and technologies. Our team of experts regularly reviews and refreshes the content to ensure it remains relevant and up-to-date.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      Is there a community forum or support system for learners?
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Yes, we have an active community forum where learners can ask questions, share knowledge, and interact with fellow students and instructors. Our support team is also available to assist you with any issues or concerns you may have.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
      Do you provide mentorship or tutoring options?
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      While we don't offer one-on-one mentorship or tutoring, our courses are designed to be self-paced and comprehensive. However, our community forum is a great place to seek guidance and support from experienced developers and instructors.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
      Can I access the learning materials offline?
      </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Unfortunately, our learning materials are only available online through our website. However, you can access them from any device with an internet connection, allowing you to learn anytime, anywhere.
      </div>
    </div>
  </div>
</div>
      </div>
      
      <!-- End main section design -->

      <!-- footer section design -->
      <?php
      require('generalfooter.php');
      ?>
      <!-- End footer section design -->

      <script src="js/custom.js"></script>
</body>
</html>