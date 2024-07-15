<?php
error_reporting(0);
session_start();
$id=$_SESSION['email'];
require "connection.php";
$sql="SELECT * FROM registration WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($row);
$result=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Python Tutorial</title>
  <!-- To add font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- bootstrap css cdn link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- bootstrap js cdn link  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/py.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 left_side p-0" style=" overflow-y: scroll;">
        <h4 class="py-3 text-center"><i class="fa-brands fa-python"></i>Python Tutorial</h4>
        <div class="list-group">
          <a href="#intro" id="intro-section" class="list-group-item list-group-item-action active" aria-current="true">
            Python Introduction
          </a>
          <a href="#fundamental" class="list-group-item list-group-item-action">Python Fundamentals</a>
          <a href="#flowcontrol" class="list-group-item list-group-item-action">Python Flow Control</a>
          <a href="#datatype" class="list-group-item list-group-item-action">Python Data Types</a>
          <a href="#function" class="list-group-item list-group-item-action">Python Functions</a>
          <a href="#file" class="list-group-item list-group-item-action">Python Files</a>
          <a href="#execption" class="list-group-item list-group-item-action">Python Exception Handlings</a>
          <a href="#objectclass" class="list-group-item list-group-item-action">Python Object & Class</a>
          <a href="#advance" class="list-group-item list-group-item-action">Python Advanced Topic</a>
          <a href="#datetime" class="list-group-item list-group-item-action">Python Date & Time</a>
        </div>
      </div>
      <div class="col-sm-9 right_side ">
        <div class="row">
          <nav class="navbar navbar-expand px-3 bg-light text-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="dashboard.php">Dashboard</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="c.php">Language C</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="java.php">Java</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Python</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="php.php">PHP</a>
                  </li>
                </ul>

              </div>
              <img src="<?php echo $result['image']?>" width="40px" height="40px" style="border-radius:50%;">
              <h5 style="padding:5px; margin-bottom:5px; margin-right:10px;">
                <?php echo $result['name']?>
              </h5>
              <a href="http://localhost/php/projectphp/Logout.php"><button
                  class="btn btn-outline-primary">Logout</button></a>
            </div>
          </nav>
        </div>


        <div class="row">
        <!-- section for introduction  -->
        <section id="intro">
          <h2>Python Introduction</h2>
          <ul>
            <li><a href="#get-start">Getting Started with Python</a></li>
            <li><a href="#first-program">Your First Python Program</a></li>
            <li><a href="#comment">Python Comment</a></li>
          </ul>
          <div id="get-start">
            <h3 class="title">Getting Started with Python</h3>
            <p>Python is a versatile, high-level programming language that is widely supported across all major operating systems.</p> 
            <p>To execute Python code, you need to have a Python interpreter installed on your system. However, if you want to start immediately, you can use our free online Python editor that enables you to run Python code directly in your browser—no installation required.</p>
            <p>For those who prefer to install Python on your computer, this guide will walk you through the installation process on Windows, macOS, and Linux (Ubuntu).</p>
            <div id="window-installation">
              <h4>Install Python on Windows</h4>
              <p>To install Python on your Windows, just follow these steps:</p>
              <ol>
                  <li>Install VS Code</li>
                  <li>Download Python Installer File</li>
                  <li>Run the Installer</li>
                  <li>Install Python</li>
                  <li>Verify your installation</li>
              </ol>

              <p>Here is a detailed explanation of each of the steps:</p>

              <p><b>Step 1: Install VS Code</b><br>Go to the VS Code <a href="https://www.python.org">Official website</a> and download the Windows installer. Once the download is complete, run the installer and follow the installation process.<br>Click Finish to complete the installation process</p>
              <p><b>Step 2: Download the Python Installer File</b><br>Go to the <a href="https://www.python.org">official Python website</a> and download the latest version (Python 3.12.2 at the time of writing this tutorial) for Windows.</p>
              <p>The website automatically detects your operating system and gives you the right installer.</p>
              <img src="images/python-download-page1.png" alt="">
              <p><b>Step 3: Run the Installer</b><br>Now, go to your download folder and run the installer you just downloaded. Depending on your security settings, you might be prompted to allow access. <br>Simply allow it and proceed.</p>
              <p><b>Step 4: Install Python</b><br>Once you have run the installer, you will come across this screen.</p>
              <img src="images/default-installation-for-python1.png" alt="">
              <p>On the screen, you will see two options: Install Now and Customize Installation. We suggest you skip all customization steps and simply click Install Now.</p>
              <p>Check on Add python.exe to PATH as it ensures Python is added to our system's PATH variable.(Recommended)</p>
              <p>Click Install Now, as it will include all the necessary files needed later.</p>
              <p>This makes it easier to run a Python Program from the command prompt (cmd) directly without specifying the full path of the Python executable.</p>
              <p>After using this option, Python will be successfully installed in your device.</p>
              <p><b>Step 4: Verify your installation</b><br>After the installation is complete, you can verify whether Python is installed by using the following command in the command prompt. <br>python --version</p>
              <img src="images/python-installation-verify1-1.png" alt="">


              
              
              



            </div>
          </div>

          <div id="first-program">
            <h3>Your First Python Program</h3>
            <p>In the previous tutorial, you learned how to install Python on your computer. Now, let's write a simple Python program. <br>The following program displays Hello, World! on the screen.</p>
            <div class="interpreter">
              <p >print("Hello world")</p>
              <div class="run-btn">
                <a href="https://www.programiz.com/python-programming/online-compiler/?ref=be5b6980" target="_blank"><button>Run code >></button></a>
              </div>
            </div>
            <p><b>Output</b></p>
            <div class="output">
              Hello world
            </div>
          </div>

          <div id="comment">
            <h3>Python Comments</h3>
            <p>Comments are hints that we add to our code to make it easier to understand. Python comments start with #. For example,</p>
            <div class="interpreter">
              <p ># print a number<br>print(25)</p>
              <div class="run-btn">
                <a href="https://www.programiz.com/python-programming/online-compiler/?ref=8e6bf8db" target="_blank"><button>Run code >></button></a>
              </div>
            </div>
            <p>Here, # print a number is a comment.<br>Comments are completely ignored and not executed by code editors.</p>
            <h4>Single-line Comment</h4>
            <p>We use the hash (#) symbol to write a single-line comment. For example,</p>
            <div class="interpreter">
              <p># declare a variable<br>name = "John"<br># print name<br>print(name)    # John</p>
              <div class="run-btn">
                <a href="https://www.programiz.com/python-programming/online-compiler/?ref=d0bc606f" target="_blank"><button>Run code >></button></a>
              </div>
            </div>
            <p>A single-line comment starts with # and extends up to the end of the line. We can also use single-line comments alongside the code:</p>
            <div class="output">
              print(name)    # John
            </div>
            <h3>Multiline Comments</h3>
            <p>Unlike languages such as C++ and Java, Python doesn't have a dedicated method to write multi-line comments.<br>However, we can achieve the same effect by using the hash (#) symbol at the beginning of each line.<br>Let's look at an example.</p>
            <div class="interpreter">
              <p># This is an example of a multiline comment<br># created using multiple single-line commenced<br> The code prints the text Hello World<br>print("Hello, World!")</p>
              <div class="run-btn">
                <a href="https://www.programiz.com/python-programming/online-compiler/?ref=86900832" target="_blank"><button>Run code >></button></a>
              </div>
            </div>
            <p>We can also use multiline strings as comments like:</p>
            <div class="interpreter">
              <p>'''This is an example<br>of multiline comment'''<br>print("Hello, World!")</p>
              <div class="run-btn">
                <a href="https://www.programiz.com/python-programming/online-compiler/?ref=f607de33" target="_blank"><button>Run code >></button></a>
              </div>
            </div>
            <p>Output</p>
            <div class="output">
              Hello World
            </div>
          </div>
      </section>
      
      <section id="fundamental"></section>
      <section id="flowcontrol"></section>
      <section id="datatype"></section>
      <section id="function"></section>
      <section id="file"></section>
      <section id="execption"></section>
      <section id="objectclass"></section>
      <section id="advance"></section>
      <section id="datetime"></section>
      
    </div>
    </div>
  </div>
</div>
  

<script src="js/py.js"></script>

  
</body>

</html>