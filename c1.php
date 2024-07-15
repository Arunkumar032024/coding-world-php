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
  <!-- To add font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- bootstrap css cdn link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- bootstrap js cdn link  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>

  <title>Language C Tutorial</title>
  <link rel="stylesheet" href="css/cl.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 left_side p-0" style="height: 100vh; overflow-y: scroll;">
        <h4 class="py-3 text-center"><i class="fa-brands fa-java"></i>Language C Tutorial</h4>
        <div class="list-group">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  C Introduction
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="#getStarted" class="list-group-item list-group-item-action">Get Start</a>
                    <a href="#firstProgram" class="list-group-item list-group-item-action">First Program</a>
                    <a href="#comments" class="list-group-item list-group-item-action">C Comments</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  C Fundamentals
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="#varConLit" class="list-group-item list-group-item-action">C Variables, Constants and Literals</a>
                    <a href="#dataType" class="list-group-item list-group-item-action">C Data Types</a>
                    <a href="#inputOutput" class="list-group-item list-group-item-action">C Input Output (I/O)</a>
                    <a href="#operators" class="list-group-item list-group-item-action">C Programming Operators</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  C Flow Control
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="#ifElse" class="list-group-item list-group-item-action">C if...else Statement</a>
                    <a href="#forLoop" class="list-group-item list-group-item-action">C for Loop</a>
                    <a href="#whileDoWhileLoop" class="list-group-item list-group-item-action">C while and do...while Loop</a>
                    <a href="#breakContinue" class="list-group-item list-group-item-action">C break and continue</a>
                    <a href="#switch" class="list-group-item list-group-item-action">C switch Statement</a>
                    <a href="#goto" class="list-group-item list-group-item-action">C goto Statement</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  C Functions
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="#function" class="list-group-item list-group-item-action">C Functions</a>
                    <a href="#userDefinedFunction" class="list-group-item list-group-item-action">C User-defined functions</a>
                    <a href="#typeOfFunction" class="list-group-item list-group-item-action">Types of User-defined Functions in C
                      Programming</a>
                    <a href="#recursion" class="list-group-item list-group-item-action">C Recursion</a>
                    <a href="#storageClass" class="list-group-item list-group-item-action">C Storage Class</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  C Programming Arrays
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="#array" class="list-group-item list-group-item-action">C Arrays
                    </a>
                    <a href="#userDefinedFunction" class="list-group-item list-group-item-action">C Multidimensional Arrays
                    </a>
                    <a href="#storageClass" class="list-group-item list-group-item-action">Pass arrays to a function in C
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  C Programming Pointers
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="#pointer" class="list-group-item list-group-item-action">C Pointers</a>
                    <a href="#relationBwArrayPointer" class="list-group-item list-group-item-action">Relationship Between Arrays and
                      Pointers</a>
                    <a href="#addressPointer" class="list-group-item list-group-item-action">C Pass Addresses and Pointers</a>
                    <a href="#dynamicMemory" class="list-group-item list-group-item-action">C Dynamic Memory Allocation</a>
                    <a href="#arrayPointerExample" class="list-group-item list-group-item-action">C Array and Pointer Examples</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  C Programming Strings
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">C Programming Strings</a>
                    <a href="#" class="list-group-item list-group-item-action">String Manipulations In C Programming
                      Using Library Functions</a>
                    <a href="#" class="list-group-item list-group-item-action">String Examples in C Programming</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  C Structure and Union
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">C struct</a>
                    <a href="#" class="list-group-item list-group-item-action">C structs and Pointers</a>
                    <a href="#" class="list-group-item list-group-item-action">C Structure and Function</a>
                    <a href="#" class="list-group-item list-group-item-action">C Unions</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  C Programming Files
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">C File Handling</a>
                    <a href="#" class="list-group-item list-group-item-action">C Files Examples</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
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
                    <a class="nav-link active" aria-content="page" href="#">Language C</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="java.php">Java</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="python.php">Python</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="php.php">PHP</a>
                  </li>
                </ul>

              </div>
              <img src="<?php echo $result['image']?>" width="40px" height="40px"
                style="border-radius:50%; border:2px solid white; box-shadow:1px 2px 1px 1px rgba(0,0,0,0.5)">
              <h5 style="padding:5px; margin-bottom:5px; margin-right:10px;">
                <?php echo $result['name']?>
              </h5>
              <a href="http://localhost/php/projectphp/Logout.php"><button
                  class="btn btn-outline-primary">Logout</button></a>
            </div>
          </nav>
        </div>
        <div class="row">
          <!-- getstarted section -->
          <section id="getStarted">
            <div class="editor-contents">
              <h1> Getting Started with C </h1>
              <!--  <p class="editor-contents__short-description"></p> -->

              <div id="node-3255" class="node node-c-tutorial clearfix" about="/c-programming/getting-started"
                typeof="sioc:Item foaf:Document">


                <span property="dc:title" content=" Getting Started with C " class="rdf-meta element-hidden"></span>

                <div class="content">
                  <p id="introduction">C is a powerful general-purpose programming language known for its efficiency and
                    flexibility. It's commonly used in system programming, embedded systems, and creating
                    high-performance applications.</p>

                  <p>To start coding in C, you need to install a <strong>C compiler</strong> on your device. However, if
                    you want to get started quickly, you can use our free <a
                      href="/c-programming/online-compiler/">online C compiler</a> that allows you to run code on your
                    browser—no installation required.</p>

                  <p>Now, for those who prefer to use C on your computer, one of the most popular C compilers is GCC
                    (GNU Compiler Collection), which is available for various platforms, including Linux, macOS, and
                    Windows. </p>

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

                        <p>Go to the VS Code <a href="https://code.visualstudio.com/download">Official website</a> and
                          download the Windows installer. Once the download is complete, run the installer and follow
                          the installation process. </p>

                        <p>Click <strong>Finish</strong> to complete the installation process.</p>

                        <h3>Step 2: Download MinGW Compiler</h3>

                        <p>Visit the official <a href="https://sourceforge.net/projects/mingw/">MinGW website</a> and
                          download the MinGW installation manager.</p>

                        <figure><img src="images/mingw-installation1-1.png"
                            title="C MinGW Installation" alt="C MinGW Installation" width="" height="">
                          <figcaption>C MinGW Installation</figcaption>
                        </figure>
                        <h3>Step 3: Run the Installer</h3>

                        <p>Now, go to your <strong>downloads</strong> folder and run the installer you just downloaded.
                          You will be prompted to this screen.</p>

                        <figure><img src="images/mingw-installer1.png"
                            title="C Run MinGW Installer" alt="C Run MinGW Installer" width="" height="">
                          <figcaption>C Run MinGW Installer</figcaption>
                        </figure>
                        <p>Click on <strong>Continue</strong> and wait till the download is completed.</p>

                        <p><strong>Include gcc-core package</strong></p>

                        <p>During installation, you will be prompted to select the components to install. Mark
                          <strong>mingw32-base</strong> for installation, click on installation and apply changes.</p>

                        <figure><img src="images/gcc-core-package-install1.png"
                            title="C GCC-Core Package Installation" alt="C GCC-Core Package Installation" width=""
                            height="">
                          <figcaption>C GCC-Core Package Installation</figcaption>
                        </figure>
                        <p>This will include the gcc-core package, which contains the GCC compiler for C.</p>

                        <h3>Step 4: Add MinGW to System PATH</h3>

                        <p>Go to the folder and double click on the MinGW folder and copy its location.</p>

                        <pre style="max-height: 600px;"><code class="c hljs cpp">C:\MinGW\bin</code></pre>

                        <p>Search <strong>environment variable</strong> on the terminal. In system properties, click on
                          environment variables. You will be prompted to the screen below.</p>
                        <figure><img src="images/setting-environment-variables1.png"
                            title="C Setting Environment Variables" alt="C Setting Environment Variables" width=""
                            height="">
                          <figcaption>C Setting Environment Variables</figcaption>
                        </figure>
                        <p></p>

                        <p>Then, find the <strong>Path</strong> variable in the System variables section and click on
                          <strong>Edit</strong>. Click <strong>New</strong> and add the path to the <strong>bin</strong>
                          directory within your MinGW installation (i.e. C:\MinGW\bin)</p>

                        <p>FInally, close all the dialogues with the <strong>Ok</strong> button.</p>

                        <h3>Step 5: Install C/C++ Extension in VS Code</h3>

                        <p>Open VS Code and click on Extensions in the left side of the window.</p>

                        <p>Then, search for <strong>C/C++</strong> by Microsoft in the Extensions and click on install.
                        </p>

                        <figure><img src="images/extension-install-in-windows1-11.png"
                            title="Installing C Extension in Windows" alt="Installing C Extension in Windows" width=""
                            height="">
                          <figcaption>Installing C Extension in Windows</figcaption>
                        </figure>
                        <p>Now, you are all set to run C code inside your VS Code.</p>

                        <p><strong>Note:</strong> Alternatively, you can use IDEs like Code::Blocks or Visual Studio,
                          which come with their own C compilers.</p>
                        <div class="pre-code-wrapper">
                          <div title="Click to copy" class="copy-code-button"></div>
                          <pre class="exec"
                            style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">and</span> <span class="hljs-keyword">this</span> is a code block</code></pre>
                        </div>
                      </div>
                      <div class="tabbed-editor-content__item" id="mac">
                        <h2 id="mac">Install C on macOs</h2>

                        <p>To install C on your Mac, you'll need two main components:</p>

                        <ul>
                          <li><strong>VS Code</strong>: A text editor to write your code,</li>
                          <li><strong>Clang</strong>: A default compiler in macOS that turns your C code into an
                            executable program.</li>
                        </ul>

                        <p></p>
                        <div id="block-inject-1" class="block-inject block-inject-1">



                          <style>
                            #div-gpt-ad-Programizcom37046 {
                              display: none;
                              width: 728px;
                              height: 90px;
                            }

                            #div-gpt-ad-Programizcom36796 {
                              display: block;
                            }

                            @media(min-width: 992px) {
                              #div-gpt-ad-Programizcom37046 {
                                display: block;
                              }

                              #div-gpt-ad-Programizcom36796 {
                                display: none;
                              }
                            }
                          </style>

                          <div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
                          </div>

                          <div class="pgAdWrapper"
                            style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;">
                            <div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
                              <div
                                id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__"
                                style="border: 0pt none; width: 300px; height: 0px;"></div>
                            </div>
                            <div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px"
                                y="0px" viewBox="0 0 1000 1000" xml:space="preserve">
                                <g class="az_logo_group">
                                  <g>
                                    <g>
                                      <g>
                                        <g>
                                          <g class="letter letter__1">
                                            <path fill="#979797"
                                              d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z">
                                            </path>
                                          </g>
                                          <g class="letter letter__2">
                                            <path fill="#979797"
                                              d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z">
                                            </path>
                                          </g>
                                          <g class="letter letter__3">
                                            <path fill="#979797"
                                              d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z">
                                            </path>
                                          </g>
                                          <g class="letter letter__4">
                                            <path fill="#979797"
                                              d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z">
                                            </path>
                                          </g>
                                          <g class="letter letter__5">
                                            <path fill="#979797"
                                              d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z">
                                            </path>
                                            <path fill="#979797"
                                              d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z">
                                            </path>
                                          </g>
                                          <g class="letter letter__6">
                                            <path fill="#979797"
                                              d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z">
                                            </path>
                                          </g>
                                          <g class="letter letter__7">
                                            <path fill="#979797"
                                              d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z">
                                            </path>
                                          </g>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                  <g class="az__logo">
                                    <path fill="#979797"
                                      d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z">
                                    </path>
                                    <path fill="#979797"
                                      d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z">
                                    </path>
                                    <path fill="#979797"
                                      d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z">
                                    </path>
                                  </g>
                                </g>
                              </svg></div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <p>Follow the steps below to install C on macOS,</p>

                        <ol>
                          <li>Install VS Code</li>
                          <li>Install C Extension</li>
                          <li>Check for C Compiler</li>
                        </ol>

                        <p>Here is a detailed explanation of each of the steps:</p>

                        <h3>Step 1: Install VS Code</h3>

                        <p>Go to the VS Code <a href="https://code.visualstudio.com/download">official website</a> and
                          download the zipped file. Once the download is complete, open the zipped file.</p>

                        <p>In Finder, open a new window and navigate to the Applications folder. To install the VS Code
                          application from the zip file, drag it into the Applications folder.</p>

                        <p>You can now launch VS Code directly from the Applications folder.</p>

                        <h3>Step 2: Install C Extension </h3>

                        <p>Open VS Code and click on the Extension in the right side of the screen. Search for
                          <strong>C/C++</strong> by Microsoft in the Extensions and click on install.</p>

                        <figure><img src="images/c-extension-install-in-mac.png"
                            title="Installing C Extension in macOS" alt="Installing C Extension in macOS" width=""
                            height="">
                          <figcaption>Installing C Extension in macOS</figcaption>
                        </figure>
                        <h3>Step 3: Check for C Compiler</h3>

                        <p>The macOS generally comes with Clang installed on it, which can be used as a C compiler. You
                          can verify its installation by typing the following command in the terminal.</p>

                        <pre style="max-height: 600px;"><code class="c hljs cpp">clang --version</code></pre>

                        <figure><img src="images/c-check-clang-version1-1.png"
                            title="Checking Clang Version " alt="Checking Clang Version" width="" height="">
                          <figcaption>Checking Clang Version</figcaption>
                        </figure>
                        <p>If the output on your screen does not match the screenshot above showing the version of
                          Clang, you may need to install Xcode Command Line Tools. You can do this by running the
                          following command in your terminal</p>

                        <pre style="max-height: 600px;"><code class="c hljs cpp">xcode-select --install</code></pre>

                        <p>Now, you are all set to run C code inside your VS Code.</p>
                      </div>
                      <div class="tabbed-editor-content__item" id="linux">
                        <h2 id="linux">Install C on Linux</h2>

                        <p>Linux has various distributions, and the installation process differs slightly from each
                          other. For now, we will focus on Ubuntu distribution. </p>

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

                        <p>Open the Terminal and type </p>

                        <pre style="max-height: 600px;"><code class="c hljs cpp">sudo apt update  </code></pre>

                        <p>This ensures the software packages are up to date. </p>

                        <p>Proceed to install VS Code with </p>

                        <pre
                          style="max-height: 600px;"><code class="c hljs cpp">sudo snap install code --classic </code></pre>

                        <figure><img src="images/c-install-vs-code-in-linux1-1.png"
                            title="Install VS Code in Linux" alt="Install VS Code in Linux" width="" height="">
                          <figcaption>Install VS Code in Linux</figcaption>
                        </figure>
                        <h3>Step 2: Install GCC</h3>

                        <p>Install GCC and other essential build tools with </p>

                        <pre
                          style="max-height: 600px;"><code class="c hljs cpp">sudo apt install build-essential </code></pre>

                        <figure><img src="images/c-install-gcc-in-linux1-1.png"
                            title="Install GCC in Linux" alt="Install GCC in Linux" width="" height="">
                          <figcaption>Install GCC in Linux</figcaption>
                        </figure>
                        <p> This package includes GCC and the utilities needed for compiling software. </p>
                      </div>

                    </div>
                  </div>

                  <hr>
                  <h2 id="run">Run Your First C Program</h2>

                  <p>First open VS Code, click on the File in the top menu and then select New File.</p>

                  <figure><img src="images/newfile-11.png" title="Create a New File in VS Code"
                      alt="Create a New File in VS Code" width="" height="">
                    <figcaption>Create a New File in VS Code</figcaption>
                  </figure>
                  <p>Then, save this file with a .c extension by clicking on <strong>File</strong> again, then
                    <strong>Save As</strong>, and type your filename ending in .c. (Here, we are saving it as hello.c)
                  </p>

                  <p>Now, write the following code into your file:</p>

                  <div class="code-editor">
                    <div class="code-editor__area">
                      <div class="pre-code-wrapper">
                        <div title="Click to copy" class="copy-code-button"></div>
                        <pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span><span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span></span>{
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hello World"</span>);
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>
                      </div>
                    </div>
                    <div class="code-editor__action">
                      <a href="/c-programming/online-compiler"
                        class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button"
                        target="_blank">
                        Run Code <svg class="programiz-icon programiz-icon--small ml-2x">
                          <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use>
                        </svg>
                      </a>
                    </div>
                  </div>

                  <p>Then click on the <strong>run</strong> button on the top right side of your screen.</p>

                  <figure><img src="images/run-c-code.png" title="C Run Program"
                      alt="C Run Program " width="" height="">
                    <figcaption>C Run Program </figcaption>
                  </figure>
                  <p>You should see Hello World printed to the command prompt. </p>

                  <p><strong>For Linux System</strong></p>

                  <p>Instead of the <strong>run</strong> button as in Windows and macOS, you should follow the following
                    steps to run your C program on Linux.</p>

                  <p>In Terminal, navigate to your file's directory, and compile with </p>

                  <pre style="max-height: 600px;"><code class="c hljs cpp">gcc hello.c -o hello</code></pre>

                  <p>After compiling successfully, you'll see a new file named hello (or hello.exe on Windows) in the
                    same directory.</p>

                  <p>Run your program using </p>

                  <pre style="max-height: 600px;"><code class="c hljs cpp">./hello </code></pre>

                  <p>Congratulations! You've written and executed your first C program.</p>

                  <p>Now that you have set everything up to run C programs on your computer, you'll be learning how the
                    basic program works in C in the next tutorial.</p>

                </div>



              </div>


             
            </div>
          </section>



          <!-- firstProgram section -->
          <section id="firstProgram">
            <div class="editor-contents">
              <h1>Your First C Program</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-3256" class="node node-c-tutorial clearfix" about="/c-programming/first-program" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Your First C Program" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">In the previous tutorial you learned how to <a href="/c-programming/getting-started">install C</a> on your computer. Now, let's write a simple C program.</p>

<p>The following program displays <code>Hello, World!</code> on the screen.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Hello, World!"</span>);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
</a>
</div></div>

<p><strong>Output</strong></p>

<pre><samp>Hello World!</samp></pre>

<div class="note-tip">
<p><strong>Note:</strong> A <code>Hello World!</code> program includes the basic syntax of a programming language and helps beginners understand the structure before getting started. That’s why it is a common practice to introduce a new language using a <code>Hello World!</code> program.</p>

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
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 728px; min-height: 90px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>

<div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div>
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

<p>Next, we will be learning about <a href="/c-programming/comments">C comments</a>.</p>

</div>



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#basic-structure">Basic Structure of a C Program</a></li>
<li><a href="#working-of-c-program">Working of C Program </a></li>
</ul></div></div></div>                          </div>
          </section>
          
          
          <!-- comments section -->
          <section id="comments">
            <div class="editor-contents">
              <h1>C Comments</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-2510" class="node node-c-tutorial clearfix" about="/c-programming/comments" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Comments" class="rdf-meta element-hidden"></span>

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
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 728px; min-height: 90px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>

<div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div>
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
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
<p>Next, we will be learning in detail about <a href="/c-programming/c-variables-constants">C Variables, constants and literals</a>.</p>

</div>



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#single-line-comment">Single-line Comments in C</a></li>
<li><a href="#multi-line-comments"> Multi-line Comments in C</a></li>
<li><a href="#prevent">Prevent Executing Code Using Comments</a></li>
<li><a href="#why-use-comments">Why use Comments?</a></li>
</ul></div></div></div>                          </div>
          </section>


          <!-- varibale, constant and literal section -->
          <section id="varConLit">
            <div class="editor-contents">
              <h1>C Variables, Constants and Literals</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-161" class="node node-c-tutorial clearfix" about="/c-programming/c-variables-constants" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Variables, Constants and Literals" class="rdf-meta element-hidden"></span>

<div class="content">
<p>In the previous tutorial you learnt about <a href="/c-programming/comments">C comments</a>. Now, let's learn about variables,  constants and literals in C.</p>

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

<div class="pgAdWrapper" style="min-width: 728px; min-height: 90px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>

<div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div>
</div><div class="clearfix"></div><p>C is a strongly typed language. This means that the variable type cannot be changed once it is declared. For example:</p>

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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#variables">Variables</a></li>
<li><a href="#constants">Constants</a></li>
<li><a href="#literals">Literals</a></li>
<li><a href="#integers">Integers</a></li>
<li><a href="#floats">Floating-point Literals</a></li>
<li><a href="#characters">Characters</a></li>
<li><a href="#string">String Literals</a></li>
<li><a href="#escape-sequences">Escape Sequences</a></li>
</ul></div></div></div>                          </div>
          </section>
         
         
          <!-- data type section -->
          <section id="dataType">
            <div class="editor-contents">
              <h1>C Data Types</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-160" class="node node-c-tutorial clearfix" about="/c-programming/c-data-types" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Data Types" class="rdf-meta element-hidden"></span>

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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CITgqa3Wm4YDFXaj2AUdAz4JWw">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe frameborder="0" src="https://62e7481d7b206ff0b1391015135f30d1.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="300" height="250" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">C Data types</a></li>
<li><a href="#basic">Basic Data types</a></li>
<li><a href="#int">int Type</a></li>
<li><a href="#float-double">float and double Type</a></li>
<li><a href="#char">char Type</a></li>
<li><a href="#void">void Type</a></li>
</ul>
</div></div></div>                          </div>
          </section>
         
         
          <!-- input output section -->
          <section id="inputOutput">
            <div class="editor-contents">
              <h1>C Input Output (I/O)</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-159" class="node node-c-tutorial clearfix" about="/c-programming/c-input-output" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Input Output (I/O)" class="rdf-meta element-hidden"></span>

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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CJO9hrnWm4YDFbILtwAdDUoOtg">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe frameborder="0" src="https://5b58b06f232af3a271e3aa3ffe497421.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" name="1-0-40;46352;<!doctype html><html><head><script>var jscVersion = 'r20240515';</script><script>var google_casm=[];</script></head><body leftMargin=&quot;0&quot; topMargin=&quot;0&quot; marginwidth=&quot;0&quot; marginheight=&quot;0&quot;><script>window.dicnf = {ebrpfa: true,};</script><script data-jc=&quot;40&quot; data-jc-version=&quot;r20240515&quot; data-jc-flags=&quot;[&amp;quot;x%278446&amp;#39;9efotm(&amp;amp;20067;&amp;gt;8&amp;amp;&amp;gt;`dopb/%&amp;lt;1732261!=|vqc)!7201061?&amp;#39;9efotm(&amp;amp;20723;&amp;gt;:&amp;amp;&amp;gt;`dopb/%&amp;lt;1245;05!=nehu`/!361:&amp;lt;320!9sqrmy&amp;quot;]&quot;>(function(){'use strict';/*  Copyright The Closure Library Authors. SPDX-License-Identifier: Apache-2.0 */ var q=this||self;function aa(a){a:{var b=[&quot;CLOSURE_FLAGS&quot;];for(var c=q,d=0;d<b.length;d++)if(c=c[b[d]],null==c){b=null;break a}b=c}a=b&amp;&amp;b[a];return null!=a?a:!1};var ba=aa(610401301),ca=aa(188588736);var t;const da=q.navigator;t=da?da.userAgentData||null:null;function ea(a){return ba?t?t.brands.some(({brand:b})=>b&amp;&amp;-1!=b.indexOf(a)):!1:!1}function v(a){var b;a:{if(b=q.navigator)if(b=b.userAgent)break a;b=&quot;&quot;}return-1!=b.indexOf(a)};function w(){return ba?!!t&amp;&amp;0<t.brands.length:!1}function fa(){return w()?ea(&quot;Chromium&quot;):(v(&quot;Chrome&quot;)||v(&quot;CriOS&quot;))&amp;&amp;!(w()?0:v(&quot;Edge&quot;))||v(&quot;Silk&quot;)};function ha(a){ha[&quot; &quot;](a);return a}ha[&quot; &quot;]=function(){};!v(&quot;Android&quot;)||fa();fa();v(&quot;Safari&quot;)&amp;&amp;(fa()||(w()?0:v(&quot;Coast&quot;))||(w()?0:v(&quot;Opera&quot;))||(w()?0:v(&quot;Edge&quot;))||(w()?ea(&quot;Microsoft Edge&quot;):v(&quot;Edg/&quot;))||w()&amp;&amp;ea(&quot;Opera&quot;));var ia={},x=null;var y=Symbol();var ja={},ka={};function la(a){return!(!a||&quot;object&quot;!==typeof a||a.g!==ka)}function ma(a){return null!==a&amp;&amp;&quot;object&quot;===typeof a&amp;&amp;!Array.isArray(a)&amp;&amp;a.constructor===Object}let na;function z(a,b,c){if(!Array.isArray(a)||a.length)return!1;const d=a[y]|0;if(d&amp;1)return!0;if(!(b&amp;&amp;(Array.isArray(b)?b.includes(c):b.has(c))))return!1;a[y]=d|1;return!0}class oa{}class pa{}Object.freeze(new oa);Object.freeze(new pa);function qa(a){if(&quot;boolean&quot;!==typeof a){var b=typeof a;throw Error(`Expected boolean but got ${&quot;object&quot;!=b?b:a?Array.isArray(a)?&quot;array&quot;:b:&quot;null&quot;}: ${a}`);}return a};let ra;function sa(a,b){return ta(b)}function ta(a){switch(typeof a){case &quot;number&quot;:return isFinite(a)?a:String(a);case &quot;boolean&quot;:return a?1:0;case &quot;object&quot;:if(a)if(Array.isArray(a)){if(z(a,void 0,0))return}else if(null!=a&amp;&amp;a instanceof Uint8Array){let b=&quot;&quot;,c=0;const d=a.length-10240;for(;c<d;)b+=String.fromCharCode.apply(null,a.subarray(c,c+=10240));b+=String.fromCharCode.apply(null,c?a.subarray(c):a);return btoa(b)}}return a};function xa(a,b,c,d,g){if(null!=a){if(Array.isArray(a))a=z(a,void 0,0)?void 0:g&amp;&amp;(a[y]|0)&amp;2?a:ya(a,b,c,void 0!==d,g);else if(ma(a)){const e={};for(let f in a)e[f]=xa(a[f],b,c,d,g);a=e}else a=b(a,d);return a}}function ya(a,b,c,d,g){const e=d||c?a[y]|0:0;d=d?!!(e&amp;32):void 0;a=Array.prototype.slice.call(a);for(let f=0;f<a.length;f++)a[f]=xa(a[f],b,c,d,g);c&amp;&amp;c(e,a);return a}function za(a){return a.B===ja?a.toJSON():ta(a)};function D(a,b,c){const d=a.m;let g=d[y];if(g&amp;2)throw Error();Aa(d,g,b,c);return a}function Aa(a,b,c,d){var g=b>>14&amp;1023;g=0===g?536870912:g;if(c>=g){let e,f=b;if(b&amp;256)e=a[a.length-1];else{if(null==d)return;e=a[g+(+!!(b&amp;512)-1)]={};f|=256}e[c]=d;c<g&amp;&amp;(a[c+(+!!(b&amp;512)-1)]=void 0);f!==b&amp;&amp;(a[y]=f)}else a[c+(+!!(b&amp;512)-1)]=d,b&amp;256&amp;&amp;(a=a[a.length-1],c in a&amp;&amp;delete a[c])}function E(a,b,c){if(null!=c&amp;&amp;&quot;string&quot;!==typeof c)throw Error();return D(a,b,c)};function Ba(a){na=!0;try{return JSON.stringify(a.toJSON(),sa)}finally{na=!1}} var F=class{constructor(){a:{var a=void 0;null==a&amp;&amp;(a=ra);ra=void 0;if(null==a){var b=96;a=[]}else{if(!Array.isArray(a))throw Error(&quot;narr&quot;);b=a[y]|0;if(b&amp;2048)throw Error(&quot;farr&quot;);if(b&amp;64)break a;var c=a;b|=64;var d=c.length;if(d&amp;&amp;(--d,ma(c[d]))){b|=256;c=d-(+!!(b&amp;512)-1);if(1024<=c)throw Error(&quot;pvtlmt&quot;);b=b&amp;-16760833|(c&amp;1023)<<14}}a[y]=b}this.m=a}toJSON(){return na?Ca(this,this.m,!1):Ca(this,ya(this.m,za,void 0,void 0,!1),!0)}};F.prototype.B=ja; F.prototype.toString=function(){return Ca(this,this.m,!1).toString()}; function Ca(a,b,c){var d=ca?void 0:a.constructor.C;const g=(c?a.m:b)[y];a=b.length;if(!a)return b;let e,f;if(ma(c=b[a-1])){a:{var h=c;let n={},p=!1;for(var k in h){let m=h[k];if(Array.isArray(m)){let r=m;if(z(m,d,+k)||la(m)&amp;&amp;0===m.size)m=null;m!=r&amp;&amp;(p=!0)}null!=m?n[k]=m:p=!0}if(p){for(var l in n){h=n;break a}h=null}}h!=c&amp;&amp;(e=!0);a--}for(k=+!!(g&amp;512)-1;0<a;a--){l=a-1;c=b[l];l-=k;if(!(null==c||z(c,d,l)||la(c)&amp;&amp;0===c.size))break;f=!0}if(!e&amp;&amp;!f)return b;b=Array.prototype.slice.call(b,0,a);h&amp;&amp;b.push(h); return b};var Da=class extends F{};var G=class{constructor(a,b=!1){this.key=a;this.defaultValue=b;this.valueType=&quot;boolean&quot;}};var Ea=new G(&quot;100000&quot;),Fa=new G(&quot;45368259&quot;),Ga=new G(&quot;45357156&quot;,!0),Ha=new G(&quot;45350890&quot;),Ia=new G(&quot;45628745&quot;,!0),Ja=new G(&quot;45414892&quot;),Ka=new G(&quot;45620832&quot;);const La=RegExp(&quot;ad\\.doubleclick\\.net/ddm/trackimp&quot;);var H=(a,b)=>&quot;&amp;adurl=&quot;==a.substring(a.length-7)?a.substring(0,a.length-7)+b+&quot;&amp;adurl=&quot;:a+b;function I(a=window){return a};let J=q.dicnf||{};function Ma(a){let b=!1,c;return function(){b||(c=a(),b=!0);return c}};function K(a,b,c){a.addEventListener&amp;&amp;a.addEventListener(b,c,!1)}function Na(a,b,c){a.removeEventListener&amp;&amp;a.removeEventListener(b,c,!1)};var Oa=RegExp(&quot;^(?:([^:/?#.]+):)?(?://(?:([^\\\\/?#]*)@)?([^\\\\/?#]*?)(?::([0-9]+))?(?=[\\\\/?#]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#([\\s\\S]*))?$&quot;);function Pa(a,b,c,d){for(var g=c.length;0<=(b=a.indexOf(c,b))&amp;&amp;b<d;){var e=a.charCodeAt(b-1);if(38==e||63==e)if(e=a.charCodeAt(b+g),!e||61==e||38==e||35==e)return b;b+=g+1}return-1}var Qa=/#|$/,Ra=/[?&amp;]($|#)/;function Sa(a){let b=q,c=0;for(;b&amp;&amp;40>c++&amp;&amp;!a(b);)a:{try{const d=b.parent;if(d&amp;&amp;d!=b){b=d;break a}}catch{}b=null}}function Ta(){if(!globalThis.crypto)return Math.random();try{const a=new Uint32Array(1);globalThis.crypto.getRandomValues(a);return a[0]/65536/65536}catch{return Math.random()}}function Ua(a,b){if(a)for(const c in a)Object.prototype.hasOwnProperty.call(a,c)&amp;&amp;b(a[c],c,a)}let L=[];const Va=()=>{const a=L;L=[];for(const b of a)try{b()}catch{}}; var Wa=(a,b)=>{&quot;complete&quot;===a.readyState||&quot;interactive&quot;===a.readyState?(L.push(b),1==L.length&amp;&amp;(window.Promise?Promise.resolve().then(Va):window.setImmediate?setImmediate(Va):setTimeout(Va,0))):a.addEventListener(&quot;DOMContentLoaded&quot;,b)};function Xa(a,b=document){return b.createElement(String(a).toLowerCase())};function M(a,b,c=null,d=!1,g=!1){Ya(a,b,c,!1,d,g)}function Ya(a,b,c,d,g,e=!1){a.google_image_requests||(a.google_image_requests=[]);const f=Xa(&quot;IMG&quot;,a.document);if(c||g){const h=k=>{c&amp;&amp;c(k);if(g){k=a.google_image_requests;const l=Array.prototype.indexOf.call(k,f,void 0);0<=l&amp;&amp;Array.prototype.splice.call(k,l,1)}Na(f,&quot;load&quot;,h);Na(f,&quot;error&quot;,h)};K(f,&quot;load&quot;,h);K(f,&quot;error&quot;,h)}d&amp;&amp;(f.referrerPolicy=&quot;no-referrer&quot;);e&amp;&amp;(f.attributionSrc=&quot;&quot;);f.src=b;a.google_image_requests.push(f)} var Za=(a,b,c=!1)=>{if(a.fetch){const d={keepalive:!0,credentials:&quot;include&quot;,redirect:&quot;follow&quot;,method:&quot;get&quot;,mode:&quot;no-cors&quot;};c&amp;&amp;(d.mode=&quot;cors&quot;,&quot;setAttributionReporting&quot;in XMLHttpRequest.prototype?d.attributionReporting={eventSourceEligible:&quot;true&quot;,triggerEligible:&quot;false&quot;}:d.headers={&quot;Attribution-Reporting-Eligible&quot;:&quot;event-source&quot;});a.fetch(b,d)}else M(a,b,void 0,!1,c)},db=Ma(function(){return&quot;referrerPolicy&quot;in Xa(&quot;IMG&quot;)});let eb=0;function fb(a,b=null){return b&amp;&amp;b.getAttribute(&quot;data-jc&quot;)===String(a)?b:document.querySelector(`[${&quot;data-jc&quot;}=&quot;${a}&quot;]`)};function O(a){gb||(gb=new hb);const b=gb.g[a.key];if(&quot;proto&quot;===a.valueType){try{const c=JSON.parse(b);if(Array.isArray(c))return c}catch(c){}return a.defaultValue}return typeof b===typeof a.defaultValue?b:a.defaultValue}var ib=class{constructor(){this.g={}}};var hb=class extends ib{constructor(){super();var a=fb(eb,document.currentScript);a=a&amp;&amp;a.getAttribute(&quot;data-jc-flags&quot;)||&quot;&quot;;try{const b=JSON.parse(a)[0];a=&quot;&quot;;for(let c=0;c<b.length;c++)a+=String.fromCharCode(b.charCodeAt(c)^&quot;\u0003\u0007\u0003\u0007\b\u0004\u0004\u0006\u0005\u0003&quot;.charCodeAt(c%10));this.g=JSON.parse(a)}catch(b){}}},gb;class jb{constructor(a,b){this.error=a;this.context=b.context;this.msg=b.message||&quot;&quot;;this.id=b.id||&quot;jserror&quot;;this.meta={}}};const kb=RegExp(&quot;^https?://(\\w|-)+\\.cdn\\.ampproject\\.(net|org)(\\?|/|$)&quot;);var lb=class{constructor(a,b){this.g=a;this.i=b}},mb=class{constructor(a,b){this.url=a;this.A=!!b;this.depth=null}};let P=null;function nb(){const a=q.performance;return a&amp;&amp;a.now&amp;&amp;a.timing?Math.floor(a.now()+a.timing.navigationStart):Date.now()}function ob(){const a=q.performance;return a&amp;&amp;a.now?a.now():null};var pb=class{constructor(a,b){var c=ob()||nb();this.label=a;this.type=b;this.value=c;this.duration=0;this.taskId=this.slotId=void 0;this.uniqueId=Math.random()}};const Q=q.performance,qb=!!(Q&amp;&amp;Q.mark&amp;&amp;Q.measure&amp;&amp;Q.clearMarks),R=Ma(()=>{var a;if(a=qb){var b;if(null===P){P=&quot;&quot;;try{a=&quot;&quot;;try{a=q.top.location.hash}catch(c){a=q.location.hash}a&amp;&amp;(P=(b=a.match(/\bdeid=([\d,]+)/))?b[1]:&quot;&quot;)}catch(c){}}b=P;a=!!b.indexOf&amp;&amp;0<=b.indexOf(&quot;1337&quot;)}return a});function rb(a){a&amp;&amp;Q&amp;&amp;R()&amp;&amp;(Q.clearMarks(`goog_${a.label}_${a.uniqueId}_start`),Q.clearMarks(`goog_${a.label}_${a.uniqueId}_end`))} class sb{constructor(){var a=window;this.i=[];this.j=a||q;let b=null;a&amp;&amp;(a.google_js_reporting_queue=a.google_js_reporting_queue||[],this.i=a.google_js_reporting_queue,b=a.google_measure_js_timing);this.g=R()||(null!=b?b:1>Math.random())}start(a,b){if(!this.g)return null;a=new pb(a,b);b=`goog_${a.label}_${a.uniqueId}_start`;Q&amp;&amp;R()&amp;&amp;Q.mark(b);return a}end(a){if(this.g&amp;&amp;&quot;number&quot;===typeof a.value){a.duration=(ob()||nb())-a.value;var b=`goog_${a.label}_${a.uniqueId}_end`;Q&amp;&amp;R()&amp;&amp;Q.mark(b);!this.g||2048< this.i.length||this.i.push(a)}}};function S(a,b){const c={};c[a]=b;return[c]}function tb(a,b,c,d,g){const e=[];Ua(a,function(f,h){(f=ub(f,b,c,d,g))&amp;&amp;e.push(h+&quot;=&quot;+f)});return e.join(b)} function ub(a,b,c,d,g){if(null==a)return&quot;&quot;;b=b||&quot;&amp;&quot;;c=c||&quot;,$&quot;;&quot;string&quot;==typeof c&amp;&amp;(c=c.split(&quot;&quot;));if(a instanceof Array){if(d=d||0,d<c.length){const e=[];for(let f=0;f<a.length;f++)e.push(ub(a[f],b,c,d+1,g));return e.join(c[d])}}else if(&quot;object&quot;==typeof a)return g=g||0,2>g?encodeURIComponent(tb(a,b,c,d,g+1)):&quot;...&quot;;return encodeURIComponent(String(a))}function vb(a){let b=1;for(const c in a.i)b=c.length>b?c.length:b;return 3997-b-a.j.length-1} function wb(a,b){let c=&quot;https://pagead2.googlesyndication.com&quot;+b,d=vb(a)-b.length;if(0>d)return&quot;&quot;;a.g.sort(function(e,f){return e-f});b=null;let g=&quot;&quot;;for(let e=0;e<a.g.length;e++){const f=a.g[e],h=a.i[f];for(let k=0;k<h.length;k++){if(!d){b=null==b?f:b;break}let l=tb(h[k],a.j,&quot;,$&quot;);if(l){l=g+l;if(d>=l.length){d-=l.length;c+=l;g=a.j;break}b=null==b?f:b}}}a=&quot;&quot;;null!=b&amp;&amp;(a=g+&quot;trn=&quot;+b);return c+a}class xb{constructor(){this.j=&quot;&amp;&quot;;this.i={};this.l=0;this.g=[]}};function yb(a){let b=a.toString();a.name&amp;&amp;-1==b.indexOf(a.name)&amp;&amp;(b+=&quot;: &quot;+a.name);a.message&amp;&amp;-1==b.indexOf(a.message)&amp;&amp;(b+=&quot;: &quot;+a.message);if(a.stack){a=a.stack;var c=b;try{-1==a.indexOf(c)&amp;&amp;(a=c+&quot;\n&quot;+a);let d;for(;a!=d;)d=a,a=a.replace(RegExp(&quot;((https?:/..*/)[^/:]*:\\d+(?:.|\n)*)\\2&quot;),&quot;$1&quot;);b=a.replace(RegExp(&quot;\n *&quot;,&quot;g&quot;),&quot;\n&quot;)}catch(d){b=c}}return b} function zb(a,b,c,d){let g,e;try{a.g&amp;&amp;a.g.g?(e=a.g.start(b.toString(),3),g=c(),a.g.end(e)):g=c()}catch(f){c=!0;try{rb(e),c=a.u(b,new jb(f,{message:yb(f)}),void 0,d)}catch(h){a.l(217,h)}if(c)window.console?.error?.(f);else throw f;}return g}function T(a,b,c,d){var g=U;return(...e)=>zb(g,a,()=>b.apply(c,e),d)} var Bb=class{constructor(a=null){this.o=V;this.g=a;this.i=null;this.j=!1;this.u=this.l}l(a,b,c,d,g){g=g||&quot;jserror&quot;;let e;try{const A=new xb;var f=A;f.g.push(1);f.i[1]=S(&quot;context&quot;,a);b.error&amp;&amp;b.meta&amp;&amp;b.id||(b=new jb(b,{message:yb(b)}));if(b.msg){f=A;var h=b.msg.substring(0,512);f.g.push(2);f.i[2]=S(&quot;msg&quot;,h)}var k=b.meta||{};b=k;if(this.i)try{this.i(b)}catch(B){}if(d)try{d(b)}catch(B){}d=A;k=[k];d.g.push(3);d.i[3]=k;b=q;k=[];let Z;h=null;do{var l=b;d=void 0;try{if(d=!!l&amp;&amp;null!=l.location.href)b:{try{ha(l.foo); d=!0;break b}catch(B){}d=!1}var n=d}catch{n=!1}n?(Z=l.location.href,h=l.document&amp;&amp;l.document.referrer||null):(Z=h,h=null);k.push(new mb(Z||&quot;&quot;));try{b=l.parent}catch(B){b=null}}while(b&amp;&amp;l!=b);for(let B=0,$a=k.length-1;B<=$a;++B)k[B].depth=$a-B;l=q;if(l.location&amp;&amp;l.location.ancestorOrigins&amp;&amp;l.location.ancestorOrigins.length==k.length-1)for(n=1;n<k.length;++n){var p=k[n];p.url||(p.url=l.location.ancestorOrigins[n-1]||&quot;&quot;,p.A=!0)}var m=k;let ua=new mb(q.location.href,!1);l=null;const va=m.length-1;for(p= va;0<=p;--p){var r=m[p];!l&amp;&amp;kb.test(r.url)&amp;&amp;(l=r);if(r.url&amp;&amp;!r.A){ua=r;break}}r=null;const Pb=m.length&amp;&amp;m[va].url;0!=ua.depth&amp;&amp;Pb&amp;&amp;(r=m[va]);e=new lb(ua,r);if(e.i){m=A;var u=e.i.url||&quot;&quot;;m.g.push(4);m.i[4]=S(&quot;top&quot;,u)}var C={url:e.g.url||&quot;&quot;};if(e.g.url){var wa=e.g.url.match(Oa),N=wa[1],ab=wa[3],bb=wa[4];u=&quot;&quot;;N&amp;&amp;(u+=N+&quot;:&quot;);ab&amp;&amp;(u+=&quot;//&quot;,u+=ab,bb&amp;&amp;(u+=&quot;:&quot;+bb));var cb=u}else cb=&quot;&quot;;N=A;C=[C,{url:cb}];N.g.push(5);N.i[5]=C;Ab(this.o,g,A,this.j,c)}catch(A){try{Ab(this.o,g,{context:&quot;ecmserr&quot;,rctx:a,msg:yb(A), url:e&amp;&amp;e.g.url},this.j,c)}catch(Z){}}return!0}};var W=a=>{var b=&quot;v&quot;;if(a.v&amp;&amp;a.hasOwnProperty(b))return a.v;b=new a;return a.v=b};class Cb{};function Ab(a,b,c,d=!1,g,e){if((d?a.g:Math.random())<(g||.01))try{let f;c instanceof xb?f=c:(f=new xb,Ua(c,(k,l)=>{var n=f;const p=n.l++;k=S(l,k);n.g.push(p);n.i[p]=k}));const h=wb(f,&quot;/pagead/gen_204?id=&quot;+b+&quot;&amp;&quot;);h&amp;&amp;(&quot;undefined&quot;!==typeof e?M(q,h,e):M(q,h))}catch(f){}}function Db(){var a=V,b=window.google_srt;0<=b&amp;&amp;1>=b&amp;&amp;(a.g=b)}class Eb{constructor(){this.g=Math.random()}};let V,U;const X=new sb;var Fb=()=>{window.google_measure_js_timing||(X.g=!1,X.i!=X.j.google_js_reporting_queue&amp;&amp;(R()&amp;&amp;Array.prototype.forEach.call(X.i,rb,void 0),X.i.length=0))};(a=>{V=a??new Eb;&quot;number&quot;!==typeof window.google_srt&amp;&amp;(window.google_srt=Math.random());Db();U=new Bb(X);U.i=b=>{var c=eb;0!==c&amp;&amp;(b.jc=String(c),c=(c=fb(c,document.currentScript))&amp;&amp;c.getAttribute(&quot;data-jc-version&quot;)||&quot;unknown&quot;,b.shv=c)};U.j=!0;&quot;complete&quot;==window.document.readyState?Fb():X.g&amp;&amp;K(window,&quot;load&quot;,()=>{Fb()})})(); var Gb=(a,b,c,d)=>T(a,b,c,d),Hb=(a,b,c,d)=>{W(Cb);var g=[];!b.eid&amp;&amp;g.length&amp;&amp;(b.eid=g.toString());Ab(V,a,b,!0,c,d)};const Ib=[&quot;FRAME&quot;,&quot;IMG&quot;,&quot;IFRAME&quot;],Jb=/^[01](px)?$/;function Kb(a){return&quot;string&quot;===typeof a?document.getElementById(a):a} function Lb(a,b){var c;if(a=Kb(a)){c||(c=(m,r,u)=>{m.addEventListener(r,u)});var d=!1,g=m=>{d||(d=!0,b(m))},e=2;for(var f=0;f<Ib.length;++f)if(Ib[f]===a.tagName){e=3;var h=[a];break}h||(h=a.querySelectorAll(Ib.join(&quot;,&quot;)));var k=0,l=0,n=!0;a=!1;for(f=0;f<h.length;f++){const m=h[f];if(&quot;IMG&quot;!==m.tagName||!m.complete||m.naturalWidth&amp;&amp;m.naturalHeight?Jb.test(m.getAttribute(&quot;width&quot;)??&quot;&quot;)&amp;&amp;Jb.test(m.getAttribute(&quot;height&quot;)??&quot;&quot;):1)continue;const r=&quot;IMG&quot;===m.tagName;if(&quot;IMG&quot;===m.tagName)var p=m.naturalWidth&amp;&amp; m.naturalHeight?!0:!1;else try{p=&quot;complete&quot;===(m.readyState?m.readyState:m.contentWindow?.document?.readyState)}catch(u){p=!1}if(p)a=!0,r&amp;&amp;(n=!0);else{k++;const u=C=>{k--;!k&amp;&amp;n&amp;&amp;g(e);r&amp;&amp;(C=C&amp;&amp;&quot;error&quot;===C.type,l--,C||(n=!0))};c(m,&quot;load&quot;,u);r&amp;&amp;(l++,c(m,&quot;error&quot;,u))}}0===l&amp;&amp;(n=!0);h=null;if(0===k&amp;&amp;!a&amp;&amp;&quot;complete&quot;===q.document.readyState)e=5;else if(k||!a){c(q,&quot;load&quot;,()=>{g(4)});return}g(e)}};function Mb(a){const b=a.length;let c=0;return new Y(d=>{if(0==b)d([]);else{const g=[];for(let e=0;e<b;++e)a[e].then(f=>{g[e]=f;++c==b&amp;&amp;d(g)})}})}function Nb(){let a;const b=new Y(c=>{a=c});return new Ob(b,a)}function Qb(a,b){if(!a.i)if(b instanceof Y)b.then(c=>{Qb(a,c)});else{a.i=!0;a.j=b;for(b=0;b<a.g.length;++b)Rb(a,a.g[b]);a.g=[]}}function Rb(a,b){a.i?b(a.j):a.g.push(b)}class Y{constructor(a){this.i=!1;this.g=[];a(b=>{Qb(this,b)})}then(a){return new Y(b=>{Rb(this,c=>{b(a(c))})})}} var Ob=class{constructor(a,b){this.promise=a;this.g=b}};function Sb(a){return a.prerendering?3:{visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[a.visibilityState||a.webkitVisibilityState||a.mozVisibilityState||&quot;&quot;]||0}function Tb(a){let b;a.visibilityState?b=&quot;visibilitychange&quot;:a.mozVisibilityState?b=&quot;mozvisibilitychange&quot;:a.webkitVisibilityState&amp;&amp;(b=&quot;webkitvisibilitychange&quot;);return b};function Ub(){const a=window;if(a.gmaSdk||a.webkit?.messageHandlers?.getGmaViewSignals)return a;try{const b=window.parent;if(b.gmaSdk||b.webkit?.messageHandlers?.getGmaViewSignals)return b}catch(b){}return null} function Vb(a,b={},c=()=>{},d=()=>{},g=200,e,f){const h=String(Math.floor(2147483647*Ta()));let k=0;const l=n=>{try{const p=&quot;object&quot;===typeof n.data?n.data:JSON.parse(n.data);h===p.paw_id&amp;&amp;(window.clearTimeout(k),window.removeEventListener(&quot;message&quot;,l),p.signal?c(p.signal):p.error&amp;&amp;d(p.error))}catch(p){f(&quot;paw_sigs&quot;,{msg:&quot;postmessageError&quot;,err:p instanceof Error?p.message:&quot;nonError&quot;,data:null==n.data?&quot;null&quot;:500<n.data.length?n.data.substring(0,500):n.data})}};window.addEventListener(&quot;message&quot;,n=>{e(903, ()=>{l(n)})()});a.postMessage({paw_id:h,...b});k=window.setTimeout(()=>{window.removeEventListener(&quot;message&quot;,l);d(&quot;PAW GMA postmessage timed out.&quot;)},g)};function Wb(a=document){return!!a.featurePolicy?.allowedFeatures().includes(&quot;attribution-reporting&quot;)};var Xb=class extends F{};function Yb(a,b){return E(a,2,b)}function Zb(a,b){return E(a,3,b)}function $b(a,b){return E(a,4,b)}function ac(a,b){return E(a,5,b)}function bc(a,b){return E(a,9,b)} function cc(a,b){{const n=a.m;let p=n[y];if(p&amp;2)throw Error();if(null==b)Aa(n,p,10);else{var c=b[y]|0,d=c,g=!!(2&amp;c)||!!(2048&amp;c),e=g||Object.isFrozen(b),f;if(f=!e)f=!1;var h=!0,k=!0;for(let m=0;m<b.length;m++){var l=b[m];g||(l=!!((l.m[y]|0)&amp;2),h&amp;&amp;(h=!l),k&amp;&amp;(k=l))}g||(c|=5,c=h?c|8:c&amp;-9,c=k?c|16:c&amp;-17);if(f||e&amp;&amp;c!==d)b=Array.prototype.slice.call(b),d=0,c=2&amp;p?c|2:c&amp;-3,c=(c|32)&amp;-2049,32&amp;p||(c&amp;=-33);c!==d&amp;&amp;(b[y]=c);Aa(n,p,10,b)}}return a}function dc(a,b){return D(a,11,null==b?b:qa(b))} function ec(a,b){return E(a,1,b)}function fc(a,b){return D(a,7,null==b?b:qa(b))}var gc=class extends F{};gc.C=[10,6];const hc=&quot;platform platformVersion architecture model uaFullVersion bitness fullVersionList wow64&quot;.split(&quot; &quot;);function ic(a){if(&quot;function&quot;!==typeof a.navigator?.userAgentData?.getHighEntropyValues)return null;const b=a.google_tag_data??(a.google_tag_data={});if(b.uach_promise)return b.uach_promise;a=a.navigator.userAgentData.getHighEntropyValues(hc).then(c=>{b.uach??(b.uach=c);return c});return b.uach_promise=a} function jc(a){return dc(cc(ac(Yb(ec($b(fc(bc(Zb(new gc,a.architecture||&quot;&quot;),a.bitness||&quot;&quot;),a.mobile||!1),a.model||&quot;&quot;),a.platform||&quot;&quot;),a.platformVersion||&quot;&quot;),a.uaFullVersion||&quot;&quot;),a.fullVersionList?.map(b=>{var c=new Xb;c=E(c,1,b.brand);return E(c,2,b.version)})||[]),a.wow64||!1)}function kc(a){return ic(a)?.then(b=>jc(b))??null};function lc(a){return[&quot;omid_v1_present&quot;,&quot;omid_v1_present_web&quot;,&quot;omid_v1_present_app&quot;].some(b=>{try{var c=a.frames&amp;&amp;!!a.frames[b]}catch(d){c=!1}return c})};let mc=null;function nc(){const a=I(q).omid3p;let b=!!a&amp;&amp;&quot;function&quot;===typeof a.registerSessionObserver&amp;&amp;&quot;function&quot;===typeof a.addEventListener;b||Sa(c=>{lc(c)&amp;&amp;(b=!0);return b});return b}function oc(){const a=W(pc);if(!a.l)throw Error(&quot;aiv::err&quot;);a.l()}function qc(a){if(J.ebrpfa||O(Ea)||O(Ka))a=H(a,&quot;&amp;cbvp=2&quot;);J.opxdv&amp;&amp;(a=nc()?H(a,&quot;&amp;rm=3&quot;):H(a,&quot;&amp;rm=1&quot;));a=a.replace(&quot;&amp;amp;&quot;,&quot;&amp;&quot;);rc(W(pc),a)} function sc(a,b){W(pc).j.then(()=>{var c=new Da;c=E(c,1,a);var d=b?2:3;if(null!=d){if(!Number.isFinite(d))throw c=Error(&quot;enum&quot;),c.__closure__error__context__984382||(c.__closure__error__context__984382={}),c.__closure__error__context__984382.severity=&quot;warning&quot;,c;d|=0}c=D(c,9,d);I(q)?.fence?.reportEvent({eventType:&quot;impression&quot;,eventData:Ba(c),destination:[&quot;buyer&quot;]})})} function tc(a){W(pc).j.then(()=>{if(db())Ya(window,a,null,!0,!1,!1);else{{const c=q.document;if(c.body){var b=c.getElementById(&quot;goog-srcless-iframe&quot;);b||(b=Xa(&quot;IFRAME&quot;),b.style.display=&quot;none&quot;,b.id=&quot;goog-srcless-iframe&quot;,c.body.appendChild(b))}else b=null}b&amp;&amp;b.contentWindow&amp;&amp;Ya(b.contentWindow,a,null,!0,!1,!1)}})} function rc(a,b){/(google|doubleclick).*\/pagead\/adview/.test(b)&amp;&amp;(b=H(b,`&amp;vis=${Sb(a.g)}`));O(Fa)&amp;&amp;&quot;__google_lidar_radf_&quot;in a.u&amp;&amp;(b=H(b,&quot;&amp;avradf=1&quot;));a.j.then(()=>{0<a.o.length&amp;&amp;(b=H(b,&quot;&amp;uach=&quot;+a.o));0<a.i.length&amp;&amp;(b=H(b,a.i));var c=a.u,d=b;var g=d;var e=g.search(Qa),f=Pa(g,0,&quot;ase&quot;,e);if(0>f)g=null;else{var h=g.indexOf(&quot;&amp;&quot;,f);if(0>h||h>e)h=e;g=decodeURIComponent(g.slice(f+4,-1!==h?h:0).replace(/\+/g,&quot; &quot;))}if(g===(2).toString()||La.test(d)){g=Wb(c.document);e=d.search(Qa);f=0;for(var k=[];0<=(h= Pa(d,f,&quot;nis&quot;,e));)k.push(d.substring(f,h)),f=Math.min(d.indexOf(&quot;&amp;&quot;,h)+1||e,e);k.push(d.slice(f));e=k.join(&quot;&quot;).replace(Ra,&quot;$1&quot;);d=g?6:5;(d=&quot;nis&quot;+(null!=d?&quot;=&quot;+encodeURIComponent(String(d)):&quot;&quot;))?(f=e.indexOf(&quot;#&quot;),0>f&amp;&amp;(f=e.length),h=e.indexOf(&quot;?&quot;),0>h||h>f?(h=f,k=&quot;&quot;):k=e.substring(h+1,f),e=[e.slice(0,h),k,e.slice(f)],f=e[1],e[1]=d?f?f+&quot;&amp;&quot;+d:d:f,d=e[0]+(e[1]?&quot;?&quot;+e[1]:&quot;&quot;)+e[2]):d=e;Za(c,d,O(Ia)?g:!0)}else if(J.atsb){g=d;if(d=c.navigator)d=c.navigator.userAgent,d=/Chrome/.test(d)&amp;&amp;!/Edge/.test(d)?!0:!1; d&amp;&amp;c.navigator.sendBeacon?c.navigator.sendBeacon(g):M(c,g,void 0,!1)}else M(c,d)})} function uc(a){const b=[];var c=O(Ha)||!!J.aub;if(c||J.aunb){let d=kc(a.u);d&amp;&amp;(d=d.then(g=>{var e=Ba(g);g=[];for(var f=0,h=0;h<e.length;h++){var k=e.charCodeAt(h);255<k&amp;&amp;(g[f++]=k&amp;255,k>>=8);g[f++]=k}e=3;void 0===e&amp;&amp;(e=0);if(!x)for(x={},f=&quot;ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789&quot;.split(&quot;&quot;),h=[&quot;+/=&quot;,&quot;+/&quot;,&quot;-_=&quot;,&quot;-_.&quot;,&quot;-_&quot;],k=0;5>k;k++){var l=f.concat(h[k].split(&quot;&quot;));ia[k]=l;for(var n=0;n<l.length;n++){var p=l[n];void 0===x[p]&amp;&amp;(x[p]=n)}}e=ia[e];f=Array(Math.floor(g.length/3)); h=e[64]||&quot;&quot;;for(k=l=0;l<g.length-2;l+=3){var m=g[l],r=g[l+1];p=g[l+2];n=e[m>>2];m=e[(m&amp;3)<<4|r>>4];r=e[(r&amp;15)<<2|p>>6];p=e[p&amp;63];f[k++]=n+m+r+p}n=0;p=h;switch(g.length-l){case 2:n=g[l+1],p=e[(n&amp;15)<<2]||h;case 1:g=g[l],f[k]=e[g>>2]+e[(g&amp;3)<<4|n>>4]+p+h}a.o=f.join(&quot;&quot;)}),c&amp;&amp;b.push(d))}if(O(Ga)||O(Ja))c=Ub(),c?.gmaSdk?.getViewSignals?(c=c.gmaSdk.getViewSignals())&amp;&amp;!O(Ja)&amp;&amp;(a.i=&quot;&amp;ms=&quot;+c):c?.webkit?.messageHandlers?.getGmaViewSignals&amp;&amp;Vb(c?.webkit?.messageHandlers?.getGmaViewSignals,{},d=>{O(Ja)||(a.i= &quot;&amp;&quot;+d)},()=>{},200,Gb,Hb);J.umi&amp;&amp;(c=new Y(d=>{a.l=d}),b.push(c));if(J.ebrpfa||O(Ea)){const d=Nb();b.push(d.promise);Wa(a.g,()=>{Lb(a.g.body,d.g)})}3==Sb(a.g)&amp;&amp;3==Sb(a.g)&amp;&amp;b.push(vc(a));if(J.opxdv&amp;&amp;a.D){const d=Nb();b.push(d.promise);c=q.omrhp;&quot;function&quot;===typeof c?c(d.g):(c=q.document.querySelector(&quot;script[data-jc='86']&quot;))&amp;&amp;c.addEventListener(&quot;load&quot;,()=>{q.omrhp(d.g)})}a.j=Mb(b)} function vc(a){return new Y(b=>{const c=Tb(a.g);if(c){var d=()=>{3!=Sb(a.g)&amp;&amp;(Na(a.g,c,d),b())};mc&amp;&amp;(d=mc(521,d));K(a.g,c,d)}})}class pc{constructor(){this.g=q.document;this.u=q;this.l=null;this.i=this.o=&quot;&quot;;this.D=nc();uc(this)}};eb=40;const wc=fb(40,document.currentScript);var xc;if(wc){const a={},b=wc.attributes;for(let c=b.length-1;0<=c;c--){const d=b[c].name;0===d.indexOf(&quot;data-jcp-&quot;)&amp;&amp;(a[d.substring(9)]=b[c].value)}xc=a}else xc={};(a=>{mc=Gb;I().vu=T(492,qc);I().vv=T(494,oc);a?.istd&amp;&amp;(I().tdvu=T(1197,sc));a?.extrk&amp;&amp;(I().nrtp=Gb(1169,function(b,c){tc(c)}))})(xc);}).call(this);</script><script>vu(&quot;https://securepubads.g.doubleclick.net/pagead/adview?ai\x3dCLfeVgfdKZtP4FbKX3LUPjZS5sAueoaGuXKH56P6fA8CNtwEQASAAYOWCgIDgDoIBF2NhLXB1Yi02MTYzODU3OTkyOTU2OTY0yAEJ4AIAqAMByAMCqgS9Ak_Q_kz2naWmnPfBaHLwaidcWFNT-qVrSLA7ZQzVeJkDQ2wyt7cllWm13mf6mjGLgg-BTH1BKrew1dWbCVRFM5Lkcrz9shiljIvdC4ucQjEMcvZ46TfPMd2sN_Y5rHFGYM-_q5XpCjdru-dm6_2j804Hoql1o1FWsAZAbA_zGYsbmmuKaaZYAVdYrSOCEIClmJrHtQV9A20XrTjSo3k5LAhLTbRblz71aBH7zQz__RpdN9IgBT-H71kcLhs8LrlzfYYNpqfZQXB1_W41rMC4wl3LV68gcOvON7lKrXLOrk-pOjJwtzpaF8rB7_RwL5yfcWDl8HNUq4B0UyOtlA7RfULLeIGPW1FV8iY3mscszRMOCZF7E-GE0WIQKXDKZQLmNU9f7POXLaOTRON67Np0qtDelM0LtO_sIU_qRlLU4AQBgAawhv-Us4fqnSKgBiGoB6a-G6gHltgbqAeqm7ECqAeDrbECqAf_nrECqAffn7ECqAetvrEC2AcA0ggtCICBgEAQATIEg4CADjoQn9CAgICAhIAggMCAgICgKEi9_cE6WOvyhLnWm4YD8ggbYWR4LXN1YnN5bi0yNzg0MzE0Njc1ODQyMzg3gAoD-gsCCAGADAHiDRMIs66FudabhgMVsgu3AB0NSg620BUBgBcBshccChoSFHB1Yi02MTYzODU3OTkyOTU2OTY0GLjNDA\x26sigh\x3d7DoQRBg2S6o\x26uach_m\x3d%5BUACH%5D\x26cid\x3dCAQSPAB7FLtquudexrp6ZwHOrl7psQBKPhDDBan0oxdH6yaoHsIYm-DDQiLMQDqRBaThmh8pQSKGUveWoMoqcxgB&quot;)</script><div class=&quot;GoogleActiveViewInnerContainer&quot;style=&quot;left:0px;top:0px;width:100%;height:100%;position:fixed;pointer-events:none;z-index:-9999;&quot;></div><div style=&quot;display:inline&quot;class=&quot;GoogleActiveViewElement&quot;data-google-av-cxn=&quot;https://pagead2.googlesyndication.com/pcs/activeview?xai=AKAOjsu6vID40lbJYXLBMB7tNEmWu1ADCujt96TBm7T3mkDvKuK9HRrmmb9Ww2VUnQ9m2wFaMfneEE7x3OgNfwAELgnwg4jNkAJQASLy-ciOlTfwCOmEHAFJjfRL6kokJWwa23jed8W1SNZpkhVA1Cu-YHM&amp;amp;sig=Cg0ArKJSzOguIshmt5_nEAE&quot;data-google-av-adk=&quot;315255001&quot;data-google-av-metadata=&quot;la=0&amp;amp;xdi=0&amp;amp;&quot;data-google-av-ufs-integrator-metadata=&quot;CqsBCl1tb2RlbF9wZXJzb25fY291bnRyeV9jb2RlX0lOX3BlcnNvbl9yZWdpb25fY29kZV81NTc0NzQ2MTcyNWY1MDcyNjE2NDY1NzM2ODVmNTI0NTUzNTQ0ZjQ2Lmpzb24SGkNKTzlocm5XbTRZREZiSUx0d0FkRFVvT3RnGAEiFwi0EhD3nwEghsuuBCgCMAI4AV0zM3M_KOyhuJb5_____wEw7KG4lgE4AUABEvsBCvABaHR0cHM6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wY3MvYWN0aXZldmlldz94YWk9QUtBT2pzdTZ2SUQ0MGxiSllYTEJNQjd0TkVtV3UxQURDdWp0OTZUQm03VDNta0R2S3VLOUhScm1tYjlXdzJWVW5ROW0yd0ZhTWZuZUVFN3gzT2dOZndBRUxnbndnNGpOa0FKUUFTTHktY2lPbFRmd0NPbUVIQUZKamZSTDZrb2tKV3dhMjNqZWQ4VzFTTlpwa2hWQTFDdS1ZSE0mc2lnPUNnMEFyS0pTek9ndUlzaG10NV9uRUFFEgAaACABKAA&quot;data-google-av-override=&quot;-1&quot;data-google-av-dm=&quot;2&quot;data-google-av-aid=&quot;0&quot;data-google-av-naid=&quot;1&quot;data-google-av-slift=&quot;&quot;data-google-av-cpmav=&quot;&quot;data-google-av-btr=&quot;&quot;data-google-av-itpl=&quot;20&quot;data-google-av-rs=&quot;4&quot;data-google-av-flags=&quot;[&amp;quot;x%278440&amp;#39;9efotm(&amp;amp;753374%2bejvf/%27844&amp;gt;&amp;#39;9wuvb$&amp;amp;56533&amp;gt;!=|vqc)!273794&amp;amp;&amp;lt;qqvb/%&amp;lt;1735020!=nehu`/!364=5051!9abk{a($160210:3&amp;amp;&amp;lt;cbotf+*0150034:%2bejvf/%72;17613!=efdwa*&amp;#39;76463;21$?ebkpb$&amp;amp;0366717&amp;gt;*&amp;gt;bgipf+!3=712363%9aihwc)!7202&amp;lt;217&amp;#39;9efotm(&amp;amp;20061;48&amp;amp;&amp;gt;`dopb/%&amp;lt;1707200!=8(&amp;amp;2005575?&amp;amp;&amp;gt;`dopb/%&amp;lt;170642?!=|vqc)!7201;=50&amp;#39;9wuvb$&amp;amp;03641654*&amp;gt;bgipf+!3=731103%9aihwc)!7200?073&amp;#39;9efotm(&amp;amp;2004?51;&amp;amp;&amp;gt;`dopb/%&amp;lt;17&amp;gt;474&amp;gt;!=nehu`/!36406412!9abk{a($167745;=&amp;amp;&amp;lt;cbotf+*01254133%2pvs`/!36383624!9abk{a($167574&amp;gt;7&amp;amp;&amp;lt;qqvb/%&amp;lt;104=460!=nehu`/!363;42&amp;gt;7!9abk{a($1656;3?&amp;lt;&amp;amp;&amp;lt;cbotfz&amp;quot;]&quot;><img src=&quot;https://a4937.casalemedia.com/impression/v2/276992/85/cp5ff08aku98vaftopgg/e3d3fa2b-34e3-40a9-b45f-47b104ad885d?verifieD=1&amp;userID=&amp;cmpro=0&amp;deviceType=2&amp;expiryTime=1716189657&amp;profileIDs=&amp;creativeID=2140fa7&amp;pubID=187457&amp;format=banner&amp;channel=site&amp;ap=Zkr3gQAFfFMAtwuyAA5KDQZvAorxBqWqFaIq1w&quot; style=&quot;display:none&quot; width=&quot;0&quot; height=&quot;0&quot; alt=&quot;&quot; border=&quot;0&quot; /><DIV STYLE=&quot;position: absolute; left: 0px; top: 0px; visibility: hidden;&quot;><IMG SRC=&quot;https://pagead2.googlesyndication.com/pagead/gen_204?id=xbid&amp;dbm_b=AKAmf-C8EbOK4Yds0u8NpC3MzovTFqu5mnDj5O5HHhhF1I9MTXSNptnC68jK0CLnUEkvjwmn5tMttQR9yOoHvGML3LAGzWzOs51PtpZmO9dkNCBPwZ68wP8&quot; BORDER=0 WIDTH=1 HEIGHT=1 ALT=&quot;&quot; STYLE=&quot;display:none&quot;></DIV><iframe title=&quot;Blank&quot; src=&quot;https://googleads.g.doubleclick.net/xbbe/pixel?d=CIyL25IDEKfJ2_IEGKTn14YCMAE&amp;v=APEucNXZlxnnsVXSOC6a6C35l_5ktwIOMdtAnA6au8pFNkobpqkFpprHaFC8U3vRIaa5ieY7p8MjLGDJNofSRduXuqh8Tj2tvg&quot; style=&quot;display:none&quot; aria-hidden=&quot;true&quot;></iframe><div><div style=&quot;position:absolute;&quot;><script>(function() {var u = 'https://googleads.g.doubleclick.net/dbm/ad?dbm_c=AKAmf-Cwk5rcxnn6e5tCztZawLhFeFHKoM7sAwZSCpGYR05046BuuE34eD346JLAbSybIML96g6RO83Wf-ojGYlf9ksF6LF80JVzAfwlAK0JtdEi2mzCa7lUK5qoJESnB1VfQb0BYGr5HDBEw2b4pDZ60RQIfvsTofEcSwW1WYmvRLEphLVZIJBk-Himq5gwWVYn4v-MjSqQAcTEydiYZPgi9mizyUEURN19V0JL6_Hksz4kRHD5VEU&amp;cry=1&amp;dbm_d=AKAmf-B1uM-qyx2AgV7zRZJ9bZk8C_hwHCrrwyshU32wu4GboZcczOf111pHC9s-ypRZONNwnozVlevp-63AdnYVaYUmYgGrlB3Fre76cIiBc5FXQ8tNQp37sFT7IQ_zpTGfWfpV6wntxjr6s-P5rNaxiOyCvnrTrwjDpVnUDaX9Y15PlOtiBWsatTLlLaGK3wRd5yrMiH9GRLyH40BE8ofwtN64Ycfz-MSav43sp5fu6127kzg5hLS7dgBKJ1kJFmJFq1YmN_Di-BGYJa3VC41acvP-Vcs13M5868RPfziVC9spxhYeN-GuxAEBhvLUTA6UzhPG0-m6crz_bluZZs2414zOt3v-bG8bCVE3R9XeKD5RH_htZR3Im61C5ZiJ60DyxbPQ_1RV1hHyh33ZOuqx7s8hc83GPmLC-opk-Ds8PnVaN10BBFfvuPl4feyCLR69lPY1zU5-xy_X6T3a4W-SYIilu3uDTs3jjlPT2SR_-k7xFuNZYytrDzOuT7bIhwADcG8cZUrr0U72X3qtVs6XLyDW_k5rfwm73rC9wwWzZzp8HHHWQ7aVAt1NSuT8dR661odj5MMM0RsYhT4HXkFYuMgcsO_rvUbDDzaFf0IoKOmPTU6QWlfsKss3PyHeCSB62og6Fx_oZnw35usD3KTuAg2dMk1UTNLTuN9TmMW-tVYp9hX-_kTCKbeeQWe3ASJsBQlPnxwr7PI_RI83O_333kfuq2GjNF8eT0igYWlI8Rdg8ICsFWiLdpYm2eT9xBxMQ1rLwZQ-GsCXd4iTl8Ci3WEHaPysfLSrlEpN4an5CfS_9L-NCJyMIeaKz2rxIm-tswwK0oPcueAjsB5BNusHAPLjXHBfIJutFBmCa5-bjEigqOUwfc3BqAEPX37t_Unf7CqstUhK3qvjQoXkqxG61xpLeXJNMPsvuUYipOvuTAQGWyIX9XHxTKO0m6DDiLYCYQp3XhQOLVW-9uv0EkZhjocHljK5LhUv8e4mno5AJ6ufzkTZPJwRATRtd37_qEKdjht2L77NmMBaQuv6zWchEqtS2qLTF5URJIGMe5Jo6iUwJm2zxMBlhSZ1q9_hlDkmylYdOkai_ZgAcD9RF8LilwsI33wLUVudfVpec53Xw0JFwa-vDLsU57KwWqibgfAdr6T4CqYFlGudu9M8VXAp4-rv9RgOfdVugkuFQ-vKlM7imDzRTkGpCqmEDX-w9lKJY7VDll8jrwUN--O-GY81xcB_4CApwBhqgkGtRGoO1BcZoJlmzVxsQwBQH2-oSynz-lYnbyusx1mXs1U_BLMfahxyB5_JQfBnVjEL0BkWef-v86rsziarxmLfFBd2XddqEuB9lfoeyiN6Oyz3L8XhPe84UVWQ3yPhODQRm5UQcUARTDYy5gq1U7ngExu66sfdMQBhkZyJGhv1eNHIt4LKtWIXvSoaVPzfuPnU4FUnCpyHLJ0-6VzyQeAY4TJygEr_oA1g3IHr1hXXVzsTnJigPS4SRe1YW-pnhG2NbM2Yq96r196KEh1rRRgQLLoqpNzaFWl4nqh3eCCyfDlKuOZMK_oFWWJorCLw-wnFFV37CP6ImqbZjCruw0YuYY3f3iuGiZo2egxD7VWa3uaaxxgOHrFlbxKOSOHRm8A0xpUdWg6oXdehBzsoZort0tbr-GO1fCv4GsuCHxEN-08L3kjW9aM-tADMq6DhDKOzWG-APcBO1Ear0oZM0jPUIJAHZjFii9VzYhFEYWLl2Fr2PciFtYWWd61kAZWMDhFTmAz259LHUzN7ACFNk6K5xc5pjqd32tMdEgari4pBCr1o3gE46gkbZmYXXwo7g8iwM7xywhP-PfvptL2TYomYSiMrWi0KvhZFV12uuYIp96bMnS0412AM-iJa31XCUB1jDQicOIUUTlZV0-DLURx60npjPa90Su4BalOtuP1WsMSns8PyoWPFhEZy298cbTJ2-gLXF6QA_9d1jvys1FeZHpmC7UQj2LWgdxDkwQ4wZPz7-3V4xH_2RPgoHGAxvMtsG3uVcLnArZkynqBBLML52_vvZ5FtHbOjm1jR7uJ-P5-5cTFSNCgvYx0gOdrF-nS6rGVwie_f6L6pMmudHtk35VM9uOGQyOjGXbFaa1yC62Q1lrItxoUEle9Mf1ngDLgJhvlQQFslplEStjMgWwMdhuFzky0b75pGSxFNe8giEkbRjDHLasRU7AaJfBSj2aq6-yzBZIUXA1nfXL8l4uP2beuv7ORI2PdF9itGGF52TdBsPigxepZkEjoZJbDO-8Q_eRukugvJDqP8r3qdNdjifdBQPTiaMa_nVI2vI9KMJlWpzr2a-BCYkyWAw9GJA0Jq_JGu0JiRGwvhcIh0uaa-5WfaCrzTEPwniMXMa8JVh1jihWL-iD_IOOZjZBhtfVSuY00AfiY4WG7YEcHBGyCDQn2XVbq8QjL-54US98ehvyQCDr_2C6SNWzt7mYGXXWkzi71mhV7jdPkAeoOr98GAccrODT3nci6CVNs-Jl61F8DEALOJG9njC6IIioUDciz3bUTPLrBqrYoJwAHM8fxYoerqOEbF4hwyDon5Erxy07jakQZ9mQXa7s673rTjxX54Sh0_og8GpkLh_iK3Y7vvs73jbl6ghlJp7Gqm4Yy18cK7JXWXTaw-D2DxbmrlpU05Z9NCq7v9A3hy0w0L1oq8F9PZ3SkTDXNEWxU6oCUgA5KHxjFDkgQFcij1Rkn0p3mcHwc4JcWdEVsTssf5Hfp587JJ4HpPSzXxUSZdk-k0vs6YZkuf2BAvATPlfRQLfipmSOE_cbkxf4Nv2VNgT7rA8jIjGXHB3bOW9-kSZN3yPdJwiupad1aNNBX7FcA9Tocic8BqCbOGx0lPToULzYsWBPbn6PwzIiRC9wlIWtL5BBbTWx7WYfCYsW2sa6lUJfEtVerK6PjFrWBRLiRZreE-TXSLq6Zj4Ceo4l7mAukmKNuHa08638qRnWL4G6dWMf6M7kTNLtZhdGj-2v_7hPhgf3NjsFDxNyeYrecoGjwMOwyMJbu1YnQKNMMnvVkC9dzTMdIB8cGoTD78_J1Zi0GCXdpUmKULv7mtj3jhOgPWav1A7H2NquPfuTg_nMZ5tNpUoPVCCn8HU0p_NGNzhB-IhyDlFcFlLjIUg-CdVG5acLpnGtFoKkOUCB8IhmOaTdRVhU8SieKK34JyolyiWIZ4QydhmVJ3gS3G4IWHy5jfs5hqc3Tuj6Dx2jcF5Tk1FNCPx7PWf7HDNcrqx55MqHG0hMZ9MCdUgD4_ACaTYiuZMr2M0sLMObIPEKjnkfS6Q6e_Le8_gNXQfY99wF_YcEHIevpdlfjLDxm8WZbF24uoQlQJi4p8kg459uPTfkteeHatPHqKj3DT9RJiYGM9DutxkZXPjf8tfhqjlAdW-O_Khaj4-NxPjR2LQdqO4h25LpOQzCmBYGdHHR7noU4CGSRYtnBPj_5nrkqQaYlefXTXTagNylVLC3P304ZfkucEB0KnrPrCKHtvKLuM3mZhL6P91zP7C5F3ZEhJ8LVWyP_FHYM6uUpzD2nL4fJ9b8g3mukRBeG99PmrhqrQ7NqktgvrbO45Pm9ib1c1YYoSAVM0i_6ll0dlK5kVcvf_J5meg4E523P77ToCjIbLN1u_a_pNWpq69O1UPCU6ZIZERWIIVz7Oo9yhD49nBAvJW-q0alahMZxtEazDkVjKZ5DZFk40qkHxpZ_98hTfB8P9RZ-Bow5Mxi892ev9wR5wTcV6jwyk3YruUIAJ9nPp5eQ-a-YfVHixK5UoIi6R8Ap-_Un6AYy1_QR-15_kJbI6h9jD6ljZr2OhQOWjVZPipWNWag9YP39wDTrun18Owlywci3NOAX7nFsbV0KCVTY5s9M0ify3IEd9bu5kk1TzwwxxQByhf_LL3BjDcR7nIBWqyzkvDRMH1-oGJNCoNlAurOWZ2QCmr4Xqc3z_AKkkM77T0n8Genkz6NLpfL8F_IHk5b_jGWOgzfCxHpQ__Me90M3vya2yZ71GK9JnKNtbvq3uDJq-IpBpRqfiGgPIttw1OIHIu7Jqb1SutPABYBfDnDWxZ-sIGNbFzH7rCVxo747DnNlWlxZWfijKjfbmlnSG2_VewHjGXZ6zgP_neXNGEtZ5Yr3rq7zTW_eHXu8c40qZBWGbBy4dP_4yH5YAbslwihOlAsnyzQwXBXLs6xt8fxuLFR9FTWwN38yhxRvmqIN8IL4uRtyOgd8nRW1ZpyCnUakjL7jkbjoovHnCPmZ4nVvq31QJT07Wgp-ARhs4poHAvNlY_IxWy25R0Iluz077oa0ef2bcc7O0SjeG0c3bHdf3kBfDAyTRGgo7w8saCK9rdUhRHKgRsQCyzmj8ohPb12vQ8UPEkpg_Qxd9bdlZyGbqkF_2CRrOXwyiFQpj_XopnsiXiS6KIO3nlp2VaFZGOOQkKTto_00RwmseWVgEhw&amp;pr=13:Zkr3gQAAAABqISDaNjbd3HDuy7PhiHjoi-rDCA&amp;cid=CAQSYAB7FLtqB0WkpRZdLRZ-xULub4Eo36AL3uRrV15unmnRf2i9qIxO5JtCAcwe-1oXr78mXPNhP2ALokpfT5iXt9HHFdxEg1ZWEs23zVOoaDhzORqsDrf3NSNjnWJrKWkqOxgB';window.dv3Utw = {u: u,w: function() {document.write('<script src=&quot;' + u + '&amp;flb=1&quot;></s' + 'cript>');}};})();</script><script src=&quot;https://pagead2.googlesyndication.com/pagead/js/dv3.js&quot; data-dv3-creative-fetch=&quot;https://googleads.g.doubleclick.net/dbm/ad?dbm_c=AKAmf-Cwk5rcxnn6e5tCztZawLhFeFHKoM7sAwZSCpGYR05046BuuE34eD346JLAbSybIML96g6RO83Wf-ojGYlf9ksF6LF80JVzAfwlAK0JtdEi2mzCa7lUK5qoJESnB1VfQb0BYGr5HDBEw2b4pDZ60RQIfvsTofEcSwW1WYmvRLEphLVZIJBk-Himq5gwWVYn4v-MjSqQAcTEydiYZPgi9mizyUEURN19V0JL6_Hksz4kRHD5VEU&amp;cry=1&amp;dbm_d=AKAmf-B1uM-qyx2AgV7zRZJ9bZk8C_hwHCrrwyshU32wu4GboZcczOf111pHC9s-ypRZONNwnozVlevp-63AdnYVaYUmYgGrlB3Fre76cIiBc5FXQ8tNQp37sFT7IQ_zpTGfWfpV6wntxjr6s-P5rNaxiOyCvnrTrwjDpVnUDaX9Y15PlOtiBWsatTLlLaGK3wRd5yrMiH9GRLyH40BE8ofwtN64Ycfz-MSav43sp5fu6127kzg5hLS7dgBKJ1kJFmJFq1YmN_Di-BGYJa3VC41acvP-Vcs13M5868RPfziVC9spxhYeN-GuxAEBhvLUTA6UzhPG0-m6crz_bluZZs2414zOt3v-bG8bCVE3R9XeKD5RH_htZR3Im61C5ZiJ60DyxbPQ_1RV1hHyh33ZOuqx7s8hc83GPmLC-opk-Ds8PnVaN10BBFfvuPl4feyCLR69lPY1zU5-xy_X6T3a4W-SYIilu3uDTs3jjlPT2SR_-k7xFuNZYytrDzOuT7bIhwADcG8cZUrr0U72X3qtVs6XLyDW_k5rfwm73rC9wwWzZzp8HHHWQ7aVAt1NSuT8dR661odj5MMM0RsYhT4HXkFYuMgcsO_rvUbDDzaFf0IoKOmPTU6QWlfsKss3PyHeCSB62og6Fx_oZnw35usD3KTuAg2dMk1UTNLTuN9TmMW-tVYp9hX-_kTCKbeeQWe3ASJsBQlPnxwr7PI_RI83O_333kfuq2GjNF8eT0igYWlI8Rdg8ICsFWiLdpYm2eT9xBxMQ1rLwZQ-GsCXd4iTl8Ci3WEHaPysfLSrlEpN4an5CfS_9L-NCJyMIeaKz2rxIm-tswwK0oPcueAjsB5BNusHAPLjXHBfIJutFBmCa5-bjEigqOUwfc3BqAEPX37t_Unf7CqstUhK3qvjQoXkqxG61xpLeXJNMPsvuUYipOvuTAQGWyIX9XHxTKO0m6DDiLYCYQp3XhQOLVW-9uv0EkZhjocHljK5LhUv8e4mno5AJ6ufzkTZPJwRATRtd37_qEKdjht2L77NmMBaQuv6zWchEqtS2qLTF5URJIGMe5Jo6iUwJm2zxMBlhSZ1q9_hlDkmylYdOkai_ZgAcD9RF8LilwsI33wLUVudfVpec53Xw0JFwa-vDLsU57KwWqibgfAdr6T4CqYFlGudu9M8VXAp4-rv9RgOfdVugkuFQ-vKlM7imDzRTkGpCqmEDX-w9lKJY7VDll8jrwUN--O-GY81xcB_4CApwBhqgkGtRGoO1BcZoJlmzVxsQwBQH2-oSynz-lYnbyusx1mXs1U_BLMfahxyB5_JQfBnVjEL0BkWef-v86rsziarxmLfFBd2XddqEuB9lfoeyiN6Oyz3L8XhPe84UVWQ3yPhODQRm5UQcUARTDYy5gq1U7ngExu66sfdMQBhkZyJGhv1eNHIt4LKtWIXvSoaVPzfuPnU4FUnCpyHLJ0-6VzyQeAY4TJygEr_oA1g3IHr1hXXVzsTnJigPS4SRe1YW-pnhG2NbM2Yq96r196KEh1rRRgQLLoqpNzaFWl4nqh3eCCyfDlKuOZMK_oFWWJorCLw-wnFFV37CP6ImqbZjCruw0YuYY3f3iuGiZo2egxD7VWa3uaaxxgOHrFlbxKOSOHRm8A0xpUdWg6oXdehBzsoZort0tbr-GO1fCv4GsuCHxEN-08L3kjW9aM-tADMq6DhDKOzWG-APcBO1Ear0oZM0jPUIJAHZjFii9VzYhFEYWLl2Fr2PciFtYWWd61kAZWMDhFTmAz259LHUzN7ACFNk6K5xc5pjqd32tMdEgari4pBCr1o3gE46gkbZmYXXwo7g8iwM7xywhP-PfvptL2TYomYSiMrWi0KvhZFV12uuYIp96bMnS0412AM-iJa31XCUB1jDQicOIUUTlZV0-DLURx60npjPa90Su4BalOtuP1WsMSns8PyoWPFhEZy298cbTJ2-gLXF6QA_9d1jvys1FeZHpmC7UQj2LWgdxDkwQ4wZPz7-3V4xH_2RPgoHGAxvMtsG3uVcLnArZkynqBBLML52_vvZ5FtHbOjm1jR7uJ-P5-5cTFSNCgvYx0gOdrF-nS6rGVwie_f6L6pMmudHtk35VM9uOGQyOjGXbFaa1yC62Q1lrItxoUEle9Mf1ngDLgJhvlQQFslplEStjMgWwMdhuFzky0b75pGSxFNe8giEkbRjDHLasRU7AaJfBSj2aq6-yzBZIUXA1nfXL8l4uP2beuv7ORI2PdF9itGGF52TdBsPigxepZkEjoZJbDO-8Q_eRukugvJDqP8r3qdNdjifdBQPTiaMa_nVI2vI9KMJlWpzr2a-BCYkyWAw9GJA0Jq_JGu0JiRGwvhcIh0uaa-5WfaCrzTEPwniMXMa8JVh1jihWL-iD_IOOZjZBhtfVSuY00AfiY4WG7YEcHBGyCDQn2XVbq8QjL-54US98ehvyQCDr_2C6SNWzt7mYGXXWkzi71mhV7jdPkAeoOr98GAccrODT3nci6CVNs-Jl61F8DEALOJG9njC6IIioUDciz3bUTPLrBqrYoJwAHM8fxYoerqOEbF4hwyDon5Erxy07jakQZ9mQXa7s673rTjxX54Sh0_og8GpkLh_iK3Y7vvs73jbl6ghlJp7Gqm4Yy18cK7JXWXTaw-D2DxbmrlpU05Z9NCq7v9A3hy0w0L1oq8F9PZ3SkTDXNEWxU6oCUgA5KHxjFDkgQFcij1Rkn0p3mcHwc4JcWdEVsTssf5Hfp587JJ4HpPSzXxUSZdk-k0vs6YZkuf2BAvATPlfRQLfipmSOE_cbkxf4Nv2VNgT7rA8jIjGXHB3bOW9-kSZN3yPdJwiupad1aNNBX7FcA9Tocic8BqCbOGx0lPToULzYsWBPbn6PwzIiRC9wlIWtL5BBbTWx7WYfCYsW2sa6lUJfEtVerK6PjFrWBRLiRZreE-TXSLq6Zj4Ceo4l7mAukmKNuHa08638qRnWL4G6dWMf6M7kTNLtZhdGj-2v_7hPhgf3NjsFDxNyeYrecoGjwMOwyMJbu1YnQKNMMnvVkC9dzTMdIB8cGoTD78_J1Zi0GCXdpUmKULv7mtj3jhOgPWav1A7H2NquPfuTg_nMZ5tNpUoPVCCn8HU0p_NGNzhB-IhyDlFcFlLjIUg-CdVG5acLpnGtFoKkOUCB8IhmOaTdRVhU8SieKK34JyolyiWIZ4QydhmVJ3gS3G4IWHy5jfs5hqc3Tuj6Dx2jcF5Tk1FNCPx7PWf7HDNcrqx55MqHG0hMZ9MCdUgD4_ACaTYiuZMr2M0sLMObIPEKjnkfS6Q6e_Le8_gNXQfY99wF_YcEHIevpdlfjLDxm8WZbF24uoQlQJi4p8kg459uPTfkteeHatPHqKj3DT9RJiYGM9DutxkZXPjf8tfhqjlAdW-O_Khaj4-NxPjR2LQdqO4h25LpOQzCmBYGdHHR7noU4CGSRYtnBPj_5nrkqQaYlefXTXTagNylVLC3P304ZfkucEB0KnrPrCKHtvKLuM3mZhL6P91zP7C5F3ZEhJ8LVWyP_FHYM6uUpzD2nL4fJ9b8g3mukRBeG99PmrhqrQ7NqktgvrbO45Pm9ib1c1YYoSAVM0i_6ll0dlK5kVcvf_J5meg4E523P77ToCjIbLN1u_a_pNWpq69O1UPCU6ZIZERWIIVz7Oo9yhD49nBAvJW-q0alahMZxtEazDkVjKZ5DZFk40qkHxpZ_98hTfB8P9RZ-Bow5Mxi892ev9wR5wTcV6jwyk3YruUIAJ9nPp5eQ-a-YfVHixK5UoIi6R8Ap-_Un6AYy1_QR-15_kJbI6h9jD6ljZr2OhQOWjVZPipWNWag9YP39wDTrun18Owlywci3NOAX7nFsbV0KCVTY5s9M0ify3IEd9bu5kk1TzwwxxQByhf_LL3BjDcR7nIBWqyzkvDRMH1-oGJNCoNlAurOWZ2QCmr4Xqc3z_AKkkM77T0n8Genkz6NLpfL8F_IHk5b_jGWOgzfCxHpQ__Me90M3vya2yZ71GK9JnKNtbvq3uDJq-IpBpRqfiGgPIttw1OIHIu7Jqb1SutPABYBfDnDWxZ-sIGNbFzH7rCVxo747DnNlWlxZWfijKjfbmlnSG2_VewHjGXZ6zgP_neXNGEtZ5Yr3rq7zTW_eHXu8c40qZBWGbBy4dP_4yH5YAbslwihOlAsnyzQwXBXLs6xt8fxuLFR9FTWwN38yhxRvmqIN8IL4uRtyOgd8nRW1ZpyCnUakjL7jkbjoovHnCPmZ4nVvq31QJT07Wgp-ARhs4poHAvNlY_IxWy25R0Iluz077oa0ef2bcc7O0SjeG0c3bHdf3kBfDAyTRGgo7w8saCK9rdUhRHKgRsQCyzmj8ohPb12vQ8UPEkpg_Qxd9bdlZyGbqkF_2CRrOXwyiFQpj_XopnsiXiS6KIO3nlp2VaFZGOOQkKTto_00RwmseWVgEhw&amp;pr=13:Zkr3gQAAAACFC6cas86UFY5dnkzYKomxHTAnBg&amp;cid=CAQSYAB7FLtqB0WkpRZdLRZ-xULub4Eo36AL3uRrV15unmnRf2i9qIxO5JtCAcwe-1oXr78mXPNhP2ALokpfT5iXt9HHFdxEg1ZWEs23zVOoaDhzORqsDrf3NSNjnWJrKWkqOxgB&quot; data-dv3-width=&quot;300&quot; data-dv3-height=&quot;250&quot; data-dv3-render-mode=&quot;script&quot; data-dv3-meta-data=&quot;[13,2,16038506204709020023]&quot;></script><script data-jc=&quot;112&quot; data-jc-version=&quot;r20240515&quot;>(function(){'use strict';const d=/[&amp;?]dbm_c=([^ &amp;]+)/;function e(a){return(a=d.exec(a))?a[1]:null}function f(a,b,c){a=a.getElementsByTagName(b);for(b=0;b<a.length;++b)if(e(a[b].src)===c)return!0;return!1};const g=window;if(g.dv3Utw){var h=g.dv3Utw.u,k=g.dv3Utw.w;g.dv3Utw=void 0;var l;a:{const a=e(h);if(!a||f(document,&quot;script&quot;,a)||f(document,&quot;iframe&quot;,a))l=!0;else{var m=document.getElementsByClassName(&quot;dv3-asfrm&quot;);for(let b=0;b<m.length;++b){const c=m[b];if(c.contentWindow&amp;&amp;f(c.contentWindow.document,&quot;script&quot;,a)){l=!0;break a}}l=!1}}l||k()};}).call(this);</script></div></div><iframe width=&quot;0&quot; height=&quot;0&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; src=&quot;https://ssum-sec.casalemedia.com/usermatch?ix_um=1&amp;cb=https%3A%2F%2Fjs-sec.indexww.com%2Fht%2Fhtw-pixel.gif%3F&amp;s=187457&amp;gdpr=0&quot; style=&quot;display: none;&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot;></iframe></div><script data-jc=&quot;22&quot; src=&quot;https://tpc.googlesyndication.com/pagead/js/r20240515/r20110914/client/window_focus_fy2021.js&quot; async data-jc-version=&quot;r20240515&quot; data-jcp-url=&quot;https://googleads.g.doubleclick.net/pagead/interaction/?ai=C908JgfdKZtP4FbKX3LUPjZS5sAueoaGuXKH56P6fA8CNtwEQASAAYOWCgIDgDoIBF2NhLXB1Yi02MTYzODU3OTkyOTU2OTY0yAEJ4AIAqAMByAMCqgTAAk_Q_kz2naWmnPfBaHLwaidcWFNT-qVrSLA7ZQzVeJkDQ2wyt7cllWm13mf6mjGLgg-BTH1BKrew1dWbCVRFM5Lkcrz9shiljIvdC4ucQjEMcvZ46TfPMd2sN_Y5rHFGYM-_q5XpCjdru-dm6_2j804Hoql1o1FWsAZAbA_zGYsbmmuKaaZYAVdYrSOCEIClmJrHtQV9A20XrTjSo3k5LAhLTbRblz71aBH7zQz__RpdN9IgBT-H71kcLhs8LrlzfYYNpqfZQXB1_W41rMC4wl3LV68gcOvON7lKrXLOrk-pOjJwtzpaF8rB7_RwL5yfcWDl8HNUq4B0UyOtlA7RfULLeIGPW1FV8iY3mscszRMOCZF7E-GE0SASCOIa7JCMjd0iNRHu8GmrU-n-5fRsbx8k7RDLCPHAOZ1GzDhswiKp4AQBgAawhv-Us4fqnSKgBiGoB6a-G6gHltgbqAeqm7ECqAeDrbECqAf_nrECqAffn7ECqAetvrEC2AcA0ggtCICBgEAQATIEg4CADjoQn9CAgICAhIAggMCAgICgKEi9_cE6WOvyhLnWm4YD8ggbYWR4LXN1YnN5bi0yNzg0MzE0Njc1ODQyMzg3-gsCCAGADAHiDRMIs66FudabhgMVsgu3AB0NSg620BUBgBcB&amp;amp;sigh=7f9keaCsfC0&amp;amp;cid=CAQSPAB7FLtquudexrp6ZwHOrl7psQBKPhDDBan0oxdH6yaoHsIYm-DDQiLMQDqRBaThmh8pQSKGUveWoMoqcw&quot; data-jcp-gws-id=&quot;&quot; data-jcp-qem-id=&quot;CJO9hrnWm4YDFbILtwAdDUoOtg&quot;></script><script data-jc=&quot;23&quot; src=&quot;https://tpc.googlesyndication.com/pagead/js/r20240515/r20110914/client/qs_click_protection_fy2021.js&quot; data-jc-version=&quot;r20240515&quot; data-jcp-init-data=&quot;[[[[null,500,99,2,9,null,null,null,1]]]]&quot;></script><img src=&quot;//www.google.com/ads/measurement/l?ebcid=ALh7CaQgKjEDnS_jpc02GUsqocuHkqZE5ClKk_wvntrZnkKpVhZFMgiD_Lq6gffyiKTVJoyPhGgw&quot; style=&quot;display:none;&quot; alt=&quot;&quot;></img><script src=&quot;https://tpc.googlesyndication.com/safeframe/1-0-40/js/ext.js&quot;></script><div style=&quot;bottom:0;right:0;width:300px;height:250px;background:initial !important;position:absolute !important;max-width:100% !important;max-height:100% !important;pointer-events:none !important;image-rendering:pixelated !important;z-index:2147483647;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAWBAMAAACrl3iAAAAABlBMVEUAAAD+AciWmZzWAAAAAnRSTlMAApidrBQAAAB/SURBVBjTbZCLEYAwCEPTDdh/Wm0+FHvWnsoRwgPg/yyd92ffjlDMll+JqIAedLQzVSUhv4o6L++hjm2NKL1XtCbJkevghvW8bNJCm9N+F0liagfhDq4HoLx72x8XidDVZHKrFJ8NyrQGyZkRXTcAvEeMDWfAe4Mm8cSHxLXUP1g2BeS1lLl1AAAAAElFTkSuQmCC') !important;&quot;></div><script data-jc=&quot;103&quot; data-jc-version=&quot;r20240515&quot; data-jcp-base_url=&quot;https://googleads.g.doubleclick.net/pagead/conversion/?ai=C908JgfdKZtP4FbKX3LUPjZS5sAueoaGuXKH56P6fA8CNtwEQASAAYOWCgIDgDoIBF2NhLXB1Yi02MTYzODU3OTkyOTU2OTY0yAEJ4AIAqAMByAMCqgTAAk_Q_kz2naWmnPfBaHLwaidcWFNT-qVrSLA7ZQzVeJkDQ2wyt7cllWm13mf6mjGLgg-BTH1BKrew1dWbCVRFM5Lkcrz9shiljIvdC4ucQjEMcvZ46TfPMd2sN_Y5rHFGYM-_q5XpCjdru-dm6_2j804Hoql1o1FWsAZAbA_zGYsbmmuKaaZYAVdYrSOCEIClmJrHtQV9A20XrTjSo3k5LAhLTbRblz71aBH7zQz__RpdN9IgBT-H71kcLhs8LrlzfYYNpqfZQXB1_W41rMC4wl3LV68gcOvON7lKrXLOrk-pOjJwtzpaF8rB7_RwL5yfcWDl8HNUq4B0UyOtlA7RfULLeIGPW1FV8iY3mscszRMOCZF7E-GE0SASCOIa7JCMjd0iNRHu8GmrU-n-5fRsbx8k7RDLCPHAOZ1GzDhswiKp4AQBgAawhv-Us4fqnSKgBiGoB6a-G6gHltgbqAeqm7ECqAeDrbECqAf_nrECqAffn7ECqAetvrEC2AcA0ggtCICBgEAQATIEg4CADjoQn9CAgICAhIAggMCAgICgKEi9_cE6WOvyhLnWm4YD8ggbYWR4LXN1YnN5bi0yNzg0MzE0Njc1ODQyMzg3-gsCCAGADAHiDRMIs66FudabhgMVsgu3AB0NSg620BUBgBcB&amp;amp;sigh=7f9keaCsfC0&quot; data-jcp-cpu_label=&quot;heavy_ad_intervention_cpu&quot; data-jcp-net_label=&quot;heavy_ad_intervention_network&quot;>(function(){'use strict';/*  Copyright The Closure Library Authors. SPDX-License-Identifier: Apache-2.0 */ var l=this||self;function m(a){a:{var b=[&quot;CLOSURE_FLAGS&quot;];for(var c=l,d=0;d<b.length;d++)if(c=c[b[d]],null==c){b=null;break a}b=c}a=b&amp;&amp;b[a];return null!=a?a:!1};var p=m(610401301),r=m(188588736);var t;const u=l.navigator;t=u?u.userAgentData||null:null;function v(a){return p?t?t.brands.some(({brand:b})=>b&amp;&amp;-1!=b.indexOf(a)):!1:!1}function w(a){var b;a:{if(b=l.navigator)if(b=b.userAgent)break a;b=&quot;&quot;}return-1!=b.indexOf(a)};function x(){return p?!!t&amp;&amp;0<t.brands.length:!1}function y(){return x()?v(&quot;Chromium&quot;):(w(&quot;Chrome&quot;)||w(&quot;CriOS&quot;))&amp;&amp;!(x()?0:w(&quot;Edge&quot;))||w(&quot;Silk&quot;)};!w(&quot;Android&quot;)||y();y();w(&quot;Safari&quot;)&amp;&amp;(y()||(x()?0:w(&quot;Coast&quot;))||(x()?0:w(&quot;Opera&quot;))||(x()?0:w(&quot;Edge&quot;))||(x()?v(&quot;Microsoft Edge&quot;):w(&quot;Edg/&quot;))||x()&amp;&amp;v(&quot;Opera&quot;));var z=Symbol();var A={},B={};function C(a){return!(!a||&quot;object&quot;!==typeof a||a.o!==B)}function F(a){return null!==a&amp;&amp;&quot;object&quot;===typeof a&amp;&amp;!Array.isArray(a)&amp;&amp;a.constructor===Object}let G;function H(a,b,c){if(!Array.isArray(a)||a.length)return!1;const d=a[z]|0;if(d&amp;1)return!0;if(!(b&amp;&amp;(Array.isArray(b)?b.includes(c):b.has(c))))return!1;a[z]=d|1;return!0}class I{}class J{}Object.freeze(new I);Object.freeze(new J);let K;function L(a,b){return M(b)}function M(a){switch(typeof a){case &quot;number&quot;:return isFinite(a)?a:String(a);case &quot;boolean&quot;:return a?1:0;case &quot;object&quot;:if(a)if(Array.isArray(a)){if(H(a,void 0,0))return}else if(null!=a&amp;&amp;a instanceof Uint8Array){let b=&quot;&quot;,c=0;const d=a.length-10240;for(;c<d;)b+=String.fromCharCode.apply(null,a.subarray(c,c+=10240));b+=String.fromCharCode.apply(null,c?a.subarray(c):a);return btoa(b)}}return a};function N(a,b,c,d,f){if(null!=a){if(Array.isArray(a))a=H(a,void 0,0)?void 0:f&amp;&amp;(a[z]|0)&amp;2?a:O(a,b,c,void 0!==d,f);else if(F(a)){const k={};for(let e in a)k[e]=N(a[e],b,c,d,f);a=k}else a=b(a,d);return a}}function O(a,b,c,d,f){const k=d||c?a[z]|0:0;d=d?!!(k&amp;32):void 0;a=Array.prototype.slice.call(a);for(let e=0;e<a.length;e++)a[e]=N(a[e],b,c,d,f);c&amp;&amp;c(k,a);return a}function P(a){return a.l===A?a.toJSON():M(a)};function Q(a,b,c){if(null!=c&amp;&amp;&quot;string&quot;!==typeof c)throw Error();a=a.g;let d=a[z];if(d&amp;2)throw Error();a:{var f=d>>14&amp;1023;f=0===f?536870912:f;if(b>=f){let k,e=d;if(d&amp;256)k=a[a.length-1];else{if(null==c)break a;k=a[f+(+!!(d&amp;512)-1)]={};e|=256}k[b]=c;b<f&amp;&amp;(a[b+(+!!(d&amp;512)-1)]=void 0);e!==d&amp;&amp;(a[z]=e)}else a[b+(+!!(d&amp;512)-1)]=c,d&amp;256&amp;&amp;(c=a[a.length-1],b in c&amp;&amp;delete c[b])}};var S=class{constructor(){a:{var a=void 0;null==a&amp;&amp;(a=K);K=void 0;if(null==a){var b=96;a=[]}else{if(!Array.isArray(a))throw Error(&quot;narr&quot;);b=a[z]|0;if(b&amp;2048)throw Error(&quot;farr&quot;);if(b&amp;64)break a;var c=a;b|=64;var d=c.length;if(d&amp;&amp;(--d,F(c[d]))){b|=256;c=d-(+!!(b&amp;512)-1);if(1024<=c)throw Error(&quot;pvtlmt&quot;);b=b&amp;-16760833|(c&amp;1023)<<14}}a[z]=b}this.g=a}toJSON(){return G?R(this,this.g,!1):R(this,O(this.g,P,void 0,void 0,!1),!0)}};S.prototype.l=A;S.prototype.toString=function(){return R(this,this.g,!1).toString()}; function R(a,b,c){var d=r?void 0:a.constructor.s;const f=(c?a.g:b)[z];a=b.length;if(!a)return b;let k,e;if(F(c=b[a-1])){a:{var g=c;let D={},E=!1;for(var h in g){let n=g[h];if(Array.isArray(n)){let W=n;if(H(n,d,+h)||C(n)&amp;&amp;0===n.size)n=null;n!=W&amp;&amp;(E=!0)}null!=n?D[h]=n:E=!0}if(E){for(var q in D){g=D;break a}g=null}}g!=c&amp;&amp;(k=!0);a--}for(h=+!!(f&amp;512)-1;0<a;a--){q=a-1;c=b[q];q-=h;if(!(null==c||H(c,d,q)||C(c)&amp;&amp;0===c.size))break;e=!0}if(!k&amp;&amp;!e)return b;b=Array.prototype.slice.call(b,0,a);g&amp;&amp;b.push(g);return b} ;var T=class extends S{};function U(a=window){return a};var V=/#|$/;const X=function(a,b=null){return b&amp;&amp;b.getAttribute(&quot;data-jc&quot;)===String(a)?b:document.querySelector(`[${&quot;data-jc&quot;}=&quot;${a}&quot;]`)}(103,document.currentScript);if(null==X)throw Error(&quot;JSC not found 103&quot;);const Y={},Z=X.attributes;for(let a=Z.length-1;0<=a;a--){const b=Z[a].name;0===b.indexOf(&quot;data-jcp-&quot;)&amp;&amp;(Y[b.substring(9)]=Z[a].value)} (function(a,b,c){var d=window;a&amp;&amp;b&amp;&amp;c&amp;&amp;d.ReportingObserver&amp;&amp;d.fetch&amp;&amp;(new d.ReportingObserver((f,k)=>{f=f[0];if(&quot;HeavyAdIntervention&quot;===f?.body?.id){f=0<(f.body.message?.indexOf(&quot;network&quot;)||0)?c:b;var e=a.search(V);var g;b:{for(g=0;0<=(g=a.indexOf(&quot;ad_signals&quot;,g))&amp;&amp;g<e;){var h=a.charCodeAt(g-1);if(38==h||63==h)if(h=a.charCodeAt(g+10),!h||61==h||38==h||35==h)break b;g+=11}g=-1}if(0>g)e=null;else{h=a.indexOf(&quot;&amp;&quot;,g);if(0>h||h>e)h=e;e=decodeURIComponent(a.slice(g+11,-1!==h?h:0).replace(/\+/g,&quot; &quot;))}if(e){if(navigator.sendBeacon(&quot;https://pagead2.googlesyndication.com/pagead/gen_204/?id=fledge_interactions&amp;label=&quot;+ f),e={h:e,label:f},f=new T,null!=e&amp;&amp;(null!=e.h&amp;&amp;Q(f,1,e.h),null!=e.m&amp;&amp;Q(f,3,e.m),null!=e.label&amp;&amp;Q(f,6,e.label),null!=e.j&amp;&amp;Q(f,7,e.j),null!=e.i&amp;&amp;Q(f,8,e.i)),null!=(e=U(l).fence)){g=e.reportEvent;G=!0;try{var q=JSON.stringify(f.toJSON(),L)}finally{G=!1}g.call(e,{eventType:&quot;interaction&quot;,eventData:q,destination:[&quot;buyer&quot;]})}}else d.fetch(`${a}&amp;label=${f}`,{keepalive:!0,method:&quot;get&quot;,mode:&quot;no-cors&quot;});k.disconnect()}},{types:[&quot;intervention&quot;],buffered:!0})).observe()})(Y.base_url,Y.cpu_label,Y.net_label);}).call(this);</script><script id=&quot;googleActiveViewDisplayScript&quot; src=&quot;https://pagead2.googlesyndication.com/pagead/managed/js/activeview/current/ufs_web_display.js&quot;></script><script type=&quot;text/javascript&quot;>osdlfm();</script></body></html>{&quot;uid&quot;:&quot;1&quot;,&quot;hostPeerName&quot;:&quot;https://www.programiz.com&quot;,&quot;initialGeometry&quot;:&quot;{\&quot;windowCoords_t\&quot;:0,\&quot;windowCoords_r\&quot;:1280,\&quot;windowCoords_b\&quot;:680,\&quot;windowCoords_l\&quot;:0,\&quot;frameCoords_t\&quot;:2564.666748046875,\&quot;frameCoords_r\&quot;:452.6666717529297,\&quot;frameCoords_b\&quot;:2814.666748046875,\&quot;frameCoords_l\&quot;:152.6666717529297,\&quot;styleZIndex\&quot;:\&quot;auto\&quot;,\&quot;allowedExpansion_t\&quot;:0,\&quot;allowedExpansion_r\&quot;:0,\&quot;allowedExpansion_b\&quot;:0,\&quot;allowedExpansion_l\&quot;:0,\&quot;xInView\&quot;:0,\&quot;yInView\&quot;:0}&quot;,&quot;permissions&quot;:&quot;{\&quot;expandByOverlay\&quot;:false,\&quot;expandByPush\&quot;:false,\&quot;readCookie\&quot;:false,\&quot;writeCookie\&quot;:false}&quot;,&quot;metadata&quot;:&quot;{\&quot;shared\&quot;:{\&quot;sf_ver\&quot;:\&quot;1-0-40\&quot;,\&quot;ck_on\&quot;:1,\&quot;flash_ver\&quot;:\&quot;0\&quot;}}&quot;,&quot;reportCreativeGeometry&quot;:false,&quot;isDifferentSourceWindow&quot;:false,&quot;goog_safeframe_hlt&quot;:{}}" scrolling="no" marginwidth="0" marginheight="0" width="300" height="250" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#c-out">C Output</a></li>
<li><a href="#c-input">C Input</a></li>
<li><a href="#multiple-io">I/O Multiple Values</a></li>
<li><a href="#format-specifiers">Format Specifiers</a></li>
</ul>
</div></div></div>                          </div>
          </section>
         
         
          <!-- operator section -->
          <section id="operators">
            <div class="editor-contents">
              <h1>C Programming Operators</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-147" class="node node-c-tutorial clearfix" about="/c-programming/c-operators" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Programming Operators" class="rdf-meta element-hidden"></span>

<div class="content">
<div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CObz9sfWm4YDFf2a2AUdic0BLA">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" name="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" width="336" height="280" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" style="border: 0px; vertical-align: bottom;" data-google-container-id="1"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#arithmetic">Arithmetic Operators</a></li>
<li><a href="#increment">Increment and Decrement Operators</a></li>
<li><a href="#assignment">Assignment Operators</a></li>
<li><a href="#relational">Relational Operators</a></li>
<li><a href="#logical">Logical Operators</a></li>
<li><a href="#sizeof">sizeof Operator</a></li>
</ul>
</div></div></div>                          </div>
          </section>


          <!-- if else section  -->
          <section id="ifElse">
            <div class="editor-contents">
              <h1>C if...else Statement</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-131" class="node node-c-tutorial clearfix" about="/c-programming/c-if-else-statement" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C if...else Statement" class="rdf-meta element-hidden"></span>

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

<figure><img alt="How if statement works in C programming?" height="196" src="//cdn.programiz.com/sites/tutorial2program/files/working-c-if-statement.jpg" title="Working of if statement" width="527">
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CKTc-fvXm4YDFVqn2AUdIMEMfg">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe frameborder="0" src="https://336bf166ba6b9f6001bc829ed1f474b6.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="300" height="250" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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

<figure><img alt="How if...else statement works in C programming?" height="267" src="//cdn.programiz.com/sites/tutorial2program/files/how-if-else-works-c-programming.jpg" title="Working of if...else statement" width="547">
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#if-statement">if Statement</a></li>
<li><a href="#if-else-statement">if...else Statement</a></li>
<li><a href="#if-else-ladder">if...else Ladder</a></li>
<li><a href="#nested-if-else">Nested if...else</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- for section  -->
          <section id="forLoop">
            <div class="editor-contents">
              <h1>C for Loop</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-146" class="node node-c-tutorial clearfix" about="/c-programming/c-for-loop" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C for Loop" class="rdf-meta element-hidden"></span>

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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CJGGu4fYm4YDFQ2m2AUdKdID6g">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" name="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" data-google-container-id="1" style="border: 0px; vertical-align: bottom;"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>To learn more about test expression (when the test expression is evaluated to true and false), check out <a href="/c-programming/c-operators#relational" title="C Relational operators">relational</a> and <a href="/c-programming/c-operators#logical" title="C logical operators">logical operators</a>.</p>

<hr>
<h3 id="for-flowchart">for loop Flowchart</h3>

<figure><img alt="Flowchart of for loop in C programming" class="figure" height="477" src="//cdn.programiz.com/sites/tutorial2program/files/c-for-loop.jpg" title="for loop Flowchart" width="340">
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#for-loop">C for loop</a></li>
<li><a href="#for-loop-working">How for loop works?</a></li>
<li><a href="#example-for-loop">for Loop Examples</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- whileDoWhile section  -->
          <section id="whileDoWhileLoop">
            <div class="editor-contents">
              <h1>C while and do...while Loop</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-145" class="node node-c-tutorial clearfix" about="/c-programming/c-do-while-loops" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C while and do...while Loop" class="rdf-meta element-hidden"></span>

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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CLrIwJHYm4YDFY-m2AUdZGAKQA">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe frameborder="0" src="https://a279399afa6675d48a89a045069a4e59.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="300" height="250" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>To learn more about test expressions (when&nbsp;<code>testExpression</code> is evaluated to <strong>true</strong> and <strong>false</strong>), check out <a href="/c-programming/c-operators#relational" title="C Relational operators">relational</a> and <a href="/c-programming/c-operators#logical" title="C logical operators">logical operators</a>.</p>

<hr>
<h3 id="flowchart-while">Flowchart of while loop</h3>

<figure><img alt="flowchart of while loop in C programming" height="326" src="//cdn.programiz.com/sites/tutorial2program/files/c-while-loop_0.jpg" title="while loop flowchart" width="320">
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<figure><img alt="do while loop flowchart in C programming" height="272" src="//cdn.programiz.com/sites/tutorial2program/files/c-do-while-loop_0.jpg" title="do while loop flowchart" width="260">
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#while-loop">while Loop</a></li>
<li><a href="#example-while">Example: while Loop</a></li>
<li><a href="#do-while-loop">do...while Loop</a></li>
<li><a href="#example-do-while">Example: do...while Loop</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- breake anc continue section  -->
          <section id="breakContinue">
            <div class="editor-contents">
              <h1>C break and continue</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-144" class="node node-c-tutorial clearfix" about="/c-programming/c-break-continue-statement" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C break and continue" class="rdf-meta element-hidden"></span>

<div class="content">
<h2 id="break">C break</h2>

<p>The break statement ends the loop immediately when it is encountered. Its syntax is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">break</span>;</code></pre>

<p>The break statement is almost always used with <code>if...else</code> statement inside the loop.</p>

<hr>
<h3>How break statement works?</h3>

<figure><img alt="Working of break statement" height="354" src="//cdn.programiz.com/sites/tutorial2program/files/c-break-statement-works.jpg" width="560">
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CIPl56jYm4YDFWYAtwAdtAUGSg">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe frameborder="0" src="https://d35495206a4b63da6da4288eff3c6ed7.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="300" height="250" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>In C, <code>break</code> is also used with the <code>switch</code> statement. This will be discussed in the next tutorial.</p>

<hr>
<h2 id="continue">C continue</h2>

<p>The <code>continue</code> statement skips the current iteration of the loop and continues with the next iteration. Its syntax is:</p>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-keyword">continue</span>;</code></pre>

<p>The <code>continue</code> statement is almost always used with the <code>if...else</code> statement.</p>

<hr>
<h3>How continue statement works?</h3>

<figure><img alt="Working of continue statement in C programming" height="339" src="//cdn.programiz.com/sites/tutorial2program/files/c-continue-statement-works.jpg" width="500">
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#break">break statement</a>
<ul>
<li><a href="#break-example">Example: C break</a></li>
</ul>
</li>
<li><a href="#continue">continue statement</a>
<ul>
<li><a href="#example-continue">Example: C continue</a></li>
</ul>
</li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- switch section  -->
          <section id="switch">
            <div class="editor-contents">
              <h1>C switch Statement</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-143" class="node node-c-tutorial clearfix" about="/c-programming/c-switch-case-statement" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C switch Statement" class="rdf-meta element-hidden"></span>

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

<figure><img alt="Flowchart of switch statement" height="662" src="//cdn.programiz.com/sites/tutorial2program/files/flowchart-switch-statement.jpg" title="switch Statement Flowchart" width="460">
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CODbsrTYm4YDFSOe2AUdPt8Gbw">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" name="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" width="1" height="1" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" data-google-container-id="1" style="border: 0px; vertical-align: bottom; width: 300px; height: 250px;"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#switch-syntax">Syntax of switch</a></li>
<li><a href="#switch-flowchart">switch Statement Flowchart</a></li>
<li><a href="#example-switch">Example: Simple Calculator</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- goto section  -->
          <section id="goto">
            <div class="editor-contents">
              <h1>C goto Statement</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-142" class="node node-c-tutorial clearfix" about="/c-programming/c-goto-statement" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C goto Statement" class="rdf-meta element-hidden"></span>

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

<figure><img alt="How goto statement works?" height="201" src="//cdn.programiz.com/sites/tutorial2program/files/c-goto-statement.jpg" title="goto Statement" width="300">
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CISS4MPYm4YDFbih2AUdXioFfg">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" name="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" data-google-container-id="1" style="border: 0px; vertical-align: bottom;"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#syntax-goto">Syntax of goto</a></li>
<li><a href="#example-goto">Example: goto statement</a></li>
<li><a href="#avoid-goto-reasons">Reasons to avoid goto</a></li>
<li><a href="#use-goto?">Should you use goto statement?</a></li>
</ul>
</div></div></div>                          </div>
          </section>

          <!-- funciton section  -->
          <section id="funciton">
            <div class="editor-contents">
              <h1>C Functions</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-141" class="node node-c-tutorial clearfix" about="/c-programming/c-functions" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Functions" class="rdf-meta element-hidden"></span>

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
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; width: 300px; height: 0px;"></div></div><div class="adSpinner ad-slot__label"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>And, the compiler starts executing the codes inside <code>functionName()</code>.</p>

<p>The control of the program jumps back to the <code>main()</code> function&nbsp;once code&nbsp;inside the function definition is executed.</p>

<figure><img alt="How function works in C programming?" height="622" src="//cdn.programiz.com/sites/tutorial2program/files/function-c-programming.jpg" width="700">
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#function">What is a function?</a></li>
<li><a href="#standard-library-function">Standard library function</a></li>
<li><a href="#user-defined-function">User-defined function</a></li>
<li><a href="#working-function">How user-defined function work?</a></li>
<li><a href="#function-advantages">Advantages of function</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- userDefinedFunction section  -->
          <section id="userDefinedFunction">
            <div class="editor-contents">
              <h1>C User-defined functions</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-140" class="node node-c-tutorial clearfix" about="/c-programming/c-user-defined-functions" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C User-defined functions" class="rdf-meta element-hidden"></span>

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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CM21kejZm4YDFTCe2AUdnFcLxg">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe frameborder="0" src="https://940f5ca3641ef952f7ccc8afbdbd78cf.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="300" height="250" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p>In programming, argument refers to the variable passed to the function. In the above example, two variables <var>n1</var> and <var>n2</var> are passed during the function call.</p>

<p>The parameters <var>a</var> and <var>b</var> accepts the passed arguments in the function definition. These arguments are called formal parameters of the function.</p>

<figure><img alt="Passing arguments to a function" height="525" src="//cdn.programiz.com/sites/tutorial2program/files/pass-arguments-c-programming.jpg" title="Passing arguments to a function" width="650">
<figcaption>Passing Argument to Function</figcaption></figure>

<p>The type of arguments passed to a function and the formal parameters must match, otherwise, the compiler will throw an error.</p>

<p>If <var>n1</var> is of char type, <var>a</var> also should be of char type. If <var>n2</var> is of float type, variable <var>b</var> also should be of float type.</p>

<p>A function can also be called without passing an argument.</p>

<hr>
<h2 id="return-statement">Return Statement</h2>

<p>The return statement terminates the execution of a function and returns a value to the calling function. The program control is transferred to the calling function after the return statement.</p>

<p>In the above example, the value of the <var>result</var> variable is returned to the main function. The <var>sum</var> variable in the <code>main()</code> function is assigned this value.</p>

<figure><img alt="Return statement of a function" height="544" src="//cdn.programiz.com/sites/tutorial2program/files/c-return-statement.jpg" title="Return statement of a function" width="650">
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#user-defined-function">User-defined Function</a></li>
<li><a href="#example-function">Example: User-defined-function</a></li>
<li><a href="#function-prototype">Function prototype</a></li>
<li><a href="#function-call">Function call</a></li>
<li><a href="#function-definition">Function definition</a></li>
<li><a href="#passing-arguments">Passing arguments to a function</a></li>
<li><a href="#return-statement">Return statement</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- typeOfFunction section  -->
          <section id="typeOfFunction">
            <div class="editor-contents">
              <h1>Types of User-defined Functions in C Programming</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-139" class="node node-c-tutorial clearfix" about="/c-programming/types-user-defined-functions" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Types of User-defined Functions in C Programming" class="rdf-meta element-hidden"></span>

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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CMPjzPLZm4YDFc6c2AUdi6kGQw">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe frameborder="0" src="https://e677e0599449bfcb204eeb61cc11b909.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="300" height="250" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#no-arg-no-return">Function with no arguments and no return value</a></li>
<li><a href="#no-arg-yes-return">Function with no arguments and a return value</a></li>
<li><a href="#yes-arg-no-return">Function with arguments and no return value</a></li>
<li><a href="#yes-arg-yes-return">Function with arguments and a return value</a></li>
<li><a href="#better-approach">Which approach is better?</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- recursion section  -->
          <section id="recursion">
            <div class="editor-contents">
              <h1>C Recursion </h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-137" class="node node-c-tutorial clearfix" about="/c-programming/c-recursion" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Recursion " class="rdf-meta element-hidden"></span>

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

<figure><img alt="How recursion works in C programming?" height="420" src="//cdn.programiz.com/sites/tutorial2program/files/how-recursion-works-c_0.jpg" width="500">
<figcaption>Working of Recursion</figcaption></figure>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CL2Knv7Zm4YDFT-k2AUdYFULeQ">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe frameborder="0" src="https://9049f5f9bf75f86a37d32407770e627a.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="300" height="250" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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

<figure><img alt="Calculation of sum of natural number using recursion" height="756" src="//cdn.programiz.com/sites/tutorial2program/files/recursion-natural-numbers.png" width="360">
<figcaption>Sum of Natural Numbers</figcaption></figure>

<hr>
<h3 id="advantages-disadvantages">Advantages and Disadvantages of Recursion</h3>

<p>Recursion makes program elegant. However, if performance is vital, use loops instead as recursion is usually much slower.</p>

<p>That being said, recursion is an important concept. It is frequently used in <a href="/dsa" title="Data Structure and Algorithms">data structure and algorithms</a>. For example, it is common to use recursion in problems such as tree traversal.</p>
</div>



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#recursion">Recursion (Introduction)</a></li>
<li><a href="#recursion-working">How recursion works?</a></li>
<li><a href="#example">Example: Sum of Natural Numbers</a></li>
<li><a href="#advantages-disadvantages">Advantages and Disadvantages</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- storageClass section  -->
          <section id="storageClass">
            <div class="editor-contents">
              <h1>C Storage Class</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-138" class="node node-c-tutorial clearfix" about="/c-programming/c-storage-class" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Storage Class" class="rdf-meta element-hidden"></span>

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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CIvrrYjam4YDFV6i2AUd_eEN_g">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe frameborder="0" src="https://9363f12149f639438a3bfb3b56013a00.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="300" height="250" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
</a>
</div></div>

<p><b>Output</b></p>

<pre><samp>6 11</samp></pre>

<p>During the first function call, the value of <var>c</var> is initialized to 1. Its value is increased by 5. Now, the value of <var>c</var> is 6, which is printed on the screen.</p>

<p>During the second function call, <var>c</var> is not initialized to 1 again. It's because <var>c</var> is a static variable. The value <var>c</var> is increased by 5. Now, its value will be 11, which is printed on the screen.</p>
</div>



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#local">Local variable</a></li>
<li><a href="#global">Global variable</a></li>
<li><a href="#register">Register variable (not used anymore)</a></li>
<li><a href="#static">Static variable</a></li>
</ul>
</div></div></div>                          </div>
          </section>

          <!-- pointer section  -->
          <section id="pointer">
            <div class="editor-contents">
              <h1>C Pointers</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-134" class="node node-c-tutorial clearfix" about="/c-programming/c-pointers" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Pointers" class="rdf-meta element-hidden"></span>

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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="COretKbbm4YDFcYUtwAdAr8GUg">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" name="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" data-google-container-id="1" style="border: 0px; vertical-align: bottom;"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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
<figure><img alt="A pointer variable and a normal variable is created." height="103" src="//cdn.programiz.com/sites/tutorial2program/files/pointer-1.jpg" width="120"></figure><br>
Here, a pointer <var>pc</var> and a normal variable <var>c</var>, both of type <code>int</code>, is created.<br>
Since <var>pc</var> and <var>c</var> are not initialized at initially, pointer <var>pc</var> points to either no address or a random address. And, variable <var>c</var> has an address but contains random garbage value.<br>
&nbsp;</li>
<li><code>c = 22;</code><br>
<figure><img alt="22 is assigned to variable c." height="97" src="//cdn.programiz.com/sites/tutorial2program/files/pointer-2.jpg" width="120"></figure><br>
This assigns 22 to the variable <var>c</var>. That is, 22 is stored in the memory location of variable <var>c</var>.<br>
&nbsp;</li>
<li><code>pc = &amp;c;</code><br>
<figure><img alt="Address of variable c is assigned to pointer pc." height="97" src="//cdn.programiz.com/sites/tutorial2program/files/pointer-3.jpg" width="120"></figure><br>
This assigns the address of variable <var>c</var> to the pointer <var>pc</var>.<br>
&nbsp;</li>
<li><code>c = 11;</code><br>
<figure><img alt="11 is assigned to variable c." height="102" src="//cdn.programiz.com/sites/tutorial2program/files/pointer-4.jpg" width="121"></figure><br>
This assigns 11 to variable <var>c</var>.<br>
&nbsp;</li>
<li><code>*pc = 2;</code><br>
<figure><img alt="5 is assigned to pointer variable's address." height="100" src="//cdn.programiz.com/sites/tutorial2program/files/pointer-5.jpg" width="119"></figure><br>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">What is a pointer?</a></li>
<li><a href="#address">Address in C</a></li>
<li><a href="#pointer">C Pointers</a></li>
<li><a href="#assign-values">Assigning addresses to Pointers</a></li>
<li><a href="#changing-values">Changing Value Pointed by Pointers</a></li>
<li><a href="#example">Example: Working of Pointers</a></li>
<li><a href="#common-mistakes">Common Mistakes</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- relationBwArrayPointer section  -->
          <section id="relationBwArrayPointer">
            <div class="editor-contents">
              <h1>Relationship Between Arrays and Pointers</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-133" class="node node-c-tutorial clearfix" about="/c-programming/c-pointers-arrays" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Relationship Between Arrays and Pointers" class="rdf-meta element-hidden"></span>

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

<figure><img alt="Relation between arrays and pointers" height="73" src="//cdn.programiz.com/sites/tutorial2program/files/array-pointers.jpg" title="Arrays as Pointers" width="263">
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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="COTMjcDbm4YDFTyj2AUdaooNeQ">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" name="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" data-google-container-id="1" style="border: 0px; vertical-align: bottom;"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#relationship">Relationship Between Arrays and Pointers</a></li>
<li><a href="#example-1">Example 1: Arrays and pointers</a></li>
<li><a href="#example-2">Example 2: Arrays and pointers</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- addressPointersection  -->
          <section id="addressPointer">
            <div class="editor-contents">
              <h1>C Pass Addresses and Pointers</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-156" class="node node-c-tutorial clearfix" about="/c-programming/c-pointer-functions" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Pass Addresses and Pointers" class="rdf-meta element-hidden"></span>

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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
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

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CJmohs3bm4YDFWqR2AUdI2wHJw">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" name="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" width="1" height="1" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" data-google-container-id="1" style="border: 0px; vertical-align: bottom; width: 300px; height: 250px;"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
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
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
</a>
</div></div>

<p>Here, the value stored at <var>p</var>, <code>*p</code>, is 10 initially.</p>

<p>We then passed the pointer <var>p</var> to the <code>addOne()</code> function. The <var>ptr</var> pointer gets this address in the <code>addOne()</code> function.</p>

<p>Inside the function, we increased the value stored at <var>ptr</var> by 1 using <code>(*ptr)++;</code>. Since <var>ptr</var> and <var>p</var> pointers both have the same address, <code>*p</code> inside <code>main()</code> is also 11.</p>
</div>



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#example-1">Example: Pass Addresses to Functions</a></li>
<li><a href="#example-2">Example: Pass&nbsp;Pointers&nbsp;to Functions</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- dynamicMemory section  -->
          <section id="dynamicMemory">
            <div class="editor-contents">
              <h1>C Dynamic Memory Allocation</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-155" class="node node-c-tutorial clearfix" about="/c-programming/c-dynamic-memory-allocation" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Dynamic Memory Allocation" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="why">As you know, an array is a collection of a fixed number of values. Once the size of an array is declared, you cannot change it.</p>

<p>Sometimes the size of the array you declared may be insufficient. To solve this issue, you can allocate memory manually during run-time. This is known as dynamic memory allocation in C programming.</p>

<p>To allocate memory dynamically, library functions are <code>malloc()</code>, <code>calloc()</code>, <code>realloc()</code> and <code>free()</code> are used. These functions are defined in the <code>&lt;stdlib.h&gt;</code> header file.</p>

<hr>
<h2 id="malloc">C malloc()</h2>

<p>The name "malloc" stands for memory allocation.</p>

<p>The <code>malloc()</code> function reserves a block of memory of the specified number of bytes. And, it returns a <a href="/c-programming/c-pointers" title="C Pointers">pointer</a> of <code>void</code> which can be casted into pointers of any form.</p>

<hr>
<h3>Syntax of malloc()</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp">ptr = (castType*) <span class="hljs-built_in">malloc</span>(size);</code></pre>

<p></p><div id="block-inject-1" class="block-inject block-inject-1">



<style>
#div-gpt-ad-Programizcom37046 {display:none; width: 728px; height: 90px; }
#div-gpt-ad-Programizcom36796 {display: block;}
@media(min-width: 992px) { #div-gpt-ad-Programizcom37046 {display: block;} #div-gpt-ad-Programizcom36796 {display: none;}}
</style>

<div id="div-gpt-ad-Programizcom37046" style="margin: 32px 0;">
</div>

<div class="pgAdWrapper" style="min-width: 336px; min-height: 280px; display: flex; justify-content: center; align-items: center;"><div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;" data-google-query-id="CJ6GjN7bm4YDFbei2AUdP_YLig">
<div id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" name="google_ads_iframe_/8095840,68410703/.2_A.36796.4_Programiz.com_tier1_0" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" data-google-container-id="1" style="border: 0px; vertical-align: bottom;"></iframe></div></div><div class="adSpinner ad-slot__label" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g class="az_logo_group"><g><g><g><g><g class="letter letter__1"><path fill="#979797" d="M136.3,652.2v53.5c0,7.9-5.7,13.7-13.7,13.7c-5.5,0-13.1-5.7-13.1-13.7c-11.7,9.8-24.8,13.7-40.4,13.7C30.6,719.3,0,690.7,0,652.2s30.6-69.1,69.1-69.1S136.3,613.7,136.3,652.2z M109.5,652.2c0-22.9-17.5-42.3-40.4-42.3s-42.3,19.4-42.3,42.3s19.4,40.4,42.3,40.4C92,692.5,109.5,675,109.5,652.2z"></path></g><g class="letter letter__2"><path fill="#979797" d="M264.6,705.9c0,7.4-6,13.7-13.4,13.7h-84.9c-5.2,0-10.1-3-12.3-7.6c-2.5-4.9-1.9-10.4,1.4-14.5l68.3-87.9h-57.9c-7.4,0-13.4-6.3-13.4-13.7s6-13.4,13.4-13.4h84.9c5.2,0,10.1,2.7,12.3,7.6c2.5,4.6,1.9,10.1-1.4,14.2l-68.3,88.2h57.9C258.6,692.5,264.6,698.5,264.6,705.9z"></path></g><g class="letter letter__3"><path fill="#979797" d="M408.2,651c0,7.4-6,13.4-13.7,13.4h-94.2c5.7,16.4,21,28.1,39.3,28.1c6.3,0,17.5-0.5,30.6-9c6.3-4.1,14.7-0.3,18,6.3c3.3,6.8-0.3,13.9-6.6,18c-18,12-31.9,11.7-42.1,11.7c-38,0-68.5-30.9-68.5-68.5c0-38,30.6-68.5,68.5-68.5C372.7,582.5,408.2,606.5,408.2,651z M300.4,637.3h78.9c-5.7-19.1-23.2-27.9-39.6-27.9C321.4,609.5,306.1,621.2,300.4,637.3z"></path></g><g class="letter letter__4"><path fill="#979797" d="M506.5,596.2c0,7.4-6,13.7-13.7,13.7c-22.9,0-41.5,18.6-41.5,41.5v54.9c0,7.4-6,13.7-13.4,13.7c-7.6,0-13.7-6.3-13.7-13.7v-54.9c0-38,30.9-68.5,68.5-68.5C500.5,582.8,506.5,588.8,506.5,596.2z"></path></g><g class="letter letter__5"><path fill="#979797" d="M522.6,706.2v-110c0-7.4,6-13.4,13.7-13.4c7.4,0,13.4,6,13.4,13.4v110c0,7.6-6,13.7-13.4,13.7C528.6,719.8,522.6,713.8,522.6,706.2z"></path><path fill="#979797" d="M526.7,563.3c-2.5-2.5-4.1-6-4.1-9.6c0-3.5,1.6-7.1,4.1-9.6s6-4.1,9.6-4.1s7.1,1.6,9.6,4.1s3.8,6,3.8,9.6  c0,3.5-1.4,7.1-3.8,9.6c-2.5,2.5-6,3.8-9.6,3.8S529.2,565.8,526.7,563.3z"></path></g><g class="letter letter__6"><path fill="#979797" d="M565.8,651c0-38,30.9-68.5,68.5-68.5c38,0,68.5,30.6,68.5,68.5c0,37.7-30.6,68.5-68.5,68.5C596.6,719.5,565.8,688.8,565.8,651z M592.8,651c0,22.7,18.6,41.5,41.5,41.5s41.5-18.8,41.5-41.5c0-22.9-18.6-41.5-41.5-41.5C611.4,609.5,592.8,628.2,592.8,651z"></path></g><g class="letter letter__7"><path fill="#979797" d="M856,651v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-22.9-18.6-41.5-41.5-41.5s-41.5,18.6-41.5,41.5v54.9c0,7.6-6,13.7-13.7,13.7c-7.4,0-13.4-6-13.4-13.7V651c0-38,30.9-68.5,68.5-68.5C825.2,582.5,856,613,856,651z"></path></g></g></g></g></g><g class="az__logo"><path fill="#979797" d="M607.4,302c0.7,0.9,1.2,1.5,1.6,2.1c8.1,12.3,13.2,25.8,14.5,40.5c1.1,12.7-0.8,25.1-5.7,36.9c-9.3,22.6-25.2,39.3-46.8,50.5c-16.7,8.7-34.5,12.3-53.2,11.1c-21.8-1.3-41.2-8.8-58.1-22.8c-1.5-1.2-2.9-2.5-4.3-3.9c-25.1-25.8-41.5-56.4-48.7-91.7c-2.5-12.3-3.6-24.6-3.6-37.1c0-17.1,0-34.2,0-51.3c0-10.5-1.8-20.7-5.8-30.5c-10.2-25.3-33-43.7-59.8-48.1c-43.8-7.2-81.7,21.4-90.4,60.9c-1.5,6.8-2,13.7-1.6,20.6c0.1,1.8,0.2,3.6,0.2,5.4c-0.9,0.4-1.1-0.2-1.4-0.6c-3.8-5.5-7.2-11.2-10.3-17.2c-7.7-15-12.7-30.9-15.1-47.7c-4.2-30.7,1.3-59.6,16.8-86.4c19.2-33.4,47.5-56,83.6-69c11.1-4,22.6-6.7,34.3-8c12.9-1.5,25.8-1.4,38.6,0.3c15.6,2.1,30.6,6.3,44.8,13.1c3.1,1.5,6.1,3.1,9,4.8c54.5,32.9,93.7,87.4,107.7,149.5c3,13.4,4.9,27,5.5,40.7c0.2,5.1,0.4,10.2,0.4,15.3c0.1,15.9,0.2,31.7,0.3,47.6c0,2.6,0.2,5.3,0.8,7.7c2.7,10.1,9.2,16.6,19.4,18.8c10.1,2.1,18.5-1.1,25.2-8.9c0.3-0.3,0.5-0.7,0.8-1.1C606.5,303.1,606.8,302.8,607.4,302z"></path><path fill="#979797" d="M365.6,4.1c-1,0.1-2,0.2-3,0.2c-8.3,0.2-16.5,0.9-24.7,2.2c-23,3.8-44.3,12-63.8,24.8c-22.5,14.7-40.7,33.5-53.9,56.9c-9,15.9-14.8,33-17.5,51.1c-2,13.2-2.3,26.4-0.7,39.6c4.6,37.7,20.6,69.8,46.9,97c10.2,10.5,21.6,19.3,34.1,26.9c10.7,6.5,22.3,10.4,34.9,11.3c20.9,1.5,39.6-4.3,56-17.4c3.4-2.7,6.6-5.5,9.9-8.3c0.6-0.5,1.2-0.9,1.8-1.3c0.8,0.5,0.6,1.1,0.6,1.6c0,3.7,0.1,7.5,0,11.2c-0.1,6.6,0.7,13.1,1.7,19.6c3.1,19.9,9.1,39,18,57.1c9.7,19.8,22.4,37.5,38,53.1c1.7,1.8,3.5,3.5,5.2,5.3c-8.2,7.3-40.8,22-61.5,27.7c-34.6,9.6-69.6,11.3-105,5.1c-36.7-6.5-70-20.9-99.7-43.3C90.9,355.7,63.6,234,111,134.6C135.2,84,173,46.7,223.5,22.4C271.8-0.8,324.4-4.2,365.6,4.1z"></path><path fill="#979797" d="M505.4,452c2.7,0.5,5.3,1,7.8,1.4c18.7,3.1,37.1,1.5,54.9-4.9c28.3-10.2,49.6-28.7,63.4-55.5c6.9-13.3,10.2-27.6,10.3-42.5c0.1-15-3.3-29.2-9.6-42.7c-6.4-13.5-15.3-25.1-26.2-35.2c-11.9-10.9-19.6-24.2-23.2-39.9c-9.6-41.7,15.3-82.2,55.4-93.4c27.6-7.7,56.9,0.2,76.8,20.3c25.8,26.1,42.4,57,49.7,93c2.3,11.4,3.6,22.8,3.4,34.4c-0.1,6.3,0,12.7-0.6,19c-1.5,15.2-4.7,30-9.9,44.3c-21,57.7-69.3,101.2-128.7,115.7c-18.1,4.4-36.4,6-55,4.8c-23-1.4-44.9-7.1-65.7-16.9C507.2,453.5,506,453.3,505.4,452z"></path></g></g></svg></div></div>
</div><div class="clearfix"></div><p><strong>Example</strong></p>

<pre style="max-height: 600px;"><code class="c hljs cpp">ptr = (<span class="hljs-keyword">float</span>*) <span class="hljs-built_in">malloc</span>(<span class="hljs-number">100</span> * <span class="hljs-keyword">sizeof</span>(<span class="hljs-keyword">float</span>));</code></pre>

<p>The above statement allocates 400 bytes of memory. It's because the size of <code>float</code> is 4 bytes. And, the pointer <var>ptr</var> holds the address of the first byte in the allocated memory.</p>

<p>The expression results in a <code>NULL</code> pointer if the memory cannot be allocated.</p>

<hr>
<h2 id="calloc">C calloc()</h2>

<p>The name "calloc" stands for contiguous allocation.</p>

<p>The <code>malloc()</code> function allocates memory and leaves the memory uninitialized, whereas the <code>calloc()</code> function allocates memory and initializes all bits to zero.</p>

<hr>
<h3>Syntax of calloc()</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp">ptr = (castType*)<span class="hljs-built_in">calloc</span>(n, size);</code></pre>

<p><strong>Example:</strong></p>

<pre style="max-height: 600px;"><code class="c hljs cpp">ptr = (<span class="hljs-keyword">float</span>*) <span class="hljs-built_in">calloc</span>(<span class="hljs-number">25</span>, <span class="hljs-keyword">sizeof</span>(<span class="hljs-keyword">float</span>));</code></pre>

<p>The above statement allocates contiguous space in memory for 25 elements of type <code>float</code>.</p>

<hr>
<h2 id="free">C free()</h2>

<p>Dynamically allocated memory created with either <code>calloc()</code> or <code>malloc()</code> doesn't get freed on their own. You must explicitly use <code>free()</code> to release the space.</p>

<hr>
<h3>Syntax of free()</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-built_in">free</span>(ptr);</code></pre>

<p>This statement frees the space allocated in the memory pointed by <code>ptr</code>.</p>

<hr>
<h3 id="example-1">Example 1: malloc() and free()</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to calculate the sum of n numbers entered by the user</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdlib.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> n, i, *ptr, sum = <span class="hljs-number">0</span>;

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter number of elements: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;n);

ptr = (<span class="hljs-keyword">int</span>*) <span class="hljs-built_in">malloc</span>(n * <span class="hljs-keyword">sizeof</span>(<span class="hljs-keyword">int</span>));

<span class="hljs-comment">// if memory cannot be allocated</span>
<span class="hljs-keyword">if</span>(ptr == <span class="hljs-literal">NULL</span>) {
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Error! memory not allocated."</span>);
<span class="hljs-built_in">exit</span>(<span class="hljs-number">0</span>);
}

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter elements: "</span>);
<span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; n; ++i) {
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, ptr + i);
sum += *(ptr + i);
}

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Sum = %d"</span>, sum);

