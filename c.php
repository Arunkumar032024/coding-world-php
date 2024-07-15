<?php
error_reporting(0);
session_start();
$id=$_SESSION['email'];
require "connection.php";
$sql="SELECT * FROM registration WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($row);
// echo "hello";
echo "<script>console.log(".$row.")</script>";
$result=mysqli_fetch_assoc($query);
$email=$_SESSION['email'];
if($result == $email){
      // echo("<script>alert('hi')</script>");
      header("location:login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C Language</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  
    crossorigin="anonymous"></script>
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
          <h1 class="offcanvas-title">C Tutorial</h1>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <div class="col-lg-3">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    C Introduction
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#first1" class="list-group-item list-group-item-action">Getting Started with C</a>
                      <a href="#first2" class="list-group-item list-group-item-action">Your First C Program</a>
                      <a href="#first3" class="list-group-item list-group-item-action">C Comments</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    C Fundamentals
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#second1" class="list-group-item list-group-item-action">C Variables, Constants and
                        Literals</a>
                      <a href="#second2" class="list-group-item list-group-item-action">C Data Types</a>
                      <a href="#second3" class="list-group-item list-group-item-action">C Input Output (I/O)</a>
                      <a href="#second4" class="list-group-item list-group-item-action">C Programming Operators</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    C Flow Control
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#third1" class="list-group-item list-group-item-action">C if...else Statement</a>
                      <a href="#third2" class="list-group-item list-group-item-action">C for Loop</a>
                      <a href="#third3" class="list-group-item list-group-item-action">C while and do...while Loop</a>
                      <a href="#third4" class="list-group-item list-group-item-action">C break and continue</a>
                      <a href="#third5" class="list-group-item list-group-item-action">C switch Statement</a>
                      <a href="#third6" class="list-group-item list-group-item-action">C goto Statement</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    C Functions
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#four1" class="list-group-item list-group-item-action">C Functions</a>
                      <a href="#four2" class="list-group-item list-group-item-action">C User-defined functions</a>
                      <a href="#four3" class="list-group-item list-group-item-action">Types of User-defined Functions in C
                        Programming</a>
                      <a href="#four4" class="list-group-item list-group-item-action">C Recursion</a>
                      <a href="#four5" class="list-group-item list-group-item-action">C Storage Class</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    C Programming Arrays
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#five1" class="list-group-item list-group-item-action">C Arrays</a>
                      <a href="#five2" class="list-group-item list-group-item-action">C Multidimensional Arrays</a>
                      <a href="#five3" class="list-group-item list-group-item-action">Pass arrays to a function in C</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                    aria-expanded="true" aria-controls="collapseSix">
                    C Programming Pointers
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#six1" class="list-group-item list-group-item-action">C Pointers</a>
                      <a href="#six2" class="list-group-item list-group-item-action">Relationship Between Arrays and
                        Pointers</a>
                      <a href="#six3" class="list-group-item list-group-item-action">C Pass Addresses and Pointers</a>
                      <a href="#six4" class="list-group-item list-group-item-action">C Dynamic Memory Allocation</a>
                      <a href="#six5" class="list-group-item list-group-item-action">C Array and Pointer Examples</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                    aria-expanded="true" aria-controls="collapseSeven">
                    C Programming Strings
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#seven1" class="list-group-item list-group-item-action">C Programming Strings</a>
                      <a href="#seven2" class="list-group-item list-group-item-action">String Manipulations In C Programming
                        Using Library Functions</a>
                      <a href="#seven3" class="list-group-item list-group-item-action">String Examples in C Programming</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                    aria-expanded="true" aria-controls="collapseEight">
                    C Structure and Union
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#eight1" class="list-group-item list-group-item-action">C struct</a>
                      <a href="#eight2" class="list-group-item list-group-item-action">C structs and Pointers</a>
                      <a href="#eight3" class="list-group-item list-group-item-action">C Structure and Function</a>
                      <a href="#eight4" class="list-group-item list-group-item-action">C Unions</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine"
                    aria-expanded="true" aria-controls="collapseNine">
                    C Programming Files
                  </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#nine1" class="list-group-item list-group-item-action">C File Handling</a>
                      <a href="#nine2" class="list-group-item list-group-item-action">C Files Examples</a>
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
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                C Introduction
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="list-group">
                  <a href="#first1" class="list-group-item list-group-item-action">Getting Started with C</a>
                  <a href="#first2" class="list-group-item list-group-item-action">Your First C Program</a>
                  <a href="#first3" class="list-group-item list-group-item-action">C Comments</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                C Fundamentals
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="list-group">
                  <a href="#second1" class="list-group-item list-group-item-action">C Variables, Constants and
                    Literals</a>
                  <a href="#second2" class="list-group-item list-group-item-action">C Data Types</a>
                  <a href="#second3" class="list-group-item list-group-item-action">C Input Output (I/O)</a>
                  <a href="#second4" class="list-group-item list-group-item-action">C Programming Operators</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree">
                C Flow Control
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="list-group">
                  <a href="#third1" class="list-group-item list-group-item-action">C if...else Statement</a>
                  <a href="#third2" class="list-group-item list-group-item-action">C for Loop</a>
                  <a href="#third3" class="list-group-item list-group-item-action">C while and do...while Loop</a>
                  <a href="#third4" class="list-group-item list-group-item-action">C break and continue</a>
                  <a href="#third5" class="list-group-item list-group-item-action">C switch Statement</a>
                  <a href="#third6" class="list-group-item list-group-item-action">C goto Statement</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                aria-expanded="true" aria-controls="collapseFour">
                C Functions
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="list-group">
                  <a href="#four1" class="list-group-item list-group-item-action">C Functions</a>
                  <a href="#four2" class="list-group-item list-group-item-action">C User-defined functions</a>
                  <a href="#four3" class="list-group-item list-group-item-action">Types of User-defined Functions in C
                    Programming</a>
                  <a href="#four4" class="list-group-item list-group-item-action">C Recursion</a>
                  <a href="#four5" class="list-group-item list-group-item-action">C Storage Class</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                aria-expanded="true" aria-controls="collapseFive">
                C Programming Arrays
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="list-group">
                  <a href="#five1" class="list-group-item list-group-item-action">C Arrays</a>
                  <a href="#five2" class="list-group-item list-group-item-action">C Multidimensional Arrays</a>
                  <a href="#five3" class="list-group-item list-group-item-action">Pass arrays to a function in C</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                aria-expanded="true" aria-controls="collapseSix">
                C Programming Pointers
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="list-group">
                  <a href="#six1" class="list-group-item list-group-item-action">C Pointers</a>
                  <a href="#six2" class="list-group-item list-group-item-action">Relationship Between Arrays and
                    Pointers</a>
                  <a href="#six3" class="list-group-item list-group-item-action">C Pass Addresses and Pointers</a>
                  <a href="#six4" class="list-group-item list-group-item-action">C Dynamic Memory Allocation</a>
                  <a href="#six5" class="list-group-item list-group-item-action">C Array and Pointer Examples</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                aria-expanded="true" aria-controls="collapseSeven">
                C Programming Strings
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="list-group">
                  <a href="#seven1" class="list-group-item list-group-item-action">C Programming Strings</a>
                  <a href="#seven2" class="list-group-item list-group-item-action">String Manipulations In C Programming
                    Using Library Functions</a>
                  <a href="#seven3" class="list-group-item list-group-item-action">String Examples in C Programming</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                aria-expanded="true" aria-controls="collapseEight">
                C Structure and Union
              </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="list-group">
                  <a href="#eight1" class="list-group-item list-group-item-action">C struct</a>
                  <a href="#eight2" class="list-group-item list-group-item-action">C structs and Pointers</a>
                  <a href="#eight3" class="list-group-item list-group-item-action">C Structure and Function</a>
                  <a href="#eight4" class="list-group-item list-group-item-action">C Unions</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine"
                aria-expanded="true" aria-controls="collapseNine">
                C Programming Files
              </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="list-group">
                  <a href="#nine1" class="list-group-item list-group-item-action">C File Handling</a>
                  <a href="#nine2" class="list-group-item list-group-item-action">C Files Examples</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End sidebar menu section  -->

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
                              <a class="nav-link active" aria-current="page" href="#">Language C</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="java.php">Java</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="python.php">Python</a>
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
  <h1>Getting Started with C</h1>
  <div class="content">
    <p id="introduction">C is a powerful general-purpose programming language known for its efficiency and flexibility. It's commonly used in system programming, embedded systems, and creating high-performance applications.</p>

<p>To start coding in C, you need to install a <strong>C compiler</strong> on your device. However, if you want to get started quickly, you can use our free <a href="/c-programming/online-compiler/">online C compiler</a> that allows you to run code on your browser—no installation required.</p>

<p>Now, for those who prefer to use C on your computer, one of the most popular C compilers is GCC (GNU Compiler Collection), which is available for various platforms, including Linux, macOS, and Windows. </p>

<p>Follow this guide which will teach you to install C on Windows, macOS, and Linux (Ubuntu).</p>

<hr>
<div>
<div class="tabbed-editor-content">
  <div class="tabbed-editor-content__node tabbed-editor-content__node--active">
    <a href="#windows">Windows</a>
  </div>
  <div class="tabbed-editor-content__node">
    <a href="#mac">Mac</a>
  </div>
  <div class="tabbed-editor-content__node">
    <a href="#linux">Linux</a>
  </div>
    
</div>
<div class="tabbed-editor-content--items">
  <div class="tabbed-editor-content__item tabbed-editor-content__item--active" id="windows">
    <h2 id="windows">Install C on Windows</h2>

<p>To install a C programming environment on Windows, you'll need two main components: </p>

<ul>
<li><strong>VS Code</strong>: A text editor to write your code,</li>
<li><strong>MinGW</strong>: A compiler that turns your C code into an executable program.</li>
</ul>

<p>Follow the steps below to install C on Windows:</p>

<ol>
<li>Install VS Code</li>
<li>Download MinGW Compiler</li>
<li>Run the installer</li>
<li>Add MinGW to System PATH</li>
<li>Install C/C++ Extension in VS Code</li>
</ol>

<p>Here's a detailed explanation of each of the steps.</p>

<h3>Step 1: Install VS Code</h3>

<p>Go to the VS Code <a href="https://code.visualstudio.com/download">Official website</a> and download the Windows installer. Once the download is complete, run the installer and follow the installation process. </p>

<p>Click <strong>Finish</strong> to complete the installation process.</p>

<h3>Step 2: Download MinGW Compiler</h3>

<p>Visit the official <a href="https://sourceforge.net/projects/mingw/">MinGW website</a> and download the MinGW installation manager.</p>

<figure><img src="assets/images/mingw-installation1-1.png" title="C MinGW Installation" alt="C MinGW Installation" width="" height="">
<figcaption>C MinGW Installation</figcaption></figure>
<h3>Step 3: Run the Installer</h3>

<p>Now, go to your <strong>downloads</strong> folder and run the installer you just downloaded. You will be prompted to this screen.</p>

<figure><img src="assets/images/mingw-installer1.png" title="C Run MinGW Installer" alt="C Run MinGW Installer" width="" height="">
<figcaption>C Run MinGW Installer</figcaption></figure>
<p>Click on <strong>Continue</strong> and wait till the download is completed.</p>

<p><strong>Include gcc-core package</strong></p>

<p>During installation, you will be prompted to select the components to install. Mark <strong>mingw32-base</strong> for installation, click on installation and apply changes.</p>

<figure><img src="assets/images/gcc-core-package-install1.png" title="C GCC-Core Package Installation" alt="C GCC-Core Package Installation" width="" height="">
<figcaption>C GCC-Core Package Installation</figcaption></figure>
<p>This will include the gcc-core package, which contains the GCC compiler for C.</p>

<h3>Step 4: Add MinGW to System PATH</h3>

<p>Go to the folder and double click on the MinGW folder and copy its location.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp">C:\MinGW\bin</code></pre>

<p>Search <strong>environment variable</strong> on the terminal. In system properties, click on environment variables. You will be prompted to the screen below.</p><figure><img src="assets/images/setting-environment-variables1.png" title="C Setting Environment Variables" alt="C Setting Environment Variables" width="" height="">
<figcaption>C Setting Environment Variables</figcaption></figure>
<p></p>

<p>Then, find the <strong>Path</strong> variable in the System variables section and click on <strong>Edit</strong>. Click <strong>New</strong> and add the path to the <strong>bin</strong> directory within your MinGW installation (i.e. C:\MinGW\bin)</p>

<p>FInally, close all the dialogues with the <strong>Ok</strong> button.</p>

<h3>Step 5: Install C/C++ Extension in VS Code</h3>

<p>Open VS Code and click on Extensions in the left side of the window.</p>

<p>Then, search for <strong>C/C++</strong> by Microsoft in the Extensions and click on install.</p>

<figure><img src="assets/images/extension-install-in-windows1-11.png" title="Installing C Extension in Windows" alt="Installing C Extension in Windows" width="" height="">
<figcaption>Installing C Extension in Windows</figcaption></figure>
<p>Now, you are all set to run C code inside your VS Code.</p>

<p><strong>Note:</strong> Alternatively, you can use IDEs like Code::Blocks or Visual Studio, which come with their own C compilers.</p>
    <div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">and</span> <span class="hljs-keyword">this</span> is a code block</code></pre></div>
  </div>
    <div class="tabbed-editor-content__item" id="mac">
    <h2 id="mac">Install C on macOs</h2>

<p>To install C on your Mac, you'll need two main components:</p>

<ul>
<li><strong>VS Code</strong>: A text editor to write your code,</li>
<li><strong>Clang</strong>: A default compiler in macOS that turns your C code into an executable program.</li>
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
  </div><div class="clearfix"></div><p>Follow the steps below to install C on macOS,</p>

<ol>
<li>Install VS Code</li>
<li>Install C Extension</li>
<li>Check for C Compiler</li>
</ol>

<p>Here is a detailed explanation of each of the steps:</p>

<h3>Step 1: Install VS Code</h3>

<p>Go to the VS Code <a href="https://code.visualstudio.com/download">official website</a> and download the zipped file. Once the download is complete, open the zipped file.</p>

<p>In Finder, open a new window and navigate to the Applications folder. To install the VS Code application from the zip file, drag it into the Applications folder.</p>

<p>You can now launch VS Code directly from the Applications folder.</p>

<h3>Step 2: Install C Extension </h3>

<p>Open VS Code and click on the Extension in the right side of the screen. Search for <strong>C/C++</strong> by Microsoft in the Extensions and click on install.</p>

<figure><img src="assets/images/c-extension-install-in-mac.png" title="Installing C Extension in macOS" alt="Installing C Extension in macOS" width="" height="">
<figcaption>Installing C Extension in macOS</figcaption></figure>
<h3>Step 3: Check for C Compiler</h3>

<p>The macOS generally comes with Clang installed on it, which can be used as a C compiler. You can verify its installation by typing the following command in the terminal.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp">clang --version</code></pre>

<figure><img src="assets/images/c-check-clang-version1-1.png" title="Checking Clang Version " alt="Checking Clang Version" width="" height="">
<figcaption>Checking Clang Version</figcaption></figure>
<p>If the output on your screen does not match the screenshot above showing the version of Clang, you may need to install Xcode Command Line Tools. You can do this by running the following command in your terminal</p>

<pre style="max-height: 600px;"><code class="c hljs cpp">xcode-select --install</code></pre>

<p>Now, you are all set to run C code inside your VS Code.</p>
  </div>
  <div class="tabbed-editor-content__item" id="linux">
  <h2 id="linux">Install C on Linux</h2>

<p>Linux has various distributions, and the installation process differs slightly from each other. For now, we will focus on Ubuntu distribution. </p>

<p>To run a C program in Linux, we need two main components: </p>

<ul>
<li><strong>VS Code</strong>: A text editor to write your code. </li>
<li><strong>GCC</strong>: A compiler that turns your C code into an executable program. </li>
</ul>

<p>Follow the steps below to install C on your Ubuntu system:</p>

<ol>
<li>Install VS Code</li>
<li>Install GCC</li>
</ol>

<h3>Step 1: Install VS Code </h3>

<p>Open the Terminal and type  </p>

<pre style="max-height: 600px;"><code class="c hljs cpp">sudo apt update  </code></pre>

<p>This ensures the software packages are up to date. </p>

<p>Proceed to install VS Code with  </p>

<pre style="max-height: 600px;"><code class="c hljs cpp">sudo snap install code --classic </code></pre>

<figure><img src="assets/images/c-install-vs-code-in-linux1-1.png" title="Install VS Code in Linux" alt="Install VS Code in Linux" width="" height="">
<figcaption>Install VS Code in Linux</figcaption></figure>
<h3>Step 2: Install GCC</h3>

<p>Install GCC and other essential build tools with  </p>

<pre style="max-height: 600px;"><code class="c hljs cpp">sudo apt install build-essential </code></pre>

<figure><img src="assets/images/c-install-gcc-in-linux1-1.png" title="Install GCC in Linux" alt="Install GCC in Linux" width="" height="">
<figcaption>Install GCC in Linux</figcaption></figure>
<p> This package includes GCC and the utilities needed for compiling software. </p>
  </div>
  
</div>
</div>

<hr>
<h2 id="run">Run Your First C Program</h2>

<p>First open VS Code, click on the File in the top menu and then select New File.</p>

<figure><img src="assets/images/newfile-11.png" title="Create a New File in VS Code" alt="Create a New File in VS Code" width="" height="">
<figcaption>Create a New File in VS Code</figcaption></figure>
<p>Then, save this file with a .c extension by clicking on <strong>File</strong> again, then <strong>Save As</strong>, and type your filename ending in .c. (Here, we are saving it as hello.c)</p>

<p>Now, write the following code into your file:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span><span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span></span>{
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hello World"</span>);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Then click on the <strong>run</strong> button on the top right side of your screen.</p>

<figure><img src="assets/images/run-c-code.png" title="C Run Program" alt="C Run Program " width="" height="">
<figcaption>C Run Program </figcaption></figure>
<p>You should see Hello World printed to the command prompt. </p>

<p><strong>For Linux System</strong></p>

<p>Instead of the <strong>run</strong> button as in Windows and macOS, you should follow the following steps to run your C program on Linux.</p>

<p>In Terminal, navigate to your file's directory, and compile with </p>

<pre style="max-height: 600px;"><code class="c hljs cpp">gcc hello.c -o hello</code></pre>

<p>After compiling successfully, you'll see a new file named hello (or hello.exe on Windows) in the same directory.</p>

<p>Run your program using </p>

<pre style="max-height: 600px;"><code class="c hljs cpp">./hello </code></pre>

<p>Congratulations! You've written and executed your first C program.</p>

<p>Now that you have set everything up to run C programs on your computer,  you'll be learning how the basic program works in C in the next tutorial.</p>
</div>
</section>
<section id="first2">
  <h1>Your First C Program</h1>
  <div class="content">
    <p id="introduction">In the previous tutorial you learned how to <a href="/c-programming/getting-started">install C</a> on your computer. Now, let's write a simple C program.</p>

<p>The following program displays <code>Hello, World!</code> on the screen.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hello, World!"</span>);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/c-programming/online-compiler/?ref=d5610e07" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Hello World!</samp></pre>

<div class="note-tip">
<p><strong>Note:</strong> A <code>Hello World!</code> program includes the basic syntax of a programming language and helps beginners understand the structure before getting started. That's why it is a common practice to introduce a new language using a <code>Hello World!</code> program.</p>

<p>It's okay if you don’t understand how the program works right now. We will learn about it in upcoming tutorials. For now, just write the exact program and run it.</p>
</div>
<hr>
<h2 id="working-of-c-program">Working of C Program </h2>

<p>Congratulations on writing your first C program.Now, let's see how the program works.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hello, World!"</span>);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/c-programming/online-compiler/?ref=41f48e2a" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Notice the following line of code:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hello, World!"</span>);</code></pre>

<p>Here, <code>printf</code> statement prints the text <code>Hello, World!</code> to the screen.</p>

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
  </div><div class="clearfix"></div><p>Remember these important things about <code>printf</code>:</p>

<ul>
<li>Everything you want to print should be kept inside parentheses <code>()</code>.</li>
<li>The text to be printed is enclosed within double quotes <code>""</code>.</li>
<li>Each <code>printf</code> statement ends with a semicolon <code>;</code>.</li>
</ul>

<p>Not following the above rules will result in errors and your code will not run successfully.</p>

<hr>
<h2 id="basic-structure">Basic Structure of a C Program</h2>

<p>As we have seen from the last example, a C program requires a lot of lines even for a simple program.</p>

<p>For now, just remember that every C program we will write will follow this structure:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt; </span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-comment">// your code</span>

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p>And, we will write out code inside curly braces <code>{}</code>.</p>

</div>
</section>
<section id="first3">
  <h1>C Comments</h1>
  <div class="content">
    <p>In the previous tutorial you learned to write your first <a href="/c-programming/first-program">C program</a>. Now, let's learn about C comments.</p>

<p class="note-tip"><strong>Tip</strong>: We are introducing comments early in this tutorial series because, from now on, we will be using them to explain our code. </p>

<p id="introduction">Comments are hints that we add to our code, making it easier to understand. </p>

<p>Comments are completely ignored by C compilers.</p>

<p>For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-comment">// print Hello World to the screen</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hello World"</span>);
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/c-programming/online-compiler/?ref=ae840664" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong> </p>

<pre><samp>Hello World</samp></pre>

<p>Here, <code>// print Hello World to the screen</code> is a comment in C programming. The C compiler ignores everything after the <code>//</code> symbol.</p>

<p class="note-tip"><strong>Note</strong>: You can ignore the programming concepts and simply focus on the <strong>comments</strong>. We will revisit these concepts in later tutorials.</p>

<hr>
<h2 id="single-line-comment">Single-line Comments in C</h2>

<p>In C, a single line comment starts with <code>//</code> symbol. It starts and ends in the same line. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-comment">// create integer variable    </span>
<span class="hljs-keyword">int</span> age = <span class="hljs-number">25</span>; 

<span class="hljs-comment">// print the age variable</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Age: %d"</span>, age);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/c-programming/online-compiler/?ref=3c6ffd7d" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Age: 25</samp></pre>

<p>In the above example, we have used two single-line comments:</p>

<ul>
<li> <code>// create integer variable</code> </li>
<li><code>// print the age variable</code> </li>
</ul>

<p>We can also use the single line comment along with the code. </p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> age = <span class="hljs-number">25</span>;  <span class="hljs-comment">// create integer variable</span></code></pre>

<p>Here, code before <code>//</code> are executed and code after <code>//</code> are ignored by the compiler.</p>

<hr>
<h2 id="multi-line-comments"> Multi-line Comments in C</h2>

<p>In C programming, there is another type of comment that allows us to comment on multiple lines at once, they are multi-line comments.</p>

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
  </div><div class="clearfix"></div><p>To write multi-line comments, we use the <code>/*....*/</code> symbol. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">/* This program takes age input from the user
It stores it in the age variable
And, print the value using printf() */</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-comment">// create integer variable    </span>
<span class="hljs-keyword">int</span> age = <span class="hljs-number">25</span>; 

<span class="hljs-comment">// print the age variable</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Age: %d"</span>, age);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/c-programming/online-compiler/?ref=edcdabd4" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Age: 25</samp></pre>

<p>In this type of comment, the C compiler ignores everything from  <code>/*</code> to <code>*/.</code></p>

<div class="note-tip">
<p><strong>Note</strong>: Remember the keyboard shortcut to use comments:</p>

<ul>
<li>Single Line comment: ctrl + / (windows) and cmd + / (mac)</li>
<li>Multi line comment: ctrl + shift + / (windows) and cmd + shift + / (mac)</li>
</ul>

</div>
<hr>
<h2 id="prevent">Prevent Executing Code Using Comments</h2>

<p>While debugging there might be situations where we don't want some part of the code. For example,</p>

<p>In the program below, suppose we don't need data related to height. So, instead of removing the code related to height, we can simply convert them into comments.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number1 = <span class="hljs-number">10</span>;
  <span class="hljs-keyword">int</span> number2 = <span class="hljs-number">15</span>;
  <span class="hljs-keyword">int</span> sum = number1 + number2;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"The sum is: %d\n"</span>, sum);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"The product is: %d\n"</span>, product); 
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/c-programming/online-compiler/?ref=275b142a" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Here, the code throws an error because we have not defined a  <var>product</var> variable. </p>

<p>We can comment out the code that's causing the error.</p>

<p>For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number1 = <span class="hljs-number">10</span>;
  <span class="hljs-keyword">int</span> number2 = <span class="hljs-number">15</span>;
  <span class="hljs-keyword">int</span> sum = number1 + number2;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"The sum is: %d\n"</span>, sum);
<div class="line-highlight">    <span class="hljs-comment">// printf("The product is: %d\n", product); </span></div>
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="https://www.programiz.com/c-programming/online-compiler/?ref=d6d14c9a" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Now, the code runs without any errors.</p>

