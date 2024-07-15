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
    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <title>Java Tutorial</title>
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/java.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 left_side p-0" style="height: 100vh; overflow-y: scroll;">
                <h4 class="py-3 text-center"><i class="fa-brands fa-java"></i>Java Tutorial</h4>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Java Introduction
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="list-group">
                          <a href="#getstart" class="list-group-item list-group-item-action">Get Start</a>
                          <a href="#first-program" class="list-group-item list-group-item-action">First Program</a>
                          <a href="#comment" class="list-group-item list-group-item-action">C Comments</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Java Fundamentals
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body"> 
                        <div class="list-group">  
                          <a href="#variable" class="list-group-item list-group-item-action">Java Variable and Literals</a>
                          <a href="#data-type" class="list-group-item list-group-item-action">Java Data Type(Primitive)</a>
                          <a href="#operator" class="list-group-item list-group-item-action">Java Operators</a>
                          <a href="#input-output" class="list-group-item list-group-item-action">Java Basic Input and Output</a>
                          <a href="#expression" class="list-group-item list-group-item-action">Java Expression, Statements and Blocks</a>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group">
                    <a href="#intro" id="intro-section" class="list-group-item list-group-item-action active"
                        aria-current="true">
                        Java Intro
                    </a>
                    <!-- <a href="#installation" class="list-group-item list-group-item-action">Java Introduction</a> -->
                    <a href="#fundamentals" class="list-group-item list-group-item-action">Java Fundamentals</a>
                    <a href="#flow" class="list-group-item list-group-item-action">Java Flow Control</a>
                    <a href="#arrays" class="list-group-item list-group-item-action">Java Arrays</a>
                    <a href="#oop1" class="list-group-item list-group-item-action">Java OOP(I)</a>
                    <a href="#oop3" class="list-group-item list-group-item-action">Java OOP(II)</a>
                    <!-- <a href="#oop3" class="list-group-item list-group-item-action">Java OOP(III)</a> -->
                    <a href="#exception" class="list-group-item list-group-item-action">Java Exception Handling</a>
                    <a href="#list" class="list-group-item list-group-item-action">Java List</a>
                    <a href="#queue" class="list-group-item list-group-item-action">Java Queue</a>
                    <!-- <a href="#map" class="list-group-item list-group-item-action">Java Map</a> -->
                    <!-- <a href="#set" class="list-group-item list-group-item-action">Java Set</a> -->
                    <a href="#stream" class="list-group-item list-group-item-action">Java I/O Streams</a>
                    <a href="#reader" class="list-group-item list-group-item-action">Java Reader/Writer</a>
                    <a href="#topic" class="list-group-item list-group-item-action">Additional Topics</a>

                </div>
            </div>

            <div class="col-sm-9 right_side" style="padding:0px">

                <div class="row">
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
                                        <a class="nav-link active" aria-current="page" href="#">Java</a>
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
                                style="border-radius:50%;">
                            <h5 style="padding:5px; margin-bottom:5px; margin-right:10px;">
                                <?php echo $result['name']?>
                            </h5>
                            <a href="http://localhost/php/projectphp/Logout.php"><button
                                    class="btn btn-outline-primary">Logout</button></a>
                        </div>
                    </nav>
                </div>


                <div class="row p-3">
                    <section id="intro">
                        <h2>Java Introduction</h2>
                        <!-- <ul>
                            <li><a href="#getstart">Getting Started with Java</a></li>
                            <li><a href="#first-program">Your First Java Program</a></li>
                            <li><a href="#comment">Java Comment</a></li>
                        </ul> -->
                        <div class="getstart">

                            <h3> Getting Started with Java</h3>
                            <p> Java is a high level, class based, object oriented programming language that is widely
                                used across various operating systems.</p>
                            <p> To build Java programs, you need to have the Java Development Kit (JDK) installed on
                                your device. However, if you're eager to start immediately, you can use our free online
                                Java compiler that allows you to run Java code directly in your browser without any
                                setup.</p>
                            <p> For those who prefer to use Java on their local machine, this guide will walk you
                                through the installation process on Windows, macOS, and Linux (Ubuntu).</p>
                            <p class="install">
                            <h3>Install Java on Windows</h3>
                            <p>Follow the steps below to install Java on Windows:</p>
                            <ol>
                                <li>Download JDK(Java Development Kit)</li>
                                <li>Run the Installer</li>
                                <li>Configure Environment Variables</li>
                                <li>Verify Installation</li>
                                <li>Here's a detailed explanation of each of the steps.</li>
                            </ol>
                            <h3>Step 1: Download JDK</h3>
                            <p>Go to the official <a
                                    href="https://www.oracle.com/in/java/technologies/downloads/">Oracle website</a> to
                                download the JDK.</p>
                            <img src="images/java-downloading-page-on-window1-1.png">
                            <p>Choose x64 MSI Installer on the windows tab and click on download link.</p>
                            <h3>Step 2: Run the Installer</h3>
                            <p>Now, go to your downloads folder and run the installer you just downloaded. You will be
                                prompted to the screen below.</p>
                            <img src="images/run-jdk-installer-on-windows11.png">
                            <p>Simply click Next to proceed.</p>
                            <h3>Step 3: Configure Environment Variables</h3>
                            <p>After installation, you will need to tell your system where to find Java. This is done by
                                setting environment variables.<br>Locate JDK Path: Navigate through your file explorer
                                to reach the JDK installation directory. Normally, it is located at</p>
                            <div class="interpreter">
                                C:\Program Files\Java\jdk-22\bin
                            </div>
                            <p>Copy this path.</p>
                            <p><strong>Access Environment Variables:</strong> Search environment variable on the
                                terminal. In system properties, click on environment variables. You will be prompted to
                                the screen below.</p>
                            <img src="images/java-setup-environment-variable11.png" height="700px">

                            <h3>Update the Path Variable:</h3>
                            <p>Find the Path variable in the System variables section and click on Edit. Then, click New
                                and paste your JDK bin path (i.e. C:\Program Files\Java\jdk-22\bin).</p>
                            <p>Finally, click Ok to close each window.</p>

                            <h3>Set JAVA_HOME Variable:</h3>
                            <p>Back in the environment variables window, under the system variables section, click New
                                to create a new variable.</p>
                            <p>Now, name the variable JAVA_HOME and set its value to the path of the JDK folder
                                directory (i.e.C:\Program Files\Java\jdk-22).</p>
                            <img src="images/set-java-home11.png">

                            <p>Close all the dialogues with the Ok button.</p>
                            <h3>Step 4: Verify your Installation</h3>
                            <p>After the installation is complete, you can verify whether Java is installed by using the
                                following command in the command prompt.</p>
                            <div class="interpreter">
                                java --version
                            </div>
                            <img src="images/verify-java-installation1-1.png" alt="">
                            <hr>
                            <p>If Java is installed successfully, it will print the version information; otherwise, it
                                will produce an error message indicating that the command is not recognized.</p>
                        </div><br><br>


                        <div id="first-program">
                            <h3>Your First Java Program</h3>
                            <p>In the previous tutorial you learned how to install Java on your computer. Now, let's
                                write a simple Java program.</p>
                            <p>The following program displays Hello, World! on the screen.</p>

                            <div class="interpreter">
                                <p>public class Main {</p>
                                <p> public static void main(String[] args) {</p>
                                <p> System.out.println("Hello, World!");</p>
                                <p> }</p>
                                <p>}</p>
                                <div class="run-btn">
                                    <a href="https://www.programiz.com/java-programming/online-compiler/?ref=5648e038"
                                        target="_blank"><button>Run code >></button></a>
                                </div>
                            </div>
                            <p><b>Output</b></p>
                            <div class="output">
                                Hello,world!
                            </div>
                            <p> Notice the following line of code:</p>
                            <div class="interpreter">
                                System.out.println("Hello, World!");
                            </div>
                            <p>In the above code, the System.out.println() statement prints the text Hello, World! to
                                the screen.</p>

                            <p> Remember these important things about printf:</p>
                            <ol>
                                <li>Everything you want to print should be kept inside parentheses ().</li>
                                <li>The text to be printed is enclosed within double quotes "".</li>
                                <li>Each System.out.println() statement ends with a semicolon ;.</li>
                            </ol>
                            <p>Not following the above rules will result in errors and your code will not run
                                successfully.</p>

                            <h3>Basic Structure of a Java Program</h3>
                            <p>As we have seen from the last example, a Java program requires a lot of lines even for a
                                simple program.</p>
                            <p>For now, just remember every Java program we write will follow this structure.</p>
                            <div class="interpreter">
                                <p>class Main {</p>
                                <p>public static void main(String[] args) {</p>
                                <p>...</p>
                                <p>}</p>
                                <p>}</p>
                            </div>
                            <p>We will write our code in place of ... inside curly braces.</p>

                        </div><br><br>


                        <div id="comment">
                            <h3>Java Comments</h3>
                            <p>In the previous tutorial, you learned to write your first Java program. Now, let's learn
                                about Java comments.</p>
                            <p>Comments are hints that we add to our code, making it easier to read and understand.</p>
                            <p>Comments are completely ignored by Java compilers.</p>
                            <p>For example, </p>

                            <div class="interpreter">
                                <p>class HelloWorld {</p>
                                <p> public static void main(String[] args) {</p>
                                <p> // print Hello World to the screen</p>
                                <p> System.out.println("Hello World");</p>
                                <p> }</p>
                                <p> }</p>
                                <div class="run-btn">
                                    <a href="https://www.programiz.com/java-programming/online-compiler/?ref=eb9c6cad"
                                        target="_blank"><button>run
                                            code >></button></a>
                                </div>
                            </div>
                            <p><b>Output</b></p>
                            <div class="output">
                                Hello World
                            </div>

                            <p>Here, // print Hello World to the screen is a comment in Java programming. The Java
                                compiler ignores everything after the // symbol.</p>

                            <h3> Single-line Comment</h3>
                            <p>In Java, a single-line comment starts and ends in the same line. To write a single-line
                                comment, we can use the // symbol. For example,</p>
                            <div class="interpreter">
                                <p> // declare and initialize two variables</p>
                                <p>int a = 1;</p>
                                <p>int b = 3;</p>

                                <p>// print the output</p>
                                <p>System.out.println("This is output");</p>
                            </div>

                            <p>Here, we have used two single-line comments:</p>
                            <ul>
                                <li>// declare and initialize two variables</li>
                                <li>// print the output</li>
                            </ul>
                            <p>The Java compiler ignores everything from // to the end of line. Hence, it is also known
                                as End of Line comment.</p>

                            <h3>Multi-line Comment</h3>
                            <p>When we want to write comments in multiple lines, we can use the multi-line comment. To
                                write multi-line comments, we can use the /*....*/ symbol. For example,</p>

                            <div class="interpreter">
                                <p> /* This is an example of multi-line comment.</p>
                                <p> * The program prints "Hello, World!" to the standard output.</p>
                                <p> */</p>

                                <p>class HelloWorld {</p>
                                <p> public static void main(String[] args) {</p>

                                <p> System.out.println("Hello, World!");</p>
                                <p> }</p>
                                <p>}</p>
                                <div class="run-btn">
                                    <a href="https://www.programiz.com/java-programming/online-compiler/?ref=172a15a8"
                                        target="_blank"><button>run
                                            code >></button></a>
                                </div>
                            </div>
                            <p><b>Output</b></p>
                            <div class="output">
                                Hello , World!
                            </div>
                            <p>Here, we have used the multi-line comment:</p>

                            <div class="interpreter">
                                <p> /* This is an example of multi-line comment.</p>
                                <p>* The program prints "Hello, World!" to the standard output.</p>
                                <p>*/</p>

                            </div>
                            <p>This type of comment is also known as Traditional Comment. In this type of comment, the
                                Java compiler ignores everything from /* to */.</p>

                            <h3>Why use Comments?</h3>
                            <p>We should use comments for the following reasons:</p>
                            <ul>
                                <li>Comments make our code readable for future reference.</li>
                                <li>Comments are used for debugging purposes.</li>
                                <li>We can use comments for code collaboration as it helps peer developers to understand
                                    our code.</li>
                            </ul>

                        </div>

                    </section>
                </div>
                <section id="fundamentals">
                    <h2>Java Fundamentals</h2>
                    <ul>
                        <li>
                            <a href="#variable">Java Variable and Literals</a>
                        </li>
                        <li>
                            <a href="#data-type">Java Data Type(Primitive)</a>
                        </li>
                        <li>
                            <a href="#operator">Java Operators</a>
                        </li>
                        <li>
                            <a href="#input-output">Java Basic Input and Output</a>
                        </li>
                        <li>
                            <a href="#expression">Java Expression, Statements and Blocks</a>
                        </li>
                    </ul>
                    <div id="variable">
                        <h3>Java Variables and Literals</h3>
                        <p>In the previous tutorial you learnt about Java comments. Now, let's learn about variables and
                            literals in Java.</p>

                        <h3>Java Variables</h3>
                        <p>A variable is a location in memory (storage area) to hold data.</p>
                        <p>To indicate the storage area, each variable should be given a unique name (identifier). Learn
                            more about Java identifiers.</p>

                        <h3>Create Variables in Java</h3>
                        <p>Here's how we create a variable in Java, </p>
                        <div class="interpreter">
                            int speedLimit = 80;
                        </div>
                        <p> Here, speedLimit is a variable of int data type and we have assigned value 80 to it.</p>
                        <p>The int data type suggests that the variable can only hold integers. To learn more, visit
                            Java data types.</p>
                        <p>In the example, we have assigned value to the variable during declaration. However, it's not
                            mandatory.</p>
                        <p>You can declare variables and assign variables separately. For example,</p>
                        <div class="interpreter">
                            int speedLimit;<br>
                            speedLimit = 80;
                        </div>

                        <h3>Change values of variables</h3>
                        <p>The value of a variable can be changed in the program, hence the name variable. For example,
                        </p>
                        <div class="interpreter">
                            int speedLimit = 80;<br>
                            ... .. ...<br>
                            speedLimit = 90;
                        </div>

                        <p>Here, initially, the value of speedLimit is 80. Later, we changed it to 90.</p>
                        <p> However, we cannot change the data type of a variable in Java within the same scope.</p>
                        <h3>What is the variable scope?</h3>
                        <p>Don't worry about it for now. Just remember that we can't do something like this:</p>
                        <div class="interpreter">
                            int speedLimit = 80;<br>
                            ... .. ...<br>
                            float speedLimit;
                        </div>

                        <h3>Java literals</h3>
                        <p>Literals are data used for representing fixed values. They can be used directly in the code.
                            For example,</p>
                        <div class="interpreter">
                            int a = 1;<br>
                            float b = 2.5;<br>
                            char c = 'F';
                        </div>
                        <p> Here, 1, 2.5, and 'F' are literals.</p>
                        <p>There are different types of literals in Java. let's discuss some of the commonly used types
                            in detail.</p>
                    </div>

                    <div id="data-type">
                        <h3>Java Data Types (Primitive)</h3>
                        <h4>Java Data Types</h4>
                        <p>As the name suggests, data types specify the type of data that can be stored inside variables
                            in Java.</p>
                        <p>Java is a statically-typed language. This means that all variables must be declared before
                            they can be used.</p>
                        <div class="interpreter">
                            int speed;
                        </div>
                        <p>Here, speed is a variable, and the data type of the variable is int.</p>
                        <p>The int data type determines that the speed variable can only contain integers.</p>
                        <p>There are 8 data types predefined in Java, known as primitive data types.</p>

                        <h3>8 Primitive Data Types</h3>
                        <h4>1. boolean type</h4>
                        <ul>
                            <li>The boolean data type has two possible values, either true or false.</li>
                            <li>Default value: false.</li>
                            <li>They are usually used for true/false conditions.</li>
                        </ul>
                        <h4>Example 1: Java boolean data type</h4>
                        <div class="interpreter">
                            <p> class Main {</p>
                            <p> public static void main(String[] args) { </p>
                            <p> boolean flag = true;</p>
                            <p> System.out.println(flag); // prints true</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=a5b0640a"
                                    target="_blank"><button>Run
                                        Code >></button></a>
                            </div>
                        </div>
                        <h4>2. byte type</h4>
                        <ul>
                            <li>The byte data type can have values from -128 to 127 (8-bit signed two's complement
                                integer).</li>
                            <li> If it's certain that the value of a variable will be within -128 to 127, then it is
                                used instead of int to save memory.</li>
                            <li>Default value: 0</li>
                        </ul>
                        <h4>Example 2: Java byte data type</h4>
                        <div class="interpreter">
                            <p>class Main {</p>
                            <p> public static void main(String[] args) {</p>
                            <p> byte range;</p>
                            <p> range = 124;</p>
                            <p> System.out.println(range); // prints 124</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=5f39e0c3"
                                    target="_blank"><button>Run
                                        code >></button></a>
                            </div>
                        </div>
                        <h4>3. short type</h4>
                        <ul>
                            <li>The short data type in Java can have values from -32768 to 32767 (16-bit signed two's
                                complement integer).</li>
                            <li>If it's certain that the value of a variable will be within -32768 and 32767, then it is
                                used instead of other integer data types (int, long).</li>
                            <li>Default value: 0</li>
                        </ul>
                        <h3>Example 3: Java short data type</h3>
                        <div class="interpreter">
                            <p> class Main {</p>
                            <p> public static void main(String[] args) { </p>
                            <p> short temperature;</p>
                            <p> temperature = -200;</p>
                            <p> System.out.println(temperature); // prints -200</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://programiz.com/java-programming/online-compiler/?ref=89974f75"
                                    target="_blank"><button>Run
                                        code >></button></a>
                            </div>
                        </div>

                        <h4>4. int type</h4>
                        <ul>
                            <li>The int data type can have values from -231 to 231-1 (32-bit signed two's complement
                                integer).</li>
                            <li>If you are using Java 8 or later, you can use an unsigned 32-bit integer. This will have
                                a minimum value of 0 and a maximum value of 232-1. To learn more, visit How to use the
                                unsigned integer in java 8?</li>
                            <li>Default value: 0</li>
                        </ul>
                        <h4>Example 4: Java int data type</h4>
                        <div class="interpreter">
                            <p> class Main {</p>
                            <p> public static void main(String[] args) { </p>
                            <p> int range = -4250000;</p>
                            <p> System.out.println(range); // print -4250000</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=cadebdaa"
                                    target="_blank"><button>Run
                                        code >></button></a>
                            </div>
                        </div>

                        <h4>5. long type</h4>
                        <ul>
                            <li>The long data type can have values from -263 to 263-1 (64-bit signed two's complement
                                integer).</li>
                            <li>If you are using Java 8 or later, you can use an unsigned 64-bit integer with a minimum
                                value of 0 and a maximum value of 264-1.</li>
                            <li>Default value: 0</li>
                        </ul>
                        <h4>Example 5: Java long data type</h4>
                        <div class="interpreter">
                            <p> class LongExample {</p>
                            <p> public static void main(String[] args) { </p>
                            <p> long range = -42332200000L;</p>
                            <p> System.out.println(range); // prints -42332200000</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=6e1eb66a"
                                    target="_blank"><button>Run
                                        code >></button></a>
                            </div>
                        </div>
                        <p>Notice, the use of L at the end of -42332200000. This represents that it's an integer of the
                            long type.</p>
                        <h4> 6. double type</h4>
                        <ul>
                            <li>The double data type is a double-precision 64-bit floating-point.</li>
                            <li>It should never be used for precise values such as currency.</li>
                            <li>Default value: 0.0 (0.0d)</li>
                        </ul>
                        <h4>Example 6: Java double data type</h4>
                        <div class="interpreter">
                            <p>class Main {</p>
                            <p> public static void main(String[] args) { </p>
                            <p> double number = -42.3;</p>
                            <p> System.out.println(number); // prints -42.3</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=5b8a3070"
                                    target="_blank"><button>Run
                                        code >></button></a>
                            </div>
                        </div>
                        <h4>7. float type</h4>
                        <ul>
                            <li>The float data type is a single-precision 32-bit floating-point. Learn more about
                                single-precision and double-precision floating-point if you are interested.</li>
                            <li>It should never be used for precise values such as currency.</li>
                            <li>Default value: 0.0 (0.0f)</li>
                        </ul>
                        <h4>Example 7: Java float data type</h4>
                        <div class="interpreter">
                            <p> class Main {</p>
                            <p> public static void main(String[] args) { </p>
                            <p> float number = -42.3f;</p>
                            <p> System.out.println(number); // prints -42.3</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=ad54148f"
                                    target="_blank"><button>Run
                                        code >></button></a>
                            </div>
                        </div>
                        <p>Notice that we have used -42.3f instead of -42.3in the above program. It's because -42.3 is a
                            double literal.</p>
                        <p>To tell the compiler to treat -42.3 as float rather than double, you need to use f or F.</p>
                        <p>If you want to know about single-precision and double-precision, visit Java single-precision
                            and double-precision floating-point.</p>

                        <h4> 8. char type</h4>
                        <ul>
                            <li>It's a 16-bit Unicode character.</li>
                            <li>The minimum value of the char data type is '\u0000' (0) and the maximum value of the is
                                '\uffff'.</li>
                            <li>Default value: '\u0000'</li>
                        </ul>
                        <h4>Example 8: Java char data type</h4>
                        <div class="interpreter">
                            <p> class Main {</p>
                            <p> public static void main(String[] args) { </p>
                            <p> char letter = '\u0051';</p>
                            <p> System.out.println(letter); // prints Q</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=3250f573"
                                    target="_blank"><button>Run
                                        code >></button></a>
                            </div>
                        </div>
                        <p>Here, the Unicode value of Q is \u0051. Hence, we get Q as the output.</p>
                        <h4> String type</h4>
                        <p>Java also provides support for character strings via java.lang.String class. Strings in Java
                            are not primitive types. Instead, they are objects. For example,</p>
                        <div class="interpreter">
                            String myString = "Java Programming";
                        </div>
                        <p>Here, myString is an object of the String class. To learn more, visit Java Strings.</p>

                    </div>

                    <div id="operator">
                        <h3> Java Operators</h3>
                        <p>Operators are symbols that perform operations on variables and values. For example, + is an
                            operator used for addition, while * is also an operator used for multiplication.</p>
                        <p>Operators in Java can be classified into 5 types:</p>
                        <ol>
                            <li>Arithmetic Operators</li>
                            <li>Assignment Operators</li>
                            <li>Relational Operators</li>
                            <li>Logical Operators</li>
                            <li>Unary Operators</li>
                            <li>Bitwise Operators</li>
                        </ol>

                        <h4>1. Java Arithmetic Operators</h4>
                        <p>Arithmetic operators are used to perform arithmetic operations on variables and data. For
                            example,</p>
                        <div class="interpreter">
                            a + b;
                        </div>
                        <p>Here, the + operator is used to add two variables a and b. Similarly, there are various other
                            arithmetic operators in Java.</p>
                        <table class="table" style="border: 1px solid black; text-align: center;">
                            <thead>
                                <th>operator</th>
                                <th>operand</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>+</td>
                                    <td>Addition</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>Subtraction</td>
                                </tr>
                                <tr>
                                    <td>*</td>
                                    <td>Multiplication</td>
                                </tr>
                                <tr>
                                    <td>/</td>
                                    <td>Division</td>
                                </tr>
                                <tr>
                                    <td>%</td>
                                    <td>Modulo Operation (Remainder after division)</td>
                                </tr>

                            </tbody>
                        </table>
                        <h4>Example 1: Arithmetic Operators</h4>
                        <div class="interpreter">
                            <p> class Main {</p>
                            <p> public static void main(String[] args) {</p>

                            <p> // declare variables</p>
                            <p> int a = 12, b = 5;</p>

                            <p> // addition operator</p>
                            <p> System.out.println("a + b = " + (a + b));</p>

                            <p> // subtraction operator</p>
                            <p> System.out.println("a - b = " + (a - b));</p>

                            <p> // multiplication operator</p>
                            <p> System.out.println("a * b = " + (a * b));</p>

                            <p> // division operator</p>
                            <p> System.out.println("a / b = " + (a / b));</p>

                            <p> // modulo operator</p>
                            <p> System.out.println("a % b = " + (a % b));</p>
                            <p> }</p>
                            <p> }</p>

                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=a9d7075d"
                                    target="_blank"><button>Run
                                        code >></button></a>
                            </div>
                        </div>
                        <p><b>Output</b></p>
                        <div class="output">
                            a + b = 17<br>
                            a - b = 7 <br>
                            a * b = 60<br>
                            a / b = 2 <br>
                            a % b = 2
                        </div>
                        <h4> 2. Java Assignment Operators</h4>
                        <p>Assignment operators are used in Java to assign values to variables. For example,</p>
                        <div class="interpreter">
                            int age;<br>
                            age = 5;
                        </div>
                        <p>Here, = is the assignment operator. It assigns the value on its right to the variable on its
                            left. That is, 5 is assigned to the variable age.</p>
                        <p>Let's see some more assignment operators available in Java.</p>

                        <table class="table" style="border: 1px solid black; text-align: center;">
                            <thead>
                                <th>Operator</th>
                                <th>Example</th>
                                <th>Equivalent to</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>=</td>
                                    <td>a = b;</td>
                                    <td>a = b;</td>
                                </tr>
                                <tr>
                                    <td>+=</td>
                                    <td>a += b;</td>
                                    <td>a = a + b;</td>
                                </tr>
                                <tr>
                                    <td>-=</td>
                                    <td>a -= b;</td>
                                    <td>a = a - b;</td>
                                </tr>
                                <tr>
                                    <td>*=</td>
                                    <td>a *= b;</td>
                                    <td>a = a * b;</td>
                                </tr>
                                <tr>
                                    <td>/=</td>
                                    <td>a /= b;</td>
                                    <td>a = a / b;</td>
                                </tr>
                                <tr>
                                    <td>%=</td>
                                    <td>a %= b;</td>
                                    <td>a = a % b;</td>
                                </tr>
                            </tbody>
                        </table>
                        <h4>Example 2: Assignment Operators</h4>
                        <div class="interpreter">
                            <p> class Main {</p>
                            <p> public static void main(String[] args) {</p>

                            <p> // create variables</p>
                            <p> int a = 4;</p>
                            <p> int var;</p>

                            <p> // assign value using =</p>
                            <p> var = a;</p>
                            <p> System.out.println("var using =: " + var);</p>

                            <p> // assign value using =+</p>
                            <p> var += a;</p>
                            <p> System.out.println("var using +=: " + var);</p>

                            <p> // assign value using =*</p>
                            <p> var *= a;</p>
                            <p> System.out.println("var using *=: " + var);</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=528f1389"
                                    target="_blank"><button>Run
                                        code >></button></a>
                            </div>
                        </div>
                        <p><b>Output</b></p>
                        <div class="output">
                            var using =: 4<br>
                            var using +=: 8 <br>
                            var using *=: 32
                        </div>
                        <h4>3. Java Relational Operators</h4>
                        <p>Relational operators are used to check the relationship between two operands. For example,
                        </p>
                        <div class="interpreter">
                            // check if a is less than b
                            a < b;<br>
                        </div>
                        <p>Here, < operator is the relational operator. It checks if a is less than b or not.</p>
                                <p>It returns either true or false.</p>
                                <table class="table" style="border: 1px solid black; text-align: center;">
                                    <thead>
                                        <th>Operator</th>
                                        <th>Description</th>
                                        <th>Example</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>==</td>
                                            <td>Is Equal To</td>
                                            <td>3 == 5 returns false</td>
                                        </tr>
                                        <tr>
                                            <td>!=</td>
                                            <td>Not Equal To</td>
                                            <td>3 != 5 returns true</td>
                                        </tr>
                                        <tr>
                                            <td>></td>
                                            <td>Greater Than</td>
                                            <td>3 != 5 returns true</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                << /td>
                                            <td>Less Than</td>
                                            <td>3 < 5 returns true</td>
                                        </tr>
                                        <tr>
                                            <td>>=</td>
                                            <td>Greater Than or Equal To</td>
                                            <td>3 >= 5 returns false</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <=< /td>
                                            <td>Less Than or Equal To</td>
                                            <td>3 <= 5 returns true</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>Example 3: Relational Operators</h4>
                                <div class="interpreter">
                                    <p> class Main {</p>
                                    <p> public static void main(String[] args) {</p>

                                    <p> // create variables</p>
                                    <p> int a = 7, b = 11;</p>

                                    <p> // value of a and b</p>
                                    <p> System.out.println("a is " + a + " and b is " + b);</p>

                                    <p> // == operator</p>
                                    <p> System.out.println(a == b); // false</p>

                                    <p> // != operator</p>
                                    <p> System.out.println(a != b); // true</p>

                                    <p> // > operator</p>
                                    <p> System.out.println(a > b); // false</p>

                                    <p> // < operator</p>
                                            <p> System.out.println(a < b); // true</p>

                                                    <p> // >= operator</p>
                                                    <p> System.out.println(a >= b); // false</p>

                                                    <p> // <= operator</p>
                                                            <p> System.out.println(a <= b); // true</p>
                                                                    <p> }</p>
                                                                    <p> }</p>
                                                                    <div class="run-btn">
                                                                        <a href="https://www.programiz.com/java-programming/online-compiler/?ref=96ffc8ed"
                                                                            target="_blank"><button>Run
                                                                                code >></button></a>
                                                                    </div>
                                </div>
                                <h4>4. Java Logical Operators</h4>
                                <p>Logical operators are used to check whether an expression is true or false. They are
                                    used in decision making.</p>
                                <table class="table" style="border: 1px solid black; text-align: center;">
                                    <thead>
                                        <th>Operator</th>
                                        <th>Example</th>
                                        <th>Meaning</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>&& (Logical AND)</td>
                                            <td>expression1 && expression2</td>
                                            <td>true only if both expression1 and expression2 are true</td>
                                        </tr>
                                        <tr>
                                            <td>|| (Logical OR)</td>
                                            <td>expression1 || expression2</td>
                                            <td>true if either expression1 or expression2 is true</td>
                                        </tr>
                                        <tr>
                                            <td>! (Logical NOT)</td>
                                            <td>! expression1</td>
                                            <td>true if expression is false and vice versa</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Example 4: Logical Operators</p>
                                <div class="interpreter">
                                    <p> class Main {</p>
                                    <p> public static void main(String[] args) {</p>

                                    <p> // && operator</p>
                                    <p> System.out.println((5 > 3) && (8 > 5)); // true</p>
                                    <p> System.out.println((5 > 3) && (8 < 5)); // false</p>

                                            <p> // || operator</p>
                                            <p> System.out.println((5
                                            <p 3) || (8> 5)); // true</p>
                                            <p> System.out.println((5 > 3) || (8 < 5)); // true</p>
                                                    <p> System.out.println((5 < 3) || (8 < 5)); // false</p>

                                                            <p> // ! operator</p>
                                                            <p> System.out.println(!(5 == 3)); // true</p>
                                                            <p> System.out.println(!(5 > 3)); // false</p>
                                                            <p> }</p>
                                                            <p> }</p>
                                                            <div class="run-btn">
                                                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=68f983e5"
                                                                    target="_blank"><button>Run
                                                                        code >></button></a>
                                                            </div>
                                </div>
                                <h4>Working of Program</h4>
                                <ul>
                                    <li>(5 > 3) && (8 > 5) returns true because both (5 > 3) and (8 > 5) are true.</li>
                                    <li>(5 > 3) && (8 < 5) returns false because the expression (8 < 5) is false.</li>
                                    <li>(5 < 3) || (8> 5) returns true because the expression (8 > 5) is true.</li>
                                    <li>(5 > 3) || (8 < 5) returns true because the expression (5> 3) is true.</li>
                                    <li>(5 < 3) || (8 < 5) returns false because both (5 < 3) and (8 < 5) are
                                            false.</li>
                                    <li>!(5 == 3) returns true because 5 == 3 is false.</li>
                                    <li>!(5 > 3) returns false because 5 > 3 is true.</li>
                                </ul>
                                <h3> 5. Java Unary Operators</h3>
                                <p>Unary operators are used with only one operand. For example, ++ is a unary operator
                                    that increases the value of a variable by 1. That is, ++5 will return 6.</p>
                                <p>Different types of unary operators are:</p>
                                <table class="table" style="border: 1px solid black; text-align: center;">
                                    <thead>
                                        <th>Operator</th>
                                        <th>Meaning</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>+</td>
                                            <td><b>Unary plus:</b> not necessary to use since numbers are positive
                                                without using it</td>
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td><b>Unary minus:</b> inverts the sign of an expression</td>
                                        </tr>
                                        <tr>
                                            <td>++</td>
                                            <td><b>Increment operator:</b> increments value by 1</td>
                                        </tr>
                                        <tr>
                                            <td>--</td>
                                            <td><b>Decrement operator:</b> decrements value by 1</td>
                                        </tr>
                                        <tr>
                                            <td>!</td>
                                            <td><b>Logical complement operator:</b> inverts the value of a boolean</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>Increment and Decrement Operators</h4>
                                <p>Java also provides increment and decrement operators: ++ and -- respectively. ++
                                    increases the value of the operand by 1, while -- decrease it by 1. For example,</p>
                                <div class="interpreter">
                                    int num = 5;<br>
                                    // increase num by 1<br>
                                    ++num;
                                </div>
                                <p>Here, the value of num gets increased to 6 from its initial value of 5.</p>
                                <h4>Example 5: Increment and Decrement Operators</h4>
                                <div class="interpreter">
                                    <p> class Main {</p>
                                    <p> public static void main(String[] args) {</p>

                                    <p> // declare variables</p>
                                    <p> int a = 12, b = 12;</p>
                                    <p> int result1, result2;</p>

                                    <p> // original value</p>
                                    <p> System.out.println("Value of a: " + a);</p>

                                    <p> // increment operator</p>
                                    <p> result1 = ++a;</p>
                                    <p> System.out.println("After increment: " + result1);</p>

                                    <p> System.out.println("Value of b: " + b);</p>

                                    <p> // decrement operator</p>
                                    <p> result2 = --b;</p>
                                    <p> System.out.println("After decrement: " + result2);</p>
                                    <p> }</p>
                                    <p> }</p>
                                    <div class="run-btn">
                                        <a href="https://www.programiz.com/java-programming/online-compiler/?ref=0f6b2cca"
                                            target="_blank"><button>Run code >></button></a>
                                    </div>
                                </div>
                                <p><b>Output</b></p>
                                <div class="output">
                                    Value of a: 12<br>
                                    After increment: 13<br>
                                    Value of b: 12 <br>
                                    After decrement: 11
                                </div>
                                <p>In the above program, we have used the ++ and -- operator as prefixes (++a, --b). We
                                    can also use these operators as postfix (a++, b++).</p>
                                <p>There is a slight difference when these operators are used as prefix versus when they
                                    are used as a postfix.</p>
                                <p>To learn more about these operators, visit increment and decrement operators.</p>
                                <h4>6. Java Bitwise Operators</h4>
                                <p>Bitwise operators in Java are used to perform operations on individual bits. For
                                    example,</p>
                                <div class="interpreter">
                                    <p> Bitwise complement Operation of 35</p>
                                    <p>35 = 00100011 (In Binary)</p>
                                    <p>~ 00100011 </p>
                                    <p> ________</p>
                                    <p> 11011100 = 220 (In decimal)</p>
                                    <p>Here, ~ is a bitwise operator. It inverts the value of each bit (0 to 1 and 1 to
                                        0).</p>
                                    <p>The various bitwise operators present in Java are:</p>
                                </div>
                                <table class="table" style="border: 1px solid black; text-align: center;">
                                    <thead>
                                        <th>Operator</th>
                                        <th>Description</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>~</td>
                                            <td>Bitwise Complement</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <<< /td>
                                            <td>Left Shift</td>
                                        </tr>
                                        <tr>
                                            <td>>></td>
                                            <td>Right Shift</td>
                                        </tr>
                                        <tr>
                                            <td>>>></td>
                                            <td>Unsigned Right Shift</td>
                                        </tr>
                                        <tr>
                                            <td>&</td>
                                            <td>Bitwise AND</td>
                                        </tr>
                                        <tr>
                                            <td>^</td>
                                            <td>Bitwise exclusive OR</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>These operators are not generally used in Java. To learn more, visit Java Bitwise and
                                    Bit Shift Operators.</p>
                                <h4> Other operators</h4>
                                <p>Besides these operators, there are other additional operators in Java.</p>

                                <h4>Java instanceof Operator</h4>
                                <p>The instanceof operator checks whether an object is an instanceof a particular class.
                                    For example,</p>
                                <div class="interpreter">
                                    <p> class Main {</p>
                                    <p> public static void main(String[] args) {</p>

                                    <p> String str = "Programiz";</p>
                                    <p> boolean result;</p>

                                    <p> // checks if str is an instance of</p>
                                    <p> // the String class</p>
                                    <p> result = str instanceof String;</p>
                                    <p> System.out.println("Is str an object of String? " + result);</p>
                                    <p> }</p>
                                    <p> }</p>
                                    <div class="run-btn">
                                        <a href="https://www.programiz.com/java-programming/online-compiler/?ref=195ee24e"
                                            target="_blank"><button>Run code >></button></a>
                                    </div>
                                </div>
                                <p><b>Output</b></p>
                                <div class="output">
                                    Is str an object of String? true
                                </div>
                                <p>Here, str is an instance of the String class. Hence, the instanceof operator returns
                                    true. To learn more, visit Java instanceof.</p>
                                <h4>Java Ternary Operator</h4>
                                <p>The ternary operator (conditional operator) is shorthand for the if-then-else
                                    statement. For example,</p>
                                <div class="interpreter">
                                    variable = Expression ? expression1 : expression2
                                </div>
                                <p>Here's how it works.</p>
                                <ul>
                                    <li>If the Expression is true, expression1 is assigned to the variable.</li>
                                    <li>If the Expression is false, expression2 is assigned to the variable.</li>
                                </ul>
                                <p>Let's see an example of a ternary operator.</p>
                                <div class="interpreter">
                                    <p> class Java {</p>
                                    <p> public static void main(String[] args) {</p>

                                    <p> int februaryDays = 29;</p>
                                    <p> String result;</p>

                                    <p> // ternary operator</p>
                                    <p> result = (februaryDays == 28) ? "Not a leap year" : "Leap year";</p>
                                    <p> System.out.println(result);</p>
                                    <p> }</p>
                                    <p> }</p>
                                    <div class="run-btn">
                                        <a href="https://www.programiz.com/java-programming/online-compiler/?ref=fc5bde93"
                                            target="_blank"><button>Run code >></button></a>
                                    </div>
                                </div>
                                <p><b>Output</b></p>
                                <div class="output">
                                    Leap year
                                </div>
                                <p>In the above example, we have used the ternary operator to check if the year is a
                                    leap year or not. To learn more, visit the Java ternary operator.</p>
                                <p>Now that you know about Java operators, it's time to know about the order in which
                                    operators are evaluated. To learn more, visit Java Operator Precedence.</p>
                    </div>
                    <div id="input-output">
                        <h3>Java Basic Input and Output</h3>
                        <h4>Java Output</h4>
                        <p>In Java, you can simply use</p>
                        <div class="interpreter">
                            System.out.println(); or <br>
                            System.out.print(); or <br>
                            System.out.printf();
                        </div>
                        <p>to send output to standard output (screen). <br>Here,</p>
                        <ul>
                            <li>System is a class</li>
                            <li>out is a public static field: it accepts output data.</li>
                        </ul>
                        <p>Don't worry if you don't understand it. We will discuss class, public, and static in later
                            chapters.</p>
                        <p>Let's take an example to output a line. </p>
                        <div class="interpreter">
                            <p> class AssignmentOperator {</p>
                            <p> public static void main(String[] args) {</p>

                            <p> System.out.println("Java programming is interesting."); </p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=473aded1"
                                    target="_blank"><button>Run code >></button></a>
                            </div>
                        </div>
                        <p><b>Output</b></p>
                        <div class="output">
                            Java programming is interesting.
                        </div>
                        <p>Here, we have used the println() method to display the string.</p>
                        <h4>Java Input</h4>
                        <p>Java provides different ways to get input from the user. However, in this tutorial, you will
                            learn to get input from user using the object of Scanner class.</p>
                        <p>In order to use the object of Scanner, we need to import java.util.Scanner package.</p>
                        <div class="interpreter">
                            import java.util.Scanner;
                        </div>
                        <p>To learn more about importing packages in Java, visit Java Import Packages.</p>
                        <p>Then, we need to create an object of the Scanner class. We can use the object to take input
                            from the user.</p>
                        <div class="interpreter">
                            <p>// create an object of Scanner</p>
                            <p>Scanner input = new Scanner(System.in);</p>

                            <p>// take input from the user</p>
                            <p>int number = input.nextInt();</p>
                        </div>
                        <h4>Example: Get Integer Input From the User</h4>
                        <div class="interpreter">
                            <p> import java.util.Scanner;</p>

                            <p> class Input {</p>
                            <p> public static void main(String[] args) {</p>
                            <p> Scanner input = new Scanner(System.in);</p>
                            <p> System.out.print("Enter an integer: ");</p>
                            <p> int number = input.nextInt();</p>
                            <p> System.out.println("You entered " + number);</p>
                            // closing the scanner object
                            <p> input.close();</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=a6ca602e"
                                    target="_blank"><button>Run code >></button></a>
                            </div>
                        </div>
                        <p><b>Output</b></p>
                        <div class="output">
                            Enter an integer: 23<br>
                            You entered 23
                        </div>
                        <p>In the above example, we have created an object named input of the Scanner class. We then
                            call the nextInt() method of the Scanner class to get an integer input from the user.</p>
                        <p>Similarly, we can use nextLong(), nextFloat(), nextDouble(), and next() methods to get long,
                            float, double, and string input respectively from the user.</p>
                        <h4>Example: Get float, double and String Input</h4>
                        <div class="interpreter">
                            <p>import java.util.Scanner;</p>

                            <p>class Input {</p>
                            <p> public static void main(String[] args) {</p>

                            <p> Scanner input = new Scanner(System.in);</p>

                            <p> // Getting float input</p>
                            <p> System.out.print("Enter float: ");</p>
                            <p> float myFloat = input.nextFloat();</p>
                            <p> System.out.println("Float entered = " + myFloat);</p>

                            <p> // Getting double input</p>
                            <p> System.out.print("Enter double: ");</p>
                            <p> double myDouble = input.nextDouble();</p>
                            <p> System.out.println("Double entered = " + myDouble);</p>

                            <p> // Getting String input</p>
                            <p> System.out.print("Enter text: ");</p>
                            <p> String myString = input.next();</p>
                            <p> System.out.println("Text entered = " + myString);</p>
                            <p> }</p>
                            <p>}</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=9ccbe9e1"
                                    target="_blank"><button>Run code >></button></a>
                            </div>
                        </div>
                        <p><b>Output</b></p>
                        <div class="output">
                            Enter float: 2.343<br>
                            Float entered = 2.343<br>
                            Enter double: -23.4<br>
                            Double entered = -23.4<br>
                            Enter text: Hey!<br>
                            Text entered = Hey!
                        </div>
                        <p>As mentioned, there are other several ways to get input from the user. To learn more about
                            Scanner, visit Java Scanner.</p>
                    </div>
                    <div id="expression">
                        <h4>Java Expressions, Statements and Blocks</h4>
                        <p>In previous chapters, we have used expressions, statements, and blocks without much
                            explaining about them. Now that you know about variables, operators, and literals, it will
                            be easier to understand these concepts.</p>
                        <h4>Java Expressions</h4>
                        <p>A Java expression consists of variables, operators, literals, and method calls. To know more
                            about method calls, visit Java methods. For example,</p>
                        <div class="interpreter">
                            int score;<br>
                            score = 90;
                        </div>
                        <p>Here, score = 90 is an expression that returns an int. Consider another example,</p>
                        <div class="interpreter">
                            Double a = 2.2, b = 3.4, result;<br>
                            result = a + b - 3.4;
                        </div>
                        <p>Here, a + b - 3.4 is an expression.</p>
                        <div class="interpreter">
                            if (number1 == number2) <br>
                            System.out.println("Number 1 is larger than number 2");
                        </div>
                        <p>Here, number1 == number2 is an expression that returns a boolean value. Similarly, "Number 1
                            is larger than number 2" is a string expression.</p>
                        <h3> Java Statements</h3>
                        <p>In Java, each statement is a complete unit of execution. For example,</p>
                        <div class="interpreter">
                            int score = 9*5;
                        </div>
                        <p> Here, we have a statement. The complete execution of this statement involves multiplying
                            integers 9 and 5 and then assigning the result to the variable score.</p>
                        <p>In the above statement, we have an expression 9 * 5. In Java, expressions are part of
                            statements.</p>
                        <h4>Expression statements</h4>
                        <p>We can convert an expression into a statement by terminating the expression with a ;. These
                            are known as expression statements. For example,</p>
                        <div class="interpreter">
                            // expression<br>
                            number = 10<br>
                            // statement<br>
                            number = 10;
                        </div>
                        <p>In the above example, we have an expression number = 10. Here, by adding a semicolon (;), we
                            have converted the expression into a statement (number = 10;).</p>
                        <p>Consider another example,</p>
                        <div class="interpreter">
                            // expression<br>
                            ++number<br>
                            // statement<br>
                            ++number;
                        </div>
                        <p>Similarly, ++number is an expression whereas ++number; is a statement.</p>
                        <h4>Declaration Statements</h4>
                        <p>In Java, declaration statements are used for declaring variables. For example,</p>
                        <div class="interpreter">
                            Double tax = 9.5;
                        </div>
                        <p>The statement above declares a variable tax which is initialized to 9.5.</p>
                        <h4>Java Blocks</h4>
                        <p>A block is a group of statements (zero or more) that is enclosed in curly braces { }. For
                            example,</p>
                        <div class="interpreter">
                            <p> class Main {</p>
                            <p> public static void main(String[] args) {</p>

                            <p> String band = "Beatles";</p>

                            <p> if (band == "Beatles") { // start of block</p>
                            <p> System.out.print("Hey ");</p>
                            <p> System.out.print("Jude!");</p>
                            <p> } // end of block</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler?ref=53c68a65"
                                    target="_blank"><button>Run code >></button></a>
                            </div>
                        </div>
                        <p><b>Output</b></p>
                        <div class="output">
                            Hey Jude!
                        </div>
                        <p>In the above example, we have a block if {....}.</p>
                        <p>Here, inside the block we have two statements:</p>
                        <ul>
                            <li>System.out.print("Hey ");</li>
                            <li>System.out.print("Jude!");</li>
                        </ul>
                        <p>However, a block may not have any statements. Consider the following examples,</p>
                        <div class="interpreter">
                            <p> class Main {</p>
                            <p> public static void main(String[] args) { </p>
                            <p> if (10 > 5) { // start of block </p>
                            <p> } // end of block</p>
                            <p> }</p>
                            <p> }</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler?ref=c46fe8da"
                                    target="_blank"><button>Run code >></button></a>
                            </div>
                        </div>
                        <p>This is a valid Java program. Here, we have a block if {...}. However, there is no any
                            statement inside this block.</p>
                        <div class="interpreter">
                            <p>class AssignmentOperator {</p>
                            <p> public static void main(String[] args) { // start of block </p>
                            <p> } // end of block</p>
                            <p>}</p>
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=0d7a2e87"
                                    target="_blank"><button>Run code >></button></a>
                            </div>
                        </div>
                        <p>Here, we have block public static void main() {...}. However, similar to the above example,
                            this block does not have any statement.</p>
                    </div>
                </section>
                <section id="flow">
                    <h2>Java Flow Control</h2>
                    <ul>
                        <li><a href="#ifelse">If...statement</a></li>
                        <li><a href="#forloops">For loop</a></li>
                        <li><a href="#while">While and do...While loop</a></li>
                        <li><a href="#break">Break Statement</a></li>
                        <li><a href="#continue">Continue Statement</a></li>
                        <li><a href="#switch">Switch Statement</a></li>
                    </ul>
                    <div id="ifelse">
                        <h2>Java if...else Statement</h2>
                        <p>In programming, we use the if..else statement to run a block of code among more than one
                            alternatives.</p>
                        <p>For example, assigning grades (A, B, C) based on the percentage obtained by a student.</p>
                        <ul>
                            <li>if the percentage is above 90, assign grade A</li>
                            <li>if the percentage is above 75, assign grade B</li>
                            <li>if the percentage is above 65, assign grade C</li>
                        </ul>
                        <h4>1. Java if (if-then) Statement</h4>
                        <p>The syntax of an if-then statement is:</p>
                        <div class="interpreter">
                            if (condition) {<br>
                            // statements<br>
                            }
                        </div>
                        <p>Here, condition is a boolean expression such as age >= 18.</p>
                        <ul>
                            <li>if condition evaluates to true, statements are executed</li>
                            <li>if condition evaluates to false, statements are skipped</li>
                        </ul>
                        <p>Working of if Statement</p>
                        <img src="images/java-if-working.png" alt=""
                            style=" width: 100%;  margin-bottom: 1.5rem; border: 1px solid black;">
                        <h4>Example 1: Java if Statement</h4>
                        <div class="interpreter">
                            <p> class IfStatement {</p>
                            <p> public static void main(String[] args) {</p>

                            <p> int number = 10;</p>

                            <p> // checks if number is less than 0</p>
                            <p> if (number < 0) {</p>
                                    <p> System.out.println("The number is negative.");</p>
                                    <p> }</p>

                                    <p> System.out.println("Statement outside if block");</p>
                                    <p> }</p>
                                    <p> }</p>
                                    <div class="run-btn">
                                        <a href="https://www.programiz.com/java-programming/online-compiler/?ref=de92c205"
                                            target="_blank"><button>Run code >></button></a>
                                    </div>
                        </div>
                        <p><b>Output</b></p>
                        <div class="output">
                            Statement outside if block
                        </div>
                        <p>In the program, number < 0 is false. Hence, the code inside the body of the if statement is
                                skipped.</p>
                                <p>We can also use Java Strings as the test condition.</p>
                                <h4>Example 2: Java if with String</h4>
                                <div class="interpreter">
                                    <p> class Main {</p>
                                    <p> public static void main(String[] args) {</p>
                                    <p> // create a string variable</p>
                                    <p> String language = "Java";</p>

                                    <p> // if statement</p>
                                    <p> if (language == "Java") {</p>
                                    <p> System.out.println("Best Programming Language");</p>
                                    <p> }</p>
                                    <p> }</p>
                                    <p> }</p>
                                    <div class="run-btn">
                                        <a href="https://www.programiz.com/java-programming/online-compiler?ref=84b23da3"
                                            target="_blank"><button>Run code >></button></a>
                                    </div>
                                </div>
                                <p><b>Output</b></p>
                                <div class="output">
                                    Best Programming Language
                                </div>
                                <p>In the above example, we are comparing two strings in the if block.</p>

                                <h3>2. Java if...else (if-then-else) Statement</h3>
                                <p>The if statement executes a certain section of code if the test expression is
                                    evaluated to true. However, if the test expression is evaluated to false, it does
                                    nothing.</p>
                                <p>In this case, we can use an optional else block. Statements inside the body of else
                                    block are executed if the test expression is evaluated to false. This is known as
                                    the if-...else statement in Java.</p>
                                <p>The syntax of the if...else statement is:</p>
                                <div class="interpreter">
                                    if (condition) {<br>
                                    // codes in if block<br>
                                    }<br>
                                    else {<br>
                                    // codes in else block<br>
                                    }
                                </div>
                                <p>Here, the program will do one task (codes inside if block) if the condition is true
                                    and another task (codes inside else block) if the condition is false.</p>
                                <h4>How the if...else statement works?</h4>
                                <img src="images/java-if-else-working.png" alt=""
                                    style="width: 100%; margin-bottom: 1.5rem; border: 1px solid black;">
                                <h4>Example 3: Java if...else Statement</h4>
                                <div class="interpreter">
                                    class Main {<br>
                                    public static void main(String[] args) {<br>
                                    int number = 10;<br>

                                    // checks if number is greater than 0<br>
                                    if (number > 0) {<br>
                                    System.out.println("The number is positive.");<br>
                                    }<br>

                                    // execute this block<br>
                                    // if number is not greater than 0<br>
                                    else {<br>
                                    System.out.println("The number is not positive.");<br>
                                    }<br>

                                    System.out.println("Statement outside if...else block");<br>
                                    }<br>
                                    }
                                    <div class="run-btn">
                                        <a href="" target="_blank"><button>Run code >></button></a>
                                    </div>
                                </div>
                                <p><b>Output</b></p>
                                <div class="output">
                                    The number is positive.<br>
                                    Statement outside if...else block
                                </div>
                                <p> In the above example, we have a variable named number. Here, the test expression
                                    number > 0 checks if number is greater than 0.</p>
                                <p>Since the value of the number is 10, the test expression evaluates to true. Hence
                                    code inside the body of if is executed.</p>
                                <p>Now, change the value of the number to a negative integer. Let's say -5.</p>
                                <div class="interpreter">
                                    int number = -5;
                                </div>
                                <p>If we run the program with the new value of number, the output will be:</p>
                                <div class="interpreter">
                                    The number is not positive.<br>
                                    Statement outside if...else block
                                </div>
                                <p>Here, the value of number is -5. So the test expression evaluates to false. Hence
                                    code inside the body of else is executed.</p>
                                <h4>3. Java if...else...if Statement</h4>
                                <p>In Java, we have an if...else...if ladder, that can be used to execute one block of
                                    code among multiple other blocks.</p>
                                <div class="interpreter">
                                    if (condition1) {<br>
                                    // codes<br>
                                    }<br>
                                    else if(condition2) {<br>
                                    // codes<br>
                                    }<br>
                                    else if (condition3) {<br>
                                    // codes<br>
                                    }<br>
                                    .<br>
                                    .<br>
                                    else {<br>
                                    // codes<br>
                                    }
                                </div>
                                <p>Here, if statements are executed from the top towards the bottom. When the test
                                    condition is true, codes inside the body of that if block is executed. And, program
                                    control jumps outside the if...else...if ladder.</p>
                                <p>If all test expressions are false, codes inside the body of else are executed.</p>
                                <h4>How the if...else...if ladder works?</h4>
                                <img src="images/java-if-else-if-statement.png" alt=""
                                    style="width: 100%; margin-bottom: 1.5rem; border: 1px solid black;">
                                <h4>Example 4: Java if...else...if Statement</h4>
                                <div class="interpreter">
                                    class Main {<br>
                                    public static void main(String[] args) {<br>

                                    int number = 0;<br>

                                    // checks if number is greater than 0<br>
                                    if (number > 0) {<br>
                                    System.out.println("The number is positive.");<br>
                                    }<br>

                                    // checks if number is less than 0<br>
                                    else if (number < 0) {<br>
                                        System.out.println("The number is negative.");<br>
                                        }<br>

                                        // if both condition is false<br>
                                        else {<br>
                                        System.out.println("The number is 0.");<br>
                                        }<br>
                                        }<br>
                                        }
                                        <div class="run-btn">
                                            <a href="https://www.programiz.com/java-programming/online-compiler/?ref=d752e42c"
                                                target="_blank"><button>Run code >></button></a>
                                        </div>
                                </div>
                                <p><b>Output</b></p>
                                <div class="output">
                                    This number is 0.
                                </div>
                                <p>n the above example, we are checking whether number is positive, negative, or zero.
                                    Here, we have two condition expressions:</p>
                                <ul>
                                    <li>number > 0 - checks if number is greater than 0</li>
                                    <li>number < 0 - checks if number is less than 0</li>
                                            <p>Here, the value of number is 0. So both the conditions evaluate to false.
                                                Hence the statement inside the body of else is executed.</p>
                                            <h4>4. Java Nested if..else Statement</h4>
                                            <p>In Java, it is also possible to use if..else statements inside an
                                                if...else statement. It's called the nested if...else statement.</p>
                                            <p>Here's a program to find the largest of 3 numbers using the nested
                                                if...else statement.</p>
                                            <h4>Example 5: Nested if...else Statement</h4>
                                            <div class="interpreter">
                                                class Main {<br>
                                                public static void main(String[] args) { <br>
                                                // declaring double type variables<br>
                                                Double n1 = -1.0, n2 = 4.5, n3 = -5.3, largest; <br>
                                                // checks if n1 is greater than or equal to n2<br>
                                                if (n1 >= n2) { <br>
                                                // if...else statement inside the if block<br>
                                                // checks if n1 is greater than or equal to n3<br>
                                                if (n1 >= n3) {<br>
                                                largest = n1;<br>
                                                } <br>
                                                else {<br>
                                                largest = n3;<br>
                                                }<br>
                                                } else { <br>
                                                // if..else statement inside else block<br>
                                                // checks if n2 is greater than or equal to n3<br>
                                                if (n2 >= n3) {<br>
                                                largest = n2;<br>
                                                } <br>
                                                else {<br>
                                                largest = n3;<br>
                                                }<br>
                                                } <br>
                                                System.out.println("Largest Number: " + largest);<br>
                                                }<br>
                                                }
                                                <div class="run-btn">
                                                    <a href="https://www.programiz.com/java-programming/online-compiler/?ref=658f28b6"
                                                        target="_blank"><button>Run code >></button></a>
                                                </div>
                                            </div>
                                            <p><b>Output</b></p>
                                            <div class="output">
                                                Largest Number : 4.5
                                            </div>
                                            <p>In the above programs, we have assigned the value of variables ourselves
                                                to make this easier.</p>
                                            <p>However, in real-world applications, these values may come from user
                                                input data, log files, form submission, etc.</p>
                    </div>
                    <div id="forloops">
                        <h4>Java for Loop</h4>
                        <p>In computer programming, loops are used to repeat a block of code. For example, if you want
                            to show a message 100 times, then rather than typing the same code 100 times, you can use a
                            loop.</p>
                        <p>In Java, there are three types of loops.</p>
                        <ul>
                            <li>for loop</li>
                            <li>while loop</li>
                            <li>do...while loop</li>
                        </ul>
                        <p>This tutorial focuses on the for loop. You will learn about the other types of loops in the
                            upcoming tutorials.</p>
                        <h4>Java for Loop</h4>
                        <p>Java for loop is used to run a block of code for a certain number of times. The syntax of for
                            loop is:</p>
                        <div class="interpreter">
                            for (initialExpression; testExpression; updateExpression) {<br>
                            // body of the loop<br>
                            }
                        </div>
                        Here,<br>
                        <ol>
                            <li>The initialExpression initializes and/or declares variables and executes only once.</li>
                            <li>The condition is evaluated. If the condition is true, the body of the for loop is
                                executed.</li>
                            <li>The updateExpression updates the value of initialExpression.</li>
                            <li>The condition is evaluated again. The process continues until the condition is false.
                            </li>
                        </ol>
                        <p>To learn more about the conditions, visit Java relational and logical operators.</p>
                        <img src="images/java-for-loop.png" alt="" style="border: 1px solid black; margin-left: 150px; padding: 50px; height: 500px; margin-bottom: 1.5rem; ">
                        <h4>Example 1: Display a Text Five Times</h4>
                        <div class="interpreter">
                            // Program to print a text 5 times<br>
                            class Main {<br>
                              public static void main(String[] args) {<br>
                                int n = 5;<br>
                                // for loop  <br>
                                for (int i = 1; i <= n; ++i) {<br>
                                  System.out.println("Java is fun");<br>
                                }<br>
                              }<br>
                            }
                            <div class="run-btn">
                                <a href="https://www.programiz.com/java-programming/online-compiler/?ref=6d5ff35d" target="_blank" ><button>Run code >></button></a>                                
                            </div>
                        </div>
                        <p><b>Output</b></p>
                        <div class="output">
                            Java is fun <br>
                            Java is fun <br>
                            Java is fun <br>
                            Java is fun <br>
                            Java is fun
                        </div>
                        <h4>Java for-each Loop</h4>
                        <p>The Java for loop has an alternative syntax that makes it easy to iterate through arrays and collections. For example,</p>
                        <div class="interpreter">
                            // print array elements <br>
                            class Main {<br>
                              public static void main(String[] args) {<br>
                                // create an array<br>
                                int[] numbers = {3, 7, 5, -5};   <br>
                                // iterating through the array <br>
                                for (int number: numbers) {<br>
                                   System.out.println(number);<br>
                                }<br>
                              }<br>
                            }
                            <div class="run-btn">
                                <a href="" target="_blank"><button>Run code >></button></a>
                            </div>
                        </div>
                            <p><b>Output</b></p>
                            <div class="output">
                                3<br>
                                7<br>
                                5<br>
                                -5
                            </div>
                            <p>Here, we have used the for-each loop to print each element of the numbers array one by one.</p>
                            <p>In the first iteration of the loop, number will be 3, number will be 7 in second iteration and so on.</p>
                            <p>To learn more, visit Java for-each Loop.</p>
                            <h4>Java Infinite for Loop</h4>
                            <p>If we set the test expression in such a way that it never evaluates to false, the for loop will run forever. This is called infinite for loop. For example,</p>
                            <div class="interpreter">
                                // Infinite for Loop<br>
                                class Infinite {<br>
                                    public static void main(String[] args) {<br>
                                        int sum = 0;<br>
                                        for (int i = 1; i <= 10; --i) {<br>
                                            System.out.println("Hello");<br>
                                        }<br>
                                    }<br>
                                }
                                <div class="run-btn">
                                    <a href="https://www.programiz.com/java-programming/online-compiler/?ref=0fcdabda" target="_blank" ><button>Run code >></button></a>
                                </div>
                                </div>
                                <p>Here, the test expression ,i <= 10, is never false and Hello is printed repeatedly until the memory runs out.</p>
                    </div>
                    <div id="while">
                       <h3> Java while and do...while Loop</h3>
                        <p>In computer programming, loops are used to repeat a block of code. For example, if you want to show a message 100 times, then you can use a loop. It's just a simple example; you can achieve much more with loops.</p>
                        <p>In the previous tutorial, you learned about Java for loop. Here, you are going to learn about while and do...while loops.</p>
                        <h4>Java while loop</h4>
                        <p>Java while loop is used to run a specific code until a certain condition is met. The syntax of the while loop is:</p>
                        <div class="interpreter">
                            while (testExpression) {<br>
                                // body of loop<br>
                            }
                        </div>
                        Here,<br>
                        <ul>
                            <li>A while loop evaluates the textExpression inside the parenthesis ().</li>
                            <li>If the textExpression evaluates to true, the code inside the while loop is executed.</li>
                            <li>The textExpression is evaluated again.</li>
                            <li>This process continues until the textExpression is false.</li>
                            <li>When the textExpression evaluates to false, the loop stops.</li>
                            </ul>
                            <p>To learn more about the conditions, visit Java relational and logical operators.</p>
                            <h4>Flowchart of while loop</h4>
                            <img src="images/java-while-loop.png" alt="" style="border: 1px solid black; margin-left: 200px; height: 500px; padding: 50px; margin-bottom: 1.5rem;">
                            <h4>Example 1: Display Numbers from 1 to 5</h4>
                            <div class="interpreter">
                                // Program to display numbers from 1 to 5<br>
                                class Main {<br>
                                  public static void main(String[] args) {<br>
                                    // declare variables<br>
                                    int i = 1, n = 5;<br>
                                    // while loop from 1 to 5<br>
                                    while(i <= n) {<br>
                                      System.out.println(i);<br>
                                      i++;<br>
                                    }<br>
                                  }<br>
                                }
                                <div class="run-btn">
                                    <a href="https://www.programiz.com/java-programming/online-compiler/?ref=1445a609" target="_blank"><button>Run code >></button></a>
                                </div>
                            </div>
                            <p><b>Output</b></p>
                            <div class="output">
                                1<br>
                                2<br>
                                3<br>
                                4<br>
                                5
                            </div>
                            <h4>Java do...while loop</h4>
                            <p>The do...while loop is similar to while loop. However, the body of do...while loop is executed once before the test expression is checked. For example,</p>
                            <div class="interpreter">
                                do {<br>
                                    // body of loop<br>
                                } while(textExpression);
                            </div>
                            Here,<br>
                            <ol>
                                <li>The body of the loop is executed at first. Then the textExpression is evaluated.</li>
                                <li>If the textExpression evaluates to true, the body of the loop inside the do statement is executed again.</li>
                                <li>The textExpression is evaluated once again.</li>
                                <li>If the textExpression evaluates to true, the body of the loop inside the do statement is executed again.</li>
                                <li>This process continues until the textExpression evaluates to false. Then the loop stops.</li>
                                </ol>
                                <h4>Flowchart of do...while loop</h4>
                                <img src="images/java-do-while-loop.png" alt="" style="border: 1px solid black; margin-left: 200px; margin-bottom: 1.5rem; height: 500px; padding: 50px;">
                                <p>Let's see the working of do...while loop.</p>
                                <h4>Example 3: Display Numbers from 1 to 5</h4>
                                <div class="interpreter">
                                    // Java Program to display numbers from 1 to 5<br>
                                    import java.util.Scanner;<br>
                                    // Program to find the sum of natural numbers from 1 to 100.<br>
                                    class Main {
                                    public static void main(String[] args) {<br>
                                        int i = 1, n = 5;<br>
                                        // do...while loop from 1 to 5<br>
                                        do {<br>
                                        System.out.println(i);<br>
                                        i++;<br>
                                        } while(i <= n);<br>
                                    }<br>
                                    }
                                    <div class="run-btn">
                                        <a href="" target="_blank"><button>Run code >></button></a>
                                    </div>
                                </div>
                                <p><b>Output</b></p>
                                <div class="output">
                                    1
                                    2
                                    3
                                    4
                                    5
                                </div>
                                <h4>Infinite while loop</h4>
                                <p>If the condition of a loop is always true, the loop runs for infinite times (until the memory is full). For example,</p>
                                <div class="interpreter">
                                    // infinite while loop<br>
                                    while(true){<br>
                                        // body of loop<br>
                                    }
                                </div>
                                <p>Here is an example of an infinite do...while loop.</p>
                                <div class="interpreter">
                                    // infinite do...while loop<br>
                                    int count = 1;<br>
                                    do {<br>
                                    // body of loop<br>
                                    } while(count == 1)
                                </div>
                                <p>In the above programs, the textExpression is always true. Hence, the loop body will run for infinite times.</p>
                                <h4>for and while loops</h4>
                                <p>The for loop is used when the number of iterations is known. For example,</p>
                                <div class="intepreter">
                                    for (let i = 1; i <=5; ++i) {<br>
                                        // body of loop<br>
                                     }
                                </div>
                                <p>And while and do...while loops are generally used when the number of iterations is unknown. For example,</p>
                                <div class="interpreter">
                                    while (condition) {<br>
                                        // body of loop<br>
                                    }
                                </div>
                            </div>
                    <div id="break">
                        <h3>Java break Statement</h3>
                        <p>While working with loops, it is sometimes desirable to skip some statements inside the loop or terminate the loop immediately without checking the test expression.</p>
                        <p>In such cases, break and continue statements are used. You will learn about the Java continue statement in the next tutorial.</p>
                        <p>The break statement in Java terminates the loop immediately, and the control of the program moves to the next statement following the loop.</p>
                        <p>It is almost always used with decision-making statements (Java if...else Statement).</p>
                       <p> Here is the syntax of the break statement in Java:</p>
                    <div class="interpreter">
                        break;
                    </div>
                    <h3>How break statement works?</h3>
                    <img src="images/java-break-statement-works.webp" alt="" style="width: 100%; border: 1px solid black; margin-bottom: 1.5rem; height: 500px;">
                    <h4>Example 1: Java break statement</h4>
                    <div class="interpreter">
                        class Test {<br>
                            public static void main(String[] args) {<br>
                              
                                // for loop<br>
                                for (int i = 1; i <= 10; ++i) {<br>
                        
                                    // if the value of i is 5 the loop terminates  <br>
                                    if (i == 5) {<br>
                                        break;<br>
                                    }      <br>
                                    System.out.println(i);<br>
                                }   <br>
                            }<br>
                        }
                        <div class="run-btn">
                            <a href="https://www.programiz.com/java-programming/online-compiler/?ref=42ad94cc" target="_blank"><button>Run code >></button></a>
                        </div>
                    </div>
                    <p><b>Output</b></p>
                    <div class="output">
                        1<br>
                        2<br>
                        3<br>
                        4
                    </div>
                    <p>In the above program, we are using the for loop to print the value of i in each iteration. To know how for loop works, visit the Java for loop. Here, notice the statement,</p>
                    <div class="interpreter">
                        if (i == 5) {<br>
                            break;<br>
                        }
                    </div>
                    <p>This means when the value of i is equal to 5, the loop terminates. Hence we get the output with values less than 5 only.</p>
                    <h4>Java break and Nested Loop</h4>
                    <p>In the case of nested loops, the break statement terminates the innermost loop.</p>
                    <div style="text-align: center; border: 1px solid black;">
                    <img src="images/nested-while-loop-break.webp" alt="">
                </div>    
                <p>Here, the break statement terminates the innermost while loop, and control jumps to the outer loop.</p>
                <h4>Labeled break Statement</h4>
                <p>Till now, we have used the unlabeled break statement. It terminates the innermost loop and switch statement. However, there is another form of break statement in Java known as the labeled break.</p>
                <p>We can use the labeled break statement to terminate the outermost loop as well.</p>
              <div style="border: 1px solid black; text-align: center;">
                <img src="images/labeled-break-statement-Java.webp" alt="">
              </div>
            <p>  As you can see in the above image, we have used the label identifier to specify the outer loop. Now, notice how the break statement is used (break label;).</p>
            <p>Here, the break statement is terminating the labeled statement (i.e. outer loop). Then, the control of the program jumps to the statement after the labeled statement.</p>
            <p>Here's another example:</p>
            <div class="interpreter">
                while (testExpression) {<br>
                    // codes<br>
                    second:<br>
                    while (testExpression) {<br>
                       // codes<br>
                       while(testExpression) {<br>
                          // codes<br>
                          break second;<br>
                       }<br>
                    }<br>
                    // control jumps here<br>
                 }
            </div>
            <p>In the above example, when the statement break second; is executed, the while loop labeled as second is terminated. And, the control of the program moves to the statement after the second while loop.</p>
            <h4>Example 3: labeled break Statement</h4>
            <div class="interpreter">
                class LabeledBreak {<br>
                    public static void main(String[] args) {   <br>                
                        // the for loop is labeled as first  <br> 
                        first:<br>
                        for( int i = 1; i < 5; i++) {    <br>            
                            // the for loop is labeled as second<br>
                            second:<br>
                            for(int j = 1; j < 3; j ++ ) {<br>
                                System.out.println("i = " + i + "; j = " +j); <br>                            
                                // the break statement breaks the first for loop<br>
                                if ( i == 2)<br>
                                    break first;<br>
                            }<br>
                        }<br>
                    }<br>
                }
                <div class="run-btn">
                    <a href="https://www.programiz.com/java-programming/online-compiler/?ref=dff61ee3" target="_blank" ><button>Run code >></button></a>
                </div>
            </div>
            <p><b>Output</b></p>
            <div class="output">
                i = 1; j = 1<br>
                i = 1; j = 2<br>
                i = 2; j = 1
            </div>
            <p>In the above example, the labeled break statement is used to terminate the loop labeled as first. That is,</p>
            <div class="interpreter">
                first:<br>
                for(int i = 1; i < 5; i++) {...}
            </div>

        </div>
        <div id="continue">
            <h3>Java continue Statement</h3>
            <p>While working with loops, sometimes you might want to skip some statements or terminate the loop. In such cases, break and continue statements are used.</p>
            <p>To learn about the break statement, visit Java break. Here, we will learn about the continue statement.</p>
            <h4>Java continue</h4>
            <p>The continue statement skips the current iteration of a loop (for, while, do...while, etc).            </p>
            <p>After the continue statement, the program moves to the end of the loop. And, test expression is evaluated (update statement is evaluated in case of the for loop).            </p>
            <p>Here's the syntax of the continue statement.</p>
            <div class="interpreter">
                continue;
            </div>
            <h4>Working of Java continue statement</h4>
            <img src="images/java-continue.webp" alt="" style="width: 100%; height: 500px;">
            <h4>Example 1: Java continue statement</h4>
            <div class="interpreter">
                class Main {<br>
                    public static void main(String[] args) {    <br>              
                      // for loop<br>
                      for (int i = 1; i <= 10; ++i) {    <br>            
                        // if value of i is between 4 and 9<br>
                        // continue is executed<br>
                        if (i > 4 && i < 9) {<br>
                          continue;<br>
                        }<br>
                        System.out.println(i);<br>
                      }<br>
                    }<br>
                  }
                <div class="run-btn">
                    <a href="https://www.programiz.com/java-programming/online-compiler/?ref=29d5c304" target="_blank"><button>Run code >></button></a>
                </div>
            </div>
            <p><b>Output</b></p>
            <div class="output">
                    1<br>
                    2 <br>
                    3 <br>
                    4 <br>
                    9 <br>
                    10
            </div>
            <p>In the above program, we are using the for loop to print the value of i in each iteration. To know how for loop works, visit Java for loop. Notice the statement,</p>
            <div class="interpreter">
                if (i > 4 && i < 9) {<br>
                    continue;<br>
                }
            </div>
            <p>Here, the continue statement is executed when the value of i becomes more than 4 and less than 9.</p>
            <p>It then skips the print statement for those values. Hence, the output skips the values 5, 6, 7, and 8.</p>
            <h4>Java continue with Nested Loop</h4>
                <p>In the case of nested loops in Java, the continue statement skips the current iteration of the innermost loop.</p>
                <div style="text-align: center; border: 1px solid black; ">
                    <img src="images/java-continue-with-nested-loop.webp" height="400px" alt="">
                </div>
                <h4>Example 2: continue with Nested Loop</h4>
                <div class="interpreter">
                    class Main {<br>
                        public static void main(String[] args) {    <br>                  
                          int i = 1, j = 1;           <br>           
                          // outer loop<br>
                          while (i <= 3) {       <br>               
                            System.out.println("Outer Loop: " + i);<br>                      
                            // inner loop<br>
                            while(j <= 3) {     <br>                 
                              if(j == 2) {<br>
                                j++;<br>
                                continue;<br>
                              }                      <br>
                              System.out.println("Inner Loop: " + j);<br>
                              j++;<br>
                            }<br>
                            i++;<br>
                          }<br>
                        }<br>
                      }
                    <div class="run-btn">
                        <a href="https://www.programiz.com/java-programming/online-compiler/?ref=5f13d7bd" target="_blank"><button>Run code >></button></a>
                    </div>
                </div>
                <p><b>Output</b></p>
                <div class="output">
                    Outer Loop: 1<br>
                    Inner Loop: 1<br>
                    Inner Loop: 3<br>
                    Outer Loop: 2<br>
                    Outer Loop: 3
                </div>
                <p>In the above example, we have used the nested while loop. Note that we have used the continue statement inside the inner loop.</p>
                <div class="interpreter">
                    if(j == 2) {<br>
                        j++;<br>
                        continue:<br>
                      }
                </div>
                <p>Here, when the value of j is 2, the value of j is increased and the continue statement is executed.</p>
                <p>This skips the iteration of the inner loop. Hence, the text Inner Loop: 2 is skipped from the output.</p>
                <h4>Labeled continue Statement</h4>
                <p>Till now, we have used the unlabeled continue statement. However, there is another form of continue statement in Java known as labeled continue.</p>
                <p>It includes the label of the loop along with the continue keyword. For example,</p>
                <div class="interpreter">
                    continue label;
                </div>
                <p>Here, the continue statement skips the current iteration of the loop specified by label.</p>
                <div style="text-align: center; border: 1px solid black;">
                    <img src="images/java-labeled-continue.webp" height="400px">
                </div>
                <p>We can see that the label identifier specifies the outer loop. Notice the use of the continue inside the inner loop.</p>
                <p>Here, the continue statement is skipping the current iteration of the labeled statement (i.e. outer loop). Then, the program control goes to the next iteration of the labeled statement.</p>
                <h4>Example 4: labeled continue Statement</h4>
                <div class="interpreter">
                    <div class="run-btn">
                        <a href="https://www.programiz.com/java-programming/online-compiler/?ref=e4fad90f" target="_blank"><button>Run code >></button></a>
                    </div>
                </div>
                <p><b>Output</b></p>
                <div class="output">
                    i = 1; j = 1<br>
                    i = 2; j = 1<br>
                    i = 4; j = 1<br>
                    i = 5; j = 1
                </div>
                <p>In the above example, the labeled continue statement is used to skip the current iteration of the loop labeled as first.</p>
                <div class="interpreter">
                    if (i==3 || j==2)<br>
                    continue first;
                </div>
                <p>Here, we can see the outermost for loop is labeled as first,</p>
                <div class="interpreter">
                    first:<br>
                    for (int i = 1; i < 6; ++i) {..}
                </div>
            
                <p>Hence, the iteration of the outer for loop is skipped if the value of i is 3 or the value of j is 2.</p>
            </div>
                <div id="switch">  
                <h3>Java switch Statement</h3>
                    <p>The switch statement allows us to execute a block of code among many alternatives.</p>
                    <h4>Syntax:</h4>
                    <div class="interpreter">
                        switch (expression) {<br>
                            case value1:<br>
                              // code<br>
                              break;       <br>                     
                            case value2:<br>
                              // code<br>
                              break;     <br>                       
                            ...<br>
                            ...         <br>                   
                            default:<br>
                              // default statements<br>
                            }
                    </div>
                    <h4>How does the switch-case statement work?</h4>
                    <p>The expression is evaluated once and compared with the values of each case.</p>
                    <ul>
                    <li>If expression matches with value1, the code of case value1 are executed. Similarly, the code of case value2 is executed if expression matches with value2</li>
                    <li>If there is no match, the code of the default case is executed</li></ul>
                    <h4>Example: Java switch Statement</h4>
                    <div class="interpreter">
                        // Java Program to check the size<br>
                        // using the switch...case statement<br>
                        class Main {<br>
                          public static void main(String[] args) {<br>
                            int number = 44;<br>
                            String size;<br>
                            // switch statement to check size<br>
                            switch (number) {<br>
                              case 29:<br>
                                size = "Small";<br>
                                break;<br>
                              case 42:<br>
                                size = "Medium";<br>
                                break;<br>
                              // match the value of week<br>
                              case 44:<br>
                                size = "Large";<br>
                                break;<br>
                              case 48:<br>
                                size = "Extra Large";<br>
                                break;<br>
                              default:<br>
                                size = "Unknown";<br>
                                break;<br>
                            }<br>
                            System.out.println("Size: " + size);<br>
                          }<br>
                        }
                        <div class="run-btn">
                            <a href="https://www.programiz.com/java-programming/online-compiler/?ref=0cc74541" target="_blank"><button>Run code >></button></a>
                        </div>
                    </div>
                    <p><b>Output</b></p>
                    <div class="output">
                        Size: Large
                    </div>
                    <p>In the above example, we have used the switch statement to find the size. Here, we have a variable number. The variable is compared with the value of each case statement.</p>
                    <p>Since the value matches with 44, the code of case 44 is executed.</p>
                    <div class="interpreter">
                        size = "Large";<br>
                        break;
                    </div>
                    <p>Here, the size variable is assigned with the value Large.</p>
                    <h4>Flowchart of switch Statement</h4>
                    <div style="text-align: center; border: 1px solid black;">
                        <img src="images/java-switch-case-implementation.png" height="500px" alt="">
                    </div>
                    <h4>break Statement in Java switch...case</h4>
                    <p>Notice that we have been using break in each case block.</p>
                    <div class="interpreter">
                        ...<br>
                        case 29:<br>
                          size = "Small";<br>
                          break;<br>
                        ...
                    </div>
                    <p>The break statement is used to terminate the switch-case statement. If break is not used, all the cases after the matching case are also executed. For example,</p>
                    <div class="interpreter">
                        class Main {<br>
                            public static void main(String[] args) {<br>
                          
                              int expression = 2;<br>
                          
                              // switch statement to check size<br>
                              switch (expression) {<br>
                                case 1:<br>
                                  System.out.println("Case 1");<br>
                          
                                  // matching case<br>
                                case 2:<br>
                                  System.out.println("Case 2");<br>
                          
                                case 3:<br>
                                  System.out.println("Case 3");<br>
                          
                                default:<br>
                                  System.out.println("Default case");<br>
                              }<br>
                            }<br>
                          }
                        <div class="run-btn">
                            <a href="https://www.programiz.com/java-programming/online-compiler/?ref=b181d67e" target="_blank"><button>Run code >></button></a>
                        </div>
                    </div>
                    <p><b>Output</b></p>
                    <div class="output">
                        Case 2<br>
                        Case 3      <br>
                        Default case
                    </div>
                    <p>In the above example, expression matches with case 2. Here, we haven't used the break statement after each case.</p>
                    <p>Hence, all the cases after case 2 are also executed.</p>
                    <p>This is why the break statement is needed to terminate the switch-case statement after the matching case. To learn more, visit Java break Statement.</p>
                    <h4>default Case in Java switch-case</h4>
                    <p>The switch statement also includes an optional default case. It is executed when the expression doesn't match any of the cases. For example,</p>
                    <div class="interpreter">
                        class Main {<br>
                            public static void main(String[] args) {<br>
                            
                              int expression = 9;<br>
                              
                              switch(expression) {<br>
                                  
                                case 2:<br>
                                  System.out.println("Small Size");<br>
                                  break;<br>
                          
                                case 3:<br>
                                  System.out.println("Large Size");<br>
                                  break;<br>
                                      
                                // default case<br>
                                default:<br>
                                  System.out.println("Unknown Size");<br>
                              }<br>
                            }<br>
                          }
                        <div class="run-btn">
                            <a href="https://www.programiz.com/java-programming/online-compiler/?ref=957e99f1" target="_blank"><button>Run code >></button></a>
                        </div>
                    </div>
                    <p><b>Output</b></p>
                    <div class="output">
                        Unknown Size
                    </div>
                    <p>In the above example, we have created a switch-case statement. Here, the value of expression doesn't match with any of the cases.</p>
                    <p>Hence, the code inside the default case is executed.</p>
                    <div class="interpreter">
                        default:<br>
                        System.out.println("Unknown Size);
                    </div>
        </div>
                </section>
                <section id="arrays">
                <div id="array">
                    <h4>Java Arrays</h4>
                    <p>An array is a collection of similar types of data.</p>
                    <p>For example, if we want to store the names of 100 people then we can create an array of the string type that can store 100 names.</p>
                    <div class="interpreter">
                        String[] array = new String[100];
                    </div>
                    <p>Here, the above array cannot store more than 100 names. The number of values in a Java array is always fixed.
                        <h4>How to declare an array in Java?</h4>
                        <p>In Java, here is how we can declare an array.</p>
                        <div class="interpreter">
                            dataType[] arrayName;
                        </div>
                        <ul>
                            <li>dataType - it can be primitive data types like int, char, double, byte, etc. or Java objects</li>
                            <li>arrayName - it is an identifier</li>
                        </ul>
                        <p>For example,</p>
                        <div class="interpreter">
                            double[] data;
                        </div>
                        <p>Here, data is an array that can hold values of type double.</p>
                        <h4>But, how many elements can array this hold?</h4>
                        <p>Good question! To define the number of elements that an array can hold, we have to allocate memory for the array in Java. For example,</p>
                        <div class="interpreter">
                            // declare an array<br>
                            double[] data;<br>
                            // allocate memory<br>
                            data = new double[10];
                        </div>
                        <p>Here, the array can store 10 elements. We can also say that the size or length of the array is 10.</p>
                        <p>In Java, we can declare and allocate the memory of an array in one single statement. For example,</p>
                        <div class="interpreter">
                            double[] data = new double[10];
                        </div>
                        <h4>How to Initialize Arrays in Java?</h4>
                        <p>In Java, we can initialize arrays during declaration. For example,</p>
                        <div class="interpreter">
                            //declare and initialize and array<br>
                            int[] age = {12, 4, 5, 2, 5};
                                </div>
                                <p>Here, we have created an array named age and initialized it with the values inside the curly brackets.</p>
                                <p>Note that we have not provided the size of the array. In this case, the Java compiler automatically specifies the size by counting the number of elements in the array (i.e. 5).</p>
                                <p>In the Java array, each memory location is associated with a number. The number is known as an array index. We can also initialize arrays in Java, using the index number. For example,</p>
                                <div class="interpreter">
                                    // declare an array<br>
                                    int[] age = new int[5];<br>

                                    // initialize array<br>
                                    age[0] = 12;<br>
                                    age[1] = 4;<br>
                                    age[2] = 5;
                                    ..
                                </div>
                                <div style="text-align: center;">
                                    <img src="images/initialize-array-during-declaration-java.webp" alt="">
                                </div>
                                <h4>How to Access Elements of an Array in Java?</h4>
                                <p>We can access the element of an array using the index number. Here is the syntax for accessing elements of an array,</p>
                                <div class="interpreter">
                                    // access array elements<br>
                                    array[index]
                                </div>
                                <p>Let's see an example of accessing array elements using index numbers.</p>
                                <h4>Example: Access Array Elements</h4>
                                class Main {<br>
                                    public static void main(String[] args) {<br>
                                     
                                      // create an array<br>
                                      int[] age = {12, 4, 5, 2, 5};<br>
                                   
                                      // access each array elements<br>
                                      System.out.println("Accessing Elements of Array:");<br>
                                      System.out.println("First Element: " + age[0]);<br>
                                      System.out.println("Second Element: " + age[1]);<br>
                                      System.out.println("Third Element: " + age[2]);<br>
                                      System.out.println("Fourth Element: " + age[3]);<br>
                                      System.out.println("Fifth Element: " + age[4]);<br>
                                    }<br>
                                   }
                                   <div class="run-btn">
                                    <a href="https://www.programiz.com/java-programming/online-compiler?ref=1aeac922" target="_blank">Run code >></a>
                                   </div>
                                   <p><b>Output</b></p>
                                   <div class="output">
                                    Accessing Elements of Array:<br>
                                    First Element: 12<br>
                                    Second Element: 4<br>
                                    Third Element: 5<br>
                                    Fourth Element: 2<br>
                                    Fifth Element: 5
                                   </div>
                                   <p>In the above example, notice that we are using the index number to access each element of the array.</p>
                                    <p>We can use loops to access all the elements of the array at once.</p>
                                    <h4>Looping Through Array Elements</h4>
                                    <h4>In Java, we can also loop through each element of the array. For example,</h4>
                                    <h4>Example: Using For Loop</h4>
                                    <div class="interpreter">
                                        class Main {<br>
                                            public static void main(String[] args) {<br>
                                             
                                              // create an array<br>
                                              int[] age = {12, 4, 5};<br>
                                           
                                              // loop through the array<br>
                                              // using for loop<br>
                                              System.out.println("Using for Loop:");<br>
                                              for(int i = 0; i < age.length; i++) {<br>
                                                System.out.println(age[i]);<br>
                                              }<br>
                                            }<br>
                                           }
                                           <div class="run-btn">
                                            <a href="https://www.programiz.com/java-programming/online-compiler?ref=9ee7c065 " target="_blank"> <button>Run code >></button></a>
                                           </div>
                                    </div>
                                    <p><b>Output</b></p>
                                    <div class="output">
                                        Using for Loop:<br>
                                        12<br>
                                        4<br>
                                        5
                                    </div>
                                    <p>In the above example, we are using the for Loop in Java to iterate through each element of the array. Notice the expression inside the loop,</p>
                                    <div class="interpreter">
                                        age.length
                                    </div>
                                    <p>Here, we are using the length property of the array to get the size of the array.</p>
                                    <p>We can also use the for-each loop to iterate through the elements of an array. For example,</p>
                                    <h4>Example: Using the for-each Loop</h4>
                                    <div class="interpreter">
                                        class Main {<br>
                                            public static void main(String[] args) {<br>
                                             
                                              // create an array<br>
                                              int[] age = {12, 4, 5};<br>
                                           
                                              // loop through the array<br>
                                              // using for loop<br>
                                              System.out.println("Using for-each Loop:");<br>
                                              for(int a : age) {<br>
                                                System.out.println(a);<br>
                                              }<br>
                                            }<br>
                                           }
                                           <div class="run-btn">
                                            <a href="https://www.programiz.com/java-programming/online-compiler?ref=e1f1a509" target="_blank"><button>Run code >></button></a>
                                           </div>
                                        </div>
                                           <p><b>Output</b></p>
                                           <div class="output">
                                            Using for-each Loop:<br>
                                            12<br>
                                            4<br>
                                            5
                                           </div>
                    </div>
                </section>
                <section id="oop1">
                    <div class="editor-contents">
                        <h1>Java Class and Objects</h1>
                      <!--  <p class="editor-contents__short-description"></p> -->
<div id="node-1067" class="node node-java-tutorial clearfix" about="/java-programming/class-objects" typeof="sioc:Item foaf:Document">
<span property="dc:title" content="Java Class and Objects" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">Java is an object-oriented programming language. The core concept of the object-oriented approach is to break complex problems into smaller objects.</p>

<p>An object is any entity that has a <strong>state</strong> and <strong>behavior</strong>. For example, a <var>bicycle</var> is an object. It has</p>

<ul>
<li><strong>States</strong>: idle, first gear, etc</li>
<li><strong>Behaviors</strong>: braking, accelerating, etc.</li>
</ul>

<p>Before we learn about objects, let's first know about classes in Java.</p>

<hr>
<h2 id="class">Java Class</h2>

<p>A class is a blueprint for the object. Before we create an object, we first need to define the class.</p>

<p>We can think of the class as a sketch (prototype) of a house. It contains all the details about the floors, doors, windows, etc. Based on these descriptions we build the house. House is the object.</p>

<p>Since many houses can be made from the same description, we can create many objects from a class.</p>

<hr>
<h2 id="create-class">Create a class in Java</h2>

<p>We can create a class in Java using the class keyword. For example,</p>

<pre>
<code>class ClassName {
// fields
// methods
}</code></pre>

<p>Here, <var>fields</var> (<a href="/java-programming/variables-literals">variables</a>) and <a href="/java-programming/methods">methods</a> represent the <strong>state</strong> and <strong>behavior</strong> of the object respectively.</p>

<ul>
<li>fields are used to store data</li>
<li>methods are used to perform some operations</li>
</ul>

<p>For our <var>bicycle</var> object, we can create the class as</p>

<pre>
<code>class Bicycle {

// state or field
private int gear = 5;

// behavior or method
public void braking() {
System.out.println("Working of Braking");
}
}</code></pre>

<p>In the above example, we have created a class named <var>Bicycle</var>. It contains a field named <var>gear</var> and a method named <var>braking()</var>.</p>

<p>Here, <var>Bicycle</var> is a prototype. Now, we can create any number of bicycles using the prototype. And, all the bicycles will share the fields and methods of the prototype.</p>

<p class="note-tip"><strong>Note</strong>: We have used <a href="/java-programming/keywords-identifiers">keywords</a> <code>private</code> and <code>public</code>. These are known as access modifiers. To learn more, visit <a href="/java-programming/access-modifiers">Java access modifiers</a>.</p>

<hr>
<h2 id="objects">Java Objects</h2>

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
</div><div class="clearfix"></div><p>An object is called an instance of a class. For example, suppose <var>Bicycle</var> is a class then <var>MountainBicycle</var>, <var>SportsBicycle</var>, <var>TouringBicycle</var>, etc can be considered as objects of the class.</p>

<h3>Creating an Object in Java</h3>

<p>Here is how we can create an object of a class.</p>

<pre>
<code>className object = new className();

// for Bicycle class
Bicycle sportsBicycle = new Bicycle();

Bicycle touringBicycle = new Bicycle();</code></pre>

<p>We have used the <code>new</code> keyword along with the constructor of the class to create an object. Constructors are similar to methods and have the same name as the class. For example, <code>Bicycle()</code> is the constructor of the <var>Bicycle</var> class. To learn more, visit <a href="/java-programming/constructors">Java Constructors</a>.</p>

<p>Here, <var>sportsBicycle</var> and <var>touringBicycle</var> are the names of objects. We can use them to access fields and methods of the class.</p>

<p>As you can see, we have created two objects of the class. We can create multiple objects of a single class in Java.</p>

<p class="note-tip"><strong>Note</strong>: Fields and methods of a class are also called members of the class.</p>

<hr>
<h2 id="access-members">Access Members of a Class</h2>

<p>We can use the name of objects along with the <code>.</code> operator to access members of a class. For example,</p>

<pre>
<code>class Bicycle {

// field of class
int gear = 5;

// method of class
void braking() {
...
}
}

// create object
Bicycle sportsBicycle = new Bicycle();

// access field and method
sportsBicycle.gear;
sportsBicycle.braking();</code></pre>

<p>In the above example, we have created a class named <var>Bicycle</var>. It includes a field named <var>gear</var> and a method named <code>braking()</code>. Notice the statement,</p>

<pre>
<code>Bicycle sportsBicycle = new Bicycle();</code></pre>

<p>Here, we have created an object of <var>Bicycle</var> named <var>sportsBicycle</var>. We then use the object to access the field and method of the class.</p>

<ul>
<li><strong>sportsBicycle.gear</strong> - access the field <var>gear</var></li>
<li><strong>sportsBicycle.braking()</strong> - access the method <code>braking()</code></li>
</ul>

<p>We have mentioned the word <strong>method</strong> quite a few times. You will learn about <a href="/java-programming/methods">Java methods</a> in detail in the next chapter.</p>

<p>Now that we understand what is class and object. Let's see a fully working example.</p>

<hr>
<h2 id="class-objects">Example: Java Class and Objects</h2>

<pre class="java-exec">
<code>class Lamp {

// stores the value for light
// true if light is on
// false if light is off
boolean isOn;

// method to turn on the light
void turnOn() {
isOn = true;
System.out.println("Light on? " + isOn);

}

// method to turnoff the light
void turnOff() {
isOn = false;
System.out.println("Light on? " + isOn);
}
}

class Main {
public static void main(String[] args) {

// create objects led and halogen
Lamp led = new Lamp();
Lamp halogen = new Lamp();

// turn on the light by
// calling method turnOn()
led.turnOn();

// turn off the light by
// calling method turnOff()
halogen.turnOff();
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Light on? true
Light on? false</samp></pre>

<p>In the above program, we have created a class named <var>Lamp</var>. It contains a variable: <var>isOn</var> and two methods: <code>turnOn()</code> and <code>turnOff()</code>.</p>

<p>Inside the <var>Main</var> class, we have created two objects: <var>led</var> and <var>halogen</var> of the <var>Lamp</var> class. We then used the objects to call the methods of the class.</p>

<ul>
<li><strong>led.turnOn()</strong> - It sets the <var>isOn</var> variable to <code>true</code> and prints the output.</li>
<li><strong>halogen.turnOff()</strong> - It sets the <var>isOn</var> variable to <code>false</code> and prints the output.</li>
</ul>

<p>The variable <var>isOn</var> defined inside the class is also called an instance variable. It is because when we create an object of the class, it is called an instance of the class. And, each instance will have its own copy of the variable.</p>

<p>That is, <var>led</var> and <var>halogen</var> objects will have their own copy of the <var>isOn</var> variable.</p>

<hr>
<h2 id="example">Example: Create objects inside the same class</h2>

<p>Note that in the previous example, we have created objects inside another class and accessed the members from that class.</p>

<p>However, we can also create objects inside the same class.</p>

<pre class="java-exec">
<code>class Lamp {

// stores the value for light
// true if light is on
// false if light is off
boolean isOn;

// method to turn on the light
void turnOn() {
isOn = true;
System.out.println("Light on? " + isOn);

}

public static void main(String[] args) {

// create an object of Lamp
Lamp led = new Lamp();

// access method using object
led.turnOn();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Light on? true</samp></pre>

<p>Here, we are creating the object inside the <code>main()</code> method of the same class.</p>

</div>



</div>

            
                        <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
  <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#class">Java Class</a></li>
<li><a href="#create-class">Create a class in Java</a></li>
<li><a href="#objects">Java Objects</a></li>
<li><a href="#access-members">Access Members of a Class</a></li>
<li><a href="#class-objects">Example: Java Class and Objects</a></li>
<li><a href="#example">Example: Create objects inside a class</a></li>
</ul>
</div></div></div>      
                    </div>
                    <div id="method">
                        <div class="editor-contents">
                            <h1>Java Methods</h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-1365" class="node node-java-tutorial clearfix" about="/java-programming/methods" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java Methods" class="rdf-meta element-hidden"></span>

<div class="content">
    <p id="introduction">A method is a block of code that performs a specific task.</p>

<p>Suppose you need to create a program to create a circle and color it. You can create two methods to solve this problem:</p>

<ul>
  <li>a method to draw the circle</li>
  <li>a method to color the circle</li>
</ul>

<p>Dividing a complex problem into smaller chunks makes your program easy to understand and reusable.</p>

<p>In Java, there are two types of methods:</p>

<ul>
  <li><strong>User-defined Methods</strong>: We can create our own method based on our requirements.</li>
  <li><strong>Standard Library Methods</strong>: These are built-in methods in Java that are available to use.</li>
</ul>

<p>Let's first learn about user-defined methods.</p>

<hr>
<h2 id="declare-method">Declaring a Java Method</h2>

<p>The syntax to declare a method is:</p>

<pre>
<code>returnType methodName() {
// method body
}</code></pre>

<p>Here,</p>

<ul>
  <li><strong>returnType</strong> - It specifies what type of value a method returns For example if a method has an <code>int</code> return type then it returns an integer value.<br>
<br>
If the method does not return a value, its return type is <code>void</code>.</li>
  <li><strong>methodName</strong> - It is an <a href="/java-programming/keywords-identifiers#identifiers">identifier</a> that is used to refer to the particular method in a program.</li>
  <li><strong>method body</strong> - It includes the programming statements that are used to perform some tasks. The method body is enclosed inside the curly braces <code>{ }</code>.</li>
</ul>

<p>For example,</p>

<pre>
<code>int addNumbers() {
// code
}</code></pre>

<p>In the above example, the name of the method is <code>adddNumbers()</code>. And, the return type is <code>int</code>. We will learn more about return types later in this tutorial.</p>

<p>This is the simple syntax of declaring a method. However, the complete syntax of declaring a method is</p>

<pre>
<code>modifier static returnType nameOfMethod (parameter1, parameter2, ...) {
// method body
}</code></pre>

<p>Here,</p>

<ul>
  <li><strong>modifier</strong> - It defines access types whether the method is public, private, and so on. To learn more, visit <a href="/java-programming/access-modifiers">Java Access Specifier</a>.</li>
  <li><strong>static</strong> - If we use the <code>static</code> keyword, it can be accessed without creating objects.<br>
<br>
For example, the <code>sqrt()</code> method of standard <a href="https://docs.oracle.com/javase/8/docs/api/java/lang/Math.html">Math class</a> is static. Hence, we can directly call <code>Math.sqrt()</code> without creating an instance of <code>Math</code> class.</li>
</ul>

<ul>
  <li><strong>parameter1/parameter2</strong> - These are values passed to a method. We can pass any number of arguments to a method.</li>
</ul>

<hr>
<h2 id="call-method">Calling a Method in Java</h2>

<p>In the above example, we have declared a method named <code>addNumbers()</code>. Now, to use the method, we need to call it.</p>

<p>Here's is how we can call the <code>addNumbers()</code> method.</p>

<pre>
<code>// calls the method
addNumbers();</code></pre>

<figure><img src="/sites/tutorial2program/files/java-method-call.png" title="Working of Java Method Call" alt="Call a method in Java using the name the method followed by a parenthesis" width="420" height="221">
  <figcaption>Working of Java Method Call</figcaption></figure>
<hr>
<h2>Example 1: Java Methods</h2>

<pre class="java-exec">
<code>class Main {

// create a method
public int addNumbers(int a, int b) {
  int sum = a + b;
  // return value
  return sum;
}

public static void main(String[] args) {
  
  int num1 = 25;
  int num2 = 15;

  // create an object of Main
  Main obj = new Main();
  // calling method
  int result = obj.addNumbers(num1, num2);
  System.out.println("Sum is: " + result);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Sum is: 40</samp></pre>

<p>In the above example, we have created a method named <code>addNumbers()</code>. The method takes two parameters <var>a</var> and <var>b</var>. Notice the line,</p>

<pre>
<code>int result = obj.addNumbers(num1, num2);</code></pre>

<p>Here, we have called the method by passing two arguments <var>num1</var> and <var>num2</var>. Since the method is returning some value, we have stored the value in the <var>result</var> variable.</p>

<p class="note-tip"><strong>Note</strong>: The method is not static. Hence, we are calling the method using the object of the class.</p>

<hr>
<h2 id="return-type">Java Method Return Type</h2>

<p>A Java method may or may not return a value to the function call. We use the <strong>return statement</strong> to return any value. For example,</p>

<pre>
<code>int addNumbers() {
...
return sum;
}</code></pre>

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
  </div><div class="clearfix"></div><p>Here, we are returning the variable <var>sum</var>. Since the return type of the function is <code>int</code>. The sum variable should be of <code>int</code> type. Otherwise, it will generate an error.</p>

<h3>Example 2: Method Return Type</h3>

<pre class="java-exec">
<code>class Main {

// create a method
public static int square(int num) {

  // return statement
  return num * num;
}

public static void main(String[] args) {
  int result;

  // call the method
  // store returned value to result
  result = square(10);

  System.out.println("Squared value of 10 is: " + result);
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Squared value of 10 is: 100</samp></pre>

<p>In the above program, we have created a method named <code>square()</code>. The method takes a number as its parameter and returns the square of the number.</p>

<p>Here, we have mentioned the return type of the method as <code>int</code>. Hence, the method should always return an integer value.</p>

<figure><img src="/sites/tutorial2program/files/java-method-return-value.png" title="Representation of the Java method returning a value" alt="Java method returns a value to the method call" width="420" height="228">
  <figcaption>Representation of the Java method returning a value</figcaption></figure>
<div class="note-tip">
<p><strong>Note</strong>: If the method does not return any value, we use the void keyword as the return type of the method. For example,</p>

<pre>
<code>public void square(int a) {
int square = a * a;
System.out.println("Square is: " + square);
}</code></pre>

</div>
<hr>
<h2 id="method-parameters">Method Parameters in Java</h2>

<p>A method parameter is a value accepted by the method. As mentioned earlier, a method can also have any number of parameters. For example,</p>

<pre>
<code>// method with two parameters
int addNumbers(int a, int b) {
// code
}

// method with no parameter
int addNumbers(){
// code
}</code></pre>

<p>If a method is created with parameters, we need to pass the corresponding values while calling the method. For example,</p>

<pre>
<code>// calling the method with two parameters
addNumbers(25, 15);

// calling the method with no parameters
addNumbers()</code></pre>

<hr>
<h3>Example 3: Method Parameters</h3>

<pre class="java-exec">
<code>class Main {

// method with no parameter
public void display1() {
  System.out.println("Method without parameter");
}

// method with single parameter
public void display2(int a) {
  System.out.println("Method with a single parameter: " + a);
}

public static void main(String[] args) {
  
  // create an object of Main
  Main obj = new Main();

  // calling method with no parameter
  obj.display1();
  
  // calling method with the single parameter
  obj.display2(24);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Method without parameter
Method with a single parameter: 24</samp></pre>

<p>Here, the parameter of the method is <code>int</code>. Hence, if we pass any other data type instead of <code>int</code>, the compiler will throw an error. It is because Java is a strongly typed language.</p>

<div class="note-tip">
<p><strong>Note</strong>: The argument <var>24</var> passed to the <code>display2()</code> method during the method call is called the actual argument.</p>

<p>The parameter <var>num</var> accepted by the method definition is known as a formal argument. We need to specify the type of formal arguments. And, the type of actual arguments and formal arguments should always match.</p>

</div>
<hr>
<h2 id="standard-library">Standard Library Methods</h2>

<p>The standard library methods are built-in methods in Java that are readily available for use. These standard libraries come along with the Java Class Library (JCL) in a Java archive (*.jar) file with JVM and JRE.</p>

<p>For example,</p>

<ul>
  <li><code>print()</code> is a method of <code>java.io.PrintSteam</code>. The <code>print("...")</code> method prints the string inside quotation marks.</li>
  <li><a href="/java-programming/library/math/sqrt">sqrt()</a> is a method of <code>Math</code> class. It returns the square root of a number.</li>
</ul>

<p>Here's a working example:</p>

<h3>Example 4: Java Standard Library Method</h3>

<pre class="java-exec">
<code>public class Main {
public static void main(String[] args) {
  
  // using the sqrt() method
  System.out.print("Square root of 4 is: " + Math.sqrt(4));
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Square root of 4 is: 2.0</samp></pre>

<p>To learn more about standard library methods, visit <a href="/java-programming/library">Java Library Methods</a>.</p>

<hr>
<h2 id="advantages">What are the advantages of using methods?</h2>

<p><strong>1.</strong> The main advantage is <strong>code reusability</strong>. We can write a method once, and use it multiple times. We do not have to rewrite the entire code each time. Think of it as, "write once, reuse multiple times".</p>

<h3>Example 5: Java Method for Code Reusability</h3>

<pre class="java-exec">
<code>public class Main {

// method defined
private static int getSquare(int x){
  return x * x;
}

public static void main(String[] args) {
  for (int i = 1; i &lt;= 5; i++) {

    // method call
    int result = getSquare(i);
    System.out.println("Square of " + i + " is: " + result);
  }
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Square of 1 is: 1
Square of 2 is: 4
Square of 3 is: 9
Square of 4 is: 16
Square of 5 is: 25</samp></pre>

<p>In the above program, we have created the method named <code>getSquare()</code> to calculate the square of a number. Here, the method is used to calculate the square of numbers less than <strong>6</strong>.</p>

<p>Hence, the same method is used again and again.</p>

<p><strong>2.</strong> Methods make code more <strong>readable and easier</strong> to debug. Here, the <code>getSquare()</code> method keeps the code to compute the square in a block. Hence, makes it more readable.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/java-programming/method-overloading">Java Method Overloading</a> </li>
</ul>

</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#introduction">Java Methods</a></li>
  <li><a href="#declare-method">Declaring a Java Method</a></li>
  <li><a href="#call-method">Calling a Java Method</a></li>
  <li><a href="#return-type">Java Method Return Type</a></li>
  <li><a href="#method-parameters">Method Parameters</a></li>
  <li><a href="#standard-library">Standard Library Methods</a></li>
  <li><a href="#advantages">Advantages of Java Methods</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="overloading">
                        
            <div class="editor-contents">
                <h1>Java Method Overloading</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1441" class="node node-java-tutorial clearfix" about="/java-programming/method-overloading" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Method Overloading" class="rdf-meta element-hidden"></span>

<div class="content">
<p><a id="introduction" name="introduction"></a>In Java, two or more <a href="/java-programming/methods" title="Java Methods">methods</a> may have the same name if they differ in parameters (different number of parameters, different types of parameters, or both). These methods are called overloaded methods and this feature is called method overloading. For example:</p>

<pre>
void func() { ... }
void func(int a) { ... }
float func(double a) { ... }
float func(int a, float b) { ... }</pre>

<p>Here, the <code>func()</code> method is overloaded. These methods have the same name but accept different arguments.</p>

<p class="note-tip"><strong>Note</strong>: The return types of the above methods are not the same. It is because method overloading is not associated with return types. Overloaded methods may have the same or different return types, but they must differ in parameters.</p>

<hr>
<h2><a id="why" name="why"></a>Why method overloading?</h2>

<p>Suppose, you have to perform the addition of given numbers but there can be any number of arguments (let’s say either 2 or 3 arguments for simplicity).</p>

<p>In order to accomplish the task, you can create two methods <code>sum2num(int, int)</code> and <code>sum3num(int, int, int)</code> for two and three parameters respectively. However, other programmers, as well as you in the future may get confused as the behavior of both methods are the same but they differ by name.</p>

<p>The better way to accomplish this task is by overloading methods. And, depending upon the argument passed, one of the overloaded methods is called. This helps to increase the readability of the program.</p>

<hr>
<h2>How to perform method overloading in Java?</h2>

<p>Here are different ways to perform method overloading:</p>

<h3><a id="number-arguments" name="number-arguments"></a>1. Overloading by changing the number of parameters</h3>

<pre>
<code>class MethodOverloading {
private static void display(int a){
System.out.println("Arguments: " + a);
}

private static void display(int a, int b){
System.out.println("Arguments: " + a + " and " + b);
}

public static void main(String[] args) {
display(1);
display(1, 4);
}
}</code></pre>

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
</div><div class="clearfix"></div><p><strong>Output</strong>:</p>

<pre>
<samp>Arguments: 1
Arguments: 1 and 4</samp></pre>

<h3><a id="type-arguments" name="type-arguments"></a>2. Method Overloading by changing the data type of parameters</h3>

<pre>
<code>class MethodOverloading {

// this method accepts int
private static void display(int a){
System.out.println("Got Integer data.");
}

// this method  accepts String object
private static void display(String a){
System.out.println("Got String object.");
}

public static void main(String[] args) {
display(1);
display("Hello");
}
}</code>
</pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Got Integer data.
Got String object.</samp></pre>

<p>Here, both overloaded methods accept one argument. However, one accepts the argument of type <code>int</code> whereas other accepts <code>String</code> object.</p>

<hr>
<p><a id="example" name="example"></a>Let’s look at a real-world example:</p>

<pre>
<code>class HelperService {

private String formatNumber(int value) {
return String.format("%d", value);
}

private String formatNumber(double value) {
return String.format("%.3f", value);
}

private String formatNumber(String value) {
return String.format("%.2f", Double.parseDouble(value));
}

public static void main(String[] args) {
HelperService hs = new HelperService();
System.out.println(hs.formatNumber(500));
System.out.println(hs.formatNumber(89.9934));
System.out.println(hs.formatNumber("550"));
}
}</code></pre>

<p>When you run the program, the output will be:</p>

<pre>
<samp>500
89.993
550.00</samp></pre>

<hr>
<p class="note-tip"><strong>Note</strong>: In Java, you can also overload constructors in a similar way like methods.</p>

<p><strong>Recommended Reading:</strong> <a href="/java-programming/constructors#overloading" title="Java Constructor Overloading">Java Constructor Overloading</a></p>

<hr>
<h3><a id="important-points" name="important-points"></a>Important Points</h3>

<ul>
<li>Two or more methods can have the same name inside the same class if they accept different arguments. This feature is known as method overloading.</li>
<li>Method overloading is achieved by either:
<ul>
<li>changing the number of arguments.</li>
<li>or changing the data type of arguments.</li>
</ul>
</li>
<li>It is not method overloading if we only change the return type of methods. There must be differences in the number of parameters.</li>
</ul>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Java Method Overloading</a></li>
<li><a href="#why">Why method overloading?</a></li>
<li><a href="#number-arguments">Overloading by changing number of arguments</a></li>
<li><a href="#type-arguments">Overloading by changing type of arguments</a></li>
<li><a href="#example">Example: Method Overloading</a></li>
<li><a href="#important-points">Important Points</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="constructor">
                        
            <div class="editor-contents">
                <h1>Java Constructors</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1437" class="node node-java-tutorial clearfix" about="/java-programming/constructors" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Constructors" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">A constructor in Java is similar to a method that is invoked when an <a href="/java-programming/class-objects#objects">object</a> of the <a href="/java-programming/class-objects">class</a> is created.</p>

<p>Unlike <a href="/java-programming/methods">Java methods</a>, a constructor has the same name as that of the class and does not have any return type. For example,</p>

<pre>
<code>class Test {
Test() {
// constructor body
}
}</code></pre>

<p>Here, <code>Test()</code> is a constructor. It has the same name as that of the class and doesn't have a return type.</p>

<hr>
<h2 id="example">Example: Java Constructor</h2>

<pre class="java-exec">
<code>class Main {
private String name;

// constructor
Main() {
System.out.println("Constructor Called:");
name = "Programiz";
}

public static void main(String[] args) {

// constructor is invoked while
// creating an object of the Main class
Main obj = new Main();
System.out.println("The name is " + obj.name);
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Constructor Called:
The name is Programiz</samp></pre>

<p>In the above example, we have created a constructor named <code>Main()</code>. </p>

<p>Inside the constructor, we are initializing the value of the <var>name</var> <a href="/java-programming/variables-literals">variable</a>.</p>

<p>Notice the statement creating an object of the <var>Main</var> class.</p>

<pre>
<code>Main obj = new Main();</code></pre>

<p>Here, when the object is created, the <code>Main()</code> constructor is called. And the value of the <var>name</var> variable is initialized.</p>

<p>Hence, the program prints the value of the <var>name</var> variables as <code>Programiz</code>.</p>

<hr>
<h3>Types of Constructor</h3>

<p>In Java, constructors can be divided into three types:</p>

<ol>
<li>No-Arg Constructor</li>
<li>Parameterized Constructor</li>
<li>Default Constructor</li>
</ol>

<hr>
<h2 id="no-arg">1. Java No-Arg Constructors</h2>

<p>Similar to methods, a Java constructor may or may not have any parameters (arguments).</p>

<p>If a constructor does not accept any parameters, it is known as a no-argument constructor. For example,</p>

<pre>
<code>private Constructor() {
// body of the constructor
}</code></pre>

<h3>Example: Java Private No-arg Constructor</h3>

<pre class="java-exec">
<code>class Main {

int i;

// constructor with no parameter
private Main() {
i = 5;
System.out.println("Constructor is called");
}

public static void main(String[] args) {

// calling the constructor without any parameter
Main obj = new Main();
System.out.println("Value of i: " + obj.i);
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Constructor is called
Value of i: 5</samp></pre>

<p>In the above example, we have created a constructor <code>Main()</code>. </p>

<p>Here, the constructor does not accept any parameters. Hence, it is known as a no-arg constructor.</p>

<p><strong>Notice that we have declared the constructor as private.</strong></p>

<p>Once a constructor is declared <code>private</code>, it cannot be accessed from outside the class. </p>

<p>So, creating objects from outside the class is prohibited using the private constructor.</p>

<p>Here, we are creating the object inside the same class. </p>

<p>Hence, the program is able to access the constructor. To learn more, visit <a href="/java-programming/examples/private-constructor-implementation">Java Implement Private Constructor</a>.</p>

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
</div><div class="clearfix"></div><p>However, if we want to create objects outside the class, then we need to declare the constructor as <code>public</code>.</p>

<hr>
<h2>Example: Java Public no-arg Constructors</h2>

<pre class="java-exec">
<code>class Company {
String name;

// public constructor
public Company() {
name = "Programiz";
}
}

class Main {
public static void main(String[] args) {

// object is created in another class
Company obj = new Company();
System.out.println("Company name = " + obj.name);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Company name = Programiz</samp></pre>


<hr>
<h2 id="parameterized">2. Java Parameterized Constructor</h2>

<p>A Java constructor can also accept one or more parameters. Such constructors are known as parameterized constructors (constructors with parameters).</p>

<h3>Example: Parameterized Constructor</h3>

<pre class="java-exec">
<code>class Main {

String languages;

// constructor accepting single value
Main(String lang) {
languages = lang;
System.out.println(languages + " Programming Language");
}

public static void main(String[] args) {

// call constructor by passing a single value
Main obj1 = new Main("Java");
Main obj2 = new Main("Python");
Main obj3 = new Main("C");
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Java Programming Language
Python Programming Language
C Programming Language</samp></pre>

<p>In the above example, we have created a constructor named <code>Main()</code>. </p>

<p>Here, the constructor takes a single parameter. Notice the expression:</p>

<pre>
<code>Main obj1 = new Main("Java");</code></pre>

<p>Here, we are passing the single value to the constructor.</p>

<p>Based on the argument passed, the language variable is initialized inside the constructor.</p>

<hr>
<h2 id="default">3. Java Default Constructor</h2>

<p>If we do not create any constructor, the Java compiler automatically creates a no-arg constructor during the execution of the program. </p>

<p>This constructor is called the default constructor.</p>

<h3>Example: Default Constructor</h3>

<pre class="java-exec">
<code>class Main {

int a;
boolean b;

public static void main(String[] args) {

// calls default constructor
Main obj = new Main();

System.out.println("Default Value:");
System.out.println("a = " + obj.a);
System.out.println("b = " + obj.b);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Default Value:
a = 0
b = false</samp></pre>

<p>Here, we haven't created any constructors. </p>

<p>Hence, the Java compiler automatically creates the default constructor.</p>

<p>The default constructor initializes any uninitialized instance variables with default values.</p>

<div class="table-responsive">
<table>
<tr>
<th>Type</th>
<th>Default Value</th>
</tr>
<tr>
<td><code>boolean</code></td>
<td><code>false</code></td>
</tr>
<tr>
<td><code>byte</code></td>
<td><strong>0</strong></td>
</tr>
<tr>
<td><code>short</code></td>
<td><strong>0</strong></td>
</tr>
<tr>
<td><code>int</code></td>
<td><strong>0</strong></td>
</tr>
<tr>
<td><code>long</code></td>
<td><strong>0L</strong></td>
</tr>
<tr>
<td><code>char</code></td>
<td><code>\u0000</code></td>
</tr>
<tr>
<td><code>float</code></td>
<td><strong>0.0f</strong></td>
</tr>
<tr>
<td><code>double</code></td>
<td><strong>0.0d</strong></td>
</tr>
<tr>
<td><code>object</code></td>
<td><code>Reference null</code></td>
</tr>
</table>
</div>

<p>To learn more, visit <a href="/java-programming/variables-primitive-data-types">Java Data Types</a>.</p>

<p>In the above program, the variables <var>a</var> and <var>b</var> are initialized with default value <strong>0</strong> and <code>false</code> respectively.</p>

<p>The above program is equivalent to:</p>

<pre class="java-exec">
<code>class Main {

int a;
boolean b;

Main() {
a = 0;
b = false;
}

public static void main(String[] args) {
// call the constructor
Main obj = new Main();

System.out.println("Default Value:");
System.out.println("a = " + obj.a);
System.out.println("b = " + obj.b);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Default Value:
a = 0
b = false</samp></pre>

<hr>
<h2 id="notes">Important Notes on Java Constructors</h2>

<ul>
<li>Constructors are invoked implicitly when you instantiate objects.</li>
<li>The two rules for creating a constructor are:<br>
1. The name of the constructor should be the same as the class.<br>
2. A Java constructor must not have a return type.</li>
<li>If a class doesn't have a constructor, the Java compiler automatically creates a <strong>default constructor</strong> during run-time. The default constructor initializes instance variables with default values. For example, the <code>int</code> variable will be initialized to <code>0</code></li>
<li>Constructor types:<br>
<strong>No-Arg Constructor</strong> - a constructor that does not accept any arguments<br>
<strong>Parameterized constructor</strong> - a constructor that accepts arguments<br>
<strong>Default Constructor</strong> - a constructor that is automatically created by the Java compiler if it is not explicitly defined.</li>
<li>A constructor cannot be <code>abstract</code> or <code>static</code> or <code>final</code>.</li>
<li>A constructor can be overloaded but can not be overridden.</li>
</ul>

<hr>
<h2 id="overloading">Constructors Overloading in Java</h2>

<p>Similar to <a href="/java-programming/method-overloading">Java method overloading</a>, we can also create two or more constructors with different parameters. This is called constructor overloading.</p>

<h3>Example: Java Constructor Overloading</h3>

<pre class="java-exec">
<code>class Main {

String language;

// constructor with no parameter
Main() {
this.language = "Java";
}

// constructor with a single parameter
Main(String language) {
this.language = language;
}

public void getName() {
System.out.println("Programming Language: " + this.language);
}

public static void main(String[] args) {

// call constructor with no parameter
Main obj1 = new Main();

// call constructor with a single parameter
Main obj2 = new Main("Python");

obj1.getName();
obj2.getName();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Programming Language: Java
Programming Language: Python</samp></pre>

<p>In the above example, we have two constructors: <code>Main()</code> and <code>Main(String language)</code>. </p>

<p>Here, both the constructors initialize the value of the variable language with different values.</p>

<p>Based on the parameter passed during object creation, different constructors are called, and different values are assigned.</p>

<p>It is also possible to call one constructor from another constructor. To learn more, visit <a href="/java-programming/examples/call-one-constructor-from-another">Java Call One Constructor from Another</a>.</p>

<p class="note-tip"><strong>Note</strong>: We have used <code>this</code> keyword to specify the variable of the class. To know more about <code>this</code> keyword, visit <a href="/java-programming/this-keyword">Java this keyword</a>.</p>

<hr>
<p><strong>Also Read</strong></p>

<ul>
<li><a href="/java-programming/enum-constructor">Enum Constructor</a></li>
<li><a href="/java-programming/examples/call-one-constructor-from-another">Constructor Call</a></li>
<li><a href="/java-programming/examples/private-constructor-implementation">Private Construction Implementation</a></li>
<li><a href="/java-programming/access-modifiers">Java Access Modifier</a></li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#example">Example: Java Constructor</a></li>
<li><a href="#no-arg">Java No-Arg Constructors</a></li>
<li><a href="#parameterized">Java Parameterized Constructor</a></li>
<li><a href="#default">Java Default Constructor</a></li>
<li><a href="#notes">Important Notes on Java Constructors</a></li>
<li><a href="#overloading">Constructors Overloading in Java</a></li>
</ul></div></div></div>                          </div>
                    </div>
                    <div id="static_keyword">
                        <div class="editor-contents">
                            <h1>Java Static Keyword</h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-1454" class="node node-java-tutorial clearfix" about="/java-programming/static-keyword" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java Static Keyword" class="rdf-meta element-hidden"></span>

<div class="content">
    <h2 id="what">What is a static keyword in Java?</h2>

<p>In Java, if we want to access class members, we must first create an instance of the class. But there will be situations where we want to access class members without creating any variables.</p>

<p>In those situations, we can use the <code>static</code> keyword in Java. If we want to access class members without creating an instance of the class, we need to declare the class members static.</p>

<p>The <code>Math</code> class in Java has almost all of its members static. So, we can access its members without creating instances of the Math class. For example,</p>

<pre class="java-exec">
<code>public class Main {
  public static void main( String[] args ) {

      // accessing the methods of the Math class
      System.out.println("Absolute value of -12 =  " + Math.abs(-12));
      System.out.println("Value of PI = " + Math.PI);
      System.out.println("Value of E = " + Math.E);
      System.out.println("2^2 = " + Math.pow(2,2));
  }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Absolute value of -12 = 12
Value of PI = 3.141592653589793
Value of E = 2.718281828459045
2^2 = 4.0</samp></pre>

<p>In the above example, we have not created any instances of the <code>Math</code> class. But we are able to access its methods: <code>abs()</code> and <code>pow()</code> and variables: <code>PI</code> and <code>E</code>.</p>

<p>It is possible because the methods and variables of the <code>Math</code> class are static.</p>

<hr>
<h2 id="methods">Static Methods</h2>

<p>Static methods are also called class methods. It is because a static method belongs to the class rather than the object of a class.</p>

<p>And we can invoke static methods directly using the class name. For example,</p>

<pre>
<code>class Test {
  // static method inside the Test class
  public static void method() {...}
}

class Main {
  // invoking the static method
  Test.method();
}</code></pre>

<p>Here, we can see that the static method can be accessed directly from other classes using the class name.</p>

<p>In every Java program, we have declared the <code>main</code> method <code>static</code>. It is because to run the program the JVM should be able to invoke the main method during the initial phase where no objects exist in the memory.</p>

<h3>Example 1: Java static and non-static Methods</h3>

<pre class="java-exec">
<code>class StaticTest {

  // non-static method
  int multiply(int a, int b){
      return a * b;
  }

  // static method
  static int add(int a, int b){
      return a + b;
  }
}

public class Main {

 public static void main( String[] args ) {

      // create an instance of the StaticTest class
      StaticTest st = new StaticTest();

      // call the nonstatic method
      System.out.println(" 2 * 2 = " + st.multiply(2,2));

      // call the static method
      System.out.println(" 2 + 3 = " + StaticTest.add(2,3));
 }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>2 * 2 = 4
2 + 3 = 5</samp></pre>

<p>In the above program, we have declared a non-static method named <code>multiply()</code> and a static method named <code>add()</code> inside the class <code>StaticTest</code>.</p>

<p>Inside the <var>Main</var> class, we can see that we are calling the non-static method using the object of the class (<code>st.multiply(2, 2)</code>). However, we are calling the static method by using the class name (<code>StaticTest.add(2, 3)</code>).</p>

<hr>
<h2 id="variables">Static Variables</h2>

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
  </div><div class="clearfix"></div><p>In Java, when we create objects of a class, then every object will have its own copy of all the variables of the class. For example,</p>

<pre>
<code>class Test {
  // regular variable
 int age;
}

class Main {
  // create instances of Test
  Test test1 = new Test();
  Test test2 = new Test();
}</code></pre>

<p>Here, both the objects test1 and test2 will have separate copies of the variable age. And, they are different from each other.</p>

<p>However, if we declare a variable static, all objects of the class share the same static variable. It is because like static methods, static variables are also associated with the class. And, we don't need to create objects of the class to access the static variables. For example,</p>

<pre>
<code>class Test {
  // static variable
  static int age;
}
class Main {
  // access the static variable
  Test.age = 20;
}</code></pre>

<p>Here, we can see that we are accessing the static variable from the other class using the class name.</p>

<h3>Example 2: Java static and non-static Variables</h3>

<pre class="java-exec">
<code>class Test {

 // static variable
 static int max = 10;

 // non-static variable
 int min = 5;
}

public class Main {
 public static void main(String[] args) {
     Test obj = new Test();

     // access the non-static variable
     System.out.println("min + 1 = " + (obj.min + 1));

     // access the static variable
     System.out.println("max + 1 = " + (Test.max + 1));
 }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>min + 1 = 6
max + 1 = 11</samp></pre>

<p>In the above program, we have declared a non-static variable named <var>min</var> and a static variable named <var>max</var> inside the class <var>Test</var>.</p>

<p>Inside the <var>Main</var> class, we can see that we are calling the non-static variable using the object of the class (<code>obj.min + 1</code>). However, we are calling the static variable by using the class name (<code>Test.max + 1</code>).</p>

<p class="note-tip"><strong>Note</strong>: Static variables are rarely used in Java. Instead, the static constants are used. These static constants are defined by <code>static final</code> keyword and represented in uppercase. This is why some people prefer to use uppercase for static variables as well.</p>

<hr>
<h2 id="static-variable-method">Access static Variables and Methods within the Class</h2>

<p>We are accessing the static variable from another class. Hence, we have used the class name to access it. However, if we want to access the static member from inside the class, it can be accessed directly. For example,</p>

<pre class="java-exec">
<code>public class Main {

 // static variable
 static int age;
 // static method
 static void display() {
     System.out.println("Static Method");
 }
 public static void main(String[] args) {

     // access the static variable
     age = 30;
     System.out.println("Age is " + age);

     // access the static method
     display();
 }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Age is 30
Static Method</samp></pre>

<p>Here, we are able to access the static variable and method directly without using the class name. It is because static variables and methods are by default public. And, since we are accessing from the same class, we don't have to specify the class name.</p>

<hr>
<h2 id="static-block">Static Blocks</h2>

<p>In Java, static blocks are used to initialize the static variables. For example,</p>

<pre>
<code>class Test {
  // static variable
  static int age;

  // static block
  static {
      age = 23;
  }
}</code></pre>

<p>Here we can see that we have used a static block with the syntax:</p>

<pre>
<code>static {
  // variable initialization
}</code></pre>

<p>The static block is executed only once when the class is loaded in memory. The class is loaded if either the object of the class is requested in code or the static members are requested in code.</p>

<p>A class can have multiple static blocks and each static block is executed in the same sequence in which they have been written in a program.</p>

<h3>Example 3: Use of static block in java</h3>

<pre class="java-exec">
<code>class Main {

 // static variables
 static int a = 23;
 static int b;
 static int max;

 // static blocks
 static {
     System.out.println("First Static block.");
     b = a * 4;
 }
 static {
     System.out.println("Second Static block.");
     max = 30;
 }

 // static method
 static void display() {

     System.out.println("a = " + a);
     System.out.println("b = " + b);
     System.out.println("max = " + max);
 }

 public static void main(String args[]) {
     // calling the static method
     display();
 }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>First Static block.
Second Static block.
a = 23
b = 92
max = 30</samp></pre>

<p>In the above program. as soon as the Main class is loaded,</p>

<ul>
  <li>The value of <var>a</var> is set to <code>23</code>.</li>
  <li>The first static block is executed. Hence, the string <code>First Static block</code> is printed and the value of <var>b</var> is set to <code>a * 4</code>.</li>
  <li>The second static block is executed. Hence, the string <code>Second Static block</code> is printed and the value of <var>max</var> is set to <code>30</code>.</li>
  <li>And finally, the print statements inside the method <code>display()</code> are executed.</li>
</ul>

<hr>
<h2 id="static-nested">Nested Static Class</h2>

<p>In Java, we can declare a class inside another class. Such classes are known as nested classes. Nested classes are of 2 types:</p>

<ul>
  <li>Static Nested Classes</li>
  <li>Non-static Nested Classes</li>
</ul>

<p>For example,</p>

<pre>
<code>class OuterClass {
  // static nested class
  static class NestedClass {...}

  // non-static nested class
  class InnerClass {...}
}</code></pre>

<p>To learn more, visit the <a href="/java-programming/nested-inner-class" title="Java Nested Class">Java Nested Class</a>.</p>
</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#what">What is a static keyword in Java?</a></li>
  <li><a href="#methods">Static Methods</a></li>
  <li><a href="#variables">Static Variables</a></li>
  <li><a href="#static-variable-method">Static Variables and Methods within the Class</a></li>
  <li><a href="#static-block">Static Blocks</a></li>
  <li><a href="#static-nested">Nested Static Class</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="string">
                        <div class="editor-contents">
                            <h1>Java Strings </h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-2611" class="node node-java-tutorial clearfix" about="/java-programming/string" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java Strings " class="rdf-meta element-hidden"></span>

<div class="content">
    <p id="introduction">In Java, a string is a sequence of characters. For example, <code>"hello"</code> is a string containing a sequence of characters <code>'h'</code>, <code>'e'</code>, <code>'l'</code>, <code>'l'</code>, and <code>'o'</code>.</p>

<p>We use <strong>double quotes</strong> to represent a string in Java. For example,</p>

<pre>
<code>// create a string
String type = "Java programming";</code></pre>

<p>Here, we have created a string <a href="/java-programming/variables-literals">variable</a> named <var>type</var>. The variable is initialized with the string <code>Java Programming</code>.</p>

<hr>
<h2 id="example">Example: Create a String in Java</h2>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
  
  // create strings
  String first = "Java";
  String second = "Python";
  String third = "JavaScript";

  // print strings
  System.out.println(first);   // print Java
  System.out.println(second);  // print Python
  System.out.println(third);   // print JavaScript
}
}</code></pre>

<p>In the above example, we have created three strings named <var>first</var>, <var>second</var>, and <var>third</var>. </p>

<p>Here, we are directly creating strings like <a href="/java-programming/variables-primitive-data-types">primitive types</a>.</p>

<p>However, there is another way of creating Java strings (using the <code>new</code> keyword). </p>

<p>We will learn about that later in this tutorial.</p>

<div class="note-tip">
<p><strong>Note</strong>: Strings in Java are not primitive types (like <code>int</code>, <code>char</code>, etc). Instead, all strings are objects of a predefined class named <code>String</code>.</p>

<p>And all string variables are instances of the <code>String</code> class.</p>

</div>
<hr>
<h2>Java String Operations</h2>

<p>Java provides various string methods to perform different operations on strings. We will look into some of the commonly used string operations.</p>

<h3 id="string-length">1. Get the Length of a String</h3>

<p>To find the length of a string, we use the <code>length()</code> method. For example,</p>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

  // create a string
  String greet = "Hello! World";
  System.out.println("String: " + greet);

<div class="line-highlight">    // get the length of greet
  int length = greet.length();</div>
  System.out.println("Length: " + length);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>String: Hello! World
Length: 12</samp></pre>

<p>In the above example, the <code>length()</code> method calculates the total number of characters in the string and returns it. </p>

<p>To learn more, visit <a href="/java-programming/library/string/length">Java String length()</a>.</p>

<hr>
<h3 id="join-strings">2. Join Two Java Strings</h3>

<p>We can join two strings in Java using the <code>concat()</code> method. For example,</p>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

  // create first string
  String first = "Java ";
  System.out.println("First String: " + first);

  // create second
  String second = "Programming";
  System.out.println("Second String: " + second);

<div class="line-highlight">    // join two strings
  String joinedString = first.concat(second);</div>
  System.out.println("Joined String: " + joinedString);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>First String: Java 
Second String: Programming     
Joined String: Java Programming</samp></pre>

<p>In the above example, we have created two strings named <var>first</var> and <var>second</var>. Notice the statement,</p>

<pre>
<code>String joinedString = first.concat(second);</code></pre>

<p>Here, the <code>concat()</code> method joins the <var>second</var> string to the <var>first</var> string and assigns it to the <var>joinedString</var> variable.</p>

<p>We can also join two strings using the <code>+</code> operator in Java. </p>

<p>To learn more, visit <a href="/java-programming/library/string/concat">Java String concat()</a>.</p>

<hr>
<h2 id="compare-strings">3. Compare Two Strings</h2>

<p>In Java, we can make comparisons between two strings using the <code>equals()</code> method. For example,</p>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

  // create 3 strings
  String first = "java programming";
  String second = "java programming";
  String third = "python programming";

<div class="line-highlight">    // compare first and second strings
  boolean result1 = first.equals(second);</div>
  System.out.println("Strings first and second are equal: " + result1);

<div class="line-highlight">    // compare first and third strings
  boolean result2 = first.equals(third);</div>
  System.out.println("Strings first and third are equal: " + result2);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Strings first and second are equal: true
Strings first and third are equal: false</samp></pre>

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
  </div><div class="clearfix"></div><p>In the above example, we have created <strong>3</strong> strings named <var>first</var>, <var>second</var>, and <var>third</var>.</p>

<p>Here, we are using the <code>equal()</code> method to check if one string is equal to another.</p>

<p>The <code>equals()</code> method checks the content of strings while comparing them. To learn more, visit <a href="/java-programming/library/string/equals">Java String equals()</a>.</p>

<p class="note-tip"><strong>Note</strong>: We can also compare two strings using the <code>==</code> operator in Java. However, this approach is different than the <code>equals()</code> method. To learn more, visit <a href="/java-programming/examples/differentiate-string-equals">Java String == vs equals()</a>.</p>

<hr>
<p id="escape-character">Escape Character in Java Strings</p>

<p>The escape character is used to escape some of the characters present inside a string.</p>

<p>Suppose we need to include double quotes inside a string.</p>

<pre>
<code>// include double quote 
String example = "This is the "String" class";</code></pre>

<p>Since strings are represented by <strong>double quotes</strong>, the compiler will treat <code>"This is the "</code> as the string. Hence, the above code will cause an error.</p>

<p>To solve this issue, we use the escape character <code>\</code> in Java. For example,</p>

<pre>
<code>// use the escape character
String example = "This is the \"String\" class.";</code></pre>

<p>Now escape characters tell the compiler to escape <strong>double quotes</strong> and read the whole text.</p>

<hr>
<h2 id="immutable-string">Java Strings are Immutable</h2>

<p>In Java, strings are <a href="/java-programming/examples/create-immutable-class">immutable</a>. This means once we create a string, we cannot change that string.</p>

<p>To understand it more thoroughly, consider an example:</p>

<pre>
<code>// create a string
String example = "Hello! ";</code></pre>

<p>Here, we have created a string variable named <var>example</var>. The variable holds the string <code>"Hello! "</code>.</p>

<p>Now, suppose we want to change the string.</p>

<pre>
<code>// add another string "World"
// to the previous tring example
example = example.concat(" World");</code></pre>

<p>Here, we are using the <code>concat()</code> method to add another string <code>"World"</code> to the previous string.</p>

<p>It looks like we are able to change the value of the previous string. However, this is not <code>true</code>.</p>

<p>Let's see what has happened here:</p>

<ol>
  <li><a href="/java-programming/jvm-jre-jdk">JVM</a> takes the first string <code>"Hello! "</code></li>
  <li>creates a new string by adding <code>"World"</code> to the first string</li>
  <li>assigns the new string <code>"Hello! World"</code> to the <var>example</var> variable</li>
  <li>The first string <code>"Hello! "</code> remains unchanged</li>
</ol>

<hr>
<h2 id="new-keyword">Creating Strings Using the New Keyword</h2>

<p>So far, we have created strings like primitive types in Java.</p>

<p>Since strings in Java are objects, we can create strings using the <code>new</code> <a href="/java-programming/keywords-identifiers">keyword</a> as well. For example,</p>

<pre>
<code>// create a string using the new keyword
String name = new String("Java String");</code></pre>

<p>In the above example, we have created a string <var>name</var> using the <code>new</code> keyword.</p>

<p>Here, when we create a string object, the <code>String()</code> constructor is invoked. </p>

<p>To learn more about constructors, visit <a href="/java-programming/constructors">Java Constructor</a>.</p>

<p class="note-tip"><strong>Note</strong>: The <code>String</code> class provides various other constructors to create strings. To learn more, visit <a href="https://docs.oracle.com/javase/8/docs/api/java/lang/String.html">Java String (official Java documentation)</a>.</p>

<h3>Example: Create Java Strings Using the New Keyword</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

<div class="line-highlight">    // create a string using new
  String name = new String("Java String");</div>

  System.out.println(name);  // print Java String
}
}</code></pre>

<h3 id="string-literal-vs-new">Create String Using Literals vs. New Keyword</h3>

<p>Now that we know how strings are created using <a href="/java-programming/variables-literals#string-literals">string literals</a> and the <code>new</code> keyword, let's see what is the major difference between them.</p>

<p>In Java, the JVM maintains a <strong>string pool</strong> to store all of its strings inside the memory. The string pool helps in reusing the strings.</p>

<p>1. While creating strings using string literals,</p>

<pre>
<code>String example = "Java";</code></pre>

<p>Here, we are directly providing the value of the string (<code>Java</code>). Hence, the compiler first checks the string pool to see if the string already exists.</p>

<ul>
  <li><strong>If the string already exists</strong>, the new string is not created. Instead, the new reference, <var>example</var> points to the already existing string (<code>Java</code>).</li>
  <li><strong>If the string doesn't exist</strong>, a new string (<code>Java)</code> is created.</li>
</ul>

<p>2. While creating strings using the new keyword,</p>

<pre>
<code>String example = new String("Java");</code></pre>

<p>Here, the value of the string is not directly provided. Hence, a new <code>"Java"</code> string is created even though <code>"Java"</code> is already present inside the memory pool.</p>

<hr>
<h2 id="string-methods">Methods of Java String</h2>

<p>Besides those mentioned above, there are various <a href="/java-programming/library/string">string methods</a> present in Java. Here are some of those methods:</p>

<div class="table-responsive">
<table>
<tr>
<th>Methods</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/java-programming/library/string/contains">contains()</a></td>
<td>Checks whether the string contains a substring.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/substring">substring()</a></td>
<td>Returns the substring of the string.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/join">join()</a></td>
<td>Joins the given strings using the delimiter.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/replace">replace()</a></td>
<td>Replaces the specified old character with the specified new character.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/replaceall">replaceAll()</a></td>
<td>Replaces all substrings matching the regex pattern.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/replacefirst">replaceFirst()</a></td>
<td>Replaces the first matching substring.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/charat">charAt()</a></td>
<td>Returns the character present in the specified location.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/getbytes">getBytes()</a></td>
<td>Converts the string to an array of bytes.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/indexof">indexOf()</a></td>
<td>Returns the position of the specified character in the string.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/compareto">compareTo()</a></td>
<td>Compares two strings in the dictionary order.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/comparetoignorecase">compareToIgnoreCase()</a></td>
<td>Compares two strings, ignoring case differences.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/trim">trim()</a></td>
<td>Removes any leading and trailing whitespaces.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/format">format()</a></td>
<td>Returns a formatted string.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/split">split()</a></td>
<td>Breaks the string into an array of strings.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/tolowercase">toLowerCase()</a></td>
<td>Converts the string to lowercase.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/touppercase">toUpperCase()</a></td>
<td>Converts the string to uppercase.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/valueof">valueOf()</a></td>
<td>Returns the string representation of the specified argument.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/tochararray">toCharArray()</a></td>
<td>Converts the string to a <code>char</code> array.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/matches">matches()</a></td>
<td>Checks whether the string matches the given regex.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/startswith">startsWith()</a></td>
<td>Checks if the string begins with the given string.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/endswith">endsWith()</a></td>
<td>Checks if the string ends with the given string.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/isempty">isEmpty()</a></td>
<td>Checks whether a string is empty or not.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/intern">intern()</a> </td>
<td>Returns the canonical representation of the string.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/contentequals">contentEquals()</a></td>
<td>Checks whether the string is equal to charSequence.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/hashcode">hashCode()</a></td>
<td>Returns a hash code for the string.</td>
</tr>
<tr>
<td><a href="/java-programming/library/string/subsequence">subSequence()</a></td>
<td>Returns a subsequence from the string.</td>
</tr>
</table>
</div>

</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#introduction">Java String</a></li>
  <li><a href="#example">Create a String in Java</a></li>
  <li><a href="#string-length">Get Length of a String</a></li>
  <li><a href="#join-strings">Join two Strings</a></li>
  <li><a href="#compare-strings">Compare two Strings</a></li>
  <li><a href="#escape-character">Escape character in Strings</a></li>
  <li><a href="#immutable-string">Immutable Strings</a></li>
  <li><a href="#new-keyword">Creating strings using the new keyword</a></li>
  <li><a href="#string-literal-vs-new">String literals vs new keyword </a></li>
  <li><a href="#string-methods">Methods of Java String</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="modifier">
                        <div class="editor-contents">
                            <h1>Java Access Modifiers</h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-1462" class="node node-java-tutorial clearfix" about="/java-programming/access-modifiers" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java Access Modifiers" class="rdf-meta element-hidden"></span>

<div class="content">
    <h2 id="introduction">What are Access Modifiers?</h2>

<p>In Java, access modifiers are used to set the accessibility (visibility) of <a href="https://www.programiz.com/java-programming/class-objects">classes</a>, <a href="https://www.programiz.com/java-programming/interfaces">interfaces</a>, <a href="https://www.programiz.com/java-programming/variables-literals">variables</a>, <a href="https://www.programiz.com/java-programming/methods">methods</a>, <a href="https://www.programiz.com/java-programming/constructors">constructors</a>, data members, and the setter methods. For example,</p>

<pre>
<code>class Animal {
  public void method1() {...}

 private void method2() {...}
}</code></pre>

<p>In the above example, we have declared 2 methods: method1() and method2(). Here,</p>

<ul>
  <li><var>method1</var> is <code>public</code> - This means it can be accessed by other classes.</li>
  <li><var>method2</var> is <code>private</code> - This means it can not be accessed by other classes.</li>
</ul>

<p>Note the keyword <code>public</code> and <code>private</code>. These are access modifiers in Java. They are also known as visibility modifiers.</p>

<p class="note-tip"><strong>Note</strong>: You cannot set the access modifier of getters methods.</p>

<hr>
<h2>Types of Access Modifier</h2>

<p>Before you learn about types of access modifiers, make sure you know about <a href="/java-programming/packages-import" title="Java Packages">Java Packages</a>.</p>

<p>There are four access modifiers keywords in Java and they are:</p>

<table>
  <tbody>
      <tr>
          <td><strong>Modifier</strong></td>
          <td><strong>Description</strong></td>
      </tr>
      <tr>
          <td>Default</td>
          <td>declarations are visible only within the package (package private)</td>
      </tr>
      <tr>
          <td>Private</td>
          <td>declarations are visible within the class only</td>
      </tr>
      <tr>
          <td>Protected</td>
          <td>declarations are visible within the package or all subclasses</td>
      </tr>
      <tr>
          <td>Public</td>
          <td>declarations are visible everywhere</td>
      </tr>
  </tbody>
</table>

<hr>
<h2 id="default-access-modifiers">Default Access Modifier</h2>

<p>If we do not explicitly specify any access modifier for classes, methods, variables, etc, then by default the default access modifier is considered. For example,</p>

<pre class="java-exec">
<code>package defaultPackage;
class Logger {
  void message(){
      System.out.println("This is a message");
  }
}</code></pre>

<p>Here, the <var>Logger</var> class has the default access modifier. And the class is visible to all the classes that belong to the <var>defaultPackage</var> package. However, if we try to use the <var>Logger</var> class in another class outside of defaultPackage, we will get a compilation error.</p>

<hr>
<h2 id="private-access-modifiers">Private Access Modifier</h2>

<p>When variables and methods are declared <code>private</code>, they cannot be accessed outside of the class. For example,</p>

<pre class="java-exec">
<code>class Data {
  // private variable
  private String name;
}

public class Main {
  public static void main(String[] main){

      // create an object of Data
      Data d = new Data();

      // access private variable and field from another class
      d.name = "Programiz";
  }
}</code></pre>

<p>In the above example, we have declared a private variable named <var>name</var>. When we run the program, we will get the following error:</p>

<pre>
<code>Main.java:18: error: name has private access in Data
      d.name = "Programiz";
       ^</code></pre>

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
  </div><div class="clearfix"></div><p>The error is generated because we are trying to access the private variable of the <var>Data</var> class from the <var>Main</var> class.</p>

<p>You might be wondering what if we need to access those private variables. In this case, we can use the getters and setters method. For example,</p>

<pre class="java-exec">
<code>class Data {
  private String name;

  // getter method
  public String getName() {
      return this.name;
  }
  // setter method
  public void setName(String name) {
      this.name= name;
  }
}
public class Main {
  public static void main(String[] main){
      Data d = new Data();

      // access the private variable using the getter and setter
      d.setName("Programiz");
      System.out.println(d.getName());
  }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>The name is Programiz</samp></pre>

<p>In the above example, we have a private variable named <var>name</var>. In order to access the variable from the outer class, we have used methods: <code>getName()</code> and <code>setName()</code>. These methods are called getter and setter in Java.</p>

<p>Here, we have used the setter method (<code>setName()</code>) to assign value to the variable and the getter method (<code>getName()</code>) to access the variable.</p>

<p>We have used <code>this</code> keyword inside the setName() to refer to the variable of the class. To learn more on this keyword, visit <a href="/java-programming/this-keyword" title="Java this Keyword">Java this Keyword</a>.</p>

<p class="note-tip"><strong>Note</strong>: We cannot declare classes and interfaces private in Java. However, the nested classes can be declared private. To learn more, visit <a href="/java-programming/nested-inner-class" title="Java Nested and Inner Class">Java Nested and Inner Class</a>.</p>

<hr>
<h3 id="protected-access-modifiers">Protected Access Modifier</h3>

<p>When methods and data members are declared <code>protected</code>, we can access them within the same package as well as from subclasses. For example,</p>

<pre class="java-exec">
<code>class Animal {
  // protected method
  protected void display() {
      System.out.println("I am an animal");
  }
}

class Dog extends Animal {
  public static void main(String[] args) {

      // create an object of Dog class
      Dog dog = new Dog();
       // access protected method
      dog.display();
  }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>I am an animal</samp></pre>

<p>In the above example, we have a protected method named <code>display()</code> inside the <var>Animal</var> class. The <var>Animal</var> class is inherited by the <var>Dog</var> class. To learn more about inheritance, visit <a href="/java-programming/inheritance" title="Java Inheritance">Java Inheritance</a>.</p>

<p>We then created an object <var>dog</var> of the <var>Dog</var> class. Using the object we tried to access the protected method of the parent class.</p>

<p>Since protected methods can be accessed from the child classes, we are able to access the method of <var>Animal</var> class from the <var>Dog</var> class.</p>

<p class="note-tip"><strong>Note</strong>: We cannot declare classes or interfaces <code>protected</code> in Java.</p>

<hr>
<h3 id="public-access-modifiers">Public Access Modifier</h3>

<p>When methods, variables, classes, and so on are declared <code>public</code>, then we can access them from anywhere. The public access modifier has no scope restriction. For example,</p>

<pre class="java-exec">
<code>// Animal.java file
// public class
public class Animal {
  // public variable
  public int legCount;

  // public method
  public void display() {
      System.out.println("I am an animal.");
      System.out.println("I have " + legCount + " legs.");
  }
}

// Main.java
public class Main {
  public static void main( String[] args ) {
      // accessing the public class
      Animal animal = new Animal();

      // accessing the public variable
      animal.legCount = 4;
      // accessing the public method
      animal.display();
  }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>I am an animal.
I have 4 legs.</samp></pre>

<p>Here,</p>

<ul>
  <li>The public class <var>Animal</var> is accessed from the <var>Main</var> class.</li>
  <li>The public variable <var>legCount</var> is accessed from the <var>Main</var> class.</li>
  <li>The public method <code>display()</code> is accessed from the <var>Main</var> class.</li>
</ul>

<hr>
<h2 id="figure">Access Modifiers Summarized in one figure</h2>

<figure><img alt="Accessibility of all Access Modifiers in Java" height="512" src="//cdn.programiz.com/sites/tutorial2program/files/java-access-modifiers-public-private-protected-default_0.jpg" title="Accessibility of all Access Modifiers in Java" width="512">
  <figcaption>Accessibility of all Access Modifiers in Java</figcaption>
</figure>

<p>Access modifiers are mainly used for encapsulation. It can help us to control what part of a program can access the members of a class. So that misuse of data can be prevented. To learn more about encapsulation, visit <a href="/java-programming/encapsulation" title="Java Encapsulation">Java Encapsulation</a>.</p>
</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#introduction">What are Access Modifiers?</a></li>
  <li><a href="#default-access-modifiers">Default Access Modifier</a></li>
  <li><a href="#private-access-modifiers">Private Access Modifier</a></li>
  <li><a href="#protected-access-modifiers">Protected Access Modifier</a></li>
  <li><a href="#public-access-modifiers">Public Access Modifier</a></li>
  <li><a href="#figure">Access Modifiers Summarized</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="this_keyword">
                        <div class="editor-contents">
                            <h1>Java this Keyword</h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-1438" class="node node-java-tutorial clearfix" about="/java-programming/this-keyword" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java this Keyword" class="rdf-meta element-hidden"></span>

<div class="content">
    <p id="introduction">In Java, this keyword is used to refer to the current object inside a <a href="/java-programming/methods">method</a> or a <a href="/java-programming/constructors">constructor</a>. For example,</p>

<pre class="java-exec">
<code>class Main {
  int instVar;

  Main(int instVar){
      this.instVar = instVar;
      System.out.println("this reference = " + this);
  }

  public static void main(String[] args) {
      Main obj = new Main(8);
      System.out.println("object reference = " + obj);
  }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>this reference = Main@23fc625e
object reference = Main@23fc625e</samp></pre>

<p>In the above example, we created an object named <var>obj</var> of the class <var>Main</var>. We then print the reference to the object <var>obj</var> and <code>this</code> keyword of the class.</p>

<p>Here, we can see that the reference of both <var>obj</var> and <code>this</code> is the same. It means this is nothing but the reference to the current object.</p>

<hr>
<h2>Use of this Keyword</h2>

<p>There are various situations where <code>this</code> keyword is commonly used.</p>

<h2 id="disambiguate-reference">1. Using this for Ambiguity Variable Names</h2>

<p>In Java, it is not allowed to declare two or more <a href="/java-programming/variables-literals">variables</a> having the same name inside a scope (class scope or method scope). However, instance variables and parameters may have the same name. For example,</p>

<pre>
<code>class MyClass {
  // instance variable
  int age;

  // parameter
  MyClass(int age){
      age = age;
  }
}</code></pre>

<p>In the above program, the instance variable and the parameter have the same name: age. Here, the Java compiler is confused due to name ambiguity.</p>

<p>In such a situation, we use this keyword. For example,</p>

<p>First, let's see an example without using <code>this</code> keyword:</p>

<pre class="java-exec">
<code>class Main {

  int age;
  Main(int age){
      age = age;
  }

  public static void main(String[] args) {
      Main obj = new Main(8);
      System.out.println("obj.age = " + obj.age);
  }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>obj.age = 0</samp></pre>

<p>In the above example, we have passed <code>8</code> as a value to the constructor. However, we are getting <code>0</code> as an output. This is because the Java compiler gets confused because of the ambiguity in names between instance the variable and the parameter.</p>

<p>Now, let's rewrite the above code using <code>this</code> keyword.</p>

<pre class="java-exec">
<code>class Main {

  int age;
  Main(int age){
      this.age = age;
  }

  public static void main(String[] args) {
      Main obj = new Main(8);
      System.out.println("obj.age = " + obj.age);
  }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>obj.age = 8</samp></pre>

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
  </div><div class="clearfix"></div><p>Now, we are getting the expected output. It is because when the constructor is called, <code>this</code> inside the constructor is replaced by the object <var>obj</var> that has called the constructor. Hence the <var>age</var> variable is assigned value <var>8</var>.</p>

<p>Also, if the name of the parameter and instance variable is different, the compiler automatically appends this keyword. For example, the code:</p>

<pre>
<code>class Main {
  int age;

  Main(int i) {
      age = i;
  }
}</code></pre>

<p>is equivalent to:</p>

<pre>
<code>class Main {
  int age;

  Main(int i) {
      this.age = i;
  }
}</code></pre>

<hr>
<h3 id="getter-setter">2. this with Getters and Setters</h3>

<p>Another common use of <code>this</code> keyword is in <em>setters and getters methods</em> of a class. For example:</p>

<pre class="java-exec">
<code>class Main {
 String name;

 // setter method
 void setName( String name ) {
     this.name = name;
 }

 // getter method
 String getName(){
     return this.name;
 }

 public static void main( String[] args ) {
     Main obj = new Main();

     // calling the setter and the getter method
     obj.setName("Toshiba");
     System.out.println("obj.name: "+obj.getName());
 }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>obj.name: Toshiba</samp></pre>

<p>Here, we have used <code>this</code> keyword:</p>

<ul>
  <li>to assign value inside the setter method</li>
  <li>to access value inside the getter method</li>
</ul>

<hr>
<h2 id="constructor-overloading">3. Using this in Constructor Overloading</h2>

<p>While working with <a href="/java-programming/constructors#overloading">constructor overloading</a>, we might have to invoke one constructor from another constructor. In such a case, we cannot call the constructor explicitly. Instead, we have to use <code>this</code> keyword.</p>

<p>Here, we use a different form of this keyword. That is, <code>this()</code>. Let's take an example,</p>

<pre class="java-exec">
<code>class Complex {

  private int a, b;

  // constructor with 2 parameters
  private Complex( int i, int j ){
      this.a = i;
      this.b = j;
  }

  // constructor with single parameter
  private Complex(int i){
      // invokes the constructor with 2 parameters
      this(i, i); 
  }

  // constructor with no parameter
  private Complex(){
      // invokes the constructor with single parameter
      this(0);
  }

  @Override
  public String toString(){
      return this.a + " + " + this.b + "i";
  }

  public static void main( String[] args ) {

      // creating object of Complex class
      // calls the constructor with 2 parameters
      Complex c1 = new Complex(2, 3); 
  
      // calls the constructor with a single parameter
      Complex c2 = new Complex(3);

      // calls the constructor with no parameters
      Complex c3 = new Complex();

      // print objects
      System.out.println(c1);
      System.out.println(c2);
      System.out.println(c3);
  }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>2 + 3i
3 + 3i
0 + 0i</samp></pre>

<p>In the above example, we have used <code>this</code> keyword,</p>

<ul>
  <li>to call the constructor <code>Complex(int i, int j)</code> from the constructor <code>Complex(int i)</code></li>
  <li>to call the constructor <code>Complex(int i)</code> from the constructor <code>Complex()</code></li>
</ul>

<p>Notice the line,</p>

<pre>
<code>System.out.println(c1);</code></pre>

<p>Here, when we print the object <var>c1</var>, the object is converted into a <a href="/java-programming/string">string</a>. In this process, the <a href="/java-programming/library/object/tostring">toString()</a> is called. Since we override the <code>toString()</code> method inside our class, we get the output according to that method.</p>

<p>One of the huge advantages of <code>this()</code> is to reduce the amount of duplicate code. However, we should be always careful while using <code>this()</code>.</p>

<p>This is because calling constructor from another constructor adds overhead and it is a slow process. Another huge advantage of using <code>this()</code> is to reduce the amount of duplicate code.</p>

<p class="note-tip"><strong>Note</strong>: Invoking one constructor from another constructor is called explicit constructor invocation.</p>

<hr>
<h3 id="argument">Passing this as an Argument</h3>

<p>We can use <code>this</code> keyword to pass the current object as an argument to a method. For example,</p>

<pre class="java-exec">
<code>class ThisExample {
  // declare variables
  int x;
  int y;

  ThisExample(int x, int y) {
     // assign values of variables inside constructor
      this.x = x;
      this.y = y;

      // value of x and y before calling add()
      System.out.println("Before passing this to addTwo() method:");
      System.out.println("x = " + this.x + ", y = " + this.y);

      // call the add() method passing this as argument
      add(this);

      // value of x and y after calling add()
      System.out.println("After passing this to addTwo() method:");
      System.out.println("x = " + this.x + ", y = " + this.y);
  }

  void add(ThisExample o){
      o.x += 2;
      o.y += 2;
  }
}

class Main {
  public static void main( String[] args ) {
      ThisExample obj = new ThisExample(1, -2);
  }
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Before passing this to addTwo() method:
x = 1, y = -2
After passing this to addTwo() method:
x = 3, y = 0</samp></pre>

<p>In the above example, inside the constructor <code>ThisExample()</code>, notice the line,</p>

<pre>
<code>add(this);</code></pre>

<p>Here, we are calling the <code>add()</code> method by passing this as an argument. Since this keyword contains the reference to the object <var>obj</var> of the class, we can change the value of <var>x</var> and <var>y</var> inside the <code>add()</code> method.</p>

</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#introduction">this Keyword</a></li>
  <li><a href="#disambiguate-reference">Using this for Ambiguity Variable Names</a></li>
  <li><a href="#getter-setter">this with Getters and Setters</a></li>
  <li><a href="#constructor-overloading">Using this in Constructor Overloading</a></li>
  <li><a href="#argument">Passing this as an Argument</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="final_keyword">
                        <div class="editor-contents">
                            <h1> Java final keyword </h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-2613" class="node node-java-tutorial clearfix" about="/java-programming/final-keyword" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content=" Java final keyword " class="rdf-meta element-hidden"></span>

<div class="content">
    <p id="introduction">In Java, the <code>final</code> keyword is used to denote constants. It can be used with <a href="/java-programming/variables-literals">variables</a>, <a href="/java-programming/methods">methods</a>, and <a href="/java-programming/class-objects">classes</a>.</p>

<p>Once any entity (variable, method or class) is declared <code>final</code>, it can be assigned only once. That is,</p>

<ul>
  <li>the final variable cannot be reinitialized with another value</li>
  <li>the final method cannot be overridden</li>
  <li>the final class cannot be extended</li>
</ul>

<hr>
<h2 id="final-variable">1. Java final Variable</h2>

<p>In Java, we cannot change the value of a final variable. For example,</p>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

  // create a final variable
  final int AGE = 32;

  // try to change the final variable
  AGE = 45;
  System.out.println("Age: " + AGE);
}
}</code></pre>

<p>In the above program, we have created a final variable named <var>age</var>. And we have tried to change the value of the final variable.</p>

<p>When we run the program, we will get a compilation error with the following message.</p>

<pre>
<code>cannot assign a value to final variable AGE
  AGE = 45;
  ^</code></pre>

<p class="note-tip"><strong>Note</strong>: It is recommended to use uppercase to declare final variables in Java.</p>

<hr>
<h2 id="final-method">2. Java final Method</h2>

<p>Before you learn about final methods and final classes, make sure you know about the <a href="/java-programming/inheritance">Java Inheritance</a>.</p>

<p>In Java, the <code>final</code> method cannot be overridden by the child class. For example,</p>

<pre class="java-exec">
<code>class FinalDemo {
  // create a final method
  public final void display() {
    System.out.println("This is a final method.");
  }
}

class Main extends FinalDemo {
// try to override final method
public final void display() {
  System.out.println("The final method is overridden.");
}

public static void main(String[] args) {
  Main obj = new Main();
  obj.display();
}
}</code></pre>

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
  </div><div class="clearfix"></div><p>In the above example, we have created a final method named <code>display()</code> inside the <code>FinalDemo</code> class. Here, the <var>Main</var> class inherits the <var>FinalDemo</var> class.</p>

<p>We have tried to override the final method in the <var>Main</var> class. When we run the program, we will get a compilation error with the following message.</p>

<pre>
<code> display() in Main cannot override display() in FinalDemo
public final void display() {
                  ^
overridden method is final</code></pre>

<hr>
<h2 id="final-class">3. Java final Class</h2>

<p>In Java, the final class cannot be inherited by another class. For example,</p>

<pre class="java-exec">
<code>// create a final class
final class FinalClass {
public void display() {
  System.out.println("This is a final method.");
}
}

// try to extend the final class
class Main extends FinalClass {
public  void display() {
  System.out.println("The final method is overridden.");
}

public static void main(String[] args) {
  Main obj = new Main();
  obj.display();
}
}</code></pre>

<p>In the above example, we have created a final class named <var>FinalClass</var>. Here, we have tried to inherit the final class by the <var>Main</var> class.</p>

<p>When we run the program, we will get a compilation error with the following message.</p>

<pre>
<code>cannot inherit from final FinalClass
class Main extends FinalClass {
                 ^</code></pre>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/java-programming/static-keyword">Java Static Keyword</a></li>
</ul>

</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#introduction">Introduction</a></li>
  <li><a href="#final-variable">Java final Variable</a></li>
  <li><a href="#final-method">Java final Method</a></li>
  <li><a href="#final-class">Java final Class</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="recursion">
                        
            <div class="editor-contents">
                <h1>Java Recursion</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1440" class="node node-java-tutorial clearfix" about="/java-programming/recursion" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Recursion" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">In Java, a <a href="/java-programming/methods">method</a> that calls itself is known as a recursive method. And, this process is known as recursion.</p>

<p>A physical world example would be to place two parallel mirrors facing each other. Any object in between them would be reflected recursively.</p>

<hr>
<h3 id="how-works">How Recursion works?</h3>

<figure><img src="/sites/tutorial2program/files/java-recursive-call.jpg" title="Working of Java Recursion" alt="A function is calling itself" width="416" height="247">
<figcaption>Working of Java Recursion</figcaption></figure>
<p>In the above example, we have called the <code>recurse()</code> method from inside the <code>main</code> method (normal method call). And, inside the recurse() method, we are again calling the same recurse method. This is a recursive call.</p>

<p>In order to stop the recursive call, we need to provide some conditions inside the method. Otherwise, the method will be called infinitely.</p>

<p>Hence, we use the <a href="/java-programming/if-else-statement">if...else statement</a> (or similar approach) to terminate the recursive call inside the method.</p>

<hr>
<h2 id="example">Example: Factorial of a Number Using Recursion</h2>

<pre class="java-exec">
<code>class Factorial {

static int factorial( int n ) {
if (n != 0)  // termination condition
return n * factorial(n-1); // recursive call
else
return 1;
}

public static void main(String[] args) {
int number = 4, result;
result = factorial(number);
System.out.println(number + " factorial = " + result);
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>4 factorial = 24</samp></pre>

<p>In the above example, we have a method named <code>factorial()</code>. The <code>factorial()</code> is called from the <code>main()</code> method with the <var>number</var> variable passed as an argument.</p>

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
</div><div class="clearfix"></div><p>Here, notice the statement,</p>

<pre>
<code>return n * factorial(n-1);</code></pre>

<p>The <code>factorial()</code> method is calling itself. Initially, the value of n is 4 inside <code>factorial()</code>. During the next recursive call, 3 is passed to the <code>factorial()</code> method. This process continues until <var>n</var> is equal to 0.</p>

<p>When <var>n</var> is equal to 0, the <code>if</code> statement returns false hence 1 is returned. Finally, the accumulated result is passed to the <code>main()</code> method.</p>

<hr>
<h2 id="factorial-program">Working of Factorial Program</h2>

<p>The image below will give you a better idea of how the factorial program is executed using recursion.</p>

<figure><img src="/sites/tutorial2program/files/how-recursion-works-java.jpg" title="Factorial Program using Recursion" alt="Finding the factorial of a number using recursion" width="456" height="1017">
<figcaption>Factorial Program using Recursion</figcaption></figure>
<hr>
<h2 id="advantages-disadvantages">Advantages and Disadvantages of Recursion</h2>

<p>When a recursive call is made, new storage locations for <a href="/java-programming/variables-literals">variables</a> are allocated on the stack. As, each recursive call returns, the old variables and parameters are removed from the stack. Hence, recursion generally uses more memory and is generally slow.</p>

<p>On the other hand, a recursive solution is much simpler and takes less time to write, debug and maintain.</p>




</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#how-works">How recursion works?</a></li>
<li><a href="#example">Example: Factorial of a Number Using Recursion</a></li>
<li><a href="#factorial-program">Working of Factorial Program</a></li>
<li><a href="#advantages-disadvantages">Advantages and Disadvantages of Recursion</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="instanceof">
                        
            <div class="editor-contents">
                <h1>Java instanceof Operator</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1512" class="node node-java-tutorial clearfix" about="/java-programming/instanceof" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java instanceof Operator" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>instanceof</code> operator in Java is used to check whether an object is an instance of a particular class or not.</p>

<p>Its syntax is</p>

<pre>
<code>objectName instanceOf className;</code></pre>

<p>Here, if <var>objectName</var> is an instance of <var>className</var>, the <a href="/java-programming/operators">operator</a> returns <code>true</code>. Otherwise, it returns <code>false</code>.</p>

<hr>
<h3 id="example">Example: Java instanceof</h3>

<pre class="java-exec">
<code>class Main {

public static void main(String[] args) {

// create a variable of string type
String name = "Programiz";

// checks if name is instance of String
boolean result1 = name instanceof String;
System.out.println("name is an instance of String: " + result1);

// create an object of Main
Main obj = new Main();

// checks if obj is an instance of Main
boolean result2 = obj instanceof Main;
System.out.println("obj is an instance of Main: " + result2);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>name is an instance of String: true
obj is an instance of Main: true</samp></pre>

<p>In the above example, we have created a variable <var>name</var> of the <code>String</code> type and an object <var>obj</var> of the <var>Main</var> class.</p>

<p>Here, we have used the <code>instanceof</code> operator to check whether <var>name</var> and <var>obj</var> are instances of the <code>String</code> and <var>Main</var> class respectively. And, the operator returns <code>true</code> in both cases.</p>

<p class="note-tip"><strong>Note</strong>: In Java, <code>String</code> is a class rather than a primitive data type. To learn more, visit <a href="/java-programming/string">Java String</a>.</p>

<hr>
<h2 id="inheritance">Java instanceof during Inheritance</h2>

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
</div><div class="clearfix"></div><p>We can use the <code>instanceof</code> operator to check if objects of the subclass is also an instance of the superclass. For example,</p>

<pre class="java-exec">
<code>// Java Program to check if an object of the subclass
// is also an instance of the superclass

// superclass
class Animal {
}

// subclass
class Dog extends Animal {
}

class Main {
public static void main(String[] args) {

// create an object of the subclass
Dog d1 = new Dog();

// checks if d1 is an instance of the subclass
System.out.println(d1 instanceof Dog);        // prints true

// checks if d1 is an instance of the superclass
System.out.println(d1 instanceof Animal);     // prints true
}
}</code></pre>

<p>In the above example, we have created a subclass <var>Dog</var> that inherits from the superclass <var>Animal</var>. We have created an object <var>d1</var> of the <var>Dog</var> class.</p>

<p>Inside the print statement, notice the expression,</p>

<pre>
<code>d1 instanceof Animal</code></pre>

<p>Here, we are using the <code>instanceof</code> operator to check whether <var>d1</var> is also an instance of the superclass <var>Animal</var>.</p>

<hr>
<h2 id="interface">Java instanceof in Interface</h2>

<p>The <code>instanceof</code> operator is also used to check whether an object of a class is also an instance of the interface implemented by the class. For example,</p>

<pre class="java-exec">
<code>// Java program to check if an object of a class is also
//  an instance of the interface implemented by the class

interface Animal {
}

class Dog implements Animal {
}

class Main {
public static void main(String[] args) {

// create an object of the Dog class
Dog d1 = new Dog();

// checks if the object of Dog
// is also an instance of Animal
System.out.println(d1 instanceof Animal);  // returns true
}
}</code></pre>

<p>In the above example, the <var>Dog</var> class implements the <var>Animal</var> interface. Inside the print statement, notice the expression,</p>

<pre>
<code>d1 instanceof Animal</code></pre>

<p>Here, <var>d1</var> is an instance of <var>Dog</var> class. The <code>instanceof</code> operator checks if <var>d1</var> is also an instance of the interface <var>Animal</var>.</p>

<div class="note-tip">
<p><strong>Note</strong>: In Java, all the classes are inherited from the <code>Object</code> class. So, instances of all the classes are also an instance of the <code>Object</code> class.</p>

<p>In the previous example, if we check,</p>

<pre>
<code>d1 instanceof Object</code></pre>

<p>The result will be <code>true</code>.</p>

</div>
<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/examples/get-class-of-object">Java Program to Determine the class of an object</a> </li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Java instanceof</a></li>
<li><a href="#example">Example: instanceof</a></li>
<li><a href="#inheritance">Java instanceof during Inheritance</a></li>
<li><a href="#interface">Java instanceof in Interface</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                </section>
                <section id="oop3">
                    <div id="inheritance">
                        
            <div class="editor-contents">
                <h1>Java Inheritance</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1511" class="node node-java-tutorial clearfix" about="/java-programming/inheritance" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Inheritance" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">Inheritance is one of the key features of OOP that allows us to create a new class from an existing class.</p>

<p>The new class that is created is known as <strong>subclass</strong> (child or derived class) and the existing class from where the child class is derived is known as <strong>superclass</strong> (parent or base class).</p>

<p>The <code>extends</code> keyword is used to perform inheritance in Java. For example,</p>

<pre>
<code>class Animal {
// methods and fields
}

// use of extends keyword
// to perform inheritance
class Dog extends Animal {

// methods and fields of Animal
// methods and fields of Dog
}</code></pre>

<p>In the above example, the <var>Dog</var> class is created by inheriting the <a href="/java-programming/methods">methods</a> and fields from the <var>Animal</var> class.</p>

<p>Here, <var>Dog</var> is the subclass and <var>Animal</var> is the superclass.</p>

<hr>
<h3 id="example">Example 1: Java Inheritance</h3>

<pre class="java-exec">
<code>class Animal {

// field and method of the parent class
String name;
public void eat() {
System.out.println("I can eat");
}
}

// inherit from Animal
class Dog extends Animal {

// new method in subclass
public void display() {
System.out.println("My name is " + name);
}
}

class Main {
public static void main(String[] args) {

// create an object of the subclass
Dog labrador = new Dog();

// access field of superclass
labrador.name = "Rohu";
labrador.display();

// call method of superclass
// using object of subclass
labrador.eat();

}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>My name is Rohu
I can eat</samp></pre>

<p>In the above example, we have derived a subclass <var>Dog</var> from superclass <var>Animal</var>. Notice the statements,</p>

<pre>
<code>labrador.name = "Rohu";

labrador.eat();</code></pre>

<p>Here, <var>labrador</var> is an object of <var>Dog</var>. However, <var>name</var> and <code>eat()</code> are the members of the <var>Animal</var> class.</p>

<p>Since <var>Dog</var> inherits the field and method from <var>Animal</var>, we are able to access the field and method using the object of the <var>Dog</var>.</p>

<figure><img src="/sites/tutorial2program/files/java-inheritance-implementation.png" title="Java Inheritance Implementation" alt="Subclass Dog can access the field and method of the superclass Animal." width="460" height="290">
<figcaption>Java Inheritance Implementation</figcaption></figure>
<hr>
<h2 id="is-a">is-a relationship</h2>

<p>In Java, inheritance is an <strong>is-a</strong> relationship. That is, we use inheritance only if there exists an is-a relationship between two classes. For example,</p>

<ul>
<li><strong>Car</strong> is a <strong>Vehicle</strong></li>
<li><strong>Orange</strong> is a <strong>Fruit</strong></li>
<li><strong>Surgeon</strong> is a <strong>Doctor</strong></li>
<li><strong>Dog</strong> is an <strong>Animal</strong></li>
</ul>

<p>Here, <strong>Car</strong> can inherit from <strong>Vehicle</strong>, <strong>Orange</strong> can inherit from <strong>Fruit</strong>, and so on.</p>

<hr>
<h2 id="method-overriding">Method Overriding in Java Inheritance</h2>

<p>In <strong>Example 1</strong>, we see the object of the subclass can access the method of the superclass.</p>

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
</div><div class="clearfix"></div><p><strong>However, if the same method is present in both the superclass and subclass, what will happen?</strong></p>

<p>In this case, the method in the subclass overrides the method in the superclass. This concept is known as method overriding in Java.</p>

<h3>Example 2: Method overriding in Java Inheritance</h3>

<pre class="java-exec">
<code>class Animal {

// method in the superclass
public void eat() {
System.out.println("I can eat");
}
}

// Dog inherits Animal
class Dog extends Animal {

// overriding the eat() method
@Override
public void eat() {
System.out.println("I eat dog food");
}

// new method in subclass
public void bark() {
System.out.println("I can bark");
}
}

class Main {
public static void main(String[] args) {

// create an object of the subclass
Dog labrador = new Dog();

// call the eat() method
labrador.eat();
labrador.bark();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>I eat dog food
I can bark</samp></pre>

<p>In the above example, the <code>eat()</code> method is present in both the superclass <var>Animal</var> and the subclass <var>Dog</var>.</p>

<p>Here, we have created an object <var>labrador</var> of <var>Dog</var>.</p>

<p>Now when we call <code>eat()</code> using the object <var>labrador</var>, the method inside <var>Dog</var> is called. This is because the method inside the derived class overrides the method inside the base class.</p>

<p>This is called method overriding. To learn more, visit <a href="/java-programming/method-overriding">Java Method Overriding</a>.</p>

<p class="note-tip"><strong>Note</strong>: We have used the <code>@Override</code> annotation to tell the compiler that we are overriding a method. However, the annotation is not mandatory. To learn more, visit <a href="/java-programming/annotations">Java Annotations</a>.</p>

<hr>
<h2 id="super">super Keyword in Java Inheritance</h2>

<p>Previously we saw that the same method in the subclass overrides the method in superclass.</p>

<p>In such a situation, the <code>super</code> keyword is used to call the method of the parent class from the method of the child class.</p>

<h3>Example 3: super Keyword in Inheritance</h3>

<pre class="java-exec">
<code>class Animal {

// method in the superclass
public void eat() {
System.out.println("I can eat");
}
}

// Dog inherits Animal
class Dog extends Animal {

// overriding the eat() method
@Override
public void eat() {

// call method of superclass
super.eat();
System.out.println("I eat dog food");
}

// new method in subclass
public void bark() {
System.out.println("I can bark");
}
}

class Main {
public static void main(String[] args) {

// create an object of the subclass
Dog labrador = new Dog();

// call the eat() method
labrador.eat();
labrador.bark();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>I can eat
I eat dog food
I can bark </samp></pre>

<p>In the above example, the <code>eat()</code> method is present in both the base class <var>Animal</var> and the derived class <var>Dog</var>. Notice the statement,</p>

<pre>
<code>super.eat();</code></pre>

<p>Here, the <code>super</code> keyword is used to call the <code>eat()</code> method present in the superclass.</p>

<p>We can also use the <code>super</code> keyword to call the <a href="/java-programming/constructors">constructor</a> of the superclass from the constructor of the subclass. To learn more, visit <a href="/java-programming/super-keyword">Java super keyword</a><strong>.</strong></p>

<hr>
<h2 id="protected-keyword">protected Members in Inheritance</h2>

<p>In Java, if a class includes <code>protected</code> fields and methods, then these fields and methods are accessible from the subclass of the class.</p>

<h3>Example 4: protected Members in Inheritance</h3>

<pre class="java-exec">
<code>class Animal {
protected String name;

protected void display() {
System.out.println("I am an animal.");
}
}

class Dog extends Animal {

public void getInfo() {
System.out.println("My name is " + name);
}
}

class Main {
public static void main(String[] args) {

// create an object of the subclass
Dog labrador = new Dog();

// access protected field and method
// using the object of subclass
labrador.name = "Rocky";
labrador.display();

labrador.getInfo();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>I am an animal.
My name is Rocky</samp></pre>

<p>In the above example, we have created a class named Animal. The class includes a protected field: <var>name</var> and a method: <code>display()</code>.</p>

<p>We have inherited the <var>Dog</var> class inherits <var>Animal</var>. Notice the statement,</p>

<pre>
<code>labrador.name = "Rocky";
labrador.display();</code></pre>

<p>Here, we are able to access the protected field and method of the superclass using the <var>labrador</var> object of the subclass.</p>

<hr>
<h2 id="advantage">Why use inheritance?</h2>

<ul>
<li>The most important use of inheritance in Java is code reusability. The code that is present in the parent class can be directly used by the child class.</li>
<li>Method overriding is also known as runtime polymorphism. Hence, we can achieve Polymorphism in Java with the help of inheritance.</li>
</ul>

<hr>
<h2 id="types">Types of inheritance</h2>

<p>There are five types of inheritance.</p>

<h3>1. Single Inheritance</h3>

<p>In single inheritance, a single subclass extends from a single superclass. For example,</p>

<figure><img src="/sites/tutorial2program/files/java-single-inheritance.png" title="Java Single Inheritance" alt="Class A inherits from class B." width="200" height="212">
<figcaption>Java Single Inheritance</figcaption></figure>
<hr>
<h3>2. Multilevel Inheritance</h3>

<p>In multilevel inheritance, a subclass extends from a superclass and then the same subclass acts as a superclass for another class. For example,</p>

<figure><img src="/sites/tutorial2program/files/java-multilevel-inheritance.png" title="Java Multilevel Inheritance" alt="Class B inherits from class A and class C inherits from class B." width="240" height="386">
<figcaption>Java Multilevel Inheritance</figcaption></figure>
<hr>
<h3>3. Hierarchical Inheritance</h3>

<p>In hierarchical inheritance, multiple subclasses extend from a single superclass. For example,</p>

<figure><img src="/sites/tutorial2program/files/java-hierarchical-inheritance.png" title="Java Hierarchical Inheritance" alt="Both classes B and C inherit from the single class A." width="340" height="237">
<figcaption>Java Hierarchical Inheritance</figcaption></figure>
<hr>
<h3>4. Multiple Inheritance</h3>

<p>In multiple inheritance, a single subclass extends from multiple superclasses. For example,</p>

<figure><img src="/sites/tutorial2program/files/java-multiple-inheritance.png" title="Java Multiple Inheritance" alt="Class C inherits from both classes A and B." width="360" height="251">
<figcaption>Java Multiple Inheritance</figcaption></figure>
<p class="note-tip"><strong>Note</strong>: Java doesn't support multiple inheritance. However, we can achieve multiple inheritance using interfaces. To learn more, visit <a href="/java-programming/examples/implement-multiple-inheritance">Java implements multiple inheritance</a>.</p>

<hr>
<h3>5. Hybrid Inheritance</h3>

<p>Hybrid inheritance is a combination of two or more types of inheritance. For example,</p>

<figure><img src="/sites/tutorial2program/files/java-hybrid-inheritance.png" title="Java Hybrid Inheritance" alt="Class B and C inherit from a single class A and class D inherits from both the class B and C." width="360" height="411">
<figcaption>Java Hybrid Inheritance</figcaption></figure>
<p>Here, we have combined hierarchical and multiple inheritance to form a hybrid inheritance.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#example">Example: Java Inheritance</a></li>
<li><a href="#is-a">is-a relationship</a></li>
<li><a href="#method-overriding">Method Overriding Inheritance</a></li>
<li><a href="#super">super Keyword Inheritance</a></li>
<li><a href="#protected-keyword">protected Members and Inheritance</a></li>
<li><a href="#advantage">Why use inheritance?</a></li>
<li><a href="#types">Types of inheritance</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="overriding">
                        
            <div class="editor-contents">
                <h1>Java Method Overriding</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1514" class="node node-java-tutorial clearfix" about="/java-programming/method-overriding" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Method Overriding" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">In the last tutorial, we learned about inheritance. Inheritance is an OOP property that allows us to derive a new class (subclass) from an existing class (superclass). The subclass inherits the attributes and methods of the superclass.</p>

<p>Now, if the same method is defined in both the superclass and the subclass, then the method of the subclass class overrides the method of the superclass. This is known as method overriding.</p>

<hr>
<h3 id="example-1">Example 1: Method Overriding</h3>

<pre class="java-exec">
<code>class Animal {
public void displayInfo() {
System.out.println("I am an animal.");
}
}

class Dog extends Animal {
@Override
public void displayInfo() {
System.out.println("I am a dog.");
}
}

class Main {
public static void main(String[] args) {
Dog d1 = new Dog();
d1.displayInfo();
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>I am a dog.</samp></pre>

<p>In the above program, the <code>displayInfo()</code> method is present in both the <var>Animal</var> superclass and the <var>Dog</var> subclass.</p>

<p>When we call <code>displayInfo()</code> using the <var>d1</var> object (object of the subclass), the method inside the subclass <var>Dog</var> is called. The <code>displayInfo()</code> method of the subclass overrides the same method of the superclass.</p>

<figure><img src="/sites/tutorial2program/files/method-overriding-in-java.png" title="Method Overriding in Java" alt="Working of method overriding in Java." width="450" height="289">
</figure>
<p>Notice the use of the <code>@Override</code> annotation in our example. In Java, annotations are the metadata that we used to provide information to the compiler. Here, the <code>@Override</code> annotation specifies the compiler that the method after this annotation overrides the method of the superclass.</p>

<p>It is not mandatory to use <code>@Override</code>. However, when we use this, the method should follow all the rules of overriding. Otherwise, the compiler will generate an error.</p>

<hr>
<h2 id="rules">Java Overriding Rules</h2>

<ul>
<li>Both the superclass and the subclass must have the same method name, the same return type and the same parameter list.</li>
<li>We cannot override the method declared as <code>final</code> and <code>static</code>.</li>
<li>We should always override abstract methods of the superclass (will be discussed in later tutorials).</li>
</ul>

<hr>
<h2 id="super">super Keyword in Java Overriding</h2>

<p>A common question that arises while performing overriding in Java is:</p>

<p><strong>Can we access the method of the superclass after overriding?</strong> </p>

<p>Well, the answer is <strong>Yes</strong>. To access the method of the superclass from the subclass, we use the <code>super</code> keyword.</p>

<h3>Example 2: Use of super Keyword</h3>

<pre class="java-exec">
<code>class Animal {
public void displayInfo() {
System.out.println("I am an animal.");
}
}

class Dog extends Animal {
public void displayInfo() {
super.displayInfo();
System.out.println("I am a dog.");
}
}

class Main {
public static void main(String[] args) {
Dog d1 = new Dog();
d1.displayInfo();
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>I am an animal.
I am a dog.</samp></pre>

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
</div><div class="clearfix"></div><p>In the above example, the subclass <var>Dog</var> overrides the method <code>displayInfo()</code> of the superclass <var>Animal</var>.</p>

<p>When we call the method <code>displayInfo()</code> using the <var>d1</var> object of the <var>Dog</var> subclass, the method inside the <var>Dog</var> subclass is called; the method inside the superclass is not called.</p>

<p>Inside <code>displayInfo()</code> of the <var>Dog</var> subclass, we have used <code>super.displayInfo()</code> to call <code>displayInfo()</code> of the superclass.</p>

<hr>
<p>It is important to note that <a href="/java-programming/constructors">constructors</a> in Java are not inherited. Hence, there is no such thing as constructor overriding in Java.</p>

<p>However, we can call the constructor of the superclass from its subclasses. For that, we use <code>super()</code>. To learn more, visit <a href="/java-programming/super-keyword">Java super keyword</a>.</p>

<hr>
<h2 id="access-specifier">Access Specifiers in Method Overriding</h2>

<p>The same method declared in the superclass and its subclasses can have different access specifiers. However, there is a restriction.</p>

<p>We can only use those access specifiers in subclasses that provide larger access than the access specifier of the superclass. For example,</p>

<p>Suppose, a method <code>myClass()</code> in the superclass is declared <code>protected</code>. Then, the same method <code>myClass()</code> in the subclass can be either <code>public</code> or <code>protected</code>, but not <code>private</code>.</p>

<h3>Example 3: Access Specifier in Overriding</h3>

<pre class="java-exec">
<code>class Animal {
protected void displayInfo() {
System.out.println("I am an animal.");
}
}

class Dog extends Animal {
public void displayInfo() {
System.out.println("I am a dog.");
}
}

class Main {
public static void main(String[] args) {
Dog d1 = new Dog();
d1.displayInfo();
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>I am a dog.</samp></pre>

<p>In the above example, the subclass <var>Dog</var> overrides the method <code>displayInfo()</code> of the superclass <var>Animal</var>.</p>

<p>Whenever we call <code>displayInfo()</code> using the <var>d1</var> (object of the subclass), the method inside the subclass is called.</p>

<p>Notice that, the <code>displayInfo()</code> is declared <code>protected</code> in the <var>Animal</var> superclass. The same method has the <code>public</code> access specifier in the <var>Dog</var> subclass. This is possible because the <code>public</code> provides larger access than the <code>protected</code>.</p>

<hr>
<h2>Overriding Abstract Methods</h2>

<p>In Java, abstract classes are created to be the superclass of other classes. And, if a class contains an abstract method, it is mandatory to override it.</p>

<p>We will learn more about abstract classes and overriding of abstract methods in later tutorials.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/method-overloading">Java Method Overloading</a></li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Method Overriding (Introduction)</a></li>
<li><a href="#example-1">Example: Method Overriding</a></li>
<li><a href="#rules">Java Method Overriding Rules</a></li>
<li><a href="#super">Java super Keyword</a></li>
<li><a href="#access-specifier">Access Specifiers in Method Overriding</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="super">
                        <div class="editor-contents">
                            <h1>Java super</h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-1513" class="node node-java-tutorial clearfix" about="/java-programming/super-keyword" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java super" class="rdf-meta element-hidden"></span>

<div class="content">
    <p>The <code>super</code> keyword in Java is used in subclasses to access superclass members (attributes, <a href="/java-programming/constructors">constructors</a> and <a href="/java-programming/methods%5C">methods</a>).</p>

<p>Before we learn about the <code>super</code> keyword, make sure to know about <a href="/java-programming/inheritance">Java inheritance</a>.</p>

<hr>
<h2 id="uses">Uses of super keyword</h2>

<ol>
  <li>To call methods of the superclass that is overridden in the subclass.</li>
  <li>To access attributes (fields) of the superclass if both superclass and subclass have attributes with the same name.</li>
  <li>To explicitly call superclass no-arg (default) or parameterized constructor from the subclass constructor.</li>
</ol>

<p>Let's understand each of these uses.</p>

<hr>
<h2 id="access-superclass-methods">1. Access Overridden Methods of the superclass</h2>

<p>If methods with the same name are defined in both superclass and subclass, the method in the subclass overrides the method in the superclass. This is called <a href="/java-programming/method-overriding">method overriding</a>.</p>

<h3>Example 1: Method overriding</h3>

<pre class="java-exec">
<code>class Animal {

// overridden method
public void display(){
  System.out.println("I am an animal");
}
}

class Dog extends Animal {

// overriding method
@Override
public void display(){
  System.out.println("I am a dog");
}

public void printMessage(){
  display();
}
}

class Main {
public static void main(String[] args) {
  Dog dog1 = new Dog();
  dog1.printMessage();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>I am a dog</samp></pre>

<p>In this example, by making an object <var>dog1</var> of <var>Dog</var> class, we can call its method <var>printMessage()</var> which then executes the <code>display()</code> statement.</p>

<p>Since <code>display()</code> is defined in both the classes, the method of subclass <var>Dog</var> overrides the method of superclass <var>Animal</var>. Hence, the <code>display()</code> of the subclass is called.</p>

<figure><img src="/sites/tutorial2program/files/java-overriding-example.png" title="" alt="Java overriding example" width="500" height="391">
</figure>
<p><strong>What if the overridden method of the superclass has to be called?</strong> </p>

<p>We use <code>super.display()</code> if the overridden method <code>display()</code> of superclass <var>Animal</var> needs to be called.</p>

<h3>Example 2: super to Call Superclass Method</h3>

<pre class="java-exec">
<code>class Animal {

// overridden method
public void display(){
  System.out.println("I am an animal");
}
}

class Dog extends Animal {

// overriding method
@Override
public void display(){
  System.out.println("I am a dog");
}

public void printMessage(){

  // this calls overriding method
  display();

  // this calls overridden method
  super.display();
}
}

class Main {
public static void main(String[] args) {
  Dog dog1 = new Dog();
  dog1.printMessage();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>I am a dog
I am an animal</samp></pre>

<p>Here, how the above program works.</p>

<figure><img src="/sites/tutorial2program/files/call-superclass-method.png" title="" alt="Working of super in Java" width="500" height="393">
</figure>
<hr>
<h2 id="access-superclass-attributes">2. Access Attributes of the Superclass</h2>

<p>The superclass and subclass can have attributes with the same name. We use the <code>super</code> keyword to access the attribute of the superclass.</p>

<h3>Example 3: Access superclass attribute</h3>

<pre class="java-exec">
<code>class Animal {
protected String type="animal";
}

class Dog extends Animal {
public String type="mammal";

public void printType() {
  System.out.println("I am a " + type);
  System.out.println("I am an " + super.type);
}
}

class Main {
public static void main(String[] args) {
  Dog dog1 = new Dog();
  dog1.printType();
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>I am a mammal
I am an animal</samp></pre>

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
  </div><div class="clearfix"></div><p>In this example, we have defined the same instance field <var>type</var> in both the superclass <var>Animal</var> and the subclass <var>Dog</var>.</p>

<p>We then created an object <var>dog1</var> of the <var>Dog</var> class. Then, the <code>printType()</code> method is called using this object.</p>

<p>Inside the <code>printType()</code> function,</p>

<ul>
  <li><var>type</var> refers to the attribute of the subclass <var>Dog</var>.</li>
  <li><var>super.type</var> refers to the attribute of the superclass Animal.</li>
</ul>

<p>Hence, <code>System.out.println("I am a " + type);</code> prints <samp>I am a mammal</samp>. And, <code>System.out.println("I am an " + super.type);</code> prints <samp>I am an animal</samp>.</p>

<hr>
<h2>3. Use of super() to access superclass constructor</h2>

<p>As we know, when an object of a class is created, its default constructor is automatically called.</p>

<p>To explicitly call the superclass constructor from the subclass constructor, we use <code>super()</code>. It's a special form of the <code>super</code> keyword.</p>

<p><code>super()</code> can be used only inside the subclass constructor and must be the first statement.</p>

<h3>Example 4: Use of super()</h3>

<pre class="java-exec">
<code>class Animal {

// default or no-arg constructor of class Animal
Animal() {
  System.out.println("I am an animal");
}
}

class Dog extends Animal {

// default or no-arg constructor of class Dog
Dog() {

  // calling default constructor of the superclass
  super();

  System.out.println("I am a dog");
}
}

class Main {
public static void main(String[] args) {
  Dog dog1 = new Dog();
}
}</code></pre>

<p><strong>Output</strong> </p>

<pre>
<samp>I am an animal
I am a dog</samp></pre>

<p>Here, when an object <var>dog1</var> of <var>Dog</var> class is created, it automatically calls the default or no-arg constructor of that class.</p>

<p>Inside the subclass constructor, the <code>super()</code> statement calls the constructor of the superclass and executes the statements inside it. Hence, we get the output <samp>I am an animal</samp>.</p>

<figure><img src="/sites/tutorial2program/files/super%28%29-example.png" title="" alt="Working of super() in Java" width="450" height="422">
</figure>
<p>The flow of the program then returns back to the subclass constructor and executes the remaining statements. Thus, <samp>I am a dog</samp> will be printed.</p>

<p>However, using <code>super()</code> is not compulsory. Even if <code>super()</code> is not used in the subclass constructor, the compiler implicitly calls the default constructor of the superclass.</p>

<p><strong>So, why use redundant code if the compiler automatically invokes super()?</strong> </p>

<p>It is required if the <strong>parameterized constructor (a constructor that takes arguments)</strong> of the superclass has to be called from the subclass constructor.</p>

<p>The parameterized <code>super()</code> must always be the first statement in the body of the constructor of the subclass, otherwise, we get a compilation error.</p>

<h3 id="access-superclass-constructors">Example 5: Call Parameterized Constructor Using super()</h3>

<pre class="java-exec">
<code>class Animal {

// default or no-arg constructor
Animal() {
  System.out.println("I am an animal");
}

// parameterized constructor
Animal(String type) {
  System.out.println("Type: "+type);
}
}

class Dog extends Animal {

// default constructor
Dog() {

  // calling parameterized constructor of the superclass
  super("Animal");

  System.out.println("I am a dog");
}
}

class Main {
public static void main(String[] args) {
  Dog dog1 = new Dog();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Type: Animal
I am a dog</samp></pre>

<p>The compiler can automatically call the no-arg constructor. However, it cannot call parameterized constructors.</p>

<p>If a parameterized constructor has to be called, we need to explicitly define it in the subclass constructor.</p>

<figure><img src="/sites/tutorial2program/files/parameterized-super-example.png" title="" alt="Working of super in case of parameterized constructor." width="450" height="375">
</figure>
<p>Note that in the above example, we explicitly called the parameterized constructor <code>super("Animal")</code>. The compiler does not call the default constructor of the superclass in this case.</p>

</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#uses">Use of super Keyword</a></li>
  <li><a href="#access-superclass-methods">Access overridden methods of the superclass</a></li>
  <li><a href="#access-superclass-attributes">Access attributes of the superclass</a></li>
  <li><a href="#access-superclass-constructors">Access superclass constructor Using super()</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="abstract">
                        
            <div class="editor-contents">
                <h1>Java Abstract Class and Abstract Methods</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1515" class="node node-java-tutorial clearfix" about="/java-programming/abstract-classes-methods" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Abstract Class and Abstract Methods" class="rdf-meta element-hidden"></span>

<div class="content">
<h2 id="abstract-class">Java Abstract Class</h2>

<p>The abstract class in Java cannot be instantiated (we cannot create objects of abstract classes). We use the <code>abstract</code> keyword to declare an abstract class. For example,</p>

<pre>
<code>// create an abstract class
abstract class Language {
// fields and methods
}
...

// try to create an object Language
// throws an error
Language obj = new Language(); </code></pre>

<p>An abstract class can have both the regular methods and abstract methods. For example,</p>

<pre>
<code>abstract class Language {

// abstract method
abstract void method1();

// regular method
void method2() {
System.out.println("This is regular method");
}
}</code></pre>

<p>To know about the non-abstract methods, visit <a href="/java-programming/methods">Java methods</a>. Here, we will learn about abstract methods.</p>

<hr>
<h2 id="abstract-method">Java Abstract Method</h2>

<p>A method that doesn't have its body is known as an abstract method. We use the same <code>abstract</code> keyword to create abstract methods. For example,</p>

<pre>
<code>abstract void display();</code></pre>

<p>Here, <code>display()</code> is an abstract method. The body of <code>display()</code> is replaced by <code>;</code>.</p>

<p>If a class contains an abstract method, then the class should be declared abstract. Otherwise, it will generate an error. For example,</p>

<pre>
<code>// error
// class should be abstract
class Language {

// abstract method
abstract void method1();
}</code></pre>

<hr>
<h3 id="example">Example: Java Abstract Class and Method</h3>

<p>Though abstract classes cannot be instantiated, we can create subclasses from it. We can then access members of the abstract class using the object of the subclass. For example,</p>

<pre class="java-exec">
<code>abstract class Language {

// method of abstract class
public void display() {
System.out.println("This is Java Programming");
}
}

class Main extends Language {

public static void main(String[] args) {

// create an object of Main
Main obj = new Main();

// access method of abstract class
// using object of Main class
obj.display();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>This is Java programming</samp></pre>

<p>In the above example, we have created an abstract class named <var>Language</var>. The class contains a regular method <code>display()</code>.</p>

<p>We have created the Main class that inherits the abstract class. Notice the statement,</p>

<pre>
<code>obj.display();</code></pre>

<p>Here, <var>obj</var> is the object of the child class <var>Main</var>. We are calling the method of the abstract class using the object <var>obj</var>.</p>

<hr>
<h2 id="implement">Implementing Abstract Methods</h2>

<p>If the abstract class includes any abstract method, then all the child classes inherited from the abstract superclass must provide the implementation of the abstract method. For example,</p>

<pre class="java-exec">
<code>abstract class Animal {
abstract void makeSound();

public void eat() {
System.out.println("I can eat.");
}
}

class Dog extends Animal {

// provide implementation of abstract method
public void makeSound() {
System.out.println("Bark bark");
}
}

class Main {
public static void main(String[] args) {

// create an object of Dog class
Dog d1 = new Dog();

d1.makeSound();
d1.eat();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Bark bark
I can eat.</samp></pre>

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
</div><div class="clearfix"></div><p>In the above example, we have created an abstract class <var>Animal</var>. The class contains an abstract method <code>makeSound()</code> and a non-abstract method <code>eat()</code>.</p>

<p>We have inherited a subclass <var>Dog</var> from the superclass <var>Animal</var>. Here, the subclass <var>Dog</var> provides the implementation for the abstract method <code>makeSound()</code>.</p>

<p>We then used the object <var>d1</var> of the <var>Dog</var> class to call methods <code>makeSound()</code> and <code>eat()</code>.</p>

<p class="note-tip"><strong>Note</strong>: If the <var>Dog</var> class doesn't provide the implementation of the abstract method <code>makeSound()</code>, <var>Dog</var> should also be declared as abstract. This is because the subclass <var>Dog</var> inherits <code>makeSound()</code> from <var>Animal</var>.</p>

<hr>
<h3 id="access-constructor">Accesses Constructor of Abstract Classes</h3>

<p>An abstract class can have <a href="/java-programming/constructors">constructors</a> like the regular class. And, we can access the constructor of an abstract class from the subclass using the <code>super</code> keyword. For example,</p>

<pre>
<code>abstract class Animal {
Animal() {
….
}
}

class Dog extends Animal {
Dog() {
super();
...
}
}</code></pre>

<p>Here, we have used the <code>super()</code> inside the constructor of <var>Dog</var> to access the constructor of the <var>Animal</var>.</p>

<p>Note that the <code>super</code> should always be the first statement of the subclass constructor. Visit <a href="/java-programming/super-keyword">Java super keyword</a> to learn more.</p>

<hr>
<h2 id="abstraction">Java Abstraction</h2>

<p>The major use of abstract classes and methods is to achieve abstraction in Java.</p>

<p>Abstraction is an important concept of object-oriented programming that allows us to hide unnecessary details and only show the needed information.</p>

<p>This allows us to manage complexity by omitting or hiding details with a simpler, higher-level idea.</p>

<p>A practical example of abstraction can be motorbike brakes. We know what brake does. When we apply the brake, the motorbike will stop. However, the working of the brake is kept hidden from us.</p>

<p>The major advantage of hiding the working of the brake is that now the manufacturer can implement brake differently for different motorbikes, however, what brake does will be the same.</p>

<p>Let's take an example that helps us to better understand Java abstraction.</p>

<h3>Example 3: Java Abstraction</h3>

<pre class="java-exec">
<code>abstract class MotorBike {
abstract void brake();
}

class SportsBike extends MotorBike {

// implementation of abstract method
public void brake() {
System.out.println("SportsBike Brake");
}
}

class MountainBike extends MotorBike {

// implementation of abstract method
public void brake() {
System.out.println("MountainBike Brake");
}
}

class Main {
public static void main(String[] args) {
MountainBike m1 = new MountainBike();
m1.brake();
SportsBike s1 = new SportsBike();
s1.brake();
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>MountainBike Brake
SportsBike Brake</samp></pre>

<p>In the above example, we have created an abstract super class <var>MotorBike</var>. The superclass <var>MotorBike</var> has an abstract method <code>brake()</code>.</p>

<p>The <code>brake()</code> method cannot be implemented inside <var>MotorBike</var>. It is because every bike has different implementation of brakes. So, all the subclasses of <var>MotorBike</var> would have different implementation of <code>brake()</code>.</p>

<p>So, the implementation of <code>brake()</code> in <var>MotorBike</var> is kept hidden.</p>

<p>Here, <var>MountainBike</var> makes its own implementation of <code>brake()</code> and <var>SportsBike</var> makes its own implementation of <code>brake()</code>.</p>

<p class="note-tip"><strong>Note</strong>: We can also use interfaces to achieve abstraction in Java. To learn more, visit <a href="/java-programming/interfaces">Java Interface</a>.</p>

<hr>
<h2 id="key-points">Key Points to Remember</h2>

<ul>
<li>We use the <code>abstract</code> keyword to create abstract classes and methods.</li>
<li>An abstract method doesn't have any implementation (method body).</li>
<li>A class containing abstract methods should also be abstract.</li>
<li>We cannot create objects of an abstract class.</li>
<li>To implement features of an abstract class, we inherit subclasses from it and create objects of the subclass.</li>
<li>A subclass must override all abstract methods of an abstract class. However, if the subclass is declared abstract, it's not mandatory to override abstract methods.</li>
<li>We can access the static attributes and methods of an abstract class using the reference of the abstract class. For example,
<pre>
<code>Animal.staticMethod();</code></pre>

</li>
</ul>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/class-objects">Java Class and Objects</a></li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#abstract-class">Java Abstract Class</a></li>
<li><a href="#abstract-method">Java Abstract Method</a></li>
<li><a href="#example">Example: Java Abstract Class and Method</a></li>
<li><a href="#implement">Implementing Abstract Methods</a></li>
<li><a href="#access-constructor">Constructor of Abstract Classes</a></li>
<li><a href="#abstraction">Java Abstraction</a></li>
<li><a href="#key-points">Key Points to Remember</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="interface">
                        <div class="editor-contents">
                            <h1>Java Interface</h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-1516" class="node node-java-tutorial clearfix" about="/java-programming/interfaces" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java Interface" class="rdf-meta element-hidden"></span>

<div class="content">
    <p id="introduction">An interface is a fully <a href="/java-programming/abstract-classes-methods">abstract class</a>. It includes a group of <a href="/java-programming/abstract-classes-methods">abstract methods</a> (<a href="/java-programming/methods">methods</a> without a body).</p>

<p>We use the <code>interface</code> <a href="/java-programming/keywords-identifiers">keyword</a> to create an interface in Java. For example,</p>

<pre>
<code>interface Language {
public void getType();

public void getVersion();
}</code></pre>

<p>Here,</p>

<ul>
  <li><var>Language</var> is an interface.</li>
  <li>It includes abstract methods: <code>getType()</code> and <code>getVersion()</code>.</li>
</ul>

<h2 id="implement">Implementing an Interface</h2>

<p>Like abstract classes, we cannot create objects of interfaces.</p>

<p>To use an interface, other classes must implement it. We use the <code>implements</code> keyword to implement an interface.</p>

<h3>Example 1: Java Interface</h3>

<pre class="java-exec">
<code>interface Polygon {
void getArea(int length, int breadth);
}

// implement the Polygon interface
class Rectangle implements Polygon {

// implementation of abstract method
public void getArea(int length, int breadth) {
  System.out.println("The area of the rectangle is " + (length * breadth));
}
}

class Main {
public static void main(String[] args) {
  Rectangle r1 = new Rectangle();
  r1.getArea(5, 6);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The area of the rectangle is 30</samp></pre>

<p>In the above example, we have created an interface named <var>Polygon</var>. The interface contains an abstract method <code>getArea()</code>.</p>

<p>Here, the <var>Rectangle</var> class implements <var>Polygon</var>. And, provides the implementation of the <code>getArea()</code> method.</p>

<h3 id="example">Example 2: Java Interface</h3>

<pre class="java-exec">
<code>// create an interface
interface Language {
void getName(String name);
}

// class implements interface
class ProgrammingLanguage implements Language {

// implementation of abstract method
public void getName(String name) {
  System.out.println("Programming Language: " + name);
}
}

class Main {
public static void main(String[] args) {
  ProgrammingLanguage language = new ProgrammingLanguage();
  language.getName("Java");
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Programming Language: Java</samp></pre>

<p>In the above example, we have created an interface named <var>Language</var>. The interface includes an abstract method <code>getName()</code>.</p>

<p>Here, the <var>ProgrammingLanguage</var> class implements the interface and provides the implementation for the method.</p>

<hr>
<h2>Implementing Multiple Interfaces</h2>

<p>In Java, a <a href="/java-programming/class-objects">class</a> can also implement multiple interfaces. For example,</p>

<pre>
<code>interface A {
// members of A
}

interface B {
// members of B
}

class C implements A, B {
// abstract members of A
// abstract members of B
}</code></pre>

<hr>
<h2 id="extend">Extending an Interface</h2>

<p>Similar to classes, interfaces can extend other interfaces. The <code>extends</code> keyword is used for extending interfaces. For example,</p>

<pre>
<code>interface Line {
// members of Line interface
}

// extending interface
interface Polygon extends Line {
// members of Polygon interface
// members of Line interface
}</code></pre>

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
  </div><div class="clearfix"></div><p>Here, the <var>Polygon</var> interface extends the <var>Line</var> interface. Now, if any class implements <var>Polygon</var>, it should provide implementations for all the abstract methods of both <var>Line</var> and <var>Polygon</var>.</p>

<hr>
<h3>Extending Multiple Interfaces</h3>

<p>An interface can extend multiple interfaces. For example,</p>

<pre>
<code>interface A {
 ...
}
interface B {
 ... 
}

interface C extends A, B {
 ...
}</code></pre>

<hr>
<h2 id="advantage">Advantages of Interface in Java</h2>

<p>Now that we know what interfaces are, let's learn about why interfaces are used in Java.</p>

<ul>
  <li>Similar to abstract classes, interfaces help us to achieve <strong>abstraction in Java</strong>.<br>
<br>
Here, we know <code>getArea()</code> calculates the area of polygons, but the way area is calculated is different for different polygons. Hence, the implementation of <code>getArea()</code> is independent of one another.</li>
  <li>Interfaces <strong>provide specifications</strong> that a class (which implements it) must follow.<br>
<br>
In our previous example, we used <code>getArea()</code> as a specification inside the interface <var>Polygon</var>. This is like setting a rule that we should be able to get the area of every polygon.<br>
<br>
Now any class that implements the <var>Polygon</var> interface must provide an implementation for the <code>getArea()</code> method.</li>
  <li>Interfaces are also used to achieve <a href="/java-programming/examples/implement-multiple-inheritance">multiple inheritance</a> in Java. For example,</li>
</ul>

<p></p><pre>
<code>interface Line {
…
}

interface Polygon {
…
}

class Rectangle implements Line, Polygon {
…
}</code></pre>

<br>
<br>
<br>
Here, the class <var>Rectangle</var> is implementing two different interfaces. This is how we achieve multiple inheritance in Java.

<div class="note-tip">
<p><strong>Note</strong>: All the methods inside an interface are implicitly <code>public</code> and all fields are implicitly <code>public static final</code>. For example,</p>

<pre>
<code>interface Language {

// by default public static final
String type = "programming language";

// by default public
void getName();
}</code></pre>

</div>
<hr>
<h2 id="default-methods">default methods in Java Interfaces</h2>

<p>With the release of Java 8, we can now add methods with implementation inside an interface. These methods are called default methods.</p>

<p>To declare default methods inside interfaces, we use the <code>default</code> keyword. For example,</p>

<pre>
<code>public default void getSides() {
 // body of getSides()
}</code></pre>

<h3>Why default methods?</h3>

<p>Let's take a scenario to understand why default methods are introduced in Java.</p>

<p>Suppose, we need to add a new method in an interface.</p>

<p>We can add the method in our interface easily without implementation. However, that's not the end of the story. All our classes that implement that interface must provide an implementation for the method.</p>

<p>If a large number of classes were implementing this interface, we need to track all these classes and make changes to them. This is not only tedious but error-prone as well.</p>

<p>To resolve this, Java introduced default methods. Default methods are inherited like ordinary methods.</p>

<p>Let's take an example to have a better understanding of default methods.</p>

<hr>
<h2>Example: Default Method in Java Interface</h2>

<pre class="java-exec">
<code>interface Polygon {
void getArea();

// default method 
default void getSides() {
  System.out.println("I can get sides of a polygon.");
}
}

// implements the interface
class Rectangle implements Polygon {
public void getArea() {
  int length = 6;
  int breadth = 5;
  int area = length * breadth;
  System.out.println("The area of the rectangle is " + area);
}

// overrides the getSides()
public void getSides() {
  System.out.println("I have 4 sides.");
}
}

// implements the interface
class Square implements Polygon {
public void getArea() {
  int length = 5;
  int area = length * length;
  System.out.println("The area of the square is " + area);
}
}

class Main {
public static void main(String[] args) {

  // create an object of Rectangle
  Rectangle r1 = new Rectangle();
  r1.getArea();
  r1.getSides();

  // create an object of Square
  Square s1 = new Square();
  s1.getArea();
  s1.getSides();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The area of the rectangle is 30
I have 4 sides.
The area of the square is 25
I can get sides of a polygon.</samp></pre>

<p>In the above example, we have created an interface named <var>Polygon</var>. It has a default method <code>getSides()</code> and an abstract method <code>getArea()</code>.</p>

<p>Here, we have created two classes, <var>Rectangle</var> and <var>Square</var>, that implement <var>Polygon</var>.</p>

<p>The <var>Rectangle</var> class provides the implementation of the <code>getArea()</code> method and overrides the <code>getSides()</code> method. However, the <var>Square</var> class only provides the implementation of the <code>getArea()</code> method.</p>

<p>Now, while calling the <code>getSides()</code> method using the <var>Rectangle</var> object, the overridden method is called. However, in the case of the <var>Square</var> object, the default method is called.</p>

<hr>
<h2 id="private-static-methods">private and static Methods in Interface</h2>

<p>The <strong>Java 8</strong> also added another feature to include <a href="/java-programming/static-keyword#methods">static methods</a> inside an interface.</p>

<p>Similar to a class, we can access static methods of an interface using its references. For example,</p>

<pre>
<code>// create an interface
interface Polygon {
staticMethod(){..}
}

// access static method
Polygon.staticMethod();</code></pre>

<div class="note-tip">
<p><strong>Note</strong>: With the release of Java <strong>9</strong>, private methods are also supported in interfaces.</p>

<p>We cannot create objects of an interface. Hence, private methods are used as helper methods that provide support to other methods in interfaces.</p>

</div>
<hr>
<h3 id="practical-example">Practical Example of Interface</h3>

<p>Let's see a more practical example of Java Interface.</p>

<pre class="java-exec">
<code>// To use the sqrt function
import java.lang.Math;

interface  Polygon {
 void getArea();

// calculate the perimeter of a Polygon
 default void getPerimeter(int... sides) {
    int perimeter = 0;
    for (int side: sides) {
       perimeter += side;
    }

 System.out.println("Perimeter: " + perimeter);
 }
}

class Triangle implements Polygon {
 private int a, b, c;
 private double s, area;

// initializing sides of a triangle
 Triangle(int a, int b, int c) {
    this.a = a;
    this.b = b;
    this.c = c;
    s = 0;
 }

// calculate the area of a triangle
 public void getArea() {
    s = (double) (a + b + c)/2;
    area = Math.sqrt(s*(s-a)*(s-b)*(s-c));
    System.out.println("Area: " + area);
 }
}

class Main {
 public static void main(String[] args) {
    Triangle t1 = new Triangle(2, 3, 4);

// calls the method of the Triangle class
    t1.getArea();

// calls the method of Polygon
    t1.getPerimeter(2, 3, 4);
 }
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Area: 2.9047375096555625
Perimeter: 9</samp></pre>

<p>In the above program, we have created an interface named <var>Polygon</var>. It includes a default method <code>getPerimeter()</code> and an abstract method <code>getArea()</code>.</p>

<p>We can calculate the perimeter of all polygons in the same manner so we implemented the body of <code>getPerimeter()</code> in <var>Polygon</var>.</p>

<p>Now, all polygons that implement <var>Polygon</var> can use <code>getPerimeter()</code> to calculate perimeter.</p>

<p>However, the rule for calculating the area is different for different polygons. Hence, <code>getArea()</code> is included without implementation.</p>

<p>Any class that implements <var>Polygon</var> must provide an implementation of <code>getArea()</code>.</p>

</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#introduction">Java Interface</a></li>
  <li><a href="#implement">Implementing Interface</a></li>
  <li><a href="#example">Interface Example</a></li>
  <li><a href="#extend">Extending Interface</a></li>
  <li><a href="#advantage">Advantages of Interface</a></li>
  <li><a href="#default-methods">default methods</a></li>
  <li><a href="#private-static-methods">private and static Methods in Interface</a></li>
  <li><a href="#practical-example">Practical Example of Interface</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="polymorphism">
                        
            <div class="editor-contents">
                <h1>Java Polymorphism</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1519" class="node node-java-tutorial clearfix" about="/java-programming/polymorphism" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Polymorphism" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">Polymorphism is an important concept of object-oriented programming. It simply means more than one form.</p>

<p>That is, the same entity (<a href="/java-programming/methods">method</a> or <a href="/java-programming/operators">operator</a> or <a href="/java-programming/class-objects#objects">object</a>) can perform different operations in different scenarios.</p>

<hr>
<h2 id="example">Example: Java Polymorphism</h2>

<pre class="java-exec">
<code>class Polygon {

// method to render a shape
public void render() {
System.out.println("Rendering Polygon...");
}
}

class Square extends Polygon {

// renders Square
public void render() {
System.out.println("Rendering Square...");
}
}

class Circle extends Polygon {

// renders circle
public void render() {
System.out.println("Rendering Circle...");
}
}

class Main {
public static void main(String[] args) {

// create an object of Square
Square s1 = new Square();
s1.render();

// create an object of Circle
Circle c1 = new Circle();
c1.render();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Rendering Square...
Rendering Circle...</samp></pre>

<p>In the above example, we have created a superclass: <var>Polygon</var> and two subclasses: <var>Square</var> and <var>Circle</var>. Notice the use of the <code>render()</code> method.</p>

<p>The main purpose of the <code>render()</code> method is to render the shape. However, the process of rendering a square is different than the process of rendering a circle.</p>

<p>Hence, the <code>render()</code> method behaves differently in different classes. Or, we can say <code>render()</code> is polymorphic.</p>

<hr>
<h3 id="why">Why Polymorphism?</h3>

<p>Polymorphism allows us to create consistent code. In the previous example, we can also create different methods: <code>renderSquare()</code> and <code>renderCircle()</code> to render <var>Square</var> and <var>Circle</var>, respectively.</p>

<p>This will work perfectly. However, for every shape, we need to create different methods. It will make our code inconsistent.</p>

<p>To solve this, polymorphism in Java allows us to create a single method <code>render()</code> that will behave differently for different shapes.</p>

<p class="note-tip"><strong>Note</strong>: The <code>print()</code> method is also an example of polymorphism. It is used to print values of different types like <code>char</code>, <code>int</code>, <code>string</code>, etc.</p>

<hr>
<p>We can achieve polymorphism in Java using the following ways:</p>

<ol>
<li><a href="/java-programming/method-overriding">Method Overriding</a></li>
<li><a href="/java-programming/method-overloading">Method Overloading</a></li>
<li>Operator Overloading</li>
</ol>

<hr>
<h2 id="overriding">1. Java Method Overriding</h2>

<p>During <a href="/java-programming/inheritance">inheritance in Java</a>, if the same method is present in both the superclass and the subclass. Then, the method in the subclass overrides the same method in the superclass. This is called method overriding.</p>

<p>In this case, the same method will perform one operation in the superclass and another operation in the subclass. For example,</p>

<h3>Example 1: Polymorphism using method overriding</h3>

<pre class="java-exec">
<code>class Language {
public void displayInfo() {
System.out.println("Common English Language");
}
}

class Java extends Language {
@Override
public void displayInfo() {
System.out.println("Java Programming Language");
}
}

class Main {
public static void main(String[] args) {

// create an object of Java class
Java j1 = new Java();
j1.displayInfo();

// create an object of Language class
Language l1 = new Language();
l1.displayInfo();
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Java Programming Language
Common English Language</samp></pre>

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
</div><div class="clearfix"></div><p>In the above example, we have created a superclass named <var>Language</var> and a subclass named <var>Java</var>. Here, the method <code>displayInfo()</code> is present in both <var>Language</var> and <var>Java</var>.</p>

<p>The use of <code>displayInfo()</code> is to print the information. However, it is printing different information in <var>Language</var> and <var>Java</var>.</p>

<p>Based on the object used to call the method, the corresponding information is printed.</p>

<figure><img src="/sites/tutorial2program/files/java-polymorphism-implementation.png" title="Java Polymorphism Implementation" alt="displayInfo() method prints Common English Language when called using l1 object and when using j1 object, it prints Java Programming Language" width="520" height="257">
<figcaption>Working of Java Polymorphism</figcaption></figure>
<p class="note-tip"><strong>Note</strong>: The method that is called is determined during the execution of the program. Hence, method overriding is a <strong>run-time polymorphism</strong>.</p>

<hr>
<h2 id="method-overloading">2. Java Method Overloading</h2>

<p>In a Java class, we can create methods with the same name if they differ in parameters. For example,</p>

<pre>
<code>void func() { ... }
void func(int a) { ... }
float func(double a) { ... }
float func(int a, float b) { ... }</code></pre>

<p>This is known as method overloading in Java. Here, the same method will perform different operations based on the parameter.</p>

<h3>Example 3: Polymorphism using method overloading</h3>

<pre class="java-exec">
<code>class Pattern {

// method without parameter
public void display() {
for (int i = 0; i &lt; 10; i++) {
System.out.print("*");
}
}

// method with single parameter
public void display(char symbol) {
for (int i = 0; i &lt; 10; i++) {
System.out.print(symbol);
}
}
}

class Main {
public static void main(String[] args) {
Pattern d1 = new Pattern();

// call method without any argument
d1.display();
System.out.println("\n");

// call method with a single argument
d1.display('#');
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>**********

##########</samp></pre>

<p>In the above example, we have created a class named <var>Pattern</var>. The class contains a method named <code>display()</code> that is overloaded.</p>

<pre>
<code>// method with no arguments
display() {...}

// method with a single char type argument
display(char symbol) {...}</code></pre>

<p>Here, the main function of <code>display()</code> is to print the pattern. However, based on the arguments passed, the method is performing different operations:</p>

<ul>
<li>prints a pattern of <code>*</code>, if no argument is passed or</li>
<li>prints pattern of the parameter, if a single <code>char</code> type argument is passed.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: The method that is called is determined by the compiler. Hence, it is also known as compile-time polymorphism.</p>

<hr>
<h2 id="operator-overloading">3. Java Operator Overloading</h2>

<p>Some operators in Java behave differently with different operands. For example,</p>

<ul>
<li><code>+</code> operator is overloaded to perform numeric addition as well as <a href="/java-programming/string">string</a> concatenation, and</li>
<li>operators like <code>&amp;</code>, <code>|</code>, and <code>!</code> are overloaded for logical and bitwise operations.</li>
</ul>

<p>Let's see how we can achieve polymorphism using operator overloading.</p>

<p>The <code>+</code> operator is used to add two entities. However, in Java, the <code>+</code> operator performs two operations.</p>

<p>1. When <code>+</code> is used with numbers (integers and floating-point numbers), it performs mathematical addition. For example,</p>

<pre>
<code>int a = 5;
int b = 6;

// + with numbers
int sum = a + b;  // Output = 11</code></pre>

<p>2. When we use the <code>+</code> operator with strings, it will perform string concatenation (join two strings). For example,</p>

<pre>
<code>String first = "Java ";
String second = "Programming";

// + with strings
name = first + second;  // Output = Java Programming</code></pre>

<p>Here, we can see that the <code>+</code> operator is overloaded in Java to perform two operations: <strong>addition</strong> and <strong>concatenation</strong>.</p>

<p class="note-tip"><strong>Note</strong>: In languages like C++, we can define operators to work differently for different operands. However, Java doesn't support user-defined operator overloading.</p>

<hr>
<h2 id="polymorphic-variable">Polymorphic Variables</h2>

<p>A <a href="/java-programming/variables-literals">variable</a> is called polymorphic if it refers to different values under different conditions.</p>

<p>Object variables (instance variables) represent the behavior of polymorphic variables in Java. It is because object variables of a class can refer to objects of its class as well as objects of its subclasses.</p>

<h3>Example: Polymorphic Variables</h3>

<pre class="java-exec">
<code>class ProgrammingLanguage {
public void display() {
System.out.println("I am Programming Language.");
}
}

class Java extends ProgrammingLanguage {
@Override
public void display() {
System.out.println("I am Object-Oriented Programming Language.");
}
}

class Main {
public static void main(String[] args) {

// declare an object variable
ProgrammingLanguage pl;

// create object of ProgrammingLanguage
pl = new ProgrammingLanguage();
pl.display();

// create object of Java class
pl = new Java();
pl.display();
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>I am Programming Language.
I am Object-Oriented Programming Language.</samp></pre>

<p>In the above example, we have created an object variable <var>pl</var> of the <var>ProgrammingLanguage</var> class. Here, <var>pl</var> is a polymorphic variable. This is because,</p>

<ul>
<li>In statement <code>pl = new ProgrammingLanguage()</code>, <var>pl</var> refer to the object of the <var>ProgrammingLanguage</var> class.</li>
<li>And, in statement <code>pl = new Java()</code>, <var>pl</var> refer to the object of the <var>Java</var> class.</li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#example">Example: Java Polymorphism</a></li>
<li><a href="#why">Why Polymorphism?</a></li>
<li><a href="#overriding">Java Method Overriding</a></li>
<li><a href="#method-overloading">Java Method Overloading</a></li>
<li><a href="#operator-overloading">Java Operator Overloading</a></li>
<li><a href="#polymorphic-variable">Polymorphic Variables</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="encapsulation">
                        
            <div class="editor-contents">
                <h1>Java Encapsulation</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1528" class="node node-java-tutorial clearfix" about="/java-programming/encapsulation" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Encapsulation" class="rdf-meta element-hidden"></span>

<div class="content">
<h2 id="introduction">Java Encapsulation</h2>

<p>Encapsulation is one of the key features of object-oriented programming. Encapsulation refers to the bundling of fields and <a href="/java-programming/methods">methods</a> inside a single class.</p>

<p>It prevents outer classes from accessing and changing fields and methods of a class. This also helps to achieve <strong>data hiding</strong>.</p>

<hr>
<h3 id="example">Example 1: Java Encapsulation</h3>

<pre class="java-exec">
<code>class Area {

// fields to calculate area
int length;
int breadth;

// constructor to initialize values
Area(int length, int breadth) {
this.length = length;
this.breadth = breadth;
}

// method to calculate area
public void getArea() {
int area = length * breadth;
System.out.println("Area: " + area);
}
}

class Main {
public static void main(String[] args) {

// create object of Area
// pass value of length and breadth
Area rectangle = new Area(5, 6);
rectangle.getArea();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Area: 30</samp></pre>

<p>In the above example, we have created a class named <var>Area</var>. The main purpose of this class is to calculate the area.</p>

<p>To calculate an area, we need two <a href="/java-programming/variables-literals">variables</a>: <var>length</var> and <var>breadth</var> and a method: <code>getArea()</code>. Hence, we bundled these fields and methods inside a single class.</p>

<p>Here, the fields and methods can be accessed from other classes as well. Hence, this is not <strong>data hiding</strong>.</p>

<p>This is only <strong>encapsulation</strong>. We are just keeping similar codes together.</p>

<div class="note-tip">
<p><strong>Note</strong>: People often consider encapsulation as data hiding, but that's not entirely true.</p>

<p>Encapsulation refers to the bundling of related fields and methods together. This can be used to achieve data hiding. Encapsulation in itself is not data hiding.</p>

</div>
<hr>
<h2 id="why">Why Encapsulation?</h2>

<ul>
<li>In Java, encapsulation helps us to keep related fields and methods together, which makes our code cleaner and easy to read.</li>
<li>It helps to control the values of our data fields. For example,
<pre>
<code>class Person {
private int age;

public void setAge(int age) {
if (age &gt;= 0) {
this.age = age;
}
}
}</code></pre>

<br>
<br>
Here, we are making the <var>age</var> variable <code>private</code> and applying logic inside the <code>setAge()</code> method. Now, <var>age</var> cannot be negative.</li>
<li>The getter and setter methods provide <strong>read-only</strong> or <strong>write-only</strong> access to our class fields. For example,
<pre>
<code>getName()  // provides read-only access
setName() // provides write-only access</code></pre>

</li>
<li>It helps to decouple components of a system. For example, we can encapsulate code into multiple bundles.<br>
<br>
These decoupled components (bundle) can be developed, tested, and debugged independently and concurrently. And, any changes in a particular component do not have any effect on other components.</li>
<li>We can also achieve data hiding using encapsulation. In the above example, if we change the length and breadth variable into private, then the access to these fields is restricted.<br>
<br>
And, they are kept hidden from outer classes. This is called <strong>data hiding</strong>.</li>
</ul>

<hr>
<h2 id="data-hiding">Data Hiding</h2>

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
</div><div class="clearfix"></div><p>Data hiding is a way of restricting the access of our data members by hiding the implementation details. Encapsulation also provides a way for data hiding.</p>

<p>We can use <a href="/java-programming/access-modifiers">access modifiers</a> to achieve data hiding. For example,</p>

<h3>Example 2: Data hiding using the private specifier</h3>

<pre class="java-exec">
<code>class Person {

// private field
private int age;

// getter method
public int getAge() {
return age;
}

// setter method
public void setAge(int age) {
this.age = age;
}
}

class Main {
public static void main(String[] args) {

// create an object of Person
Person p1 = new Person();

// change age using setter
p1.setAge(24);

// access age using getter
System.out.println("My age is " + p1.getAge());
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>My age is 24</samp></pre>

<p>In the above example, we have a <code>private</code> field <var>age</var>. Since it is <code>private</code>, it cannot be accessed from outside the class.</p>

<p>In order to access <var>age</var>, we have used <code>public</code> methods: <code>getAge()</code> and <code>setAge()</code>. These methods are called getter and setter methods.</p>

<p>Making <var>age</var> private allowed us to restrict unauthorized access from outside the class. This is <strong>data hiding</strong>.</p>

<p>If we try to access the <var>age</var> field from the <var>Main</var> class, we will get an error.</p>

<pre>
<code>// error: age has private access in Person
p1.age = 24;</code></pre>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#example">Example: Java Encapsulation</a></li>
<li><a href="#why">Why Encapsulation?</a></li>
<li><a href="#data-hiding">Data Hiding</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                </section>
                <section id="exception">
                    <div id="handle">
                        <div class="editor-contents">
                            <h1>Java Exceptions</h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-1518" class="node node-java-tutorial clearfix" about="/java-programming/exceptions" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java Exceptions" class="rdf-meta element-hidden"></span>

<div class="content">
    <p id="introduction">An exception is an unexpected event that occurs during program execution. It affects the flow of the program instructions which can cause the program to terminate abnormally.</p>

<p>An exception can occur for many reasons. Some of them are:</p>

<ul>
  <li>Invalid user input</li>
  <li>Device failure</li>
  <li>Loss of network connection</li>
  <li>Physical limitations (out of disk memory)</li>
  <li>Code errors</li>
  <li>Opening an unavailable file</li>
</ul>

<hr>
<h2 id="hierarchy">Java Exception hierarchy</h2>

<p>Here is a simplified diagram of the exception hierarchy in Java.</p>

<figure><img src="/sites/tutorial2program/files/ExceptionHierarchy.png" title="Exception Hierarchy in Java" alt="Exception Hierarchy in Java" width="450" height="275">
</figure>
<p>As you can see from the image above, the <code>Throwable</code> class is the root class in the hierarchy.</p>

<p>Note that the hierarchy splits into two branches: Error and Exception.</p>

<hr>
<h3 id="errors">Errors</h3>

<p><strong>Errors</strong> represent irrecoverable conditions such as Java virtual machine (JVM) running out of memory, memory leaks, stack overflow errors, library incompatibility, infinite recursion, etc.</p>

<p>Errors are usually beyond the control of the programmer and we should not try to handle errors.</p>

<hr>
<h3 id="exceptions">Exceptions</h3>

<p><strong>Exceptions</strong> can be caught and handled by the program.</p>

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
  </div><div class="clearfix"></div><p>When an exception occurs within a <a href="/java-programming/methods">method</a>, it creates an object. This object is called the exception object.</p>

<p>It contains information about the exception such as the name and description of the exception and state of the program when the exception occurred.</p>

<p>We will learn how to handle these exceptions in the next tutorial. In this tutorial, we will now focus on different types of exceptions in Java.</p>

<hr>
<h2 id="types">Java Exception Types</h2>

<p>The exception hierarchy also has two branches: <code>RuntimeException</code> and <code>IOException</code>.</p>

<hr>
<h3>1. RuntimeException</h3>

<p>A <strong>runtime exception</strong> happens due to a programming error. They are also known as <strong>unchecked exceptions</strong>.</p>

<p>These exceptions are not checked at compile-time but run-time. Some of the common runtime exceptions are:</p>

<ul>
  <li>Improper use of an API - <code>IllegalArgumentException</code> </li>
  <li>Null pointer access (missing the initialization of a <a href="/java-programming/variables-literals">variable</a>) - <code>NullPointerException</code> </li>
  <li>Out-of-bounds <a href="/java-programming/arrays">array</a> access - <code>ArrayIndexOutOfBoundsException</code> </li>
  <li>Dividing a number by 0 - <code>ArithmeticException</code> </li>
</ul>

<p>You can think about it in this way. "If it is a runtime exception, it is your fault".</p>

<p>The <code>NullPointerException</code> would not have occurred if you had checked whether the variable was initialized or not before using it.</p>

<p>An <code>ArrayIndexOutOfBoundsException</code> would not have occurred if you tested the array index against the array bounds.</p>

<hr>
<h3>2. IOException</h3>

<p>An <code>IOException</code> is also known as a <strong>checked exception</strong>. They are checked by the compiler at the compile-time and the programmer is prompted to handle these exceptions.</p>

<p>Some of the examples of checked exceptions are:</p>

<ul>
  <li>Trying to open a file that doesn't exist results in <code>FileNotFoundException</code> </li>
  <li>Trying to read past the end of a file</li>
</ul>

<p>Now we know about exceptions, we will learn about <a href="/java-programming/exception-handling">handling exceptions</a> in the next tutorial.</p>

</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#introduction">Java Exceptions (Introduction)</a></li>
  <li><a href="#hierarchy">Java exception hierarchy </a></li>
  <li><a href="#errors">Errors </a></li>
  <li><a href="#exceptions">Exceptions </a></li>
  <li><a href="#types">Java Exception Types </a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="handling">
                        
            <div class="editor-contents">
                <h1>Java Exception Handling</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1524" class="node node-java-tutorial clearfix" about="/java-programming/exception-handling" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Exception Handling" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">In the last tutorial, we learned about <a href="/java-programming/exceptions">Java exceptions</a>. We know that exceptions abnormally terminate the execution of a program.</p>

<p>This is why it is important to handle exceptions. Here's a list of different approaches to handle exceptions in Java.</p>

<ul>
<li>try...catch block</li>
<li>finally block</li>
<li>throw and throws keyword</li>
</ul>

<hr>
<h2 id="try-catch">1. Java try...catch block</h2>

<p>The <a href="/java-programming/try-catch">try-catch</a> block is used to handle exceptions in Java. Here's the syntax of <code>try...catch</code> block:</p>

<pre>
<code>try {
// code
}
catch(Exception e) {
// code
}</code></pre>

<p>Here, we have placed the code that might generate an exception inside the <code>try</code> block. Every <code>try</code> block is followed by a <code>catch</code> block.</p>

<p>When an exception occurs, it is caught by the <code>catch</code> block. The <code>catch</code> block cannot be used without the <code>try</code> block.</p>

<h3>Example: Exception handling using try...catch</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

try {

// code that generate exception
int divideByZero = 5 / 0;
System.out.println("Rest of code in try block");
}

catch (ArithmeticException e) {
System.out.println("ArithmeticException =&gt; " + e.getMessage());
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArithmeticException =&gt; / by zero</samp></pre>

<p>In the example, we are trying to divide a number by <code>0</code>. Here, this code generates an exception.</p>

<p>To handle the exception, we have put the code, <code>5 / 0</code> inside the <code>try</code> block. Now when an exception occurs, the rest of the code inside the <code>try</code> block is skipped.</p>

<p>The <code>catch</code> block catches the exception and statements inside the catch block is executed.</p>

<p>If none of the statements in the <code>try</code> block generates an exception, the <code>catch</code> block is skipped.</p>

<hr>
<h2 id="finally">2. Java finally block</h2>

<p>In Java, the <code>finally</code> block is always executed no matter whether there is an exception or not.</p>

<p>The <code>finally</code> block is optional. And, for each <code>try</code> block, there can be only one <code>finally</code> block.</p>

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
</div><div class="clearfix"></div><p>The basic syntax of <code>finally</code> block is:</p>

<pre>
<code>try {
//code
}
catch (ExceptionType1 e1) { 
// catch block
}
finally {
// finally block always executes
}</code></pre>

<p>If an exception occurs, the <code>finally</code> block is executed after the <code>try...catch</code> block. Otherwise, it is executed after the try block. For each <code>try</code> block, there can be only one <code>finally</code> block.</p>

<hr>
<h3>Example: Java Exception Handling using finally block</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
try {
// code that generates exception
int divideByZero = 5 / 0;
}

catch (ArithmeticException e) {
System.out.println("ArithmeticException =&gt; " + e.getMessage());
}

finally {
System.out.println("This is the finally block");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArithmeticException =&gt; / by zero
This is the finally block</samp></pre>

<p>In the above example, we are dividing a number by <strong>0</strong> inside the <code>try</code> block. Here, this code generates an <code>ArithmeticException</code>.</p>

<p>The exception is caught by the <code>catch</code> block. And, then the <code>finally</code> block is executed.</p>

<div class="note-tip">
<p><strong>Note</strong>: It is a good practice to use the <code>finally</code> block. It is because it can include important cleanup codes like,</p>

<ul>
<li>code that might be accidentally skipped by return, <a href="/java-programming/continue-statement">continue</a> or <a href="/java-programming/break-statement">break</a></li>
<li>closing a file or connection</li>
</ul>

</div>
<hr>
<h2 id="throw-throws">3. Java throw and throws keyword</h2>

<p>The Java <code>throw</code> keyword is used to explicitly throw a single exception.</p>

<p>When we <code>throw</code> an exception, the flow of the program moves from the <code>try</code> block to the <code>catch</code> block.</p>

<h3>Example: Exception handling using Java throw</h3>

<pre class="java-exec">
<code>class Main {
public static void divideByZero() {

// throw an exception
throw new ArithmeticException("Trying to divide by 0");
}

public static void main(String[] args) {
divideByZero();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Exception in thread "main" java.lang.ArithmeticException: Trying to divide by 0
at Main.divideByZero(Main.java:5)
at Main.main(Main.java:9)</samp></pre>

<p>In the above example, we are explicitly throwing the <code>ArithmeticException</code> using the <code>throw</code> keyword.</p>

<p>Similarly, the <code>throws</code> keyword is used to declare the type of exceptions that might occur within the method. It is used in the method declaration.</p>

<h3>Example: Java throws keyword</h3>

<pre class="java-exec">
<code>import java.io.*;

class Main {
// declareing the type of exception
public static void findFile() throws IOException {

// code that may generate IOException
File newFile = new File("test.txt");
FileInputStream stream = new FileInputStream(newFile);
}

public static void main(String[] args) {
try {
findFile();
}
catch (IOException e) {
System.out.println(e);
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>java.io.FileNotFoundException: test.txt (The system cannot find the file specified)</samp></pre>

<p>When we run this program, if the file <strong>test.txt</strong> does not exist, <code>FileInputStream</code> throws a <code>FileNotFoundException</code> which extends the <code>IOException</code> class.</p>

<p>The <code>findFile()</code> method specifies that an <code>IOException</code> can be thrown. The <code>main()</code> method calls this method and handles the exception if it is thrown.</p>

<p>If a method does not handle exceptions, the type of exceptions that may occur within it must be specified in the <code>throws</code> clause.</p>

<p>To learn more, visit <a href="/java-programming/throw-throws">Java throw and throws</a>.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#try-catch">Java try...catch block</a></li>
<li><a href="#finally">Java finally block</a></li>
<li><a href="#throw-throws">Java throw and throws keyword</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="try-catch">
                        
              <div class="editor-contents">
                            <!--  <p class="editor-contents__short-description"></p> -->
    
    <div id="node-2249" class="node node-java-tutorial clearfix" about="/java-programming/try-catch" typeof="sioc:Item foaf:Document">

  
        <span property="dc:title" content="Java try...catch" class="rdf-meta element-hidden"></span>
    
    <div class="content">
        <p id="introduction">The <code>try...catch</code> block in Java is used to handle exceptions and prevents the abnormal termination of the program.</p>
  
  <p>Here's the syntax of a <code>try...catch</code> block in Java.</p>
  
  <pre>
  <code>try{
    // code
  }
  catch(exception) {
    // code
  }</code></pre>
  
  <p>The <code>try</code> block includes the code that might generate an <a href="/java-programming/exceptions">exception</a>.</p>
  
  <p>The <code>catch</code> block includes the code that is executed when there occurs an exception inside the <code>try</code> block.</p>
  
  <h3 id="example">Example: Java try...catch block</h3>
  
  <pre class="java-exec">
  <code>class Main {
    public static void main(String[] args) {
  
      try {
        int divideByZero = 5 / 0;
        System.out.println("Rest of code in try block");
      }
  
      catch (ArithmeticException e) {
        System.out.println("ArithmeticException =&gt; " + e.getMessage());
      }
    }
  }</code></pre>
  
  <p><strong>Output</strong></p>
  
  <pre>
  <samp>ArithmeticException =&gt; / by zero</samp></pre>
  
  <p>In the above example, notice the line,</p>
  
  <pre>
  <code>int divideByZero = 5 / 0;</code></pre>
  
  <p>Here, we are trying to divide a number by <strong>zero</strong>. In this case, an exception occurs. Hence, we have enclosed this code inside the <code>try</code> block.</p>
  
  <p>When the program encounters this code, <code>ArithmeticException</code> occurs. And, the exception is caught by the <code>catch</code> block and executes the code inside the <code>catch</code> block.</p>
  
  <p>The <code>catch</code> block is only executed if there exists an exception inside the <code>try</code> block.</p>
  
  <p class="note-tip"><strong>Note</strong>: In Java, we can use a <code>try</code> block without a <code>catch</code> block. However, we cannot use a <code>catch</code> block without a <code>try</code> block.</p>
  
  <hr>
  <h2 id="try-finally">Java try...finally block</h2>
  
  <p>We can also use the <code>try</code> block along with a finally block.</p>
  
  <p>In this case, the finally block is always executed whether there is an exception inside the try block or not.</p>
  
  <h3>Example: Java try...finally block</h3>
  
  <pre class="java-exec">
  <code>class Main {
    public static void main(String[] args) {
      try {
        int divideByZero = 5 / 0;
      }
  
      finally {
        System.out.println("Finally block is always executed");
      }
    }
  }</code></pre>
  
  <p><strong>Output</strong></p>
  
  <pre>
  <samp>Finally block is always executed
  Exception in thread "main" java.lang.ArithmeticException: / by zero
          at Main.main(Main.java:4)</samp></pre>
  
  <p>In the above example, we have used the <code>try</code> block along with the <code>finally</code> block. We can see that the code inside the <code>try</code> block is causing an exception.</p>
  
  <p>However, the code inside the <code>finally</code> block is executed irrespective of the exception.</p>
  
  <hr>
  <h2 id="try-catch-finally">Java try...catch...finally block</h2>
  
  <p>In Java, we can also use the finally block after the <code>try...catch</code> block. For example,</p>
  
  <pre class="java-exec">
  <code>import java.io.*;
  
  class ListOfNumbers {
  
    // create an integer array
    private int[] list = {5, 6, 8, 9, 2};
  
    // method to write data from array to a fila
    public void writeList() {
      PrintWriter out = null;
  
      try {
        System.out.println("Entering try statement");
  
        // creating a new file OutputFile.txt
        out = new PrintWriter(new FileWriter("OutputFile.txt"));
  
        // writing values from list array to Output.txt
        for (int i = 0; i &lt; 7; i++) {
          out.println("Value at: " + i + " = " + list[i]);
        }
      }
      
      catch (Exception e) {
        System.out.println("Exception =&gt; " + e.getMessage());
      }
      
      finally {
        // checking if PrintWriter has been opened
        if (out != null) {
          System.out.println("Closing PrintWriter");
          // close PrintWriter
          out.close();
        }
        
        else {
          System.out.println("PrintWriter not open");
        }
      }
  
    }
  }
  
  class Main {
    public static void main(String[] args) {
      ListOfNumbers list = new ListOfNumbers();
      list.writeList();
    }
  }</code></pre>
  
  <p><strong>Output</strong></p>
  
  <pre>
  <samp>Entering try statement
  Exception =&gt; Index 5 out of bounds for length 5
  Closing PrintWriter</samp></pre>
  
  <p>In the above example, we have created an <a href="/java-programming/arrays">array</a> named <var>list</var> and a file named <var>output.txt</var>. Here, we are trying to read data from the array and storing to the file.</p>
  
  <p>Notice the code,</p>
  
  <pre>
  <code>for (int i = 0; i &lt; 7; i++) {
    out.println("Value at: " + i + " = " + list[i]);
  }</code></pre>
  
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
      </div><div class="clearfix"></div><p>Here, the size of the array is <code>5</code> and the last element of the array is at <code>list[4]</code>. However, we are trying to access elements at <code><em>a[5]</em></code> and <code>a[6]</code>.</p>
  
  <p>Hence, the code generates an exception that is caught by the catch block.</p>
  
  <p>Since the <code>finally</code> block is always executed, we have included code to close the <code>PrintWriter</code> inside the finally block.</p>
  
  <p>It is a good practice to use finally block to include important cleanup code like closing a file or connection.</p>
  
  <div class="note-tip">
  <p><strong>Note</strong>: There are some cases when a <code>finally</code> block does not execute:</p>
  
  <ul>
      <li>Use of <code>System.exit()</code> method</li>
      <li>An exception occurs in the <code>finally</code> block</li>
      <li>The death of a thread</li>
  </ul>
  
  </div>
  <hr>
  <h2 id="multiple-catch">Multiple Catch blocks</h2>
  
  <p>For each <code>try</code> block, there can be zero or more <code>catch</code> blocks. Multiple <code>catch</code> blocks allow us to handle each exception differently.</p>
  
  <p>The argument type of each <code>catch</code> block indicates the type of exception that can be handled by it. For example,</p>
  
  <pre class="java-exec">
  <code>class ListOfNumbers {
    public int[] arr = new int[10];
  
    public void writeList() {
  
      try {
        arr[10] = 11;
      }
      
      catch (NumberFormatException e1) {
        System.out.println("NumberFormatException =&gt; " + e1.getMessage());
      }
      
      catch (IndexOutOfBoundsException e2) {
        System.out.println("IndexOutOfBoundsException =&gt; " + e2.getMessage());
      }
  
    }
  }
  
  class Main {
    public static void main(String[] args) {
      ListOfNumbers list = new ListOfNumbers();
      list.writeList();
    }
  }</code></pre>
  
  <p><strong>Output</strong></p>
  
  <pre>
  <samp>IndexOutOfBoundsException =&gt; Index 10 out of bounds for length 10</samp></pre>
  
  <p>In this example, we have created an integer array named <code>arr</code> of size <strong>10</strong>.</p>
  
  <p>Since the array index starts from <strong>0</strong>, the last element of the array is at <code>arr[9]</code>. Notice the statement,</p>
  
  <pre>
  <code>arr[10] = 11;</code></pre>
  
  <p>Here, we are trying to assign a value to the index <strong>10</strong>. Hence, <code>IndexOutOfBoundException</code> occurs.</p>
  
  <p>When an exception occurs in the <code>try</code> block,</p>
  
  <ul>
      <li>The exception is thrown to the first <code>catch</code> block. The first <code>catch</code> block does not handle an <code>IndexOutOfBoundsException</code>, so it is passed to the next <code>catch</code> block.</li>
      <li>The second <code>catch</code> block in the above example is the appropriate exception handler because it handles an <code>IndexOutOfBoundsException</code>. Hence, it is executed.</li>
  </ul>
  
  <hr>
  <h3 id="multiple-exceptions">Catching Multiple Exceptions</h3>
  
  <p>From Java SE 7 and later, we can now catch more than one type of exception with one <code>catch</code> block.</p>
  
  <p>This reduces code duplication and increases code simplicity and efficiency.</p>
  
  <p>Each exception type that can be handled by the <code>catch</code> block is separated using a vertical bar <code>|</code>.</p>
  
  <p>Its syntax is:</p>
  
  <pre>
  <code>try {
    // code
  } catch (ExceptionType1 | Exceptiontype2 ex) { 
    // catch block
  }</code></pre>
  
  <p>To learn more, visit <a href="/java-programming/multiple-exceptions">Java catching multiple exceptions</a>.</p>
  
  <hr>
  <h3 id="try-resource">Java try-with-resources statement</h3>
  
  <p>The <strong>try-with-resources</strong> statement is a try statement that has one or more resource declarations.</p>
  
  <p>Its syntax is:</p>
  
  <pre>
  <code>try (resource declaration) {
    // use of the resource
  } catch (ExceptionType e1) {
    // catch block
  }</code></pre>
  
  <p>The resource is an object to be closed at the end of the program. It must be declared and initialized in the try statement.</p>
  
  <p>Let's take an example.</p>
  
  <pre>
  <code>try (PrintWriter out = new PrintWriter(new FileWriter("OutputFile.txt")) {
    // use of the resource
  }</code></pre>
  
  <p>The <strong>try-with-resources</strong> statement is also referred to as <strong>automatic resource management</strong>. This statement automatically closes all the resources at the end of the statement.</p>
  
  <p>To learn more, visit the <a href="/java-programming/try-with-resources">java try-with-resources statement</a>.</p>
  
    </div>
  
    
    
  </div>
  
                    
                                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
        <button class="btn btn--clear align-items-center">
        <svg class="programiz-icon">
          <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
        </svg>
        </button></h3><div class="tutorial-toc__links"><ul>
      <li><a href="#introduction">Java try...catch</a></li>
      <li><a href="#example">Example: try...catch block</a></li>
      <li><a href="#try-finally">Java try...finally</a></li>
      <li><a href="#try-catch-finally">Java try...catch...finally</a></li>
      <li><a href="#multiple-catch">Multiple Catch blocks</a></li>
      <li><a href="#multiple-exceptions">Catching Multiple Exceptions</a></li>
      <li><a href="#try-resource">Java try-with-resources statement</a></li>
  </ul>
  </div></div></div>                          </div>
                    </div>
                    <div id="throw">
                        
            <div class="editor-contents">
                <h1>Java throw and throws</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1533" class="node node-java-tutorial clearfix" about="/java-programming/throw-throws" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java throw and throws" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">In Java, exceptions can be categorized into two types:</p>

<ul>
<li><strong>Unchecked Exceptions:</strong> They are not checked at compile-time but at run-time.For example: <code>ArithmeticException</code>, <code>NullPointerException</code>, <code>ArrayIndexOutOfBoundsException</code>, exceptions under <code>Error</code> class, etc.</li>
<li><strong>Checked Exceptions:</strong> They are checked at compile-time. For example, <code>IOException</code>, <code>InterruptedException</code>, etc.</li>
</ul>

<p>Refer to <a href="/java-programming/exceptions">Java Exceptions</a> to learn in detail about checked and unchecked exceptions.</p>

<p>Usually, we don't need to handle unchecked exceptions. It's because unchecked exceptions occur due to programming errors. And, it is a good practice to correct them instead of handling them.</p>

<p>This tutorial will now focus on how to handle checked exceptions using <code>throw</code> and <code>throws</code>.</p>

<hr>
<h2 id="throws">Java throws keyword</h2>

<p>We use the <code>throws</code> keyword in the method declaration to declare the type of exceptions that might occur within it.</p>

<p>Its syntax is:</p>

<pre>
<code>accessModifier returnType methodName() throws ExceptionType1, ExceptionType2 … {
// code
}</code></pre>

<p>As you can see from the above syntax, we can use <code>throws</code> to declare multiple exceptions.</p>

<hr>
<h3>Example 1: Java throws Keyword</h3>

<pre class="java-exec">
<code>import java.io.*;
class Main {
public static void findFile() throws IOException {
// code that may produce IOException
File newFile=new File("test.txt");
FileInputStream stream=new FileInputStream(newFile);
}

public static void main(String[] args) {
try{
findFile();
} catch(IOException e){
System.out.println(e);
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>java.io.FileNotFoundException: test.txt (No such file or directory)</samp></pre>

<p>When we run this program, if the file <code>test.txt</code> does not exist, <code>FileInputStream</code> throws a <code>FileNotFoundException</code> which extends the <code>IOException</code> class.</p>

<p>If a method does not handle exceptions, the type of exceptions that may occur within it must be specified in the <code>throws</code> clause so that methods further up in the call stack can handle them or specify them using <code>throws</code> keyword themselves.</p>

<p>The <code>findFile()</code> method specifies that an <code>IOException</code> can be thrown. The <code>main()</code> method calls this method and handles the exception if it is thrown.</p>

<hr>
<h3 id="multiple-exceptions">Throwing multiple exceptions</h3>

<p>Here's how we can throw multiple exceptions using the <code>throws</code> keyword.</p>

<pre>
<code>import java.io.*;
class Main {
public static void findFile() throws NullPointerException, IOException, InvalidClassException {

// code that may produce NullPointerException
… … … 

// code that may produce IOException
… … … 

// code that may produce InvalidClassException 
… … … 
}

public static void main(String[] args) {
try{
findFile();
} catch(IOException e1){
System.out.println(e1.getMessage());
} catch(InvalidClassException e2){
System.out.println(e2.getMessage());
}
}
}</code></pre>

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
</div><div class="clearfix"></div><p>Here, the <code>findFile()</code> method specifies that it can throw <code>NullPointerException</code>, <code>IOException</code>, and <code>InvalidClassException</code> in its <code>throws</code> clause.</p>

<p>Note that we have not handled the <code>NullPointerException</code>. This is because it is an unchecked exception. It is not necessary to specify it in the <code>throws</code> clause and handle it.</p>

<hr>
<h3 id="versus-try-catch">throws keyword Vs. try...catch...finally</h3>

<p>There might be several methods that can cause exceptions. Writing <code>try...catch</code> for each method will be tedious and code becomes long and less-readable.</p>

<p><code>throws</code> is also useful when you have checked exception (an exception that must be handled) that you don't want to catch in your current method.</p>

<hr>
<h2 id="throw">Java throw keyword</h2>

<p>The <code>throw</code> keyword is used to explicitly throw a single exception.</p>

<p>When an exception is thrown, the flow of program execution transfers from the <code>try</code> block to the <code>catch</code> block. We use the <code>throw</code> keyword within a method.</p>

<p>Its syntax is:</p>

<pre>
<code>throw throwableObject;</code></pre>

<p>A throwable object is an instance of class <code>Throwable</code> or subclass of the <code>Throwable</code> class.</p>

<hr>
<h3>Example 2: Java throw keyword</h3>

<pre class="java-exec">
<code>class Main {
public static void divideByZero() {
throw new ArithmeticException("Trying to divide by 0");
}

public static void main(String[] args) {
divideByZero();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Exception in thread "main" java.lang.ArithmeticException: Trying to divide by 0
at Main.divideByZero(Main.java:3)
at Main.main(Main.java:7)
exit status 1</samp></pre>

<p>In this example, we are explicitly throwing an <code>ArithmeticException.</code> </p>

<p><strong>Note:</strong> <code>ArithmeticException</code> is an unchecked exception. It's usually not necessary to handle unchecked exceptions.</p>

<hr>
<h3>Example 3: Throwing checked exception</h3>

<pre class="java-exec">
<code>import java.io.*;
class Main {
public static void findFile() throws IOException {
throw new IOException("File not found");
}

public static void main(String[] args) {
try {
findFile();
System.out.println("Rest of code in try block");
} catch (IOException e) {
System.out.println(e.getMessage());
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>File not found</samp></pre>

<p>The <code>findFile()</code> method throws an <code>IOException</code> with the message we passed to its <a href="/java-programming/constructors">constructor</a>.</p>

<p>Note that since it is a checked exception, we must specify it in the <code>throws</code> clause.</p>

<p>The methods that call this <code>findFile()</code> method need to either handle this exception or specify it using <code>throws</code> keyword themselves.</p>

<p>We have handled this exception in the <code>main()</code> method. The flow of program execution transfers from the <code>try</code> block to <code>catch</code> block when an exception is thrown. So, the rest of the code in the <code>try</code> block is skipped and statements in the <code>catch</code> block are executed.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/exception-handling">Java Exception Handling</a> </li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#throws">throws keyword </a></li>
<li><a href="#multiple-exceptions">Throwing multiple exceptions </a></li>
<li><a href="#versus-try-catch">throws keyword Vs. try...catch...finally </a></li>
<li><a href="#throw">throw keyword </a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="multiple-exceptions">
                        
            <div class="editor-contents">
                <h1>Java catch Multiple Exceptions</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1534" class="node node-java-tutorial clearfix" about="/java-programming/multiple-exceptions" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java catch Multiple Exceptions" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">Before Java 7, we had to write multiple exception handling codes for different types of exceptions even if there was code redundancy.</p>

<p>Let's take an example.</p>

<h3>Example 1: Multiple catch blocks</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
try {
int array[] = new int[10];
array[10] = 30 / 0;
} catch (ArithmeticException e) {
System.out.println(e.getMessage());
} catch (ArrayIndexOutOfBoundsException e) {
System.out.println(e.getMessage());
} 
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>/ by zero</samp></pre>

<p>In this example, two <a href="/java-programming/exceptions">exceptions</a> may occur:</p>

<ul>
<li><code>ArithmeticException</code> because we are trying to divide a number by 0.</li>
<li><code>ArrayIndexOutOfBoundsException</code> because we have declared a new integer <a href="/java-programming/arrays">array</a> with array bounds 0 to 9 and we are trying to assign a value to index 10.</li>
</ul>

<p>We are printing out the exception message in both the <code>catch</code> blocks i.e. duplicate code.</p>

<p>The associativity of the assignment operator <code>=</code> is right to left, so an <code>ArithmeticException</code> is thrown first with the message <samp>/ by zero</samp>.</p>

<hr>
<h2 id="one-catch-block">Handle Multiple Exceptions in a catch Block</h2>

<p>In Java SE 7 and later, we can now catch more than one type of exception in a single <code>catch</code> block.</p>

<p>Each exception type that can be handled by the <code>catch</code> block is separated using a vertical bar or pipe <code>|</code>.</p>

<p>Its syntax is:</p>

<pre>
<code>try {
// code
} catch (ExceptionType1 | Exceptiontype2 ex) { 
// catch block
}</code></pre>

<h3>Example 2: Multi-catch block</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
try {
int array[] = new int[10];
array[10] = 30 / 0;
} catch (ArithmeticException | ArrayIndexOutOfBoundsException e) {
System.out.println(e.getMessage());
}
}
}</code></pre>

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

<pre>
<samp>/ by zero</samp></pre>

<p>Catching multiple exceptions in a single <code>catch</code> block reduces code duplication and increases efficiency.</p>

<p>The bytecode generated while compiling this program will be smaller than the program having multiple <code>catch</code> blocks as there is no code redundancy.</p>

<p><strong>Note:</strong> If a <code>catch</code> block handles multiple exceptions, the catch parameter is implicitly <code>final</code>. This means we cannot assign any values to catch parameters.</p>

<hr>
<h2 id="base-exception">Catching base Exception</h2>

<p>When catching multiple exceptions in a single <code>catch</code> block, the rule is generalized to specialized.</p>

<p>This means that if there is a hierarchy of exceptions in the <code>catch</code> block, we can catch the base exception only instead of catching multiple specialized exceptions.</p>

<p>Let's take an example.</p>

<h3>Example 3: Catching base exception class only</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
try {
int array[] = new int[10];
array[10] = 30 / 0;
} catch (Exception e) {
System.out.println(e.getMessage());
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>/ by zero</samp></pre>

<p>We know that all the exception classes are subclasses of the <code>Exception</code> class. So, instead of catching multiple specialized exceptions, we can simply catch the <code>Exception</code> class.</p>

<hr>
<p>If the base exception class has already been specified in the <code>catch</code> block, do not use child exception classes in the same <code>catch</code> block. Otherwise, we will get a compilation error.</p>

<p>Let's take an example.</p>

<h3>Example 4: Catching base and child exception classes</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
try {
int array[] = new int[10];
array[10] = 30 / 0;
} catch (Exception | ArithmeticException | ArrayIndexOutOfBoundsException e) {
System.out.println(e.getMessage());
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Main.java:6: error: Alternatives in a multi-catch statement cannot be related by subclassing</samp></pre>

<p>In this example, <code>ArithmeticException</code> and <code>ArrayIndexOutOfBoundsException</code> are both subclasses of the <code>Exception</code> class. So, we get a compilation error.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/exception-handling">Java Exception Handling</a> </li>
<li><a href="/java-programming/try-catch">Java try…catch</a> </li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#one-catch-block">Handle Multiple Exceptions in a catch Block </a></li>
<li><a href="#base-exception">Catching base Exception </a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="try-with-resources">
                        <div class="editor-contents">
                            <h1>Java try-with-resources</h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-1539" class="node node-java-tutorial clearfix" about="/java-programming/try-with-resources" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java try-with-resources" class="rdf-meta element-hidden"></span>

<div class="content">
    <p id="introduction">The <code>try-with-resources</code> statement automatically closes all the resources at the end of the statement. A resource is an object to be closed at the end of the program.</p>

<p>Its syntax is:</p>

<pre>
<code>try (resource declaration) {
// use of the resource
} catch (ExceptionType e1) {
// catch block
}</code></pre>

<p>As seen from the above syntax, we declare the <code>try-with-resources</code> statement by,</p>

<ol>
  <li>declaring and instantiating the resource within the <code>try</code> clause.</li>
  <li>specifying and handling all <a href="/java-programming/exceptions">exceptions</a> that might be thrown while closing the resource.</li>
</ol>

<p><strong>Note:</strong> The try-with-resources statement closes all the resources that implement the <a href="https://docs.oracle.com/javase/8/docs/api/java/lang/AutoCloseable.html">AutoCloseable interface</a>.</p>

<hr>
<p>Let us take an example that implements the <code>try-with-resources</code> statement.</p>

<h3 id="example-1">Example 1: try-with-resources</h3>

<pre>
<code>import java.io.*;

class Main {
public static void main(String[] args) {
  String line;
  try(BufferedReader br = new BufferedReader(new FileReader("test.txt"))) {
    while ((line = br.readLine()) != null) {
      System.out.println("Line =&gt;"+line);
    }
  } catch (IOException e) {
    System.out.println("IOException in try block =&gt;" + e.getMessage());
  }
}
}</code></pre>

<p><strong>Output if the test.txt file is not found.</strong></p>

<pre>
<samp>IOException in try-with-resources block =&gt;test.txt (No such file or directory)</samp></pre>

<p><strong>Output if the test.txt file is found.</strong></p>

<pre>
<samp>Entering try-with-resources block
Line =&gt;test line</samp></pre>

<p>In this example, we use an instance of <var>BufferedReader</var> to read data from the <code>test.txt</code> file.</p>

<p>Declaring and instantiating the <var>BufferedReader</var> inside the <code>try-with-resources</code> statement ensures that its instance is closed regardless of whether the <code>try</code> statement completes normally or throws an exception.</p>

<p>If an exception occurs, it can be handled using the <a href="/java-programming/exception-handling">exception handling</a> blocks or the <a href="/java-programming/throw-throws">throws keyword</a>.</p>

<hr>
<h2 id="suppressed-exceptions">Suppressed Exceptions</h2>

<p>In the above example, exceptions can be thrown from the <code>try-with-resources</code> statement when:</p>

<ul>
  <li>The file <code>test.txt</code> is not found.</li>
  <li>Closing the <code>BufferedReader</code> object.</li>
</ul>

<p>An exception can also be thrown from the <code>try</code> block as a file read can fail for many reasons at any time.</p>

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
  </div><div class="clearfix"></div><p>If exceptions are thrown from both the <code>try</code> block and the <code>try-with-resources</code> statement, exception from the <code>try</code> block is thrown and exception from the <code>try-with-resources</code> statement is suppressed.</p>

<h3>Retrieving Suppressed Exceptions</h3>

<p>In Java 7 and later, the suppressed exceptions can be retrieved by calling the <code>Throwable.getSuppressed()</code> method from the exception thrown by the <code>try</code> block.</p>

<p>This method returns an <a href="/java-programming/arrays">array</a> of all suppressed exceptions. We get the suppressed exceptions in the <code>catch</code> block.</p>

<pre>
<code>catch(IOException e) {
System.out.println("Thrown exception=&gt;" + e.getMessage());
Throwable[] suppressedExceptions = e.getSuppressed();
for (int i=0; i&lt;suppressedExceptions.length; i++) {
  System.out.println("Suppressed exception=&gt;" + suppressedExceptions[i]);
}
}</code></pre>

<hr>
<h2 id="advantages">Advantages of using try-with-resources</h2>

<p>Here are the advantages of using try-with-resources:</p>

<h3>1. finally block not required to close the resource</h3>

<p>Before Java 7 introduced this feature, we had to use the <code>finally</code> block to ensure that the resource is closed to avoid resource leaks.</p>

<p>Here's a program that is similar to <strong>Example 1</strong>. However, in this program, we have used finally block to close resources.</p>

<h3>Example 2: Close resource using finally block</h3>

<pre class="java-exec">
<code>import java.io.*;

class Main {
public static void main(String[] args) {
  BufferedReader br = null;
  String line;

  try {
    System.out.println("Entering try block");
    br = new BufferedReader(new FileReader("test.txt"));
    while ((line = br.readLine()) != null) {
      System.out.println("Line =&gt;"+line);
    }
  } catch (IOException e) {
    System.out.println("IOException in try block =&gt;" + e.getMessage());
  } finally {
    System.out.println("Entering finally block");
    try {
      if (br != null) {
        br.close();
      }
    } catch (IOException e) {
      System.out.println("IOException in finally block =&gt;"+e.getMessage());
    }

  }
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Entering try block
Line =&gt;line from test.txt file
Entering finally block </samp></pre>

<p>As we can see from the above example, the use of <code>finally</code> block to clean up resources makes the code more complex.</p>

<p>Notice the <code>try...catch</code> block in the <code>finally</code> block as well? This is because an <code>IOException</code> can also occur while closing the <code>BufferedReader</code> instance inside this <code>finally</code> block so it is also caught and handled.</p>

<p>The <code>try-with-resources</code> statement does <strong>automatic resource management</strong>. We need not explicitly close the resources as JVM automatically closes them. This makes the code more readable and easier to write.</p>

<hr>
<h3>2. try-with-resources with multiple resources</h3>

<p>We can declare more than one resource in the <code>try-with-resources</code> statement by separating them with a semicolon <code>;</code></p>

<h3>Example 3: try with multiple resources</h3>

<pre class="java-exec">
<code>import java.io.*;
import java.util.*;
class Main {
public static void main(String[] args) throws IOException{
  try (Scanner scanner = new Scanner(new File("testRead.txt")); 
    PrintWriter writer = new PrintWriter(new File("testWrite.txt"))) {
    while (scanner.hasNext()) {
      writer.print(scanner.nextLine());
    }
  }
}
}</code></pre>

<p>If this program executes without generating any exceptions, <code>Scanner</code> object reads a line from the <code>testRead.txt</code> file and writes it in a new <code>testWrite.txt</code> file.</p>

<p>When multiple declarations are made, the <code>try-with-resources</code> statement closes these resources in reverse order. In this example, the <code>PrintWriter</code> object is closed first and then the <code>Scanner</code> object is closed.</p>

<hr>
<h2 id="java-9">Java 9 try-with-resources enhancement</h2>

<p>In Java 7, there is a restriction to the <code>try-with-resources</code> statement. The resource needs to be declared locally within its block.</p>

<pre>
<code>try (Scanner scanner = new Scanner(new File("testRead.txt"))) {
// code
}</code></pre>

<p>If we declared the resource outside the block in Java 7, it would have generated an error message.</p>

<pre>
<code>Scanner scanner = new Scanner(new File("testRead.txt"));
try (scanner) {
// code
}</code></pre>

<p>To deal with this error, Java 9 improved the <code>try-with-resources</code> statement so that the reference of the resource can be used even if it is not declared locally. The above code will now execute without any compilation error.</p>

</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#introduction">Introduction</a></li>
  <li><a href="#example-1">Example: try-with-resources </a></li>
  <li><a href="#suppressed-exceptions">Suppressed Exceptions </a></li>
  <li><a href="#advantages">Advantages of using try-with-resources </a></li>
  <li><a href="#java-9">Java 9 try-with-resources enhancement </a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="annocation">
                        
            <div class="editor-contents">
                <h1>Java Annotations</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1570" class="node node-java-tutorial clearfix" about="/java-programming/annotations" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Annotations" class="rdf-meta element-hidden"></span>

<div class="content">
<p>Java annotations are metadata (data about data) for our program source code.</p>

<p>They provide additional information about the program to the compiler but are not part of the program itself. These annotations do not affect the execution of the compiled program.</p>

<p>Annotations start with <code>@</code>. Its syntax is:</p>

<pre>
<samp>@AnnotationName</samp></pre>

<hr>
<p>Let's take an example of <code>@Override</code> annotation.</p>

<p>The <code>@Override</code> annotation specifies that the method that has been marked with this annotation overrides the method of the superclass with the same method name, return type, and parameter list.</p>

<p>It is not mandatory to use <code>@Override</code> when overriding a method. However, if we use it, the compiler gives an error if something is wrong (such as wrong parameter type) while overriding the method.</p>

<h3>Example 1: @Override Annotation Example</h3>

<pre class="java-exec">
<code>class Animal {
public void displayInfo() {
System.out.println("I am an animal.");
}
}

class Dog extends Animal {
@Override
public void displayInfo() {
System.out.println("I am a dog.");
}
}

class Main {
public static void main(String[] args) {
Dog d1 = new Dog();
d1.displayInfo();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>I am a dog.</samp></pre>

<p>In this example, the method <code>displayInfo()</code> is present in both the superclass <var>Animal</var> and subclass <var>Dog</var>. When this method is called, the method of the subclass is called instead of the method in the superclass.</p>

<hr>
<h2 id="formats">Annotation formats</h2>

<p>Annotations may also include elements (members/attributes/parameters).</p>

<h3>1. Marker Annotations</h3>

<p>Marker annotations do not contain members/elements. It is only used for marking a declaration.</p>

<p>Its syntax is:</p>

<pre>
<samp>@AnnotationName()</samp></pre>

<p>Since these annotations do not contain elements, parentheses can be excluded. For example,</p>

<pre>
<samp>@Override</samp></pre>

<hr>
<h3>2. Single element Annotations</h3>

<p>A single element annotation contains only one element.</p>

<p>Its syntax is:</p>

<pre>
<samp>@AnnotationName(elementName = "elementValue")</samp></pre>

<p>If there is only one element, it is a convention to name that element as <var>value</var>.</p>

<pre>
<samp>@AnnotationName(value = "elementValue")</samp></pre>

<p>In this case, the element name can be excluded as well. The element name will be <var>value</var> by default.</p>

<pre>
<samp>@AnnotationName("elementValue")</samp></pre>

<hr>
<h3>3. Multiple element Annotations</h3>

<p>These annotations contain multiple elements separated by commas.</p>

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
</div><div class="clearfix"></div><p>Its syntax is:</p>

<pre>
<samp>@AnnotationName(element1 = "value1", element2 = "value2")</samp></pre>

<hr>
<h2 id="placement">Annotation placement</h2>

<p>Any declaration can be marked with annotation by placing it above that declaration. As of Java 8, annotations can also be placed before a type.</p>

<h3>1. Above declarations</h3>

<p>As mentioned above, Java annotations can be placed above <a href="/java-programming/class-objects">class</a>, <a href="/java-programming/methods">method</a>, <a href="/java-programming/interfaces">interface</a>, field, and other program element declarations.</p>

<h3>Example 2: @SuppressWarnings Annotation Example</h3>

<pre class="java-exec">
<code>import java.util.*;

class Main {
@SuppressWarnings("unchecked")
static void wordsList() {
ArrayList wordList = new ArrayList&lt;&gt;();

// This causes an unchecked warning
wordList.add("programiz"); 

System.out.println("Word list =&gt; " + wordList);
}

public static void main(String args[]) {
wordsList();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Word list =&gt; [programiz]</samp></pre>

<p>If the above program is compiled without using the <code>@SuppressWarnings("unchecked")</code> annotation, the compiler will still compile the program but it will give warnings like:</p>

<pre>
<samp>Main.java uses unchecked or unsafe operations.
Word list =&gt; [programiz]</samp></pre>

<p>We are getting the warning</p>

<pre>
<samp>Main.java uses unchecked or unsafe operations</samp></pre>

<p>because of the following statement.</p>

<pre>
<code>ArrayList wordList = new ArrayList&lt;&gt;();</code></pre>

<p>This is because we haven't defined the generic type of the <a href="/java-programming/arraylist">array list</a>. We can fix this warning by specifying generics inside angle brackets <code>&lt;&gt;</code>.</p>

<pre>
<samp>ArrayList&lt;String&gt; wordList = new ArrayList&lt;&gt;();</samp></pre>

<hr>
<h3>2. Type annotations</h3>

<p>Before Java 8, annotations could be applied to declarations only. Now, type annotations can be used as well. This means that we can place annotations wherever we use a type.</p>

<p><strong>Constructor invocations</strong></p>

<pre>
<code>new @Readonly ArrayList&lt;&gt;()</code></pre>

<p><strong>Type definitions</strong></p>

<pre>
<samp>@NonNull String str;</samp></pre>

<p>This declaration specifies non-null variable <var>str</var> of type <code>String</code> to avoid <code>NullPointerException</code>.</p>

<pre>
<samp>@NonNull List&lt;String&gt; newList;</samp></pre>

<p>This declaration specifies a non-null list of type <code>String</code>.</p>

<pre>
<code>List&lt;@NonNull String&gt; newList;</code></pre>

<p>This declaration specifies a list of non-null values of type <code>String</code>.</p>

<p><strong>Type casts</strong> </p>

<pre>
<code>newStr = (@NonNull String) str;</code></pre>

<p><strong>extends and implements clause</strong> </p>

<pre>
<samp>class Warning extends @Localized Message</samp></pre>

<p><strong>throws clause</strong> </p>

<pre>
<samp>public String readMethod() throws @Localized IOException</samp></pre>

<p>Type annotations enable Java code to be analyzed better and provide even stronger type checks.</p>

<hr>
<h2 id="types">Types of Annotations</h2>

<p>1. <strong>Predefined annotations</strong></p>

<ol>
<li><code>@Deprecated</code></li>
<li><code>@Override</code></li>
<li><code>@SuppressWarnings</code></li>
<li><code>@SafeVarargs</code></li>
<li><code>@FunctionalInterface</code></li>
</ol>

<p>2. <strong>Meta-annotations</strong></p>

<ol>
<li><code>@Retention</code></li>
<li><code>@Documented</code></li>
<li><code>@Target</code></li>
<li><code>@Inherited</code></li>
<li><code>@Repeatable</code></li>
</ol>

<p>3. <strong>Custom annotations</strong></p>

<p>These annotation types are described in detail in the <a href="/java-programming/annotation-types">Java Annotation Types</a> tutorial.</p>

<hr>
<h2 id="use">Use of Annotations</h2>

<ul>
<li><strong>Compiler instructions</strong> - Annotations can be used for giving instructions to the compiler, detect errors or suppress warnings. The built-in annotations <code>@Deprecated</code>, <code>@Override</code>, <code>@SuppressWarnings</code> are used for these purposes.</li>
<li><strong>Compile-time instructions</strong> - Compile-time instructions provided by these annotations help the software build tools to generate code, XML files and many more.</li>
<li><strong>Runtime instructions</strong> - Some annotations can be defined to give instructions to the program at runtime. These annotations are accessed using Java Reflection.</li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#formats">Annotation formats</a></li>
<li><a href="#placement">Annotation placement</a></li>
<li><a href="#types">Types of Java Annotations</a></li>
<li><a href="#use">Use of Annotations</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="annocation-types">
                        <div class="editor-contents">
                            <h1>Java Annotation Types</h1>
            
            
                          <!--  <p class="editor-contents__short-description"></p> -->
            
            
            
                              
  
  
  
  <div id="node-1571" class="node node-java-tutorial clearfix" about="/java-programming/annotation-types" typeof="sioc:Item foaf:Document">


    <span property="dc:title" content="Java Annotation Types" class="rdf-meta element-hidden"></span>

<div class="content">
    <p>Java annotations are metadata (data about data) for our program source code. There are several predefined annotations provided by the Java SE. Moreover, we can also create custom annotations as per our needs.</p>

<p>If you do not know what annotations are, visit the <a href="/java-programming/annotations">Java annotations</a> tutorial.</p>

<p>These annotations can be categorized as:</p>

<p>1. <strong>Predefined annotations</strong> </p>

<ul>
  <li><code>@Deprecated</code></li>
  <li><code>@Override</code></li>
  <li><code>@SuppressWarnings</code></li>
  <li><code>@SafeVarargs</code></li>
  <li><code>@FunctionalInterface</code></li>
</ul>

<p>2. <strong>Custom annotations</strong></p>

<p>3. <strong>Meta-annotations</strong></p>

<ul>
  <li><code>@Retention</code></li>
  <li><code>@Documented</code></li>
  <li><code>@Target</code></li>
  <li><code>@Inherited</code></li>
  <li><code>@Repeatable</code></li>
</ul>

<hr>
<h2 id="predefined">Predefined Annotation Types</h2>

<h3>1. @Deprecated</h3>

<p>The <code>@Deprecated</code> annotation is a marker annotation that indicates the element (<a href="/java-programming/class-objects">class</a>, <a href="/java-programming/methods">method</a>, field, etc) is deprecated and has been replaced by a newer element.</p>

<p>Its syntax is:</p>

<pre>
<code>@Deprecated
accessModifier returnType deprecatedMethodName() { ... }</code></pre>

<p>When a program uses the element that has been declared deprecated, the compiler generates a warning.</p>

<p>We use Javadoc <code>@deprecated</code> tag for documenting the deprecated element.</p>

<pre>
<code>/**
* @deprecated
* why it was deprecated
*/
@Deprecated
accessModifier returnType deprecatedMethodName() { ... }</code></pre>

<h3>Example 1: @Deprecated annotation example</h3>

<pre class="java-exec">
<code>class Main {
/**
 * @deprecated
 * This method is deprecated and has been replaced by newMethod()
 */
@Deprecated
public static void deprecatedMethod() { 
  System.out.println("Deprecated method"); 
} 

public static void main(String args[]) {
  deprecatedMethod();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Deprecated method</samp></pre>

<hr>
<h3>2. @Override</h3>

<p>The <code>@Override</code> annotation specifies that a method of a subclass overrides the method of the superclass with the same method name, return type, and parameter list.</p>

<p>It is not mandatory to use <code>@Override</code> when overriding a method. However, if we use it, the compiler gives an error if something is wrong (such as wrong parameter type) while overriding the method.</p>

<h3>Example 2: @Override annotation example</h3>

<pre class="java-exec">
<code>class Animal {

// overridden method
public void display(){
  System.out.println("I am an animal");
}
}

class Dog extends Animal {

// overriding method
@Override
public void display(){
  System.out.println("I am a dog");
}

public void printMessage(){
  display();
}
}

class Main {
public static void main(String[] args) {
  Dog dog1 = new Dog();
  dog1.printMessage();
}
}</code></pre>

<p><strong>Output</strong> </p>

<pre>
<samp>I am a dog</samp></pre>

<p>In this example, by making an object <var>dog1</var> of <var>Dog</var> class, we can call its method <var>printMessage()</var> which then executes the <code>display()</code> statement.</p>

<p>Since <code>display()</code> is defined in both the classes, the method of subclass <var>Dog</var> overrides the method of superclass <var>Animal</var>. Hence, the <code>display()</code> of the subclass is called.</p>

<hr>
<h3>3. @SuppressWarnings</h3>

<p>As the name suggests, the <code>@SuppressWarnings</code> annotation instructs the compiler to suppress warnings that are generated while the program executes.</p>

<p>We can specify the type of warnings to be suppressed. The warnings that can be suppressed are compiler-specific but there are two categories of warnings: <strong>deprecation</strong> and <strong>unchecked</strong>.</p>

<p>To suppress a particular category of warning, we use:</p>

<pre>
<code>@SuppressWarnings("warningCategory")</code></pre>

<p>For example,</p>

<pre>
<code>@SuppressWarnings("deprecated")</code></pre>

<p>To suppress multiple categories of warnings, we use:</p>

<pre>
<code>@SuppressWarnings({"warningCategory1", "warningCategory2"})</code></pre>

<p>For example,</p>

<pre>
<code>@SuppressWarnings({"deprecated", "unchecked"})</code></pre>

<p>Category <code>deprecated</code> instructs the compiler to suppress warnings when we use a deprecated element.</p>

<p>Category <code>unchecked</code> instructs the compiler to suppress warnings when we use raw types.</p>

<p>And, undefined warnings are ignored. For example,</p>

<pre>
<code>@SuppressWarnings("someundefinedwarning")</code></pre>

<h3>Example 3: @SuppressWarnings annotation example</h3>

<pre class="java-exec">
<code>class Main {
@Deprecated
public static void deprecatedMethod() { 
  System.out.println("Deprecated method"); 
} 

@SuppressWarnings("deprecated")
public static void main(String args[]) {
  Main depObj = new Main();
  depObj. deprecatedMethod();
}
}</code></pre>

<p><strong>Output</strong> </p>

<pre>
<samp>Deprecated method</samp></pre>

<p>Here, <code>deprecatedMethod()</code> has been marked as deprecated and will give compiler warnings when used. By using the <code>@SuppressWarnings("deprecated")</code> annotation, we can avoid compiler warnings.</p>

<hr>
<h3>4. @SafeVarargs</h3>

<p>The <code>@SafeVarargs</code> annotation asserts that the annotated method or <a href="/java-programming/constructors">constructor</a> does not perform unsafe operations on its varargs (<a href="/java-programming/variables-literals">variable</a> number of arguments).</p>

<p>We can only use this annotation on methods or constructors that cannot be overridden. This is because the methods that override them might perform unsafe operations.</p>

<p>Before Java 9, we could use this annotation only on final or static methods because they cannot be overridden. We can now use this annotation for private methods as well.</p>

<h3>Example 4: @SafeVarargs annotation example</h3>

<pre class="java-exec">
<code>import java.util.*;

class Main {

private void displayList(List&lt;String&gt;... lists) {
  for (List&lt;String&gt; list : lists) {
    System.out.println(list);
  }
}

public static void main(String args[]) {
  Main obj = new Main();

  List&lt;String&gt; universityList = Arrays.asList("Tribhuvan University", "Kathmandu University");
  obj.displayList(universityList);

  List&lt;String&gt; programmingLanguages = Arrays.asList("Java", "C");
  obj.displayList(universityList, programmingLanguages);
}
}</code></pre>

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
  </div><div class="clearfix"></div><p><strong>Warnings</strong> </p>

<pre>
<samp>Type safety: Potential heap pollution via varargs parameter lists
Type safety: A generic array of List&lt;String&gt; is created for a varargs 
parameter</samp></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Note: Main.java uses unchecked or unsafe operations.
[Tribhuvan University, Kathmandu University]
[Tribhuvan University, Kathmandu University]
[Java, C]</samp></pre>

<p>Here, <code>List</code> <code>... lists</code> specifies a variable-length argument of type <code>List</code>. This means that the method <code>displayList()</code> can have zero or more arguments.</p>

<p>The above program compiles without errors but gives warnings when <code>@SafeVarargs</code> annotation isn't used.</p>

<p>When we use <code>@SafeVarargs</code> annotation in the above example,</p>

<pre>
<samp>@SafeVarargs
private void displayList(List&lt;String&gt;... lists) { ... }</samp></pre>

<p>We get the same output but without any warnings. Unchecked warnings are also suppressed when we use this annotation.</p>

<hr>
<h3>5. @FunctionalInterface</h3>

<p>Java 8 first introduced this <code>@FunctionalInterface</code> annotation. This annotation indicates that the type declaration on which it is used is a functional interface. A functional interface can have only one abstract method.</p>

<h3>Example 5: @FunctionalInterface annotation example</h3>

<pre class="java-exec">
<code>@FunctionalInterface
public interface MyFuncInterface{
public void firstMethod(); // this is an abstract method
}</code></pre>

<p>If we add another abstract method, let's say</p>

<pre class="java-exec">
<code>@FunctionalInterface
public interface MyFuncInterface{
public void firstMethod(); // this is an abstract method
public void secondMethod(); // this throws compile error
}</code></pre>

<p>Now, when we run the program, we will get the following warning:</p>

<pre>
<samp>Unexpected @FunctionalInterface annotation
@FunctionalInterface ^ MyFuncInterface is not a functional interface
multiple non-overriding abstract methods found in interface MyFuncInterface</samp></pre>

<p>It is not mandatory to use <code>@FunctionalInterface</code> annotation. The compiler will consider any interface that meets the functional interface definition as a functional interface.</p>

<p>We use this annotation to make sure that the functional interface has only one abstract method.</p>

<p>However, it can have any number of default and static methods because they have an implementation.</p>

<pre class="java-exec">
<code>@FunctionalInterface
public interface MyFuncInterface{
public void firstMethod(); // this is an abstract method
default void secondMethod() { ... } 
default void thirdMethod() { ... } 
}</code></pre>

<hr>
<h2 id="custom">Custom Annotations</h2>

<p>It is also possible to create our own custom annotations.</p>

<p>Its syntax is:</p>

<pre>
<samp>[Access Specifier] @interface&lt;AnnotationName&gt; {         
DataType &lt;Method Name&gt;() [default value];
}</samp></pre>

<p>Here is what you need to know about custom annotation:</p>

<ul>
  <li>Annotations can be created by using <code>@interface</code> followed by the annotation name.</li>
  <li>The annotation can have elements that look like methods but they do not have an implementation.</li>
  <li>The default value is optional. The parameters cannot have a null value.</li>
  <li>The return type of the method can be <a href="/java-programming/variables-primitive-data-types">primitive</a>, <a href="/java-programming/enums">enum</a>, <a href="/java-programming/string">string</a>, class name or <a href="/java-programming/arrays">array</a> of these types.</li>
</ul>

<h3>Example 6: Custom annotation example</h3>

<pre class="java-exec">
<code>@interface MyCustomAnnotation {
String value() default "default value";
}

class Main {
@MyCustomAnnotation(value = "programiz")
public void method1() {
  System.out.println("Test method 1");
}

public static void main(String[] args) throws Exception {
  Main obj = new Main();
  obj.method1();
}
}</code></pre>

<p><strong>Output</strong> </p>

<pre>
<samp>Test method 1</samp></pre>

<hr>
<h2 id="meta">Meta Annotations</h2>

<p>Meta-annotations are annotations that are applied to other annotations.</p>

<h3>1. @Retention</h3>

<p>The <code>@Retention</code> annotation specifies the level up to which the annotation will be available.</p>

<p>Its syntax is:</p>

<pre>
<code>@Retention(RetentionPolicy)</code></pre>

<p>There are 3 types of retention policies:</p>

<ul>
  <li><strong>RetentionPolicy.SOURCE</strong> - The annotation is available only at the source level and is ignored by the compiler.</li>
  <li><strong>RetentionPolicy.CLASS</strong> - The annotation is available to the compiler at compile-time, but is ignored by the Java Virtual Machine (JVM).</li>
  <li><strong>RetentionPolicy.RUNTIME</strong> - The annotation is available to the JVM.</li>
</ul>

<p>For example,</p>

<pre>
<code>@Retention(RetentionPolicy.RUNTIME)
public @interface MyCustomAnnotation{ ... }</code></pre>

<hr>
<h3>2. @Documented</h3>

<p>By default, custom annotations are not included in the <a href="https://www.oracle.com/technetwork/articles/java/index-137868.html">official Java documentation</a>. To include our annotation in the Javadoc documentation, we use the <code>@Documented</code> annotation.</p>

<p>For example,</p>

<pre>
<code>@Documented
public @interface MyCustomAnnotation{ ... }</code></pre>

<hr>
<h3>3. @Target</h3>

<p>We can restrict an annotation to be applied to specific targets using the <code>@Target</code> annotation.</p>

<p>Its syntax is:</p>

<pre>
<code>@Target(ElementType)</code></pre>

<p>The <code>ElementType</code> can have one of the following types:</p>

<div class="table-responsive">
<table>
<tr>
<th>Element Type</th>
<th>Target</th>
</tr>
<tr>
<td><code>ElementType.ANNOTATION_TYPE</code></td>
<td>Annotation type</td>
</tr>
<tr>
<td><code>ElementType.CONSTRUCTOR</code> </td>
<td>Constructors</td>
</tr>
<tr>
<td><code>ElementType.FIELD</code> </td>
<td>Fields</td>
</tr>
<tr>
<td><code>ElementType.LOCAL_VARIABLE</code> </td>
<td>Local variables</td>
</tr>
<tr>
<td><code>ElementType.METHOD</code> </td>
<td>Methods</td>
</tr>
<tr>
<td><code>ElementType.PACKAGE</code> </td>
<td>Package</td>
</tr>
<tr>
<td><code>ElementType.PARAMETER</code> </td>
<td>Parameter</td>
</tr>
<tr>
<td><code>ElementType.TYPE</code> </td>
<td>Any element of class</td>
</tr>
</table>
</div>

<p>For example,</p>

<pre>
<code>@Target(ElementType.METHOD)
public @interface MyCustomAnnotation{ ... }</code></pre>

<p>In this example, we have restricted the use of this annotation to methods only.</p>

<p class="note-tip"><strong>Note:</strong> If the target type is not defined, the annotation can be used for any element.</p>

<hr>
<h3>4. @Inherited</h3>

<p>By default, an annotation type cannot be inherited from a superclass. However, if we need to inherit an annotation from a superclass to a subclass, we use the <code>@Inherited</code> annotation.</p>

<p>Its syntax is:</p>

<pre>
<code>@Inherited</code></pre>

<p>For example,</p>

<pre>
<code>@Inherited
public @interface MyCustomAnnotation { ... }

@MyCustomAnnotation
public class ParentClass{ ... }

public class ChildClass extends ParentClass { ... }</code></pre>

<hr>
<h3>5. @Repeatable</h3>

<p>An annotation that has been marked by <code>@Repeatable</code> can be applied multiple times to the same declaration.</p>

<pre>
<code>@Repeatable(Universities.class)
public @interface University {
String name();
}</code></pre>

<p>The value defined in the <code>@Repeatable</code> annotation is the container annotation. The container annotation has a variable <var>value</var> of array type of the above repeatable annotation. Here, <code>Universities</code> are the containing annotation type.</p>

<pre>
<code>public @interface Universities {
University[] value();
}</code></pre>

<p>Now, the <code>@University</code> annotation can be used multiple times on the same declaration.</p>

<pre>
<code>@University(name = "TU")
@University(name = "KU")
private String uniName;</code></pre>

<hr>
<p>If we need to retrieve the annotation data, we can use <a href="/java-programming/reflection">the Reflection API</a>.</p>

<p>To retrieve annotation values, we use <code>getAnnotationsByType()</code> or <code>getAnnotations()</code> method defined in the Reflection API.</p>

</div>



</div>

                
                            <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
    <button class="btn btn--clear align-items-center">
    <svg class="programiz-icon">
      <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
    </svg>
    </button></h3><div class="tutorial-toc__links"><ul>
  <li><a href="#predefined">Predefined Annotation Types</a></li>
  <li><a href="#custom">Custom Annotations</a></li>
  <li><a href="#meta">Meta Annotations</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="logging">
                        
            <div class="editor-contents">
                <h1>Java Logging</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2609" class="node node-java-tutorial clearfix" about="/java-programming/logging" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Logging" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">Java allows us to create and capture log messages and files through the process of logging.</p>

<p>In Java, logging requires frameworks and APIs. Java has a built-in logging framework in the <code>java.util.logging</code> package.</p>

<p>We can also use third-party frameworks like Log4j, Logback, and many more for logging purposes.</p>

<hr>
<h2 id="components">Java Logging Components</h2>

<p>The figure below represents the core components and the flow of control of the Java Logging API (<code>java.util.logging</code>).</p>

<figure><img src="/sites/tutorial2program/files/java-logging.png" title="Java Logging" alt="The flow of control of Java Logging API" width="600" height="145">
<figcaption>Java Logging</figcaption></figure>
<h3 id="logger">1. Logger</h3>

<p>The <code>Logger</code> class provides methods for logging. We can instantiate objects from the <code>Logger</code> class and call its methods for logging purposes.</p>

<p>Let's take an example.</p>

<pre>
<code>Logger logger = Logger.getLogger("newLoggerName");</code></pre>

<p>The <code>getLogger()</code> method of the <code>Logger</code> class is used to find or create a new <code>Logger</code>. The <a href="/java-programming/string">string</a> argument defines the name of the logger.</p>

<p>Here, this creates a new <code>Logger</code> object or returns an existing <code>Logger</code> with the same name.</p>

<p>It is a convention to define a <code>Logger</code> after the current class using <code>class.getName()</code>.</p>

<pre>
<code>Logger logger = Logger.getLogger(MyClass.class.getName());</code></pre>

<p class="note-tip"><strong>Note:</strong> This method will throw <code>NullPointerException</code> if the passed name is <code>null</code>.</p>

<p>Each <code>Logger</code> has a level that determines the importance of the log message. There are 7 basic log levels:</p>

<div class="table-responsive">
<table>
<tr>
<th>Log Level (in descending order)</th>
<th>Use</th>
</tr>
<tr>
<td><strong>SEVERE</strong></td>
<td>serious failure</td>
</tr>
<tr>
<td><strong>WARNING</strong></td>
<td>warning message, a potential problem</td>
</tr>
<tr>
<td><strong>INFO</strong></td>
<td>general runtime information</td>
</tr>
<tr>
<td><strong>CONFIG</strong></td>
<td>configuration information</td>
</tr>
<tr>
<td><strong>FINE</strong></td>
<td>general developer information (tracing messages)</td>
</tr>
<tr>
<td><strong>FINER</strong></td>
<td>detailed developer information (tracing messages)</td>
</tr>
<tr>
<td><strong>FINEST</strong></td>
<td>highly detailed developer information(tracing messages)</td>
</tr>
<tr>
<td><strong>OFF</strong></td>
<td>turn off logging for all levels (capture nothing)</td>
</tr>
<tr>
<td><strong>ALL</strong></td>
<td>turn on logging for all levels (capture everything)</td>
</tr>
</table>
</div>

<p>Each log level has an integer value that determines their severity except for two special log levels <code>OFF</code> and <code>ALL</code>.</p>

<hr>
<h3 id="logging-message">Logging the message</h3>

<p>By default, the top three log levels are always logged. To set a different level, we can use the following code:</p>

<pre>
<code>logger.setLevel(Level.LogLevel);

// example
logger.setLevel(Level.FINE);</code></pre>

<p>In this example, only level <code>FINE</code> and levels above it are set to be logged. All other log messages are dropped.</p>

<p>Now to log a message, we use the <code>log()</code> method.</p>

<pre>
<code>logger.log(Level.LogLevel, "log message");

// example
logger.log(Level.INFO, "This is INFO log level message");</code></pre>

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
</div><div class="clearfix"></div><p>There are shorthand methods for logging at desired levels.</p>

<pre>
<code>logger.info( "This is INFO log level message");
logger.warning( "This is WARNING log level message");</code></pre>

<p>All log requests that have passed the set log level are then forwarded to the <strong>LogRecord</strong>.</p>

<p class="note-tip"><strong>Note:</strong> If a logger's level is set to <code>null</code>, its level is inherited from its parent and so on up the tree.</p>

<hr>
<h3 id="filters">2. Filters</h3>

<p>A filter (if it is present) determines whether the <strong>LogRecord</strong> should be forwarded or not. As the name suggests, it filters the log messages according to specific criteria.</p>

<p>A <strong>LogRecord</strong> is only passed from the logger to the log handler and from the log handler to external systems if it passes the specified criteria.</p>

<pre>
<code>// set a filter
logger.setFilter(filter);

// get a filter
Filter filter = logger.getFilter();</code></pre>

<hr>
<h3 id="handlers">3. Handlers(Appenders)</h3>

<p>The log handler or the appenders receive the <strong>LogRecord</strong> and exports it to various targets.</p>

<p>Java SE provides 5 built-in handlers:</p>

<div class="table-responsive">
<table>
<tr>
<th>Handlers</th>
<th>Use</th>
</tr>
<tr>
<td><code>StreamHandler</code></td>
<td>writes to an <code>OutputStream</code></td>
</tr>
<tr>
<td><code>ConsoleHandler</code></td>
<td>writes to console</td>
</tr>
<tr>
<td><code>FileHandler</code></td>
<td>writes to file</td>
</tr>
<tr>
<td><code>SocketHandler</code></td>
<td>writes to remote TCP ports</td>
</tr>
<tr>
<td><code>MemoryHandler</code></td>
<td>writes to memory</td>
</tr>
</table>
</div>

<p>A handler can pass the <strong>LogRecord</strong> to a filter to again determine whether it can be forwarded to external systems or not.</p>

<p>To add a new handler, we use the following code:</p>

<pre>
<code>logger.addHandler(handler);

// example
Handler handler = new ConsoleHandler();
logger.addHandler(handler);</code></pre>

<p>To remove a handler, we use the following code:</p>

<pre>
<code>logger.removeHandler(handler);

// example
Handler handler = new ConsoleHandler();
logger.addHandler(handler);
logger.removeHandler(handler);</code></pre>

<p>A logger can have multiple handlers. To get all the handlers, we use the following code:</p>

<pre>
<code>Handler[] handlers = logger.getHandlers();</code></pre>

<hr>
<h3 id="formatters">4. Formatters</h3>

<p>A handler can also use a <strong>Formatter</strong> to format the <strong>LogRecord</strong> object into a string before exporting it to external systems.</p>

<p>Java SE has two built-in <strong>Formatters</strong>:</p>

<div class="table-responsive">
<table>
<tr>
<th>Formatters</th>
<th>Use</th>
</tr>
<tr>
<td><code>SimpleFormatter</code></td>
<td>formats <strong>LogRecord</strong> to string</td>
</tr>
<tr>
<td><code>XMLFormatter</code></td>
<td>formats <strong>LogRecord</strong> to XML form</td>
</tr>
</table>
</div>

<p>We can use the following code to format a handler:</p>

<pre>
<code>// formats to string form
handler.setFormatter(new SimpleFormatter());

// formats to XML form
handler.setFormatter(new XMLFormatter());</code></pre>

<hr>
<h2 id="logmanager">LogManager</h2>

<p>The <strong>LogManager</strong> object keeps track of the global logging information. It reads and maintains the logging configuration and the logger instances.</p>

<p>The log manager is a singleton, which means that only one instance of it is instantiated.</p>

<p>To obtain the log manager instance, we use the following code:</p>

<pre>
<code>LogManager manager = new LogManager();</code></pre>

<hr>
<h2 id="advantages">Advantages of Logging</h2>

<p>Here are some of the advantages of logging in Java.</p>

<ul>
<li>helps in monitoring the flow of the program</li>
<li>helps in capturing any errors that may occur</li>
<li>provides support for problem diagnosis and debugging</li>
</ul>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/methods">Java Methods</a></li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#components">Logging Components</a></li>
<li><a href="#logger">Logger</a></li>
<li><a href="#logging-message">Logging the message</a></li>
<li><a href="#filters">Filters</a></li>
<li><a href="#handlers">Handlers (Appenders)</a></li>
<li><a href="#formatters">Formatters</a></li>
<li><a href="#logmanager">LogManager</a></li>
<li><a href="#advantages">Advantages</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="assertion">
                        
            <div class="editor-contents">
                <h1>Java Assertions</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1556" class="node node-java-tutorial clearfix" about="/java-programming/assertions" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Assertions" class="rdf-meta element-hidden"></span>

<div class="content">
<p>Assertions in Java help to detect bugs by testing code we assume to be true.</p>

<p>An assertion is made using the <code>assert</code> keyword.</p>

<p>Its syntax is:</p>

<pre>
<code>assert condition;</code></pre>

<p>Here, <code>condition</code> is a boolean expression that we assume to be true when the program executes.</p>

<hr>
<h2 id="enable">Enabling Assertions</h2>

<p>By default, assertions are disabled and ignored at runtime.</p>

<p>To enable assertions, we use:</p>

<pre>
<code>java -ea:arguments</code></pre>

<p>OR</p>

<pre>
<code>java -enableassertions:arguments</code></pre>

<p>When assertions are enabled and the condition is <code>true</code>, the program executes normally.</p>

<p>But if the condition evaluates to <code>false</code> while assertions are enabled, JVM throws an <code>AssertionError</code>, and the program stops immediately.</p>

<hr>
<h3 id="example">Example 1: Java assertion</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String args[]) {
String[] weekends = {"Friday", "Saturday", "Sunday"};
assert weekends.length == 2;
System.out.println("There are " + weekends.length + "  weekends in a week");
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>There are 3 weekends in a week
</samp></pre>

<p>We get the above output because this program has no compilation errors and by default, assertions are disabled.</p>

<p>After enabling assertions, we get the following output:</p>

<pre>
<samp>Exception in thread "main" java.lang.AssertionError
</samp></pre>

<hr>
<h2 id="another-form">Another form of assertion statement</h2>

<pre>
<code>assert condition : expression;
</code></pre>

<p>In this form of assertion statement, an expression is passed to the constructor of the <code>AssertionError</code> object. This expression has a value that is displayed as the error’s detail message if the condition is <code>false</code>.</p>

<p>The detailed message is used to capture and transmit the information of the assertion failure to help in debugging the problem.</p>

<hr>
<h3>Example 2: Java assertion with expression example</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String args[]) {
String[] weekends = {"Friday", "Saturday", "Sunday"};
assert weekends.length==2 : "There are only 2 weekends in a week";
System.out.println("There are " + weekends.length + "  weekends in a week");
}
}

</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Exception in thread "main" java.lang.AssertionError: There are only 2 weekends in a week
</samp></pre>

<p>As we see from the above example, the expression is passed to the constructor of the <code>AssertionError</code> object. If our assumption is <code>false</code> and assertions are enabled, an exception is thrown with an appropriate message.</p>

<p>This message helps in diagnosing and fixing the error that caused the assertion to fail.</p>

<hr>
<h2 id="specific">Enabling assertion for specific classes and packages</h2>

<p>If we do not provide any arguments to the assertion command-line switches,</p>

<pre>
java -ea
</pre>

<p>This enables assertions in all classes except system classes.</p>

<p>We can also enable assertion for specific classes and packages using arguments. The arguments that can be provided to these command-line switches are:</p>

<p><strong>Enable assertion in class names</strong></p>

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
</div><div class="clearfix"></div><p>To enable assertion for all classes of our program Main,</p>

<pre>
<code>java -ea Main</code></pre>

<p>To enable only one class,</p>

<pre>
<code>java -ea:AnimalClass Main</code></pre>

<p>This enables assertion in only the <code>AnimalClass</code> in the <code>Main</code> program.</p>

<p><strong>Enable assertion in package names</strong></p>

<p>To enable assertions for package <code>com.animal</code> and its sub-packages only,</p>

<pre>
<code>java -ea:com.animal... Main</code></pre>

<p><strong>Enable assertion in unnamed packages</strong></p>

<p>To enable assertion in unnamed packages (when we don’t use a package statement) in the current working directory.</p>

<pre>
<code>java -ea:... Main</code></pre>

<p><strong>Enable assertion in system classes</strong></p>

<p>To enable assertion in system classes, we use a different command-line switch:</p>

<pre>
<code>java -esa:arguments </code></pre>

<p>OR</p>

<pre>
<code>java -enablesystemassertions:arguments</code></pre>

<p>The arguments that can be provided to these switches are the same.</p>

<hr>
<h2 id="disable">Disabling Assertions</h2>

<p>To disable assertions, we use:</p>

<pre>
<code>java -da arguments 
</code></pre>

<p>OR</p>

<pre>
<code>java -disableassertions arguments
</code></pre>

<p>To disable assertion in system classes, we use:</p>

<pre>
<code>java -dsa:arguments</code></pre>

<p>OR</p>

<pre>
<code>java -disablesystemassertions:arguments</code></pre>

<p>The arguments that can be passed while disabling assertions are the same as while enabling them.</p>

<hr>
<h2>Advantages of Assertion</h2>

<ol>
<li>Quick and efficient for detecting and correcting bugs.</li>
<li>Assertion checks are done only during development and testing. They are automatically removed in the production code at runtime so that it won’t slow the execution of the program.</li>
<li>It helps remove boilerplate code and make code more readable.</li>
<li>Refactors and optimizes code with increased confidence that it functions correctly.</li>
</ol>

<hr>
<h2 id="use">When to use Assertions</h2>

<h3>1. Unreachable codes</h3>

<p>Unreachable codes are codes that do not execute when we try to run the program. Use assertions to make sure unreachable codes are actually unreachable.</p>

<p>Let’s take an example.</p>

<pre>
<code>void unreachableCodeMethod() {
System.out.println("Reachable code");
return;
// Unreachable code
System.out.println("Unreachable code");
assert false;
}
</code></pre>

<p>Let’s take another example of a switch statement without a default case.</p>

<pre>
<code>switch (dayOfWeek) {
case "Sunday":
System.out.println("It’s Sunday!");
break;
case "Monday":
System.out.println("It’s Monday!");
break;
case "Tuesday":
System.out.println("It’s Tuesday!");
break;
case "Wednesday":
System.out.println("It’s Wednesday!");
break;
case "Thursday":
System.out.println("It’s Thursday!");
break;
case "Friday":
System.out.println("It’s Friday!");
break;
case "Saturday":
System.out.println("It’s Saturday!");
break;
}
</code></pre>

<p>The above switch statement indicates that the days of the week can be only one of the above 7 values. Having no default case means that the programmer believes that one of these cases will always be executed.</p>

<p>However, there might be some cases that have not yet been considered where the assumption is actually false.</p>

<p>This assumption should be checked using an assertion to make sure that the default switch case is not reached.</p>

<pre>
<code>default:
assert false: dayofWeek + " is invalid day";
</code></pre>

<p>If <var>dayOfWeek</var> has a value other than the valid days, an <code>AssertionError</code> is thrown.</p>

<hr>
<h3>2. Documenting assumptions</h3>

<p>To document their underlying assumptions, many programmers use comments. Let’s take an example.</p>

<pre>
<code>if (i % 2 == 0) {
...
} else { // We know (i % 2 == 1)
...
}
</code></pre>

<p>Use assertions instead.</p>

<p>Comments can get out-of-date and out-of-sync as the program grows. However, we will be forced to update the <code>assert</code> statements; otherwise, they might fail for valid conditions too.</p>

<pre>
<code>if (i % 2 == 0) {
...
} else {
assert i % 2 == 1 : i;
...
}
</code></pre>

<hr>
<h2 id="avoid">When not to use Assertions</h2>

<h3>1. Argument checking in public methods</h3>

<p>Arguments in public methods may be provided by the user.</p>

<p>So, if an assertion is used to check these arguments, the conditions may fail and result in <code>AssertionError</code>.</p>

<p>Instead of using assertions, let it result in the appropriate runtime exceptions and handle these exceptions.</p>

<hr>
<h3>2. To evaluate expressions that affect the program operation</h3>

<p>Do not call methods or evaluate exceptions that can later affect the program operation in assertion conditions.</p>

<p>Let us take an example of a list <var>weekdays</var> which contains the names of all the days in a week.</p>

<pre>
<code>
ArrayList&lt;String&gt; weekdays = new ArrayList&lt;&gt;(Arrays.asList("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ));

ArrayList&lt;String&gt; weekends= new ArrayList&lt;&gt;(Arrays.asList("Sunday", "Saturday" ));

assert weekdays.removeAll(weekends);
</code></pre>

<p>Here, we are trying to remove elements <code>Saturday</code> and <code>Sunday</code> from the ArrayList <var>weekdays</var>.</p>

<p>If the assertion is enabled, the program works fine. However, if assertions are disabled, the elements from the list are not removed. This may result in program failure.</p>

<p>Instead, assign the result to a variable and then use that variable for assertion.</p>

<pre>
<code>ArrayList&lt;String&gt; weekdays = new ArrayList&lt;&gt;(Arrays.asList("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ));

ArrayList&lt;String&gt; weekends= new ArrayList&lt;&gt;(Arrays.asList("Sunday", "Saturday" ));

boolean weekendsRemoved = weekdays.removeAll(weekends);
assert weekendsRemoved;
</code></pre>

<p>In this way, we can ensure that all the <var>weekends</var> are removed from the <var>weekdays</var> regardless of the assertion being enabled or disabled. As a result, it does not affect the program operation in the future.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#enable">Enabling assertions</a></li>
<li><a href="#example">Example: Java assertion</a></li>
<li><a href="#another-form">Another form of assertion statement</a></li>
<li><a href="#specific">Assertion for specific classes and packages</a></li>
<li><a href="#disable">Disabling assertions</a></li>
<li><a href="#use">When to use assertions</a></li>
<li><a href="#avoid">When not to use assertions</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                </section>
                <section id="list">
                   <div id="collection-framework">
                    
            <div class="editor-contents">
                <h1>Java Collections Framework</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1535" class="node node-java-tutorial clearfix" about="/java-programming/collections" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Collections Framework" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The Java <strong>collections</strong> framework provides a set of interfaces and classes to implement various data structures and algorithms.</p>

<p>For example, the <code>LinkedList</code> class of the collections framework provides the implementation of the doubly-linked list data structure.</p>

<hr>
<h2 id="interfaces">Interfaces of Collections FrameWork</h2>

<p>The Java collections framework provides various interfaces. These interfaces include several methods to perform different operations on collections.</p>

<p><img alt="Interfaces in the Java Collections Framework" height="581" src="images/Java-collection-interface.png" width="1200"></p>

<p>We will learn about these interfaces, their subinterfaces, and implementation in various classes in detail in the later chapters. Let's learn about the commonly used interfaces in brief in this tutorial.</p>

<hr>
<h2 id="collection-interface">Java Collection Interface</h2>

<p>The <code>Collection</code> interface is the root interface of the collections framework hierarchy.</p>

<p>Java does not provide direct implementations of the <code>Collection</code> interface but provides implementations of its subinterfaces like <code>List</code>, <code>Set</code>, and <code>Queue</code>. To learn more, visit: <a href="/java-programming/collection-interface" title="Java Collection Interface">Java Collection Interface</a></p>

<h3>Collections Framework Vs. Collection Interface</h3>

<p>People often get confused between the collections framework and <code>Collection</code> Interface.</p>

<p>The <code>Collection</code> interface is the root interface of the collections framework. The framework includes other interfaces as well: <code>Map</code> and <code>Iterator</code>. These interfaces may also have subinterfaces.</p>

<hr>
<h2 id="subinterfaces">Subinterfaces of the Collection Interface</h2>

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
</div><div class="clearfix"></div><p>As mentioned earlier, the <code>Collection</code> interface includes subinterfaces that are implemented by Java classes.</p>

<p>All the methods of the <code>Collection</code> interface are also present in its subinterfaces.</p>

<p>Here are the subinterfaces of the <code>Collection</code> Interface:</p>

<h3>List Interface</h3>

<p>The <code>List</code> interface is an ordered collection that allows us to add and remove elements like an <a href="/java-programming/arrays" title="array">array</a>. To learn more, visit <a href="/java-programming/list" title="Java List Interface">Java List Interface</a></p>

<h3>Set Interface</h3>

<p>The <code>Set</code> interface allows us to store elements in different sets similar to the set in mathematics. It cannot have duplicate elements. To learn more, visit <a href="/java-programming/set" title="Java Set Interface">Java Set Interface</a></p>

<h3>Queue Interface</h3>

<p>The <code>Queue</code> interface is used when we want to store and access elements in <strong>First In, First Out</strong> manner. To learn more, visit <a href="/java-programming/queue" title="Java Queue Interface">Java Queue Interface</a></p>

<hr>
<h2 id="map">Java Map Interface</h2>

<p>In Java, the <code>Map</code> interface allows elements to be stored in <strong>key/value</strong> pairs. Keys are unique names that can be used to access a particular element in a map. And, each key has a single value associated with it. To learn more, visit <a href="/java-programming/map" title="Java Map Interface">Java Map Interface</a></p>

<hr>
<h2>Java Iterator Interface</h2>

<p>In Java, the <code>Iterator</code> interface provides methods that can be used to access elements of collections. To learn more, visit <a href="/java-programming/iterator" title="Java Interface Interface">Java Iterator Interface</a></p>

<hr>
<h2>Why the Collections Framework?</h2>

<p>The Java collections framework provides various data structures and algorithms that can be used directly. This has two main advantages:</p>

<ul>
<li>We do not have to write code to implement these data structures and algorithms manually.</li>
<li>Our code will be much more efficient as the collections framework is highly optimized.</li>
</ul>

<p>Moreover, the collections framework allows us to use a specific data structure for a particular type of data. Here are a few examples,</p>

<ul>
<li>If we want our data to be unique, then we can use the <code>Set</code> interface provided by the collections framework.</li>
<li>To store data in <strong>key/value</strong> pairs, we can use the <code>Map</code> interface.</li>
<li>The <code>ArrayList</code> class provides the functionality of resizable arrays.</li>
</ul>

<hr>
<h2>Example: ArrayList Class of Collections</h2>

<p>Before we wrap up this tutorial, let's take an example of the <a href="/java-programming/arraylist" title="Java ArrayList">ArrayList class</a> of the collections framework.</p>

<p>The <code>ArrayList</code> class allows us to create resizable arrays. The class implements the <code>List</code> interface (which is a subinterface of the <code>Collection</code> interface).</p>

<pre class="java-exec">
<code>// The Collections framework is defined in the java.util package
import java.util.ArrayList;

class Main {
public static void main(String[] args){
ArrayList&lt;String&gt; animals = new ArrayList&lt;&gt;();
// Add elements
animals.add("Dog");
animals.add("Cat");
animals.add("Horse");

System.out.println("ArrayList: " + animals);
}
}</code>
</pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>ArrayList: [Dog, Cat, Horse]
</samp></pre>

<p>In the later tutorials, we will learn about the collections framework (its interfaces and classes) in detail with the help of examples.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#interfaces">Interfaces of Collections FrameWork</a></li>
<li><a href="#collection-interface">Java Collection Interface</a></li>
<li><a href="#subinterfaces">Interfaces of the Collections Framework</a></li>
<li><a href="#why">Why the Collections Framework?</a></li>
</ul>
</div></div></div>                          </div>
                   </div>
                   <div id="collection-interface">
                    
            <div class="editor-contents">
                <h1>Java Collection Interface</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1577" class="node node-java-tutorial clearfix" about="/java-programming/collection-interface" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Collection Interface" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <code>Collection</code> interface is the root interface of the Java collections framework.</p>

<p>There is no direct implementation of this interface. However, it is implemented through its subinterfaces like <code>List</code>, <code>Set</code>, and <code>Queue</code>.</p>

<p>For example, the <code>ArrayList</code> class implements the <code>List</code> interface which is a subinterface of the <code>Collection</code> Interface.</p>

<figure><img src="/sites/tutorial2program/files/Java-collection-interface.png" title="" alt="Java Collection Interface and its subinterfaces." width="450" height="269">
</figure>
<hr>
<h2 id="subinterfaces">Subinterfaces of Collection</h2>

<p>As mentioned above, the <code>Collection</code> interface includes subinterfaces that are implemented by various classes in Java.</p>

<h3>1. List Interface</h3>

<p>The <code>List</code> interface is an ordered collection that allows us to add and remove elements like an <a href="/java-programming/arrays">array</a>. To learn more, visit: <a href="/java-programming/list">Java List Interface</a>.</p>

<h3>2. Set Interface</h3>

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
</div><div class="clearfix"></div><p>The <code>Set</code> interface allows us to store elements in different sets similar to the set in mathematics. It cannot have duplicate elements. To learn more, visit: <a href="/java-programming/set">Java Set Interface</a>.</p>

<h3>3. Queue Interface</h3>

<p>The <code>Queue</code> interface is used when we want to store and access elements in <strong>First In, First Out(FIFO)</strong> manner. To learn more, visit: <a href="/java-programming/queue">Java Queue Interface</a>.</p>

<hr>
<h2 id="methods">Methods of Collection</h2>

<p>The <code>Collection</code> interface includes various methods that can be used to perform different operations on objects. These methods are available in all its subinterfaces.</p>

<ul>
<li><code>add()</code> - inserts the specified element to the collection</li>
<li><code>size()</code> - returns the size of the collection</li>
<li><code>remove()</code> - removes the specified element from the collection</li>
<li><code>iterator()</code> - returns an iterator to access elements of the collection</li>
<li><code>addAll()</code> - adds all the elements of a specified collection to the collection</li>
<li><code>removeAll()</code> - removes all the elements of the specified collection from the collection</li>
<li><code>clear()</code> - removes all the elements of the collection</li>
</ul>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/interfaces">Java Interface</a></li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#subinterfaces">Subinterfaces of Collection</a></li>
<li><a href="#methods">Methods of Collection</a></li>
</ul>
</div></div></div>                          </div>
                   </div>
                   <div id="list1">
                    
            <div class="editor-contents">
                <h1>Java Collection Interface</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1577" class="node node-java-tutorial clearfix" about="/java-programming/collection-interface" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Collection Interface" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <code>Collection</code> interface is the root interface of the Java collections framework.</p>

<p>There is no direct implementation of this interface. However, it is implemented through its subinterfaces like <code>List</code>, <code>Set</code>, and <code>Queue</code>.</p>

<p>For example, the <code>ArrayList</code> class implements the <code>List</code> interface which is a subinterface of the <code>Collection</code> Interface.</p>

<figure><img src="/sites/tutorial2program/files/Java-collection-interface.png" title="" alt="Java Collection Interface and its subinterfaces." width="450" height="269">
</figure>
<hr>
<h2 id="subinterfaces">Subinterfaces of Collection</h2>

<p>As mentioned above, the <code>Collection</code> interface includes subinterfaces that are implemented by various classes in Java.</p>

<h3>1. List Interface</h3>

<p>The <code>List</code> interface is an ordered collection that allows us to add and remove elements like an <a href="/java-programming/arrays">array</a>. To learn more, visit: <a href="/java-programming/list">Java List Interface</a>.</p>

<h3>2. Set Interface</h3>

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
</div><div class="clearfix"></div><p>The <code>Set</code> interface allows us to store elements in different sets similar to the set in mathematics. It cannot have duplicate elements. To learn more, visit: <a href="/java-programming/set">Java Set Interface</a>.</p>

<h3>3. Queue Interface</h3>

<p>The <code>Queue</code> interface is used when we want to store and access elements in <strong>First In, First Out(FIFO)</strong> manner. To learn more, visit: <a href="/java-programming/queue">Java Queue Interface</a>.</p>

<hr>
<h2 id="methods">Methods of Collection</h2>

<p>The <code>Collection</code> interface includes various methods that can be used to perform different operations on objects. These methods are available in all its subinterfaces.</p>

<ul>
<li><code>add()</code> - inserts the specified element to the collection</li>
<li><code>size()</code> - returns the size of the collection</li>
<li><code>remove()</code> - removes the specified element from the collection</li>
<li><code>iterator()</code> - returns an iterator to access elements of the collection</li>
<li><code>addAll()</code> - adds all the elements of a specified collection to the collection</li>
<li><code>removeAll()</code> - removes all the elements of the specified collection from the collection</li>
<li><code>clear()</code> - removes all the elements of the collection</li>
</ul>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/interfaces">Java Interface</a></li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#subinterfaces">Subinterfaces of Collection</a></li>
<li><a href="#methods">Methods of Collection</a></li>
</ul>
</div></div></div>                          </div>
                   </div>
                   <div id="arraylist">
                    
            <div class="editor-contents">
                <h1>Java ArrayList</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1536" class="node node-java-tutorial clearfix" about="/java-programming/arraylist" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java ArrayList" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">In Java, we use the <code>ArrayList</code> class to implement the functionality of <strong>resizable-arrays</strong>.</p>

<p>It implements the <a href="https://www.programiz.com/java-programming/list" title="Java List">List</a> interface of the <a href="/java-programming/collections"> collections framework </a>.</p>

<figure><img src="/sites/tutorial2program/files/java-arraylist-implements-list.png" title="Java ArrayList Implementation" alt="The List interface extends the Collection interface and the ArrayList class implements List." width="200" height="301">
<figcaption>Java ArrayList Implementation</figcaption></figure>
<hr>
<h2>Java ArrayList Vs Array</h2>

<p>In Java, we need to declare the size of an <a href="https://www.programiz.com/java-programming/arrays" title="Java Array">array</a> before we can use it. Once the size of an array is declared, it's hard to change it.</p>

<p>To handle this issue, we can use the <code>ArrayList</code> class. It allows us to create resizable arrays.</p>

<p>Unlike arrays, arraylists can automatically adjust their capacity when we add or remove elements from them. Hence, arraylists are also known as <strong>dynamic arrays</strong>.</p>

<hr>
<h2 id="create">Creating an ArrayList</h2>

<p>Before using <code>ArrayList</code>, we need to import the <code>java.util.ArrayList</code> package first. Here is how we can create arraylists in Java:</p>

<pre>
<code>ArrayList&lt;Type&gt; arrayList= new ArrayList&lt;&gt;();</code></pre>

<p>Here, <var>Type</var> indicates the type of an arraylist. For example,</p>

<pre>
<code>// create Integer type arraylist
ArrayList&lt;Integer&gt; arrayList = new ArrayList&lt;&gt;();

// create String type arraylist
ArrayList&lt;String&gt; arrayList = new ArrayList&lt;&gt;();</code></pre>

<p>In the above program, we have used <code>Integer</code> not int. It is because we cannot use primitive types while creating an arraylist. Instead, we have to use the corresponding wrapper classes.</p>

<p>Here, <code>Integer</code> is the corresponding wrapper class of <code>int</code>. To learn more, visit the <a href="/java-programming/wrapper">Java wrapper class</a>.</p>

<hr>
<h3 id="example">Example: Create ArrayList in Java</h3>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args){

<div class="line-highlight">    // create ArrayList
ArrayList&lt;String&gt; languages = new ArrayList&lt;&gt;();</div>

// Add elements to ArrayList
languages.add("Java");
languages.add("Python");
languages.add("Swift");
System.out.println("ArrayList: " + languages);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [Java, Python, Swift]</samp></pre>

<p>In the above example, we have created an <code>ArrayList</code> named <var>languages</var>.</p>

<p>Here, we have used the <code>add()</code> method to add elements to the arraylist. We will learn more about the <code>add()</code> method later in this tutorial.</p>

<hr>
<h2>Basic Operations on ArrayList</h2>

<p>The <code>ArrayList</code> class provides various methods to perform different operations on arraylists. We will look at some commonly used arraylist operations in this tutorial:</p>

<ul>
<li>Add elements</li>
<li>Access elements</li>
<li>Change elements</li>
<li>Remove elements</li>
</ul>

<hr>
<h3 id="add-element">1. Add Elements to an ArrayList</h3>

<p>To add a single element to the arraylist, we use the <code>add()</code> method of the <code>ArrayList</code> class. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args){
// create ArrayList
ArrayList&lt;String&gt; languages = new ArrayList&lt;&gt;();

<div class="line-highlight">    // add() method without the index parameter
languages.add("Java");</div>
languages.add("C");
languages.add("Python");
System.out.println("ArrayList: " + languages);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [Java, C, Python]</samp></pre>

<p>In the above example, we have created an <code>ArrayList</code> named <var>languages</var>. Here, we have used the <code>add()</code> method to add elements to <var>languages</var>.</p>

<p>To learn more, visit the <a href="/java-programming/library/arraylist/add">Java ArrayList add()</a>.</p>

<div class="faq-section"><h2 class="section-title faq-section__title">Other Ways to Add Elements to Arraylist

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">How to add an element at a specified position in an ArrayList?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can also pass an <strong>index number</strong> as an additional parameter to the <code>add()</code> method to add an element at the specified position. For example,</p>

<pre>
<code>// add JavaScript at index 1
languages.add(1, "JavaScript");

// add C++ at index 3
languages.add(3, "C++");</code></pre>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">How to add all elements of a set to an arraylist?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can also add all elements of a collection (set, map) to an arraylist using the <code>addAll()</code> method. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;
import java.util.HashSet;

class Main {
public static void main(String[] args) {

// create a set
HashSet&lt;String&gt; vowels = new HashSet&lt;&gt;();
vowels.add("a");
vowels.add("e");
vowels.add("i");

// create an arraylist
ArrayList&lt;String&gt; alphabets = new ArrayList&lt;&gt;();

<div class="line-highlight">    // add all elements of set to arraylist
alphabets.addAll(vowels);</div>
System.out.println("ArrayList: " + alphabets);
}
}

// Output: ArrayList: [a, e, i]</code></pre>

<p>To learn more, visit <a href="/java-programming/library/arraylist/addall">Java ArrayList addAll()</a>.</p>

</div></div></div></div></div></div></div></div></div>

<hr>
<h3 id="access-element">2. Access ArrayList Elements</h3>

<p>To access an element from the arraylist, we use the <code>get()</code> method of the <code>ArrayList</code> class. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args) {
ArrayList&lt;String&gt; animals = new ArrayList&lt;&gt;();

// add elements in the arraylist
animals.add("Cat");
animals.add("Dog");
animals.add("Cow");
System.out.println("ArrayList: " + animals);

<div class="line-highlight">    // get the element from the arraylist
String str = animals.get(1);</div>
System.out.print("Element at index 1: " + str);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [Cat, Dog, Cow]
Element at index 1: Dog</samp></pre>

<p>In the above example, we have used the <code>get()</code> method with parameter <var>1</var>. Here, the method returns the element at <strong>index 1</strong>.</p>

<p>To learn more, visit the <a href="/java-programming/library/arraylist/get">Java ArrayList get()</a>.</p>

<p>We can also access elements of the <code>ArrayList</code> using the <code>iterator()</code> method. To learn more, visit <a href="/java-programming/library/arraylist/iterator">Java ArrayList iterator()</a>.</p>

<hr>
<h3 id="change-element">3. Change ArrayList Elements</h3>

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
</div><div class="clearfix"></div><p>To change elements of the arraylist, we use the <code>set()</code> method of the <code>ArrayList</code> class. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args) {
ArrayList&lt;String&gt; languages = new ArrayList&lt;&gt;();

// add elements in the array list
languages.add("Java");
languages.add("Kotlin");
languages.add("C++");
System.out.println("ArrayList: " + languages);

<div class="line-highlight">    // change the element of the array list
languages.set(2, "JavaScript");</div>
System.out.println("Modified ArrayList: " + languages);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [Java, Kotlin, C++]
Modified ArrayList: [Java, Kotlin, JavaScript]</samp></pre>

<p>In the above example, we have created an <code>ArrayList</code> named <var>languages</var>. Notice the line,</p>

<pre>
<code>language.set(2, "JavaScript");</code></pre>

<p>Here, the <code>set()</code> method changes the element at <strong>index 2</strong> to <var>JavaScript</var>.</p>

<p>To learn more, visit the <a href="/java-programming/library/arraylist/set">Java ArrayList set()</a>.</p>

<hr>
<h3 id="remove-elements">4. Remove ArrayList Elements</h3>

<p>To remove an element from the arraylist, we can use the <code>remove()</code> method of the <code>ArrayList</code> class. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args) {
ArrayList&lt;String&gt; animals = new ArrayList&lt;&gt;();

// add elements in the array list
animals.add("Dog");
animals.add("Cat");
animals.add("Horse");
System.out.println("ArrayList: " + animals);

<div class="line-highlight">    // remove element from index 2
String str = animals.remove(2);</div>
System.out.println("Updated ArrayList: " + animals);
System.out.println("Removed Element: " + str);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [Dog, Cat, Horse]
Updated ArrayList: [Dog, Cat]
Removed Element: Horse</samp></pre>

<p>Here, the <code>remove()</code> method takes the <strong>index number</strong> as the parameter. And, removes the element specified by the <strong>index number</strong>.</p>

<p>To learn more, visit the <a href="/java-programming/library/arraylist/remove">Java ArrayList remove()</a>.</p>

<p>We can also remove all the elements from the arraylist at once. To learn more, visit</p>

<ul>
<li><a href="/java-programming/library/arraylist/removeall">Java ArrayList removeAll()</a></li>
<li><a href="/java-programming/library/arraylist/clear">Java ArrayList clear()</a></li>
</ul>

<hr>
<h2 id="methods">Methods of ArrayList Class</h2>

<p>In the previous section, we have learned about the <code>add()</code>, <code>get()</code>, <code>set()</code>, and <code>remove()</code> method of the <code>ArrayList</code> class.</p>

<p>Besides those basic methods, here are some more <code>ArrayList</code> methods that are commonly used.</p>

<div class="table-responsive">
<table>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><a href="/java-programming/library/arraylist/size">size()</a></td>
<td>Returns the length of the arraylist.</td>
</tr>
<tr>
<td><a href="/java-programming/library/arraylist/sort">sort()</a></td>
<td>Sort the arraylist elements.</td>
</tr>
<tr>
<td><a href="/java-programming/library/arraylist/clone">clone()</a></td>
<td>Creates a new arraylist with the same element, size, and capacity.</td>
</tr>
<tr>
<td><a href="/java-programming/library/arraylist/contains">contains()</a></td>
<td>Searches the arraylist for the specified element and returns a boolean result.</td>
</tr>
<tr>
<td><a href="/java-programming/library/arraylist/ensurecapacity">ensureCapacity()</a></td>
<td>Specifies the total element the arraylist can contain.</td>
</tr>
<tr>
<td><a href="/java-programming/library/arraylist/isempty">isEmpty()</a></td>
<td>Checks if the arraylist is empty.</td>
</tr>
<tr>
<td><a href="/java-programming/library/arraylist/indexof">indexOf()</a></td>
<td>Searches a specified element in an arraylist and returns the index of the element.</td>
</tr>
</table>
</div>

<p>If you want to learn about all the different methods of arraylist, visit <a href="/java-programming/library/arraylist">Java ArrayList methods</a>.</p>

<hr>
<h2 id="loop">Iterate through an ArrayList</h2>

<p>We can use the <a href="/java-programming/enhanced-for-loop">Java for-each loop</a> to loop through each element of the arraylist. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args) {

// creating an array list
ArrayList&lt;String&gt; animals = new ArrayList&lt;&gt;();
animals.add("Cow");
animals.add("Cat");
animals.add("Dog");
System.out.println("ArrayList: " + animals);

// iterate using for-each loop
System.out.println("Accessing individual elements:  ");

<div class="line-highlight">    for (String language : animals) {
System.out.print(language);
System.out.print(", ");
}</div>
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [Cow, Cat, Dog]
Accessing individual elements:  
Cow, Cat, Dog,</samp></pre>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">Frequently Asked Questions

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">What is the difference between Java ArrayList and LinkedList?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Some of the major differences between <code>ArrayList</code> and <a href="/java-programming/linkedlist" title="Java LinkedList">LinkedList</a> in Java are:</p>

<div class="table-responsive">
<table>
<tr>
<td><strong>ArrayList</strong></td>
<td><strong>LinkedList</strong></td>
</tr>
<tr>
<td>Implements <code>List</code> interface</td>
<td>Implements <code>List</code>, <code>Queue</code>, and <code>Deque</code> interfaces.</td>
</tr>
<tr>
<td>Stores a single value.</td>
<td>Stores 3 values: data, previous and next address</td>
</tr>
<tr>
<td>Provides the functionality of a resizable array.</td>
<td>Provides the functionality of doubly-linked list</td>
</tr>
</table>
</div>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">How to convert an ArrayList to Array?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can convert the <code>ArrayList</code> into an array using the <code>toArray()</code> method. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args) {
ArrayList&lt;String&gt; languages = new ArrayList&lt;&gt;();

// add elements in the array list
languages.add("Java");
languages.add("Python");
languages.add("C++");
System.out.println("ArrayList: " + languages);

// create a new array of String type
String[] arr = new String[languages.size()];

<div class="line-highlight">    // convert ArrayList into an array
languages.toArray(arr);</div>
System.out.print("Array: ");

// access elements of the array
for (String item : arr) {
System.out.print(item + ", ");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [Java, Python, C++]
Array: Java, Python, C++, </samp></pre>

<p>In the above example, the <code>toArray()</code> method converts the <var>languages</var> arraylist to an array and stores it in <var>arr</var>. To learn more, visit <a href="/java-programming/library/arraylist/toarray">Java ArrayList toArray()</a>.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">How to convert an array to ArrayList?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We use the <code>asList()</code> method of the <code>Arrays</code> class. To use <code>asList()</code>, we must import the <code>java.util.Arrays</code> package first. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;
import java.util.Arrays;

class Main {
public static void main(String[] args) {

// create an array of String type
String[] arr = { "Java", "Python", "C++" };
System.out.print("Array: ");

// print array
for (String str : arr) {
System.out.print(str);
System.out.print(" ");
}

<div class="line-highlight">    // create an ArrayList from an array
ArrayList&lt;String&gt; languages = new ArrayList&lt;&gt;(Arrays.asList(arr));</div>
System.out.println("\nArrayList: " + languages);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Array: Java Python C++        
ArrayList: [Java, Python, C++]</samp></pre>

<p>In the above program, we first created an array <code>arr</code> of the <code>String</code> type. Notice the expression,</p>

<pre>
<code>Arrays.asList(arr)</code></pre>

<p>Here, the <code>asList()</code> method converts the array into an arraylist.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">How to create and initialize an ArrayList in a single line?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We use the <code>Arrays.asList()</code> method to create and initialize an arraylist in a single line. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;
import java.util.Arrays;

class Main {
public static void main(String[] args) {

<div class="line-highlight">    // create and initialize ArrayList
ArrayList&lt;String&gt; languages = new ArrayList&lt;&gt;(Arrays.asList("Java", "Python", "C"));</div>
System.out.println("ArrayList: " + languages);

}
}

// Output: ArrayList: [Java, Python, C]</code></pre>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">How to convert an ArrayList to String?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We use the <code>toString()</code> method of the <code>ArrayList</code> class to convert an arraylist into a <a href="/java-programming/string" title="Java String">string</a>. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args) {
ArrayList&lt;String&gt; languages = new ArrayList&lt;&gt;();

// add elements in the ArrayList
languages.add("Java");
languages.add("Python");
languages.add("Kotlin");
System.out.println("ArrayList: " + languages);

<div class="line-highlight">    // convert ArrayList into a String
String str = languages.toString();</div>
System.out.println("String: " + str);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [Java, Python, Kotlin]
String: [Java, Python, Kotlin]</samp></pre>

<p>Here, the <code>toString()</code> method converts the whole arraylist into a single string. To learn more, visit <a href="/java-programming/library/arraylist/tostring">Java ArrayList toString()</a>.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">How to create an arraylist using the List interface?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>We can also create an arraylist using the List interface. It's because the ArrayList class implements the List interface. Let's see an example,</p>

<pre class="java-exec">
<code>import java.util.ArrayList;
import java.util.List;

class Main {
public static void main(String[] args) {

<div class="line-highlight">    // create arraylist using List
List&lt;String&gt; languages = new ArrayList&lt;&gt;();</div>
languages.add("Java");
languages.add("Python");
languages.add("C");

System.out.println("ArrayList: " + languages);
}
}

// Output: ArrayList: [Java, Python, C]</code></pre>

</div></div></div></div></div></div></div></div></div>  </div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Creating an ArrayList</a></li>
<li><a href="#example">Example: Create ArrayList in Java</a></li>
<li><a href="#add-element">Add Elements to an ArrayList</a></li>
<li><a href="#access-element">Access ArrayList Elements</a></li>
<li><a href="#change-element">Change ArrayList Elements</a></li>
<li><a href="#remove-elements">Remove ArrayList Elements</a></li>
<li><a href="#methods">Methods of ArrayList Class</a></li>
<li><a href="#loop">Iterate through an ArrayList</a></li>
</ul>
</div></div></div>                          </div>
                   </div>
                   <div id="vector">
                    
            <div class="editor-contents">
                <h1>Java Vector</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1541" class="node node-java-tutorial clearfix" about="/java-programming/vector" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Vector" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <code>Vector</code> class is an implementation of the <a href="/java-programming/list">List</a> interface that allows us to create resizable-arrays similar to the <a href="/java-programming/arraylist">ArrayList</a> class.</p>

<hr>
<h2 id="vs-arraylist">Java Vector vs. ArrayList</h2>

<p>In Java, both <code>ArrayList</code> and <code>Vector</code> implements the <code>List</code> interface and provides the same functionalities. However, there exist some differences between them.</p>

<p>The <code>Vector</code> class synchronizes each individual operation. This means whenever we want to perform some operation on vectors, the <code>Vector</code> class automatically applies a lock to that operation.</p>

<p>It is because when one thread is accessing a vector, and at the same time another thread tries to access it, an exception called <code>ConcurrentModificationException</code> is generated. Hence, this continuous use of lock for each operation makes vectors less efficient.</p>

<p>However, in array lists, methods are not synchronized. Instead, it uses the <code>Collections.synchronizedList()</code> method that synchronizes the list as a whole.</p>

<p class="note-tip"><strong>Note:</strong> It is recommended to use <code>ArrayList</code> in place of <code>Vector</code> because vectors less efficient.</p>

<hr>
<h2 id="create">Creating a Vector</h2>

<p>Here is how we can create vectors in Java.</p>

<pre>
<code>Vector&lt;Type&gt; vector = new Vector&lt;&gt;();</code></pre>

<p>Here, <var>Type</var> indicates the type of a <a href="/java-programming/linkedlist">linked list</a>. For example,</p>

<pre>
<code>// create Integer type linked list
Vector&lt;Integer&gt; vector= new Vector&lt;&gt;();

// create String type linked list
Vector&lt;String&gt; vector= new Vector&lt;&gt;();</code></pre>

<hr>
<h2>Methods of Vector</h2>

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
</div><div class="clearfix"></div><p>The <code>Vector</code> class also provides the resizable-array implementations of the <code>List</code> interface (similar to the <code>ArrayList</code> class). Some of the <code>Vector</code> methods are:</p>

<hr>
<h2 id="add-elements">Add Elements to Vector</h2>

<ul>
<li><code>add(element)</code> - adds an element to vectors</li>
<li><code>add(index, element)</code> - adds an element to the specified position</li>
<li><code>addAll(vector)</code> - adds all elements of a vector to another vector</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.Vector;

class Main {
public static void main(String[] args) {
Vector&lt;String&gt; mammals= new Vector&lt;&gt;();

// Using the add() method
mammals.add("Dog");
mammals.add("Horse");

// Using index number
mammals.add(2, "Cat");
System.out.println("Vector: " + mammals);

// Using addAll()
Vector&lt;String&gt; animals = new Vector&lt;&gt;();
animals.add("Crocodile");

animals.addAll(mammals);
System.out.println("New Vector: " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Vector: [Dog, Horse, Cat]
New Vector: [Crocodile, Dog, Horse, Cat]</samp></pre>

<hr>
<h2 id="access">Access Vector Elements</h2>

<ul>
<li><code>get(index)</code> - returns an element specified by the index</li>
<li><code>iterator()</code> - returns an <a href="/java-programming/iterator">iterator</a> object to sequentially access vector elements</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.Iterator;
import java.util.Vector;

class Main {
public static void main(String[] args) {
Vector&lt;String&gt; animals= new Vector&lt;&gt;();
animals.add("Dog");
animals.add("Horse");
animals.add("Cat");

// Using get()
String element = animals.get(2);
System.out.println("Element at index 2: " + element);

// Using iterator()
Iterator&lt;String&gt; iterate = animals.iterator();
System.out.print("Vector: ");
while(iterate.hasNext()) {
System.out.print(iterate.next());
System.out.print(", ");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Element at index 2: Cat
Vector: Dog, Horse, Cat,</samp></pre>

<hr>
<h2 id="remove">Remove Vector Elements</h2>

<ul>
<li><code>remove(index)</code> - removes an element from specified position</li>
<li><code>removeAll()</code> - removes all the elements</li>
<li><code>clear()</code> - removes all elements. It is more efficient than <code>removeAll()</code></li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.Vector;

class Main {
public static void main(String[] args) {
Vector&lt;String&gt; animals= new Vector&lt;&gt;();
animals.add("Dog");
animals.add("Horse");
animals.add("Cat");

System.out.println("Initial Vector: " + animals);

// Using remove()
String element = animals.remove(1);
System.out.println("Removed Element: " + element);
System.out.println("New Vector: " + animals);

// Using clear()
animals.clear();
System.out.println("Vector after clear(): " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Initial Vector: [Dog, Horse, Cat]
Removed Element: Horse
New Vector: [Dog, Cat]
Vector after clear(): []</samp></pre>

<hr>
<h2 id="other-methods">Others Vector Methods</h2>

<div class="table-responsive">
<table>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>set()</code></td>
<td>changes an element of the vector</td>
</tr>
<tr>
<td><code>size()</code></td>
<td>returns the size of the vector</td>
</tr>
<tr>
<td><code>toArray()</code></td>
<td>converts the vector into an array</td>
</tr>
<tr>
<td><code>toString()</code></td>
<td>converts the vector into a String</td>
</tr>
<tr>
<td><code>contains()</code></td>
<td>searches the vector for specified element and returns a boolean result</td>
</tr>
</table>
</div>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#vs-arraylist">Java Vector vs. ArrayList</a></li>
<li><a href="#create">Creating a Vector</a></li>
<li><a href="#add-elements">Add Elements to Vector</a></li>
<li><a href="#access">Access Vector Elements</a></li>
<li><a href="#remove">Remove Vector Elements</a></li>
<li><a href="#other-methods">Others Vector Methods</a></li>
</ul>
</div></div></div>                          </div>
                   </div>
                   <div id="stack-class">
                    <div class="editor-contents">
                        <h1>Java Stack Class</h1>
        
        
                      <!--  <p class="editor-contents__short-description"></p> -->
        
        
        
                          



<div id="node-1543" class="node node-java-tutorial clearfix" about="/java-programming/stack" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Stack Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <a href="/java-programming/collections">Java collections framework</a> has a class named <code>Stack</code> that provides the functionality of the stack data structure.</p>

<p>The <code>Stack</code> class extends the <code>Vector</code> class.</p>

<figure><img src="/sites/tutorial2program/files/java-stack.png" title="Java Stack Class" alt="Java Stack class extending the Vector class" width="200" height="362">
</figure>
<hr>
<h2 id="implementation">Stack Implementation</h2>

<p>In stack, elements are stored and accessed in <strong>Last In First Out</strong> manner. That is, elements are added to the top of the stack and removed from the top of the stack.</p>

<figure><img src="/sites/tutorial2program/files/stack-implementation.png" title="Working of stack data structure" alt="Working of stack data structure" width="450" height="468">
</figure>
<hr>
<h2>Creating a Stack</h2>

<p>In order to create a stack, we must import the <code>java.util.Stack</code> package first. Once we import the package, here is how we can create a stack in Java.</p>

<pre>
<code>Stack&lt;Type&gt; stacks = new Stack&lt;&gt;();</code></pre>

<p>Here, <code>Type</code> indicates the stack's type. For example,</p>

<pre>
<code>// Create Integer type stack
Stack&lt;Integer&gt; stacks = new Stack&lt;&gt;();

// Create String type stack
Stack&lt;String&gt; stacks = new Stack&lt;&gt;();</code></pre>

<hr>
<h2>Stack Methods</h2>

<p>Since <code>Stack</code> extends the <code>Vector</code> class, it inherits all the methods <code>Vector</code>. To learn about different <code>Vector</code> methods, visit <a href="/java-programming/vector">Java Vector Class</a>.</p>

<p>Besides these methods, the <code>Stack</code> class includes 5 more methods that distinguish it from <code>Vector</code>.</p>

<hr>
<h3 id="push">push() Method</h3>

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
</div><div class="clearfix"></div><p>To add an element to the top of the stack, we use the <code>push()</code> method. For example,</p>

<pre class="java-exec">
<code>import java.util.Stack;

class Main {
public static void main(String[] args) {
  Stack&lt;String&gt; animals= new Stack&lt;&gt;();

  // Add elements to Stack
  animals.push("Dog");
  animals.push("Horse");
  animals.push("Cat");

  System.out.println("Stack: " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Stack: [Dog, Horse, Cat]</samp></pre>

<hr>
<h3 id="pop">pop() Method</h3>

<p>To remove an element from the top of the stack, we use the <code>pop()</code> method. For example,</p>

<pre class="java-exec">
<code>import java.util.Stack;

class Main {
public static void main(String[] args) {
  Stack&lt;String&gt; animals= new Stack&lt;&gt;();

  // Add elements to Stack
  animals.push("Dog");
  animals.push("Horse");
  animals.push("Cat");
  System.out.println("Initial Stack: " + animals);

  // Remove element stacks
  String element = animals.pop();
  System.out.println("Removed Element: " + element);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Initial Stack: [Dog, Horse, Cat]
Removed Element: Cat</samp></pre>

<hr>
<h3 id="peek">peek() Method</h3>

<p>The <code>peek()</code> method returns an object from the top of the stack. For example,</p>

<pre class="java-exec">
<code>import java.util.Stack;

class Main {
public static void main(String[] args) {
  Stack&lt;String&gt; animals= new Stack&lt;&gt;();

  // Add elements to Stack
  animals.push("Dog");
  animals.push("Horse");
  animals.push("Cat");
  System.out.println("Stack: " + animals);

  // Access element from the top
  String element = animals.peek();
  System.out.println("Element at top: " + element);

}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Stack: [Dog, Horse, Cat]
Element at top: Cat</samp></pre>

<hr>
<h3 id="search">search() Method</h3>

<p>To search an element in the stack, we use the <code>search()</code> method. It returns the position of the element from the top of the stack. For example,</p>

<pre class="java-exec">
<code>import java.util.Stack;

class Main {
public static void main(String[] args) {
  Stack&lt;String&gt; animals= new Stack&lt;&gt;();

  // Add elements to Stack
  animals.push("Dog");
  animals.push("Horse");
  animals.push("Cat");
  System.out.println("Stack: " + animals);

  // Search an element
  int position = animals.search("Horse");
  System.out.println("Position of Horse: " + position);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Stack: [Dog, Horse, Cat]
Position of Horse: 2</samp></pre>

<hr>
<h3 id="empty">empty() Method</h3>

<p>To check whether a stack is empty or not, we use the <code>empty()</code> method. For example,</p>

<pre class="java-exec">
<code>import java.util.Stack;

class Main {
public static void main(String[] args) {
  Stack&lt;String&gt; animals= new Stack&lt;&gt;();

  // Add elements to Stack
  animals.push("Dog");
  animals.push("Horse");
  animals.push("Cat");
  System.out.println("Stack: " + animals);

  // Check if stack is empty
  boolean result = animals.empty();
  System.out.println("Is the stack empty? " + result);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Stack: [Dog, Horse, Cat]
Is the stack empty? false</samp></pre>

<hr>
<h2 id="deque">Use ArrayDeque Instead of Stack</h2>

<p>The <code>Stack</code> class provides the direct implementation of the stack data structure. However, it is recommended not to use it. Instead, use the <code>ArrayDeque</code> class (implements the <code>Deque</code> interface) to implement the stack data structure in Java.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/arraydeque">Java ArrayDeque</a></li>
<li><a href="https://stackoverflow.com/questions/12524826/why-should-i-use-deque-over-stack">Why use Deque over Stack?</a> <em></em></li>
</ul>

</div>



</div>

            
                        <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
  <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#implementation">Stack Implementation</a></li>
<li><a href="#push">push() Method</a></li>
<li><a href="#pop">pop() Method</a></li>
<li><a href="#peek">peek() Method</a></li>
<li><a href="#search">search() Method</a></li>
<li><a href="#empty">empty() Method</a></li>
<li><a href="#deque">Use Deque over Stack</a></li>
</ul>
</div></div></div>                          </div>
                   </div>
                </section>
                <section id="queue">
                    <div id="queue-interface">
                        
            <div class="editor-contents">
                <h1>Java Queue Interface</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1544" class="node node-java-tutorial clearfix" about="/java-programming/queue" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Queue Interface" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <code>Queue</code> interface of the Java <a href="/java-programming/collections">collections framework</a> provides the functionality of the queue data structure. It extends the <code>Collection</code> interface.</p>

<hr>
<h2 id="classes">Classes that Implement Queue</h2>

<p>Since the <code>Queue</code> is an <a href="/java-programming/interfaces">interface</a>, we cannot provide the direct implementation of it.</p>

<p>In order to use the functionalities of <code>Queue</code>, we need to use classes that implement it:</p>

<ul>
<li><a href="/java-programming/arraydeque">ArrayDeque</a></li>
<li><a href="/java-programming/linkedlist">LinkedList</a></li>
<li><a href="/java-programming/priorityqueue">PriorityQueue</a></li>
</ul>

<figure><img src="/sites/tutorial2program/files/queue-interface.png" title="" alt="ArrayDeque, LinkedList and PriorityQueue implements the Queue interface in Java." width="500" height="203">
</figure>
<hr>
<h2>Interfaces that extend Queue</h2>

<p>The <code>Queue</code> interface is also extended by various subinterfaces:</p>

<ul>
<li><code>Deque</code></li>
<li><code>BlockingQueue</code></li>
<li><code>BlockingDeque</code></li>
</ul>

<figure><img src="/sites/tutorial2program/files/queue-subinterfaces.png" title="" alt="Deque, BlockingQueue and BlockingDeque extends the the Queue interface." width="500" height="181">
</figure>
<hr>
<h2 id="working">Working of Queue Data Structure</h2>

<p>In queues, elements are stored and accessed in <strong>First In, First Out</strong> manner. That is, elements are <strong>added from the behind</strong> and <strong>removed from the front</strong>.</p>

<figure><img src="/sites/tutorial2program/files/queue-implementation.png" title="" alt="Working of queue data structure: first in first out." width="550" height="153">
</figure>
<hr>
<h2 id="use">How to use Queue?</h2>

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
</div><div class="clearfix"></div><p>In Java, we must import <code>java.util.Queue</code> package in order to use <code>Queue</code>.</p>

<pre>
<code>// LinkedList implementation of Queue
Queue&lt;String&gt; animal1 = new LinkedList&lt;&gt;();

// Array implementation of Queue
Queue&lt;String&gt; animal2 = new ArrayDeque&lt;&gt;();

// Priority Queue implementation of Queue
Queue&lt;String&gt; animal 3 = new PriorityQueue&lt;&gt;();</code></pre>

<p>Here, we have created objects <var>animal1</var>, <var>animal2</var> and <var>animal3</var> of classes <code>LinkedList</code>, <code>ArrayDeque</code> and <code>PriorityQueue</code> respectively. These objects can use the functionalities of the <code>Queue</code> interface.</p>

<hr>
<h2 id="methods">Methods of Queue</h2>

<p>The <code>Queue</code> interface includes all the methods of the <code>Collection</code> interface. It is because <code>Collection</code> is the super interface of <code>Queue</code>.</p>

<p>Some of the commonly used methods of the <code>Queue</code> interface are:</p>

<ul>
<li><strong>add()</strong> - Inserts the specified element into the queue. If the task is successful, <code>add()</code> returns <code>true</code>, if not it throws an <a href="/java-programming/exceptions">exception</a>.</li>
<li><strong>offer()</strong> - Inserts the specified element into the queue. If the task is successful, <code>offer()</code> returns <code>true</code>, if not it returns <code>false</code>.</li>
<li><strong>element()</strong> - Returns the head of the queue. Throws an exception if the queue is empty.</li>
<li><strong>peek()</strong> - Returns the head of the queue. Returns <code>null</code> if the queue is empty.</li>
<li><strong>remove()</strong> - Returns and removes the head of the queue. Throws an exception if the queue is empty.</li>
<li><strong>poll()</strong> - Returns and removes the head of the queue. Returns <code>null</code> if the queue is empty.</li>
</ul>

<h2 id="implementation-classes">Implementation of the Queue Interface</h2>

<p><strong>1. Implementing the LinkedList Class</strong> </p>

<pre class="java-exec">
<code>import java.util.Queue;
import java.util.LinkedList;

class Main {

public static void main(String[] args) {
// Creating Queue using the LinkedList class
Queue&lt;Integer&gt; numbers = new LinkedList&lt;&gt;();

// offer elements to the Queue
numbers.offer(1);
numbers.offer(2);
numbers.offer(3);
System.out.println("Queue: " + numbers);

// Access elements of the Queue
int accessedNumber = numbers.peek();
System.out.println("Accessed Element: " + accessedNumber);

// Remove elements from the Queue
int removedNumber = numbers.poll();
System.out.println("Removed Element: " + removedNumber);

System.out.println("Updated Queue: " + numbers);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Queue: [1, 2, 3]
Accessed Element: 1
Removed Element: 1
Updated Queue: [2, 3]</samp></pre>

<p>To learn more, visit Java LinkedList.</p>

<p><strong>2. Implementing the PriorityQueue Class</strong></p>

<pre class="java-exec">
<code>import java.util.Queue;
import java.util.PriorityQueue;

class Main {

public static void main(String[] args) {
// Creating Queue using the PriorityQueue class
Queue&lt;Integer&gt; numbers = new PriorityQueue&lt;&gt;();

// offer elements to the Queue
numbers.offer(5);
numbers.offer(1);
numbers.offer(2);
System.out.println("Queue: " + numbers);

// Access elements of the Queue
int accessedNumber = numbers.peek();
System.out.println("Accessed Element: " + accessedNumber);

// Remove elements from the Queue
int removedNumber = numbers.poll();
System.out.println("Removed Element: " + removedNumber);

System.out.println("Updated Queue: " + numbers);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Queue: [1, 5, 2]
Accessed Element: 1
Removed Element: 1
Updated Queue: [2, 5]</samp></pre>

<p>To learn more, visit <a href="https://www.programiz.com/java-programming/priorityqueue">Java PriorityQueue</a>.</p>

<hr>
<p>In the next tutorials, we will learn about different subinterfaces of the <code>Queue</code> interface and its implementation in detail.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#classes">Classes that Implement Queue</a></li>
<li><a href="#working">Working of Queue Data Structure</a></li>
<li><a href="#use">How to use Queue?</a></li>
<li><a href="#methods">Methods of Queue</a></li>
<li><a href="#implementation-classes">Implementation of the Queue Interface </a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="priporityQueue">
                        
            <div class="editor-contents">
                <h1>Java PriorityQueue</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1576" class="node node-java-tutorial clearfix" about="/java-programming/priorityqueue" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java PriorityQueue" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <code>PriorityQueue</code> class provides the functionality of the <a href="/dsa/heap-data-structure">heap data structure</a>.</p>

<p>It implements the <a href="/java-programming/queue">Queue interface</a>.</p>

<figure><img src="/sites/tutorial2program/files/java-priorityqueue-implementation.png" title="" alt="The Java PriorityQueue class implements the Queue interface." width="200" height="300">
</figure>
<p>Unlike normal queues, priority queue elements are retrieved in sorted order.</p>

<p>Suppose, we want to retrieve elements in the ascending order. In this case, the head of the priority queue will be the smallest element. Once this element is retrieved, the next smallest element will be the head of the queue.</p>

<p>It is important to note that the elements of a priority queue may not be sorted. However, elements are always retrieved in sorted order.</p>

<hr>
<h2 id="create">Creating PriorityQueue</h2>

<p>In order to create a priority queue, we must import the <code>java.util.PriorityQueue</code> package. Once we import the package, here is how we can create a priority queue in Java.</p>

<pre>
<code>PriorityQueue&lt;Integer&gt; numbers = new PriorityQueue&lt;&gt;();</code></pre>

<p>Here, we have created a priority queue without any arguments. In this case, the head of the priority queue is the smallest element of the queue. And elements are removed in ascending order from the queue.</p>

<p>However, we can customize the ordering of elements with the help of the <code>Comparator</code> interface. We will learn about that later in this tutorial.</p>

<hr>
<h2>Methods of PriorityQueue</h2>

<p>The <code>PriorityQueue</code> class provides the implementation of all the methods present in the <code>Queue</code> interface.</p>

<hr>
<h2 id="insert">Insert Elements to PriorityQueue</h2>

<ul>
<li><code>add()</code> - Inserts the specified element to the queue. If the queue is full, it throws an exception.</li>
<li><code>offer()</code> - Inserts the specified element to the queue. If the queue is full, it returns <code>false</code>.</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.PriorityQueue;

class Main {
public static void main(String[] args) {

// Creating a priority queue
PriorityQueue&lt;Integer&gt; numbers = new PriorityQueue&lt;&gt;();

// Using the add() method
numbers.add(4);
numbers.add(2);
System.out.println("PriorityQueue: " + numbers);

// Using the offer() method
numbers.offer(1);
System.out.println("Updated PriorityQueue: " + numbers);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>PriorityQueue: [2, 4]
Updated PriorityQueue: [1, 4, 2]</samp></pre>

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
</div><div class="clearfix"></div><p>Here, we have created a priority queue named <var>numbers</var>. We have inserted 4 and 2 to the queue.</p>

<p>Although 4 is inserted before 2, the head of the queue is 2. It is because the head of the priority queue is the smallest element of the queue.</p>

<p>We have then inserted 1 to the queue. The queue is now rearranged to store the smallest element 1 to the head of the queue.</p>

<hr>
<h2 id="acess">Access PriorityQueue Elements</h2>

<p>To access elements from a priority queue, we can use the <code>peek()</code> method. This method returns the head of the queue. For example,</p>

<pre class="java-exec">
<code>import java.util.PriorityQueue;

class Main {
public static void main(String[] args) {

// Creating a priority queue
PriorityQueue&lt;Integer&gt; numbers = new PriorityQueue&lt;&gt;();
numbers.add(4);
numbers.add(2);
numbers.add(1);
System.out.println("PriorityQueue: " + numbers);

// Using the peek() method
int number = numbers.peek();
System.out.println("Accessed Element: " + number);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>PriorityQueue: [1, 4, 2]
Accessed Element: 1</samp></pre>

<hr>
<h2 id="remove">Remove PriorityQueue Elements</h2>

<ul>
<li><code>remove()</code> - removes the specified element from the queue</li>
<li><code>poll()</code> - returns and removes the head of the queue</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.PriorityQueue;

class Main {
public static void main(String[] args) {

// Creating a priority queue
PriorityQueue&lt;Integer&gt; numbers = new PriorityQueue&lt;&gt;();
numbers.add(4);
numbers.add(2);
numbers.add(1);
System.out.println("PriorityQueue: " + numbers);

// Using the remove() method
boolean result = numbers.remove(2);
System.out.println("Is the element 2 removed? " + result);

// Using the poll() method
int number = numbers.poll();
System.out.println("Removed Element Using poll(): " + number);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>PriorityQueue: [1, 4, 2]
Is the element 2 removed? true
Removed Element Using poll(): 1</samp></pre>

<hr>
<h2 id="iterate">Iterating Over a PriorityQueue</h2>

<p>To iterate over the elements of a priority queue, we can use the <a href="https://programiz.com/java-programming/priorityqueue">iterator()</a> method. In order to use this method, we must import the <code>java.util.Iterator</code> package. For example,</p>

<pre class="java-exec">
<code>import java.util.PriorityQueue;
import java.util.Iterator;

class Main {
public static void main(String[] args) {

// Creating a priority queue
PriorityQueue&lt;Integer&gt; numbers = new PriorityQueue&lt;&gt;();
numbers.add(4);
numbers.add(2);
numbers.add(1);
System.out.print("PriorityQueue using iterator(): ");

//Using the iterator() method
Iterator&lt;Integer&gt; iterate = numbers.iterator();
while(iterate.hasNext()) {
System.out.print(iterate.next());
System.out.print(", ");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>PriorityQueue using iterator(): 1, 4, 2,</samp></pre>

<hr>
<h2>Other PriorityQueue Methods</h2>

<div class="table-responsive">
<table>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>contains(element)</code></td>
<td>Searches the priority queue for the specified element. If the element is found, it returns <code>true</code>, if not it returns <code>false</code>.</td>
</tr>
<tr>
<td><code>size()</code></td>
<td>Returns the length of the priority queue.</td>
</tr>
<tr>
<td><code>toArray()</code></td>
<td>Converts a priority queue to an array and returns it.</td>
</tr>
</table>
</div>

<hr>
<h2 id="comparator">PriorityQueue Comparator</h2>

<p>In all the examples above, priority queue elements are retrieved in the natural order (ascending order). However, we can customize this ordering.</p>

<p>For this, we need to create our own comparator class that implements the <code>Comparator</code> interface. For example,</p>

<pre class="java-exec">
<code>import java.util.PriorityQueue;
import java.util.Comparator;
class Main {
public static void main(String[] args) {

// Creating a priority queue
PriorityQueue&lt;Integer&gt; numbers = new PriorityQueue&lt;&gt;(new CustomComparator());
numbers.add(4);
numbers.add(2);
numbers.add(1);
numbers.add(3);
System.out.print("PriorityQueue: " + numbers);
}
}

class CustomComparator implements Comparator&lt;Integer&gt; {

@Override
public int compare(Integer number1, Integer number2) {
int value =  number1.compareTo(number2);
// elements are sorted in reverse order
if (value &gt; 0) {
return -1;
}
else if (value &lt; 0) {
return 1;
}
else {
return 0;
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>PriorityQueue: [4, 3, 1, 2]</samp></pre>

<p>In the above example, we have created a priority queue passing <var>CustomComparator</var> class as an argument.</p>

<p>The <var>CustomComparator</var> class implements the <code>Comparator</code> interface.</p>

<p>We then override the <code>compare()</code> method. The method now causes the head of the element to be the largest number.</p>

<p>To learn more about the comparator, visit <a href="https://docs.oracle.com/javase/8/docs/api/java/util/Comparator.html">Java Comparator</a>.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/examples/queue-implementation">Java Program to Implement the queue data structure</a></li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#create">Creating PriorityQueue</a></li>
<li><a href="#insert">Insert Elements to PriorityQueue</a></li>
<li><a href="#acess">Access PriorityQueue Elements</a></li>
<li><a href="#remove">Remove PriorityQueue Elements</a></li>
<li><a href="#iterate">Iterating Over a PriorityQueue</a></li>
<li><a href="#comparator">PriorityQueue Comparator</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="deque-interface">
                        
            <div class="editor-contents">
                <h1>Java Deque Interface</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1545" class="node node-java-tutorial clearfix" about="/java-programming/deque" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Deque Interface" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <code>Deque</code> interface of the Java collections framework provides the functionality of a double-ended queue. It extends the <code>Queue</code> interface.</p>

<hr>
<h2 id="working">Working of Deque</h2>

<p>In a regular queue, elements are added from the rear and removed from the front. However, in a deque, we can <strong>insert and remove elements from both front and rear</strong>.</p>

<figure><img src="/sites/tutorial2program/files/working-of-deque.png" title="" alt="Working of deque (double-ended queue) data structure" width="600" height="138">
</figure>
<hr>
<h2 id="classes">Classes that implement Deque</h2>

<p>In order to use the functionalities of the <code>Deque</code> interface, we need to use classes that implement it:</p>

<ul>
<li><a href="/java-programming/arraydeque">ArrayDeque</a></li>
<li><a href="/java-programming/linkedlist">LinkedList</a></li>
</ul>

<figure><img src="/sites/tutorial2program/files/deque-implemention-classes.png" title="" alt="ArrayDeque and Linkedlist implements Deque" width="400" height="204">
</figure>
<hr>
<h2 id="use">How to use Deque?</h2>

<p>In Java, we must import the <code>java.util.Deque</code> package to use <code>Deque</code>.</p>

<pre>
<code>// Array implementation of Deque
Deque&lt;String&gt; animal1 = new ArrayDeque&lt;&gt;();

// LinkedList implementation of Deque
Deque&lt;String&gt; animal2 = new LinkedList&lt;&gt;();</code></pre>

<p>Here, we have created objects <var>animal1</var> and <var>animal2</var> of classes <var>ArrayDeque</var> and <var>LinkedList</var>, respectively. These objects can use the functionalities of the <code>Deque</code> interface.</p>

<hr>
<h2 id="methods">Methods of Deque</h2>

<p>Since <code>Deque</code> extends the <code>Queue</code> interface, it inherits all the methods of <a href="/java-programming/queue">the Queue interface</a>.</p>

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
</div><div class="clearfix"></div><p>Besides methods available in the <code>Queue</code> interface, the <code>Deque</code> interface also includes the following methods:</p>

<ul>
<li><strong>addFirst()</strong> - Adds the specified element at the beginning of the deque. Throws an <a href="/java-programming/exceptions">exception</a> if the deque is full.</li>
<li><strong>addLast()</strong> - Adds the specified element at the end of the deque. Throws an exception if the deque is full.</li>
<li><strong>offerFirst()</strong> - Adds the specified element at the beginning of the deque. Returns <code>false</code> if the deque is full.</li>
<li><strong>offerLast()</strong> - Adds the specified element at the end of the deque. Returns <code>false</code> if the deque is full.</li>
<li><strong>getFirst()</strong> - Returns the first element of the deque. Throws an exception if the deque is empty.</li>
<li><strong>getLast()</strong> - Returns the last element of the deque. Throws an exception if the deque is empty.</li>
<li><strong>peekFirst()</strong> - Returns the first element of the deque. Returns <code>null</code> if the deque is empty.</li>
<li><strong>peekLast()</strong> - Returns the last element of the deque. Returns <code>null</code> if the deque is empty.</li>
<li><strong>removeFirst()</strong> - Returns and removes the first element of the deque. Throws an exception if the deque is empty.</li>
<li><strong>removeLast()</strong> - Returns and removes the last element of the deque. Throws an exception if the deque is empty.</li>
<li><strong>pollFirst()</strong> - Returns and removes the first element of the deque. Returns <code>null</code> if the deque is empty.</li>
<li><strong>pollLast()</strong> - Returns and removes the last element of the deque. Returns <code>null</code> if the deque is empty.</li>
</ul>

<hr>
<h2 id="stack">Deque as Stack Data Structure</h2>

<p>The <code>Stack</code> class of the <a href="/java-programming/collections">Java Collections framework</a> provides the implementation of the stack.</p>

<p>However, it is recommended to use <code>Deque</code> as a stack instead of <a href="/java-programming/stack">the Stack class</a>. It is because methods of <code>Stack</code> are synchronized.</p>

<p>Here are the methods the <code>Deque</code> interface provides to implement stack:</p>

<ul>
<li><code>push()</code> - adds an element at the beginning of deque</li>
<li><code>pop()</code> - removes an element from the beginning of deque</li>
<li><code>peek()</code> - returns an element from the beginning of deque</li>
</ul>

<hr>
<h2 id="implementation-classes">Implementation of Deque in ArrayDeque Class</h2>

<pre class="java-exec">
<code>import java.util.Deque;
import java.util.ArrayDeque;

class Main {

public static void main(String[] args) {
// Creating Deque using the ArrayDeque class
Deque&lt;Integer&gt; numbers = new ArrayDeque&lt;&gt;();

// add elements to the Deque
numbers.offer(1);
numbers.offerLast(2);
numbers.offerFirst(3);
System.out.println("Deque: " + numbers);

// Access elements of the Deque
int firstElement = numbers.peekFirst();
System.out.println("First Element: " + firstElement);

int lastElement = numbers.peekLast();
System.out.println("Last Element: " + lastElement);

// Remove elements from the Deque
int removedNumber1 = numbers.pollFirst();
System.out.println("Removed First Element: " + removedNumber1);

int removedNumber2 = numbers.pollLast();
System.out.println("Removed Last Element: " + removedNumber2);

System.out.println("Updated Deque: " + numbers);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Deque: [3, 1, 2]
First Element: 3
Last Element: 2
Removed First Element: 3
Removed Last Element: 2
Updated Deque: [1]</samp></pre>

<p>To learn more, visit <a href="/java-programming/arraydeque">Java ArrayDeque</a>.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#working">Working of Deque </a></li>
<li><a href="#classes">Classes that implement Deque </a></li>
<li><a href="#use">How to use Deque? </a></li>
<li><a href="#methods">Methods of Deque </a></li>
<li><a href="#stack">Deque as Stack Data Structure </a></li>
<li><a href="#implementation-classes">Implementation of Deque in ArrayDeque Class</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="linkedlist">
                        
            <div class="editor-contents">
                <h1>Java LinkedList</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1540" class="node node-java-tutorial clearfix" about="/java-programming/linkedlist" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java LinkedList" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>LinkedList</code> class of the <a href="/java-programming/collections">Java collections framework </a> provides the functionality of the linked list data structure (doubly linkedlist).</p>

<figure><img alt="A single node of doubly linkedlist that has 3 fields Prev, Data, and Next." height="184" src="//cdn.programiz.com/sites/tutorial2program/files/java-doubly-linkedlist.png" title="Java Doubly LinkedList " width="360">
<figcaption>Java Doubly LinkedList</figcaption>
</figure>

<p>Each element in a linked list is known as a <strong>node</strong>. It consists of 3 fields:</p>

<ul>
<li><strong>Prev</strong> - stores an address of the previous element in the list. It is <code>null</code> for the first element</li>
<li><strong>Next</strong> - stores an address of the next element in the list. It is <code>null</code> for the last element</li>
<li><strong>Data</strong> - stores the actual data</li>
</ul>

<hr>
<h2 id="create">Creating a Java LinkedList</h2>

<p>Here is how we can create linked lists in Java:</p>

<pre>
<code>LinkedList&lt;Type&gt; linkedList = new LinkedList&lt;&gt;();</code></pre>

<p>Here, <var>Type</var> indicates the type of a linked list. For example,</p>

<pre>
<code>// create Integer type linked list
LinkedList&lt;Integer&gt; linkedList = new LinkedList&lt;&gt;();

// create String type linked list
LinkedList&lt;String&gt; linkedList = new LinkedList&lt;&gt;();</code></pre>

<hr>
<h3>Example: Create LinkedList in Java</h3>

<pre class="java-exec">
<code>import java.util.LinkedList;

class Main {
public static void main(String[] args){

// create linkedlist
LinkedList&lt;String&gt; animals = new LinkedList&lt;&gt;();

// Add elements to LinkedList
animals.add("Dog");
animals.add("Cat");
animals.add("Cow");
System.out.println("LinkedList: " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedList: [Dog, Cat, Cow]</samp></pre>

<p>In the above example, we have created a <code>LinkedList</code> named <var>animals</var>.</p>

<p>Here, we have used the <code>add()</code> method to add elements to the LinkedList. We will learn more about the <code>add()</code> method later in this tutorial.</p>

<hr>
<h2>Working of a Java LinkedList</h2>

<p>Elements in linked lists are not stored in sequence. Instead, they are scattered and connected through links (<strong>Prev</strong> and <strong>Next</strong>).</p>

<figure><img alt="3 linkedlist nodes each connecting to one another using pointers" height="237" src="//cdn.programiz.com/sites/tutorial2program/files/java-linkedlist-implementation.png" title="Java LinkedList Implementation" width="660">
<figcaption>Java LinkedList Implementation</figcaption>
</figure>

<p>Here we have 3 elements in a linked list.</p>

<ul>
<li><var>Dog</var> - it is the first element that holds <var>null</var> as previous address and the address of <var>Cat</var> as the next address</li>
<li><var>Cat</var> - it is the second element that holds an address of <var>Dog</var> as the previous address and the address of <var>Cow</var> as the next address</li>
<li><var>Cow</var> - it is the last element that holds the address of <var>Cat</var> as the previous address and <var>null</var> as the next element</li>
</ul>

<p>To learn more, visit the <a href="/dsa/linked-list" title="LinkedList Data Structure">LinkedList Data Structure</a>.</p>

<hr>
<h2>Methods of Java LinkedList</h2>

<p><code>LinkedList</code> provides various methods that allow us to perform different operations in linked lists. We will look at four commonly used LinkedList Operators in this tutorial:</p>

<ul>
<li>Add elements</li>
<li>Access elements</li>
<li>Change elements</li>
<li>Remove elements</li>
</ul>

<hr>
<h3 id="add">1. Add elements to a LinkedList</h3>

<p>We can use the <code>add()</code> method to add an element (node) at the end of the LinkedList. For example,</p>

<pre class="java-exec">
<code>import java.util.LinkedList;

class Main {
public static void main(String[] args){
// create linkedlist
LinkedList&lt;String&gt; animals = new LinkedList&lt;&gt;();

// add() method without the index parameter
animals.add("Dog");
animals.add("Cat");
animals.add("Cow");
System.out.println("LinkedList: " + animals);

// add() method with the index parameter
animals.add(1, "Horse");
System.out.println("Updated LinkedList: " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedList: [Dog, Cat, Cow]
Updated LinkedList: [Dog, Horse, Cat, Cow]</samp></pre>

<p>In the above example, we have created a LinkedList named <var>animals</var>. Here, we have used the <code>add()</code> method to add elements to <var>animals</var>.</p>

<p>Notice the statement,</p>

<pre>
<code>animals.add(1, "Horse");</code></pre>

<p>Here, we have used the <strong>index number</strong> parameter. It is an optional parameter that specifies the position where the new element is added.</p>

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
</div><div class="clearfix"></div><p>To learn more about adding elements to LinkedList, visit <a href="/java-programming/examples/add-element-to-linkedlist" title="Add elements to LinkedList">Java program to add elements to LinkedList</a>.</p>

<hr>
<h3 id="get">2. Access LinkedList elements</h3>

<p>The <code>get()</code> method of the LinkedList class is used to access an element from the LinkedList. For example,</p>

<pre class="java-exec">
<code>import java.util.LinkedList;

class Main {
public static void main(String[] args) {
LinkedList&lt;String&gt; languages = new LinkedList&lt;&gt;();

// add elements in the linked list
languages.add("Python");
languages.add("Java");
languages.add("JavaScript");
System.out.println("LinkedList: " + languages);

// get the element from the linked list
String str = languages.get(1);
System.out.print("Element at index 1: " + str);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedList: [Python, Java, JavaScript]
Element at index 1: Java</samp></pre>

<p>In the above example, we have used the <code>get()</code> method with parameter <strong>1</strong>. Here, the method returns the element at index <strong>1</strong>.</p>

<p>We can also access elements of the LinkedList using the <code>iterator()</code> and the <code>listIterator()</code> method. To learn more, visit the <a href="/java-programming/examples/access-element-from-linkedlist" title="Access Elements from LinkedList">Java program to access elements of LinkedList</a>.</p>

<hr>
<h3 id="change">3. Change Elements of a LinkedList</h3>

<p>The <code>set()</code> method of <code>LinkedList</code> class is used to change elements of the LinkedList. For example,</p>

<pre class="java-exec">
<code>import java.util.LinkedList;

class Main {
public static void main(String[] args) {
LinkedList&lt;String&gt; languages = new LinkedList&lt;&gt;();

// add elements in the linked list
languages.add("Java");
languages.add("Python");
languages.add("JavaScript");
languages.add("Java");
System.out.println("LinkedList: " + languages);

// change elements at index 3
languages.set(3, "Kotlin");
System.out.println("Updated LinkedList: " + languages);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedList: [Java, Python, JavaScript, Java]
Updated LinkedList: [Java, Python, JavaScript, Kotlin]</samp></pre>

<p>In the above example, we have created a LinkedList named languages. Notice the line,</p>

<pre>
<code>languages.set(3, "Kotlin");</code></pre>

<p>Here, the <code>set()</code> method changes the element at index <strong>3</strong> to <var>Kotlin</var>.</p>

<hr>
<h3 id="remove">4. Remove element from a LinkedList</h3>

<p>The <code>remove()</code> method of the <code>LinkedList</code> class is used to remove an element from the LinkedList. For example,</p>

<pre class="java-exec">
<code>import java.util.LinkedList;

class Main {
public static void main(String[] args) {
LinkedList&lt;String&gt; languages = new LinkedList&lt;&gt;();

// add elements in LinkedList
languages.add("Java");
languages.add("Python");
languages.add("JavaScript");
languages.add("Kotlin");
System.out.println("LinkedList: " + languages);

// remove elements from index 1
String str = languages.remove(1);
System.out.println("Removed Element: " + str);

System.out.println("Updated LinkedList: " + languages);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedList: [Java, Python, JavaScript, Kotlin]
Removed Element: Python
New LinkedList: [Java, JavaScript, Kotlin]</samp></pre>

<p>Here, the <code>remove()</code> method takes the index number as the parameter. And, removes the element specified by the index number.</p>

<p>To learn more about removing elements from the linkedlist, visit the <a href="/java-programming/examples/remove-element-from-linkedlist" title="Remove LinkedList Elements">Java program to remove elements from LinkedList.</a>.</p>

<hr>
<h2>Other Methods</h2>

<div class="table-responsive">
<table>
<tbody>
<tr>
  <th>Methods</th>
  <th>Description</th>
</tr>
<tr>
  <td><code>contains()</code></td>
  <td>checks if the LinkedList contains the element</td>
</tr>
<tr>
  <td><code>indexOf()</code></td>
  <td>returns the index of the first occurrence of the element</td>
</tr>
<tr>
  <td><code>lastIndexOf()</code></td>
  <td>returns the index of the last occurrence of the element</td>
</tr>
<tr>
  <td><code>clear()</code></td>
  <td>removes all the elements of the LinkedList</td>
</tr>
<tr>
  <td><code>iterator()</code></td>
  <td>returns an iterator to iterate over LinkedList</td>
</tr>
</tbody>
</table>
</div>

<hr>
<h2 id="queue-deque">LinkedList as Deque and Queue</h2>

<p>Since the <code>LinkedList</code> class also implements the <a href="/java-programming/queue" title="Java Queue">Queue</a> and the <a href="/java-programming/deque" title="Java Deque">Deque</a> interface, it can implement methods of these interfaces as well. Here are some of the commonly used methods:</p>

<div class="table-responsive">
<table>
<tbody>
<tr>
  <th>Methods</th>
  <th>Descriptions</th>
</tr>
<tr>
  <td><code>addFirst()</code></td>
  <td>adds the specified element at the beginning of the linked list</td>
</tr>
<tr>
  <td><code>addLast()</code></td>
  <td>adds the specified element at the end of the linked list</td>
</tr>
<tr>
  <td><code>getFirst()</code></td>
  <td>returns the first element</td>
</tr>
<tr>
  <td><code>getLast()</code></td>
  <td>returns the last element</td>
</tr>
<tr>
  <td><code>removeFirst()</code></td>
  <td>removes the first element</td>
</tr>
<tr>
  <td><code>removeLast()</code></td>
  <td>removes the last element</td>
</tr>
<tr>
  <td><code>peek()</code></td>
  <td>returns the first element (head) of the linked list</td>
</tr>
<tr>
  <td><code>poll()</code></td>
  <td>returns and removes the first element from the linked list</td>
</tr>
<tr>
  <td><code>offer()</code></td>
  <td>adds the specified element at the end of the linked list</td>
</tr>
</tbody>
</table>
</div>

<h2>Example: Java LinkedList as Queue</h2>

<pre class="java-exec">
<code>import java.util.LinkedList;
import java.util.Queue;

class Main {
public static void main(String[] args) {
Queue&lt;String&gt; languages = new LinkedList&lt;&gt;();

// add elements
languages.add("Python");
languages.add("Java");
languages.add("C");
System.out.println("LinkedList: " + languages);

// access the first element
String str1 = languages.peek();
System.out.println("Accessed Element: " + str1);

// access and remove the first element
String str2 = languages.poll();
System.out.println("Removed Element: " + str2);
System.out.println("LinkedList after poll(): " + languages);

// add element at the end
languages.offer("Swift");
System.out.println("LinkedList after offer(): " + languages);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedList: [Python, Java, C]
Accessed Element: Python
Removed Element: Python
LinkedList after poll(): [Java, C]
LinkedList after offer(): [Java, C, Swift]</samp></pre>

<hr>
<h2>Example: LinkedList as Deque</h2>

<pre class="java-exec">
<code>import java.util.LinkedList;
import java.util.Deque;

class Main {
public static void main(String[] args){
Deque&lt;String&gt; animals = new LinkedList&lt;&gt;();

// add element at the beginning
animals.add("Cow");
System.out.println("LinkedList: " + animals);

animals.addFirst("Dog");
System.out.println("LinkedList after addFirst(): " + animals);

// add elements at the end
animals.addLast("Zebra");
System.out.println("LinkedList after addLast(): " + animals);

// remove the first element
animals.removeFirst();
System.out.println("LinkedList after removeFirst(): " + animals);

// remove the last element
animals.removeLast();
System.out.println("LinkedList after removeLast(): " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedList: [Cow]
LinkedList after addFirst(): [Dog, Cow]
LinkedList after addLast(): [Dog, Cow, Zebra]
LinkedList after removeFirst(): [Cow, Zebra]
LinkedList after removeLast(): [Cow]</samp></pre>

<hr>
<h2 id="iterate">Iterating through LinkedList</h2>

<p>We can use the <a href="/java-programming/enhanced-for-loop">Java for-each loop</a> to iterate through LinkedList. For example,</p>

<pre class="java-exec">
<code>import java.util.LinkedList;

class Main {
public static void main(String[] args) {
// Creating a linked list
LinkedList&lt;String&gt; animals = new LinkedList&lt;&gt;();
animals.add("Cow");
animals.add("Cat");
animals.add("Dog");
System.out.println("LinkedList: " + animals);

// Using forEach loop
System.out.println("Accessing linked list elements:");
for(String animal: animals) {
System.out.print(animal);
System.out.print(", ");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedList: [Cow, Cat, Dog]
Accessing linked list elements:
Cow, Cat, Dog,</samp></pre>

<hr>
<h2 id="linkedlist-vs-arraylist">LinkedList Vs. ArrayList</h2>

<p>Both the <a href="/java-programming/arraylist" title="Java ArrayList">Java ArrayList</a> and <code>LinkedList</code> implements the <code>List</code> interface of the <code>Collections</code> framework. However, there exists some difference between them.</p>

<div class="table-responsive">
<table>
<tbody>
<tr>
  <th>LinkedList</th>
  <th>ArrayList</th>
</tr>
<tr>
  <td>Implements <code>List</code>, <code>Queue</code>, and <code>Deque</code> interfaces.</td>
  <td>Implements <code>List</code> interface.</td>
</tr>
<tr>
  <td>Stores 3 values (<strong>previous address</strong>, <strong>data,</strong> and <strong>next address</strong>) in a single position.</td>
  <td>Stores a single value in a single position.</td>
</tr>
<tr>
  <td>Provides the doubly-linked list implementation.</td>
  <td>Provides a resizable array implementation.</td>
</tr>
<tr>
  <td>Whenever an element is added, <code>prev</code> and <code>next</code> address are changed.</td>
  <td>Whenever an element is added, all elements after that position are shifted.</td>
</tr>
<tr>
  <td>To access an element, we need to iterate from the beginning to the element.</td>
  <td>Can randomly access elements using indexes.</td>
</tr>
</tbody>
</table>
</div>

<hr>
<div class="note-tip">
<p><strong>Note</strong>: We can also create a LinkedList using interfaces in Java. For example,</p>

<pre>
<code>// create linkedlist using List
List&lt;String&gt; animals1 = new LinkedList&lt;&gt;();

// creating linkedlist using Queue
Queue&lt;String&gt; animals2 = new LinkedList&lt;&gt;();

// creating linkedlist using Deque
Deque&lt;String&gt; animals3 = new LinkedList&lt;&gt;();</code></pre>

<p>Here, if the LinkedList is created using one interface, then we cannot use methods provided by other interfaces. That is, <var>animals1</var> cannot use methods specific to <code>Queue</code> and <code>Deque</code> interfaces.</p>
</div>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Java LinkedList</a></li>
<li><a href="#create">Creating a LinkedList</a></li>
<li><a href="#add">Add elements to linkedlist</a></li>
<li><a href="#get">Access elements</a></li>
<li><a href="#change">Change element</a></li>
<li><a href="#remove">Remove element</a></li>
<li><a href="#queue-deque">LinkedList as Queue/Deque</a></li>
<li><a href="#iterate">Iterating through LinkedList</a></li>
<li><a href="#linkedlist-vs-arraylist">LinkedList Vs. ArrayList</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="arraydeque">
                        
            <div class="editor-contents">
                <h1>Java ArrayDeque</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1546" class="node node-java-tutorial clearfix" about="/java-programming/arraydeque" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java ArrayDeque" class="rdf-meta element-hidden"></span>

<div class="content">
<p>In Java, we can use the <code>ArrayDeque</code> class to implement queue and deque data structures using <a href="/java-programming/arrays">arrays</a>.</p>

<hr>
<h2>Interfaces implemented by ArrayDeque</h2>

<p>The <code>ArrayDeque</code> class implements these two interfaces:</p>

<ul>
<li><a href="/java-programming/queue">Java Queue Interface</a></li>
<li><a href="/java-programming/deque">Java Deque Interface</a></li>
</ul>

<figure><img src="/sites/tutorial2program/files/java-arraydeque-class.png" title="" alt="ArrayDeque in Java implements two interfaces: Queue and Deque" width="600" height="190">
</figure>
<hr>
<h2 id="create">Creating ArrayDeque</h2>

<p>In order to create an array deque, we must import the <code>java.util.ArrayDeque</code> package.</p>

<p>Here is how we can create an array deque in Java:</p>

<pre>
<code>ArrayDeque&lt;Type&gt; animal = new ArrayDeque&lt;&gt;();</code></pre>

<p>Here, <var>Type</var> indicates the type of the array deque. For example,</p>

<pre>
<code>// Creating String type ArrayDeque
ArrayDeque&lt;String&gt; animals = new ArrayDeque&lt;&gt;();

// Creating Integer type ArrayDeque
ArrayDeque&lt;Integer&gt; age = new ArrayDeque&lt;&gt;();</code></pre>

<hr>
<h2>Methods of ArrayDeque</h2>

<p>The <code>ArrayDeque</code> class provides implementations for all the methods present in <code>Queue</code> and <code>Deque</code> interface.</p>

<hr>
<h3 id="insert">Insert Elements to Deque</h3>

<p><strong>1. Add elements using add(), addFirst() and addLast()</strong></p>

<ul>
<li><code>add()</code> - inserts the specified element at the end of the array deque</li>
<li><code>addFirst()</code> - inserts the specified element at the beginning of the array deque</li>
<li><code>addLast()</code> - inserts the specified at the end of the array deque (equivalent to <code>add()</code>)</li>
</ul>

<p class="note-tip"><strong>Note:</strong> If the array deque is full, all these methods <code>add()</code>, <code>addFirst()</code> and <code>addLast()</code> throws <code>IllegalStateException</code>.</p>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayDeque;

class Main {
public static void main(String[] args) {
ArrayDeque&lt;String&gt; animals= new ArrayDeque&lt;&gt;();

// Using add()
animals.add("Dog");

// Using addFirst()
animals.addFirst("Cat");

// Using addLast()
animals.addLast("Horse");
System.out.println("ArrayDeque: " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayDeque: [Cat, Dog, Horse]</samp></pre>

<p><strong>2. Insert elements using offer(), offerFirst() and offerLast()</strong></p>

<ul>
<li><code>offer()</code> - inserts the specified element at the end of the array deque</li>
<li><code>offerFirst()</code> - inserts the specified element at the beginning of the array deque</li>
<li><code>offerLast()</code> - inserts the specified element at the end of the array deque</li>
</ul>

<p class="note-tip"><strong>Note:</strong> <code>offer()</code>, <code>offerFirst()</code> and <code>offerLast()</code> returns <code>true</code> if the element is successfully inserted; if the array deque is full, these methods return <code>false</code>.</p>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayDeque;

class Main {
public static void main(String[] args) {
ArrayDeque&lt;String&gt; animals= new ArrayDeque&lt;&gt;();
// Using offer()
animals.offer("Dog");

// Using offerFirst()
animals.offerFirst("Cat");

// Using offerLast()
animals.offerLast("Horse");
System.out.println("ArrayDeque: " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayDeque: [Cat, Dog, Horse]</samp></pre>

<div class="note-tip">
<p><strong>Note:</strong> If the array deque is full</p>

<ul>
<li>the <code>add()</code> method will throw an <a href="/java-programming/exceptions">exception</a></li>
<li>the <code>offer()</code> method returns <code>false</code></li>
</ul>

</div>
<hr>
<h3 id="access">Access ArrayDeque Elements</h3>

<p><strong>1. Access elements using getFirst() and getLast()</strong></p>

<ul>
<li><code>getFirst()</code> - returns the first element of the array deque</li>
<li><code>getLast()</code> - returns the last element of the array deque</li>
</ul>

<p class="note-tip"><strong>Note:</strong> If the array deque is empty, <code>getFirst()</code> and <code>getLast()</code> throws <code>NoSuchElementException</code>.</p>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayDeque;

class Main {
public static void main(String[] args) {
ArrayDeque&lt;String&gt; animals= new ArrayDeque&lt;&gt;();
animals.add("Dog");
animals.add("Cat");
animals.add("Horse");
System.out.println("ArrayDeque: " + animals);

// Get the first element
String firstElement = animals.getFirst();
System.out.println("First Element: " + firstElement);

// Get the last element
String lastElement = animals.getLast();
System.out.println("Last Element: " + lastElement);
}
}</code></pre>

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

<pre>
<samp>ArrayDeque: [Dog, Cat, Horse]
First Element: Dog
Last Element: Horse</samp></pre>

<p><strong>2. Access elements using peek(), peekFirst() and peekLast() method</strong></p>

<ul>
<li><code>peek()</code> - returns the first element of the array deque</li>
<li><code>peekFirst()</code> - returns the first element of the array deque (equivalent to <code>peek()</code>)</li>
<li><code>peekLast()</code> - returns the last element of the array deque</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayDeque;

class Main {
public static void main(String[] args) {
ArrayDeque&lt;String&gt; animals= new ArrayDeque&lt;&gt;();
animals.add("Dog");
animals.add("Cat");
animals.add("Horse");
System.out.println("ArrayDeque: " + animals);

// Using peek()
String element = animals.peek();
System.out.println("Head Element: " + element);

// Using peekFirst()
String firstElement = animals.peekFirst();
System.out.println("First Element: " + firstElement);

// Using peekLast
String lastElement = animals.peekLast();
System.out.println("Last Element: " + lastElement);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayDeque: [Dog, Cat, Horse]
Head Element: Dog
First Element: Dog
Last Element: Horse</samp></pre>

<p class="note-tip"><strong>Note:</strong> If the array deque is empty, <code>peek()</code>, <code>peekFirst()</code> and <code>getLast()</code> throws <code>NoSuchElementException</code>. <strong></strong></p>

<hr>
<h3>Remove ArrayDeque Elements</h3>

<p><strong>1. Remove elements using the remove(), removeFirst(), removeLast() method</strong></p>

<ul>
<li><code>remove()</code> - returns and removes an element from the first element of the array deque</li>
<li><code>remove(element)</code> - returns and removes the specified element from the head of the array deque</li>
<li><code>removeFirst()</code> - returns and removes the first element from the array deque (equivalent to <code>remove()</code>)</li>
<li><code>removeLast()</code> - returns and removes the last element from the array deque</li>
</ul>

<p class="note-tip"><strong>Note:</strong> If the array deque is empty, <code>remove()</code>, <code>removeFirst()</code> and <code>removeLast()</code> method throws an exception. Also, <code>remove(element)</code> throws an exception if the element is not found.</p>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayDeque;

class Main {
public static void main(String[] args) {
ArrayDeque&lt;String&gt; animals= new ArrayDeque&lt;&gt;();
animals.add("Dog");
animals.add("Cat");
animals.add("Cow");
animals.add("Horse");
System.out.println("ArrayDeque: " + animals);

// Using remove()
String element = animals.remove();
System.out.println("Removed Element: " + element);

System.out.println("New ArrayDeque: " + animals);

// Using removeFirst()
String firstElement = animals.removeFirst();
System.out.println("Removed First Element: " + firstElement);

// Using removeLast()
String lastElement = animals.removeLast();
System.out.println("Removed Last Element: " + lastElement);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayDeque: [Dog, Cat, Cow, Horse]
Removed Element: Dog
New ArrayDeque: [Cat, Cow, Horse]
Removed First Element: Cat
Removed Last Element: Horse</samp></pre>

<p><strong>2. Remove elements using the poll(), pollFirst() and pollLast() method</strong></p>

<ul>
<li><code>poll()</code> - returns and removes the first element of the array deque</li>
<li><code>pollFirst()</code> - returns and removes the first element of the array deque (equivalent to <code>poll()</code>)</li>
<li><code>pollLast()</code> - returns and removes the last element of the array deque</li>
</ul>

<p class="note-tip"><strong>Note:</strong> If the array deque is empty, <code>poll()</code>, <code>pollFirst()</code> and <code>pollLast()</code> returns <code>null</code> if the element is not found.</p>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayDeque;

class Main {
public static void main(String[] args) {
ArrayDeque&lt;String&gt; animals= new ArrayDeque&lt;&gt;();
animals.add("Dog");
animals.add("Cat");
animals.add("Cow");
animals.add("Horse");
System.out.println("ArrayDeque: " + animals);

// Using poll()
String element = animals.poll();
System.out.println("Removed Element: " + element);
System.out.println("New ArrayDeque: " + animals);

// Using pollFirst()
String firstElement = animals.pollFirst();
System.out.println("Removed First Element: " + firstElement);

// Using pollLast()
String lastElement = animals.pollLast();
System.out.println("Removed Last Element: " + lastElement);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayDeque: [Dog, Cat, Cow, Horse]
Removed Element: Dog
New ArrayDeque: [Cat, Cow, Horse]
Removed First Element: Cat
Removed Last Element: Horse</samp></pre>

<p><strong>3. Remove Element: using the clear() method</strong></p>

<p>To remove all the elements from the array deque, we use the <code>clear()</code> method. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayDeque;

class Main {
public static void main(String[] args) {
ArrayDeque&lt;String&gt; animals= new ArrayDeque&lt;&gt;();
animals.add("Dog");
animals.add("Cat");
animals.add("Horse");
System.out.println("ArrayDeque: " + animals);

// Using clear()
animals.clear();

System.out.println("New ArrayDeque: " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayDeque: [Dog, Cat, Horse]
New ArrayDeque: []</samp></pre>

<hr>
<h3 id="iterate">Iterating the ArrayDeque</h3>

<ul>
<li><code>iterator()</code> - returns an <a href="/java-programming/iterator">iterator</a> that can be used to iterate over the array deque</li>
<li><code>descendingIterator()</code> - returns an iterator that can be used to iterate over the array deque in reverse order</li>
</ul>

<p>In order to use these methods, we must import the <code>java.util.Iterator</code> package. For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayDeque;
import java.util.Iterator;

class Main {
public static void main(String[] args) {
ArrayDeque&lt;String&gt; animals= new ArrayDeque&lt;&gt;();
animals.add("Dog");
animals.add("Cat");
animals.add("Horse");

System.out.print("ArrayDeque: ");

// Using iterator()
Iterator&lt;String&gt; iterate = animals.iterator();
while(iterate.hasNext()) {
System.out.print(iterate.next());
System.out.print(", ");
}

System.out.print("\nArrayDeque in reverse order: ");
// Using descendingIterator()
Iterator&lt;String&gt; desIterate = animals.descendingIterator();
while(desIterate.hasNext()) {
System.out.print(desIterate.next());
System.out.print(", ");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayDeque: [Dog, Cat, Horse]
ArrayDeque in reverse order: [Horse, Cat, Dog]</samp></pre>

<hr>
<h2>Other Methods</h2>

<div class="table-responsive">
<table>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>element()</code></td>
<td>Returns an element from the head of the array deque.</td>
</tr>
<tr>
<td><code>contains(element)</code></td>
<td>Searches the array deque for the specified element.<br><br>				If the element is found, it returns <code>true</code>, if not it returns <code>false</code>.</td>
</tr>
<tr>
<td><code>size()</code></td>
<td>Returns the length of the array deque.</td>
</tr>
<tr>
<td><code>toArray()</code></td>
<td>Converts array deque to array and returns it.</td>
</tr>
<tr>
<td><code>clone()</code> </td>
<td>Creates a copy of the array deque and returns it.</td>
</tr>
</table>
</div>

<hr>
<h2 id="stack">ArrayDeque as a Stack</h2>

<p>To implement a <strong>LIFO (Last-In-First-Out)</strong> stacks in Java, it is recommended to use a deque over the <a href="/java-programming/stack">Stack class</a>. The <code>ArrayDeque</code> class is likely to be faster than the <code>Stack</code> class.</p>

<p><code>ArrayDeque</code> provides the following methods that can be used for implementing a stack.</p>

<ul>
<li><code>push()</code> - adds an element to the top of the stack</li>
<li><code>peek()</code> - returns an element from the top of the stack</li>
<li><code>pop()</code> - returns and removes an element from the top of the stack</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.ArrayDeque;

class Main {
public static void main(String[] args) {
ArrayDeque&lt;String&gt; stack = new ArrayDeque&lt;&gt;();

// Add elements to stack
stack.push("Dog");
stack.push("Cat");
stack.push("Horse");
System.out.println("Stack: " + stack);

// Access element from top of stack
String element = stack.peek();
System.out.println("Accessed Element: " + element);

// Remove elements from top of stack
String remElement = stack.pop();
System.out.println("Removed element: " + remElement);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Stack: [Horse, Cat, Dog]
Accessed Element: Horse
Removed Element: Horse</samp></pre>

<hr>
<h2 id="vs-linkedlist">ArrayDeque Vs. LinkedList Class</h2>

<p>Both <code>ArrayDeque</code> and <a href="/java-programming/linkedlist">Java LinkedList</a> implements the <code>Deque</code> interface. However, there exist some differences between them.</p>

<ul>
<li><code>LinkedList</code> supports <code>null</code> elements, whereas <code>ArrayDeque</code> doesn't.</li>
<li>Each node in a linked list includes links to other nodes. That's why <code>LinkedList</code> requires more storage than <code>ArrayDeque</code>.</li>
<li>If you are implementing the queue or the deque data structure, an <code>ArrayDeque</code> is likely to faster than a <code>LinkedList</code>.</li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#create">Creating ArrayDeque</a></li>
<li><a href="#insert">Insert Elements to Deque</a></li>
<li><a href="#access">Access ArrayDeque Elements</a></li>
<li><a href="#remove">Remove ArrayDeque Elements</a></li>
<li><a href="#iterate">Iterating the ArrayDeque</a></li>
<li><a href="#stack">ArrayDeque as a Stack</a></li>
<li><a href="#vs-linkedlist">ArrayDeque Vs LinkedList</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="blocking-queue">
                        
            <div class="editor-contents">
                <h1>Java BlockingQueue</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1547" class="node node-java-tutorial clearfix" about="/java-programming/blockingqueue" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java BlockingQueue" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <code>BlockingQueue</code> interface of the <a href="/java-programming/collections">Java Collections framework</a> extends the <code>Queue</code> interface. It allows any operation to wait until it can be successfully performed.</p>

<p>For example, if we want to delete an element from an empty queue, then the blocking queue allows the delete operation to wait until the queue contains some elements to be deleted.</p>

<hr>
<h2 id="classes">Classes that Implement BlockingQueue</h2>

<p>Since <code>BlockingQueue</code> is an interface, we cannot provide the direct implementation of it.</p>

<p>In order to use the functionality of the <code>BlockingQueue</code>, we need to use classes that implement it.</p>

<ul>
<li><a href="/java-programming/arrayblockingqueue">ArrayBlockingQueue</a></li>
<li><a href="/java-programming/linkedblockingqueue">LinkedBlockingQueue</a></li>
</ul>

<figure><img src="/sites/tutorial2program/files/java-blockingqueue.png" title="" alt="ArrayBlockingQueue and LinkedBlockingQueue implements the BlockingQueue interface in Java." width="500" height="291">
</figure>
<hr>
<h2 id="use">How to use blocking queues?</h2>

<p>We must import the <code>java.util.concurrent.BlockingQueue</code> package in order to use <code>BlockingQueue</code>.</p>

<pre>
<code>// Array implementation of BlockingQueue
BlockingQueue&lt;String&gt; animal1 = new ArraryBlockingQueue&lt;&gt;();

// LinkedList implementation of BlockingQueue
BlockingQueue&lt;String&gt; animal2 = new LinkedBlockingQueue&lt;&gt;();</code></pre>

<p>Here, we have created objects <var>animal1</var> and <var>animal2</var> of classes <code>ArrayBlockingQueue</code> and <code>LinkedBlockingQueue</code>, respectively. These objects can use the functionalities of the <code>BlockingQueue</code> interface.</p>

<hr>
<h2 id="methods">Methods of BlockingQueue</h2>

<p>Based on whether a queue is full or empty, methods of a blocking queue can be divided into 3 categories:</p>

<h3>Methods that throw an exception</h3>

<ul>
<li><code>add()</code> - Inserts an element to the blocking queue at the end of the queue. Throws an <a href="/java-programming/exceptions">exception</a> if the queue is full.</li>
<li><code>element()</code> - Returns the head of the blocking queue. Throws an exception if the queue is empty.</li>
<li><code>remove()</code> - Removes an element from the blocking queue. Throws an exception if the queue is empty.</li>
</ul>

<hr>
<h3>Methods that return some value</h3>

<ul>
<li><code>offer()</code> - Inserts the specified element to the blocking queue at the end of the queue. Returns <code>false</code> if the queue is full.</li>
<li><code>peek()</code> - Returns the head of the blocking queue. Returns <code>null</code> if the queue is empty.</li>
<li><code>poll()</code> - Removes an element from the blocking queue. Returns <code>null</code> if the queue is empty.</li>
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
</div><div class="clearfix"></div><p><strong>More on offer() and poll()</strong> </p>

<p>The <code>offer()</code> and <code>poll()</code> method can be used with timeouts. That is, we can pass time units as a parameter. For example,</p>

<pre>
<code>offer(value, 100, milliseconds)</code></pre>

<p>Here,</p>

<ul>
<li><var>value</var> is the element to be inserted to the queue</li>
<li>And we have set a timeout of 100 milliseconds</li>
</ul>

<p>This means the <code>offer()</code> method will try to insert an element to the blocking queue for <code>100</code> milliseconds. If the element cannot be inserted in 100 milliseconds, the method returns <code>false</code>.</p>

<p class="note-tip"><strong>Note:</strong> Instead of <code>milliseconds</code>, we can also use these time units: <code>days</code>, <code>hours</code>, <code>minutes</code>, <code>seconds</code>, <code>microseconds</code> and <code>nanoseconds</code> in <code>offer()</code> and <code>poll()</code> methods.</p>

<hr>
<h3>Methods that blocks the operation</h3>

<p>The <code>BlockingQueue</code> also provides methods to block the operations and wait if the queue is full or empty.</p>

<ul>
<li><code>put()</code> - Inserts an element to the blocking queue. If the queue is full, it will wait until the queue has space to insert an element.</li>
<li><code>take()</code> - Removes and returns an element from the blocking queue. If the queue is empty, it will wait until the queue has elements to be deleted.</li>
</ul>

<p>Suppose, we want to insert elements into a queue. If the queue is full then the <code>put()</code> method will wait until the queue has space to insert elements.</p>

<p>Similarly, if we want to delete elements from a queue. If the queue is empty then the <code>take()</code> method will wait until the queue contains elements to be deleted.</p>

<hr>
<h2 id="implementation-classes">Implementation of BlockingQueue in ArrayBlockingQueue</h2>

<pre class="java-exec">
<code>import java.util.concurrent.BlockingQueue;
import java.util.concurrent.ArrayBlockingQueue;

class Main {

public static void main(String[] args) {
// Create a blocking queue using the ArrayBlockingQueue
BlockingQueue&lt;Integer&gt; numbers = new ArrayBlockingQueue&lt;&gt;(5);

try {
// Insert element to blocking queue
numbers.put(2);
numbers.put(1);
numbers.put(3);
System.out.println("BLockingQueue: " + numbers);

// Remove Elements from blocking queue
int removedNumber = numbers.take();
System.out.println("Removed Number: " + removedNumber);
}

catch(Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>BlockingQueue: [2, 1, 3]
Removed Element: 2</samp></pre>

<p>To learn more about <code>ArrayBlockingQueue</code>, visit <a href="/java-programming/arrayblockingqueue">Java ArrayBlockingQueue</a>.</p>

<hr>
<h2 id="why">Why BlockingQueue?</h2>

<p>In Java, <code>BlockingQueue</code> is considered as the <strong>thread-safe</strong> collection. It is because it can be helpful in multi-threading operations.</p>

<p>Suppose one thread is inserting elements to the queue and another thread is removing elements from the queue.</p>

<p>Now, if the first thread runs slower, then the blocking queue can make the second thread wait until the first thread completes its operation.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#classes">Classes that Implement BlockingQueue </a></li>
<li><a href="#use">How to use blocking queues? </a></li>
<li><a href="#methods">Methods of BlockingQueue </a></li>
<li><a href="#implementation-classes">Implementation of BlockingQueue</a></li>
<li><a href="#why">Why BlockingQueue? </a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="arrayblockingqueue">
                        
            <div class="editor-contents">
                <h1>Java ArrayBlockingQueue</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1549" class="node node-java-tutorial clearfix" about="/java-programming/arrayblockingqueue" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java ArrayBlockingQueue" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <code>ArrayBlockingQueue</code> class of the <a href="/java-programming/collections">Java Collections framework</a> provides the blocking queue implementation using an <a href="/java-programming/arrays">array</a>.</p>

<p>It implements the <a href="/java-programming/blockingqueue">Java BlockingQueue interface</a>.</p>

<figure><img src="/sites/tutorial2program/files/java-blockingqueue.png" title="" alt="ArrayBlockingQueue implements the BlockingQueue interface in Java." width="1028" height="600">
</figure>
<hr>
<h2 id="create">Creating ArrayBlockingQueue</h2>

<p>In order to create an array blocking queue, we must import the <code>java.util.concurrent.ArrayBlockingQueue</code> package.</p>

<p>Once we import the package, here is how we can create an array blocking queue in Java:</p>

<pre>
<code>ArrayBlockingQueue&lt;Type&gt; animal = new ArrayBlockingQueue&lt;&gt;(int capacity);</code></pre>

<p>Here,</p>

<ul>
<li><var>Type</var> - the type of the array blocking queue</li>
<li><var>capacity</var> - the size of the array blocking queue</li>
</ul>

<p>For example,</p>

<pre>
<code>// Creating String type ArrayBlockingQueue with size 5
ArrayBlockingQueue&lt;String&gt; animals = new ArrayBlockingQueue&lt;&gt;(5);

// Creating Integer type ArrayBlockingQueue with size 5
ArrayBlockingQueue&lt;Integer&gt; age = new ArrayBlockingQueue&lt;&gt;(5);</code></pre>

<p class="note-tip"><strong>Note:</strong> It is compulsory to provide the size of the array.</p>

<hr>
<h2>Methods of ArrayBlockingQueue</h2>

<p>The <code>ArrayBlockingQueue</code> class provides the implementation of all the methods in the <code>BlockingQueue</code> interface.</p>

<p>These methods are used to insert, access and delete elements from array blocking queues.</p>

<p>Also, we will learn about two methods <code>put()</code> and <code>take()</code> that support the blocking operation in the array blocking queue.</p>

<p>These two methods distinguish the array blocking queue from other typical queues.</p>

<hr>
<h3 id="insert">Insert Elements</h3>

<ul>
<li><code>add()</code> - Inserts the specified element to the array blocking queue. It throws an <a href="/java-programming/exceptions">exception</a> if the queue is full.</li>
<li><code>offer()</code> - Inserts the specified element to the array blocking queue. It returns <code>false</code> if the queue is full.</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.ArrayBlockingQueue;

class Main {
public static void main(String[] args) {
ArrayBlockingQueue&lt;String&gt; animals = new ArrayBlockingQueue&lt;&gt;(5);

// Using add()
animals.add("Dog");
animals.add("Cat");

// Using offer()
animals.offer("Horse");
System.out.println("ArrayBlockingQueue: " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayBlockingQueue: [Dog, Cat, Horse]</samp></pre>

<hr>
<h3 id="access">Access Elements</h3>

<ul>
<li><code>peek()</code> - Returns an element from the front of the array blocking queue. It returns <code>null</code> if the queue is empty.</li>
<li><code>iterator()</code> - Returns an <a href="/java-programming/iterator">iterator</a> object to sequentially access elements from the array blocking queue. It throws an exception if the queue is empty. We must import the <code>java.util.Iterator</code> package to use it.</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.ArrayBlockingQueue;
import java.util.Iterator;

class Main {
public static void main(String[] args) {
ArrayBlockingQueue&lt;String&gt; animals = new ArrayBlockingQueue&lt;&gt;(5);

// Add elements
animals.add("Dog");
animals.add("Cat");
animals.add("Horse");
System.out.println("ArrayBlockingQueue: " + animals);

// Using peek()
String element = animals.peek();
System.out.println("Accessed Element: " + element);

// Using iterator()
Iterator&lt;String&gt; iterate = animals.iterator();
System.out.print("ArrayBlockingQueue Elements: ");

while(iterate.hasNext()) {
System.out.print(iterate.next());
System.out.print(", ");
}
}
}</code></pre>

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

<pre>
<samp>ArrayBlockingQueue: [Dog, Cat, Horse]
Accessed Element: Dog
ArrayBlockingQueue Elements: Dog, Cat, Horse,</samp></pre>

<hr>
<h3 id="remove">Remove Elements</h3>

<ul>
<li><code>remove()</code> - Returns and removes a specified element from the array blocking queue. It throws an exception if the queue is empty.</li>
<li><code>poll()</code> - Returns and removes a specified element from the array blocking queue. It returns <code>null</code> if the queue is empty.</li>
<li><code>clear()</code> - Removes all the elements from the array blocking queue.</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.ArrayBlockingQueue;

class Main {
public static void main(String[] args) {
ArrayBlockingQueue&lt;String&gt; animals = new ArrayBlockingQueue&lt;&gt;(5);

animals.add("Dog");
animals.add("Cat");
animals.add("Horse");
System.out.println("ArrayBlockingQueue: " + animals);

// Using remove()
String element1 = animals.remove();
System.out.println("Removed Element:");
System.out.println("Using remove(): " + element1);

// Using poll()
String element2 = animals.poll();
System.out.println("Using poll(): " + element2);

// Using clear()
animals.clear();
System.out.println("Updated ArrayBlockingQueue: " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayBlockingQueue: [Dog, Cat, Horse]
Removed Elements:
Using remove(): Dog
Using poll(): Cat
Updated ArrayBlockingQueue: []</samp></pre>

<hr>
<h2 id="put-take">put() and take() Method</h2>

<p>In multithreading processes, we can use <code>put()</code> and <code>take()</code> to block the operation of one thread to synchronize it with another thread. These methods will wait until they can be successfully executed.</p>

<hr>
<h3>put() method</h3>

<p>To add an element to the end of an array blocking queue, we can use the <code>put()</code> method.</p>

<p>If the array blocking queue is full, it waits until there is space in the array blocking queue to add an element.</p>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.ArrayBlockingQueue;

class Main {
public static void main(String[] args) {
ArrayBlockingQueue&lt;String&gt; animals = new ArrayBlockingQueue&lt;&gt;(5);

try {
// Add elements to animals
animals.put("Dog");
animals.put("Cat");
System.out.println("ArrayBlockingQueue: " + animals);
}
catch(Exception e) {
System.out.println(e);
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayBlockingQueue: [Dog, Cat]</samp></pre>

<p>Here, the <code>put()</code> method may throw an <code>InterruptedException</code> if it is interrupted while waiting. Hence, we must enclose it inside a <em>try..catch</em> block.</p>

<hr>
<h3>take() Method</h3>

<p>To return and remove an element from the front of the array blocking queue, we can use the <code>take()</code> method.</p>

<p>If the array blocking queue is empty, it waits until there are elements in the array blocking queue to be deleted.</p>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.ArrayBlockingQueue;

class Main {
public static void main(String[] args) {
ArrayBlockingQueue&lt;String&gt; animals = new ArrayBlockingQueue&lt;&gt;(5);

try {
//Add elements to animals
animals.put("Dog");
animals.put("Cat");
System.out.println("ArrayBlockingQueue: " + animals);

// Remove an element
String element = animals.take();
System.out.println("Removed Element: " + element);
}
catch(Exception e) {
System.out.println(e);
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayBlockingQueue: [Dog, Cat]
Removed Element: Dog</samp></pre>

<p>Here, the <code>take()</code> method will throw an <code>InterrupedException</code> if it is interrupted while waiting. Hence, we must enclose it inside a <code>try...catch</code> block.</p>

<hr>
<h2>Other Methods</h2>

<div class="table-responsive">
<table>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>contains(element)</code></td>
<td>Searches the array blocking queue for the specified element.If the element is found, it returns <code>true</code>, if not it returns <code>false</code>.</td>
</tr>
<tr>
<td><code>size()</code></td>
<td>Returns the length of the array blocking queue.</td>
</tr>
<tr>
<td><code>toArray()</code></td>
<td>Converts array blocking queue to an array and returns it.</td>
</tr>
<tr>
<td><code>toString()</code> </td>
<td>Converts the array blocking queue to string</td>
</tr>
</table>
</div>

<hr>
<h2 id="why">Why use ArrayBlockingQueue?</h2>

<p>The <code>ArrayBlockingQueue</code> uses arrays as its internal storage.</p>

<p>It is considered as a <strong>thread-safe</strong> collection. Hence, it is generally used in multi-threading applications.</p>

<p>Suppose, one thread is inserting elements to the queue and another thread is removing elements from the queue.</p>

<p>Now, if the first thread is slower than the second thread, then the array blocking queue can make the second thread waits until the first thread completes its operations.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#create">Creating ArrayBlockingQueue</a></li>
<li><a href="#insert">Insert Elements</a></li>
<li><a href="#access">Access Elements</a></li>
<li><a href="#remove">Remove Elements</a></li>
<li><a href="#put-take">put() and take() Method</a></li>
<li><a href="#why">Why ArrayBlockingQueue?</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="linkedblockingqueue">
                        
            <div class="editor-contents">
                <h1>Java LinkedBlockingQueue</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1548" class="node node-java-tutorial clearfix" about="/java-programming/linkedblockingqueue" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java LinkedBlockingQueue" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The <code>LinkedBlockingQueue</code> class of the <a href="/java-programming/collections">Java Collections framework</a> provides the blocking queue implementation using a <a href="/java-programming/linkedlist">linked list</a>.</p>

<p>It implements the <a href="/java-programming/blockingqueue">Java BlockingQueue interface</a>.</p>

<figure><img src="/sites/tutorial2program/files/java-blockingqueue.png" title="" alt="ArrayBlockingQueue implements the BlockingQueue interface in Java." width="528" height="300">
</figure>
<hr>
<h2 id="create">Creating LinkedBlockingQueue</h2>

<p>In order to create a linked blocking queue, we must import the <code>java.util.concurrent.LinkedBlockingQueue</code> package.</p>

<p>Here is how we can create a linked blocking queue in Java:</p>

<p><strong>1. Without the initial capacity</strong></p>

<pre>
<code>LinkedBlockingQueue&lt;Type&gt; animal = new LinkedBlockingQueue&lt;&gt;();</code></pre>

<p>Here the default initial capacity will be 2<sup>31</sup>-1. <sup></sup></p>

<p><strong>2. With the initial capacity</strong> </p>

<pre>
<code>LinkedBlockingQueue&lt;Type&gt; animal = new LinkedBlockingQueue&lt;&gt;(int capacity);</code></pre>

<p>Here,</p>

<ul>
<li><var>Type</var> - the type of the linked blocking queue</li>
<li><var>capacity</var> - the size of the linked blocking queue</li>
</ul>

<p>For example,</p>

<pre>
<code>// Creating String type LinkedBlockingQueue with size 5
LinkedBlockingQueue&lt;String&gt; animals = new LinkedBlockingQueue&lt;&gt;(5);

// Creating Integer type LinkedBlockingQueue with size 5
LinkedBlockingQueue&lt;Integer&gt; age = new LinkedBlockingQueue&lt;&gt;(5);</code></pre>

<p><strong>Note:</strong> It is not compulsory to provide the size of the linked list.</p>

<hr>
<h2>Methods of LinkedBlockingQueue</h2>

<p>The <code>LinkedBlockingQueue</code> class provides the implementation of all the methods in the <a href="/java-programming/blockingqueue">BlockingQueue interface</a>.</p>

<p>These methods are used to insert, access and delete elements from linked blocking queues.</p>

<p>Also, we will learn about two methods <code>put()</code> and <code>take()</code> that support the blocking operation in the linked blocking queue.</p>

<p>These two methods distinguish the linked blocking queue from other typical queues.</p>

<hr>
<h3 id="insert">Insert Elements</h3>

<ul>
<li><code>add()</code> - Inserts a specified element to the linked blocking queue. It throws an <a href="/java-programming/exceptions">exception</a> if the queue is full.</li>
<li><code>offer()</code> - Inserts a specified element to the linked blocking queue. It returns <code>false</code> if the queue is full.</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.LinkedBlockingQueue;

class Main {
public static void main(String[] args) {
LinkedBlockingQueue&lt;String&gt; animals = new LinkedBlockingQueue&lt;&gt;(5);

// Using add()
animals.add("Dog");
animals.add("Cat");

// Using offer()
animals.offer("Horse");
System.out.println("LinkedBlockingQueue: " + animals);
}
}</code></pre>

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

<pre>
<samp>LinkedBlockingQueue: [Dog, Cat, Horse]</samp></pre>

<hr>
<h3 id="access">Access Elements</h3>

<ul>
<li><code>peek()</code> - Returns an element from the front of the linked blocking queue. It returns <code>null</code> if the queue is empty.</li>
<li><code>iterator()</code> - Returns an <a href="/java-programming/iterator">iterator</a> object to sequentially access an element from the linked blocking queue. It throws an exception if the queue is empty. We must import the <code>java.util.Iterator</code> package to use it.</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.LinkedBlockingQueue;
import java.util.Iterator;

class Main {
public static void main(String[] args) {
LinkedBlockingQueue&lt;String&gt; animals = new LinkedBlockingQueue&lt;&gt;(5);

// Add elements
animals.add("Dog");
animals.add("Cat");
animals.add("Horse");
System.out.println("LinkedBlockingQueue: " + animals);

// Using peek()
String element = animals.peek();
System.out.println("Accessed Element: " + element);

// Using iterator()
Iterator&lt;String&gt; iterate = animals.iterator();
System.out.print("LinkedBlockingQueue Elements: ");

while(iterate.hasNext()) {
System.out.print(iterate.next());
System.out.print(", ");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedBlockingQueue: [Dog, Cat, Horse]
Accessed Element: Dog
LinkedBlockingQueue Elements: Dog, Cat, Horse,</samp></pre>

<hr>
<h3 id="remove">Remove Elements</h3>

<ul>
<li><code>remove()</code> - Returns and removes a specified element from the linked blocking queue. It throws an exception if the queue is empty.</li>
<li><code>poll()</code> - Returns and removes a specified element from the linked blocking queue. It returns <code>null</code> if the queue is empty.</li>
<li><code>clear()</code> - Removes all the elements from the linked blocking queue.</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.LinkedBlockingQueue;

class Main {
public static void main(String[] args) {
LinkedBlockingQueue&lt;String&gt; animals = new LinkedBlockingQueue&lt;&gt;(5);

animals.add("Dog");
animals.add("Cat");
animals.add("Horse");
System.out.println("LinkedBlockingQueue " + animals);

// Using remove()
String element1 = animals.remove();
System.out.println("Removed Element:");
System.out.println("Using remove(): " + element1);

// Using poll()
String element2 = animals.poll();
System.out.println("Using poll(): " + element2);

// Using clear()
animals.clear();
System.out.println("Updated LinkedBlockingQueue " + animals);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedBlockingQueue: [Dog, Cat, Horse]
Removed Elements:
Using remove(): Dog
Using poll(): Cat
Updated LinkedBlockingQueue: []</samp></pre>

<hr>
<h2 id="put-take">put() and take() Methods</h2>

<p>In multithreading processes, we can use <code>put()</code> and <code>take()</code> to block the operation of one thread to synchronize it with another thread. These methods will wait until they can be successfully executed.</p>

<hr>
<h3>put() Method</h3>

<p>To insert the specified element to the end of a linked blocking queue, we use the <code>put()</code> method.</p>

<p>If the linked blocking queue is full, it waits until there is space in the linked blocking queue to insert the element.</p>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.LinkedBlockingQueue;

class Main {
public static void main(String[] args) {
LinkedBlockingQueue&lt;String&gt; animals = new LinkedBlockingQueue&lt;&gt;(5);

try {
// Add elements to animals
animals.put("Dog");
animals.put("Cat");
System.out.println("LinkedBlockingQueue: " + animals);
}
catch(Exception e) {
System.out.println(e);
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedBlockingQueue: [Dog, Cat]</samp></pre>

<p>Here, the <code>put()</code> method may throw an <code>InterruptedException</code> if it is interrupted while waiting. Hence, we must enclose it inside a <a href="/java-programming/exception-handling">try..catch block</a>.</p>

<hr>
<h3>take() Method</h3>

<p>To return and remove an element from the front of the linked blocking queue, we can use the <code>take()</code> method.</p>

<p>If the linked blocking queue is empty, it waits until there are elements in the linked blocking queue to be deleted.</p>

<p>For example,</p>

<pre class="java-exec">
<code>import java.util.concurrent.LinkedBlockingQueue;

class Main {
public static void main(String[] args) {
LinkedBlockingQueue&lt;String&gt; animals = new LinkedBlockingQueue&lt;&gt;(5);

try {
//Add elements to animals
animals.put("Dog");
animals.put("Cat");
System.out.println("LinkedBlockingQueue: " + animals);

// Remove an element
String element = animals.take();
System.out.println("Removed Element: " + element);
System.out.println("New LinkedBlockingQueue: " + animals);
}
catch(Exception e) {
System.out.println(e);
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>LinkedBlockingQueue: [Dog, Cat]
Removed Element: Dog
New LinkedBlockingQueue: [Cat]</samp></pre>

<p>Here, the <code>take()</code> method will throw an <code>InterrupedException</code> if it is interrupted while waiting. Hence, we must enclose it inside a <code>try...catch</code> block.</p>

<hr>
<h2>Other Methods</h2>

<div class="table-responsive">
<table>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>contains(element)</code></td>
<td>Searches the linked blocking queue for the specified element. If the element is found, it returns <code>true</code>, if not it returns <code>false</code>.</td>
</tr>
<tr>
<td><code>size()</code></td>
<td>Returns the length of the linked blocking queue.</td>
</tr>
<tr>
<td><code>toArray()</code></td>
<td>Converts linked blocking queue to an array and return the array.</td>
</tr>
<tr>
<td><code>toString()</code> </td>
<td>Converts the linked blocking queue to string</td>
</tr>
</table>
</div>

<hr>
<h2 id="why">Why use LinkedBlockingQueue?</h2>

<p>The <code>LinkedBlockingQueue</code> uses linked lists as its internal storage.</p>

<p>It is considered as a <strong>thread-safe</strong> collection. Hence, it is generally used in multi-threading applications.</p>

<p>Suppose, one thread is inserting elements to the queue and another thread is removing elements from the queue.</p>

<p>Now, if the first thread is slower than the second thread, then the linked blocking queue can make the second thread waits until the first thread completes its operations.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#create">Creating LinkedBlockingQueue</a></li>
<li><a href="#insert">Insert Elements</a></li>
<li><a href="#access">Access Elements</a></li>
<li><a href="#remove">Remove Elements</a></li>
<li><a href="#put-take">put() and take() Methods</a></li>
<li><a href="#why">Why LinkedBlockingQueue?</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                </section>
                <section id="stream">
                    <div id="stream1">
                        
            <div class="editor-contents">
                <h1>Java I/O Streams</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2615" class="node node-java-tutorial clearfix" about="/java-programming/io-streams" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java I/O Streams" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">In Java, streams are the sequence of data that are read from the source and written to the destination.</p>

<p>An <strong>input stream</strong> is used to read data from the source. And, an <strong>output stream</strong> is used to write data to the destination.</p>

<pre class="java-exec">
<code>class HelloWorld {
public static void main(String[] args) {
System.out.println("Hello, World!"); 
}
}
</code></pre>

<p>For example, in our first <strong>Hello World</strong> example, we have used <code>System.out</code> to print a string. Here, the <code>System.out</code> is a type of output stream.</p>

<p>Similarly, there are input streams to take input.</p>

<p><img alt="Input stream reads data from source to program and output stream writes file from program to destination" height="334" src="//cdn.programiz.com/sites/tutorial2program/files/java-io-stream.png" title="Java Input Stream and Output Stream" width="500"></p>

<p>We will learn about input streams and output streams in detail in the later tutorials.</p>

<hr>
<h2>Types of Streams</h2>

<p>Depending upon the data a stream holds, it can be classified into:</p>

<ul>
<li>Byte Stream</li>
<li>Character Stream</li>
</ul>

<hr>
<h3 id="byte">Byte Stream</h3>

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
</div><div class="clearfix"></div><p>Byte stream is used to read and write a single byte (8 bits) of data.</p>

<p>All byte stream classes are derived from base abstract classes called <code>InputStream</code> and <code>OutputStream</code>.</p>

<p>To learn more, visit</p>

<ul>
<li><a href="/java-programming/inputstream" title="Java InputStream Class">Java InputStream Class</a></li>
<li><a href="/java-programming/outputstream" title="Java OutputStream Class">Java OutputStream Class</a></li>
</ul>

<hr>
<h3 id="character">Character Stream</h3>

<p>Character stream is used to read and write a single character of data.</p>

<p>All the character stream classes are derived from base abstract classes <code>Reader</code> and <code>Writer</code>.</p>

<p>To learn more, visit</p>

<ul>
<li><a href="/java-programming/reader" title="Java Reader Class">Java Reader Class</a></li>
<li><a href="/java-programming/writer" title="Java Writer Class">Java Writer Class</a></li>
</ul>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Java Streams (Introduction)</a></li>
<li><a href="#byte">Byte Stream </a></li>
<li><a href="#character">Character Stream </a></li>
</ul>
</div></div></div>                          </div>

                    </div>
                    <div id="inputstream">
                        
            <div class="editor-contents">
                <h1>Java InputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2621" class="node node-java-tutorial clearfix" about="/java-programming/inputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java InputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>InputStream</code> class of the <code>java.io</code> package is an abstract superclass that represents an input stream of bytes.</p>

<p>Since <code>InputStream</code> is an abstract class, it is not useful by itself. However, its subclasses can be used to read data.</p>

<hr>
<h2 id="subclasses">Subclasses of InputStream</h2>

<p>In order to use the functionality of <code>InputStream</code>, we can use its subclasses. Some of them are:</p>

<ul>
<li><a href="/java-programming/fileinputstream" title="Java FileInputStream Class">FileInputStream</a></li>
<li><a href="/java-programming/bytearrayinputstream" title="Java ByteArrayInputStream Class">ByteArrayInputStream</a></li>
<li><a href="https://www.programiz.com/java-programming/objectinputstream">ObjectInputStream</a></li>
</ul>

<p><figure><img src="/sites/tutorial2program/files/java-fileinputstream.png" title="Java FileInputStream" alt="FileInputStream class inherits the InputStream class" width="380" height="220">
<figcaption>Java FileInputStream class</figcaption></figure></p>

<p>We will learn about all these subclasses in the next tutorial.</p>

<hr>
<h2 id="create">Create an InputStream</h2>

<p>In order to create an InputStream, we must import the <code>java.io.InputStream</code> package first. Once we import the package, here is how we can create the input stream.</p>

<pre>
<code>// Creates an InputStream
InputStream object1 = new FileInputStream();
</code></pre>

<p>Here, we have created an input stream using <code>FileInputStream</code>. It is because <code>InputStream</code> is an abstract class. Hence we cannot create an object of <code>InputStream</code>.</p>

<hr>
<h2 id="methods">Methods of InputStream</h2>

<p>The <code>InputStream</code> class provides different methods that are implemented by its subclasses. Here are some of the commonly used methods:</p>

<ul>
<li><code>read()</code> - reads one byte of data from the input stream</li>
<li><code>read(byte[] array)</code> - reads bytes from the stream and stores in the specified <a href="/java-programming/arrays" title="array">array</a></li>
<li><code>available()</code> - returns the number of bytes available in the input stream</li>
<li><code>mark()</code> - marks the position in the input stream up to which data has been read</li>
<li><code>reset()</code> - returns the control to the point in the stream where the mark was set</li>
<li><code>markSupported()</code> - checks if the <code>mark()</code> and <code>reset()</code> method is supported in the stream</li>
<li><code>skips()</code> - skips and discards the specified number of bytes from the input stream</li>
<li><code>close()</code> - closes the input stream</li>
</ul>

<hr>
<h2 id="example">Example: InputStream Using FileInputStream</h2>

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
</div><div class="clearfix"></div><p>Here is how we can implement <code>InputStream</code> using the <code>FileInputStream</code> class.</p>

<p>Suppose we have a file named <strong>input.txt</strong> with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<p>Let's try to read this file using <code>FileInputStream</code> (a subclass of <code>InputStream</code>).</p>

<pre>
<code>import java.io.FileInputStream;
import java.io.InputStream;

class Main {
public static void main(String args[]) {

byte[] array = new byte[100];

try {
InputStream input = new FileInputStream("input.txt");

System.out.println("Available bytes in the file: " + input.available());

// Read byte from the input stream
input.read(array);
System.out.println("Data read from the file: ");

// Convert byte array into string
String data = new String(array);
System.out.println(data);

// Close the input stream
input.close();
} catch (Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<code>Available bytes in the file: 39
Data read from the file:
This is a line of text inside the file
</code></pre>

<p>In the above example, we have created an input stream using the <code>FileInputStream</code> class. The input stream is linked with the file <strong>input.txt</strong>.</p>

<pre>
<code>InputStream input = new FileInputStream("input.txt");
</code></pre>

<p>To read data from the <strong>input.txt</strong> file, we have implemented these two methods.</p>

<pre>
<code>input.read(array);  // to read data from the input stream
input.close();            // to close the input stream

</code></pre>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/InputStream.html" title="Java InputStream (official Java documentation)">Java InputStream (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#subclasses">Subclasses of InputStream</a></li>
<li><a href="#create">Create an InputStream</a></li>
<li><a href="#methods">Methods of InputStream</a></li>
<li><a href="#example">Example: InputStream Using FileInputStream</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="outputstream">
                        
            <div class="editor-contents">
                <h1>Java OutputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2620" class="node node-java-tutorial clearfix" about="/java-programming/outputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java OutputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>OutputStream</code> class of the <code>java.io</code> package is an abstract superclass that represents an output stream of bytes.</p>

<p>Since <code>OutputStream</code> is an abstract class, it is not useful by itself. However, its subclasses can be used to write data.</p>

<hr>
<h2 id="subclasses">Subclasses of OutputStream</h2>

<p>In order to use the functionality of <code>OutputStream</code>, we can use its subclasses. Some of them are:</p>

<ul>
<li><a href="/java-programming/fileoutputstream" title="Java FileOutputStream Class">FileOutputStream</a></li>
<li><a href="/java-programming/bytearrayoutputstream" title="Java ByteArrayOutputStream Class">ByteArrayOutputStream</a></li>
<li><a href="/java-programming/objectoutputstream" title="Java ObjectOutputStream Class">ObjectOutputStream</a></li>
</ul>

<figure><img src="/sites/tutorial2program/files/java-%20outputstreamwriter.png" title="OutputStreamWriter extends the abstract class Writer" alt="OutputStreamWriter " width="380" height="220">
<figcaption>OutputStreamWriter</figcaption></figure>

<p>We will learn about all these subclasses in the next tutorial.</p>

<hr>
<h2 id="create">Create an OutputStream</h2>

<p>In order to create an <code>OutputStream</code>, we must import the <code>java.io.OutputStream</code> package first. Once we import the package, here is how we can create the output stream.</p>

<pre>
<code>// Creates an OutputStream
OutputStream object = new FileOutputStream();
</code></pre>

<p>Here, we have created an object of output stream using <code>FileOutputStream</code>. It is because <code>OutputStream</code> is an abstract class, so we cannot create an object of <code>OutputStream</code>.</p>

<p class="note-tip"><strong>Note</strong>: We can also create the output stream from other subclasses of the <code>OutputStream</code> class.</p>

<hr>
<h2 id="methods">Methods of OutputStream</h2>

<p>The <code>OutputStream</code> class provides different methods that are implemented by its subclasses. Here are some of the methods:</p>

<ul>
<li><code>write()</code> - writes the specified byte to the output stream</li>
<li><code>write(byte[] array)</code> - writes the bytes from the specified <a href="/java-programming/arrays" title="array">array</a> to the output stream</li>
<li><code>flush()</code> - forces to write all data present in output stream to the destination</li>
<li><code>close()</code> - closes the output stream</li>
</ul>

<hr>
<h2 id="example">Example: OutputStream Using FileOutputStream</h2>

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
</div><div class="clearfix"></div><p>Here is how we can implement <code>OutputStream</code> using the <code>FileOutputStream</code> class.</p>

<pre>
<code>import java.io.FileOutputStream;
import java.io.OutputStream;

public class Main {

public static void main(String args[]) {
String data = "This is a line of text inside the file.";

try {
OutputStream out = new FileOutputStream("output.txt");

// Converts the string into bytes
byte[] dataBytes = data.getBytes();

// Writes data to the output stream
out.write(dataBytes);
System.out.println("Data is written to the file.");

// Closes the output stream
out.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created an output stream using the <code>FileOutputStream</code> class. The output stream is now linked with the file <strong>output.txt</strong>.</p>

<pre>
<code>OutputStream out = new FileOutputStream("output.txt");
</code></pre>

<p>To write data to the <strong>output.txt</strong> file, we have implemented these methods.</p>

<pre>
<code>output.write();      // To write data to the file
output.close();      // To close the output stream
</code></pre>

<p>When we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/OutputStream.html" title="Java OutputStream (official Java documentation)">Java OutputStream (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#subclasses">Subclasses of OutputStream</a></li>
<li><a href="#create">Create an OutputStream</a></li>
<li><a href="#methods">Methods of OutputStream</a></li>
<li><a href="#example">Example: OutputStream Using FileOutputStream</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="fileInput-stream">
                        
            <div class="editor-contents">
                <h1>Java FileInputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2632" class="node node-java-tutorial clearfix" about="/java-programming/fileinputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java FileInputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>FileInputStream</code> class of the <code>java.io</code> package can be used to read data (in bytes) from files.</p>

<p>It extends the <code>InputStream</code> abstract class.</p>

<p><img alt="Java FileInputStream is a subclass of InputStream class." height="135" src="//cdn.programiz.com/sites/tutorial2program/files/java-fileinputstream.png" title="Java FileInputStream Class" width="200"></p>

<p>Before we learn about <code>FileInputStream</code>, make sure to know about <a href="/java-programming/file" title="Java Files">Java Files</a>.</p>

<hr>
<h2 id="create">Create a FileInputStream</h2>

<p>In order to create a file input stream, we must import the <code>java.io.FileInputStream</code> package first. Once we import the package, here is how we can create a file input stream in Java.</p>

<p><strong>1. Using the path to file </strong></p>

<pre>
<code>FileInputStream input = new FileInputStream(stringPath);
</code></pre>

<p>Here, we have created an input stream that will be linked to the file specified by the <var>path</var>.</p>

<p><strong>2. Using an object of the file </strong></p>

<pre>
<code>FileInputStream input = new FileInputStream(File fileObject);
</code></pre>

<p>Here, we have created an input stream that will be linked to the file specified by <code>fileObject</code>.</p>

<hr>
<h2>Methods of FileInputStream</h2>

<p>The <code>FileInputStream</code> class provides implementations for different methods present in the <code>InputStream</code> class.</p>

<h3 id="read">read() Method</h3>

<ul>
<li><code>read()</code> - reads a single byte from the file</li>
<li><code>read(byte[] array)</code> - reads the bytes from the file and stores in the specified <a href="/java-programming/arrays" title="array">array</a></li>
<li><code>read(byte[] array, int start, int length)</code> - reads the number of bytes equal to <var>length</var> from the file and stores in the specified array starting from the position <var>start</var></li>
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
</div><div class="clearfix"></div><p>Suppose we have a file named <strong>input.txt</strong> with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<p>Let's try to read this file using <code>FileInputStream</code>.</p>

<pre>
<code>import java.io.FileInputStream;

public class Main {

public static void main(String args[]) {

try {
FileInputStream input = new FileInputStream("input.txt");

System.out.println("Data in the file: ");

// Reads the first byte
int i = input.read();

while(i != -1) {
System.out.print((char)i);

// Reads next byte from the file
i = input.read();
}
input.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data in the file:
This is a line of text inside the file.
</samp></pre>

<p>In the above example, we have created a file input stream named <var>input</var>. The input stream is linked with the <strong>input.txt</strong> file.</p>

<pre>
<code>FileInputStream input = new FileInputStream("input.txt");
</code></pre>

<p>To read data from the file, we have used the <code>read()</code> method inside the <a href="/java-programming/do-while-loop" title="while">while</a> loop.</p>

<hr>
<h3 id="available">available() Method</h3>

<p>To get the number of available bytes, we can use the <code>available()</code> method. For example,</p>

<pre>
<code>import java.io.FileInputStream;

public class Main {

public static void main(String args[]) {

try {
// Suppose, the input.txt file contains the following text
// This is a line of text inside the file.
FileInputStream input = new FileInputStream("input.txt");

// Returns the number of available bytes
System.out.println("Available bytes at the beginning: " + input.available());

// Reads 3 bytes from the file
input.read();
input.read();
input.read();

// Returns the number of available bytes
System.out.println("Available bytes at the end: " + input.available());

input.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Available bytes at the beginning: 39
Available bytes at the end: 36
</samp></pre>

<p>In the above example,</p>

<ol>
<li>We first use the <code>available()</code> method to check the number of available bytes in the file input stream.</li>
<li>We then have used the <code>read()</code> method 3 times to read 3 bytes from the file input stream.</li>
<li>Now, after reading the bytes we again have checked the available bytes. This time the available bytes decreased by 3.</li>
</ol>

<hr>
<h3 id="skip">skip() Method</h3>

<p>To discard and skip the specified number of bytes, we can use the <code>skip()</code> method. For example,</p>

<pre>
<code>import java.io.FileInputStream;

public class Main {

public static void main(String args[]) {

try {
// Suppose, the input.txt file contains the following text
// This is a line of text inside the file.
FileInputStream input = new FileInputStream("input.txt");

// Skips the 5 bytes
input.skip(5);
System.out.println("Input stream after skipping 5 bytes:");

// Reads the first byte
int i = input.read();
while (i != -1) {
System.out.print((char) i);

// Reads next byte from the file
i = input.read();
}

// close() method
input.close();
}
catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Input Stream after skipping 5 bytes:
is a line of text inside the file.
</samp></pre>

<p>In the above example, we have used the <code>skip()</code> method to skip 5 bytes of data from the file input stream. Hence, the bytes representing the text <strong>"This "</strong> is not read from the input stream.</p>

<hr>
<h3>close() Method</h3>

<p>To close the file input stream, we can use the <code>close()</code> method. Once the <code>close()</code> method is called, we cannot use the input stream to read data.</p>

<p>In all the above examples, we have used the <code>close()</code> method to close the file input stream.</p>

<hr>
<h2 id="other-methods">Other Methods Of FileInputStream</h2>

<table>
<tbody>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>finalize()</code></td>
<td>ensures that the <code>close()</code> method is called</td>
</tr>
<tr>
<td><code>getChannel()</code></td>
<td>returns the object of <code>FileChannel</code> associated with the input stream</td>
</tr>
<tr>
<td><code>getFD()</code></td>
<td>returns the file descriptor associated with the input stream</td>
</tr>
<tr>
<td><code>mark() </code></td>
<td>mark the position in input stream up to which data has been read</td>
</tr>
<tr>
<td><code>reset() </code></td>
<td>returns the control to the point in the input stream where the mark was set</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/FileInputStream.html" title="Java FileInputStream (official Java documentation)">Java FileInputStream (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create a FileInputStream</a></li>
<li><a href="#read">read() Method</a></li>
<li><a href="#available">available() Method</a></li>
<li><a href="#skip">skip() Method</a></li>
<li><a href="#other-methods">Other Methods Of FileInputStream</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="fileOutputStream">
                        
            <div class="editor-contents">
                <h1>Java FileOutputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2610" class="node node-java-tutorial clearfix" about="/java-programming/fileoutputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java FileOutputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>FileOutputStream</code> class of the <code>java.io</code> package can be used to write data (in bytes) to the files.</p>

<p>It extends the <code>OutputStream</code> abstract class.</p>

<p><img alt="The FileOutputStream class is the subclass of the Java OutputStream." height="170" src="//cdn.programiz.com/sites/tutorial2program/files/java-fileoutputstream.png" title="Java FileOutputStream Class" width="200"></p>

<p>Before you learn about <code>FileOutputStream</code>, make sure to know about <a href="/java-programming/file" title="Java Files">Java Files</a>.</p>

<hr>
<h2 id="create">Create a FileOutputStream</h2>

<p>In order to create a file output stream, we must import the <code>java.io.FileOutputStream</code> package first. Once we import the package, here is how we can create a file output stream in Java.</p>

<p><strong>1. Using the path to file</strong></p>

<pre>
<code>// Including the boolean parameter
FileOutputStream output = new FileOutputStream(String path, boolean value);

// Not including the boolean parameter
FileOutputStream output = new FileOutputStream(String path);
</code></pre>

<p>Here, we have created an output stream that will be linked to the file specified by the <var>path</var>.</p>

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
</div><div class="clearfix"></div><p>Also, <var>value</var> is an optional boolean parameter. If it is set to <code>true</code>, the new data will be appended to the end of the existing data in the file. Otherwise, the new data overwrites the existing data in the file.</p>

<p><strong>2. Using an object of the file</strong></p>

<pre>
<code>FileOutputStream output = new FileOutputStream(File fileObject);
</code></pre>

<p>Here, we have created an output stream that will be linked to the file specified by <code>fileObject</code>.</p>

<hr>
<h2>Methods of FileOutputStream</h2>

<p>The <code>FileOutputStream</code> class provides implementations for different methods present in the <code>OutputStream</code> class.</p>

<h3 id="write">write() Method</h3>

<ul>
<li><code>write()</code> - writes the single <var>byte</var> to the file output stream</li>
<li><code>write(byte[] array)</code> - writes the bytes from the specified <a href="/java-programming/arrays" title="array">array</a> to the output stream</li>
<li><code>write(byte[] array, int start, int length)</code> - writes the number of bytes equal to <var>length</var> to the output stream from an array starting from the position <var>start</var></li>
</ul>

<h3>Example: FileOutputStream to write data to a File</h3>

<pre>
<code>import java.io.FileOutputStream;

public class Main {
public static void main(String[] args) {

String data = "This is a line of text inside the file.";

try {
FileOutputStream output = new FileOutputStream("output.txt");

byte[] array = data.getBytes();

// Writes byte to the file
output.write(array);

output.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created a file output stream named <var>output</var>. The file output stream is linked with the file <strong>output.txt</strong>.</p>

<pre>
<code>FileOutputStream output = new FileOutputStream("output.txt");
</code></pre>

<p>To write data to the file, we have used the <code>write()</code> method.</p>

<p>Here, when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<p class="note-tip"><strong>Note</strong>: The <code>getBytes()</code> method used in the program converts a <a href="/java-programming/string" title="string">string</a> into an array of bytes.</p>

<hr>
<h3 id="flush">flush() Method</h3>

<p>To clear the output stream, we can use the <code>flush()</code> method. This method forces the output stream to write all data to the destination. For example,</p>

<pre class="java-exec">
<code>import java.io.FileOutputStream;
import java.io.IOException;

public class Main {
public static void main(String[] args) throws IOException {

FileOutputStream out = null;
String data = "This is demo of flush method";

try {
out = new FileOutputStream(" flush.txt");

// Using write() method
out.write(data.getBytes());

// Using the flush() method
out.flush();
out.close();
}
catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>When we run the program, the file <strong>flush.txt</strong> is filled with the text represented by the string <code>data</code>.</p>

<hr>
<h3>close() Method</h3>

<p>To close the file output stream, we can use the <code>close()</code> method. Once the method is called, we cannot use the methods of <code>FileOutputStream</code>.</p>

<hr>
<h2 id="other-methods">Other Methods Of FileOutputStream</h2>

<table>
<tbody>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>finalize()</code></td>
<td>ensures that the <code>close()</code> method is called</td>
</tr>
<tr>
<td><code>getChannel()</code></td>
<td>returns the object of <code>FileChannel</code> associated with the output stream</td>
</tr>
<tr>
<td><code>getFD()</code></td>
<td>returns the file descriptor associated with the output stream</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/FileOutputStream.html#write(int)" title="Java FileOutputStream (official Java documentation)">Java FileOutputStream (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create a FileOutputStream</a></li>
<li><a href="#write">write() Method</a></li>
<li><a href="#flush">flush() Method</a></li>
<li><a href="#other-methods">Other Methods Of FileOutputStream</a></li>
</ul>
</div></div></div>                          </div>

                    </div>
                    <div id="arrayInputStream">
                        
            <div class="editor-contents">
                <h1>Java ByteArrayInputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2619" class="node node-java-tutorial clearfix" about="/java-programming/bytearrayinputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java ByteArrayInputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>ByteArrayInputStream</code> class of the <code>java.io</code> package can be used to read an <a href="/java-programming/arrays" title="array">array</a> of input data (in bytes).</p>

<p>It extends the <code>InputStream</code> abstract class.</p>

<figure><img src="/sites/tutorial2program/files/java-bytearrayonputstream.png" title="Java ByteArrayInputStream" alt="The ByteArrayInputStream class extends the InputStream class." width="380" height="220">
<figcaption>Java ByteArrayInputStream</figcaption></figure>

<p class="note-tip"><strong>Note</strong>: In <code>ByteArrayInputStream</code>, the input stream is created using the array of bytes. It includes an internal array to store data of that particular byte array.</p>

<hr>
<h2 id="create">Create a ByteArrayInputStream</h2>

<p>In order to create a byte array input stream, we must import the <code>java.io.ByteArrayInputStream</code> package first. Once we import the package, here is how we can create an input stream.</p>

<pre>
<code>// Creates a ByteArrayInputStream that reads entire array
ByteArrayInputStream input = new ByteArrayInputStream(byte[] arr);
</code></pre>

<p>Here, we have created an input stream that reads entire data from the <code>arr</code> array. However, we can also create the input stream that reads only some data from the array.</p>

<pre>
<code>// Creates a ByteArrayInputStream that reads a portion of array
ByteArrayInputStream input = new ByteArrayInputStream(byte[] arr, int start, int length);
</code></pre>

<p>Here the input stream reads the number of bytes equal to <var>length</var> from the array starting from the <var>start</var> position.</p>

<hr>
<h2>Methods of ByteArrayInputStream</h2>

<p>The <code>ByteArrayInputStream</code> class provides implementations for different methods present in the <code>InputStream</code> class.</p>

<h3 id="read">read() Method</h3>

<ul>
<li><code>read()</code> - reads the single byte from the array present in the input stream</li>
<li><code>read(byte[] array)</code> - reads bytes from the input stream and stores in the specified array</li>
<li><code>read(byte[] array, int start, int length)</code> - reads the number of bytes equal to <var>length</var> from the stream and stores in the specified array starting from the position <var>start</var></li>
</ul>

<h3>Example: ByteArrayInputStream to read data</h3>

<pre class="java-exec">
<code>import java.io.ByteArrayInputStream;

public class Main {
public static void main(String[] args) {

// Creates an array of byte
byte[] array = {1, 2, 3, 4};

try {
ByteArrayInputStream input = new ByteArrayInputStream(array);

System.out.print("The bytes read from the input stream: ");

for(int i= 0; i &lt; array.length; i++) {

// Reads the bytes
int data = input.read();
System.out.print(data + ", ");
}
input.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The bytes read from the input stream: 1, 2, 3, 4,
</samp></pre>

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
</div><div class="clearfix"></div><p>In the above example, we have created a byte array input stream named <code>input</code>.</p>

<pre>
<code>ByteArrayInputStream input = new ByteArrayInputStream(array);
</code></pre>

<p>Here, the input stream includes all the data from the specified array. To read data from the input stream, we have used the <code>read()</code> method.</p>

<hr>
<h3 id="available">available() Method</h3>

<p>To get the number of available bytes in the input stream, we can use the <code>available()</code> method. For example,</p>

<pre class="java-exec">
<code>import java.io.ByteArrayInputStream;

public class Main {

public static void main(String args[]) {

// Creates an array of bytes
byte[] array = { 1, 2, 3, 4 };

try {
ByteArrayInputStream input = new ByteArrayInputStream(array);

// Returns the available number of bytes
System.out.println("Available bytes at the beginning: " + input.available());

// Reads 2 bytes from the input stream
input.read();
input.read();

// Returns the available number of bytes
System.out.println("Available bytes at the end: " + input.available());

input.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Available bytes at the beginning: 4
Available bytes at the end: 2
</samp></pre>

<p>In the above example,</p>

<ol>
<li>We have used the <code>available()</code> method to check the number of available bytes in the input stream.</li>
<li>We have then used the <code>read()</code> method 2 times to read 2 bytes from the input stream.</li>
<li>Now, after reading the 2 bytes, we have checked the available bytes. This time the available bytes decreased by 2.</li>
</ol>

<hr>
<h3 id="skip">skip() Method</h3>

<p>To discard and skip the specified number of bytes, we can use the <code>skip()</code> method. For example,</p>

<pre class="java-exec">
<code>import java.io.ByteArrayInputStream;

public class Main {

public static void main(String args[]) {

// Create an array of bytes
byte[] array = { 1, 2, 3, 4 };
try {
ByteArrayInputStream input = new ByteArrayInputStream(array);

// Using the skip() method
input.skip(2);
System.out.print("Input stream after skipping 2 bytes: ");

int data = input.read();
while (data != -1) {
System.out.print(data + ", ");
data = input.read();
}

// close() method
input.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Input stream after skipping 2 bytes: 3, 4,
</samp></pre>

<p>In the above example, we have used the <var>skip()</var> method to skip 2 bytes of data from the input stream. Hence <var>1</var> and <var>2</var> are not read from the input stream.</p>

<hr>
<h3>close() Method</h3>

<p>To close the input stream, we can use the <code>close()</code> method.</p>

<p>However, the <code>close()</code> method has no effect in <code>ByteArrayInputStream</code> class. We can use the methods of this class even after the <code>close()</code> method is called.</p>

<hr>
<h2 id="other-methods">Other Methods Of ByteArrayInputStream</h2>

<table>
<tbody>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>finalize()</code></td>
<td>ensures that the <code>close()</code> method is called</td>
</tr>
<tr>
<td><code>mark()</code></td>
<td>marks the position in input stream up to which data has been read</td>
</tr>
<tr>
<td><code>reset()</code></td>
<td>returns the control to the point in the input stream where the mark was set</td>
</tr>
<tr>
<td><code>markSupported()</code></td>
<td>checks if the input stream supports <code>mark()</code> and <code>reset()</code></td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/ByteArrayInputStream.html" title="Java ByteArrayInputStream (official Java documentation)">Java ByteArrayInputStream (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create a ByteArrayInputStream</a></li>
<li><a href="#read">read() Method</a></li>
<li><a href="#available">available() Method</a></li>
<li><a href="#skip">skip() Method</a></li>
<li><a href="#other-methods">Other Methods Of ByteArrayInputStream</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="arrayOutputStream">
                        
            <div class="editor-contents">
                <h1>Java ByteArrayOutputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2618" class="node node-java-tutorial clearfix" about="/java-programming/bytearrayoutputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java ByteArrayOutputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>ByteArrayOutputStream</code> class of the <code>java.io</code> package can be used to write an <a href="/java-programming/arrays" title="array">array</a> of output data (in bytes).</p>

<p>It extends the <code>OutputStream</code> abstract class.</p>

<p>
<img alt="The ByteArrayOutputStream is a subclass of the Java OutputStream." height="138" src="//cdn.programiz.com/sites/tutorial2program/files/java-bytearrayoutputstream.png" title="Java ByteArrayOutputStream Class" width="200"></p>

<p class="note-tip"><strong>Note</strong>: In <code>ByteArrayOutputStream</code> maintains an internal array of bytes to store the data.</p>

<hr>
<h2 id="create">Create a ByteArrayOutputStream</h2>

<p>In order to create a byte array output stream, we must import the <code>java.io.ByteArrayOutputStream</code> package first. Once we import the package, here is how we can create an output stream.</p>

<pre>
<code>// Creates a ByteArrayOutputStream with default size
ByteArrayOutputStream out = new ByteArrayOutputStream();
</code></pre>

<p>Here, we have created an output stream that will write data to an array of bytes with default size 32 bytes. However, we can change the default size of the array.</p>

<pre>
<code>// Creating a ByteArrayOutputStream with specified size
ByteArrayOutputStream out = new ByteArrayOutputStream(int size);
</code></pre>

<p>Here, the <var>size</var> specifies the length of the array.</p>

<hr>
<h2>Methods of ByteArrayOutputStream</h2>

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
</div><div class="clearfix"></div><p>The <code>ByteArrayOutputStream</code> class provides the implementation of the different methods present in the <code>OutputStream</code> class.</p>

<h3 id="white">write() Method</h3>

<ul>
<li><code>write(int byte)</code> - writes the specified byte to the output stream</li>
<li><code>write(byte[] array)</code> - writes the bytes from the specified array to the output stream</li>
<li><code>write(byte[] arr, int start, int length)</code> - writes the number of bytes equal to <var>length</var> to the output stream from an array starting from the position <var>start</var></li>
<li><code>writeTo(ByteArrayOutputStream out1)</code> - writes the entire data of the current output stream to the specified output stream</li>
</ul>

<h3>Example: ByteArrayOutputStream to write data</h3>

<pre class="java-exec">
<code>import java.io.ByteArrayOutputStream;

class Main {
public static void main(String[] args) {

String data = "This is a line of text inside the string.";

try {
// Creates an output stream
ByteArrayOutputStream out = new ByteArrayOutputStream();
byte[] array = data.getBytes();

// Writes data to the output stream
out.write(array);

// Retrieves data from the output stream in string format
String streamData = out.toString();
System.out.println("Output stream: " + streamData);

out.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Output stream: This is a line of text inside the string.
</samp></pre>

<p>In the above example, we have created a byte array output stream named <var>output</var>.</p>

<pre>
<code>ByteArrayOutputStream output = new ByteArrayOutputStream();
</code></pre>

<p>To write the data to the output stream, we have used the <code>write()</code> method.</p>

<p class="note-tip"><strong>Note</strong>: The <a href="/java-programming/library/string/getBytes" title="getBytes()">getBytes()</a> method used in the program converts a <a href="/java-programming/string" title="string">string</a> into an array of bytes.</p>

<hr>
<h3 id="access-data">Access Data from ByteArrayOutputStream</h3>

<ul>
<li><code>toByteArray()</code> - returns the array present inside the output stream</li>
<li><code>toString()</code> - returns the entire data of the output stream in string form</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.io.ByteArrayOutputStream;

class Main {
public static void main(String[] args) {
String data = "This is data.";

try {
// Creates an output stream
ByteArrayOutputStream out = new ByteArrayOutputStream();

// Writes data to the output stream
out.write(data.getBytes());

// Returns an array of bytes
byte[] byteData = out.toByteArray();
System.out.print("Data using toByteArray(): ");
for(int i=0; i&lt;byteData.length; i++) {
System.out.print((char)byteData[i]);
}

// Returns a string
String stringData = out.toString();
System.out.println("\nData using toString(): " + stringData);

out.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data using toByteArray(): This is data.
Data using toString(): This is data.
</samp></pre>

<p>In the above example, we have created an array of bytes to store the data returned by the <code>toByteArray()</code> method.</p>

<p>We then have used the for loop to access each byte from the array. Here, each byte is converted into the corresponding character using typecasting.</p>

<hr>
<h3>close() Method</h3>

<p>To close the output stream, we can use the <code>close()</code> method.</p>

<p>However, the <code>close()</code> method has no effect in <code>ByteArrayOutputStream</code> class. We can use the methods of this class even after the <code>close()</code> method is called.</p>

<hr>
<h2 id="other-methods">Other Methods of ByteArrayOutputStream</h2>

<table>
<tbody>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>size() </code></td>
<td>returns the size of the array in the output stream</td>
</tr>
<tr>
<td><code>flush() </code></td>
<td>clears the output stream</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/ByteArrayOutputStream.html" title="Java ByteArrayOutputStream (official Java documentation)">Java ByteArrayOutputStream (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create a ByteArrayOutputStream</a></li>
<li><a href="#white">write() Method</a></li>
<li><a href="#access-data">Access Data from ByteArrayOutputStream</a></li>
<li><a href="#other-methods">Other Methods of ByteArrayOutputStream</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="objectInputStream">
                        
            <div class="editor-contents">
                <h1>Java ObjectInputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2623" class="node node-java-tutorial clearfix" about="/java-programming/objectinputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java ObjectInputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>ObjectInputStream</code> class of the <code>java.io</code> package can be used to read objects that were previously written by <code>ObjectOutputStream</code>.</p>

<p>It extends the <code>InputStream</code> abstract class.</p>

<p><figure><img src="/sites/tutorial2program/files/java-objectinputstream-class.png" title="Java ObjectInputStream Class" alt="The ObjectInputStream class extends the InputStream class." width="380" height="220">
<figcaption>Java ObjectInputStream Class</figcaption></figure></p>

<p>Before you learn about the <code>ObjectInputStream</code> class, make sure you know about the <a href="/java-programming/objectoutputstream" title="Java ObjectOutputStream Class">ObjectOutputStream Class</a>.</p>

<hr>
<h2 id="working">Working of ObjectInputStream</h2>

<p>The <code>ObjectInputStream</code> is mainly used to read data written by the <code>ObjectOutputStream</code>.</p>

<p>Basically, the <code>ObjectOutputStream</code> converts Java objects into corresponding streams. This is known as serialization. Those converted streams can be stored in files or transferred through networks.</p>

<p>Now, if we need to read those objects, we will use the <code>ObjectInputStream</code> that will convert the streams back to corresponding objects. This is known as deserialization.</p>

<hr>
<h2 id="create">Create an ObjectInputStream</h2>

<p>In order to create an object input stream, we must import the <code>java.io.ObjectInputStream</code> package first. Once we import the package, here is how we can create an input stream.</p>

<pre>
<code>// Creates a file input stream linked with the specified file
FileInputStream fileStream = new FileInputStream(String file);

// Creates an object input stream using the file input stream
ObjectInputStream objStream = new ObjectInputStream(fileStream);
</code></pre>

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
</div><div class="clearfix"></div><p>In the above example, we have created an object input stream named <var>objStream</var> that is linked with the file input stream named <var>fileStream</var>.</p>

<p>Now, the <code>objStream</code> can be used to read objects from the file.</p>

<hr>
<h2>Methods of ObjectInputStream</h2>

<p>The <code>ObjectInputStream</code> class provides implementations of different methods present in the <code>InputStream</code> class.</p>

<h2>read() Method</h2>

<ul>
<li><code>read()</code> - reads a byte of data from the input stream</li>
<li><code>readBoolean()</code> - reads data in boolean form</li>
<li><code>readChar()</code> - reads data in character form</li>
<li><code>readInt()</code> - reads data in integer form</li>
<li><code>readObject()</code> - reads the object from the input stream</li>
</ul>

<hr>
<h3 id="example1">Example 1: Java ObjectInputStream</h3>

<p>Let's see how we can use the <code>ObjectInputStream</code> class to read objects written by the <code>ObjectOutputStream</code> class.</p>

<pre>
<code>import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;

class Main {
public static void main(String[] args) {

int data1 = 5;
String data2 = "This is programiz";

try {
FileOutputStream file = new FileOutputStream("file.txt");
ObjectOutputStream output = new ObjectOutputStream(file);

// Writing to the file using ObjectOutputStream
output.writeInt(data1);
output.writeObject(data2);

FileInputStream fileStream = new FileInputStream("file.txt");
// Creating an object input stream
ObjectInputStream objStream = new ObjectInputStream(fileStream);

//Using the readInt() method
System.out.println("Integer data :" + objStream.readInt());

// Using the readObject() method
System.out.println("String data: " + objStream.readObject());

output.close();
objStream.close();
}
catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Integer data: 5
String data: This is programiz
</samp></pre>

<p>In the above example, we have used the <code>readInt()</code> and <code>readObject()</code> method to read integer data and object data from the file.</p>

<p>Here, we have used the <code>ObjectOutputStream</code> to write data to the file. We then read the data from the file using the <code>ObjectInputStream</code>.</p>

<hr>
<h3 id="example2">Example 2: Java ObjectInputStream</h3>

<p>Let's see another practical example,</p>

<pre>
<code>import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.Serializable;

class Dog implements Serializable {

String name;
String breed;

public Dog(String name, String breed) {
this.name = name;
this.breed = breed;
}
}

class Main {
public static void main(String[] args) {

// Creates an object of Dog class
Dog dog = new Dog("Tyson", "Labrador");

try {
FileOutputStream file = new FileOutputStream("file.txt");

// Creates an ObjectOutputStream
ObjectOutputStream output = new ObjectOutputStream(file);

// Writes objects to the output stream
output.writeObject(dog);

FileInputStream fileStream = new FileInputStream("file.txt");

// Creates an ObjectInputStream
ObjectInputStream input = new ObjectInputStream(fileStream);

// Reads the objects
Dog newDog = (Dog) input.readObject();

System.out.println("Dog Name: " + newDog.name);
System.out.println("Dog Breed: " + newDog.breed);

output.close();
input.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Dog Name: Tyson
Dog Breed: Labrador
</samp></pre>

<p>In the above example, we have created</p>

<ul>
<li><code>ObjectOutputStream</code> named <var>output</var> using the <code>FileOutputStream</code> named <var>file</var></li>
<li><code>ObjectInputStream</code> named <var>input</var> using the <code>FileInputStream</code> named <var>fileStream</var></li>
<li>An object <var>dog</var> of the <var>Dog</var> class</li>
</ul>

<p>Here, we have then used the object output stream to write the object to the file. And, the object input stream to read the object from the file.</p>

<p class="note-tip"><strong>Note</strong>: The <var>Dog</var> class implements the <code>Serializable</code> interface. It is because the <code>ObjectOutputStream</code> only writes the serializable objects to the output stream.</p>

<hr>
<h2 id="other-methods">Other Methods Of ObjectInputStream</h2>

<table>
<tbody>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>available()</code><code> </code></td>
<td>returns the available number of bytes in the input stream</td>
</tr>
<tr>
<td><code>mark() </code></td>
<td>marks the position in input stream up to which data has been read</td>
</tr>
<tr>
<td><code>reset() </code></td>
<td>returns the control to the point in the input stream where the mark was set</td>
</tr>
<tr>
<td><code>skipBytes() </code></td>
<td>skips and discards the specified bytes from the input stream</td>
</tr>
<tr>
<td><code>close() </code></td>
<td>closes the object input stream</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/ObjectInputStream.html" title="Java ObjectInputStream (official Java documentation)">Java ObjectInputStream (official Java documentation)</a>.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/java-programming/inputstream">Java InputStream Class</a></li>
<li><a href="https://www.programiz.com/java-programming/outputstream">Java OutputStream Class</a></li>
</ul>  </div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#working">Working of ObjectInputStream</a></li>
<li><a href="#create">Create an ObjectInputStream</a></li>
<li><a href="#example1">Example: ObjectInputStream</a></li>
<li><a href="#example2">Example: ObjectInputStream</a></li>
<li><a href="#other-methods">Other Methods Of ObjectInputStream</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="objectOutputStream">
                        
            <div class="editor-contents">
                <h1>Java ObjectOutputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2622" class="node node-java-tutorial clearfix" about="/java-programming/objectoutputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java ObjectOutputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>ObjectOutputStream</code> class of the <code>java.io</code> package can be used to write objects that can be read by <code>ObjectInputStream</code>.</p>

<p>It extends the <code>OutputStream</code> abstract class.</p>

<p><figure><img src="/sites/tutorial2program/files/java-objectoutputstream-class.png" title="Java ObjectOutputStream Class" alt="The ObjectOutputStream class inherits the OutputStream class" width="380" height="220">
<figcaption>Java ObjectOutputStream Class</figcaption></figure></p>

<hr>
<h2 id="working">Working of ObjectOutputStream</h2>

<p>Basically, the <code>ObjectOutputStream</code> encodes Java objects using the class name and object values. And, hence generates corresponding streams. This process is known as serialization.</p>

<p>Those converted streams can be stored in files and can be transferred among networks.</p>

<p class="note-tip"><strong>Note</strong>: The <code>ObjectOutputStream</code> class only writes those objects that implement the <code>Serializable</code> interface. This is because objects need to be serialized while writing to the stream</p>

<hr>
<h2 id="create">Create an ObjectOutputStream</h2>

<p>In order to create an object output stream, we must import the <code>java.io.ObjectOutputStream</code> package first. Once we import the package, here is how we can create an output stream.</p>

<pre>
<code>// Creates a FileOutputStream where objects from ObjectOutputStream are written
FileOutputStream fileStream = new FileOutputStream(String file);

// Creates the ObjectOutputStream
ObjectOutputStream objStream = new ObjectOutputStream(fileStream);
</code></pre>

<p>In the above example, we have created an object output stream named <var>objStream</var> that is linked with the file output stream named <var>fileStream</var>.</p>

<hr>
<h2>Methods of ObjectOutputStream</h2>

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
</div><div class="clearfix"></div><p>The <code>ObjectOutputStream</code> class provides implementations for different methods present in the <code>OutputStream</code> class.</p>

<h2>write() Method</h2>

<ul>
<li><code>write()</code> - writes a byte of data to the output stream</li>
<li><code>writeBoolean()</code> - writes data in boolean form</li>
<li><code>writeChar()</code> - writes data in character form</li>
<li><code>writeInt()</code> - writes data in integer form</li>
<li><code>writeObject()</code> - writes object to the output stream</li>
</ul>

<hr>
<h3 id="example1">Example 1: Java ObjectOutputStream</h3>

<p>Let's see how we can use <code>ObjectOutputStream</code> to store objects in a file and <code>ObjectInputStream</code> to read those objects from the files</p>

<pre>
<code>import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;

class Main {
public static void main(String[] args) {

int data1 = 5;
String data2 = "This is programiz";

try {

FileOutputStream file = new FileOutputStream("file.txt");

// Creates an ObjectOutputStream
ObjectOutputStream output = new ObjectOutputStream(file);

// writes objects to output stream
output.writeInt(data1);
output.writeObject(data2);

// Reads data using the ObjectInputStream
FileInputStream fileStream = new FileInputStream("file.txt");
ObjectInputStream objStream = new ObjectInputStream(fileStream);

System.out.println("Integer data :" + objStream.readInt());
System.out.println("String data: " + objStream.readObject());

output.close();
objStream.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Integer data: 5
String data: This is programiz
</samp></pre>

<p>In the above example, we have used the <code>readInt()</code> method and <code>readObject()</code> method to read an integer data and object data from the files.</p>

<p>Here, we have used the <code>ObjectOutputStream</code> to write data to the file. We then read the data from the file using the <code>ObjectInputStream</code>.</p>

<hr>
<h3 id="example2">Example 2: Java ObjectOutputStream</h3>

<p>Let's take another example,</p>

<pre>
<code>import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.Serializable;

class Dog implements Serializable {

String name;
String breed;

public Dog(String name, String breed) {
this.name = name;
this.breed = breed;
}
}

class Main {
public static void main(String[] args) {

// Creates an object of Dog class
Dog dog1 = new Dog("Tyson", "Labrador");

try {
FileOutputStream fileOut = new FileOutputStream("file.txt");

// Creates an ObjectOutputStream
ObjectOutputStream objOut = new ObjectOutputStream(fileOut);

// Writes objects to the output stream
objOut.writeObject(dog1);

// Reads the object
FileInputStream fileIn = new FileInputStream("file.txt");
ObjectInputStream objIn = new ObjectInputStream(fileIn);

// Reads the objects
Dog newDog = (Dog) objIn.readObject();

System.out.println("Dog Name: " + newDog.name);
System.out.println("Dog Breed: " + newDog.breed);

objOut.close();
objIn.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Dog Name: Tyson
Dog Breed: Labrador
</samp></pre>

<p>In the above example, we have created</p>

<ul>
<li><code>ObjectOutputStream</code> named <var>objOut</var> using the <code>FileOutputStream</code> named <var>fileOut</var></li>
<li><code>ObjectInputStream</code> named <var>objIn</var> using the <code>FileInputStream</code> named <var>fileIn</var>.</li>
<li>An object <var>dog1</var> of the <var>Dog</var> class.</li>
</ul>

<p>Here, we have then used the object output stream to write the object to the file. And, the object input stream to read the object from the file.</p>

<p class="note-tip"><strong>Note</strong>: The <var>Dog</var> class implements the <code>Serializable</code> interface. It is because the <code>ObjectOutputStream</code> only writes objects that can be serialized to the output stream.</p>

<hr>
<h2 id="other-methods">Other Methods Of ObjectOutputStream</h2>

<table>
<tbody>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>flush()</code></td>
<td>clears all the data from the output stream</td>
</tr>
<tr>
<td><code>drain()</code></td>
<td>puts all the buffered data in the output stream</td>
</tr>
<tr>
<td><code>close()</code></td>
<td>closes the output stream</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/ObjectOutputStream.html#" title="Java ObjectOutputStream (official Java documentation)">Java ObjectOutputStream (official Java documentation)</a>.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>

<li><a href="https://www.programiz.com/java-programming/outputstream">Java OutputStream Class</a></li>
</ul>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#working">Working of ObjectOutputStream</a></li>
<li><a href="#create">Create an ObjectOutputStream</a></li>
<li><a href="#example1">Example: ObjectOutputStream</a></li>
<li><a href="#example2">Example: ObjectOutputStream</a></li>
<li><a href="#other-methods">Other Methods Of ObjectOutputStream</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="bufferInputStream">
                        
            <div class="editor-contents">
                <h1>Java BufferedInputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2616" class="node node-java-tutorial clearfix" about="/java-programming/bufferedinputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java BufferedInputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>BufferedInputStream</code> class of the <code>java.io</code> package is used with other input streams to read the data (in bytes) more efficiently.</p>

<p>It extends the <code>InputStream</code> abstract class.</p>

<figure><img src="/sites/tutorial2program/files/java-bufferdinputstream.png" title="Java BufferedInputStream Class" alt="The BufferedInputStream class is a subclass of the Java InputStream." width="200" height="150">
</figure>
<hr>
<h2 id="working">Working of BufferedInputStream</h2>

<p>The <code>BufferedInputStream</code> maintains an internal <strong>buffer of 8192 bytes</strong>.</p>

<p>During the read operation in <code>BufferedInputStream</code>, a chunk of bytes is read from the disk and stored in the internal buffer. And from the internal buffer bytes are read individually.</p>

<p>Hence, the number of communication to the disk is reduced. This is why reading bytes is faster using the <code>BufferedInputStream</code>.</p>

<hr>
<h2 id="create">Create a BufferedInputStream</h2>

<p>In order to create a <code>BufferedInputStream</code>, we must import the <code>java.io.BufferedInputStream</code> package first. Once we import the package here is how we can create the input stream.</p>

<pre>
<code>// Creates a FileInputStream
FileInputStream file = new FileInputStream(String path);

// Creates a BufferedInputStream
BufferedInputStream buffer = new BufferInputStream(file);</code></pre>

<p>In the above example, we have created a <code>BufferdInputStream</code> named <var>buffer</var> with the <code>FileInputStream</code> named <var>file</var>.</p>

<p>Here, the internal buffer has the default size of 8192 bytes. However, we can specify the size of the internal buffer as well.</p>

<pre>
<code>// Creates a BufferedInputStream with specified size internal buffer
BufferedInputStream buffer = new BufferInputStream(file, int size);</code></pre>

<p>The <var>buffer</var> will help to read bytes from the files more quickly.</p>

<hr>
<h2>Methods of BufferedInputStream</h2>

<p>The <code>BufferedInputStream</code> class provides implementations for different methods present in the <code>InputStream</code> class.</p>

<h3 id="read">read() Method</h3>

<ul>
<li><code>read()</code> - reads a single byte from the input stream</li>
<li><code>read(byte[] arr)</code> - reads bytes from the stream and stores in the specified <a href="/java-programming/arrays">array</a></li>
<li><code>read(byte[] arr, int start, int length)</code> - reads the number of bytes equal to the <var>length</var> from the stream and stores in the specified array starting from the position <var>start</var></li>
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
</div><div class="clearfix"></div><p>Suppose we have a file named <strong>input.txt</strong> with the following content.</p>

<pre>
<code>This is a line of text inside the file.</code></pre>

<p>Let's try to read the file using <code>BufferedInputStream</code>.</p>

<pre>
<code>import java.io.BufferedInputStream;
import java.io.FileInputStream;

class Main {
public static void main(String[] args) {
try {

// Creates a FileInputStream
FileInputStream file = new FileInputStream("input.txt");

// Creates a BufferedInputStream
BufferedInputStream input = new BufferedInputStream(file);

// Reads first byte from file
int i = input .read();

while (i != -1) {
  System.out.print((char) i);

  // Reads next byte from the file
  i = input.read();
}
input.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>This is a line of text inside the file.</samp></pre>

<p>In the above example, we have created a buffered input stream named <var>buffer</var> along with <code>FileInputStream</code>. The input stream is linked with the file <strong>input.txt</strong>.</p>

<pre>
<code>FileInputStream file = new FileInputStream("input.txt");
BufferedInputStream buffer = new BufferedInputStream(file);</code></pre>

<p>Here, we have used the <code>read()</code> method to read an array of bytes from the internal buffer of the buffered reader.</p>

<hr>
<h3 id="available">available() Method</h3>

<p>To get the number of available bytes in the input stream, we can use the <code>available()</code> method. For example,</p>

<pre>
<code>import java.io.FileInputStream;
import java.io.BufferedInputStream;

public class Main {

public static void main(String args[]) {

try {

// Suppose, the input.txt file contains the following text
// This is a line of text inside the file.
FileInputStream file = new FileInputStream("input.txt");

// Creates a BufferedInputStream
BufferedInputStream buffer = new BufferedInputStream(file);

// Returns the available number of bytes
System.out.println("Available bytes at the beginning: " + buffer.available());

// Reads bytes from the file
buffer.read();
buffer.read();
buffer.read();

// Returns the available number of bytes
System.out.println("Available bytes at the end: " + buffer.available());

buffer.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Available bytes at the beginning: 39
Available bytes at the end: 36</samp></pre>

<p>In the above example,</p>

<ol>
<li>We first use the <code>available()</code> method to check the number of available bytes in the input stream.</li>
<li>Then, we have used the <code>read()</code> method 3 times to read 3 bytes from the input stream.</li>
<li>Now, after reading the bytes we again have checked the available bytes. This time the available bytes decreased by 3.</li>
</ol>

<hr>
<h3 id="skip">skip() Method</h3>

<p>To discard and skip the specified number of bytes, we can use the <code>skip()</code> method. For example,</p>

<pre>
<code>import java.io.FileInputStream;
import java.io.BufferedInputStream;

public class Main {

public static void main(String args[]) {

try {
// Suppose, the input.txt file contains the following text
// This is a line of text inside the file.
FileInputStream file = new FileInputStream("input.txt");

// Creates a BufferedInputStream
BufferedInputStream buffer = new BufferedInputStream(file);

// Skips the 5 bytes
buffer.skip(5);
System.out.println("Input stream after skipping 5 bytes:");

// Reads the first byte from input stream
int i = buffer.read();
while (i != -1) {
System.out.print((char) i);

// Reads next byte from the input stream
i = buffer.read();
}

// Closes the input stream
buffer.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Input stream after skipping 5 bytes: is a line of text inside the file.</samp></pre>

<p>In the above example, we have used the <code>skip()</code> method to skip 5 bytes from the file input stream. Hence, the bytes <code>'T'</code>, <code>'h'</code>, <code>'i'</code>, <code>'s'</code> and <code>' '</code> are skipped from the input stream.</p>

<hr>
<h3>close() Method</h3>

<p>To close the buffered input stream, we can use the <code>close()</code> method. Once the <code>close()</code> method is called, we cannot use the input stream to read the data.</p>

<hr>
<h2 id="other-methods">Other Methods Of BufferedInputStream</h2>

<div class="table-responsive">
<table>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>mark()</code> </td>
<td>mark the position in input stream up to which data has been read</td>
</tr>
<tr>
<td><code>reset()</code> </td>
<td>returns the control to the point in the input stream where the mark was set</td>
</tr>
</table>
</div>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/BufferedInputStream.html">Java BufferdInputStream (official Java documentation)</a>.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/inputstream">Java InputStream Class</a> </li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#working">Working of BufferedInputStream</a></li>
<li><a href="#create">Create a BufferedInputStream</a></li>
<li><a href="#read">read() Method</a></li>
<li><a href="#available">available() Method</a></li>
<li><a href="#skip">skip() Method</a></li>
<li><a href="#other-methods">Other Methods Of BufferedInputStream</a></li>
</ul>
</div></div></div>                          </div>

                    </div>
                    <div id="bufferOutputStream">
                        
            <div class="editor-contents">
                <h1>Java BufferedOutputStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2617" class="node node-java-tutorial clearfix" about="/java-programming/bufferedoutputstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java BufferedOutputStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>BufferedOutputStream</code> class of the <code>java.io</code> package is used with other output streams to write the data (in bytes) more efficiently.</p>

<p>It extends the <code>OutputStream</code> abstract class.</p>

<figure><img src="/sites/tutorial2program/files/java-bufferedoutputstream.png" title="Java BufferedOutputStream" alt="Java BufferedOutputStream class extends the OutputStream class" width="320" height="220">
<figcaption>Java BufferedOutputStream</figcaption></figure>

<hr>
<h2 id="working">Working of BufferedOutputStream</h2>

<p>The <code>BufferedOutputStream</code> maintains an internal <strong>buffer of 8192 bytes</strong>.</p>

<p>During the write operation, the bytes are written to the internal buffer instead of the disk. Once the buffer is filled or the stream is closed, the whole buffer is written to the disk.</p>

<p>Hence, the number of communication to the disk is reduced. This is why writing bytes is faster using <code>BufferedOutputStream</code>.</p>

<hr>
<h2 id="create">Create a BufferedOutputStream</h2>

<p>In order to create a <code>BufferedOutputStream</code>, we must import the <code>java.io.BufferedOutputStream</code> package first. Once we import the package here is how we can create the output stream.</p>

<pre>
<code>// Creates a FileOutputStream
FileOutputStream file = new FileOutputStream(String path);

// Creates a BufferedOutputStream
BufferedOutputStream buffer = new BufferOutputStream(file);
</code></pre>

<p>In the above example, we have created a <code>BufferdOutputStream</code> named <var>buffer</var> with the <code>FileOutputStream</code> named <var>file</var>.</p>

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
</div><div class="clearfix"></div><p>Here, the internal buffer has the default size of 8192 bytes. However, we can specify the size of the internal buffer as well.</p>

<pre>
<code>// Creates a BufferedOutputStream with specified size internal buffer
BufferedOutputStream buffer = new BufferOutputStream(file, int size);
</code></pre>

<p>The <var>buffer</var> will help to write bytes to files more quickly.</p>

<hr>
<h2>Methods of BufferedOutputStream</h2>

<p>The <code>BufferedOutputStream</code> class provides implementations for different methods in the <code>OutputStream</code> class.</p>

<h3 id="write">write() Method</h3>

<ul>
<li><code>write()</code> - writes a single byte to the internal buffer of the output stream</li>
<li><code>write(byte[] array)</code> - writes the bytes from the specified <a href="https://www.programiz.com/java-programming/arrays">array</a> to the output stream</li>
<li><code>write(byte[] arr, int start, int length)</code> - writes the number of bytes equal to <var>length</var> to the output stream from an array starting from the position <var>start</var></li>
</ul>

<h3>Example: BufferedOutputStream to write data to a File</h3>

<pre>
<code>import java.io.FileOutputStream;
import java.io.BufferedOutputStream;

public class Main {
public static void main(String[] args) {

String data = "This is a line of text inside the file";

try {
// Creates a FileOutputStream
FileOutputStream file = new FileOutputStream("output.txt");

// Creates a BufferedOutputStream
BufferedOutputStream output = new BufferedOutputStream(file);

byte[] array = data.getBytes();

// Writes data to the output stream
output.write(array);
output.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created a buffered output stream named <var>output</var> along with <code>FileOutputStream</code>. The output stream is linked with the file <strong>output.txt</strong>.</p>

<pre>
<code>FileOutputStream file = new FileOutputStream("output.txt");
BufferedOutputStream output = new BufferedOutputStream(file);
</code></pre>

<p>To write data to the file, we have used the <code>write()</code> method.</p>

<p>Here when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<p class="note-tip"><strong>Note</strong>: The <a href="https://www.programiz.com/java-programming/library/string/getbytes">getBytes()</a> method used in the program converts a <a href="https://www.programiz.com/java-programming/string">string</a> into an array of bytes.</p>

<hr>
<h2 id="flush">flush() Method</h2>

<p>To clear the internal buffer, we can use the <code>flush()</code> method. This method forces the output stream to write all data present in the buffer to the destination file. For example,</p>

<pre>
<code>import java.io.FileOutputStream;
import java.io.BufferedOutputStream;

public class Main {
public static void main(String[] args) {

String data = "This is a demo of the flush method";

try {
// Creates a FileOutputStream
FileOutputStream file = new FileOutputStream(" flush.txt");

// Creates a BufferedOutputStream
BufferedOutputStream buffer = new BufferedOutputStream(file);

// Writes data to the output stream
buffer.write(data.getBytes());

// Flushes data to the destination
buffer.flush();
System.out.println("Data is flushed to the file.");
buffer.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data is flushed to the file.
</samp></pre>

<p>When we run the program, the file <strong>flush.txt</strong> is filled with the text represented by the string <var>data</var>.</p>

<hr>
<h3>close() Method</h3>

<p>To close the buffered output stream, we can use the <code>close()</code> method. Once the method is called, we cannot use the output stream to write the data.</p>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/BufferedOutputStream.html" title="Java BufferedOutputStream (official Java documentation)">Java BufferedOutputStream (official Java documentation)</a>.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://www.programiz.com/java-programming/outputstream">Java OutputStream Class</a></li>
</ul>  </div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#working">Working of BufferedOutputStream</a></li>
<li><a href="#create">Create a BufferedOutputStream</a></li>
<li><a href="#write">write() Method</a></li>
<li><a href="#flush">flush() Method</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="printStream">
                        
            <div class="editor-contents">
                <h1>Java PrintStream Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2630" class="node node-java-tutorial clearfix" about="/java-programming/printstream" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java PrintStream Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>PrintStream</code> class of the <code>java.io</code> package can be used to write output data in commonly readable form (text) instead of bytes.</p>

<p>It extends the abstract class <code>OutputStream</code>.</p>

<p><img alt="The PrintStream class is a subclass of the Java OutputStream." height="197" src="//cdn.programiz.com/sites/tutorial2program/files/java-printstream.png" title="Java PrintStream Class" width="200"></p>

<hr>
<h2 id="working">Working of PrintStream</h2>

<p>Unlike other output streams, the <code>PrintStream</code> converts the <a href="/java-programming/variables-primitive-data-types" title="primitive data ">primitive data </a> (integer, character) into the text format instead of bytes. It then writes that formatted data to the output stream.</p>

<p>And also, the <code>PrintStream</code> class does not throw any input/output <a href="/java-programming/exceptions" title="exception">exception</a>. Instead, we need to use the <code>checkError()</code> method to find any error in it.</p>

<p class="note-tip"><strong>Note</strong>: The <code>PrintStream</code> class also has a feature of auto flushing. This means it forces the output stream to write all the data to the destination under one of the following conditions:</p>

<ul>
<li>if newline character <code>\n</code> is written in the print stream</li>
<li>if the <code>println()</code> method is invoked</li>
<li>if an array of bytes is written in the print stream</li>
</ul>

<hr>
<h2 id="create">Create a PrintStream</h2>

<p>In order to create a <code>PrintStream</code>, we must import the <code>java.io.PrintStream</code> package first. Once we import the package here is how we can create the print stream.</p>

<p><strong>1. Using other output streams</strong></p>

<pre>
<code>// Creates a FileOutputStream
FileOutputStream file = new FileOutputStream(String file);

// Creates a PrintStream
PrintStream output = new PrintStream(file, autoFlush);
</code></pre>

<p>Here,</p>

<ul>
<li>we have created a print stream that will write formatted data to the file represented by <code>FileOutputStream</code></li>
<li>the <var>autoFlush</var> is an optional boolean parameter that specifies whether to perform auto flushing or not</li>
</ul>

<p><strong>2. Using filename</strong></p>

<pre>
<code> // Creates a PrintStream
PrintStream output = new PrintStream(String file, boolean autoFlush);
</code></pre>

<p>Here,</p>

<ul>
<li>we have created a print stream that will write formatted data to the specified file</li>
<li><var>autoFlush</var> is an optional boolean parameter that specifies whether to perform autoflush or not</li>
</ul>

<p class="note-tip"><strong>Note</strong>: In both the case, the <code>PrintStream</code> write data to the file using some default character encoding. However, we can specify the character encoding (<strong>UTF8</strong> or <strong>UTF16</strong>) as well.</p>

<pre>
<code>// Creates a PrintStream using some character encoding
PrintStream output = new PrintStream(String file, boolean autoFlush, Charset cs);
</code></pre>

<p>Here, we have used the <code>Charset</code> class to specify the character encoding. To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/nio/charset/Charset.html">Java Charset (official Java documentation)</a>.</p>

<hr>
<h2>Methods of PrintStream</h2>

<p>The <code>PrintStream</code> class provides various methods that allow us to print data to the output.</p>

<h3 id="print">print() Method</h3>

<ul>
<li><code>print()</code> - prints the specified data to the output stream</li>
<li><code>println()</code> - prints the data to the output stream along with a new line character at the end</li>
</ul>

<hr>
<h3>Example: print() method with System class</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

String data = "Hello World.";
System.out.print(data);
}
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

<div id="div-gpt-ad-Programizcom36796" style="margin: 32px 0; min-height: 250px;">
</div>
</div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre>
<samp>Hello World.
</samp></pre>

<p>In the above example, we have not created a print stream. However, we can use the <code>print()</code> method of the <code>PrintStream</code> class.</p>

<p>You might be wondering how is this possible. Well, let me explain what is happening here.</p>

<p>Notice the line,</p>

<pre>
<code>System.out.print(data);
</code></pre>

<p>Here,</p>

<ul>
<li><code>System</code> is a final class that is responsible to perform standard input/output operation</li>
<li><code>out</code> is a class variable of <code>PrintStream</code> type declared in <code>System</code> class</li>
</ul>

<p>Now since <code>out</code> is of <code>PrintStream</code> type, we can use it to call all the methods of <code>PrintStream</code> class.</p>

<h3 id="example">Example: print() method with PrintStream class</h3>

<pre>
<code>import java.io.PrintStream;

class Main {
public static void main(String[] args) {

String data = "This is a text inside the file.";

try {
PrintStream output = new PrintStream("output.txt");

output.print(data);
output.close();
}
catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created a print stream named <var>output</var>. The print stream is linked with the <strong>output.txt</strong> file.</p>

<pre>
<code>PrintStream output = new PrintStream("output.txt");
</code></pre>

<p>To print data to the file, we have used the <code>print()</code> method.</p>

<p>Here, when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is a text inside the file.
</code></pre>

<hr>
<h3 id="printf">printf() Method</h3>

<p>The <code>printf()</code> method can be used to print the formatted <a href="/java-programming/string" title="string">string</a>. It includes 2 parameters: formatted string and arguments. For example,</p>

<pre>
<code>printf("I am %d years old", 25);
</code></pre>

<p>Here,</p>

<ul>
<li>I am %d years old is a formatted string</li>
<li>%d is integer data in the formatted string</li>
<li>25 is an argument</li>
</ul>

<p>The formatted string includes both text and data. And, the arguments replace the data inside the formatted string.</p>

<p>Hence the <strong>%d</strong> is replaced by <strong>25</strong>.</p>

<h3>Example: printf() method using PrintStream</h3>

<pre>
<code>import java.io.PrintStream;

class Main {
public static void main(String[] args) {

try {
PrintStream output = new PrintStream("output.txt");

int age = 25;

output.printf("I am %d years old.", age);
output.close();
}
catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created a print stream named <var>output</var>. The print stream is linked with the file <strong>output.txt</strong>.</p>

<pre>
<code>PrintStream output = new PrintStream("output.txt");
</code></pre>

<p>To print the formatted text to the file, we have used the <code>printf()</code> method.</p>

<p>Here, when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>I am 25 years old.
</code></pre>

<hr>
<h2 id="other-methods">Other Methods Of PrintStream</h2>

<table>
<tbody>
<tr>
<th>Methods</th>
<th>Descriptions</th>
</tr>
<tr>
<td><code>close()</code></td>
<td>closes the print stream</td>
</tr>
<tr>
<td><code>checkError()</code></td>
<td>checks if there is an error in the stream and returns a boolean result</td>
</tr>
<tr>
<td><code>append()</code></td>
<td>appends the specified data to the stream</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/PrintStream.html" title="Java PrintStream (official Java documentation)">Java PrintStream (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#working">Working of PrintStream</a></li>
<li><a href="#create">Create a PrintStream</a></li>
<li><a href="#print">print() Method</a></li>
<li><a href="#example">Example: print() method with PrintStream class</a></li>
<li><a href="#printf">printf() Method</a></li>
<li><a href="#other-methods">Other Methods Of PrintStream</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                </section>
                <section id="reader">
                    <div id="file">
                        
            <div class="editor-contents">
                <h1>Java File Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2629" class="node node-java-tutorial clearfix" about="/java-programming/file" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java File Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>File</code> class of the <code>java.io</code> package is used to perform various operations on files and directories.</p>

<p>There is another package named <code>java.nio</code> that can be used to work with files. However, in this tutorial, we will focus on the <code>java.io</code> package.</p>

<hr>
<h2 id="file-directory">File and Directory</h2>

<p>A file is a named location that can be used to store related information. For example,</p>

<p><strong>main.java</strong> is a Java file that contains information about the Java program.</p>

<p>A directory is a collection of files and subdirectories. A directory inside a directory is known as subdirectory.</p>

<hr>
<h2 id="create-object">Create a Java File Object</h2>

<p>To create an object of <code>File</code>, we need to import the <code>java.io.File</code> package first. Once we import the package, here is how we can create objects of file.</p>

<pre>
<code>// creates an object of File using the path 
File file = new File(String pathName);</code></pre>

<p>Here, we have created a file object named <var>file</var>. The object can be used to work with files and directories.</p>

<p class="note-tip"><strong>Note</strong>: In Java, creating a file object does not mean creating a file. Instead, a file object is an abstract representation of the file or directory pathname (specified in the parenthesis).</p>

<hr>
<h2 id="methods">Java File Operation Methods</h2>

<div class="table-responsive">
<table>
<tr>
<th>Operation</th>
<th>Method</th>
<th>Package</th>
</tr>
<tr>
<td>To create file</td>
<td><code>createNewFile()</code></td>
<td><code>java.io.File</code></td>
</tr>
<tr>
<td>To read file</td>
<td><code>read()</code></td>
<td><code>java.io.FileReader</code></td>
</tr>
<tr>
<td>To write file</td>
<td><code>write()</code></td>
<td><code>java.io.FileWriter</code></td>
</tr>
<tr>
<td>To delete file</td>
<td><code>delete()</code></td>
<td><code>java.io.File</code></td>
</tr>
</table>
</div>

<hr>
<h3 id="create">Java create files</h3>

<p>To create a new file, we can use the <code>createNewFile()</code> method. It returns</p>

<ul>
<li><code>true</code> if a new file is created.</li>
<li><code>false</code> if the file already exists in the specified location.</li>
</ul>

<h3>Example: Create a new File</h3>

<pre>
<code>// importing the File class
import java.io.File;

class Main {
public static void main(String[] args) {

// create a file object for the current location
File file = new File("newFile.txt");

try {

// trying to create a file based on the object
boolean value = file.createNewFile();
if (value) {
System.out.println("The new file is created.");
}
else {
System.out.println("The file already exists.");
}
}
catch(Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p>In the above example, we have created a file object named <var>file</var>. The file object is linked with the specified file path.</p>

<pre>
<code>File file = new File("newFile.txt");</code></pre>

<p>Here, we have used the file object to create the new file with the specified path.</p>

<p><strong>If newFile.txt doesn't exist in the current location</strong>, the file is created and this message is shown.</p>

<pre>
<samp>The new file is created.</samp></pre>

<p><strong>However, if newFile.txt already exists</strong>, we will see this message.</p>

<pre>
<samp>The file already exists.</samp></pre>

<hr>
<h3 id="read">Java read files</h3>

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
</div><div class="clearfix"></div><p>To read data from the file, we can use subclasses of either <a href="/java-programming/inputstream">InputStream</a> or <a href="/java-programming/reader">Reader</a>.</p>

<h3>Example: Read a file using FileReader</h3>

<p>Suppose we have a file named <strong>input.txt</strong> with the following content.</p>

<pre>
<code>This is a line of text inside the file. </code></pre>

<p>Now let's try to read the file using Java <code>FileReader</code>.</p>

<pre>
<code>// importing the FileReader class
import java.io.FileReader;

class Main {
public static void main(String[] args) {

char[] array = new char[100];
try {
// Creates a reader using the FileReader
FileReader input = new FileReader("input.txt");

// Reads characters
input.read(array);
System.out.println("Data in the file:");
System.out.println(array);

// Closes the reader
input.close();
}
catch(Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data in the file:
This is a line of text inside the file.</samp></pre>

<p>In the above example, we have used created an object of FileReader named input. It is now linked with the <strong>input.txt</strong> file.</p>

<pre>
<code>FileReader input = new FileReader("input.txt");</code></pre>

<p>To read the data from the <strong>input.txt</strong> file, we have used the read() method of <code>FileReader</code>.</p>

<hr>
<h3 id="write">Java write to files</h3>

<p>To write data to the file, we can use subclasses of either <a href="/java-programming/outputstream">OutputStream</a> or <a href="/java-programming/writer">Writer</a>.</p>

<h3>Example: Write to file using FileWriter</h3>

<pre>
<code>// importing the FileWriter class
import java.io.FileWriter;

class Main {
public static void main(String args[]) {

String data = "This is the data in the output file";
try {
// Creates a Writer using FileWriter
FileWriter output = new FileWriter("output.txt");

// Writes string to the file
output.write(data);
System.out.println("Data is written to the file.");

// Closes the writer
output.close();
}
catch (Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong> </p>

<pre>
<samp>Data is written to the file.</samp></pre>

<p>In the above example, we have created a writer using the <code>FileWriter</code> class. The writer is linked with the <strong>output.txt</strong> file.</p>

<pre>
<code>FileWriter output = new FileWriter("output.txt");</code></pre>

<p>To write data to the file, we have used the <code>write()</code> method<code>.</code></p>

<p>Here when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is the data in the output file.</code></pre>

<hr>
<h3 id="delete">Java delete files</h3>

<p>We can use the <code>delete()</code> method of the <var>File</var> class to delete the specified file or directory. It returns</p>

<ul>
<li><code>true</code> if the file is deleted.</li>
<li><code>false</code> if the file does not exist.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: We can only delete empty directories.</p>

<h3>Example: Delete a file</h3>

<pre>
<code>import java.io.File;

class Main {
public static void main(String[] args) {

// creates a file object
File file = new File("file.txt");

// deletes the file
boolean value = file.delete();
if(value) {
System.out.println("The File is deleted.");
}
else {
System.out.println("The File is not deleted.");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The File is deleted.</samp></pre>

<p>In the above example, we have created an object of File named file. The file now holds the information about the specified file.</p>

<pre>
<code>File file = new File("file.txt");</code></pre>

<p>Here we have used the <code>delete()</code> method to delete the file specified by the object.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/examples/create-and-write-to-file">Java Program to Create File and Write to the File</a></li>
<li><a href="/java-programming/examples/delete-file">Java Program to Delete File in Java</a> </li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#file-directory">File and Directory</a></li>
<li><a href="#create-object">Create a Java File Object</a></li>
<li><a href="#methods">Java File Operation Methods</a></li>
<li><a href="#create">Java create files</a></li>
<li><a href="#read">Java read files</a></li>
<li><a href="#write">Java write to files</a></li>
<li><a href="#delete">Java delete files</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="Reader">
                        
            <div class="editor-contents">
                <h1>Java Reader Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2631" class="node node-java-tutorial clearfix" about="/java-programming/reader" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Reader Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>Reader</code> class of the <code>java.io</code> package is an abstract superclass that represents a stream of characters.</p>

<p>Since <code>Reader</code> is an abstract class, it is not useful by itself. However, its subclasses can be used to read data.</p>

<hr>
<h2 id="subclasses">Subclasses of Reader</h2>

<p>In order to use the functionality of <code>Reader</code>, we can use its subclasses. Some of them are:</p>

<ul>
<li><a href="https://www.programiz.com/java-programming/bufferedreader" title="Java BufferedReader">BufferedReader</a></li>
<li><a href="https://www.programiz.com/java-programming/inputstreamreader" title="Java InputStreamReader">InputStreamReader</a></li>
<li><a href="https://www.programiz.com/java-programming/filereader" title="Java FileReader">FileReader</a></li>
<li><a href="https://www.programiz.com/java-programming/stringreader" title="Java StringReader">StringReader</a></li>
</ul>

<p>
<figure><img src="/sites/tutorial2program/files/java-reader-subclasses.png" title="Subclasses of Reader" alt="BufferedReader, InputStreamReader, and StringReader are subclasses of Reader" width="500" height="320">
<figcaption>Subclasses of Reader</figcaption></figure></p>

<p>We will learn about all these subclasses in the next tutorial.</p>

<hr>
<h2 id="create">Create a Reader</h2>

<p>In order to create a <code>Reader</code>, we must import the <code>java.io.Reader</code> package first. Once we import the package, here is how we can create the reader.</p>

<pre>
<code>// Creates a Reader
Reader input = new FileReader();
</code></pre>

<p>Here, we have created a reader using the <code>FileReader</code> class. It is because <code>Reader</code> is an abstract class. Hence we cannot create an object of <code>Reader</code>.</p>

<p class="note-tip"><strong>Note</strong>: We can also create readers from other subclasses of <code>Reader</code>.</p>

<hr>
<h2 id="methods">Methods of Reader</h2>

<p>The <code>Reader</code> class provides different methods that are implemented by its subclasses. Here are some of the commonly used methods:</p>

<ul>
<li><code>ready()</code> - checks if the reader is ready to be read</li>
<li><code>read(char[] array)</code> - reads the characters from the stream and stores in the specified <a href="/java-programming/arrays" title="array">array</a></li>
<li><code>read(char[] array, int start, int length)</code> - reads the number of characters equal to <var>length</var> from the stream and stores in the specified array starting from the <var>start</var></li>
<li><code>mark()</code> - marks the position in the stream up to which data has been read</li>
<li><code>reset()</code> - returns the control to the point in the stream where the mark is set</li>
<li><code>skip()</code> - discards the specified number of characters from the stream</li>
</ul>

<hr>
<h2 id="example">Example: Reader Using FileReader</h2>

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
</div><div class="clearfix"></div><p>Here is how we can implement <code>Reader</code> using the <code>FileReader</code> class.</p>

<p>Suppose we have a file named <strong>input.txt</strong> with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<p>Let's try to read this file using <code>FileReader</code> (a subclass of <code>Reader</code>).</p>

<pre>
<code>import java.io.Reader;
import java.io.FileReader;

class Main {
public static void main(String[] args) {

// Creates an array of character
char[] array = new char[100];

try {
// Creates a reader using the FileReader
Reader input = new FileReader("input.txt");

// Checks if reader is ready 
System.out.println("Is there data in the stream?  " + input.ready());

// Reads characters
input.read(array);
System.out.println("Data in the stream:");
System.out.println(array);

// Closes the reader
input.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Is there data in the stream?  true
Data in the stream:
This is a line of text inside the file.
</samp></pre>

<p>In the above example, we have created a reader using the <code>FileReader</code> class. The reader is linked with the file <strong>input.txt</strong>.</p>

<pre>
<code>Reader input = new FileReader("input.txt");
</code></pre>

<p>To read data from the <strong>input.txt</strong> file, we have implemented these methods.</p>

<pre>
<code>input.read();       // to read data from the reader
input.close();      // to close the reader
</code></pre>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/Reader.html" title="Java Reader (official Java documentation)">Java Reader (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#subclasses">Subclasses of Reader</a></li>
<li><a href="#create">Create a Reader</a></li>
<li><a href="#methods">Methods of Reader</a></li>
<li><a href="#example">Example: Reader Using FileReader</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="Writer">
                        
            <div class="editor-contents">
                <h1>Java Writer Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2625" class="node node-java-tutorial clearfix" about="/java-programming/writer" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Writer Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>Writer</code> class of the <code>java.io</code> package is an abstract superclass that represents a stream of characters.</p>

<p>Since <code>Writer</code> is an abstract class, it is not useful by itself. However, its subclasses can be used to write data.</p>

<hr>
<h2 id="subclasses">Subclasses of Writer</h2>

<p>In order to use the functionality of the <code>Writer</code>, we can use its subclasses. Some of them are:</p>

<ul>
<li><a href="https://www.programiz.com/java-programming/bufferedwriter">BufferedWriter</a></li>
<li><a href="https://www.programiz.com/java-programming/outputstreamwriter">OutputStreamWriter</a></li>
<li><a href="https://www.programiz.com/java-programming/filewriter">FileWriter</a></li>
<li><a href="https://www.programiz.com/java-programming/stringwriter">StringWriter</a></li>
</ul>

<p><figure><img src="/sites/tutorial2program/files/java-writer-subclasses.png" title="Subclasses of Writer" alt="BufferedWriter, InputStreamWriter, and StringWriter are subclasses of Writer." width="500" height="320">
<figcaption>Subclasses of Writer</figcaption></figure></p>

<p>We will learn about all these subclasses in the next tutorial.</p>

<hr>
<h2 id="create">Create a Writer</h2>

<p>In order to create a <code>Writer</code>, we must import the <code>java.io.Writer</code> package first. Once we import the package, here is how we can create the writer.</p>

<pre>
<code>// Creates a Writer
Writer output = new FileWriter();
</code></pre>

<p>Here, we have created a writer named output using the <code>FileWriter</code> class. It is because the <code>Writer</code> is an abstract class. Hence we cannot create an object of <code>Writer</code>.</p>

<p class="note-tip"><strong>Note</strong>: We can also create writers from other subclasses of the <code>Writer</code> class.</p>

<hr>
<h2 id="methods">Methods of Writer</h2>

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
</div><div class="clearfix"></div><p>The <code>Writer</code> class provides different methods that are implemented by its subclasses. Here are some of the methods:</p>

<ul>
<li><code>write(char[] array)</code> - writes the characters from the specified <a href="/java-programming/arrays" title="array">array</a> to the output stream</li>
<li><code>write(String data)</code> - writes the specified string to the writer</li>
<li><code>append(char c)</code> - inserts the specified character to the current writer</li>
<li><code>flush()</code> - forces to write all the data present in the writer to the corresponding destination</li>
<li><code>close()</code> - closes the writer</li>
</ul>

<hr>
<h2 id="example">Example: Writer Using FileWriter</h2>

<p>Here is how we can implement the <code>Writer</code> using the <code>FileWriter</code> class.</p>

<pre>
<code>import java.io.FileWriter;
import java.io.Writer;

public class Main {

public static void main(String args[]) {

String data = "This is the data in the output file";

try {
// Creates a Writer using FileWriter
Writer output = new FileWriter("output.txt");


// Writes string to the file
output.write(data);

// Closes the writer
output.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created a writer using the <code>FileWriter</code> class. The writer is linked with the file <strong>output.txt</strong>.</p>

<pre>
<code>Writer output = new FileWriter("output.txt");
</code></pre>

<p>To write data to the <strong>output.txt</strong> file, we have implemented these methods.</p>

<pre>
<code>output.write();      // To write data to the file
output.close();      // To close the writer
</code></pre>

<p>When we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/Writer.html" title="Java Writer (official Java documentation)">Java Writer (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#subclasses">Subclasses of Writer</a></li>
<li><a href="#create">Create a Writer</a></li>
<li><a href="#methods">Methods of Writer</a></li>
<li><a href="#example">Example: Writer Using FileWriter</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                <div id="inputStreamReader">
                    
            <div class="editor-contents">
                <h1>Java InputStreamReader Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2633" class="node node-java-tutorial clearfix" about="/java-programming/inputstreamreader" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java InputStreamReader Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>InputStreamReader</code> class of the <code>java.io</code> package can be used to convert data in bytes into data in characters.</p>

<p>It extends the abstract class <code>Reader</code>.</p>

<p><img alt="The InputStreamReader class is a suclass of Java Reader." height="163" src="//cdn.programiz.com/sites/tutorial2program/files/java-%20inputstreamreader.png" title="Java InputStreamReader Class" width="200"></p>

<p>The <code>InputStreamReader</code> class works with other input streams. It is also known as a bridge between byte streams and character streams. This is because the <code>InputStreamReader</code> reads bytes from the input stream as characters.</p>

<p>For example, some characters required 2 bytes to be stored in the storage. To read such data we can use the input stream reader that reads the 2 bytes together and converts into the corresponding character.</p>

<hr>
<h2 id="create">Create an InputStreamReader</h2>

<p>In order to create an <code>InputStreamReader</code>, we must import the <code>java.io.InputStreamReader</code> package first. Once we import the package here is how we can create the input stream reader.</p>

<pre>
<code>// Creates an InputStream
FileInputStream file = new FileInputStream(String path);

// Creates an InputStreamReader
InputStreamReader input = new InputStreamReader(file);
</code></pre>

<p>In the above example, we have created an <code>InputStreamReader</code> named <var>input</var> along with the <code>FileInputStream</code> named <var>file</var>.</p>

<p>Here, the data in the file are stored using some default character encoding.</p>

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
</div><div class="clearfix"></div><p>However, we can specify the type of character encoding (<strong>UTF8</strong> or <strong>UTF16</strong>) in the file as well.</p>

<pre>
<code>// Creates an InputStreamReader specifying the character encoding
InputStreamReader input = new InputStreamReader(file, Charset cs);
</code></pre>

<p>Here, we have used the <code>Charset</code> class to specify the character encoding in the file.</p>

<hr>
<h2>Methods of InputStreamReader</h2>

<p>The <code>InputStreamReader</code> class provides implementations for different methods present in the <code>Reader</code> class.</p>

<h3 id="read">read() Method</h3>

<ul>
<li><code>read()</code> - reads a single character from the reader</li>
<li><code>read(char[] array)</code> - reads the characters from the reader and stores in the specified <a href="/java-programming/arrays" title="array">array</a></li>
<li><code>read(char[] array, int start, int length)</code> - reads the number of characters equal to <var>length</var> from the reader and stores in the specified array starting from the <var>start</var></li>
</ul>

<p>For example, suppose we have a file named <strong>input.txt</strong> with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<p>Let's try to read this file using <code>InputStreamReader</code>.</p>

<pre>
<code>import java.io.InputStreamReader;
import java.io.FileInputStream;

class Main {
public static void main(String[] args) {

// Creates an array of character
char[] array = new char[100];

try {
// Creates a FileInputStream
FileInputStream file = new FileInputStream("input.txt");

// Creates an InputStreamReader
InputStreamReader input = new InputStreamReader(file);

// Reads characters from the file
input.read(array);
System.out.println("Data in the stream:");
System.out.println(array);

// Closes the reader
input.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data in the stream:
This is a line of text inside the file.
</samp></pre>

<p>In the above example, we have created an input stream reader using the file input stream. The input stream reader is linked with the file <strong>input.txt</strong>.</p>

<pre>
<code> FileInputStream file = new FileInputStream("input.txt");
InputStreamReader input = new InputStreamReader(file);
</code></pre>

<p>To read characters from the file, we have used the <code>read()</code> method.</p>

<hr>
<h2 id="getEncoding">getEncoding() Method</h2>

<p>The <code>getEncoding()</code> method can be used to get the type of encoding that is used to store data in the input stream. For example,</p>

<pre>
<code>import java.io.InputStreamReader;
import java.nio.charset.Charset;
import java.io.FileInputStream;

class Main {
public static void main(String[] args) {

try {
// Creates a FileInputStream
FileInputStream file = new FileInputStream("input.txt");

// Creates an InputStreamReader with default encoding
InputStreamReader input1 = new InputStreamReader(file);

// Creates an InputStreamReader specifying the encoding
InputStreamReader input2 = new InputStreamReader(file, Charset.forName("UTF8"));

// Returns the character encoding of the input stream
System.out.println("Character encoding of input1: " + input1.getEncoding());
System.out.println("Character encoding of input2: " + input2.getEncoding());

// Closes the reader
input1.close();
input2.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The character encoding of input1: Cp1252
The character encoding of input2: UTF8
</samp></pre>

<p>In the above example, we have created 2 input stream reader named <var>input1</var> and <var>input2</var>.</p>

<ul>
<li><var>input1</var> does not specify the character encoding. Hence the <code>getEncoding()</code> method returns the canonical name of the default character encoding.</li>
<li><var>input2</var> specifies the character encoding, <strong>UTF8</strong>. Hence the <code>getEncoding()</code> method returns the specified character encoding.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: We have used the <code>Charset.forName()</code> method to specify the type of character encoding. To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/nio/charset/Charset.html" title="Java Charset (official Java documentation)">Java Charset (official Java documentation)</a>.</p>

<hr>
<h3>close() Method</h3>

<p>To close the input stream reader, we can use the <code>close()</code> method. Once the <code>close()</code> method is called, we cannot use the reader to read the data.</p>

<hr>
<h2 id="other-methods">Other Methods of InputStreamReader</h2>

<table>
<tbody>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>ready()</code></td>
<td>checks if the stream is ready to be read</td>
</tr>
<tr>
<td><code>mark()</code></td>
<td>mark the position in stream up to which data has been read</td>
</tr>
<tr>
<td><code>reset()</code></td>
<td>returns the control to the point in the stream where the mark was set</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/InputStreamReader.html" title="Java InputStreamReader (official Java documentation)">Java InputStreamReader (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create an InputStreamReader</a></li>
<li><a href="#read">read() Method</a></li>
<li><a href="#getEncoding">getEncoding() Method</a></li>
<li><a href="#other-methods">Other Methods of InputStreamReader</a></li>
</ul>
</div></div></div>                          </div>
                </div>
                <div id="outputStreamWriter">
                    
            <div class="editor-contents">
                <h1>Java OutputStreamWriter Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2634" class="node node-java-tutorial clearfix" about="/java-programming/outputstreamwriter" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java OutputStreamWriter Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>OutputStreamWriter</code> class of the <code>java.io</code> package can be used to convert data in character form into data in bytes form.</p>

<p>It extends the abstract class <code>Writer</code>.</p>

<p><figure><img src="/sites/tutorial2program/files/java-%20outputstreamwriter.png" title="OutputStreamWriter extends the abstract class Writer" alt="OutputStreamWriter " width="380" height="220">
<figcaption>OutputStreamWriter</figcaption></figure></p>

<p>The <code>OutputStreamWriter</code> class works with other output streams. It is also known as a bridge between byte streams and character streams. This is because the <code>OutputStreamWriter</code> converts its characters into bytes.</p>

<p>For example, some characters require 2 bytes to be stored in the storage. To write such data we can use the output stream writer that converts the character into corresponding bytes and stores the bytes together.</p>

<hr>
<h2 id="create">Create an OutputStreamWriter</h2>

<p>In order to create an <code>OutputStreamWriter</code>, we must import the <code>java.io.OutputStreamWriter</code> package first. Once we import the package here is how we can create the output stream writer.</p>

<pre>
<code>// Creates an OutputStream
FileOutputStream file = new FileOutputStream(String path);

// Creates an OutputStreamWriter
OutputStreamWriter output = new OutputStreamWriter(file);
</code></pre>

<p>In the above example, we have created an <code>OutputStreamWriter</code> named output along with the <code>FileOutputStream</code> named file.</p>

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
</div><div class="clearfix"></div><p>Here, we are using the default character encoding to write characters to the output stream.</p>

<p>However, we can specify the type of character encoding (<strong>UTF8</strong> or <strong>UTF16</strong>) to be used to write data.</p>

<pre>
<code>// Creates an OutputStreamWriter specifying the character encoding
OutputStreamWriter output = new OutputStreamWriter(file, Charset cs);
</code></pre>

<p>Here, we have used the <code>Charset</code> class to specify the type of character encoding.</p>

<hr>
<h2>Methods of OutputStreamWriter</h2>

<p>The <code>OutputStreamWriter</code> class provides implementations for different methods present in the <code>Writer</code> class.</p>

<h3 id="write">write() Method</h3>

<ul>
<li><code>write()</code> - writes a single character to the writer</li>
<li><code>write(char[] array)</code> - writes the characters from the specified <a href="/java-programming/arrays" title="array">array</a> to the writer</li>
<li><code>write(String data)</code> - writes the specified <a href="/java-programming/string" title="string">string</a> to the writer</li>
</ul>

<hr>
<h3>Example: OutputStreamWriter to write data to a File</h3>

<pre>
<code>import java.io.FileOutputStream;
import java.io.OutputStreamWriter;

public class Main {

public static void main(String args[]) {

String data = "This is a line of text inside the file.";

try {
// Creates a FileOutputStream
FileOutputStream file = new FileOutputStream("output.txt");

// Creates an OutputStreamWriter
OutputStreamWriter output = new OutputStreamWriter(file);

// Writes string to the file
output.write(data);

// Closes the writer
output.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created an output stream reader using the file output stream. The output stream reader is linked with the <strong>output.txt</strong> file.</p>

<pre>
<code>FileOutputStream file = new FileOutputStream("output.txt");
OutputStreamWriter output = new OutputStreamWriter(file);
</code></pre>

<p>To write data to the file, we have used the <code>write()</code> method.</p>

<p>Here, when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<hr>
<h2 id="getEncoding">getEncoding() Method</h2>

<p>The <code>getEncoding()</code> method can be used to get the type of encoding that is used to write data to the output stream. For example,</p>

<pre>
<code>import java.io.OutputStreamWriter;
import java.nio.charset.Charset;
import java.io.FileOutputStream;

class Main {
public static void main(String[] args) {

try {
// Creates an output stream
FileOutputStream file = new FileOutputStream("output.txt");

// Creates an output stream reader with default encoding
OutputStreamWriter output1 = new OutputStreamWriter(file);

// Creates an output stream reader specifying the encoding
OutputStreamWriter output2 = new OutputStreamWriter(file, Charset.forName("UTF8"));

// Returns the character encoding of the output stream
System.out.println("Character encoding of output1: " + output1.getEncoding());
System.out.println("Character encoding of output2: " + output2.getEncoding());

// Closes the reader
output1.close();
output2.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The character encoding of output1: Cp1252
The character encoding of output2: UTF8
</samp></pre>

<p>In the above example, we have created 2 output stream writer named <var>output1</var> and <var>output2</var>.</p>

<ul>
<li><var>output1</var> does not specify the character encoding. Hence the <code>getEncoding()</code> method returns the default character encoding.</li>
<li><var>output2</var> specifies the character encoding, <strong>UTF8</strong>. Hence the <code>getEncoding()</code> method returns the specified character encoding.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: We have used the <code>Charset.forName()</code> method to specify the type of character encoding. To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/nio/charset/Charset.html" title="Java Charset (official Java documentation)">Java Charset (official Java documentation)</a>.</p>

<hr>
<h2>close() Method</h2>

<p>To close the output stream writer, we can use the <code>close()</code> method. Once the <code>close()</code> method is called, we cannot use the writer to write the data.</p>

<hr>
<h2 id="other-methods">Other methods of OutputStreamWriter</h2>

<table>
<tbody>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>flush()</code></td>
<td>forces to write all the data present in the writer to the corresponding destination</td>
</tr>
<tr>
<td><code>append()</code></td>
<td>inserts the specified character to the current writer</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/io/OutputStreamWriter.html" title="Java OutputStreamWriter (official Java documentation)">Java OutputStreamWriter (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create an OutputStreamWriter</a></li>
<li><a href="#write">write() Method</a></li>
<li><a href="#getEncoding">getEncoding() Method</a></li>
<li><a href="#other-methods">Other methods of OutputStreamWriter</a></li>
</ul>
</div></div></div>                          </div>
                </div>
                <div id="fileReader">
                    
            <div class="editor-contents">
                <h1>Java FileReader Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2626" class="node node-java-tutorial clearfix" about="/java-programming/filereader" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java FileReader Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>FileReader</code> class of the <code>java.io</code> package can be used to read data (in characters) from files.</p>

<p>It extends the <a href="/java-programming/inputstreamreader" title="InputSreamReader">InputSreamReader</a> class.</p>

<p><figure><img src="/sites/tutorial2program/files/java-filereader.png" title="FileReader extends InputStreamReader" alt="FileReader extends the InputStreamReader and Reader classes" width="300" height="220">
<figcaption>FileReader extends InputStreamReader</figcaption></figure></p>

<p>Before you learn about <code>FileReader</code>, make sure you know about the <a href="/java-programming/file" title="Java File">Java File</a>.</p>

<hr>
<h2 id="create">Create a FileReader</h2>

<p>In order to create a file reader, we must import the <code>java.io.FileReader</code> package first. Once we import the package, here is how we can create the file reader.</p>

<p><strong>1. Using the name of the file </strong></p>

<pre>
<code>FileReader input = new FileReader(String name);
</code></pre>

<p>Here, we have created a file reader that will be linked to the file specified by the <var>name</var>.</p>

<p><strong>2. Using an object of the file </strong></p>

<pre>
<code>FileReader input = new FileReader(File fileObj);
</code></pre>

<p>Here, we have created a file reader that will be linked to the file specified by the object of the file.</p>

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
</div><div class="clearfix"></div><p>In the above example, the data in the file are stored using some default character encoding.</p>

<p>However, since Java 11 we can specify the type of character encoding (<strong>UTF-8</strong> or <strong>UTF-16</strong>) in the file as well.</p>

<pre>
<code>FileReader input = new FileReader(String file, Charset cs);
</code></pre>

<p>Here, we have used the <code>Charset</code> class to specify the character encoding of the file reader.</p>

<hr>
<h2>Methods of FileReader</h2>

<p>The <code>FileReader</code> class provides implementations for different methods present in the <code>Reader</code> class.</p>

<h3 id="read">read() Method</h3>

<ul>
<li><code>read()</code> - reads a single character from the reader</li>
<li><code>read(char[] array)</code> - reads the characters from the reader and stores in the specified <a href="/java-programming/arrays" title="array">array</a></li>
<li><code>read(char[] array, int start, int length)</code> - reads the number of characters equal to <var>length</var> from the reader and stores in the specified array starting from the position <var>start</var></li>
</ul>

<p>For example, suppose we have a file named <strong>input.txt</strong> with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<p>Let's try to read the file using <code>FileReader</code>.</p>

<pre>
<code>import java.io.FileReader;

class Main {
public static void main(String[] args) {

// Creates an array of character
char[] array = new char[100];

try {
// Creates a reader using the FileReader
FileReader input = new FileReader("input.txt");

// Reads characters
input.read(array);
System.out.println("Data in the file: ");
System.out.println(array);

// Closes the reader
input.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data in the file:
This is a line of text inside the file.
</samp></pre>

<p>In the above example, we have created a file reader named <var>input</var>. The file reader is linked with the file <strong>input.txt</strong>.</p>

<pre>
<code>FileInputStream input = new FileInputStream("input.txt");
</code></pre>

<p>To read data from the file, we have used the <code>read()</code> method.</p>

<p class="note-tip"><strong>Note</strong>: The file <strong>input.txt</strong> should be present in the current working directory.</p>

<hr>
<h2 id="getEncoding">getEncoding() Method</h2>

<p>The <code>getEncoding()</code> method can be used to get the type of encoding that is used to store data in the file. For example,</p>

<pre>
<code>import java.io.FileReader;
import java.nio.charset.Charset;

class Main {
public static void main(String[] args) {

try {
// Creates a FileReader with default encoding
FileReader input1 = new FileReader("input.txt");

// Creates a FileReader specifying the encoding
FileReader input2 = new FileReader("input.txt", Charset.forName("UTF8"));

// Returns the character encoding of the file reader
System.out.println("Character encoding of input1: " + input1.getEncoding());
System.out.println("Character encoding of input2: " + input2.getEncoding());

// Closes the reader
input1.close();
input2.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The character encoding of input1: Cp1252
The character encoding of input2: UTF8
</samp></pre>

<p>In the above example, we have created 2 file reader named <var>input1</var> and <var>input2</var>.</p>

<ul>
<li><var>input1</var> does not specify the character encoding. Hence the <code>getEncoding()</code> method returns the default character encoding.</li>
<li><var>input2</var> specifies the character encoding, <strong>UTF8</strong>. Hence the <code>getEncoding()</code> method returns the specified character encoding.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: We have used the <code>Charset.forName()</code> method to specify the type of character encoding. To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/nio/charset/Charset.html" title="Java Charset (official Java documentation)">Java Charset (official Java documentation)</a>.</p>

<hr>
<h3>close() Method</h3>

<p>To close the file reader, we can use the <code>close()</code> method. Once the <code>close()</code> method is called, we cannot use the reader to read the data.</p>

<hr>
<h2 id="other-methods">Other Methods of FileReader</h2>

<table>
<tbody>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>ready()</code></td>
<td>checks if the file reader is ready to be read</td>
</tr>
<tr>
<td><code>mark()</code></td>
<td>mark the position in file reader up to which data has been read</td>
</tr>
<tr>
<td><code>reset()</code></td>
<td>returns the control to the point in the reader where the mark was set</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/FileReader.html" title="Java FileReader (official Java documentation)">Java FileReader (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create a FileReader</a></li>
<li><a href="#read">read() Method</a></li>
<li><a href="#getEncoding">getEncoding() Method</a></li>
<li><a href="#other-methods">Other Methods of FileReader</a></li>
</ul>
</div></div></div>                          </div>
                </div>
                <div id="fileWriter">
                    
            <div class="editor-contents">
                <h1>Java FileWriter Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2635" class="node node-java-tutorial clearfix" about="/java-programming/filewriter" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java FileWriter Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>FileWriter</code> class of the <code>java.io</code> package can be used to write data (in characters) to files.</p>

<p>It extends the <a href="/java-programming/outputstreamwriter">OutputStreamWriter</a> class.</p>

<figure><img src="/sites/tutorial2program/files/java-filewriter.png" title="Java FileWriter Class" alt="The FileWriter is a subclass of OutputStreamWriter and the OutputStreamWriter is subclass of the Java Writer." width="200" height="236">
</figure>
<p>Before you learn more about <code>FileWriter</code>, make sure to know about <a href="/java-programming/file">Java File</a>.</p>

<hr>
<h2 id="create">Create a FileWriter</h2>

<p>In order to create a file writer, we must import the <code>Java.io.FileWriter</code> package first. Once we import the package, here is how we can create the file writer.</p>

<p><strong>1. Using the name of the file</strong> </p>

<pre>
<code>FileWriter output = new FileWriter(String name);</code></pre>

<p>Here, we have created a file writer that will be linked to the file specified by the <var>name</var>.</p>

<p><strong>2. Using an object of the file</strong> </p>

<pre>
<code>FileWriter  input = new FileWriter(File fileObj);</code></pre>

<p>Here, we have created a file writer that will be linked to the file specified by the object of the file.</p>

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
</div><div class="clearfix"></div><p>In the above example, the data are stored using some default character encoding.</p>

<p>However, since Java 11 we can specify the type of character encoding (<strong>UTF8</strong> or <strong>UTF16</strong>) as well.</p>

<pre>
<code>FileWriter input = new FileWriter(String file, Charset cs);</code></pre>

<p>Here, we have used the <code>Charset</code> class to specify the character encoding of the file writer.</p>

<hr>
<h2>Methods of FileWriter</h2>

<p>The <code>FileWriter</code> class provides implementations for different methods present in the <code>Writer</code> class.</p>

<h3 id="write">write() Method</h3>

<ul>
<li><code>write()</code> - writes a single character to the writer</li>
<li><code>write(char[] array)</code> - writes the characters from the specified <a href="/java-programming/arrays">array</a> to the writer</li>
<li><code>write(String data)</code> - writes the specified string to the writer</li>
</ul>

<hr>
<h3>Example: FileWriter to write data to a File</h3>

<pre>
<code>import java.io.FileWriter;

public class Main {

public static void main(String args[]) {

String data = "This is the data in the output file";

try {
// Creates a FileWriter
FileWriter output = new FileWriter("output.txt");

// Writes the string to the file
output.write(data);

// Closes the writer
output.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p>In the above example, we have created a file writer named <var>output</var>. The output reader is linked with the <strong>output.txt</strong> file.</p>

<pre>
<code>FileWriter output = new FileWriter("output.txt");</code></pre>

<p>To write data to the file, we have used the <code>write()</code> method.</p>

<p>Here when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is a line of text inside the file.</code></pre>

<hr>
<h2 id="getEncoding">getEncoding() Method</h2>

<p>The <code>getEncoding()</code> method can be used to get the type of encoding that is used to write data. For example,</p>

<pre>
<code>import java.io.FileWriter;
import java.nio.charset.Charset;

class Main {
public static void main(String[] args) {

String file = "output.txt";

try {
// Creates a FileReader with default encoding
FileWriter output1 = new FileWriter(file);

// Creates a FileReader specifying the encoding
FileWriter output2 = new FileWriter(file, Charset.forName("UTF8"));

// Returns the character encoding of the reader
System.out.println("Character encoding of output1: " + output1.getEncoding());
System.out.println("Character encoding of output2: " + output2.getEncoding());

// Closes the reader
output1.close();
output2.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The character encoding of output1: Cp1252
The character encoding of output2: UTF8</samp></pre>

<p>In the above example, we have created 2 file writer named <var>output1</var> and <var>output2</var>.</p>

<ul>
<li><var>output1</var> does not specify the character encoding. Hence the <code>getEncoding()</code> method returns the default character encoding.</li>
<li><var>output2</var> specifies the character encoding, <strong>UTF8</strong>. Hence the <code>getEncoding()</code> method returns the specified character encoding.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: We have used the <code>Charset.forName()</code> method to specify the type of character encoding. To learn more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/nio/charset/Charset.html">Java Charset (official Java documentation)</a>.</p>

<hr>
<h2>close() Method</h2>

<p>To close the file writer, we can use the <code>close()</code> method. Once the <code>close()</code> method is called, we cannot use the writer to write the data.</p>

<hr>
<h2 id="other-methods">Other methods of FileWriter</h2>

<div class="table-responsive">
<table>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>flush()</code></td>
<td>forces to write all the data present in the writer to the corresponding destination</td>
</tr>
<tr>
<td><code>append()</code></td>
<td>inserts the specified character to the current writer</td>
</tr>
</table>
</div>

<p>To learn more, visit <a href="https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/FileWriter.html">Java FileWriter (official Java documentation)</a>.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create a FileWriter</a></li>
<li><a href="#write">write() Method</a></li>
<li><a href="#getEncoding">getEncoding() Method</a></li>
<li><a href="#other-methods">Other methods of FileWriter</a></li>
</ul>
</div></div></div>                          </div>
                </div>
                <div id="bufferedReader">

                    <div class="editor-contents">
                        <h1>Java BufferedReader</h1>
        
        
                      <!--  <p class="editor-contents__short-description"></p> -->
        
        
        
                          



<div id="node-2640" class="node node-java-tutorial clearfix" about="/java-programming/bufferedreader" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java BufferedReader" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>BufferedReader</code> class of the <code>java.io</code> package can be used with other readers to read data (in characters) more efficiently.</p>

<p>It extends the abstract class <code>Reader</code>.</p>

<figure><img src="/sites/tutorial2program/files/java-bufferedreader.png" title="Java BufferedReader" alt="The BufferedReader class extends the Reader class in Java" width="380" height="220">
<figcaption>Java BufferedReader</figcaption></figure>
<hr>
<h2 id="working">Working of BufferedReader</h2>

<p>The <code>BufferedReader</code> maintains an internal <strong>buffer of 8192 characters</strong>.</p>

<p>During the read operation in <code>BufferedReader</code>, a chunk of characters is read from the disk and stored in the internal buffer. And from the internal buffer characters are read individually.</p>

<p>Hence, the number of communication to the disk is reduced. This is why reading characters is faster using <code>BufferedReader</code>.</p>

<hr>
<h2 id="create">Create a BufferedReader</h2>

<p>In order to create a <code>BufferedReader</code>, we must import the <code>java.io.BuferedReader</code> package first. Once we import the package, here is how we can create the reader.</p>

<pre>
<code>// Creates a FileReader
FileReader file = new FileReader(String file);

// Creates a BufferedReader
BufferedReader buffer = new BufferedReader(file);</code></pre>

<p>In the above example, we have created a <code>BufferedReader</code> named <var>buffer</var> with the <code>FileReader</code> named <var>file</var>.</p>

<p>Here, the internal buffer of the <code>BufferedReader</code> has the default size of 8192 characters. However, we can specify the size of the internal buffer as well.</p>

<pre>
<code>// Creates a BufferdReader with specified size internal buffer
BufferedReader buffer = new BufferedReader(file, int size);</code></pre>

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
</div><div class="clearfix"></div><p>The buffer will help to read characters from the files more quickly.</p>

<hr>
<h2>Methods of BufferedReader</h2>

<p>The <code>BufferedReader</code> class provides implementations for different methods present in <code>Reader</code>.</p>

<h3 id="read">read() Method</h3>

<ul>
<li><code>read()</code> - reads a single character from the internal buffer of the reader</li>
<li><code>read(char[] array)</code> - reads the characters from the reader and stores in the specified <a href="/java-programming/arrays" title="array">array</a></li>
<li><code>read(char[] array, int start, int length)</code> - reads the number of characters equal to <var>length</var> from the reader and stores in the specified array starting from the position <var>start</var></li>
</ul>

<p>For example, suppose we have a file named <strong>input.txt</strong> with the following content.</p>

<pre>
<code>This is a line of text inside the file.</code></pre>

<p>Let's try to read the file using <code>BufferedReader</code>.</p>

<pre>
<code>import java.io.FileReader;
import java.io.BufferedReader;

class Main {
public static void main(String[] args) {

// Creates an array of character
char[] array = new char[100];

try {
// Creates a FileReader
FileReader file = new FileReader("input.txt");

// Creates a BufferedReader
BufferedReader input = new BufferedReader(file);

// Reads characters
input.read(array);
System.out.println("Data in the file: ");
System.out.println(array);

// Closes the reader
input.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data in the file:
This is a line of text inside the file.</samp></pre>

<p>In the above example, we have created a buffered reader named <var>input</var>. The buffered reader is linked with the <strong>input.txt</strong> file.</p>

<pre>
<code>FileReader file = new FileReader("input.txt");
BufferedReader input = new BufferedReader(file);</code></pre>

<p>Here, we have used the <code>read()</code> method to read an array of characters from the internal buffer of the buffered reader.</p>

<hr>
<h3 id="skip">skip() Method</h3>

<p>To discard and skip the specified number of characters, we can use the <code>skip()</code> method. For example,</p>

<pre>
<code>import java.io.FileReader;
import java.io.BufferedReader;

public class Main {

public static void main(String args[]) {

// Creates an array of characters
char[] array = new char[100];

try {
// Suppose, the input.txt file contains the following text
// This is a line of text inside the file.
FileReader file = new FileReader("input.txt");

// Creates a BufferedReader
BufferedReader input = new BufferedReader(file);

// Skips the 5 characters
input.skip(5);

// Reads the characters
input.read(array);

System.out.println("Data after skipping 5 characters:");
System.out.println(array);

// closes the reader
input.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data after skipping 5 characters:
is a line of text inside the file.</samp></pre>

<p>In the above example, we have used the <code>skip()</code> method to skip 5 characters from the file reader. Hence, the characters <code>'T'</code>, <code>'h'</code>, <code>'i'</code>, <code>'s'</code> and <code>' '</code> are skipped from the original file.</p>

<hr>
<h3>close() Method</h3>

<p>To close the buffered reader, we can use the <code>close()</code> method. Once the <code>close()</code> method is called, we cannot use the reader to read the data.</p>

<hr>
<h2 id="other-methods">Other Methods of BufferedReader</h2>

<div class="table-responsive">
<table>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>ready()</code></td>
<td>checks if the file reader is ready to be read</td>
</tr>
<tr>
<td><code>mark()</code></td>
<td>mark the position in reader up to which data has been read</td>
</tr>
<tr>
<td><code>reset()</code></td>
<td>returns the control to the point in the reader where the mark was set</td>
</tr>
</table>
</div>

<p>To learn more about <code>BufferedReader</code>, visit <a href="https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/BufferedReader.html">Java BufferedReader (official Java documentation)</a>.</p>  </div>



</div>

            
                        <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
  <use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#working">Working of BufferedReader</a></li>
<li><a href="#create">Create a BufferedReader</a></li>
<li><a href="#read">read() Method</a></li>
<li><a href="#skip">skip() Method</a></li>
<li><a href="#other-methods">Other Methods of BufferedReader</a></li>
</ul>
</div></div></div>                          </div>
                </div>
                <div id="bufferedWriter">
                    
            <div class="editor-contents">
                <h1>Java BufferedWriter Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2636" class="node node-java-tutorial clearfix" about="/java-programming/bufferedwriter" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java BufferedWriter Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>BufferedWriter</code> class of the <code>java.io</code> package can be used with other writers to write data (in characters) more efficiently.</p>

<p>It extends the abstract class <code>Writer</code>.</p>

<p><img alt="The BufferedWriter class is a subclass of Java Writer." height="187" src="//cdn.programiz.com/sites/tutorial2program/files/java-bufferedwriter.png" title="Java Buffered Writer" width="200"></p>

<hr>
<h2 id="working">Working of BufferedWriter</h2>

<p>The <code>BufferedWriter</code> maintains an internal <strong>buffer of 8192 characters</strong>.</p>

<p>During the write operation, the characters are written to the internal buffer instead of the disk. Once the buffer is filled or the writer is closed, the whole characters in the buffer are written to the disk.</p>

<p>Hence, the number of communication to the disk is reduced. This is why writing characters is faster using <code>BufferedWriter</code>.</p>

<hr>
<h2 id="create">Create a BufferedWriter</h2>

<p>In order to create a <code>BufferedWriter</code>, we must import the <code>java.io.BufferedWriter</code> package first. Once we import the package here is how we can create the buffered writer.</p>

<pre>
<code>// Creates a FileWriter
FileWriter file = new FileWriter(String name);

// Creates a BufferedWriter
BufferedWriter buffer = new BufferedWriter(file);
</code></pre>

<p>In the above example, we have created a <code>BufferedWriter</code> named <var>buffer</var> with the <code>FileWriter</code> named <var>file</var>.</p>

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
</div><div class="clearfix"></div><p>Here, the internal buffer of the <code>BufferedWriter</code> has the default size of 8192 characters. However, we can specify the size of the internal buffer as well.</p>

<pre>
<code>// Creates a BufferedWriter with specified size internal buffer
BufferedWriter buffer = new BufferedWriter(file, int size);
</code></pre>

<p>The buffer will help to write characters to the files more efficiently.</p>

<hr>
<h2>Methods of BufferedWriter</h2>

<p>The <code>BufferedWriter</code> class provides implementations for different methods present in <code>Writer</code>.</p>

<h3 id="write">write() Method</h3>

<ul>
<li><code>write()</code> - writes a single character to the internal buffer of the writer</li>
<li><code>write(char[] array)</code> - writes the characters from the specified <a href="/java-programming/arrays" title="array">array</a> to the writer</li>
<li><code>write(String data)</code> - writes the specified <a href="/java-programming/string" title="string">string</a> to the writer</li>
</ul>

<hr>
<h3>Example: BufferedWriter to write data to a File</h3>

<pre>
<code>import java.io.FileWriter;
import java.io.BufferedWriter;

public class Main {

public static void main(String args[]) {

String data = "This is the data in the output file";

try {
// Creates a FileWriter
FileWriter file = new FileWriter("output.txt");

// Creates a BufferedWriter
BufferedWriter output = new BufferedWriter(file);

// Writes the string to the file
output.write(data);

// Closes the writer
output.close();
}

catch (Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created a buffered writer named <var>output</var> along with <code>FileWriter</code>. The buffered writer is linked with the <strong>output.txt</strong> file.</p>

<pre>
<code>FileWriter file = new FileWriter("output.txt");
BufferedWriter output = new BufferedWriter(file);
</code></pre>

<p>To write data to the file, we have used the <code>write()</code> method.</p>

<p>Here when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is a line of text inside the file.
</code></pre>

<hr>
<h3 id="flush">flush() Method</h3>

<p>To clear the internal buffer, we can use the <code>flush()</code> method. This method forces the writer to write all data present in the buffer to the destination file.</p>

<p>For example, suppose we have an empty file named <strong>output.txt</strong>.</p>

<pre>
<code>import java.io.FileWriter;
import java.io.BufferedWriter;

public class Main {
public static void main(String[] args) {

String data = "This is a demo of the flush method";

try {
// Creates a FileWriter
FileWriter file = new FileWriter(" flush.txt");

// Creates a BufferedWriter
BufferedWriter output = new BufferedWriter(file);

// Writes data to the file
output.write(data);

// Flushes data to the destination
output.flush();
System.out.println("Data is flushed to the file.");

output.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data is flushed to the file.
</samp></pre>

<p>When we run the program, the file <strong>output.txt</strong> is filled with the text represented by the string <var>data</var>.</p>

<hr>
<h3>close() Method</h3>

<p>To close the buffered writer, we can use the <code>close()</code> method. Once the <code>close()</code> method is called, we cannot use the writer to write the data.</p>

<hr>
<h2 id="other-methods">Other Methods of BufferedWriter</h2>

<table>
<tbody>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>newLine() </code></td>
<td>inserts a new line to the writer</td>
</tr>
<tr>
<td><code>append() </code></td>
<td>inserts the specified character to the current writer</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/BufferedWriter.html" title="Java BufferedWriter (official Java documentation)">Java BufferedWriter (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#working">Working of BufferedWriter</a></li>
<li><a href="#create">Create a BufferedWriter</a></li>
<li><a href="#write">write() Method</a></li>
<li><a href="#flush">flush() Method</a></li>
<li><a href="#other-methods">Other Methods of BufferedWriter</a></li>
</ul>
</div></div></div>                          </div>
                </div>
                <div id="StringReader">
                    
            <div class="editor-contents">
                <h1>Java StringReader Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2637" class="node node-java-tutorial clearfix" about="/java-programming/stringreader" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java StringReader Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>StringReader</code> class of the <code>java.io</code> package can be used to read data (in characters) from <a href="/java-programming/string" title="strings">strings</a>.</p>

<p>It extends the abstract class <code>Reader</code>.</p>

<p><img alt="The StringReader class is a subclass of Java Reader." height="208" src="//cdn.programiz.com/sites/tutorial2program/files/java-stringreader.png" title="Java String Reader" width="200"></p>

<p class="note-tip"><strong>Note</strong>: In <code>StringReader</code>, the specified string acts as a source from where characters are read individually.</p>

<hr>
<h2 id="create">Create a StringReader</h2>

<p>In order to create a <code>StringReader</code>, we must import the <code>java.io.StringReader</code> package first. Once we import the package here is how we can create the string reader.</p>

<pre>
<code>// Creates a StringReader
StringReader input = new StringReader(String data);
</code></pre>

<p>Here, we have created a <code>StringReader</code> that reads characters from the specified string named <var>data</var>.</p>

<hr>
<h2>Methods of StringReader</h2>

<p>The <code>StringReader</code> class provides implementations for different methods present in the <code>Reader</code> class.</p>

<h3 id="read">read() Method</h3>

<ul>
<li><code>read()</code> - reads a single character from the string reader</li>
<li><code>read(char[] array)</code> - reads the characters from the reader and stores in the specified <a href="/java-programming/arrays" title="array">array</a></li>
<li><code>read(char[] array, int start, int length)</code> - reads the number of characters equal to <var>length</var> from the reader and stores in the specified array starting from the position <var>start</var></li>
</ul>

<hr>
<h3>Example: Java StringReader</h3>

<pre class="java-exec">
<code>import java.io.StringReader;

public class Main {
public static void main(String[] args) {

String data = "This is the text read from StringReader.";

// Create a character array
char[] array = new char[100];

try {
// Create a StringReader
StringReader input = new StringReader(data);

//Use the read method
input.read(array);
System.out.println("Data read from the string:");
System.out.println(array);

input.close();
}
catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data read from the string:
This is the text read from StringReader.
</samp></pre>

<p>In the above example, we have created a string reader named <var>input</var>. The string reader is linked to the string <var>data</var>.</p>

<pre>
<code>String data = "This is a text in the string.";
StringReader input = new StringReader(data);
</code></pre>

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
</div><div class="clearfix"></div><p>To read data from the string, we have used the <code>read()</code> method.</p>

<p>Here, the method reads an array of characters from the reader and stores in the specified array.</p>

<hr>
<h3 id="skip">skip() Method</h3>

<p>To discard and skip the specified number of characters, we can use the <code>skip()</code> method. For example,</p>

<pre class="java-exec">
<code>import java.io.StringReader;

public class Main {
public static void main(String[] args) {

String data = "This is the text read from StringReader";
System.out.println("Original data: " + data);

// Create a character array
char[] array = new char[100];

try {
// Create a StringReader
StringReader input = new StringReader(data);

// Use the skip() method
input.skip(5);

//Use the read method
input.read(array);
System.out.println("Data after skipping 5 characters:");
System.out.println(array);

input.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Original data: This is the text read from the StringReader
Data after skipping 5 characters:
is the text read from the StringReader
</samp></pre>

<p>In the above example, we have used the <code>skip()</code> method to skip 5 characters from the string reader. Hence, the characters <code>'T'</code>, <code>'h'</code>, <code>'i'</code>, <code>'s'</code> and <code>' '</code> are skipped from the original string reader.</p>

<hr>
<h3>close() Method</h3>

<p>To close the string reader, we can use the <code>close()</code> method. Once the <code>close()</code> method is called, we cannot use the reader to read data from the string.</p>

<hr>
<h2 id="other-methods">Other Methods of StringReader</h2>

<table>
<tbody>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>ready() </code></td>
<td>checks if the string reader is ready to be read</td>
</tr>
<tr>
<td><code>mark() </code></td>
<td>marks the position in reader up to which data has been read</td>
</tr>
<tr>
<td><code>reset() </code></td>
<td>returns the control to the point in the reader where the mark was set</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/en/java/javase/13/docs/api/java.base/java/io/StringReader.html" title="Java StringReader (official Java documentation)">Java StringReader (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create a StringReader</a></li>
<li><a href="#read">read() Method</a></li>
<li><a href="#skip">skip() Method</a></li>
<li><a href="#other-methods">Other Methods of StringReader</a></li>
</ul>
</div></div></div>                          </div>
                </div>
                <div id="StringWriter">
                    
            <div class="editor-contents">
                <h1>Java StringWriter Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2638" class="node node-java-tutorial clearfix" about="/java-programming/stringwriter" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java StringWriter Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>StringWriter</code> class of the <code>java.io</code> package can be used to write data (in characters) to the string buffer.</p>

<p>It extends the abstract class <code>Writer</code>.</p>

<p><img alt="The StringWriter class is a subclass of Java Writer." height="208" src="//cdn.programiz.com/sites/tutorial2program/files/java-stringwriter.png" title="Java String Writer" width="200"></p>

<p class="note-tip"><strong>Note</strong>: In Java, string buffer is considered as a mutable string. That is, we can modify the string buffer. To convert from string buffer to string, we can use the <code>toString()</code> method.</p>

<hr>
<h2 id="create">Create a StringWriter</h2>

<p>In order to create a <code>StringWriter</code>, we must import the <code>java.io.StringWriter</code> package first. Once we import the package here is how we can create the string writer.</p>

<pre>
<code>// Creates a StringWriter
StringWriter output = new StringWriter();
</code></pre>

<p>Here, we have created the string writer with default string buffer capacity. However, we can specify the string buffer capacity as well.</p>

<pre>
<code>// Creates a StringWriter with specified string buffer capacity
StringWriter output = new StringWriter(int size);
</code></pre>

<p>Here, the <var>size</var> specifies the capacity of the string buffer.</p>

<hr>
<h2>Methods of StringWriter</h2>

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
</div><div class="clearfix"></div><p>The <code>StringWriter</code> class provides implementations for different methods present in the <code>Writer</code> class.</p>

<h3 id="write">write() Method</h3>

<ul>
<li><code>write()</code> - writes a single character to the string writer</li>
<li><code>write(char[] array)</code> - writes the characters from the specified <a href="/java-programming/arrays" title="array">array</a> to the writer</li>
<li><code>write(String data)</code> - writes the specified <a href="/java-programming/string" title="string">string</a> to the writer</li>
</ul>

<hr>
<h3>Example: Java StringWriter</h3>

<pre class="java-exec">
<code>import java.io.StringWriter;

public class Main {
public static void main(String[] args) {

String data = "This is the text in the string.";

try {
// Create a StringWriter with default string buffer capacity
StringWriter output = new StringWriter();

// Writes data to the string buffer
output.write(data);

// Prints the string writer
System.out.println("Data in the StringWriter: " + output);

output.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data in the StringWriter: This is the text in the string.
</samp></pre>

<p>In the above example, we have created a string writer named <var>output</var>.</p>

<pre>
<code>StringWriter output = new StringWriter();
</code></pre>

<p>We then use the <code>write()</code> method to write the string data to the string buffer.</p>

<p class="note-tip"><strong>Note</strong>: We have used the <code>toString()</code> method to get the output data from string buffer in string form.</p>

<hr>
<h3 id="access-data">Access Data from StringBuffer</h3>

<ul>
<li><code>getBuffer()</code> - returns the data present in the string buffer</li>
<li><code>toString()</code> - returns the data present in the string buffer as a string</li>
</ul>

<p>For example,</p>

<pre class="java-exec">
<code>import java.io.StringWriter;

public class Main {
public static void main(String[] args) {

String data = "This is the original data";

try {
// Create a StringWriter with default string buffer capacity
StringWriter output = new StringWriter();

// Writes data to the string buffer
output.write(data);

// Returns the string buffer
StringBuffer stringBuffer = output.getBuffer();
System.out.println("StringBuffer: " + stringBuffer);

// Returns the string buffer in string form
String string = output.toString();
System.out.println("String: " + string);

output.close();
}

catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>StringBuffer: This is the original data
String: This is the original data
</samp></pre>

<p>Here we have used the <code>getBuffer()</code> method to get the data present in the string buffer. And also the method <code>toString()</code> returns the data present in the string buffer as a string.</p>

<hr>
<h3>close() Method</h3>

<p>To close the string writer, we can use the <code>close()</code> method.</p>

<p>However, the <code>close()</code> method has no effect in the <code>StringWriter</code> class. We can use the methods of this class even after the <code>close()</code> method is called.</p>

<hr>
<h2 id="other-methods">Other methods of StringWriter</h2>

<table>
<tbody>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>flush()</code></td>
<td>forces to write all the data present in the writer to the string buffer</td>
</tr>
<tr>
<td><code>append()</code></td>
<td>inserts the specified character to the current writer</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/en/java/javase/13/docs/api/java.base/java/io/StringWriter.html" title="Java StringWriter (official Java documentation)">Java StringWriter (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#create">Create a StringWriter</a></li>
<li><a href="#write">write() Method</a></li>
<li><a href="#access-data">Access Data from StringBuffer</a></li>
<li><a href="#other-methods">Other methods of StringWriter</a></li>
</ul>
</div></div></div>                          </div>
                </div>
                <div id="printWriter">
                    
            <div class="editor-contents">
                <h1>Java PrintWriter Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2639" class="node node-java-tutorial clearfix" about="/java-programming/printwriter" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java PrintWriter Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>PrintWriter</code> class of the <code>java.io</code> package can be used to write output data in a commonly readable form (text).</p>

<p>It extends the abstract class <code>Writer</code>.</p>

<p><img alt="The PrintWriter class is a subclass of Java Writer." height="221" src="//cdn.programiz.com/sites/tutorial2program/files/java-printwriter.png" title="Java Print Writer" width="200"></p>

<hr>
<h2 id="working">Working of PrintWriter</h2>

<p>Unlike other writers, <code>PrintWriter</code> converts the <a href="/java-programming/variables-primitive-data-types" title="“primitive" data>primitive data</a>(<code>int</code>, <code>float</code>, <code>char</code>, etc.) into the text format. It then writes that formatted data to the writer.</p>

<p>Also, the <code>PrintWriter</code> class does not throw any input/output exception. Instead, we need to use the <code>checkError()</code> method to find any error in it.</p>

<p class="note-tip"><strong>Note</strong>: The <code>PrintWriter</code> class also has a feature of auto flushing. This means it forces the writer to write all data to the destination if one of the <code>println()</code> or <code>printf()</code> methods is called.</p>

<hr>
<h2 id="create">Create a PrintWriter</h2>

<p>In order to create a print writer, we must import the <code>java.io.PrintWriter</code> package first. Once we import the package here is how we can create the print writer.</p>

<p><strong>1. Using other writers</strong></p>

<pre>
<code>// Creates a FileWriter
FileWriter file = new FileWriter("output.txt");

// Creates a PrintWriter
PrintWriter output = new PrintWriter(file, autoFlush);
</code></pre>

<p>Here,</p>

<ul>
<li>we have created a print writer that will write data to the file represented by the <code>FileWriter</code></li>
<li><var>autoFlush</var> is an optional parameter that specifies whether to perform auto flushing or not</li>
</ul>

<p><strong>2. Using other output streams</strong></p>

<pre>
<code>// Creates a FileOutputStream
FileOutputStream file = new FileOutputStream("output.txt");

// Creates a PrintWriter
PrintWriter output = new PrintWriter(file, autoFlush);
</code></pre>

<p>Here,</p>

<ul>
<li>we have created a print writer that will write data to the file represented by the <code>FileOutputStream</code></li>
<li>the <var>autoFlush</var> is an optional parameter that specifies whether to perform auto flushing or not</li>
</ul>

<p><strong>3. Using filename </strong></p>

<pre>
<code>// Creates a PrintWriter
PrintWriter output = new PrintWriter(String file, boolean autoFlush);
</code></pre>

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
</div><div class="clearfix"></div><p>Here,</p>

<ul>
<li>we have created a print writer that will write data to the specified file</li>
<li>the <var>autoFlush</var> is an optional boolean parameter that specifies whether to perform auto flushing or nor</li>
</ul>

<p class="note-tip"><strong>Note</strong>: In all the above cases, the <code>PrintWriter</code> writes data to the file using some default character encoding. However, we can specify the character encoding (<strong>UTF8</strong> or <strong>UTF16</strong>) as well.</p>

<pre>
<code>// Creates a PrintWriter using some character encoding
PrintWriter output = new PrintWriter(String file, boolean autoFlush, Charset cs);
</code></pre>

<p>Here, we have used the <samp>Charset</samp> class to specify the character encoding. To know more, visit <a href="https://docs.oracle.com/javase/7/docs/api/java/nio/charset/Charset.html" title="Java Charset (official Java documentation)">Java Charset (official Java documentation)</a>.</p>

<hr>
<h2>Methods of PrintWriter</h2>

<p>The <code>PrintWriter</code> class provides various methods that allow us to print data to the output.</p>

<h3 id="print">print() Method</h3>

<ul>
<li><code>print()</code> - prints the specified data to the writer</li>
<li><code>println()</code> - prints the data to the writer along with a new line character at the end</li>
</ul>

<p>For example,</p>

<pre>
<code>import java.io.PrintWriter;

class Main {
public static void main(String[] args) {

String data = "This is a text inside the file.";

try {
PrintWriter output = new PrintWriter("output.txt");

output.print(data);
output.close();
}
catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created a print writer named <var>output</var>. This print writer is linked with the file <strong>output.txt</strong>.</p>

<pre>
<code>PrintWriter output = new PrintWriter("output.txt");
</code></pre>

<p>To print data to the file, we have used the <code>print()</code> method.</p>

<p>Here when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is a text inside the file.
</code></pre>

<hr>
<h3 id="printf">printf() Method</h3>

<p>The <code>printf()</code> method can be used to print the formatted string. It includes 2 parameters: formatted string and arguments. For example,</p>

<pre>
<code>printf("I am %d years old", 25);
</code></pre>

<p>Here,</p>

<ul>
<li>I am <code>%d</code> years old is a formatted string</li>
<li><code>%d</code> is integer data in the formatted string</li>
<li>25 is an argument</li>
</ul>

<p>The formatted string includes both text and data. And, the arguments replace the data inside the formatted string.</p>

<p>Hence the <strong>%d</strong> is replaced by <strong>25</strong>.</p>

<hr>
<h3>Example: printf() Method using PrintWriter</h3>

<pre>
<code>import java.io.PrintWriter;

class Main {
public static void main(String[] args) {

try {
PrintWriter output = new PrintWriter("output.txt");

int age = 25;

output.printf("I am %d years old.", age);
output.close();
}
catch(Exception e) {
e.getStackTrace();
}
}
}
</code></pre>

<p>In the above example, we have created a print writer named <var>output</var>. The print writer is linked with the file <strong>output.txt</strong>.</p>

<pre>
<code>PrintWriter output = new PrintWriter("output.txt");
</code></pre>

<p>To print the formatted text to the file, we have used the <code>printf()</code> method.</p>

<p>Here when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>I am 25 years old.
</code></pre>

<hr>
<h2 id="other-methods">Other Methods Of PrintWriter</h2>

<table>
<tbody>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>close()</code></td>
<td>closes the print writer</td>
</tr>
<tr>
<td><code>checkError()</code></td>
<td>checks if there is an error in the writer and returns a boolean result</td>
</tr>
<tr>
<td><code>append()</code></td>
<td>appends the specified data to the writer</td>
</tr>
</tbody>
</table>

<p>To learn more, visit <a href="https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/PrintWriter.html" title="Java PrintWriter (official Java documentation)">Java PrintWriter (official Java documentation)</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#working">Working of PrintWriter</a></li>
<li><a href="#create">Create a PrintWriter</a></li>
<li><a href="#print">print() Method</a></li>
<li><a href="#printf">printf() Method</a></li>
<li><a href="#other-methods">Other Methods Of PrintWriter</a></li>
</ul>
</div></div></div>                          </div>
                </div>
                </section>
                <section id="topic">
                    <div id="identifiers">
                        
            <div class="editor-contents">
                <h1>Java Keywords and Identifiers</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-926" class="node node-java-tutorial clearfix" about="/java-programming/keywords-identifiers" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Keywords and Identifiers" class="rdf-meta element-hidden"></span>

<div class="content">
<h2><a id="keywords" name="keywords"></a>Java Keywords</h2>

<p>Keywords are predefined, reserved words used in Java programming that have special meanings to the compiler. For example:</p>

<pre>
int score;</pre>

<p>Here, <code>int</code> is a keyword. It indicates that the variable <var>score</var> is of integer type (32-bit signed two's complement integer).</p>

<p>You cannot use keywords like <code>int</code>, <code>for</code>, <code>class</code>, etc as variable name (or identifiers) as they are part of the Java programming language syntax. Here's the complete list of all keywords in Java programming.</p>

<table>
<caption><a id="keywords-list" name="keywords-list"></a>Java Keywords List</caption>
<tbody>
<tr>
<td>abstract</td>
<td>assert</td>
<td>boolean</td>
<td>break</td>
<td>byte</td>
</tr>
<tr>
<td>case</td>
<td>catch</td>
<td>char</td>
<td>class</td>
<td>const</td>
</tr>
<tr>
<td>continue</td>
<td>default</td>
<td>do</td>
<td>double</td>
<td>else</td>
</tr>
<tr>
<td>enum</td>
<td>extends</td>
<td>final</td>
<td>finally</td>
<td>float</td>
</tr>
<tr>
<td>for</td>
<td>goto</td>
<td>if</td>
<td>implements</td>
<td>import</td>
</tr>
<tr>
<td>instanceof</td>
<td>int</td>
<td>interface</td>
<td>long</td>
<td>native</td>
</tr>
<tr>
<td>new</td>
<td>package</td>
<td>private</td>
<td>protected</td>
<td>public</td>
</tr>
<tr>
<td>return</td>
<td>short</td>
<td>static</td>
<td>strictfp</td>
<td>super</td>
</tr>
<tr>
<td>switch</td>
<td>synchronized</td>
<td>this</td>
<td>throw</td>
<td>throws</td>
</tr>
<tr>
<td>transient</td>
<td>try</td>
<td>void</td>
<td>volatile</td>
<td>while</td>
</tr>
</tbody>
</table>

<p>Beside these keywords, you cannot also use <code>true</code>, <code>false</code> and <code>null</code> as identifiers. It is because they are literals. To learn more about literals, visit <a href="/java-programming/variables-primitive-data-types#literals" title="Java literals">Java literals</a>.</p>

<hr>
<h2><a id="identifiers" name="identifiers"></a>Java identifiers</h2>

<p>Identifiers are the name given to variables, classes, methods, etc. Consider the above code;</p>

<pre>
int score;</pre>

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
</div><div class="clearfix"></div><p>Here, <var>score</var> is a variable (an identifier). You cannot use keywords as variable names. It's because keywords have predefined meanings. For example,</p>

<pre>
int float;</pre>

<p>The above code is wrong. It's because <code>float</code> is a keyword and cannot be used as a variable name.</p>

<p>To learn more about variables, visit <a href="https://www.programiz.com/java-programming/variables-primitive-data-types#variables" title="Java Variables">Java variables</a>.</p>

<hr>
<h3><a id="identifier-naming-rules" name="identifier-naming-rules"></a>Rules for Naming an Identifier</h3>

<ul>
<li>Identifiers cannot be a keyword.</li>
<li>Identifiers are case-sensitive.</li>
<li>It can have a sequence of letters and digits. However, it must begin with a letter, <code>$</code> or <code>_</code>. The first letter of an identifier cannot be a digit.</li>
<li>It's a convention to start an identifier with a letter rather and <code>$</code> or <code>_</code>.</li>
<li>Whitespaces are not allowed.</li>
<li>Similarly, you cannot use symbols such as <code>@</code>, <code>#</code>, and so on.</li>
</ul>

<p>Here are some valid identifiers:</p>

<ul>
<li>score</li>
<li>level</li>
<li>highestScore</li>
<li>number1</li>
<li>convertToString</li>
</ul>

<p>Here are some invalid identifiers:</p>

<ul>
<li>class</li>
<li>float</li>
<li>1number</li>
<li>highest Score</li>
<li>@pple</li>
</ul>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#keywords">Java Keywords</a></li>
<li><a href="#keywords-list">List of Java Keywords</a></li>
<li><a href="#identifiers">Java Identifiers</a></li>
<li><a href="#identifier-naming-rules">Rules for Naming an Identifier</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="operator-precedence">
                        
            <div class="editor-contents">
                <h1>Java Operator Precedence</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-947" class="node node-java-tutorial clearfix" about="/java-programming/operator-precedence" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Operator Precedence" class="rdf-meta element-hidden"></span>

<div class="content">
<p><a id="precedence" name="precedence"></a>Before you start reading this article, you should have a basic knowledge of <a href="/java-programming/operators" title="Java Operators">Java Operators</a>.</p>

<hr>
<p>Now, take a look at the statement below:</p>

<pre>
int myInt = 12 - 4 * 2;</pre>

<p>What will be the value of <var>myInt</var>? Will it be <code>(12 - 4)*2</code>, that is, <code>16</code>? Or it will be <code>12 - (4 * 2)</code>, that is, <code>4</code>?</p>

<p>When two operators share a common operand, <code>4</code> in this case, the operator with the highest precedence is operated first.</p>

<p>In Java, the precedence of <code>*</code> is higher than that of <code>-</code>. Hence, the multiplication is performed before subtraction, and the value of <var>myInt</var> will be 4.</p>

<hr>
<h2><a id="precedence-table" name="precedence-table"></a>Operator Precedence Table</h2>

<p>The table below lists the precedence of operators in Java; higher it appears in the table, the higher its precedence.</p>

<table>
<caption>Java Operator Precedence</caption>
<tbody>
<tr>
<th>Operators</th>
<th>Precedence</th>
</tr>
<tr>
<td>postfix increment and decrement</td>
<td><code>++</code> <code>--</code></td>
</tr>
<tr>
<td>prefix increment and decrement, and unary</td>
<td><code>++</code> <code>--</code> <code>+</code> <code>-</code> <code>~</code> <code>!</code></td>
</tr>
<tr>
<td>multiplicative</td>
<td><code>*</code> <code>/</code> <code>%</code></td>
</tr>
<tr>
<td>additive</td>
<td><code>+</code> <code>-</code></td>
</tr>
<tr>
<td>shift</td>
<td><code>&lt;&lt;</code> <code>&gt;&gt;</code> <code>&gt;&gt;&gt;</code></td>
</tr>
<tr>
<td>relational</td>
<td><code>&lt;</code> <code>&gt;</code> <code>&lt;=</code> <code>&gt;=</code> <code>instanceof</code></td>
</tr>
<tr>
<td>equality</td>
<td><code>==</code> <code>!=</code></td>
</tr>
<tr>
<td>bitwise AND</td>
<td><code>&amp;</code></td>
</tr>
<tr>
<td>bitwise exclusive OR</td>
<td><code>^</code></td>
</tr>
<tr>
<td>bitwise inclusive OR</td>
<td><code>|</code></td>
</tr>
<tr>
<td>logical AND</td>
<td><code>&amp;&amp;</code></td>
</tr>
<tr>
<td>logical OR</td>
<td><code>||</code></td>
</tr>
<tr>
<td>ternary</td>
<td><code>? :</code></td>
</tr>
<tr>
<td>assignment</td>
<td><code>=</code> <code>+=</code> <code>-=</code> <code>*=</code> <code>/=</code> <code>%=</code><br>
  <code>&amp;=</code> <code>^=</code> <code>|=</code> <code>&lt;&lt;=</code> <code>&gt;&gt;=</code> <code>&gt;&gt;&gt;=</code></td>
</tr>
</tbody>
</table>

<hr>
<h3><a id="precedence-example" name="precedence-example"></a>Example: Operator Precedence</h3>

<pre>
<code>class Precedence {
public static void main(String[] args) {

int a = 10, b = 5, c = 1, result;
result = a-++c-++b;

System.out.println(result);
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
2</pre>

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
</div><div class="clearfix"></div><p>The operator precedence of prefix <code>++</code> is higher than that of <code>-</code> subtraction operator. Hence,</p>

<pre>
result = a-++c-++b;</pre>

<p>is equivalent to</p>

<pre>
result = a-(++c)-(++b);</pre>

<hr>
<p>When dealing with multiple operators and operands in a single expression, you can use parentheses like in the above example for clarity. The expression inside the parentheses is evaluated first.</p>

<hr>
<h3><a id="associativity" name="associativity"></a>Associativity of Operators in Java</h3>

<p>If an expression has two operators with similar precedence, the expression is evaluated according to its associativity (either left to right, or right to left). Let's take an example.</p>

<pre>
a = b = c;</pre>

<p>Here, the value of <var>c</var> is assigned to variable <var>b</var>. Then the value of <var>b</var> is assigned of variable <var>a</var>. Why? It's because the associativity of = operator is from right to left.</p>

<p>The table below shows the associativity of Java operators along with their associativity.</p>

<table>
<caption><a id="precedence-associativity-table" name="precedence-associativity-table"></a>Java Operator Precedence and Associativity</caption>
<tbody>
<tr>
<th>Operators</th>
<th>Precedence</th>
<th>Associativity</th>
</tr>
<tr>
<td>postfix increment and decrement</td>
<td><code>++</code> <code>--</code></td>
<td>left to right</td>
</tr>
<tr>
<td>prefix increment and decrement, and unary</td>
<td><code>++</code> <code>--</code> <code>+</code> <code>-</code> <code>~</code> <code>!</code></td>
<td>right to left</td>
</tr>
<tr>
<td>multiplicative</td>
<td><code>*</code> <code>/</code> <code>%</code></td>
<td>left to right</td>
</tr>
<tr>
<td>additive</td>
<td><code>+</code> <code>-</code></td>
<td>left to right</td>
</tr>
<tr>
<td>shift</td>
<td><code>&lt;&lt;</code> <code>&gt;&gt;</code> <code>&gt;&gt;&gt;</code></td>
<td>left to right</td>
</tr>
<tr>
<td>relational</td>
<td><code>&lt;</code> <code>&gt;</code> <code>&lt;=</code> <code>&gt;=</code> <code>instanceof</code></td>
<td>left to right</td>
</tr>
<tr>
<td>equality</td>
<td><code>==</code> <code>!=</code></td>
<td>left to right</td>
</tr>
<tr>
<td>bitwise AND</td>
<td><code>&amp;</code></td>
<td>left to right</td>
</tr>
<tr>
<td>bitwise exclusive OR</td>
<td><code>^</code></td>
<td>left to right</td>
</tr>
<tr>
<td>bitwise inclusive OR</td>
<td><code>|</code></td>
<td>left to right</td>
</tr>
<tr>
<td>logical AND</td>
<td><code>&amp;&amp;</code></td>
<td>left to right</td>
</tr>
<tr>
<td>logical OR</td>
<td><code>||</code></td>
<td>left to right</td>
</tr>
<tr>
<td>ternary</td>
<td><code>? :</code></td>
<td>right to left</td>
</tr>
<tr>
<td>assignment</td>
<td><code>=</code> <code>+=</code> <code>-=</code> <code>*=</code> <code>/=</code> <code>%=</code><br>
  <code>&amp;=</code> <code>^=</code> <code>|=</code> <code>&lt;&lt;=</code> <code>&gt;&gt;=</code> <code>&gt;&gt;&gt;=</code></td>
<td>right to left</td>
</tr>
</tbody>
</table>

<p>You don't need to memorize everything here. Most of the time, the precedence and associativity of operators makes sense in itself. You can always come back to this article for reference when in doubt. Also, you can use parenthesis if you think it makes your code easier to understand.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#precedence">What is operator precedence?</a></li>
<li><a href="#precedence-table">Java Operator Precedence Table</a></li>
<li><a href="#precedence-example">Operator Precedence Example</a></li>
<li><a href="#associativity">Associativity of Operators in Java</a></li>
<li><a href="#precedence-associativity-table">Java Operator Precedence and Associativity Table</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="bitwise_and_shift">
                        
            <div class="editor-contents">
                <h1>Java Bitwise and Shift Operators</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-948" class="node node-java-tutorial clearfix" about="/java-programming/bitwise-operators" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Bitwise and Shift Operators" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">In Java, bitwise operators perform operations on integer data at the individual bit-level. Here, the integer data includes <code>byte</code>, <code>short</code>, <code>int</code>, and <code>long</code> types of data.</p>

<p>There are 7 operators to perform bit-level operations in Java.</p>

<div class="table-responsive">
<table>
<tbody>
<tr>
  <th>Operator</th>
  <th>Description</th>
</tr>
<tr>
  <td><code>|</code></td>
  <td><a href="#or">Bitwise OR</a></td>
</tr>
<tr>
  <td><code>&amp;</code></td>
  <td><a href="#and">Bitwise AND</a></td>
</tr>
<tr>
  <td><code>^</code></td>
  <td><a href="#xor">Bitwise XOR</a></td>
</tr>
<tr>
  <td><code>~</code></td>
  <td><a href="#complement">Bitwise Complement</a></td>
</tr>
<tr>
  <td><code>&lt;&lt;</code></td>
  <td><a href="#left-shift">Left Shift</a></td>
</tr>
<tr>
  <td><code>&gt;&gt;</code></td>
  <td><a href="#signed-right-shift">Signed Right Shift</a></td>
</tr>
<tr>
  <td><code>&gt;&gt;&gt;</code></td>
  <td><a href="#unsigned-right-shift">Unsigned Right Shift</a></td>
</tr>
</tbody>
</table>
</div>

<hr>
<h2 id="or">1. Java Bitwise OR Operator</h2>

<p>The bitwise OR <code>|</code> operator returns 1 if at least one of the operands is 1. Otherwise, it returns 0.</p>

<p>The following truth table demonstrates the working of the bitwise OR operator. Let a and b be two operands that can only take binary values i.e. 1 or 0.</p>

<div class="table-responsive">
<table>
<tbody>
<tr>
  <th>a</th>
  <th>b</th>
  <th>a | b</th>
</tr>
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
</tr>
<tr>
  <td>0</td>
  <td>1</td>
  <td>1</td>
</tr>
<tr>
  <td>1</td>
  <td>0</td>
  <td>1</td>
</tr>
<tr>
  <td>1</td>
  <td>1</td>
  <td>1</td>
</tr>
</tbody>
</table>
</div>

<p>The above table is known as the "Truth Table" for the bitwise OR operator.</p>

<p>Let's look at the bitwise OR operation of two integers 12 and 25.</p>

<pre>
<code>12 = 00001100 (In Binary)
25 = 00011001 (In Binary)

Bitwise OR Operation of 12 and 25
00001100
| 00011001
____________
00011101 = 29 (In Decimal)</code></pre>

<hr>
<h3>Example 1: Bitwise OR</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int number1 = 12, number2 = 25, result;

// bitwise OR between 12 and 25
result = number1 | number2;
System.out.println(result);    // prints 29
}
}</code></pre>

<hr>
<h2 id="and">2. Java Bitwise AND Operator</h2>

<p>The bitwise AND <code>&amp;</code> operator returns 1 if and only if both the operands are 1. Otherwise, it returns 0.</p>

<p>The following table demonstrates the working of the bitwise AND operator. Let a and b be two operands that can only take binary values i.e. 1 and 0.</p>

<div class="table-responsive">
<table>
<tbody>
<tr>
  <th>a</th>
  <th>b</th>
  <th>a &amp; b</th>
</tr>
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
</tr>
<tr>
  <td>0</td>
  <td>1</td>
  <td>0</td>
</tr>
<tr>
  <td>1</td>
  <td>0</td>
  <td>0</td>
</tr>
<tr>
  <td>1</td>
  <td>1</td>
  <td>1</td>
</tr>
</tbody>
</table>
</div>

<p>Let's take a look at the bitwise AND operation of two integers 12 and 25.</p>

<pre>
<code>12 = 00001100 (In Binary)
25 = 00011001 (In Binary)

// Bitwise AND Operation of 12 and 25
00001100
&amp; 00011001
____________
00001000 = 8 (In Decimal)</code></pre>

<hr>
<h3>Example 2: Bitwise AND</h3>

<pre class="java-exec">
<code> class Main {
public static void main(String[] args) {

int number1 = 12, number2 = 25, result;

// bitwise AND between 12 and 25
result = number1 &amp; number2;
System.out.println(result);    // prints 8
}
}</code></pre>

<hr>
<h2 id="xor">3. Java Bitwise XOR Operator</h2>

<p>The bitwise XOR <code>^</code> operator returns 1 if and only if one of the operands is 1. However, if both the operands are 0 or if both are 1, then the result is 0.</p>

<p>The following truth table demonstrates the working of the bitwise XOR operator. Let a and b be two operands that can only take binary values i.e. 1 or 0.</p>

<div class="table-responsive">
<table>
<tbody>
<tr>
  <th>a</th>
  <th>b</th>
  <th>a ^ b</th>
</tr>
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
</tr>
<tr>
  <td>0</td>
  <td>1</td>
  <td>1</td>
</tr>
<tr>
  <td>1</td>
  <td>0</td>
  <td>1</td>
</tr>
<tr>
  <td>1</td>
  <td>1</td>
  <td>0</td>
</tr>
</tbody>
</table>
</div>

<p>Let's look at the bitwise XOR operation of two integers 12 and 25.</p>

<pre>
<code>12 = 00001100 (In Binary)
25 = 00011001 (In Binary)

// Bitwise XOR Operation of 12 and 25
00001100
^ 00011001
____________
00010101 = 21 (In Decimal)</code></pre>

<hr>
<h3>Example 4: Bitwise XOR</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int number1 = 12, number2 = 25, result;

// bitwise XOR between 12 and 25
result = number1 ^ number2;
System.out.println(result);    // prints 21
}
}</code></pre>

<hr>
<h2 id="complement">4. Java Bitwise Complement Operator</h2>

<p>The bitwise complement operator is a unary operator (works with only one operand). It is denoted by <code>~</code>.</p>

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
</div><div class="clearfix"></div><p>It changes binary digits <strong>1</strong> to <strong>0</strong> and <strong>0</strong> to <strong>1</strong>.</p>

<figure><img alt="Java Bitwise complement operator converts 0 to 1 and 1 to 0" height="175" src="//cdn.programiz.com/sites/tutorial2program/files/java-bitwise-complement.png" title="Java Bitwise Complement Operator" width="200">
<figcaption>Java Bitwise Complement Operator</figcaption>
</figure>

<p>It is important to note that the bitwise complement of any integer <strong>N</strong> is equal to <strong>- (N + 1)</strong>. For example,</p>

<p>Consider an integer <strong>35</strong>. As per the rule, the bitwise complement of <strong>35</strong> should be <strong>-(35 + 1)</strong> = <strong>-36</strong>. Now let's see if we get the correct answer or not.</p>

<pre>
<code>35 = 00100011 (In Binary)

// using bitwise complement operator
~ 00100011
__________
11011100</code></pre>

<p>In the above example, we get that the bitwise complement of <strong>00100011</strong> (<strong>35</strong>) is <strong>11011100</strong>. Here, if we convert the result into decimal we get <strong>220</strong>.</p>

<p>However, it is important to note that we cannot directly convert the result into decimal and get the desired output. This is because the binary result <strong>11011100</strong> is also equivalent to <strong>-36</strong>.</p>

<p>To understand this we first need to calculate the binary output of <strong>-36</strong>.</p>

<hr>
<h3>2's Complement</h3>

<p>In binary arithmetic, we can calculate the binary negative of an integer using 2's complement.</p>

<p>1's complement changes <strong>0</strong> to <strong>1</strong> and <strong>1</strong> to <strong>0</strong>. And, if we add <strong>1</strong> to the result of the 1's complement, we get the 2's complement of the original number. For example,</p>

<pre>
<code>// compute the 2's complement of 36
36 = 00100100 (In Binary)

1's complement = 11011011

2's complement:
11011011
+   1
_________
11011100</code></pre>

<p>Here, we can see the 2's complement of <strong>36</strong> (i.e. <strong>-36</strong>) is <strong>11011100</strong>. This value is equivalent to the bitwise complement of <strong>35</strong>.</p>

<p>Hence, we can say that the bitwise complement of <strong>35</strong> is <strong>-(35 + 1) = -36</strong>.</p>

<hr>
<h3>Example 3: Bitwise Complement</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int number = 35, result;

// bitwise complement of 35
result = ~number;
System.out.println(result);    // prints -36
}
}</code></pre>

<hr>
<h2>Java Shift Operators</h2>

<p>There are three types of shift operators in Java:</p>

<ul>
<li>Signed Left Shift (&lt;&lt;)</li>
<li>Signed Right Shift (&gt;&gt;)</li>
<li>Unsigned Right Shift (&gt;&gt;&gt;)</li>
</ul>

<hr>
<h2 id="left-shift">5. Java Left Shift Operator</h2>

<p>The left shift operator shifts all bits towards the left by a certain number of specified bits. It is denoted by <code>&lt;&lt;</code>.</p>

<figure><img alt="Bits are shifted one position left and 0 is added to the last position" height="173" src="//cdn.programiz.com/sites/tutorial2program/files/java-left-shift-operator.png" title="Java Left Shift Operator" width="420">
<figcaption>Java 1 bit Left Shift Operator</figcaption>
</figure>

<p>As we can see from the image above, we have a 4-digit number. When we perform a 1 bit left shift operation on it, each individual bit is shifted to the left by <strong>1</strong> bit.</p>

<p>As a result, the left-most bit (most-significant) is discarded and the right-most position(least-significant) remains vacant. This vacancy is filled with <strong>0s</strong>.</p>

<hr>
<h3>Example 5: Left Shift Operators</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int number = 2;

// 2 bit left shift operation 
int result = number &lt;&lt; 2;
System.out.println(result);    // prints 8
}
}</code></pre>

<hr>
<h2 id="signed-right-shift">5. Java Signed Right Shift Operator</h2>

<p>The signed right shift operator shifts all bits towards the right by a certain number of specified bits. It is denoted by <code>&gt;&gt;</code>.</p>

<p>When we shift any number to the right, the least significant bits (rightmost) are discarded and the most significant position (leftmost) is filled with the sign bit. For example,</p>

<pre>
<code>// right shift of 8
8 = 1000 (In Binary)

// perform 2 bit right shift
8 &gt;&gt; 2:
1000 &gt;&gt; 2 = 0010 (equivalent to 2)</code></pre>

<p>Here, we are performing the right shift of <strong>8</strong> (i.e. sign is positive). Hence, there no sign bit. So the leftmost bits are filled with <strong>0</strong> (represents positive sign).</p>

<pre>
<code>// right shift of -8
8 = 1000 (In Binary)

1's complement = 0111

2's complement:

0111
+ 1
_______
1000

Signed bit = 1

// perform 2 bit right shift
8 &gt;&gt; 2:
1000 &gt;&gt; 2 = 1110 (equivalent to -2)</code></pre>

<p>Here, we have used the signed bit <strong>1</strong> to fill the leftmost bits.</p>

<hr>
<h3>Example 6: Signed Right Shift Operator</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int number1 = 8;
int number2 = -8;

// 2 bit signed right shift
System.out.println(number1 &gt;&gt; 2);    // prints 2
System.out.println(number2 &gt;&gt; 2);    // prints -2
}
}</code></pre>

<hr>
<h2 id="unsigned-right-shift">7. Java Unsigned Right Shift Operator</h2>

<p>Java also provides an unsigned right shift. It is denoted by <code>&gt;&gt;&gt;</code>.</p>

<p>Here, the vacant leftmost position is filled with <strong>0</strong> instead of the sign bit. For example,</p>

<pre>
<code>// unsigned right shift of 8
8 = 1000

8 &gt;&gt;&gt; 2 = 0010

// unsigned right shift of -8
-8 = 1000 (see calculation above)

-8 &gt;&gt;&gt; 2 = 0010</code></pre>

<hr>
<h3>Example 7: UnSigned Right Shift</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int number1 = 8;
int number2 = -8;

// 2 bit signed right shift
System.out.println(number1 &gt;&gt;&gt; 2);    // prints 2
System.out.println(number2 &gt;&gt;&gt; 2);    // prints 1073741822
}
}</code></pre>

<p>As we can see the signed and unsigned right shift operator returns different results for negative bits. To learn more visit the <a href="https://stackoverflow.com/questions/2811319/difference-between-and">Difference between &gt;&gt; and &gt;&gt;&gt;</a>.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Java Bitwise and Shift Operator</a></li>
<li><a href="#or">Bitwise OR Operator</a></li>
<li><a href="#and">Bitwise AND Operator</a></li>
<li><a href="#xor">Bitwise XOR Operator</a></li>
<li><a href="#complement">Bitwise Complement Operator</a></li>
<li><a href="#left-shift">Left Shift Operator</a></li>
<li><a href="#signed-right-shift">Signed Right Shift Operator</a></li>
<li><a href="#unsigned-right-shift">Java Unsigned Right Shift Operator</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="scanner">
                        
                
            <div class="editor-contents">
                <h1>Java Scanner Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2624" class="node node-java-tutorial clearfix" about="/java-programming/scanner" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Scanner Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>Scanner</code> class of the <code>java.util</code> package is used to read input data from different sources like input streams, files, etc. Let's take an example.</p>

<hr>
<h2 id="example-1">Example 1: Read a Line of Text Using Scanner</h2>

<pre class="java-exec">
<code>import java.util.Scanner;

class Main {
public static void main(String[] args) {

// creates an object of Scanner
Scanner input = new Scanner(System.in);

System.out.print("Enter your name: ");

// takes input from the keyboard
String name = input.nextLine();

// prints the name
System.out.println("My name is " + name);

// closes the scanner
input.close();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Enter your name: Kelvin
My name is Kelvin</samp></pre>

<p>In the above example, notice the line</p>

<pre>
<code>Scanner input = new Scanner(System.in);</code></pre>

<p>Here, we have created an <a href="/java-programming/class-objects#objects">object</a> of <code>Scanner</code> named <var>input</var>.</p>

<p>The <code>System.in</code> parameter is used to take input from the standard input. It works just like taking inputs from the keyboard.</p>

<p>We have then used the <code>nextLine()</code> method of the <code>Scanner</code> class to read a line of text from the user.</p>

<p>Now that you have some idea about <code>Scanner</code>, let's explore more about it.</p>

<hr>
<h2 id="import-create">Import Scanner Class</h2>

<p>As we can see from the above example, we need to import the <code>java.util.Scanner</code> package before we can use the <code>Scanner</code> class.</p>

<pre>
<code>import java.util.Scanner;</code></pre>

<p>To learn more about importing packages, visit <a href="/java-programming/packages-import">Java Packages</a>.</p>

<hr>
<h2 id="create-objects">Create a Scanner Object in Java</h2>

<p>Once we import the package, here is how we can create <code>Scanner</code> objects.</p>

<pre>
<code>// read input from the input stream
Scanner sc1 = new Scanner(InputStream input);

// read input from files
Scanner sc2 = new Scanner(File file);

// read input from a string
Scanner sc3 = new Scanner(String str);</code></pre>

<p>Here, we have created objects of the <code>Scanner</code> class that will read input from <a href="/java-programming/inputstream">InputStream</a>, <a href="/java-programming/file">File</a>, and <a href="/java-programming/string">String</a> respectively.</p>

<hr>
<h2>Java Scanner Methods to Take Input</h2>

<p>The <code>Scanner</code> class provides various methods that allow us to read inputs of different types.</p>

<div class="table-responsive">
<table>
<tr>
<th>Method</th>
<th>Description</th>
</tr>
<tr>
<td><code>nextInt()</code></td>
<td>reads an <code>int</code> value from the user</td>
</tr>
<tr>
<td><code>nextFloat()</code></td>
<td>reads a <code>float</code> value form the user</td>
</tr>
<tr>
<td><code>nextBoolean()</code></td>
<td>reads a <code>boolean</code> value from the user</td>
</tr>
<tr>
<td><code>nextLine()</code></td>
<td>reads a line of text from the user</td>
</tr>
<tr>
<td><code>next()</code></td>
<td>reads a word from the user</td>
</tr>
<tr>
<td><code>nextByte()</code></td>
<td>reads a <code>byte</code> value from the user</td>
</tr>
<tr>
<td><code>nextDouble()</code></td>
<td>reads a <code>doubl</code>e value from the user</td>
</tr>
<tr>
<td><code>nextShort()</code></td>
<td>reads a <code>short</code> value from the user</td>
</tr>
<tr>
<td><code>nextLong()</code></td>
<td>reads a <code>long</code> value from the user</td>
</tr>
</table>
</div>

<hr>
<h2 id="example-2">Example 2: Java Scanner nextInt()</h2>

<pre class="java-exec">
<code>import java.util.Scanner;

class Main {
public static void main(String[] args) {

// creates a Scanner object
Scanner input = new Scanner(System.in);

System.out.println("Enter an integer: ");

// reads an int value
int data1 = input.nextInt();

System.out.println("Using nextInt(): " + data1);

input.close();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Enter an integer:
22
Using nextInt(): 22</samp></pre>

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
</div><div class="clearfix"></div><p>In the above example, we have used the <code>nextInt()</code> method to read an integer value.</p>

<hr>
<h2 id="example-3">Example 3: Java Scanner nextDouble()</h2>

<pre class="java-exec">
<code>import java.util.Scanner;

class Main {
public static void main(String[] args) {

// creates an object of Scanner
Scanner input = new Scanner(System.in);
System.out.print("Enter Double value: ");

// reads the double value
double value = input.nextDouble();
System.out.println("Using nextDouble(): " + value);

input.close();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Enter Double value: 33.33
Using nextDouble(): 33.33</samp></pre>

<p>In the above example, we have used the <code>nextDouble()</code> method to read a <a href="/java-programming/variables-primitive-data-types#float">floating-point value</a>.</p>

<hr>
<h2 id="example-4">Example 4: Java Scanner next()</h2>

<pre class="java-exec">
<code>import java.util.Scanner;

class Main {
public static void main(String[] args) {

// creates an object of Scanner
Scanner input = new Scanner(System.in);
System.out.print("Enter your name: ");

// reads the entire word
String value = input.next();
System.out.println("Using next(): " + value);

input.close();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Enter your name: Jonny Walker
Using next(): Jonny</samp></pre>

<p>In the above example, we have used the <code>next()</code> method to read a string from the user.</p>

<p>Here, we have provided the full name. However, the <code>next()</code> method only reads the first name.</p>

<p>This is because the <code>next()</code> method reads input up to the <strong>whitespace</strong> character. Once the <strong>whitespace</strong> is encountered, it returns the string (excluding the whitespace).</p>

<hr>
<h2 id="example-5">Example 5: Java Scanner nextLine()</h2>

<pre class="java-exec">
<code>import java.util.Scanner;

class Main {
public static void main(String[] args) {

// creates an object of Scanner
Scanner input = new Scanner(System.in);
System.out.print("Enter your name: ");

// reads the entire line
String value = input.nextLine();
System.out.println("Using nextLine(): " + value);

input.close();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Enter your name: Jonny Walker
Using nextLine(): Jonny Walker</samp></pre>

<p>In the first example, we have used the <code>nextLine()</code> method to read a string from the user.</p>

<p>Unlike <code>next()</code>, the <code>nextLine()</code> method reads the entire line of input including spaces. The method is terminated when it encounters a next line character, <code>\n</code>.</p>

<p>To learn more, visit <a href="https://stackoverflow.com/questions/13102045/scanner-is-skipping-nextline-after-using-next-or-nextfoo">Java Scanner skipping the nextLine()</a>.</p>

<hr>
<h2 id="biginteger-bigdecimal">Java Scanner with BigInteger and BigDecimal</h2>

<p>Java scanner can also be used to read the big integer and big decimal numbers.</p>

<ul>
<li><code>nextBigInteger()</code> - reads the big integer value from the user</li>
<li><code>nextBigDecimal()</code> - reads the big decimal value from the user</li>
</ul>

<hr>
<h2>Example 4: Read BigInteger and BigDecimal</h2>

<pre class="java-exec">
<code>import java.math.BigDecimal;
import java.math.BigInteger;
import java.util.Scanner;

class Main {
public static void main(String[] args) {

// creates an object of Scanner
Scanner input = new Scanner(System.in);
System.out.print("Enter a big integer: ");

// reads the big integer
BigInteger value1 = input.nextBigInteger();
System.out.println("Using nextBigInteger(): " + value1);

System.out.print("Enter a big decimal: ");

// reads the big decimal
BigDecimal value2 = input.nextBigDecimal();
System.out.println("Using nextBigDecimal(): " + value2);

input.close();
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Enter a big integer: 987654321
Using nextBigInteger(): 987654321
Enter a big decimal: 9.55555
Using nextBigDecimal(): 9.55555</samp></pre>

<p>In the above example, we have used the <code>java.math.BigInteger</code> and <code>java.math.BigDecimal</code> package to read <code>BigInteger</code> and <code>BigDecimal</code> respectively.</p>

<hr>
<h2 id="working">Working of Java Scanner</h2>

<p>The <code>Scanner</code> class reads an entire line and divides the line into tokens. Tokens are small elements that have some meaning to the Java compiler. For example,</p>

<p>Suppose there is an input string:</p>

<pre>
<code>He is 22</code></pre>

<p>In this case, the scanner object will read the entire line and divides the string into tokens: "<strong>He</strong>", "<strong>is</strong>" and "<strong>22</strong>". The object then iterates over each token and reads each token using its different methods.</p>

<p class="note-tip"><strong>Note</strong>: By default, whitespace is used to divide tokens.</p>

<hr>
<p><strong>Also Read</strong>: </p>

<ul>
<li><a href="/java-programming/basic-input-output">Basic Input/Output</a></li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#example-1">Example Java Scanner</a></li>
<li><a href="#import-create">Import Scanner Class</a></li>
<li><a href="#create-objects">Create Objects of Scanner</a></li>
<li><a href="#example-2">Scanner nextInt() Method</a></li>
<li><a href="#example-3">nextDouble() Method</a></li>
<li><a href="#example-4">Scanner next() Method</a></li>
<li><a href="#example-5">nextLine() Method</a></li>
<li><a href="#biginteger-bigdecimal">Scanner with BigInteger and BigDecimal</a></li>
<li><a href="#working">Working of Java Scanner</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="typecasting">
                        
            <div class="editor-contents">
                <h1> Java Type Casting </h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2612" class="node node-java-tutorial clearfix" about="/java-programming/typecasting" typeof="sioc:Item foaf:Document">


<span property="dc:title" content=" Java Type Casting " class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">Before you learn about <strong>Java Type Casting</strong>, make sure you know about <a href="/java-programming/variables-primitive-data-types">Java Data Types</a>.</p>

<hr>
<h2>Type Casting</h2>

<p>The process of converting the value of one data type (<code>int</code>, <code>float</code>, <code>double</code>, etc.) to another data type is known as typecasting.</p>

<p>In Java, there are 13 types of type conversion. However, in this tutorial, we will only focus on the major 2 types.</p>

<p>1. Widening Type Casting</p>

<p>2. Narrowing Type Casting</p>

<p>To learn about other types of type conversion, visit <a href="https://docs.oracle.com/javase/specs/jls/se10/html/jls-5.html">Java Type Conversion (official Java documentation)</a>.</p>

<hr>
<h2 id="widening">Widening Type Casting</h2>

<p>In <strong>Widening Type Casting</strong>, Java automatically converts one data type to another data type.</p>

<h3>Example: Converting int to double</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
// create int type variable
int num = 10;
System.out.println("The integer value: " + num);

// convert into double type
double data = num;
System.out.println("The double value: " + data);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The integer value: 10
The double value: 10.0</samp></pre>

<p>In the above example, we are assigning the <code>int</code> type variable named <var>num</var> to a <code>double</code> type variable named <var>data</var>.</p>

<p>Here, the Java first converts the <code>int</code> type data into the <code>double</code> type. And then assign it to the <code>double</code> variable.</p>

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
</div><div class="clearfix"></div><p>In the case of <strong>Widening Type Casting</strong>, the lower data type (having smaller size) is converted into the higher data type (having larger size). Hence there is no loss in data. This is why this type of conversion happens automatically.</p>

<p class="note-tip"><strong>Note</strong>: This is also known as <strong>Implicit Type Casting</strong>.</p>

<hr>
<h2 id="narrowing">Narrowing Type Casting</h2>

<p>In <strong>Narrowing Type Casting</strong>, we manually convert one data type into another using the parenthesis.</p>

<h3>Example: Converting double into an int</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
// create double type variable
double num = 10.99;
System.out.println("The double value: " + num);

// convert into int type
int data = (int)num;
System.out.println("The integer value: " + data);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The double value: 10.99
The integer value: 10</samp></pre>

<p>In the above example, we are assigning the <code>double</code> type variable named <var>num</var> to an <code>int</code> type variable named <var>data</var>.</p>

<p>Notice the line,</p>

<pre>
<code>int data = (int)num;</code></pre>

<p>Here, the <code>int</code> keyword inside the parenthesis indicates that that the <var>num</var> variable is converted into the <code>int</code> type.</p>

<p>In the case of <strong>Narrowing Type Casting</strong>, the higher data types (having larger size) are converted into lower data types (having smaller size). Hence there is the loss of data. This is why this type of conversion does not happen automatically.</p>

<p class="note-tip"><strong>Note</strong>: This is also known as <strong>Explicit Type Casting</strong>.</p>

<hr>
<p>Let's see some of the examples of other type conversions in Java.</p>

<h2 id="int-to-string">Example 1: Type conversion from int to String</h2>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
// create int type variable
int num = 10;
System.out.println("The integer value is: " + num);

// converts int to string type
String data = String.valueOf(num);
System.out.println("The string value is: " + data);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The integer value is: 10
The string value is: 10</samp></pre>

<p>In the above program, notice the line</p>

<pre>
<code>String data = String.valueOf(num);</code></pre>

<p>Here, we have used the <code>valueOf()</code> method of the <a href="/java-programming/string">Java String class</a> to convert the int type variable into a string.</p>

<hr>
<h2 id="string-to-int">Example 2: Type conversion from String to int</h2>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
// create string type variable
String data = "10";
System.out.println("The string value is: " + data);

// convert string variable to int
int num = Integer.parseInt(data);
System.out.println("The integer value is: " + num);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The string value is: 10
The integer value is: 10</samp></pre>

<p>In the above example, notice the line</p>

<pre>
<code>int num = Integer.parseInt(data);</code></pre>

<p>Here, we have used the <code>parseInt()</code> method of the Java <code>Integer</code> class to convert a string type variable into an <code>int</code> variable.</p>

<p class="note-tip"><strong>Note</strong>: If the string variable cannot be converted into the integer variable then an exception named <code>NumberFormatException</code> occurs.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/examples/int-to-char-conversion">Java Program to convert int type variables to char</a></li>
<li><a href="/java-programming/examples/int-to-long-conversion">Java Program to convert int type variables to long</a></li>
<li><a href="/java-programming/examples/long-to-int-conversion">Java Program to convert long type variables into int</a></li>
<li><a href="/java-programming/examples/double-to-int-conversion">Java Program to convert double type variables to int</a> </li>
</ul>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#widening">Widening Type Casting</a></li>
<li><a href="#narrowing">Narrowing Type Casting</a></li>
<li><a href="#int-to-string">Example: Conversion from int to String</a></li>
<li><a href="#string-to-int">Example: Conversion from String to int</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="wrapper">
                        
            <div class="editor-contents">
                <h1>Java Wrapper Class</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2627" class="node node-java-tutorial clearfix" about="/java-programming/wrapper" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Wrapper Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The wrapper classes in Java are used to convert <a href="%E2%80%9C/java-programming/variables-primitive-data-types%22" title="“primitive" types>primitive types</a> (<code>int</code>, <code>char</code>, <code>float</code>, etc) into corresponding objects.</p>

<p>Each of the 8 primitive types has corresponding wrapper classes.</p>

<table>
<tbody>
<tr>
<th>Primitive Type</th>
<th>Wrapper Class</th>
</tr>
<tr>
<td><code>byte</code></td>
<td><code>Byte</code></td>
</tr>
<tr>
<td><code>boolean</code></td>
<td><code>Boolean</code></td>
</tr>
<tr>
<td><code>char</code></td>
<td><code>Character</code></td>
</tr>
<tr>
<td><code>double</code></td>
<td><code>Double</code></td>
</tr>
<tr>
<td><code>float</code></td>
<td><code>Float</code></td>
</tr>
<tr>
<td><code>int</code></td>
<td><code>Integer</code></td>
</tr>
<tr>
<td><code>long</code></td>
<td><code>Long</code></td>
</tr>
<tr>
<td><code>short</code></td>
<td><code>Short</code></td>
</tr>
</tbody>
</table>

<hr>
<h2 id="primitive-types-to-wrapper-objects">Convert Primitive Type to Wrapper Objects</h2>

<p>We can also use the <code>valueOf()</code> method to convert primitive types into corresponding objects.</p>

<h3>Example 1: Primitive Types to Wrapper Objects</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

// create primitive types
int a = 5;
double b = 5.65;

//converts into wrapper objects
Integer aObj = Integer.valueOf(a);
Double bObj = Double.valueOf(b);

if(aObj instanceof Integer) {
System.out.println("An object of Integer is created.");
}

if(bObj instanceof Double) {
System.out.println("An object of Double is created.");
}
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>An object of Integer is created.
An object of Double is created.
</samp></pre>

<p>In the above example, we have used the <code>valueOf()</code> method to convert the primitive types into objects.</p>

<p>Here, we have used the <code>instanceof</code> operator to check whether the generated objects are of <code>Integer</code> or <code>Double</code> type or not.</p>

<p>However, the Java compiler can directly convert the primitive types into corresponding objects. For example,</p>

<pre>
<code>int a = 5;
// converts into object
Integer aObj = a;

double b = 5.6;
// converts into object
Double bObj = b;
</code></pre>

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
</div><div class="clearfix"></div><p>This process is known as <strong>auto-boxing</strong>. To learn more, visit <a href="/java-programming/autoboxing-unboxing" title="Java autoboxing and unboxing">Java autoboxing and unboxing</a>.</p>

<p class="note-tip"><strong>Note</strong>: We can also convert primitive types into wrapper objects using <code>Wrapper</code> class constructors. But the use of constructors is discarded after Java 9.</p>

<hr>
<h2 id="wrapper-objects-to-primitive-types">Wrapper Objects into Primitive Types</h2>

<p>To convert objects into the primitive types, we can use the corresponding value methods (<code>intValue()</code>, <code>doubleValue()</code>, etc) present in each wrapper class.</p>

<h3>Example 2: Wrapper Objects into Primitive Types</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

// creates objects of wrapper class
Integer aObj = Integer.valueOf(23);
Double bObj = Double.valueOf(5.55);

// converts into primitive types
int a = aObj.intValue();
double b = bObj.doubleValue();

System.out.println("The value of a: " + a);
System.out.println("The value of b: " + b);
}
}
</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The value of a: 23
The value of b: 5.55
</samp></pre>

<p>In the above example, we have used the <code>intValue()</code> and <code>doubleValue()</code> method to convert the <code>Integer</code> and <code>Double</code> objects into corresponding primitive types.</p>

<p>However, the Java compiler can automatically convert objects into corresponding primitive types. For example,</p>

<pre>
<code>Integer aObj = Integer.valueOf(2);
// converts into int type
int a = aObj;

Double bObj = Double.valueOf(5.55);
// converts into double type
double b = bObj;
</code></pre>

<p>This process is known as <strong>unboxing</strong>.</p>

<hr>
<h2 id="advantages">Advantages of Wrapper Classes</h2>

<ul>
<li>In Java, sometimes we might need to use objects instead of primitive data types. For example, while working with collections.
<pre>
<code>// error
ArrayList&lt;int&gt; list = new ArrayList&lt;&gt;();

// runs perfectly
ArrayList&lt;Integer&gt; list = new ArrayList&lt;&gt;();</code></pre>
In such cases, wrapper classes help us to use primitive data types as objects.</li>
<li>We can store the null value in wrapper objects. For example,
<pre>
<code>
// generates an error
int a = null;

// runs perfectly
Integer a = null;
</code></pre>
</li>
</ul>

<p class="note-tip"><strong>Note</strong>: Primitive types are more efficient than corresponding objects. Hence, when efficiency is the requirement, it is always recommended primitive types.</p>
</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#primitive-types-to-wrapper-objects">Java Primitive types to objects</a></li>
<li><a href="#wrapper-objects-to-primitive-types">Java objects into Primitive types</a></li>
<li><a href="#advantages">Advantages of Wrapper Classes</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="autoboxing_and_unboxing">
                        
            <div class="editor-contents">
                <h1>Java autoboxing and unboxing</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2628" class="node node-java-tutorial clearfix" about="/java-programming/autoboxing-unboxing" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java autoboxing and unboxing" class="rdf-meta element-hidden"></span>

<div class="content">
<h2 id="autoboxing">Java Autoboxing - Primitive Type to Wrapper Object</h2>

<p>In <strong>autoboxing</strong>, the Java compiler automatically converts <a href="/java-programming/variables-primitive-data-types">primitive types</a> into their corresponding <a href="/java-programming/wrapper">wrapper class</a> objects. For example,</p>

<pre>
<code>int a = 56;

// autoboxing
Integer aObj = a;</code></pre>

<p><strong>Autoboxing</strong> has a great advantage while working with Java collections.</p>

<hr>
<h3 id="example-1">Example 1: Java Autoboxing</h3>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args) {

ArrayList&lt;Integer&gt; list = new ArrayList&lt;&gt;();

//autoboxing
list.add(5);
list.add(6);

System.out.println("ArrayList: " + list);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [5, 6]</samp></pre>

<p>In the above example, we have created an <a href="/java-programming/arraylist">array list</a> of Integer type. Hence the array list can only hold objects of <code>Integer</code> type.</p>

<p>Notice the line,</p>

<pre>
<code>list.add(5);</code></pre>

<p>Here, we are passing primitive type value. However, due to <strong>autoboxing</strong>, the primitive value is automatically converted into an <code>Integer</code> object and stored in the array list.</p>

<hr>
<h2 id="unboxing">Java Unboxing - Wrapper Objects to Primitive Types</h2>

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
</div><div class="clearfix"></div><p>In <strong>unboxing</strong>, the Java compiler automatically converts wrapper class objects into their corresponding primitive types. For example,</p>

<pre>
<code>// autoboxing
Integer aObj = 56;

// unboxing
int a = aObj;</code></pre>

<p>Like <strong>autoboxing</strong>, <strong>unboxing</strong> can also be used with Java collections.</p>

<hr>
<h3 id="example-2">Example 2: Java Unboxing</h3>

<pre class="java-exec">
<code>import java.util.ArrayList;

class Main {
public static void main(String[] args) {

ArrayList&lt;Integer&gt; list = new ArrayList&lt;&gt;();

//autoboxing
list.add(5);
list.add(6);

System.out.println("ArrayList: " + list);

// unboxing
int a = list.get(0);
System.out.println("Value at index 0: " + a);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>ArrayList: [5, 6]
Value at index 0: 5</samp></pre>

<p>In the above example, notice the line,</p>

<pre>
<code>int a = list.get(0);</code></pre>

<p>Here, the <code>get()</code> method returns the object at index <var>0</var>. However, due to <strong>unboxing</strong>, the object is automatically converted into the primitive type <code>int</code> and assigned to the variable <var>a</var>.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#autoboxing">Java Autoboxing</a></li>
<li><a href="#example-1">Example 1: Autoboxing</a></li>
<li><a href="#unboxing">Java Unboxing</a></li>
<li><a href="#example-2">Example 2: Unboxing</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="lambda">
                        
            <div class="editor-contents">
                <h1>Java Lambda Expressions</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-1459" class="node node-java-tutorial clearfix" about="/java-programming/lambda-expression" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Lambda Expressions" class="rdf-meta element-hidden"></span>

<div class="content">
<p>The lambda expression was introduced first time in Java 8. Its main objective to increase the expressive power of the language.</p>

<p>But, before getting into lambdas, we first need to understand functional interfaces.</p>

<hr>
<h2 id="functional">What is Functional Interface?</h2>

<p>If a <a href="/java-programming/interfaces">Java interface</a> contains one and only one abstract method then it is termed as functional interface. This only one method specifies the intended purpose of the interface.</p>

<p>For example, the <code>Runnable</code> interface from package <code>java.lang</code>; is a functional interface because it constitutes only one method i.e. <code>run()</code>.</p>

<h3>Example 1: Define a Functional Interface in java</h3>

<pre>
<code>import java.lang.FunctionalInterface;
@FunctionalInterface
public interface MyInterface{
// the single abstract method
double getValue();
}</code></pre>

<p>In the above example, the interface MyInterface has only one abstract method getValue(). Hence, it is a functional interface.</p>

<p>Here, we have used the annotation <code>@FunctionalInterface</code>. The annotation forces the Java compiler to indicate that the interface is a functional interface. Hence, does not allow to have more than one abstract method. However, it is not compulsory though.</p>

<p>In Java 7, functional interfaces were considered as <a href="https://stackoverflow.com/a/23342625/4494547">Single Abstract Method</a>s or <strong>SAM</strong> type. SAMs were commonly implemented with Anonymous Classes in Java 7.</p>

<h3>Example 2: Implement SAM with anonymous classes in java</h3>

<pre class="java-exec">
<code>public class FunctionInterfaceTest {
public static void main(String[] args) {

// anonymous class
new Thread(new Runnable() {
@Override
public void run() {
  System.out.println("I just implemented the Runnable Functional Interface.");
}
}).start();
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>I just implemented the Runnable Functional Interface.</samp></pre>

<p>Here, we can pass an anonymous class to a method. This helps to write programs with fewer codes in Java 7. However, the syntax was still difficult and a lot of extra lines of code were required.</p>

<p>Java 8 extended the power of a SAMs by going a step further. Since we know that a functional interface has just one method, there should be no need to define the name of that method when passing it as an argument. Lambda expression allows us to do exactly that.</p>

<hr>
<h2 id="intro">Introduction to lambda expressions</h2>

<p>Lambda expression is, essentially, an anonymous or unnamed method. The lambda expression does not execute on its own. Instead, it is used to implement a method defined by a functional interface.</p>

<h3>How to define lambda expression in Java?</h3>

<p>Here is how we can define lambda expression in Java.</p>

<pre>
<code>(parameter list) -&gt; lambda body</code></pre>

<p>The new operator (<code>-&gt;</code>) used is known as an arrow operator or a lambda operator. The syntax might not be clear at the moment. Let's explore some examples,</p>

<p>Suppose, we have a method like this:</p>

<pre>
<code>double getPiValue() {
return 3.1415;
}</code></pre>

<p>We can write this method using lambda expression as:</p>

<pre>
<code>() -&gt; 3.1415</code></pre>

<p>Here, the method does not have any parameters. Hence, the left side of the operator includes an empty parameter. The right side is the lambda body that specifies the action of the lambda expression. In this case, it returns the value 3.1415.</p>

<hr>
<h3 id="types">Types of Lambda Body</h3>

<p>In Java, the lambda body is of two types.</p>

<p><strong>1. A body with a single expression</strong></p>

<pre>
<code>() -&gt; System.out.println("Lambdas are great");</code></pre>

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
</div><div class="clearfix"></div><p>This type of lambda body is known as the expression body.</p>

<p><strong>2. A body that consists of a block of code.</strong></p>

<pre>
<code>() -&gt; {
double pi = 3.1415;
return pi;
};</code></pre>

<p>This type of the lambda body is known as a block body. The block body allows the lambda body to include multiple statements. These statements are enclosed inside the braces and you have to add a semi-colon after the braces.</p>

<p class="note-tip"><strong>Note</strong>: For the block body, you can have a return statement if the body returns a value. However, the expression body does not require a return statement.</p>

<hr>
<h2 id="example">Example 3: Lambda Expression</h2>

<p>Let's write a Java program that returns the value of Pi using the lambda expression.</p>

<p>As mentioned earlier, a lambda expression is not executed on its own. Rather, it forms the implementation of the abstract method defined by the functional interface.</p>

<p>So, we need to define a functional interface first.</p>

<pre class="java-exec">
<code>import java.lang.FunctionalInterface;

// this is functional interface
@FunctionalInterface
interface MyInterface{

// abstract method
double getPiValue();
}

public class Main {

public static void main( String[] args ) {

// declare a reference to MyInterface
MyInterface ref;

// lambda expression
ref = () -&gt; 3.1415;

System.out.println("Value of Pi = " + ref.getPiValue());
} 
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Value of Pi = 3.1415</samp></pre>

<p>In the above example,</p>

<ul>
<li>We have created a functional interface named <var>MyInterface</var>. It contains a single abstract method named <code>getPiValue()</code></li>
<li>Inside the <var>Main</var> class, we have declared a reference to <var>MyInterface</var>. Note that we can declare a reference of an interface but we cannot instantiate an interface. That is,<br>
<pre>
<code>// it will throw an error
MyInterface ref = new myInterface();

// it is valid
MyInterface ref;</code></pre>

</li>
<li>We then assigned a lambda expression to the reference.
<pre>
<code>ref = () -&gt; 3.1415;</code></pre>

</li>
<li>Finally, we call the method <code>getPiValue()</code> using the reference interface. When<br>
<pre>
<code>System.out.println("Value of Pi = " + ref.getPiValue());</code></pre>

</li>
</ul>

<hr>
<h2 id="lambda-expression-parameters">Lambda Expressions with parameters</h2>

<p>Till now we have created lambda expressions without any parameters. However, similar to <a href="/java-programming/methods">methods</a>, lambda expressions can also have parameters. For example,</p>

<pre>
<code>(n) -&gt; (n%2)==0</code></pre>

<p>Here, the variable n inside the parenthesis is a parameter passed to the lambda expression. The lambda body takes the parameter and checks if it is even or odd.</p>

<h3>Example 4: Using lambda expression with parameters</h3>

<pre class="java-exec">
<code>@FunctionalInterface
interface MyInterface {

// abstract method
String reverse(String n);
}

public class Main {

public static void main( String[] args ) {

// declare a reference to MyInterface
// assign a lambda expression to the reference
MyInterface ref = (str) -&gt; {

String result = "";
for (int i = str.length()-1; i &gt;= 0 ; i--)
result += str.charAt(i);
return result;
};

// call the method of the interface
System.out.println("Lambda reversed = " + ref.reverse("Lambda"));
}

}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Lambda reversed = adbmaL</samp></pre>

<hr>
<h2 id="generic">Generic Functional Interface</h2>

<p>Till now we have used the functional interface that accepts only one type of value. For example,</p>

<pre>
<code>@FunctionalInterface
interface MyInterface {
String reverseString(String n);
}</code></pre>

<p>The above functional interface only accepts <code>String</code> and returns <code>String</code>. However, we can make the functional interface generic, so that any data type is accepted. If you are not sure about generics, visit <a href="/java-programming/generics">Java Generics</a>.</p>

<h3>Example 5: Generic Functional Interface and Lambda Expressions</h3>

<pre class="java-exec">
<code>// GenericInterface.java
@FunctionalInterface
interface GenericInterface&lt;T&gt; {

// generic method
T func(T t);
}

// GenericLambda.java
public class Main {

public static void main( String[] args ) {

// declare a reference to GenericInterface
// the GenericInterface operates on String data
// assign a lambda expression to it
GenericInterface&lt;String&gt; reverse = (str) -&gt; {

String result = "";
for (int i = str.length()-1; i &gt;= 0 ; i--)
result += str.charAt(i);
return result;
};

System.out.println("Lambda reversed = " + reverse.func("Lambda"));

// declare another reference to GenericInterface
// the GenericInterface operates on Integer data
// assign a lambda expression to it
GenericInterface&lt;Integer&gt; factorial = (n) -&gt; {

int result = 1;
for (int i = 1; i &lt;= n; i++)
result = i * result;
return result;
};

System.out.println("factorial of 5 = " + factorial.func(5));
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Lambda reversed = adbmaL
factorial of 5 = 120</samp></pre>

<p>In the above example, we have created a generic functional interface named <var>GenericInterface</var>. It contains a generic method named <code>func()</code>.</p>

<p>Here, inside the Main class,</p>

<ul>
<li><code>GenericInterface&lt;String&gt; reverse</code> - creates a reference to the interface. The interface now operates on <code>String</code> type of data.</li>
<li><code>GenericInterface&lt;Integer&gt; factorial</code> - creates a reference to the interface. The interface, in this case, operates on the <code>Integer</code> type of data.</li>
</ul>

<hr>
<h2 id="stream">Lambda Expression and Stream API</h2>

<p>The new <code>java.util.stream</code> package has been added to JDK8, which allows Java developers to perform operations like search, filter, map, reduce, or manipulate collections like Lists.</p>

<p>For example, we have a stream of data (in our case, a <code>List</code> of <code>String</code>) where each string is a combination of the country name and place of the country. Now, we can process this stream of data and retrieve only the places from Nepal.</p>

<p>For this, we can perform bulk operations in the stream by the combination of Stream API and Lambda expression.</p>

<h3>Example 6: Demonstration of using lambdas with the Stream API</h3>

<pre class="java-exec">
<code>import java.util.ArrayList;
import java.util.List;

public class StreamMain {

// create an object of list using ArrayList
static List&lt;String&gt; places = new ArrayList&lt;&gt;();

// preparing our data
public static List getPlaces(){

// add places and country to the list
places.add("Nepal, Kathmandu");
places.add("Nepal, Pokhara");
places.add("India, Delhi");
places.add("USA, New York");
places.add("Africa, Nigeria");

return places;
}

public static void main( String[] args ) {

List&lt;String&gt; myPlaces = getPlaces();
System.out.println("Places from Nepal:");

// Filter places from Nepal
myPlaces.stream()
  .filter((p) -&gt; p.startsWith("Nepal"))
  .map((p) -&gt; p.toUpperCase())
  .sorted()
  .forEach((p) -&gt; System.out.println(p));
}

}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Places from Nepal:
NEPAL, KATHMANDU
NEPAL, POKHARA</samp></pre>

<p>In the above example, notice the statement</p>

<pre>
<code>myPlaces.stream()
.filter((p) -&gt; p.startsWith("Nepal"))
.map((p) -&gt; p.toUpperCase())
.sorted()
.forEach((p) -&gt; System.out.println(p));</code></pre>

<p>Here, we are using the methods like <code>filter()</code>, <code>map()</code> and <code>forEach()</code> of the Stream API. These methods can take a lambda expression as input.</p>

<p>We can also define our own expressions based on the syntax we learned above. This allows us to reduce the lines of code drastically as we saw in the above example.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#functional">What is Functional Interface?</a></li>
<li><a href="#intro">Introduction to lambda expression</a></li>
<li><a href="#types">Types of Lambda Body</a></li>
<li><a href="#example">Example 3: Lambda Expression</a></li>
<li><a href="#lambda-expression-parameters">Lambda Expressions with parameters</a></li>
<li><a href="#generic">Generic Functional Interface</a></li>
<li><a href="#stream">Lambda Expression and Stream API</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="generics">
                        
            <div class="editor-contents">
                <h1>Java Generics</h1>


              <!--  <p class="editor-contents__short-description"></p> -->



                  



<div id="node-2608" class="node node-java-tutorial clearfix" about="/java-programming/generics" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Generics" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">Java Generics allows us to create a single class, <a href="/java-programming/interfaces">interface</a>, and <a href="/java-programming/methods">method</a> that can be used with different types of data (objects).</p>

<p>This helps us to reuse our code.</p>

<p class="note-tip"><strong>Note</strong>: <strong>Generics</strong> does not work with <a href="/java-programming/variables-primitive-data-types">primitive types</a> (<code>int</code>, <code>float</code>, <code>char</code>, etc).</p>

<hr>
<h2 id="class">Java Generics Class</h2>

<p>We can create a class that can be used with any type of data. Such a class is known as Generics Class.</p>

<p>Here's is how we can create a generics class in Java:</p>

<h3>Example: Create a Generics Class</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

// initialize generic class
// with Integer data
GenericsClass&lt;Integer&gt; intObj = new GenericsClass&lt;&gt;(5);
System.out.println("Generic Class returns: " + intObj.getData());

// initialize generic class
// with String data
GenericsClass&lt;String&gt; stringObj = new GenericsClass&lt;&gt;("Java Programming");
System.out.println("Generic Class returns: " + stringObj.getData());
}
}

// create a generics class
class GenericsClass&lt;T&gt; {

// variable of T type
private T data;

public GenericsClass(T data) {
this.data = data;
}

// method that return T type variable
public T getData() {
return this.data;
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Generic Class returns: 5
Generic Class returns: Java Programming</samp></pre>

<p>In the above example, we have created a generic class named <var>GenericsClass</var>. This class can be used to work with any type of data.</p>

<pre>
<code>class GenericsClass&lt;T&gt; {...}</code></pre>

<p>Here, <var>T</var> used inside the angle bracket <code>&lt;&gt;</code> indicates the <strong>type parameter</strong>. Inside the <code>Main</code> class, we have created two objects of <var>GenericsClass</var></p>

<ul>
<li><var>intObj</var> - Here, the type parameter <var>T</var> is replaced by <code>Integer</code>. Now, the <var>GenericsClass</var> works with integer data.</li>
<li><var>stringObj</var> - Here, the type parameter <var>T</var> is replaced by <code>String</code>. Now, the <var>GenericsClass</var> works with <a href="/java-programming/string">string</a> data.</li>
</ul>

<hr>
<h2 id="methods">Java Generics Method</h2>

<p>Similar to the generics class, we can also create a method that can be used with any type of data. Such a class is known as Generics Method.</p>

<p>Here's is how we can create a generics method in Java:</p>

<h3>Example: Create a Generics Method</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

// initialize the class with Integer data
DemoClass demo = new DemoClass();

// generics method working with String
demo.&lt;String&gt;genericsMethod("Java Programming");

// generics method working with integer
demo.&lt;Integer&gt;genericsMethod(25);
}
}

class DemoClass {

// creae a generics method
public &lt;T&gt; void genericsMethod(T data) {
System.out.println("Generics Method:");
System.out.println("Data Passed: " + data);
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Generics Method:
Data Passed: Java Programming
Generics Method:
Data Passed: 25</samp></pre>

<p>In the above example, we have created a generic method named <var>genericsMethod</var>.</p>

<pre>
<code>public &lt;T&gt; void genericMethod(T data) {...}</code></pre>

<p>Here, the type parameter <code>&lt;T&gt;</code> is inserted after the modifier <code>public</code> and before the return type <code>void</code>.</p>

<p>We can call the generics method by placing the actual type <code>&lt;String&gt;</code> and <code>&lt;Integer&gt;</code> inside the bracket before the method name.</p>

<pre>
<code>demo.&lt;String&gt;genericMethod("Java Programming");

demo.&lt;Integer&gt;genericMethod(25);</code></pre>

<div class="note-tip">
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
</div><div class="clearfix"></div><p><strong>Note</strong>: We can call the generics method without including the type parameter. For example,</p>

<pre>
<code>demo.genericsMethod("Java Programming");</code></pre>

<p>In this case, the compiler can match the type parameter based on the value passed to the method.</p>

</div>
<hr>
<h2 id="bounded-types">Bounded Types</h2>

<p>In general, the <strong>type parameter</strong> can accept any data types (except primitive types).</p>

<p>However, if we want to use generics for some specific types (such as accept data of number types) only, then we can use bounded types.</p>

<p>In the case of bound types, we use the <code>extends</code> keyword. For example,</p>

<pre>
<code>&lt;T extends A&gt;</code></pre>

<p>This means <var>T</var> can only accept data that are subtypes of <var>A</var>.</p>

<h3>Example: Bounded Types</h3>

<pre class="java-exec">
<code>class GenericsClass &lt;T extends Number&gt; {

public void display() {
System.out.println("This is a bounded type generics class.");
}
}

class Main {
public static void main(String[] args) {

// create an object of GenericsClass
GenericsClass&lt;String&gt; obj = new GenericsClass&lt;&gt;();
}
}</code></pre>

<p>In the above example, we have created a class named GenericsClass. Notice the expression, notice the expression</p>

<pre>
<code>&lt;T extends Number&gt; </code></pre>

<p>Here, <var>GenericsClass</var> is created with bounded type. This means <var>GenericsClass</var> can only work with data types that are children of <code>Number</code> (<code>Integer</code>, <code>Double</code>, and so on).</p>

<p>However, we have created an object of the generics class with <code>String</code>. In this case, we will get the following error.</p>

<pre>
<samp>GenericsClass&lt;String&gt; obj = new GenericsClass&lt;&gt;();
                                   ^
reason: inference variable T has incompatible bounds
equality constraints: String
lower bounds: Number
where T is a type-variable:
T extends Number declared in class GenericsClass</samp></pre>

<hr>
<h2 id="advantages">Advantages of Java Generics</h2>

<h3>1. Code Reusability</h3>

<p>With the help of generics in Java, we can write code that will work with different types of data. For example,</p>

<pre>
<code>public &lt;T&gt; void genericsMethod(T data) {...}</code></pre>

<p>Here, we have created a generics method. This same method can be used to perform operations on integer data, string data, and so on.</p>

<h3>2. Compile-time Type Checking</h3>

<p>The <strong>type parameter</strong> of generics provides information about the type of data used in the generics code. For example,</p>

<pre>
<code>// using Generics
GenericsClass&lt;Integer&gt; list = new GenericsClass&lt;&gt;();</code></pre>

<p>Here, we know that <var>GenericsClass</var> is working with <code>Integer</code> data only.</p>

<p>Now, if we try to pass data other than Integer to this class, the program will generate an error at compile time.</p>

<h3>3. Used with Collections</h3>

<p>The collections framework uses the concept of generics in Java. For example,</p>

<pre>
<code>// creating a string type ArrayList
ArrayList&lt;String&gt; list1 = new ArrayList&lt;&gt;();

// creating a integer type ArrayList
ArrayList&lt;Integer&gt; list2 = new ArrayList&lt;&gt;();</code></pre>

<p>In the above example, we have used the same <a href="/java-programming/arraylist">ArrayList class</a> to work with different types of data.</p>

<p>Similar to <code>ArrayList</code>, other collections (<code>LinkedList</code>, <code>Queue</code>, <code>Maps</code>, and so on) are also generic in Java.</p>

</div>



</div>

    
                <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#class">Java Generics Class</a></li>
<li><a href="#methods">Java Generics Method</a></li>
<li><a href="#bounded-types">Bounded Types</a></li>
<li><a href="#advantages">Advantages</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="fileclass">
                      
            <div class="editor-contents">
              <h1>Java File Class</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-2629" class="node node-java-tutorial clearfix" about="/java-programming/file" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java File Class" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <code>File</code> class of the <code>java.io</code> package is used to perform various operations on files and directories.</p>

<p>There is another package named <code>java.nio</code> that can be used to work with files. However, in this tutorial, we will focus on the <code>java.io</code> package.</p>

<hr>
<h2 id="file-directory">File and Directory</h2>

<p>A file is a named location that can be used to store related information. For example,</p>

<p><strong>main.java</strong> is a Java file that contains information about the Java program.</p>

<p>A directory is a collection of files and subdirectories. A directory inside a directory is known as subdirectory.</p>

<hr>
<h2 id="create-object">Create a Java File Object</h2>

<p>To create an object of <code>File</code>, we need to import the <code>java.io.File</code> package first. Once we import the package, here is how we can create objects of file.</p>

<pre>
<code>// creates an object of File using the path 
File file = new File(String pathName);</code></pre>

<p>Here, we have created a file object named <var>file</var>. The object can be used to work with files and directories.</p>

<p class="note-tip"><strong>Note</strong>: In Java, creating a file object does not mean creating a file. Instead, a file object is an abstract representation of the file or directory pathname (specified in the parenthesis).</p>

<hr>
<h2 id="methods">Java File Operation Methods</h2>

<div class="table-responsive">
<table>
<tr>
<th>Operation</th>
<th>Method</th>
<th>Package</th>
</tr>
<tr>
<td>To create file</td>
<td><code>createNewFile()</code></td>
<td><code>java.io.File</code></td>
</tr>
<tr>
<td>To read file</td>
<td><code>read()</code></td>
<td><code>java.io.FileReader</code></td>
</tr>
<tr>
<td>To write file</td>
<td><code>write()</code></td>
<td><code>java.io.FileWriter</code></td>
</tr>
<tr>
<td>To delete file</td>
<td><code>delete()</code></td>
<td><code>java.io.File</code></td>
</tr>
</table>
</div>

<hr>
<h3 id="create">Java create files</h3>

<p>To create a new file, we can use the <code>createNewFile()</code> method. It returns</p>

<ul>
<li><code>true</code> if a new file is created.</li>
<li><code>false</code> if the file already exists in the specified location.</li>
</ul>

<h3>Example: Create a new File</h3>

<pre>
<code>// importing the File class
import java.io.File;

class Main {
public static void main(String[] args) {

// create a file object for the current location
File file = new File("newFile.txt");

try {

// trying to create a file based on the object
boolean value = file.createNewFile();
if (value) {
System.out.println("The new file is created.");
}
else {
System.out.println("The file already exists.");
}
}
catch(Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p>In the above example, we have created a file object named <var>file</var>. The file object is linked with the specified file path.</p>

<pre>
<code>File file = new File("newFile.txt");</code></pre>

<p>Here, we have used the file object to create the new file with the specified path.</p>

<p><strong>If newFile.txt doesn't exist in the current location</strong>, the file is created and this message is shown.</p>

<pre>
<samp>The new file is created.</samp></pre>

<p><strong>However, if newFile.txt already exists</strong>, we will see this message.</p>

<pre>
<samp>The file already exists.</samp></pre>

<hr>
<h3 id="read">Java read files</h3>

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
</div><div class="clearfix"></div><p>To read data from the file, we can use subclasses of either <a href="/java-programming/inputstream">InputStream</a> or <a href="/java-programming/reader">Reader</a>.</p>

<h3>Example: Read a file using FileReader</h3>

<p>Suppose we have a file named <strong>input.txt</strong> with the following content.</p>

<pre>
<code>This is a line of text inside the file. </code></pre>

<p>Now let's try to read the file using Java <code>FileReader</code>.</p>

<pre>
<code>// importing the FileReader class
import java.io.FileReader;

class Main {
public static void main(String[] args) {

char[] array = new char[100];
try {
// Creates a reader using the FileReader
FileReader input = new FileReader("input.txt");

// Reads characters
input.read(array);
System.out.println("Data in the file:");
System.out.println(array);

// Closes the reader
input.close();
}
catch(Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Data in the file:
This is a line of text inside the file.</samp></pre>

<p>In the above example, we have used created an object of FileReader named input. It is now linked with the <strong>input.txt</strong> file.</p>

<pre>
<code>FileReader input = new FileReader("input.txt");</code></pre>

<p>To read the data from the <strong>input.txt</strong> file, we have used the read() method of <code>FileReader</code>.</p>

<hr>
<h3 id="write">Java write to files</h3>

<p>To write data to the file, we can use subclasses of either <a href="/java-programming/outputstream">OutputStream</a> or <a href="/java-programming/writer">Writer</a>.</p>

<h3>Example: Write to file using FileWriter</h3>

<pre>
<code>// importing the FileWriter class
import java.io.FileWriter;

class Main {
public static void main(String args[]) {

String data = "This is the data in the output file";
try {
// Creates a Writer using FileWriter
FileWriter output = new FileWriter("output.txt");

// Writes string to the file
output.write(data);
System.out.println("Data is written to the file.");

// Closes the writer
output.close();
}
catch (Exception e) {
e.getStackTrace();
}
}
}</code></pre>

<p><strong>Output</strong> </p>

<pre>
<samp>Data is written to the file.</samp></pre>

<p>In the above example, we have created a writer using the <code>FileWriter</code> class. The writer is linked with the <strong>output.txt</strong> file.</p>

<pre>
<code>FileWriter output = new FileWriter("output.txt");</code></pre>

<p>To write data to the file, we have used the <code>write()</code> method<code>.</code></p>

<p>Here when we run the program, the <strong>output.txt</strong> file is filled with the following content.</p>

<pre>
<code>This is the data in the output file.</code></pre>

<hr>
<h3 id="delete">Java delete files</h3>

<p>We can use the <code>delete()</code> method of the <var>File</var> class to delete the specified file or directory. It returns</p>

<ul>
<li><code>true</code> if the file is deleted.</li>
<li><code>false</code> if the file does not exist.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: We can only delete empty directories.</p>

<h3>Example: Delete a file</h3>

<pre>
<code>import java.io.File;

class Main {
public static void main(String[] args) {

// creates a file object
File file = new File("file.txt");

// deletes the file
boolean value = file.delete();
if(value) {
System.out.println("The File is deleted.");
}
else {
System.out.println("The File is not deleted.");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>The File is deleted.</samp></pre>

<p>In the above example, we have created an object of File named file. The file now holds the information about the specified file.</p>

<pre>
<code>File file = new File("file.txt");</code></pre>

<p>Here we have used the <code>delete()</code> method to delete the file specified by the object.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="/java-programming/examples/create-and-write-to-file">Java Program to Create File and Write to the File</a></li>
<li><a href="/java-programming/examples/delete-file">Java Program to Delete File in Java</a> </li>
</ul>

</div>



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#file-directory">File and Directory</a></li>
<li><a href="#create-object">Create a Java File Object</a></li>
<li><a href="#methods">Java File Operation Methods</a></li>
<li><a href="#create">Java create files</a></li>
<li><a href="#read">Java read files</a></li>
<li><a href="#write">Java write to files</a></li>
<li><a href="#delete">Java delete files</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="nestedloop">
                      
            <div class="editor-contents">
              <h1>Nested Loop in Java </h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-1058" class="node node-java-tutorial clearfix" about="/java-programming/nested-loop" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Nested Loop in Java " class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">If a loop exists inside the body of another loop, it's called a nested loop. Here's an example of the nested <code>for</code> loop.</p>

<pre>
<code>// outer loop
for (int i = 1; i &lt;= 5; ++i) {
// codes

// inner loop
for(int j = 1; j &lt;=2; ++j) {
// codes
}
..
}</code></pre>

<p>Here, we are using a <code>for</code> loop inside another <code>for</code> loop.</p>

<p>We can use the nested loop to iterate through each day of a week for 3 weeks.</p>

<p>In this case, we can create a loop to iterate three times (3 weeks). And, inside the loop, we can create another loop to iterate 7 times (7 days).</p>

<hr>
<h3 id="example-nested-for-loop">Example 1: Java Nested for Loop</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int weeks = 3;
int days = 7;

// outer loop prints weeks
for (int i = 1; i &lt;= weeks; ++i) {
System.out.println("Week: " + i);

// inner loop prints days
for (int j = 1; j &lt;= days; ++j) {
System.out.println("  Day: " + j);
}
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Week: 1
Day: 1
Day: 2
Day: 3
.....  ..  ....
Week: 2
Day: 1
Day: 2
Day: 3
....  ..  ....
....  .. ....</samp></pre>

<p>In the above example, the outer loop iterates 3 times and prints 3 weeks. And, the inner loop iterates 7 times and prints the 7 days.</p>

<p>We can also create nested loops with <a href="/java-programming/do-while-loop">while and do...while</a> in a similar way.</p>

<p class="note-tip"><strong>Note</strong>: It is possible to use one type of loop inside the body of another loop. For example, we can put a <code>for</code> loop inside the <code>while</code> loop.</p>

<hr>
<h3 id="nested-for-while">Example 2: Java for loop inside the while loop</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int weeks = 3;
int days = 7;
int i = 1;

// outer loop
while (i &lt;= weeks) {
System.out.println("Week: " + i);

// inner loop
for (int j = 1; j &lt;= days; ++j) {
System.out.println("  Days: " + j);
}
++i;
}
}
}</code></pre>

<p><strong>Output</strong>:</p>

<pre>
<samp>Week: 1
Day: 1
Day: 2
Day: 3
.... .. ....
Week: 2
Day: 1
Day: 2
Day: 3
.... .. ....
.... .. ....</samp></pre>

<p>Here you can see that the output of both <strong>Example 1</strong> and <strong>Example 2</strong> is the same.</p>

<hr>
<h3 id="example-pattern">Example 3: Java nested loops to create a pattern</h3>

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
</div><div class="clearfix"></div><p>We can use the nested loop in Java to create patterns like full pyramid, half pyramid, inverted pyramid, and so on.</p>

<p>Here is a program to create a half pyramid pattern using nested loops.</p>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int rows = 5;

// outer loop
for (int i = 1; i &lt;= rows; ++i) {

// inner loop to print the numbers
for (int j = 1; j &lt;= i; ++j) {
System.out.print(j + " ");
}
System.out.println("");
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>1
1 2
1 2 3
1 2 3 4
1 2 3 4 5</samp></pre>

<p>To learn more, visit <a href="/java-programming/examples/pyramid-pattern">the Java program to print pyramid and patterns</a>.</p>

<hr>
<h2 id="break-continue">break and continue Inside Nested Loops</h2>

<p>When we use a <code>break</code> statement inside the inner loop, it terminates the inner loop but not the outer loop. For example,</p>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int weeks = 3;
int days = 7;

// outer loop
for(int i = 1; i &lt;= weeks; ++i) {
System.out.println("Week: " + i);

// inner loop
for(int j = 1; j &lt;= days; ++j) {

// break inside the inner loop
if(i == 2) {
break;
}
System.out.println("  Days: " + j);
}
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Week: 1
Day: 1
Day: 2
.... .. ....
Week: 2
Week: 3
Day: 1
Day: 2
.... .. ....
.... .. ....</samp></pre>

<p>In the above example, we have used the break statement inside the inner <code>for</code> loop. Here, the program skips the loop when <var>i</var> is <strong>2</strong>.</p>

<p>Hence, days for <strong>week 2</strong> are not printed. However, the outer loop that prints week is unaffected.</p>

<hr>
<p>Similarly, when we use a <code>continue</code> statement inside the inner loop, it skips the current iteration of the inner loop only. The outer loop is unaffected. For example,</p>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

int weeks = 3;
int days = 7;

// outer loop
for(int i = 1; i &lt;= weeks; ++i) {
System.out.println("Week: " + i);

// inner loop
for(int j = 1; j &lt;= days; ++j) {

// continue inside the inner loop
if(j % 2 != 0) {
continue;
}
System.out.println("  Days: " + j);
}
}
}
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>Week: 1
Days: 2
Days: 4
Days: 6
Week: 2
Days: 2
Days: 4
Days: 6
Week: 3
Days: 2
Days: 4
Days: 6</samp></pre>

<p>In the above example, we have used the continue statement inside the inner for loop. Notice the code,</p>

<pre>
<code>if(j % 2 != 0) {
continue;
}</code></pre>

<p>Here, the <code>continue</code> statement is executed when the value of <var>j</var> is odd. Hence, the program only prints those days that are even.</p>

<p>We can see the <code>continue</code> statement has affected only the inner loop. The outer loop is working without any problem.</p>
</div>



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Java nested loop</a></li>
<li><a href="#example-nested-for-loop">Example: Nested for Loop</a></li>
<li><a href="#nested-for-while">Example: for loop inside while loop</a></li>
<li><a href="#example-pattern">Java nested loop to create a pattern</a></li>
<li><a href="#break-continue">break and continue Inside Nested Loops</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                    <div id="command-line">
                      
            <div class="editor-contents">
              <h1>Java Command-Line Arguments</h1>


            <!--  <p class="editor-contents__short-description"></p> -->



                



<div id="node-2614" class="node node-java-tutorial clearfix" about="/java-programming/command-line-arguments" typeof="sioc:Item foaf:Document">


<span property="dc:title" content="Java Command-Line Arguments" class="rdf-meta element-hidden"></span>

<div class="content">
<p id="introduction">The <strong>command-line arguments</strong> in Java allow us to pass arguments during the execution of the program.</p>

<p>As the name suggests arguments are passed through the command line.</p>

<hr>
<h3 id="example">Example: Command-Line Arguments</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {
System.out.println("Command-Line arguments are");

// loop through all arguments
for(String str: args) {
System.out.println(str);
}
}
}
</code></pre>

<p>Let's try to run this program using the command line.</p>

<p><strong>1. To compile the code </strong></p>

<pre>
<code>javac Main.java
</code></pre>

<p><strong>2. To run the code </strong></p>

<pre>
<code>java Main
</code></pre>

<p>Now suppose we want to pass some arguments while running the program, we can pass the arguments after the class name. For example,</p>

<pre>
<code>java Main apple ball cat
</code></pre>

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
</div><div class="clearfix"></div><p>Here <var>apple</var>, <var>ball</var>, and <var>cat</var> are arguments passed to the program through the command line. Now, we will get the following output.</p>

<pre>
<samp>Command-Line arguments are
Apple
Ball
Cat
</samp></pre>

<p>In the above program, the <code>main()</code> method includes an <a href="/java-programming/arrays" title="array">array</a> of string named <var>args</var> as its parameter.</p>

<pre>
<code>public static void main(String[] args) {...}
</code></pre>

<p>The <code>String</code> array stores all the arguments passed through the command line.</p>

<p class="note-tip"><strong>Note</strong>: Arguments are always stored as <a href="/java-programming/string" title="strings">strings</a> and always separated by <strong>white-space</strong>.</p>

<hr>
<h2 id="numeric-arguments">Passing Numeric Command-Line Arguments</h2>

<p>The <code>main()</code> method of every Java program only accepts string arguments. Hence it is not possible to pass numeric arguments through the command line.</p>

<p>However, we can later convert string arguments into numeric values.</p>

<h3 id="example-numeric-arguments">Example: Numeric Command-Line Arguments</h3>

<pre class="java-exec">
<code>class Main {
public static void main(String[] args) {

for(String str: args) {
// convert into integer type
int argument = Integer.parseInt(str);
System.out.println("Argument in integer form: " + argument);
}

}
}
</code></pre>

<p>Let's try to run the program through the command line.</p>

<pre>
<code>// compile the code
javac Main.java

// run the code
java Main 11 23
</code></pre>

<p>Here <var>11</var> and <var>23</var> are command-line arguments. Now, we will get the following output.</p>

<pre>
<samp>Arguments in integer form
11
23
</samp></pre>

<p>In the above example, notice the line</p>

<pre>
<code>int argument = Intege.parseInt(str);
</code></pre>

<p>Here, the <code>parseInt()</code> method of the <code>Integer</code> class converts the string argument into an integer.</p>

<p>Similarly, we can use the <code>parseDouble()</code> and <code>parseFloat()</code> method to convert the string into <code>double</code> and <code>float</code> respectively.</p>

<p class="note-tip"><strong>Note</strong>: If the arguments cannot be converted into the specified numeric value then an exception named <code>NumberFormatException</code> occurs.</p>
</div>



</div>

  
              <div class="tutorial-toc"><div class="tutorial-toc__inner"><h3 class="tutorial-toc__title">Table of Contents
<button class="btn btn--clear align-items-center">
<svg class="programiz-icon">
<use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#x"></use>
</svg>
</button></h3><div class="tutorial-toc__links"><ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#example">Example: Command-Line Arguments</a></li>
<li><a href="#numeric-arguments">Passing Numeric Arguments</a></li>
<li><a href="#example-numeric-arguments">Example: Numeric Arguments</a></li>
</ul>
</div></div></div>                          </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="js/java1.js"></script>
</body>
</html>