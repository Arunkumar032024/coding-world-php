<?php
error_reporting(0);
session_start();

if($_SESSION['email']){
?>
<?php
$id=$_SESSION['email'];
require "connection.php";
$sql="SELECT * FROM registration WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($row);
$result=mysqli_fetch_assoc($query);

$email=$_SESSION['email'];
if($result['id'] != $email){
      // echo("<script>alert('hi')</script>");
      header("location:login.php");
      session_destroy();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Python Language</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/languages.css">
  </head>
  <body>
    <main class="container-fluid">
        <div class="row">
            <!-- sidebar menu section  -->
            <div class="offcanvas offcanvas-start offcanvas" id="demo"    >
              <div class="offcanvas-header">
                <h1 class="offcanvas-title">Python Tutorial</h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
              </div>
              <div class="offcanvas-body">
                <div class="col-lg-3">
                  <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Python Introduction
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="list-group">
                                  <a href="#first1" class="list-group-item list-group-item-action" >Getting Started with Python</a>
                                  <a href="#first2" class="list-group-item list-group-item-action" >Your First Python Program</a>
                                  <a href="#first3" class="list-group-item list-group-item-action" >Python Comments</a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              Python Fundamentals
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="list-group">
                                  <a href="#second1" class="list-group-item list-group-item-action">Python Variables and Literals</a>
                                  <a href="#second2" class="list-group-item list-group-item-action">Python Type Conversion</a>
                                  <a href="#second3" class="list-group-item list-group-item-action">Python Basic Input and Output</a>
                                  <a href="#second4" class="list-group-item list-group-item-action">Python Operators</a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              Python Flow Control
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="list-group">
                                  <a href="#third1" class="list-group-item list-group-item-action">Python if...else Statement</a>
                                  <a href="#third2" class="list-group-item list-group-item-action">Python for Loop</a>
                                  <a href="#third3" class="list-group-item list-group-item-action">Python while Loop</a>
                                  <a href="#third4" class="list-group-item list-group-item-action">Python break and continue</a>
                                  <a href="#third5" class="list-group-item list-group-item-action">Python pass Statement</a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              Python Data types
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="list-group">
                                  <a href="#four1" class="list-group-item list-group-item-action">Python Numbers, Type Conversion and Mathematics</a>
                                  <a href="#four2" class="list-group-item list-group-item-action">Python List</a>
                                  <a href="#four3" class="list-group-item list-group-item-action">Python Tuple</a>
                                  <a href="#four4" class="list-group-item list-group-item-action">Python Strings</a>
                                  <a href="#four5" class="list-group-item list-group-item-action">Python Sets</a>
                                  <a href="#four6" class="list-group-item list-group-item-action">Python Dictionary</a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                              Python Functions
                          </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="list-group">
                                  <a href="#five1" class="list-group-item list-group-item-action">Python Functions</a>
                                  <a href="#five2" class="list-group-item list-group-item-action">Python Function Arguments</a>
                                  <a href="#five3" class="list-group-item list-group-item-action">Python Variable Scope</a>
                                  <a href="#five4" class="list-group-item list-group-item-action">Python Global Keyword</a>
                                  <a href="#five5" class="list-group-item list-group-item-action">Python Recursion</a>
                                  <a href="#five6" class="list-group-item list-group-item-action">Python Modules</a>
                                  <a href="#five7" class="list-group-item list-group-item-action">Python Package</a>
                                  <a href="#five8" class="list-group-item list-group-item-action">Python Main function</a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                              Python Files
                          </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="list-group">
                                  <a href="#six1" class="list-group-item list-group-item-action">Python Directory and Files Management</a>
                                  <a href="#six2" class="list-group-item list-group-item-action">Python CSV: Read and Write CSV Files</a>
                                  <a href="#six3" class="list-group-item list-group-item-action">Reading CSV files in Python</a>
                                  <a href="#six4" class="list-group-item list-group-item-action">Writing CSV files in Python</a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                              Python Exception Handling
                          </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="list-group">
                                  <a href="#seven1" class="list-group-item list-group-item-action">Python Exceptions</a>
                                  <a href="#seven2" class="list-group-item list-group-item-action">Python Exception Handling</a>
                                  <a href="#seven3" class="list-group-item list-group-item-action">Python Custom Exceptions</a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                              Python Object & Class
                          </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="list-group">
                                  <a href="#eight1" class="list-group-item list-group-item-action">Python Classes and Objects</a>                                </a>
                                  <a href="#eight2" class="list-group-item list-group-item-action">Python Inheritance</a>                                </a>
                                  <a href="#eight3" class="list-group-item list-group-item-action">Python Multiple Inheritance</a>                                </a>
                                  <a href="#eight4" class="list-group-item list-group-item-action">Polymorphism in Python</a>                                </a>
                                  <a href="#eight5" class="list-group-item list-group-item-action">Python Operator Overloading</a>                                </a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                              Python Date and Time
                          </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <div class="list-group">
                                  <a href="#nine1" class="list-group-item list-group-item-action">Python datetime</a>
                                  <a href="#nine2" class="list-group-item list-group-item-action">Python strftime()</a>
                                  <a href="#nine3" class="list-group-item list-group-item-action">Python strptime()</a>
                                  <a href="#nine4" class="list-group-item list-group-item-action">How to get current date and time in Python?</a>
                                  <a href="#nine5" class="list-group-item list-group-item-action">Python Get Current time</a>
                                  <a href="#nine6" class="list-group-item list-group-item-action">Python timestamp to datetime and vice-versa</a>
                                  <a href="#nine7" class="list-group-item list-group-item-action">Python time Module</a>
                                  <a href="#nine8" class="list-group-item list-group-item-action">Python sleep()</a>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>  
              </div>
              </div>
            </div>

            <button class="offcanvas-button d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
              <i class="fa-solid fa-list"></i>
            </button>



            <div class="col-lg-3 large-screen">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Python Introduction
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <a href="#first1" class="list-group-item list-group-item-action">Getting Started with Python</a>
                                <a href="#first2" class="list-group-item list-group-item-action">Your First Python Program</a>
                                <a href="#first3" class="list-group-item list-group-item-action">Python Comments</a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Python Fundamentals
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <a href="#second1" class="list-group-item list-group-item-action">Python Variables and Literals</a>
                                <a href="#second2" class="list-group-item list-group-item-action">Python Type Conversion</a>
                                <a href="#second3" class="list-group-item list-group-item-action">Python Basic Input and Output</a>
                                <a href="#second4" class="list-group-item list-group-item-action">Python Operators</a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Python Flow Control
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <a href="#third1" class="list-group-item list-group-item-action">Python if...else Statement</a>
                                <a href="#third2" class="list-group-item list-group-item-action">Python for Loop</a>
                                <a href="#third3" class="list-group-item list-group-item-action">Python while Loop</a>
                                <a href="#third4" class="list-group-item list-group-item-action">Python break and continue</a>
                                <a href="#third5" class="list-group-item list-group-item-action">Python pass Statement</a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Python Data types
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <a href="#four1" class="list-group-item list-group-item-action">Python Numbers, Type Conversion and Mathematics</a>
                                <a href="#four2" class="list-group-item list-group-item-action">Python List</a>
                                <a href="#four3" class="list-group-item list-group-item-action">Python Tuple</a>
                                <a href="#four4" class="list-group-item list-group-item-action">Python Strings</a>
                                <a href="#four5" class="list-group-item list-group-item-action">Python Sets</a>
                                <a href="#four6" class="list-group-item list-group-item-action">Python Dictionary</a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            Python Functions
                        </button>
                      </h2>
                      <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <a href="#five1" class="list-group-item list-group-item-action">Python Functions</a>
                                <a href="#five2" class="list-group-item list-group-item-action">Python Function Arguments</a>
                                <a href="#five3" class="list-group-item list-group-item-action">Python Variable Scope</a>
                                <a href="#five4" class="list-group-item list-group-item-action">Python Global Keyword</a>
                                <a href="#five5" class="list-group-item list-group-item-action">Python Recursion</a>
                                <a href="#five6" class="list-group-item list-group-item-action">Python Modules</a>
                                <a href="#five7" class="list-group-item list-group-item-action">Python Package</a>
                                <a href="#five8" class="list-group-item list-group-item-action">Python Main function</a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Python Files
                        </button>
                      </h2>
                      <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <a href="#six1" class="list-group-item list-group-item-action">Python Directory and Files Management</a>
                                <a href="#six2" class="list-group-item list-group-item-action">Python CSV: Read and Write CSV Files</a>
                                <a href="#six3" class="list-group-item list-group-item-action">Reading CSV files in Python</a>
                                <a href="#six4" class="list-group-item list-group-item-action">Writing CSV files in Python</a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            Python Exception Handling
                        </button>
                      </h2>
                      <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <a href="#seven1" class="list-group-item list-group-item-action">Python Exceptions</a>
                                <a href="#seven2" class="list-group-item list-group-item-action">Python Exception Handling</a>
                                <a href="#seven3" class="list-group-item list-group-item-action">Python Custom Exceptions</a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            Python Object & Class
                        </button>
                      </h2>
                      <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <a href="#eight1" class="list-group-item list-group-item-action">Python Classes and Objects</a>                                </a>
                                <a href="#eight2" class="list-group-item list-group-item-action">Python Inheritance</a>                                </a>
                                <a href="#eight3" class="list-group-item list-group-item-action">Python Multiple Inheritance</a>                                </a>
                                <a href="#eight4" class="list-group-item list-group-item-action">Polymorphism in Python</a>                                </a>
                                <a href="#eight5" class="list-group-item list-group-item-action">Python Operator Overloading</a>                                </a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                            Python Date and Time
                        </button>
                      </h2>
                      <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <a href="#nine1" class="list-group-item list-group-item-action">Python datetime</a>
                                <a href="#nine2" class="list-group-item list-group-item-action">Python strftime()</a>
                                <a href="#nine3" class="list-group-item list-group-item-action">Python strptime()</a>
                                <a href="#nine4" class="list-group-item list-group-item-action">How to get current date and time in Python?</a>
                                <a href="#nine5" class="list-group-item list-group-item-action">Python Get Current time</a>
                                <a href="#nine6" class="list-group-item list-group-item-action">Python timestamp to datetime and vice-versa</a>
                                <a href="#nine7" class="list-group-item list-group-item-action">Python time Module</a>
                                <a href="#nine8" class="list-group-item list-group-item-action">Python sleep()</a>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>  
            </div> 
            
            <!-- End sidebar menu section -->

            <!-- content section -->
            
            <div class="col-lg-9" style="padding: 0; margin: 0;">
              <!-- for navbar -->
              <div class="row" >
                <nav class="navbar navbar-expand px-3 bg-light text-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
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
                                    <a class="nav-link" href="c++.php">C++</a>
                                </li>
                            </ul>

                        </div>
                        <img class="nab-img" src="<?php echo $result['image']?>" width="40px" height="40px"
                            style="border-radius:50%;">
                        <h5 style="padding:5px; margin-bottom:5px; margin-right:10px;">
                            <?php echo $result['name']?>
                        </h5>
                        
                    </div>
                </nav>
            </div>
             <div class="row"></div>

              <!-- for content  -->
              <div class="row" style="padding: 2%;">
<!-- first menu sections -->
<section id="first1">
  <h1>Getting Started With Python</h1>
  <div class="content">
    <p id="introduction">Python is a versatile, high-level programming language that is widely supported across all major operating systems.
</p>

<p>To execute Python code, you need to have a Python interpreter installed on your system. However, if you want to start immediately, you can use our free <a href="<a%20href=">online Python editor</a> that enables you to run Python code directly in your browser—no installation required.</p>

<p>For those who prefer to install Python on your computer, this guide will walk you through the installation process on Windows, macOS, and Linux (Ubuntu).
</p>

<div>
<div class="tabbed-editor-content">
  <div class="tabbed-editor-content__node tabbed-editor-content__node--active">
    <a href="#windows">Windows</a>
  </div>
  <div class="tabbed-editor-content__node">
    <a href="#linux">Linux</a>
  </div>
   <div class="tabbed-editor-content__node">
    <a href="#mac">MacOS</a>
  </div>
</div>
<div class="tabbed-editor-content--items">
  <div class="tabbed-editor-content__item tabbed-editor-content__item--active" id="windows">
    <h2 id="windows">Install Python on Windows</h2>

<p>To install Python on your Windows, just follow these steps:</p>

<ol>
<li>Install VS Code</li>
<li>Download Python Installer File</li>
<li>Run the Installer</li>
<li>Install Python</li>
<li>Verify your installation</li>
</ol>

<p>Here is a detailed explanation of each of the steps:</p>

<h3>Step 1: Install VS Code</h3>

<p>Go to the VS Code <a href="https://code.visualstudio.com/download">Official website</a> and download the Windows installer. Once the download is complete, run the installer and follow the installation process.</p>

<p>Click <strong>Finish</strong> to complete the installation process</p>

<h3>Step 2: Download the Python Installer File</h3>

<p>Go to the official <a href="https://www.python.org/downloads/">Python website</a> and download the latest version (Python 3.12.2 at the time of writing this tutorial) for Windows. </p>

<p>The website automatically detects your operating system and gives you the right installer.</p>

<figure><img src="assets/images/python-download-page1.png" title="Python Download Page" alt="Python Download Page" width="" height="">
<figcaption>Python Download Page</figcaption></figure>
<h3>Step 3: Run the Installer</h3>

<p>Now, go to your <strong>download</strong> folder and run the installer you just downloaded. Depending on your security settings, you might be prompted to allow access.</p>

<p>Simply allow it and proceed.</p>

<h3>Step 4: Install Python</h3>

<p>Once you have run the installer, you will come across this screen.</p>

<figure><img src="assets/images/python-install-windows1.png" title="Install Python on Windows" alt="Install Python on Windows" width="" height="">
<figcaption>Install Python on Windows</figcaption></figure>
<p>On the screen, you will see two options: <strong>Install Now</strong> and <strong>Customize Installation</strong>. We suggest you skip all customization steps and simply click <strong>Install Now.</strong></p>

<ul>
<li>Check on <strong>Add python.exe to PATH</strong> as it ensures Python is added to our system's PATH variable.(Recommended) </li>
<li>Click <strong>Install Now</strong>, as it will include all the necessary files needed later. </li>
</ul>

<p>This makes it easier to run a Python Program from the command prompt (cmd) directly without specifying the full path of the Python executable.</p>

<p>After using this option, Python will be successfully installed in your device.</p>

<p>                </p><figure><img src="assets/images/default-installation-for-python1.png" title="Python Default Installation" alt="Python Default Installation" width="" height="">
<figcaption>Python Default Installation</figcaption></figure>
<p></p>

<h3>Step 4: Verify your installation</h3>

<p>After the installation is complete, you can verify whether Python is installed by using the following command in the command prompt.</p>

<p>python --version</p>

<figure><img src="assets/images/python-installation-verify1-1.png" title="Python Installation Verify" alt="Python Installation Verification for Windows" width="" height="">
<figcaption>Python Installation Verify</figcaption></figure>
<div class="note-tip">
<p><strong>Note:</strong> The version number might differ from the one above, depending on your installed version.</p>

</div>
<p>Now, you are all set to run Python programs on your device.</p>
  </div>

   <div class="tabbed-editor-content__item" id="mac">
  <h2 id="mac">Install Python on MacOS</h2>

<p>To install Python on your Mac, just follow these steps:</p>

<ol>
<li>Install VS Code</li>
<li>Check Python version</li>
<li>Download the Python Installer File</li>
<li>Run the Installer</li>
<li>Follow the Instructions</li>
<li>Verify your installation</li>
</ol>

<p>Here is a detailed explanation of each of the steps:</p>

<h3>Step 1: Install VS Code</h3>

<p>Go to the VS Code <a href="https://code.visualstudio.com/download">official website</a> and download the zipped file. Once the download is complete, open the zipped file.</p>

<p>In Finder, open a new window and navigate to the Applications folder. Drag the VS Code application from the zip file into the Applications folder to install it.</p>

<p>You can now launch VS Code directly from the Applications folder.</p>

<h3>Step 2: Check Python Version</h3>

<p>Since macOS often comes with an older version of Python (Python 2.x) pre-installed on it, you can check the current version by using the following command in the Terminal app.</p>

<pre style="max-height: 600px;"><code class="python hljs">python -- version</code></pre>

<p>or, for Python 3:</p>

<pre style="max-height: 600px;"><code class="python hljs">python3 -- version</code></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">
  
  
  
  <style>
  #div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
  #div-gpt-ad-Programizcom36796 {display: block;}
  @media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
  </style>
  
  <div class="pgAdWrapper" style="min-width: 728px; min-height: 90px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
  </div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
  
  <div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
  </div>
  </div><div class="clearfix"></div><p>If you are satisfied with the installed version of Python 3.x, you can skip the remaining steps. Otherwise, follow the steps below.</p>

<h3>Step 3: Download the Python Installer File</h3>

<p>Visit the official <a href="https://www.python.org/downloads">Python website</a> and download the latest version (Python 3.12.2 at the time of writing this tutorial) for mac. </p>

<p>The website automatically detects your operating system and gives you the right installer.</p>

<figure><img src="assets/images/python-download-page-mac1.png" title="Python Download Page for Mac" alt="Python Download Page for Mac" width="" height="">
<figcaption>Python Download Page for Mac</figcaption></figure>
<h3>Step 4: Run the Installer</h3>

<p>Go to your downloads folder and run the installer you just downloaded. </p>

<figure><img src="assets/images/python-run-installar-mac1.png" title="Python Run Installer for Mac" alt="Python Run Installer for Mac" width="" height="">
<figcaption>Python Run Installer for Mac</figcaption></figure>
<h3>Step 5: Follow the Instructions</h3>

<p>You will be prompted to agree to the software license agreement, choose the installation location (we recommend using <strong>default</strong> location), and enter your administrator password.</p>

<p>Simply proceed through it.</p>

<h3>Step 6: Verify your installation</h3>

<p>Once the installation is complete, you can verify whether Python is installed by using the following command in the Terminal app.</p>

<pre style="max-height: 600px;"><code class="python hljs">python3 -- version</code></pre>

<figure><img src="assets/images/python-install-action-verify1-1.png" title="Python Installation Verification for Mac" alt="Python Installation Verify for Mac" width="" height="">
<figcaption>Python Installation Verify for Mac</figcaption></figure>
<p class="note-tip"><strong>Note:</strong> The version number might differ from the one above, depending on your installed version.</p>
  </div>
  <div class="tabbed-editor-content__item" id="linux">
  <h2 id="linux">Install Python on Linux</h2>

<p>Linux has various distributions, and the installation process differs slightly from each other. For now, we will focus on Ubuntu distribution. </p>

<p>Most Linux distributions come pre-installed with Python. However, if you need to install or upgrade follow these steps:</p>

<ol>
<li>Install VS Code</li>
<li>Check Python Version</li>
<li>Install Python via Package Manager</li>
<li>Verify your installation</li>
</ol>

<p>Here is a detailed explanation of each of the steps:</p>

<h3>Step 1: Install VS Code </h3>

<p>Open the Terminal and type</p>

<pre style="max-height: 600px;"><code class="python hljs">sudo apt update </code></pre>

<p>This command updates your package lists to ensure you get the latest versions of your software. </p>

<p>Proceed to install VS Code with</p>

<pre style="max-height: 600px;"><code class="python hljs">sudo snap install code --classic </code></pre>

<h3>Step 2: Check Python Version</h3>

<p>You can check the current version by using the following command in the terminal window.</p>

<pre style="max-height: 600px;"><code class="python hljs">python --version</code></pre>

<p>or, for Python 3</p>

<pre style="max-height: 600px;"><code class="python hljs">python3 --version</code></pre>

<p>If you are satisfied with the installed version of Python, you can skip the remaining steps. Otherwise, follow the steps below. </p>

<hr>
<h3>Step 3: Install Python via Package Manager</h3>

<p>Update the package list to ensure you get the latest version available:</p>

<pre style="max-height: 600px;"><code class="python hljs">sudo apt update</code></pre>

<p>Install Python 3:</p>

<pre style="max-height: 600px;"><code class="python hljs">sudo apt install python3</code></pre>

<p>This command installs Python along pip (Python package installer), documentation, and other useful packages.</p>

<figure><img src="assets/images/python-installation-for-linux1.png" title="Python Installation for Linux" alt="Python Installation for Linux" width="" height=""><figcaption>Python Installation for Linux

</figcaption></figure>

<p>Wait until the installation finishes to start using Python.</p>

<hr>
<h3>Step 4: Verify your Installation</h3>

<p>Once the installation is complete, you can verify whether Python is installed by using the following command in the Terminal app.</p>

<pre style="max-height: 600px;"><code class="python hljs">python3 -- version</code></pre>

<figure><img src="assets/images/python-installation-verify-for-linux1-1.png" title="Python Installation Verify for Linux" alt="Python Installation Verify for Linux" width="" height="">
<figcaption>Python Installation Verification for Linux</figcaption></figure>
<p>Now, you are all set to run Python programs on your device.</p>
  </div>
</div>
</div>

<hr>
<h2 id="run">Run Your First Python Program</h2>

<p>First open VS Code, click on the File in the top menu and then select New File.</p>

<figure><img src="assets/images/newfile-11.png" title="Create a New File in VS Code" alt="Create a New File in VS Code" width="" height="">
<figcaption>Create a New File in VS Code</figcaption></figure>
<p>Then, save this file with a .py extension by clicking on <strong>File</strong> again, then <strong>Save As</strong>, and type your filename ending in .py. (Here, we are saving it as Hello_World.py)</p>
<p>Before you start coding, make sure the Python extension is installed in VS Code. Open VS Code and click on Extensions on the left sidebar. Then, search for the <strong>Python</strong> extension by Microsoft and click on install.</p>
<figure><img src="assets/images/python-extension1-1.png" title="Install Python Extension" alt="Install Python Extension" width="" height="">
<figcaption>Install Python Extension in VS Code</figcaption></figure>
<p>Now, write the following code into your file:</p>

<p> <code>print("Hello World")</code> </p>

<p>Then click on the <strong>run</strong> button on the top right side of your screen.</p>

<figure><img src="assets/images/run-code-in-python-1111.png" title="Python Run Program" alt="Python Run Program " width="" height="">
<figcaption>Python Run Program </figcaption></figure>
<p>You should see Hello World printed to the command prompt.</p>

<div class="note-tip">
<p><strong>Note</strong>: Type python3 in command prompt for macOS and Linux.</p>

</div>
<p>Now that you have set everything up to run Python programs on your computer,  you'll be learning how the basic program works in Python in the next tutorial.</p>

</div>
</section>
<section id="first2">
  <h1>Your First Python Program</h1>
  <div class="content">

<p>The following program displays <code>Hello, World!</code> on the screen.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-string">"Hello, World!"</span>)</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/python-programming/online-compiler/?ref=c80f3f54" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Hello World!</samp></pre>

<div class="note-tip">
<p><strong>Note:</strong> A <code>Hello World!</code> program includes the basic syntax of a programming language and helps beginners understand the structure before getting started. That's why it is a common practice to introduce a new language using a <code>Hello World!</code> program.</p>
</div>
<hr>
<h2 id="working-of-the-program">Working of the Program </h2>

<p>Congratulations on writing your first Python program. Now, let's see how the above program works. </p>

<p> </p><figure><img src="assets/images/python-hello-world.png" title="Hello World Code" alt="Hello World Code" width="" height="">
<figcaption>Hello World Code</figcaption></figure>
<p></p>

<p>In Python, anything inside <code>print()</code> is displayed on the screen. </p>

<p>There are two things to note about <code>print()</code>:</p>

<ul>
<li>Everything we want to display on the screen is included inside the parentheses <code>()</code>.</li>
<li>The text we want to print is placed within double quotes <code>" "</code>. </li>
</ul>

<p>We can also use single quotes to print text on the screen. For example, </p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-string">'Hello World!'</span>)</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/python-programming/online-compiler/?ref=087365d7" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>is same as</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-string">"Hello World!"</span>)</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/python-programming/online-compiler/?ref=5e930317" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>To be consistent, we will be using double quotes throughout the tutorials.</p>


</div>
</section>
<section id="first3">
  <h1>Python Comments</h1>
  <div class="content">

<p class="note-tip"><strong>Important!</strong>: We are introducing comments early in this tutorial series because we will be using them to explain the code in upcoming tutorials. </p>

<p>Comments are hints that we add to our code to make it easier to understand. Python comments start with <code>#</code>. For example, </p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># print a number</span>
<span class="hljs-keyword">print</span>(<span class="hljs-number">25</span>)</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/python-programming/online-compiler/?ref=8e1274cd" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Here, <code># print a number</code> is a comment.</p>

<p>Comments are completely ignored and not executed by code editors.</p>

<p class="note-tip"><strong>Important</strong>: The purpose of this tutorial is to help you understand comments, so you can ignore other concepts used in the program. We will learn about them in later tutorials. </p>

<hr>
<h2 id="single-line">Single-line Comment</h2>

<p>We use the <strong>hash (</strong><code><strong>#</strong></code><strong>)</strong> symbol to write a single-line comment. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># declare a variable</span>
name = <span class="hljs-string">"John"</span>

<span class="hljs-comment"># print name</span>
<span class="hljs-keyword">print</span>(name)    <span class="hljs-comment"># John</span></code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/python-programming/online-compiler/?ref=72e462fe" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>In the above example, we have used three single-line comments:</p>

<ul>
<li><code># declare a variable</code></li>
<li><code># print name</code></li>
<li><code># John</code></li>
</ul>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">
  
  
  
  <style>
  #div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
  #div-gpt-ad-Programizcom36796 {display: block;}
  @media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
  </style>
  
  <div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
  </div>
  
  <div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
  </div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
  </div><div class="clearfix"></div><p>A <strong>single-line comment</strong> starts with <code>#</code> and extends up to the end of the line. We can also use single-line comments alongside the code:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(name)    <span class="hljs-comment"># John</span></code></pre>

<p class="note-tip"><strong>Note:</strong> Remember the keyboard shortcut to apply comments. In most text editors, it's <strong>Ctrl + /</strong> if you are on Windows &amp; <strong>Cmd + /</strong> if you are on a Mac.</p>

<hr>
<h2 id="multi-line">Multiline Comments</h2>

<p>Unlike languages such as C++ and Java, Python doesn't have a dedicated method to write multi-line comments.</p>

<p>However, we can achieve the same effect by using the hash (<code>#</code>) symbol at the beginning of each line.</p>

<p>Let's look at an example.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># This is an example of a multiline comment</span>
<span class="hljs-comment"># created using multiple single-line commenced</span>
<span class="hljs-comment"># The code prints the text Hello World</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Hello, World!"</span>)</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/python-programming/online-compiler/?ref=2273dc76" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>We can also use multiline strings as comments like:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-string">'''This is an example 
of multiline comment'''</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Hello, World!"</span>)</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/python-programming/online-compiler/?ref=b90ad050" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Hello World</samp></pre>

<p class="note-tip"><strong>Note:</strong> Remember you will learn about these programming concepts in upcoming tutorials. For now. you can just focus on the usage of comments. </p>

<hr>
<h2 id="prevent-executing">Prevent Executing Code Using Comments</h2>

<p>Comments are valuable when debugging code. </p>

<p>If we encounter an error while running a program, instead of removing code segments, we can comment them out to prevent execution. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number1 = <span class="hljs-number">10</span>
number2 = <span class="hljs-number">15</span>

sum = number1 + number2

<span class="hljs-keyword">print</span>(<span class="hljs-string">"The sum is:"</span>, sum)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"The product is:"</span>, product)</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/python-programming/online-compiler/?ref=a8d7e797" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Here, the code throws an error because we have not defined a <var>product</var> variable. Instead of removing the line causing an error, we can comment it. </p>

<p>For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number1 = <span class="hljs-number">10</span>
number2 = <span class="hljs-number">15</span>

sum = number1 + number2

<span class="hljs-keyword">print</span>(<span class="hljs-string">"The sum is:"</span>, sum)
<div class="line-highlight"><span class="hljs-comment"># print('The product is:', product)</span></div></code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/python-programming/online-compiler/?ref=27d9b98d" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>The sum is 25</samp></pre>

<p>Here, the code runs without any errors.</p>

<p>We have resolved the error using a comment. Now if you need to calculate the <var>product</var> in the near future, you can uncomment it.</p>

<p class="note-tip"><strong>Note:</strong> This approach comes in handy while working with large files. Instead of deleting any line, we can use comments and identify which one is causing an error. </p>

<hr>
<h2 id="why-comments">Why Use Comments?</h2>

<p>We should use comments:</p>

<ul>
<li>For future references, as comments make our code readable.</li>
<li>For debugging.</li>
<li>For code collaboration, as comments help peer developers to understand each other's code.</li>
</ul>

<div class="note-tip">
<p><strong>Note</strong>: Comments are not and should not be used as a substitute to explain poorly written code. Always try to write clean, understandable code, and then use comments as an addition.</p>

<p>In most cases, always use comments to explain 'why' rather than 'how' and you are good to go.</p>

</div>
<p>Next, we will start learning fundamental concepts of Python programming.</p>

</div>
</section>
              
<!-- second menu sections -->
<section id="second1">
  <h1>Python Variables, Constants and Literals</h1>
  <div class="content">
    <p>In the previous tutorial you learned about <a href="/python-programming/comments">Python comments</a>. Now, let's learn about variables and literals in Python.</p>

<h2 id="variable">Python Variables</h2>

<p>In programming, a variable is a container (storage area) to hold data. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">10</span></code></pre>

<p>Here, <var>number</var> is a variable storing the value <strong>10</strong>.</p>

<hr>
<h3 id="value-variable">Assigning values to Variables in Python</h3>

<p>As we can see from the above example, we use the assignment operator <code>=</code> to assign a value to a variable.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># assign value to site_name variable</span>
site_name = <span class="hljs-string">'programiz.pro'</span>

<span class="hljs-keyword">print</span>(site_name)

<span class="hljs-comment"># Output: programiz.pro</span></code></pre></div></div><div class="code-editor__action">
        <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>apple.com</samp></pre>

<p>In the above example, we assigned the value <code>programiz.pro</code> to the <var>site_name</var> variable. Then, we printed out the value assigned to <var>site_name</var></p>

<p class="note-tip"><strong>Note</strong>: Python is a <a href="https://en.wikipedia.org/wiki/Type_inference">type-inferred</a> language, so you don't have to explicitly define the variable type. It automatically knows that <code>programiz.pro</code> is a string and declares the <code>site_name</code> variable as a string.</p>

<hr>
<h3 id="change-variable-value">Changing the Value of a Variable in Python</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">site_name = <span class="hljs-string">'programiz.pro'</span>
<span class="hljs-keyword">print</span>(site_name)

<span class="hljs-comment"># assigning a new value to site_name</span>
site_name = <span class="hljs-string">'apple.com'</span>

<span class="hljs-keyword">print</span>(site_name)</code></pre></div></div><div class="code-editor__action">
        <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>programiz.pro
apple.com</samp></pre>

<p>Here, the value of <var>site_name</var> is changed from <code>'programiz.pro'</code> to <code>'apple.com'</code>.</p>

<hr>
<h3>Example: Assigning multiple values to multiple variables</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">a, b, c = <span class="hljs-number">5</span>, <span class="hljs-number">3.2</span>, <span class="hljs-string">'Hello'</span>

<span class="hljs-keyword">print</span> (a)  <span class="hljs-comment"># prints 5</span>
<span class="hljs-keyword">print</span> (b)  <span class="hljs-comment"># prints 3.2</span>
<span class="hljs-keyword">print</span> (c)  <span class="hljs-comment"># prints Hello </span></code></pre></div></div><div class="code-editor__action">
        <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>If we want to assign the same value to multiple variables at once, we can do this as:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">site1 = site2  = <span class="hljs-string">'programiz.com'</span>

<span class="hljs-keyword">print</span> (x)  <span class="hljs-comment"># prints programiz.com</span>
<span class="hljs-keyword">print</span> (y)  <span class="hljs-comment"># prints programiz.com</span></code></pre></div></div><div class="code-editor__action">
        <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Here, we have assigned the same string value <code>'programiz.com'</code> to both the variables <var>site1</var> and <var>site2</var>.</p>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Rules for Naming Python Variables
</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion">

<p>1. Constant and variable names should have a combination of letters in lowercase (a to z) or uppercase (<strong>A to Z</strong>) or digits (<strong>0 to 9</strong>) or an underscore <code>(<strong>_</strong>)</code>. For example:</p>

<pre style="max-height: 600px;"><code class="python hljs">snake_case
MACRO_CASE
camelCase
CapWords</code></pre>

<p>2. Create a name that makes sense. For example, <var>vowel</var> makes more sense than <var>v</var>.</p>

<p>3. If you want to create a variable name having two words, use underscore to separate them. For example:</p>

<pre style="max-height: 600px;"><code class="python hljs">my_name
current_salary</code></pre>

<p>5. Python is case-sensitive. So <var>num</var> and <var>Num</var> are different variables. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs">var num = <span class="hljs-number">5</span> 
var Num = <span class="hljs-number">55</span>
<span class="hljs-keyword">print</span>(num) <span class="hljs-comment"># 5</span>
<span class="hljs-keyword">print</span>(Num) <span class="hljs-comment"># 55</span></code></pre>

<p>6. Avoid using <a href="/python-programming/keywords-identifier">keywords</a> like if, True, class, etc. as variable names.</p>

</div></div></div></div></div></div></div></div>

<hr>
<h2 id="literals">Python Literals</h2>

<p>Literals are representations of fixed values in a program. They can be numbers, characters, or strings, etc. For example, <code>'Hello, World!'</code>, <code>12</code>, <code>23.0</code>, <code>'C'</code>, etc.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">
  
  
  
  <style>
  #div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
  #div-gpt-ad-Programizcom36796 {display: block;}
  @media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
  </style>
  
  <div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
  </div>
  
  <div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
  </div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
  </div><div class="clearfix"></div><p>Literals are often used to assign values to variables or constants. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs">site_name = <span class="hljs-string">'programiz.com'</span></code></pre>

<p>In the above expression, <var>site_name</var> is a variable, and <code>'programiz.com'</code> is a literal.</p>

<p>There are different types of literals in Python. Let's discuss some of the commonly used types in detail.</p>

<hr>
<h2 id="numeric-literals">Python Numeric Literals</h2>

<p>Numeric Literals are immutable (unchangeable). Numeric literals can belong to <strong>3</strong> different numerical types: <code>Integer</code>, <code>Float</code>, and <code>Complex</code>.</p>

<h3>1. Integer Literals</h3>

<p>Integer literals are numbers without decimal parts. It also consists of negative numbers. For example,  <code>5</code>, <code>-11</code>, <code>0</code>, <code>12</code>, etc.</p>

<h3>2. Floating-Point Literals</h3>

<p>Floating-point literals are numbers that contain decimal parts.</p>

<p>Just like integers, floating-point numbers can also be both positive and negative. For example, <code>2.5</code>, <code>6.76</code>, <code>0.0</code>, <code>-9.45</code>, etc.</p>

<h3>3. Complex Literals</h3>

<p>Complex literals are numbers that represent complex numbers. </p>

<p>Here, numerals are in the form <code>a + bj</code>, where <code>a</code> is real and <code>b</code> is imaginary. For example, <code>6+9j</code>, <code>2+3j</code>.</p>

<hr>
<h2 id="string-literals">Python String Literals</h2>

<p>In Python, texts wrapped inside quotation marks are called <strong>string literals.</strong>.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-string">"This is a string."</span></code></pre>

<p>We can also use single quotes to create strings.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-string">'This is also a string.'</span></code></pre>

<div class="faq-section"><h2 class="section-title faq-section__title">More on Python Literals

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Python Boolean Literals

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>There are two boolean literals: <code>True</code> and <code>False</code>.</p>

<p>For example, </p>

<pre style="max-height: 600px;"><code class="python hljs">is_pass = true  </code></pre>

<p>Here, <code>true</code> is a boolean literal assigned to <var>is_pass</var>.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Character Literals in Python

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Character literals are unicode characters enclosed in a quote. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs">some_character = <span class="hljs-string">'S'</span></code></pre>

<p>Here, <code>S</code> is a character literal assigned to <var>some_character</var>.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Special Literal in Python

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Python contains one special literal <code>None</code>. We use it to specify a null variable. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">value = <span class="hljs-literal">None</span>

<span class="hljs-keyword">print</span>(value)

<span class="hljs-comment"># Output: None</span></code></pre></div></div><div class="code-editor__action">
        <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Here, we get <code>None</code> as an output as the <var>value</var> variable has no value assigned to it.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Collection Literals

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Let's see examples of four different collection literals. List, Tuple, Dict, and Set literals.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># list literal</span>
fruits = [<span class="hljs-string">"apple"</span>, <span class="hljs-string">"mango"</span>, <span class="hljs-string">"orange"</span>] 
<span class="hljs-keyword">print</span>(fruits)

<span class="hljs-comment"># tuple literal</span>
numbers = (<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>) 
<span class="hljs-keyword">print</span>(numbers)

<span class="hljs-comment"># dictionary literal</span>
alphabets = {<span class="hljs-string">'a'</span>:<span class="hljs-string">'apple'</span>, <span class="hljs-string">'b'</span>:<span class="hljs-string">'ball'</span>, <span class="hljs-string">'c'</span>:<span class="hljs-string">'cat'</span>} 
<span class="hljs-keyword">print</span>(alphabets)

<span class="hljs-comment"># set literal</span>
vowels = {<span class="hljs-string">'a'</span>, <span class="hljs-string">'e'</span>, <span class="hljs-string">'i'</span> , <span class="hljs-string">'o'</span>, <span class="hljs-string">'u'</span>} 
<span class="hljs-keyword">print</span>(vowels)</code></pre></div></div><div class="code-editor__action">
        <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>['apple', 'mango', 'orange']
(1, 2, 3)
{'a': 'apple', 'b': 'ball', 'c': 'cat'}
{'e', 'a', 'o', 'i', 'u'}</samp></pre>

<p>In the above example, we created a list of <var>fruits</var>, a tuple of <var>numbers</var>, a dictionary of <var>alphabets</var> having values with keys designated to each value and a set of <var>vowels</var>.</p>

<p>To learn more about literal collections, refer to <a href="/python-programming/variables-datatypes">Python Data Types</a>.</p>

</div></div></div></div></div></div></div></div></div>

</div>



</div>
</section>
<section id="second2">
<h1>Python Type Conversion</h1>
<div class="content">
  <p id="introduction">In programming, type conversion is the process of converting data of one type to another. For example: converting <code>int</code>&nbsp;data to <code>str</code>.</p>

<p>There are two types of type conversion in Python.</p>

<ul>
<li>Implicit Conversion - automatic type conversion</li>
<li>Explicit Conversion - manual type conversion</li>
</ul>

<hr>
<h2 id="implicit">Python Implicit Type Conversion</h2>

<p>In certain situations, Python automatically converts one <a href="https://www.programiz.com/python-programming/variables-datatypes">data type</a> to another. This is known as implicit type conversion.</p>

<hr>
<h2 id="example1">Example 1: Converting integer to float</h2>

<p>Let's see an example where Python promotes the conversion of the lower data type (integer) to the higher data type (float) to avoid data loss.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">integer_number = <span class="hljs-number">123</span>
float_number = <span class="hljs-number">1.23</span>

new_number = integer_number + float_number

<span class="hljs-comment"># display new value and resulting data type</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Value:"</span>,new_number)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Data Type:"</span>,type(new_number))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Value: 124.23
Data Type: &lt;class 'float'&gt;</samp></pre>

<p>In the above example, we have created two variables: <var>integer_number</var> and <var>float_number</var> of <code>int</code>&nbsp;and <code>float</code> type respectively.</p>

<p>Then we added these two variables and stored the result in <var>new_number</var>.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>As we can see <var>new_number</var> has value <strong>124.23</strong> and is of the <code>float</code> data type.</p>

<p>It is because Python always converts smaller data types to larger data types to avoid the loss of data.</p>

<div class="note-tip">
<p><strong>Note:</strong></p>

<ul>
<li>We get <code>TypeError</code>, if we try to add <code>str</code>&nbsp;and <code>int</code>. For example, <code>'12' + 23</code>. Python is not able to use Implicit Conversion in such conditions.</li>
<li>Python has a solution for these types of situations which is known as Explicit Conversion.</li>
</ul>
</div>

<hr>
<h2 id="type-casting">Explicit Type Conversion</h2>

<p>In Explicit Type Conversion, users convert the data type of an object to required data type.</p>

<p>We use the built-in functions like <a href="https://www.programiz.com/python-programming/methods/built-in/int">int()</a>, <a href="https://www.programiz.com/python-programming/methods/built-in/float">float()</a>, <a href="https://www.programiz.com/python-programming/methods/built-in/str">str()</a>, etc to perform explicit type conversion.</p>

<p>This type of conversion is also called typecasting because the user casts (changes) the data type of the objects.</p>

<hr>
<h2 id="example2">Example 2: Addition of string and integer Using Explicit Conversion</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">num_string = <span class="hljs-string">'12'</span>
num_integer = <span class="hljs-number">23</span>

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Data type of num_string before Type Casting:"</span>,type(num_string))

<span class="hljs-comment"># explicit type conversion</span>
num_string = int(num_string)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Data type of num_string after Type Casting:"</span>,type(num_string))

num_sum = num_integer + num_string

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Sum:"</span>,num_sum)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Data type of num_sum:"</span>,type(num_sum))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Data type of num_string before Type Casting: &lt;class 'str'&gt;
Data type of num_string after Type Casting: &lt;class 'int'&gt;
Sum: 35
Data type of num_sum: &lt;class 'int'&gt;</samp></pre>

<p>In the above example, we have created two variables: <var>num_string</var> and <var>num_integer</var> with <code>str</code>&nbsp;and <code>int</code>&nbsp;type values respectively. Notice the code,</p>

<pre style="max-height: 600px;"><code class="python hljs">num_string = int(num_string)</code></pre>

<p>Here, we have used <code>int()</code> to perform explicit type conversion of <var>num_string</var> to integer type.</p>

<p>After converting <var>num_string</var> to an integer value, Python is able to add these two variables.</p>

<p>Finally, we got the <var>num_sum</var> value i.e <strong>35</strong> and data type to be <code>int</code>.</p>

<hr>
<h2 id="key-points">Key Points to Remember</h2>

<ol>
<li>Type Conversion is the conversion of an object from one data type to another data type.</li>
<li>Implicit Type Conversion is automatically performed by the Python interpreter.</li>
<li>Python avoids the loss of data in Implicit Type Conversion.</li>
<li>Explicit Type Conversion is also called Type Casting, the data types of objects are converted using predefined functions by the user.</li>
<li>In Type Casting, loss of data may occur as we enforce the object to a specific data type.</li>
</ol>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/numbers">Python Numbers, Type Conversion and Mathematics</a></li>
</ul>  </div>
</section>
<section id="second3">
<h1>Python Basic Input and Output</h1>
<div class="content">
  <h2 id="output">Python Output</h2>

<p>In Python, we can simply use the <a href="https://www.programiz.com/python-programming/methods/built-in/print">print()</a> function to print output. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-string">'Python is powerful'</span>)

<span class="hljs-comment"># Output: Python is powerful</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, the <code>print()</code> function displays the string enclosed inside the single quotation.</p>

<p><strong>Syntax of print()</strong></p>

<p>In the above code, the <code>print()</code> function is taking a single parameter.</p>

<p>However, the actual syntax of the print function accepts <strong>5</strong> parameters</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(object= separator= end= file= flush=)</code></pre>

<p>Here,</p>

<ul>
<li><strong>object</strong> - value(s) to be printed</li>
<li><strong>sep</strong> (optional) - allows us to separate multiple <strong>objects</strong> inside <code>print()</code>.</li>
<li><strong>end</strong> (optional) - allows us to add add specific values like new line <code>"\n"</code>, tab <code>"\t"</code></li>
<li><strong>file</strong> (optional) - where the values are printed. It's default value is <code>sys.stdout</code> (screen)</li>
<li><strong>flush</strong> (optional) - boolean specifying if the output is flushed or buffered. Default: <code>False</code></li>
</ul>

<hr>
<h2 id="example1">Example 1: Python Print Statement</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-string">'Good Morning!'</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">'It is rainy today'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Good Morning!
It is rainy today</samp></pre>

<p>In the above example, the <code>print()</code> statement only includes the <strong>object</strong> to be printed. Here, the value for <strong>end</strong> is not used. Hence, it takes the default value <code>'\n'</code>.</p>

<p>So we get the output in two different lines.</p>

<hr>
<h2 id="example2">Example 2: Python print() with end Parameter</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># print with end whitespace</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Good Morning!'</span>, end= <span class="hljs-string">' '</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">'It is rainy today'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Good Morning! It is rainy today</samp></pre>

<p>Notice that we have included the <code>end= ' '</code> after the end of the first <code>print()</code> statement.</p>

<p>Hence, we get the output in a single line separated by space.</p>

<hr>
<h2 id="example3">Example 3: Python print() with sep parameter</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-string">'New Year'</span>, <span class="hljs-number">2023</span>, <span class="hljs-string">'See you soon!'</span>, sep= <span class="hljs-string">'. '</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>New Year. 2023. See you soon!</samp></pre>

<div class="line-highlight">&nbsp;</div>

<p>In the above example, the <code>print()</code> statement includes multiple <strong>items</strong> separated by a comma.</p>

<p>Notice that we have used the optional parameter <code>sep= ". "</code> inside the <code>print()</code> statement.</p>

<p>Hence, the output includes items separated by <code>.</code> not comma.</p>

<hr>
<h2 id="example3">Example: Print Python Variables and Literals</h2>

<p>We can also use the <code>print()</code> function to print <a href="/python-programming/variables-constants-literals">Python variables</a>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">-10.6</span>

name = <span class="hljs-string">"Programiz"</span>

<span class="hljs-comment"># print literals     </span>
<span class="hljs-keyword">print</span>(<span class="hljs-number">5</span>)

<span class="hljs-comment"># print variables</span>
<span class="hljs-keyword">print</span>(number)
<span class="hljs-keyword">print</span>(name)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>5
-10.6
Programiz</samp></pre>

<hr>
<h2 id="example4">Example: Print Concatenated Strings</h2>

<p>We can also join two <a href="https://www.programiz.com/python-programming/string">strings</a> together inside the&nbsp;<code>print()</code> statement. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-string">'Programiz is '</span> + <span class="hljs-string">'awesome.'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Programiz is awesome.</samp></pre>

<p>Here,</p>

<ul>
<li>the <code>+</code> operator joins two strings <code>'Programiz is '</code> and <code>'awesome.'</code></li>
<li>the <code>print()</code> function prints the joined string</li>
</ul>

<hr>
<h2 id="format">Output formatting</h2>

<p>Sometimes we would like to format our output to make it look attractive. This can be done by using the <code>str.format()</code> method. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">x = <span class="hljs-number">5</span>
y = <span class="hljs-number">10</span>

<span class="hljs-keyword">print</span>(<span class="hljs-string">'The value of x is {} and y is {}'</span>.format(x,y))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, the curly braces <code>{}</code> are used as placeholders. We can specify the order in which they are printed by using numbers (tuple index).</p>
<p>To learn more about formatting the output, visit <a href="https://www.programiz.com/python-programming/methods/string/format">Python String format()</a>.</p>

<hr>
<h2 id="input">Python Input</h2>

<p>While programming, we might want to take the input from the user. In Python, we can use the <a href="https://www.programiz.com/python-programming/methods/built-in/input">input()</a> function.</p>

<p><strong>Syntax of input()</strong></p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">input</span>(prompt)</code></pre>

<p>Here, <code>prompt</code> is the string we wish to display on the screen. It is optional.</p>

<hr>
<h2 id="example5">Example: Python User Input</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># using input() to take user input</span>
num = <span class="hljs-keyword">input</span>(<span class="hljs-string">'Enter a number: '</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">'You Entered:'</span>, num)

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Data type of num:'</span>, type(num))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a number: 10
You Entered: 10
Data type of num: &lt;class 'str'&gt;</samp></pre>

<p>In the above example, we have used the <code>input()</code> function to take input from the user and stored the user input in the <var>num</var> variable.</p>

<p>It is important to note that the entered value <strong>10</strong> is a string, not a number. So, <code>type(num)</code> returns <code>&lt;class 'str'&gt;</code>.</p>

<p>To convert user input into a number we can use <a href="https://www.programiz.com/python-programming/methods/built-in/int">int()</a> or <a href="https://www.programiz.com/python-programming/methods/built-in/float">float()</a> functions as:</p>

<pre style="max-height: 600px;"><code class="python hljs">num = int(<span class="hljs-keyword">input</span>(<span class="hljs-string">'Enter a number: '</span>))</code></pre>

<p>Here, the <a href="https://www.programiz.com/python-programming/variables-datatypes">data type</a> of the user input is converted from string to integer .</p>
</div>
</section>
<section id="second4">
<h1>Python Operators</h1>
<div class="content">
  <p id="introduction">Operators are special symbols that perform operations on <a href="/python-programming/variables-constants-literals">variables </a> and values. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-number">5</span> + <span class="hljs-number">6</span>)   <span class="hljs-comment"># 11</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, <code>+</code> is an operator that adds two numbers: <strong>5</strong> and <strong>6</strong>.</p>

<hr>
<h2 id="types">Types of Python Operators</h2>

<p>Here's a list of different types of Python operators that we will learn in this tutorial.</p>

<ol>
<li>Arithmetic Operators</li>
<li>Assignment Operators</li>
<li>Comparison Operators</li>
<li>Logical Operators</li>
<li>Bitwise Operators</li>
<li>Special Operators</li>
</ol>

<hr>
<h2 id="arithmetic">1. Python Arithmetic Operators</h2>

<p>Arithmetic operators are used to perform mathematical operations like addition, subtraction, multiplication, etc. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs">sub = <span class="hljs-number">10</span> - <span class="hljs-number">5</span> <span class="hljs-comment"># 5</span></code></pre>

<p>Here, <code>-</code> is an arithmetic operator that subtracts two values or variables.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Operation</th>
<th>Example</th>
</tr>
<tr>
<td><code>+</code></td>
<td>Addition</td>
<td><code>5 + 2 = 7</code></td>
</tr>
<tr>
<td><code>-</code></td>
<td>Subtraction</td>
<td><code>4 - 2 = 2</code></td>
</tr>
<tr>
<td><code>*</code></td>
<td>Multiplication</td>
<td><code>2 * 3 = 6</code></td>
</tr>
<tr>
<td><code>/</code></td>
<td>Division</td>
<td><code>4 / 2 = 2</code></td>
</tr>
<tr>
<td><code>//</code></td>
<td>Floor Division</td>
<td><code>10 // 3 = 3</code></td>
</tr>
<tr>
<td><code>%</code></td>
<td>Modulo</td>
<td><code>5 % 2 = 1</code></td>
</tr>
<tr>
<td><code>**</code></td>
<td>Power</td>
<td><code>4 ** 2 = 16</code> </td>
</tr>
</tbody></table>
</div>

<hr>
<h2>Example 1: Arithmetic Operators in Python</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">a = <span class="hljs-number">7</span>
b = <span class="hljs-number">2</span>

<span class="hljs-comment"># addition</span>
<span class="hljs-keyword">print</span> (<span class="hljs-string">'Sum: '</span>, a + b)  

<span class="hljs-comment"># subtraction</span>
<span class="hljs-keyword">print</span> (<span class="hljs-string">'Subtraction: '</span>, a - b)   

<span class="hljs-comment"># multiplication</span>
<span class="hljs-keyword">print</span> (<span class="hljs-string">'Multiplication: '</span>, a * b)  

<span class="hljs-comment"># division</span>
<span class="hljs-keyword">print</span> (<span class="hljs-string">'Division: '</span>, a / b) 

<span class="hljs-comment"># floor division</span>
<span class="hljs-keyword">print</span> (<span class="hljs-string">'Floor Division: '</span>, a // b)

<span class="hljs-comment"># modulo</span>
<span class="hljs-keyword">print</span> (<span class="hljs-string">'Modulo: '</span>, a % b)  

<span class="hljs-comment"># a to the power b</span>
<span class="hljs-keyword">print</span> (<span class="hljs-string">'Power: '</span>, a ** b)   </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Sum: 9
Subtraction: 5
Multiplication: 14
Division: 3.5
Floor Division: 3
Modulo: 1
Power: 49</samp></pre>

<p>In the above example, we have used multiple arithmetic operators,</p>

<ul>
<li><code>+</code> to add <code>a</code> and <code>b</code></li>
<li><code>-</code> to subtract <code>b</code> from <code>a</code></li>
<li><code>*</code> to multiply <code>a</code> and <code>b</code></li>
<li><code>/</code> to divide <code>a</code> by <code>b</code></li>
<li><code>//</code> to floor divide  <code>a</code> by <code>b</code></li>
<li><code>%</code> to get the remainder</li>
<li><code>**</code> to get <code>a</code> to the power <code>b</code></li>
</ul>

<hr>
<h2 id="assignment">2. Python Assignment Operators</h2>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Assignment operators are used to assign values to variables. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># assign 5 to x </span>
x = <span class="hljs-number">5</span></code></pre>

<p>Here, <code>=</code> is an assignment operator that assigns <strong>5</strong> to <code>x</code>. </p>

<p>Here's a list of different assignment operators available in Python.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Name</th>
<th>Example</th>
</tr>
<tr>
<td><code>=</code></td>
<td>Assignment Operator</td>
<td><code>a = 7</code></td>
</tr>
<tr>
<td><code>+=</code></td>
<td>Addition Assignment</td>
<td><code>a += 1 # a = a + 1</code></td>
</tr>
<tr>
<td><code>-=</code></td>
<td>Subtraction Assignment</td>
<td><code>a -= 3 # a = a - 3</code></td>
</tr>
<tr>
<td><code>*=</code></td>
<td>Multiplication Assignment</td>
<td><code>a *= 4 # a = a * 4</code></td>
</tr>
<tr>
<td><code>/=</code></td>
<td>Division Assignment</td>
<td><code>a /= 3 # a = a / 3</code></td>
</tr>
<tr>
<td><code>%=</code></td>
<td>Remainder Assignment</td>
<td><code>a %= 10 # a = a % 10</code></td>
</tr>
<tr>
<td><code>**=</code></td>
<td>Exponent Assignment</td>
<td><code>a **= 10 # a = a ** 10</code></td>
</tr>
</tbody></table>
</div>

<hr>
<h2>Example 2: Assignment Operators</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># assign 10 to a</span>
a = <span class="hljs-number">10</span>

<span class="hljs-comment"># assign 5 to b</span>
b = <span class="hljs-number">5</span> 

<span class="hljs-comment"># assign the sum of a and b to a</span>
a += b      <span class="hljs-comment"># a = a + b</span>

<span class="hljs-keyword">print</span>(a)

<span class="hljs-comment"># Output: 15</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we have used the <code>+=</code> operator to assign the sum of <code>a</code> and <code>b</code> to <code>a</code>.</p>

<p>Similarly, we can use any other assignment operators as per our needs.</p>

<hr>
<h2 id="comparison">3. Python Comparison Operators</h2>

<p>Comparison operators compare two values/variables and return a boolean result: <code>True</code> or <code>False</code>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">a = <span class="hljs-number">5</span>
b = <span class="hljs-number">2</span>

<span class="hljs-keyword">print</span> (a &gt; b)    <span class="hljs-comment"># True</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, the <code>&gt;</code> comparison operator is used to compare whether <code>a</code> is greater than <code>b</code> or not.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Meaning</th>
<th>Example</th>
</tr>
<tr>
<td><code>==</code></td>
<td>Is Equal To</td>
<td><code>3 == 5</code> gives us <code>False</code></td>
</tr>
<tr>
<td><code>!=</code></td>
<td>Not Equal To</td>
<td><code>3 != 5</code> gives us <code>True</code></td>
</tr>
<tr>
<td><code>&gt;</code></td>
<td>Greater Than</td>
<td><code>3 &gt; 5</code> gives us <code>False</code></td>
</tr>
<tr>
<td><code>&lt;</code></td>
<td>Less Than</td>
<td><code>3 &lt; 5</code> gives us <code>True</code></td>
</tr>
<tr>
<td><code>&gt;=</code></td>
<td>Greater Than or Equal To</td>
<td><code>3 &gt;= 5</code> give us <code>False</code></td>
</tr>
<tr>
<td><code>&lt;=</code></td>
<td>Less Than or Equal To</td>
<td><code>3 &lt;= 5</code> gives us <code>True</code></td>
</tr>
</tbody></table>
</div>

<hr>
<h2>Example 3: Comparison Operators</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">a = <span class="hljs-number">5</span>

b = <span class="hljs-number">2</span>

<span class="hljs-comment"># equal to operator</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'a == b ='</span>, a == b)

<span class="hljs-comment"># not equal to operator</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'a != b ='</span>, a != b)

<span class="hljs-comment"># greater than operator</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'a &gt; b ='</span>, a &gt; b)

<span class="hljs-comment"># less than operator</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'a &lt; b ='</span>, a &lt; b)

<span class="hljs-comment"># greater than or equal to operator</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'a &gt;= b ='</span>, a &gt;= b)

<span class="hljs-comment"># less than or equal to operator</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'a &lt;= b ='</span>, a &lt;= b)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>a == b = False
a != b = True
a &gt; b = True
a &lt; b = False
a &gt;= b = True
a &lt;= b = False</samp></pre>

<p class="note-tip"><strong>Note:</strong> Comparison operators are used in decision-making and <a href="/python-programming/looping-technique">loops</a>. We'll discuss more of the comparison operator and decision-making in later tutorials.</p>

<hr>
<h2 id="logical">4. Python Logical Operators</h2>

<p>Logical operators are used to check whether an expression is <code>True</code> or <code>False</code>. They are used in decision-making. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">a = <span class="hljs-number">5</span>
b = <span class="hljs-number">6</span>

<span class="hljs-keyword">print</span>((a &gt; <span class="hljs-number">2</span>) <span class="hljs-keyword">and</span> (b &gt;= <span class="hljs-number">6</span>))    <span class="hljs-comment"># True</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, <code>and</code> is the logical operator <strong>AND</strong>. Since both <code>a &gt; 2</code> and <code>b &gt;= 6</code> are <code>True</code>, the result is <samp>True</samp>.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Example</th>
<th>Meaning</th>
</tr>
<tr>
<td><code>and</code></td>
<td>a <strong>and</strong> b</td>
<td><strong>Logical AND</strong>:<br><code>True</code> only if both the operands are <code>True</code></td>
</tr>
<tr>
<td><code>or</code></td>
<td>a <strong>or</strong> b</td>
<td><strong>Logical OR</strong>:<br><code>True</code> if at least one of the operands is <code>True</code></td>
</tr>
<tr>
<td><code>not</code></td>
<td><strong>not</strong> a</td>
<td><strong>Logical NOT</strong>:<br><code>True</code> if the operand is <code>False</code> and vice-versa.</td>
</tr>
</tbody></table>
</div>

<hr>
<h2>Example 4: Logical Operators</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># logical AND</span>
<span class="hljs-keyword">print</span>(<span class="hljs-literal">True</span> <span class="hljs-keyword">and</span> <span class="hljs-literal">True</span>)     <span class="hljs-comment"># True</span>
<span class="hljs-keyword">print</span>(<span class="hljs-literal">True</span> <span class="hljs-keyword">and</span> <span class="hljs-literal">False</span>)    <span class="hljs-comment"># False</span>

<span class="hljs-comment"># logical OR</span>
<span class="hljs-keyword">print</span>(<span class="hljs-literal">True</span> <span class="hljs-keyword">or</span> <span class="hljs-literal">False</span>)     <span class="hljs-comment"># True</span>

<span class="hljs-comment"># logical NOT</span>
<span class="hljs-keyword">print</span>(<span class="hljs-keyword">not</span> <span class="hljs-literal">True</span>)          <span class="hljs-comment"># False</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p class="note-tip"><strong>Note</strong>: Here is the <a href="/python-programming/keyword-list#and_or_not">truth table</a> for these logical operators.</p>

<hr>
<h2 id="bitwise">5. Python Bitwise operators</h2>

<p>Bitwise operators act on operands as if they were strings of binary digits. They operate bit by bit, hence the name.</p>

<p>For example, <strong>2</strong> is <code>10</code> in binary, and <strong>7</strong> is <code>111</code>.</p>

<p><strong>In the table below:</strong> Let <var>x</var> = <strong>10</strong> (<code>0000 1010</code> in binary) and <var>y</var> = <strong>4</strong> (<code>0000 0100</code> in binary)</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Meaning</th>
<th>Example</th>
</tr>
<tr>
<td><code>&amp;</code></td>
<td>Bitwise AND</td>
<td>x &amp; y = 0 (<code>0000 0000</code>)</td>
</tr>
<tr>
<td><code>|</code></td>
<td>Bitwise OR</td>
<td>x | y = 14 (<code>0000 1110</code>)</td>
</tr>
<tr>
<td><code>~</code></td>
<td>Bitwise NOT</td>
<td>~x = -11 (<code>1111 0101</code>)</td>
</tr>
<tr>
<td><code>^</code></td>
<td>Bitwise XOR</td>
<td>x ^ y = 14 (<code>0000 1110</code>)</td>
</tr>
<tr>
<td><code>&gt;&gt;</code></td>
<td>Bitwise right shift</td>
<td>x &gt;&gt; 2 = 2 (<code>0000 0010</code>)</td>
</tr>
<tr>
<td><code>&lt;&lt;</code></td>
<td>Bitwise left shift</td>
<td>x 0010 1000)</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="special">6. Python Special operators</h2>

<p>Python language offers some special types of operators like the <strong>identity</strong> operator and the <strong>membership</strong> operator. They are described below with examples.</p>

<h3 id="identity">Identity operators</h3>

<p>In Python, <code>is</code> and <code>is not</code> are used to check if two values are located at the same memory location.</p>

<p>It's important to note that having two variables with equal values doesn't necessarily mean they are identical.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Meaning</th>
<th>Example</th>
</tr>
<tr>
<td><code>is</code></td>
<td><code>True</code> if the operands are identical (refer to the same object)</td>
<td><code>x is True</code></td>
</tr>
<tr>
<td><code>is not</code></td>
<td><code>True</code> if the operands are not identical (do not refer to the same object)</td>
<td><code>x is not True</code></td>
</tr>
</tbody></table>
</div>

<h3>Example 4: Identity operators in Python</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">x1 = <span class="hljs-number">5</span>
y1 = <span class="hljs-number">5</span>
x2 = <span class="hljs-string">'Hello'</span>
y2 = <span class="hljs-string">'Hello'</span>
x3 = [<span class="hljs-number">1</span>,<span class="hljs-number">2</span>,<span class="hljs-number">3</span>]
y3 = [<span class="hljs-number">1</span>,<span class="hljs-number">2</span>,<span class="hljs-number">3</span>]

<span class="hljs-keyword">print</span>(x1 <span class="hljs-keyword">is</span> <span class="hljs-keyword">not</span> y1)  <span class="hljs-comment"># prints False</span>

<span class="hljs-keyword">print</span>(x2 <span class="hljs-keyword">is</span> y2)  <span class="hljs-comment"># prints True</span>

<span class="hljs-keyword">print</span>(x3 <span class="hljs-keyword">is</span> y3)  <span class="hljs-comment"># prints False</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we see that <var>x1</var> and <var>y1</var> are integers of the same values, so they are equal as well as identical. The same is the case with <var>x2</var> and <var>y2</var> (strings).</p>

<p>But <var>x3</var> and <var>y3</var> are lists. They are equal but not identical. It is because the interpreter locates them separately in memory, although they are equal.</p>

<h3 id="membership">Membership operators</h3>

<p>In Python, <code>in</code> and <code>not in</code> are the membership operators. They are used to test whether a value or variable is found in a sequence (<a href="/python-programming/string">string</a>, <a href="/python-programming/list">list</a>, <a href="/python-programming/tuple">tuple</a>, <a href="/python-programming/set">set</a> and <a href="/python-programming/dictionary">dictionary</a>).</p>

<p>In a dictionary, we can only test for the presence of a key, not the value.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Meaning</th>
<th>Example</th>
</tr>
<tr>
<td><code>in</code></td>
<td><code>True</code> if value/variable is <strong>found</strong> in the sequence</td>
<td><code>5 in x</code></td>
</tr>
<tr>
<td><code>not in</code></td>
<td><code>True</code> if value/variable is <strong>not found</strong> in the sequence</td>
<td><code>5 not in x</code></td>
</tr>
</tbody></table>
</div>

<hr>
<h2>Example 5: Membership operators in Python</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">message = <span class="hljs-string">'Hello world'</span>
dict1 = {<span class="hljs-number">1</span>:<span class="hljs-string">'a'</span>, <span class="hljs-number">2</span>:<span class="hljs-string">'b'</span>}

<span class="hljs-comment"># check if 'H' is present in message string</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'H'</span> <span class="hljs-keyword">in</span> message)  <span class="hljs-comment"># prints True</span>

<span class="hljs-comment"># check if 'hello' is present in message string</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'hello'</span> <span class="hljs-keyword">not</span> <span class="hljs-keyword">in</span> message)  <span class="hljs-comment"># prints True</span>

<span class="hljs-comment"># check if '1' key is present in dict1</span>
<span class="hljs-keyword">print</span>(<span class="hljs-number">1</span> <span class="hljs-keyword">in</span> dict1)  <span class="hljs-comment"># prints True</span>

<span class="hljs-comment"># check if 'a' key is present in dict1</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'a'</span> <span class="hljs-keyword">in</span> dict1)  <span class="hljs-comment"># prints False</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>True
True
True
False</samp></pre>

<p>Here, <code>'H'</code> is in <var>message</var>, but <code>'hello'</code> is not present in <var>message</var> (remember, Python is case-sensitive). </p>

<p>Similarly, <code>1</code> is key, and <code>'a'</code> is the value in dictionary <var>dict1</var>. Hence, <code>'a' in y</code> returns <code>False</code>.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/python-programming/precedence-associativity">Precedence and Associativity of operators in Python</a></li>
<li><a href="/python-programming/operator-overloading">Python Operator Overloading</a></li>
</ul>

</div>
</section>

<!-- third menu sections -->
<section id="third1">
<h1>Python if...else Statement</h1>
<div class="content">
  <p id="introduction">In computer programming, the <code>if</code> statement is a conditional statement. It is used to execute a block of code only when a specific condition is met. For example, </p>

<p>Suppose we need to assign different grades to students based on their scores.</p>

<ol>
<li>If a student scores above <strong>90</strong>, assign grade <strong>A</strong></li>
<li>If a student scores above <strong>75</strong>, assign grade <strong>B</strong></li>
<li>If a student scores above <strong>65</strong>, assign grade <strong>C</strong></li>
</ol>

<p>These conditional tasks can be achieved using the <code>if</code> statement.</p>

<hr>
<h2 id="if">Python if Statement</h2>

<p>An <code>if</code> statement executes a block of code only if the specified condition is met. </p>

<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">if</span> condition:
<span class="hljs-comment"># body of if statement</span></code></pre>

<p>Here, if the condition of the <code>if</code>  statement is:  </p>

<ul>
<li><strong>True</strong> - the body of the <code>if</code> statement executes.</li>
<li><strong>False</strong> - the body of the <code>if</code> statement is skipped from execution.</li>
</ul>

<p>Let's look at an example.</p>

<figure><img src="assets/images/python-if.png" title="Working of if Statement" alt="Working of if Statement" width="" height="">
<figcaption>Working of if Statement</figcaption></figure>
<div class="note-tip">
<p><strong>Note:</strong> Be mindful of the indentation while writing the <code>if</code> statements. Indentation is the whitespace at the beginning of the code.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">if</span> number &gt; <span class="hljs-number">0</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Number is positive'</span>)</code></pre>

<p>Here, the spaces before the <a href="https://www.programiz.com/python-programming/methods/built-in/print" title="Python print()">print()</a> statement denote that it's the body of the <code>if</code> statement.</p>

</div>
<hr>
<h3 id="example">Example: Python if Statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">10</span>

<span class="hljs-comment"># check if number is greater than 0</span>
<span class="hljs-keyword">if</span> number &gt; <span class="hljs-number">0</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Number is positive'</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">'This statement always executes'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Sample Output 1</strong></p>

<pre><samp>Number is positive
This statement always executes</samp></pre>

<p>In the above example, we have created a <a href="https://www.programiz.com/python-programming/variables-constants-literals">variable</a> named <var>number</var>. Notice the test <code>condition</code>,</p>

<pre style="max-height: 600px;"><code class="python hljs">number &gt; <span class="hljs-number">0</span> </code></pre>

<p>As the <var>number</var> is greater than <strong>0</strong>, the condition evaluates <code>True</code>. Hence, the body of the <code>if</code> statement executes.</p>

<p><strong>Sample Output 2</strong></p>

<p>Now, let's change the value of the <var>number</var> to a negative integer, say <strong>-5</strong>.</p>

<pre style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">-5</span></code></pre>

<p>Now, when we run the program, the output will be:</p>

<pre><samp>This statement always executes</samp></pre>

<p>This is because the value of the <var>number</var> is less than <strong>0</strong>. Hence, the condition evaluates to <code>False</code>. And, the body of the <code>if</code> statement is skipped.</p>

<hr>
<h2 id="if-else">Python if...else Statement</h2>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>An <code>if</code> statement can have an optional <code>else</code> clause. The <code>else</code> statement executes if the condition in the <code>if</code> statement evaluates to <code>False</code>.</p>

<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">if</span> condition:
<span class="hljs-comment"># body of if statement</span>

<span class="hljs-keyword">else</span>:
<span class="hljs-comment"># body of else statement</span></code></pre>

<p>Here, if the <code>condition</code> inside the <code>if</code> statement evaluates to</p>

<ul>
<li><strong>True</strong> - the body of <code>if</code> executes, and the body of <code>else</code> is skipped.</li>
<li><strong>False</strong> - the body of <code>else</code> executes, and the body of  <code>if</code> is skipped</li>
</ul>

<p>Let's look at an example.</p>

<figure><img src="assets/images/python-if-else.png" title="Working of if…else Statement" alt="Working of if…else Statement" width="" height="">
<figcaption>Working of if…else Statement</figcaption></figure>
<hr>
<h3 id="example">Example: Python if…else Statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">10</span>

<span class="hljs-keyword">if</span> number &gt; <span class="hljs-number">0</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Positive number'</span>)

<span class="hljs-keyword">else</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Negative number'</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">'This statement always executes'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Sample Output 1</strong></p>

<pre><samp>Positive number
This statement always executes</samp></pre>

<p>In the above example, we have created a variable named <var>number</var>. </p>

<p>Since the value of the  <var>number</var> is <strong>10</strong>, the <code>condition</code> evaluates to <code>True</code>. Hence, code inside the body of <code>if</code> is executed.</p>

<p><strong>Sample Output 2</strong></p>

<p>If we change the value of the variable to a negative integer, let's say <strong>-5</strong>, our output will be:</p>

<pre><samp>Negative number
This statement always executes</samp></pre>

<p>Here, the test condition evaluates to <code>False</code>. Hence code inside the body of <code>else</code> is executed.</p>

<hr>
<h2 id="if-elif-else">Python if…elif…else Statement</h2>

<p>The <code>if...else</code> statement is used to execute a block of code among two alternatives.</p>

<p>However, if we need to make a choice between more than two alternatives, we use the <code>if...elif...else</code> statement.</p>

<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">if</span> condition1:
<span class="hljs-comment"># code block 1</span>

<span class="hljs-keyword">elif</span> condition2:
<span class="hljs-comment"># code block 2</span>

<span class="hljs-keyword">else</span>: 
<span class="hljs-comment"># code block 3</span></code></pre>

<p>Here,</p>

<ul>
<li><code>if condition1</code> - This checks if <code>condition1</code> is <code>True</code>. If it is, the program executes <strong>code block 1</strong>.</li>
</ul>

<ul>
<li><code>elif condition2</code> - If <code>condition1</code> is not <code>True</code>, the program checks <code>condition2</code>. If <code>condition2</code> is <code>True</code>, it executes <strong>code block 2</strong>.</li>
</ul>

<ul>
<li><code>else</code> - If neither <code>condition1</code> nor <code>condition2</code> is <code>True</code>, the program defaults to executing <strong>code block 3</strong>.</li>
</ul>

<p>Let's look at an example.</p>

<figure><img src="assets/images/python-elif.png" title="Working of if…elif…else Statement" alt="Working of if…elif…else Statement" width="" height="">
<figcaption>Working of if…elif…else Statement</figcaption></figure>
<hr>
<h3 id="example">Example: Python if…elif…else Statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">0</span>

<span class="hljs-keyword">if</span> number &gt; <span class="hljs-number">0</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Positive number'</span>)

<span class="hljs-keyword">elif</span> number &lt;<span class="hljs-number">0</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Negative number'</span>)

<span class="hljs-keyword">else</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Zero'</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">'This statement is always executed'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Zero
This statement is always executed</samp></pre>

<p>In the above example, we have created a variable named <var>number</var>.</p>

<p>Since the value of the  <var>number</var> is <strong>0</strong>, both the test conditions evaluate to <code>False</code>. </p>

<p>Hence, the statement inside the body of <code>else</code> is executed.</p>

<hr>
<h2 id="nested-if-statements">Python Nested if Statements</h2>

<p>It is possible to include an <code>if</code> statement inside another <code>if</code> statement. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">5</span>

<span class="hljs-comment"># outer if statement</span>
<span class="hljs-keyword">if</span> number &gt;= <span class="hljs-number">0</span>:
<span class="hljs-comment"># inner if statement</span>
<span class="hljs-keyword">if</span> number == <span class="hljs-number">0</span>:
  <span class="hljs-keyword">print</span>(<span class="hljs-string">'Number is 0'</span>)

<span class="hljs-comment"># inner else statement</span>
<span class="hljs-keyword">else</span>:
    <span class="hljs-keyword">print</span>(<span class="hljs-string">'Number is positive'</span>)

<span class="hljs-comment"># outer else statement</span>
<span class="hljs-keyword">else</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Number is negative'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Number is positive</samp></pre>

<p>Here's how this program works.</p>

<figure><img src="assets/images/python-nested-if.png" title="Working of Nested if Statement" alt="Working of Nested if Statement" width="" height="">
<figcaption>Working of Nested if Statement</figcaption></figure>
<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">More on Python if…else Statement

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Python <code>if</code> Shorthand

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>In certain situations, the <code>if</code> statement can be simplified into a single line. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">10</span>

<div class="line-highlight"><span class="hljs-keyword">if</span> number &gt; <span class="hljs-number">0</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Positive'</span>)</div></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>This code can be compactly written as</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">10</span>

<div class="line-highlight"><span class="hljs-keyword">if</span> number&gt;<span class="hljs-number">0</span>: <span class="hljs-keyword">print</span>(<span class="hljs-string">'Positive'</span>)</div></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>This one-liner approach retains the same functionality but in a more concise format.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Ternary Operator in Python <code>if...else</code>

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Python doesn't have a ternary operator. However, we can use <code>if...else</code> to work like a ternary operator in other languages. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">grade = <span class="hljs-number">40</span>

<span class="hljs-keyword">if</span> grade &gt;= <span class="hljs-number">50</span>:
result = <span class="hljs-string">'pass'</span>
<span class="hljs-keyword">else</span>:
result = <span class="hljs-string">'fail'</span>

<span class="hljs-keyword">print</span>(result)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>can be written as</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">grade = <span class="hljs-number">40</span>

result = <span class="hljs-string">'pass'</span> <span class="hljs-keyword">if</span> number &gt;= <span class="hljs-number">50</span> <span class="hljs-keyword">else</span> <span class="hljs-string">'fail'</span>

<span class="hljs-keyword">print</span>(result)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Logical Operators to Add Multiple Conditions

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can use logical operators such as <code>and</code> and <code>or</code> within an <code>if</code> statement.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">age = <span class="hljs-number">35</span>
salary = <span class="hljs-number">6000</span>

<div class="line-highlight"><span class="hljs-comment"># add two conditions using and operator</span>
<span class="hljs-keyword">if</span> age &gt;= <span class="hljs-number">30</span> <span class="hljs-keyword">and</span> salary &gt;= <span class="hljs-number">5000</span>:</div>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Eligible for the premium membership.'</span>)
<span class="hljs-keyword">else</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Not eligible for the premium membership'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Eligible for the premium membership.</samp></pre>

<p>Here, we used the logical operator <code>and</code> to add two conditions in the <code>if</code> statement. </p>

<p>We also used <code>&gt;=</code> (comparison operator) to compare two values. </p>

<p>Logical and comparison operators are often used with <code>if...else</code> statements. Visit <a href="/python-programming/operators#logical">Python Operators</a> to learn more.</p>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="recommended">Also Read</h2>

<ul>
<li><a href="/python-programming/pass-statement">Python pass Statement</a></li>
<li><a href="/python-programming/break-continue">Python break and continue</a></li>
</ul>

</div>
</section>
<section id="third2">
<h1>Python for Loop</h1>
<div class="content">
  <p id="introduction">In Python, a <code>for</code> loop is used to iterate over sequences such as <a href="https://www.programiz.com/python-programming/list" title="Python Lists">lists</a>, <a href="https://www.programiz.com/python-programming/string">strings</a>, <a href="https://www.programiz.com/python-programming/tuple">tuples</a>, etc. </p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">languages = [<span class="hljs-string">'Swift'</span>, <span class="hljs-string">'Python'</span>, <span class="hljs-string">'Go'</span>]

<span class="hljs-comment"># access elements of the list one by one</span>
<span class="hljs-keyword">for</span> i <span class="hljs-keyword">in</span> languages:
<span class="hljs-keyword">print</span>(i)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Swift
Python
Go</samp></pre>

<p>In the above example, we have created a list called <var>languages</var>. As the list has 3 elements, the loop iterates <strong>3</strong> times.</p>

<p>The value of <code>i</code> is </p>

<ul>
<li><code>Swift</code> in the first iteration.</li>
<li><code>Python</code> in the second iteration.</li>
<li><code>Go</code> in the third iteration.</li>
</ul>

<hr>
<h2 id="syntax-of-for-loop">for loop Syntax</h2>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">for</span> val <span class="hljs-keyword">in</span> sequence:
<span class="hljs-comment"># statement(s)</span></code></pre>

<p>Here, <var>val</var> accesses each item of the <code>sequence</code> on each iteration. The loop continues until we reach the last item in the sequence. </p>

<hr>
<h2 id="flowchart">Flowchart of Python for Loop</h2>

<figure><img src="assets/images/python-for-loop-working.png" title="Working of Python for Loop" alt="Working of Python for Loop" width="" height="400" style="height: 400px;">
<figcaption>Flowchart of Python for Loop</figcaption>
</figure>
<hr>
<h2 id="string">Example: Loop Through a String</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">language = <span class="hljs-string">'Python'</span>

<span class="hljs-comment"># iterate over each character in language</span>
<span class="hljs-keyword">for</span> x <span class="hljs-keyword">in</span> language:
<span class="hljs-keyword">print</span>(x)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>P
y
t
h
o
n</samp></pre>

<p>Here, we have printed each character of the string <var>language</var> using a <code>for</code> loop.</p>

<hr>
<h2 id="range">for Loop with Python range()</h2>

<p>In Python, the <a href="/python-programming/methods/built-in/range">range()</a> function returns a sequence of numbers. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs">values = range(<span class="hljs-number">4</span>)</code></pre>

<p>Here, <code>range(4)</code> returns a sequence of <strong>0</strong>, <strong>1</strong>, <strong>2</strong> ,and <strong>3</strong>.</p>

<p>Since the <code>range()</code> function returns a sequence of numbers, we can iterate over it using a <code>for</code> loop. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># iterate from i = 0 to i = 3</span>
<span class="hljs-keyword">for</span> i <span class="hljs-keyword">in</span> range(<span class="hljs-number">4</span>):
<span class="hljs-keyword">print</span>(i)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>0
1
2
3</samp></pre>
<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here, we used the <code>for</code> loop to iterate over a range from <strong>0</strong> to <strong>3</strong>.</p>
<p>This is how the above program works.</p>
<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Iteration</th>
<th>Value of <code>i</code></th>
<th><code>print(i)</code></th>
<th>Last item in sequence?</th>
</tr>
<tr>
<td>1st</td>
<td><code>0</code></td>
<td>Prints <code>0</code> </td>
<td>No</td>
</tr>
<tr>
<td>2nd</td>
<td><code>1</code></td>
<td>Prints <code>1</code></td>
<td>No</td>
</tr>
<tr>
<td>3rd</td>
<td><code>2</code></td>
<td>Prints <code>2</code></td>
<td>No</td>
</tr>
<tr>
<td>4th</td>
<td><code>3</code></td>
<td>Prints <code>3</code></td>
<td>Yes<br>The loop terminates.</td>
</tr>
</tbody></table>
</div>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">More on Python for Loop

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Python for loop with <code>else</code> clause

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>A <code>for</code> loop can have an optional <code>else</code> clause. This <code>else</code> clause executes after the iteration completes.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">digits = [<span class="hljs-number">0</span>, <span class="hljs-number">1</span>, <span class="hljs-number">5</span>]

<span class="hljs-keyword">for</span> i <span class="hljs-keyword">in</span> digits:
<span class="hljs-keyword">print</span>(i)
<span class="hljs-keyword">else</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">"No items left."</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>0
1
5
No items left.</samp></pre>

<p>Here, the <code>for</code> loop prints all the items of the <var>digits</var> list. When the loop finishes, it executes the <code>else</code> block and prints <code>No items left</code>.</p>

<p class="note-tip"><strong>Note</strong>: The <code>else</code> block will not execute if the for loop is stopped by a <a href="/python-programming/break-continue">break</a> statement.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Using for loop without accessing items

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can also use <code>for</code> loop to repeat an action a certain number of times. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">languages = [<span class="hljs-string">'Swift'</span>, <span class="hljs-string">'Python'</span>, <span class="hljs-string">'Go'</span>]

<span class="hljs-comment"># looping to repeat an action without using the list elements</span>
<span class="hljs-keyword">for</span> language <span class="hljs-keyword">in</span> languages:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Hi'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Hi
Hi
Hi</samp></pre>

<p>Here, we used the list <var>languages</var> to run the loop three times. However, we didn't use any of the elements of the list. </p>

<p>In such cases, it is clearer to use the <code>_</code> (underscore) as the loop variable. The <code>_</code> indicates                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                that a loop variable is a placeholder and its value is intentionally being ignored.</p>

<p>For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">languages = [<span class="hljs-string">'Swift'</span>, <span class="hljs-string">'Python'</span>, <span class="hljs-string">'Go'</span>]

<span class="hljs-comment"># using _ for placeholder variable</span>
<span class="hljs-keyword">for</span> _ <span class="hljs-keyword">in</span> languages:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Hi'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, the loop still runs three times because there are three elements in the <code>languages</code> list. Using <code>_</code> indicates that the loop is there for repetition and not for accessing the elements.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Nested for loops

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>A <code>for</code> loop can also have another <code>for</code> loop inside it. For each cycle of the outer loop, the inner loop completes its entire sequence of iterations. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># outer loop </span>
<span class="hljs-keyword">for</span> i <span class="hljs-keyword">in</span> range(<span class="hljs-number">2</span>):
<span class="hljs-comment"># inner loop</span>
<span class="hljs-keyword">for</span> j <span class="hljs-keyword">in</span> range(<span class="hljs-number">2</span>): 
    <span class="hljs-keyword">print</span>(<span class="hljs-string">f"i = <span class="hljs-subst">{i}</span>, j = <span class="hljs-subst">{j}</span>"</span>)
</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>i = 0, j = 0
i = 0, j = 1
i = 1, j = 0
i = 1, j = 1</samp></pre>
</div></div></div></div></div></div></div></div></div>


<p><strong>Also Read</strong>:</p>
<ul>
<li> <a href="/python-programming/while-loop">Python while loop</a></li>
</ul>
</div>
</section>
<section id="third3">
<h1>Python while Loop</h1>
<div class="content">
  <p id="introduction">In Python, we use the <code>while</code> loop to repeat a block of code until a certain condition is met. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">number = <span class="hljs-number">1</span>

<span class="hljs-keyword">while</span> number &lt;= <span class="hljs-number">3</span>:
<span class="hljs-keyword">print</span>(number)
number = number + <span class="hljs-number">1</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>1
2
3</samp></pre>

<p>In the above example, we have used a <code>while</code> loop to print the numbers from <strong>1</strong> to <strong>3</strong>. The loop runs as long as the condition <code>number &lt;= 3</code> is satisfied.</p>

<hr>
<h2 id="syntax">while Loop Syntax</h2>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">while</span> condition:
<span class="hljs-comment"># body of while loop</span></code></pre>

<p>Here,</p>

<ol>
<li>The <code>while</code> loop evaluates the condition.</li>
<li>If the condition is true, <strong>body of while loop</strong> is executed. The condition is evaluated again.</li>
<li>This process continues until the condition is <code>False</code>.</li>
<li>Once the condition evaluates to <code>False</code>, the loop terminates.</li>
</ol>

<hr>
<h2 id="flowchart">Flowchart of Python while Loop</h2>

<figure><img src="assets/images/python-while-loop-flowchart.png" title="Flowchart of Python while Loop" alt="Flowchart of Python while Loop" width="450" height="380">
<figcaption>Flowchart of Python while Loop</figcaption></figure>
<hr>
<h3 id="example1">Example: Python while Loop</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># Calculate the sum of numbers until user enters 0</span>
number = int(<span class="hljs-keyword">input</span>(<span class="hljs-string">'Enter a number: '</span>))

total = <span class="hljs-number">0</span>

<span class="hljs-comment"># iterate until the user enters 0</span>
<span class="hljs-keyword">while</span> number != <span class="hljs-number">0</span>:
total += number
number = int(<span class="hljs-keyword">input</span>(<span class="hljs-string">'Enter a number: '</span>))

<span class="hljs-keyword">print</span>(<span class="hljs-string">'The sum is'</span>, total)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a number: 3
Enter a number: 2
Enter a number: 1
Enter a number: -4
Enter a number: 0
The sum is 2</samp></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here is how the above program works:</p>

<ol>
<li>It asks the user to enter a number.</li>
<li>If the user enters a number other than <strong>0</strong>, it adds the number to the <code>total</code> and asks the user to enter a number again.</li>
<li>If the user enters <strong>0</strong>, the loop terminates and the program displays the total.</li>
</ol>

<hr>
<h2 id="infinite-loop">Infinite while Loop</h2>

<p>If the condition of a <code>while</code> loop is always <code>True</code>, the loop runs for infinite times, forming an <strong>infinite while loop</strong>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">age = <span class="hljs-number">32</span>

<span class="hljs-comment"># the test condition is always True</span>
<span class="hljs-keyword">while</span> age &gt; <span class="hljs-number">18</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'You can vote'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>You can vote
You can vote
You can vote
.
.
.</samp></pre>

<p>The above program is equivalent to:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">age = <span class="hljs-number">32</span>

<span class="hljs-comment"># the test condition is always True</span>
<span class="hljs-keyword">while</span> <span class="hljs-literal">True</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'You can vote'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">More on Python while Loop

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Python <code>while</code> loop with <code>break</code> statement

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can use a <a href="/python-programming/break-continue">break statement</a> inside a <code>while</code> loop to terminate the loop immediately without checking the test condition. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">while</span> <span class="hljs-literal">True</span>:
user_input = <span class="hljs-keyword">input</span>(<span class="hljs-string">'Enter your name: '</span>)

<span class="hljs-comment"># terminate the loop when user enters end</span>
<span class="hljs-keyword">if</span> user_input == <span class="hljs-string">'end'</span>:
    <span class="hljs-keyword">print</span>(<span class="hljs-string">f'The loop is ended'</span>)
    <span class="hljs-keyword">break</span>  

<span class="hljs-keyword">print</span>(<span class="hljs-string">f'Hi <span class="hljs-subst">{user_input}</span>'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter your name: Kevin
Hi Kevin
Enter your name: end
The loop is ended</samp></pre>

<p>Here, the condition of the while loop is always <code>True</code>. However, if the user enters <code>end</code>, the loop termiantes because of the <code>break</code> statement.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Python <code>while</code> loop with an <code>else</code> clause

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion">In Python, a <code>while</code> loop can have an optional <code>else</code> clause - that is executed once the loop condition is <code>False</code>. For example,

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">counter = <span class="hljs-number">0</span>

<span class="hljs-keyword">while</span> counter  &lt;  <span class="hljs-number">2</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'This is inside loop'</span>)
counter = counter + <span class="hljs-number">1</span>
<div class="line-highlight"><span class="hljs-keyword">else</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'This is inside else block'</span>)</div></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>This is inside loop
This is inside loop
This is inside else block</samp></pre>

<p>Here, on the third iteration, the  <code>counter</code> becomes <strong>2</strong> which terminates the loop. It then executes the <code>else</code> block and prints <code>This is inside else block</code>.</p>

<p class="note-tip"><strong>Note</strong>: The <code>else</code> block will not execute if the <code>while</code> loop is terminated by a <code>break</code> statement.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Python for loop vs while loop

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>The <a href="/python-programming/for-loop">for loop</a> is usually used in the sequence when the number of iterations is known. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># loop is iterated 4 times </span>
<span class="hljs-keyword">for</span> i <span class="hljs-keyword">in</span> range(<span class="hljs-number">4</span>):
<span class="hljs-keyword">print</span>(i)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>0
1
2
3</samp></pre>

<p>The <code>while</code> loop is usually used when the number of iterations is unknown. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">while</span> <span class="hljs-literal">True</span>:
user_input = <span class="hljs-keyword">input</span>(<span class="hljs-string">"Enter password: "</span>)

<span class="hljs-comment"># terminate the loop when user enters exit</span>
<span class="hljs-keyword">if</span> user_input == <span class="hljs-string">'exit'</span>:
    <span class="hljs-keyword">print</span>(<span class="hljs-string">f'Status: Entry Rejected'</span>)
    <span class="hljs-keyword">break</span>  

<span class="hljs-keyword">print</span>(<span class="hljs-string">f'Status: Entry Allowed'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter password: Python is Fun
Status: Entry Allowed
Enter password: exit
Status: Entry Rejected</samp></pre>

</div></div></div></div></div></div></div></div></div>


<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/if-elif-else" title="Python if...else Statement">Python if...else Statement</a></li>
</ul>  </div>
</section>
<section id="third4">
<h1>Python break and continue</h1>
<div class="content">
  <p id="introduction">In programming, the <code>break</code> and <code>continue</code> statements are used to alter the flow of loops:</p>

<ul>
<li><code>break</code> exits the loop entirely</li>
<li><code>continue</code> skips the current iteration and proceeds to the next one</li>
</ul>

<hr>
<h2 id="break">Python break Statement</h2>

<p>The <code>break</code> statement terminates the loop immediately when it's encountered. </p>

<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">break</span></code></pre>

<hr>
<h2 id="working-of-break">Working of Python break Statement </h2>

<figure><img src="assets/images/working-break-statement-python.png" title="Working of break statement in Python" alt="Working of break statement in Python" width="430" height="380">
<figcaption>Working of break Statement in Python</figcaption></figure>
<p>The above image shows the working of break statements in <a href="/python-programming/for-loop">for</a> and <a href="/python-programming/while-loop">while</a> loops.</p>

<p class="note-tip"><strong>Note:</strong> The <code>break</code> statement is usually used inside decision-making statements such as <a href="/python-programming/if-elif-else">if...else</a>. </p>

<hr>
<h3 id="example">Example: break Statement with for Loop</h3>

<p>We can use the <code>break</code> statement with the <code>for</code> loop to terminate the loop when a certain condition is met. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">for</span> i <span class="hljs-keyword">in</span> range(<span class="hljs-number">5</span>):
<span class="hljs-keyword">if</span> i == <span class="hljs-number">3</span>:
    <span class="hljs-keyword">break</span>
<span class="hljs-keyword">print</span>(i)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>0
1
2</samp></pre>

<p>In the above example, </p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">if</span> i == <span class="hljs-number">3</span>:
<span class="hljs-keyword">break</span></code></pre>

<p>terminates the loop when <code>i</code> is equal to <strong>3.</strong> Hence, the output doesn't include values after <strong>2</strong>.</p>

<p class="note-tip"><strong>Note:</strong> We can also terminate the <code>while</code> loop using a <code>break</code> statement.</p>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">break Statement with while Loop

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can also terminate the <code>while</code> loop using the <code>break</code> statement. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">i = <span class="hljs-number">0</span>

<span class="hljs-keyword">while</span> i &lt; <span class="hljs-number">5</span>:
<span class="hljs-keyword">if</span> i == <span class="hljs-number">3</span>:
    <span class="hljs-keyword">break</span>
<span class="hljs-keyword">print</span>(i)
i += <span class="hljs-number">1</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>0
1
2</samp></pre>

<p>In the above example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">if</span> i == <span class="hljs-number">3</span>:
<span class="hljs-keyword">break</span></code></pre>

<p>terminates the loop when <code>i</code> is equal to <strong>3</strong>.</p>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="continue">Python continue Statement</h2>

<p>The <code>continue</code> statement skips the current iteration of the loop and the control flow of the program goes to the next iteration.</p>

<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">continue</span></code></pre>

<hr>
<h2 id="working-of-continue">Working of continue Statement in Python</h2>

<figure><img src="assets/images/working-continue-statement-python.png" title="Working of continue statement in Python" alt="Working of continue statement in Python" width="430" height="380">
</figure>
<hr>
<h3 id="example">Example: continue Statement with for Loop</h3>

<p>We can use the <code>continue</code> statement with the <code>for</code> loop to skip the current iteration of the loop and jump to the next iteration. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">for</span> i <span class="hljs-keyword">in</span> range(<span class="hljs-number">5</span>):
<span class="hljs-keyword">if</span> i == <span class="hljs-number">3</span>:
    <span class="hljs-keyword">continue</span>
<span class="hljs-keyword">print</span>(i)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>0
1
2
4</samp></pre>

<p>In the above example, </p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">if</span> i == <span class="hljs-number">3</span>:
<span class="hljs-keyword">continue</span></code></pre>

<p>skips the current iteration when <code>i</code> is equal to <strong>3</strong>, and continues the next iteration. Hence, the output has all the values except <strong>3</strong>.</p>

<p class="note-tip"><strong>Note:</strong> We can also use the  <code>continue</code> statement with a <code>while</code> loop.</p>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">continue Statement with while Loop

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can skip the current iteration of the <code>while</code> loop using the <code>continue</code> statement. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># Program to print odd numbers from 1 to 10</span>

num = <span class="hljs-number">0</span>

<span class="hljs-keyword">while</span> num &lt; <span class="hljs-number">10</span>:
num += <span class="hljs-number">1</span>

<span class="hljs-keyword">if</span> (num % <span class="hljs-number">2</span>) == <span class="hljs-number">0</span>:
    <span class="hljs-keyword">continue</span>

<span class="hljs-keyword">print</span>(num)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>1
3
5
7
9</samp></pre>

<p>In the above example, we have used the <code>while</code> loop to print the odd numbers between <strong>1</strong> and <strong>10</strong>. Here,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">if</span> (num % <span class="hljs-number">2</span>) == <span class="hljs-number">0</span>:
<span class="hljs-keyword">continue</span></code></pre>

<p>skips the current iteration when the number is even and starts the next iteration.</p>

</div></div></div></div></div></div></div></div></div>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/pass-statement" title="Python pass Statement">Python pass Statement</a></li>
<li><a href="https://www.programiz.com/python-programming/methods/built-in/range" title="Python range()">Python range()</a></li>
</ul>
</div>
</section>
<section id="third5">
<h1>Python pass Statement</h1>
<div class="content">
  <p id="introduction">In Python programming, the <code>pass</code> statement is a null statement which can be used as a placeholder for future code.</p>

<p>Suppose we have a <a href="https://www.programiz.com/python-programming/looping-technique">loop</a> or a <a href="https://www.programiz.com/python-programming/function">function</a> that is not implemented yet, but we want to implement it in the future. In such cases, we can use the <code>pass</code> statement.</p>

<p>The syntax of the <code>pass</code> statement is:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">pass</span></code></pre>

<hr>
<h2 id="conditional">Using pass With Conditional Statement</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">n = <span class="hljs-number">10</span>

<span class="hljs-comment"># use pass inside if statement</span>
<span class="hljs-keyword">if</span> n &gt; <span class="hljs-number">10</span>:
<span class="hljs-keyword">pass</span>

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Hello'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, notice that we have used the <code>pass</code> statement inside the <a href="https://www.programiz.com/python-programming/if-elif-else">if statement</a> .</p>

<p>However, nothing happens when the pass is executed. It results in no operation (NOP).</p>
<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Suppose we didn't use pass or just put a comment as:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">n = <span class="hljs-number">10</span>

<span class="hljs-keyword">if</span> n &gt; <span class="hljs-number">10</span>:
<span class="hljs-comment"># write code later</span>

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Hello'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we will get an error message: <code>IndentationError: expected an indented block</code></p>

<p class="note-tip"><strong>Note</strong>: The difference between a <a href="/python-programming/statement-indentation-comments">comment</a> and a <code>pass</code> statement in Python is that while the interpreter ignores a comment entirely, <code>pass</code> is not ignored.</p>

<hr>
<h2 id="function-class">Use of pass Statement inside Function or Class</h2>

<p>We can do the same thing in an empty function or <a href="/python-programming/class">class</a> as well. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">function</span><span class="hljs-params">(args)</span>:</span>
<span class="hljs-keyword">pass</span></code></pre>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Example</span>:</span>
<span class="hljs-keyword">pass</span></code></pre>

<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/break-continue" title="Python break and continue">Python break and continue</a></li>
</ul>  </div>
</section>

<!-- four menu sections -->
<section id="four1">
<h1>Python Numbers, Type Conversion and Mathematics</h1>
<div class="content">
  <p id="introduction">The number <a href="/python-programming/variables-datatypes">data types</a> are used to store the numeric values.</p>

<p>Python supports integers, floating-point numbers and complex numbers. They are defined as <code>int</code>, <code>float</code>, and <code>complex</code> classes in Python.</p>

<ul>
<li><code>int</code> - holds signed integers of non-limited length.</li>
<li><code>float</code> - holds floating decimal points and it's accurate up to <strong>15</strong> decimal places.</li>
<li><code>complex</code> - holds complex numbers.</li>
</ul>

<hr>
<h2 id="numeric">Python Numeric Data Type</h2>

<p>Integers and floating points are separated by the presence or absence of a decimal point. For instance,</p>

<ul>
<li><strong>5</strong> is an integer</li>
<li><strong>5.42</strong> is a floating-point number.</li>
</ul>

<p>Complex numbers are written in the form, <code>x + yj</code>, where <code>x</code> is the real part and <code>y</code> is the imaginary part.</p>

<p>We can use the <a href="https://www.programiz.com/python-programming/methods/built-in/type">type()</a> function to know which class a <a href="https://www.programiz.com/python-programming/variables-constants-literals">variable</a> or a value belongs to.</p>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">num1 = <span class="hljs-number">5</span>
<span class="hljs-keyword">print</span>(num1, <span class="hljs-string">'is of type'</span>, type(num1))

num2 = <span class="hljs-number">5.42</span>
<span class="hljs-keyword">print</span>(num2, <span class="hljs-string">'is of type'</span>, type(num2))

num3 = <span class="hljs-number">8</span>+<span class="hljs-number">2j</span>
<span class="hljs-keyword">print</span>(num3, <span class="hljs-string">'is of type'</span>, type(num3))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>5 is of type &lt;class 'int'&gt;
5.42 is of type &lt;class 'float'&gt;
(8+2j) is of type &lt;class 'complex'&gt;</samp></pre>

<p>In the above example, we have created three variables named <var>num1</var>, <var>num2</var> and <var>num3</var> with values <strong>5</strong>, <strong>5.42</strong>, and <code>8+2j</code> respectively.</p>

<p>We have also used the <code>type()</code> function to know which class a certain variable belongs to. Since,</p>

<ul>
<li><strong>5</strong> is an integer value, <code>type()</code> returns <code>int</code> as the class of <var>num1</var> i.e <code>&lt;class 'int'&gt;</code></li>
<li><strong>5.42</strong> is a floating value, <code>type()</code> returns float as the class of <var>num2</var> i.e <code>&lt;class 'float'&gt;</code></li>
<li><code>1 + 2j</code> is a complex number, <code>type()</code> returns complex as the class of <var>num3</var> i.e <code>&lt;class 'complex'&gt;</code></li>
</ul>

<hr>
<h2 id="number-systems">Number Systems</h2>

<p>The numbers we deal with every day are of the decimal <strong>(base 10)</strong> number system.</p>

<p>But computer programmers need to work with binary <strong>(base 2)</strong>, hexadecimal <strong>(base 16)</strong> and octal <strong>(base 8)</strong> number systems.</p>

<p>In Python, we can represent these numbers by appropriately placing a prefix before that number. The following table lists these prefixes.</p>

<div class="table-responsive">
<table border="0">
<tbody>
  <tr>
    <th>Number System</th>
    <th>Prefix</th>
  </tr>
  <tr>
    <td>Binary</td>
    <td><code>0b</code> or <code>0B</code></td>
  </tr>
  <tr>
    <td>Octal</td>
    <td><code>0o</code> or <code>0O</code></td>
  </tr>
  <tr>
    <td>Hexadecimal</td>
    <td><code>0x</code> or <code>0X</code></td>
  </tr>
</tbody>
</table>
</div>

<p>Here are some examples</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-number">0b1101011</span>)  <span class="hljs-comment"># prints 107</span>

<span class="hljs-keyword">print</span>(<span class="hljs-number">0xFB</span> + <span class="hljs-number">0b10</span>)  <span class="hljs-comment"># prints 253</span>

<span class="hljs-keyword">print</span>(<span class="hljs-number">0o15</span>)  <span class="hljs-comment"># prints 13</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<hr>
<h2 id="type-conversion">Type Conversion in Python</h2>

<p>In programming, type conversion is the process of converting one type of number into another.</p>

<p>Operations like addition, subtraction convert integers to float implicitly (automatically), if one of the operands is float. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-number">1</span> + <span class="hljs-number">2.0</span>) <span class="hljs-comment"># prints 3.0</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we can see above that <strong>1</strong> (integer) is converted into <strong>1.0</strong> (float) for addition and the result is also a floating point number.</p>

<h4>Explicit Type Conversion</h4>

<p>We can also use built-in functions like <a href="https://www.programiz.com/python-programming/methods/built-in/int">int()</a>, <a href="https://www.programiz.com/python-programming/methods/built-in/float">float()</a> and <a href="https://www.programiz.com/python-programming/methods/built-in/complex">complex()</a> to convert between types explicitly. These functions can even convert from <a href="/python-programming/string">strings</a>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">num1 = int(<span class="hljs-number">2.3</span>)
<span class="hljs-keyword">print</span>(num1)  <span class="hljs-comment"># prints 2</span>

num2 = int(<span class="hljs-number">-2.8</span>)
<span class="hljs-keyword">print</span>(num2)  <span class="hljs-comment"># prints -2</span>

num3 = float(<span class="hljs-number">5</span>)
<span class="hljs-keyword">print</span>(num3) <span class="hljs-comment"># prints 5.0</span>

num4 = complex(<span class="hljs-string">'3+5j'</span>)
<span class="hljs-keyword">print</span>(num4)  <span class="hljs-comment"># prints (3 + 5j)</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, when converting from float to integer, the number gets truncated (decimal parts are removed).</p>

<p>Similarly when converting from integer to float, <code>.0</code> is postfixed to the number.</p>
<p>To learn more about type conversion in Python, visit <a href="https://www.programiz.com/python-programming/type-conversion-and-casting">Python Type Conversion</a>.</p>

<hr>
<h2 id="random">Python Random Module</h2>

<p>Python offers the <code>random</code> module to generate random numbers or to pick a random item from an iterator.</p>

<p>First we need to import the <code>random</code> module. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> random

<span class="hljs-keyword">print</span>(random.randrange(<span class="hljs-number">10</span>, <span class="hljs-number">20</span>))

list1 = [<span class="hljs-string">'a'</span>, <span class="hljs-string">'b'</span>, <span class="hljs-string">'c'</span>, <span class="hljs-string">'d'</span>, <span class="hljs-string">'e'</span>]

<span class="hljs-comment"># get random item from list1</span>
<span class="hljs-keyword">print</span>(random.choice(list1))

<span class="hljs-comment"># Shuffle list1</span>
random.shuffle(list1)

<span class="hljs-comment"># Print the shuffled list1</span>
<span class="hljs-keyword">print</span>(list1)

<span class="hljs-comment"># Print random element</span>
<span class="hljs-keyword">print</span>(random.random())</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>15
a
['d', 'b', 'c', 'e', 'a']
0.6716121217631744</samp></pre>

<p>To learn more about the <code>random</code> module, visit Python <a href="/python-programming/modules/random">Random Module</a>.</p>

<hr>
<h2 id="math">Python Mathematics</h2>

<p>Python offers the <code>math</code> module to carry out different mathematics like trigonometry, logarithms, probability and statistics, etc. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> math

<span class="hljs-keyword">print</span>(math.pi)

<span class="hljs-keyword">print</span>(math.cos(math.pi))

<span class="hljs-keyword">print</span>(math.exp(<span class="hljs-number">10</span>))

<span class="hljs-keyword">print</span>(math.log10(<span class="hljs-number">1000</span>))

<span class="hljs-keyword">print</span>(math.sinh(<span class="hljs-number">1</span>))

<span class="hljs-keyword">print</span>(math.factorial(<span class="hljs-number">6</span>))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>3.141592653589793
-1.0
22026.465794806718
3.0
1.1752011936438014
720</samp></pre>

<p>Here is the full list of functions and attributes available in the <a href="/python-programming/modules/math">Python math module</a>.</p>
</div>
</section>
<section id="four2">
<h1>Python List</h1>
<div class="content">
  <p id="introduction">In Python, lists allow us to store a sequence of items in a single variable.</p>

<hr>
<h2 id="create">Create a Python List </h2>

<p>We create a list by placing elements inside square brackets <code>[]</code>, separated by commas. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"> <span class="hljs-comment"># a list of three elements</span>
ages = [<span class="hljs-number">19</span>, <span class="hljs-number">26</span>, <span class="hljs-number">29</span>]
<span class="hljs-keyword">print</span>(ages)

<span class="hljs-comment"># Output: [19, 26, 29]</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, the <code>ages</code> list has three items.</p>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">More on List Creation

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>In Python, lists can store data of different data types.</p>


<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># a list containing strings and numbers</span>
student = [<span class="hljs-string">'Jack'</span>, <span class="hljs-number">32</span>, <span class="hljs-string">'Computer Science'</span>]
<span class="hljs-keyword">print</span>(student)

<span class="hljs-comment"># an empty list</span>
empty_list = []
<span class="hljs-keyword">print</span>(empty_list)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>


</div></div></div></div></div></div></div></div>


<div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Using list() to Create Lists</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can use the built-in <a href="/python-programming/methods/built-in/list">list()</a> function to convert other iterables (strings, dictionaries, tuples, etc.) to a list.</p>


<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">x = <span class="hljs-string">"axz"</span>

<span class="hljs-comment"># convert to list</span>
result = list(x)

<span class="hljs-keyword">print</span>(result)  <span class="hljs-comment"># ['a', 'x', 'z']</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>


</div></div></div></div></div></div></div></div>
</div>

<hr>
<h2>List Characteristics</h2>

<p>Lists are:</p>

<ul><li><strong>Ordered</strong> - They maintain the order of elements.</li> 
<li><strong>Mutable</strong> - Items can be changed after creation.</li>
<li><strong>Allow duplicates</strong> - They can contain duplicate values.</li>
</ul>
<hr>
<h2 id="access">Access List Elements</h2>

<p>Each element in a list is associated with a number, known as <strong></strong>a <strong>index</strong>.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>The index always starts from <strong>0</strong>. The first element of a list is at index <strong>0</strong>, the second element is at index <strong>1</strong>, and so on. </p>

<figure><img src="assets/images/list-index-python.png" title="Index of List Elements" alt="Index of List Elements" width="" height="654">
<figcaption>Index of List Elements</figcaption></figure>
<h3>Access Elements Using Index</h3>

<p>We use index numbers to access list elements. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">languages = [<span class="hljs-string">'Python'</span>, <span class="hljs-string">'Swift'</span>, <span class="hljs-string">'C++'</span>]

<span class="hljs-comment"># access the first element</span>
<span class="hljs-keyword">print</span>(languages[<span class="hljs-number">0</span>])   <span class="hljs-comment"># Python</span>

<span class="hljs-comment"># access the third element</span>
<span class="hljs-keyword">print</span>(languages[<span class="hljs-number">2</span>])   <span class="hljs-comment"># C++</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<figure><img src="assets/images/access-list-item-python.png" title="Access List Elements" alt="Access List Elements" width="654" height="654">
<figcaption>Access List Elements</figcaption></figure>
<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">More on Accessing List Elements

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Negative Indexing in Python

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Python also supports negative indexing. The index of the last element is <strong>-1</strong>, the second-last element is <strong>-2</strong>, and so on. </p>

<figure><img src="assets/images/list-negative-index-in-python.png" title="Python Negative Indexing" alt="Python Negative Indexing" width="" height="">
<figcaption>Python Negative Indexing</figcaption></figure>
<p>Negative indexing makes it easy to access list items from last.</p>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">languages = [<span class="hljs-string">'Python'</span>, <span class="hljs-string">'Swift'</span>, <span class="hljs-string">'C++'</span>]

<span class="hljs-comment"># access item at index 0</span>
<span class="hljs-keyword">print</span>(languages[<span class="hljs-number">-1</span>])   <span class="hljs-comment"># C++</span>

<span class="hljs-comment"># access item at index 2</span>
<span class="hljs-keyword">print</span>(languages[<span class="hljs-number">-3</span>])   <span class="hljs-comment"># Python</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Slicing of a List in Python

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>In Python, it is possible to access a section of items from the list using the slicing operator <code>:</code>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">my_list = [<span class="hljs-string">'p'</span>, <span class="hljs-string">'r'</span>, <span class="hljs-string">'o'</span>, <span class="hljs-string">'g'</span>, <span class="hljs-string">'r'</span>, <span class="hljs-string">'a'</span>, <span class="hljs-string">'m'</span>]

<span class="hljs-comment"># items from index 2 to index 4</span>
<span class="hljs-keyword">print</span>(my_list[<span class="hljs-number">2</span>:<span class="hljs-number">5</span>])

<span class="hljs-comment"># items from index 5 to end</span>
<span class="hljs-keyword">print</span>(my_list[<span class="hljs-number">5</span>:])

<span class="hljs-comment"># items beginning to end</span>
<span class="hljs-keyword">print</span>(my_list[:])</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>['o', 'g', 'r']
['a', 'm']
['p', 'r', 'o', 'g', 'r', 'a', 'm']</samp></pre>

<p>To learn more about slicing, visit <a href="/python-programming/examples/list-slicing">Python program to slice lists</a>.</p>

</div></div></div></div></div></div></div></div></div>

<p class="note-tip"><strong>Note</strong>: If the specified index does not exist in a list, Python throws the <code>IndexError</code> exception.</p>

<hr>
<h2 id="add">Add Elements to a Python List</h2>

<p>We use the <a href="/python-programming/methods/list/append">append()</a> method to add an element to the end of a Python list. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">fruits = [<span class="hljs-string">'apple'</span>, <span class="hljs-string">'banana'</span>, <span class="hljs-string">'orange'</span>]
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Original List:'</span>, fruits)

<div class="line-highlight"><span class="hljs-comment"># using append method </span>
fruits.append(<span class="hljs-string">'cherry'</span>)</div>

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Updated List:'</span>, fruits)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Original List: ['apple', 'banana', 'orange']
Updated List: ['apple', 'banana', 'orange', 'cherry']</samp></pre>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Add Elements at the Specified Index

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>The <a href="/python-programming/methods/list/insert">insert()</a> method adds an element at the specified index. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">fruits = [<span class="hljs-string">'apple'</span>, <span class="hljs-string">'banana'</span>, <span class="hljs-string">'orange'</span>]
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Original List:"</span>, fruits) 

<div class="line-highlight"><span class="hljs-comment"># insert 'cherry' at index 2</span>
fruits.insert(<span class="hljs-number">2</span>, <span class="hljs-string">'cherry'</span>)</div>

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Updated List:"</span>, fruits)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Original List: ['apple', 'banana', 'orange']
Updated List: ['apple', 'banana', 'cherry', 'orange']</samp></pre>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Add Elements to a List From Other Iterables

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We use the <a href="/python-programming/methods/list/extend">extend()</a> method to add elements to a list from other iterables. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">numbers = [<span class="hljs-number">1</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>]
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Numbers:'</span>, numbers)

even_numbers  = [<span class="hljs-number">2</span>, <span class="hljs-number">4</span>, <span class="hljs-number">6</span>]

<div class="line-highlight"><span class="hljs-comment"># adding elements of one list to another</span>
numbers.extend(even_numbers)</div>

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Updated Numbers:'</span>, numbers) </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Numbers: [1, 3, 5]
Updated Numbers: [1, 3, 5, 2, 4, 6]</samp></pre>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="change">Change List Items</h2>

<p>We can change the items of a list by assigning new values using the <code>=</code> operator. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">colors = [<span class="hljs-string">'Red'</span>, <span class="hljs-string">'Black'</span>, <span class="hljs-string">'Green'</span>]
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Original List:'</span>, colors)

<div class="line-highlight"><span class="hljs-comment"># changing the third item to 'Blue'</span>
colors[<span class="hljs-number">2</span>] = <span class="hljs-string">'Blue'</span></div>

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Updated List:'</span>, colors)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Original List: ['Red', 'Black', 'Green']
Updated List: ['Red', 'Black', 'Blue']</samp></pre>

<p>Here, we have replaced the element at index 2: <code>'Green'</code> with <code>'Blue'</code>. </p>

<hr>
<h2 id="remove">Remove an Item From a List</h2>

<p>We can remove an item from a list using the <a href="/python-programming/methods/list/remove">remove()</a> method. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">numbers = [<span class="hljs-number">2</span>,<span class="hljs-number">4</span>,<span class="hljs-number">7</span>,<span class="hljs-number">9</span>]

<div class="line-highlight"><span class="hljs-comment"># remove 4 from the list</span>
numbers.remove(<span class="hljs-number">4</span>)</div>

<span class="hljs-keyword">print</span>(numbers) 

<span class="hljs-comment"># Output: [2, 7, 9]</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Remove One or More Elements of a List

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>The <a href="/python-programming/del">del</a> statement removes one or more items from a list. For example, </p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">names = [<span class="hljs-string">'John'</span>, <span class="hljs-string">'Eva'</span>, <span class="hljs-string">'Laura'</span>, <span class="hljs-string">'Nick'</span>, <span class="hljs-string">'Jack'</span>]

<span class="hljs-comment"># deleting the second item</span>
<span class="hljs-keyword">del</span> names[<span class="hljs-number">1</span>]
<span class="hljs-keyword">print</span>(names)

<span class="hljs-comment"># deleting items from index 1 to index 3 </span>
<span class="hljs-keyword">del</span> names[<span class="hljs-number">1</span>: <span class="hljs-number">4</span>]
<span class="hljs-keyword">print</span>(names) <span class="hljs-comment"># Error! List doesn't exist.</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>['John', 'Laura', 'Nick', 'Jack']
['John']</samp></pre>

<p><strong>Note</strong>: We can also use the <code>del</code> statement to delete the entire list. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">names = [<span class="hljs-string">'John'</span>, <span class="hljs-string">'Eva'</span>, <span class="hljs-string">'Laura'</span>, <span class="hljs-string">'Nick'</span>]

<span class="hljs-comment"># deleting the entire list</span>
<span class="hljs-keyword">del</span> names

<span class="hljs-keyword">print</span>(names)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="length">Python List Length</h2>

<p>We can use the built-in <a href="/python-programming/methods/built-in/len">len()</a> function to find the number of elements in a list. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">cars = [<span class="hljs-string">'BMW'</span>, <span class="hljs-string">'Mercedes'</span>, <span class="hljs-string">'Tesla'</span>]

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Total Elements: '</span>, len(cars))  

<span class="hljs-comment"># Output: Total Elements:  3</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<hr>
<h2 id="iterate">Iterating Through a List</h2>

<p>We can use a <a href="/python-programming/for-loop">for loop</a> to iterate over the elements of a list. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">fruits = [<span class="hljs-string">'apple'</span>, <span class="hljs-string">'banana'</span>, <span class="hljs-string">'orange'</span>]

<span class="hljs-comment"># iterate through the list</span>
<span class="hljs-keyword">for</span> fruit <span class="hljs-keyword">in</span> fruits:
<span class="hljs-keyword">print</span>(fruit)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>apple
banana
orange</samp></pre>

<hr>
<h2 id="list-method">Python List Methods</h2>

<p>Python has many useful <a href="/python-programming/methods/list">list methods</a> that make it really easy to work with lists.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/python-programming/methods/list/append">append()</a></td>
<td>Adds an item to the end of the list</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/extend">extend()</a></td>
<td>Adds items of lists and other iterables to the end of the list</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/insert">insert()</a></td>
<td>Inserts an item at the specified index</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/remove">remove()</a></td>
<td>Removes item present at the given index</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/pop">pop()</a></td>
<td>Returns and removes item present at the given index</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/clear">clear()</a></td>
<td>Removes all items from the list</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/index">index()</a></td>
<td>Returns the index of the first matched item</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/count">count()</a></td>
<td>Returns the count of the specified item in the list</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/sort">sort()</a></td>
<td>Sorts the list in ascending/descending order</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/reverse">reverse()</a></td>
<td>Reverses the item of the list</td>
</tr>
<tr>
<td><a href="/python-programming/methods/list/copy">copy()</a></td>
<td>Returns the shallow copy of the list</td>
</tr>
</tbody></table>
</div>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">More on Python Lists

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">List Comprehension in Python

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>List Comprehension is a concise and elegant way to create a list. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># create a list with square values</span>
numbers = [n**<span class="hljs-number">2</span> <span class="hljs-keyword">for</span> n <span class="hljs-keyword">in</span> range(<span class="hljs-number">1</span>, <span class="hljs-number">6</span>)]
<span class="hljs-keyword">print</span>(numbers)    

<span class="hljs-comment"># Output: [1, 4, 9, 16, 25]</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>To learn more, visit <a href="/python-programming/list-comprehension">Python List Comprehension</a>.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Check if an Item Exists in the Python List

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We use the <code>in</code> keyword to check if an item exists in the list. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">fruits = [<span class="hljs-string">'apple'</span>, <span class="hljs-string">'cherry'</span>, <span class="hljs-string">'banana'</span>]

<span class="hljs-keyword">print</span>(<span class="hljs-string">'orange'</span> <span class="hljs-keyword">in</span> fruits)    <span class="hljs-comment"># False</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'cherry'</span> <span class="hljs-keyword">in</span> fruits)    <span class="hljs-comment"># True</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here,</p>

<ul>
<li><strong>orange</strong> is not present in <code>fruits</code>, so,  <code>'orange' in fruits</code> evaluates to <code>False</code>.</li>
<li><strong>cherry</strong> is present in <code>fruits</code>, so, <code>'cherry' in fruits</code> evaluates to <code>True</code>.</li>
</ul>

</div></div></div></div></div></div></div></div></div>

<p class="note-tip"><strong>Note:</strong> Lists are similar to arrays (or dynamic arrays) in other programming languages. When people refer to arrays in Python, they often mean lists, even though there is a numeric array type in Python.</p>

<hr>
<p><strong>Also Read</strong></p>

<ul>
<li><a href="/python-programming/methods/built-in/list">Python list()</a></li>
 
</ul>  </div>
</section>
<section id="four3">
<h1>Python Tuple</h1>
<div class="content">
  <p id="introduction">A tuple is a collection similar to a <a href="/python-programming/list">Python list</a>. The primary difference is that we cannot modify a tuple once it is created.</p>

<hr>
<h2 id="create">Create a Python Tuple</h2>

<p>We create a tuple by placing items inside parentheses <code>()</code>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><div class="line-highlight">numbers = (<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">-5</span>)</div>
<span class="hljs-keyword">print</span>(numbers)

<span class="hljs-comment"># Output: (1, 2, -5)</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<div class="faq-section"><h2 class="section-title faq-section__title">More on Tuple Creation

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Create a Tuple Using tuple() Constructor

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can also create a tuple using a <a href="/python-programming/methods/built-in/tuple">tuple()</a> constructor. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">tuple_constructor = tuple((<span class="hljs-string">'Jack'</span>, <span class="hljs-string">'Maria'</span>, <span class="hljs-string">'David'</span>))
<span class="hljs-keyword">print</span>(tuple_constructor)

<span class="hljs-comment"># Output: ('Jack', 'Maria', 'David')</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Different Types of Python Tuples

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Here are the different types of tuples we can create in Python.</p>

<p><strong>Empty Tuple</strong></p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># create an empty tuple</span>
empty_tuple = ()
<span class="hljs-keyword">print</span>(empty_tuple)

<span class="hljs-comment"># Output: ()</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Tuple of different data types</strong></p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># tuple of string types</span>
names = (<span class="hljs-string">'James'</span>, <span class="hljs-string">'Jack'</span>, <span class="hljs-string">'Eva'</span>)
<span class="hljs-keyword">print</span> (names)

<span class="hljs-comment"># tuple of float types</span>
float_values = (<span class="hljs-number">1.2</span>, <span class="hljs-number">3.4</span>, <span class="hljs-number">2.1</span>)
<span class="hljs-keyword">print</span>(float_values)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Tuple of mixed data types</strong></p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># tuple including string and integer</span>
mixed_tuple = (<span class="hljs-number">2</span>, <span class="hljs-string">'Hello'</span>, <span class="hljs-string">'Python'</span>)
<span class="hljs-keyword">print</span>(mixed_tuple)

<span class="hljs-comment"># Output: (2, 'Hello', 'Python')</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

</div></div></div></div></div></div></div></div></div>

<hr>

<h2>Tuple Characteristics</h2>

<p>Tuples are:</p>

<ul><li><strong>Ordered</strong> - They maintain the order of elements.</li> 
<li><strong>Immutable</strong> - They cannot be changed after creation.</li>
<li><strong>Allow duplicates</strong> - They can contain duplicate values.</li>
</ul>
<hr>
<h2 id="access">Access Tuple Items</h2>

<p>Each item in a tuple is associated with a number, known as a <strong>index</strong>.</p>

<p>The index always starts from <strong>0</strong>, meaning the first item of a tuple is at index <strong>0</strong>, the second item is at index <strong>1,</strong> and so on. </p>

<figure><img src="assets/images/tuple-index-item-python.png" title="Index of Tuple Item" alt="Index of Tuple Item" width="" height="">
<figcaption>Index of Tuple Item</figcaption></figure>
<h3>Access Items Using Index</h3>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>We use index numbers to access tuple items. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">languages = (<span class="hljs-string">'Python'</span>, <span class="hljs-string">'Swift'</span>, <span class="hljs-string">'C++'</span>)

<span class="hljs-comment"># access the first item</span>
<span class="hljs-keyword">print</span>(languages[<span class="hljs-number">0</span>])   <span class="hljs-comment"># Python</span>

<span class="hljs-comment"># access the third item</span>
<span class="hljs-keyword">print</span>(languages[<span class="hljs-number">2</span>])   <span class="hljs-comment"># C++</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<figure><img src="assets/images/access-python-tuple-item.png" title="Access Tuple Items" alt="Access Tuple Items" width="" height="">
<figcaption>Access Tuple Items</figcaption></figure>
<hr>
<h2>Tuple Cannot be Modified</h2>
<p>Python tuples are immutable (unchangeable). We cannot add, change, or delete items of a tuple.</p>

<p>If we try to modify a tuple, we will get an error. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">cars = (<span class="hljs-string">'BMW'</span>, <span class="hljs-string">'Tesla'</span>, <span class="hljs-string">'Ford'</span>, <span class="hljs-string">'Toyota'</span>)

<span class="hljs-comment"># trying to modify a tuple</span>
cars[<span class="hljs-number">0</span>] = <span class="hljs-string">'Nissan'</span>    <span class="hljs-comment"># error</span>
   
<span class="hljs-keyword">print</span>(cars)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<hr>
<h2 id="length">Python Tuple Length</h2>

<p>We use the <a href="/python-programming/methods/built-in/len">len()</a> function to find the number of items present in a tuple. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">cars = (<span class="hljs-string">'BMW'</span>, <span class="hljs-string">'Tesla'</span>, <span class="hljs-string">'Ford'</span>, <span class="hljs-string">'Toyota'</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Total Items:'</span>, len(cars)) 
   
<span class="hljs-comment"># Output: Total Items: 4</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<hr>
<h2 id="iterate">Iterate Through a Tuple</h2>

<p>We use the <a href="/python-programming/for-loop">for loop</a> to iterate over the items of a tuple. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">fruits = (<span class="hljs-string">'apple'</span>,<span class="hljs-string">'banana'</span>,<span class="hljs-string">'orange'</span>)

<span class="hljs-comment"># iterate through the tuple</span>
<span class="hljs-keyword">for</span> fruit <span class="hljs-keyword">in</span> fruits:
<span class="hljs-keyword">print</span>(fruit)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>apple
banana
orange </samp></pre>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">More on Python Tuple

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Check if an Item Exists in the Tuple

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We use the <code>in</code> keyword to check if an item exists in the tuple. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">colors = (<span class="hljs-string">'red'</span>, <span class="hljs-string">'orange'</span>, <span class="hljs-string">'blue'</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">'yellow'</span> <span class="hljs-keyword">in</span> colors)    <span class="hljs-comment"># False</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'red'</span> <span class="hljs-keyword">in</span> colors)       <span class="hljs-comment"># True</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here,</p>

<ul>
<li><strong>yellow</strong> is not present in <code>colors</code>, so,  <code>'yellow' in colors</code> evaluates to <code>False</code></li>
<li><strong>red</strong> is present in <code>colors</code>, so, <code>'red' in colors</code> evaluates to <code>True</code></li>
</ul>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Change Tuple Items

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Python Tuples are <strong>immutable</strong> - we cannot change the items of a tuple once created.</p>

<p>If we try to do so, we will get an error. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">fruits = (<span class="hljs-string">'apple'</span>, <span class="hljs-string">'cherry'</span>, <span class="hljs-string">'orange'</span>)

<div class="line-highlight"><span class="hljs-comment"># trying to change the second item to 'banana'</span>
fruits[<span class="hljs-number">1</span>] = <span class="hljs-string">'banana'</span></div>

<span class="hljs-keyword">print</span>(fruits) 

<span class="hljs-comment"># Output: TypeError: 'tuple' object does not support item assignment</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Delete Tuples

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We cannot delete individual items of a tuple. However, we can delete the tuple itself using the <a href="https://www.programiz.com/python-programming/del">del</a> statement. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">animals = (<span class="hljs-string">'dog'</span>, <span class="hljs-string">'cat'</span>, <span class="hljs-string">'rat'</span>)

<span class="hljs-comment"># deleting the tuple</span>
<span class="hljs-keyword">del</span> animals</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we have deleted the <var>animals</var> tuple.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Create a Python Tuple With One Item

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>When we want to create a tuple with a single item, we might do the following:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">var = (<span class="hljs-string">'Hello'</span>)
<span class="hljs-keyword">print</span>(var)  <span class="hljs-comment"># string</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>But this would not create a tuple; instead, it would be considered a <a href="https://www.programiz.com/python-programming/string">string</a>.</p>

<p>To solve this, we need to include a trailing comma after the item. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">var = (<span class="hljs-string">'Hello'</span>,) 
<span class="hljs-keyword">print</span>(var)  <span class="hljs-comment"># tuple</span>

<span class="hljs-comment"># Output: ('Hello',)</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

</div></div></div></div></div></div></div></div></div>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/methods/tuple">Python Tuple Methods</a></li>
</ul>

</div>
</section>
<section id="four4">
<h1>Python Strings</h1>
<div class="content">
  <p>In Python, a string is a sequence of characters. For example, <code>"hello"</code> is a string containing a sequence of characters <code>'h'</code>, <code>'e'</code>, <code>'l'</code>, <code>'l'</code>, and <code>'o'</code>.</p>

<p>We use single quotes or double quotes to represent a string in Python. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># create a string using double quotes</span>
string1 = <span class="hljs-string">"Python programming"</span>

<span class="hljs-comment"># create a string using single quotes</span>
string1 = <span class="hljs-string">'Python programming'</span></code></pre>

<p>Here, we have created a string <a href="/python-programming/variables-constants-literals">variable</a> named <var>string1</var>. The variable is initialized with the string <code>"Python Programming"</code>.</p>

<hr>
<h2 id="example">Example: Python String </h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># create string type variables</span>

name = <span class="hljs-string">"Python"</span>
<span class="hljs-keyword">print</span>(name)

message = <span class="hljs-string">"I love Python."</span>
<span class="hljs-keyword">print</span>(message)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Python
I love Python.</samp></pre>

<p>In the above example, we have created string-type variables: <var>name</var> and <var>message</var> with values <code>"Python"</code> and <code>"I love Python"</code> respectively.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here, we have used double quotes to represent strings, but we can use single quotes too.</p>

<hr>
<h2 id="access">Access String Characters in Python</h2>

<p>We can access the characters in a string in three ways.</p>

<ul>
<li><strong>Indexing</strong><strong>:</strong> One way is to treat strings as a <a href="/python-programming/list">list</a> and use index values. For example,</li>
</ul>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">greet = <span class="hljs-string">'hello'</span>

<span class="hljs-comment"># access 1st index element</span>
<span class="hljs-keyword">print</span>(greet[<span class="hljs-number">1</span>]) <span class="hljs-comment"># "e"</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<ul>
<li><strong>Negative Indexing</strong>: Similar to a list, Python allows negative indexing for its strings. For example,</li>
</ul>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">greet = <span class="hljs-string">'hello'</span>

<span class="hljs-comment"># access 4th last element</span>
<span class="hljs-keyword">print</span>(greet[<span class="hljs-number">-4</span>]) <span class="hljs-comment"># "e"</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<ul>
<li><strong>Slicing</strong><strong>:</strong> Access a range of characters in a string by using the slicing operator colon <code>:</code>. For example,</li>
</ul>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">greet = <span class="hljs-string">'Hello'</span>

<span class="hljs-comment"># access character from 1st index to 3rd index</span>
<span class="hljs-keyword">print</span>(greet[<span class="hljs-number">1</span>:<span class="hljs-number">4</span>])  <span class="hljs-comment"># "ell"</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p class="note-tip"><strong>Note</strong>: If we try to access an index out of the range or use numbers other than an integer, we will get errors.</p>

<hr>
<h2 id="immutable">Python Strings are Immutable</h2>

<p>In Python, strings are immutable. That means the characters of a string cannot be changed. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">message = <span class="hljs-string">'Hola Amigos'</span>
message[<span class="hljs-number">0</span>] = <span class="hljs-string">'H'</span>
<span class="hljs-keyword">print</span>(message)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>TypeError: 'str' object does not support item assignment</samp></pre>

<p>However, we can assign the variable name to a new string. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">message = <span class="hljs-string">'Hola Amigos'</span>

<span class="hljs-comment"># assign new string to message variable</span>
message = <span class="hljs-string">'Hello Friends'</span>

<span class="hljs-keyword">print</span>(message); <span class="hljs-comment"># prints "Hello Friends"</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<hr>
<h2 id="multiline">Python Multiline String</h2>

<p>We can also create a multiline string in Python. For this, we use triple double quotes <code>"""</code> or triple single quotes <code>'''</code>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># multiline string </span>
message = <span class="hljs-string">"""
Never gonna give you up
Never gonna let you down
"""</span>

<span class="hljs-keyword">print</span>(message)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Never gonna give you up
Never gonna let you down</samp></pre>

<p>In the above example, anything inside the enclosing triple quotes is one multiline string.</p>

<hr>
<h2 id="operations">Python String Operations</h2>

<p>Many operations can be performed with strings, which makes it one of the most used <a href="/python-programming/variables-datatypes">data types</a> in Python.</p>

<h3>1. Compare Two Strings</h3>

<p>We use the <code>==</code> operator to compare two strings. If two strings are equal, the operator returns <code>True</code>. Otherwise, it returns <code>False</code>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">str1 = <span class="hljs-string">"Hello, world!"</span>
str2 = <span class="hljs-string">"I love Swift."</span>
str3 = <span class="hljs-string">"Hello, world!"</span>

<span class="hljs-comment"># compare str1 and str2</span>
<span class="hljs-keyword">print</span>(str1 == str2)

<span class="hljs-comment"># compare str1 and str3</span>
<span class="hljs-keyword">print</span>(str1 == str3)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>False
True</samp></pre>

<p>In the above example,</p>

<ol>
<li><var>str1</var> and <var>str2</var> are not equal. Hence, the result is <code>False</code>.</li>
<li><var>str1</var> and <var>str3</var> are equal. Hence, the result is <code>True</code>.</li>
</ol>

<hr>
<h3>2. Join Two or More Strings</h3>

<p>In Python, we can join (concatenate) two or more strings using the <code>+</code> operator.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">greet = <span class="hljs-string">"Hello, "</span>
name = <span class="hljs-string">"Jack"</span>

<span class="hljs-comment"># using + operator</span>
result = greet + name
<span class="hljs-keyword">print</span>(result)

<span class="hljs-comment"># Output: Hello, Jack</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>In the above example, we have used the <code>+</code> operator to join two strings: <var>greet</var> and <var>name</var>.</p>

<hr>
<h2 id="iterate">Iterate Through a Python String</h2>

<p>We can iterate through a string using a <a href="/python-programming/for-loop">for loop</a>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">greet = <span class="hljs-string">'Hello'</span>

<span class="hljs-comment"># iterating through greet string</span>
<span class="hljs-keyword">for</span> letter <span class="hljs-keyword">in</span> greet:
<span class="hljs-keyword">print</span>(letter)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>H
e
l
l
o</samp></pre>

<hr>
<h2 id="length">Python String Length</h2>

<p>In Python, we use the <a href="/python-programming/methods/built-in/len">len()</a> method to find the length of a string. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">greet = <span class="hljs-string">'Hello'</span>

<span class="hljs-comment"># count length of greet string</span>
<span class="hljs-keyword">print</span>(len(greet))

<span class="hljs-comment"># Output: 5</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<hr>
<h2 id="membership">String Membership Test</h2>

<p>We can test if a substring exists within a string or not, using the keyword <code>in</code>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(<span class="hljs-string">'a'</span> <span class="hljs-keyword">in</span> <span class="hljs-string">'program'</span>) <span class="hljs-comment"># True</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'at'</span> <span class="hljs-keyword">not</span> <span class="hljs-keyword">in</span> <span class="hljs-string">'battle'</span>) <span class="hljs-comment"># False</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<hr>
<h2 id="methods">Methods of Python String</h2>

<p>Besides those mentioned above, there are various <a href="/python-programming/methods/string">string methods</a> present in Python. Here are some of those methods:</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Methods</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/python-programming/methods/string/upper">upper()</a> </td>
<td>Converts the string to uppercase</td>
</tr>
<tr>
<td><a href="/python-programming/methods/string/lower">lower()</a></td>
<td>Converts the string to lowercase</td>
</tr>
<tr>
<td><a href="/python-programming/methods/string/partition">partition()</a></td>
<td>Returns a tuple</td>
</tr>
<tr>
<td><a href="/python-programming/methods/string/replace">replace()</a></td>
<td>Replaces substring inside</td>
</tr>
<tr>
<td><a href="/python-programming/methods/string/find">find()</a></td>
<td>Returns the index of the first occurrence of substring</td>
</tr>
<tr>
<td><a href="/python-programming/methods/string/rstrip">rstrip()</a></td>
<td>Removes trailing characters</td>
</tr>
<tr>
<td><a href="/python-programming/methods/string/split">split()</a></td>
<td>Splits string from left</td>
</tr>
<tr>
<td><a href="/python-programming/methods/string/startswith">startswith()</a></td>
<td>Checks if string starts with the specified string</td>
</tr>
<tr>
<td><a href="/python-programming/methods/string/isnumeric">isnumeric()</a></td>
<td>Checks numeric characters</td>
</tr>
<tr>
<td><a href="/python-programming/methods/string/index">index()</a></td>
<td>Returns index of substring</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="escape">Escape Sequences in Python</h2>

<p>The escape sequence is used to escape some of the characters present inside a string.</p>

<p>Suppose we need to include both a double quote and a single quote inside a string,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">example = <span class="hljs-string">"He said, "</span>What<span class="hljs-string">'s there?""

print(example) # throws error</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Since strings are represented by single or double quotes, the compiler will treat <code>"He said, "</code> as a string. Hence, the above code will cause an error.</p>

<p>To solve this issue, we use the escape character <code>\</code> in Python.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># escape double quotes</span>
example = <span class="hljs-string">"He said, \"What's there?\""</span>

<span class="hljs-comment"># escape single quotes</span>
example = <span class="hljs-string">'He said, "What\'s there?"'</span>

<span class="hljs-keyword">print</span>(example)

<span class="hljs-comment"># Output: He said, "What's there?"</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here is a list of all the escape sequences supported by Python.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Escape Sequence</th>
<th>Description</th>
</tr>
<tr>
<td><code>\\</code></td>
<td>Backslash</td>
</tr>
<tr>
<td><code>\'</code></td>
<td>Single quote</td>
</tr>
<tr>
<td><code>\"</code></td>
<td>Double quote</td>
</tr>
<tr>
<td><code>\a</code></td>
<td>ASCII Bell</td>
</tr>
<tr>
<td><code>\b</code></td>
<td>ASCII Backspace</td>
</tr>
<tr>
<td><code>\f</code></td>
<td>ASCII Formfeed</td>
</tr>
<tr>
<td><code>\n</code></td>
<td>ASCII Linefeed</td>
</tr>
<tr>
<td><code>\r</code></td>
<td>ASCII Carriage Return</td>
</tr>
<tr>
<td><code>\t</code></td>
<td>ASCII Horizontal Tab</td>
</tr>
<tr>
<td><code>\v</code></td>
<td>ASCII Vertical Tab</td>
</tr>
<tr>
<td><code>\ooo</code></td>
<td>Character with octal value ooo</td>
</tr>
<tr>
<td><code>\xHH</code></td>
<td>Character with hexadecimal value HH</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="formatting">Python String Formatting (f-Strings)</h2>

<p>Python <a href="/python-programming/string-interpolation#:~:text=f%2Dstrings,Python%20expressions%20inside%20string%20constants.">f-Strings</a> makes it easy to print values and variables. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">name = <span class="hljs-string">'Cathy'</span>
country = <span class="hljs-string">'UK'</span>

<span class="hljs-keyword">print</span>(<span class="hljs-string">f'<span class="hljs-subst">{name}</span> is from <span class="hljs-subst">{country}</span>'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Cathy is from UK</samp></pre>

<p>Here, <code>f'{name} is from {country}'</code> is an <strong>f-string</strong>.</p>

<p>This new formatting syntax is powerful and easy to use. From now on, we will use f-Strings to print strings and variables.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/python-programming/methods/built-in/str">Python str()</a></li>
<li><a href="/python-programming/string-interpolation">Python String Interpolation</a></li>
</ul>

</div>
</section>
<section id="four5">
<h1>Python Sets</h1>
<div class="content">
  <p id="introduction">A set is a collection of unique data, meaning that elements within a set cannot be duplicated. </p>

<p>For instance, if we need to store information about student IDs, a set is suitable since student IDs cannot have duplicates.</p>

<figure><img src="assets/images/python-set-elements.png" title="Python Set Elements" alt="Python Set Elements" width="" height="">
<figcaption>Python Set Elements</figcaption></figure>
<hr>
<h2 id="create">Create a Set in Python </h2>

<p>In Python, we create sets by placing all the elements inside curly braces <code>{}</code>, separated by commas.</p>

<p>A set can have any number of items and they may be of different types (integer, float, <a href="/python-programming/tuple">tuple</a>, <a href="/python-programming/string">string</a>, etc.). But a set cannot have mutable elements like <a href="/python-programming/list">lists</a>, sets or <a href="/python-programming/dictionary">dictionaries</a> as its elements.</p>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># create a set of integer type</span>
student_id = {<span class="hljs-number">112</span>, <span class="hljs-number">114</span>, <span class="hljs-number">116</span>, <span class="hljs-number">118</span>, <span class="hljs-number">115</span>}
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Student ID:'</span>, student_id)

<span class="hljs-comment"># create a set of string type</span>
vowel_letters = {<span class="hljs-string">'a'</span>, <span class="hljs-string">'e'</span>, <span class="hljs-string">'i'</span>, <span class="hljs-string">'o'</span>, <span class="hljs-string">'u'</span>}
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Vowel Letters:'</span>, vowel_letters)

<span class="hljs-comment"># create a set of mixed data types</span>
mixed_set = {<span class="hljs-string">'Hello'</span>, <span class="hljs-number">101</span>, <span class="hljs-number">-2</span>, <span class="hljs-string">'Bye'</span>}
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Set of mixed data types:'</span>, mixed_set)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Student ID: {112, 114, 115, 116, 118}
Vowel Letters: {'u', 'a', 'e', 'i', 'o'}
Set of mixed data types: {'Hello', 'Bye', 101, -2}</samp></pre>

<p>In the above example, we have created different types of sets by placing all the elements inside the curly braces <code>{}</code>.</p>

<p class="note-tip"><strong>Note:</strong> When you run this code, you might get output in a different order. This is because the set has no particular order.</p>

<hr>
<h2 id="empty-set">Create an Empty Set in Python</h2>

<p>Creating an empty set is a bit tricky. Empty curly braces <code>{}</code> will make an empty dictionary in Python. </p>

<p>To make a set without any elements, we use the <code>set()</code> function without any argument. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># create an empty set</span>
empty_set = set()

<span class="hljs-comment"># create an empty dictionary</span>
empty_dictionary = { }

<span class="hljs-comment"># check data type of empty_set</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Data type of empty_set:'</span>, type(empty_set))

<span class="hljs-comment"># check data type of dictionary_set</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Data type of empty_dictionary:'</span>, type(empty_dictionary))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Data type of empty_set: &lt;class 'set'&gt;
Data type of empty_dictionary: &lt;class 'dict'&gt;</samp></pre>

<p>Here, </p>

<ul>
<li><var>empty_set</var> - an empty set created using <code>set()</code></li>
<li><var>empty_dictionary</var> - an empty dictionary created using <code>{}</code></li>
</ul>

<p>Finally, we have used the <code>type()</code> function to know which class <var>empty_set</var> and <var>empty_dictionary</var> belong to.</p>

<hr>
<h2 id="duplicate">Duplicate Items in a Set</h2>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Let's see what will happen if we try to include duplicate items in a set.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">numbers = {<span class="hljs-number">2</span>, <span class="hljs-number">4</span>, <span class="hljs-number">6</span>, <span class="hljs-number">6</span>, <span class="hljs-number">2</span>, <span class="hljs-number">8</span>}
<span class="hljs-keyword">print</span>(numbers)   <span class="hljs-comment"># {8, 2, 4, 6}</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we can see there are no duplicate items in the set as a set cannot contain duplicates.</p>

<hr>
<h2 id="add-update">Add and Update Set Items in Python</h2>

<p>Sets are mutable. However, since they are unordered, indexing has no meaning.</p>

<p>We cannot access or change an element of a set using indexing or slicing. The set data type does not support it.</p>

<h3>Add Items to a Set in Python</h3>

<p>In Python, we use the <a href="/python-programming/methods/set/add">add()</a> method to add an item to a set. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">numbers = {<span class="hljs-number">21</span>, <span class="hljs-number">34</span>, <span class="hljs-number">54</span>, <span class="hljs-number">12</span>}

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Initial Set:'</span>,numbers)

<div class="line-highlight"><span class="hljs-comment"># using add() method</span>
numbers.add(<span class="hljs-number">32</span>)</div>

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Updated Set:'</span>, numbers) </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Initial Set: {34, 12, 21, 54}
Updated Set: {32, 34, 12, 21, 54}</samp></pre>

<p>In the above example, we have created a set named <var>numbers</var>. Notice the line,</p>

<pre style="max-height: 600px;"><code class="python hljs">numbers.add(<span class="hljs-number">32</span>)</code></pre>

<p>Here, <code>add()</code> adds <strong>32</strong> to our set.</p>

<h3>Update Python Set </h3>

<p>The <a href="/python-programming/methods/set/update">update()</a> method is used to update the set with items other collection types (lists, tuples, sets, etc). For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">companies = {<span class="hljs-string">'Lacoste'</span>, <span class="hljs-string">'Ralph Lauren'</span>}
tech_companies = [<span class="hljs-string">'apple'</span>, <span class="hljs-string">'google'</span>, <span class="hljs-string">'apple'</span>]

<div class="line-highlight"><span class="hljs-comment"># using update() method</span>
companies.update(tech_companies)</div>

<span class="hljs-keyword">print</span>(companies)

<span class="hljs-comment"># Output: {'google', 'apple', 'Lacoste', 'Ralph Lauren'}</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, all the unique elements of <code>tech_companies</code> are added to the <code>companies</code> set.</p>

<hr>
<h2 id="remove">Remove an Element from a Set</h2>

<p>We use the <a href="/python-programming/methods/set/discard">discard()</a> method to remove the specified element from a set. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">languages = {<span class="hljs-string">'Swift'</span>, <span class="hljs-string">'Java'</span>, <span class="hljs-string">'Python'</span>}

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Initial Set:'</span>,languages)

<div class="line-highlight"><span class="hljs-comment"># remove 'Java' from a set</span>
removedValue = languages.discard(<span class="hljs-string">'Java'</span>)</div>

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Set after remove():'</span>, languages)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Initial Set: {'Python', 'Swift', 'Java'}
Set after remove(): {'Python', 'Swift'}</samp></pre>

<p>Here, we have used the <code>discard()</code> method to remove <code>'Java'</code> from the <var>languages</var> set.</p>

<hr>
<h2 id="built">Built-in Functions with Set</h2>

<p>Here are some of the popular built-in functions that allow us to perform different operations on a set.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Function</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/python-programming/methods/built-in/all">all()</a></td>
<td>Returns <code>True</code> if all elements of the set are true (or if the set is empty).</td>
</tr>
<tr>
<td><a href="/python-programming/methods/built-in/any">any()</a></td>
<td>Returns <code>True</code> if any element of the set is true. If the set is empty, returns <code>False</code>.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/built-in/enumerate">enumerate()</a></td>
<td>Returns an enumerate object. It contains the index and value for all the items of the set as a pair.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/built-in/len">len()</a></td>
<td>Returns the length (the number of items) in the set.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/built-in/max">max()</a></td>
<td>Returns the largest item in the set.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/built-in/min">min()</a></td>
<td>Returns the smallest item in the set.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/built-in/sorted">sorted()</a></td>
<td>Returns a new sorted list from elements in the set(does not sort the set itself).</td>
</tr>
<tr>
<td><a href="/python-programming/methods/built-in/sum">sum()</a></td>
<td>Returns the sum of all elements in the set.</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="iterate">Iterate Over a Set in Python</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">fruits = {<span class="hljs-string">"Apple"</span>, <span class="hljs-string">"Peach"</span>, <span class="hljs-string">"Mango"</span>}

<span class="hljs-comment"># for loop to access each fruits</span>
<span class="hljs-keyword">for</span> fruit <span class="hljs-keyword">in</span> fruits: 
<span class="hljs-keyword">print</span>(fruit)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Mango
Peach
Apple</samp></pre>
<p>Here, we have used <a href="/python-programming/for-loop">for loop</a> to iterate over a set in Python.
</p><hr>
<h2 id="len">Find Number of Set Elements</h2>

<p>We can use the <a href="/python-programming/methods/built-in/len">len()</a> method to find the number of elements present in a Set. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">even_numbers = {<span class="hljs-number">2</span>,<span class="hljs-number">4</span>,<span class="hljs-number">6</span>,<span class="hljs-number">8</span>}
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Set:'</span>,even_numbers)

<span class="hljs-comment"># find number of elements</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Total Elements:'</span>, len(even_numbers))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Set: {8, 2, 4, 6}
Total Elements: 4</samp></pre>

<p>Here, we have used the <code>len()</code> method to find the number of elements present in a Set.</p>

<hr>
<h2 id="operations">Python Set Operations</h2>

<p>Python Set provides different built-in methods to perform mathematical set operations like union, intersection, subtraction, and symmetric difference.</p>

<h3 id="union">Union of Two Sets</h3>

<p>The union of two sets <code>A</code> and <code>B</code> includes all the elements of sets <code>A</code> and <code>B</code>.</p>

<figure><img src="assets/images/python-union.png" title="Set Union" alt="Set Union in Python" width="450" height="264">
<figcaption>Set Union in Python</figcaption></figure>
<p>We use the <code>|</code> operator or the <a href="/python-programming/methods/set/union">union()</a> method to perform the set union operation. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># first set</span>
A = {<span class="hljs-number">1</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>}

<span class="hljs-comment"># second set</span>
B = {<span class="hljs-number">0</span>, <span class="hljs-number">2</span>, <span class="hljs-number">4</span>}

<span class="hljs-comment"># perform union operation using |</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Union using |:'</span>, A | B)

<span class="hljs-comment"># perform union operation using union()</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Union using union():'</span>, A.union(B)) </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Union using |: {0, 1, 2, 3, 4, 5}
Union using union(): {0, 1, 2, 3, 4, 5}</samp></pre>

<p class="note-tip"><strong>Note</strong>: <code>A|B</code> and <code>union()</code> is equivalent to <code>A ⋃ B</code> set operation.</p>

<hr>
<h2 id="intersection">Set Intersection</h2>

<p>The intersection of two sets <code>A</code> and <code>B</code> include the common elements between set <code>A</code> and <code>B</code>.</p>

<figure><img src="assets/images/python-intersection.png" title="Set Intersection" alt="Set Intersection in Python" width="450" height="262">
<figcaption>Set Intersection in Python</figcaption></figure>
<p>In Python, we use the <code>&amp;</code> operator or the <a href="/python-programming/methods/set/intersection">intersection()</a> method to perform the set intersection operation. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># first set</span>
A = {<span class="hljs-number">1</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>}

<span class="hljs-comment"># second set</span>
B = {<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>}

<span class="hljs-comment"># perform intersection operation using &amp;</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Intersection using &amp;:'</span>, A &amp; B)

<span class="hljs-comment"># perform intersection operation using intersection()</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Intersection using intersection():'</span>, A.intersection(B)) </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Intersection using &amp;: {1, 3}
Intersection using intersection(): {1, 3}</samp></pre>

<p class="note-tip"><strong>Note:</strong> <code>A&amp;B</code> and <code>intersection()</code> is equivalent to <code>A ⋂ B</code> set operation.</p>

<hr>
<h2 id="difference">Difference between Two Sets</h2>

<p>The difference between two sets <code>A</code> and <code>B</code> include elements of set <code>A</code> that are not present on set <code>B</code>.</p>

<figure><img src="assets/images/python-difference.png" title="Set Difference" alt="Set Difference in Python" width="450" height="263">
<figcaption>Set Difference in Python</figcaption></figure>
<p>We use the <code>-</code> operator or the <a href="/python-programming/methods/set/difference">difference()</a> method to perform the difference between two sets. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># first set</span>
A = {<span class="hljs-number">2</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>}

<span class="hljs-comment"># second set</span>
B = {<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">6</span>}

<span class="hljs-comment"># perform difference operation using &amp;</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Difference using &amp;:'</span>, A - B)

<span class="hljs-comment"># perform difference operation using difference()</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Difference using difference():'</span>, A.difference(B)) </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Difference using &amp;: {3, 5}
Difference using difference(): {3, 5}</samp></pre>

<p class="note-tip"><strong>Note</strong>: <code>A - B</code> and <code>A.difference(B)</code> is equivalent to <code>A - B</code> set operation.</p>

<hr>
<h2 id="symmetric">Set Symmetric Difference</h2>

<p>The symmetric difference between two sets <code>A</code> and <code>B</code> includes all elements of <code>A</code> and <code>B</code> without the common elements.</p>

<figure><img src="assets/images/python-symmetric-difference.png" title="Set Symmetric Difference" alt="Set Symmetric Difference in Python" width="450" height="256">
<figcaption>Set Symmetric Difference in Python</figcaption></figure>
<p>In Python, we use the <code>^</code> operator or the <a href="/python-programming/methods/set/symmetric_difference">symmetric_difference()</a> method to perform symmetric differences between two sets. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># first set</span>
A = {<span class="hljs-number">2</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>}

<span class="hljs-comment"># second set</span>
B = {<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">6</span>}

<span class="hljs-comment"># perform difference operation using &amp;</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'using ^:'</span>, A ^ B)

<span class="hljs-comment"># using symmetric_difference()</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'using symmetric_difference():'</span>, A.symmetric_difference(B)) </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>using ^: {1, 3, 5, 6}
using symmetric_difference(): {1, 3, 5, 6}</samp></pre>

<hr>
<h2 id="check-equal">Check if two sets are equal</h2>

<p>We can use the <code>==</code> operator to check whether two sets are equal or not. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># first set</span>
A = {<span class="hljs-number">1</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>}

<span class="hljs-comment"># second set</span>
B = {<span class="hljs-number">3</span>, <span class="hljs-number">5</span>, <span class="hljs-number">1</span>}

<span class="hljs-comment"># perform difference operation using &amp;</span>
<span class="hljs-keyword">if</span> A == B:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Set A and Set B are equal'</span>)
<span class="hljs-keyword">else</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Set A and Set B are not equal'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Set A and Set B are equal</samp></pre>

<p>In the above example, <var>A</var> and <var>B</var> have the same elements, so the condition</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">if</span> A == B</code></pre>

<p>evaluates to <code>True</code>. Hence, the statement <code>print('Set A and Set B are equal')</code> inside the <code>if</code> is executed.</p>

<hr>
<h2 id="methods">Other Python Set Methods</h2>

<p>There are many set methods, some of which we have already used above. Here is a list of all the methods that are available with the set objects:</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/python-programming/methods/set/add">add()</a></td>
<td>Adds an element to the set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/clear">clear()</a></td>
<td>Removes all elements from the set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/copy">copy()</a></td>
<td>Returns a copy of the set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/difference">difference()</a></td>
<td>Returns the difference of two or more sets as a new set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/difference_update">difference_update()</a></td>
<td>Removes all elements of another set from this set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/discard">discard()</a></td>
<td>Removes an element from the set if it is a member. (Do nothing if the element is not in set)</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/intersection">intersection()</a></td>
<td>Returns the intersection of two sets as a new set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/intersection_update">intersection_update()</a></td>
<td>Updates the set with the intersection of itself and another</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/isdisjoint">isdisjoint()</a></td>
<td>Returns <code>True</code> if two sets have a null intersection</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/issubset">issubset()</a></td>
<td>Returns <code>True</code> if another set contains this set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/issuperset">issuperset()</a></td>
<td>Returns <code>True</code> if this set contains another set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/pop">pop()</a></td>
<td>Removes and returns an arbitrary set element. Raises <code>KeyError</code> if the set is empty</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/remove">remove()</a></td>
<td>Removes an element from the set. If the element is not a member, raises a <code>KeyError</code></td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/symmetric_difference">symmetric_difference()</a></td>
<td>Returns the symmetric difference of two sets as a new set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/symmetric_difference_update">symmetric_difference_update()</a></td>
<td>Updates a set with the symmetric difference of itself and another</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/union">union()</a></td>
<td>Returns the union of sets in a new set</td>
</tr>
<tr>
<td><a href="/python-programming/methods/set/update">update()</a></td>
<td>Updates the set with the union of itself and others</td>
</tr>
</tbody></table>
</div>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/python-programming/methods/built-in/set">Python set()</a></li>
<li><a href="https://programiz.com/python-programming/methods/set">Python Set Methods</a></li>
</ul>

</div>
</section>
<section id="four6">
<h1>Python Dictionary</h1>
<div class="content">
  <p>A Python dictionary is a collection of items, similar to lists and tuples. However, unlike lists and tuples, each item in a dictionary is a <strong>key-value</strong> pair (consisting of a key and a value).</p>

<hr>
<h2 id="create">Create a Dictionary</h2>

<p>We create a dictionary by placing <code>key: value</code> pairs inside curly brackets <code>{}</code>, separated by commas. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># creating a dictionary</span>
country_capitals = {
<span class="hljs-string">"Germany"</span>: <span class="hljs-string">"Berlin"</span>, 
<span class="hljs-string">"Canada"</span>: <span class="hljs-string">"Ottawa"</span>, 
<span class="hljs-string">"England"</span>: <span class="hljs-string">"London"</span>
}

<span class="hljs-comment"># printing the dictionary</span>
<span class="hljs-keyword">print</span>(country_capitals)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>{'Germany': 'Berlin', 'Canada': 'Ottawa', 'England': 'London'}</samp></pre>

<p>The <code>country_capitals</code> dictionary has three elements (key-value pairs), where <code>'Germany'</code> is the key and <code>'Berlin'</code> is the value assigned to it and so on. </p><figure><img src="assets/images/python_dictionary-example.png" title="Python Dictionary" alt="Key Value Pairs in a Dictionary" width="" height="">
<figcaption>Python Dictionary</figcaption></figure>
<p></p>

<div class="note-tip">
<p><strong>Notes</strong>:</p>

<ul>
<li>Dictionary keys must be immutable, such as tuples, strings, integers, etc. We cannot use mutable (changeable) objects such as lists as keys.</li>
</ul>

<ul>
<li>We can also create a dictionary using a Python built-in function <code>dict()</code>. To learn more, visit <a href="/python-programming/methods/built-in/dict">Python dict()</a>.</li>
</ul>

</div>
<div class="faq-section"><h2 class="section-title faq-section__title">Valid and Invalid Dictionaries

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Keys of a dictionary must be immutable

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Immutable objects can't be changed once created. Some immutable objects in Python are integer, tuple and string.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># valid dictionary</span>
<span class="hljs-comment"># integer as a key</span>
my_dict = {<span class="hljs-number">1</span>: <span class="hljs-string">"one"</span>, <span class="hljs-number">2</span>: <span class="hljs-string">"two"</span>, <span class="hljs-number">3</span>: <span class="hljs-string">"three"</span>}

<span class="hljs-comment"># valid dictionary</span>
<span class="hljs-comment"># tuple as a key</span>
my_dict = {(<span class="hljs-number">1</span>, <span class="hljs-number">2</span>): <span class="hljs-string">"one two"</span>, <span class="hljs-number">3</span>: <span class="hljs-string">"three"</span>}

<span class="hljs-comment"># invalid dictionary</span>
<span class="hljs-comment"># Error: using a list as a key is not allowed</span>
my_dict = {<span class="hljs-number">1</span>: <span class="hljs-string">"Hello"</span>, [<span class="hljs-number">1</span>, <span class="hljs-number">2</span>]: <span class="hljs-string">"Hello Hi"</span>}

<span class="hljs-comment"># valid dictionary</span>
<span class="hljs-comment"># string as a key, list as a value</span>
my_dict = {<span class="hljs-string">"USA"</span>: [<span class="hljs-string">"Chicago"</span>, <span class="hljs-string">"California"</span>, <span class="hljs-string">"New York"</span>]}</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>In this example, we have used integers, tuples, and strings as keys for the dictionaries. When we used a list as a key, an error message occurred due to the list's mutable nature.</p>

<p class="note-tip"><strong>Note:</strong> Dictionary values can be of any data type, including mutable types like lists.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Keys of a dictionary must be unique

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>The keys of a dictionary must be unique. If there are duplicate keys, the later value of the key overwrites the previous value.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">hogwarts_houses = {
<span class="hljs-string">"Harry Potter"</span>: <span class="hljs-string">"Gryffindor"</span>,
<span class="hljs-string">"Hermione Granger"</span>: <span class="hljs-string">"Gryffindor"</span>,
<span class="hljs-string">"Ron Weasley"</span>: <span class="hljs-string">"Gryffindor"</span>,
<div class="line-highlight">    <span class="hljs-comment"># duplicate key with a different house</span>
<span class="hljs-string">"Harry Potter"</span>: <span class="hljs-string">"Slytherin"</span></div>
}

<span class="hljs-keyword">print</span>(hogwarts_houses)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>{'Harry Potter': 'Slytherin', 'Hermione Granger': 'Gryffindor', 'Ron Weasley': 'Gryffindor'}</samp></pre>

<p>Here, the key <code>Harry Potter</code> is first assigned to <code>Gryffindor</code>. However, there is a second entry where <code>Harry Potter</code> is assigned to <code>Slytherin</code>.</p>

<p>As duplicate keys are not allowed in a dictionary, the last entry <code>Slytherin</code> overwrites the previous value <code>Gryffindor</code>.</p>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="access">Access Dictionary Items</h2>

<p>We can access the value of a dictionary item by placing the key inside square brackets.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">country_capitals = {
<span class="hljs-string">"Germany"</span>: <span class="hljs-string">"Berlin"</span>, 
<span class="hljs-string">"Canada"</span>: <span class="hljs-string">"Ottawa"</span>, 
<span class="hljs-string">"England"</span>: <span class="hljs-string">"London"</span>
}

<span class="hljs-comment"># access the value of keys</span>
<span class="hljs-keyword">print</span>(country_capitals[<span class="hljs-string">"Germany"</span>])    <span class="hljs-comment"># Output: Berlin</span>
<span class="hljs-keyword">print</span>(country_capitals[<span class="hljs-string">"England"</span>])    <span class="hljs-comment"># Output: London</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p class="note-tip"><strong>Note:</strong> We can also use the <a href="/python-programming/methods/dictionary/get">get()</a> method to access dictionary items.</p>

<hr>
<h2 id="add">Add Items to a Dictionary</h2>

<p>We can add an item to a dictionary by assigning a value to a new key. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">country_capitals = {
<span class="hljs-string">"Germany"</span>: <span class="hljs-string">"Berlin"</span>, 
<span class="hljs-string">"Canada"</span>: <span class="hljs-string">"Ottawa"</span>, 
}

<div class="line-highlight"><span class="hljs-comment"># add an item with "Italy" as key and "Rome" as its value</span>
country_capitals[<span class="hljs-string">"Italy"</span>] = <span class="hljs-string">"Rome"</span></div>

<span class="hljs-keyword">print</span>(country_capitals)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>{'Germany': 'Berlin', 'Canada': 'Ottawa', 'Italy': 'Rome'}</samp></pre>

<hr>
<h2 id="remove">Remove Dictionary Items</h2>

<p>We can use the <a href="https://www.programiz.com/python-programming/del">del</a> statement to remove an element from a dictionary. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">country_capitals = {
<span class="hljs-string">"Germany"</span>: <span class="hljs-string">"Berlin"</span>, 
<span class="hljs-string">"Canada"</span>: <span class="hljs-string">"Ottawa"</span>, 
}

<div class="line-highlight"><span class="hljs-comment"># delete item having "Germany" key</span>
<span class="hljs-keyword">del</span> country_capitals[<span class="hljs-string">"Germany"</span>]</div>

<span class="hljs-keyword">print</span>(country_capitals)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>{'Canada': 'Ottawa'}</samp></pre>

<p class="note-tip"><strong>Note</strong>: We can also use the <a href="/python-programming/methods/dictionary/pop">pop()</a> method to remove an item from a dictionary.</p>

<p>If we need to remove all items from a dictionary at once, we can use the <a href="https://www.programiz.com/python-programming/methods/dictionary/clear">clear()</a> method.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">country_capitals = {
<span class="hljs-string">"Germany"</span>: <span class="hljs-string">"Berlin"</span>, 
<span class="hljs-string">"Canada"</span>: <span class="hljs-string">"Ottawa"</span>, 
}

<div class="line-highlight"><span class="hljs-comment"># clear the dictionary</span>
country_capitals.clear()</div>

<span class="hljs-keyword">print</span>(country_capitals)  </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>{}</samp></pre>

<hr>
<h2 id="update">Change Dictionary Items</h2>

<p>Python dictionaries are mutable (changeable). We can change the value of a dictionary element by referring to its key. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">country_capitals = {
<span class="hljs-string">"Germany"</span>: <span class="hljs-string">"Berlin"</span>, 
<span class="hljs-string">"Italy"</span>: <span class="hljs-string">"Naples"</span>, 
<span class="hljs-string">"England"</span>: <span class="hljs-string">"London"</span>
}

<div class="line-highlight"><span class="hljs-comment"># change the value of "Italy" key to "Rome"</span>
country_capitals[<span class="hljs-string">"Italy"</span>] = <span class="hljs-string">"Rome"</span></div>

<span class="hljs-keyword">print</span>(country_capitals)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>{'Germany': 'Berlin', 'Italy': 'Rome', 'England': 'London'}</samp></pre>

<p class="note-tip"><strong>Note</strong>: We can also use the <a href="/python-programming/methods/dictionary/update">update()</a> method to add or change dictionary items.</p>

<hr>
<h2 id="iterate">Iterate Through a Dictionary</h2>

<p>A dictionary is an ordered collection of items (starting from Python 3.7), therefore it maintains the order of its items.</p>

<p>We can iterate through dictionary keys one by one using a <a href="/python-programming/for-loop">for loop</a>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">country_capitals = {
<span class="hljs-string">"United States"</span>: <span class="hljs-string">"Washington D.C."</span>, 
<span class="hljs-string">"Italy"</span>: <span class="hljs-string">"Rome"</span> 
}

<span class="hljs-comment"># print dictionary keys one by one</span>
<span class="hljs-keyword">for</span> country <span class="hljs-keyword">in</span> country_capitals:
<span class="hljs-keyword">print</span>(country)

<span class="hljs-keyword">print</span>()

<span class="hljs-comment"># print dictionary values one by one</span>
<span class="hljs-keyword">for</span> country <span class="hljs-keyword">in</span> country_capitals:
capital = country_capitals[country]
<span class="hljs-keyword">print</span>(capital)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>United States
Italy

Washington D.C.
Rome</samp></pre>

<hr>
<h2 id="findlength">Find Dictionary Length</h2>

<p>We can find the length of a dictionary by using the <a href="/python-programming/methods/built-in/len">len()</a> function.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">country_capitals = {<span class="hljs-string">"England"</span>: <span class="hljs-string">"London"</span>, <span class="hljs-string">"Italy"</span>: <span class="hljs-string">"Rome"</span>}

<div class="line-highlight"><span class="hljs-comment"># get dictionary's length</span>
<span class="hljs-keyword">print</span>(len(country_capitals))   <span class="hljs-comment"># Output: 2</span></div>

numbers = {<span class="hljs-number">10</span>: <span class="hljs-string">"ten"</span>, <span class="hljs-number">20</span>: <span class="hljs-string">"twenty"</span>, <span class="hljs-number">30</span>: <span class="hljs-string">"thirty"</span>}

<div class="line-highlight"><span class="hljs-comment"># get dictionary's length</span>
<span class="hljs-keyword">print</span>(len(numbers))            <span class="hljs-comment"># Output: 3</span></div>

countries = {}

<div class="line-highlight"><span class="hljs-comment"># get dictionary's length</span>
<span class="hljs-keyword">print</span>(len(countries))          <span class="hljs-comment"># Output: 0</span></div></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<hr>
<h2 id="methods">Python Dictionary Methods</h2>

<p>Here are some of the commonly used <a href="/python-programming/methods/dictionary">dictionary methods</a>.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Function</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/python-programming/methods/dictionary/pop">pop()</a></td>
<td>Removes the item with the specified key.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/dictionary/update">update()</a></td>
<td>Adds or changes dictionary items.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/dictionary/clear">clear()</a></td>
<td>Remove all the items from the dictionary.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/dictionary/keys">keys()</a></td>
<td>Returns all the dictionary's keys.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/dictionary/values">values()</a></td>
<td>Returns all the dictionary's values.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/dictionary/get">get()</a></td>
<td>Returns the value of the specified key.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/dictionary/popitem">popitem()</a></td>
<td>Returns the last inserted key and value as a tuple.</td>
</tr>
<tr>
<td><a href="/python-programming/methods/dictionary/copy">copy()</a></td>
<td>Returns a copy of the dictionary.</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="membership">Dictionary Membership Test</h2>

<p>We can check whether a key exists in a dictionary by using the <code>in</code> and <code>not in</code> operators.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">file_types = {
<span class="hljs-string">".txt"</span>: <span class="hljs-string">"Text File"</span>,
<span class="hljs-string">".pdf"</span>: <span class="hljs-string">"PDF Document"</span>,
<span class="hljs-string">".jpg"</span>: <span class="hljs-string">"JPEG Image"</span>,
}

<span class="hljs-comment"># use of in and not in operators</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">".pdf"</span> <span class="hljs-keyword">in</span> file_types)       <span class="hljs-comment"># Output: True</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">".mp3"</span> <span class="hljs-keyword">in</span> file_types)       <span class="hljs-comment"># Output: False</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">".mp3"</span> <span class="hljs-keyword">not</span> <span class="hljs-keyword">in</span> file_types)   <span class="hljs-comment"># Output: True</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p class="note-tip"><strong>Note:</strong> The <code>in</code> operator checks whether a key exists; it doesn't check whether a value exists or not.</p>

</div>
</section>

<!-- five menu sections -->
<section id="five1">
<h1>Python Functions</h1>
<div class="content">
  <p id="introduction">A function is a block of code that performs a specific task.</p>

<p>Suppose we need to create a program to make a circle and color it. We can create two functions to solve this problem:</p>

<ol>
<li>function to create a circle </li>
<li>function to color the shape</li>
</ol>

<p>Dividing a complex problem into smaller chunks makes our program easy to understand and reuse.</p>

<hr>
<h2 id="create">Create a Function </h2>

<p>Let's create our first function. </p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">greet</span><span class="hljs-params">()</span>:</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Hello World!'</span>)</code></pre>

<p>Here are the different parts of the program:</p>

<figure><img src="assets/images/create-function-python.png" title="Create a Python Function " alt="Create a Python Function " width="" height="">
<figcaption>Create a Python Function </figcaption></figure>
<p>Here, we have created a simple function named <code>greet()</code> that prints <strong>Hello World!</strong></p>

<div class="note-tip">
<p><strong>Note:</strong> When writing a function, pay attention to indentation, which are the spaces at the start of a code line. </p>

<p>In the above code, the <code>print()</code> statement is indented to show it's part of the function body, distinguishing the function's definition from its body.</p>

</div>
<hr>
<h2 id="call">Calling a Function</h2>

<p>In the above example, we have declared a function named <code>greet()</code>.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">greet</span><span class="hljs-params">()</span>:</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Hello World!'</span>)</code></pre>

<p>If we run the above code, we won't get an output. </p>

<p>It's because creating a function doesn't mean we are executing the code inside it. It means the code is there for us to use if we want to.</p>

<p>To use this function, we need to call the function.</p>

<p><strong>Function Call</strong></p>

<pre style="max-height: 600px;"><code class="python hljs">greet()</code></pre>

<hr>
<h2 id="example">Example: Python Function Call</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">greet</span><span class="hljs-params">()</span>:</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Hello World!'</span>)

<span class="hljs-comment"># call the function</span>
greet()

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Outside function'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Hello World!
Outside function</samp></pre>

<p>In the above example, we have created a function named <code>greet()</code>. Here's how the control of the program flows:</p>

<figure><img src="assets/images/working-of-function-python.png" title="Python Function Working" alt="Python Function Working" width="" height="">
<figcaption>Working of Python Function</figcaption></figure>
<p>Here,</p>

<ol>
<li>When the function <code>greet()</code> is called, the program's control transfers to the function definition.</li>
<li>All the code inside the function is executed.</li>
<li>The control of the program jumps to the next statement after the function call.</li>
</ol>

<hr>
<h2 id="arguments">Python Function Arguments </h2>

<p>Arguments are inputs given to the function. </p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">greet</span><span class="hljs-params">(name)</span>:</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Hello"</span>, name)

<span class="hljs-comment"># pass argument</span>
greet(<span class="hljs-string">"John"</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Sample Output 1</strong></p>

<pre><samp>Hello John</samp></pre>

<p>Here, we passed '<code>John'</code> as an argument to the <code>greet()</code> function.</p>

<p>We can pass different arguments in each call, making the function re-usable and dynamic.</p>

<p>Let's call the function with a different argument.</p>

<pre style="max-height: 600px;"><code class="python hljs">greet(<span class="hljs-string">"David"</span>)</code></pre>

<p><strong>Sample Output 2</strong></p>

<pre><samp>Hello David</samp></pre>

<hr>
<h2 id="example1">Example: Function to Add Two Numbers</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># function with two arguments</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add_numbers</span><span class="hljs-params">(num1, num2)</span>:</span>
sum = num1 + num2
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Sum: "</span>, sum)

<span class="hljs-comment"># function call with two values</span>
add_numbers(<span class="hljs-number">5</span>, <span class="hljs-number">4</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Sum: 9</samp></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>In the above example, we have created a function named <code>add_numbers()</code> with arguments: <var>num1</var> and <var>num2</var>.</p>

<figure><img src="assets/images/function-argument-python.png" title="Python Function Argument" alt="Python Function Argument" width="" height="">
<figcaption>Python Function with Arguments</figcaption></figure>
<hr>
<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Parameters and Arguments

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p><strong>Parameters</strong></p>

<p>Parameters are the <a href="https://www.programiz.com/python-programming/variables-constants-literals" title="Python variables">variables</a> listed inside the parentheses in the function definition. They act like placeholders for the data the function can accept when we call them. </p>

<p>Think of parameters as the <strong>blueprint</strong> that outlines what kind of information the function expects to receive.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">print_age</span><span class="hljs-params">(age)</span>:</span>  <span class="hljs-comment"># age is a parameter</span>
<span class="hljs-keyword">print</span>(age)</code></pre>

<p>In this example, the <code>print_age()</code> function takes <code>age</code> as its input. However, at this stage, the actual value is not specified. </p>

<p>The <code>age</code> parameter is just a placeholder waiting for a specific value to be provided when the function is called.</p>

<p><strong>Arguments</strong></p>

<p>Arguments are the actual values that we pass to the function when we call it. </p>

<p>Arguments replace the parameters when the function executes.</p>

<pre style="max-height: 600px;"><code class="python hljs">print_age(<span class="hljs-number">25</span>)  <span class="hljs-comment"># 25 is an argument</span></code></pre>

<p>Here, during the function call, the argument <strong>25</strong> is passed to the function. </p>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="return">The return Statement</h2>

<p>We return a value from the function using the <code>return</code> statement.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># function definition</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">find_square</span><span class="hljs-params">(num)</span>:</span>
result = num * num
<div class="line-highlight">    <span class="hljs-keyword">return</span> result</div>

<span class="hljs-comment"># function call</span>
square = find_square(<span class="hljs-number">3</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Square:'</span>, square)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Square: 9</samp></pre>

<p>In the above example, we have created a function named <code>find_square()</code>. The function accepts a number and returns the square of the number.</p>

<figure><img src="assets/images/function-return-value-python-updated.png" title="Working of Python Functions" alt="How function works in Python?" width="" height="">
<figcaption>Working of functions in Python</figcaption></figure>
<p class="note-tip"><strong>Note:</strong> The <code>return</code> statement also denotes that the function has ended. Any code after <code>return</code>  is not executed.</p>

<hr>
<h2 id="pass">The pass Statement </h2>

<p>The <code>pass</code> statement serves as a placeholder for future code, preventing errors from empty code blocks.</p>

<p>It's typically used where code is planned but has yet to be written.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">future_function</span><span class="hljs-params">()</span>:</span>
<span class="hljs-keyword">pass</span>

<span class="hljs-comment"># this will execute without any action or error</span>
future_function()  </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p class="note-tip"><strong>Note</strong>: To learn more, visit <a href="/python-programming/pass-statement">Python Pass Statement</a>.</p>

<hr>
<h2 id="library">Python Library Functions</h2>

<p>Python provides some built-in functions that can be directly used in our program. </p>

<p>We don't need to create the function, we just need to call them. </p>

<p>Some Python library functions are:</p>

<ol>
<li><a href="/python-programming/methods/built-in/print">print()</a> - prints the string inside the quotation marks</li>
<li><code>sqrt()</code> - returns the square root of a number</li>
<li><a href="/python-programming/methods/built-in/pow">pow()</a> - returns the power of a number</li>
</ol>

<p>These library functions are defined inside the module. And to use them, we must include the module inside our program.</p>

<p>For example, <code>sqrt()</code> is defined inside the <a href="/python-programming/modules/math">math</a> module.</p>

<p class="note-tip"><strong>Note</strong>: To learn more about library functions, please visit <a href="/python-programming/methods">Python Library Functions</a>.  </p>

<hr>
<h2 id="example4">Example: Python Library Function</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> math

<span class="hljs-comment"># sqrt computes the square root</span>
square_root = math.sqrt(<span class="hljs-number">4</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Square Root of 4 is"</span>,square_root)

<span class="hljs-comment"># pow() comptes the power</span>
power = pow(<span class="hljs-number">2</span>, <span class="hljs-number">3</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"2 to the power 3 is"</span>,power)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Square Root of 4 is 2.0
2 to the power 3 is 8</samp></pre>

<p>Here, we imported a <code>math</code> module to use the library functions <code>sqrt()</code> and <code>pow()</code>. </p>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">More on Python Functions

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">User Defined Function Vs Standard Library Functions

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>In Python, functions are divided into two categories: user-defined functions and standard library functions. These two differ in several ways:</p>

<p><strong>User-Defined Functions</strong></p>

<p>These are the functions we create ourselves. They're like our custom tools, designed for specific tasks we have in mind. </p>

<p>They're not part of Python's standard toolbox, which means we have the freedom to tailor them exactly to our needs, adding a personal touch to our code.</p>

<p><strong>Standard Library Functions</strong> </p>

<p>Think of these as Python's pre-packaged gifts. They come built-in with Python, ready to use. </p>

<p>These functions cover a wide range of common tasks such as mathematics, <a href="/python-programming/file-operation">file operations</a>, working with <a href="/python-programming/methods/string">strings</a>, etc.</p>

<p>They've been tried and tested by the Python community, ensuring efficiency and reliability.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Default Arguments in Functions

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Python allows functions to have default argument values. Default arguments are used when no explicit values are passed to these parameters during a function call.</p>

<p>Let's look at an example.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">greet</span><span class="hljs-params">(name, message=<span class="hljs-string">"Hello"</span>)</span>:</span>
<span class="hljs-keyword">print</span>(message, name)

<span class="hljs-comment"># calling function with both arguments</span>
greet(<span class="hljs-string">"Alice"</span>, <span class="hljs-string">"Good Morning"</span>)

<span class="hljs-comment"># calling function with only one argument</span>
greet(<span class="hljs-string">"Bob"</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Good Morning Alice
Hello Bob</samp></pre>

<p>Here, <code>message</code> has the default value of <code>Hello</code>. When <code>greet()</code> is called with only one argument, <code>message</code> uses its default value.</p>

<p class="note-tip"><strong>Note:</strong> To learn more about default arguments in a function, please visit <a href="/python-programming/function-argument">Python Function Arguments</a>.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Using <code>*args</code> and <code>**kwargs</code> in Functions 

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can handle an arbitrary number of arguments using special symbols <code>*args</code> and <code>**kwargs</code>.</p>

<p><code><strong>*args</strong></code> <strong>in Functions</strong></p>

<p>Using <code>*args</code> allows a function to take any number of positional arguments.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># function to sum any number of arguments</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add_all</span><span class="hljs-params">(*numbers)</span>:</span>
<span class="hljs-keyword">return</span> sum(numbers)

<span class="hljs-comment"># pass any number of arguments</span>
<span class="hljs-keyword">print</span>(add_all(<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>, <span class="hljs-number">4</span>))   </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong> </p>

<pre><samp>10</samp></pre>

<p><code><strong>*kwargs</strong></code> <strong>in Functions</strong></p>

<p>Using <code>**kwargs</code> allows the function to accept any number of keyword arguments.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># function to print keyword arguments</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">greet</span><span class="hljs-params">(**words)</span>:</span>
<span class="hljs-keyword">for</span> key, value <span class="hljs-keyword">in</span> words.items():
    <span class="hljs-keyword">print</span>(<span class="hljs-string">f"<span class="hljs-subst">{key}</span>: <span class="hljs-subst">{value}</span>"</span>)

<span class="hljs-comment"># pass any number of keyword arguments</span>
greet(name=<span class="hljs-string">"John"</span>, greeting=<span class="hljs-string">"Hello"</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong> </p>

<pre><samp>name: John
greeting: Hello</samp></pre>

<p>To learn more, visit <a href="/python-programming/args-and-kwargs">Python *args and **kwargs</a>.</p>

</div></div></div></div></div></div></div></div></div>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/python-programming/recursion">Python Recursive Function</a></li>
<li><a href="/python-programming/modules">Python Modules</a></li>
<li><a href="/python-programming/generator">Python Generators</a></li>
</ul>

</div>
</section>
<section id="five2">
<h1>Python Function Arguments</h1>
<div class="content">
  <p id="introduction">In computer programming, an argument&nbsp;is a value that is accepted by a function.</p>

<p>Before we learn about function arguments, make sure to know about <a href="/python-programming/function">Python Functions</a>.</p>

<hr>
<h2 id="example1">Example 1: Python Function Arguments</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add_numbers</span><span class="hljs-params">(a, b)</span>:</span>
sum = a + b
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Sum:'</span>, sum)

add_numbers(<span class="hljs-number">2</span>, <span class="hljs-number">3</span>)

<span class="hljs-comment"># Output: Sum: 5</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>In the above example, the function <code>add_numbers()</code> takes two parameters: <code>a</code> and <code>b</code>. Notice the line,</p>

<pre style="max-height: 600px;"><code class="python hljs">add_numbers(<span class="hljs-number">2</span>, <span class="hljs-number">3</span>)</code></pre>

<p>Here, <code>add_numbers(2, 3)</code> specifies that parameters <code>a</code> and <code>b</code> will get values <strong>2</strong> and <strong>3</strong> respectively.</p>

<hr>
<h2 id="default-value">Function Argument with Default Values</h2>

<p>In Python, we can provide default values to function arguments.</p>

<p>We use the <code>=</code> operator to provide default values. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add_numbers</span><span class="hljs-params">( a = <span class="hljs-number">7</span>,  b = <span class="hljs-number">8</span>)</span>:</span>
sum = a + b
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Sum:'</span>, sum)


<span class="hljs-comment"># function call with two arguments</span>
add_numbers(<span class="hljs-number">2</span>, <span class="hljs-number">3</span>)

<span class="hljs-comment">#  function call with one argument</span>
add_numbers(a = <span class="hljs-number">2</span>)

<span class="hljs-comment"># function call with no arguments</span>
add_numbers()</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Sum: 5
Sum: 10
Sum: 15</samp></pre>

<p>In the above example, notice the function definition</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add_numbers</span><span class="hljs-params">(a = <span class="hljs-number">7</span>, b = <span class="hljs-number">8</span>)</span>:</span>
...</code></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here, we have provided default values <strong>7</strong> and <strong>8</strong> for parameters a and b respectively. Here's how this program works</p>

<p><strong>1. add_number(2, 3)</strong></p>

<p>Both values are passed during the function call. Hence, these values are used instead of the default values.</p>

<p><strong>2. add_number(2)</strong></p>

<p>Only one value is passed during the function call. So, according to the positional argument <strong>2</strong> is assigned to argument <code>a</code>, and the default value is used for parameter <code>b</code>.</p>

<p><strong>3. add_number()</strong></p>

<p>No value is passed during the function call. Hence, default value is used for both parameters <code>a</code> and <code>b</code>.</p>

<hr>
<h2 id="keyword">Python Keyword Argument</h2>

<p>In keyword arguments, arguments are assigned based on the name of the arguments. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">display_info</span><span class="hljs-params">(first_name, last_name)</span>:</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'First Name:'</span>, first_name)
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Last Name:'</span>, last_name)

display_info(last_name = <span class="hljs-string">'Cartman'</span>, first_name = <span class="hljs-string">'Eric'</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>First Name: Eric
Last Name: Cartman</samp></pre>

<p>Here, notice the function call,</p>

<pre style="max-height: 600px;"><code class="python hljs">display_info(last_name = <span class="hljs-string">'Cartman'</span>, first_name = <span class="hljs-string">'Eric'</span>)</code></pre>

<p>Here, we have assigned names to arguments during the function call.</p>

<p>Hence, <code>first_name</code> in the function call is assigned to <code>first_name</code> in the function definition. Similarly, <code>last_name</code> in the function call is assigned to <code>last_name</code> in the function definition.</p>

<p>In such scenarios, the position of arguments doesn't matter.</p>

<hr>
<h2 id="arbitrary">Python Function With Arbitrary Arguments</h2>

<p>Sometimes, we do not know in advance the number of arguments that will be passed into a function. To handle this kind of situation, we can use <a href="/python-programming/args-and-kwargs">arbitrary arguments in Python</a>.</p>

<p>Arbitrary arguments allow us to pass a varying number of values during a function call.</p>

<p>We use an asterisk (*) before the parameter name to denote this kind of argument. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># program to find sum of multiple numbers </span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">find_sum</span><span class="hljs-params">(*numbers)</span>:</span>
result = <span class="hljs-number">0</span>

<span class="hljs-keyword">for</span> num <span class="hljs-keyword">in</span> numbers:
    result = result + num

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Sum = "</span>, result)

<span class="hljs-comment"># function call with 3 arguments</span>
find_sum(<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>)

<span class="hljs-comment"># function call with 2 arguments</span>
find_sum(<span class="hljs-number">4</span>, <span class="hljs-number">9</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Sum =  6
Sum =  13</samp></pre>

<p>In the above example, we have created the function <code>find_sum()</code> that accepts arbitrary arguments. Notice the lines,</p>

<pre style="max-height: 600px;"><code class="python hljs">find_sum(<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>)

find_sum(<span class="hljs-number">4</span>, <span class="hljs-number">9</span>)</code></pre>

<p>Here, we are able to call the same function with different arguments.</p>

<p class="note-tip"><strong>Note</strong>: After getting multiple values, <code>numbers</code> behave as an <a href="https://www.programiz.com/python-programming/array">array</a> so we are able to use the <a href="https://www.programiz.com/python-programming/for-loop">for loop</a> to access each value.</p>
</div>
</section>
<section id="five3">
<h1>Python Variable Scope</h1>
<div class="content">
  <p id="introduction">In Python, we can declare variables in three different scopes: local scope, global, and nonlocal scope.</p>

<p>A variable scope specifies the region where we can access a <a href="https://www.programiz.com/python-programming/variables-constants-literals">variable</a>. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add_numbers</span><span class="hljs-params">()</span>:</span>
sum = <span class="hljs-number">5</span> + <span class="hljs-number">4</span></code></pre>

<p>Here, the <var>sum</var> variable is created inside the <a href="https://www.programiz.com/python-programming/function">function</a>, so it can only be accessed within it (local scope). This type of variable is called a local variable.</p>

<p>Based on the scope, we can classify Python variables into three types:</p>

<ol>
<li>Local Variables</li>
<li>Global Variables</li>
<li>Nonlocal Variables</li>
</ol>

<hr>
<h2 id="local">Python Local Variables</h2>

<p>When we declare variables inside a function, these variables will have a local scope (within the function). We cannot access them outside the function.</p>

<p>These types of variables are called local variables. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">greet</span><span class="hljs-params">()</span>:</span>

<span class="hljs-comment"># local variable</span>
message = <span class="hljs-string">'Hello'</span>

<span class="hljs-keyword">print</span>(<span class="hljs-string">'Local'</span>, message)

greet()

<span class="hljs-comment"># try to access message variable </span>
<span class="hljs-comment"># outside greet() function</span>
<span class="hljs-keyword">print</span>(message)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Local Hello
NameError: name 'message' is not defined</samp></pre>

<p>Here, the <var>message</var> variable is local to the <code>greet()</code> function, so it can only be accessed within the function.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>That's why we get an error when we try to access it outside the <code>greet()</code> function.</p>

<p>To fix this issue, we can make the variable named <var>message</var> global.</p>

<hr>
<h2 id="global">Python Global Variables</h2>

<p>In Python, a variable declared outside of the function or in global scope is known as a global variable. This means that a global variable can be accessed inside or outside of the function.</p>

<p>Let's see an example of how a global variable is created in Python.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># declare global variable</span>
message = <span class="hljs-string">'Hello'</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">greet</span><span class="hljs-params">()</span>:</span>
<span class="hljs-comment"># declare local variable</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Local'</span>, message)

greet()
<span class="hljs-keyword">print</span>(<span class="hljs-string">'Global'</span>, message)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Local Hello
Global Hello</samp></pre>

<p>This time we can access the <var>message</var> variable from outside of the <code>greet()</code> function. This is because we have created the <var>message</var> variable as the global variable.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># declare global variable</span>
message = <span class="hljs-string">'Hello'</span></code></pre>

<p>Now, <var>message</var> will be accessible from any scope (region) of the program.</p>

<hr>
<h2 id="nonlocal">Python Nonlocal Variables</h2>

<p>In Python, nonlocal variables are used in nested functions whose local scope is not defined. This means that the variable can be neither in the local nor the global scope.</p>

<p>We use the <code>nonlocal</code> <a href="https://www.programiz.com/python-programming/keywords-identifier">keyword</a> to create nonlocal variables. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># outside function </span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">outer</span><span class="hljs-params">()</span>:</span>
message = <span class="hljs-string">'local'</span>

<span class="hljs-comment"># nested function  </span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">inner</span><span class="hljs-params">()</span>:</span>

    <span class="hljs-comment"># declare nonlocal variable</span>
    <span class="hljs-keyword">nonlocal</span> message

    message = <span class="hljs-string">'nonlocal'</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"inner:"</span>, message)

inner()
<span class="hljs-keyword">print</span>(<span class="hljs-string">"outer:"</span>, message)

outer()</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>inner: nonlocal
outer: nonlocal</samp></pre>

<p>In the above example, there is a nested <code>inner()</code> function. We have used the <code>nonlocal</code> keywords to create a nonlocal variable.</p>

<p>The <code>inner()</code> function is defined in the scope of another function <code>outer()</code>.</p>

<p class="note-tip"><strong>Note</strong> : If we change the value of a nonlocal variable, the changes appear in the local variable.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/namespace">Python Namespace and Scope</a></li>
</ul>
</div>
</section>
<section id="five4">
<h1>Python Global Keyword</h1>
<div class="content">
  <p id="introduction">In Python, the <code>global</code> keyword allows us to modify the variable outside of the current scope.</p>

<p>It is used to create a global variable and make changes to the variable in a local context.</p>

<p>Before we learn about the <code>global</code> keyword, make sure you have got some basics of <a href="/python-programming/global-local-nonlocal-variables">Python Variable Scope</a>.</p>

<hr>
<h2 id="modify">Access and Modify Python Global Variable</h2>

<p>First let's try to access a global variable from the inside of a <a href="https://www.programiz.com/python-programming/function">function</a>,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">c = <span class="hljs-number">1</span> <span class="hljs-comment"># global variable</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add</span><span class="hljs-params">()</span>:</span>
<span class="hljs-keyword">print</span>(c)

add()

<span class="hljs-comment"># Output: 1</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we can see that we have accessed a global variable from the inside of a function.</p>

<p>However, if we try to modify the global variable from inside a function as:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># global variable</span>
c = <span class="hljs-number">1</span> 

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add</span><span class="hljs-params">()</span>:</span>

 <span class="hljs-comment"># increment c by 2</span>
c = c + <span class="hljs-number">2</span>

<span class="hljs-keyword">print</span>(c)

add()</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>UnboundLocalError: local variable 'c' referenced before assignment</samp></pre>

<p>This is because we can only access the global variable but cannot modify it from inside the function.</p>

<p>The solution for this is to use the <code>global</code> keyword.</p>

<hr>
<h3>Example: Changing Global Variable From Inside a Function using global</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># global variable</span>
c = <span class="hljs-number">1</span> 

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add</span><span class="hljs-params">()</span>:</span>

<span class="hljs-comment"># use of global keyword</span>
<span class="hljs-keyword">global</span> c

<span class="hljs-comment"># increment c by 2</span>
c = c + <span class="hljs-number">2</span> 

<span class="hljs-keyword">print</span>(c)

add()

<span class="hljs-comment"># Output: 3 </span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>In the above example, we have defined <var>c</var> as the <code>global</code> keyword inside <code>add()</code>.</p>

<p>Then, we have incremented the variable <var>c</var> by <strong>2</strong>, i.e <code>c = c + 2</code>.</p>

<p>As we can see while calling <code>add()</code>, the value of global variable <var>c</var> is modified from <strong>1</strong> to <strong>3</strong>.</p>

<hr>
<h2 id="global-nested-function">Global in Nested Functions</h2>

<p>In Python, we can also use the <code>global</code> keyword in a nested function. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">outer_function</span><span class="hljs-params">()</span>:</span>
num = <span class="hljs-number">20</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">inner_function</span><span class="hljs-params">()</span>:</span>
    <span class="hljs-keyword">global</span> num
    num = <span class="hljs-number">25</span>

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Before calling inner_function(): "</span>, num)
inner_function()
<span class="hljs-keyword">print</span>(<span class="hljs-string">"After calling inner_function(): "</span>, num)

outer_function()
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Outside both function: "</span>, num)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Before calling inner_function():  20
After calling inner_function():  20
Outside both function:  25</samp></pre>

<p>In the above example, we declared a global variable inside the nested function <code>inner_function()</code>.</p>

<p>Inside <code>outer_function()</code>, <var>num</var> has no effect of the <code>global</code> keyword.</p>

<p>Before and after calling <code>inner_function()</code>, <var>num</var> takes the value of the local variable i.e <code>num = 20</code>.</p>

<p>Outside of the <code>outer_function()</code> function, <var>num</var> will take the value defined in the <code>inner_function()</code> function i.e <code>x = 25</code>.</p>

<p>This is because we have used the <code>global</code> keyword in <var>num</var> to create a global variable inside the <code>inner_function()</code> function (local scope).</p>

<p>So, if we make any changes inside the <code>inner_function()</code> function, the changes appear outside the local scope, i.e. <code>outer_function()</code>.</p>

<hr>
<h2 id="rules-global">Rules of global Keyword</h2>

<p>The basic rules for <code>global</code> keyword in Python are:</p>

<ul>
<li>When we create a variable inside a function, it is local by default.</li>
<li>When we define a variable outside of a function, it is global by default. You don't have to use the <code>global</code> keyword.</li>
<li>We use the <code>global</code> keyword to read and write a global variable inside a function.</li>
<li>Use of the <code>global</code> keyword outside a function has no effect.</li>
</ul>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/variables-constants-literals">Python Variables, Constants and Literals</a></li>
<li><a href="https://www.programiz.com/python-programming/methods/built-in/globals">Python globals()</a></li>
</ul>  </div>
</section>
<section id="five5">
<h1>Python Recursion</h1>
<div class="content">
  <p>Recursion is the process of defining something in terms of itself.</p>

<p>A physical world example would be to place two parallel mirrors facing each other. Any object in between them would be reflected recursively.</p>

<p class="note-tip"><strong>Do you want to learn Recursion the right way?</strong> Enroll in our <a href="https://programiz.pro/course/learn-recursion-with-python?utm_source=tutorial-body-top&amp;utm_campaign=programiz&amp;utm_medium=referral">Interactive Recursion Course</a>.</p>

<hr>
<h2 id="function">Python Recursive Function</h2>

<p>In Python, we know that a <a href="/python-programming/function">function</a> can call other functions. It is even possible for the function to call itself. These types of construct are termed as recursive functions.</p>

<p>The following image shows the working of a recursive function called <code>recurse</code>.</p>

<p><figure><img alt="Python Recursive Function" src="assets/images/python-recursion-function.png" title="Python Recursive Function" width="300"></figure></p>

<p>Following is an example of a recursive function to <a href="https://www.programiz.com/python-programming/examples/factorial">find the factorial of an integer</a>.</p>

<p>Factorial of a number is the product of all the integers from 1 to that number. For example, the factorial of 6 (denoted as 6!) is <samp>1*2*3*4*5*6 = 720</samp>.</p>

<h3>Example of a recursive function</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">factorial</span><span class="hljs-params">(x)</span>:</span>
<span class="hljs-string">"""This is a recursive function
to find the factorial of an integer"""</span>

<span class="hljs-keyword">if</span> x == <span class="hljs-number">1</span>:
    <span class="hljs-keyword">return</span> <span class="hljs-number">1</span>
<span class="hljs-keyword">else</span>:
    <span class="hljs-keyword">return</span> (x * factorial(x<span class="hljs-number">-1</span>))


num = <span class="hljs-number">3</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"The factorial of"</span>, num, <span class="hljs-string">"is"</span>, factorial(num))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>The factorial of 3 is 6</samp></pre>

<p>In the above example, <code>factorial()</code> is a recursive function as it calls itself.</p>

<p>When we call this function with a positive integer, it will recursively call itself by decreasing the number.</p>

<p>Each function multiplies the number with the factorial of the number below it until it is equal to one. This recursive call can be explained in the following steps.</p>

<pre>factorial(3)          # 1st call with 3
3 * factorial(2)      # 2nd call with 2
3 * 2 * factorial(1)  # 3rd call with 1
3 * 2 * 1             # return from 3rd call as number=1
3 * 2                 # return from 2nd call
6                     # return from 1st call</pre>

<p>Let's look at an image that shows a step-by-step process of what is going on:</p>

<p><figure><img alt="Factorial by a recursive method" height="473" src="assets/images/python-factorial-function.png" title="Factorial by a recursive method" width="400"></figure></p>

<p>Our recursion ends when the number reduces to 1. This is called the base condition.</p>

<p>Every recursive function must have a base condition that stops the recursion or else the function calls itself infinitely.</p>

<p>The Python interpreter limits the depths of recursion to help avoid infinite recursions, resulting in stack overflows.</p>

<p>By default, the maximum depth of recursion is <samp>1000</samp>. If the limit is crossed, it results in <code>RecursionError</code>. Let's look at one such condition.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">recursor</span><span class="hljs-params">()</span>:</span>
recursor()
recursor()</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Traceback (most recent call last):
File "&lt;string&gt;", line 3, in &lt;module&gt;
File "&lt;string&gt;", line 2, in a
File "&lt;string&gt;", line 2, in a
File "&lt;string&gt;", line 2, in a
[Previous line repeated 996 more times]
RecursionError: maximum recursion depth exceeded</samp></pre>

<hr>
<h2 id="advantages">Advantages of Recursion</h2>

<ol>
<li>Recursive functions make the code look clean and elegant.</li>
<li>A complex task can be broken down into simpler sub-problems using recursion.</li>
<li>Sequence generation is easier with recursion than using some nested iteration.</li>
</ol>

<hr>
<h2 id="disadvantages">Disadvantages of Recursion</h2>

<ol>
<li>Sometimes the logic behind recursion is hard to follow through.</li>
<li>Recursive calls are expensive (inefficient) as they take up a lot of memory and time.</li>
<li>Recursive functions are hard to debug.</li>
</ol>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/examples/natural-number-recursion" title="Python Program to Find Sum of Natural Numbers Using Recursion">Python Program to Find Sum of Natural Numbers Using Recursion</a></li>
<li><a href="https://www.programiz.com/python-programming/examples/fibonacci-recursion" title="Python Program to Display Fibonacci Sequence Using Recursion">Python Program to Display Fibonacci Sequence Using Recursion</a></li>
<li><a href="https://www.programiz.com/python-programming/if-elif-else" title="Python if...else Statement">Python if...else Statement</a></li>
</ul>

<p class="note-tip"><strong>Do you want to learn Recursion the right way?</strong> Enroll in our <a href="https://programiz.pro/course/learn-recursion-with-python?utm_source=tutorial-body-bottom&amp;utm_campaign=programiz&amp;utm_medium=referral">Interactive Recursion Course</a>.</p>



</div>
</section>
<section id="five6">
<h1>Python Modules</h1>
<div class="content">
  <p id="introduction">As our program grows bigger, it may contain many lines of code. Instead of putting everything in a single file, we can use modules to separate codes in separate files as per their functionality. This makes our code organized and easier to maintain.</p>

<p>Module is a file that contains code to perform a specific task. A module may contain <a href="https://www.programiz.com/python-programming/variables-constants-literals" title="Python Variables">variables</a>, <a href="https://www.programiz.com/python-programming/function" title="Python functions">functions</a>, <a href="https://www.programiz.com/python-programming/class" title="Python Class">classes</a> etc. Let's see an example,</p>

<p>Let us create a module. Type the following and save it as <code>example.py</code>.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># Python Module addition</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">add</span><span class="hljs-params">(a, b)</span>:</span>

result = a + b
<span class="hljs-keyword">return</span> result</code></pre>

<p>Here, we have defined a function <code>add()</code> inside a module named <code>example</code>. The function takes in two numbers and returns their sum.</p>

<hr>
<h2 id="import">Import modules in Python</h2>

<p>We can import the definitions inside a module to another module or the interactive interpreter in Python.</p>

<p>We use the <code>import</code> <a href="https://www.programiz.com/python-programming/keywords-identifier">keyword</a> to do this. To import our previously defined module <code>example</code>, we type the following in the Python prompt.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> example</code></pre>

<p>This does not import the names of the functions defined in <code>example</code> directly in the current symbol table. It only imports the module name <code>example</code> there.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Using the module name we can access the function using the dot <code>.</code> operator. For example:</p>

<pre style="max-height: 600px;"><code class="python hljs">addition.add(<span class="hljs-number">4</span>,<span class="hljs-number">5</span>) <span class="hljs-comment"># returns 9</span></code></pre>

<div class="note-tip">
<p><strong>Note</strong>:</p>

<ul>
<li>Python has tons of standard modules. You can check out the full list of <a href="http://docs.python.org/3/py-modindex.html">Python standard modules</a> and their use cases.</li>
<li>Standard modules can be imported the same way as we import our user-defined modules.</li>
</ul>
</div>

<hr>
<h2 id="standard-module">Import Python Standard Library Modules</h2>

<p>The Python standard library contains well over <strong>200</strong> modules. We can import a module according to our needs.</p>

<p>Suppose we want to get the value of <code>pi</code>, first we import the <a href="https://www.programiz.com/python-programming/modules/math">math</a> module and use <code>math.pi</code>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># import standard math module </span>
<span class="hljs-keyword">import</span> math

<span class="hljs-comment"># use math.pi to get value of pi</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"The value of pi is"</span>, math.pi)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>The value of pi is 3.141592653589793</samp></pre>

<hr>
<h2 id="renaming">Python import with Renaming</h2>

<p>In Python, we can also import a module by renaming it. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># import module by renaming it</span>
<span class="hljs-keyword">import</span> math <span class="hljs-keyword">as</span> m

<span class="hljs-keyword">print</span>(m.pi)

<span class="hljs-comment"># Output: 3.141592653589793</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, We have renamed the <code>math</code> module as <code>m</code>. This can save us typing time in some cases.</p>

<p>Note that the name <code>math</code> is not recognized in our scope. Hence, <code>math.pi</code> is invalid, and <code>m.pi</code> is the correct implementation.</p>

<hr>
<h2 id="from">Python from...import statement</h2>

<p>We can import specific names from a module without importing the module as a whole. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># import only pi from math module</span>
<span class="hljs-keyword">from</span> math <span class="hljs-keyword">import</span> pi

<span class="hljs-keyword">print</span>(pi)

<span class="hljs-comment"># Output: 3.141592653589793</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we imported only the <code>pi</code> attribute from the <code>math</code> module.</p>

<hr>
<h2 id="all">Import all names</h2>

<p>In Python, we can import all names(definitions) from a module using the following construct:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># import all names from the standard module math</span>
<span class="hljs-keyword">from</span> math <span class="hljs-keyword">import</span> *

<span class="hljs-keyword">print</span>(<span class="hljs-string">"The value of pi is"</span>, pi)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we have imported all the definitions from the math module. This includes all names visible in our scope except those beginning with an underscore(private definitions).</p>

<p>Importing everything with the asterisk (*) symbol is not a good programming practice. This can lead to duplicate definitions for an identifier. It also hampers the readability of our code.</p>

<hr>
<h2 id="dir">The dir() built-in function</h2>

<p>In Python, we can use the <a href="https://www.programiz.com/python-programming/methods/built-in/dir">dir()</a> function to list all the function names in a module.</p>

<p>For example, earlier we have defined a function <code>add()</code> in the module <code>example</code>.</p>

<p>We can use <code>dir</code> in <code>example</code> module in the following way:</p>

<pre style="max-height: 600px;"><code class="python hljs">dir(example)

[<span class="hljs-string">'__builtins__'</span>,
<span class="hljs-string">'__cached__'</span>,
<span class="hljs-string">'__doc__'</span>,
<span class="hljs-string">'__file__'</span>,
<span class="hljs-string">'__initializing__'</span>,
<span class="hljs-string">'__loader__'</span>,
<span class="hljs-string">'__name__'</span>,
<span class="hljs-string">'__package__'</span>,
<span class="hljs-string">'add'</span>]</code></pre>

<p>Here, we can see a sorted list of names (along with <code>add</code>). All other names that begin with an underscore are default Python attributes associated with the module (not user-defined).</p>

<p>For example, the <code>__name__</code> attribute contains the name of the module.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> example

example.__name__

<span class="hljs-comment"># Output: 'example'</span></code></pre>

<p>All the names defined in our current namespace can be found out using the <code>dir()</code> function without any arguments.</p>

<pre style="max-height: 600px;"><code class="python hljs">a = <span class="hljs-number">1</span>
b = <span class="hljs-string">"hello"</span>

<span class="hljs-keyword">import</span> math

dir()

[<span class="hljs-string">'__builtins__'</span>, <span class="hljs-string">'__doc__'</span>, <span class="hljs-string">'__name__'</span>, <span class="hljs-string">'a'</span>, <span class="hljs-string">'b'</span>, <span class="hljs-string">'math'</span>, <span class="hljs-string">'pyscripter'</span>]</code></pre>
</div>
</section>
<section id="five7">
<h1>Python Package</h1>
<div class="content">
  <p id="introduction">A package is a container that contains various functions to perform specific tasks. For example, the <a href="https://www.programiz.com/python-programming/modules/math">math</a> package includes the <code>sqrt()</code> function to <a href="https://www.programiz.com/python-programming/examples/square-root">perform the square root of a number</a>.</p>

<p>While working on big projects, we have to deal with a large amount of code, and writing everything together in the same file will make our code look messy. Instead, we can separate our code into multiple files by keeping the related code together in packages.</p>

<p>Now, we can use the package whenever we need it in our projects. This way we can also reuse our code.</p>

<hr>
<h2 id="structure">Package Model Structure in Python Programming</h2>

<p>Suppose we are developing a game. One possible organization of packages and <a href="https://www.programiz.com/python-programming/modules">modules</a> could be as shown in the figure below.</p>

<figure><img alt="Package Model Structure" height="" src="assets/images/packages-in-python.png" title="Package Model Structure" width="654">
<figcaption>Game Package Model Structure</figcaption>
</figure>

<p class="note-tip"><strong>Note</strong>: A directory must contain a file named <code>__init__.py</code> in order for Python to consider it as a package. This file can be left empty but we generally place the initialization code for that package in this file.</p>

<hr>
<h2 id="import">Importing module from a package</h2>

<p>In Python, we can import modules from packages using the dot (.) operator.</p>

<p>For example, if we want to import the <code>start</code> module in the above example, it can be done as follows:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> Game.Level.start</code></pre>

<p>Now, if this module contains a <a href="/python-programming/function">function</a> named <code>select_difficulty()</code>, we must use the full name to reference it.</p>

<pre style="max-height: 600px;"><code class="python hljs">Game.Level.start.select_difficulty(<span class="hljs-number">2</span>)</code></pre>

<h4>Import Without Package Prefix</h4>

<p>If this construct seems lengthy, we can import the module without the package prefix as follows:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> Game.Level <span class="hljs-keyword">import</span> start</code></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>We can now call the function simply as follows:</p>

<pre style="max-height: 600px;"><code class="python hljs">start.select_difficulty(<span class="hljs-number">2</span>)</code></pre>

<h4>Import Required Functionality Only</h4>

<p>Another way of importing just the required function (or <a href="https://www.programiz.com/python-programming/class">class</a> or <a href="https://www.programiz.com/python-programming/variables-constants-literals">variable</a>) from a module within a package would be as follows:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> Game.Level.start <span class="hljs-keyword">import</span> select_difficulty</code></pre>

<p>Now we can directly call this function.</p>

<pre style="max-height: 600px;"><code class="python hljs">select_difficulty(<span class="hljs-number">2</span>)</code></pre>

<p>Although easier, this method is not recommended. Using the full <a href="/python-programming/namespace">namespace</a> avoids confusion and prevents two same <a href="https://www.programiz.com/python-programming/keywords-identifier#identifiers">identifier</a> names from colliding.</p>

<p>While importing packages, Python looks in the list of directories defined in <code>sys.path</code>, similar as for <a href="/python-programming/modules#search">module search path</a>.</p>
</div>
</section>
<section id="five8">
<h1>Python Main function</h1>
<div class="content">
  <h2 id="what">What is the main() function in Python?</h2>

<p>Some programming languages have a special function called <code>main()</code> which is the execution point for a program file. Python interpreter, however, runs each line serially from the top of the file and has no explicit <code>main()</code> function.</p>

<p>Python offers other conventions to define the execution point. One of them is using the <code>main()</code> function and the <var>__name__</var> property of a python file.</p>

<hr>
<h2 id="__name__">What is __name__ in Python?</h2>

<p>The <var>__name__</var> variable is a special builtin Python variable that shows the name of the current module.</p>

<p>It has different values depending on where we execute the Python file. Let's look at an example.</p>

<hr>
<h2 id="run-script">Running Python File as a Script</h2>

<p>Suppose we have a Python file called <strong>helloworld.py</strong> with the following content:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(__name__)
</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>If we run <strong>helloworld.py</strong> from the command line, then it runs as a Python script. We can run the Python program using the following command:</p>

<pre><strong>$</strong> python helloworld.py</pre>

<p>When we run the program as a script, the value of the variable <var>__name__</var> is set to <samp>__main__</samp>. So the output of the following program will be:</p>

<pre><samp>__main__
</samp></pre>

<hr>
<h2 id="run-module">Running Python file as a Module</h2>

<p>We can also run a Python file as a module. For this, we have to import this file into another Python program. Let's look at an example.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Suppose we have a Python file called <strong>main.py</strong> in the same directory as the heloworld.py file. It has the following content:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> helloworld
</code></pre>

<p>When we run this file, we will have the following output:</p>

<pre><samp>helloworld
</samp></pre>

<p>Here, we can see that importing a module also runs all the code in the module file.</p>

<p>But, we can see that instead of displaying <samp>__main__</samp>, the program displays the name of the module i.e. <samp>helloworld</samp>.</p>

<p>It is because, in the context of running a Python file as a module, the name of the module itself is assigned to the <var>__name__</var> variable.</p>

<hr>
<h2 id="if">Using if conditional with __name__</h2>

<p>Now that we have understood how <var>__name__</var> variable is assigned values, we can use the <code>if</code> conditional clause to run the same Python file differently in different contexts.</p>

<p>Let's look at an example.</p>

<p>Suppose we change the content of the <strong>helloworld.py</strong> file to the following:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>:</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Hello World"</span>)

<span class="hljs-keyword">if</span> __name__==<span class="hljs-string">"__main__"</span>:
main()
</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Now, when we run it as a script via the command line, the output will be:</p>

<pre><samp>Hello World
</samp></pre>

<p>However, when we run it as a module by importing it in the <strong>main.py</strong> file, no output is displayed since the <code>main()</code> function is not called.</p>

<p>Here, we have created a custom <code>main()</code> function in the <strong>helloworld.py</strong> file. It is executed only when the program is run as a standalone script and not as an imported module.</p>

<p>This is the standard way to explicitly define the <code>main()</code> function in Python. It is one of the most popular use cases of <var>__name__</var> variable of a Python file.</p>

<p><strong>Also Read:</strong>
</p><ul>
<li><a href="https://www.programiz.com/python-programming/function">Python Functions</a></li>
</ul>
</div>
</section>

<!-- six menu sections -->
<section id="six1">
<h1>Python Directory and Files Management</h1>
<div class="content">
  <p id="introduction">A directory is a collection of <a href="/python-programming/file-operation">files</a> and subdirectories. A directory inside a directory is known as a subdirectory.</p>

<p>Python has the <code>os</code> <a href="/python-programming/modules">module</a> that provides us with many useful methods to work with directories (and files as well).</p>

<hr>
<h2 id="get">Get Current Directory in Python</h2>

<p>We can get the present working directory using the <code>getcwd()</code> method of the <code>os</code> module.</p>

<p>This method returns the current working directory in the form of a <a href="/python-programming/string">string</a>. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> os

<span class="hljs-keyword">print</span>(os.getcwd())

<span class="hljs-comment"># Output: C:\Program Files\PyScripter</span></code></pre>

<p>Here, <code>getcwd()</code> returns the current directory in the form of a string.</p>

<hr>
<h2 id="change">Changing Directory in Python</h2>

<p>In Python, we can change the current working directory by using the <code>chdir()</code> method.</p>

<p>The new path that we want to change into must be supplied as a string to this method. And we can use both the forward-slash <code>/</code> or the backward-slash <code>\</code> to separate the path elements.</p>

<p>Let's see an example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> os

<span class="hljs-comment"># change directory</span>
os.chdir(<span class="hljs-string">'C:\\Python33'</span>)

<span class="hljs-keyword">print</span>(os.getcwd())

Output: C:\Python33</code></pre>

<p>Here, we have used the <code>chdir()</code> method to change the current working directory and passed a new path as a string to <code>chdir()</code>.</p>

<hr>
<h2 id="list">List Directories and Files in Python</h2>

<p>All files and sub-directories inside a directory can be retrieved using the <code>listdir()</code> method.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>This method takes in a path and returns a list of subdirectories and files in that path.</p>

<p>If no path is specified, it returns the list of subdirectories and files from the current working directory.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> os

<span class="hljs-keyword">print</span>(os.getcwd())
C:\Python33

<span class="hljs-comment"># list all sub-directories</span>
os.listdir()
[<span class="hljs-string">'DLLs'</span>,
<span class="hljs-string">'Doc'</span>,
<span class="hljs-string">'include'</span>,
<span class="hljs-string">'Lib'</span>,
<span class="hljs-string">'libs'</span>,
<span class="hljs-string">'LICENSE.txt'</span>,
<span class="hljs-string">'NEWS.txt'</span>,
<span class="hljs-string">'python.exe'</span>,
<span class="hljs-string">'pythonw.exe'</span>,
<span class="hljs-string">'README.txt'</span>,
<span class="hljs-string">'Scripts'</span>,
<span class="hljs-string">'tcl'</span>,
<span class="hljs-string">'Tools'</span>]

os.listdir(<span class="hljs-string">'G:\\'</span>)
[<span class="hljs-string">'$RECYCLE.BIN'</span>,
<span class="hljs-string">'Movies'</span>,
<span class="hljs-string">'Music'</span>,
<span class="hljs-string">'Photos'</span>,
<span class="hljs-string">'Series'</span>,
<span class="hljs-string">'System Volume Information'</span>]</code></pre>

<hr>
<h2 id="making">Making a New Directory in Python</h2>

<p>In Python, we can make a new directory using the <code>mkdir()</code> method.</p>

<p>This method takes in the path of the new directory. If the full path is not specified, the new directory is created in the current working directory.</p>

<pre style="max-height: 600px;"><code class="python hljs">os.mkdir(<span class="hljs-string">'test'</span>)

os.listdir()
[<span class="hljs-string">'test'</span>]</code></pre>

<hr>
<h2 id="renaming">Renaming a Directory or a File</h2>

<p>The <code>rename()</code> method can rename a directory or a file.</p>

<p>For renaming any directory or file, <code>rename()</code> takes in two basic arguments:</p>

<ul>
<li>the old name as the first argument</li>
<li>the new name as the second argument.</li>
</ul>

<p>Let's see an example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> os

os.listdir()
[<span class="hljs-string">'test'</span>]

<span class="hljs-comment"># rename a directory</span>
os.rename(<span class="hljs-string">'test'</span>,<span class="hljs-string">'new_one'</span>)

os.listdir()
[<span class="hljs-string">'new_one'</span>]</code></pre>

<p>Here, <code>'test</code>' directory is renamed to <code>'new_one'</code> using the <code>rename()</code> method.</p>

<hr>
<h2 id="removing">Removing Directory or File in Python</h2>

<p>In Python, we can use the <code>remove()</code> method or the <code>rmdir()</code> method to remove a file or directory.</p>

<p>First let's use <code>remove()</code> to delete a file,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> os

<span class="hljs-comment"># delete "myfile.txt" file</span>
os.remove(<span class="hljs-string">"myfile.txt"</span>)</code></pre>

<p>Here, we have used the <code>remove()</code> method to remove the <code>"myfile.txt"</code> file.</p>

<p>Now let's use <code>rmdir()</code> to delete an empty directory,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> os

<span class="hljs-comment"># delete the empty directory "mydir"</span>
os.rmdir(<span class="hljs-string">"mydir"</span>) </code></pre>

<p>In order to remove a non-empty directory, we can use the <code>rmtree()</code> method inside the <code>shutil</code> module. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> shutil

<span class="hljs-comment"># delete "mydir" directory and all of its contents</span>
shutil.rmtree(<span class="hljs-string">"mydir"</span>)</code></pre>

<p>It's important to note that these functions permanently delete the files or directories, so we need to careful when using them.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/examples/current-working-directory">Python Program to Get the Full Path of the Current Working Directory</a></li>
</ul>
</div>
</section>
<section id="six2">
<h1>Python CSV: Read and Write CSV files</h1>
<div class="content">
  <p id="introduction">The CSV (Comma Separated Values) format is a common and straightforward way to store tabular data. To represent a CSV file, it should have the <code>.csv</code> file extension. </p>

<p>Now, let's proceed with an example of the info <code>.csv</code> file and its data.</p>

<pre style="max-height: 600px;"><code class="python hljs">SN, Name,    City
<span class="hljs-number">1</span>,  Michael, New Jersey
<span class="hljs-number">2</span>,  Jack,    California</code></pre>

<hr>
<h2 id="working">Working With CSV Files in Python</h2>

<p>Python provides a dedicated <code>csv</code> <a href="/python-programming/modules">module</a> to work with csv files. The module includes various methods to perform different operations.</p>

<p>However, we first need to import the module using:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv</code></pre>

<hr>
<h2 id="read-csv">Read CSV Files with Python</h2>

<p>The <code>csv</code> module provides the <code>csv.reader()</code> function to read a CSV file.</p>

<p>Suppose we have a <code>csv</code> file named <code>people.csv</code> with the following entries.</p>

<pre style="max-height: 600px;"><code class="python hljs">Name,   Age, Profession
Jack,   <span class="hljs-number">23</span>,  Doctor
Miller, <span class="hljs-number">22</span>,  Engineer</code></pre>

<p>Now, let's read this <code>csv</code> file.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv

<span class="hljs-keyword">with</span> open(<span class="hljs-string">'people.csv'</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> file:
reader = csv.reader(file)

<span class="hljs-keyword">for</span> row <span class="hljs-keyword">in</span> reader:
    <span class="hljs-keyword">print</span>(row)</code></pre>

<p><strong>Output</strong> </p>

<pre><samp>['Name', 'Age', 'Profession']
['Jack', '23', 'Doctor']
['Miller', '22', 'Engineer']</samp></pre>

<p>Here, we have opened the <strong>people.csv</strong> file in reading mode using:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">with</span> open(airtravel.csv<span class="hljs-string">', '</span><span class="hljs-string">r') as file:</span></code></pre>

<p>We then used the <code>csv.reader()</code> function to read the file. To learn more about reading csv files, <a href="/python-programming/reading-csv-files">Python Reading CSV Files</a>.</p>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Using <code>csv.DictReader()</code> for More Readable Code

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>The <code>csv.DictReader()</code> class can be used to read the CSV file into a dictionary, offering a more user-friendly and accessible method. </p>

<p>Suppose we want to read the following <code>people.csv</code> file.</p>

<pre style="max-height: 600px;"><code class="python hljs">Name,   Age, Profession
Jack,   <span class="hljs-number">23</span>,  Doctor
Miller, <span class="hljs-number">22</span>,  Engineer</code></pre>

<p>Now let's read this file.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'people.csv'</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> file:
csv_file = csv.DictReader(file)
<span class="hljs-keyword">for</span> row <span class="hljs-keyword">in</span> csv_file:
    <span class="hljs-keyword">print</span>(row)</code></pre>

<p><strong>Output</strong></p>

<pre><samp>{'SN': '1', ' Name': ' Michael', ' City': ' New Jersey'}
{'SN': '2', ' Name': ' Jack', ' City': ' California'}</samp></pre>

<p>In this example, we have read data from the <code>people.csv</code> file and print each row as a dictionary. </p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here, we used <code>csv.DictReader(file)</code>, which treats the first row of the CSV file as column headers and each subsequent row as a data record.</p>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="csv-writer">Write to CSV Files with Python </h2>

<p>The <code>csv</code> module provides the <code>csv.writer()</code> function to write to a CSV file.</p>

<p>Let's look at an example.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'protagonist.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
writer = csv.writer(file)
writer.writerow([<span class="hljs-string">"SN"</span>, <span class="hljs-string">"Movie"</span>, <span class="hljs-string">"Protagonist"</span>])
writer.writerow([<span class="hljs-number">1</span>, <span class="hljs-string">"Lord of the Rings"</span>, <span class="hljs-string">"Frodo Baggins"</span>])
writer.writerow([<span class="hljs-number">2</span>, <span class="hljs-string">"Harry Potter"</span>, <span class="hljs-string">"Harry Potter"</span>])</code></pre>

<p>When we run the above program, a <strong>protagonist.csv</strong> file is created with the following content:</p>

<pre><samp>SN,Movie,Protagonist
1,Lord of the Rings,Frodo Baggins
2,Harry Potter,Harry Potter</samp></pre>

<p>In this example, we have created the CSV file named <code>protagonist.csv</code> in the writing mode.</p>

<p>We then used the <code>csv.writer()</code> function to write to the file. To learn more about writing to a csv file, <a href="/python-programming/writing-csv-files">Python Writing CSV Files</a>.</p>

<p>Here, </p>

<ul>
<li><code>writer.writerow(["SN", "Movie", "Protagonist"])</code> writes the header row with column names to the CSV file.</li>
<li><code>writer.writerow([1, "Lord of the Rings", "Frodo Baggins"])</code> writes the first data row to the CSV file.</li>
<li><code>writer.writerow([2, "Harry Potter", "Harry Potter"])</code> writes the second data row to the CSV file.</li>
</ul>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Writing Dictionaries to CSV Files

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can use the <code>csv.DictWriter()</code> class to write dictionary data into a CSV file, which is useful for more structured data. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv

<span class="hljs-keyword">with</span> open(<span class="hljs-string">'players.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
fieldnames = [<span class="hljs-string">'player_name'</span>, <span class="hljs-string">'fide_rating'</span>]
writer = csv.DictWriter(file, fieldnames=fieldnames)

writer.writeheader()
writer.writerow({<span class="hljs-string">'player_name'</span>: <span class="hljs-string">'Magnus Carlsen'</span>, <span class="hljs-string">'fide_rating'</span>: <span class="hljs-number">2870</span>})
writer.writerow({<span class="hljs-string">'player_name'</span>: <span class="hljs-string">'Fabiano Caruana'</span>, <span class="hljs-string">'fide_rating'</span>: <span class="hljs-number">2822</span>})
writer.writerow({<span class="hljs-string">'player_name'</span>: <span class="hljs-string">'Ding Liren'</span>, <span class="hljs-string">'fide_rating'</span>: <span class="hljs-number">2801</span>})</code></pre>

<p>The program creates a players.csv file with the following entries:</p>

<pre style="max-height: 600px;"><code class="python hljs">player_name,fide_rating
Magnus Carlsen,<span class="hljs-number">2870</span>
Fabiano Caruana,<span class="hljs-number">2822</span>
Ding Liren,<span class="hljs-number">2801</span></code></pre>

<p>In this example, we have written data to the players.csv file using <code>csv.DictWriter(file, fieldnames=fieldnames)</code>. </p>

<p>The <code>writer.writeheader()</code> function writes these column headers to the first row of the file. </p>

<p>And each call to <code>writerow()</code> adds a new row to the CSV file, where each dictionary represents a record with <code>player_name</code> and <code>fide_rating</code> as keys corresponding to the columns.</p>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="pandas">Using Python Pandas to Handle CSV Files</h2>

<p><a href="https://dev.programiz.com/python-programming/pandas">Pandas</a> is a popular data science library in Python for data manipulation and analysis. </p>

<p>If we are working with huge chunks of data, it's better to use pandas to handle CSV files for ease and efficiency.</p>

<p class="note-tip"><strong>Note:</strong> Before we can use pandas, we need to install and import it. To learn more, visit <a href="/python-programming/pandas/introduction#install-pandas">Install and Import  Pandas</a>.</p>

<h3>Read CSV Files</h3>

<p>To read the CSV file using pandas, we can use the <a href="/python-programming/pandas/methods/read_csv">read_csv()</a> function.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> pandas <span class="hljs-keyword">as</span> pd
pd.read_csv(<span class="hljs-string">"people.csv"</span>)</code></pre>

<p>Here, the program reads <code>people.csv</code> from the current directory.</p>

<h3>Write to a CSV Files </h3>

<p>To write to a CSV file, we need to use the <a href="/python-programming/pandas/methods/to_csv">to_csv()</a> function of a DataFrame.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> pandas <span class="hljs-keyword">as</span> pd

<span class="hljs-comment"># creating a data frame</span>
df = pd.DataFrame([[<span class="hljs-string">'Jack'</span>, <span class="hljs-number">24</span>], [<span class="hljs-string">'Rose'</span>, <span class="hljs-number">22</span>]], columns = [<span class="hljs-string">'Name'</span>, <span class="hljs-string">'Age'</span>])

<span class="hljs-comment"># writing data frame to a CSV file</span>
df.to_csv(<span class="hljs-string">'person.csv'</span>)</code></pre>

<p>Here, we have created a DataFrame using the <code>pd.DataFrame()</code> method. Then, the <code>to_csv()</code> function for this object is called, to write into <code>person.csv</code>.</p>

<hr>
<p><strong>Also Read</strong></p>

<ul>
<li><a href="/python-programming/file-operation#open">Python File Operation</a></li>
</ul>

</div>
</section>
<section id="six3">
<h1>Reading CSV files in Python</h1>
<div class="content">
  <p>We are going to exclusively use the <code>csv</code> module built into Python for this task. But first, we will have to import the module as :</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
</code></pre>

<p>We have already covered the basics of how to use the <code>csv</code> module to read and write into CSV files. If you don't have any idea on using the <code>csv</code> module, check out our tutorial on <a href="/python-programming/csv" title="Python CSV module">Python CSV: Read and Write CSV files</a></p>

<hr>
<h2 id="basic-reader">Basic Usage of csv.reader()</h2>

<p>Let's look at a basic example of using <code>csv.reader()</code> to refresh your existing knowledge.</p>

<h3>Example 1: Read CSV files with csv.reader()</h3>

<p>Suppose we have a CSV file with the following entries:</p>

<pre><samp>SN,Name,Contribution
1,Linus Torvalds,Linux Kernel
2,Tim Berners-Lee,World Wide Web
3,Guido van Rossum,Python Programming
</samp></pre>

<p>We can read the contents of the file with the following program:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'innovators.csv'</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> file:
reader = csv.reader(file)
<span class="hljs-keyword">for</span> row <span class="hljs-keyword">in</span> reader:
    <span class="hljs-keyword">print</span>(row)
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>['SN', 'Name', 'Contribution']
['1', 'Linus Torvalds', 'Linux Kernel']
['2', 'Tim Berners-Lee', 'World Wide Web']
['3', 'Guido van Rossum', 'Python Programming']
</samp></pre>

<p>Here, we have opened the <strong>innovators.csv</strong> file in reading mode using <code>open()</code> function.</p>

<p>To learn more about opening files in Python, visit: <a href="/python-programming/file-operation" title="Python File I/O">Python File Input/Output</a></p>

<p>Then, the <code>csv.reader()</code> is used to read the file, which returns an iterable <code>reader</code> object.</p>

<p>The <code>reader</code> object is then iterated using a <code>for</code> loop to print the contents of each row.</p>

<hr>
<p>Now, we will look at CSV files with different formats. We will then learn how to customize the <code>csv.reader()</code> function to read them.</p>

<hr>
<h2 id="delimiter">CSV files with Custom Delimiters</h2>

<p>By default, a comma is used as a delimiter in a CSV file. However, some CSV files can use delimiters other than a comma. Few popular ones are <code>|</code> and <code>\t</code>.</p>

<p>Suppose the <strong>innovators.csv</strong> file in <strong>Example 1</strong> was using <strong>tab</strong> as a delimiter. To read the file, we can pass an additional <code>delimiter</code> parameter to the <code>csv.reader()</code> function.</p>

<p>Let's take an example.</p>

<h3>Example 2: Read CSV file Having Tab Delimiter</h3>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'innovators.csv'</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> file:
reader = csv.reader(file, delimiter = <span class="hljs-string">'\t'</span>)
<span class="hljs-keyword">for</span> row <span class="hljs-keyword">in</span> reader:
    <span class="hljs-keyword">print</span>(row)
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>['SN', 'Name', 'Contribution']
['1', 'Linus Torvalds', 'Linux Kernel']
['2', 'Tim Berners-Lee', 'World Wide Web']
['3', 'Guido van Rossum', 'Python Programming']
</samp></pre>

<p>As we can see, the optional parameter <code>delimiter = '\t'</code> helps specify the <code>reader</code> object that the CSV file we are reading from, has <strong>tabs</strong> as a delimiter.</p>

<hr>
<h2 id="initial-space">CSV files with initial spaces</h2>

<p>Some CSV files can have a space character after a delimiter. When we use the default <code>csv.reader()</code> function to read these CSV files, we will get spaces in the output as well.</p>

<p>To remove these initial spaces, we need to pass an additional parameter called <code>skipinitialspace</code>. Let us look at an example:</p>

<h3>Example 3: Read CSV files with initial spaces</h3>

<p>Suppose we have a CSV file called <strong>people.csv</strong> with the following content:</p>

<pre><samp>SN, Name, City
1, John, Washington
2, Eric, Los Angeles
3, Brad, Texas
</samp></pre>

<p>We can read the CSV file as follows:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'people.csv'</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> csvfile:
reader = csv.reader(csvfile, skipinitialspace=<span class="hljs-literal">True</span>)
<span class="hljs-keyword">for</span> row <span class="hljs-keyword">in</span> reader:
    <span class="hljs-keyword">print</span>(row)
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>['SN', 'Name', 'City']
['1', 'John', 'Washington']
['2', 'Eric', 'Los Angeles']
['3', 'Brad', 'Texas']
</samp></pre>

<p>The program is similar to other examples but has an additional <code>skipinitialspace</code> parameter which is set to True.</p>

<p>This allows the <code>reader</code> object to know that the entries have initial whitespace. As a result, the initial spaces that were present after a delimiter is removed.</p>

<hr>
<h2 id="quotes">CSV files with quotes</h2>

<p>Some CSV files can have quotes around each or some of the entries.</p>

<p>Let's take <strong>quotes.csv</strong> as an example, with the following entries:</p>

<pre><samp>"SN", "Name", "Quotes"
1, Buddha, "What we think we become"
2, Mark Twain, "Never regret anything that made you smile"
3, Oscar Wilde, "Be yourself everyone else is already taken"
</samp></pre>

<p>Using <code>csv.reader()</code> in minimal mode will result in output with the quotation marks.</p>

<p>In order to remove them, we will have to use another optional parameter called <code>quoting</code>.</p>

<p>Let's look at an example of how to read the above program.</p>

<h3>Example 4: Read CSV files with quotes</h3>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'person1.csv'</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> file:
reader = csv.reader(file, quoting=csv.QUOTE_ALL, skipinitialspace=<span class="hljs-literal">True</span>)
<span class="hljs-keyword">for</span> row <span class="hljs-keyword">in</span> reader:
    <span class="hljs-keyword">print</span>(row)
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>['SN', 'Name', 'Quotes']
['1', 'Buddha', 'What we think we become']
['2', 'Mark Twain', 'Never regret anything that made you smile']
['3', 'Oscar Wilde', 'Be yourself everyone else is already taken']
</samp></pre>

<p>As you can see, we have passed <code>csv.QUOTE_ALL</code> to the <code>quoting</code> parameter. It is a constant defined by the <code>csv</code> module.</p>

<p><code>csv.QUOTE_ALL</code> specifies the reader object that all the values in the CSV file are present inside quotation marks.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>There are 3 other predefined constants you can pass to the <code>quoting</code> parameter:</p>

<ul>
<li><code>csv.QUOTE_MINIMAL</code> - Specifies <code>reader</code> object that CSV file has quotes around those entries which contain special characters such as <strong>delimiter</strong>, <strong>quotechar</strong> or any of the characters in <strong>lineterminator</strong>.</li>
<li><code>csv.QUOTE_NONNUMERIC</code> - Specifies the <code>reader</code> object that the CSV file has quotes around the non-numeric entries.</li>
<li><code>csv.QUOTE_NONE</code> - Specifies the reader object that none of the entries have quotes around them.</li>
</ul>

<hr>
<h2 id="dialects">Dialects in CSV module</h2>

<p>Notice in <strong>Example 4</strong> that we have passed multiple parameters (<code>quoting</code> and <code>skipinitialspace</code>) to the <code>csv.reader()</code> function.</p>

<p>This practice is acceptable when dealing with one or two files. But it will make the code more redundant and ugly once we start working with multiple CSV files with similar formats.</p>

<p>As a solution to this, the <code>csv</code> module offers <code>dialect</code> as an optional parameter.</p>

<hr>
<p>Dialect helps in grouping together many specific formatting patterns like <code>delimiter</code>, <code>skipinitialspace</code>, <code>quoting</code>, <code>escapechar</code> into a single dialect name.</p>

<p>It can then be passed as a parameter to multiple <code>writer</code> or <code>reader</code> instances.</p>

<hr>
<h3>Example 5: Read CSV files using dialect</h3>

<p>Suppose we have a CSV file (<strong>office.csv</strong>) with the following content:</p>

<pre><samp>"ID"| "Name"| "Email"
"A878"| "Alfonso K. Hamby"| "alfonsokhamby@rhyta.com"
"F854"| "Susanne Briard"| "susannebriard@armyspy.com"
"E833"| "Katja Mauer"| "kmauer@jadoop.com"
</samp></pre>

<p>The CSV file has initial spaces, quotes around each entry, and uses a <code>|</code> delimiter.</p>

<p>Instead of passing three individual formatting patterns, let's look at how to use dialects to read this file.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
csv.register_dialect(<span class="hljs-string">'myDialect'</span>,
                 delimiter=<span class="hljs-string">'|'</span>,
                 skipinitialspace=<span class="hljs-literal">True</span>,
                 quoting=csv.QUOTE_ALL)

<span class="hljs-keyword">with</span> open(<span class="hljs-string">'office.csv'</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> csvfile:
reader = csv.reader(csvfile, dialect=<span class="hljs-string">'myDialect'</span>)
<span class="hljs-keyword">for</span> row <span class="hljs-keyword">in</span> reader:
    <span class="hljs-keyword">print</span>(row)
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>['ID', 'Name', 'Email']
["A878", 'Alfonso K. Hamby', 'alfonsokhamby@rhyta.com']
["F854", 'Susanne Briard', 'susannebriard@armyspy.com']
["E833", 'Katja Mauer', 'kmauer@jadoop.com']
</samp></pre>

<p>From this example, we can see that the <code>csv.register_dialect()</code> function is used to define a custom dialect. It has the following syntax:</p>

<pre style="max-height: 600px;"><code class="python hljs">csv.register_dialect(name[, dialect[, **fmtparams]])
</code></pre>

<p>The custom dialect requires a name in the form of a string. Other specifications can be done either by passing a sub-class of <code>Dialect</code> class, or by individual formatting patterns as shown in the example.</p>

<hr>
<p>While creating the reader object, we pass <code>dialect='myDialect'</code> to specify that the reader instance must use that particular dialect.</p>

<p>The advantage of using <code>dialect</code> is that it makes the program more modular. Notice that we can reuse <var>'myDialect'</var> to open other files without having to re-specify the CSV format.</p>

<hr>
<h2 id="dictreader">Read CSV files with csv.DictReader()</h2>

<p>The objects of a <code>csv.DictReader()</code> class can be used to read a CSV file as a dictionary.</p>

<h3>Example 6: Python csv.DictReader()</h3>

<p>Suppose we have a CSV file (<strong>people.csv</strong>) with the following entries:</p>

<div class="table-responsive"><table border="0">
<tbody>
<tr>
  <th>Name</th>
  <th>Age</th>
  <th>Profession</th>
</tr>
<tr>
  <td>Jack</td>
  <td>23</td>
  <td>Doctor</td>
</tr>
<tr>
  <td>Miller</td>
  <td>22</td>
  <td>Engineer</td>
</tr>
</tbody>
</table></div>

<p>Let's see how <code>csv.DictReader()</code> can be used.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
<span class="hljs-keyword">with</span> open(<span class="hljs-string">"people.csv"</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> file:
csv_file = csv.DictReader(file)
<span class="hljs-keyword">for</span> row <span class="hljs-keyword">in</span> csv_file:
    <span class="hljs-keyword">print</span>(dict(row))
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>{'Name': 'Jack', ' Age': ' 23', ' Profession': ' Doctor'}
{'Name': 'Miller', ' Age': ' 22', ' Profession': ' Engineer'}
</samp></pre>

<p>As we can see, the entries of the first row are the dictionary keys. And, the entries in the other rows are the dictionary values.</p>

<p>Here, <var>csv_file</var> is a <code>csv.DictReader()</code> object. The object can be iterated over using a <code>for</code> loop. The <code>csv.DictReader()</code> returned an <code>OrderedDict</code> type for each row. That's why we used <code>dict()</code> to convert each row to a dictionary.</p>

<p>Notice that we have explicitly used the <a href="/python-programming/methods/built-in/dict" title="Python dict() method">dict() method</a> to create dictionaries inside the <code>for</code> loop.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(dict(row))
</code></pre>

<p><strong>Note</strong>: Starting from Python 3.8, <code>csv.DictReader()</code> returns a dictionary for each row, and we do not need to use <code>dict()</code> explicitly.</p>

<hr>
<p>The full syntax of the <code>csv.DictReader()</code> class is:</p>

<pre style="max-height: 600px;"><code class="python hljs">csv.DictReader(file, fieldnames=<span class="hljs-literal">None</span>, restkey=<span class="hljs-literal">None</span>, restval=<span class="hljs-literal">None</span>, dialect=<span class="hljs-string">'excel'</span>, *args, **kwds)
</code></pre>

<p>To learn more about it in detail, visit: <a href="https://docs.python.org/3/library/csv.html#csv.DictReader">Python csv.DictReader() class</a></p>

<hr>
<h2 id="csv-sniffer">Using csv.Sniffer class</h2>

<p>The <code>Sniffer</code> class is used to deduce the format of a CSV file.</p>

<p>The <code>Sniffer</code> class offers two methods:</p>

<ul>
<li><code>sniff(sample, delimiters=None)</code> - This function analyses a given sample of the CSV text and returns a <code>Dialect</code> subclass that contains all the parameters deduced.</li>
</ul>

<p>An optional delimiters parameter can be passed as a string containing possible valid delimiter characters.</p>

<ul>
<li><code>has_header(sample)</code> - This function returns <code>True</code> or <code>False</code> based on analyzing whether the sample CSV has the first row as column headers.</li>
</ul>

<hr>
<p>Let's look at an example of using these functions:</p>

<h3>Example 7: Using csv.Sniffer() to deduce the dialect of CSV files</h3>

<p>Suppose we have a CSV file (<strong>office.csv</strong>) with the following content:</p>

<pre><samp>"ID"| "Name"| "Email"
A878| "Alfonso K. Hamby"| "alfonsokhamby@rhyta.com"
F854| "Susanne Briard"| "susannebriard@armyspy.com"
E833| "Katja Mauer"| "kmauer@jadoop.com"
</samp></pre>

<p>Let's look at how we can deduce the format of this file using <code>csv.Sniffer()</code> class:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'office.csv'</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> csvfile:
sample = csvfile.read(<span class="hljs-number">64</span>)
has_header = csv.Sniffer().has_header(sample)
<span class="hljs-keyword">print</span>(has_header)

deduced_dialect = csv.Sniffer().sniff(sample)

<span class="hljs-keyword">with</span> open(<span class="hljs-string">'office.csv'</span>, <span class="hljs-string">'r'</span>) <span class="hljs-keyword">as</span> csvfile:
reader = csv.reader(csvfile, deduced_dialect)

<span class="hljs-keyword">for</span> row <span class="hljs-keyword">in</span> reader:
    <span class="hljs-keyword">print</span>(row)
</code></pre>

<p><strong>Output </strong></p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-literal">True</span>
[<span class="hljs-string">'ID'</span>, <span class="hljs-string">'Name'</span>, <span class="hljs-string">'Email'</span>]
[<span class="hljs-string">'A878'</span>, <span class="hljs-string">'Alfonso K. Hamby'</span>, <span class="hljs-string">'alfonsokhamby@rhyta.com'</span>]
[<span class="hljs-string">'F854'</span>, <span class="hljs-string">'Susanne Briard'</span>, <span class="hljs-string">'susannebriard@armyspy.com'</span>]
[<span class="hljs-string">'E833'</span>, <span class="hljs-string">'Katja Mauer'</span>, <span class="hljs-string">'kmauer@jadoop.com'</span>]
</code></pre>

<p>As you can see, we read only 64 characters of <strong>office.csv</strong> and stored it in the <var>sample</var> variable.</p>

<p>This <var>sample</var> was then passed as a parameter to the <code>Sniffer().has_header()</code> function. It deduced that the first row must have column headers. Thus, it returned <code>True</code> which was then printed out.</p>

<p>Similarly, <var>sample</var> was also passed to the <code>Sniffer().sniff()</code> function. It returned all the deduced parameters as a <code>Dialect</code> subclass which was then stored in the <var>deduced_dialect</var> variable.</p>

<p>Later, we re-opened the CSV file and passed the <code>deduced_dialect</code> variable as a parameter to <code>csv.reader()</code>.</p>

<p>It was correctly able to predict <code>delimiter</code>, <code>quoting</code> and <code>skipinitialspace</code> parameters in the <strong>office.csv</strong> file without us explicitly mentioning them.</p>

<hr>
<p class="note-tip"><strong>Note:</strong> The csv module can also be used for other file extensions (like: <strong>.txt</strong>) as long as their contents are in proper structure.</p>

<p><strong>Recommended Reading:</strong> <a href="/python-programming/writing-csv-files" title="Python write to CSV files">Write to CSV Files in Python</a></p>
</div>
</section>
<section id="six4">
<h1>Writing CSV files in Python</h1>
<div class="content">
  <p>We are going to exclusively use the <code>csv</code> module built into Python for this task. But first, we will have to import the module as :</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
</code></pre>

<p>We have already covered the basics of how to use the <code>csv</code> module to read and write into CSV files. If you don't have any idea on using the <code>csv</code> module, check out our tutorial on <a href="/python-programming/csv" title="Python CSV">Python CSV: Read and Write CSV files</a></p>

<hr>
<h2 id="basic-writer">Basic Usage of csv.writer()</h2>

<p>Let's look at a basic example of using <code>csv.</code><code>writer</code><code>()</code> to refresh your existing knowledge.</p>

<h3>Example 1: Write into CSV files with csv.writer()</h3>

<p>Suppose we want to write a CSV file with the following entries:</p>

<pre><samp>SN,Name,Contribution
1,Linus Torvalds,Linux Kernel
2,Tim Berners-Lee,World Wide Web
3,Guido van Rossum,Python Programming
</samp></pre>

<p>Here's how we do it.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'innovators.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
writer = csv.writer(file)
writer.writerow([<span class="hljs-string">"SN"</span>, <span class="hljs-string">"Name"</span>, <span class="hljs-string">"Contribution"</span>])
writer.writerow([<span class="hljs-number">1</span>, <span class="hljs-string">"Linus Torvalds"</span>, <span class="hljs-string">"Linux Kernel"</span>])
writer.writerow([<span class="hljs-number">2</span>, <span class="hljs-string">"Tim Berners-Lee"</span>, <span class="hljs-string">"World Wide Web"</span>])
writer.writerow([<span class="hljs-number">3</span>, <span class="hljs-string">"Guido van Rossum"</span>, <span class="hljs-string">"Python Programming"</span>])
</code></pre>

<p>When we run the above program, an <strong>innovators.csv</strong> file is created in the current working directory with the given entries.</p>

<p>Here, we have opened the <strong>innovators.csv</strong> file in writing mode using <code>open()</code> function.</p>

<p>To learn more about opening files in Python, visit: <a href="/python-programming/file-operation" title="Python File I/O">Python File Input/Output</a></p>

<p>Next, the <code>csv.writer()</code> function is used to create a <code>writer</code> object. The <code>writer.writerow()</code> function is then used to write single rows to the CSV file.</p>

<hr>
<h3>Example 2: Writing Multiple Rows with writerows()</h3>

<p>If we need to write the contents of the 2-dimensional list to a CSV file, here's how we can do it.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
row_list = [[<span class="hljs-string">"SN"</span>, <span class="hljs-string">"Name"</span>, <span class="hljs-string">"Contribution"</span>],
         [<span class="hljs-number">1</span>, <span class="hljs-string">"Linus Torvalds"</span>, <span class="hljs-string">"Linux Kernel"</span>],
         [<span class="hljs-number">2</span>, <span class="hljs-string">"Tim Berners-Lee"</span>, <span class="hljs-string">"World Wide Web"</span>],
         [<span class="hljs-number">3</span>, <span class="hljs-string">"Guido van Rossum"</span>, <span class="hljs-string">"Python Programming"</span>]]
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'protagonist.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
writer = csv.writer(file)
writer.writerows(row_list)
</code></pre>

<p>The output of the program is the same as in <strong>Example 1</strong>.</p>

<p>Here, our 2-dimensional list is passed to the <code>writer.writerows()</code> function to write the content of the list to the CSV file.</p>

<hr>
<p>Now let's see how we can write CSV files in different formats. We will then learn how to customize the <code>csv.writer()</code> function to write them.</p>

<hr>
<h2 id="delimiter">CSV Files with Custom Delimiters</h2>

<p>By default, a comma is used as a delimiter in a CSV file. However, some CSV files can use delimiters other than a comma. Few popular ones are <code>|</code> and <code>\t</code>.</p>

<p>Suppose we want to use <code>|</code> as a delimiter in the <strong>innovators.csv</strong> file of <strong>Example 1</strong>. To write this file, we can pass an additional <code>delimiter</code> parameter to the <code>csv.writer()</code> function.</p>

<p>Let's take an example.</p>

<h3>Example 3: Write CSV File Having Pipe Delimiter</h3>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
data_list = [[<span class="hljs-string">"SN"</span>, <span class="hljs-string">"Name"</span>, <span class="hljs-string">"Contribution"</span>],
         [<span class="hljs-number">1</span>, <span class="hljs-string">"Linus Torvalds"</span>, <span class="hljs-string">"Linux Kernel"</span>],
         [<span class="hljs-number">2</span>, <span class="hljs-string">"Tim Berners-Lee"</span>, <span class="hljs-string">"World Wide Web"</span>],
         [<span class="hljs-number">3</span>, <span class="hljs-string">"Guido van Rossum"</span>, <span class="hljs-string">"Python Programming"</span>]]
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'innovators.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
writer = csv.writer(file, delimiter=<span class="hljs-string">'|'</span>)
writer.writerows(data_list)
</code></pre>

<p><strong>Output</strong></p>

<pre><samp>SN|Name|Contribution
1|Linus Torvalds|Linux Kernel
2|Tim Berners-Lee|World Wide Web
3|Guido van Rossum|Python Programming
</samp></pre>

<p>As we can see, the optional parameter <code>delimiter = '|'</code> helps specify the <code>writer</code> object that the CSV file should have <code>|</code> as a delimiter.</p>

<hr>
<h2 id="quotes">CSV files with Quotes</h2>

<p>Some CSV files have quotes around each or some of the entries.</p>

<p>Let's take <strong>quotes.csv</strong> as an example, with the following entries:</p>

<pre><samp>"SN";"Name";"Quotes"
1;"Buddha";"What we think we become"
2;"Mark Twain";"Never regret anything that made you smile"
3;"Oscar Wilde";"Be yourself everyone else is already taken"
</samp></pre>

<p>Using <code>csv.writer()</code> by default will not add these quotes to the entries.</p>

<p>In order to add them, we will have to use another optional parameter called <code>quoting</code>.</p>

<p>Let's take an example of how quoting can be used around the non-numeric values and <code>;</code> as delimiters.</p>

<h3>Example 4: Write CSV files with quotes</h3>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
row_list = [
[<span class="hljs-string">"SN"</span>, <span class="hljs-string">"Name"</span>, <span class="hljs-string">"Quotes"</span>],
[<span class="hljs-number">1</span>, <span class="hljs-string">"Buddha"</span>, <span class="hljs-string">"What we think we become"</span>],
[<span class="hljs-number">2</span>, <span class="hljs-string">"Mark Twain"</span>, <span class="hljs-string">"Never regret anything that made you smile"</span>],
[<span class="hljs-number">3</span>, <span class="hljs-string">"Oscar Wilde"</span>, <span class="hljs-string">"Be yourself everyone else is already taken"</span>]
]
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'quotes.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
writer = csv.writer(file, quoting=csv.QUOTE_NONNUMERIC, delimiter=<span class="hljs-string">';'</span>)
writer.writerows(row_list)
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>"SN";"Name";"Quotes"
1;"Buddha";"What we think we become"
2;"Mark Twain";"Never regret anything that made you smile"
3;"Oscar Wilde";"Be yourself everyone else is already taken"
</samp></pre>

<p>Here, the <strong>quotes.csv</strong> file is created in the working directory with the above entries.<samp> </samp></p>

<p>As you can see, we have passed <code>csv.QUOTE_NONNUMERIC</code> to the <code>quoting</code> parameter. It is a constant defined by the <code>csv</code> module.</p>

<p><code>csv.QUOTE_NONNUMERIC</code> specifies the <code>writer</code> object that quotes should be added around the non-numeric entries.</p>

<p>There are 3 other predefined constants you can pass to the <code>quoting</code> parameter:</p>

<ul>
<li><code>csv.QUOTE_ALL</code> - Specifies the <code>writer</code> object to write CSV file with quotes around all the entries.</li>
<li><code>csv.QUOTE_MINIMAL</code> - Specifies the <code>writer</code> object to only quote those fields which contain special characters (<strong>delimiter</strong>, <strong>quotechar</strong> or any characters in <strong>lineterminator</strong>)</li>
<li><code>csv.QUOTE_NONE</code> - Specifies the <code>writer</code> object that none of the entries should be quoted. It is the default value.</li>
</ul>

<hr>
<h2 id="quotechar">CSV files with custom quoting character</h2>

<p>We can also write CSV files with custom quoting characters. For that, we will have to use an optional parameter called <code>quotechar</code>.</p>

<p>Let's take an example of writing <strong>quotes.csv</strong> file in <strong>Example 4</strong>, but with <code>*</code> as the quoting character.</p>

<h3>Example 5: Writing CSV files with custom quoting character</h3>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
row_list = [
[<span class="hljs-string">"SN"</span>, <span class="hljs-string">"Name"</span>, <span class="hljs-string">"Quotes"</span>],
[<span class="hljs-number">1</span>, <span class="hljs-string">"Buddha"</span>, <span class="hljs-string">"What we think we become"</span>],
[<span class="hljs-number">2</span>, <span class="hljs-string">"Mark Twain"</span>, <span class="hljs-string">"Never regret anything that made you smile"</span>],
[<span class="hljs-number">3</span>, <span class="hljs-string">"Oscar Wilde"</span>, <span class="hljs-string">"Be yourself everyone else is already taken"</span>]
]
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'quotes.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
writer = csv.writer(file, quoting=csv.QUOTE_NONNUMERIC,
                    delimiter=<span class="hljs-string">';'</span>, quotechar=<span class="hljs-string">'*'</span>)
writer.writerows(row_list)
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>*SN*;*Name*;*Quotes*
1;*Buddha*;*What we think we become*
2;*Mark Twain*;*Never regret anything that made you smile*
3;*Oscar Wilde*;*Be yourself everyone else is already taken*
</samp></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here, we can see that <code>quotechar='*'</code> parameter instructs the <code>writer</code> object to use <code>*</code> as quote for all non-numeric values.</p>

<hr>
<h2 id="dialects">Dialects in CSV module</h2>

<p>Notice in <strong>Example 5</strong> that we have passed multiple parameters (<code>quoting</code>, <code>delimiter</code> and <code>quotechar</code>) to the <code>csv.writer()</code> function.</p>

<p>This practice is acceptable when dealing with one or two files. But it will make the code more redundant and ugly once we start working with multiple CSV files with similar formats.</p>

<p>As a solution to this, the <code>csv</code> module offers <code>dialect</code> as an optional parameter.</p>

<hr>
<p>Dialect helps in grouping together many specific formatting patterns like <code>delimiter</code>, <code>skipinitialspace</code>, <code>quoting</code>, <code>escapechar</code> into a single dialect name.</p>

<p>It can then be passed as a parameter to multiple <code>writer</code> or <code>reader</code> instances.</p>

<hr>
<h3>Example 6: Write CSV file using dialect</h3>

<p>Suppose we want to write a CSV file (<strong>office.csv</strong>) with the following content:</p>

<pre><samp>"ID"|"Name"|"Email"
"A878"|"Alfonso K. Hamby"|"alfonsokhamby@rhyta.com"
"F854"|"Susanne Briard"|"susannebriard@armyspy.com"
"E833"|"Katja Mauer"|"kmauer@jadoop.com"
</samp></pre>

<p>The CSV file has quotes around each entry and uses <code>|</code> as a delimiter.</p>

<p>Instead of passing two individual formatting patterns, let's look at how to use dialects to write this file.</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
row_list = [
[<span class="hljs-string">"ID"</span>, <span class="hljs-string">"Name"</span>, <span class="hljs-string">"Email"</span>],
[<span class="hljs-string">"A878"</span>, <span class="hljs-string">"Alfonso K. Hamby"</span>, <span class="hljs-string">"alfonsokhamby@rhyta.com"</span>],
[<span class="hljs-string">"F854"</span>, <span class="hljs-string">"Susanne Briard"</span>, <span class="hljs-string">"susannebriard@armyspy.com"</span>],
[<span class="hljs-string">"E833"</span>, <span class="hljs-string">"Katja Mauer"</span>, <span class="hljs-string">"kmauer@jadoop.com"</span>]
]
csv.register_dialect(<span class="hljs-string">'myDialect'</span>,
                 delimiter=<span class="hljs-string">'|'</span>,
                 quoting=csv.QUOTE_ALL)
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'office.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
writer = csv.writer(file, dialect=<span class="hljs-string">'myDialect'</span>)
writer.writerows(row_list)
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>"ID"|"Name"|"Email"
"A878"|"Alfonso K. Hamby"|"alfonsokhamby@rhyta.com"
"F854"|"Susanne Briard"|"susannebriard@armyspy.com"
"E833"|"Katja Mauer"|"kmauer@jadoop.com"
</samp></pre>

<p>Here, <strong>office.csv</strong> is created in the working directory with the above contents.</p>

<p>From this example, we can see that the <code>csv.register_dialect()</code> function is used to define a custom dialect. Its syntax is:</p>

<pre style="max-height: 600px;"><code class="python hljs">csv.register_dialect(name[, dialect[, **fmtparams]])
</code></pre>

<p>The custom dialect requires a name in the form of a string. Other specifications can be done either by passing a sub-class of the <code>Dialect</code> class, or by individual formatting patterns as shown in the example.</p>

<hr>
<p>While creating the <code>writer</code> object, we pass <code>dialect='myDialect'</code> to specify that the writer instance must use that particular dialect.</p>

<p>The advantage of using <code>dialect</code> is that it makes the program more modular. Notice that we can reuse <strong>myDialect</strong> to write other CSV files without having to re-specify the CSV format.</p>

<hr>
<h2 id="dictwriter">Write CSV files with csv.DictWriter()</h2>

<p>The objects of <code>csv.DictWriter()</code> class can be used to write to a CSV file from a Python dictionary.</p>

<p>The minimal syntax of the <code>csv.DictWriter()</code> class is:</p>

<pre style="max-height: 600px;"><code class="python hljs">csv.DictWriter(file, fieldnames)
</code></pre>

<p>Here,</p>

<ul>
<li><code>file</code> - CSV file where we want to write to</li>
<li><code>fieldnames</code> - a <code>list</code> object which should contain the column headers specifying the order in which data should be written in the CSV file</li>
</ul>

<h3>Example 7: Python csv.DictWriter()</h3>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv

<span class="hljs-keyword">with</span> open(<span class="hljs-string">'players.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
fieldnames = [<span class="hljs-string">'player_name'</span>, <span class="hljs-string">'fide_rating'</span>]
writer = csv.DictWriter(file, fieldnames=fieldnames)

writer.writeheader()
writer.writerow({<span class="hljs-string">'player_name'</span>: <span class="hljs-string">'Magnus Carlsen'</span>, <span class="hljs-string">'fide_rating'</span>: <span class="hljs-number">2870</span>})
writer.writerow({<span class="hljs-string">'player_name'</span>: <span class="hljs-string">'Fabiano Caruana'</span>, <span class="hljs-string">'fide_rating'</span>: <span class="hljs-number">2822</span>})
writer.writerow({<span class="hljs-string">'player_name'</span>: <span class="hljs-string">'Ding Liren'</span>, <span class="hljs-string">'fide_rating'</span>: <span class="hljs-number">2801</span>})
</code></pre>

<p><strong>Output</strong></p>

<p>The program creates a <strong>players.csv</strong> file with the following entries:</p>

<pre><samp>player_name,fide_rating
Magnus Carlsen,2870
Fabiano Caruana,2822
Ding Liren,2801
</samp></pre>

<hr>
<p>The full syntax of the <code>csv.DictWriter()</code> class is:</p>

<pre style="max-height: 600px;"><code class="python hljs">csv.DictWriter(f, fieldnames, restval=<span class="hljs-string">''</span>, extrasaction=<span class="hljs-string">'raise'</span>, dialect=<span class="hljs-string">'excel'</span>, *args, **kwds)
</code></pre>

<p>To learn more about it in detail, visit: <a href="https://docs.python.org/3/library/csv.html#csv.DictWriter" title="Python csv.DictWriter()">Python csv.DictWriter() class</a></p>

<hr>
<h2 id="lineterminator">CSV files with lineterminator</h2>

<p>A <code>lineterminator</code> is a string used to terminate lines produced by <code>writer</code> objects. The default value is <code>\r\n</code>. You can change its value by passing any string as a <code>lineterminator</code> parameter.</p>

<p>However, the <code>reader</code> object only recognizes <code>\n</code> or <code>\r</code> as <code>lineterminator</code> values. So using other characters as line terminators is highly discouraged.</p>

<hr>
<h2 id="esc-double">doublequote &amp; escapechar in CSV module</h2>

<p>In order to separate delimiter characters in the entries, the <code>csv</code> module by default quotes the entries using quotation marks.</p>

<p>So, if you had an entry: <samp>He is a strong, healthy man</samp>, it will be written as: <samp>"He is a strong, healthy man"</samp>.</p>

<p>Similarly, the <code>csv</code> module uses double quotes in order to escape the quote character present in the entries by default.</p>

<p>If you had an entry: <samp>Go to "programiz.com"</samp>, it would be written as: <samp>"Go to ""programiz.com"""</samp>.</p>

<p>Here, we can see that each <code>"</code> is followed by a <code>"</code> to escape the previous one.</p>

<hr>
<h3>doublequote</h3>

<p>It handles how <code>quotechar</code> present in the entry themselves are quoted. When <code>True</code>, the quoting character is doubled and when <code>False</code>, the <code>escapechar</code> is used as a prefix to the <code>quotechar</code>. By default its value is <code>True</code>.</p>

<h3>escapechar</h3>

<p><code>escapechar</code> parameter is a string to escape the delimiter if quoting is set to <code>csv.QUOTE_NONE</code> and quotechar if doublequote is <code>False</code>. Its default value is None.</p>

<h3>Example 8: Using escapechar in csv writer</h3>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> csv
row_list = [
[<span class="hljs-string">'Book'</span>, <span class="hljs-string">'Quote'</span>],
[<span class="hljs-string">'Lord of the Rings'</span>,
    <span class="hljs-string">'"All we have to decide is what to do with the time that is given us."'</span>],
[<span class="hljs-string">'Harry Potter'</span>, <span class="hljs-string">'"It matters not what someone is born, but what they grow to be."'</span>]
]
<span class="hljs-keyword">with</span> open(<span class="hljs-string">'book.csv'</span>, <span class="hljs-string">'w'</span>, newline=<span class="hljs-string">''</span>) <span class="hljs-keyword">as</span> file:
writer = csv.writer(file, escapechar=<span class="hljs-string">'/'</span>, quoting=csv.QUOTE_NONE)
writer.writerows(row_list)
</code></pre>

<p><strong>Output </strong></p>

<pre><samp>Book,Quote
Lord of the Rings,/"All we have to decide is what to do with the time that is given us./"
Harry Potter,/"It matters not what someone is born/, but what they grow to be./"
</samp></pre>

<p>Here, we can see that <code>/</code> is prefix to all the <code>"</code> and <code>,</code> because we specified <code>quoting=csv.QUOTE_NONE</code>.</p>

<p>If it wasn't defined, then, the output would be:</p>

<pre><samp>Book,Quote
Lord of the Rings,"""All we have to decide is what to do with the time that is given us."""
Harry Potter,"""It matters not what someone is born, but what they grow to be."""
</samp></pre>

<p>Since we allow quoting, the entries with special characters(<code>"</code> in this case) are double-quoted. The entries with <code>delimiter</code> are also enclosed within quote characters.(Starting and closing quote characters)</p>

<p>The remaining quote characters are to escape the actual <code>"</code> present as part of the string, so that they are not interpreted as quotechar.</p>

<hr>
<p class="note-tip"><strong>Note:</strong> The csv module can also be used for other file extensions (like: <strong>.txt</strong>) as long as their contents are in proper structure.</p>

<p><strong>Recommended Reading:</strong> <a href="/python-programming/reading-csv-files" title="Python read CSV files">Read CSV Files in Python</a></p>
</div>
</section>

<!-- seven menu sections -->
<section id="seven1">
<h1>Python Exceptions</h1>
<div class="content">
  <p id="introduction">An exception is an unexpected event that occurs during program execution. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs">divide_by_zero = <span class="hljs-number">7</span> / <span class="hljs-number">0</span></code></pre>

<p>The above code causes an exception as it is not possible to divide a number by <strong>0</strong>.</p>

<p>Let's learn about Python Exceptions in detail.</p>

<hr>
<h2 id="logical">Python Logical Errors (Exceptions)</h2>

<p>Errors that occur at runtime (after passing the syntax test) are called <strong>exceptions</strong> or <strong>logical errors</strong>.</p>

<p>For instance, they occur when we</p>

<ul>
<li>try to open a file(for reading) that does not exist (<code>FileNotFoundError</code>)</li>
<li>try to divide a number by zero (<code>ZeroDivisionError</code>)</li>
<li>try to import a module that does not exist (<code>ImportError</code>) and so on.</li>
</ul>

<p>Whenever these types of runtime errors occur, Python creates an exception object.</p>

<p>If not handled properly, it prints a traceback to that error along with some details about why that error occurred.</p>

<p>Let's look at how Python treats these errors:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">divide_numbers = <span class="hljs-number">7</span> / <span class="hljs-number">0</span>
<span class="hljs-keyword">print</span>(divide_numbers)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Traceback (most recent call last):
File "&lt;string&gt;", line 1, in &lt;module&gt;
ZeroDivisionError: division by zero</samp></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here, while trying to divide <code>7 / 0</code>, the program throws a system exception <code>ZeroDivisionError</code></p>

<hr>
<h2 id="built-in">Python Built-in Exceptions</h2>

<p>Illegal operations can raise exceptions. There are plenty of built-in exceptions in Python that are raised when corresponding errors occur.</p>

<p>We can view all the built-in exceptions using the built-in <code>local()</code> function as follows:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(dir(locals()[<span class="hljs-string">'__builtins__'</span>]))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, <code>locals()['__builtins__']</code> will return a module of built-in exceptions, <a href="https://www.programiz.com/python-programming/function">functions</a>, and attributes and <code>dir</code> allows us to list these attributes as <a href="https://www.programiz.com/python-programming/string">strings</a>.</p>

<p>Some of the common built-in exceptions in Python programming along with the error that cause them are listed below:</p>

<div class="table-responsive">
<table border="0">
<tbody>
  <tr>
    <th>Exception</th>
    <th>Cause of Error</th>
  </tr>
  <tr>
    <td><code>AssertionError</code></td>
    <td>Raised when an <code>assert</code> statement fails.</td>
  </tr>
  <tr>
    <td><code>AttributeError</code></td>
    <td>Raised when attribute assignment or reference fails.</td>
  </tr>
  <tr>
    <td><code>EOFError</code></td>
    <td>Raised when the <code>input()</code> function hits end-of-file condition.</td>
  </tr>
  <tr>
    <td><code>FloatingPointError</code></td>
    <td>Raised when a floating point operation fails.</td>
  </tr>
  <tr>
    <td><code>GeneratorExit</code></td>
    <td>Raise when a generator's <code>close()</code> method is called.</td>
  </tr>
  <tr>
    <td><code>ImportError</code></td>
    <td>Raised when the imported module is not found.</td>
  </tr>
  <tr>
    <td><code>IndexError</code></td>
    <td>Raised when the index of a sequence is out of range.</td>
  </tr>
  <tr>
    <td><code>KeyError</code></td>
    <td>Raised when a key is not found in a dictionary.</td>
  </tr>
  <tr>
    <td><code>KeyboardInterrupt</code></td>
    <td>Raised when the user hits the interrupt key (<code>Ctrl+C</code> or <code>Delete</code>).</td>
  </tr>
  <tr>
    <td><code>MemoryError</code></td>
    <td>Raised when an operation runs out of memory.</td>
  </tr>
  <tr>
    <td><code>NameError</code></td>
    <td>Raised when a variable is not found in local or global scope.</td>
  </tr>
  <tr>
    <td><code>NotImplementedError</code></td>
    <td>Raised by abstract methods.</td>
  </tr>
  <tr>
    <td><code>OSError</code></td>
    <td>Raised when system operation causes system related error.</td>
  </tr>
  <tr>
    <td><code>OverflowError</code></td>
    <td>Raised when the result of an arithmetic operation is too large to be represented.</td>
  </tr>
  <tr>
    <td><code>ReferenceError</code></td>
    <td>Raised when a weak reference proxy is used to access a garbage collected referent.</td>
  </tr>
  <tr>
    <td><code>RuntimeError</code></td>
    <td>Raised when an error does not fall under any other category.</td>
  </tr>
  <tr>
    <td><code>StopIteration</code></td>
    <td>Raised by <code>next()</code> function to indicate that there is no further item to be returned by iterator.</td>
  </tr>
  <tr>
    <td><code>SyntaxError</code></td>
    <td>Raised by parser when syntax error is encountered.</td>
  </tr>
  <tr>
    <td><code>IndentationError</code></td>
    <td>Raised when there is incorrect indentation.</td>
  </tr>
  <tr>
    <td><code>TabError</code></td>
    <td>Raised when indentation consists of inconsistent tabs and spaces.</td>
  </tr>
  <tr>
    <td><code>SystemError</code></td>
    <td>Raised when interpreter detects internal error.</td>
  </tr>
  <tr>
    <td><code>SystemExit</code></td>
    <td>Raised by <code>sys.exit()</code> function.</td>
  </tr>
  <tr>
    <td><code>TypeError</code></td>
    <td>Raised when a function or operation is applied to an object of incorrect type.</td>
  </tr>
  <tr>
    <td><code>UnboundLocalError</code></td>
    <td>Raised when a reference is made to a local variable in a function or method, but no value has been bound to that variable.</td>
  </tr>
  <tr>
    <td><code>UnicodeError</code></td>
    <td>Raised when a Unicode-related encoding or decoding error occurs.</td>
  </tr>
  <tr>
    <td><code>UnicodeEncodeError</code></td>
    <td>Raised when a Unicode-related error occurs during encoding.</td>
  </tr>
  <tr>
    <td><code>UnicodeDecodeError</code></td>
    <td>Raised when a Unicode-related error occurs during decoding.</td>
  </tr>
  <tr>
    <td><code>UnicodeTranslateError</code></td>
    <td>Raised when a Unicode-related error occurs during translating.</td>
  </tr>
  <tr>
    <td><code>ValueError</code></td>
    <td>Raised when a function gets an argument of correct type but improper value.</td>
  </tr>
  <tr>
    <td><code>ZeroDivisionError</code></td>
    <td>Raised when the second operand of division or modulo operation is zero.</td>
  </tr>
</tbody>
</table>
</div>

<p>If required, we can also define our own exceptions in Python. To learn more about them, visit <a href="/python-programming/user-defined-exception">Python User-defined Exceptions</a>.</p>

<p>We can handle these built-in and user-defined exceptions in Python using <code>try</code>, <code>except</code> and <code>finally</code> statements. To learn more about them, visit <a href="/python-programming/exception-handling">Python try, except and finally statements</a>.</p>

<hr>
<h2 id="error-exception">Python Error and Exception</h2>

<p><strong>Errors</strong> represent conditions such as compilation error, syntax error, error in the logical part of the code, library incompatibility, infinite recursion, etc.</p>

<p>Errors are usually beyond the control of the programmer and we should not try to handle errors.</p>

<p><strong>Exceptions</strong> can be caught and handled by the program.</p>

<p>Now we know about exceptions, we will learn about handling exceptions in the next tutorial.</p>
</div>
</section>
<section id="seven2">
<h1>Python Exception Handling</h1>
<div class="content">
  <p id="introduction">In the last tutorial, we learned about <a href="/python-programming/exceptions">Python exceptions</a>. We know that exceptions abnormally terminate the execution of a program.</p>

<p>Since exceptions abnormally terminate the execution of a program, it is important to handle exceptions. In Python, we use the <code>try...except</code> block to handle exceptions.</p>

<hr>
<h2 id="try-except">Python try...except Block </h2>

<p>The <code>try...except</code> block is used to handle exceptions in Python. Here's the syntax of <code>try...except</code> block:</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">try</span>:
<span class="hljs-comment"># code that may cause exception</span>
<span class="hljs-keyword">except</span>:
<span class="hljs-comment"># code to run when exception occurs</span></code></pre>

<p>Here, we have placed the code that might generate an exception inside the <code>try</code> block. Every <code>try</code> block is followed by an <code>except</code> block.</p>

<p>When an exception occurs, it is caught by the <code>except</code> block. The <code>except</code> block cannot be used without the try block.</p>

<hr>
<h2>Example: Exception Handling Using try...except </h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">try</span>:
numerator = <span class="hljs-number">10</span>
denominator = <span class="hljs-number">0</span>

result = numerator/denominator

<span class="hljs-keyword">print</span>(result)
<span class="hljs-keyword">except</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Error: Denominator cannot be 0."</span>)

<span class="hljs-comment"># Output: Error: Denominator cannot be 0. </span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>In the example, we are trying to divide a number by <strong>0</strong>. Here, this code generates an exception.</p>

<p>To handle the exception, we have put the code, <code>result = numerator/denominator</code> inside the <code>try</code> block. Now when an exception occurs, the rest of the code inside the <code>try</code> block is skipped.</p>

<p>The <code>except</code> block catches the exception and statements inside the <code>except</code> block are executed.</p>

<p>If none of the statements in the <code>try</code> block generates an exception, the <code>except</code> block is skipped.</p>

<hr>
<h2 id="specific">Catching Specific Exceptions in Python</h2>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>For each <code>try</code> block, there can be zero or more <code>except</code> blocks. Multiple <code>except</code> blocks allow us to handle each exception differently.</p>

<p>The argument type of each <code>except</code> block indicates the type of exception that can be handled by it. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">try</span>:

even_numbers = [<span class="hljs-number">2</span>,<span class="hljs-number">4</span>,<span class="hljs-number">6</span>,<span class="hljs-number">8</span>]
<span class="hljs-keyword">print</span>(even_numbers[<span class="hljs-number">5</span>])

<span class="hljs-keyword">except</span> ZeroDivisionError:
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Denominator cannot be 0."</span>)

<span class="hljs-keyword">except</span> IndexError:
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Index Out of Bound."</span>)

<span class="hljs-comment"># Output: Index Out of Bound</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>In this example, we have created a <a href="/python-programming/list">list</a> named <var>even_numbers</var>.</p>

<p>Since the list index starts from <strong>0</strong>, the last element of the list is at index <strong>3</strong>. Notice the statement,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(even_numbers[<span class="hljs-number">5</span>])</code></pre>

<p>Here, we are trying to access a value to the index <strong>5</strong>. Hence, <code>IndexError</code> exception occurs.</p>

<p>When the <code>IndexError</code> exception occurs in the <code>try</code> block,</p>

<ul>
<li>The <code>ZeroDivisionError</code> exception is skipped.</li>
<li>The set of code inside the <code>IndexError</code> exception is executed.</li>
</ul>

<hr>
<h2 id="else">Python try with else clause</h2>

<p>In some situations, we might want to run a certain block of code if the code block inside <code>try</code> runs without any errors. </p>

<p>For these cases, you can use the optional <code>else</code> keyword with the <code>try</code> statement.</p>

<p>Let's look at an example:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># program to print the reciprocal of even numbers</span>

<span class="hljs-keyword">try</span>:
num = int(<span class="hljs-keyword">input</span>(<span class="hljs-string">"Enter a number: "</span>))
<span class="hljs-keyword">assert</span> num % <span class="hljs-number">2</span> == <span class="hljs-number">0</span>
<span class="hljs-keyword">except</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Not an even number!"</span>)
<span class="hljs-keyword">else</span>:
reciprocal = <span class="hljs-number">1</span>/num
<span class="hljs-keyword">print</span>(reciprocal)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<p>If we pass an odd number:</p>

<pre><samp>Enter a number: 1
Not an even number!</samp></pre>

<p>If we pass an even number, the reciprocal is computed and displayed.</p>

<pre><samp>Enter a number: 4
0.25</samp></pre>

<p>However, if we pass <strong>0</strong>, we get <code>ZeroDivisionError</code> as the code block inside <code>else</code> is not handled by preceding <code>except</code>.</p>

<pre><samp>Enter a number: 0
Traceback (most recent call last):
File "&lt;string&gt;", line 7, in &lt;module&gt;
reciprocal = 1/num
ZeroDivisionError: division by zero</samp></pre>

<p>Here, the <a href="/python-programming/assert-statement">assert</a> statement in the code checks that <code>num</code> is an even number; if num is odd, it raises an <code>AssertionError</code>, triggering the except block.</p>

<p class="note-tip"><strong>Note</strong>: Exceptions in the <code>else</code> clause are not handled by the preceding except clauses.</p>

<hr>
<h2 id="try">Python try...finally</h2>

<p>In Python, the <code>finally</code> block is always executed no matter whether there is an exception or not.</p>

<p>The <code>finally</code> block is optional. And, for each <code>try</code> block, there can be only one <code>finally</code> block.</p>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">try</span>:
numerator = <span class="hljs-number">10</span>
denominator = <span class="hljs-number">0</span>

result = numerator/denominator

<span class="hljs-keyword">print</span>(result)
<span class="hljs-keyword">except</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Error: Denominator cannot be 0."</span>)

<span class="hljs-keyword">finally</span>:
<span class="hljs-keyword">print</span>(<span class="hljs-string">"This is finally block."</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Error: Denominator cannot be 0.
This is finally block.</samp></pre>

<p>In the above example, we are dividing a number by <strong>0</strong> inside the <code>try</code> block. Here, this code generates an exception.</p>

<p>The exception is caught by the <code>except</code> block. And, then the <code>finally</code> block is executed.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/python-programming/exceptions">Python built-in Exception</a></li>
<li><a href="/python-programming/user-defined-exception">Python user-defined Exception</a> </li>
</ul>  </div>
</section>
<section id="seven3">
<h1>Python Custom Exceptions</h1>
<div class="content">
  <p id="introduction">In the previous tutorial, we learned about different <a href="/python-programming/exceptions#built-in">built-in exceptions</a> in Python and why it is important to handle <a href="https://www.programiz.com/python-programming/exceptions">exceptions</a>.</p>

<p>However, sometimes we may need to create our own custom exceptions that serve our purpose.</p>

<hr>
<h2 id="define">Defining Custom Exceptions</h2>

<p>In Python, we can define custom exceptions by creating a new class that is derived from the built-in <code>Exception</code> class.</p>

<p>Here's the syntax to define custom exceptions,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">CustomError</span><span class="hljs-params">(Exception)</span>:</span>
...
<span class="hljs-keyword">pass</span>

<span class="hljs-keyword">try</span>:
...

<span class="hljs-keyword">except</span> CustomError:
...</code></pre>

<p>Here, <code>CustomError</code> is a user-defined error which inherits from the <code>Exception</code> class.</p>

<div class="note-tip">
<p><strong>Note:</strong></p>

<ul>
<li>When we are developing a large Python program, it is a good practice to place all the user-defined exceptions that our program raises in a separate file.</li>
</ul>

<ul>
<li>Many standard modules define their exceptions separately as <code>exceptions.py</code> or <code>errors.py</code> (generally but not always).</li>
</ul>
</div>

<hr>
<h2>Example: Python User-Defined Exception</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># define Python user-defined exceptions</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">InvalidAgeException</span><span class="hljs-params">(Exception)</span>:</span>
<span class="hljs-string">"Raised when the input value is less than 18"</span>
<span class="hljs-keyword">pass</span>

<span class="hljs-comment"># you need to guess this number</span>
number = <span class="hljs-number">18</span>

<span class="hljs-keyword">try</span>:
input_num = int(<span class="hljs-keyword">input</span>(<span class="hljs-string">"Enter a number: "</span>))
<span class="hljs-keyword">if</span> input_num &lt; number:
    <span class="hljs-keyword">raise</span> InvalidAgeException
<span class="hljs-keyword">else</span>:
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Eligible to Vote"</span>)
    
<span class="hljs-keyword">except</span> InvalidAgeException:
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Exception occurred: Invalid Age"</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<p>If the user input <var>input_num</var> is greater than <strong>18</strong>,</p>

<pre><samp>Enter a number: 45
Eligible to Vote</samp></pre>

<p>If the user input <var>input_num</var> is smaller than <strong>18</strong>,</p>

<pre><samp>Enter a number: 14
Exception occurred: Invalid Age</samp></pre>

<p>In the above example, we have defined the custom exception <code>InvalidAgeException</code> by creating a new class that is derived from the built-in <code>Exception</code> class.</p>

<p>Here, when <var>input_num</var> is smaller than <strong>18</strong>, this code generates an exception.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>When an exception occurs, the rest of the code inside the <code>try</code> block is skipped.</p>

<p>The <code>except</code> block catches the user-defined <code>InvalidAgeException</code> exception and statements inside the <code>except</code> block are executed.</p>

<hr>
<h2 id="class-customize">Customizing Exception Classes</h2>

<p>We can further customize this class to accept other arguments as per our needs.</p>

<p>To learn about customizing the Exception classes, you need to have the basic knowledge of Object-Oriented programming.</p>

<p>Visit <a href="/python-programming/object-oriented-programming">Python Object Oriented Programming</a> to learn about Object-Oriented programming in Python.</p>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SalaryNotInRangeError</span><span class="hljs-params">(Exception)</span>:</span>
<span class="hljs-string">"""Exception raised for errors in the input salary.

Attributes:
    salary -- input salary which caused the error
    message -- explanation of the error
"""</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__init__</span><span class="hljs-params">(self, salary, message=<span class="hljs-string">"Salary is not in (5000, 15000) range"</span>)</span>:</span>
    self.salary = salary
    self.message = message
    super().__init__(self.message)


salary = int(<span class="hljs-keyword">input</span>(<span class="hljs-string">"Enter salary amount: "</span>))
<span class="hljs-keyword">if</span> <span class="hljs-keyword">not</span> <span class="hljs-number">5000</span> &lt; salary &lt; <span class="hljs-number">15000</span>:
<span class="hljs-keyword">raise</span> SalaryNotInRangeError(salary)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter salary amount: 2000
Traceback (most recent call last):
File "&lt;string&gt;", line 17, in &lt;module&gt;
raise SalaryNotInRangeError(salary)
__main__.SalaryNotInRangeError: Salary is not in (5000, 15000) range</samp></pre>

<p>Here, we have overridden the constructor of the <code>Exception</code> class to accept our own custom arguments <code>salary</code> and <code>message</code>.</p>

<p>Then, the constructor of the parent <code>Exception</code> class is called manually with the <code>self.message</code> argument using <code>super()</code>.</p>

<p>The custom <code>self.salary</code> attribute is defined to be used later.</p>

<p>The inherited <code>__str__</code> method of the <code>Exception</code> class is then used to display the corresponding message when <code>SalaryNotInRangeError</code> is raised.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/exception-handling">Python Exception Handling</a></li>
</ul>
</div>
</section>

<!-- eight menu sections -->
<section id="eight1">
<h1>Python Objects and Classes</h1>
<div class="content">
  <p id="introduction">In the last tutorial, we learned about <a href="/python-programming/object-oriented-programming">Python OOP</a>. We know that Python also supports the concept of objects and classes.</p>

<p>An object is simply a collection of data (<a href="/python-programming/variables-constants-literals">variables</a>) and methods (<a href="/python-programming/function">functions</a>). Similarly, a class is a blueprint for that object.</p>

<p>Before we learn about objects, let's first learn about classes in Python.</p>

<hr>
<h2 id="classes">Python Classes</h2>

<p>A class is considered a blueprint of objects. </p>

<p>We can think of the class as a sketch (prototype) of a house. It contains all the details about the floors, doors, windows, etc. </p>

<p>Based on these descriptions, we build the house; the house is the object.</p>

<p>Since many houses can be made from the same description, we can create many objects from a class.</p>

<hr>
<h2 id="define-class">Define Python Class</h2>

<p>We use the <code>class</code> <a href="/python-programming/keywords-identifier">keyword</a> to create a class in Python. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassName</span>:</span>
<span class="hljs-comment"># class definition </span></code></pre>

<p>Here, we have created a class named <code>ClassName</code>.</p>

<p>Let's see an example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Bike</span>:</span>
name = <span class="hljs-string">""</span>
gear = <span class="hljs-number">0</span></code></pre>

<p>Here,</p>

<ol>
<li><code>Bike</code> - the name of the class</li>
<li><code>name/gear</code> - variables inside the class with default values <code>""</code> and <strong>0</strong> respectively.</li>
</ol>

<p class="note-tip"><strong>Note</strong>: The variables inside a class are called attributes.</p>

<hr>
<h2 id="objects">Python Objects</h2>

<p>An object is called an instance of a class. </p>

<p>Suppose <code>Bike</code> is a class then we can create objects like <code>bike1</code>, <code>bike2</code>, etc from the class.</p>

<p>Here's the syntax to create an object.</p>

<pre style="max-height: 600px;"><code class="python hljs">objectName = ClassName()</code></pre>

<p>Let's see an example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># create class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Bike</span>:</span>
name = <span class="hljs-string">""</span>
gear = <span class="hljs-number">0</span>

<span class="hljs-comment"># create objects of class</span>
bike1 = Bike()</code></pre>

<p>Here, <code>bike1</code> is the object of the class. Now, we can use this object to access the class attributes.</p>

<hr>
<h2 id="access-attributes">Access Class Attributes Using Objects</h2>

<p>We use the <code>.</code> notation to access the attributes of a class. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># modify the name property</span>
bike1.name = <span class="hljs-string">"Mountain Bike"</span>

<span class="hljs-comment"># access the gear property</span>
bike1.gear</code></pre>

<p>Here, we have used <code>bike1.name</code> and <code>bike1.gear</code> to change and access the value of <var>name</var> and <var>gear</var> attributes, respectively.</p>

<hr>
<h2 id="class-object-example">Example 1: Python Class and Objects</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># define a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Bike</span>:</span>
name = <span class="hljs-string">""</span>
gear = <span class="hljs-number">0</span>

<span class="hljs-comment"># create object of class</span>
bike1 = Bike()

<span class="hljs-comment"># access attributes and assign new values</span>
bike1.gear = <span class="hljs-number">11</span>
bike1.name = <span class="hljs-string">"Mountain Bike"</span>

<span class="hljs-keyword">print</span>(<span class="hljs-string">f"Name: <span class="hljs-subst">{bike1.name}</span>, Gears: <span class="hljs-subst">{bike1.gear}</span> "</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Name: Mountain Bike, Gears: 11</samp></pre>

<p>In the above example, we have defined the class named <code>Bike</code> with two attributes: <var>name</var> and <var>gear</var>.</p>

<p>We have also created an object <code>bike1</code> of the class <code>Bike</code>.</p>

<p>Finally, we have accessed and modified the properties of an object using the <code>.</code> notation.</p>

<hr>
<h2 id="multiple-objects">Create Multiple Objects of Python Class</h2>

<p>We can also create multiple objects from a single class. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># define a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Employee</span>:</span>
<span class="hljs-comment"># define a property</span>
employee_id = <span class="hljs-number">0</span>

<span class="hljs-comment"># create two objects of the Employee class</span>
employee1 = Employee()
employee2 = Employee()

<span class="hljs-comment"># access property using employee1</span>
employee1.employeeID = <span class="hljs-number">1001</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">f"Employee ID: <span class="hljs-subst">{employee1.employeeID}</span>"</span>)

<span class="hljs-comment"># access properties using employee2</span>
employee2.employeeID = <span class="hljs-number">1002</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">f"Employee ID: <span class="hljs-subst">{employee2.employeeID}</span>"</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Employee ID: 1001
Employee ID: 1002</samp></pre>

<p>In the above example, we have created two objects <var>employee1</var> and <var>employee2</var> of the <code>Employee</code> class.</p>

<hr>
<h2 id="method">Python Methods</h2>

<p>We can also define a function inside a Python class. A Python function defined inside a class is called a <strong>method</strong>.</p>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># create a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Room</span>:</span>
length = <span class="hljs-number">0.0</span>
breadth = <span class="hljs-number">0.0</span>

<span class="hljs-comment"># method to calculate area</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">calculate_area</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Area of Room ="</span>, self.length * self.breadth)

<span class="hljs-comment"># create object of Room class</span>
study_room = Room()

<span class="hljs-comment"># assign values to all the properties </span>
study_room.length = <span class="hljs-number">42.5</span>
study_room.breadth = <span class="hljs-number">30.8</span>

<span class="hljs-comment"># access method inside class</span>
study_room.calculate_area()</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Area of Room = 1309.0</samp></pre>

<p>In the above example, we have created a class named <code>Room</code> with:</p>

<ol>
<li><strong>Attributes</strong>: <var>length</var> and <var>breadth</var></li>
<li><strong>Method</strong>: <code>calculate_area()</code></li>
</ol>

<p>Here, we have created an object named <code>study_room</code> from the <code>Room</code> class. </p>

<p>We then used the object to assign values to attributes: <var>length</var> and <var>breadth</var>.</p>

<p>Notice that we have also used the object to call the method inside the class,</p>

<pre style="max-height: 600px;"><code class="python hljs">study_room.calculate_area()</code></pre>

<p>Here, we have used the <code>.</code> notation to call the method. Finally, the statement inside the method is executed.</p>

<hr>
<h2 id="constructor">Python Constructors </h2>

<p>Earlier we assigned a default value to a class attribute,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Bike</span>:</span>
name = <span class="hljs-string">""</span>
...
<span class="hljs-comment"># create object</span>
bike1 = Bike()</code></pre>

<p>However, we can also initialize values using the constructors. For example,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Bike</span>:</span>

<span class="hljs-comment"># constructor function    </span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__init__</span><span class="hljs-params">(self, name = <span class="hljs-string">""</span>)</span>:</span>
    self.name = name

bike1 = Bike()</code></pre>

<p>Here, <code>__init__()</code> is the constructor function that is called whenever a new object of that class is instantiated.</p>

<p>The constructor above initializes the value of the <var>name</var> attribute. </p>

<p>We have used the <code>self.name</code> to refer to the <var>name</var> attribute of the <var>bike1</var> object.</p>

<p>If we use a constructor to initialize values inside a class, we need to pass the corresponding value during the object creation of the class.</p>

<pre style="max-height: 600px;"><code class="python hljs">bike1 = Bike(<span class="hljs-string">"Mountain Bike"</span>)</code></pre>

<p>Here, <code>"Mountain Bike"</code> is passed to the <var>name</var> parameter of <code>__init__()</code>.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/python-programming/inheritance">Python inheritance</a></li>
<li><a href="/python-programming/polymorphism">Polymorphism in Python</a></li>
<li><a href="/python-programming/methods/built-in/object">Python object()</a></li>
<li><a href="/python-programming/methods/built-in/classmethod">Python classmethod()</a></li>
</ul>

</div>
</section>
<section id="eight2">
<h1>Python Inheritance</h1>
<div class="content">
  <p id="introduction">Being an object-oriented language, Python supports class inheritance. It allows us to create a new class from an existing one.</p>

<ul>
<li>The newly created class is known as the <strong>subclass</strong> (child or derived class).</li>
<li>The existing class from which the child class inherits is known as the superclass (parent or base class).</li>
</ul>

<hr>
<h2 id="syntax">Python Inheritance Syntax</h2>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># define a superclass</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">super_class</span>:</span>
<span class="hljs-comment"># attributes and method definition</span>

<span class="hljs-comment"># inheritance</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">sub_class</span><span class="hljs-params">(super_class)</span>:</span>
<span class="hljs-comment"># attributes and method of super_class</span>
<span class="hljs-comment"># attributes and method of sub_class</span></code></pre>

<p>Here, we are inheriting the <code>sub_class</code> from the <code>super_class</code>.</p>

<p class="note-tip"><strong>Note</strong>: Before you move forward with inheritance, make sure you know how <a href="/python-programming/class">Python classes and objects</a> work.</p>

<hr>
<h3 id="example1">Example: Python Inheritance</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Animal</span>:</span>

<span class="hljs-comment"># attribute and method of the parent class</span>
name = <span class="hljs-string">""</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">eat</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"I can eat"</span>)

<span class="hljs-comment"># inherit from Animal</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span><span class="hljs-params">(Animal)</span>:</span>

<span class="hljs-comment"># new method in subclass</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">display</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-comment"># access name attribute of superclass using self</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"My name is "</span>, self.name)

<span class="hljs-comment"># create an object of the subclass</span>
labrador = Dog()

<span class="hljs-comment"># access superclass attribute and method </span>
labrador.name = <span class="hljs-string">"Rohu"</span>
labrador.eat()

<span class="hljs-comment"># call subclass method </span>
labrador.display()</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>I can eat
My name is  Rohu</samp></pre>

<p>In the above example, we have derived a subclass <var>Dog</var> from a superclass <var>Animal</var>. Notice the statements,</p>

<pre style="max-height: 600px;"><code class="python hljs">labrador.name = <span class="hljs-string">"Rohu"</span>

labrador.eat()</code></pre>

<p>Here, we are using <var>labrador</var> (object of <var>Dog</var>) to access <var>name</var> and <code>eat()</code> of the <var>Animal</var> class. </p>

<p>This is possible because the subclass inherits all attributes and methods of the superclass.</p>

<p>Also, we have accessed the <var>name</var> attribute inside the method of the <var>Dog</var> class using <code>self</code>.</p>

<figure><img src="assets/images/python-inheritance-example.png" title="Python Inheritance Implementation" alt="Python Inheritance Implementation" width="" height="">
<figcaption>Python Inheritance Implementation</figcaption></figure>
<hr>
<h2 id="is-a">is-a relationship</h2>

<p>Inheritance is an <strong>is-a</strong> relationship. That is, we use inheritance only if there exists an <strong>is-a</strong> relationship between two classes. For example,</p>

<ul>
<li><strong>Car</strong> is a <strong>Vehicle</strong></li>
<li><strong>Apple</strong> is a <strong>Fruit</strong></li>
<li><strong>Cat</strong> is an <strong>Animal</strong></li>
</ul>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here, <strong>Car</strong> can inherit from <strong>Vehicle</strong>, <strong>Apple</strong> can inherit from <strong>Fruit</strong>, and so on.</p>

<hr>
<h2 id="method-overriding">Method Overriding in Python Inheritance</h2>

<p>In the previous example, we see the object of the subclass can access the method of the superclass.</p>

<p><strong>However, what if the same method is present in both the superclass and subclass?</strong></p>

<p>In this case, the method in the subclass overrides the method in the superclass. This concept is known as method overriding in Python.</p>

<h3>Example: Method Overriding</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Animal</span>:</span>

<span class="hljs-comment"># attributes and method of the parent class</span>
name = <span class="hljs-string">""</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">eat</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"I can eat"</span>)

<span class="hljs-comment"># inherit from Animal</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span><span class="hljs-params">(Animal)</span>:</span>

<span class="hljs-comment"># override eat() method</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">eat</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"I like to eat bones"</span>)

<span class="hljs-comment"># create an object of the subclass</span>
labrador = Dog()

<span class="hljs-comment"># call the eat() method on the labrador object</span>
labrador.eat()</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>I like to eat bones</samp></pre>

<p>In the above example, the same method <code>eat()</code> is present in both the <var>Dog</var> class and the <var>Animal</var> class.</p>

<p>Now, when we call the <code>eat()</code> method using the object of the <var>Dog</var> subclass, the method of the <var>Dog</var> class is called.</p>

<p>This is because the <code>eat()</code> method of the <var>Dog</var> subclass overrides the same method of the <var>Animal</var> superclass. </p>

<hr>
<h2 id="super-method">The super() Function in Inheritance</h2>

<p>Previously we saw that the same method (<a href="/python-programming/function">function</a>) in the subclass overrides the method in the superclass.</p>

<p>However, if we need to access the superclass method from the subclass, we use the <code>super()</code> function. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Animal</span>:</span>

name = <span class="hljs-string">""</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">eat</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"I can eat"</span>)

<span class="hljs-comment"># inherit from Animal</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span><span class="hljs-params">(Animal)</span>:</span>

<span class="hljs-comment"># override eat() method</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">eat</span><span class="hljs-params">(self)</span>:</span>
    
    <span class="hljs-comment"># call the eat() method of the superclass using super()</span>
    super().eat()
    
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"I like to eat bones"</span>)

<span class="hljs-comment"># create an object of the subclass</span>
labrador = Dog()

labrador.eat()</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>I can eat
I like to eat bones</samp></pre>

<p>In the above example, the <code>eat()</code> method of the <var>Dog</var> subclass overrides the same method of the <var>Animal</var> superclass.</p>

<p>Inside the <var>Dog</var> class, we have used</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># call method of superclass</span>
super().eat()</code></pre>

<p>to call the <code>eat()</code> method of the <var>Animal</var> superclass from the <var>Dog</var> subclass.</p>

<p>So, when we call the <code>eat()</code> method using the <var>labrador</var> object</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># call the eat() method</span>
labrador.eat()</code></pre>

<p>Both the overridden and the superclass version of the <code>eat()</code> method is executed.</p>

<p>To learn more, visit <a href="/python-programming/methods/built-in/super">Python super()</a>.</p>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">More on Python Inheritance

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Inheritance Types

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>There are 5 different types of inheritance in Python. They are:</p>

<ul>
<li><strong>Single Inheritance</strong>: a child class inherits from only one parent class.</li>
<li><strong>Multiple Inheritance</strong>: a child class inherits from multiple parent classes.</li>
<li><strong>Multilevel Inheritance</strong>: a child class inherits from its parent class, which is inheriting from its parent class.</li>
<li><strong>Hierarchical Inheritance</strong>: more than one child class are created from a single parent class.</li>
<li><strong>Hybrid Inheritance</strong>: combines more than one form of inheritance.</li>
</ul>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Uses of Inheritance

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><ul>
<li><strong>Code Reusability</strong>: Since a child class can inherit all the functionalities of the parent's class, this allows code reusability.</li>
<li><strong>Efficient Development</strong>: Once a functionality is developed, we can simply inherit it which allows for cleaner code and easy maintenance.</li>
<li><strong>Customization</strong>: Since we can also add our own functionalities in the child class, we can inherit only the useful functionalities and define other required features.</li>
</ul>

</div></div></div></div></div></div></div></div></div>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/object-oriented-programming">Python Object Oriented Programming</a></li>
<li><a href="https://www.programiz.com/python-programming/multiple-inheritance">Python Multiple Inheritance</a></li>
</ul>

</div>
</section>
<section id="eight3">
<h1>Python Multiple Inheritance</h1>
<div class="content">
  <p id="introduction">A <a href="/python-programming/class">class</a> can be derived from more than one superclass in Python. This is called multiple <a href="/python-programming/inheritance">inheritance</a>.</p>

<p>For example, a class <code>Bat</code> is derived from superclasses <code>Mammal</code> and <code>WingedAnimal</code>. It makes sense because bat is a mammal as well as a winged animal.</p>

<figure><img alt="Multiple Inheritance" height="" src="assets/images/python-multiple-inheritance.png" title="Multiple Inheritance in Python" width="">
<figcaption>Multiple Inheritance</figcaption>
</figure>

<hr>
<h2 id="syntax">Python Multiple Inheritance Syntax</h2>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SuperClass1</span>:</span>
<span class="hljs-comment"># features of SuperClass1</span>

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SuperClass2</span>:</span>
<span class="hljs-comment"># features of SuperClass2</span>

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">MultiDerived</span><span class="hljs-params">(SuperClass1, SuperClass2)</span>:</span>
<span class="hljs-comment"># features of SuperClass1 + SuperClass2 + MultiDerived class</span></code></pre>

<p>Here, the <code>MultiDerived</code> class is derived from <code>SuperClass1</code> and <code>SuperClass2</code> classes.</p>

<hr>
<h2 id="example1">Example: Python Multiple Inheritance</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Mammal</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">mammal_info</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Mammals can give direct birth."</span>)

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">WingedAnimal</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">winged_animal_info</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Winged animals can flap."</span>)

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Bat</span><span class="hljs-params">(Mammal, WingedAnimal)</span>:</span>
<span class="hljs-keyword">pass</span>

<span class="hljs-comment"># create an object of Bat class</span>
b1 = Bat()

b1.mammal_info()
b1.winged_animal_info()</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Mammals can give direct birth.
Winged animals can flap.</samp></pre>

<p>In the above example, the <var>Bat</var> class is derived from two super classes: <var>Mammal</var> and <var>WingedAnimal</var>. Notice the statements,</p>

<pre style="max-height: 600px;"><code class="python hljs">b1 = Bat()
b1.mammal_info()
b1.winged_animal_info()</code></pre>

<p>Here, we are using <var>b1</var> (object of <var>Bat</var>) to access <code>mammal_info()</code> and <code>winged_animal_info()</code> methods of the <var>Mammal</var> and the <var>WingedAnimal</var> class respectively.</p>

<hr>
<h2 id="multilevel">Python Multilevel Inheritance</h2>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>In Python, not only can we derive a class from the superclass but you can also derive a class from the derived class. This form of inheritance is known as <strong>multilevel inheritance</strong>.</p>

<p>Here's the syntax of the multilevel inheritance,</p>

<pre style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SuperClass</span>:</span>
<span class="hljs-comment"># Super class code here</span>

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">DerivedClass1</span><span class="hljs-params">(SuperClass)</span>:</span>
<span class="hljs-comment"># Derived class 1 code here</span>

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">DerivedClass2</span><span class="hljs-params">(DerivedClass1)</span>:</span>
<span class="hljs-comment"># Derived class 2 code here</span></code></pre>

<p>Here, the <var>DerivedClass1</var> class is derived from the <var>SuperClass</var> class, and the <var>DerivedClass2</var> class is derived from the <var>DerivedClass1</var> class.</p>

<figure><img alt="Multilevel Inheritance in Python" height="" src="assets/images/python-multilevel-inheritance.png" title="Multilevel Inheritance" width="">
<figcaption>Multilevel Inheritance in Python</figcaption>
</figure>

<hr>
<h2 id="example2">Example: Python Multilevel Inheritance</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SuperClass</span>:</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">super_method</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Super Class method called"</span>)

<span class="hljs-comment"># define class that derive from SuperClass</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">DerivedClass1</span><span class="hljs-params">(SuperClass)</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">derived1_method</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Derived class 1 method called"</span>)

<span class="hljs-comment"># define class that derive from DerivedClass1</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">DerivedClass2</span><span class="hljs-params">(DerivedClass1)</span>:</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">derived2_method</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Derived class 2 method called"</span>)

<span class="hljs-comment"># create an object of DerivedClass2</span>
d2 = DerivedClass2()

d2.super_method()  <span class="hljs-comment"># Output: "Super Class method called"</span>

d2.derived1_method()  <span class="hljs-comment"># Output: "Derived class 1 method called"</span>

d2.derived2_method()  <span class="hljs-comment"># Output: "Derived class 2 method called"</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Super Class method called
Derived class 1 method called
Derived class 2 method called</samp></pre>

<p>In the above example, <var>DerivedClass2</var> is derived from <var>DerivedClass1</var>, which is derived from <var>SuperClass</var>.</p>

<p>It means that <var>DerivedClass2</var> inherits all the attributes and methods of both <var>DerivedClass1</var> and <var>SuperClass</var>.</p>

<p>Hence, we are using <var>d2</var> (object of <var>DerivedClass2</var>) to call methods from <var>SuperClass</var>, <var>DerivedClass1</var>, and <var>DerivedClass2</var>.</p>

<hr>
<h2 id="resolution">Method Resolution Order (MRO) in Python</h2>

<p>If two superclasses have the same method (<a href="/python-programming/function">function</a>) name and the derived class calls that method, Python uses the MRO to search for the right method to call. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SuperClass1</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">info</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Super Class 1 method called"</span>)

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SuperClass2</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">info</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Super Class 2 method called"</span>)

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span><span class="hljs-params">(SuperClass1, SuperClass2)</span>:</span>
<span class="hljs-keyword">pass</span>

d1 = Derived()
d1.info()  

<span class="hljs-comment"># Output: "Super Class 1 method called"</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, <var>SuperClass1</var> and <var>SuperClass2</var> both of these classes define a method <code>info()</code>.</p>

<p>So when <code>info()</code> is called using the <var>d1</var> object of the <var>Derived</var> class, Python uses the <strong>MRO</strong> to determine which method to call.</p>

<p>In this case, the <strong>MRO</strong> specifies that methods should be inherited from the leftmost superclass first, so <code>info()</code> of <var>SuperClass1</var> is called rather than that of <var>SuperClass2</var>.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/object-oriented-programming">Python Object Oriented Programming</a></li>
<li><a href="https://www.programiz.com/python-programming/polymorphism">Polymorphism in Python</a></li>
<li><a href="https://www.programiz.com/article/python-self-why">self in Python, Demystified</a></li>
</ul>  </div>
</section>
<section id="eight4">
<h1>Polymorphism in Python</h1>
<div class="content">
  <h2 id="intro">What is Polymorphism?</h2>

<p>The literal meaning of polymorphism is the condition of occurrence in different forms.</p>

<p>Polymorphism is a very important concept in programming. It refers to the use of a single type entity (method, operator or object) to represent different types in different scenarios.</p>

<p>Let's take an example:</p>

<h3>Example 1: Polymorphism in addition operator</h3>

<p>We know that the <code>+</code> operator is used extensively in Python programs. But, it does not have a single usage.</p>

<p>For integer data types, <code>+</code> operator is used to perform arithmetic addition operation.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">num1 = <span class="hljs-number">1</span>
num2 = <span class="hljs-number">2</span>
<span class="hljs-keyword">print</span>(num1+num2)
</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Hence, the above program outputs <samp>3</samp>.</p>

<hr>
<p>Similarly, for string data types, <code>+</code> operator is used to perform concatenation.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs">str1 = <span class="hljs-string">"Python"</span>
str2 = <span class="hljs-string">"Programming"</span>
<span class="hljs-keyword">print</span>(str1+<span class="hljs-string">" "</span>+str2)
</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>As a result, the above program outputs <samp>Python Programming</samp>.</p>

<p>Here, we can see that a single operator <code>+</code> has been used to carry out different operations for distinct data types. This is one of the most simple occurrences of polymorphism in Python.</p>

<hr>
<h2 id="func-poly">Function Polymorphism in Python</h2>

<p>There are some functions in Python which are compatible to run with multiple data types.</p>

<p>One such function is the <code>len()</code> function. It can run with many data types in Python. Let's look at some example use cases of the function.</p>

<h3>Example 2: Polymorphic len() function</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">print</span>(len(<span class="hljs-string">"Programiz"</span>))
<span class="hljs-keyword">print</span>(len([<span class="hljs-string">"Python"</span>, <span class="hljs-string">"Java"</span>, <span class="hljs-string">"C"</span>]))
<span class="hljs-keyword">print</span>(len({<span class="hljs-string">"Name"</span>: <span class="hljs-string">"John"</span>, <span class="hljs-string">"Address"</span>: <span class="hljs-string">"Nepal"</span>}))
</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>9
3
2
</samp></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here, we can see that many data types such as string, list, tuple, set, and dictionary can work with the <code>len()</code> function. However, we can see that it returns specific information about specific data types.</p>

<figure><img alt="Functional Polymorphism" height="348" src="assets/images/func-polymorphism.png" title="Functional Polymorphism in Python" width="559">
<figcaption>Polymorphism in len() function in Python</figcaption>
</figure>

<hr>
<h2 id="class-poly">Class Polymorphism in Python</h2>

<p>Polymorphism is a very important concept in Object-Oriented Programming.</p>

<p>To learn more about OOP in Python, visit: <a href="https://www.programiz.com/python-programming/object-oriented-programming">Python Object-Oriented Programming</a></p>

<p>We can use the concept of polymorphism while creating class methods as Python allows different classes to have methods with the same name.</p>

<p>We can then later generalize calling these methods by disregarding the object we are working with. Let's look at an example:</p>

<h3>Example 3: Polymorphism in Class Methods</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Cat</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__init__</span><span class="hljs-params">(self, name, age)</span>:</span>
    self.name = name
    self.age = age

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">info</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">f"I am a cat. My name is <span class="hljs-subst">{self.name}</span>. I am <span class="hljs-subst">{self.age}</span> years old."</span>)

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">make_sound</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Meow"</span>)


<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__init__</span><span class="hljs-params">(self, name, age)</span>:</span>
    self.name = name
    self.age = age

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">info</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">f"I am a dog. My name is <span class="hljs-subst">{self.name}</span>. I am <span class="hljs-subst">{self.age}</span> years old."</span>)

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">make_sound</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">print</span>(<span class="hljs-string">"Bark"</span>)


cat1 = Cat(<span class="hljs-string">"Kitty"</span>, <span class="hljs-number">2.5</span>)
dog1 = Dog(<span class="hljs-string">"Fluffy"</span>, <span class="hljs-number">4</span>)

<span class="hljs-keyword">for</span> animal <span class="hljs-keyword">in</span> (cat1, dog1):
animal.make_sound()
animal.info()
animal.make_sound()
</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Meow
I am a cat. My name is Kitty. I am 2.5 years old.
Meow
Bark
I am a dog. My name is Fluffy. I am 4 years old.
Bark
</samp></pre>

<p>Here, we have created two classes <code>Cat</code> and <code>Dog</code>. They share a similar structure and have the same method names <code>info()</code> and <code>make_sound()</code>.</p>

<p>However, notice that we have not created a common superclass or linked the classes together in any way. Even then, we can pack these two different objects into a tuple and iterate through it using a common <var>animal</var> variable. It is possible due to polymorphism.</p>

<hr>
<h2 id="inheritance">Polymorphism and Inheritance</h2>

<p>Like in other programming languages, the child classes in Python also inherit methods and attributes from the parent class. We can redefine certain methods and attributes specifically to fit the child class, which is known as <strong>Method Overriding</strong>.</p>

<p>Polymorphism allows us to access these overridden methods and attributes that have the same name as the parent class.</p>

<p>Let's look at an example:</p>

<h3>Example 4: Method Overriding</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> math <span class="hljs-keyword">import</span> pi


<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Shape</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__init__</span><span class="hljs-params">(self, name)</span>:</span>
    self.name = name

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">area</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">pass</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">fact</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">return</span> <span class="hljs-string">"I am a two-dimensional shape."</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__str__</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">return</span> self.name


<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Square</span><span class="hljs-params">(Shape)</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__init__</span><span class="hljs-params">(self, length)</span>:</span>
    super().__init__(<span class="hljs-string">"Square"</span>)
    self.length = length

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">area</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">return</span> self.length**<span class="hljs-number">2</span>

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">fact</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">return</span> <span class="hljs-string">"Squares have each angle equal to 90 degrees."</span>


<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Circle</span><span class="hljs-params">(Shape)</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__init__</span><span class="hljs-params">(self, radius)</span>:</span>
    super().__init__(<span class="hljs-string">"Circle"</span>)
    self.radius = radius

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">area</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">return</span> pi*self.radius**<span class="hljs-number">2</span>


a = Square(<span class="hljs-number">4</span>)
b = Circle(<span class="hljs-number">7</span>)
<span class="hljs-keyword">print</span>(b)
<span class="hljs-keyword">print</span>(b.fact())
<span class="hljs-keyword">print</span>(a.fact())
<span class="hljs-keyword">print</span>(b.area())
</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Circle
I am a two-dimensional shape.
Squares have each angle equal to 90 degrees.
153.93804002589985
</samp></pre>

<p>Here, we can see that the methods such as <code>__str__()</code>, which have not been overridden in the child classes, are used from the parent class.</p>

<p>Due to polymorphism, the Python interpreter automatically recognizes that the <code>fact()</code> method for object <code>a</code>(<var>Square</var> class) is overridden. So, it uses the one defined in the child class.</p>

<p>On the other hand, since the <code>fact()</code> method for object <var>b</var> isn't overridden, it is used from the Parent <var>Shape</var> class.</p>

<figure><img alt="Class Polymorphism" height="476" src="assets/images/python-polymorphism.png" title="Polymorphism in Python" width="503">
<figcaption>Polymorphism in parent and child classes in Python</figcaption>
</figure>

<p><strong>Note</strong>: <strong>Method Overloading</strong>, a way to create multiple methods with the same name but different arguments, is not possible in Python.</p>

<p><strong>Also Read:</strong>
</p><ul>
<li><a href="https://www.programiz.com/python-programming/inheritance">Python Inheritance</a></li>
</ul>
</div>
</section>
<section id="eight5">
<h1>Python Operator Overloading</h1>
<div class="content">
  <p id="introduction">In Python, we can change the way <a href="/python-programming/operators">operators</a> work for user-defined types.</p>

<p>For example, the <code>+</code> operator will perform arithmetic addition on two numbers, merge two <a href="/python-programming/list">lists</a>, or concatenate two <a href="/python-programming/string">strings</a>.</p>

<p>This feature in Python that allows the same operator to have different meaning according to the context is called <strong>operator overloading</strong>.</p>

<hr>
<h2 id="special-functions">Python Special Functions</h2>

<p>Class functions that begin with double underscore <code>__</code> are called special <a href="/python-programming/function">functions</a> in Python.</p>

<p>The special functions are defined by the Python interpreter and used to implement certain features or behaviors. </p>

<p>They are called <strong>"double underscore"</strong> functions because they have a double underscore prefix and suffix, such as <code>__init__()</code> or <code>__add__()</code>. </p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here are some of the special functions available in Python,</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Function</th>
<th>Description</th>
</tr>
<tr>
<td><code>__init__()</code></td>
<td>initialize the attributes of the object</td>
</tr>
<tr>
<td><code>__str__()</code></td>
<td>returns a string representation of the object</td>
</tr>
<tr>
<td><code>__len__()</code></td>
<td>returns the length of the object</td>
</tr>
<tr>
<td><code>__add__()</code></td>
<td>adds two objects</td>
</tr>
<tr>
<td><code>__call__()</code></td>
<td>call objects of the class like a normal function</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="example">Example: + Operator Overloading in Python</h2>

<p>To overload the <code>+</code> operator, we will need to implement <code>__add__()</code> function in the class. </p>

<p>With great power comes great responsibility. We can do whatever we like inside this function. But it is more sensible to return the <code>Point</code> object of the coordinate sum.</p>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Point</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__init__</span><span class="hljs-params">(self, x=<span class="hljs-number">0</span>, y=<span class="hljs-number">0</span>)</span>:</span>
    self.x = x
    self.y = y

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__str__</span><span class="hljs-params">(self)</span>:</span>
    <span class="hljs-keyword">return</span> <span class="hljs-string">"({0},{1})"</span>.format(self.x, self.y)

<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__add__</span><span class="hljs-params">(self, other)</span>:</span>
    x = self.x + other.x
    y = self.y + other.y
    <span class="hljs-keyword">return</span> Point(x, y)


p1 = Point(<span class="hljs-number">1</span>, <span class="hljs-number">2</span>)
p2 = Point(<span class="hljs-number">2</span>, <span class="hljs-number">3</span>)

<span class="hljs-keyword">print</span>(p1+p2)

<span class="hljs-comment"># Output: (3,5)</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>In the above example, what actually happens is that, when we use <code>p1 + p2</code>, Python calls <code>p1.__add__(p2)</code> which in turn is <code>Point.__add__(p1,p2)</code>. After this, the addition operation is carried out the way we specified.</p>

<p>Similarly, we can overload other operators as well. The special function that we need to implement is tabulated below.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Expression</th>
<th>Internally</th>
</tr>
<tr>
<td>Addition</td>
<td><code>p1 + p2</code></td>
<td><code>p1.__add__(p2)</code></td>
</tr>
<tr>
<td>Subtraction</td>
<td><code>p1 - p2</code></td>
<td><code>p1.__sub__(p2)</code></td>
</tr>
<tr>
<td>Multiplication</td>
<td><code>p1 * p2</code></td>
<td><code>p1.__mul__(p2)</code></td>
</tr>
<tr>
<td>Power</td>
<td><code>p1 ** p2</code></td>
<td><code>p1.__pow__(p2)</code></td>
</tr>
<tr>
<td>Division</td>
<td><code>p1 / p2</code></td>
<td><code>p1.__truediv__(p2)</code></td>
</tr>
<tr>
<td>Floor Division</td>
<td><code>p1 // p2</code></td>
<td><code>p1.__floordiv__(p2)</code></td>
</tr>
<tr>
<td>Remainder (modulo)</td>
<td><code>p1 % p2</code></td>
<td><code>p1.__mod__(p2)</code></td>
</tr>
<tr>
<td>Bitwise Left Shift</td>
<td><code>p1 &lt;&lt; p2</code></td>
<td><code>p1.__lshift__(p2)</code></td>
</tr>
<tr>
<td>Bitwise Right Shift</td>
<td><code>p1 &gt;&gt; p2</code></td>
<td><code>p1.__rshift__(p2)</code></td>
</tr>
<tr>
<td>Bitwise AND</td>
<td><code>p1 &amp; p2</code></td>
<td><code>p1.__and__(p2)</code></td>
</tr>
<tr>
<td>Bitwise OR</td>
<td><code>p1 | p2</code></td>
<td><code>p1.__or__(p2)</code></td>
</tr>
<tr>
<td>Bitwise XOR</td>
<td><code>p1 ^ p2</code></td>
<td><code>p1.__xor__(p2)</code></td>
</tr>
<tr>
<td>Bitwise NOT</td>
<td><code>~p1</code></td>
<td><code>p1.__invert__()</code></td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="overload-comparison">Overloading Comparison Operators</h2>

<p>Python does not limit operator overloading to arithmetic operators only. We can overload comparison operators as well.</p>

<p>Here's an example of how we can overload the <code>&lt;</code> operator to compare two objects the <var>Person</var> class based on their <code>age</code>:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Person</span>:</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__init__</span><span class="hljs-params">(self, name, age)</span>:</span>
    self.name = name
    self.age = age

<span class="hljs-comment"># overload &lt; operator</span>
<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">__lt__</span><span class="hljs-params">(self, other)</span>:</span>
    <span class="hljs-keyword">return</span> self.age &lt; other.age

p1 = Person(<span class="hljs-string">"Alice"</span>, <span class="hljs-number">20</span>)
p2 = Person(<span class="hljs-string">"Bob"</span>, <span class="hljs-number">30</span>)

<span class="hljs-keyword">print</span>(p1 &lt; p2)  <span class="hljs-comment"># prints True</span>
<span class="hljs-keyword">print</span>(p2 &lt; p1)  <span class="hljs-comment"># prints False</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>True
False</samp></pre>

<p>Here, <code>__lt__()</code> overloads the <code>&lt;</code> operator to compare the <var>age</var> attribute of two objects.</p>

<p>The <code>__lt__()</code> method returns,</p>

<ul>
<li><code>True</code> - if the first object's <var>age</var> is less than the second object's <var>age</var></li>
<li><code>False</code> - if the first object's <var>age</var> is greater than the second object's <var>age</var></li>
</ul>

<p>Similarly, the special functions that we need to implement, to overload other comparison operators are tabulated below.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Expression</th>
<th>Internally</th>
</tr>
<tr>
<td>Less than</td>
<td><code>p1 &lt; p2</code></td>
<td><code>p1.__lt__(p2)</code></td>
</tr>
<tr>
<td>Less than or equal to</td>
<td><code>p1 &lt;= p2</code></td>
<td><code>p1.__le__(p2)</code></td>
</tr>
<tr>
<td>Equal to</td>
<td><code>p1 == p2</code></td>
<td><code>p1.__eq__(p2)</code></td>
</tr>
<tr>
<td>Not equal to</td>
<td><code>p1 != p2</code></td>
<td><code>p1.__ne__(p2)</code></td>
</tr>
<tr>
<td>Greater than</td>
<td><code>p1 &gt; p2</code></td>
<td><code>p1.__gt__(p2)</code></td>
</tr>
<tr>
<td>Greater than or equal to</td>
<td><code>p1 &gt;= p2</code></td>
<td><code>p1.__ge__(p2)</code></td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="advantages">Advantages of Operator Overloading</h2>

<p>Here are some advantages of operator overloading,</p>

<ul>
<li>Improves code readability by allowing the use of familiar operators.</li>
<li>Ensures that objects of a class behave consistently with built-in types and other user-defined types.</li>
<li>Makes it simpler to write code, especially for complex data types.</li>
<li>Allows for code reuse by implementing one operator method and using it for other operators.</li>
</ul>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/class">Python Classes and Objects</a></li>
<li><a href="https://www.programiz.com/article/python-self-why">self in Python, Demystified</a></li>
<li><a href="https://www.programiz.com/python-programming/precedence-associativity">Precedence and Associativity of Operators in Python</a></li>
</ul>  </div>
</section>

<!-- nine menu sections -->
<section id="nine1">
<h1>Python datetime</h1>
<div class="content">
  <p id="introduction">Python has a <a href="/python-programming/modules">module</a> named <code>datetime</code> to work with dates and times. </p>

<p>It provides a variety of <a href="/python-programming/class">classes</a> for representing and manipulating dates and times, as well as for formatting and parsing dates and times in a variety of formats.</p>

<hr>
<h2 id="current-datetime">Example 1: Get Current Date and Time</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> datetime

<span class="hljs-comment"># get the current date and time</span>
now = datetime.datetime.now()

<span class="hljs-keyword">print</span>(now)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>2022-12-27 08:26:49.219717</samp></pre>

<p>Here, we have imported the <code>datetime</code> module using the <code>import datetime</code> statement.</p>

<p>One of the classes defined in the <code>datetime</code> module is the <code>datetime</code> class. </p>

<p>We then used the <code>now()</code> method to create a <code>datetime</code> object containing the current local date and time.</p>

<hr>
<h2>Example 2: Get Current Date</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> datetime

<span class="hljs-comment"># get current date</span>
current_date = datetime.date.today()

<span class="hljs-keyword">print</span>(current_date)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>2022-12-27</samp></pre>

<p>In the above example, we have used the <code>today()</code> method defined in the <code>date</code> class to get a <code>datetime</code> object containing the current local date.</p>

<hr>
<h2 id="datetime-attribute">Attributes of datetime Module</h2>

<p>We can use the <a href="/python-programming/methods/built-in/dir">dir()</a> function to get a <a href="https://www.programiz.com/python-programming/list">list</a> containing all attributes of a module.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> datetime

<span class="hljs-keyword">print</span>(dir(datetime))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>['MAXYEAR', 'MINYEAR', '__builtins__', '__cached__', '__doc__', '__file__', '__loader__', '__name__', '__package__', '__spec__', '_divide_and_round', 'date', 'datetime', 'datetime_CAPI', 'time', 'timedelta', 'timezone', 'tzinfo']</samp></pre>

<p>Among all the attributes of <code>datetime</code> module, the most commonly used classes in the <code>datetime</code> module are:</p>

<ul>
<li><code>datetime.datetime</code> - represents a single point in time, including a date and a time.</li>
<li><code>datetime.date</code> - represents a date (year, month, and day) without a time.</li>
<li><code>datetime.time</code> - represents a time (hour, minute, second, and microsecond) without a date.</li>
<li><code>datetime.timedelta</code> - represents a duration, which can be used to perform arithmetic with <code>datetime</code> objects.</li>
</ul>

<hr>
<h2 id="date">Python datetime.date Class</h2>

<p>In Python, we can instantiate <code>date</code> objects from the <code>date</code> class. A date object represents a date (year, month and day).</p>

<h3 id="example-date-object">Example 3: Date object to represent a date</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> datetime

d = datetime.date(<span class="hljs-number">2022</span>, <span class="hljs-number">12</span>, <span class="hljs-number">25</span>)
<span class="hljs-keyword">print</span>(d)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>2022-12-25</samp></pre>

<p>Here, <code>date()</code> in the above example is a constructor of the <code>date</code> class. The constructor takes three arguments: <code>year</code>, <code>month</code> and <code>day</code>.</p>

<h3>Import Only date Class</h3>

<p>We can only import the <code>date</code> class from the <code>datetime</code> module. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> date

d = date(<span class="hljs-number">2022</span>, <span class="hljs-number">12</span>, <span class="hljs-number">25</span>)
<span class="hljs-keyword">print</span>(d)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>2022-12-25</samp></pre>

<p>Here, <code>from datetime import date</code> only imports the <code>date</code> class from the <code>datetime</code> module.</p>

<hr>
<h2>Example 4: Get the current date using today()</h2>

<p>We can create a <code>date</code> object containing the current date by using the class method named <code>today()</code>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> date

<span class="hljs-comment"># today() to get current date</span>
todays_date = date.today()

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Today's date ="</span>, todays_date)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Today's date = 2022-12-27</samp></pre>

<hr>
<h2 id="example-date-timestamp">Example 5: Get the date from a timestamp</h2>

<p>We can also create <code>date</code> objects from a timestamp. </p>

<p>A UNIX timestamp is the number of seconds between a particular date and <strong>January 1, 1970,</strong> at UTC. You can convert a timestamp to a date using the <code>fromtimestamp()</code> method.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> date

timestamp = date.fromtimestamp(<span class="hljs-number">1326244364</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Date ="</span>, timestamp)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Date = 2012-01-11</samp></pre>

<hr>
<h2 id="print-date">Example 6: Print today's year, month and day</h2>

<p>We can get year, month, day, day of the week, etc. from the <code>date</code> object easily. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> date

<span class="hljs-comment"># date object of today's date</span>
today = date.today() 

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Current year:"</span>, today.year)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Current month:"</span>, today.month)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Current day:"</span>, today.day)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Current year: 2022
Current month: 12
Current day: 27</samp></pre>

<hr>
<h2 id="time">Python datetime.time Class</h2>

<p>A time object instantiated from the <code>time</code> class represents the local time.</p>

<h3 id="example-time-object">Example 7: Time object to represent time</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> time

<span class="hljs-comment"># time(hour = 0, minute = 0, second = 0)</span>
a = time()
<span class="hljs-keyword">print</span>(a)

<span class="hljs-comment"># time(hour, minute and second)</span>
b = time(<span class="hljs-number">11</span>, <span class="hljs-number">34</span>, <span class="hljs-number">56</span>)
<span class="hljs-keyword">print</span>(b)

<span class="hljs-comment"># time(hour, minute and second)</span>
c = time(hour = <span class="hljs-number">11</span>, minute = <span class="hljs-number">34</span>, second = <span class="hljs-number">56</span>)
<span class="hljs-keyword">print</span>(c)

<span class="hljs-comment"># time(hour, minute, second, microsecond)</span>
d = time(<span class="hljs-number">11</span>, <span class="hljs-number">34</span>, <span class="hljs-number">56</span>, <span class="hljs-number">234566</span>)
<span class="hljs-keyword">print</span>(d)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>a = 00:00:00
b = 11:34:56
c = 11:34:56
d = 11:34:56.234566</samp></pre>

<hr>
<h2 id="example-print-time">Example 8: Print hour, minute, second and microsecond</h2>

<p>Once we create the <code>time</code> object, we can easily print its attributes such as <code>hour</code>, <code>minute</code>, etc. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> time

a = time(<span class="hljs-number">11</span>, <span class="hljs-number">34</span>, <span class="hljs-number">56</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Hour ="</span>, a.hour)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Minute ="</span>, a.minute)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Second ="</span>, a.second)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Microsecond ="</span>, a.microsecond)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Hour = 11
Minute = 34
Second = 56
Microsecond = 0</samp></pre>

<p>Here, notice that we haven't passed the <var>microsecond</var> argument. Hence, its default value <strong>0</strong> is printed.</p>

<hr>
<h2 id="datetime">The datetime.datetime Class</h2>

<p>The <code>datetime</code> module has a class named <code>datetime</code> that can contain information from both <code>date</code> and <code>time</code> objects.</p>

<h3 id="example-datetime-object">Example 9: Python datetime object</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

<span class="hljs-comment"># datetime(year, month, day)</span>
a = datetime(<span class="hljs-number">2022</span>, <span class="hljs-number">12</span>, <span class="hljs-number">28</span>)
<span class="hljs-keyword">print</span>(a)

<span class="hljs-comment"># datetime(year, month, day, hour, minute, second, microsecond)</span>
b = datetime(<span class="hljs-number">2022</span>, <span class="hljs-number">12</span>, <span class="hljs-number">28</span>, <span class="hljs-number">23</span>, <span class="hljs-number">55</span>, <span class="hljs-number">59</span>, <span class="hljs-number">342380</span>)
<span class="hljs-keyword">print</span>(b)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>2022-12-28 00:00:00
2022-12-28 23:55:59.342380</samp></pre>

<p>The first three arguments <var>year</var>, <var>month</var> and <var>day</var> in the <code>datetime()</code> constructor are mandatory.</p>

<hr>
<h2 id="example-print-datetime">Example 10: Print year, month, hour, minute and timestamp</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

a = datetime(<span class="hljs-number">2022</span>, <span class="hljs-number">12</span>, <span class="hljs-number">28</span>, <span class="hljs-number">23</span>, <span class="hljs-number">55</span>, <span class="hljs-number">59</span>, <span class="hljs-number">342380</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Year ="</span>, a.year)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Month ="</span>, a.month)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Hour ="</span>, a.hour)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Minute ="</span>, a.minute)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Timestamp ="</span>, a.timestamp())</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>year = 202
month = 12
day = 28
hour = 23
minute = 55
timestamp = 1511913359.34238</samp></pre>

<hr>
<h2 id="timedelta">Python datetime.timedelta Class</h2>

<p>A <code>timedelta</code> object represents the difference between two dates or times. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime, date

<span class="hljs-comment"># using date()</span>
t1 = date(year = <span class="hljs-number">2018</span>, month = <span class="hljs-number">7</span>, day = <span class="hljs-number">12</span>)
t2 = date(year = <span class="hljs-number">2017</span>, month = <span class="hljs-number">12</span>, day = <span class="hljs-number">23</span>)

t3 = t1 - t2

<span class="hljs-keyword">print</span>(<span class="hljs-string">"t3 ="</span>, t3)

<span class="hljs-comment"># using datetime()</span>
t4 = datetime(year = <span class="hljs-number">2018</span>, month = <span class="hljs-number">7</span>, day = <span class="hljs-number">12</span>, hour = <span class="hljs-number">7</span>, minute = <span class="hljs-number">9</span>, second = <span class="hljs-number">33</span>)
t5 = datetime(year = <span class="hljs-number">2019</span>, month = <span class="hljs-number">6</span>, day = <span class="hljs-number">10</span>, hour = <span class="hljs-number">5</span>, minute = <span class="hljs-number">55</span>, second = <span class="hljs-number">13</span>)
t6 = t4 - t5
<span class="hljs-keyword">print</span>(<span class="hljs-string">"t6 ="</span>, t6)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Type of t3 ="</span>, type(t3)) 
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Type of t6 ="</span>, type(t6))  </code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>t3 = 201 days, 0:00:00
t6 = -333 days, 1:14:20
Type of t3 = &lt;class 'datetime.timedelta'&gt;
Type of t6 = &lt;class 'datetime.timedelta'&gt;</samp></pre>

<p>Notice, both <var>t3</var> and <var>t6</var> are of <code>&lt;class 'datetime.timedelta'&gt;</code> type.</p>

<hr>
<h2 id="example-difference-timedelta">Example 12: Difference between two timedelta objects</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> timedelta

t1 = timedelta(weeks = <span class="hljs-number">2</span>, days = <span class="hljs-number">5</span>, hours = <span class="hljs-number">1</span>, seconds = <span class="hljs-number">33</span>)
t2 = timedelta(days = <span class="hljs-number">4</span>, hours = <span class="hljs-number">11</span>, minutes = <span class="hljs-number">4</span>, seconds = <span class="hljs-number">54</span>)

t3 = t1 - t2

<span class="hljs-keyword">print</span>(<span class="hljs-string">"t3 ="</span>, t3)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>t3 = 14 days, 13:55:39</samp></pre>

<p>Here, we have created two <code>timedelta</code> objects <var>t1</var> and <var>t2</var>, and their difference is printed on the screen.</p>

<hr>
<h2>Example 14: Time duration in seconds</h2>

<p>We can get the total number of seconds in a <code>timedelta</code> object using the <code>total_seconds()</code> method.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> timedelta

t = timedelta(days = <span class="hljs-number">5</span>, hours = <span class="hljs-number">1</span>, seconds = <span class="hljs-number">33</span>, microseconds = <span class="hljs-number">233423</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Total seconds ="</span>, t.total_seconds())</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Total seconds = 435633.233423</samp></pre>

<hr>
<h2 id="format-datetime">Python format datetime</h2>

<p>The way date and time are represented may be different in different places, organizations, etc. It's more common to use <code>mm/dd/yyyy</code> in the US, whereas <code>dd/mm/yyyy</code> is more common in the UK.</p>

<p>Python has <code>strftime()</code> and <code>strptime()</code> methods to handle this.</p>

<hr>
<h2 id="strftime">Python strftime() Method</h2>

<p>The <code>strftime()</code> method is defined under classes <code>date</code>, <code>datetime</code> and <code>time</code>. The method creates a formatted <a href="/python-programming/string">string</a> from a given <code>date</code>, <code>datetime</code> or <code>time</code> object.</p>

<p>Let's see an example.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

<span class="hljs-comment"># current date and time</span>
now = datetime.now()

t = now.strftime(<span class="hljs-string">"%H:%M:%S"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Time:"</span>, t)

s1 = now.strftime(<span class="hljs-string">"%m/%d/%Y, %H:%M:%S"</span>)
<span class="hljs-comment"># mm/dd/YY H:M:S format</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"s1:"</span>, s1)

s2 = now.strftime(<span class="hljs-string">"%d/%m/%Y, %H:%M:%S"</span>)
<span class="hljs-comment"># dd/mm/YY H:M:S format</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"s2:"</span>, s2)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>time: 04:34:52
s1: 12/26/2018, 04:34:52
s2: 26/12/2018, 04:34:52</samp></pre>

<p>Here, <code>%Y</code>, <code>%m</code>, <code>%d</code>, <code>%H</code> etc. are format codes. The <code>strftime()</code> method takes one or more format codes and returns a formatted string based on it.</p>

<p>In the above example, <var>t</var>, <var>s1</var> and <var>s2</var> are strings.</p>

<ul>
<li><code>%Y</code> - year [0001,..., 2018, 2019,..., 9999]</li>
<li><code>%m</code> - month [01, 02, ..., 11, 12]</li>
<li><code>%d</code> - day [01, 02, ..., 30, 31]</li>
<li><code>%H</code> - hour [00, 01, ..., 22, 23</li>
<li><code>%M</code> - minute [00, 01, ..., 58, 59]</li>
<li><code>%S</code> - second [00, 01, ..., 58, 59]</li>
</ul>

<p>To learn more about <code>strftime()</code> and format codes, visit: <a href="/python-programming/datetime/strftime">Python strftime()</a>.</p>

<hr>
<h2 id="strptime">Python strptime() Method</h2>

<p>The <code>strptime()</code> method creates a <code>datetime</code> object from a given string (representing date and time). For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

date_string = <span class="hljs-string">"25 December, 2022"</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"date_string ="</span>, date_string)

<span class="hljs-comment"># use strptime() to create date object</span>
date_object = datetime.strptime(date_string, <span class="hljs-string">"%d %B, %Y"</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"date_object ="</span>, date_object)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>date_string = 25 december, 2022
date_object = 2018-06-21 00:00:00</samp></pre>

<p>The <code>strptime()</code> method takes two arguments:</p>

<ul>
<li>a string representing date and time</li>
<li>format code equivalent to the first argument</li>
</ul>

<p>By the way, <code>%d</code>, <code>%B</code> and <code>%Y</code> format codes are used for <var>day</var>, <var>month</var>(full name) and <var>year</var> respectively.</p>

<p>To learn more about <code>strptime()</code> and format codes, visit: <a href="/python-programming/datetime/strptime">Python strptime()</a>.</p>

<hr>
<h2 id="timezone">Handling timezone in Python</h2>

<p>Suppose, we are working on a project and need to display date and time based on their timezone. </p>

<p>Rather than trying to handle the timezone yourself, we suggest using a third-party <a href="http://pytz.sourceforge.net/">pytZ module</a>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime
<span class="hljs-keyword">import</span> pytz

local = datetime.now()
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Local:"</span>, local.strftime(<span class="hljs-string">"%m/%d/%Y, %H:%M:%S"</span>))


tz_NY = pytz.timezone(<span class="hljs-string">'America/New_York'</span>) 
datetime_NY = datetime.now(tz_NY)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"NY:"</span>, datetime_NY.strftime(<span class="hljs-string">"%m/%d/%Y, %H:%M:%S"</span>))

tz_London = pytz.timezone(<span class="hljs-string">'Europe/London'</span>)
datetime_London = datetime.now(tz_London)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"London:"</span>, datetime_London.strftime(<span class="hljs-string">"%m/%d/%Y, %H:%M:%S"</span>))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Local: 12/27/2022, 09:40:19
NY: 12/27/2022, 04:40:19
London: 12/27/2022, 09:40:19</samp></pre>

<p>Here, <var>datetime_NY</var> and <var>datetime_London</var> are <code>datetime</code> objects containing the current date and time of their respective timezone.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/python-programming/datetime/current-time">Python get current time</a></li>
<li><a href="/python-programming/datetime/current-datetime">How to get current date and time in Python</a></li>
<li><a href="/python-programming/time">Python time module</a></li>
</ul>

</div>
</section>
<section id="nine2">
<h1>Python strftime()</h1>
<div class="content">
  <p><a id="introduction" name="introduction"></a>The <code>strftime()</code> method returns a <a href="/python-programming/string">string</a> representing date and time using <a href="/python-programming/datetime#date">date</a>, time or datetime object.</p>

<hr>
<h2><a id="example-1" name="example-1"></a>Example 1: datetime to string using strftime()</h2>

<p>The program below converts a&nbsp;<code>datetime</code> object containing <a href="https://www.programiz.com/python-programming/datetime/current-datetime">current date and time</a> to different string formats.</p>

<pre style="max-height: 600px;"><code class="python hljs">
<span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

now = datetime.now() <span class="hljs-comment"># current date and time</span>

year = now.strftime(<span class="hljs-string">"%Y"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"year:"</span>, year)

month = now.strftime(<span class="hljs-string">"%m"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"month:"</span>, month)

day = now.strftime(<span class="hljs-string">"%d"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"day:"</span>, day)

time = now.strftime(<span class="hljs-string">"%H:%M:%S"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"time:"</span>, time)

date_time = now.strftime(<span class="hljs-string">"%m/%d/%Y, %H:%M:%S"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"date and time:"</span>,date_time)	
</code></pre>

<p>When you run the program, the output will something like be:</p>

<pre><samp>
year: 2018
month: 12
day: 24
time: 04:59:31
date and time: 12/24/2018, 04:59:31
</samp></pre>

<p>Here, <var>year</var>, <var>day</var>, <var>time</var> and <var>date_time</var> are strings, whereas <var>now</var> is a <code>datetime</code> object.</p>

<hr>
<h2><a id="working" name="working"></a>How strftime() works?</h2>

<p>In the above program, <code>%Y</code>, <code>%m</code>, <code>%d</code> etc. are format codes. The <code>strftime()</code> method takes one or more format codes as an argument and returns a formatted string based on it.</p>

<ol>
<li>We imported <code>datetime</code> class from the <code>datetime</code> module. It's because the object of <code>datetime</code> class can access <code>strftime()</code> method.<br>
&nbsp;
<figure><img alt="Import datetime object" height="" src="assets/images/python-import-datetime.png" title="Import datetime object" width=""></figure>
</li>
<li>The <code>datetime</code> object containing current date and time is stored in <var>now</var> variable.<br>
&nbsp;
<figure><img alt="Python Format Code" height="" src="assets/images/python-one-format-code.png" title="Python Format Code" width=""></figure>
</li>
<li>The <code>strftime()</code> method can be used to create formatted strings.<br>
&nbsp;
<figure><img alt="Python Format Code" height="" src="assets/images/python-one-format-code.png" title="Python Format Code" width=""></figure>
</li>
<li>The string you pass to the <code>strftime()</code> method may contain more than one format codes.<br>
&nbsp;
<figure><img alt="Python Format Codes" height="" src="assets/images/python-multiple-format-code.png" title="Python Format Codes" width=""></figure>
</li>
</ol>

<hr>
<h2><a id="string-timestamp" name="string-timestamp"></a>Example 2: Creating string from a timestamp</h2>

<pre style="max-height: 600px;"><code class="python hljs">
<span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

timestamp = <span class="hljs-number">1528797322</span>
date_time = datetime.fromtimestamp(timestamp)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Date time object:"</span>, date_time)

d = date_time.strftime(<span class="hljs-string">"%m/%d/%Y, %H:%M:%S"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Output 2:"</span>, d)	

d = date_time.strftime(<span class="hljs-string">"%d %b, %Y"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Output 3:"</span>, d)

d = date_time.strftime(<span class="hljs-string">"%d %B, %Y"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Output 4:"</span>, d)

d = date_time.strftime(<span class="hljs-string">"%I%p"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Output 5:"</span>, d)
</code></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>When you run the program, the output will be:</p>

<pre><samp>Date time object: 2018-06-12 09:55:22
Output 2: 06/12/2018, 09:55:22
Output 3: 12 Jun, 2018
Output 4: 12 June, 2018
Output 5: 09AM
</samp></pre>

<hr>
<h2><a id="format-code" name="format-code"></a>Format Code List</h2>

<p>The table below shows all the codes that you can pass to the <code>strftime()</code> method.</p>

<div class="table-responsive"><table border="0">
<thead>
<tr>
  <td><strong>Directive</strong></td>
  <td><strong>Meaning</strong></td>
  <td><strong>Example</strong></td>
</tr>
</thead>
<tbody>
<tr>
  <td><code>%a</code></td>
  <td>Abbreviated weekday name.</td>
  <td>Sun, Mon, ...</td>
</tr>
<tr>
  <td><code>%A</code></td>
  <td>Full weekday name.</td>
  <td>Sunday, Monday, ...</td>
</tr>
<tr>
  <td><code>%w</code></td>
  <td>Weekday as a decimal number.</td>
  <td>0, 1, ..., 6</td>
</tr>
<tr>
  <td><code>%d</code></td>
  <td>Day of the month as a zero-padded decimal.</td>
  <td>01, 02, ..., 31</td>
</tr>
<tr>
  <td><code>%-d</code></td>
  <td>Day of the month as a decimal number.</td>
  <td>1, 2, ..., 30</td>
</tr>
<tr>
  <td><code>%b</code></td>
  <td>Abbreviated month name.</td>
  <td>Jan, Feb, ..., Dec</td>
</tr>
<tr>
  <td><code>%B</code></td>
  <td>Full month name.</td>
  <td>January, February, ...</td>
</tr>
<tr>
  <td><code>%m</code></td>
  <td>Month as a zero-padded decimal number.</td>
  <td>01, 02, ..., 12</td>
</tr>
<tr>
  <td><code>%-m</code></td>
  <td>Month as a decimal number.</td>
  <td>1, 2, ..., 12</td>
</tr>
<tr>
  <td><code>%y</code></td>
  <td>Year without century as a zero-padded decimal number.</td>
  <td>00, 01, ..., 99</td>
</tr>
<tr>
  <td><code>%-y</code></td>
  <td>Year without century as a decimal number.</td>
  <td>0, 1, ..., 99</td>
</tr>
<tr>
  <td><code>%Y</code></td>
  <td>Year with century as a decimal number.</td>
  <td>2013, 2019 etc.</td>
</tr>
<tr>
  <td><code>%H</code></td>
  <td>Hour (24-hour clock) as a zero-padded decimal number.</td>
  <td>00, 01, ..., 23</td>
</tr>
<tr>
  <td><code>%-H</code></td>
  <td>Hour (24-hour clock) as a decimal number.</td>
  <td>0, 1, ..., 23</td>
</tr>
<tr>
  <td><code>%I</code></td>
  <td>Hour (12-hour clock) as a zero-padded decimal number.</td>
  <td>01, 02, ..., 12</td>
</tr>
<tr>
  <td><code>%-I</code></td>
  <td>Hour (12-hour clock) as a decimal number.</td>
  <td>1, 2, ... 12</td>
</tr>
<tr>
  <td><code>%p</code></td>
  <td>Locale’s AM or PM.</td>
  <td>AM, PM</td>
</tr>
<tr>
  <td><code>%M</code></td>
  <td>Minute as a zero-padded decimal number.</td>
  <td>00, 01, ..., 59</td>
</tr>
<tr>
  <td><code>%-M</code></td>
  <td>Minute as a decimal number.</td>
  <td>0, 1, ..., 59</td>
</tr>
<tr>
  <td><code>%S</code></td>
  <td>Second as a zero-padded decimal number.</td>
  <td>00, 01, ..., 59</td>
</tr>
<tr>
  <td><code>%-S</code></td>
  <td>Second as a decimal number.</td>
  <td>0, 1, ..., 59</td>
</tr>
<tr>
  <td><code>%f</code></td>
  <td>Microsecond as a decimal number, zero-padded on the left.</td>
  <td>000000 - 999999</td>
</tr>
<tr>
  <td><code>%z</code></td>
  <td>UTC offset in the form +HHMM or -HHMM.</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td><code>%Z</code></td>
  <td>Time zone name.</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td><code>%j</code></td>
  <td>Day of the year as a zero-padded decimal number.</td>
  <td>001, 002, ..., 366</td>
</tr>
<tr>
  <td><code>%-j</code></td>
  <td>Day of the year as a decimal number.</td>
  <td>1, 2, ..., 366</td>
</tr>
<tr>
  <td><code>%U</code></td>
  <td>Week number of the year (Sunday as the first day of the week). All days in a new year preceding the first Sunday are considered to be in week 0.</td>
  <td>00, 01, ..., 53</td>
</tr>
<tr>
  <td><code>%W</code></td>
  <td>Week number of the year (Monday as the first day of the week). All days in a new year preceding the first Monday are considered to be in week 0.</td>
  <td>00, 01, ..., 53</td>
</tr>
<tr>
  <td><code>%c</code></td>
  <td>Locale’s appropriate date and time representation.</td>
  <td>Mon Sep 30 07:06:05 2013</td>
</tr>
<tr>
  <td><code>%x</code></td>
  <td>Locale’s appropriate date representation.</td>
  <td>09/30/13</td>
</tr>
<tr>
  <td><code>%X</code></td>
  <td>Locale’s appropriate time representation.</td>
  <td>07:06:05</td>
</tr>
<tr>
  <td><code>%%</code></td>
  <td>A literal '%' character.</td>
  <td>%</td>
</tr>
</tbody>
</table></div>

<hr>
<h2><a id="local-datetime" name="local-datetime"></a>Example 3: Locale's appropriate date and time</h2>

<pre style="max-height: 600px;"><code class="python hljs">
<span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

timestamp = <span class="hljs-number">1528797322</span>
date_time = datetime.fromtimestamp(timestamp)

d = date_time.strftime(<span class="hljs-string">"%c"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Output 1:"</span>, d)	

d = date_time.strftime(<span class="hljs-string">"%x"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Output 2:"</span>, d)

d = date_time.strftime(<span class="hljs-string">"%X"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Output 3:"</span>, d)
</code></pre>

<p>When you run the program, the output will be:</p>

<pre><samp>
Output 1: Tue Jun 12 09:55:22 2018
Output 2: 06/12/18
Output 3: 09:55:22
</samp></pre>

<p>Format codes <code>%c</code>, <code>%x</code> and <code>%X</code> are used for locale's appropriate date and time representation.</p>

<hr>
<p>We also recommend&nbsp;you to check <a href="/python-programming/datetime/strptime" title="strptime()">Python strptime()</a>. The <code>strptime()</code> method creates a <code>datetime</code> object from a string.</p>
</div>
</section>
<section id="nine3">
<h1>Python strptime()</h1>
<div class="content">
  <p><a id="introduction" name="introduction"></a>The <code>strptime()</code> method creates a <a href="/python-programming/datetime#datetime">datetime</a> object from the&nbsp;given <a href="/python-programming/string">string</a>.</p>

<p><strong>Note:</strong> You cannot create <code>datetime</code> object from every string. The string needs to be in a certain format.</p>

<hr>
<h2><a id="example-1" name="example-1"></a>Example 1: string to datetime object</h2>

<pre style="max-height: 600px;"><code class="python hljs">
<span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

date_string = <span class="hljs-string">"21 June, 2018"</span>

<span class="hljs-keyword">print</span>(<span class="hljs-string">"date_string ="</span>, date_string)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"type of date_string ="</span>, type(date_string))

date_object = datetime.strptime(date_string, <span class="hljs-string">"%d %B, %Y"</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"date_object ="</span>, date_object)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"type of date_object ="</span>, type(date_object))
</code></pre>

<p>When you run the program, the output will be:</p>

<pre><samp>
date_string = 21 June, 2018
type of date_string = &lt;class 'str'&gt;
date_object = 2018-06-21 00:00:00
type of date_object = &lt;class 'datetime.datetime'&gt;
</samp></pre>

<hr>
<h3><a id="working" name="working"></a>How strptime() works?</h3>

<p>The <code>strptime()</code> class method takes two arguments:</p>

<ul>
<li>string (that be converted to datetime)</li>
<li>format code</li>
</ul>

<p>Based on the string and format code used, the method returns its equivalent <code>datetime</code> object.</p>

<p>In the above example:</p>

<figure><img alt="Python strptime" height="" src="assets/images/python-srtptime.png" title="Python strptime in Python" width=""></figure>


<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here,</p>

<ul>
<li><code>%d</code> - Represents the day of the month. <strong>Example:</strong> 01, 02, ..., 31</li>
<li><code>%B</code> - Month's name in full. <strong>Example:</strong> January, February etc.</li>
<li><code>%Y</code> - Year in four digits. <strong>Example:</strong> 2018, 2019 etc.</li>
</ul>

<hr>
<h2><a id="example-2" name="example-2"></a>Example 2: string to datetime object</h2>

<pre style="max-height: 600px;"><code class="python hljs">
<span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

dt_string = <span class="hljs-string">"12/11/2018 09:15:32"</span>

<span class="hljs-comment"># Considering date is in dd/mm/yyyy format</span>
dt_object1 = datetime.strptime(dt_string, <span class="hljs-string">"%d/%m/%Y %H:%M:%S"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"dt_object1 ="</span>, dt_object1)

<span class="hljs-comment"># Considering date is in mm/dd/yyyy format</span>
dt_object2 = datetime.strptime(dt_string, <span class="hljs-string">"%m/%d/%Y %H:%M:%S"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"dt_object2 ="</span>, dt_object2)
</code></pre>

<p>When you run the program, the output will be:</p>

<pre><samp>dt_object1 = 2018-11-12 09:15:32
dt_object2 = 2018-12-11 09:15:32
</samp></pre>

<hr>
<h2><a id="format-codes" name="format-codes"></a>Format Code List</h2>

<p>The table below shows all the format codes that you can use.</p>

<div class="table-responsive"><table border="0">
<thead>
<tr>
  <td><strong>Directive</strong></td>
  <td><strong>Meaning</strong></td>
  <td><strong>Example</strong></td>
</tr>
</thead>
<tbody>
<tr>
  <td><code>%a</code></td>
  <td>Abbreviated weekday name.</td>
  <td>Sun, Mon, ...</td>
</tr>
<tr>
  <td><code>%A</code></td>
  <td>Full weekday name.</td>
  <td>Sunday, Monday, ...</td>
</tr>
<tr>
  <td><code>%w</code></td>
  <td>Weekday as a decimal number.</td>
  <td>0, 1, ..., 6</td>
</tr>
<tr>
  <td><code>%d</code></td>
  <td>Day of the month as a zero-padded decimal.</td>
  <td>01, 02, ..., 31</td>
</tr>
<tr>
  <td><code>%-d</code></td>
  <td>Day of the month as a decimal number.</td>
  <td>1, 2, ..., 30</td>
</tr>
<tr>
  <td><code>%b</code></td>
  <td>Abbreviated month name.</td>
  <td>Jan, Feb, ..., Dec</td>
</tr>
<tr>
  <td><code>%B</code></td>
  <td>Full month name.</td>
  <td>January, February, ...</td>
</tr>
<tr>
  <td><code>%m</code></td>
  <td>Month as a zero-padded decimal number.</td>
  <td>01, 02, ..., 12</td>
</tr>
<tr>
  <td><code>%-m</code></td>
  <td>Month as a decimal number.</td>
  <td>1, 2, ..., 12</td>
</tr>
<tr>
  <td><code>%y</code></td>
  <td>Year without century as a zero-padded decimal number.</td>
  <td>00, 01, ..., 99</td>
</tr>
<tr>
  <td><code>%-y</code></td>
  <td>Year without century as a decimal number.</td>
  <td>0, 1, ..., 99</td>
</tr>
<tr>
  <td><code>%Y</code></td>
  <td>Year with century as a decimal number.</td>
  <td>2013, 2019 etc.</td>
</tr>
<tr>
  <td><code>%H</code></td>
  <td>Hour (24-hour clock) as a zero-padded decimal number.</td>
  <td>00, 01, ..., 23</td>
</tr>
<tr>
  <td><code>%-H</code></td>
  <td>Hour (24-hour clock) as a decimal number.</td>
  <td>0, 1, ..., 23</td>
</tr>
<tr>
  <td><code>%I</code></td>
  <td>Hour (12-hour clock) as a zero-padded decimal number.</td>
  <td>01, 02, ..., 12</td>
</tr>
<tr>
  <td><code>%-I</code></td>
  <td>Hour (12-hour clock) as a decimal number.</td>
  <td>1, 2, ... 12</td>
</tr>
<tr>
  <td><code>%p</code></td>
  <td>Locale’s AM or PM.</td>
  <td>AM, PM</td>
</tr>
<tr>
  <td><code>%M</code></td>
  <td>Minute as a zero-padded decimal number.</td>
  <td>00, 01, ..., 59</td>
</tr>
<tr>
  <td><code>%-M</code></td>
  <td>Minute as a decimal number.</td>
  <td>0, 1, ..., 59</td>
</tr>
<tr>
  <td><code>%S</code></td>
  <td>Second as a zero-padded decimal number.</td>
  <td>00, 01, ..., 59</td>
</tr>
<tr>
  <td><code>%-S</code></td>
  <td>Second as a decimal number.</td>
  <td>0, 1, ..., 59</td>
</tr>
<tr>
  <td><code>%f</code></td>
  <td>Microsecond as a decimal number, zero-padded on the left.</td>
  <td>000000 - 999999</td>
</tr>
<tr>
  <td><code>%z</code></td>
  <td>UTC offset in the form +HHMM or -HHMM.</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td><code>%Z</code></td>
  <td>Time zone name.</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td><code>%j</code></td>
  <td>Day of the year as a zero-padded decimal number.</td>
  <td>001, 002, ..., 366</td>
</tr>
<tr>
  <td><code>%-j</code></td>
  <td>Day of the year as a decimal number.</td>
  <td>1, 2, ..., 366</td>
</tr>
<tr>
  <td><code>%U</code></td>
  <td>Week number of the year (Sunday as the first day of the week). All days in a new year preceding the first Sunday are considered to be in week 0.</td>
  <td>00, 01, ..., 53</td>
</tr>
<tr>
  <td><code>%W</code></td>
  <td>Week number of the year (Monday as the first day of the week). All days in a new year preceding the first Monday are considered to be in week 0.</td>
  <td>00, 01, ..., 53</td>
</tr>
<tr>
  <td><code>%c</code></td>
  <td>Locale’s appropriate date and time representation.</td>
  <td>Mon Sep 30 07:06:05 2013</td>
</tr>
<tr>
  <td><code>%x</code></td>
  <td>Locale’s appropriate date representation.</td>
  <td>09/30/13</td>
</tr>
<tr>
  <td><code>%X</code></td>
  <td>Locale’s appropriate time representation.</td>
  <td>07:06:05</td>
</tr>
<tr>
  <td><code>%%</code></td>
  <td>A literal '%' character.</td>
  <td>%</td>
</tr>
</tbody>
</table></div>

<hr>
<h3><a id="valueError" name="valueError"></a>ValueError in strptime()</h3>

<p>If the string (first argument) and the format code (second argument) passed to the <code>strptime()</code> doesn't match, you will get <code>ValueError</code>. For example:</p>

<pre style="max-height: 600px;"><code class="python hljs">
<span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

date_string = <span class="hljs-string">"12/11/2018"</span>
date_object = datetime.strptime(date_string, <span class="hljs-string">"%d %m %Y"</span>)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"date_object ="</span>, date_object)
</code></pre>

<p>If you run this program, you will get an error.</p>

<pre><samp>ValueError: time data '12/11/2018' does not match format '%d %m %Y'
</samp></pre>

<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="/python-programming/datetime/strftime">Python strftime()</a></li>
<li><a href="https://www.programiz.com/python-programming/examples/string-to-datetime">Python Program to Convert String to Datetime
</a></li>
<li><a href="https://www.programiz.com/python-programming/datetime/current-datetime">How to get current date and time in Python?</a></li>
<li><a href="https://www.programiz.com/python-programming/datetime/current-time">Python Get Current time</a></li>
</ul>

</div>
</section>
<section id="nine4">
<h1>How to get current date and time in Python?</h1>
<div class="content">
  <p id="introduction">There are a number of ways we can take to get the current date. We will use the <code>date</code> class of the <a href="/python-programming/datetime">datetime</a> module to accomplish this task.</p>

<hr>
<h2 id="example-1">Example 1: Python get today's date</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> date

today = date.today()
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Today's date:"</span>, today)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Today's date: 2022-12-27</samp></pre>

<p>Here, we imported the <code>date</code> class from the <code>datetime</code> module. Then, we used the <code>date.today()</code> method to get the current local date.</p>

<hr>
<h2 id="example-2">Example 2: Current date in different formats</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> date

today = date.today()

<span class="hljs-comment"># dd/mm/YY</span>
d1 = today.strftime(<span class="hljs-string">"%d/%m/%Y"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"d1 ="</span>, d1)

<span class="hljs-comment"># Textual month, day and year	</span>
d2 = today.strftime(<span class="hljs-string">"%B %d, %Y"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"d2 ="</span>, d2)

<span class="hljs-comment"># mm/dd/y</span>
d3 = today.strftime(<span class="hljs-string">"%m/%d/%y"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"d3 ="</span>, d3)

<span class="hljs-comment"># Month abbreviation, day and year	</span>
d4 = today.strftime(<span class="hljs-string">"%b-%d-%Y"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"d4 ="</span>, d4)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>d1 = 27/12/2022
d2 = December 27, 2022
d3 = 12/27/22
d4 = Dec-27-2022</samp></pre>

<hr>
<h2 id="current-date-time">Get the current date and time in Python</h2>

<p>If we need to get the current date and time, you can use the <code>datetime</code> class of the <code>datetime</code> module.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

<span class="hljs-comment"># datetime object containing current date and time</span>
now = datetime.now()

<span class="hljs-keyword">print</span>(<span class="hljs-string">"now ="</span>, now)

<span class="hljs-comment"># dd/mm/YY H:M:S</span>
dt_string = now.strftime(<span class="hljs-string">"%d/%m/%Y %H:%M:%S"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"date and time ="</span>, dt_string)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>now = 2022-12-27 10:09:20.430322
date and time = 27/12/2022 10:09:20</samp></pre>

<p>Here, we have used <code>datetime.now()</code> to get the current date and time.</p>

<p>Then, we used <a href="https://www.programiz.com/python-programming/datetime/strftime">strftime()</a> to create a <a href="/python-programming/string">string</a> representing date and time in another format.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/datetime/current-time">Python Get Current time</a></li>
</ul>
</div>
</section>
<section id="nine5">
<h1>Python Get Current Time</h1>
<div class="content">
  <p id="introduction">There are a number of ways we can take to get current time in Python.</p>

<ul>
<li>Using the <code>datetime</code> object</li>
<li>Using the <code>time</code> module</li>
</ul>

<hr>
<h2 id="datetime-object">Current time using the datetime object</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

now = datetime.now()

current_time = now.strftime(<span class="hljs-string">"%H:%M:%S"</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Current Time ="</span>, current_time)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Current Time = 07:41:19</samp></pre>

<p>In the above example, we have imported the <code>datetime</code> class from the <a href="/python-programming/datetime">datetime</a> module.</p>

<p>Then, we used the <code>now()</code> function to get a <code>datetime</code> object containing current date and time.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Using <a href="/python-programming/datetime/strftime">datetime.strftime()</a> function, we then created a <a href="https://www.programiz.com/python-programming/string">string</a> representing current time.</p>

<hr>
<h2 id="time-module">Current time using time module</h2>

<p>In Python, we can also get the current time using the <a href="https://www.programiz.com/python-programming/time">time</a> module.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

t = time.localtime()
current_time = time.strftime(<span class="hljs-string">"%H:%M:%S"</span>, t)
<span class="hljs-keyword">print</span>(current_time)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>07:46:58</samp></pre>

<hr>
<h2 id="timezone">Current time of a Certain timezone</h2>

<p>If we need to find the current time of a certain timezone, you can use <a href="http://pytz.sourceforge.net/">the pytZ module</a>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime
<span class="hljs-keyword">import</span> pytz

<span class="hljs-comment"># Get the timezone object for New York</span>
tz_NY = pytz.timezone(<span class="hljs-string">'America/New_York'</span>) 

<span class="hljs-comment"># Get the current time in New York</span>
datetime_NY = datetime.now(tz_NY)

<span class="hljs-comment"># Format the time as a string and print it</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"NY time:"</span>, datetime_NY.strftime(<span class="hljs-string">"%H:%M:%S"</span>))

<span class="hljs-comment"># Get the timezone object for London</span>
tz_London = pytz.timezone(<span class="hljs-string">'Europe/London'</span>)

<span class="hljs-comment"># Get the current time in London</span>
datetime_London = datetime.now(tz_London)

<span class="hljs-comment"># Format the time as a string and print it</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"London time:"</span>, datetime_London.strftime(<span class="hljs-string">"%H:%M:%S"</span>))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>NY time: 03:45:16
London time: 08:45:16</samp></pre>

<p>Here, we have used the <code>pytz</code> module to find the current time of a certain time zone.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/datetime/current-datetime">How to get current date and time in Python?</a></li>
</ul>  </div>
</section>
<section id="nine6">
<h1>Python timestamp to datetime and vice-versa</h1>
<div class="content">
  <p id="introduction">It's pretty common to store date and time as a timestamp in a database. A Unix timestamp is the number of seconds between a particular date and January 1, 1970 at UTC.</p>

<p>We can simply use the <code>fromtimestamp()</code> method from the <code>datetime</code> module to get a date from a UNIX timestamp.</p>

<hr>
<h2 id="timestamp-to-datetime">Python timestamp to datetime</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

<span class="hljs-comment"># timestamp is number of seconds since 1970-01-01 </span>
timestamp = <span class="hljs-number">1545730073</span>

<span class="hljs-comment"># convert the timestamp to a datetime object in the local timezone</span>
dt_object = datetime.fromtimestamp(timestamp)

<span class="hljs-comment"># print the datetime object and its type</span>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"dt_object ="</span>, dt_object)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"type(dt_object) ="</span>, type(dt_object))</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<pre>
&nbsp;</pre>

<div class="line-highlight">&nbsp;</div>

<p><strong>Output</strong></p>

<pre><samp>dt_object = 2018-12-25 09:27:53
type(dt_object) = &lt;class 'datetime.datetime'&gt;</samp></pre>

<p>Here, we have imported the <code>datetime</code> class from the <a href="/python-programming/datetime">datetime</a> module.</p>

<p>Then, we used the <code>datetime.fromtimestamp()</code> class method which returns the local date and time (datetime object). This object is stored in the <var>dt_object</var> variable.</p>

<p class="note-tip"><strong>Note:</strong> We can easily create a <a href="/python-programming/string">string</a> representing date and time from a <code>datetime</code> object using <a href="/python-programming/datetime/strftime">strftime()</a> method.</p>

<hr>
<h2 id="datetime-timestamp">Python datetime to timestamp</h2>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>In Python, we can get timestamp from a datetime object using the <code>datetime.timestamp()</code> method. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">from</span> datetime <span class="hljs-keyword">import</span> datetime

<span class="hljs-comment"># current date and time</span>
now = datetime.now()

<span class="hljs-comment"># convert from datetime to timestamp</span>
ts = datetime.timestamp(now)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Timestamp ="</span>, ts)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Timestamp = 1672138646.118119</samp></pre>

<p>Here, the <code>datetime.timestamp()</code> method takes a datetime object as an argument and returns a Unix timestamp.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/examples/string-to-datetime">Python Program to Convert String to Datetime</a></li>
</ul>
</div>
</section>
<section id="nine7">
<h1>Python time Module</h1>
<div class="content">
  <p id="introduction">The <code>time</code> module in Python provides <a href="/python-programming/function">functions</a> for handling time-related tasks.</p>

<p>The time-related tasks includes,</p>

<ul>
<li>reading the <a href="https://www.programiz.com/python-programming/datetime/current-time">current time</a></li>
<li>formatting time</li>
<li>sleeping for a specified number of seconds and so on.</li>
</ul>

<hr>
<h2 id="time">Python time.time() Function</h2>

<p>In Python, the <code>time()</code> function returns the number of seconds passed since epoch (the point where time begins).</p>

<p>For the Unix system, <code>January 1, 1970, 00:00:00</code> at <strong>UTC</strong> is epoch.</p>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-comment"># import the time module</span>
<span class="hljs-keyword">import</span> time

<span class="hljs-comment"># get the current time in seconds since the epoch</span>
seconds = time.time()

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Seconds since epoch ="</span>, seconds)	

<span class="hljs-comment"># Output: Seconds since epoch = 1672214933.6804628</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>In the above example, we have used the <code>time.time()</code> function to get the current time in seconds since the epoch, and then printed the result.</p>

<hr>
<h2 id="ctime">Python time.ctime() Function</h2>

<p>The <code>time.ctime()</code> function in Python takes seconds passed since epoch as an argument and returns a <a href="https://www.programiz.com/python-programming/string">string</a> representing local time.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

<span class="hljs-comment"># seconds passed since epoch</span>
seconds = <span class="hljs-number">1672215379.5045543</span>

<span class="hljs-comment"># convert the time in seconds since the epoch to a readable format</span>
local_time = time.ctime(seconds)

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Local time:"</span>, local_time)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Local time: Wed Dec 28 08:16:19 2022</samp></pre>

<p>Here, we have used the <code>time.ctime()</code> function to convert the time in seconds since the epoch to a readable format, and then printed the result.</p>

<hr>
<h2 id="sleep">Python time.sleep() Function</h2>

<p>The <code>sleep()</code> function suspends (delays) execution of the current thread for the given number of seconds.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Printed immediately."</span>)
time.sleep(<span class="hljs-number">2.4</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Printed after 2.4 seconds."</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Printed immediately.
Printed after 2.4 seconds.</samp></pre>

<p>Here's how this program works:</p>

<ul>
<li><code>"Printed immediately"</code> is printed</li>
<li><code>time.sleep(2.4)</code> suspends execution for 2.4 seconds.</li>
<li><code>"Printed after 2.4 seconds"</code> is printed.</li>
</ul>

<p>To learn more about <code>sleep()</code>, please visit <a href="/python-programming/time/sleep">Python sleep()</a>.</p>

<hr>
<h2 id="localtime">Python time.localtime() Function</h2>

<p>The <code>localtime()</code> function takes the number of seconds passed since epoch as an argument and returns <code>struct_time</code> (a <a href="https://www.programiz.com/python-programming/tuple">tuple</a> containing <strong>9</strong> elements corresponding to <code>struct_time</code>) in <strong>local time</strong>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

result = time.localtime(<span class="hljs-number">1672214933</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"result:"</span>, result)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"\nyear:"</span>, result.tm_year)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"tm_hour:"</span>, result.tm_hour)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>result: time.struct_time(tm_year=2022, tm_mon=12, tm_mday=28, tm_hour=8, tm_min=8, tm_sec=53, tm_wday=2, tm_yday=362, tm_isdst=0)

year: 2022
tm_hour: 8</samp></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here, if no argument or <code>None</code> is passed to <code>localtime()</code>, the value returned by <code>time()</code> is used.</p>

<hr>
<h2 id="gmtime">Python time.gmtime() Function</h2>

<p>The <code>gmtime()</code> function takes the number of seconds passed since epoch as an argument and returns <code>struct_time</code> in <strong>UTC</strong>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

result = time.gmtime(<span class="hljs-number">1672214933</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"result:"</span>, result)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"\nyear:"</span>, result.tm_year)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"tm_hour:"</span>, result.tm_hour)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>result: time.struct_time(tm_year=2022, tm_mon=12, tm_mday=28, tm_hour=8, tm_min=8, tm_sec=53, tm_wday=2, tm_yday=362, tm_isdst=0)

year: 2022
tm_hour: 8</samp></pre>

<p>Here, if no argument or <code>None</code> is passed to <code>gmtime()</code>, the value returned by <code>time()</code> is used.</p>

<hr>
<h2 id="mktime">Python time.mktime() Function</h2>

<p>The <code>mktime()</code> function takes <code>struct_time</code> (a tuple containing <strong>9</strong> elements corresponding to <code>struct_time</code>) as an argument and returns the seconds passed since epoch in local time.</p>

<p>The <code>struct_time</code> has the following structure:</p>

<pre style="max-height: 600px;"><code class="python hljs">(year, month, day, hour, minute, second, weekday, day of the year, daylight saving)</code></pre>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

time_tuple = (<span class="hljs-number">2022</span>, <span class="hljs-number">12</span>, <span class="hljs-number">28</span>, <span class="hljs-number">8</span>, <span class="hljs-number">44</span>, <span class="hljs-number">4</span>, <span class="hljs-number">4</span>, <span class="hljs-number">362</span>, <span class="hljs-number">0</span>)

<span class="hljs-comment"># convert time_tuple to seconds since epoch</span>
seconds = time.mktime(time_tuple)

<span class="hljs-keyword">print</span>(seconds)

<span class="hljs-comment"># Output: 1672217044.0</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we have converted the <code>time_tuple</code> to seconds since the epoch.</p>

<hr>
<h2 id="asctime">Python time.asctime() Function</h2>

<p>In Python, the <code>asctime()</code> function takes <code>struct_time</code> as an argument and returns a string representing it.</p>

<p>Similar to <code>mktime()</code>, the <code>time_tuple</code> has the following structure:</p>

<pre style="max-height: 600px;"><code class="python hljs">(year, month, day, hour, minute, second, weekday, day of the year, daylight saving)</code></pre>

<p>Let's see an example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

t = (<span class="hljs-number">2022</span>, <span class="hljs-number">12</span>, <span class="hljs-number">28</span>, <span class="hljs-number">8</span>, <span class="hljs-number">44</span>, <span class="hljs-number">4</span>, <span class="hljs-number">4</span>, <span class="hljs-number">362</span>, <span class="hljs-number">0</span>)

result = time.asctime(t)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Result:"</span>, result)

<span class="hljs-comment"># Output: Result: Fri Dec 28 08:44:04 2022</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p>Here, we can see <code>time.asctime()</code> converts the time tuple to a human-readable string.</p>

<hr>
<h2 id="strftime">Python time.strftime() Function</h2>

<p>The <a href="https://www.programiz.com/python-programming/datetime/strftime">strftime()</a> function takes <code>struct_time</code> (or tuple corresponding to it) as an argument and returns a string representing it based on the format code used. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

named_tuple = time.localtime() <span class="hljs-comment"># get struct_time</span>
time_string = time.strftime(<span class="hljs-string">"%m/%d/%Y, %H:%M:%S"</span>, named_tuple)

<span class="hljs-keyword">print</span>(time_string)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>12/29/2022, 08:36:22</samp></pre>

<p>Here, <code>%Y</code>, <code>%m</code>, <code>%d</code>, <code>%H</code> etc. are format codes.</p>

<ul>
<li><code>%Y</code> - year [0001,..., 2018, 2019,..., 9999]</li>
<li><code>%m</code> - month [01, 02, ..., 11, 12]</li>
<li><code>%d</code> - day [01, 02, ..., 30, 31]</li>
<li><code>%H</code> - hour [00, 01, ..., 22, 23</li>
<li><code>%M</code> - minutes [00, 01, ..., 58, 59]</li>
<li><code>%S</code> - second [00, 01, ..., 58, 61]</li>
</ul>

<p>To learn more, visit <a href="https://docs.python.org/3/library/time.html#time.strftime">time.strftime()</a>.</p>

<hr>
<h2 id="strptime">Python time.strptime() Function</h2>

<p>The <a href="https://www.programiz.com/python-programming/datetime/strptime">strptime()</a> function parses a string representing time and returns <code>struct_time</code>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

time_string = <span class="hljs-string">"14 July, 2023"</span>
result = time.strptime(time_string, <span class="hljs-string">"%d %B, %Y"</span>)

<span class="hljs-keyword">print</span>(result)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>time.struct_time(tm_year=2023, tm_mon=7, tm_mday=14, tm_hour=0, tm_min=0, tm_sec=0, tm_wday=4, tm_yday=195, tm_isdst=-1)</samp></pre>

<p>Here, <code>strptime()</code> parses a string and convert it to the <code>struct_time</code> object.</p>
</div>
</section>
<section id="nine8">
<h1>Python sleep()</h1>
<div class="content">
  <div class="example-wrapper">
<p>The <code>sleep()</code> method suspends the execution of the program for a specified number of seconds.</p>

<h3>Example</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

<div class="line-highlight">time.sleep(<span class="hljs-number">2</span>)</div>
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Wait until 2 seconds."</span>)

<span class="hljs-comment"># Output: Wait until 2 seconds.</span></code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

</div>
<hr>
<h2 id="syntax">Python sleep() Syntax</h2>

<pre style="max-height: 600px;"><code class="python hljs">time.sleep(seconds)</code></pre>

<p>Here, <a href="https://www.programiz.com/python-programming/time">time</a> is a Python module that provides several time-handling methods.</p>

<hr>
<h2 id="parameter">sleep() Parameters</h2>

<p>The method takes a single parameter:</p>

<ul>
<li><strong>seconds</strong> - the number of seconds for which the program will suspend</li>
</ul>

<hr>
<h2 id="return">sleep() Return Value</h2>

<p>The method does not return any value. </p>

<hr>
<h2 id="example-sleep">Example: sleep() Method</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

<span class="hljs-keyword">print</span>(<span class="hljs-string">"Printed immediately."</span>)
time.sleep(<span class="hljs-number">2.4</span>)
<span class="hljs-keyword">print</span>(<span class="hljs-string">"Printed after 2.4 seconds."</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>Printed immediately.
Printed after 2.4 seconds.</samp></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>Here's how the above program works:</p>

<ol>
<li><code>"Printed immediately"</code> is printed.</li>
<li><code>time.sleep(2.4)</code> suspends execution for 2.4 seconds.</li>
<li><code>"Printed after 2.4 seconds"</code> is printed.</li>
</ol>

<hr>
<h2 id="digital-clock">Create a Digital Clock in Python</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="python-exec" style="max-height: 600px;"><code class="python hljs"><span class="hljs-keyword">import</span> time

<span class="hljs-keyword">while</span> <span class="hljs-literal">True</span>:

<span class="hljs-comment"># get current local time as structured data</span>
current_time = time.localtime()
<span class="hljs-comment"># format the time in 12-hour clock with AM/PM</span>
formatted_time = time.strftime(<span class="hljs-string">"%I:%M:%S %p"</span>, current_time)

<span class="hljs-keyword">print</span>(formatted_time)
time.sleep(<span class="hljs-number">1</span>)</code></pre></div></div><div class="code-editor__action">
      <a href="/python-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
        Run Code >>
      </a>
    </div></div>

<p><strong>Output</strong></p>

<pre><samp>01:47:43 PM
01:47:44 PM
01:47:45 PM
01:47:46 PM
... ... ...</samp></pre>

<p>In the above example, we obtain and print the current local time inside an infinite <a href="/python-programming/while-loop">while loop</a>.</p>

<p>Then, the program waits for <strong>1</strong> second before repeating the same process.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/python-programming/examples/countdown-timer">Python Program to Create a Countdown Timer</a></li>
</ul>

</div>
</section>

              </div>
              
          </div>
          <!-- End content section -->
        </div>
    </main>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/language.js"></script>
  </body>
</html>


<?php
}
else{
  header("location:login.php");
}
?>