<p>Here, we have resolved the error by commenting out the code related to the product. </p>

<p>If we need to calculate the product in the near future, we can uncomment it.</p>

<hr>
<h2 id="why-use-comments">Why use Comments?</h2>

<p>We should use comments for the following reasons:</p>

<ul>
<li>Comments make our code readable for future reference.</li>
<li>Comments are used for debugging purposes.</li>
<li>We can use comments for code collaboration as it helps peer developers to understand our code.</li>
</ul>

<div class="note-tip">
<p><strong>Note</strong>: Comments are not and should not be used as a substitute to explain poorly written code. Always try to write clean, understandable code, and then use comments as an addition.</p>

<p>In most cases, always use comments to explain 'why' rather than 'how' and you are good to go.</p>

</div>

</div>
</section>

<!-- second menu sections -->
<section id="second1">
  <h1>C Variables, Constants and Literals</h1>
  <div class="content">

<h2 id="variables">Variables</h2>

<p>In programming, a variable is a container (storage area) to hold data.</p>

<p>To indicate the storage area, each variable should be given a unique name (<a href="/c-programming/c-keywords-identifier">identifier</a>). Variable names are just the symbolic representation of a memory location. For example:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> age = <span class="hljs-number">25</span>;</code></pre>

<p>Here, <var>age</var> is a variable of <code>int</code> type and we have assigned an integer value <code>25</code> to it.</p>

<p>The value of a variable can be changed, hence the name variable.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">char</span> ch = <span class="hljs-string">'a'</span>;
<span class="hljs-comment">// some code</span>
ch = <span class="hljs-string">'l'</span>;</code></pre>

<p>Visit this page to learn more about <a href="/c-programming/c-data-types">different types of data a variable can store</a>.</p>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">What are the rules for naming a variable?</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion">

<p>1. A variable name can only have letters (both uppercase and lowercase letters), digits and underscore.</p>

<p>2. The first letter of a variable should be either a letter or an underscore.</p>

<p>3. There is no rule on how long a variable name (identifier) can be. However, you may run into problems in some compilers if the variable name is longer than 31 characters.</p>

<p class="note-tip"><strong>Note:</strong> You should always try to give meaningful names to variables. For example: <code>firstName</code> is a better variable name than <code>fn</code>.
</p></div></div></div></div></div></div></div></div>

<div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Can we change the data type of a variable?</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p></p><div id="block-inject-1" class="block-inject block-inject-1">
  
  
  
  <style>
  #div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
  #div-gpt-ad-Programizcom36796 {display: block;}
  @media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
  </style>
  
  <div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
  </div>
  
  <div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
  </div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
  </div>
<div class="clearfix"></div><p>C is a strongly typed language. This means that the variable type cannot be changed once it is declared. For example:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> number = <span class="hljs-number">5</span>;      <span class="hljs-comment">// integer variable</span>
number = <span class="hljs-number">5.5</span>;        <span class="hljs-comment">// error</span>
<span class="hljs-keyword">double</span> number;       <span class="hljs-comment">// error</span>
</code></pre>

<p>Here, the type of <var>number</var> variable is <code>int</code>. You cannot assign a floating-point (decimal) value <samp>5.5</samp> to this variable. Also, you cannot redefine the data type of the variable to <code>double</code>. By the way, to store the decimal values in C, you need to declare its type to either <code>double</code> or <code>float</code>.</p>

</div></div></div></div></div></div></div></div>
</div>


<hr>
<h2 id="constants">Constants</h2>

<p>If you want to define a variable whose value cannot be changed, you can use the <code>const</code> keyword. This will create a constant. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> PI = <span class="hljs-number">3.14</span>;</code></pre>

<p>Notice, we have added keyword <code>const</code>.</p>

<p>Here, <var>PI</var> is a symbolic constant; its value cannot be changed.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> PI = <span class="hljs-number">3.14</span>;
PI = <span class="hljs-number">2.9</span>; <span class="hljs-comment">//Error</span></code></pre>

<p>You can also define a constant using the <code>#define</code> preprocessor directive. We will learn about it in <a href="/c-programming/c-preprocessor-macros">C Macros</a> tutorial. </p>

<hr>
<h2 id="literals">Literals</h2>

<p>Literals are data used for representing fixed values. They can be used directly in the code. For example: <var>1</var>, <var>2.5</var>, <var>'c'</var> etc.</p>

<p>Here, <var>1</var>, <code>2.5</code> and <var>'c'</var> are literals. Why? You cannot assign different values to these terms.</p>

<hr>
<h3 id="integers">1. Integers</h3>

<p>An integer is a numeric literal(associated with numbers) without any fractional or exponential part. There are three types of integer literals in C programming:</p>

<ul>
<li>decimal (base 10)</li>
<li>octal (base 8)</li>
<li>hexadecimal (base 16)</li>
</ul>

<p>For example:</p>

<pre><samp>Decimal: 0, -9, 22 etc
Octal: 021, 077, 033 etc
Hexadecimal: 0x7f, 0x2a, 0x521 etc</samp></pre>

<p>In C programming, octal starts with a <var>0</var>, and hexadecimal starts with a <var>0x</var>.</p>

<hr>
<h3 id="floats">2. Floating-point Literals</h3>

<p>A floating-point literal is a numeric literal that has either a fractional form or an exponent form. For example:</p>

<pre><samp>-2.0
0.0000234
-0.22E-5</samp></pre>

<p class="note-tip"><strong>Note:</strong> <code>E-5 = 10<sup>-5</sup></code></p>

<hr>
<h3 id="characters">3. Characters</h3>

<p>A character literal is created by enclosing a single character inside single quotation marks. For example: <var>'a'</var>, <var>'m'</var>, <var>'F'</var>, <var>'2'</var>, <var>'}'</var> etc.</p>

<hr>
<h3 id="string">4. String Literals</h3>

<p>A string literal is a sequence of characters enclosed in double-quote marks. For example:</p>

<pre><samp>"good"                  //string constant
""                     //null string constant
"      "               //string constant of six white space
"x"                    //string constant having a single character.
"Earth is round\n"         //prints string with a newline</samp></pre>

<hr>
<h3 id="escape-sequences">5. Escape Sequences</h3>

<p>Sometimes, it is necessary to use characters that cannot be typed or has special meaning in C programming. For example: newline(enter), tab, question mark etc.</p>

<p>In order to use these characters, escape sequences are used.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Escape Sequences</th>
<th>Character</th>
</tr>
<tr>
<td><code>\b</code></td>
<td>Backspace</td>
</tr>
<tr>
<td><code>\f</code></td>
<td>Form feed</td>
</tr>
<tr>
<td><code>\n</code></td>
<td>Newline</td>
</tr>
<tr>
<td><code>\r</code></td>
<td>Return</td>
</tr>
<tr>
<td><code>\t</code></td>
<td>Horizontal tab</td>
</tr>
<tr>
<td><code>\v</code></td>
<td>Vertical tab</td>
</tr>
<tr>
<td><code>\\</code></td>
<td>Backslash</td>
</tr>
<tr>
<td><code>\'</code></td>
<td>Single quotation mark</td>
</tr>
<tr>
<td><code>\"</code></td>
<td>Double quotation mark</td>
</tr>
<tr>
<td><code>\?</code></td>
<td>Question mark</td>
</tr>
<tr>
<td><code>\0</code></td>
<td>Null character</td>
</tr>
</tbody></table>
</div>

<p>For example: <code>\n</code> is used for a newline. The backslash <code>\</code> causes escape from the normal way the characters are handled by the compiler.</p>

</div>
</section>
<section id="second2">
  <h1>C Data Types</h1>
  <div class="content">
    <p id="introduction">In C programming, data types are declarations for variables. This determines the type and size of data associated with variables. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> myVar;</code></pre>

<p>Here, <var>myVar</var> is a variable of <code>int</code> (integer) type. The size of <code>int</code> is 4 bytes.</p>

<hr>
<h2 id="basic">Basic types</h2>

<p>Here's a table containing commonly used types in C programming for quick access.</p>

<div class="table-responsive"><table border="0" cellpadding="1" cellspacing="1">
<thead>
  <tr>
    <th scope="col">Type</th>
    <th scope="col">Size (bytes)</th>
    <th scope="col">Format Specifier</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><code>int</code></td>
    <td>at least 2, usually 4</td>
    <td><code>%d</code>, <code>%i</code></td>
  </tr>
  <tr>
    <td><code>char</code></td>
    <td>1</td>
    <td><code>%c</code></td>
  </tr>
  <tr>
    <td><code>float</code></td>
    <td>4</td>
    <td><code>%f</code></td>
  </tr>
  <tr>
    <td><code>double</code></td>
    <td>8</td>
    <td><code>%lf</code></td>
  </tr>
  <tr>
    <td><code>short int</code></td>
    <td>2 usually</td>
    <td><code>%hd</code></td>
  </tr>
  <tr>
    <td><code>unsigned int</code></td>
    <td>at least 2, usually 4</td>
    <td><code>%u</code></td>
  </tr>
  <tr>
    <td><code>long int</code></td>
    <td>at least 4, usually 8</td>
    <td><code>%ld</code>, <code>%li</code></td>
  </tr>
  <tr>
    <td><code>long long int</code></td>
    <td>at least 8</td>
    <td><code>%lld</code>, <code>%lli</code></td>
  </tr>
  <tr>
    <td><code>unsigned long int</code></td>
    <td>at least 4</td>
    <td><code>%lu</code></td>
  </tr>
  <tr>
    <td><code>unsigned long long int</code></td>
    <td>at least 8</td>
    <td><code>%llu</code></td>
  </tr>
  <tr>
    <td><code>signed char</code></td>
    <td>1</td>
    <td><code>%c</code></td>
  </tr>
  <tr>
    <td><code>unsigned char</code></td>
    <td>1</td>
    <td><code>%c</code></td>
  </tr>
  <tr>
    <td><code>long double</code></td>
    <td>at least 10, usually 12 or 16</td>
    <td><code>%Lf</code></td>
  </tr>
</tbody>
</table></div>

<hr>
<h3 id="int">int</h3>

<p>Integers are whole numbers that can have both zero, positive and negative values but no decimal values. For example, <code>0</code>, <code>-5</code>, <code>10</code></p>

<p>We can use <code>int</code> for declaring an integer variable.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> id;</code></pre>

<p>Here, <var>id</var> is a variable of type integer.</p>

<p>You can declare multiple variables at once in C programming. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> id, age;</code></pre>

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
  </div><div class="clearfix"></div><p>The size of <code>int</code> is usually 4 bytes (32 bits). And, it can take <code>2<sup>32</sup></code> distinct states from <code>-2147483648</code> to <code>2147483647</code>.</p>

<hr>
<h3 id="float-double">float and double</h3>

<p><code>float</code> and <code>double</code> are used to hold real numbers.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">float</span> salary;
<span class="hljs-keyword">double</span> price;</code></pre>

<p>In C, floating-point numbers can also be represented in exponential. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">float</span> normalizationFactor = <span class="hljs-number">22.442e2</span>;</code></pre>

<p>What's the difference between <code>float</code> and <code>double</code>?</p>

<p>The size of <code>float</code> (single precision float data type) is 4 bytes. And the size of <code>double</code> (double precision float data type) is 8 bytes.</p>

<hr>
<h3 id="char">char</h3>

<p>Keyword <code>char</code> is used for declaring character type variables. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">char</span> test = <span class="hljs-string">'h'</span>;</code></pre>

<p>The size of the character variable is 1 byte.</p>

<hr>
<h3 id="void">void</h3>

<p><code>void</code> is an incomplete type. It means "nothing" or "no type". You can think of void as <strong>absent</strong>.</p>

<p>For example, if a function is not returning anything, its return type should be <code>void</code>.</p>

<p>Note that, you cannot create variables of <code>void</code> type.</p>

<hr>
<h3>short and long</h3>

<p>If you need to use a large number, you can use a type specifier <code>long</code>. Here's how:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">long</span> a;
<span class="hljs-keyword">long</span> <span class="hljs-keyword">long</span> b;
<span class="hljs-keyword">long</span> <span class="hljs-keyword">double</span> c;</code></pre>

<p>Here variables <var>a</var> and <var>b</var> can store integer values. And, <var>c</var> can store a floating-point number.</p>

<p>If you are sure, only a small integer (<code>[−32,767, +32,767]</code> range) will be used, you can use <code>short</code>.</p>

<pre>short d;</pre>

<p>You can always check the size of a variable using the <code>sizeof()</code> operator.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;      </span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
short a;
<span class="hljs-keyword">long</span> b;
<span class="hljs-keyword">long</span> <span class="hljs-keyword">long</span> c;
<span class="hljs-keyword">long</span> <span class="hljs-keyword">double</span> d;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"size of short = %d bytes\n"</span>, <span class="hljs-keyword">sizeof</span>(a));
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"size of long = %d bytes\n"</span>, <span class="hljs-keyword">sizeof</span>(b));
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"size of long long = %d bytes\n"</span>, <span class="hljs-keyword">sizeof</span>(c));
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"size of long double= %d bytes\n"</span>, <span class="hljs-keyword">sizeof</span>(d));
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<hr>
<h3>signed and unsigned</h3>

<p>In C, <code>signed</code> and <code>unsigned</code> are type modifiers. You can alter the data storage of a data type by using them:</p>

<ul>
<li><code>signed</code> - allows for storage of both positive and negative numbers</li>
<li><code>unsigned</code> - allows for storage of only positive numbers</li>
</ul>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// valid codes</span>
<span class="hljs-keyword">unsigned</span> <span class="hljs-keyword">int</span> x = <span class="hljs-number">35</span>;
<span class="hljs-keyword">int</span> y = <span class="hljs-number">-35</span>;  <span class="hljs-comment">// signed int</span>
<span class="hljs-keyword">int</span> z = <span class="hljs-number">36</span>;  <span class="hljs-comment">// signed int</span>

<span class="hljs-comment">// invalid code: unsigned int cannot hold negative integers</span>
<span class="hljs-keyword">unsigned</span> <span class="hljs-keyword">int</span> num = <span class="hljs-number">-35</span>;
</code></pre>

<p>Here, the variables <var>x</var> and <var>num</var> can hold only zero and positive values because we have used the <code>unsigned</code> modifier.</p>

<p>Considering the size of <code>int</code> is 4 bytes, variable <var>y</var> can hold values from <code>-2<sup>31</sup></code> to <code>2<sup>31</sup>-1</code>, whereas variable <var>x</var> can hold values from <code>0</code> to <code>2<sup>32</sup>-1</code>.</p>

<hr>
<h2>Derived Data Types</h2>

<p>Data types that are derived from fundamental data types are derived types. For example: arrays, pointers, function types, structures, etc.</p>

<p>We will learn about these derived data types in later tutorials.</p>

<ul>
<li>bool type</li>
<li>Enumerated type</li>
<li>Complex types</li>
</ul>
</div>
</section>
<section id="second3">
  <h1>C Input Output (I/O)</h1>
  <div class="content">
    <h2 id="c-out">C Output</h2>

<p>In C programming, <code>printf()</code> is one of the main output function. The function sends formatted output to the screen. For example,</p>

<hr>
<h3>Example 1: C Output</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;    </span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{ 
  <span class="hljs-comment">// Displays the string inside quotations</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"C Programming"</span>);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>C Programming</samp></pre>

<p>How does this program work?</p>

<ul>
<li>All valid C programs must contain the <code>main()</code> function. The code execution begins from the start of the <code>main()</code> function.</li>
<li>The <code>printf()</code> is a library function to send formatted output to the screen. The function prints the string inside quotations.</li>
<li>To use <code>printf()</code> in our program, we need to include <code>stdio.h</code> header file using the&nbsp;<code>#include &lt;stdio.h&gt;</code> statement.</li>
<li>The <code>return 0;</code> statement inside the <code>main()</code> function is the "Exit status" of the program. It's optional.</li>
</ul>

<hr>
<h3 id="integer-output">Example 2: Integer Output</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> testInteger = <span class="hljs-number">5</span>;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Number = %d"</span>, testInteger);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Number = 5</samp></pre>

<p>We use <code>%d</code> format specifier to print <code>int</code> types. Here, the <code>%d</code> inside the quotations will be replaced by the value of <var>testInteger</var>.</p>

<hr>
<h3>Example 3: float and double Output</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">float</span> number1 = <span class="hljs-number">13.5</span>;
  <span class="hljs-keyword">double</span> number2 = <span class="hljs-number">12.4</span>;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"number1 = %f\n"</span>, number1);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"number2 = %lf"</span>, number2);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
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

<pre><samp>number1 = 13.500000
number2 = 12.400000</samp></pre>

<p>To print <code>float</code>, we use <code>%f</code> format specifier. Similarly, we use <code>%lf</code> to print <code>double</code> values.</p>

<hr>
<h3>Example 4: Print Characters</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">char</span> chr = <span class="hljs-string">'a'</span>;    
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"character = %c"</span>, chr);  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
} </code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>character = a</samp>
</pre>

<p>To print <code>char</code>, we use <code>%c</code> format specifier.</p>

<hr>
<h2 id="c-input">C Input</h2>

<p>In C programming, <code>scanf()</code> is one of the commonly used function to take input from the user. The <code>scanf()</code> function reads formatted input from the standard input such as keyboards.</p>

<hr>
<h3>Example 5: Integer Input/Output</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> testInteger;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter an integer: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;testInteger);  
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Number = %d"</span>,testInteger);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter an integer: 4
Number = 4</samp></pre>

<p>Here, we have used <code>%d</code> format specifier inside the <code>scanf()</code> function to take <code>int</code> input from the user. When the user enters an integer, it is stored in the <var>testInteger</var> variable.</p>

<p class="note-tip">Notice, that we have used <code>&amp;testInteger</code> inside <code>scanf()</code>. It is because <var>&amp;testInteger</var> gets the address of <var>testInteger</var>, and the value entered by the user is stored in that address.</p>

<hr>
<h3 id="float-io">Example 6: Float and Double Input/Output</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">float</span> num1;
  <span class="hljs-keyword">double</span> num2;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a number: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%f"</span>, &amp;num1);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter another number: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%lf"</span>, &amp;num2);

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"num1 = %f\n"</span>, num1);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"num2 = %lf"</span>, num2);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a number: 12.523
Enter another number: 10.2
num1 = 12.523000
num2 = 10.200000</samp></pre>

<p>We use <code>%f</code> and <code>%lf</code> format specifier for <code>float</code> and <code>double</code> respectively.</p>

<hr>
<h3 id="character-io">Example 7: C Character I/O</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">char</span> chr;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a character: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%c"</span>,&amp;chr);     
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"You entered %c."</span>, chr);  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}   </code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a character: g
You entered g</samp>
</pre>

<p>When a character is entered by the user in the above program, the character itself is not stored. Instead, an integer value (ASCII value) is stored.</p>

<p>And when we display that value using <code>%c</code> text format, the entered character is displayed. If we use <code>%d</code> to display the character, it's ASCII value is printed.</p>

<hr>
<h3>Example 8: ASCII Value</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">char</span> chr;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a character: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%c"</span>, &amp;chr);     

  <span class="hljs-comment">// When %c is used, a character is displayed</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"You entered %c.\n"</span>,chr);  

  <span class="hljs-comment">// When %d is used, ASCII value is displayed</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"ASCII value is %d."</span>, chr);  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Output</p>

<pre><samp>Enter a character: g
You entered g.
ASCII value is 103.</samp>
</pre>

<hr>
<h2 id="multiple-io">I/O Multiple Values</h2>

<p>Here's how you can take multiple inputs from the user and display them.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> a;
  <span class="hljs-keyword">float</span> b;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter integer and then a float: "</span>);

  <span class="hljs-comment">// Taking multiple inputs</span>
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d%f"</span>, &amp;a, &amp;b);

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"You entered %d and %f"</span>, a, b);  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter integer and then a float: -3
3.4
You entered -3 and 3.400000</samp>
</pre>

<hr>
<h2 id="format-specifiers">Format Specifiers for I/O</h2>

<p>As you can see from the above examples, we use</p>

<ul>
<li><code>%d</code> for <code>int</code></li>
<li><code>%f</code> for <code>float</code></li>
<li><code>%lf</code> for <code>double</code></li>
<li><code>%c</code> for <code>char</code></li>
</ul>

<p>Here's a list of commonly used C data types and their format specifiers.</p>

<div class="table-responsive"><table border="0">
<thead>
  <tr>
    <th>Data Type</th>
    <th>Format Specifier</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><code>int</code></td>
    <td><code>%d</code></td>
  </tr>
  <tr>
    <td><code>char</code></td>
    <td><code>%c</code></td>
  </tr>
  <tr>
    <td><code>float</code></td>
    <td><code>%f</code></td>
  </tr>
  <tr>
    <td><code>double</code></td>
    <td><code>%lf</code></td>
  </tr>
  <tr>
    <td><code>short int</code></td>
    <td><code>%hd</code></td>
  </tr>
  <tr>
    <td><code>unsigned int</code></td>
    <td><code>%u</code></td>
  </tr>
  <tr>
    <td><code>long int</code></td>
    <td><code>%li</code></td>
  </tr>
  <tr>
    <td><code>long long int</code></td>
    <td><code>%lli</code></td>
  </tr>
  <tr>
    <td><code>unsigned long int</code></td>
    <td><code>%lu</code></td>
  </tr>
  <tr>
    <td><code>unsigned long long int</code></td>
    <td><code>%llu</code></td>
  </tr>
  <tr>
    <td><code>signed char</code></td>
    <td><code>%c</code></td>
  </tr>
  <tr>
    <td><code>unsigned char</code></td>
    <td><code>%c</code></td>
  </tr>
  <tr>
    <td><code>long double</code></td>
    <td><code>%Lf</code></td>
  </tr>
</tbody>
</table></div>
</div>
</section>
<section id="second4">
  <h1>C Programming Operators</h1>
  <div class="content">
    <div id="block-inject-1" class="block-inject block-inject-1">
  
  
  
  <style>
  #div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
  #div-gpt-ad-Programizcom36796 {display: block;}
  @media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
  </style>
  
  <div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
  </div>
  
  <div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
  </div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
  </div><div class="clearfix"></div><p></p><p id="operator">An operator is a symbol that operates on a value or a variable. For example: <var>+</var> is an operator to perform addition.</p>

<p>C has a wide range of operators to perform various operations.</p>

<hr>
<h2 id="arithmetic">C Arithmetic Operators</h2>

<p>An arithmetic operator performs mathematical operations such as addition, subtraction, multiplication, division etc on numerical values (constants and variables).</p>

<div class="table-responsive"><table border="0">
<thead>
  <tr>
    <th>Operator</th>
    <th>Meaning of Operator</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>+</td>
    <td>addition or unary plus</td>
  </tr>
  <tr>
    <td>-</td>
    <td>subtraction or unary minus</td>
  </tr>
  <tr>
    <td>*</td>
    <td>multiplication</td>
  </tr>
  <tr>
    <td>/</td>
    <td>division</td>
  </tr>
  <tr>
    <td>%</td>
    <td>remainder after division (modulo division)</td>
  </tr>
</tbody>
</table></div>

<h3>Example 1: Arithmetic Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Working of arithmetic operators</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">9</span>,b = <span class="hljs-number">4</span>, c;
  
  c = a+b;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"a+b = %d \n"</span>,c);
  c = a-b;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"a-b = %d \n"</span>,c);
  c = a*b;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"a*b = %d \n"</span>,c);
  c = a/b;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"a/b = %d \n"</span>,c);
  c = a%b;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Remainder when a divided by b = %d \n"</span>,c);
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>a+b = 13
a-b = 5
a*b = 36
a/b = 2
Remainder when a divided by b=1</samp></pre>

<p>The operators <code>+</code>, <code>-</code> and <code>*</code> computes addition, subtraction, and multiplication respectively as you might have expected.</p>

<p>In normal calculation, <code>9/4 = 2.25</code>. However, the output is <code>2</code> in the program.</p>

<p>It is because both the variables <var>a</var> and b are integers. Hence, the output is also an integer. The compiler neglects the term after the decimal point and shows answer <code>2</code> instead of <code>2.25</code>.</p>

<p>The modulo operator <code>%</code> computes the remainder. When <code>a=9</code> is divided by <code>b=4</code>, the remainder is <code>1</code>. The <code>%</code> operator can only be used with integers.</p>

<p>Suppose <code>a = 5.0</code>, <code>b = 2.0</code>, <code>c = 5</code> and <code>d = 2</code>. Then in C programming,</p>

<pre>// Either one of the operands is a floating-point number
a/b = 2.5  
a/d = 2.5  
c/b = 2.5  

// Both operands are integers
c/d = 2</pre>

<hr>
<h2 class="note" id="increment">C Increment and Decrement Operators</h2>

