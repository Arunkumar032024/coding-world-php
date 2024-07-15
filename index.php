<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding World</title>
    <!-- To add favicon icon  -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    

    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body class="index" >
    <?php

    require('generalheader.php');
    ?>

      <!-- home-banner section -->
      <div class="container-fluid home-banner">
        <h2>Learn to Code</h2>
        <p>With the <a href="#">coding world</a> developer site.</p>
        <a href="#">Let's Get Started</a>
      </div>

      <!-- languages section -->
      <div class="container-fluid language">
        <!-- c language section  -->
        <div class="row" style="background-color: var(--c-color);">
            <div class="col-12 col-lg-6 content-box">
                <h2>Language C</h2>
                <p>C is a powerful, efficient programming language developed in the 1970s, ideal for system programming due to its low-level memory access and control over system resources.</p>
                <a href="login.php" class="btn btn-outline-success">LEARN C</a>
            </div>
            <div class="col-12 col-lg-6 editor-box">
                <div class="editor">
                    <h3>C Example:</h3>
<pre class="code">
// Online C compiler to run C program online
#include &lt;stdio.h&gt;

int main() {
    // Write C code here
    printf("Try programiz.pro");

    return 0;
}                            
</pre>
<a href="https://www.programiz.com/c-programming/online-compiler/#google_vignette" target="_blank" class="btn btn-outline-success">Try it YourSelf</a>
                </div>
            </div>
        </div>

        <!-- java language section  -->
        <div class="row" style="background-color: var(--java-color);">
            <div class="col-12 col-lg-6 content-box">
                <h2>Java</h2>
                <p>Java is a versatile, object-oriented programming language developed by Sun Microsystems, known for its portability, robustness, and use in web, mobile, and enterprise applications.</p>
                <a href="login.php" class="btn btn-outline-success">LEARN JAVA</a>
            </div>
            <div class="col-12 col-lg-6 editor-box">
                <div class="editor">
                    <h3>Java Example:</h3>
<pre class="code">
// Online Java Compiler
// Use this editor to write, compile and run your Java code online

class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Try programiz.pro");
    }
}                            
</pre>
<a href="https://www.programiz.com/java-programming/online-compiler/" target="_blank" class="btn btn-outline-success">Try it YourSelf</a>
                </div>
            </div>
        </div>

        <!-- PHP language section  -->
        <div class="row" style="background-color: var(--php-color);">
            <div class="col-12 col-lg-6 content-box">
                <h2>C++</h2>
                <p>C++ is an extension of C, adding object-oriented features, developed by Bjarne Stroustrup. It’s widely used for system/software development, game programming, and real-time simulations.</p>
                <a href="login.php" class="btn btn-outline-success">LEARN C++</a>
            </div>
            <div class="col-12 col-lg-6 editor-box">
                <div class="editor">
                    <h3>PHP Example:</h3>
<pre class="code">
// Online C++ compiler to run C++ program online
#include &lt;iostream&gt;

int main() {
    // Write C++ code here
    std::cout << "Try programiz.pro";

    return 0;
}                            
</pre>
<a href="https://www.programiz.com/cpp-programming/online-compiler/" target="_blank" class="btn btn-outline-success">Try it YourSelf</a>
                </div>
            </div>
        </div>

        <!-- python language section  -->
        <div class="row" style="background-color: var(--python-color);">
            <div class="col-12 col-lg-6 content-box">
                <h2>Python</h2>
                <p>Python is a high-level, interpreted programming language known for its readability, simplicity, and versatility. It's widely used in web development, data analysis, artificial intelligence, and scientific computing.</p>
                <a href="login.php" class="btn btn-outline-success">LEARN PYTHON</a>
            </div>
            <div class="col-12 col-lg-6 editor-box">
                <div class="editor">
                    <h3>Python Example:</h3>
<pre class="code">
# Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.
print("Try programiz.pro")                            
</pre>
<a href="https://www.programiz.com/python-programming/online-compiler/" target="_blank" class="btn btn-outline-success">Try it YourSelf</a>
                </div>
            </div>
        </div>
        
      </div>

      <!-- footer section design -->
      <?php
      require('generalfooter.php');
      ?>
      <!-- End footer section design -->

      <script src="assets/js/custom.js"></script>
</body>
</html>