<span class="hljs-comment">// deallocating the memory</span>
<span class="hljs-built_in">free</span>(ptr);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code>
</pre></div></div><div class="code-editor__action">
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
</a>
</div></div>

<p><strong>Output</strong></p>

<pre style="max-height: 600px;"><code class="c hljs cpp">Enter number of elements: <span class="hljs-number">3</span>
Enter elements: <span class="hljs-number">100</span>
<span class="hljs-number">20</span>
<span class="hljs-number">36</span>
Sum = <span class="hljs-number">156</span></code></pre>

<p>Here, we have dynamically allocated the memory for <var>n</var> number of <code>int</code>.</p>

<hr>
<h3 id="example-2">Example 2: calloc() and free()</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-comment">// Program to calculate the sum of n numbers entered by the user</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdlib.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> n, i, *ptr, sum = <span class="hljs-number">0</span>;
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter number of elements: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;n);

ptr = (<span class="hljs-keyword">int</span>*) <span class="hljs-built_in">calloc</span>(n, <span class="hljs-keyword">sizeof</span>(<span class="hljs-keyword">int</span>));
<span class="hljs-keyword">if</span>(ptr == <span class="hljs-literal">NULL</span>) {
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Error! memory not allocated."</span>);
<span class="hljs-built_in">exit</span>(<span class="hljs-number">0</span>);
}

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter elements: "</span>);
<span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; n; ++i) {
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, ptr + i);
sum += *(ptr + i);
}

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Sum = %d"</span>, sum);
<span class="hljs-built_in">free</span>(ptr);
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}
</code></pre></div></div><div class="code-editor__action">
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
</a>
</div></div>