<p>C programming has two operators increment <code>++</code> and decrement <code>--</code> to change the value of an operand (constant or variable) by 1.</p>

<p>Increment <code>++</code> increases the value by 1 whereas decrement <code>--</code> decreases the value by 1. These two operators are unary operators, meaning they only operate on a single operand.</p>

<h3>Example 2: Increment and Decrement Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Working of increment and decrement operators</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">10</span>, b = <span class="hljs-number">100</span>;
  <span class="hljs-keyword">float</span> c = <span class="hljs-number">10.5</span>, d = <span class="hljs-number">100.5</span>;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"++a = %d \n"</span>, ++a);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"--b = %d \n"</span>, --b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"++c = %f \n"</span>, ++c);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"--d = %f \n"</span>, --d);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>++a = 11
--b = 99
++c = 11.500000
--d = 99.500000</samp></pre>

<p>Here, the operators <code>++</code> and <code>--</code> are used as prefixes. These two operators can also be used as postfixes like <code>a++</code> and <code>a--</code>. Visit this page to learn more about how <a href="/article/increment-decrement-operator-difference-prefix-postfix" title="Increment Operator as postfix">increment and decrement operators work when used as postfix</a>.</p>

<hr>
<h2 id="assignment">C Assignment Operators</h2>

<p>An assignment operator is used for assigning a value to a variable. The most common assignment operator is <code>=</code></p>

<div class="table-responsive"><table border="0">
<thead>
  <tr>
    <th>Operator</th>
    <th>Example</th>
    <th>Same as</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>=</td>
    <td>a = b</td>
    <td>a = b</td>
  </tr>
  <tr>
    <td>+=</td>
    <td>a += b</td>
    <td>a = a+b</td>
  </tr>
  <tr>
    <td>-=</td>
    <td>a -= b</td>
    <td>a = a-b</td>
  </tr>
  <tr>
    <td>*=</td>
    <td>a *= b</td>
    <td>a = a*b</td>
  </tr>
  <tr>
    <td>/=</td>
    <td>a /= b</td>
    <td>a = a/b</td>
  </tr>
  <tr>
    <td>%=</td>
    <td>a %= b</td>
    <td>a = a%b</td>
  </tr>
</tbody>
</table></div>

<h3>Example 3: Assignment Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Working of assignment operators</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">5</span>, c;

  c = a;      <span class="hljs-comment">// c is 5</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"c = %d\n"</span>, c);
  c += a;     <span class="hljs-comment">// c is 10 </span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"c = %d\n"</span>, c);
  c -= a;     <span class="hljs-comment">// c is 5</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"c = %d\n"</span>, c);
  c *= a;     <span class="hljs-comment">// c is 25</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"c = %d\n"</span>, c);
  c /= a;     <span class="hljs-comment">// c is 5</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"c = %d\n"</span>, c);
  c %= a;     <span class="hljs-comment">// c = 0</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"c = %d\n"</span>, c);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>c = 5 
c = 10 
c = 5 
c = 25 
c = 5 
c = 0</samp></pre>

<hr>
<h3 id="relational">C Relational Operators</h3>

<p>A relational operator checks the relationship between two operands. If the relation is true, it returns 1; if the relation is false, it returns value 0.</p>

<p>Relational operators are used in <a href="/c-programming/c-if-else-statement" title="C if else">decision making</a> and <a href="/c-programming/c-for-loop" title="C for loop">loops</a>.</p>

<div class="table-responsive"><table border="0">
<thead>
  <tr>
    <th>Operator</th>
    <th>Meaning of Operator</th>
    <th>Example</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>==</td>
    <td>Equal to</td>
    <td><code>5 == 3</code> is evaluated to 0</td>
  </tr>
  <tr>
    <td>&gt;</td>
    <td>Greater than</td>
    <td><code>5 &gt; 3</code> is evaluated to 1</td>
  </tr>
  <tr>
    <td>&lt;</td>
    <td>Less than</td>
    <td><code>5 &lt; 3</code> is evaluated to 0</td>
  </tr>
  <tr>
    <td>!=</td>
    <td>Not equal to</td>
    <td><code>5 != 3</code> is evaluated to 1</td>
  </tr>
  <tr>
    <td>&gt;=</td>
    <td>Greater than or equal to</td>
    <td><code>5 &gt;= 3</code> is evaluated to 1</td>
  </tr>
  <tr>
    <td>&lt;=</td>
    <td>Less than or equal to</td>
    <td><code>5 &lt;= 3</code> is evaluated to 0</td>
  </tr>
</tbody>
</table></div>

<h3>Example 4: Relational Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Working of relational operators</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">5</span>, b = <span class="hljs-number">5</span>, c = <span class="hljs-number">10</span>;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d == %d is %d \n"</span>, a, b, a == b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d == %d is %d \n"</span>, a, c, a == c);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d &gt; %d is %d \n"</span>, a, b, a &gt; b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d &gt; %d is %d \n"</span>, a, c, a &gt; c);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d &lt; %d is %d \n"</span>, a, b, a &lt; b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d &lt; %d is %d \n"</span>, a, c, a &lt; c);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d != %d is %d \n"</span>, a, b, a != b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d != %d is %d \n"</span>, a, c, a != c);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d &gt;= %d is %d \n"</span>, a, b, a &gt;= b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d &gt;= %d is %d \n"</span>, a, c, a &gt;= c);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d &lt;= %d is %d \n"</span>, a, b, a &lt;= b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d &lt;= %d is %d \n"</span>, a, c, a &lt;= c);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>5 == 5 is 1
5 == 10 is 0
5 &gt; 5 is 0
5 &gt; 10 is 0
5 &lt; 5 is 0
5 &lt; 10 is 1
5 != 5 is 0
5 != 10 is 1
5 &gt;= 5 is 1
5 &gt;= 10 is 0
5 &lt;= 5 is 1
5 &lt;= 10 is 1 </samp></pre>

<hr>
<h3 id="logical">C Logical Operators</h3>

<p>An expression containing logical operator returns either 0 or 1 depending upon whether expression results true or false. Logical operators are commonly used in <a href="/c-programming/c-if-else-statement" title="C if else">decision making in C programming</a>.</p>

<div class="table-responsive"><table border="0">
<thead>
  <tr>
    <th>Operator</th>
    <th>Meaning</th>
    <th>Example</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>&amp;&amp;</td>
    <td>Logical AND. True only if all operands are true</td>
    <td>If c = 5 and d = 2 then, expression <code>((c==5) &amp;&amp; (d&gt;5))</code> equals to 0.</td>
  </tr>
  <tr>
    <td>||</td>
    <td>Logical OR. True only if either one operand is true</td>
    <td>If c = 5 and d = 2 then, expression <code>((c==5) || (d&gt;5))</code> equals to 1.</td>
  </tr>
  <tr>
    <td>!</td>
    <td>Logical NOT. True only if the operand is 0</td>
    <td>If c = 5 then, expression <code>!(c==5)</code> equals to 0.</td>
  </tr>
</tbody>
</table></div>

<h3>Example 5: Logical Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Working of logical operators</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">5</span>, b = <span class="hljs-number">5</span>, c = <span class="hljs-number">10</span>, result;

  result = (a == b) &amp;&amp; (c &gt; b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"(a == b) &amp;&amp; (c &gt; b) is %d \n"</span>, result);

  result = (a == b) &amp;&amp; (c &lt; b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"(a == b) &amp;&amp; (c &lt; b) is %d \n"</span>, result);

  result = (a == b) || (c &lt; b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"(a == b) || (c &lt; b) is %d \n"</span>, result);

  result = (a != b) || (c &lt; b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"(a != b) || (c &lt; b) is %d \n"</span>, result);

  result = !(a != b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"!(a != b) is %d \n"</span>, result);

  result = !(a == b);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"!(a == b) is %d \n"</span>, result);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><b>Output</b></p>

<pre><samp>(a == b) &amp;&amp; (c &gt; b) is 1 
(a == b) &amp;&amp; (c &lt; b) is 0 
(a == b) || (c &lt; b) is 1 
(a != b) || (c &lt; b) is 0 
!(a != b) is 1 
!(a == b) is 0 </samp></pre>

<p><strong>Explanation of logical operator program</strong></p>

<ul>
<li><code>(a == b) &amp;&amp; (c &gt; 5)</code> evaluates to 1 because both operands <code>(a == b)</code> and <code>(c &gt; b)</code> is 1 (true).</li>
<li><code>(a == b) &amp;&amp; (c &lt; b)</code> evaluates to 0 because operand <code>(c &lt; b)</code> is 0 (false).</li>
<li><code>(a == b) || (c &lt; b)</code> evaluates to 1 because <code>(a = b)</code> is 1 (true).</li>
<li><code>(a != b) || (c &lt; b)</code> evaluates to 0 because both operand <code>(a != b)</code> and <code>(c &lt; b)</code> are 0 (false).</li>
<li><code>!(a != b)</code> evaluates to 1 because operand <code>(a != b)</code> is 0 (false). Hence, !(a != b) is 1 (true).</li>
<li><code>!(a == b)</code> evaluates to 0 because <code>(a == b)</code> is 1 (true). Hence, <code>!(a == b)</code> is 0 (false).</li>
</ul>

<hr>
<h3>C Bitwise Operators</h3>

<p>During computation, mathematical operations like: addition, subtraction, multiplication, division, etc are converted to bit-level which makes processing faster and saves power.</p>

<p>Bitwise operators are used in C programming to perform bit-level operations.</p>

<div class="table-responsive"><table border="0">
<thead>
  <tr>
    <th>Operators</th>
    <th>Meaning of operators</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>&amp;</td>
    <td>Bitwise AND</td>
  </tr>
  <tr>
    <td>|</td>
    <td>Bitwise OR</td>
  </tr>
  <tr>
    <td>^</td>
    <td>Bitwise exclusive OR</td>
  </tr>
  <tr>
    <td>~</td>
    <td>Bitwise complement</td>
  </tr>
  <tr>
    <td>&lt;&lt;</td>
    <td>Shift left</td>
  </tr>
  <tr>
    <td>&gt;&gt;</td>
    <td>Shift right</td>
  </tr>
</tbody>
</table></div>

<p>Visit <a href="/c-programming/bitwise-operators" title="C bitwise operators">bitwise operator in C</a> to learn more.</p>

<h2 id="other-operators">Other Operators</h2>

<hr>
<h3 id="comma-operator">Comma Operator</h3>

<p>Comma operators are used to link related expressions together. For example:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> a, c = <span class="hljs-number">5</span>, d;</code></pre>

<hr>
<h3 id="sizeof">The sizeof operator</h3>

<p>The <code>sizeof</code> is a unary operator that returns the size of data (constants, variables, array, structure, etc).</p>

<h3>Example 6: sizeof Operator</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> a;
  <span class="hljs-keyword">float</span> b;
  <span class="hljs-keyword">double</span> c;
  <span class="hljs-keyword">char</span> d;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Size of int=%lu bytes\n"</span>,<span class="hljs-keyword">sizeof</span>(a));
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Size of float=%lu bytes\n"</span>,<span class="hljs-keyword">sizeof</span>(b));
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Size of double=%lu bytes\n"</span>,<span class="hljs-keyword">sizeof</span>(c));
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Size of char=%lu byte\n"</span>,<span class="hljs-keyword">sizeof</span>(d));

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Size of int = 4 bytes
Size of float = 4 bytes
Size of double = 8 bytes
Size of char = 1 byte</samp>
</pre>

<hr>
<p>Other operators such as ternary operator <code>?:</code>, reference operator <code>&amp;</code>, dereference operator <code>*</code> and member selection operator&nbsp;<code>-&gt;</code>&nbsp;will be discussed in later tutorials.</p>
</div>
</section>

<!-- third menu sections -->
<section id="third1">
  <h1>C if...else Statement</h1>
  <div class="content">
    <h2 id="if-statement">C if Statement</h2>

<p>The syntax of the <code>if</code> statement in C programming is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">if</span> (test expression) 
{
 <span class="hljs-comment">// code</span>
}</code></pre>

<hr>
<h3>How if statement works?</h3>

<p>The <code>if</code> statement evaluates the test expression inside the parenthesis <code>()</code>.</p>

<ul>
<li>If the test expression is evaluated to true, statements inside the body of <code>if</code> are executed.</li>
<li>If the test expression is evaluated to false, statements inside the body of <code>if</code> are not executed.</li>
</ul>

<figure><img alt="How if statement works in C programming?" height="196" src="assets/images/working-c-if-statement.jpg" title="Working of if statement" width="527">
<figcaption>Working of if Statement</figcaption>
</figure>

<p>To learn more about when test expression is evaluated to true (non-zero value) and false (0), check <a href="/c-programming/c-operators#relational" title="C Relational operators">relational</a> and <a href="/c-programming/c-operators#logical" title="C logical operators">logical operators</a>.</p>

<hr>
<h3 id="example-if">Example 1: if statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to display a number if it is negative</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter an integer: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;number);

  <span class="hljs-comment">// true if number is less than 0</span>
  <span class="hljs-keyword">if</span> (number &lt; <span class="hljs-number">0</span>) {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"You entered %d.\n"</span>, number);
  }

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"The if statement is easy."</span>);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output 1</strong></p>

<pre><samp>Enter an integer: -2
You entered -2.
The if statement is easy.</samp></pre>

<p>When the user enters -2, the test expression <code>number&lt;0</code> is evaluated to true. Hence, <samp>You entered -2</samp> is displayed on the screen.</p>

<p><strong>Output 2</strong></p>

<pre><samp>Enter an integer: 5
The if statement is easy.</samp></pre>

<p>When the user enters 5, the test expression <code>number&lt;0</code> is evaluated to false and the statement inside the body of <code>if</code> is not executed</p>

<hr>
<h2 id="if-else-statement">C if...else Statement</h2>

<p>The <code>if</code> statement may have an optional <code>else</code> block. The syntax of the <code>if..else</code> statement is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">if</span> (test expression) {
  <span class="hljs-comment">// run code if test expression is true</span>
}
<span class="hljs-keyword">else</span> {
  <span class="hljs-comment">// run code if test expression is false</span>
}</code></pre>

<hr>
<h3>How if...else statement works?</h3>

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
  </div><div class="clearfix"></div><p>If the test expression is evaluated to true,</p>

<ul>
<li>statements inside the body of <code>if</code> are executed.</li>
<li>statements inside the body of <code>else</code> are skipped from execution.</li>
</ul>

<p>If the test expression is evaluated to false,</p>

<ul>
<li>statements inside the body of <code>else</code> are executed</li>
<li>statements inside the body of <code>if</code> are skipped from execution.</li>
</ul>

<figure><img alt="How if...else statement works in C programming?" height="267" src="assets/images/how-if-else-works-c-programming.jpg" title="Working of if...else statement" width="547">
<figcaption>Working of if...else Statement</figcaption>
</figure>

<hr>
<h3 id="if-else-example">Example 2: if...else statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Check whether an integer is odd or even</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter an integer: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;number);

  <span class="hljs-comment">// True if the remainder is 0</span>
  <span class="hljs-keyword">if</span>  (number%<span class="hljs-number">2</span> == <span class="hljs-number">0</span>) {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is an even integer."</span>,number);
  }
  <span class="hljs-keyword">else</span> {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is an odd integer."</span>,number);
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter an integer: 7
7 is an odd integer.</samp></pre>

<p>When the user enters 7, the test expression <code>number%2==0</code> is evaluated to false. Hence, the statement inside the body of <code>else</code> is executed.</p>

<hr>
<h2 id="if-else-ladder">C if...else Ladder</h2>

<p>The <code>if...else</code> statement executes two different codes depending upon whether the test expression is true or false. Sometimes, a choice has to be made from more than 2 possibilities.</p>

<p>The if...else ladder allows you to check between multiple test expressions and execute different statements.</p>

<hr>
<h3>Syntax of if...else Ladder</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">if</span> (test expression1) {
 <span class="hljs-comment">// statement(s)</span>
}
<span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span>(test expression2) {
 <span class="hljs-comment">// statement(s)</span>
}
<span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (test expression3) {
 <span class="hljs-comment">// statement(s)</span>
}
.
.
<span class="hljs-keyword">else</span> {
 <span class="hljs-comment">// statement(s)</span>
}</code></pre>

<hr>
<h3 id="if-else-ladder-example">Example 3: C if...else Ladder</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to relate two integers using =, &gt; or &lt; symbol</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number1, number2;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter two integers: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d %d"</span>, &amp;number1, &amp;number2);

  <span class="hljs-comment">//checks if the two integers are equal.</span>
  <span class="hljs-keyword">if</span>(number1 == number2) {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Result: %d = %d"</span>,number1,number2);
  }

  <span class="hljs-comment">//checks if number1 is greater than number2.</span>
  <span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (number1 &gt; number2) {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Result: %d &gt; %d"</span>, number1, number2);
  }

  <span class="hljs-comment">//checks if both test expressions are false</span>
  <span class="hljs-keyword">else</span> {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Result: %d &lt; %d"</span>,number1, number2);
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter two integers: 12
23
Result: 12 &lt; 23</samp></pre>

<hr>
<h2 id="nested-if-else">Nested if...else</h2>

<p>It is possible to include an <code>if...else</code> statement inside the body of another <code>if...else</code> statement.</p>

<hr>
<h3 id="example-nested-if-else">Example 4: Nested if...else</h3>

<p>This program given below relates two integers using either <code>&lt;</code>, <code>&gt;</code> and <code>=</code> similar to the <code>if...else</code> ladder's example. However, we will use a nested <code>if...else</code> statement to solve this problem.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number1, number2;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter two integers: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d %d"</span>, &amp;number1, &amp;number2);

  <span class="hljs-keyword">if</span> (number1 &gt;= number2) {
    <span class="hljs-keyword">if</span> (number1 == number2) {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Result: %d = %d"</span>,number1,number2);
    }
    <span class="hljs-keyword">else</span> {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Result: %d &gt; %d"</span>, number1, number2);
    }
  }
  <span class="hljs-keyword">else</span> {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Result: %d &lt; %d"</span>,number1, number2);
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<hr>
<p class="note-tip">If the body of an <code>if...else</code> statement has only one statement, you do not need to use brackets <code>{}</code>.</p>

<p>For example, this code</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">if</span> (a &gt; b) {
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hello"</span>);
}
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hi"</span>);</code></pre>

<p>is equivalent to</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">if</span> (a &gt; b)
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hello"</span>);
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hi"</span>);</code>
</pre>
</div>
</section>
<section id="third2">
  <h1>C for Loop</h1>
  <div class="content">
    <p>In programming, a loop is used to repeat a block of code until the specified condition is met.</p>

<p>C programming has three types of loops:</p>

<ol>
<li>for loop</li>
<li>while loop</li>
<li>do...while loop</li>
</ol>

<p>We will learn about <code>for</code> loop in this tutorial. In the next tutorial, we will learn about <code>while</code> and <code>do...while</code> loop.</p>

<hr>
<h2><a id="for-loop" name="for-loop"></a>for Loop</h2>

<p>The syntax of the <code>for</code> loop is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">for</span> (initializationStatement; testExpression; updateStatement)
{
  <span class="hljs-comment">// statements inside the body of loop</span>
}</code></pre>

<hr>
<h3 id="for-loop-working">How for loop works?</h3>

<ul>
<li>The initialization statement is executed only once.</li>
<li>Then, the test expression is evaluated. If the test expression is evaluated to false, the <code>for</code> loop is terminated.</li>
<li>However, if the test expression is evaluated to true, statements inside the body of the <code>for</code> loop are executed, and the update expression is updated.</li>
<li>Again the test expression is evaluated.</li>
</ul>

<p>This process goes on until the test expression is false. When the test expression is false, the loop terminates.</p>

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
  </div><div class="clearfix"></div><p>To learn more about test expression (when the test expression is evaluated to true and false), check out <a href="/c-programming/c-operators#relational" title="C Relational operators">relational</a> and <a href="/c-programming/c-operators#logical" title="C logical operators">logical operators</a>.</p>

<hr>
<h3 id="for-flowchart">for loop Flowchart</h3>

<figure><img alt="Flowchart of for loop in C programming" class="figure" height="477" src="assets/images/c-for-loop.jpg" title="for loop Flowchart" width="340">
<figcaption>Working of for loop</figcaption>
</figure>

<hr>
<h3 id="example-for-loop">Example 1: for loop</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Print numbers from 1 to 10</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> i;

<span class="hljs-keyword">for</span> (i = <span class="hljs-number">1</span>; i &lt; <span class="hljs-number">11</span>; ++i)
{
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d "</span>, i);
}
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1 2 3 4 5 6 7 8 9 10</samp></pre>

<ol>
<li><var>i</var> is initialized to 1.</li>
<li>The test expression <code>i &lt; 11</code> is evaluated. Since 1 less than 11 is true, the body of <code>for</code> loop is executed. This will print the <strong>1</strong> (value of <var>i</var>) on the screen.</li>
<li>The update statement <code>++i</code> is executed. Now, the value of <var>i</var> will be 2. Again, the test expression is evaluated to true, and the body of <code>for</code> loop is executed. This will print <strong>2</strong> (value of <var>i</var>) on the screen.</li>
<li>Again, the update statement <code>++i</code> is executed and the test expression <code>i &lt; 11</code> is evaluated. This process goes on until <var>i</var> becomes 11.</li>
<li>When <var>i</var> becomes 11, <var>i &lt; 11</var> will be false, and the <code>for</code> loop terminates.</li>
</ol>

<hr>
<h3>Example 2: for loop</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to calculate the sum of first n natural numbers</span>
<span class="hljs-comment">// Positive integers 1,2,3...n are known as natural numbers</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> num, count, sum = <span class="hljs-number">0</span>;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a positive integer: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;num);

  <span class="hljs-comment">// for loop terminates when num is less than count</span>
  <span class="hljs-keyword">for</span>(count = <span class="hljs-number">1</span>; count &lt;= num; ++count)
  {
      sum += count;
  }

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Sum = %d"</span>, sum);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a positive integer: 10
Sum = 55</samp></pre>

<p>The value entered by the user is stored in the variable <var>num</var>. Suppose, the user entered 10.</p>

<p>The <var>count</var> is initialized to 1 and the test expression is evaluated. Since the test expression <code>count&lt;=num</code> (1 less than or equal to 10) is true, the body of <code>for</code> loop is executed and the value of <var>sum</var> will equal to 1.</p>

<p>Then, the update statement <code>++count</code> is executed and <var>count</var> will equal to 2. Again, the test expression is evaluated. Since 2 is also less than 10, the test expression is evaluated to true and the body of the <code>for</code> loop is executed. Now, <var>sum</var> will equal 3.</p>

<p>This process goes on and the sum is calculated until the <var>count</var> reaches 11.</p>

<p>When the <var>count</var> is 11, the test expression is evaluated to 0 (false), and the loop terminates.</p>

<p>Then, the value of <code>sum</code> is printed on the screen.</p>

<hr>
<p>We will learn about <code>while</code> loop and <code>do...while</code> loop in the next tutorial.</p>
</div>
</section>
<section id="third3">
  <h1>C while and do...while Loop</h1>
  <div class="content">
    <p>In programming, loops are used to repeat a block of code until a specified condition is met.</p>

<p>C programming has three types of loops.</p>

<ol>
<li>for loop</li>
<li>while loop</li>
<li>do...while loop</li>
</ol>

<p>In the previous tutorial, we learned about <code>for</code> loop. In this tutorial, we will learn about <code>while</code> and <code>do..while</code> loop.</p>

<hr>
<h2 id="while-loop">while loop</h2>

<p>The syntax of the <code>while</code> loop is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">while</span> (testExpression) {
<span class="hljs-comment">// the body of the loop </span>
}</code></pre>

<hr>
<h3 id="while-loop-working">How while loop works?</h3>

<ul>
<li>The <code>while</code> loop evaluates the <code>testExpression</code> inside the parentheses <code>()</code>.</li>
<li>If&nbsp;<code>testExpression</code> is <strong>true</strong>, statements inside the body of <code>while</code> loop are executed. Then, <code>testExpression</code> is evaluated again.</li>
<li>The process goes on until <code>testExpression</code> is evaluated to <strong>false</strong>.</li>
<li>If&nbsp;<code>testExpression</code> is <strong>false</strong>, the loop terminates (ends).</li>
</ul>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">
  
  
  
  <style>
  #div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
  #div-gpt-ad-Programizcom36796 {display: block;}
  @media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
  </style>
  
  <div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
  </div>
  
  <div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
  </div>
  </div><div class="clearfix"></div><p>To learn more about test expressions (when&nbsp;<code>testExpression</code> is evaluated to <strong>true</strong> and <strong>false</strong>), check out <a href="/c-programming/c-operators#relational" title="C Relational operators">relational</a> and <a href="/c-programming/c-operators#logical" title="C logical operators">logical operators</a>.</p>

<hr>
<h3 id="flowchart-while">Flowchart of while loop</h3>

<figure><img alt="flowchart of while loop in C programming" height="326" src="assets/images/c-while-loop_0.jpg" title="while loop flowchart" width="320">
<figcaption>Working of while loop</figcaption>
</figure>

<hr>
<h3 id="example-while">Example 1: while loop</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Print numbers from 1 to 5</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>;
  
<span class="hljs-keyword">while</span> (i &lt;= <span class="hljs-number">5</span>) {
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d\n"</span>, i);
  ++i;
}

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1
2
3
4
5</samp>
</pre>

<p>Here, we have initialized <var>i</var> to 1.</p>

<ol>
<li>When <code>i&nbsp;= 1</code>, the test expression <code>i &lt;= 5</code> is <strong>true</strong>. Hence, the body of the <code>while</code> loop is executed. This prints <code>1</code> on the screen and the value of <var>i</var> is increased to <code>2</code>.</li>
<li>Now, <code>i&nbsp;= 2</code>, the test expression <code>i &lt;= 5</code> is again <strong>true</strong>. The body of the <code>while</code> loop is executed again. This prints <code>2</code> on the screen and the value of <var>i</var> is increased to <code>3</code>.</li>
<li>This process goes on until <var>i</var> becomes 6. Then, the test expression <code>i &lt;= 5</code> will be <strong>false</strong> and the loop terminates.</li>
</ol>

<hr>
<h2 id="do-while-loop">do...while loop</h2>

<p>The <code>do..while</code> loop is similar to the <code>while</code> loop with one important difference. The body of <code>do...while</code> loop is executed at least once. Only then, the test expression is evaluated.</p>

<p>The syntax of the <code>do...while</code> loop is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">do</span> {
<span class="hljs-comment">// the body of the loop</span>
}
<span class="hljs-keyword">while</span> (testExpression);</code></pre>

<hr>
<h3 id="do-while-working">How do...while loop works?</h3>

<ul>
<li>The body of <code>do...while</code> loop is executed once. Only then, the <code>testExpression</code> is evaluated.</li>
<li>If <code>testExpression</code> is <strong>true</strong>, the body of the loop is executed again&nbsp;and <code>testExpression</code> is&nbsp;evaluated once more.</li>
<li>This process goes on until <code>testExpression</code> becomes <strong>false</strong>.</li>
<li>If <code>testExpression</code> is <strong>false</strong>, the loop ends.</li>
</ul>

<hr>
<h3 id="do-while-flowchart">Flowchart of do...while Loop</h3>

<figure><img alt="do while loop flowchart in C programming" height="272" src="assets/images/c-do-while-loop_0.jpg" title="do while loop flowchart" width="260">
<figcaption>Working of do...while loop</figcaption>
</figure>

<hr>
<h3 id="example-do-while">Example 2: do...while loop</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to add numbers until the user enters zero</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">double</span> number, sum = <span class="hljs-number">0</span>;

<span class="hljs-comment">// the body of the loop is executed at least once</span>
<span class="hljs-keyword">do</span> {
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a number: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%lf"</span>, &amp;number);
  sum += number;
}
<span class="hljs-keyword">while</span>(number != <span class="hljs-number">0.0</span>);

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Sum = %.2lf"</span>,sum);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a number: 1.5
Enter a number: 2.4
Enter a number: -3.4
Enter a number: 4.2
Enter a number: 0
Sum = 4.70</samp>
</pre>

<p>Here, we have used a <code>do...while</code> loop to prompt the user to enter a number. The loop works as long as the input number is not <code>0</code>.</p>

<p>The&nbsp;<code>do...while</code> loop&nbsp;executes at least once i.e. the first iteration runs without checking the condition.&nbsp;The condition is checked only after the first iteration has been executed.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">do</span> {
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a number: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%lf"</span>, &amp;number);
sum += number;
}
<span class="hljs-keyword">while</span>(number != <span class="hljs-number">0.0</span>);</code></pre>

<p>So, if the first input is a non-zero number, that number is added to the <var>sum</var> variable and the loop continues to the next iteration. This process is repeated until the user enters&nbsp;<code>0</code>.</p>

<p>But if the first input is&nbsp;0, there will be no second iteration of the loop and&nbsp;<var>sum</var>&nbsp;becomes <code>0.0</code>.</p>

<p>Outside the loop, we print the value of <var>sum</var>.</p>
</div>
</section>
<section id="third4">
  <h1>C break and continue</h1>
  <div class="content">
    <h2 id="break">C break</h2>

<p>The break statement ends the loop immediately when it is encountered. Its syntax is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">break</span>;</code></pre>

<p>The break statement is almost always used with <code>if...else</code> statement inside the loop.</p>

<hr>
<h3>How break statement works?</h3>

<figure><img alt="Working of break statement" height="354" src="assets/images/c-break-statement-works.jpg" width="560">
<figcaption>
Working of break in C</figcaption></figure>

<hr>
<h3 id="break-example">Example 1: break statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to calculate the sum of numbers (10 numbers max)</span>
<span class="hljs-comment">// If the user enters a negative number, the loop terminates</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
 <span class="hljs-keyword">int</span> i;
 <span class="hljs-keyword">double</span> number, sum = <span class="hljs-number">0.0</span>;

 <span class="hljs-keyword">for</span> (i = <span class="hljs-number">1</span>; i &lt;= <span class="hljs-number">10</span>; ++i) {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter n%d: "</span>, i);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%lf"</span>, &amp;number);

    <span class="hljs-comment">// if the user enters a negative number, break the loop</span>
    <span class="hljs-keyword">if</span> (number &lt; <span class="hljs-number">0.0</span>) {
       <span class="hljs-keyword">break</span>;
    }

    sum += number; <span class="hljs-comment">// sum = sum + number;</span>
 }

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Sum = %.2lf"</span>, sum);

 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter n1: 2.4
Enter n2: 4.5
Enter n3: 3.4
Enter n4: -3
Sum = 10.30</samp></pre>

<p>This program calculates the sum of a maximum of 10 numbers. Why a maximum of 10 numbers? It's because if the user enters a negative number, the <code>break</code> statement is executed. This will end the <code>for</code> loop, and the <var>sum</var> is displayed.</p>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">
  
  
  
  <style>
  #div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
  #div-gpt-ad-Programizcom36796 {display: block;}
  @media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
  </style>
  
  <div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
  </div>
  
  <div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
  </div>
  </div><div class="clearfix"></div><p>In C, <code>break</code> is also used with the <code>switch</code> statement. This will be discussed in the next tutorial.</p>

<hr>
<h2 id="continue">C continue</h2>

<p>The <code>continue</code> statement skips the current iteration of the loop and continues with the next iteration. Its syntax is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">continue</span>;</code></pre>

<p>The <code>continue</code> statement is almost always used with the <code>if...else</code> statement.</p>

<hr>
<h3>How continue statement works?</h3>

<figure><img alt="Working of continue statement in C programming" height="339" src="assets/images/c-continue-statement-works.jpg" width="500">
<figcaption>Working of Continue in C</figcaption></figure>

<hr>
<h3 id="example-continue">Example 2: continue statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to calculate the sum of numbers (10 numbers max)</span>
<span class="hljs-comment">// If the user enters a negative number, it's not added to the result</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
 <span class="hljs-keyword">int</span> i;
 <span class="hljs-keyword">double</span> number, sum = <span class="hljs-number">0.0</span>;

 <span class="hljs-keyword">for</span> (i = <span class="hljs-number">1</span>; i &lt;= <span class="hljs-number">10</span>; ++i) {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a n%d: "</span>, i);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%lf"</span>, &amp;number);

    <span class="hljs-keyword">if</span> (number &lt; <span class="hljs-number">0.0</span>) {
       <span class="hljs-keyword">continue</span>;
    }

    sum += number; <span class="hljs-comment">// sum = sum + number;</span>
 }

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Sum = %.2lf"</span>, sum);

 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter n1: 1.1
Enter n2: 2.2
Enter n3: 5.5
Enter n4: 4.4
Enter n5: -3.4
Enter n6: -45.5
Enter n7: 34.5
Enter n8: -4.2
Enter n9: -1000
Enter n10: 12
Sum = 59.70</samp></pre>

<p>In this program, when the user enters a positive number, the sum is calculated using <code>sum += number;</code> statement.</p>

<p>When the user enters a negative number, the <code>continue</code> statement is executed and it skips the negative number from the calculation.</p>
</div>
</section>
<section id="third5">
  <h1>C switch Statement</h1>
  <div class="content">
    <p id="introduction">The switch statement allows us to execute one code block among many alternatives.</p>

<p>You can do the same thing with the <code>if...else..if</code> ladder. However, the syntax of the <code>switch</code> statement is much easier to read and write.</p>

<hr>
<h2 id="switch-syntax">Syntax of switch...case</h2>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">switch</span> (expression)
​{
  <span class="hljs-keyword">case</span> constant1:
    <span class="hljs-comment">// statements</span>
    <span class="hljs-keyword">break</span>;

  <span class="hljs-keyword">case</span> constant2:
    <span class="hljs-comment">// statements</span>
    <span class="hljs-keyword">break</span>;
  .
  .
  .
  <span class="hljs-keyword">default</span>:
    <span class="hljs-comment">// default statements</span>
}</code></pre>

<p><strong>How does the switch statement work?</strong></p>

<p>The <var>expression</var> is evaluated once and compared with the values of each <var>case</var> label.</p>

<ul>
<li>If there is a match, the corresponding statements after the matching label are executed. For example, if the value of the expression is equal to <var>constant2</var>, statements after <code>case constant2:</code> are executed until <code>break</code> is encountered.</li>
<li>If there is no match, the default statements are executed.</li>
</ul>

<div class="note-tip">
<p><strong>Notes:</strong></p>

<ul>
  <li>If we do not use the <code>break</code> statement, all statements after the matching label are also executed.</li>
  <li>The <code>default</code> clause inside the <code>switch</code> statement is optional.</li>
</ul>
</div>

<hr>
<h3 id="switch-flowchart" name="switch-flowchart">switch Statement Flowchart</h3>

<figure><img alt="Flowchart of switch statement" height="662" src="assets/images/flowchart-switch-statement.jpg" title="switch Statement Flowchart" width="460">
<figcaption>switch Statement Flowchart</figcaption>
</figure>

<hr>
<h3 id="example-switch">Example: Simple Calculator</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to create a simple calculator</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">char</span> operation;
  <span class="hljs-keyword">double</span> n1, n2;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter an operator (+, -, *, /): "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%c"</span>, &amp;operation);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter two operands: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%lf %lf"</span>,&amp;n1, &amp;n2);

  <span class="hljs-keyword">switch</span>(operation)
  {
      <span class="hljs-keyword">case</span> <span class="hljs-string">'+'</span>:
          <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%.1lf + %.1lf = %.1lf"</span>,n1, n2, n1+n2);
          <span class="hljs-keyword">break</span>;

      <span class="hljs-keyword">case</span> <span class="hljs-string">'-'</span>:
          <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%.1lf - %.1lf = %.1lf"</span>,n1, n2, n1-n2);
          <span class="hljs-keyword">break</span>;

      <span class="hljs-keyword">case</span> <span class="hljs-string">'*'</span>:
          <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%.1lf * %.1lf = %.1lf"</span>,n1, n2, n1*n2);
          <span class="hljs-keyword">break</span>;

      <span class="hljs-keyword">case</span> <span class="hljs-string">'/'</span>:
          <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%.1lf / %.1lf = %.1lf"</span>,n1, n2, n1/n2);
          <span class="hljs-keyword">break</span>;

      <span class="hljs-comment">// operator doesn't match any case constant +, -, *, /</span>
      <span class="hljs-keyword">default</span>:
          <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Error! operator is not correct"</span>);
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
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
  
  <div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
  </div>
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Enter an operator (+, -, *, /): -
Enter two operands: 32.5
12.4
32.5 - 12.4 = 20.1</samp></pre>

<p>The <var>-</var> operator entered by the user is stored in the <var>operation</var>&nbsp;variable. And, two operands <var>32.5</var> and <var>12.4</var> are stored in variables <var>n1</var> and <var>n2</var> respectively.</p>

<p>Since the <var>operation</var>&nbsp;is <code>-</code>, the control of the program jumps to</p>

<pre>printf("%.1lf - %.1lf = %.1lf", n1, n2, n1-n2);</pre>

<p>Finally, the <a href="/c-programming/c-break-continue-statement">break statement</a> terminates the <code>switch</code> statement.</p>
</div>
</section>
<section id="third6">
  <h1>C goto Statement</h1>
  <div class="content">
    <p>The <code>goto</code> statement allows us to transfer control of the program to the specified <var>label</var>.</p>

<hr>
<h3 id="syntax-goto">Syntax of goto Statement</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">goto</span> label;
... .. ...
... .. ...
label: 
statement;
</code></pre>

<p>The <var>label</var> is an identifier. When the <code>goto</code> statement is encountered, the control of the program jumps to <code>label:</code> and starts executing the code.</p>

<figure><img alt="How goto statement works?" height="201" src="assets/images/c-goto-statement.jpg" title="goto Statement" width="300">
<figcaption>Working of goto Statement</figcaption>
</figure>

<hr>
<h3 id="example-goto">Example: goto Statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to calculate the sum and average of positive numbers</span>
<span class="hljs-comment">// If the user enters a negative number, the sum and average are displayed.</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

 <span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> maxInput = <span class="hljs-number">100</span>;
 <span class="hljs-keyword">int</span> i;
 <span class="hljs-keyword">double</span> number, average, sum = <span class="hljs-number">0.0</span>;

 <span class="hljs-keyword">for</span> (i = <span class="hljs-number">1</span>; i &lt;= maxInput; ++i) {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d. Enter a number: "</span>, i);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%lf"</span>, &amp;number);
    
    <span class="hljs-comment">// go to jump if the user enters a negative number</span>
    <span class="hljs-keyword">if</span> (number &lt; <span class="hljs-number">0.0</span>) {
       <span class="hljs-keyword">goto</span> jump;
    }
    sum += number;
 }

jump:
 average = sum / (i - <span class="hljs-number">1</span>);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Sum = %.2f\n"</span>, sum);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Average = %.2f"</span>, average);

 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1. Enter a number: 3
2. Enter a number: 4.3
3. Enter a number: 9.3
4. Enter a number: -2.9
Sum = 16.60
Average = 5.53</samp></pre>

<hr>
<h3 id="avoid-goto-reasons">Reasons to avoid goto</h3>

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
  </div><div class="clearfix"></div><p>The use of <code>goto</code> statement may lead to code that is buggy and hard to follow. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp">one:
<span class="hljs-keyword">for</span> (i = <span class="hljs-number">0</span>; i &lt; number; ++i)
{
  test += i;
  <span class="hljs-keyword">goto</span> two;
}
two: 
<span class="hljs-keyword">if</span> (test &gt; <span class="hljs-number">5</span>) {
<span class="hljs-keyword">goto</span> three;
}
... .. ...
</code></pre>

<p>Also, the <code>goto</code> statement allows you to do bad stuff such as jump out of the scope.</p>

<p>That being said, <code>goto</code> can be useful sometimes. For example: to break from nested loops.</p>

<hr>
<h3 id="use-goto?">Should you use goto?</h3>

<p>If you think the use of <code>goto</code> statement simplifies your program, you can use it. That being said, <code>goto</code> is rarely useful and you can create any C program&nbsp;without using <code>goto</code> altogether.</p>

<p>Here's a quote from Bjarne Stroustrup, creator of C++, <strong>"The fact that 'goto' can do anything is exactly why we don't use it."</strong></p>
</div>
</section>


<!-- four menu sections -->
<section id="four1">
  <h1>C Functions</h1>
  <div class="content">
    <p><a id="function" name="function"></a>A function is a block of code that performs a specific task.</p>

<p>Suppose, you need to create a program to create a circle and color it. You can create two functions to solve this problem:</p>

<ul>
<li>create a circle function</li>
<li>create a color function</li>
</ul>

<p>Dividing a complex problem into smaller chunks makes our program easy to understand and reuse.</p>

<hr>
<h2>Types of function</h2>

<p>There are two types of function in C programming:</p>

<ul>
<li><a href="/c-programming/library-function" title="C Library Functions">Standard library functions</a></li>
<li><a href="/c-programming/c-user-defined-functions" title="C user-defined functions">User-defined functions</a></li>
</ul>

<hr>
<h3><a id="standard-library-function" name="standard-library-function"></a>Standard library functions</h3>

<p>The standard library functions are built-in functions in C programming.</p>

<p>These functions are defined in header files.&nbsp;For example,</p>

<ul>
<li>The <code>printf()</code> is a standard library function to send formatted output to the screen (display output on the screen). This function is defined in the&nbsp;<code>stdio.h</code>&nbsp;header file.<br>
  Hence, to use the <code>printf() </code>function, we need to include the <code>stdio.h</code> header file using <code>#include &lt;stdio.h&gt;</code>.</li>
<li>The <code>sqrt()</code> function calculates the square root of a number. The function is defined in the <code>math.h</code> header file.&nbsp;&nbsp;</li>
</ul>

<p>Visit&nbsp;<a href="/c-programming/library-function" title="C Library Functions">standard library functions in C programming</a>&nbsp;to learn more.</p>

<hr>
<h3><a id="user-defined-function" name="user-defined-function"></a>User-defined function</h3>

<p>You can also create functions as per your need. Such functions created by the user are known as user-defined functions.</p>

<h2><a id="working-function" name="working-function"></a>How user-defined function works?</h2>

<pre>#include &lt;stdio.h&gt;
void functionName()
{
  ... .. ...
  ... .. ...
}

int main()
{
  ... .. ...
  ... .. ...

  functionName();
  
  ... .. ...
  ... .. ...
}
</pre>

<p>The execution of a C program begins from the <code>main()</code> function.</p>

<p>When the compiler encounters <code>functionName();</code>, control of the program jumps to</p>

<pre> void functionName()</pre>

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
  </div><div class="clearfix"></div><p>And, the compiler starts executing the codes inside <code>functionName()</code>.</p>

<p>The control of the program jumps back to the <code>main()</code> function&nbsp;once code&nbsp;inside the function definition is executed.</p>

<figure><img alt="How function works in C programming?" height="622" src="assets/images/function-c-programming.jpg" width="700">
<figcaption>Working of C Function</figcaption></figure>

<p>Note, function names are identifiers and should be unique.</p>

<p>This is just an overview of user-defined functions. Visit these pages to learn more on:</p>

<ul>
<li><a href="/c-programming/c-user-defined-functions" title="C user-defined Functions">User-defined Function in C programming</a></li>
<li><a href="/c-programming/types-user-defined-functions" title="User-defined Function Types">Types of user-defined Functions</a></li>
</ul>

<hr>
<h3><a id="function-advantages" name="function-advantages"></a>Advantages of user-defined function</h3>

<ol>
<li>The program will be easier to understand, maintain and debug.</li>
<li>Reusable codes that can be used in other programs</li>
<li>A large program can be divided into smaller modules. Hence, a large project can be divided among many programmers.</li>
</ol>
</div>
</section>
<section id="four2">
  <h1>C User-defined functions</h1>
  <div class="content">
    <p id="user-defined-function">A function is a block of code that performs a specific task.</p>

<p>C allows you to define functions according to your need. These functions are known as user-defined functions. For example:</p>

<p>Suppose, you need to create a circle and color it depending upon the radius and color. You can create two functions to solve this problem:</p>

<ul>
<li><code>createCircle()</code> function</li>
<li><code>color()</code> function</li>
</ul>

<hr>
<h2 id="example-function">Example: User-defined function</h2>

<p>Here is an example to add two integers. To perform this task, we have created an user-defined <code>addNumbers()</code>.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">addNumbers</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> b)</span></span>;         <span class="hljs-comment">// function prototype</span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> n1,n2,sum;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enters two numbers: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d %d"</span>,&amp;n1,&amp;n2);

  sum = addNumbers(n1, n2);        <span class="hljs-comment">// function call</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"sum = %d"</span>,sum);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">addNumbers</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> b)</span>         <span class="hljs-comment">// function definition   </span>
</span>{
  <span class="hljs-keyword">int</span> result;
  result = a+b;
  <span class="hljs-keyword">return</span> result;                  <span class="hljs-comment">// return statement</span>
}</code>
</pre>

<hr>
<h2 id="function-prototype">Function prototype</h2>

<p>A function prototype is simply the declaration of a function that specifies function's name, parameters and return type. It doesn't contain function body.</p>

<p>A function prototype gives information to the compiler that the function may later be used in the program.</p>

<h3>Syntax of function prototype</h3>

<pre>returnType functionName(type1 argument1, type2 argument2, ...);</pre>

<p>In the above example, <code>int addNumbers(int a, int b);</code> is the function prototype which provides the following information to the compiler:</p>

<ol>
<li>name of the function is <code>addNumbers()</code></li>
<li>return type of the function is <code>int</code></li>
<li>two arguments of type <code>int</code> are passed to the function</li>
</ol>

<p>The function prototype is not needed if the user-defined function is defined before the <code>main()</code> function.</p>

<hr>
<h2 id="function-call">Calling a function</h2>

<p>Control of the program is transferred to the user-defined function by calling it.</p>

<h3>Syntax of function call</h3>

<pre>functionName(argument1, argument2, ...);</pre>

<p>In the above example, the function call is made using <code>addNumbers(n1, n2);</code> statement inside the <code>main()</code> function.</p>

<hr>
<h2 id="function-definition">Function definition</h2>

<p>Function definition contains the block of code to perform a specific task. In our example, adding two numbers and returning it.</p>

<h4>Syntax of function definition</h4>

<pre>returnType functionName(type1 argument1, type2 argument2, ...)
{
  //body of the function
}
</pre>

<p>When a function is called, the control of the program is transferred to the function definition. And, the compiler starts executing the codes inside the body of a function.</p>

<hr>
<h2 id="passing-arguments">Passing arguments to a function</h2>

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
  </div><div class="clearfix"></div><p>In programming, argument refers to the variable passed to the function. In the above example, two variables <var>n1</var> and <var>n2</var> are passed during the function call.</p>

<p>The parameters <var>a</var> and <var>b</var> accepts the passed arguments in the function definition. These arguments are called formal parameters of the function.</p>

<figure><img alt="Passing arguments to a function" height="525" src="assets/images/pass-arguments-c-programming.jpg" title="Passing arguments to a function" width="650">
<figcaption>Passing Argument to Function</figcaption></figure>

<p>The type of arguments passed to a function and the formal parameters must match, otherwise, the compiler will throw an error.</p>

<p>If <var>n1</var> is of char type, <var>a</var> also should be of char type. If <var>n2</var> is of float type, variable <var>b</var> also should be of float type.</p>

<p>A function can also be called without passing an argument.</p>

<hr>
<h2 id="return-statement">Return Statement</h2>

<p>The return statement terminates the execution of a function and returns a value to the calling function. The program control is transferred to the calling function after the return statement.</p>

<p>In the above example, the value of the <var>result</var> variable is returned to the main function. The <var>sum</var> variable in the <code>main()</code> function is assigned this value.</p>

<figure><img alt="Return statement of a function" height="544" src="assets/images/c-return-statement.jpg" title="Return statement of a function" width="650">
<figcaption>Return Statement of Function</figcaption></figure>

<h3>Syntax of return statement</h3>

<pre>return (expression);     
</pre>

<p>For example,</p>

<pre>return a;
return (a+b);</pre>

<p>The type of value returned from the function and the return type specified in the function prototype and function definition must match.</p>

<p>Visit this page to learn more on <a href="/c-programming/types-user-defined-functions" title="Passing argument and returning value">passing arguments and returning value from a function</a>.</p>
</div>
</section>
<section id="four3">
  <h1>Types of User-defined Functions in C Programming</h1>
  <div class="content">
    <p>These 4 programs below check whether the integer entered by the user is a prime number or not.</p>

<p>The output of all these programs below is the same, and we have created a user-defined function in each example. However, the approach we have taken in each example is different.</p>

<hr>
<h2 id="no-arg-no-return">Example 1: No Argument Passed and No Return Value</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" title="Source Code of function having no arguments and no return value" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">checkPrimeNumber</span><span class="hljs-params">()</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
checkPrimeNumber();    <span class="hljs-comment">// argument is not passed</span>
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-comment">// return type is void meaning doesn't return any value</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">checkPrimeNumber</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> n, i, flag = <span class="hljs-number">0</span>;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a positive integer: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>,&amp;n);

<span class="hljs-comment">// 0 and 1 are not prime numbers    </span>
<span class="hljs-keyword">if</span> (n == <span class="hljs-number">0</span> || n == <span class="hljs-number">1</span>)
  flag = <span class="hljs-number">1</span>;