<p><strong>Output</strong></p>

<pre style="max-height: 600px;"><code class="c hljs cpp">Enter number of elements: <span class="hljs-number">3</span>
Enter elements: <span class="hljs-number">100</span>
<span class="hljs-number">20</span>
<span class="hljs-number">36</span>
Sum = <span class="hljs-number">156</span></code></pre>

<hr>
<h2 id="realloc">C realloc()</h2>

<p>If the dynamically allocated memory is insufficient or more than required, you can change the size of previously allocated memory using the <code>realloc()</code> function.</p>

<hr>
<h3>Syntax of realloc()</h3>

<pre style="max-height: 600px;"><code class="c hljs cpp">ptr = <span class="hljs-built_in">realloc</span>(ptr, x);</code></pre>

<p>Here, <var>ptr</var> is reallocated with a new size <var>x</var>.</p>

<hr>
<h3 id="example-3">Example 3: realloc()</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="c-exec" style="max-height: 600px;"><code class="c hljs cpp"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdlib.h&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> *ptr, i , n1, n2;
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Enter size: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;n1);

ptr = (<span class="hljs-keyword">int</span>*) <span class="hljs-built_in">malloc</span>(n1 * <span class="hljs-keyword">sizeof</span>(<span class="hljs-keyword">int</span>));

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Addresses of previously allocated memory:\n"</span>);
<span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; n1; ++i)
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%pc\n"</span>,ptr + i);

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"\nEnter the new size: "</span>);
<span class="hljs-built_in">scanf</span>(<span class="hljs-string">"%d"</span>, &amp;n2);