<span class="hljs-keyword">for</span>(i = <span class="hljs-number">2</span>; i &lt;= n/<span class="hljs-number">2</span>; ++i) {
  <span class="hljs-keyword">if</span>(n%i == <span class="hljs-number">0</span>) {
    flag = <span class="hljs-number">1</span>;
    <span class="hljs-keyword">break</span>;
  }
}

<span class="hljs-keyword">if</span> (flag == <span class="hljs-number">1</span>)
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is not a prime number."</span>, n);
<span class="hljs-keyword">else</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is a prime number."</span>, n);
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>The <code>checkPrimeNumber()</code> function takes input from the user, checks whether it is a prime number or not, and displays it on the screen.</p>

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
  </div><div class="clearfix"></div><p>The empty parentheses in <code>checkPrimeNumber();</code> inside the <code>main()</code> function indicates that no argument is passed to the function.</p>

<p>The return type of the function is <code>void</code>. Hence, no value is returned from the function.</p>

<hr>
<h2 id="no-arg-yes-return">Example 2: No Arguments Passed But&nbsp;Returns a Value</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" title="Source code of a function with no argument passed returning a value." style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getInteger</span><span class="hljs-params">()</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> n, i, flag = <span class="hljs-number">0</span>;

<span class="hljs-comment">// no argument is passed</span>
n = getInteger();    

<span class="hljs-comment">// 0 and 1 are not prime numbers    </span>
<span class="hljs-keyword">if</span> (n == <span class="hljs-number">0</span> || n == <span class="hljs-number">1</span>)
  flag = <span class="hljs-number">1</span>;

<span class="hljs-keyword">for</span>(i = <span class="hljs-number">2</span>; i &lt;= n/<span class="hljs-number">2</span>; ++i) {
  <span class="hljs-keyword">if</span>(n%i == <span class="hljs-number">0</span>){
    flag = <span class="hljs-number">1</span>;
    <span class="hljs-keyword">break</span>;
  }
}

<span class="hljs-keyword">if</span> (flag == <span class="hljs-number">1</span>)
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is not a prime number."</span>, n);
<span class="hljs-keyword">else</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is a prime number."</span>, n);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-comment">// returns integer entered by the user</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getInteger</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> n;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a positive integer: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>,&amp;n);

<span class="hljs-keyword">return</span> n;
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>The empty parentheses in the <code>n = getInteger();</code> statement indicates that no argument is passed to the function. And, the value returned from the function is assigned to <var>n</var>.</p>

<p>Here, the <code>getInteger()</code> function takes input from the user and returns it. The code to check whether a number is prime or not is inside the <code>main()</code> function.</p>

<hr>
<h2 id="yes-arg-no-return">Example 3: Argument Passed But No Return Value</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" title="Source code of a function with arguments passed but no return value" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">checkPrimeAndDisplay</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> n;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a positive integer: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>,&amp;n);

<span class="hljs-comment">// n is passed to the function</span>
checkPrimeAndDisplay(n);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-comment">// return type is void meaning doesn't return any value</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">checkPrimeAndDisplay</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span> </span>{
<span class="hljs-keyword">int</span> i, flag = <span class="hljs-number">0</span>;

<span class="hljs-comment">// 0 and 1 are not prime numbers    </span>
<span class="hljs-keyword">if</span> (n == <span class="hljs-number">0</span> || n == <span class="hljs-number">1</span>)
  flag = <span class="hljs-number">1</span>;

<span class="hljs-keyword">for</span>(i = <span class="hljs-number">2</span>; i &lt;= n/<span class="hljs-number">2</span>; ++i) {
  <span class="hljs-keyword">if</span>(n%i == <span class="hljs-number">0</span>){
    flag = <span class="hljs-number">1</span>;
    <span class="hljs-keyword">break</span>;
  }
}

<span class="hljs-keyword">if</span>(flag == <span class="hljs-number">1</span>)
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is not a prime number."</span>,n);
<span class="hljs-keyword">else</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is a prime number."</span>, n);
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>The integer value entered by the user is passed to the <code>checkPrimeAndDisplay()</code> function.</p>

<p>Here, the <code>checkPrimeAndDisplay()</code> function checks whether the argument passed is a prime number or not and displays the appropriate message.</p>

<hr>
<h2 id="yes-arg-yes-return">Example 4: Argument Passed and Returns a Value</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" title="Function with argument and a return value" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">checkPrimeNumber</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> n, flag;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a positive integer: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>,&amp;n);

<span class="hljs-comment">// n is passed to the checkPrimeNumber() function</span>
<span class="hljs-comment">// the returned value is assigned to the flag variable</span>
flag = checkPrimeNumber(n);

<span class="hljs-keyword">if</span>(flag == <span class="hljs-number">1</span>)
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is not a prime number"</span>,n);
<span class="hljs-keyword">else</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d is a prime number"</span>,n);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-comment">// int is returned from the function</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">checkPrimeNumber</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span> </span>{

<span class="hljs-comment">// 0 and 1 are not prime numbers    </span>
<span class="hljs-keyword">if</span> (n == <span class="hljs-number">0</span> || n == <span class="hljs-number">1</span>)
  <span class="hljs-keyword">return</span> <span class="hljs-number">1</span>;

<span class="hljs-keyword">int</span> i;

<span class="hljs-keyword">for</span>(i=<span class="hljs-number">2</span>; i &lt;= n/<span class="hljs-number">2</span>; ++i) {
  <span class="hljs-keyword">if</span>(n%i == <span class="hljs-number">0</span>)
    <span class="hljs-keyword">return</span> <span class="hljs-number">1</span>;
}

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code>
</pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>The input from the user is passed to the <code>checkPrimeNumber()</code> function.</p>

<p>The <code>checkPrimeNumber()</code> function checks whether the passed argument is prime or not.</p>

<p>If the passed argument is a prime number, the function returns <strong>0</strong>. If the passed argument is a non-prime number, the function returns <strong>1</strong>. The return value is assigned to the <var>flag</var> variable.</p>

<p>Depending on whether <var>flag</var> is <strong>0</strong> or <strong>1</strong>, an appropriate message is printed from the <code>main()</code> function.</p>

<hr>
<h2 id="better-approach">Which approach is better?</h2>

<p>Well, it depends on the problem you are trying to solve. In this case, passing an argument and returning a value from the function (example 4) is better.</p>

<p>A function should perform a specific task. The <code>checkPrimeNumber()</code> function doesn't take input from the user nor it displays the appropriate message. It only checks whether a number is prime or not.</p>
</div>
</section>
<section id="four4">
  <h1>C Recursion</h1>
  <div class="content">
    <p id="recursion">A function that calls itself is known as a recursive function. And, this technique is known as recursion.</p>

<hr>
<h3 id="recursion-working">How recursion works?</h3>

<pre>void recurse()
{
  ... .. ...
  recurse();
  ... .. ...
}

int main()
{
  ... .. ...
  recurse();
  ... .. ...
}</pre>

<figure><img alt="How recursion works in C programming?" height="420" src="assets/images/how-recursion-works-c_0.jpg" width="500">
<figcaption>Working of Recursion</figcaption></figure>

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
  </div><div class="clearfix"></div><p>The recursion continues until some condition is met to prevent it.</p>

<p>To prevent infinite recursion, <a href="/c-programming/c-if-else-statement" title="C if...else">if...else statement</a> (or similar approach) can be used where one branch makes the recursive call, and other doesn't.</p>

<hr>
<h3 id="example">Example: Sum of Natural Numbers Using Recursion</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">sum</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number, result;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a positive integer: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;number);

  result = sum(number);

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"sum = %d"</span>, result);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">sum</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span> </span>{
  <span class="hljs-keyword">if</span> (n != <span class="hljs-number">0</span>)
      <span class="hljs-comment">// sum() function calls itself</span>
      <span class="hljs-keyword">return</span> n + sum(n<span class="hljs-number">-1</span>); 
  <span class="hljs-keyword">else</span>
      <span class="hljs-keyword">return</span> n;
}
</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Enter a positive integer:3
sum = 6</samp></pre>

<hr>
<p>Initially, the <code>sum()</code> is called from the <code>main()</code> function with <var>number</var> passed as an argument.</p>

<p>Suppose, the value of <var>n</var> inside <code>sum()</code> is 3 initially. During the next function call, 2 is passed to the <code>sum()</code> function. This process continues until <var>n</var> is equal to 0.</p>

<p>When <var>n</var> is equal to 0, the <code>if</code> condition fails and the <code>else</code> part is executed returning the sum of integers ultimately to the <code>main()</code> function.</p>

<figure><img alt="Calculation of sum of natural number using recursion" height="756" src="assets/images/recursion-natural-numbers.png" width="360">
<figcaption>Sum of Natural Numbers</figcaption></figure>

<hr>
<h3 id="advantages-disadvantages">Advantages and Disadvantages of Recursion</h3>

<p>Recursion makes program elegant. However, if performance is vital, use loops instead as recursion is usually much slower.</p>

<p>That being said, recursion is an important concept. It is frequently used in <a href="/dsa" title="Data Structure and Algorithms">data structure and algorithms</a>. For example, it is common to use recursion in problems such as tree traversal.</p>
</div>
</section>
<section id="four5">
  <h1>C Storage Class</h1>
  <div class="content">
    <p>Every variable in C programming has two properties: type and storage class.</p>

<p>Type refers to the data type of a variable. And, storage class determines the scope, visibility and lifetime of a variable.</p>

<p>There are 4 types of storage class:</p>

<ol>
<li>automatic</li>
<li>external</li>
<li>static</li>
<li>register</li>
</ol>

<hr>
<h2 id="local">Local Variable</h2>

<p>The variables declared inside a block are automatic or local variables. The local variables exist only inside the block in which it is declared.</p>

<p>Let's take an example.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">(<span class="hljs-keyword">void</span>)</span> </span>{

<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">5</span>; ++i) {
   <span class="hljs-built_in">printf</span>(<span class="hljs-string">"C programming"</span>);
}

<span class="hljs-comment">// Error: i is not declared at this point</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, i);  
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>When you run the above program, you will get an error <samp>undeclared identifier i</samp>. It's because <var>i</var> is declared inside the <code>for</code> loop block. Outside of the block, it's undeclared.</p>

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
  </div><div class="clearfix"></div><p>Let's take another example.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp">
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> n1; <span class="hljs-comment">// n1 is a local variable to main()</span>
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">func</span><span class="hljs-params">()</span> </span>{
 <span class="hljs-keyword">int</span> n2;  <span class="hljs-comment">// n2 is a local variable to func()</span>
}
</code></pre>

<p>In the above example, <var>n1</var> is local to <code>main()</code> and <var>n2</var> is local to <code>func()</code>.</p>

<p>This means you cannot access the&nbsp;<var>n1</var> variable inside&nbsp;<code>func()</code> as it only exists inside <code>main()</code>. Similarly, you cannot access the&nbsp;<var>n2</var>&nbsp;variable inside <code>main()</code> as it only exists inside <code>func()</code>.</p>

<hr>
<h2 id="global">Global Variable</h2>

<p>Variables that are declared outside of all functions are known as external or global variables. They are accessible from any function inside the program.</p>

<hr>
<h3>Example 1: Global Variable</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">()</span></span>;

<span class="hljs-keyword">int</span> n = <span class="hljs-number">5</span>;  <span class="hljs-comment">// global variable</span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  ++n;     
  display();
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">()</span>
</span>{
  ++n;   
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"n = %d"</span>, n);
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><b>Output</b></p>

<pre><samp>n = 7</samp></pre>

<p>Suppose, a global variable is declared in <code>file1</code>. If you try to use that variable in a different file <code>file2</code>, the compiler will complain. To solve this problem, keyword <code>extern</code> is used in <code>file2</code> to indicate that the external variable is declared in another file.</p>

<hr>
<h2 id="register">Register Variable</h2>

<p>The <code>register</code> keyword is used to declare register variables. Register variables were supposed to be faster than local variables.</p>

<p>However, modern compilers are very good at code optimization, and there is a rare chance that using register variables will make your program faster.</p>

<p>Unless you are working on embedded systems where you know how to optimize code for the given application, there is no use of register variables.</p>

<hr>
<h2 id="static">Static Variable</h2>

<p>A static variable is declared by using the <code>static</code> keyword. For example;</p>

<pre>static int i;</pre>

<p>The value of a static variable persists until the end of the program.</p>

<hr>
<h3>Example 2: Static Variable</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">()</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  display();
  display();
}
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">static</span> <span class="hljs-keyword">int</span> c = <span class="hljs-number">1</span>;
  c += <span class="hljs-number">5</span>;
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d  "</span>,c);
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><b>Output</b></p>

<pre><samp>6 11</samp></pre>

<p>During the first function call, the value of <var>c</var> is initialized to 1. Its value is increased by 5. Now, the value of <var>c</var> is 6, which is printed on the screen.</p>

<p>During the second function call, <var>c</var> is not initialized to 1 again. It's because <var>c</var> is a static variable. The value <var>c</var> is increased by 5. Now, its value will be 11, which is printed on the screen.</p>
</div>
</section>

<!-- five menu sections -->
<section id="five1">
  <h1>C Arrays</h1>
  <div class="content">
    <figure><img alt="C arrays" height="400" src="assets/images/c-arrays.jpg" title="C arrays" width="740">
<figcaption>Arrays in C</figcaption>
</figure>

<p id="introduction">An array is a variable that can store multiple values. For example, if you want to store 100 integers, you can create an array for it.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> data[<span class="hljs-number">100</span>];</code> 
</pre>

<hr>
<h2 id="declare">How to declare an array?</h2>

<pre>dataType arrayName[arraySize];
</pre>

<p><strong>For example,</strong></p>

<pre>float mark[5];</pre>

<p>Here, we declared an array, <var>mark</var>, of floating-point type. And its size is 5. Meaning, it can hold 5 floating-point values.</p>

<p>It's important to note that&nbsp;the size and type of an array cannot be changed once it is declared.</p>

<hr>
<h2 id="access">Access Array Elements</h2>

<p>You can access elements of an array by indices.</p>

<p>Suppose you declared an array <var>mark</var> as above. The first element is <var>mark[0]</var>, the second element is <var>mark[1]</var> and so on.</p>

<figure><img alt="C Array declaration " height="111" src="assets/images/c-array-declaration.jpg" width="362">
<figcaption>Declare an Array</figcaption>
</figure>

<h4><strong>Few keynotes</strong>:</h4>

<ul>
<li>Arrays have 0 as the first index, not 1. In this example, <var>mark[0]</var> is the first element.</li>
<li>If the size of an array is <var>n</var>, to access the last element, the <code>n-1</code> index is used. In this example, <var>mark[4]</var></li>
<li>Suppose the starting address of <code>mark[0]</code> is <strong>2120d</strong>. Then, the address of the <code>mark[1]</code> will be <strong>2124d</strong>. Similarly, the address of <code>mark[2]</code> will be <strong>2128d</strong> and so on.<br>
  This is because the size of a <code>float</code> is 4 bytes.</li>
</ul>

<hr>
<h2 id="initialize">How to initialize an array?</h2>

<p>It is possible to initialize an array during declaration. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> mark[<span class="hljs-number">5</span>] = {<span class="hljs-number">19</span>, <span class="hljs-number">10</span>, <span class="hljs-number">8</span>, <span class="hljs-number">17</span>, <span class="hljs-number">9</span>};</code></pre>

<p>You can also initialize an array like this.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> mark[] = {<span class="hljs-number">19</span>, <span class="hljs-number">10</span>, <span class="hljs-number">8</span>, <span class="hljs-number">17</span>, <span class="hljs-number">9</span>};</code></pre>

<p>Here, we haven't specified the size. However, the compiler knows its size is 5 as we are initializing it with 5 elements.</p>

<figure><img alt="Initialize an array in C programming" height="111" src="assets/images/c-array-initialization.jpg" width="362">
<figcaption>Initialize an Array</figcaption>
</figure>

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

<pre>mark[0] is equal to 19
mark[1] is equal to 10
mark[2] is equal to 8
mark[3] is equal to 17
mark[4] is equal to 9</pre>

<hr>
<h2 id="insert">Change Value of Array elements</h2>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> mark[<span class="hljs-number">5</span>] = {<span class="hljs-number">19</span>, <span class="hljs-number">10</span>, <span class="hljs-number">8</span>, <span class="hljs-number">17</span>, <span class="hljs-number">9</span>}

<span class="hljs-comment">// make the value of the third element to -1</span>
mark[<span class="hljs-number">2</span>] = <span class="hljs-number">-1</span>;

<span class="hljs-comment">// make the value of the fifth element to 0</span>
mark[<span class="hljs-number">4</span>] = <span class="hljs-number">0</span>;
</code></pre>

<hr>
<h2 id="input-output">Input and Output Array Elements</h2>

<p>Here's how you can take input from the user and store it in an array element.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// take input and store it in the 3rd element</span>
​<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;mark[<span class="hljs-number">2</span>]);

<span class="hljs-comment">// take input and store it in the ith element</span>
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;mark[i<span class="hljs-number">-1</span>]);</code>
</pre>

<p>Here's how you can print an individual element of an array.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// print the first element of the array</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, mark[<span class="hljs-number">0</span>]);

<span class="hljs-comment">// print the third element of the array</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, mark[<span class="hljs-number">2</span>]);

<span class="hljs-comment">// print ith element of the array</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, mark[i<span class="hljs-number">-1</span>]);</code>
</pre>

<hr>
<h2>Example 1: Array Input/Output</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to take 5 values from the user and store them in an array</span>
<span class="hljs-comment">// Print the elements stored in the array</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> values[<span class="hljs-number">5</span>];

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter 5 integers: "</span>);

<span class="hljs-comment">// taking input and storing it in an array</span>
<span class="hljs-keyword">for</span>(<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">5</span>; ++i) {
   <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;values[i]);
}

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Displaying integers: "</span>);

<span class="hljs-comment">// printing elements of an array</span>
<span class="hljs-keyword">for</span>(<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">5</span>; ++i) {
   <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d\n"</span>, values[i]);
}
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code>
</pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter 5 integers: 1
-3
34
0
3
Displaying integers: 1
-3
34
0
3</samp>
</pre>

<p>Here, we have used a&nbsp;<code>for</code> loop to take 5 inputs from the user and store them in an array. Then, using another&nbsp;<code>for</code> loop, these elements are displayed on the screen.</p>

<hr>
<h2 id="example">Example 2: Calculate Average</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to find the average of n numbers using arrays</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> marks[<span class="hljs-number">10</span>], i, n, sum = <span class="hljs-number">0</span>;
<span class="hljs-keyword">double</span> average;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter number of elements: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;n);

<span class="hljs-keyword">for</span>(i=<span class="hljs-number">0</span>; i &lt; n; ++i) {
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter number%d: "</span>,i+<span class="hljs-number">1</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;marks[i]);
        
  <span class="hljs-comment">// adding integers entered by the user to the sum variable</span>
  sum += marks[i];
}

<span class="hljs-comment">// explicitly convert sum to double</span>
<span class="hljs-comment">// then calculate average</span>
average = (<span class="hljs-keyword">double</span>) sum / n;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Average = %.2lf"</span>, average);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code>
</pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter number of elements: 5
Enter number1: 45
Enter number2: 35
Enter number3: 38
Enter number4: 31
Enter number5: 49
Average = 39.60
</samp></pre>

<p>Here, we have computed the average of <var>n</var> numbers entered by the user.</p>

<hr>
<h3 id="important">Access elements out of its bound!</h3>

<p>Suppose you declared an array of 10 elements. Let's say,</p>

<pre>int testArray[10];</pre>

<p>You can access the array elements from <code>testArray[0]</code> to <code>testArray[9]</code>.</p>

<p>Now let's say if you try to access <code>testArray[12]</code>. The element is not available. This may cause unexpected output (undefined behavior). Sometimes you might get an error and some other time your program may run correctly.</p>

<p>Hence, you should never access elements of an array outside of its bound.</p>

<hr>
<h2>Multidimensional arrays</h2>

<p>In this tutorial, you learned about arrays. These arrays are called one-dimensional arrays.</p>

<p>In the next tutorial, you will learn about <a href="/c-programming/c-multi-dimensional-arrays" title="C Multidimensional Array">multidimensional arrays (array of an array)</a>.</p>
</div>
</section>
<section id="five2">
  <h1>C Multidimensional Arrays</h1>
  <div class="content">
    <p id="introduction">In C programming, you can create an array of arrays. These arrays are known as multidimensional arrays. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">float</span> x[<span class="hljs-number">3</span>][<span class="hljs-number">4</span>];</code></pre>

<p>Here, <var>x</var> is a two-dimensional (2d) array. The array can hold 12 elements. You can think the array as a table with 3 rows and each row has 4 columns.</p>

<figure><img alt="Two dimensional array in C programming" height="215" src="assets/images/two-dimensional-array_0.jpg" width="395">
<figcaption>Two dimensional Array</figcaption>
</figure>

<p>Similarly, you can declare a three-dimensional (3d) array. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">float</span> y[<span class="hljs-number">2</span>][<span class="hljs-number">4</span>][<span class="hljs-number">3</span>];</code></pre>

<p>Here, the array <var>y</var> can hold 24 elements.</p>

<hr>
<h2 id="initialize">Initializing a multidimensional array</h2>

<p>Here is how you can initialize two-dimensional and three-dimensional arrays:</p>

<hr>
<h3>Initialization of a 2d array</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Different ways to initialize two-dimensional array</span>

<span class="hljs-keyword">int</span> c[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>] = {{<span class="hljs-number">1</span>, <span class="hljs-number">3</span>, <span class="hljs-number">0</span>}, {<span class="hljs-number">-1</span>, <span class="hljs-number">5</span>, <span class="hljs-number">9</span>}};
       
<span class="hljs-keyword">int</span> c[][<span class="hljs-number">3</span>] = {{<span class="hljs-number">1</span>, <span class="hljs-number">3</span>, <span class="hljs-number">0</span>}, {<span class="hljs-number">-1</span>, <span class="hljs-number">5</span>, <span class="hljs-number">9</span>}};
              
<span class="hljs-keyword">int</span> c[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>] = {<span class="hljs-number">1</span>, <span class="hljs-number">3</span>, <span class="hljs-number">0</span>, <span class="hljs-number">-1</span>, <span class="hljs-number">5</span>, <span class="hljs-number">9</span>};</code>
</pre>

<hr>
<h3>Initialization of a 3d array</h3>

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
  </div><div class="clearfix"></div><p>You can initialize a three-dimensional array in a similar way to a two-dimensional array. Here's an example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> test[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>][<span class="hljs-number">4</span>] = {
  {{<span class="hljs-number">3</span>, <span class="hljs-number">4</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>}, {<span class="hljs-number">0</span>, <span class="hljs-number">-3</span>, <span class="hljs-number">9</span>, <span class="hljs-number">11</span>}, {<span class="hljs-number">23</span>, <span class="hljs-number">12</span>, <span class="hljs-number">23</span>, <span class="hljs-number">2</span>}},
  {{<span class="hljs-number">13</span>, <span class="hljs-number">4</span>, <span class="hljs-number">56</span>, <span class="hljs-number">3</span>}, {<span class="hljs-number">5</span>, <span class="hljs-number">9</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>}, {<span class="hljs-number">3</span>, <span class="hljs-number">1</span>, <span class="hljs-number">4</span>, <span class="hljs-number">9</span>}}};</code></pre>

<hr>
<h3 id="example-1">Example 1: Two-dimensional array to store and print values</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// C program to store temperature of two cities of a week and display it.</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> CITY = <span class="hljs-number">2</span>;
<span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> WEEK = <span class="hljs-number">7</span>;
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
<span class="hljs-keyword">int</span> temperature[CITY][WEEK];

<span class="hljs-comment">// Using nested loop to store values in a 2d array</span>
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; CITY; ++i)
{
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; WEEK; ++j)
  {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"City %d, Day %d: "</span>, i + <span class="hljs-number">1</span>, j + <span class="hljs-number">1</span>);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;temperature[i][j]);
  }
}
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nDisplaying values: \n\n"</span>);

<span class="hljs-comment">// Using nested loop to display vlues of a 2d array</span>
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; CITY; ++i)
{
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; WEEK; ++j)
  {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"City %d, Day %d = %d\n"</span>, i + <span class="hljs-number">1</span>, j + <span class="hljs-number">1</span>, temperature[i][j]);
  }
}
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>City 1, Day 1: 33
City 1, Day 2: 34
City 1, Day 3: 35
City 1, Day 4: 33
City 1, Day 5: 32
City 1, Day 6: 31
City 1, Day 7: 30
City 2, Day 1: 23
City 2, Day 2: 22
City 2, Day 3: 21
City 2, Day 4: 24
City 2, Day 5: 22
City 2, Day 6: 25
City 2, Day 7: 26

Displaying values: 