<span class="hljs-comment">// rellocating the memory</span>
ptr = <span class="hljs-built_in">realloc</span>(ptr, n2 * <span class="hljs-keyword">sizeof</span>(<span class="hljs-keyword">int</span>));

<span class="hljs-built_in">printf</span>(<span class="hljs-string">"Addresses of newly allocated memory:\n"</span>);
<span class="hljs-keyword">for</span>(i = <span class="hljs-number">0</span>; i &lt; n2; ++i)
<span class="hljs-built_in">printf</span>(<span class="hljs-string">"%pc\n"</span>, ptr + i);

<span class="hljs-built_in">free</span>(ptr);

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
<a href="/c-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
Run Code <svg class="programiz-icon programiz-icon--small ml-2x"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevrons-right"></use></svg>
</a>
</div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter size: 2
Addresses of previously allocated memory:
26855472
26855476

Enter the new size: 4
Addresses of newly allocated memory:
26855472
26855476
26855480
26855484</samp></pre>
</div>



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#why">Why dynamic memory allocation?</a></li>
<li><a href="#malloc">malloc()</a></li>
<li><a href="#calloc">calloc()</a></li>
<li><a href="#free">free()</a></li>
<li><a href="#example-1">Example: malloc() and free()</a></li>
<li><a href="#example-2">Example: calloc() and free()</a></li>
<li><a href="#realloc">realloc()</a></li>
<li><a href="#example-3">Example: realloc()</a></li>
</ul>
</div></div></div>                          </div>
          </section>
          
          
          <!-- arrayPointerExample section  -->
          <section id="arrayPointerExample">
            <div class="editor-contents">
              <h1>C Array and Pointer Examples</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-169" class="node node-c-tutorial clearfix" about="/c-programming/c-pointer-examples" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="C Array and Pointer Examples" class="rdf-meta element-hidden"></span>

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



</div>

  
          </div>
          </section>
        </div>
      </div>
    </div>
  </div>

  <script src="js/cl.js"></script>
</body>

</html>