City 1, Day 1 = 33
City 1, Day 2 = 34
City 1, Day 3 = 35
City 1, Day 4 = 33
City 1, Day 5 = 32
City 1, Day 6 = 31
City 1, Day 7 = 30
City 2, Day 1 = 23
City 2, Day 2 = 22
City 2, Day 3 = 21
City 2, Day 4 = 24
City 2, Day 5 = 22
City 2, Day 6 = 25
City 2, Day 7 = 26</samp></pre>

<hr>
<h3 id="example-2">Example 2: Sum of two matrices</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// C program to find the sum of two matrices of order 2*2</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
<span class="hljs-keyword">float</span> a[<span class="hljs-number">2</span>][<span class="hljs-number">2</span>], b[<span class="hljs-number">2</span>][<span class="hljs-number">2</span>], result[<span class="hljs-number">2</span>][<span class="hljs-number">2</span>];

<span class="hljs-comment">// Taking input using nested for loop</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter elements of 1st matrix\n"</span>);
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i)
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">2</span>; ++j)
  {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter a%d%d: "</span>, i + <span class="hljs-number">1</span>, j + <span class="hljs-number">1</span>);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%f"</span>, &amp;a[i][j]);
  }

<span class="hljs-comment">// Taking input using nested for loop</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter elements of 2nd matrix\n"</span>);
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i)
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">2</span>; ++j)
  {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter b%d%d: "</span>, i + <span class="hljs-number">1</span>, j + <span class="hljs-number">1</span>);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%f"</span>, &amp;b[i][j]);
  }

<span class="hljs-comment">// adding corresponding elements of two arrays</span>
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i)
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">2</span>; ++j)
  {
    result[i][j] = a[i][j] + b[i][j];
  }

<span class="hljs-comment">// Displaying the sum</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nSum Of Matrix:"</span>);

<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i)
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">2</span>; ++j)
  {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%.1f\t"</span>, result[i][j]);

    <span class="hljs-keyword">if</span> (j == <span class="hljs-number">1</span>)
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"\n"</span>);
  }
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter elements of 1st matrix
Enter a11: 2;
Enter a12: 0.5;
Enter a21: -1.1;
Enter a22: 2;
Enter elements of 2nd matrix
Enter b11: 0.2;
Enter b12: 0;
Enter b21: 0.23;
Enter b22: 23;

Sum Of Matrix:
2.2     0.5
-0.9    25.0</samp></pre>

<hr>
<h3 id="example-3">Example 3: Three-dimensional array</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// C Program to store and print 12 values entered by the user</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
<span class="hljs-keyword">int</span> test[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>][<span class="hljs-number">2</span>];

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter 12 values: \n"</span>);

<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i)
{
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">3</span>; ++j)
  {
    <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> k = <span class="hljs-number">0</span>; k &lt; <span class="hljs-number">2</span>; ++k)
    {
      <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;test[i][j][k]);
    }
  }
}

<span class="hljs-comment">// Printing values with the proper index.</span>

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nDisplaying values:\n"</span>);
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i)
{
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">3</span>; ++j)
  {
    <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> k = <span class="hljs-number">0</span>; k &lt; <span class="hljs-number">2</span>; ++k)
    {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"test[%d][%d][%d] = %d\n"</span>, i, j, k, test[i][j][k]);
    }
  }
}

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter 12 values: 
1
2
3
4
5
6
7
8
9
10
11
12

Displaying Values:
test[0][0][0] = 1
test[0][0][1] = 2
test[0][1][0] = 3
test[0][1][1] = 4
test[0][2][0] = 5
test[0][2][1] = 6
test[1][0][0] = 7
test[1][0][1] = 8
test[1][1][0] = 9
test[1][1][1] = 10
test[1][2][0] = 11
test[1][2][1] = 12</samp></pre>
</div>
</section>
<section id="five3">
  <h1>Pass arrays to a function in C</h1>
  <div class="content">
    <p>In C programming, you can pass an entire array to functions. Before we learn that, let's see how you can pass individual elements of an array to functions.</p>

<hr>
<h2 id="single-element">Pass&nbsp;Individual Array Elements</h2>

<p>Passing array elements to a function is similar to <a href="/c-programming/c-user-defined-functions" title="C Functions">passing variables to a function</a>.</p>

<hr>
<h3>Example 1: Pass&nbsp;Individual&nbsp;Array Elements</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">int</span> age1, <span class="hljs-keyword">int</span> age2)</span> </span>{
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d\n"</span>, age1);
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d\n"</span>, age2);
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> ageArray[] = {<span class="hljs-number">2</span>, <span class="hljs-number">8</span>, <span class="hljs-number">4</span>, <span class="hljs-number">12</span>};

<span class="hljs-comment">// pass second and third elements to display()</span>
display(ageArray[<span class="hljs-number">1</span>], ageArray[<span class="hljs-number">2</span>]); 
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre>8
4
</pre>

<p>Here, we have passed array parameters to the <code>display()</code> function in the same way we pass variables to a function.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// pass second and third elements to display()</span>
display(ageArray[<span class="hljs-number">1</span>], ageArray[<span class="hljs-number">2</span>]);</code></pre>

<p>We can see this in the function definition, where the function parameters are individual variables:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">int</span> age1, <span class="hljs-keyword">int</span> age2)</span> </span>{
<span class="hljs-comment">// code</span>
}</code></pre>

<hr>
<h2 id="1d-array">Example 2: Pass&nbsp;Arrays to Functions</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to calculate the sum of array elements by passing to a function </span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">float</span> <span class="hljs-title">calculateSum</span><span class="hljs-params">(<span class="hljs-keyword">float</span> num[])</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">float</span> result, num[] = {<span class="hljs-number">23.4</span>, <span class="hljs-number">55</span>, <span class="hljs-number">22.6</span>, <span class="hljs-number">3</span>, <span class="hljs-number">40.5</span>, <span class="hljs-number">18</span>};

<span class="hljs-comment">// num array is passed to calculateSum()</span>
result = calculateSum(num); 
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Result = %.2f"</span>, result);
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">float</span> <span class="hljs-title">calculateSum</span><span class="hljs-params">(<span class="hljs-keyword">float</span> num[])</span> </span>{
<span class="hljs-keyword">float</span> sum = <span class="hljs-number">0.0</span>;

<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">6</span>; ++i) {
  sum += num[i];
}

<span class="hljs-keyword">return</span> sum;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Result = 162.50</samp></pre>

<p>To pass an entire array to a function, only the name of the array is passed as an argument.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp">result = calculateSum(num);</code></pre>

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
  </div><div class="clearfix"></div><p>However, notice the use of <code>[]</code> in the function definition.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-function"><span class="hljs-keyword">float</span> <span class="hljs-title">calculateSum</span><span class="hljs-params">(<span class="hljs-keyword">float</span> num[])</span> </span>{
... ..
}</code></pre>

<p>This informs the compiler that you are passing a one-dimensional array to the function.</p>

<hr>
<h2 id="multidimensional">Pass&nbsp;Multidimensional Arrays to a Function</h2>

<p>To pass multidimensional arrays to a function, only the name of the array is passed to the function (similar to one-dimensional arrays).</p>

<h3>Example 3: Pass&nbsp;two-dimensional arrays</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayNumbers</span><span class="hljs-params">(<span class="hljs-keyword">int</span> num[<span class="hljs-number">2</span>][<span class="hljs-number">2</span>])</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> num[<span class="hljs-number">2</span>][<span class="hljs-number">2</span>];
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter 4 numbers:\n"</span>);
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i) {
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">2</span>; ++j) {
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;num[i][j]);
  }
}

<span class="hljs-comment">// pass multi-dimensional array to a function</span>
displayNumbers(num);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayNumbers</span><span class="hljs-params">(<span class="hljs-keyword">int</span> num[<span class="hljs-number">2</span>][<span class="hljs-number">2</span>])</span> </span>{
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Displaying:\n"</span>);
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i) {
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">2</span>; ++j) {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d\n"</span>, num[i][j]);
  }
}
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter 4 numbers:
2
3
4
5
Displaying:
2
3
4
5</samp>
</pre>

<p>Notice the parameter <code>int num[2][2]</code> in the function prototype and function definition:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// function prototype</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayNumbers</span><span class="hljs-params">(<span class="hljs-keyword">int</span> num[<span class="hljs-number">2</span>][<span class="hljs-number">2</span>])</span></span>;</code></pre>

<p>This signifies that the function takes a two-dimensional array as an argument. We can also pass arrays with more than 2 dimensions as a function argument.</p>

<p>When passing two-dimensional arrays, it is not mandatory to specify the number of rows in the array. However, the number of columns should always be specified.</p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayNumbers</span><span class="hljs-params">(<span class="hljs-keyword">int</span> num[][<span class="hljs-number">2</span>])</span> </span>{
<span class="hljs-comment">// code</span>
}</code></pre>
<hr>
<p><strong>Recommended Reading:</strong> <a href="https://www.programiz.com/c-programming/c-pointer-functions" title="Call By Reference">Call by Reference in C</a></p>
</div>
</section>

<!-- six menu sections -->
<section id="six1">
  <h1>C Pointers</h1>
  <div class="content">
    <p id="introduction">Pointers are powerful features of C and C++ programming. Before we learn pointers, let's learn about addresses in C programming.</p>

<hr>
<h2 id="address">Address in C</h2>

<p>If you have a variable <var>var</var> in your program, <code>&amp;var</code> will give you its address in the memory.</p>

<p>We have used address numerous times while using the <code>scanf()</code> function.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;var);</code></pre>

<p>Here, the value entered by the user is stored in the address of <var>var</var> variable. Let's take a working example.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
<span class="hljs-keyword">int</span> var = <span class="hljs-number">5</span>;
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"var: %d\n"</span>, var);

<span class="hljs-comment">// Notice the use of &amp; before var</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"address of var: %p"</span>, &amp;var);  
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre>

<p><strong>Output</strong></p>

<pre><samp>var: 5 
address of var: 2686778</samp></pre>

<p class="note-tip"><strong>Note:</strong> You will probably get a different address when you run the above code.</p>

<hr>
<h2 id="pointer">C Pointers</h2>

<p>Pointers (pointer variables) are special variables that are used to store addresses rather than values.</p>

<h3>Pointer Syntax</h3>

<p>Here is how we can declare pointers.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span>* p;</code></pre>

<p>Here, we have declared a pointer <var>p</var> of <code>int</code> type.</p>

<p>You can also declare pointers in these ways.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> *p1;
<span class="hljs-keyword">int</span> * p2;
</code></pre>

<hr>
<p>Let's take another example of declaring pointers.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span>* p1, p2;</code></pre>

<p>Here, we have declared a pointer <var>p1</var> and a normal variable <var>p2</var>.</p>

<hr>
<h3 id="assign-values">Assigning addresses to Pointers</h3>

<p>Let's take an example.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span>* pc, c;
c = <span class="hljs-number">5</span>;
pc = &amp;c;
</code></pre>

<p>Here, 5 is assigned to the <var>c</var> variable. And, the address of <var>c</var> is assigned to the <var>pc</var> pointer.</p>

<hr>
<h3>Get Value of Thing Pointed by Pointers</h3>

<p>To get the value of the thing pointed by the pointers, we use the <code>*</code> operator. For example:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span>* pc, c;
c = <span class="hljs-number">5</span>;
pc = &amp;c;
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, *pc);   <span class="hljs-comment">// Output: 5</span></code></pre>

<p>Here, the address of <code>c</code> is assigned to the <var>pc</var> pointer. To get the value stored in that address, we used <var>*pc</var>.</p>

<div class="note-tip">
<p><strong>Note: </strong>In the above example, <var>pc</var> is a pointer, not <code>*pc</code>. You cannot and should not do something like <code>*pc = &amp;c</code>;</p>

<p>By the way, <code>*</code> is called the dereference operator (when working with pointers). It operates on a pointer and gives the value stored in that pointer.</p>
</div>

<hr>
<h3 id="changing-values">Changing Value Pointed by Pointers</h3>

<p>Let's take an example.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span>* pc, c;
c = <span class="hljs-number">5</span>;
pc = &amp;c;
c = <span class="hljs-number">1</span>;
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, c);    <span class="hljs-comment">// Output: 1</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, *pc);  <span class="hljs-comment">// Ouptut: 1</span></code></pre>

<p>We have assigned the address of <var>c</var> to the <var>pc</var> pointer.</p>

<p>Then, we changed the value of <var>c</var> to 1. Since <var>pc</var> and the address of <var>c</var> is the same, <code>*pc</code> gives us 1.</p>

<p>Let's take another example.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span>* pc, c;
c = <span class="hljs-number">5</span>;
pc = &amp;c;
*pc = <span class="hljs-number">1</span>;
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, *pc);  <span class="hljs-comment">// Ouptut: 1</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, c);    <span class="hljs-comment">// Output: 1</span></code>
</pre>

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
  </div><div class="clearfix"></div><p>We have assigned the address of <var>c</var> to the <var>pc</var> pointer.</p>

<p>Then, we changed <code>*pc</code> to 1 using <code>*pc = 1;</code>. Since <var>pc</var> and the address of <var>c</var> is the same, <var>c</var> will be equal to 1.</p>

<p>Let's take one more example.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span>* pc, c, d;
c = <span class="hljs-number">5</span>;
d = <span class="hljs-number">-15</span>;

pc = &amp;c; <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, *pc); <span class="hljs-comment">// Output: 5</span>
pc = &amp;d; <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, *pc); <span class="hljs-comment">// Ouptut: -15</span></code></pre>

<p>Initially, the address of <var>c</var> is assigned to the <var>pc</var> pointer using <code>pc = &amp;c;</code>. Since <var>c</var> is 5, <code>*pc</code> gives us 5.</p>

<p>Then, the address of <var>d</var> is assigned to the <var>pc</var> pointer using <code>pc = &amp;d;</code>. Since <var>d</var> is -15, <code>*pc</code> gives us -15.</p>

<hr>
<h3 id="example">Example: Working of Pointers</h3>

<p>Let's take a working example.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
 <span class="hljs-keyword">int</span>* pc, c;
 
 c = <span class="hljs-number">22</span>;
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Address of c: %p\n"</span>, &amp;c);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Value of c: %d\n\n"</span>, c);  <span class="hljs-comment">// 22</span>
 
 pc = &amp;c;
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Address of pointer pc: %p\n"</span>, pc);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Content of pointer pc: %d\n\n"</span>, *pc); <span class="hljs-comment">// 22</span>
 
 c = <span class="hljs-number">11</span>;
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Address of pointer pc: %p\n"</span>, pc);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Content of pointer pc: %d\n\n"</span>, *pc); <span class="hljs-comment">// 11</span>
 
 *pc = <span class="hljs-number">2</span>;
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Address of c: %p\n"</span>, &amp;c);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Value of c: %d\n\n"</span>, c); <span class="hljs-comment">// 2</span>
 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code>
</pre>

<p><strong>Output</strong></p>

<pre><samp>Address of c: 2686784
Value of c: 22

Address of pointer pc: 2686784
Content of pointer pc: 22

Address of pointer pc: 2686784
Content of pointer pc: 11

Address of c: 2686784
Value of c: 2</samp>
</pre>

<hr>
<p><strong>Explanation of the program</strong></p>

<ol>
<li><code>int* pc, c;</code><br>
  <figure><img alt="A pointer variable and a normal variable is created." height="103" src="assets/images/pointer-1.jpg" width="120"></figure><br>
  Here, a pointer <var>pc</var> and a normal variable <var>c</var>, both of type <code>int</code>, is created.<br>
  Since <var>pc</var> and <var>c</var> are not initialized at initially, pointer <var>pc</var> points to either no address or a random address. And, variable <var>c</var> has an address but contains random garbage value.<br>
  &nbsp;</li>
<li><code>c = 22;</code><br>
  <figure><img alt="22 is assigned to variable c." height="97" src="assets/images/pointer-2.jpg" width="120"></figure><br>
  This assigns 22 to the variable <var>c</var>. That is, 22 is stored in the memory location of variable <var>c</var>.<br>
  &nbsp;</li>
<li><code>pc = &amp;c;</code><br>
  <figure><img alt="Address of variable c is assigned to pointer pc." height="97" src="assets/images/pointer-3.jpg" width="120"></figure><br>
  This assigns the address of variable <var>c</var> to the pointer <var>pc</var>.<br>
  &nbsp;</li>
<li><code>c = 11;</code><br>
  <figure><img alt="11 is assigned to variable c." height="102" src="assets/images/pointer-4.jpg" width="121"></figure><br>
  This assigns 11 to variable <var>c</var>.<br>
  &nbsp;</li>
<li><code>*pc = 2;</code><br>
  <figure><img alt="5 is assigned to pointer variable's address." height="100" src="assets/images/pointer-5.jpg" width="119"></figure><br>
  This change the value at the memory location pointed by the pointer <var>pc</var> to 2.</li>
</ol>

<hr>
<h3 id="common-mistakes">Common mistakes when working with pointers</h3>

<p>Suppose, you want pointer <var>pc</var> to point to the address of <var>c</var>. Then,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> c, *pc;

<span class="hljs-comment">// pc is address but c is not</span>
pc = c;  <span class="hljs-comment">// Error</span>

<span class="hljs-comment">// &amp;c is address but *pc is not</span>
*pc = &amp;c;  <span class="hljs-comment">// Error</span>

<span class="hljs-comment">// both &amp;c and pc are addresses</span>
pc = &amp;c;  <span class="hljs-comment">// Not an error</span>

<span class="hljs-comment">// both c and *pc are values </span>
*pc = c;  <span class="hljs-comment">// Not an error</span></code></pre>

<p>Here's an example of pointer syntax beginners often find confusing.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
 <span class="hljs-keyword">int</span> c = <span class="hljs-number">5</span>;
 <span class="hljs-keyword">int</span> *p = &amp;c;

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, *p);  <span class="hljs-comment">// 5</span>
&nbsp;  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>; 
}</code></pre>

<p><strong>Why didn't we get an error when using <code>int&nbsp;*p = &amp;c;</code>?</strong></p>

<p>It's because</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> *p = &amp;c;</code></pre>

<p>is equivalent to</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span> *p:
p = &amp;c;</code></pre>

<p>In both cases, we are creating a pointer <code>p</code> (not <code>*p</code>) and assigning <code>&amp;c</code> to it.</p>

<p>To avoid this confusion, we can use the statement like this:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">int</span>* p = &amp;c;</code></pre>

<hr>
<p>Now you know what pointers are, you will learn how pointers are related to arrays in the next tutorial.</p>
</div>
</section>
<section id="six2">
  <h1>Relationship Between Arrays and Pointers</h1>
  <div class="content">
    <p>Before you learn about the relationship between arrays and pointers, be sure to check these two topics:</p>

<ul>
<li><a href="/c-programming/c-arrays" title="C arrays">C Arrays</a></li>
<li><a href="/c-programming/c-pointers" title="C pointers">C Pointers</a></li>
</ul>

<hr>
<h2 id="relationship">Relationship Between Arrays and Pointers</h2>

<p>An array is a block of sequential data. Let's write a program to print addresses of array elements.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
 <span class="hljs-keyword">int</span> x[<span class="hljs-number">4</span>];
 <span class="hljs-keyword">int</span> i;

 <span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">4</span>; ++i) {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"&amp;x[%d] = %p\n"</span>, i, &amp;x[i]);
 }

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Address of array x: %p"</span>, x);

 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre>

<p><strong>Output</strong></p>

<pre><samp>&amp;x[0] = 1450734448
&amp;x[1] = 1450734452
&amp;x[2] = 1450734456
&amp;x[3] = 1450734460
Address of array x: 1450734448</samp>
</pre>

<p>There is a difference of 4 bytes between two consecutive elements of array <var>x</var>. It is because the size of <code>int</code> is 4 bytes (on our compiler).</p>

<p>Notice that, the address of <var>&amp;x[0]</var> and <var>x</var> is the same. It's because the variable name <var>x</var> points to the first element of the array.</p>

<figure><img alt="Relation between arrays and pointers" height="73" src="assets/images/array-pointers.jpg" title="Arrays as Pointers" width="263">
<figcaption>Relation between Arrays and Pointers</figcaption>
</figure>

<p>From the above example, it is clear that <code>&amp;x[0]</code> is equivalent to <var>x</var>. And, <code>x[0]</code> is equivalent to <code>*x</code>.</p>

<p>Similarly,</p>

<ul>
<li><code>&amp;x[1]</code> is equivalent to <code>x+1</code> and <code>x[1]</code> is equivalent to <code>*(x+1)</code>.</li>
<li><code>&amp;x[2]</code> is equivalent to <code>x+2</code> and <code>x[2]</code> is equivalent to <code>*(x+2)</code>.</li>
<li>...</li>
<li>Basically, <code>&amp;x[i]</code> is equivalent to <code>x+i</code> and <code>x[i]</code> is equivalent to <code>*(x+i)</code>.</li>
</ul>

<hr>
<h3 id="example-1">Example 1: Pointers and Arrays</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> i, x[<span class="hljs-number">6</span>], sum = <span class="hljs-number">0</span>;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter 6 numbers: "</span>);

<span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">6</span>; ++i) {
<span class="hljs-comment">// Equivalent to scanf("%d", &amp;x[i]);</span>
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, x+i);

<span class="hljs-comment">// Equivalent to sum += x[i]</span>
    sum += *(x+i);
}

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Sum = %d"</span>, sum);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre>

<p>When you run the program, the output will be:</p>

<pre><samp>Enter 6 numbers: 2
3
4
4
12
4
Sum = 29 </samp></pre>

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
  </div><div class="clearfix"></div><p>Here, we have declared an array <var>x</var> of 6 elements. To access elements of the array, we have used pointers.</p>

<hr>
<p>In most contexts, array names decay to pointers. In simple words, array names are converted to pointers. That's the reason why you can use pointers to access elements of arrays. However, you should remember that <strong>pointers and arrays are not the same</strong>.</p>

<p>There are a few cases where array names don't decay to pointers. To learn more, visit: <a href="https://stackoverflow.com/questions/17752978/exceptions-to-array-decaying-into-a-pointer">When does array name doesn't decay into a pointer?</a></p>

<hr>
<h3 id="example-2">Example 2: Arrays and Pointers</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> x[<span class="hljs-number">5</span>] = {<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>, <span class="hljs-number">4</span>, <span class="hljs-number">5</span>};
<span class="hljs-keyword">int</span>* ptr;

<span class="hljs-comment">// ptr is assigned the address of the third element</span>
ptr = &amp;x[<span class="hljs-number">2</span>]; 

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"*ptr = %d \n"</span>, *ptr);   <span class="hljs-comment">// 3</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"*(ptr+1) = %d \n"</span>, *(ptr+<span class="hljs-number">1</span>)); <span class="hljs-comment">// 4</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"*(ptr-1) = %d"</span>, *(ptr<span class="hljs-number">-1</span>));  <span class="hljs-comment">// 2</span>

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p>When you run the program, the output will be:</p>

<pre><samp>*ptr = 3 
*(ptr+1) = 4 
*(ptr-1) = 2</samp></pre>

<p>In this example, <code>&amp;x[2]</code>, the address of the third element, is assigned to the <var>ptr</var> pointer. Hence, <code>3</code> was displayed when we printed <code>*ptr</code>.</p>

<p>And, printing <code>*(ptr+1)</code> gives us the fourth element. Similarly, printing <code>*(ptr-1)</code> gives us the second element.</p>  </div>
</section>
<section id="six3">
  <h1>C Pass Addresses and Pointers</h1>
  <div class="content">
    <p>In C programming, it is also possible to pass addresses as arguments to functions.</p>

<p>To accept these addresses in the function definition, we can use pointers. It's because pointers are used to store addresses. Let's take an example:</p>

<hr>
<h2 id="example-1">Example: Pass Addresses to Functions</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span> *n1, <span class="hljs-keyword">int</span> *n2)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> num1 = <span class="hljs-number">5</span>, num2 = <span class="hljs-number">10</span>;

  <span class="hljs-comment">// address of num1 and num2 is passed</span>
  swap( &amp;num1, &amp;num2);

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"num1 = %d\n"</span>, num1);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"num2 = %d"</span>, num2);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span>* n1, <span class="hljs-keyword">int</span>* n2)</span>
</span>{
  <span class="hljs-keyword">int</span> temp;
  temp = *n1;
  *n1 = *n2;
  *n2 = temp;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>When you run the program, the output will be:</p>

<pre><samp>num1 = 10
num2 = 5</samp></pre>

<p>The address of <var>num1</var> and <var>num2</var> are passed to the <code>swap()</code> function using <code>swap(&amp;num1, &amp;num2);</code>.</p>

<p>Pointers <var>n1</var> and <var>n2</var> accept these arguments in the function definition.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span>* n1, <span class="hljs-keyword">int</span>* n2)</span> </span>{
  ... ..
}</code>
</pre>

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
  </div><div class="clearfix"></div><p>When <var>*n1</var> and <var>*n2</var> are changed inside the <code>swap()</code> function, <var>num1</var> and <var>num2</var> inside the <var>main()</var> function are also changed.</p>

<p>Inside the <code>swap()</code> function, <code>*n1</code> and <code>*n2</code> swapped. Hence, <var>num1</var> and <var>num2</var> are also swapped.</p>

<p>Notice that <code>swap()</code> is not returning anything; its return type is <code>void</code>.</p>

<hr>
<h2 id="example-2">Example 2: Passing Pointers to Functions</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">addOne</span><span class="hljs-params">(<span class="hljs-keyword">int</span>* ptr)</span> </span>{
(*ptr)++; <span class="hljs-comment">// adding 1 to *ptr</span>
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
<span class="hljs-keyword">int</span>* p, i = <span class="hljs-number">10</span>;
p = &amp;i;
addOne(p);

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, *p); <span class="hljs-comment">// 11</span>
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Here, the value stored at <var>p</var>, <code>*p</code>, is 10 initially.</p>

<p>We then passed the pointer <var>p</var> to the <code>addOne()</code> function. The <var>ptr</var> pointer gets this address in the <code>addOne()</code> function.</p>

<p>Inside the function, we increased the value stored at <var>ptr</var> by 1 using <code>(*ptr)++;</code>. Since <var>ptr</var> and <var>p</var> pointers both have the same address, <code>*p</code> inside <code>main()</code> is also 11.</p>
</div>
</section>
<section id="six4">
  <h1>C Dynamic Memory Allocation</h1>
  <div class="content">
    <p>In C programming, it is also possible to pass addresses as arguments to functions.</p>

<p>To accept these addresses in the function definition, we can use pointers. It's because pointers are used to store addresses. Let's take an example:</p>

<hr>
<h2 id="example-1">Example: Pass Addresses to Functions</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span> *n1, <span class="hljs-keyword">int</span> *n2)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">int</span> num1 = <span class="hljs-number">5</span>, num2 = <span class="hljs-number">10</span>;

  <span class="hljs-comment">// address of num1 and num2 is passed</span>
  swap( &amp;num1, &amp;num2);

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"num1 = %d\n"</span>, num1);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"num2 = %d"</span>, num2);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span>* n1, <span class="hljs-keyword">int</span>* n2)</span>
</span>{
  <span class="hljs-keyword">int</span> temp;
  temp = *n1;
  *n1 = *n2;
  *n2 = temp;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>When you run the program, the output will be:</p>

<pre><samp>num1 = 10
num2 = 5</samp></pre>

<p>The address of <var>num1</var> and <var>num2</var> are passed to the <code>swap()</code> function using <code>swap(&amp;num1, &amp;num2);</code>.</p>

<p>Pointers <var>n1</var> and <var>n2</var> accept these arguments in the function definition.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span>* n1, <span class="hljs-keyword">int</span>* n2)</span> </span>{
  ... ..
}</code>
</pre>

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
  </div><div class="clearfix"></div><p>When <var>*n1</var> and <var>*n2</var> are changed inside the <code>swap()</code> function, <var>num1</var> and <var>num2</var> inside the <var>main()</var> function are also changed.</p>

<p>Inside the <code>swap()</code> function, <code>*n1</code> and <code>*n2</code> swapped. Hence, <var>num1</var> and <var>num2</var> are also swapped.</p>

<p>Notice that <code>swap()</code> is not returning anything; its return type is <code>void</code>.</p>

<hr>
<h2 id="example-2">Example 2: Passing Pointers to Functions</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">addOne</span><span class="hljs-params">(<span class="hljs-keyword">int</span>* ptr)</span> </span>{
(*ptr)++; <span class="hljs-comment">// adding 1 to *ptr</span>
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
<span class="hljs-keyword">int</span>* p, i = <span class="hljs-number">10</span>;
p = &amp;i;
addOne(p);

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d"</span>, *p); <span class="hljs-comment">// 11</span>
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Here, the value stored at <var>p</var>, <code>*p</code>, is 10 initially.</p>

<p>We then passed the pointer <var>p</var> to the <code>addOne()</code> function. The <var>ptr</var> pointer gets this address in the <code>addOne()</code> function.</p>

<p>Inside the function, we increased the value stored at <var>ptr</var> by 1 using <code>(*ptr)++;</code>. Since <var>ptr</var> and <var>p</var> pointers both have the same address, <code>*p</code> inside <code>main()</code> is also 11.</p>
</div>
</section>
<section id="six5">
  <h1>C Array and Pointer Examples</h1>
  <div class="content">
    <p>To understand all programs in this article, you should have the knowledge of the following topics:</p>

<ol>
<li><a href="/c-programming/c-arrays" title="C programming Arrays">Arrays</a></li>
<li><a href="/c-programming/c-multi-dimensional-arrays" title="Multidimensional Arrays in C Programming">Multi-dimensional Arrays</a></li>
<li><a href="/c-programming/c-pointers" title="C Programming Pointers">Pointers</a></li>
<li><a href="/c-programming/c-pointers-arrays" title="Relation Between Arrays and Pointer">Array and Pointer Relation</a></li>
<li><a href="/c-programming/c-pointer-functions" title="Call by Reference in C programming">Call by Reference</a></li>
<li><a href="/c-programming/c-dynamic-memory-allocation" title="Dynamic Memory Allocation in C programming">Dynamic Memory Allocation</a></li>
</ol>

<hr>
<h2>Array and Pointer Examples</h2>

<div class="table-responsive"><table summary="Source code and examples in C programming Language" border="0">
<tbody>
  <tr>
    <td><a href="/c-programming/examples/average-arrays">Calculate the average of array elements</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/array-largest-element">Find the largest element of an array</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/standard-deviation">Calculate standard deviation</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/add-matrix">Add two matrices</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/matrix-multiplication">Multiply two matrices</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/matrix-transpose">Find transpose of a matrix</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/matrix-multiplication-function">Multiply two matrices</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/access-array-pointer">Access elements of an array using pointers</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/swapping-cyclic-order">Swap numbers in the cyclic order using call by reference</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/dynamic-memory-allocation-largest">Find the largest number (Dynamic memory allocation is used)</a></td>
  </tr>
</tbody>
</table></div>
</div>
</section>

<!-- seven menu sections -->
<section id="seven1">
  <h1>C Programming Strings</h1>
  <div class="content">
    <p id="introduction">In C programming, a string is a sequence of characters terminated with a null character <code>\0</code>. For example:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">char</span> c[] = <span class="hljs-string">"c string"</span>;</code>
</pre>

<p>When the compiler encounters a sequence of characters enclosed in the double quotation marks, it appends a null character <code>\0</code> at the end by default.</p>

<figure><img alt="Memory diagram of strings in C programming" height="61" src="assets/images/c-string.jpg" title="Strings in memory diagram" width="430">
<figcaption>Memory Diagram</figcaption>
</figure>

<hr>
<h2 id="declare">How to declare a string?</h2>

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
  </div><div class="clearfix"></div><p>Here's how you can declare strings:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">char</span> s[<span class="hljs-number">5</span>];</code>
</pre>

<figure><img alt="string declaration in C programming" class="figure" height="64" src="assets/images/c-string-declaration_0.jpg" title="String declaration" width="235">
<figcaption>String Declaration in C</figcaption>
</figure>

<p>Here, we have declared a string of 5 characters.</p>

<hr>
<h2 id="initialize">How to initialize strings?</h2>

<p>You can initialize strings in a number of ways.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">char</span> c[] = <span class="hljs-string">"abcd"</span>;

<span class="hljs-keyword">char</span> c[<span class="hljs-number">50</span>] = <span class="hljs-string">"abcd"</span>;

<span class="hljs-keyword">char</span> c[] = {<span class="hljs-string">'a'</span>, <span class="hljs-string">'b'</span>, <span class="hljs-string">'c'</span>, <span class="hljs-string">'d'</span>, <span class="hljs-string">'\0'</span>};

<span class="hljs-keyword">char</span> c[<span class="hljs-number">5</span>] = {<span class="hljs-string">'a'</span>, <span class="hljs-string">'b'</span>, <span class="hljs-string">'c'</span>, <span class="hljs-string">'d'</span>, <span class="hljs-string">'\0'</span>};</code>
</pre>

<figure><img alt="Initialization of strings in C programming" class="figure" height="71" src="assets/images/c-string-initialization.jpg" title="String Initialization" width="240">
<figcaption>String Initialization in C</figcaption>
</figure>

<p>Let's take another example:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">char</span> c[<span class="hljs-number">5</span>] = <span class="hljs-string">"abcde"</span>;</code></pre>

<p>Here, we are trying to assign 6 characters (the last character is <code>'\0'</code>) to a <code>char</code> array having 5 characters. This is bad and you should never do this.</p>

<hr>
<h2>Assigning Values to Strings</h2>

<p>Arrays and strings are second-class citizens in C; they do not support the assignment operator once it is declared. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">char</span> c[<span class="hljs-number">100</span>];
c = <span class="hljs-string">"C programming"</span>;  <span class="hljs-comment">// Error! array type is not assignable.</span></code></pre>

<p class="note-tip"><strong>Note: </strong>Use the <a href="/c-programming/library-function/string.h/strcpy" title="C strcpy">strcpy() function</a> to copy the string instead.</p>

<hr>
<h2 id="read">Read String from the user</h2>

<p>You can use the <code>scanf()</code> function to read a string.</p>

<p>The <code>scanf()</code> function reads the sequence of characters until it encounters <a href="https://stackoverflow.com/questions/30033582/what-is-the-symbol-for-whitespace-in-c">whitespace</a> (space, newline, tab, etc.).</p>

<hr>
<h3>Example 1: scanf() to read a string</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">char</span> name[<span class="hljs-number">20</span>];
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter name: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%s"</span>, name);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Your name is %s."</span>, name);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre>

<p><b>Output</b></p>

<pre><samp>Enter name: Dennis Ritchie
Your name is Dennis.</samp></pre>

<p>Even though <var>Dennis Ritchie</var> was entered in the above program, only <var>"Dennis"</var> was stored in the <var>name</var> string. It's because there was a space after <var>Dennis</var>.</p>

<p>Also notice that we have used the code <var>name</var> instead of <code>&amp;name</code> with <code>scanf()</code>.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%s"</span>, name);</code></pre>

<p>This is because <var>name</var> is a <code>char</code> array, and we know that array names decay to pointers in C.</p>

<p>Thus, the&nbsp;<var>name</var>&nbsp;in&nbsp;<code>scanf()</code> already points to the address of the first element in the string, which is why we don't need to use <code>&amp;</code>.</p>

<hr>
<h3>How to read a line of text?</h3>

<p>You can use the <code>fgets()</code> function to read a line of string. And, you can use <code>puts()</code> to display the string.</p>

<hr>
<h3>Example 2: fgets() and puts()</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">char</span> name[<span class="hljs-number">30</span>];
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter name: "</span>);
  fgets(name, <span class="hljs-keyword">sizeof</span>(name), <span class="hljs-built_in">stdin</span>);  <span class="hljs-comment">// read string</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Name: "</span>);
  <span class="hljs-built_in">puts</span>(name);    <span class="hljs-comment">// display string</span>
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Enter name: Tom Hanks
Name: Tom Hanks</samp>
</pre>

<p>Here, we have used <code>fgets()</code> function to read a string from the user.</p>

<p><code>fgets(name, sizeof(name), stdlin); // read string</code></p>

<p>The <code>sizeof(name)</code> results to 30. Hence, we can take a maximum of 30 characters as input which is the size of the&nbsp;<var>name</var> string.</p>

<p>To print the string, we have used <code>puts(name);</code>.</p>

<p class="note-tip"><strong>Note:</strong> The <code>gets()</code> function can also be to take input from the user. However, it is removed from the C standard.<br>
<br>
It's because <code>gets()</code> allows you to input any length of characters. Hence, there might be a buffer overflow.</p>

<hr>
<h2 id="pass-function">Passing Strings to Functions</h2>

<p>Strings can be passed to a function in a similar way as arrays. Learn more about <a class="Passing Array to Function" href="/c-programming/c-arrays-functions">passing arrays to a function</a>.</p>

<hr>
<h3>Example 3: Passing string to a Function</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayString</span><span class="hljs-params">(<span class="hljs-keyword">char</span> str[])</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">char</span> str[<span class="hljs-number">50</span>];
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter string: "</span>);
  fgets(str, <span class="hljs-keyword">sizeof</span>(str), <span class="hljs-built_in">stdin</span>);             
  displayString(str);     <span class="hljs-comment">// Passing string to a function.    </span>
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayString</span><span class="hljs-params">(<span class="hljs-keyword">char</span> str[])</span>
</span>{
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"String Output: "</span>);
  <span class="hljs-built_in">puts</span>(str);
}</code>
</pre>

<hr>
<h2 id="pointers">Strings and Pointers</h2>

<p>Similar like arrays, string names are "decayed" to pointers. Hence, you can use pointers to manipulate elements of the string. We recommended you to check <a href="/c-programming/c-pointers-arrays" title="C Arrays and Pointers">C Arrays and Pointers</a> before you check this example.</p>

<hr>
<h3>Example 4: Strings and Pointers</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">(<span class="hljs-keyword">void</span>)</span> </span>{
<span class="hljs-keyword">char</span> name[] = <span class="hljs-string">"Harry Potter"</span>;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%c"</span>, *name);     <span class="hljs-comment">// Output: H</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%c"</span>, *(name+<span class="hljs-number">1</span>));   <span class="hljs-comment">// Output: a</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%c"</span>, *(name+<span class="hljs-number">7</span>));   <span class="hljs-comment">// Output: o</span>

<span class="hljs-keyword">char</span> *namePtr;

namePtr = name;
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%c"</span>, *namePtr);     <span class="hljs-comment">// Output: H</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%c"</span>, *(namePtr+<span class="hljs-number">1</span>));   <span class="hljs-comment">// Output: a</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%c"</span>, *(namePtr+<span class="hljs-number">7</span>));   <span class="hljs-comment">// Output: o</span>
}</code></pre>

<hr>
<h3 id="common-functions">Commonly Used String Functions</h3>

<ul>
<li><a href="/c-programming/library-function/string.h/strlen"><strong>strlen()</strong> - calculates the length of a string</a></li>
<li><a href="/c-programming/library-function/string.h/strcpy"><strong>strcpy()</strong> - copies a string to another</a></li>
<li><a href="/c-programming/library-function/string.h/strcmp"><strong>strcmp()</strong> - compares two strings</a></li>
<li><a href="/c-programming/library-function/string.h/strcat"><strong>strcat()</strong> - concatenates two strings</a></li>
</ul>
</div>
</section>
<section id="seven2">
  <h1>String Manipulations In C Programming Using Library Functions</h1>
  <div class="content">
    <p>You need to often manipulate <a href="/c-programming/c-strings" title="C strings">strings</a> according to the need of a problem. Most, if not all, of the time string manipulation can be done manually but, this makes programming complex and large.</p>

<p>To solve this, C supports a large number of string handling functions in the <a href="/c-programming/library-function" title="C standard library functions">standard library</a> <code>"string.h"</code>.</p>

<p>Few commonly used string handling functions are discussed below:</p>

<div class="table-responsive"><table summary="Function under &quot;string.h&quot; header file in C programming" border="0">
<thead>
  <tr>
    <th>Function</th>
    <th>Work of Function</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><a href="/c-programming/library-function/strlen" title="Strlen()">strlen()</a></td>
    <td>computes string's length</td>
  </tr>
  <tr class="cprotable">
    <td><a href="/c-programming/library-function/strcpy" title="Strcpy()">strcpy()</a></td>
    <td>copies a string to another</td>
  </tr>
  <tr>
    <td><a href="/c-programming/library-function/strcat" title="Strcat()">strcat()</a></td>
    <td>concatenates(joins) two strings</td>
  </tr>
  <tr class="cprotable">
    <td><a href="/c-programming/library-function/strcmp" title="Strcmp()">strcmp()</a></td>
    <td>compares two strings</td>
  </tr>
  <tr>
    <td>strlwr()</td>
    <td>converts string to lowercase</td>
  </tr>
  <tr class="cprotable">
    <td>strupr()</td>
    <td>converts string to uppercase</td>
  </tr>
</tbody>
</table></div>

<p>Strings handling functions are defined under <code>"string.h"</code> header file.</p>

<pre>#include &lt;string.h&gt;</pre>

<p><strong>Note:</strong> You have to include the code below to run string handling functions.</p>

<h3>gets() and puts()</h3>

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
  </div><div class="clearfix"></div><p>Functions gets() and puts() are two string functions to take string input from the user and display it respectively as mentioned in the&nbsp;<a href="/c-programming/c-strings" title="C strings">previous chapter</a>.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span><span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">char</span> name[<span class="hljs-number">30</span>];
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter name: "</span>);
  gets(name);     <span class="hljs-comment">//Function to read string from user.</span>
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Name: "</span>);
  <span class="hljs-built_in">puts</span>(name);    <span class="hljs-comment">//Function to display string.</span>
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p><strong>Note: </strong>Though, <code>gets()</code> and <code>puts()</code> function handle strings, both these functions are defined in <code>"stdio.h"</code> header file.</p>
</div>
</section>
<section id="seven3">
  <h1>String Examples in C Programming</h1>
  <div class="content">
    <p>A string is an array of characters that ends with a null character <code>\0</code>.</p>

<p>All examples mentioned in the page are related to strings in C programming. To understand all examples on this page, you should have the knowledge of:</p>

<ul>
<li><a href="/c-programming/c-strings">Strings in C</a></li>
<li>How to Pass String to a function</li>
<li><a href="/c-programming/string-handling-functions" title="Standard library functions to work with strings">Commonly used library functions to work with strings</a></li>
</ul>

<h2>String Examples</h2>

<div class="table-responsive"><table summary="Example and Source code of Strings in C Programming" border="0">
<tbody>
  <tr>
    <td><a href="/c-programming/examples/frequency-character">Find the frequency of a character in a string</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/vowel-consonant-frequency-string">Find the number of vowels, consonants, digits and white spaces</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/reverse-sentence-recursion">Reverse a string using recursion</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/string-length">Find the length of a string</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/concatenate-string">Concatenate two strings</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/string-copy">C Program to Copy a String</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/remove-characters-string">Remove all characters in a string except alphabets</a></td>
  </tr>
  <tr>
    <td><a href="/c-programming/examples/lexicographical-order">Sort elements in the lexicographical order (dictionary order)</a></td>
  </tr>
</tbody>
</table></div>
</div>
</section>

<!-- eight menu sections -->
<section id="eight1">
  <h1>C struct</h1>
  <div class="content">
    <p id="introduction">In C programming, a struct (or structure) is a collection of variables (can be of different types) under a single name.</p>

<hr>
<h2 id="define">Define Structures</h2>

<p>Before you can create structure variables, you need to define its data type. To define a struct, the <code>struct</code> keyword is used.</p>

<h3>Syntax of struct</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">structureName</span> {</span>
dataType member1;
dataType member2;
...
};</code></pre>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
<span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
<span class="hljs-keyword">int</span> citNo;
<span class="hljs-keyword">float</span> salary;
};</code></pre>

<p>Here, a derived type <code>struct Person</code> is defined. Now, you can create variables of this type.</p>

<hr>
<h2 id="create">Create struct Variables</h2>

<p>When a <code>struct</code> type is declared, no storage or memory is allocated. To allocate memory of a given structure type and work with it, we need to create variables.</p>

<p>Here's how we create structure variables:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
<span class="hljs-comment">// code</span>
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> <span class="hljs-title">person1</span>, <span class="hljs-title">person2</span>, <span class="hljs-title">p</span>[20];</span>
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p>Another way of creating a <code>struct</code> variable is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
 <span class="hljs-comment">// code</span>
} person1, person2, p[<span class="hljs-number">20</span>];</code></pre>

<p>In both cases,</p>

<ul>
<li><var>person1</var> and <var>person2</var> are <code>struct Person</code> variables</li>
<li><var>p[]</var> is a <code>struct Person</code> array of size 20.</li>
</ul>

<hr>
<h2 id="access-members">Access Members of a Structure</h2>

<p>There are two types of operators used for accessing members of a structure.</p>

<ol>
<li><code>.</code> - Member operator</li>
<li><code>-&gt;</code> - Structure pointer operator (will be discussed in the next tutorial)</li>
</ol>

<p>Suppose, you want to access the <var>salary</var> of <var>person2</var>. Here's how you can do it.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp">person2.salary</code></pre>

<hr>
<h2 id="example1">Example 1: C structs</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string.h&gt;</span></span>

<span class="hljs-comment">// create struct with person1 variable</span>
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
<span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
<span class="hljs-keyword">int</span> citNo;
<span class="hljs-keyword">float</span> salary;
} person1;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-comment">// assign value to name of person1</span>
<span class="hljs-built_in">strcpy</span>(person1.name, <span class="hljs-string">"George Orwell"</span>);

<span class="hljs-comment">// assign values to other person1 variables</span>
person1.citNo = <span class="hljs-number">1984</span>;
person1. salary = <span class="hljs-number">2500</span>;

<span class="hljs-comment">// print struct variables</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Name: %s\n"</span>, person1.name);
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Citizenship No.: %d\n"</span>, person1.citNo);
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Salary: %.2f"</span>, person1.salary);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Name: George Orwell
Citizenship No.: 1984
Salary: 2500.00</samp></pre>

<p>In this program, we have created a <code>struct</code> named <code>Person</code>. We have also created a variable of <code>Person</code> named <var>person1</var>.</p>

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
  </div><div class="clearfix"></div><p>In <code>main()</code>, we have assigned values to the variables defined in <code>Person</code> for the <var>person1</var> object.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-built_in">strcpy</span>(person1.name, <span class="hljs-string">"George Orwell"</span>);
person1.citNo = <span class="hljs-number">1984</span>;
person1. salary = <span class="hljs-number">2500</span>;</code></pre>

<p>Notice that we have used <code>strcpy()</code> function to assign the value to <var>person1.name</var>.</p>

<p>This is because <var>name</var> is a <code>char</code> array (<a href="/c-programming/c-strings">C-string</a>) and we cannot use the assignment operator <code>=</code> with it after we have declared the string.</p>

<p>Finally, we printed the data of <var>person1</var>.</p>

<hr>
<h2 id="typedef">Keyword typedef</h2>

<p>We use the <code>typedef</code> keyword to create an alias name for data types. It is commonly used with structures to simplify the syntax of declaring variables.</p>

<p>For example, let us look at the following code:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Distance</span>{</span>
<span class="hljs-keyword">int</span> feet;
<span class="hljs-keyword">float</span> inch;
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Distance</span> <span class="hljs-title">d1</span>, <span class="hljs-title">d2</span>;</span>
}</code></pre>

<p>We can use <code>typedef</code> to write an equivalent code with a simplified syntax:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">typedef</span> <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Distance</span> {</span>
<span class="hljs-keyword">int</span> feet;
<span class="hljs-keyword">float</span> inch;
} distances;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
distances d1, d2;
}</code></pre>

<hr>
<h3>Example 2: C typedef</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string.h&gt;</span></span>

<span class="hljs-comment">// struct with typedef person</span>
<span class="hljs-keyword">typedef</span> <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
<span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
<span class="hljs-keyword">int</span> citNo;
<span class="hljs-keyword">float</span> salary;
} person;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-comment">// create  Person variable</span>
person p1;

<span class="hljs-comment">// assign value to name of p1</span>
<span class="hljs-built_in">strcpy</span>(p1.name, <span class="hljs-string">"George Orwell"</span>);

<span class="hljs-comment">// assign values to other p1 variables</span>
p1.citNo = <span class="hljs-number">1984</span>;
p1. salary = <span class="hljs-number">2500</span>;

<span class="hljs-comment">// print struct variables</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Name: %s\n"</span>, p1.name);
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Citizenship No.: %d\n"</span>, p1.citNo);
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Salary: %.2f"</span>, p1.salary);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Name: George Orwell
Citizenship No.: 1984
Salary: 2500.00</samp></pre>

<p>Here, we have used <code>typedef</code> with the <code>Person</code> structure to create an alias <code>person</code>.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// struct with typedef person</span>
<span class="hljs-keyword">typedef</span> <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
<span class="hljs-comment">// code</span>
} person;</code></pre>

<p>Now, we can simply declare a <code>Person</code> variable using the <code>person</code> alias:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// equivalent to struct Person p1</span>
person p1;</code></pre>

<hr>
<h2 id="nested-structures">Nested Structures</h2>

<p>You can create structures within a structure in C programming. For example,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">complex</span> {</span>
<span class="hljs-keyword">int</span> imag;
<span class="hljs-keyword">float</span> real;
};

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">number</span> {</span>
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">complex</span> <span class="hljs-title">comp</span>;</span>
<span class="hljs-keyword">int</span> integers;
} num1, num2;</code></pre>

<p>Suppose, you want to set <var>imag</var> of <var>num2</var> variable to <strong>11</strong>. Here's how you can do it:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp">num2.comp.imag = <span class="hljs-number">11</span>;</code></pre>

<hr>
<h3>Example 3: C Nested Structures</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">complex</span> {</span>
<span class="hljs-keyword">int</span> imag;
<span class="hljs-keyword">float</span> real;
};

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">number</span> {</span>
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">complex</span> <span class="hljs-title">comp</span>;</span>
<span class="hljs-keyword">int</span> integer;
} num1;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-comment">// initialize complex variables</span>
num1.comp.imag = <span class="hljs-number">11</span>;
num1.comp.real = <span class="hljs-number">5.25</span>;

<span class="hljs-comment">// initialize number variable</span>
num1.integer = <span class="hljs-number">6</span>;

<span class="hljs-comment">// print struct variables</span>
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Imaginary Part: %d\n"</span>, num1.comp.imag);
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Real Part: %.2f\n"</span>, num1.comp.real);
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Integer: %d"</span>, num1.integer);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Imaginary Part: 11
Real Part: 5.25
Integer: 6</samp></pre>

<hr>
<h2>Why structs in C?</h2>

<p>Suppose you want to store information about a person: his/her name, citizenship number, and salary. You can create different variables <var>name</var>, <var>citNo</var> and <var>salary</var> to store this information.</p>

<p>What if you need to store information of more than one person? Now, you need to create different variables for each information per person: <var>name1</var>, <var>citNo1</var>, <var>salary1</var>, <var>name2</var>, <var>citNo2</var>, <var>salary2</var>, etc.</p>

<p>A better approach would be to have a collection of all related information under a single name <code>Person</code> structure and use it for every person.</p>

<hr>
<h2>More on struct</h2>

<ul>
<li><a href="/c-programming/c-structures-pointers">Structures and pointers</a></li>
<li><a href="/c-programming/c-structure-function">Passing structures to a function</a></li>
</ul>  </div>
</section>
<section id="eight2">
  <h1>C structs and Pointers</h1>
  <div class="content">
    <p id="introduction">Before you learn about how pointers can be used with structs, be sure to check these tutorials:</p>

<ul>
<li><a href="/c-programming/c-pointers" title="C Pointers">C Pointers</a></li>
<li><a href="/c-programming/c-structures" title="C structs">C struct</a></li>
</ul>

<hr>
<h2 id="pointers-struct">C Pointers to struct</h2>

<p>Here's how you can create pointers to structs.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">name</span> {</span>
  member1;
  member2;
  .
  .
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">name</span> *<span class="hljs-title">ptr</span>, <span class="hljs-title">Harry</span>;</span>
}</code></pre>

<p>Here, <var>ptr</var> is a pointer to <code>struct</code>.</p>

<hr>
<h2 id="example-1">Example: Access members using Pointer</h2>

<p>To access members of a structure using pointers, we use the <code>-&gt;</code> operator.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">person</span>
{</span>
 <span class="hljs-keyword">int</span> age;
 <span class="hljs-keyword">float</span> weight;
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">person</span> *<span class="hljs-title">personPtr</span>, <span class="hljs-title">person1</span>;</span>
  personPtr = &amp;person1;   

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter age: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;personPtr-&gt;age);

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter weight: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%f"</span>, &amp;personPtr-&gt;weight);

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Displaying:\n"</span>);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Age: %d\n"</span>, personPtr-&gt;age);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"weight: %f"</span>, personPtr-&gt;weight);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>In this example, the address of <var>person1</var> is stored in the <var>personPtr</var> pointer using <code>personPtr = &amp;person1;</code>.</p>

<p>Now, you can access the members of <var>person1</var> using the <code>personPtr</code> pointer.</p>

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
  </div><div class="clearfix"></div><p>By the way,</p>

<ul>
<li><code>personPtr-&gt;age</code> is equivalent to <code>(*personPtr).age</code></li>
<li><code>personPtr-&gt;weight</code> is equivalent to <code>(*personPtr).weight</code></li>
</ul>

<hr>
<h2 id="dma">Dynamic memory allocation of structs</h2>

<p>Before you proceed this section, we recommend you to check <a href="https://www.programiz.com/c-programming/c-dynamic-memory-allocation">C dynamic memory allocation</a>.</p>

<p>Sometimes, the number of struct variables you declared may be insufficient. You may need to allocate memory during run-time. Here's how you can achieve this in C programming.</p>

<h3>Example: Dynamic memory allocation of structs</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdlib.h&gt;</span></span>
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">person</span> {</span>
 <span class="hljs-keyword">int</span> age;
 <span class="hljs-keyword">float</span> weight;
 <span class="hljs-keyword">char</span> name[<span class="hljs-number">30</span>];
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
 <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">person</span> *<span class="hljs-title">ptr</span>;</span>
 <span class="hljs-keyword">int</span> i, n;

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter the number of persons: "</span>);
 <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;n);

 <span class="hljs-comment">// allocating memory for n numbers of struct person</span>
 ptr = (struct person*) <span class="hljs-built_in">malloc</span>(n * <span class="hljs-keyword">sizeof</span>(struct person));

 <span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; n; ++i)
 {
     <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter first name and age respectively: "</span>);

     <span class="hljs-comment">// To access members of 1st struct person,</span>
     <span class="hljs-comment">// ptr-&gt;name and ptr-&gt;age is used</span>

     <span class="hljs-comment">// To access members of 2nd struct person,</span>
     <span class="hljs-comment">// (ptr+1)-&gt;name and (ptr+1)-&gt;age is used</span>
     <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%s %d"</span>, (ptr+i)-&gt;name, &amp;(ptr+i)-&gt;age);
 }

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Displaying Information:\n"</span>);
 <span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; n; ++i)
     <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Name: %s\tAge: %d\n"</span>, (ptr+i)-&gt;name, (ptr+i)-&gt;age);

 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>When you run the program, the output will be:</p>

<pre><samp>Enter the number of persons:  2
Enter first name and age respectively:  Harry 24
Enter first name and age respectively:  Gary 32
Displaying Information:
Name: Harry	Age: 24
Name: Gary	Age: 32</samp></pre>

<p>In the above example, <var>n</var> number of struct variables are created where <var>n</var> is entered by the user.</p>

<p>To allocate the memory for <var>n</var> number of <var>struct person</var>, we used,</p>

<pre style="max-height: 600px;"><code class="c hljs cpp">ptr = (struct person*) <span class="hljs-built_in">malloc</span>(n * <span class="hljs-keyword">sizeof</span>(struct person));</code></pre>

<p>Then, we used the <var>ptr</var> pointer to access elements of <var>person</var>.</p>
</div>
</section>
<section id="eight3">
  <h1>C Structure and Function</h1>
  <div class="content">
    <p>Similar to variables of built-in types, you can also pass structure variables to a function.</p>

<hr>
<h2 id="pass-structure">Passing structs to functions</h2>

<p>We recommended you to learn these tutorials before you learn how to pass structs to functions.</p>

<ul>
<li><a href="/c-programming/c-structures">C structures</a></li>
<li><a href="/c-programming/c-functions">C functions</a></li>
<li><a href="/c-programming/c-user-defined-functions">User-defined Function</a></li>
</ul>

<p>Here's how you can pass structures to a function</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">student</span> {</span>
 <span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
 <span class="hljs-keyword">int</span> age;
};

<span class="hljs-comment">// function prototype</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(struct student s)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
 <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">student</span> <span class="hljs-title">s1</span>;</span>

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter name: "</span>);

 <span class="hljs-comment">// read string input from the user until \n is entered</span>
 <span class="hljs-comment">// \n is discarded</span>
 <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%[^\n]%*c"</span>, s1.name);

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter age: "</span>);
 <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;s1.age);

 display(s1); <span class="hljs-comment">// passing struct as an argument</span>

 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(struct student s)</span> </span>{
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nDisplaying information\n"</span>);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Name: %s"</span>, s.name);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nAge: %d"</span>, s.age);
}</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter name: Bond
Enter age: 13

Displaying information
Name: Bond
Age: 13  
</samp></pre>

<p>Here, a struct variable <var>s1</var> of type <code>struct student</code> is created. The variable is passed to the <code>display()</code> function using <code>display(s1);</code> statement.</p>

<hr>
<h2 id="return-structure">Return struct from a function</h2>

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
  </div><div class="clearfix"></div><p>Here's how you can return structure from a function:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">student</span>
{</span>
  <span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
  <span class="hljs-keyword">int</span> age;
};

<span class="hljs-comment">// function prototype</span>
<span class="hljs-function">struct student <span class="hljs-title">getInformation</span><span class="hljs-params">()</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">student</span> <span class="hljs-title">s</span>;</span>

  s = getInformation();

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nDisplaying information\n"</span>);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Name: %s"</span>, s.name);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nRoll: %d"</span>, s.age);
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
<span class="hljs-function">struct student <span class="hljs-title">getInformation</span><span class="hljs-params">()</span> 
</span>{
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">student</span> <span class="hljs-title">s1</span>;</span>

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter name: "</span>);
<span class="hljs-built_in">scanf</span> (<span class="hljs-string">"%[^\n]%*c"</span>, s1.name);

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter age: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;s1.age);

<span class="hljs-keyword">return</span> s1;
}	
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Here, the <code>getInformation()</code> function is called using <code>s = getInformation();</code> statement. The function returns a structure of type <code>struct student</code>. The returned structure is displayed from the <code>main()</code> function.</p>

<p>Notice that, the return type of <code>getInformation()</code> is also <code>struct student</code>.</p>

<hr>
<h2 id="pass-reference">Passing struct by reference</h2>

<p>You can also pass structs by reference (in a similar way like you pass variables of built-in type by reference). We suggest you to read <a href="/c-programming/c-pointer-functions">pass by reference</a> tutorial before you proceed.</p>

<p>During pass by reference, the memory addresses of struct variables are&nbsp;passed to the function.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-keyword">typedef</span> <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Complex</span>
{</span>
  <span class="hljs-keyword">float</span> real;
  <span class="hljs-keyword">float</span> imag;
} <span class="hljs-built_in">complex</span>;

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">addNumbers</span><span class="hljs-params">(<span class="hljs-built_in">complex</span> c1, <span class="hljs-built_in">complex</span> c2, <span class="hljs-built_in">complex</span> *result)</span></span>; 

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-built_in">complex</span> c1, c2, result;

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"For first number,\n"</span>);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter real part: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%f"</span>, &amp;c1.real);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter imaginary part: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%f"</span>, &amp;c1.imag);

  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"For second number, \n"</span>);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter real part: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%f"</span>, &amp;c2.real);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter imaginary part: "</span>);
  <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%f"</span>, &amp;c2.imag);

  addNumbers(c1, c2, &amp;result); 
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nresult.real = %.1f\n"</span>, result.real);
  <span class="hljs-built_in">printf</span>(<span class="hljs-string">"result.imag = %.1f"</span>, result.imag);
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">addNumbers</span><span class="hljs-params">(<span class="hljs-built_in">complex</span> c1, <span class="hljs-built_in">complex</span> c2, <span class="hljs-built_in">complex</span> *result)</span> 
</span>{
   result-&gt;real = c1.real + c2.real;
   result-&gt;imag = c1.imag + c2.imag; 
}
</code></pre></div></div><div class="code-editor__action">
        <a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>For first number,
Enter real part:  1.1
Enter imaginary part:  -2.4
For second number, 
Enter real part:  3.4
Enter imaginary part:  -3.2

result.real = 4.5
result.imag = -5.6  
</samp></pre>

<p>In the above program, three structure variables <var>c1</var>, <var>c2</var> and the address of <var>result</var> is passed to the <code>addNumbers()</code> function. Here, <var>result</var> is passed by reference.</p>

<p>When the <var>result</var> variable inside the <code>addNumbers()</code> is altered, the&nbsp;<var>result</var> variable inside the <code>main()</code> function is also altered accordingly.</p>
</div>
</section>
<section id="eight4">
  <h1>C Unions</h1>
  <div class="content">
    <p id="introduction">A union is a user-defined type similar to <a href="/c-programming/c-structures">structs in C</a> except for one key difference.</p>

<p>Structures allocate enough space to store all their members, whereas <strong>unions can only hold one member value at a time</strong>.</p>

<hr>
<h2 id="define">How to define a union?</h2>

<p>We use the <code>union</code> keyword to define unions. Here's an example:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">union</span> car
{
<span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
<span class="hljs-keyword">int</span> price;
};</code>
</pre>

<p>The above code defines a derived type <code>union car</code>.</p>

<hr>
<h2 id="create-variables">Create union variables</h2>

<p>When a union is defined, it creates a user-defined type. However, no memory is allocated. To allocate memory for a given union type and work with it, we need to create variables.</p>

<p>Here's how we create union variables.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">union</span> car
{
<span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
<span class="hljs-keyword">int</span> price;
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
<span class="hljs-keyword">union</span> car car1, car2, *car3;
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code>
</pre>

<p>Another way of creating union variables is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">union</span> car
{
<span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
<span class="hljs-keyword">int</span> price;
} car1, car2, *car3;</code>

</pre>

<p>In both cases, union variables <var>car1</var>, <var>car2</var>, and a union pointer <var>car3</var> of <code>union car</code> type are created.</p>

<hr>
<h3 id="access">Access members of a union</h3>

<p>We use the <code>.</code> operator to access members of a union. And to access pointer variables, we use the <code>-&gt;</code> operator.</p>

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
  </div><div class="clearfix"></div><p>In the above example,</p>

<ul>
<li>To access <var>price</var> for <code>car1</code>, <code>car1.price</code> is used.</li>
<li>To access <var>price</var> using <code>car3</code>, either <code>(*car3).price</code> or <code>car3-&gt;price</code> can be used.</li>
</ul>

<hr>
<h2 id="vs-structures">Difference between unions and structures</h2>

<p>Let's take an example to demonstrate the difference between unions and structures:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-keyword">union</span> unionJob
{
 <span class="hljs-comment">//defining a union</span>
 <span class="hljs-keyword">char</span> name[<span class="hljs-number">32</span>];
 <span class="hljs-keyword">float</span> salary;
 <span class="hljs-keyword">int</span> workerNo;
} uJob;

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">structJob</span>
{</span>
 <span class="hljs-keyword">char</span> name[<span class="hljs-number">32</span>];
 <span class="hljs-keyword">float</span> salary;
 <span class="hljs-keyword">int</span> workerNo;
} sJob;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"size of union = %d bytes"</span>, <span class="hljs-keyword">sizeof</span>(uJob));
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nsize of structure = %d bytes"</span>, <span class="hljs-keyword">sizeof</span>(sJob));
 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre>

<p><strong>Output</strong></p>

<pre><samp>size of union = 32
size of structure = 40</samp>
</pre>

<p><strong>Why this difference in the size of union and structure variables?</strong></p>

<p>Here, the size of <var>sJob</var> is 40 bytes because</p>

<ul>
<li>the size of <code>name[32]</code> is 32 bytes</li>
<li>the size of <code>salary</code> is 4 bytes</li>
<li>the size of <code>workerNo</code> is 4 bytes</li>
</ul>

<p>However, the size of <var>uJob</var> is 32 bytes. It's because the size of a union variable will always be the size of its largest element. In the above example, the size of its largest element, (<code>name[32]</code>), is 32 bytes.</p>

<p>With a union, all members share <strong>the same memory</strong>.</p>

<hr>
<h3 id="member-access">Example: Accessing Union Members</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-keyword">union</span> Job {
 <span class="hljs-keyword">float</span> salary;
 <span class="hljs-keyword">int</span> workerNo;
} j;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
 j.salary = <span class="hljs-number">12.3</span>;

 <span class="hljs-comment">// when j.workerNo is assigned a value,</span>
 <span class="hljs-comment">// j.salary will no longer hold 12.3</span>
 j.workerNo = <span class="hljs-number">100</span>;

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Salary = %.1f\n"</span>, j.salary);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Number of workers = %d"</span>, j.workerNo);
 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Salary = 0.0
Number of workers = 100</samp>
</pre>

<hr>
<p>To learn where unions are used, visit <a href="https://stackoverflow.com/questions/252552/why-do-we-need-c-unions">Why do we need C Unions?</a></p>
</div>
</section>

<!-- nine menu sections -->
<section id="nine1">
  <h1>C File Handling</h1>
  <div class="content">
    <p id="introduction">A union is a user-defined type similar to <a href="/c-programming/c-structures">structs in C</a> except for one key difference.</p>

<p>Structures allocate enough space to store all their members, whereas <strong>unions can only hold one member value at a time</strong>.</p>

<hr>
<h2 id="define">How to define a union?</h2>

<p>We use the <code>union</code> keyword to define unions. Here's an example:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">union</span> car
{
<span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
<span class="hljs-keyword">int</span> price;
};</code>
</pre>

<p>The above code defines a derived type <code>union car</code>.</p>

<hr>
<h2 id="create-variables">Create union variables</h2>

<p>When a union is defined, it creates a user-defined type. However, no memory is allocated. To allocate memory for a given union type and work with it, we need to create variables.</p>

<p>Here's how we create union variables.</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">union</span> car
{
<span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
<span class="hljs-keyword">int</span> price;
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
<span class="hljs-keyword">union</span> car car1, car2, *car3;
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code>
</pre>

<p>Another way of creating union variables is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">union</span> car
{
<span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
<span class="hljs-keyword">int</span> price;
} car1, car2, *car3;</code>

</pre>

<p>In both cases, union variables <var>car1</var>, <var>car2</var>, and a union pointer <var>car3</var> of <code>union car</code> type are created.</p>

<hr>
<h3 id="access">Access members of a union</h3>

<p>We use the <code>.</code> operator to access members of a union. And to access pointer variables, we use the <code>-&gt;</code> operator.</p>

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
  </div><div class="clearfix"></div><p>In the above example,</p>

<ul>
<li>To access <var>price</var> for <code>car1</code>, <code>car1.price</code> is used.</li>
<li>To access <var>price</var> using <code>car3</code>, either <code>(*car3).price</code> or <code>car3-&gt;price</code> can be used.</li>
</ul>

<hr>
<h2 id="vs-structures">Difference between unions and structures</h2>

<p>Let's take an example to demonstrate the difference between unions and structures:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-keyword">union</span> unionJob
{
 <span class="hljs-comment">//defining a union</span>
 <span class="hljs-keyword">char</span> name[<span class="hljs-number">32</span>];
 <span class="hljs-keyword">float</span> salary;
 <span class="hljs-keyword">int</span> workerNo;
} uJob;

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">structJob</span>
{</span>
 <span class="hljs-keyword">char</span> name[<span class="hljs-number">32</span>];
 <span class="hljs-keyword">float</span> salary;
 <span class="hljs-keyword">int</span> workerNo;
} sJob;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"size of union = %d bytes"</span>, <span class="hljs-keyword">sizeof</span>(uJob));
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nsize of structure = %d bytes"</span>, <span class="hljs-keyword">sizeof</span>(sJob));
 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre>

<p><strong>Output</strong></p>

<pre><samp>size of union = 32
size of structure = 40</samp>
</pre>

<p><strong>Why this difference in the size of union and structure variables?</strong></p>

<p>Here, the size of <var>sJob</var> is 40 bytes because</p>

<ul>
<li>the size of <code>name[32]</code> is 32 bytes</li>
<li>the size of <code>salary</code> is 4 bytes</li>
<li>the size of <code>workerNo</code> is 4 bytes</li>
</ul>

<p>However, the size of <var>uJob</var> is 32 bytes. It's because the size of a union variable will always be the size of its largest element. In the above example, the size of its largest element, (<code>name[32]</code>), is 32 bytes.</p>

<p>With a union, all members share <strong>the same memory</strong>.</p>

<hr>
<h3 id="member-access">Example: Accessing Union Members</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-keyword">union</span> Job {
 <span class="hljs-keyword">float</span> salary;
 <span class="hljs-keyword">int</span> workerNo;
} j;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
 j.salary = <span class="hljs-number">12.3</span>;

 <span class="hljs-comment">// when j.workerNo is assigned a value,</span>
 <span class="hljs-comment">// j.salary will no longer hold 12.3</span>
 j.workerNo = <span class="hljs-number">100</span>;

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Salary = %.1f\n"</span>, j.salary);
 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Number of workers = %d"</span>, j.workerNo);
 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Salary = 0.0
Number of workers = 100</samp>
</pre>

<hr>
<p>To learn where unions are used, visit <a href="https://stackoverflow.com/questions/252552/why-do-we-need-c-unions">Why do we need C Unions?</a></p>
</div>
</section>
<section id="nine2">
  <h1>C Files Examples</h1>
  <div class="content">
    <p>To understand all programs on this page, you should have the knowledge of the following topics.</p>

<ul>
<li><a href="/c-programming/c-arrays" title="C programming Arrays">C Arrays</a></li>
<li><a href="/c-programming/c-pointers" title="C Programming Pointers">C Pointers</a></li>
<li><a href="/c-programming/c-pointers-arrays" title="Relation Between Arrays and Pointer">Array and Pointer Relation</a></li>
<li><a href="/c-programming/c-file-input-output" title="C File Input Output">File I/O</a></li>
</ul>

<hr>
<h2>C File Examples</h2>

<p><strong id="read">1. C program to read name and marks of n number of students and store them in a file.</strong></p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
 <span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
 <span class="hljs-keyword">int</span> marks, i, num;

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter number of students: "</span>);
 <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;num);

 FILE *fptr;
 fptr = (fopen(<span class="hljs-string">"C:\\student.txt"</span>, <span class="hljs-string">"w"</span>));
 <span class="hljs-keyword">if</span>(fptr == <span class="hljs-literal">NULL</span>)
 {
     <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Error!"</span>);
     <span class="hljs-built_in">exit</span>(<span class="hljs-number">1</span>);
 }

 <span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; num; ++i)
 {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"For student%d\nEnter name: "</span>, i+<span class="hljs-number">1</span>);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%s"</span>, name);

    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter marks: "</span>);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;marks);

    <span class="hljs-built_in">fprintf</span>(fptr,<span class="hljs-string">"\nName: %s \nMarks=%d \n"</span>, name, marks);
 }

 fclose(fptr);
 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre>

<p><strong id="append">2. C program to read name and marks of n number of students from and store them in a file. If the file previously exits, add the information to the file.</strong></p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
 <span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
 <span class="hljs-keyword">int</span> marks, i, num;

 <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter number of students: "</span>);
 <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;num);

 FILE *fptr;
 fptr = (fopen(<span class="hljs-string">"C:\\student.txt"</span>, <span class="hljs-string">"a"</span>));
 <span class="hljs-keyword">if</span>(fptr == <span class="hljs-literal">NULL</span>)
 {
     <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Error!"</span>);
     <span class="hljs-built_in">exit</span>(<span class="hljs-number">1</span>);
 }

 <span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; num; ++i)
 {
    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"For student%d\nEnter name: "</span>, i+<span class="hljs-number">1</span>);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%s"</span>, name);

    <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter marks: "</span>);
    <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;marks);

    <span class="hljs-built_in">fprintf</span>(fptr,<span class="hljs-string">"\nName: %s \nMarks=%d \n"</span>, name, marks);
 }

 fclose(fptr);
 <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
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
  </div><div class="clearfix"></div><p><strong id="fwrite">3. C program to write all the members of an array of structures to a file using fwrite(). Read the array from the file and display on the screen.</strong></p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">student</span>
{</span>
 <span class="hljs-keyword">char</span> name[<span class="hljs-number">50</span>];
 <span class="hljs-keyword">int</span> height;
};
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span></span>{
  <span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">student</span> <span class="hljs-title">stud1</span>[5], <span class="hljs-title">stud2</span>[5];</span>   
  FILE *fptr;
  <span class="hljs-keyword">int</span> i;

  fptr = fopen(<span class="hljs-string">"file.txt"</span>,<span class="hljs-string">"wb"</span>);
  <span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">5</span>; ++i)
  {
      fflush(<span class="hljs-built_in">stdin</span>);
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter name: "</span>);
      gets(stud1[i].name);

      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter height: "</span>); 
      <span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;stud1[i].height); 
  }

  fwrite(stud1, <span class="hljs-keyword">sizeof</span>(stud1), <span class="hljs-number">1</span>, fptr);
  fclose(fptr);

  fptr = fopen(<span class="hljs-string">"file.txt"</span>, <span class="hljs-string">"rb"</span>);
  fread(stud2, <span class="hljs-keyword">sizeof</span>(stud2), <span class="hljs-number">1</span>, fptr);
  <span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">5</span>; ++i)
  {
      <span class="hljs-built_in">printf</span>(<span class="hljs-string">"Name: %s\nHeight: %d"</span>, stud2[i].name, stud2[i].height);
  }
  fclose(fptr);
}</code></pre>
</div>
</section>
        </div>
        
    </div>
    
      <!-- End content section -->
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="assets/js/language.js"></script>
</body>

</html>