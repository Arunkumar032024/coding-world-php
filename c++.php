<?php
error_reporting(0);
session_start();
$id=$_SESSION['email'];
require "connection.php";
$sql="SELECT * FROM registration WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($row);
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
    <title>C++ Language</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                <h1 class="offcanvas-title">C++ Tutorial</h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
              </div>
              <div class="offcanvas-body">
                <div class="col-lg-3">
                  <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  C++ Introduction
                              </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <div class="list-group">
                                      <a href="#first1" class="list-group-item list-group-item-action">Getting Started
                                          with C</a>
                                      <a href="#first2" class="list-group-item list-group-item-action">Your First C++
                                          Program</a>
                                      <a href="#first3" class="list-group-item list-group-item-action">C++ Comments</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                  C++ Fundamentals
                              </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <div class="list-group">
                                      <a href="#second1" class="list-group-item list-group-item-action">C++ Keywords and
                                          Identifiers</a>
                                      <a href="#second2" class="list-group-item list-group-item-action">C++ Variables,
                                          Literals and Constants</a>
                                      <a href="#second3" class="list-group-item list-group-item-action">C++ Data Types</a>
                                      <a href="#second4" class="list-group-item list-group-item-action">C++ Type
                                          Modifiers</a>
                                      <a href="#second5" class="list-group-item list-group-item-action">C++ Constants</a>
                                      <a href="#second6" class="list-group-item list-group-item-action">C++ Basic
                                          Input/Output</a>
                                      <a href="#second7" class="list-group-item list-group-item-action">C++ Operators</a>
  
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                  C++ Flow Control
                              </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <div class="list-group">
                                      <a href="#third1" class="list-group-item list-group-item-action">C++ Relational and
                                          Logical Operators</a>
                                      <a href="#third2" class="list-group-item list-group-item-action">C++ if, if...else
                                          and Nested if...else</a>
                                      <a href="#third3" class="list-group-item list-group-item-action">C++ for Loop</a>
                                      <a href="#third4" class="list-group-item list-group-item-action">C++ while and
                                          do...while Loop</a>
                                      <a href="#third5" class="list-group-item list-group-item-action">C++ break
                                          Statement</a>
                                      <a href="#third6" class="list-group-item list-group-item-action">C++ continue
                                          Statement</a>
                                      <a href="#third7" class="list-group-item list-group-item-action">C++ goto
                                          Statement</a>
                                      <a href="#third8" class="list-group-item list-group-item-action">C++ switch..case
                                          Statement</a>
                                      <a href="#third9" class="list-group-item list-group-item-action">C++ Ternary
                                          Operator</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                  C++ Functions
                              </button>
                          </h2>
                          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <div class="list-group">
                                      <a href="#four1" class="list-group-item list-group-item-action">C++ Functions</a>
                                      <a href="#four2" class="list-group-item list-group-item-action">C++ User-defined
                                          Function Types</a>
                                      <a href="#four3" class="list-group-item list-group-item-action">C++ Function
                                          Overloading</a>
                                      <a href="#four4" class="list-group-item list-group-item-action">C++ Inline
                                          Functions</a>
                                      <a href="#four5" class="list-group-item list-group-item-action">C++ Recursion</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                  C++ Arrays and Strings
                              </button>
                          </h2>
                          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <div class="list-group">
                                      <a href="#five1" class="list-group-item list-group-item-action">C++ Arrays</a>
                                      <a href="#five2" class="list-group-item list-group-item-action">Passing Array to a
                                          Function in C++ Programming</a>
                                      <a href="#five3" class="list-group-item list-group-item-action">C++ Multidimensional
                                          Arrays</a>
                                      <a href="#five4" class="list-group-item list-group-item-action">C++ String</a>
                                      <a href="#five5" class="list-group-item list-group-item-action">C++ String Class</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                  C++ Pointers and References
                              </button>
                          </h2>
                          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <div class="list-group">
                                      <a href="#six1" class="list-group-item list-group-item-action">C++ Pointers</a>
                                      <a href="#six2" class="list-group-item list-group-item-action">C++ Pointers and
                                          Arrays</a>
                                      <a href="#six3" class="list-group-item list-group-item-action">C++ References</a>
                                      <a href="#six4" class="list-group-item list-group-item-action">C++ Call by
                                          Reference: Using pointers</a>
                                      <a href="#six5" class="list-group-item list-group-item-action">C++ Memory
                                          Management: new and delete</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                  C++ Structure and Enumerations
                              </button>
                          </h2>
                          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <div class="list-group">
                                      <a href="#seven1" class="list-group-item list-group-item-action">C++ Structures</a>
                                      <a href="#seven2" class="list-group-item list-group-item-action">C++ Structure and
                                          Function</a>
                                      <a href="#seven3" class="list-group-item list-group-item-action">C++ Pointers to
                                          Structure</a>
                                      <a href="#seven4" class="list-group-item list-group-item-action">C++ Enumeration</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                  C++ Object Oriented Programming
                              </button>
                          </h2>
                          <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <div class="list-group">
                                      <a href="#eight1" class="list-group-item list-group-item-action">C++ Classes and
                                          Objects</a>
                                      <a href="#eight2" class="list-group-item list-group-item-action">C++
                                          Constructors</a>
                                      <a href="#eight3" class="list-group-item list-group-item-action">C++ Constructor
                                          Overloading</a>
                                      <a href="#eight4" class="list-group-item list-group-item-action">C++ Destructors</a>
                                      <a href="#eight5" class="list-group-item list-group-item-action">C++ Access
                                          Modifiers</a>
                                      <a href="#eight6" class="list-group-item list-group-item-action">C++
                                          Encapsulation</a>
                                      <a href="#eight7" class="list-group-item list-group-item-action">C++ friend Function
                                          and friend Classes</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                  C++ Inheritance and Polymorphism
                              </button>
                          </h2>
                          <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <div class="list-group">
                                      <a href="#nine1" class="list-group-item list-group-item-action">C++ Inheritance</a>
                                      <a href="#nine2" class="list-group-item list-group-item-action">C++ Public,
                                          Protected and Private Inheritance</a>
                                      <a href="#nine3" class="list-group-item list-group-item-action">C++ Multiple,
                                          Multilevel and Hierarchical Inheritance</a>
                                      <a href="#nine4" class="list-group-item list-group-item-action">C++ Function
                                          Overriding</a>
                                      <a href="#nine5" class="list-group-item list-group-item-action">C++ Virtual
                                          Functions</a>
                                      <a href="#nine6" class="list-group-item list-group-item-action">C++ Abstract Class
                                          and Pure Virtual Function</a>
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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                C++ Introduction
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="#first1" class="list-group-item list-group-item-action">Getting Started
                                        with C</a>
                                    <a href="#first2" class="list-group-item list-group-item-action">Your First C++
                                        Program</a>
                                    <a href="#first3" class="list-group-item list-group-item-action">C++ Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                C++ Fundamentals
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="#second1" class="list-group-item list-group-item-action">C++ Keywords and
                                        Identifiers</a>
                                    <a href="#second2" class="list-group-item list-group-item-action">C++ Variables,
                                        Literals and Constants</a>
                                    <a href="#second3" class="list-group-item list-group-item-action">C++ Data Types</a>
                                    <a href="#second4" class="list-group-item list-group-item-action">C++ Type
                                        Modifiers</a>
                                    <a href="#second5" class="list-group-item list-group-item-action">C++ Constants</a>
                                    <a href="#second6" class="list-group-item list-group-item-action">C++ Basic
                                        Input/Output</a>
                                    <a href="#second7" class="list-group-item list-group-item-action">C++ Operators</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                C++ Flow Control
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="#third1" class="list-group-item list-group-item-action">C++ Relational and
                                        Logical Operators</a>
                                    <a href="#third2" class="list-group-item list-group-item-action">C++ if, if...else
                                        and Nested if...else</a>
                                    <a href="#third3" class="list-group-item list-group-item-action">C++ for Loop</a>
                                    <a href="#third4" class="list-group-item list-group-item-action">C++ while and
                                        do...while Loop</a>
                                    <a href="#third5" class="list-group-item list-group-item-action">C++ break
                                        Statement</a>
                                    <a href="#third6" class="list-group-item list-group-item-action">C++ continue
                                        Statement</a>
                                    <a href="#third7" class="list-group-item list-group-item-action">C++ goto
                                        Statement</a>
                                    <a href="#third8" class="list-group-item list-group-item-action">C++ switch..case
                                        Statement</a>
                                    <a href="#third9" class="list-group-item list-group-item-action">C++ Ternary
                                        Operator</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                C++ Functions
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="#four1" class="list-group-item list-group-item-action">C++ Functions</a>
                                    <a href="#four2" class="list-group-item list-group-item-action">C++ User-defined
                                        Function Types</a>
                                    <a href="#four3" class="list-group-item list-group-item-action">C++ Function
                                        Overloading</a>
                                    <a href="#four4" class="list-group-item list-group-item-action">C++ Inline
                                        Functions</a>
                                    <a href="#four5" class="list-group-item list-group-item-action">C++ Recursion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                C++ Arrays and Strings
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="#five1" class="list-group-item list-group-item-action">C++ Arrays</a>
                                    <a href="#five2" class="list-group-item list-group-item-action">Passing Array to a
                                        Function in C++ Programming</a>
                                    <a href="#five3" class="list-group-item list-group-item-action">C++ Multidimensional
                                        Arrays</a>
                                    <a href="#five4" class="list-group-item list-group-item-action">C++ String</a>
                                    <a href="#five5" class="list-group-item list-group-item-action">C++ String Class</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                C++ Pointers and References
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="#six1" class="list-group-item list-group-item-action">C++ Pointers</a>
                                    <a href="#six2" class="list-group-item list-group-item-action">C++ Pointers and
                                        Arrays</a>
                                    <a href="#six3" class="list-group-item list-group-item-action">C++ References</a>
                                    <a href="#six4" class="list-group-item list-group-item-action">C++ Call by
                                        Reference: Using pointers</a>
                                    <a href="#six5" class="list-group-item list-group-item-action">C++ Memory
                                        Management: new and delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                C++ Structure and Enumerations
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="#seven1" class="list-group-item list-group-item-action">C++ Structures</a>
                                    <a href="#seven2" class="list-group-item list-group-item-action">C++ Structure and
                                        Function</a>
                                    <a href="#seven3" class="list-group-item list-group-item-action">C++ Pointers to
                                        Structure</a>
                                    <a href="#seven4" class="list-group-item list-group-item-action">C++ Enumeration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                C++ Object Oriented Programming
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="#eight1" class="list-group-item list-group-item-action">C++ Classes and
                                        Objects</a>
                                    <a href="#eight2" class="list-group-item list-group-item-action">C++
                                        Constructors</a>
                                    <a href="#eight3" class="list-group-item list-group-item-action">C++ Constructor
                                        Overloading</a>
                                    <a href="#eight4" class="list-group-item list-group-item-action">C++ Destructors</a>
                                    <a href="#eight5" class="list-group-item list-group-item-action">C++ Access
                                        Modifiers</a>
                                    <a href="#eight6" class="list-group-item list-group-item-action">C++
                                        Encapsulation</a>
                                    <a href="#eight7" class="list-group-item list-group-item-action">C++ friend Function
                                        and friend Classes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                C++ Inheritance and Polymorphism
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="#nine1" class="list-group-item list-group-item-action">C++ Inheritance</a>
                                    <a href="#nine2" class="list-group-item list-group-item-action">C++ Public,
                                        Protected and Private Inheritance</a>
                                    <a href="#nine3" class="list-group-item list-group-item-action">C++ Multiple,
                                        Multilevel and Hierarchical Inheritance</a>
                                    <a href="#nine4" class="list-group-item list-group-item-action">C++ Function
                                        Overriding</a>
                                    <a href="#nine5" class="list-group-item list-group-item-action">C++ Virtual
                                        Functions</a>
                                    <a href="#nine6" class="list-group-item list-group-item-action">C++ Abstract Class
                                        and Pure Virtual Function</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End sidebar menu section  -->

            <!-- content section -->
            
            <div class="col-lg-9" style="padding:0; margin:0">
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
                                    <a class="nav-link" href="python.php">Python</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">C++</a>
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
                <div class="row" style="padding:2%;">
<!-- first menu sections -->
<section id="first1">
    <h1>Getting Started With C++</h1>
    <div class="content">
        <p id="introduction">C++ is a general-purpose programming language that supports object-oriented programming.</p>
  
  <p>To compile a C++ code, you need to have a <strong>C++ compiler</strong> installed on your device. However, if you're looking for a quick start, you can use our free <a href="/cpp-programming/online-compiler/">online C++ compiler</a> that allows you to run code directly in your browser without any setup.</p>
  
  <p>Now, for those who prefer to use C++ on their local machine, this guide will walk you through the installation process on Windows, macOS, and Linux (Ubuntu).</p>
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
       <h2 id="windows">Install C++ on Windows</h2>
  
  <p>To setup a C++ programming environment on Windows, you'll need two main components: </p>
  
  <ul>
      <li><strong>VS Code</strong>: A text editor to write your code,</li>
      <li><strong>MinGW</strong>: A compiler that turns your C++ code into an executable program.</li>
  </ul>
  
  <p>Follow the steps below to install C++ on Windows:</p>
  
  <ol>
      <li>Install VS Code</li>
      <li>Download MinGW Compiler</li>
      <li>Run the Installer</li>
      <li>Add MinGW to System PATH</li>
      <li>Install C/C++ Extension in VS Code</li>
  </ol>
  
  <p>Here's a detailed explanation of each of the steps.</p>
  
  <h3>Step 1: Install VS Code</h3>
  
  <p>Go to the VS Code <a href="https://code.visualstudio.com/download">Official website</a> and download the Windows installer. Once the download is complete, run the installer and follow the installation process.</p>
  
  <p>Click <strong>Finish</strong> to complete the installation process.</p>
  
  <h3>Step 2: Download MinGW Compiler </h3>
  
  <p>Go to <a href="https://sourceforge.net/projects/mingw/">MinGW Compiler Download</a> and download the MinGW installation manager.</p>
  
  <figure><img src="assets/images/cpp-mingw-installation111.png" title="C++ MinGW Installation" alt="C++ MinGW Installation" width="" height="">
      <figcaption>C++ MinGW Installation</figcaption></figure>
  <h3>Step 3: Run the Installer</h3>
  
  <p>Now, go to your <strong>downloads</strong> folder and run the installer you just downloaded. You will be prompted to this screen.</p>
  
  <figure><img src="assets/images/mingw-installer11.png" title="C++ Run MinGW Installer" alt="C++ Run MinGW Installer" width="" height="">
      <figcaption>C++ Run MinGW Installer</figcaption></figure>
  <p>Click on <strong>Continue</strong> and wait till the download is completed.</p>
  
  <p><strong>Include gcc-core package</strong></p>
  
  <p>During installation, you will be prompted to select the components to install. Mark <strong>mingw32-base and mingw32-gcc-g++</strong> for installation, click on installation and apply changes.</p>
  
  <figure><img src="assets/images/gcc-core-package-installation-in-cpp%201.png" title="C++ GCC-Core Package Installation" alt="C++ GCC-Core Package Installation" width="" height="">
      <figcaption>C++ GCC-Core Package Installation</figcaption></figure>
  <h3>Step 4: Add MinGW to System PATH</h3>
  
  <p>Go to the folder and double click on the MinGW folder and copy its location.</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs">C:\MinGW\bin</code></pre>
  
  <p>Search <strong>environment variable</strong> on the terminal. In system properties, click on environment variables. You will be prompted to the screen below.</p><figure><img src="assets/images/setting-environment-variables11.png" title="C++ Setting Environment Variables" alt="C++ Setting Environment Variables" width="" height="">
      <figcaption>C++ Setting Environment Variables</figcaption></figure>
  <p></p>
  
  <p>Then, find the <strong>Path</strong> variable in the System variables section and click on <strong>Edit</strong>. Click <strong>New</strong> and add the path to the bin directory within your MinGW installation (i.e. C:\MinGW\bin)</p>
  
  <p>Finally, close all the dialogues with the <strong>Ok</strong> button.</p>
  
  <h3>Step 5: Install C/C++ Extension in VS Code</h3>
  
  <p>Open VS Code and click on Extensions in the left side of the window.</p>
  
  <p>Then, search for <strong>C/C++</strong> by Microsoft in the Extensions and click on install.</p><figure><img src="assets/images/extension-install-in-windows1-1.png" title="Installing C++ Extension in Windows" alt="Installing C++ Extension in Windows" width="" height="">
      <figcaption>Installing C++ Extension in Windows</figcaption></figure>
  <p></p>
  <p>Now, you are all set to run C++ code inside your VS Code.</p>
      </div>
       <div class="tabbed-editor-content__item" id="mac">
        <h2 id="mac">Install C++ on macOS</h2>
  
  <p>To install C++ on your Mac, you'll need two main components:</p>
  
  <ul>
      <li><strong>VS Code</strong>: A text editor to write your code,</li>
      <li><strong>Clang</strong>: A default compiler in mac that turns your C++ code into an executable program.</li>
  </ul>
  
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
      </div><div class="clearfix"></div><p>Follow the steps below to install C++ on macOs,</p>
  
  <ol>
      <li>Install VS Code</li>
      <li>Install C++ Extension</li>
      <li>Check for C++ Compiler</li>
  </ol>
  
  <p>Here is a detailed explanation of each of the steps:</p>
  
  <h3>Step 1: Install VS Code</h3>
  
  <p>Go to the VS Code <a href="https://code.visualstudio.com/download">official website</a> and download the zipped file. Once the download is complete, open the zipped file.</p>
  
  <p>In Finder, open a new window and navigate to the Applications folder. Drag the VS Code application from the zip file into the Applications folder to install it.</p>
  
  <p>You can now launch VS Code directly from the Applications folder.</p>
  
  <h3>Step 2: Install C++ Extension </h3>
  
  <p>Open VS Code and click on the Extension in the right side of the screen. Search for <strong>C/C++</strong> by Microsoft in the Extensions and click on install.</p>
  
  <figure><img src="assets/images/cpp-extension-install-in-mac1.png" title="Installing C++ Extension in macOS" alt="Installing C++ Extension in macOS" width="" height="">
      <figcaption>Installing C Extension in macOS</figcaption></figure>
  <h3>Step 4: Check for C++ Compiler</h3>
  
  <p>The macOS generally comes with Clang installed on it, which can be used as a C++ compiler. You can verify its installation by typing the following command in the terminal.</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs">clang –-version</code></pre>
  
  <figure><img src="assets/images/cpp-check-clang-version1-1.png" title="Checking Clang Version " alt="Checking Clang Version" width="" height="">
      <figcaption>Checking Clang Version</figcaption></figure>
  <p>If the output on your screen does not match the screenshot above showing the version of Clang, you may need to install Xcode Command Line Tools. You can do this by running the following command in your terminal</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs">xcode-select --install</code></pre>
  
  <p>Now, you are all set to run C++ code inside your VS Code.</p>
      </div>
      <div class="tabbed-editor-content__item" id="linux">
     
      <h2>Install C++ on Linux</h2>
      <p>Linux has various distributions, and the installation process differs slightly from each other. For now, we will focus on Ubuntu distribution.</p>
      <p>To run a C++ program in Linux, you need two things: </p>
      <ul>
        <li><strong>VS Code</strong>: An editor to craft your code. </li>
        <li><strong>g++</strong>: A part of the GNU Compiler Collection, g++ compiles C++ code into executable programs. </li>
      </ul>
      <ol>
        <li>Install VS Code</li>
        <li>Install g++</li>
      </ol>
      <h3>Step 1: Install VS Code </h3>
      <p>Open the Terminal and type</p>
      <pre style="max-height: 600px;"><code class="cpp hljs">sudo apt update </code></pre>
      <p>This command updates your package lists to ensure you get the latest versions of your software. </p>
      <p>Proceed to install VS Code with</p>
      <pre style="max-height: 600px;"><code class="cpp hljs">sudo snap install code --classic </code></pre>
      <figure><img src="assets/images/cpp-install-vs-code-in-linux1-1.png" title="Install VS Code in Linux" alt="Install VS Code in Linux" width="" height="">
        <figcaption>Install VS Code in Linux</figcaption></figure>
      <h3>Step 2: Install g++ </h3>
      <p>Most linux distros including Ubuntu come with g++ preinstalled. You can check this by using the following command in the terminal.</p>
      <pre style="max-height: 600px;"><code class="cpp hljs">g++ --version</code></pre>
      <p>If you don't have one, you can install it with:</p>
      <pre style="max-height: 600px;"><code class="cpp hljs">sudo apt install g++</code></pre>
    </div>
  </div>
  
  <h2 id="run">Run Your First C++ Program</h2>
  
  <p>First open VS Code, click on the File in the top menu and then select New File.</p>
  
  <figure><img src="assets/images/newfile-11.png" title="Create a New File in VS Code" alt="Create a New File in VS Code" width="" height="">
      <figcaption>Create a New File in VS Code</figcaption></figure>
  <p>Then, save this file with a .cpp extension by clicking on <strong>File</strong> again, then <strong>Save As</strong>, and type your filename ending in .cpp. (Here, we are saving it as hello.cpp)</p>
  
  <p>Now, write the following code into your file:</p>
  
  <div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">std</span>::<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Hello World"</span>;
      <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
  }</code></pre></div></div><div class="code-editor__action">
            <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
              Run Code >>
            </a>
          </div></div>
  
  <p>Then click on the <strong>run</strong> button on the top right side of your screen.</p>
  
  <figure><img src="assets/images/hello-cpp-run.png" title="Hello World in C++" alt="Hello World in C++" width="" height="">
      <figcaption>Hello World in C++</figcaption></figure>
  <p>You should see Hello World printed to the command prompt.</p>
  
  <p><strong>For Linux System</strong></p>
  
  <p>To run your C++ program on Linux, go to the Terminal, navigate to the directory containing your file, and type: </p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs">g++ hello.cpp -o hello </code></pre>
  
  <p>Run your program using</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs">./hello </code></pre>
  
  <p>Now that you have set everything up to run C++ programs on your computer,  you'll be learning how the basic program works in C++ in the next tutorial.</p>
  
    </div>
  
    
    
  </div>
</section>
<section id="first2">
    <h1>Your First C++ Program</h1>
    <div class="content">
        <p id="introduction">In the previous tutorial, you learned how to <a href="/cpp-programming/getting-started">install C++</a> on your computer. Now, let's write a simple C++ program.</p>
  
  <p>The following program displays <code>Hello, World!</code> on the screen.</p>
  
  <div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
  
  <span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;
  
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Hello, World!"</span>;
      <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
  }</code></pre></div></div><div class="code-editor__action">
            <a href="https://www.programiz.com/cpp-programming/online-compiler/?ref=07eef649" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
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
  <h2 id="working-of-cpp-program">Working of C++ Program </h2>
  
  <p>Congratulations on writing your first C++ program. Now, let's see how the program works.</p>
  
  <div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
  
  <span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;
  
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Hello, World!"</span>;
      <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
  }</code></pre></div></div><div class="code-editor__action">
            <a href="https://www.programiz.com/cpp-programming/online-compiler/?ref=0870b95b" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
              Run Code >>
            </a>
          </div></div>
  
  <p>Notice the following line of code:</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Hello, World!"</span>;</code></pre>
  
  <p>In the above code, the <code>cout &lt;&lt;</code> prints the text <code>Hello, World!</code> to the screen.</p>
  
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
      </div><div class="clearfix"></div><p>Remember these important things about <code>cout</code>:</p>
  
  <ul>
      <li>The text to be printed is enclosed within double quotes <code>""</code>.</li>
      <li>Each <code>cout &lt;&lt;</code> ends with a semicolon <code>;</code>.</li>
  </ul>
  
  <p>Not following the above rules will result in errors and your code will not run successfully.</p>
  
  <hr>
  <h2 id="basic-structure">Basic Structure of a C++ Program</h2>
  
  <p>As we have seen from the last example, a C++ program requires a lot of lines even for a simple program.</p>
  
  <p>For now, just remember that every C++ program we will write will follow this structure:</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
  
  <span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;
  
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  
      <span class="hljs-comment">// your code</span>
  
      <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
  }</code></pre>
  
  <p>And, we will write out code inside curly braces <code>{}</code>.</p>
  
  
  
    </div>
</section>
<section id="first3">
    <h1>C++ Comments</h1>
    <div class="content">
        <p id="introduction">In the previous tutorial you learned how to <a href="/r/getting-started"></a>write your first <a href="http://cpp-programming/first-program">C++ program</a>. Now, let's learn about C++ comments.</p>
  
  <div class="note-tip">
  <p><strong>Tip</strong>: We are introducing comments early in this tutorial series because, from now on, we will be using them to explain our code. </p>
  
  </div>
  <p>Comments are hints that we add to our code, making it  easier to read and understand. In C++, comments start with <code>//</code>.</p>
  
  <p>For example,</p>
  
  <div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
  <span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;
  
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-comment">// print Hello World to the screen</span>
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Hello World"</span>;
  
      <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
  }</code></pre></div></div><div class="code-editor__action">
            <a href="https://www.programiz.com/cpp-programming/online-compiler/?ref=69a55ad4" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
              Run Code >>
            </a>
          </div></div>
  
  <p><strong>Output</strong> </p>
  
  <pre><samp>Hello World</samp></pre>
  
  <p>Here, <code>// print Hello World to the screen</code> is a comment. </p>
  
  <p>The C++ compiler ignores everything after the <code>//</code> symbol.</p>
  
  <p class="note-tip"><strong>Note</strong>: The purpose of this tutorial is to help you understand comments, so you can ignore other concepts used in the program. We will learn about them in later tutorials.</p>
  
  <hr>
  <h2 id="single-line">Single Line Comments</h2>
  
  <p>In C++, a single line comment starts with a <strong>double slash</strong> <strong>(</strong><code>//</code><strong>)</strong> symbol. For example,</p>
  
  <div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
  
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-comment">// declaring a variable</span>
      <span class="hljs-keyword">int</span> a;
  
      <span class="hljs-comment">// initializing the variable 'a' with the value 2</span>
      a = <span class="hljs-number">2</span>;
      
      <span class="hljs-comment">// print the value of 'a'</span>
      <span class="hljs-built_in">std</span>::<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Value of a is: "</span>&lt;&lt; a;
  
      <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
  }</code></pre></div></div><div class="code-editor__action">
            <a href="https://www.programiz.com/cpp-programming/online-compiler/?ref=eae5c3be" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
              Run Code >>
            </a>
          </div></div>
  
  <p><strong>Output</strong></p>
  
  <pre><samp>Value of a is: 2</samp></pre>
  
  <p>Here, we have used three single-line comments:</p>
  
  <ul>
      <li><code>// declaring a variable</code></li>
      <li><code>// initializing the variable 'a' with the value 2</code></li>
      <li><code>// print the value of 'a'</code></li>
  </ul>
  
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
      </div><div class="clearfix"></div><p>Single-line comments start with <code>//</code> and extend up to the end of the line. We can also use single line comment along with the code like this:</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> a;    <span class="hljs-comment">// declaring a variable</span></code></pre>
  
  <p>Here, code before <code>//</code> are executed and code after <code>//</code> are ignored by the compiler.</p>
  
  <hr>
  <h2 id="multi-line">Multi-line comments</h2>
  
  <p>In C++, any line between <code>/*</code> and <code>*/</code> is also a comment. For example,</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
  
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-comment">/* declaring a variable
      to store salary to employees
      */</span>
      <span class="hljs-keyword">int</span> salary = <span class="hljs-number">2000</span>;
      
      <span class="hljs-comment">// print the salary</span>
      <span class="hljs-built_in">std</span>::<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Salary: "</span>&lt;&lt; salary;
  
      <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
  }</code></pre>
  
  <p>Here, everything between <code>/*</code> and <code>*/</code> is ignored by the compiler.This syntax can be used to write both single-line and multi-line comments.</p>
  
  <div class="note-tip">
  <p><strong>Note</strong>: Remember the keyboard shortcut to use comments:</p>
  
  <ul>
      <li>Single Line comment: ctrl + / (windows) and cmd + / (mac)</li>
      <li>Multi line comment: ctrl + shift + / (windows) and cmd + shift + / (mac)</li>
  </ul>
  
  </div>
  <hr>
  <h2 id="using-comments">Using Comments for Debugging</h2>
  
  <p>Comments are useful for debugging a code. For example,</p>
  
  <div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
  <span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
     <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"some code"</span>;
     <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">''error code;
     cout &lt;&lt; "some other code";
  
     return 0;
  }</span></code></pre></div></div><div class="code-editor__action">
            <a href="https://www.programiz.com/cpp-programming/online-compiler/?ref=7bfd238e" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
              Run Code >>
            </a>
          </div></div>
  
  <p>When you encounter an error in your program, you can use comments to temporarily stop that part of the code from running. This can help you figure out what's wrong without removing the code. For example;</p>
  
  <div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
  <span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
     <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"some code"</span>;
  <div class="line-highlight">   <span class="hljs-comment">// cout &lt;&lt; ''error code;</span></div>
     <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"some other code"</span>;
  
     <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
  }</code></pre></div></div><div class="code-editor__action">
            <a href="https://www.programiz.com/cpp-programming/online-compiler/?ref=e96c5c89" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
              Run Code >>
            </a>
          </div></div>
  
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
  
  <p>In most cases, always use comments to explain 'why' rather than 'how' and you are good to go. </p>
  
  </div>
  
  
    </div>
</section>
                
<!-- second menu sections -->
<section id="second1">
    <h1>C++ Keywords and Identifiers</h1>
    <div class="content">
        <h2 id="keywords">C++ Keywords</h2>
  
  <p>Keywords are <strong>predefined</strong> words that have special meanings to the compiler. For example,</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> money;</code></pre>
  
  <p>Here, <code>int</code> is a keyword that indicates <var>money</var> is a variable of type integer.</p>
  
  <p>Here is a list of all C++ keywords. (as of C++17)</p>
  
  <div class="table-responsive"><table border="0">
      <tbody>
          <tr>
              <td><code>alignas</code></td>
              <td><code>decltype</code></td>
              <td><code>namespace</code></td>
              <td><code>struct</code></td>
          </tr>
          <tr>
              <td><code>alignof</code></td>
              <td><code>default</code></td>
              <td><code>new</code></td>
              <td><code>switch</code></td>
          </tr>
          <tr>
              <td><code>and</code></td>
              <td><code>delete</code></td>
              <td><code>noexcept</code></td>
              <td><code>template</code></td>
          </tr>
          <tr>
              <td><code>and_eq</code></td>
              <td><code>do</code></td>
              <td><code>not</code></td>
              <td><code>this</code></td>
          </tr>
          <tr>
              <td><code>asm</code></td>
              <td><code>double</code></td>
              <td><code>not_eq</code></td>
              <td><code>thread_local</code></td>
          </tr>
          <tr>
              <td><code>auto</code></td>
              <td><code>dynamic_cast</code></td>
              <td><code>nullptr</code></td>
              <td><code>throw</code></td>
          </tr>
          <tr>
              <td><code>bitand</code></td>
              <td><code>else</code></td>
              <td><code>operator</code></td>
              <td><code>true</code></td>
          </tr>
          <tr>
              <td><code>bitor</code></td>
              <td><code>enum</code></td>
              <td><code>or</code></td>
              <td><code>try</code></td>
          </tr>
          <tr>
              <td><code>bool</code></td>
              <td><code>explicit</code></td>
              <td><code>or_eq</code></td>
              <td><code>typedef</code></td>
          </tr>
          <tr>
              <td><code>break</code></td>
              <td><code>export</code></td>
              <td><code>private</code></td>
              <td><code>typeid</code></td>
          </tr>
          <tr>
              <td><code>case</code></td>
              <td><code>extern</code></td>
              <td><code>protected</code></td>
              <td><code>typename</code></td>
          </tr>
          <tr>
              <td><code>catch</code></td>
              <td><code>false</code></td>
              <td><code>public</code></td>
              <td><code>union</code></td>
          </tr>
          <tr>
              <td><code>char</code></td>
              <td><code>float</code></td>
              <td><code>register</code></td>
              <td><code>unsigned</code></td>
          </tr>
          <tr>
              <td><code>char16_t</code></td>
              <td><code>for</code></td>
              <td><code>reinterpret_cast</code></td>
              <td><code>using</code></td>
          </tr>
          <tr>
              <td><code>char32_t</code></td>
              <td><code>friend</code></td>
              <td><code>return</code></td>
              <td><code>virtual</code></td>
          </tr>
          <tr>
              <td><code>class</code></td>
              <td><code>goto</code></td>
              <td><code>short</code></td>
              <td><code>void</code></td>
          </tr>
          <tr>
              <td><code>compl</code></td>
              <td><code>if</code></td>
              <td><code>signed</code></td>
              <td><code>volatile</code></td>
          </tr>
          <tr>
              <td><code>const</code></td>
              <td><code>inline</code></td>
              <td><code>sizeof</code></td>
              <td><code>wchar_t</code></td>
          </tr>
          <tr>
              <td><code>constexpr</code></td>
              <td><code>int</code></td>
              <td><code>static</code></td>
              <td><code>while</code></td>
          </tr>
          <tr>
              <td><code>const_cast</code></td>
              <td><code>long</code></td>
              <td><code>static_assert</code></td>
              <td><code>xor</code></td>
          </tr>
          <tr>
              <td><code>continue</code></td>
              <td><code>mutable</code></td>
              <td><code>static_cast</code></td>
              <td><code>xor_eq</code></td>
          </tr>
      </tbody>
  </table></div>
  
  <p class="note-tip"><strong>Note:</strong> As C++ is a case sensitive language, all keywords must be written in lowercase.</p>
  
  <hr>
  <h2 id="identifiers">C++ Identifiers</h2>
  
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
      </div><div class="clearfix"></div><p>Identifiers are the unique names given to variables, classes, functions, or other entities by the programmer. For example,</p>
  
  <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> money;
  <span class="hljs-keyword">double</span> accountBalance;</code></pre>
  
  <p>Here, <var>money</var> and <var>accountBalance</var> are identifiers.</p>
  
  <hr>
  <h3 id="identifier-rules">Rules for naming identifiers</h3>
  
  <ul>
      <li>Identifiers can be composed of letters, digits, and the underscore character.</li>
      <li>It has no limit on name length.</li>
      <li>It must begin with either a letter or an underscore.</li>
      <li>It is case-sensitive.</li>
      <li>We cannot use keywords as identifiers.</li>
  </ul>
  
  <p>We can choose any name as an identifier if we follow the above rules. However, we should give meaningful names to the identifier that makes sense.</p>
  
  <hr>
  <h3>Examples of good and bad identifiers</h3>
  
  <div class="table-responsive"><table border="0">
      <tbody>
          <tr>
              <th>Invalid Identifier</th>
              <th>Bad Identifier</th>
              <th>Good Identifier</th>
          </tr>
          <tr>
              <td><var>Total points</var></td>
              <td><var>T_points</var></td>
              <td><var>totalPoint</var></td>
          </tr>
          <tr>
              <td><var>1list</var></td>
              <td><var>list_1</var></td>
              <td><var>list1</var></td>
          </tr>
          <tr>
              <td><var>float</var></td>
              <td><var>n_float</var></td>
              <td><var>floatNumber</var></td>
          </tr>
      </tbody>
  </table></div>  </div>
</section>
<section id="second2">
<h1>C++ Variables, Literals and Constants</h1>
<div class="content">
    <p>In the previous tutorial you learnt about <a href="/cpp-programming/comments">C++ comments</a>. Now, let's learn about variables, constants and literals in C++.</p>

<h2 id="variables">C++ Variables</h2>

<p>In programming, a variable is a container (storage area) to hold data.</p>

<p>To indicate the storage area, each variable should be given a unique name (identifier). For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> age = <span class="hljs-number">14</span>;</code></pre>

<p>Here, <var>age</var> is a variable of the <code>int</code> data type, and we have assigned an integer value  <code>14</code> to it.</p>

<p>The value of a variable can be changed, hence the name <strong>variable</strong>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> age = <span class="hljs-number">14</span>;   <span class="hljs-comment">// age is 14</span>
age = <span class="hljs-number">17</span>;       <span class="hljs-comment">// age is 17</span></code></pre>

<p>Visit this page to learn more about <a href="/cpp-programming/data-types">different types of data a variable can store</a>.</p>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Rules for naming a variable</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion">

<ol>
  <li>A variable name can only have alphabets, numbers, and the underscore <code>_</code>.</li>
  <li>A variable name cannot begin with a number.</li>
  <li>It is a preferred practice to begin variable names with a lowercase character. For example, <var>name</var> is preferable to <var>Name</var>.</li>
  <li>A variable name cannot be a <a href="/cpp-programming/keywords-identifiers">keyword</a>. For example, <code>int</code> is a keyword that is used to denote integers.</li>
  <li>A variable name can start with an underscore. However, it's not considered a good practice.</li>
</ol>

<p class="note-tip"><strong>Note:</strong> We should try to give meaningful names to variables. For example, <var>first_name</var> is a better variable name than <var>fn</var>.

</p></div></div></div></div></div></div></div></div>

<hr>
<h2 id="constants">C++ Constants</h2>

<p>In C++, we can create variables whose value cannot be changed. For that, we use the <code>const</code> keyword. Here's an example:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> LIGHT_SPEED = <span class="hljs-number">299792458</span>;
LIGHT_SPEED = <span class="hljs-number">2500</span> <span class="hljs-comment">// Error! LIGHT_SPEED is a constant.</span></code></pre>

<p>Here, we have used the keyword <code>const</code> to declare a constant named <code>LIGHT_SPEED</code>. If we try to change the value of <code>LIGHT_SPEED</code>, we will get an error.</p>

<p>A constant can also be created using the <code>#define</code> preprocessor directive. We will learn about it in detail in the <a href="/cpp-programming/preprocessor-macros">C++ Macros tutorial</a>. </p>

<hr>
<h2 id="literals">C++ Literals</h2>

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
  </div><div class="clearfix"></div><p>Literals are data used for representing fixed values. They can be used directly in the code. For example: <code>1</code>, <code>2.5</code>, <code>'c'</code> etc.</p>

<p>Here, <code>1</code>, <code>2.5</code> and <code>'c'</code> are literals. Why? You cannot assign different values to these terms.</p>

<hr>
<h3 id="integers">1. Integers</h3>

<p>An integer is a numeric literal(associated with numbers) without any fractional or exponential part. There are three types of integer literals in C++ programming:</p>

<ul>
  <li>decimal (base 10)</li>
  <li>octal (base 8)</li>
  <li>hexadecimal (base 16)</li>
</ul>

<p>For example:</p>

<p><var>Decimal: 0, -9, 22 etc</var></p>

<p><var>Octal: 021, 077, 033 etc</var></p>

<p><var>Hexadecimal: 0x7f, 0x2a, 0x521 etc</var></p>

<p>In C++ programming, octal starts with a <code>0,</code> and hexadecimal starts with a <code>0x</code>.</p>

<hr>
<h3 id="floats">2. Floating-point Literals</h3>

<p>A floating-point literal is a numeric literal that has either a fractional form or an exponent form. For example:</p>

<p><code>-2.0</code></p>

<p><code>0.0000234</code></p>

<p><code>-0.22E-5</code></p>

<p class="note-tip"><strong>Note</strong>: E-5 = 10-5</p>

<hr>
<h3 id="characters">3. Characters</h3>

<p>A character literal is created by enclosing a single character inside single quotation marks. For example: <var>'a'</var>, <var>'m'</var>, <var>'F'</var>, <var>'2'</var>, <var>'}'</var> etc.</p>

<hr>
<h3 id="string">4. String Literals</h3>

<p>A string literal is a sequence of characters enclosed in double-quote marks. For example:</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<td><code>"good"</code></td>
<td>string constant</td>
</tr>
<tr>
<td><code>""</code></td>
<td>null string constant</td>
</tr>
<tr>
<td><code>" "</code></td>
<td>string constant of six white space</td>
</tr>
<tr>
<td><code>"x"</code></td>
<td>string constant having a single character</td>
</tr>
<tr>
<td><code>"Earth is round\n"</code></td>
<td>prints string with a newline</td>
</tr>
</tbody></table>
</div>

<p>We will learn about strings in detail in the <a href="/cpp-programming/strings">C++ string tutorial</a>.</p>

</div>



</div>
</section>
<section id="second3">
<h1>C++ Data Types</h1>
<div class="content">
    <p>In C++, data types are declarations for variables. This determines the type and size of data associated with variables. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> age = <span class="hljs-number">13</span>;</code></pre>

<p>Here, <var>age</var> is a <a href="/cpp-programming/variables-literals">variable</a> of type <code>int</code>. Meaning, the variable can only store integers of either 2 or 4 bytes.</p>

<hr>
<h2 id="fundamental-types">C++ Fundamental Data Types</h2>

<p>The table below shows the fundamental data types, their meaning, and their sizes (in bytes):</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Data Type</th>
<th>Meaning</th>
<th>Size (in Bytes)</th>
</tr>
<tr>
<td><code>int</code></td>
<td>Integer</td>
<td>2 or 4</td>
</tr>
<tr>
<td><code>float</code></td>
<td>Floating-point</td>
<td>4</td>
</tr>
<tr>
<td><code>double</code></td>
<td>Double Floating-point</td>
<td>8</td>
</tr>
<tr>
<td><code>char</code></td>
<td>Character</td>
<td>1</td>
</tr>
<tr>
<td><code>wchar_t</code></td>
<td>Wide Character</td>
<td>2</td>
</tr>
<tr>
<td><code>bool</code></td>
<td>Boolean</td>
<td>1</td>
</tr>
<tr>
<td><code>void</code></td>
<td>Empty</td>
<td>0</td>
</tr>
</tbody></table>
</div>

<p>Now, let us discuss these fundamental data types in more detail.</p>

<hr>
<h3 id="int">1. C++ int</h3>

<ul>
  <li>The <code>int</code> keyword is used to indicate integers.</li>
  <li>Its size is usually 4 bytes. Meaning, it can store values from <strong>-2147483648 to 2147483647</strong>.</li>
  <li>For example,</li>
</ul>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> salary = <span class="hljs-number">85000</span>;</code></pre>

<hr>
<h3 id="float-double">2. C++ float and double</h3>

<ul>
  <li><code>float</code> and <code>double</code> are used to store floating-point numbers (decimals and exponentials).</li>
  <li>The size of <code>float</code> is 4 bytes and the size of <code>double</code> is 8 bytes. Hence, <code>double</code> has two times the precision of <code>float</code>. To learn more, visit C++ float and double.</li>
  <li>For example,</li>
</ul>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">float</span> area = <span class="hljs-number">64.74</span>;
<span class="hljs-keyword">double</span> volume = <span class="hljs-number">134.64534</span>;</code></pre>

<p>As mentioned above, these two data types are also used for exponentials. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">double</span> distance = <span class="hljs-number">45E12</span>    <span class="hljs-comment">// 45E12 is equal to 45*10^12</span></code></pre>

<p class="note-tip"><strong>Note</strong>: To learn more about float and double visit <a href="/cpp-programming/float-double">C++ float and double</a>.</p>

<hr>

<h3 id="character">3. C++ char</h3>

<ul>
  <li>Keyword <code>char</code> is used for characters.</li>
  <li>Its size is 1 byte.</li>
  <li>Characters in C++ are enclosed inside single quotes <code>' '</code>.</li>
  <li>For example,</li>
</ul>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">char</span> test = <span class="hljs-string">'h'</span>;</code></pre>

<p><strong>Note:</strong> In C++, an integer value is stored in a <code>char</code> variable rather than the character itself. To learn more, visit <a href="/cpp-programming/char-type">C++ characters</a>.</p>

<hr>
<h3 id="wide-character">4. C++ wchar_t</h3>

<ul>
  <li>Wide character <code>wchar_t</code> is similar to the <code>char</code> data type, except its size is 2 bytes instead of 1.</li>
  <li>It is used to represent characters that require more memory to represent them than a single <code>char</code>.</li>
  <li>For example,</li>
</ul>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">wchar_t</span> test = <span class="hljs-string">L'ם'</span>  <span class="hljs-comment">// storing Hebrew character;</span></code></pre>

<p>Notice the letter L before the quotation marks.</p>

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
  </div><div class="clearfix"></div><p><strong>Note:</strong> There are also two other fixed-size character types <code>char16_t</code> and <code>char32_t</code> introduced in C++11.</p>

<hr>
<h3 id="boolean">5. C++ bool</h3>

<ul>
  <li>The <code>bool</code> data type has one of two possible values: <code>true</code> or <code>false</code>.</li>
  <li>Booleans are used in conditional statements and loops (which we will learn in later chapters).</li>
  <li>For example,</li>
</ul>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">bool</span> cond = <span class="hljs-literal">false</span>;</code></pre>

<hr>
<h3 id="void">6. C++ void</h3>

<ul>
  <li>The <code>void</code> keyword indicates an absence of data. It means "nothing" or "no value".</li>
  <li>We will use void when we learn about functions and pointers.</li>
</ul>

<p class="note-tip"><strong>Note:</strong> We cannot declare variables of the <code>void</code> type.</p>

<hr>
<h2 id="type-modifiers">C++ Type Modifiers</h2>

<p>We can further modify some of the fundamental data types by using <a href="/cpp-programming/type-modifiers">type modifiers</a>. There are 4 type modifiers in C++. They are:</p>

<ol>
  <li><code>signed</code></li>
  <li><code>unsigned</code></li>
  <li><code>short</code></li>
  <li><code>long</code></li>
</ol>

<p>We can modify the following data types with the above modifiers:</p>

<ul>
  <li><code>int</code></li>
  <li><code>double</code></li>
  <li><code>char</code></li>
</ul>

<hr>
<h3>C++ Modified Data Types List</h3>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Data Type</th>
<th>Size (in Bytes)</th>
<th>Meaning</th>
</tr>
<tr>
<td><code>signed int</code></td>
<td>4</td>
<td>used for integers (equivalent to <code>int</code>)</td>
</tr>
<tr>
<td><code>unsigned int</code></td>
<td>4</td>
<td>can only store positive integers</td>
</tr>
<tr>
<td><code>short</code></td>
<td>2</td>
<td>used for small integers (range <strong>-32768 to 32767</strong>)</td>
</tr>
<tr>
<td><code>unsigned short</code></td>
<td>2</td>
<td>used for small positive integers (range <strong>0 to 65,535</strong>)</td>
</tr>
<tr>
<td><code>long</code></td>
<td>at least 4</td>
<td>used for large integers (equivalent to <code>long int</code>)</td>
</tr>
<tr>
<td><code>unsigned long</code></td>
<td>4</td>
<td>used for large positive integers or 0 (equivalent to <code>unsigned</code> <code>long int</code>)</td>
</tr>
<tr>
<td><code>long long</code></td>
<td>8</td>
<td>used for very large integers (equivalent to <code>long long int</code>).</td>
</tr>
<tr>
<td><code>unsigned long long</code></td>
<td>8</td>
<td>used for very large positive integers or 0 (equivalent to <code>unsigned long long int</code>)</td>
</tr>
<tr>
<td><code>long double</code></td>
<td>12</td>
<td>used for large floating-point numbers</td>
</tr>
<tr>
<td><code>signed char</code></td>
<td>1</td>
<td>used for characters (guaranteed range <strong>-127 to 127</strong>)</td>
</tr>
<tr>
<td><code>unsigned char</code></td>
<td>1</td>
<td>used for characters (range <strong>0 to 255</strong>)</td>
</tr>
</tbody></table>
</div>

<p>Let's see a few examples.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">long</span> b = <span class="hljs-number">4523232</span>;
<span class="hljs-keyword">long</span> <span class="hljs-keyword">int</span> c = <span class="hljs-number">2345342</span>;
<span class="hljs-keyword">long</span> <span class="hljs-keyword">double</span> d = <span class="hljs-number">233434.56343</span>;
short d = <span class="hljs-number">3434233</span>; <span class="hljs-comment">// Error! out of range</span>
<span class="hljs-keyword">unsigned</span> <span class="hljs-keyword">int</span> a = <span class="hljs-number">-5</span>;    <span class="hljs-comment">// Error! can only store positive numbers or 0</span></code></pre>

<hr>
<h2 id="derived-types">Derived Data Types</h2>

<p>Data types that are derived from fundamental data types are derived types. For example: arrays, pointers, function types, structures, etc.</p>

<p>We will learn about these derived data types in later tutorials.</p>

</div>
</section>
<section id="second4">
<h1>C++ Type Modifiers</h1>
<div class="content">
    <p id="introduction">In C++ programming, <strong>type modifiers</strong> are used to change the meaning of the fundamental <a href="/cpp-programming/data-types">data types</a>.</p>

<p>There are four type modifiers in C++:</p>

<ul>
  <li><code>short</code></li>
  <li><code>long</code></li>
  <li><code>signed</code></li>
  <li><code>unsigned</code></li>
</ul>

<p>Here's a brief summary:</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Data Type</th>
<th>Size (in Bytes)</th>
<th>Meaning</th>
</tr>
<tr>
<td><code>signed int</code></td>
<td>4</td>
<td>Used for integers (equivalent to <code>int</code>).</td>
</tr>
<tr>
<td><code>unsigned int</code></td>
<td>4</td>
<td>Can only store non-negative integers.</td>
</tr>
<tr>
<td><code>short</code></td>
<td>2</td>
<td>Used for small integers.<br>Range: <strong>-32768</strong> to <strong>32767</strong></td>
</tr>
<tr>
<td><code>long</code></td>
<td>at least 4</td>
<td>Used for large integers.<br>Equivalent to <code>long int</code>.</td>
</tr>
<tr>
<td><code>unsigned long</code></td>
<td>4</td>
<td>Used for large positive integers or <strong>0</strong>.<br>Equivalent to <code>unsigned long int</code>.</td>
</tr>
<tr>
<td><code>long long</code></td>
<td>8</td>
<td>Used for very large integers.<br>Equivalent to <code>long long int</code>.</td>
</tr>
<tr>
<td><code>unsigned long long</code></td>
<td>8</td>
<td>Used for very large positive integers or <strong>0</strong>.<br>Equivalent to <code>unsigned long long int</code>.</td>
</tr>
<tr>
<td><code>long double</code></td>
<td>8</td>
<td>Used for large floating-point numbers.</td>
</tr>
<tr>
<td><code>signed char</code></td>
<td>1</td>
<td>Used for characters.<br>Guaranteed range <strong>-127</strong> to <strong>127</strong>.</td>
</tr>
<tr>
<td><code>unsigned char</code></td>
<td>1</td>
<td>Used for characters.<br>Range <strong>0</strong> to <strong>255</strong>.</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="short">short type Modifier</h2>

<p>We can use <code>short</code> for <strong>small integers</strong> (in the range <strong>−32,767</strong> to <strong>32,767</strong>). For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// small integer</span>
short a = <span class="hljs-number">12345</span>;</code></pre>

<p>Here, <var>a</var> is a <code>short</code> integer variable.</p>

<p class="note-tip"><strong>Note:</strong> <code>short</code> is equivalent to <code>short int</code>.</p>

<hr>

<h2 id="long">long Type Modifier</h2>

<p>If we need to store a large integer (in the range <strong>-2147483647</strong> to <strong>2147483647</strong>), we can use the type specifier <code>long</code>. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// large integer </span>
<span class="hljs-keyword">long</span> b = <span class="hljs-number">123456</span>;</code></pre>

<p class="note-tip"><strong>Note:</strong> <code>long</code> is equivalent to <code>long int</code>.</p>

<p>The long type modifier can also be used with <code>double</code> variables.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// large floating-point number </span>
<span class="hljs-keyword">long</span> <span class="hljs-keyword">double</span> c = <span class="hljs-number">0.333333333333333333L</span>;</code></pre>

<p class="note-tip"><strong>Note:</strong> To indicate <code>long double</code>, we use the <code>L</code> suffix. If we do not use the suffix <code>L</code>, it's a <code>double</code> value that is converted to <code>long double</code> (which may result in data loss).</p>

<hr>
<h2 id="long-long">long long</h2>

<p><code>long</code> can be repeated twice to create the <code>long long</code> type. This type is used for even larger numbers than <code>long</code>. <code>long long</code> type modifier can only be used with <code>int</code>.</p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// long long int</span>
<span class="hljs-keyword">long</span> <span class="hljs-keyword">long</span> num = <span class="hljs-number">12345678</span>;</code></pre>

<hr>

<h2 id="signed-unsigned">signed and unsigned Modifiers</h2>

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
  </div><div class="clearfix"></div><p>Signed variables can hold both <strong>positive and negative</strong> integers including <strong>zero</strong>. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// positive valued integer </span>
<span class="hljs-keyword">signed</span> <span class="hljs-keyword">int</span> x = <span class="hljs-number">23</span>;

<span class="hljs-comment">// negative valued integer</span>
<span class="hljs-keyword">signed</span> <span class="hljs-keyword">int</span> y = <span class="hljs-number">-13</span>;

<span class="hljs-comment">// zero-valued integer</span>
<span class="hljs-keyword">signed</span> <span class="hljs-keyword">int</span> z = <span class="hljs-number">0</span>;</code></pre>

<p>Here,</p>

<ul>
  <li><var>x</var> holds a <strong>positive-valued</strong> integer</li>
  <li><var>y</var> holds a <strong>negative-valued</strong> integer</li>
  <li><var>z</var> holds a <strong>zero-valued</strong> integer</li>
</ul>

<div class="note-tip">
<p><strong>Note:</strong></p>

<ul>
  <li>By default, integers are <code>signed</code>. Hence instead of <code>signed int</code>, we can directly use <code>int</code>.</li>
  <li><code>signed</code> and <code>unsigned</code> can only be used with <code>int</code> and <code>char</code> types.</li>
</ul>

</div>
<p>The <strong>unsigned variables</strong> can hold only non-negative integer values. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// positive valued integer</span>
<span class="hljs-keyword">unsigned</span> <span class="hljs-keyword">int</span> x = <span class="hljs-number">2</span>;
<span class="hljs-keyword">unsigned</span> <span class="hljs-keyword">int</span> y = <span class="hljs-number">0</span>;</code></pre>

<p>Here,</p>

<ul>
  <li><var>x</var> holds a positive-valued integer</li>
  <li><var>y</var> holds zero</li>
</ul>

<p>In general, an <code>int</code> variable can store a range of values from <strong>-2,147,483,648</strong> to <strong>2,147,483,647</strong>. </p>

<p>Whereas an <code>unsigned int</code> variable can store a range of values from <strong>0</strong> to <strong>4,294,967,295</strong>.</p>

<hr>
<h3 id="char">signed, unsigned and plain char</h3>

<p>C++ has 3 different <code>char</code> types:</p>

<ul>
  <li><code>char</code></li>
  <li><code>signed char</code></li>
  <li><code>unsigned char</code></li>
</ul>

<p>In practice, there are basically only 2 types:</p>

<ul>
  <li><code>signed char</code> (guaranteed range: <strong>-127</strong> to <strong>127</strong>)</li>
  <li><code>unsigned char</code> (guaranteed range: <strong>0</strong> to <strong>256</strong>)</li>
</ul>

<p>This is because different compilers treat <code>char</code> as either <code>signed char</code> or <code>unsigned char</code> according to their own preference.</p>

<div class="note-tip">
<p><strong>Notes:</strong> </p>

<ul>
  <li>In in standard C++, <code>char</code> is not the same as <code>signed char</code> or <code>unsigned char</code>. The compilers ignore this for practicality.</li>
  <li>When we only use <code>char</code> instead of its <code>signed</code> or <code>unsigned</code> variants, this type is known as <strong>plain char</strong>.</li>
</ul>

</div>
<p>As you might have guessed, <code>signed char</code> can store both positive and negative integers, while <code>unsigned char</code> can only store positive integers (including <strong>0</strong>).</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// plain char</span>
<span class="hljs-keyword">char</span> plain_1 = <span class="hljs-number">65</span>;
<span class="hljs-keyword">char</span> plain_2 = <span class="hljs-number">0</span>;

<span class="hljs-comment">// plain char with negative value</span>
<span class="hljs-comment">// might cause problems with some compilers</span>
<span class="hljs-keyword">char</span> plain_3 = <span class="hljs-number">-56</span>;

<span class="hljs-comment">// signed char</span>
<span class="hljs-keyword">signed</span> <span class="hljs-keyword">char</span>  sin_1 = <span class="hljs-number">12</span>;
<span class="hljs-keyword">signed</span> <span class="hljs-keyword">char</span>  sin_2 = <span class="hljs-number">0</span>;
<span class="hljs-keyword">signed</span> <span class="hljs-keyword">char</span>  sin_3 = <span class="hljs-number">-12</span>;

<span class="hljs-comment">// unsigned char</span>
<span class="hljs-keyword">unsigned</span> <span class="hljs-keyword">char</span>  unsin_1 = <span class="hljs-number">85</span>;
<span class="hljs-keyword">unsigned</span> <span class="hljs-keyword">char</span>  unsin_2 = <span class="hljs-number">0</span>;</code></pre>

<p>Here,</p>

<ul>
  <li><var>plain_1</var> holds a positive-valued integer</li>
  <li><var>plain_2</var> holds a zero-valued integer</li>
  <li><var>sin_1</var> holds a positive-valued integer</li>
  <li><var>sin_2</var> holds a zero-valued integer</li>
  <li><var>sin_3</var> holds a negative-valued integer</li>
  <li><var>unsin_1</var> holds a positive-valued integer</li>
  <li><var>unsin_2</var> holds a zero-valued integer</li>
</ul>

<p class="note-tip"><strong>Note:</strong> It is preferable not to use <strong>plain char</strong> to perform numerical manipulations; <code>signed char</code> or <code>unsigned char</code> should be used for that instead. <strong>Plain char</strong> should only be used to store character values.</p>  </div>
</section>
<section id="second5">
<h1>C++ Constants</h1>
<div class="content">
    <p id="introduction">The <code>const</code> keyword (which stands for <strong>constant</strong>) is used to specify that the value of a variable cannot be changed anywhere in the program, either intentionally or accidentally. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// makes PI a constant</span>
<span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> PI = <span class="hljs-number">3.14</span>;</code></pre>

<div class="note-tip">
<p><strong>Note:</strong> The standard naming convention for constants is that they must all be in uppercase letters. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> MAGIC_NUMBER = <span class="hljs-number">42</span>;</code></pre>

</div>
<hr>
<h2>Create const Variables</h2>

<p>A <code>const</code> variable must be initialized during declaration and cannot be changed later.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// invalid since PI is not initialized</span>
<span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> PI;</code></pre>

<p>Here, we get an error because the <code>const</code> variable <var>PI</var> has not been initialized.</p>

<p>Instead, we should create <code>const</code> variables by initializing them in the following way:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// initialize const with a value</span>
<span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> PI = <span class="hljs-number">3.14</span>;</code></pre>

<hr>
<h2 id="example1">Example 1: C++ const</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  
<div class="line-highlight">    <span class="hljs-comment">// initialize a const PI</span>
  <span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> PI = <span class="hljs-number">3.14</span>;</div>
  
  <span class="hljs-keyword">int</span> radius = <span class="hljs-number">4</span>;

<div class="line-highlight">    <span class="hljs-comment">// use the const in a calculation</span>
  <span class="hljs-keyword">double</span> area = PI * radius * radius;</div>
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of circle with radius "</span> &lt;&lt; radius &lt;&lt; <span class="hljs-string">" is: "</span> &lt;&lt; area;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Area of circle with radius 4 is: 50.24</samp></pre>

<p>In the above example, we have initialized a constant variable <var>PI</var>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> PI = <span class="hljs-number">3.14</span>;</code></pre>

<p>Then, we have used this constant variable to calculate the area of a circle:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">double</span> area = PI * radius * radius;</code></pre>

<hr>
<h2 id="const-reference">Const References</h2>

<p>We can also make references using the <code>const</code> keyword. There are different types of such references with different behaviors. These are</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Reference Type</th>
<th>Description</th>
</tr>
<tr>
<td>Constant reference to a constant variable</td>
<td>Both the variable and the reference are constant.</td>
</tr>
<tr>
<td>Constant reference to a non-constant variable</td>
<td>The variable is non-constant but the reference is constant.</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="reference-variable">Const Reference to a Const Variable</h2>

<p>In C++, we can create a <code>const</code> reference to a <code>const</code> variable using a reference variable. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<div class="line-highlight">    <span class="hljs-comment">// initialize a constant PI  </span>
  <span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> PI = <span class="hljs-number">3.14</span>;

  <span class="hljs-comment">// create a read-only reference to PI</span>
  <span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> &amp;PI_REF = PI;</div>

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"PI: "</span> &lt;&lt; PI;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nPI_REF: "</span> &lt;&lt; PI_REF;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>PI: 3.14
PI_REF: 3.14</samp></pre>

<p>In the above example, we have created a constant reference to a constant or a constant reference.</p>

<p>So, we'll get an error if we try to modify the value of <var>PI_REF</var>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// error: assignment of read-only reference 'PI_REF'</span>
PI_REF = <span class="hljs-number">90</span>;</code></pre>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">Frequently Asked Question

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Is it possible to create a constant reference to a non-constant variable?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>Yes, a constant reference can refer to a non-constant variable. However, we cannot modify the value using that reference. For example</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-keyword">int</span> num = <span class="hljs-number">10</span>;

<div class="line-highlight">    <span class="hljs-comment">// constant reference to a non constant variable</span>
  <span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> &amp;NUM_REF = num;</div>
  <span class="hljs-built_in">cout</span> &lt;&lt; NUM_REF;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>10</samp></pre>

<p>In the above example, we have created a <strong>constant reference</strong> to a <strong>non-constant variable</strong>.</p>

<p>As a result, we cannot modify the value of <var>num</var> using the reference variable <var>NUM_REF</var>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// error: assignment of read-only reference 'NUM_REF'</span>
NUM_REF = <span class="hljs-number">67</span>;</code></pre>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="pass-by-const">Passing as a Constant Reference</h2>

<p>We can use a constant parameter to ensure that the passed argument is not modified by the function body.</p>

<p>For instance, we can ensure that the vector we pass is not modified by using the following code:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">sum</span><span class="hljs-params">(<span class="hljs-keyword">const</span> <span class="hljs-built_in">vector</span>&lt;<span class="hljs-keyword">int</span>&gt; nums)</span> </span>{
  <span class="hljs-comment">// function body</span>
}</code></pre>

<p>Although the <code>const</code> keyword in the above code guarantees that <var>nums</var> cannot be modified, it creates a local copy of <var>nums</var>, which costs memory.</p>

<p>A better way to handle this is passing as a <strong>constant reference</strong> using the following code:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">sum</span><span class="hljs-params">(<span class="hljs-keyword">const</span> <span class="hljs-built_in">vector</span>&lt;<span class="hljs-keyword">int</span>&gt; &amp;nums)</span> </span>{
  <span class="hljs-comment">// function body</span>
}</code></pre>

<p>Here, <var>&amp;nums</var> is a reference, and the <code>const</code> keyword signifies that it is a constant.</p>

<hr>
<h3>Example 3: Passing as a Constant Reference</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;vector&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<div class="line-highlight"><span class="hljs-comment">// take a const reference as argument</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">sum</span><span class="hljs-params">(<span class="hljs-keyword">const</span> <span class="hljs-built_in">vector</span>&lt;<span class="hljs-keyword">int</span>&gt; &amp;nums)</span> </span>{</div>
  <span class="hljs-keyword">int</span> total = <span class="hljs-number">0</span>;

  <span class="hljs-keyword">for</span>(<span class="hljs-keyword">auto</span> num: nums){
      total += num;
  }

  <span class="hljs-keyword">return</span> total;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">vector</span>&lt;<span class="hljs-keyword">int</span>&gt; nums = {<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>, <span class="hljs-number">4</span>, <span class="hljs-number">5</span>};

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Sum: "</span> &lt;&lt; sum(nums);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Sum: 15</samp></pre>

<p>In the above example, we have passed the <var>nums</var> vector as a constant reference:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">sum</span><span class="hljs-params">(<span class="hljs-keyword">const</span> <span class="hljs-built_in">vector</span>&lt;<span class="hljs-keyword">int</span>&gt; &amp;nums)</span> </span>{
  <span class="hljs-comment">// code</span>
}</code></pre>

<p>Here, instead of creating a local copy of the <var>nums</var> vector, we are passing a reference that cannot be modified. This is faster as well as more space efficient.</p>

<hr>
<h2 id="const-and-pointers">Const and Pointers</h2>

<p>Like with references, we can also make different types of pointers using the <code>const</code> keyword. These are:</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Pointer Type</th>
<th>Description</th>
</tr>
<tr>
<td>Pointers to a Const</td>
<td>The pointer is a non-constant but the value being pointed to is a constant.</td>
</tr>
<tr>
<td>Const Pointer</td>
<td>The pointer is a constant but the value being pointed is a non-constant.</td>
</tr>
<tr>
<td> Const Pointer to a Const</td>
<td>Both the pointer and the value being pointed are constant.</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="pointer-to-const">Pointers to a Const</h2>

<p>A pointer to a const is a <a href="/cpp-programming/pointers">pointer</a> variable that points to a constant variable. These pointers</p>

<ul>
  <li>allow us to change the address the pointer is pointing to,</li>
  <li>don't allow us to change the value stored in those constant variables.</li>
</ul>

<p>For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// initialize a constant TOTAL_MONTHS  </span>
  <span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> TOTAL_MONTHS = <span class="hljs-number">12</span>;

<div class="line-highlight">    <span class="hljs-comment">// MONTHS_PTR is a pointer to an int const</span>
  <span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> *MONTHS_PTR = &amp;TOTAL_MONTHS;</div>

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"TOTAL_MONTHS: "</span> &lt;&lt; TOTAL_MONTHS &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"*MONTHS_PTR: "</span> &lt;&lt; *MONTHS_PTR &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// create another int constant</span>
  <span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> HALF_MONTHS = <span class="hljs-number">6</span>;

<div class="line-highlight">    <span class="hljs-comment">// MONTHS_PTR now points to HALF_MONTHS</span>
  MONTHS_PTR = &amp;HALF_MONTHS;</div>

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"HALF_MONTHS: "</span> &lt;&lt; HALF_MONTHS &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"*MONTHS_PTR: "</span> &lt;&lt; *MONTHS_PTR;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>TOTAL_MONTHS: 12
*MONTHS_PTR: 12

HALF_MONTHS: 6
*MONTHS_PTR: 6</samp></pre>

<p>In the above example, we have created an integer constant <var>TOTAL_MONTHS</var>. Then, we created a pointer to <strong></strong>that constant called <var>MONTHS_PTR</var><strong>.</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// points to const int TOTAL_MONTHS</span>
<span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> *MONTHS_PTR = &amp;TOTAL_MONTHS;</code></pre>

<p>We'll get an error if we try to modify the value at <var>MONTHS_PTR</var>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// error: assignment of read-only location '* TOTAL_MONTHS_PTR'</span>
*TOTAL_MONTHS_PTR = <span class="hljs-number">10</span>;</code></pre>

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
  </div><div class="clearfix"></div><p>This is because the value <var>TOTAL_MONTHS</var> is a constant and cannot be modified.</p>

<p>However, we can change the address pointed by <var>MONTHS_PTR</var> to point to some other variable without any error.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> HALF_MONTHS = <span class="hljs-number">6</span>;
MONTHS_PTR = &amp;HALF_MONTHS;</code></pre>

<hr>
<h2 id="const-pointer">Const Pointer</h2>

<p>A <strong>const pointer</strong> is a <a href="/cpp-programming/pointers">pointer</a> in which we can change the value pointed by the pointer, but cannot change the variable it points to. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  
  <span class="hljs-built_in">string</span> country1 = <span class="hljs-string">"Nepal"</span>;
  <span class="hljs-built_in">string</span> country2 = <span class="hljs-string">"USA"</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Initially, country1: "</span> &lt;&lt; country1 &lt;&lt; <span class="hljs-built_in">endl</span>;

<div class="line-highlight">    <span class="hljs-comment">// PTR1 is a const pointer to country1</span>
  <span class="hljs-built_in">string</span> *<span class="hljs-keyword">const</span> PTR1 = &amp;country1;

  <span class="hljs-comment">// change the value of country1 using PTR1</span>
  *PTR1 = country2</div>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Finally, country1: "</span> &lt;&lt; country1;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Initially, country1: Nepal
Finally, country1: USA</samp></pre>

<p>In the above example, we have created a <strong>const pointer.</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// PTR1 is a const pointer to a string</span>
<span class="hljs-built_in">string</span> *<span class="hljs-keyword">const</span> PTR1 = &amp;country1;</code></pre>

<p>Initially, the value of <var>country1</var> is <code>Nepal</code>. Then, we have modified the value of <var>country1</var> using  <var>PTR1</var>:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// change the value of variable pointed by PTR1</span>
*PTR1 = country2;</code></pre>

<p>So the new value of <var>country1</var> becomes <code>USA</code>.</p>

<p>But we'll get an error if we try changing the variable pointed by <var>PTR1</var> from <var>country1</var> to <var>country2</var>:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// error: assignment of read-only variable 'PTR1'</span>
PTR1 = &amp;country2;</code></pre>

<hr>
<h2 id="const-pointer-const">Const Pointer to a Const</h2>

<p>A <strong>const pointer to a const</strong> is a pointer through which we can neither change the variable it points to nor its value. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  
  <span class="hljs-comment">// create a const variable</span>
  <span class="hljs-keyword">const</span> <span class="hljs-built_in">string</span> COUNTRY1 = <span class="hljs-string">"Nepal"</span>;
  
<div class="line-highlight">    <span class="hljs-comment">// create a const pointer to const</span>
  <span class="hljs-keyword">const</span> <span class="hljs-built_in">string</span> *<span class="hljs-keyword">const</span> PTR = &amp;COUNTRY1;</div>

  <span class="hljs-built_in">cout</span> &lt;&lt; *PTR;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Nepal</samp></pre>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">Frequently Asked Question

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">What are the differences between pointer to const and const pointer?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>A <strong>pointer to const</strong> refers to a pointer that points to a value that should not be changed through the pointer.</p>

<p>On the other hand, a <strong>const pointer</strong> is a pointer that cannot point to a different address after its initialization.<br>
<br>
For example,</p>

<p><strong>1. pointer to const:</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span>* ptr_to_const = &amp;value;

<span class="hljs-comment">// Error: Can't modify the value pointed to</span>
*ptr_to_const = <span class="hljs-number">20</span>; 

<span class="hljs-comment">// OK: The pointer can point to another address</span>
ptr_to_const = &amp;another_value;</code></pre>

<p><strong>2. const pointer:</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span>* <span class="hljs-keyword">const</span> const_ptr = &amp;value;

<span class="hljs-comment">// OK: The value pointed to can be changed</span>
*const_ptr = <span class="hljs-number">30</span>;

<span class="hljs-comment">// Error: Can't change the address the pointer is pointing to</span>
const_ptr = &amp;another_value;</code></pre>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="const-expression">Const Expression</h2>

<p>Constant expressions were introduced in C++ 11. They are expressions whose:</p>

<ul>
  <li>value cannot change,</li>
  <li>and can be evaluated at compile time.</li>
</ul>

<p>The reason we want to use them in C++ is to avoid calculation being done multiple times at runtime.</p>

<p>We use the <code>constexpr</code> keyword to create constant expressions. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// declare a function as constexpr</span>
<span class="hljs-function"><span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> <span class="hljs-title">add_numbers</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> b)</span> </span>{...}

<span class="hljs-comment">// declare a variable as constexpr</span>
<span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> sum = add_numbers(<span class="hljs-number">660</span>, <span class="hljs-number">6</span>);</code></pre>

<p class="note-tip"><strong>Note:</strong> We can't use <code>constexpr</code> variables to call functions that are not declared as <code>constexpr</code>:</p>

<hr>
<h3>Example 4: C++ Const Expression</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<div class="line-highlight"><span class="hljs-comment">// a constexpr function that</span>
<span class="hljs-comment">// returns nth fibonacci number</span>
<span class="hljs-function"><span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> <span class="hljs-title">fib</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span> </span>{

  <span class="hljs-comment">// returns n if n &lt;= 1</span>
  <span class="hljs-comment">// else, recursively calls fib(n - 1) + fib(n - 2)</span>
  <span class="hljs-keyword">return</span> n &lt;= <span class="hljs-number">1</span> ? n: fib(n - <span class="hljs-number">1</span>) + fib(n - <span class="hljs-number">2</span>);   
}</div>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<div class="line-highlight">    <span class="hljs-comment">// two constexpr variables that store</span>
  <span class="hljs-comment">// the return values of constexpr function</span>
  <span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> fibonacci_five = fib(<span class="hljs-number">5</span>);
  <span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> fibonacci_ten = fib(<span class="hljs-number">10</span>);</div>

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"fib(5) : "</span>&lt;&lt; fibonacci_five &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"fib(10) : "</span>&lt;&lt; fibonacci_ten;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>fib(5) : 5
fib(10) : 55</samp></pre>

<p>In the above example, we have created a constant expression (in the form of a function) to evaluate the <strong>nth</strong> fibonacci number.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> <span class="hljs-title">fib</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span> </span>{    
  <span class="hljs-keyword">return</span> n &lt;= <span class="hljs-number">1</span> ? n: fib(n - <span class="hljs-number">1</span>) + fib(n - <span class="hljs-number">2</span>);   
}</code></pre>

<p>Notice that we have added the <code>constexpr</code> keyword before the return type which tells the compiler that the function to be evaluated at compile time.</p>

<p>Then we calculate the <strong>5th</strong> and <strong>10th</strong> fibonacci numbers using two <code>constexpr</code> variables:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> fibonacci_five = fib(<span class="hljs-number">5</span>);
<span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> fibonacci_ten = fib(<span class="hljs-number">10</span>);</code></pre>

<p>Now, notice that we are making the normal function call. The only difference is that the calculation is done at compile time.</p>

<div class="note-tip">
<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// function not declared as constexpr</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">fib</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span> </span>{...}

<span class="hljs-comment">// error: call to non-'constexpr' function 'int fib(int)'</span>
<span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> fibonacci_five = fib(<span class="hljs-number">5</span>);</code></pre>

<p>However, we can use <strong>non-constexpr</strong> variables to call <code>constexpr</code> functions:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">constexpr</span> <span class="hljs-keyword">int</span> <span class="hljs-title">fib</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span> </span>{...}

<span class="hljs-comment">// valid code</span>
<span class="hljs-keyword">int</span> fibonacci_five = fib(<span class="hljs-number">5</span>);</code></pre>

</div>
<hr>
<h2 id="const-member-function">Const Member Functions</h2>

<p>Const member functions ensure that the data members of an object are not changed. We create such functions with the following syntax:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function">return_type <span class="hljs-title">function_name</span><span class="hljs-params">()</span> <span class="hljs-keyword">const</span> </span>{
  <span class="hljs-comment">// function body</span>
}</code></pre>

<p><strong>Properties of Const Member Functions</strong></p>

<ul>
  <li>We cannot change the values of the member variables inside a const member function.</li>
  <li>We can only call const member functions from a <strong>constant object</strong>.</li>
</ul>

<hr>
<h3>Example 5: Const Member Functions</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span>  <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Rectangle</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">int</span> breadth, length;

<span class="hljs-keyword">public</span>:
  Rectangle(<span class="hljs-keyword">int</span> length, <span class="hljs-keyword">int</span> breadth){
      <span class="hljs-keyword">this</span>-&gt;breadth = breadth;
      <span class="hljs-keyword">this</span>-&gt;length = length;
  }

<div class="line-highlight">     <span class="hljs-comment">// constant member function</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">get_area</span><span class="hljs-params">()</span> <span class="hljs-keyword">const</span> </span>{
      <span class="hljs-keyword">return</span> length * breadth;
  }</div>

  <span class="hljs-comment">// non-constant member function</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">get_perimeter</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-keyword">return</span> <span class="hljs-number">2</span> * (length + breadth);
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// create a const Rectangle object</span>
  <span class="hljs-keyword">const</span> Rectangle RECT = Rectangle(<span class="hljs-number">7</span>, <span class="hljs-number">6</span>);

<div class="line-highlight">    <span class="hljs-comment">// call the const member function</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area: "</span> &lt;&lt; RECT.get_area() &lt;&lt; <span class="hljs-built_in">endl</span>;</div>

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Area: 42</samp></pre>

<p>In the above example, we have created a class <code>Rectangle</code> with the following member functions:</p>

<ul>
  <li><code>get_area()</code> - a constant member function</li>
  <li><code>get_perimeter()</code>- a normal member function</li>
</ul>

<p>In <code>main()</code>, we created a <strong>constant object</strong> named <var>RECT</var>:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// create a const Rectangle object</span>
<span class="hljs-keyword">const</span> Rectangle RECT = Rectangle(<span class="hljs-number">7</span>, <span class="hljs-number">6</span>);</code></pre>

<p>Then, we called the <strong>const member function</strong> <code>get_area()</code> using the constant object <var>RECT</var><strong>:</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// code to call const member function</span>
RECT.get_area();</code></pre>

<p><strong>Calling Non-Constant Member Functions</strong></p>

<p>However, we will get an error if we try to call the <strong></strong>non-const member function <code>get_perimeter()</code>:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// error</span>
RECT.get_perimeter();</code></pre>

<p>This is because a constant object cannot call a non-constant member function.</p>

<p>However, a non-constant object can call both constant and non-constant member functions.</p>

<p>The reasoning behind this is simple: we create a constant object so that the data members are not modified. But non-constant member functions have the capability to modify the data members.</p>

<p>Thus, the purpose of a constant object is at odds with the purpose of a non-constant member function, which is why we can't perform the function call.</p>

</div>
</section>
<section id="second6">
<h1>C++ Basic Input/Output</h1>
<div class="content">
    <h2 id="output">C++ Output</h2>

<p>In C++, <a href="/cpp-programming/library-function/iostream/cout">cout</a> sends formatted output to standard output devices, such as the screen. We use the <code>cout</code> object along with the <code>&lt;&lt;</code> operator for displaying output.</p>

<hr>
<h3 id="output-string">Example 1: String Output</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// prints the string enclosed in double quotes</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"This is C++ Programming"</span>;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>This is C++ Programming</samp></pre>

<p><strong>How does this program work?</strong></p>

<ul>
  <li>We first include the <a href="/cpp-programming/library-function/iostream">iostream</a> header file that allows us to display output.</li>
  <li>The <code>cout</code> object is defined inside the <code>std</code> namespace. To use the <code>std</code> namespace, we used the <code>using namespace std;</code> statement.</li>
  <li>Every C++ program starts with the <code>main()</code> function. The code execution begins from the start of the <code>main()</code> function.</li>
  <li><code>cout</code> is an object that prints the <a href="/cpp-programming/strings">string</a> inside quotation marks <code>" "</code>. It is followed by the <code>&lt;&lt;</code> operator.</li>
  <li><code>return 0;</code> is the "exit status" of the <code>main()</code> function. The program ends with this statement, however, this statement is not mandatory.</li>
</ul>

<div class="note-tip">
<p><strong>Note:</strong> If we don't include the <code>using namespace std;</code> statement, we need to use <code>std::cout</code> instead of <code>cout</code>.</p>

<p>This is the preferred method as using the <code>std</code> namespace can create potential problems.</p>

<p>However, we have used the <code>std</code> namespace in our tutorials in order to make the codes more readable.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// prints the string enclosed in double quotes</span>
  <span class="hljs-built_in">std</span>::<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"This is C++ Programming"</span>;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

</div>
<hr>
<h3 id="output-integer">Example 2: Numbers and Characters Output</h3>

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
  </div><div class="clearfix"></div><p>To print the numbers and character variables, we use the same <code>cout</code> object but without using quotation marks.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> num1 = <span class="hljs-number">70</span>;
  <span class="hljs-keyword">double</span> num2 = <span class="hljs-number">256.783</span>;
  <span class="hljs-keyword">char</span> ch = <span class="hljs-string">'A'</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; num1 &lt;&lt; <span class="hljs-built_in">endl</span>;    <span class="hljs-comment">// print integer</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; num2 &lt;&lt; <span class="hljs-built_in">endl</span>;    <span class="hljs-comment">// print double</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"character: "</span> &lt;&lt; ch &lt;&lt; <span class="hljs-built_in">endl</span>;    <span class="hljs-comment">// print char</span>
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>70
256.783
character: A</samp></pre>

<div class="note-tip">
<p><strong>Notes:</strong></p>

<ul>
  <li>The <code>endl</code> manipulator is used to insert a new line. That's why each output is displayed in a new line.</li>
  <li>The <code>&lt;&lt;</code> operator can be used more than once if we want to print different variables, strings and so on in a single statement. For example:</li>
</ul>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"character: "</span> &lt;&lt; ch &lt;&lt; <span class="hljs-built_in">endl</span>;</code></pre>

</div>
<hr>
<h2 id="input">C++ Input</h2>

<p>In C++, cin takes formatted input from standard input devices such as the keyboard. We use the <code>cin</code> object along with the <code>&gt;&gt;</code> operator for taking input.</p>

<hr>
<h3 id="input-integer">Example 3: Integer Input/Output</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> num;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter an integer: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; num;   <span class="hljs-comment">// Taking input</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The number is: "</span> &lt;&lt; num;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter an integer: 70
The number is: 70</samp></pre>

<p>In the program, we used</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cin</span> &gt;&gt; num;</code></pre>

<p>to take input from the user. The input is stored in the variable <var>num</var>. We use the <code>&gt;&gt;</code> operator with <code>cin</code> to take input.</p>

<p class="note-tip"><strong>Note:</strong> If we don't include the <code>using namespace std;</code> statement, we need to use <code>std::cin</code> instead of <code>cin</code>.</p>

<hr>
<h2 id="multiple">C++ Taking Multiple Inputs</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">char</span> a;
  <span class="hljs-keyword">int</span> num;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a character and an integer: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; a &gt;&gt; num;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Character: "</span> &lt;&lt; a &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Number: "</span> &lt;&lt; num;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a character and an integer: F
23
Character: F
Number: 23</samp></pre>

</div>
</section>
<section id="second7">
<h1>C++ Operators</h1>
<div class="content">
    <p id="introduction">Operators are symbols that perform operations on variables and values. For example, <code>+</code> is an operator used for addition, while <code>-</code> is an operator used for subtraction.</p>

<p>Operators in C++ can be classified into 6 types:</p>

<ol>
  <li><a href="/cpp-programming/operators#arithmetic">Arithmetic Operators</a></li>
  <li><a href="/cpp-programming/operators#assignment">Assignment Operators</a></li>
  <li><a href="/cpp-programming/operators#relational">Relational Operators</a></li>
  <li><a href="/cpp-programming/operators#logical">Logical Operators</a></li>
  <li><a href="/cpp-programming/operators#bitwise">Bitwise Operators</a></li>
  <li><a href="/cpp-programming/operators#other-operators">Other Operators</a></li>
</ol>

<hr>
<h2 id="arithmetic">1. C++ Arithmetic Operators</h2>

<p>Arithmetic operators are used to perform arithmetic operations on variables and data. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs">a + b;</code></pre>

<p>Here, the <code>+</code> operator is used to add two variables <var>a</var> and <var>b</var>. Similarly there are various other arithmetic operators in C++.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Operation</th>
</tr>
<tr>
<td><code>+</code></td>
<td>Addition</td>
</tr>
<tr>
<td><code>-</code></td>
<td>Subtraction</td>
</tr>
<tr>
<td><code>*</code></td>
<td>Multiplication</td>
</tr>
<tr>
<td><code>/</code></td>
<td>Division</td>
</tr>
<tr>
<td><code>%</code></td>
<td>Modulo Operation (Remainder after division)</td>
</tr>
</tbody></table>
</div>

<hr>
<h3>Example 1: Arithmetic Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> a, b;
  a = <span class="hljs-number">7</span>;
  b = <span class="hljs-number">2</span>;

  <span class="hljs-comment">// printing the sum of a and b</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a + b = "</span> &lt;&lt; (a + b) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// printing the difference of a and b</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a - b = "</span> &lt;&lt; (a - b) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// printing the product of a and b</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a * b = "</span> &lt;&lt; (a * b) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// printing the division of a by b</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a / b = "</span> &lt;&lt; (a / b) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// printing the modulo of a by b</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a % b = "</span> &lt;&lt; (a % b) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>a + b = 9
a - b = 5
a * b = 14
a / b = 3
a % b = 1</samp></pre>

<p>Here, the operators <code>+</code>, <code>-</code> and <code>*</code> compute addition, subtraction, and multiplication respectively as we might have expected.</p>

<p><strong>/ Division Operator</strong></p>

<p>Note the operation <code>(a / b)</code> in our program. The <code>/</code> operator is the division operator.</p>

<p>As we can see from the above example, if an integer is divided by another integer, we will get the quotient. However, if either divisor or dividend is a floating-point number, we will get the result in decimals.</p>

<pre>In C++,

7/2 is 3
7.0 / 2 is 3.5
7 / 2.0 is 3.5
7.0 / 2.0 is 3.5</pre>

<p><strong>% Modulo Operator</strong></p>

<p>The modulo operator <code>%</code> computes the remainder. When <code>a = 9</code> is divided by <code>b = 4</code>, the remainder is <strong>1</strong>.</p>

<p class="note-tip"><strong>Note:</strong> The <code>%</code> operator can only be used with integers.</p>

<hr>
<h3 id="increment-decrement">Increment and Decrement Operators</h3>

<p>C++ also provides increment and decrement operators: <code>++</code> and <code>--</code> respectively.</p>

<ul>
  <li><code>++</code> increases the value of the operand by <strong>1</strong></li>
  <li><code>--</code> decreases it by <strong>1</strong></li>
</ul>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> num = <span class="hljs-number">5</span>;

<span class="hljs-comment">// increment operator</span>
++num;  <span class="hljs-comment">// 6</span></code></pre>

<p>Here, the code <code>++num;</code> increases the value of <var>num</var> by <strong>1</strong>.</p>

<hr>
<h3>Example 2: Increment and Decrement Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Working of increment and decrement operators</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">10</span>, b = <span class="hljs-number">100</span>, result_a, result_b;

  <span class="hljs-comment">// incrementing a by 1 and storing the result in result_a</span>
  result_a = ++a;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"result_a = "</span> &lt;&lt; result_a &lt;&lt; <span class="hljs-built_in">endl</span>;


  <span class="hljs-comment">// decrementing b by 1 and storing the result in result_b   </span>
  result_b = --b;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"result_b = "</span> &lt;&lt; result_b &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>result_a = 11
result_b = 99</samp></pre>

<p>In the above program, we have used the <code>++</code> and <code>--</code> operators as <strong>prefixes (++a and --b)</strong>. However, we can also use these operators as <strong>postfix (a++ and b--)</strong>.</p>

<p>To learn more, visit <a href="/article/increment-decrement-operator-difference-prefix-postfix">increment and decrement operators</a>.</p>

<hr>
<h2 id="assignment">2. C++ Assignment Operators</h2>

<p>In C++, assignment operators are used to assign values to variables. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// assign 5 to a</span>
a = <span class="hljs-number">5</span>;</code></pre>

<p>Here, we have assigned a value of <code>5</code> to the variable <var>a</var>.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Example</th>
<th>Equivalent to</th>
</tr>
<tr>
<td><code>=</code></td>
<td><code>a = b;</code></td>
<td><code>a = b;</code></td>
</tr>
<tr>
<td><code>+=</code></td>
<td><code>a += b;</code></td>
<td><code>a = a + b;</code></td>
</tr>
<tr>
<td><code>-=</code></td>
<td><code>a -= b;</code></td>
<td><code>a = a - b;</code></td>
</tr>
<tr>
<td><code>*=</code></td>
<td><code>a *= b;</code></td>
<td><code>a = a * b;</code></td>
</tr>
<tr>
<td><code>/=</code></td>
<td><code>a /= b;</code></td>
<td><code>a = a / b;</code></td>
</tr>
<tr>
<td><code>%=</code></td>
<td><code>a %= b;</code></td>
<td><code>a = a % b;</code></td>
</tr>
</tbody></table>
</div>

<hr>
<h3>Example 3: Assignment Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> a, b;

  <span class="hljs-comment">// 2 is assigned to a</span>
  a = <span class="hljs-number">2</span>;

  <span class="hljs-comment">// 7 is assigned to b</span>
  b = <span class="hljs-number">7</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a = "</span> &lt;&lt; a &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"b = "</span> &lt;&lt; b &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nAfter a += b;"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// assigning the sum of a and b to a</span>
  a += b;  <span class="hljs-comment">// a = a +b</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a = "</span> &lt;&lt; a &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>a = 2
b = 7

After a += b;
a = 9</samp></pre>

<hr>
<h2 id="relational">3. C++ Relational Operators</h2>

<p>A relational operator is used to check the relationship between two operands. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// checks if a is greater than b</span>
a &gt; b;</code></pre>

<p>Here, <code>&gt;</code> is a relational operator. It checks if <var>a</var> is greater than <var>b</var> or not.</p>

<p>If the relation is <strong>true</strong>, it returns <strong>1</strong> whereas if the relation is <strong>false</strong>, it returns <strong>0</strong>.</p>

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
<td><code>3 == 5</code> gives us <strong>false</strong></td>
</tr>
<tr>
<td><code>!=</code></td>
<td>Not Equal To</td>
<td><code>3 != 5</code> gives us <strong>true</strong></td>
</tr>
<tr>
<td><code>&gt;</code></td>
<td>Greater Than</td>
<td><code>3 &gt; 5</code> gives us <strong>false</strong></td>
</tr>
<tr>
<td><code>&lt;</code></td>
<td>Less Than</td>
<td><code>3 &lt; 5</code> gives us <strong>true</strong></td>
</tr>
<tr>
<td><code>&gt;=</code></td>
<td>Greater Than or Equal To</td>
<td><code>3 &gt;= 5</code> give us <strong>false</strong></td>
</tr>
<tr>
<td><code>&lt;=</code></td>
<td>Less Than or Equal To</td>
<td><code>3 &lt;= 5</code> gives us <strong>true</strong></td>
</tr>
</tbody></table>
</div>

<hr>
<h3>Example 4: Relational Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> a, b;
  a = <span class="hljs-number">3</span>;
  b = <span class="hljs-number">5</span>;
  <span class="hljs-keyword">bool</span> result;

  result = (a == b);   <span class="hljs-comment">// false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"3 == 5 is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = (a != b);  <span class="hljs-comment">// true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"3 != 5 is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = a &gt; b;   <span class="hljs-comment">// false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"3 &gt; 5 is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = a &lt; b;   <span class="hljs-comment">// true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"3 &lt; 5 is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = a &gt;= b;  <span class="hljs-comment">// false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"3 &gt;= 5 is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = a &lt;= b;  <span class="hljs-comment">// true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"3 &lt;= 5 is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>3 == 5 is 0
3 != 5 is 1
3 &gt; 5 is 0
3 &lt; 5 is 1
3 &gt;= 5 is 0
3 &lt;= 5 is 1</samp></pre>

<p class="note-tip"><strong>Note</strong>: Relational operators are used in decision-making and loops.</p>

<hr>
<h2 id="logical">4. C++ Logical Operators</h2>

<p>Logical operators are used to check whether an expression is <strong>true</strong> or <strong>false</strong>. If the expression is <strong>true</strong>, it returns <strong>1</strong> whereas if the expression is <strong>false</strong>, it returns <strong>0</strong>.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Example</th>
<th>Meaning</th>
</tr>
<tr>
<td><code>&amp;&amp;</code></td>
<td>expression1 <strong>&amp;&amp;</strong> expression2</td>
<td>Logical AND.<br>True only if all the operands are true.</td>
</tr>
<tr>
<td><code>||</code></td>
<td>expression1 <strong>||</strong> expression2</td>
<td>Logical OR.<br>True if at least one of the operands is true.</td>
</tr>
<tr>
<td><code>!</code></td>
<td><strong>!</strong>expression</td>
<td>Logical NOT.<br>True only if the operand is false.</td>
</tr>
</tbody></table>
</div>

<p>In C++, logical operators are commonly used in decision making. To further understand the logical operators, let's see the following examples,</p>

<pre style="max-height: 600px;"><code class="cpp hljs">Suppose,
a = <span class="hljs-number">5</span>
b = <span class="hljs-number">8</span>

Then,

(a &gt; <span class="hljs-number">3</span>) &amp;&amp; (b &gt; <span class="hljs-number">5</span>) evaluates to <span class="hljs-literal">true</span>
(a &gt; <span class="hljs-number">3</span>)  &amp;&amp; (b &lt; <span class="hljs-number">5</span>) evaluates to <span class="hljs-literal">false</span>

(a &gt; <span class="hljs-number">3</span>) || (b &gt; <span class="hljs-number">5</span>) evaluates to <span class="hljs-literal">true</span>
(a &gt; <span class="hljs-number">3</span>) || (b &lt; <span class="hljs-number">5</span>) evaluates to <span class="hljs-literal">true</span>
(a &lt; <span class="hljs-number">3</span>) || (b &lt; <span class="hljs-number">5</span>) evaluates to <span class="hljs-literal">false</span>

!(a &lt; <span class="hljs-number">3</span>) evaluates to <span class="hljs-literal">true</span>
!(a &gt; <span class="hljs-number">3</span>) evaluates to <span class="hljs-literal">false</span></code></pre>

<hr>
<h3>Example 5: Logical Operators</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">bool</span> result;

  result = (<span class="hljs-number">3</span> != <span class="hljs-number">5</span>) &amp;&amp; (<span class="hljs-number">3</span> &lt; <span class="hljs-number">5</span>);     <span class="hljs-comment">// true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"(3 != 5) &amp;&amp; (3 &lt; 5) is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = (<span class="hljs-number">3</span> == <span class="hljs-number">5</span>) &amp;&amp; (<span class="hljs-number">3</span> &lt; <span class="hljs-number">5</span>);    <span class="hljs-comment">// false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"(3 == 5) &amp;&amp; (3 &lt; 5) is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = (<span class="hljs-number">3</span> == <span class="hljs-number">5</span>) &amp;&amp; (<span class="hljs-number">3</span> &gt; <span class="hljs-number">5</span>);    <span class="hljs-comment">// false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"(3 == 5) &amp;&amp; (3 &gt; 5) is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = (<span class="hljs-number">3</span> != <span class="hljs-number">5</span>) || (<span class="hljs-number">3</span> &lt; <span class="hljs-number">5</span>);    <span class="hljs-comment">// true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"(3 != 5) || (3 &lt; 5) is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = (<span class="hljs-number">3</span> != <span class="hljs-number">5</span>) || (<span class="hljs-number">3</span> &gt; <span class="hljs-number">5</span>);    <span class="hljs-comment">// true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"(3 != 5) || (3 &gt; 5) is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = (<span class="hljs-number">3</span> == <span class="hljs-number">5</span>) || (<span class="hljs-number">3</span> &gt; <span class="hljs-number">5</span>);    <span class="hljs-comment">// false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"(3 == 5) || (3 &gt; 5) is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = !(<span class="hljs-number">5</span> == <span class="hljs-number">2</span>);    <span class="hljs-comment">// true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"!(5 == 2) is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  result = !(<span class="hljs-number">5</span> == <span class="hljs-number">5</span>);    <span class="hljs-comment">// false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"!(5 == 5) is "</span> &lt;&lt; result &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>(3 != 5) &amp;&amp; (3 &lt; 5) is 1
(3 == 5) &amp;&amp; (3 &lt; 5) is 0
(3 == 5) &amp;&amp; (3 &gt; 5) is 0
(3 != 5) || (3 &lt; 5) is 1
(3 != 5) || (3 &gt; 5) is 1
(3 == 5) || (3 &gt; 5) is 0
!(5 == 2) is 1
!(5 == 5) is 0</samp></pre>

<p><strong>Explanation of logical operator program</strong></p>

<ul>
  <li><code>(3 != 5) &amp;&amp; (3 &lt; 5)</code> evaluates to <strong>1</strong> because both operands <code>(3 != 5)</code> and <code>(3 &lt; 5)</code> are <strong>1</strong> (true).</li>
  <li><code>(3 == 5) &amp;&amp; (3 &lt; 5)</code> evaluates to <strong>0</strong> because the operand <code>(3 == 5)</code> is <strong>0</strong> (false).</li>
  <li><code>(3 == 5) &amp;&amp; (3 &gt; 5)</code> evaluates to <strong>0</strong> because both operands <code>(3 == 5)</code> and <code>(3 &gt; 5)</code> are <strong>0</strong> (false).</li>
  <li><code>(3 != 5) || (3 &lt; 5)</code> evaluates to <strong>1</strong> because both operands <code>(3 != 5)</code> and <code>(3 &lt; 5)</code> are <strong>1</strong> (true).</li>
  <li><code>(3 != 5) || (3 &gt; 5)</code> evaluates to <strong>1</strong> because the operand <code>(3 != 5)</code> is <strong>1</strong> (true).</li>
  <li><code>(3 == 5) || (3 &gt; 5)</code> evaluates to <strong>0</strong> because both operands <code>(3 == 5)</code> and <code>(3 &gt; 5)</code> are <strong>0</strong> (false).</li>
  <li><code>!(5 == 2)</code> evaluates to <strong>1</strong> because the operand <code>(5 == 2)</code> is <strong>0</strong> (false).</li>
  <li><code>!(5 == 5)</code> evaluates to <strong>0</strong> because the operand <code>(5 == 5)</code> is <strong>1</strong> (true).</li>
</ul>

<hr>
<h2 id="bitwise">5. C++ Bitwise Operators</h2>

<p>In C++, bitwise operators are used to perform operations on individual bits. They can only be used alongside <code>char</code> and <code>int</code> data types.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Description</th>
</tr>
<tr>
<td><code>&amp;</code></td>
<td>Binary AND</td>
</tr>
<tr>
<td><code>|</code></td>
<td>Binary OR</td>
</tr>
<tr>
<td><code>^</code></td>
<td>Binary XOR</td>
</tr>
<tr>
<td><code>~</code></td>
<td>Binary One's Complement</td>
</tr>
<tr>
<td><code>&lt;&lt;</code></td>
<td>Binary Shift Left</td>
</tr>
<tr>
<td><code>&gt;&gt;</code></td>
<td>Binary Shift Right</td>
</tr>
</tbody></table>
</div>

<p>To learn more, visit <a href="/cpp-programming/bitwise-operators">C++ bitwise operators</a>.</p>

<hr>
<h2 id="other-operators">6. Other C++ Operators</h2>

<p>Here's a list of some other common operators available in C++. We will learn about them in later tutorials.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Operator</th>
<th>Description</th>
<th>Example</th>
</tr>
<tr>
<td><code>sizeof</code></td>
<td>returns the size of data type</td>
<td><code>sizeof(int); // 4</code></td>
</tr>
<tr>
<td><code>?:</code> </td>
<td>returns value based on the condition</td>
<td><code>string result = (5 &gt; 0) ? "even" : "odd"; // "even"</code></td>
</tr>
<tr>
<td><code>&amp;</code></td>
<td>represents memory address of the operand</td>
<td><code>&amp;num; // address of num</code></td>
</tr>
<tr>
<td><code>.</code></td>
<td>accesses members of struct variables or class objects</td>
<td><code>s1.marks = 92;</code></td>
</tr>
<tr>
<td><code>-&gt;</code></td>
<td>used with pointers to access the class or struct variables</td>
<td><code>ptr-&gt;marks = 92;</code></td>
</tr>
<tr>
<td><code>&lt;&lt;</code></td>
<td>prints the output value</td>
<td><code>cout &lt;&lt; 5;</code></td>
</tr>
<tr>
<td><code>&gt;&gt;</code></td>
<td>gets the input value</td>
<td><code>cin &gt;&gt; num;</code></td>
</tr>
</tbody></table>
</div>
<hr>
<p><strong>Also Read:</strong></p>
<ul><li><a href="https://www.programiz.com/cpp-programming/operators-precedence-associativity">C++ Operators Precedence and Associativity</a></li></ul>  </div>
</section>


<!-- third menu sections -->
<section id="third1">
<h1>C++ Relational and Logical Operators</h1>
<div class="content">
    <p>In C++, relational and logical operators compare two or more operands and return either <code>true</code> or <code>false</code> values.</p>

<p>We use these operators in decision making.</p>

<hr>
<h2 id="relational">C++ Relational Operators</h2>

<p>A relational operator is used to check the relationship between two operands. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// checks if a is greater than b</span>
a &gt; b;</code></pre>

<p>Here, <code>&gt;</code> is a relational operator. It checks if <var>a</var> is greater than <var>b</var> or not.</p>

<p>If the relation is <strong>true</strong>, it returns <strong>1</strong> whereas if the relation is <strong>false</strong>, it returns <strong>0</strong>.</p>

<p>The following table summarizes the relational operators used in C++.</p>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>Operator</th>
              <th>Meaning</th>
              <th>Example</th>
          </tr>
          <tr>
              <td><code>==</code></td>
              <td>Is Equal To</td>
              <td><code>3 == 5</code> gives us <strong>false</strong></td>
          </tr>
          <tr>
              <td><code>!=</code></td>
              <td>Not Equal To</td>
              <td><code>3 != 5</code> gives us <strong>true</strong></td>
          </tr>
          <tr>
              <td><code>&gt;</code></td>
              <td>Greater Than</td>
              <td><code>3 &gt; 5</code> gives us <strong>false</strong></td>
          </tr>
          <tr>
              <td><code>&lt;</code></td>
              <td>Less Than</td>
              <td><code>3 &lt; 5</code> gives us <strong>true</strong></td>
          </tr>
          <tr>
              <td><code>&gt;=</code></td>
              <td>Greater Than or Equal To</td>
              <td><code>3 &gt;= 5</code> give us <strong>false</strong></td>
          </tr>
          <tr>
              <td><code>&lt;=</code></td>
              <td>Less Than or Equal To</td>
              <td><code>3 &lt;= 5</code> gives us <strong>true</strong></td>
          </tr>
      </tbody>
  </table>
</div>

<hr>
<h3 id="equal-to">== Operator</h3>

<p>The equal to <code>==</code> operator returns</p>

<ul>
  <li><code>true</code> - if both the operands are equal or the same</li>
  <li><code>false</code> - if the operands are unequal</li>
</ul>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> x = <span class="hljs-number">10</span>;
<span class="hljs-keyword">int</span> y = <span class="hljs-number">15</span>;
<span class="hljs-keyword">int</span> z = <span class="hljs-number">10</span>;

x == y   <span class="hljs-comment">// false</span>
x == z   <span class="hljs-comment">// true</span></code></pre>

<p class="note-tip"><strong>Note:</strong> The relational operator <code>==</code> is not the same as the assignment operator <code>=</code>. The assignment operator <code>=</code> assigns a value to a variable, constant, array, or vector. It does not compare two operands.</p>

<hr>
<h3 id="not-equal-to">!= Operator</h3>

<p>The not equal to <code>!=</code> operator returns</p>

<ul>
  <li><code>true</code> - if both operands are unequal</li>
  <li><code>false</code> - if both operands are equal.</li>
</ul>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> x = <span class="hljs-number">10</span>;
<span class="hljs-keyword">int</span> y = <span class="hljs-number">15</span>;
<span class="hljs-keyword">int</span> z = <span class="hljs-number">10</span>;

x != y   <span class="hljs-comment">// true</span>
x != z   <span class="hljs-comment">// false</span></code></pre>

<hr>
<h3 id="greater-than">&gt; Operator</h3>

<p>The greater than <code>&gt;</code> operator returns</p>

<ul>
  <li><code>true</code> - if the left operand is greater than the right</li>
  <li><code>false</code> - if the left operand is less than the right</li>
</ul>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> x = <span class="hljs-number">10</span>;
<span class="hljs-keyword">int</span> y = <span class="hljs-number">15</span>;

x &gt; y   <span class="hljs-comment">// false</span>
y &gt; x   <span class="hljs-comment">// true</span></code></pre>

<hr>
<h3 id="less-than">&lt; Operator</h3>

<p>The less than operator <code>&lt;</code> returns</p>

<ul>
  <li><code>true</code> - if the left operand is less than the right</li>
  <li><code>false</code> - if the left operand is greater than right</li>
</ul>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> x = <span class="hljs-number">10</span>;
<span class="hljs-keyword">int</span> y = <span class="hljs-number">15</span>;

x &lt; y   <span class="hljs-comment">// true</span>
y &lt; x   <span class="hljs-comment">// false</span></code></pre>

<hr>
<h3 id="greater-than-equal">&gt;= Operator</h3>

<p>The greater than or equal to <code>&gt;=</code> operator returns</p>

<ul>
  <li><code>true</code> - if the left operand is either greater than or equal to the right</li>
  <li><code>false</code> - if the left operand is less than the right</li>
</ul>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> x = <span class="hljs-number">10</span>;
<span class="hljs-keyword">int</span> y = <span class="hljs-number">15</span>;
<span class="hljs-keyword">int</span> z = <span class="hljs-number">10</span>;

x &gt;= y   <span class="hljs-comment">// false</span>
y &gt;= x   <span class="hljs-comment">// true</span>
z &gt;= x   <span class="hljs-comment">// true</span></code></pre>

<hr>
<h3 id="less-than-equal">&lt;= Operator</h3>

<p>The less than or equal to operator <code>&lt;=</code> returns</p>

<ul>
  <li><code>true</code> - if the left operand is either less than or equal to the right</li>
  <li><code>false</code> - if the left operand is greater than right</li>
</ul>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> x = <span class="hljs-number">10</span>;
<span class="hljs-keyword">int</span> y = <span class="hljs-number">15</span>;

x &gt; y   <span class="hljs-comment">// false</span>
y &gt; x   <span class="hljs-comment">// true</span></code></pre>

<hr>
<p>In order to learn how relational operators can be used with strings, refer to our tutorial here.</p>

<h2 id="logical">C++ Logical Operators</h2>

<p>We use logical operators to check whether an expression is <strong>true</strong> or <strong>false</strong>. If the expression is <strong>true</strong>, it returns <strong>1</strong> whereas if the expression is <strong>false</strong>, it returns <strong>0</strong>.</p>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>Operator</th>
              <th>Example</th>
              <th>Meaning</th>
          </tr>
          <tr>
              <td><code>&amp;&amp;</code></td>
              <td>expression1 <strong>&amp;&amp;</strong> expression 2</td>
              <td>Logical AND.<br>
                  true only if all the operands are true.</td>
          </tr>
          <tr>
              <td><code>||</code></td>
              <td>expression1 <strong>||</strong> expression 2</td>
              <td>Logical OR.<br>
                  true if at least one of the operands is true.</td>
          </tr>
          <tr>
              <td><code>!</code></td>
              <td><strong>!</strong>expression</td>
              <td>Logical NOT.<br>
                  true only if the operand is false.</td>
          </tr>
      </tbody>
  </table>
</div>

<hr>
<h3 id="logical-and">C++ Logical AND Operator</h3>

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
  </div><div class="clearfix"></div><p>The logical AND operator <code>&amp;&amp;</code> returns</p>

<ul>
  <li><code>true</code> - if and only if <strong>all the operands are</strong> <code>true</code>.</li>
  <li><code>false</code> - if <strong>one or more operands</strong> are <code>false</code>.</li>
</ul>

<p><strong>Truth Table of &amp;&amp; Operator</strong></p>

<p>Let <strong>a</strong> and <strong>b</strong> be two operands. <strong>0</strong> represents <strong>false</strong> while <strong>1</strong> represents <strong>true</strong>. Then,</p>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>a</th>
              <th>b</th>
              <th>a &amp;&amp; b</th>
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

<p>As we can see from the truth table above, the <code>&amp;&amp;</code> operator returns true only if both <code>a</code> and <code>b</code> are true.</p>

<p class="note-tip">Note: The Logical AND operator <code>&amp;&amp;</code> should not be confused with the Bitwise AND operator <code>&amp;</code>.</p>

<hr>
<h3>Example 1: C++ OR Operator</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program demonstrating &amp;&amp; operator truth table</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">5</span>;
  <span class="hljs-keyword">int</span> b = <span class="hljs-number">9</span>;

  <span class="hljs-comment">// false &amp;&amp; false = false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; ((a == <span class="hljs-number">0</span>) &amp;&amp; (a &gt; b)) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// false &amp;&amp; true = false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; ((a == <span class="hljs-number">0</span>) &amp;&amp; (a &lt; b)) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// true &amp;&amp; false = false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; ((a == <span class="hljs-number">5</span>) &amp;&amp; (a &gt; b)) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// true &amp;&amp; true = true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; ((a == <span class="hljs-number">5</span>) &amp;&amp; (a &lt; b)) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>0
0
0
1</samp></pre>

<p>In this program, we declare and initialize two <code>int</code> variables <var>a</var> and <var>b</var> with the values <code>5</code> and <code>9</code> respectively. We then print a logical expression</p>

<pre style="max-height: 600px;"><code class="cpp hljs">((a == <span class="hljs-number">0</span>) &amp;&amp; (a &gt; b))</code></pre>

<p>Here, <code>a == 0</code> evaluates to <code>false</code> as the value of <var>a</var> is <code>5</code>. <code>a &gt; b</code> is also <code>false</code> since the value of <var>a</var> is less than that of <var>b</var>. We then use the AND operator <code>&amp;&amp;</code> to combine these two expressions.</p>

<p>From the truth table of <code>&amp;&amp;</code> operator, we know that <code>false &amp;&amp; false</code> (i.e. <code>0 &amp;&amp; 0</code>) results in an evaluation of <code>false</code> (<code>0</code>). This is the result we get in the output.</p>

<p>Similarly, we evaluate three other expressions that fully demonstrate the truth table of the <code>&amp;&amp;</code> operator.</p>

<hr>
<h3 id="logical-or">C++ Logical OR Operator</h3>

<p>The logical OR operator <code>||</code> returns</p>

<ul>
  <li><code>true</code> - if <strong>one or more of the operands are</strong> <code>true</code>.</li>
  <li><code>false</code> - if and only if <strong>all the operands</strong> are <code>false</code>.</li>
</ul>

<p><strong>Truth Table of || Operator</strong></p>

<p>Let <strong>a</strong> and <strong>b</strong> be two operands. Then,</p>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>a</th>
              <th>b</th>
              <th>a || b</th>
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

<p>As we can see from the truth table above, the <code>||</code> operator returns false only if both <code>a</code> and <code>b</code> are false.</p>

<hr>
<h3>Example 2: C++ OR Operator</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program demonstrating || operator truth table</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">5</span>;
  <span class="hljs-keyword">int</span> b = <span class="hljs-number">9</span>;

  <span class="hljs-comment">// false &amp;&amp; false = false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; ((a == <span class="hljs-number">0</span>) || (a &gt; b)) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// false &amp;&amp; true = true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; ((a == <span class="hljs-number">0</span>) || (a &lt; b)) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// true &amp;&amp; false = true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; ((a == <span class="hljs-number">5</span>) || (a &gt; b)) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// true &amp;&amp; true = true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; ((a == <span class="hljs-number">5</span>) || (a &lt; b)) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>0
1
1
1</samp></pre>

<p>In this program, we declare and initialize two <code>int</code> variables <var>a</var> and <var>b</var> with the values <code>5</code> and <code>9</code> respectively. We then print a logical expression</p>

<pre style="max-height: 600px;"><code class="cpp hljs">((a == <span class="hljs-number">0</span>) || (a &gt; b))</code></pre>

<p>Here, <code>a == 0</code> evaluates to <code>false</code> as the value of <var>a</var> is <code>5</code>. <code>a &gt; b</code> is also <code>false</code> since the value of <var>a</var> is less than that of <var>b</var>. We then use the OR operator <code>||</code> to combine these two expressions.</p>

<p>From the truth table of <code>||</code> operator, we know that <code>false || false</code> (i.e. <code>0 || 0</code>) results in an evaluation of <code>false</code> (<code>0</code>). This is the result we get in the output.</p>

<p>Similarly, we evaluate three other expressions that fully demonstrate the truth table of <code>||</code> operator.</p>

<hr>
<h3 id="logical-not">C++ Logical NOT Operator !</h3>

<p>The logical NOT operator <code>!</code> is a unary operator i.e. it takes only one operand.</p>

<p>It returns <strong>true</strong> when the operand is <strong>false</strong>, and <strong>false</strong> when the operand is <strong>true</strong>.</p>

<p><strong>Truth Table of the ! Operator</strong></p>

<p>Let <strong>a</strong> be an operand. Then,</p>

<hr>
<h3>Example 3: C++ ! Operator</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program demonstrating ! operator truth table</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">5</span>;

  <span class="hljs-comment">// !false = true</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; !(a == <span class="hljs-number">0</span>) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// !true = false</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; !(a == <span class="hljs-number">5</span>) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1
0</samp></pre>

<p>In this program, we declare and initialize an <code>int</code> variable <var>a</var> with the value <code>5</code>. We then print a logical expression</p>

<pre style="max-height: 600px;"><code class="cpp hljs">!(a == <span class="hljs-number">0</span>) </code></pre>

<p>Here, <code>a == 0</code> evaluates to <code>false</code> as the value of <var>a</var> is <code>5</code>. However, we use the NOT operator <code>!</code> on <code>a == 0</code>. Since <code>a == 0</code> evaluates to <code>false</code>, the <code>!</code> operator inverts the results of <code>a == 0</code> and the final result is <code>true</code>.</p>

<p>Similarly, the expression <code>!(a == 5)</code> ultimately returns <code>false</code> because <code>a == 5</code> is <code>true</code>.</p>
</div>
</section>
<section id="third2">
<h1>C++ if, if...else and Nested if...else</h1>
<div class="content">
    <p id="introduction">In computer programming, we use the <code>if...else</code> statement to run one block of code under certain conditions and another block of code under different conditions.</p>

<p>For example, assigning grades (A, B, C) based on marks obtained by a student.</p>

<ol>
  <li>if the percentage is above <strong>90</strong>, assign grade <strong>A</strong></li>
  <li>if the percentage is above <strong>75</strong>, assign grade <strong>B</strong></li>
  <li>if the percentage is above <strong>65</strong>, assign grade <strong>C</strong></li>
</ol>

<hr>
<h2 id="cpp-if-statement">C++ if Statement</h2>

<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">if</span> (condition) {
<span class="hljs-comment">// body of if statement</span>
}</code></pre>

<p>The <code>if</code> statement evaluates the <var>condition</var> inside the parentheses <code>( )</code>.</p>

<ol>
  <li>If the <var>condition</var> evaluates to <var>true</var>, the code inside the body of <code>if</code> is executed.</li>
  <li>If the <var>condition</var> evaluates to <var>false</var>, the code inside the body of <code>if</code> is skipped.</li>
</ol>

<p class="note-tip"><strong>Note:</strong> The code inside <code>{ }</code> is the body of the <code>if</code> statement.</p>

<figure><img src="assets/images/cpp-if-working.png" title="How if Statement Works" alt="How if Statement Works" width="720" height="">
  <figcaption>How if Statement Works</figcaption></figure>
<hr>
<h3>Example 1: C++ if Statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Program to print positive number entered by the user</span>
<span class="hljs-comment">// If the user enters a negative number, it is skipped</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> number;

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter an integer: "</span>;
<span class="hljs-built_in">cin</span> &gt;&gt; number;

<span class="hljs-comment">// checks if the number is positive</span>
<span class="hljs-keyword">if</span> (number &gt; <span class="hljs-number">0</span>) {
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered a positive integer: "</span> &lt;&lt; number &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"This statement is always executed."</span>;

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output 1</strong></p>

<pre><samp>Enter an integer: 5
You entered a positive number: 5
This statement is always executed.</samp></pre>

<p>When the user enters <var>5</var>, the condition <code>number &gt; 0</code> is evaluated to <var>true</var> and the statement inside the body of <code>if</code> is executed.</p>

<p><strong>Output 2</strong></p>

<pre><samp>Enter a number: -5
This statement is always executed.</samp></pre>

<p>When the user enters <var>-5</var>, the condition <code>number &gt; 0</code> is evaluated to <var>false</var> and the statement inside the body of <code>if</code> is not executed.</p>

<hr>
<h2 id="cpp-if-else">C++ if...else</h2>

<p>The <code>if</code> statement can have an optional <code>else</code> clause.</p>

<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">if</span> (condition) {
<span class="hljs-comment">// block of code if condition is true</span>
}
<span class="hljs-keyword">else</span> {
<span class="hljs-comment">// block of code if condition is false</span>
}</code></pre>

<p>The <code>if..else</code> statement evaluates the <var>condition</var> inside the parenthesis.</p>

<figure><img src="assets/images/cpp-if-else-working.png" title="How if...else Statement Works" alt="How if...else Statement Works" width="720" height="">
  <figcaption>How if...else Statement Works</figcaption></figure>
<p>If the <var>condition</var> evaluates <var>true</var>,</p>

<ol>
  <li>the code inside the body of <code>if</code> is executed</li>
  <li>the code inside the body of <code>else</code> is skipped from execution</li>
</ol>

<p>If the <var>condition</var> evaluates <var>false</var>,</p>

<ol>
  <li>the code inside the body of <code>else</code> is executed</li>
  <li>the code inside the body of <code>if</code> is skipped from execution</li>
</ol>

<hr>
<h3>Example 2: C++ if...else Statement</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Program to check whether an integer is positive or negative</span>
<span class="hljs-comment">// This program considers 0 as a positive number</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> number;

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter an integer: "</span>;
<span class="hljs-built_in">cin</span> &gt;&gt; number;

<span class="hljs-keyword">if</span> (number &gt;= <span class="hljs-number">0</span>) {
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered a positive integer: "</span> &lt;&lt; number &lt;&lt; <span class="hljs-built_in">endl</span>;
}
<span class="hljs-keyword">else</span> {
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered a negative integer: "</span> &lt;&lt; number &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"This line is always printed."</span>;

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output 1</strong></p>

<pre><samp>Enter an integer: 4
You entered a positive integer: 4.
This line is always printed.</samp></pre>

<p>In the above program, we have the condition <code>number &gt;= 0</code>. If we enter the number greater or equal to <var>0</var>, then the condition evaluates <var>true</var>.</p>

<p>Here, we enter <var>4</var>. So, the condition is <var>true</var>. Hence, the statement inside the body of <code>if</code> is executed.</p>

<p><strong>Output 2</strong></p>

<pre><samp>Enter an integer: -4
You entered a negative integer: -4.
This line is always printed.</samp></pre>

<p>Here, we enter <var>-4</var>. So, the condition is <var>false</var>. Hence, the statement inside the body of <code>else</code> is executed.</p>

<hr>
<h2 id="cpp-if-else-elseif">C++ if...else...else if statement</h2>

<p>The <code>if...else</code> statement is used to execute a block of code among two alternatives. However, if we need to make a choice between more than two alternatives, we use the <code>if...else if...else</code> statement.</p>

<p> <strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">if</span> (condition1) {
<span class="hljs-comment">// code block 1</span>
}
<span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (condition2){
<span class="hljs-comment">// code block 2</span>
}
<span class="hljs-keyword">else</span> {
<span class="hljs-comment">// code block 3</span>
}</code></pre>

<p>Here,</p>

<ol>
  <li>If <var>condition1</var> evaluates to <var>true</var>, the <code>code block 1</code> is executed.</li>
  <li>If <var>condition1</var> evaluates to <var>false</var>, then <var>condition2</var> is evaluated.</li>
  <li>If <var>condition2</var> is <var>true</var>, the <code>code block 2</code> is executed.</li>
  <li>If <var>condition2</var> is <var>false</var>, the <code>code block 3</code> is executed.</li>
</ol>

<figure><img src="assets/images/cpp-if-else-if-else-working.png" title="How if...else if...else Statement Works" alt="How if...else if...else Statement Works" width="720" height="">
  <figcaption>How if...else if...else Statement Works</figcaption></figure>
<p class="note-tip"><strong>Note:</strong> There can be more than one <code>else if</code> statement but only one <code>if</code> and <code>else</code> statements.</p>

<hr>
<h3>Example 3: C++ if...else...else if</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Program to check whether an integer is positive, negative or zero</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> number;

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter an integer: "</span>;
<span class="hljs-built_in">cin</span> &gt;&gt; number;

<span class="hljs-keyword">if</span> (number &gt; <span class="hljs-number">0</span>) {
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered a positive integer: "</span> &lt;&lt; number &lt;&lt; <span class="hljs-built_in">endl</span>;
} 
<span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (number &lt; <span class="hljs-number">0</span>) {
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered a negative integer: "</span> &lt;&lt; number &lt;&lt; <span class="hljs-built_in">endl</span>;
} 
<span class="hljs-keyword">else</span> {
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered 0."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"This line is always printed."</span>;

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output 1</strong></p>

<pre><samp>Enter an integer: 1
You entered a positive integer: 1.
This line is always printed.</samp></pre>

<p><strong>Output 2</strong></p>

<pre><samp>Enter an integer: -2
You entered a negative integer: -2.
This line is always printed.</samp></pre>

<p><strong>Output 3</strong></p>

<pre><samp>Enter an integer: 0
You entered 0.
This line is always printed.</samp></pre>

<p>In this program, we take a number from the user. We then use the <code>if...else if...else</code> ladder to check whether the number is positive, negative, or zero.</p>

<p>If the number is greater than <var>0</var>, the code inside the <code>if</code> block is executed. If the number is less than <var>0</var>, the code inside the <code>else if</code> block is executed. Otherwise, the code inside the <code>else</code> block is executed.</p>

<hr>
<h2 id="cpp-nested-if-else">C++ Nested if...else</h2>

<p>Sometimes, we need to use an <code>if</code> statement inside another <code>if</code> statement. This is known as nested <code>if</code> statement.</p>

<p>Think of it as multiple layers of <code>if</code> statements. There is a first, outer <code>if</code> statement, and inside it is another, inner <code>if</code> statement. </p>

<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// outer if statement</span>
<span class="hljs-keyword">if</span> (condition1) {

<span class="hljs-comment">// statements</span>

<span class="hljs-comment">// inner if statement</span>
<span class="hljs-keyword">if</span> (condition2) {
  <span class="hljs-comment">// statements</span>
}
}</code></pre>

<p>Notes:</p>

<ol>
  <li>We can add <code>else</code> and <code>else if</code> statements to the inner <code>if</code> statement as required.</li>
  <li>The inner <code>if</code> statement can also be inserted inside the outer <code>else</code> or <code>else if</code> statements (if they exist).</li>
  <li>We can nest multiple layers of <code>if</code> statements.</li>
</ol>

<hr>
<h3>Example 4: C++ Nested if</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to find if an integer is positive, negative or zero</span>
<span class="hljs-comment">// using nested if statements</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> num;
  
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter an integer: "</span>;  
 <span class="hljs-built_in">cin</span> &gt;&gt; num;    

<span class="hljs-comment">// outer if condition</span>
<span class="hljs-keyword">if</span> (num != <span class="hljs-number">0</span>) {
      
  <span class="hljs-comment">// inner if condition</span>
  <span class="hljs-keyword">if</span> (num &gt; <span class="hljs-number">0</span>) {
    <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The number is positive."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
  <span class="hljs-comment">// inner else condition</span>
  <span class="hljs-keyword">else</span> {
    <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The number is negative."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }  
}
<span class="hljs-comment">// outer else condition</span>
<span class="hljs-keyword">else</span> {
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The number is 0 and it is neither positive nor negative."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"This line is always printed."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output 1</strong></p>

<pre><samp>Enter an integer: 35
The number is positive.
This line is always printed.</samp></pre>

<p><strong>Output 2</strong></p>

<pre><samp>Enter an integer: -35
The number is negative.
This line is always printed.</samp></pre>

<p><strong>Output 3</strong></p>

<pre><samp>Enter an integer: 0
The number is 0 and it is neither positive nor negative.
This line is always printed.</samp></pre>

<p>In the above example,</p>

<ol>
  <li>We take an integer as an input from the user and store it in the variable <var>num</var>.</li>
  <li>We then use an <code>if...else</code> statement to check whether num is not equal to <var>0</var>.
      <ol>
          <li>If <var>true</var>, then the <strong>inner</strong> <code>if...else</code> statement is executed.</li>
          <li>If <var>false</var>, the code inside the <strong>outer</strong> <code>else</code> condition is executed, which prints <code>"The number is 0 and it is neither positive nor negative."</code></li>
      </ol>
          </li>
  <li>The <strong>inner</strong> <code>if...else</code> statement checks whether the input number is positive i.e. if <var>num</var> is greater than <var>0</var>.
      <ol>
          <li>If <var>true</var>, then we print a statement saying that the number is positive.</li>
          <li>If <var>false</var>, we print that the number is negative.</li>
      </ol>
          </li>
      </ol>
<p class="note-tip"><strong>Note:</strong> As you can see, nested <code>if...else</code> makes your logic complicated. If possible, you should always try to avoid nested <code>if...else</code>.</p>

<hr>
<h2>Body of if...else With Only One Statement</h2>

<p>If the body of <code>if...else</code> has only one statement, you can omit <code>{ }</code> in the program. For example, you can replace</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> number = <span class="hljs-number">5</span>;

<span class="hljs-keyword">if</span> (number &gt; <span class="hljs-number">0</span>) {
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The number is positive."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
}
<span class="hljs-keyword">else</span> {
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The number is negative."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
}</code></pre>

<p>with</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> number = <span class="hljs-number">5</span>;

<span class="hljs-keyword">if</span> (number &gt; <span class="hljs-number">0</span>)
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The number is positive."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-keyword">else</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The number is negative."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;</code></pre>

<p>The output of both programs will be the same.</p>

<p class="note-tip"><strong>Note:</strong> Although it's not necessary to use <code>{ }</code> if the body of <code>if...else</code> has only one statement, using <code>{ }</code> makes your code more readable.</p>

<hr>
<h2 id="more-on-decision-making">More on Decision Making</h2>

<p>The <strong>ternary operator</strong> is a concise, inline method used to execute one of two expressions based on a condition. To learn more, visit <a href="/cpp-programming/ternary-operator/">C++ Ternary Operator</a>.</p>

<p>If we need to make a choice between more than one alternatives based on a given test condition, the <code>switch</code> statement can be used. To learn more, visit <a href="/cpp-programming/switch-case">C++ switch</a>.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ol>
  <li><a href="/cpp-programming/examples/even-odd">C++ Program to Check Whether Number is Even or Odd</a></li>
  <li><a href="/cpp-programming/examples/vowel-consonant">C++ Program to Check Whether a Character is Vowel or Consonant.</a></li>
  <li><a href="/cpp-programming/examples/largest-number-among-three">C++ Program to Find Largest Number Among Three Numbers</a></li>
</ol>

</div>
</section>
<section id="third3">
<h1>C++ for Loop</h1>
<div class="content">
    <p id="introduction">In computer programming, loops are used to repeat a block of code.</p>

<p>For example, let's say we want to show a message 100 times. Then instead of writing the print statement 100 times, we can use a loop.</p>

<p>That was just a simple example; we can achieve much more efficiency and sophistication in our programs by making effective use of loops.</p>

<p>There are 3 types of loops in C++.</p>

<ul>
  <li><code>for</code> loop</li>
  <li><code>while</code> loop</li>
  <li><code>do...while</code> loop</li>
</ul>

<p>This tutorial focuses on C++ <code>for</code> loop. We will learn about the other type of loops in the upcoming tutorials.</p>

<hr>
<h2 id="for-loop">C++ for loop</h2>

<p>The syntax of for-loop is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">for</span> (initialization; condition; update) {
  <span class="hljs-comment">// body of-loop </span>
}</code></pre>

<p>Here,</p>

<ul>
  <li><code>initialization</code> - initializes variables and is executed only once</li>
  <li><code>condition</code> - if <code>true</code>, the body of <code>for</code> loop is executed<br>
if <code>false</code>, the for loop is terminated</li>
  <li><code>update</code> - updates the value of initialized variables and again checks the condition</li>
</ul>

<p>To learn more about <code>conditions</code>, check out our tutorial on <a href="/cpp-programming/relational-logical-operators">C++ Relational and Logical Operators</a>.</p>

<hr>
<h2>Flowchart of for Loop in C++</h2>

<figure><img src="assets/images/cpp-for-loop-flowchart.png" title="C++ for loop flowchart" alt="C++ for loop flowchart" width="380" height="586">
  <figcaption>Flowchart of for loop in C++</figcaption></figure>
<hr>
<h3 id="example1">Example 1: Printing Numbers From 1 to 5</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= <span class="hljs-number">5</span>; ++i) {
      <span class="hljs-built_in">cout</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">" "</span>;
  }
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1 2 3 4 5</samp></pre>

<p>Here is how this program works</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Iteration</th>
<th>Variable</th>
<th>i 
</th><th>Action</th>
</tr>
<tr>
<td>1st</td>
<td><code>i = 1</code></td>
<td><code>true</code></td>
<td><samp>1</samp> is printed. <code>i</code> is increased to <code>2</code>.</td>
</tr>
<tr>
<td>2nd</td>
<td><code>i = 2</code></td>
<td><code>true</code></td>
<td><samp>2</samp> is printed. <code>i</code> is increased to <code>3</code>.</td>
</tr>
<tr>
<td>3rd</td>
<td><code>i = 3</code></td>
<td><code>true</code></td>
<td><samp>3</samp> is printed. <code>i</code> is increased to <code>4</code>.</td>
</tr>
<tr>
<td>4th</td>
<td><code>i = 4</code></td>
<td><code>true</code></td>
<td><samp>4</samp> is printed. <code>i</code> is increased to <code>5</code>.</td>
</tr>
<tr>
<td>5th</td>
<td><code>i = 5</code></td>
<td><code>true</code></td>
<td><samp>5</samp> is printed. <code>i</code> is increased to <code>6</code>.</td>
</tr>
<tr>
<td>6th</td>
<td><code>i = 6</code></td>
<td><code>false</code></td>
<td>The loop is terminated</td>
</tr>
</tbody></table>
</div>

<hr>
<h3 id="example2">Example 2: Display a text 5 times</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ Program to display a text 5 times</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= <span class="hljs-number">5</span>; ++i) {
      <span class="hljs-built_in">cout</span> &lt;&lt;  <span class="hljs-string">"Hello World! "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Hello World!
Hello World!
Hello World!
Hello World!
Hello World!</samp></pre>

<p>Here is how this program works</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Iteration</th>
<th>Variable</th>
<th>i 
</th><th>Action</th>
</tr>
<tr>
<td>1st</td>
<td><code>i = 1</code></td>
<td><code>true</code></td>
<td><samp>Hello World!</samp> is printed and <code>i</code> is increased to <code>2</code>.</td>
</tr>
<tr>
<td>2nd</td>
<td><code>i = 2</code></td>
<td><code>true</code></td>
<td><samp>Hello World!</samp> is printed and <code>i</code> is increased to <code>3</code>.</td>
</tr>
<tr>
<td>3rd</td>
<td><code>i = 3</code></td>
<td><code>true</code></td>
<td><samp>Hello World!</samp> is printed and <code>i</code> is increased to <code>4</code>.</td>
</tr>
<tr>
<td>4th</td>
<td><code>i = 4</code></td>
<td><code>true</code></td>
<td><samp>Hello World!</samp> is printed and <code>i</code> is increased to <code>5</code>.</td>
</tr>
<tr>
<td>5th</td>
<td><code>i = 5</code></td>
<td><code>true</code></td>
<td><samp>Hello World!</samp> is printed and <code>i</code> is increased to <code>6</code>.</td>
</tr>
<tr>
<td>6th</td>
<td><code>i = 6</code></td>
<td><code>false</code></td>
<td>The loop is terminated</td>
</tr>
</tbody></table>
</div>

<hr>
<h3 id="example3">Example 3: Find the sum of first n Natural Numbers</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to find the sum of first n natural numbers</span>
<span class="hljs-comment">// positive integers such as 1,2,3,...n are known as natural numbers</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> num, sum;
  sum = <span class="hljs-number">0</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a positive integer: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; num;

  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= num; ++i) {
      sum += i;
  }

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Sum = "</span> &lt;&lt; sum &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a positive integer: 10
Sum = 55</samp></pre>

<p>In the above example, we have two variables <var>num</var> and <var>sum</var>. The <var>sum</var> variable is assigned with <var>0</var> and the <var>num</var> variable is assigned with the value provided by the user.</p>

<p>Note that we have used a <code>for</code> loop.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">for</span>(<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= num; ++i)</code></pre>

<p>Here,</p>

<ul>
  <li><code>int i = 1</code>: initializes the <var>i</var> variable</li>
  <li><code>i &lt;= num</code>: runs the loop as long as <var>i</var> is less than or equal to <var>num</var></li>
  <li><code>++i</code>: increases the <var>i</var> variable by 1 in each iteration</li>
</ul>

<p>When <var>i</var> becomes <code>11</code>, the <code>condition</code> is <code>false</code> and <var>sum</var> will be equal to <code>0 + 1 + 2 + ... + 10</code>.</p>

<hr>
<h2 id="ranged">Ranged Based for Loop</h2>

<p>In C++11, a new range-based <code>for</code> loop was introduced to work with collections such as <a href="/cpp-programming/arrays">arrays</a> and <a href="/cpp-programming/vectors">vectors</a>. Its syntax is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">for</span> (variable : collection) {
  <span class="hljs-comment">// body of loop</span>
}</code></pre>

<p>Here, for every value in the <var>collection</var>, the for loop is executed and the value is assigned to the <var>variable</var>.</p>

<hr>
<h3>Example 4: Range Based for Loop</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-keyword">int</span> num_array[] = {<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>, <span class="hljs-number">4</span>, <span class="hljs-number">5</span>, <span class="hljs-number">6</span>, <span class="hljs-number">7</span>, <span class="hljs-number">8</span>, <span class="hljs-number">9</span>, <span class="hljs-number">10</span>};

  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> n : num_array) {
      <span class="hljs-built_in">cout</span> &lt;&lt; n &lt;&lt; <span class="hljs-string">" "</span>;
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1 2 3 4 5 6 7 8 9 10</samp></pre>

<p>In the above program, we have declared and initialized an <code>int</code> array named <var>num_array</var>. It has 10 items.</p>

<p>Here, we have used a range-based <code>for</code> loop to access all the items in the array.</p>

<hr>
<h3 id="infinite-loop">C++ Infinite for loop</h3>

<p>If the <code>condition</code> in a <code>for</code> loop is always <code>true</code>, it runs forever (until memory is full). For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// infinite for loop</span>
<span class="hljs-keyword">for</span>(<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &gt; <span class="hljs-number">0</span>; i++) {
  <span class="hljs-comment">// block of code</span>
}</code></pre>

<p>In the above program, the <code>condition</code> is always <code>true</code> which will then run the code for infinite times.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
<li><a href="">while and do...while loop</a></li>
  <li><a href="/cpp-programming/examples/sum-natural-number">C++ Program to Calculate Sum of Natural Numbers</a></li>
  <li><a href="/cpp-programming/examples/factorial">C++ Program to Find Factorial</a></li>

</ul>

<hr>


</div>
</section>
<section id="third4">
<h1>C++ while and do...while Loop</h1>
<div class="content">
    <p id="introduction">In computer programming, loops are used to repeat a block of code.</p>

<p>For example, let's say we want to show a message 100 times. Then instead of writing the print statement 100 times, we can use a loop.</p>

<p>That was just a simple example;&nbsp;we can achieve much more efficiency and sophistication in our programs by making effective use of&nbsp;loops.</p>

<p>There are <strong>3</strong> types of loops in C++.</p>

<ol>
  <li><code>for</code> loop</li>
  <li><code>while</code> loop</li>
  <li><code>do...while</code> loop</li>
</ol>

<p>In the previous tutorial, we learned about the <a href="/cpp-programming/for-loop">C++ for loop</a>. Here, we are going to learn about <code>while</code> and <code>do...while</code> loops.</p>

<hr>
<h2 id="while-loop">C++ while Loop</h2>

<p>The syntax of the <code>while</code> loop is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">while</span> (condition) {
  <span class="hljs-comment">// body of the loop</span>
}</code></pre>

<p>Here,</p>

<ul>
  <li>A <code>while</code> loop evaluates the <code>condition</code></li>
  <li>If the <code>condition</code> evaluates to <code>true</code>, the code inside the <code>while</code> loop is executed.</li>
  <li>The <code>condition</code> is evaluated again.</li>
  <li>This process continues until the <code>condition</code> is <code>false</code>.</li>
  <li>When the <code>condition</code> evaluates to <code>false</code>, the loop terminates.</li>
</ul>

<p>To learn more about the <code>conditions</code>, visit <a href="/cpp-programming/relational-logical-operators">C++ Relational and Logical Operators</a>.</p>

<hr>
<h3>Flowchart of while Loop</h3>

<figure><img alt="C++ while loop flowchart" height="444" src="assets/images/cpp-while-loop-flowchart.png" title="C++ while loop flowchart" width="340">
  <figcaption>Flowchart of C++ while loop</figcaption>
</figure>

<hr>
<h3 id="example1">Example 1: Display Numbers from 1 to 5</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ Program to print numbers from 1 to 5</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; 

  <span class="hljs-comment">// while loop from 1 to 5</span>
  <span class="hljs-keyword">while</span> (i &lt;= <span class="hljs-number">5</span>) {
      <span class="hljs-built_in">cout</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">" "</span>;
      ++i;
  }
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1 2 3 4 5</samp></pre>

<p>Here is how the program works.</p>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>Iteration</th>
              <th>Variable</th>
              <th>i &lt;= 5</th>
              <th>Action</th>
          </tr>
          <tr>
              <td>1st</td>
              <td><code>i = 1</code></td>
              <td><code>true</code></td>
              <td><samp>1</samp> is printed and <code>i</code> is increased to <code>2</code>.</td>
          </tr>
          <tr>
              <td>2nd</td>
              <td><code>i = 2</code></td>
              <td><code>true</code></td>
              <td><samp>2</samp> is printed and <code>i</code> is increased to <code>3</code>.</td>
          </tr>
          <tr>
              <td>3rd</td>
              <td><code>i = 3</code></td>
              <td><code>true</code></td>
              <td><samp>3</samp> is printed and <code>i</code> is increased to <code>4</code></td>
          </tr>
          <tr>
              <td>4th</td>
              <td><code>i = 4</code></td>
              <td><code>true</code></td>
              <td><samp>4</samp> is printed and <code>i</code> is increased to <code>5</code>.</td>
          </tr>
          <tr>
              <td>5th</td>
              <td><code>i = 5</code></td>
              <td><code>true</code></td>
              <td><samp>5</samp> is printed and <code>i</code> is increased to <code>6</code>.</td>
          </tr>
          <tr>
              <td>6th</td>
              <td><code>i = 6</code></td>
              <td><code>false</code></td>
              <td>The loop is terminated</td>
          </tr>
      </tbody>
  </table>
</div>

<hr>
<h3 id="example2">Example 2: Sum of Positive Numbers Only</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// program to find the sum of positive numbers</span>
<span class="hljs-comment">// if the user enters a negative number, the loop ends</span>
<span class="hljs-comment">// the negative number entered is not added to the sum</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number;
  <span class="hljs-keyword">int</span> sum = <span class="hljs-number">0</span>;

  <span class="hljs-comment">// take input from the user</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a number: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; number;

  <span class="hljs-keyword">while</span> (number &gt;= <span class="hljs-number">0</span>) {
      <span class="hljs-comment">// add all positive numbers</span>
      sum += number;

      <span class="hljs-comment">// take input again if the number is positive</span>
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a number: "</span>;
      <span class="hljs-built_in">cin</span> &gt;&gt; number;
  }

  <span class="hljs-comment">// display the sum</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nThe sum is "</span> &lt;&lt; sum &lt;&lt; <span class="hljs-built_in">endl</span>;
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a number: 6
Enter a number: 12
Enter a number: 7
Enter a number: 0
Enter a number: -2

The sum is 25</samp></pre>

<p>In this program, the user is prompted to enter a number, which is stored in the variable <var>number</var>.</p>

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
  </div><div class="clearfix"></div><p>In order to store the sum of the numbers, we declare a variable <var>sum</var> and initialize it to the value of <code>0</code>.</p>

<p>The <code>while</code> loop continues until the user enters a negative number. During each iteration, the number entered by the user is added to the <var>sum</var> variable.</p>

<p>When the user enters a negative number, the loop terminates. Finally, the total sum is displayed.</p>

<hr>
<h2 id="do-while-loop">C++ do...while Loop</h2>

<p>The <code>do...while</code> loop is a variant of the <code>while</code> loop with one important difference: the body of <code>do...while</code> loop is executed once before the <code>condition</code> is checked.</p>

<p>Its syntax is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">do</span> {
 <span class="hljs-comment">// body of loop;</span>
}
<span class="hljs-keyword">while</span> (condition);</code></pre>

<p>Here,</p>

<ul>
  <li>The body of the loop is executed at first. Then the <code>condition</code> is evaluated.</li>
  <li>If the <code>condition</code> evaluates to <code>true</code>, the body of the loop inside the <code>do</code> statement is executed again.</li>
  <li>The <code>condition</code> is evaluated once again.</li>
  <li>If the <code>condition</code> evaluates to <code>true</code>, the body of the loop inside the <code>do</code> statement is executed again.</li>
  <li>This process continues until the <code>condition</code> evaluates to <code>false</code>. Then the loop stops.</li>
</ul>

<hr>
<h3>Flowchart of do...while Loop</h3>

<figure><img alt="C++ do...while loop flowchart" height="434" src="assets/images/cpp-do-while-loop-flowchart.png" title="C++ do...while loop flowchart" width="340">
  <figcaption>Flowchart of C++ do...while loop</figcaption>
</figure>

<hr>
<h3 id="example3">Example 3: Display Numbers from 1 to 5</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ Program to print numbers from 1 to 5</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; 

  <span class="hljs-comment">// do...while loop from 1 to 5</span>
  <span class="hljs-keyword">do</span> {
      <span class="hljs-built_in">cout</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">" "</span>;
      ++i;
  }
  <span class="hljs-keyword">while</span> (i &lt;= <span class="hljs-number">5</span>);
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1 2 3 4 5</samp></pre>

<p>Here is how the program works.</p>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>Iteration</th>
              <th>Variable</th>
              <th>i &lt;= 5</th>
              <th>Action</th>
          </tr>
          <tr>
              <td>&nbsp;</td>
              <td><code>i = 1</code></td>
              <td>not checked</td>
              <td><samp>1</samp> is printed and <code>i</code> is increased to 2</td>
          </tr>
          <tr>
              <td>1st</td>
              <td><code>i = 2</code></td>
              <td><code>true</code></td>
              <td><samp>2</samp> is printed and <code>i</code> is increased to 3</td>
          </tr>
          <tr>
              <td>2nd</td>
              <td><code>i = 3</code></td>
              <td><code>true</code></td>
              <td><samp>3</samp> is printed and <code>i</code> is increased to 4</td>
          </tr>
          <tr>
              <td>3rd</td>
              <td><code>i = 4</code></td>
              <td><code>true</code></td>
              <td><samp>4</samp> is printed and <code>i</code> is increased to 5</td>
          </tr>
          <tr>
              <td>4th</td>
              <td><code>i = 5</code></td>
              <td><code>true</code></td>
              <td><samp>5</samp> is printed and <code>i</code> is increased to <strong>6</strong></td>
          </tr>
          <tr>
              <td>5th</td>
              <td><code>i = 6</code></td>
              <td><code>false</code></td>
              <td>The loop is terminated</td>
          </tr>
      </tbody>
  </table>
</div>

<hr>
<h3 id="example4">Example 4: Sum of Positive Numbers Only</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// program to find the sum of positive numbers</span>
<span class="hljs-comment">// If the user enters a negative number, the loop ends</span>
<span class="hljs-comment">// the negative number entered is not added to the sum</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number = <span class="hljs-number">0</span>;
  <span class="hljs-keyword">int</span> sum = <span class="hljs-number">0</span>;

  <span class="hljs-keyword">do</span> {
      sum += number;

      <span class="hljs-comment">// take input from the user</span>
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a number: "</span>;
      <span class="hljs-built_in">cin</span> &gt;&gt; number;
  }
  <span class="hljs-keyword">while</span> (number &gt;= <span class="hljs-number">0</span>);
  
  <span class="hljs-comment">// display the sum</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nThe sum is "</span> &lt;&lt; sum &lt;&lt; <span class="hljs-built_in">endl</span>;
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output 1</strong></p>

<pre><samp>Enter a number: 6
Enter a number: 12
Enter a number: 7
Enter a number: 0
Enter a number: -2

The sum is 25</samp></pre>

<p>Here, the <code>do...while</code> loop continues until the user enters a negative number. When the number is negative, the loop terminates; the negative number is not added to the <code>sum</code> variable.</p>

<p><strong>Output 2</strong></p>

<pre><samp>Enter a number: -6
The sum is 0.</samp></pre>

<p>The body of the <code>do...while</code> loop runs only once if the user enters a negative number.</p>

<hr>
<h2 id="infinite-loop">Infinite while loop</h2>

<p>If the <code>condition</code> of a loop is always <code>true</code>, the loop runs for infinite times (until the memory is full). For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// infinite while loop</span>
<span class="hljs-keyword">while</span>(<span class="hljs-literal">true</span>) {
  <span class="hljs-comment">// body of the loop</span>
}</code></pre>

<p>Here is an example of an infinite <code>do...while</code> loop.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// infinite do...while loop</span>

<span class="hljs-keyword">int</span> count = <span class="hljs-number">1</span>;

<span class="hljs-keyword">do</span> {
 <span class="hljs-comment">// body of loop</span>
} 
<span class="hljs-keyword">while</span>(count == <span class="hljs-number">1</span>);</code></pre>

<p>In the above programs, the <code>condition</code> is always <code>true</code>. Hence, the loop body will run for infinite times.</p>

<hr>
<h2 id="for-while">for vs while loops</h2>

<p>A <code>for</code> loop is usually used when the number of iterations is known. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// This loop is iterated 5 times</span>
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;=<span class="hljs-number">5</span>; ++i) {
 <span class="hljs-comment">// body of the loop</span>
}</code></pre>

<p>Here, we know that the for-loop will be executed 5 times.</p>

<p>However, <code>while</code> and <code>do...while</code> loops are usually used when the number of iterations is unknown. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">while</span> (condition) {
  <span class="hljs-comment">// body of the loop</span>
}</code></pre>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/examples/fibonacci-series">C++ Program to Display Fibonacci Series</a></li>
  <li><a href="https://www.programiz.com/cpp-programming/examples/hcf-gcd">C++ Program to Find GCD</a></li>
  <li><a href="/cpp-programming/examples/lcm">C++ Program to Find LCM</a></li>
</ul>
</div>
</section>
<section id="third5">
<h1>C++ break Statement</h1>
<div class="content">
    <p id="introduction">In C++, the <code>break</code> statement terminates the loop when it is encountered.</p>

<p>The syntax of the <code>break</code> statement is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">break</span>;</code></pre>

<p>Before you learn about the <code>break</code> statement, make sure you know about:</p>

<ul>
  <li><a href="/cpp-programming/for-loop">C++ for loop</a></li>
  <li><a href="/cpp-programming/for-loop">C++ if...else</a></li>
  <li><a href="/cpp-programming/do-while-loop">C++ while loop</a></li>
</ul>

<hr>
<h2 id="working">Working of C++ break Statement</h2>

<figure><img src="assets/images/cpp-break-statement.png" title="Working of break statement in C++" alt="Working of C++ break Statement" width="400" height="477">
  <figcaption>Working of break statement in C++</figcaption></figure>
<hr>
<h2 id="example1">Example 1: break with for loop</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// program to print the value of i</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= <span class="hljs-number">5</span>; i++) {
      <span class="hljs-comment">// break condition     </span>
      <span class="hljs-keyword">if</span> (i == <span class="hljs-number">3</span>) {
          <span class="hljs-keyword">break</span>;
      }
      <span class="hljs-built_in">cout</span> &lt;&lt; i &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1
2</samp></pre>

<p>In the above program, the <code>for</code> loop is used to print the value of <var>i</var> in each iteration. Here, notice the code:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">if</span> (i == <span class="hljs-number">3</span>) {
  <span class="hljs-keyword">break</span>;
}</code></pre>

<p>This means, when <var>i</var> is equal to <strong>3</strong>, the <code>break</code> statement terminates the loop. Hence, the output doesn't include values greater than or equal to 3.</p>

<p class="note-tip">Note: The <code>break</code> statement is usually used with decision-making statements.</p>

<hr>
<h2 id="example2">Example 2: break with while loop</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// program to find the sum of positive numbers</span>
<span class="hljs-comment">// if the user enters a negative numbers, break ends the loop</span>
<span class="hljs-comment">// the negative number entered is not added to sum</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number;
  <span class="hljs-keyword">int</span> sum = <span class="hljs-number">0</span>;

  <span class="hljs-keyword">while</span> (<span class="hljs-literal">true</span>) {
      <span class="hljs-comment">// take input from the user</span>
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a number: "</span>;
      <span class="hljs-built_in">cin</span> &gt;&gt; number;

      <span class="hljs-comment">// break condition</span>
      <span class="hljs-keyword">if</span> (number &lt; <span class="hljs-number">0</span>) {
          <span class="hljs-keyword">break</span>;
      }

      <span class="hljs-comment">// add all positive numbers</span>
      sum += number;
  }

  <span class="hljs-comment">// display the sum</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The sum is "</span> &lt;&lt; sum &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Enter a number: 1
Enter a number: 2
Enter a number: 3
Enter a number: -5
The sum is 6. </samp></pre>

<p>In the above program, the user enters a number. The <code>while</code> loop is used to print the total sum of numbers entered by the user. Here, notice the code,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">if</span>(number &lt; <span class="hljs-number">0</span>) {
  <span class="hljs-keyword">break</span>;
}</code></pre>

<p>This means, when the user enters a negative number, the <code>break</code> statement terminates the loop and codes outside the loop are executed.</p>

<p>The <code>while</code> loop continues until the user enters a negative number.</p>

<hr>
<h2 id="nested">break with Nested loop</h2>

<p>When <code>break</code> is used with nested loops, <code>break</code> terminates the inner loop. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// using break statement inside</span>
<span class="hljs-comment">// nested for loop</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number;
  <span class="hljs-keyword">int</span> sum = <span class="hljs-number">0</span>;

  <span class="hljs-comment">// nested for loops</span>

  <span class="hljs-comment">// first loop</span>
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= <span class="hljs-number">3</span>; i++) {
      <span class="hljs-comment">// second loop</span>
      <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">1</span>; j &lt;= <span class="hljs-number">3</span>; j++) {
          <span class="hljs-keyword">if</span> (i == <span class="hljs-number">2</span>) {
              <span class="hljs-keyword">break</span>;
          }
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"i = "</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">", j = "</span> &lt;&lt; j &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>i = 1, j = 1
i = 1, j = 2
i = 1, j = 3
i = 3, j = 1
i = 3, j = 2
i = 3, j = 3</samp></pre>

<p>In the above program, the <code>break</code> statement is executed when <code>i == 2</code>. It terminates the inner loop, and the control flow of the program moves to the outer loop.</p>

<p>Hence, the value of <samp>i = 2</samp> is never displayed in the output.</p>

<hr>
<p>The <code>break</code> statement is also used with the <code>switch</code> statement. To learn more, visit <a href="/cpp-programming/switch-case">C++ switch statement</a>.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/continue-statement">C++ continue Statement</a> </li>
</ul>

</div>
</section>
<section id="third6">
<h1>C++ continue Statement</h1>
<div class="content">
    <p id="introduction">In computer programming, the <code>continue</code> statement is used to skip the current iteration of the loop and the control of the program goes to the next iteration.</p>

<p>The syntax of the <code>continue</code> statement is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">continue</span>;</code></pre>

<p>Before you learn about the continue statement, make sure you know about,</p>

<ul>
  <li><a href="/cpp-programming/for-loop" title="C++ for loop">C++ for loop</a></li>
  <li><a href="/cpp-programming/for-loop" title="C++ if...else">C++ if...else</a></li>
  <li><a href="/cpp-programming/do-while-loop" title="C++ while loop">C++ while loop</a></li>
</ul>

<hr>
<h2 id="working">Working of C++ continue Statement</h2>

<figure><img alt="Working of C++ continue Statement" height="452" src="assets/images/cpp-continue-statement_1.png" title="Working of continue statement in C++" width="420">
  <figcaption>Working of continue statement in C++</figcaption>
</figure>

<hr>
<h2 id="continue-for">Example 1: continue with for loop</h2>

<p>In a <code>for</code> loop, <code>continue</code> skips the current iteration and the control flow jumps to the <code>update</code> expression.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// program to print the value of i</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= <span class="hljs-number">5</span>; i++) {
      <span class="hljs-comment">// condition to continue</span>
      <span class="hljs-keyword">if</span> (i == <span class="hljs-number">3</span>) {
          <span class="hljs-keyword">continue</span>;
      }

      <span class="hljs-built_in">cout</span> &lt;&lt; i &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>1
2
4
5</samp></pre>

<p>In the above program, we have used the the <code>for</code> loop to print the value of <var>i</var> in each iteration. Here, notice the code,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">if</span> (i == <span class="hljs-number">3</span>) {
  <span class="hljs-keyword">continue</span>;
}</code></pre>

<p>This means</p>

<ul>
  <li>When <var>i</var> is equal to <code>3</code>, the <code>continue</code> statement skips the current iteration and starts the next iteration</li>
  <li>Then, <var>i</var> becomes <code>4</code><strong>,</strong> and the <code>condition</code> is evaluated again.</li>
  <li>Hence, <code>4</code> and <code>5</code> are printed in the next two iterations.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: The <code>continue</code> statement is almost always used with decision-making statements.</p>

<hr>
<h2 id="continue-while">Example 2: continue with while loop</h2>

<p>In a <code>while</code> loop, <code>continue</code> skips the current iteration and control flow of the program jumps back to the <code>while</code> <code>condition</code>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// program to calculate positive numbers till 50 only</span>
<span class="hljs-comment">// if the user enters a negative number,</span>
<span class="hljs-comment">// that number is skipped from the calculation</span>

<span class="hljs-comment">// negative number -&gt; loop terminate</span>
<span class="hljs-comment">// numbers above 50 -&gt; skip iteration</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> sum = <span class="hljs-number">0</span>;
  <span class="hljs-keyword">int</span> number = <span class="hljs-number">0</span>;

  <span class="hljs-keyword">while</span> (number &gt;= <span class="hljs-number">0</span>) {
      <span class="hljs-comment">// add all positive numbers</span>
      sum += number;

      <span class="hljs-comment">// take input from the user</span>
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a number: "</span>;
      <span class="hljs-built_in">cin</span> &gt;&gt; number;

      <span class="hljs-comment">// continue condition</span>
      <span class="hljs-keyword">if</span> (number &gt; <span class="hljs-number">50</span>) {
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The number is greater than 50 and won't be calculated."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
          number = <span class="hljs-number">0</span>;  <span class="hljs-comment">// the value of number is made 0 again</span>
          <span class="hljs-keyword">continue</span>;
      }
  }

  <span class="hljs-comment">// display the sum</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The sum is "</span> &lt;&lt; sum &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Enter a number: 12
Enter a number: 0
Enter a number: 2
Enter a number: 30
Enter a number: 50
Enter a number: 56
The number is greater than 50 and won't be calculated.
Enter a number: 5
Enter a number: -3
The sum is 99 </samp></pre>

<p>In the above program, the user enters a number. The <code>while</code> loop is used to print the total sum of positive numbers entered by the user, as long as the numbers entered are not greater than <code>50</code>.</p>

<p>Notice the use of the <code>continue</code> statement.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"> <span class="hljs-keyword">if</span> (number &gt; <span class="hljs-number">50</span>){
  <span class="hljs-keyword">continue</span>;
}</code></pre>

<ul>
  <li>When the user enters a number greater than <code>50</code>, the <code>continue</code> statement skips the current iteration. Then the control flow of the program goes to the <code>condition</code> of <code>while</code> loop.</li>
  <li>When the user enters a number less than <code>0</code>, the loop terminates.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: The <code>continue</code> statement works in the same way for the <code>do...while</code> loops.</p>

<hr>
<h2 id="nested">continue with Nested loop</h2>

<p>When <code>continue</code> is used with nested loops, it skips the current iteration of the inner loop. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// using continue statement inside</span>
<span class="hljs-comment">// nested for loop</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number;
  <span class="hljs-keyword">int</span> sum = <span class="hljs-number">0</span>;

  <span class="hljs-comment">// nested for loops</span>

  <span class="hljs-comment">// first loop</span>
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= <span class="hljs-number">3</span>; i++) {
      <span class="hljs-comment">// second loop</span>
      <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">1</span>; j &lt;= <span class="hljs-number">3</span>; j++) {
          <span class="hljs-keyword">if</span> (j == <span class="hljs-number">2</span>) {
              <span class="hljs-keyword">continue</span>;
          }
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"i = "</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">", j = "</span> &lt;&lt; j &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>i = 1, j = 1
i = 1, j = 3
i = 2, j = 1
i = 2, j = 3
i = 3, j = 1
i = 3, j = 3</samp></pre>

<p>In the above program, when the <code>continue</code> statement executes, it skips the current iteration in the inner loop. And the control of the program moves to the <strong>update expression</strong> of the inner loop.</p>

<p>Hence, the value of <samp>j = 2</samp> is never displayed in the output.</p>

<p class="note-tip"><strong>Note</strong>: The <a href="/cpp-programming/break-statement" title="C++ break Statement">break statement</a> terminates the loop entirely. However, the <code>continue</code> statement only skips the current iteration.</p>
</div>
</section>
<section id="third7">
<h1>C++ goto Statement</h1>
<div class="content">
    <p>In C++ programming, the goto statement is used for altering the normal sequence of program execution by transferring control to some other part of the program.</p>

<h2>Syntax of goto Statement</h2>

<pre><samp>goto label;
... .. ...
... .. ...
... .. ...
label: 
statement;
... .. ...</samp></pre>

<p>In the syntax above, <var>label</var> is an <a href="/cpp-programming/keywords-identifiers#identifiers">identifier</a>. When <code>goto label;</code> is encountered, the control of program jumps to <code>label:</code> and executes the code below it.</p>

<figure><img src="assets/images/cpp-goto-working.png" title="" alt="Working of goto statement in C++ programming" width="480" height="200">
  <figcaption>Working of goto in C++</figcaption></figure>
<h3>Example: goto Statement</h3>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// This program calculates the average of numbers entered by the user.</span>
<span class="hljs-comment">// If the user enters a negative number, it ignores the number and </span>
<span class="hljs-comment">// calculates the average number entered before it.</span>

<span class="hljs-meta"># <span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">float</span> num, average, sum = <span class="hljs-number">0.0</span>;
  <span class="hljs-keyword">int</span> i, n;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Maximum number of inputs: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; n;

  <span class="hljs-keyword">for</span>(i = <span class="hljs-number">1</span>; i &lt;= n; ++i)
  {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter n"</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">": "</span>;
      <span class="hljs-built_in">cin</span> &gt;&gt; num;
      
      <span class="hljs-keyword">if</span>(num &lt; <span class="hljs-number">0.0</span>)
      {
         <span class="hljs-comment">// Control of the program move to jump:</span>
          <span class="hljs-keyword">goto</span> jump;
      } 
      sum += num;
  }
  
jump:
  average = sum / (i - <span class="hljs-number">1</span>);
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nAverage = "</span> &lt;&lt; average;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Maximum number of inputs: 10
Enter n1: 2.3
Enter n2: 5.6
Enter n3: -5.6

Average = 3.95</samp></pre>

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
  </div><div class="clearfix"></div><p>You can write any C++ program without the use of <code>goto</code> statement and is generally considered a good idea not to use them.</p>

<h3>Reason to Avoid goto Statement</h3>

<p>The goto statement gives the power to jump to any part of a program but, makes the logic of the program complex and tangled.</p>

<p>In modern programming, the goto statement is considered a harmful construct and a bad programming practice.</p>

<p>The goto statement can be replaced in most of C++ program with the use of <a href="/cpp-programming/break-statement">break</a> and <a href="/cpp-programming/continue-statement">continue</a> statements.</p>

</div>
</section>
<section id="third8">
<h1>C++ switch..case Statement</h1>
<div class="content">
    <p id="introduction">The <code>switch</code> statement allows us to execute a block of code among many alternatives.</p>

<p>You can do the same thing with the <a href="/cpp-programming/if-else">if...else</a> statement. However, the syntax of the switch statement is much easier to read and write.</p>

<hr>
<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">switch</span> (expression)  {
  <span class="hljs-keyword">case</span> constant1:
      <span class="hljs-comment">// code to be executed if </span>
      <span class="hljs-comment">// expression is equal to constant1;</span>
      <span class="hljs-keyword">break</span>;

  <span class="hljs-keyword">case</span> constant2:
      <span class="hljs-comment">// code to be executed if</span>
      <span class="hljs-comment">// expression is equal to constant2;</span>
      <span class="hljs-keyword">break</span>;
      .
      .
      .
  <span class="hljs-keyword">default</span>:
      <span class="hljs-comment">// code to be executed if</span>
      <span class="hljs-comment">// expression doesn't match any constant</span>
}</code></pre>

<p><strong>How does the switch statement work?</strong></p>

<p>The <code>expression</code> is evaluated once and compared with the values of each <code>case</code> label.</p>

<ul>
  <li>If there is a match, the corresponding code after the matching label is executed. For example, if the value of the <a href="/cpp-programming/variables-literals">variable</a> is equal to <code>constant2</code>, the code after <code>case constant2:</code> is executed until the <a href="/cpp-programming/break-statement">break statement</a> is encountered.</li>
  <li>If there is no match, the code after <code>default:</code> is executed.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: We can do the same thing with the if...else..if ladder. However, the syntax of the switch statement is cleaner and much easier to read and write.</p>

<hr>
<h2 id="flowchart">Flowchart of switch Statement</h2>

<figure><img src="assets/images/cpp-switch-flowchart.png" title="C++ switch...case flowchart" alt="C++ switch...case flowchart" width="520" height="767">
  <figcaption>Flowchart of C++ switch...case statement</figcaption></figure>
<hr>
<h2 id="example">Example: Create a Calculator using the switch Statement</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Program to build a simple calculator using switch Statement</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">char</span> oper;
  <span class="hljs-keyword">float</span> num1, num2;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter an operator (+, -, *, /): "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; oper;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter two numbers: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; num1 &gt;&gt; num2;

  <span class="hljs-keyword">switch</span> (oper) {
      <span class="hljs-keyword">case</span> <span class="hljs-string">'+'</span>:
          <span class="hljs-built_in">cout</span> &lt;&lt; num1 &lt;&lt; <span class="hljs-string">" + "</span> &lt;&lt; num2 &lt;&lt; <span class="hljs-string">" = "</span> &lt;&lt; num1 + num2;
          <span class="hljs-keyword">break</span>;
      <span class="hljs-keyword">case</span> <span class="hljs-string">'-'</span>:
          <span class="hljs-built_in">cout</span> &lt;&lt; num1 &lt;&lt; <span class="hljs-string">" - "</span> &lt;&lt; num2 &lt;&lt; <span class="hljs-string">" = "</span> &lt;&lt; num1 - num2;
          <span class="hljs-keyword">break</span>;
      <span class="hljs-keyword">case</span> <span class="hljs-string">'*'</span>:
          <span class="hljs-built_in">cout</span> &lt;&lt; num1 &lt;&lt; <span class="hljs-string">" * "</span> &lt;&lt; num2 &lt;&lt; <span class="hljs-string">" = "</span> &lt;&lt; num1 * num2;
          <span class="hljs-keyword">break</span>;
      <span class="hljs-keyword">case</span> <span class="hljs-string">'/'</span>:
          <span class="hljs-built_in">cout</span> &lt;&lt; num1 &lt;&lt; <span class="hljs-string">" / "</span> &lt;&lt; num2 &lt;&lt; <span class="hljs-string">" = "</span> &lt;&lt; num1 / num2;
          <span class="hljs-keyword">break</span>;
      <span class="hljs-keyword">default</span>:
          <span class="hljs-comment">// operator is doesn't match any case constant (+, -, *, /)</span>
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Error! The operator is not correct"</span>;
          <span class="hljs-keyword">break</span>;
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output 1</strong></p>

<pre><samp>Enter an operator (+, -, *, /): +
Enter two numbers: 
2.3
4.5
2.3 + 4.5 = 6.8</samp></pre>

<p><strong>Output 2</strong></p>

<pre><samp>Enter an operator (+, -, *, /): -
Enter two numbers: 
2.3
4.5
2.3 - 4.5 = -2.2</samp></pre>

<p><strong>Output 3</strong></p>

<pre><samp>Enter an operator (+, -, *, /): *
Enter two numbers: 
2.3
4.5
2.3 * 4.5 = 10.35</samp></pre>

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
  </div><div class="clearfix"></div><p><strong>Output 4</strong></p>

<pre><samp>Enter an operator (+, -, *, /): /
Enter two numbers: 
2.3
4.5
2.3 / 4.5 = 0.511111</samp></pre>

<p><strong>Output 5</strong></p>

<pre><samp>Enter an operator (+, -, *, /): ?
Enter two numbers: 
2.3
4.5
Error! The operator is not correct.</samp></pre>

<p>In the above program, we are using the <code>switch...case</code> statement to perform addition, subtraction, multiplication, and division.</p>

<p><strong>How This Program Works</strong></p>

<ol>
  <li>We first prompt the user to enter the desired <a href="/cpp-programming/operators">operator</a>. This input is then stored in the <code>char</code> variable named <var>oper</var>.</li>
  <li>We then prompt the user to enter two numbers, which are stored in the float variables <var>num1</var> and <var>num2</var>.</li>
  <li>The <code>switch</code> statement is then used to check the operator entered by the user:
      <ol type="a">
          <li>If the user enters <code>+</code>, addition is performed on the numbers.</li>
          <li>If the user enters <code>-</code>, subtraction is performed on the numbers.</li>
          <li>If the user enters <code>*</code>, multiplication is performed on the numbers.</li>
          <li>If the user enters <code>/</code>, division is performed on the numbers.</li>
          <li>If the user enters any other character, the default code is printed.</li>
      </ol>
          </li>
      </ol>
<p>Notice that the <a href="/cpp-programming/break-statement">break statement</a> is used inside each <code>case</code> block. This terminates the <code>switch</code> statement.</p>

<p>If the <code>break</code> statement is not used, all cases after the correct <code>case</code> are executed.</p>

<p>You can visit the article on <a href="/cpp-programming/examples/calculator-switch-case">C++ Program to Make a Simple Calculator</a> to learn more.</p>

</div>
</section>
<section id="third9">
<h1>C++ Ternary Operator</h1>
<div class="content">
    <p id="introduction">In C++, the ternary operator is a concise, inline method used to execute one of two expressions based on a condition. It is also called the conditional operator.</p>

<hr>
<h2 id="ternary-operator">Ternary Operator in C++</h2>

<p>A ternary operator evaluates the test condition and executes an expression out of two based on the result of the condition.</p>

<p><strong>Syntax</strong></p>

<pre style="max-height: 600px;"><code class="cpp hljs">condition ? expression1 : expression2;</code></pre>

<p>Here, <code>condition</code> is evaluated and</p>

<ul>
  <li>if <code>condition</code> is <code>true</code>, <code>expression1</code> is executed.</li>
  <li>if <code>condition</code> is <code>false</code>, <code>expression2</code> is executed.</li>
</ul>

<p>The ternary operator takes <strong>3 operands</strong> (<code>condition</code>, <code>expression1</code> and <code>expression2</code>). Hence, the name <strong>ternary operator</strong>.</p>

<hr>
<h2 id="example">Example: C++ Ternary Operator</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">double</span> marks;

<span class="hljs-comment">// take input from users</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter your marks: "</span>;
<span class="hljs-built_in">cin</span> &gt;&gt; marks;

<span class="hljs-comment">// ternary operator checks if</span>
<span class="hljs-comment">// marks is greater than 40</span>
<span class="hljs-built_in">string</span> result = (marks &gt;= <span class="hljs-number">40</span>) ? <span class="hljs-string">"passed"</span> : <span class="hljs-string">"failed"</span>;

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You "</span> &lt;&lt; result &lt;&lt; <span class="hljs-string">" the exam."</span>;

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output 1</strong></p>

<pre><samp>Enter your marks: 80
You passed the exam.</samp></pre>

<p>Suppose the user enters <strong>80</strong>. Then, the condition <code>marks &gt;= 40</code> evaluates to <code>true</code>. Hence, the first expression <code>"passed"</code> is assigned to <var>result</var>.</p>

<p><strong>Output 2</strong></p>

<pre><samp>Enter your marks: 39.5
You failed the exam.</samp></pre>

<p>Now, suppose the user enters <strong>39.5</strong>. Then, the condition <code>marks &gt;= 40</code> evaluates to <code>false</code>. Hence, the second expression <code>"failed"</code> is assigned to <var>result</var>.</p>

<p class="note-tip"><strong>Note:</strong> We should only use the ternary operator if the resulting statement is short.</p>

<div class="faq-section"><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">Ternary Operator Vs. if…else

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p><strong>1. Ternary Operator for Concise Code</strong></p>

<p>The ternary operator is best for simple, inline conditional assignments where readability is not compromised. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> age = <span class="hljs-number">20</span>;
<span class="hljs-built_in">string</span> status;

status = (age &gt;= <span class="hljs-number">18</span>) ? <span class="hljs-string">"Adult"</span> : <span class="hljs-string">"Minor"</span>;</code></pre>

<p>In this example, the condition <code>age &gt;= 18</code> is evaluated. If it's true, <code>Adult</code> is assigned to status; if it's false, <code>Minor</code> is assigned.</p>

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
  </div><div class="clearfix"></div><p>This is much more concise than using a full <code>if...else</code> statement, which would look like this:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> age = <span class="hljs-number">20</span>;
<span class="hljs-built_in">string</span> status;

<span class="hljs-keyword">if</span> (age &gt;= <span class="hljs-number">18</span>) {
  status = <span class="hljs-string">"Adult"</span>;
} <span class="hljs-keyword">else</span> {
  status = <span class="hljs-string">"Minor"</span>;
}</code></pre>

<p>Here, the <code>if...else</code> statement takes up more lines and can clutter code when used for many simple conditional assignments.</p>

<p><strong>2. if...else for Clarity in Complex Conditions</strong></p>

<p>The <code>if...else</code> statement is better suited for complex decision-making processes and when clarity and readability are prioritized over brevity.</p>

<p>Suppose you need to categorize weather based on multiple conditions. Using a ternary operator with multiple conditional statements would be cumbersome and hard to read. In such cases, we use <code>if...else</code>.</p>

<p>Let's look at an example.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> temperature = <span class="hljs-number">25</span>;
<span class="hljs-built_in">string</span> category;

<span class="hljs-keyword">if</span> (temperature &lt; <span class="hljs-number">10</span>) {
  category = <span class="hljs-string">"Cold"</span>;
} <span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (temperature &lt;= <span class="hljs-number">25</span>) {
  category = <span class="hljs-string">"Moderate"</span>;
} <span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (temperature &gt; <span class="hljs-number">25</span>) {
  category = <span class="hljs-string">"Hot"</span>;
} <span class="hljs-keyword">else</span> {
  category = <span class="hljs-string">"Inhabitable"</span>;
}</code></pre>

<p><strong>3. Ternary Operator Implicitly Returns a Value</strong></p>

<p>Let's look at an example to justify this point.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> number = <span class="hljs-number">-4</span>;
<span class="hljs-built_in">string</span> result;

<div class="line-highlight"><span class="hljs-comment">// ternary operator assigns value directly</span>
result = (number &gt; <span class="hljs-number">0</span>) ? <span class="hljs-string">"Positive Number"</span> : <span class="hljs-string">"Negative Number"</span>;</div></code></pre>

<p>Here, the ternary operator returns the value based on the condition <code>(number&gt;0)</code>. The returned value is stored in the <var>result</var> variable.</p>

<p>In contrast, <code>if...else</code> does not inherently return a value. Thus, assignment to a variable is explicit.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> number = <span class="hljs-number">-4</span>;
<span class="hljs-built_in">string</span> result;

<div class="line-highlight"><span class="hljs-comment">// explicit assignment with if...else</span>
<span class="hljs-keyword">if</span> (number &gt; <span class="hljs-number">0</span>)
result = <span class="hljs-string">"Positive Number"</span>;
<span class="hljs-keyword">else</span>
result = <span class="hljs-string">"Negative Number"</span>;</div></code></pre>

</div></div></div></div></div></div></div></div></div>

<hr>
<h2 id="nested-ternary">Nested Ternary Operators</h2>

<p>It is also possible to use one ternary operator inside another ternary operator. It is called the nested ternary operator in C++.</p>

<p>Here's a program to find whether a number is positive, negative, or zero using the nested ternary operator.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-keyword">int</span> number = <span class="hljs-number">0</span>;
<span class="hljs-built_in">string</span> result;

<span class="hljs-comment">// nested ternary operator to find whether</span>
<span class="hljs-comment">// number is positive, negative, or zero</span>
result = (number == <span class="hljs-number">0</span>) ? <span class="hljs-string">"Zero"</span> : ((number &gt; <span class="hljs-number">0</span>) ? <span class="hljs-string">"Positive"</span> : <span class="hljs-string">"Negative"</span>);

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Number is "</span> &lt;&lt; result;

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Number is Zero</samp></pre>

<p>In the above example, notice the use of ternary operators,</p>

<pre style="max-height: 600px;"><code class="cpp hljs">(number == <span class="hljs-number">0</span>) ? <span class="hljs-string">"Zero"</span> : ((number &gt; <span class="hljs-number">0</span>) ? <span class="hljs-string">"Positive"</span> : <span class="hljs-string">"Negative"</span>);</code></pre>

<p>Here,</p>

<ul>
  <li><code>(number == 0)</code> is the first test condition that checks if <var>number</var> is 0 or not. If it is, then it assigns the string value <code>"Zero"</code> to <var>result</var>.</li>
  <li>Else, the second test condition <code>(number &gt; 0)</code> is evaluated if the first condition is <code>false</code>.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: It is not recommended to use nested ternary operators. This is because it makes our code more complex.</p>

</div>
</section>


<!-- four menu sections -->
<section id="four1">
<h1>C++ Functions</h1>
<div class="content">
    <p id="introduction">A function is a block of code that performs a specific task.</p>

<p>Suppose we need to create a program to create a circle and color it. We can create two functions to solve this problem:</p>

<ul>
  <li>a function to draw the circle</li>
  <li>a function to color the circle</li>
</ul>

<p>Dividing a complex problem into smaller chunks makes our program easy to understand and reusable.</p>

<p>There are two types of function:</p>

<ol>
  <li><strong>Standard Library Functions:</strong> Predefined in C++</li>
  <li><strong>User-defined Function:</strong> Created by users</li>
</ol>

<p>In this tutorial, we will focus mostly on user-defined functions.</p>

<hr>
<h2 id="user-defined">C++ User-defined Function</h2>

<p>C++ allows the programmer to define their own function.</p>

<p>A user-defined function groups code to perform a specific task and that group of code is given a name (identifier).</p>

<p>When the function is invoked from any part of the program, it all executes the codes defined in the body of the function.</p>

<hr>
<h3 id="declare">C++ Function Declaration</h3>

<p>The syntax to declare a function is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function">returnType <span class="hljs-title">functionName</span> <span class="hljs-params">(parameter1, parameter2,...)</span> </span>{
  <span class="hljs-comment">// function body   </span>
}</code></pre>

<p>Here's an example of a function declaration.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// function declaration</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">greet</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Hello World"</span>;
}</code></pre>

<p>Here,</p>

<ul>
  <li>the name of the function is <code>greet()</code></li>
  <li>the return type of the function is <code>void</code></li>
  <li>the empty parentheses mean it doesn't have any parameters</li>
  <li>the function body is written inside <code>{}</code></li>
</ul>

<p class="note-tip"><strong>Note:</strong> We will learn about <code>returnType</code> and <code>parameters</code> later in this tutorial.</p>

<hr>
<h3 id="call">Calling a Function</h3>

<p>In the above program, we have declared a function named <code>greet()</code>. To use the <code>greet()</code> function, we need to call it.</p>

<p>Here's how we can call the above <code>greet()</code> function.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
   
  <span class="hljs-comment">// calling a function   </span>
  greet(); 

}</code></pre>

<figure><img src="assets/images/cpp-function-call.png" title="Working of C++ function" alt="Working of C++ function" width="420" height="280">
  <figcaption>How Function works in C++</figcaption></figure>
<hr>
<h3 id="example1">Example 1: Display a Text</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// declaring a function</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">greet</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Hello there!"</span>;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// calling the function</span>
  greet();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Hello there!</samp></pre>

<hr>
<h3 id="function-parameters">Function Parameters</h3>

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
  </div><div class="clearfix"></div><p>As mentioned above, a function can be declared with parameters (arguments). A parameter is a value that is passed when declaring a function.</p>

<p>For example, let us consider the function below:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">printNum</span><span class="hljs-params">(<span class="hljs-keyword">int</span> num)</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; num;
}</code></pre>

<p>Here, the <code>int</code> variable <var>num</var> is the function parameter.</p>

<p>We pass a value to the function parameter while calling the function.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> n = <span class="hljs-number">7</span>;
  
  <span class="hljs-comment">// calling the function</span>
  <span class="hljs-comment">// n is passed to the function as argument</span>
  printNum(n);
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<hr>
<h3>Example 2: Function with Parameters</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// program to print a text</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// display a number</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayNum</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n1, <span class="hljs-keyword">float</span> n2)</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The int number is "</span> &lt;&lt; n1;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The double number is "</span> &lt;&lt; n2;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
   
   <span class="hljs-keyword">int</span> num1 = <span class="hljs-number">5</span>;
   <span class="hljs-keyword">double</span> num2 = <span class="hljs-number">5.5</span>;

  <span class="hljs-comment">// calling the function</span>
  displayNum(num1, num2);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>The int number is 5
The double number is 5.5</samp></pre>

<p>In the above program, we have used a function that has one <code>int</code> parameter and one <code>double</code> parameter.</p>

<p>We then pass <var>num1</var> and <var>num2</var> as arguments. These values are stored by the function parameters <var>n1</var> and <var>n2</var> respectively.</p>

<figure><img src="assets/images/cpp-function-parameters.png" title="C++ function with parameters" alt="C++ function with parameters" width="520" height="260">
  <figcaption>C++ function with parameters</figcaption></figure>
<p class="note-tip"><strong>Note:</strong> The type of the arguments passed while calling the function must match with the corresponding parameters defined in the function declaration.</p>

<hr>
<h3 id="return">Return Statement</h3>

<p>In the above programs, we have used void in the function declaration. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayNumber</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// code</span>
}</code></pre>

<p>This means the function is not returning any value.</p>

<p>It's also possible to return a value from a function. For this, we need to specify the <code>returnType</code> of the function during function declaration.</p>

<p>Then, the <code>return</code> statement can be used to return a value from a function.</p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">add</span> <span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> b)</span> </span>{
 <span class="hljs-keyword">return</span> (a + b);
}</code></pre>

<p>Here, we have the <a href="/cpp-programming/data-types">data type</a> <code>int</code> instead of <code>void</code>. This means that the function returns an <code>int</code> value.</p>

<p>The code <code>return (a + b);</code> returns the sum of the two parameters as the function value.</p>

<p>The <code>return</code> statement denotes that the function has ended. Any code after <code>return</code> inside the function is not executed.</p>

<hr>
<h3>Example 3: Add Two Numbers</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// program to add two numbers using a function</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// declaring a function</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> b)</span> </span>{
  <span class="hljs-keyword">return</span> (a + b);
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-keyword">int</span> sum;
  
  <span class="hljs-comment">// calling the function and storing</span>
  <span class="hljs-comment">// the returned value in sum</span>
  sum = add(<span class="hljs-number">100</span>, <span class="hljs-number">78</span>);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"100 + 78 = "</span> &lt;&lt; sum &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>100 + 78 = 178</samp></pre>

<p>In the above program, the <code>add()</code> function is used to find the sum of two numbers.</p>

<p>We pass two <code>int</code> literals <code>100</code> and <code>78</code> while calling the function.</p>

<p>We store the returned value of the function in the variable <var>sum</var>, and then we print it.</p>

<figure><img src="assets/images/cpp-function-return-statement.png" title="Working of C++ Function with return statement" alt="Working of C++ Function with return statement " width="520" height="297">
  <figcaption>Working of C++ Function with return statement</figcaption></figure>
<p>Notice that <var>sum</var> is a variable of <code>int</code> type. This is because the return value of <code>add()</code> is of <code>int</code> type.</p>

<hr>
<h3 id="function-prototype">Function Prototype</h3>

<p>In C++, the code of function declaration should be before the function call. However, if we want to define a function after the function call, we need to use the function prototype. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// function prototype</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">int</span>, <span class="hljs-keyword">int</span>)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// calling the function before declaration.</span>
  add(<span class="hljs-number">5</span>, <span class="hljs-number">3</span>);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-comment">// function definition</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> b)</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; (a + b);
}</code></pre>

<p>In the above code, the function prototype is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">int</span>, <span class="hljs-keyword">int</span>)</span></span>;</code></pre>

<p>This provides the compiler with information about the function name and its parameters. That's why we can use the code to call a function before the function has been defined.</p>

<p>The syntax of a function prototype is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function">returnType <span class="hljs-title">functionName</span><span class="hljs-params">(dataType1, dataType2, ...)</span></span>;</code></pre>

<hr>
<h3>Example 4: C++ Function Prototype</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// using function definition after main() function</span>
<span class="hljs-comment">// function prototype is declared before main()</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// function prototype</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">int</span>, <span class="hljs-keyword">int</span>)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> sum;

  <span class="hljs-comment">// calling the function and storing</span>
  <span class="hljs-comment">// the returned value in sum</span>
  sum = add(<span class="hljs-number">100</span>, <span class="hljs-number">78</span>);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"100 + 78 = "</span> &lt;&lt; sum &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-comment">// function definition</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> b)</span> </span>{
  <span class="hljs-keyword">return</span> (a + b);
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>100 + 78 = 178</samp></pre>

<p>The above program is nearly identical to <strong>Example 3</strong>. The only difference is that here, the function is defined <strong>after</strong> the function call.</p>

<p>That's why we have used a function prototype in this example.</p>

<hr>
<h3 id="benefits">Benefits of Using User-Defined Functions</h3>

<ul>
  <li>Functions make the code reusable. We can declare them once and use them multiple times.</li>
  <li>Functions make the program easier as each small task is divided into a function.</li>
  <li>Functions increase readability.</li>
</ul>

<hr>
<h2 id="library-functions">C++ Library Functions</h2>

<p>Library functions are the built-in functions in C++ programming.</p>

<p>Programmers can use library functions by invoking the functions directly; they don't need to write the functions themselves.</p>

<p>Some common library functions in C++ are <a href="/cpp-programming/library-function/cmath/sqrt">sqrt()</a>, <a href="/cpp-programming/library-function/cmath/abs">abs()</a>, <a href="/cpp-programming/library-function/cctype/isdigit">isdigit()</a>, etc.</p>

<p>In order to use library functions, we usually need to include the header file in which these library functions are defined.</p>

<p>For instance, in order to use mathematical functions such as <code>sqrt()</code> and <code>abs()</code>, we need to include the header file <a href="/cpp-programming/library-function/cmath">cmath</a>.</p>

<hr>
<h3>Example 5: C++ Program to Find the Square Root of a Number</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;cmath&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">double</span> number, squareRoot;
  
  number = <span class="hljs-number">25.0</span>;

  <span class="hljs-comment">// sqrt() is a library function to calculate the square root</span>
  squareRoot = <span class="hljs-built_in">sqrt</span>(number);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Square root of "</span> &lt;&lt; number &lt;&lt; <span class="hljs-string">" = "</span> &lt;&lt; squareRoot;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Square root of 25 = 5</samp></pre>

<p>In this program, the <code>sqrt()</code> library function is used to calculate the square root of a number.</p>

<p>The function declaration of <code>sqrt()</code> is defined in the <code>cmath</code> header file. That's why we need to use the code <code>#include &lt;cmath&gt;</code> to use the <code>sqrt()</code> function.</p>

<hr>
<p><strong>Also Read:<br>
</strong></p>

<ul>
  <li><a href="/cpp-programming/library-function">C++ Standard Library functions</a>.</li>
  <li><a href="/cpp-programming/user-defined-function-types">C++ User-defined Function Types</a></li>
</ul>

</div>
</section>
<section id="four2">
<h1>C++ Programming Default Arguments (Parameters)</h1>
<div class="content">
    <p id="introduction">In C++ programming, we can provide default values for <a href="/cpp-programming/function">function</a> parameters.</p>

<p>If a function with default arguments is called without passing arguments, then the default parameters are used.</p>

<p>However, if arguments are passed while calling the function, the default arguments are ignored.</p>

<hr>
<h2 id="working">Working of default arguments</h2>

<figure><img src="assets/images/cpp-default-parameters.png" title="Working of Default Arguments in C++" alt="Working of Default Arguments in C++ Programming" width="620" height="571">
  <figcaption>How default arguments work in C++</figcaption></figure>
<p>We can understand the working of default arguments from the image above:</p>

<ol>
  <li>When <code>temp()</code> is called, both the default parameters are used by the function.</li>
  <li>When <code>temp(6)</code> is called, the first argument becomes <code>6</code> while the default value is used for the second parameter.</li>
  <li>When <code>temp(6, -2.3)</code> is called, both the default parameters are overridden, resulting in <code>i = 6</code> and <code>f = -2.3</code>.</li>
  <li>When <code>temp(3.4)</code> is passed, the function behaves in an undesired way because the second argument cannot be passed without passing the first argument.<br>
<br>
Therefore, <code>3.4</code> is passed as the first argument. Since the first argument has been defined as <code>int</code>, the value that is actually passed is <code>3</code>.</li>
</ol>

<hr>
<h2 id="example">Example: Default Argument</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// defining the default arguments</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">char</span> = <span class="hljs-string">'*'</span>, <span class="hljs-keyword">int</span> = <span class="hljs-number">3</span>)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> count = <span class="hljs-number">5</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"No argument passed: "</span>;
  <span class="hljs-comment">// *, 3 will be parameters</span>
  display(); 
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"First argument passed: "</span>;
   <span class="hljs-comment">// #, 3 will be parameters</span>
  display(<span class="hljs-string">'#'</span>); 
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Both arguments passed: "</span>;
  <span class="hljs-comment">// $, 5 will be parameters</span>
  display(<span class="hljs-string">'$'</span>, count); 

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">char</span> c, <span class="hljs-keyword">int</span> count)</span> </span>{
  <span class="hljs-keyword">for</span>(<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= count; ++i)
  {
      <span class="hljs-built_in">cout</span> &lt;&lt; c;
  }
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>No argument passed: ***
First argument passed: ###
Both arguments passed: $$$$$</samp></pre>

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
  </div><div class="clearfix"></div><p>Here is how this program works:</p>

<ol>
  <li><code>display()</code> is called without passing any arguments. In this case, <code>display()</code> uses both the default parameters <code>c = '*'</code> and <code>n = 1</code>.</li>
  <li><code>display('#')</code> is called with only one argument. In this case, the first becomes <code>'#'</code>. The second default parameter <code>n = 1</code> is retained.</li>
  <li><code>display('#', count)</code> is called with both arguments. In this case, default arguments are not used.</li>
</ol>

<p>We can also define the default parameters in the function definition itself. The program below is equivalent to the one above.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// defining the default arguments</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">char</span> c = <span class="hljs-string">'*'</span>, <span class="hljs-keyword">int</span> count = <span class="hljs-number">3</span>)</span> </span>{
  <span class="hljs-keyword">for</span>(<span class="hljs-keyword">int</span> i = <span class="hljs-number">1</span>; i &lt;= count; ++i) {
      <span class="hljs-built_in">cout</span> &lt;&lt; c;
  }
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> count = <span class="hljs-number">5</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"No argument passed: "</span>;
  <span class="hljs-comment">// *, 3 will be parameters</span>
  display(); 
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"First argument passed: "</span>;
   <span class="hljs-comment">// #, 3 will be parameters</span>
  display(<span class="hljs-string">'#'</span>); 
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Both argument passed: "</span>;
  <span class="hljs-comment">// $, 5 will be parameters</span>
  display(<span class="hljs-string">'$'</span>, count); 

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<hr>
<h2 id="remember">Things to Remember</h2>

<ol>
  <li>Once we provide a default value for a parameter, all subsequent parameters must also have default values. For example,
<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Invalid</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> b = <span class="hljs-number">3</span>, <span class="hljs-keyword">int</span> c, <span class="hljs-keyword">int</span> d)</span></span>;

<span class="hljs-comment">// Invalid</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> b = <span class="hljs-number">3</span>, <span class="hljs-keyword">int</span> c, <span class="hljs-keyword">int</span> d = <span class="hljs-number">4</span>)</span></span>;

<span class="hljs-comment">// Valid</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">int</span> c, <span class="hljs-keyword">int</span> b = <span class="hljs-number">3</span>, <span class="hljs-keyword">int</span> d = <span class="hljs-number">4</span>)</span></span>;</code></pre>

</li>
  <li>If we are defining the default arguments in the function definition instead of the function prototype, then the function must be defined before the function call.
<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Invalid code</span>

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// function call</span>
  display();
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">char</span> c = <span class="hljs-string">'*'</span>, <span class="hljs-keyword">int</span> count = <span class="hljs-number">5</span>)</span> </span>{
  <span class="hljs-comment">// code</span>
}</code></pre>

  </li>
</ol>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/user-defined-function-types">C++ User-defined Function Types</a> </li>
</ul>

</div>
</section>
<section id="four3">
<h1>C++ Function Overloading</h1>
<div class="content">
    <p id="introduction">In C++, two <a href="/cpp-programming/function">functions</a> can have the same name if the number and/or type of arguments passed is different.</p>

<p>These functions having the same name but different arguments are known as overloaded functions. For example:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// same name different arguments</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">test</span><span class="hljs-params">()</span> </span>{ }
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">test</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a)</span> </span>{ }
<span class="hljs-function"><span class="hljs-keyword">float</span> <span class="hljs-title">test</span><span class="hljs-params">(<span class="hljs-keyword">double</span> a)</span> </span>{ }
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">test</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a, <span class="hljs-keyword">double</span> b)</span> </span>{ }</code></pre>

<p>Here, all 4 functions are overloaded functions.</p>

<p>Notice that the return types of all these 4 functions are not the same. Overloaded functions may or may not have different return types but they must have different arguments. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Error code</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">test</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a)</span> </span>{ }
<span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">test</span><span class="hljs-params">(<span class="hljs-keyword">int</span> b)</span></span>{ }</code></pre>

<p>Here, both functions have the same name, the same type, and the same number of arguments. Hence, the compiler will throw an error.</p>

<hr>
<h2 id="example1">Example 1: Overloading Using Different Types of Parameter</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Program to compute absolute value</span>
<span class="hljs-comment">// Works for both int and float</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// function with float type parameter</span>
<span class="hljs-function"><span class="hljs-keyword">float</span> <span class="hljs-title">absolute</span><span class="hljs-params">(<span class="hljs-keyword">float</span> var)</span></span>{
  <span class="hljs-keyword">if</span> (var &lt; <span class="hljs-number">0.0</span>)
      var = -var;
  <span class="hljs-keyword">return</span> var;
}

<span class="hljs-comment">// function with int type parameter</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">absolute</span><span class="hljs-params">(<span class="hljs-keyword">int</span> var)</span> </span>{
   <span class="hljs-keyword">if</span> (var &lt; <span class="hljs-number">0</span>)
       var = -var;
  <span class="hljs-keyword">return</span> var;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  
  <span class="hljs-comment">// call function with int type parameter</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Absolute value of -5 = "</span> &lt;&lt; absolute(<span class="hljs-number">-5</span>) &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// call function with float type parameter</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Absolute value of 5.5 = "</span> &lt;&lt; absolute(<span class="hljs-number">5.5f</span>) &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Absolute value of -5 = 5
Absolute value of 5.5 = 5.5</samp></pre>

<figure><img src="assets/images/cpp-function-overloading-parameters-type.png" title="Working of C++ Function Overloading for absolute()" alt="Working of C++ Function Overloading for absolute()" width="460" height="379">
  <figcaption>Working of overloading for the absolute() function</figcaption></figure>
<p>In this program, we overload the <code>absolute()</code> function. Based on the type of parameter passed during the function call, the corresponding function is called.</p>

<hr>
<h2 id="example2">Example 2: Overloading Using Different Number of Parameters</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// function with 2 parameters</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">int</span> var1, <span class="hljs-keyword">double</span> var2)</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Integer number: "</span> &lt;&lt; var1;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">" and double number: "</span> &lt;&lt; var2 &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-comment">// function with double type single parameter</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">double</span> var)</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Double number: "</span> &lt;&lt; var &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-comment">// function with int type single parameter</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">int</span> var)</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Integer number: "</span> &lt;&lt; var &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-keyword">int</span> a = <span class="hljs-number">5</span>;
  <span class="hljs-keyword">double</span> b = <span class="hljs-number">5.5</span>;

  <span class="hljs-comment">// call function with int type parameter</span>
  display(a);

  <span class="hljs-comment">// call function with double type parameter</span>
  display(b);

  <span class="hljs-comment">// call function with 2 parameters</span>
  display(a, b);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Integer number: 5
Float number: 5.5
Integer number: 5 and double number: 5.5</samp></pre>

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
  </div><div class="clearfix"></div><p>Here, the <code>display()</code> function is called three times with different arguments. Depending on the number and type of arguments passed, the corresponding <code>display()</code> function is called.</p>

<figure><img src="assets/images/cpp-function-overloading-parameters-number.png" title="Working of C++ Function Overloading for display()" alt="Working of C++ Function Overloading for display()" width="480" height="527">
  <figcaption>Working of overloading for the display() function</figcaption></figure>
<p>The return type of all these functions is the same but that need not be the case for function overloading.</p>

<hr>
<p class="note-tip"><strong>Note:</strong> In C++, many standard library functions are overloaded. For example, the <a href="/cpp-programming/library-function/cmath/sqrt">sqrt()</a> function can take <code>double</code>, <code>float</code>, <code>int,</code> etc. as parameters. This is possible because the <code>sqrt()</code> function is overloaded in C++.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/function-overriding">C++ Function Overriding</a></li>
  <li><a href="/cpp-programming/operator-overloading">C++ Operator Overloading</a></li>
  <li><a href="/cpp-programming/constructor-overloading">C++ Constructor Overloading</a> </li>
</ul>

</div>
</section>
<section id="four4">
<h1>C++ Inline Functions</h1>
<div class="content">
    <p id="introduction">In C++, we can declare a function as inline. This copies the function to the location of the function call in compile-time and may make the program execution faster.</p>

<p>Before following this tutorial, be sure to visit the <a href="/cpp-programming/function">C++</a> <a href="/cpp-programming/function">Functions</a>.</p>

<hr>
<h2 id="syntaxCreating">Inline Functions</h2>

<p>To create an inline function, we use the <code>inline</code> keyword. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">inline</span> returnType <span class="hljs-title">functionName</span><span class="hljs-params">(parameters)</span> </span>{
  <span class="hljs-comment">// code</span>
}</code></pre>

<p>Notice the use of keyword <code>inline</code> before the function definition.</p>

<hr>
<h2 id="example">C++ Inline Function</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">inline</span> <span class="hljs-keyword">void</span> <span class="hljs-title">displayNum</span><span class="hljs-params">(<span class="hljs-keyword">int</span> num)</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; num &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// first function call</span>
  displayNum(<span class="hljs-number">5</span>);

  <span class="hljs-comment">// second function call</span>
  displayNum(<span class="hljs-number">8</span>);

  <span class="hljs-comment">// third function call</span>
  displayNum(<span class="hljs-number">666</span>);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>5
8
666</samp></pre>

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
  </div><div class="clearfix"></div><p>Here is how this program works:</p>

<figure><img alt="Working of inline functions in C++" height="292" src="assets/images/cpp-inline-functions.png" width="720">
  <figcaption>Working of inline functions in C++</figcaption>
</figure>

<p>Here, we created an inline function named <code>displayNum()</code> that takes a single integer as a parameter.</p>

<p>We then called the function 3 times in the <code>main()</code> function with different arguments. Each time <code>displayNum()</code> is called, the compiler copies the code of the function to that call location.</p>
</div>
</section>
<section id="four5">
<h1>C++ Recursion</h1>
<div class="content">
    <p id="introduction">A <a href="/cpp-programming/function">function</a> that calls itself is known as a recursive function. And, this technique is known as recursion.</p>

<hr>
<h2 id="working">Working of Recursion in C++</h2>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">recurse</span><span class="hljs-params">()</span>
</span>{
  ... .. ...
  recurse();
  ... .. ...
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  ... .. ...
  recurse();
  ... .. ...
}</code></pre>

<p>The figure below shows how recursion works by calling itself over and over again.</p>

<figure><img src="assets/images/cpp-function-recursion-working.png" title="Working of C++ recursion" alt="Working of C++ recursion" width="420" height="288">
  <figcaption>How recursion works in C++ programming</figcaption></figure>
<p>The recursion continues until some condition is met.</p>

<p>To prevent infinite recursion, <a href="/cpp-programming/if-else">if...else statement</a> (or similar approach) can be used where one branch makes the recursive call and the other doesn't.</p>

<hr>
<h2>Example 1: Factorial of a Number Using Recursion</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Factorial of n = 1*2*3*...*n</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">factorial</span><span class="hljs-params">(<span class="hljs-keyword">int</span>)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> n, result;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a non-negative number: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; n;

  result = factorial(n);
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Factorial of "</span> &lt;&lt; n &lt;&lt; <span class="hljs-string">" = "</span> &lt;&lt; result;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">factorial</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n)</span> </span>{
  <span class="hljs-keyword">if</span> (n &gt; <span class="hljs-number">1</span>) {
      <span class="hljs-keyword">return</span> n * factorial(n - <span class="hljs-number">1</span>);
  } <span class="hljs-keyword">else</span> {
      <span class="hljs-keyword">return</span> <span class="hljs-number">1</span>;
  }
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a non-negative number: 4
Factorial of 4 = 24</samp></pre>

<hr>
<h3>Working of Factorial Program</h3>

<figure><img src="assets/images/cpp-function-recursion-example.png" title="Working of C++ Recursion Program" alt="Working of C++ Recursion Program" width="520" height="730">
  <figcaption>How this C++ recursion program works</figcaption></figure>
<p>As we can see, the <code>factorial()</code> function is calling itself. However, during each call, we have decreased the value of <var>n</var> by <code>1</code>. When <var>n</var> is less than <code>1</code>, the <code>factorial()</code> function ultimately returns the output.</p>

<hr>
<h2>Advantages and Disadvantages of Recursion</h2>

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
  </div><div class="clearfix"></div><p>Below are the pros and cons of using recursion in C++.</p>

<hr>
<h3 id="pros">Advantages of C++ Recursion</h3>

<ul>
  <li>It makes our code shorter and cleaner.</li>
  <li>Recursion is required in problems concerning data structures and advanced algorithms, such as Graph and Tree Traversal.</li>
</ul>

<hr>
<h3 id="cons">Disadvantages of C++ Recursion</h3>

<ul>
  <li>It takes a lot of stack space compared to an iterative program.</li>
  <li>It uses more processor time.</li>
  <li>It can be more difficult to debug compared to an equivalent iterative program.</li>
</ul>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/examples/power-recursion">C++ Program to Calculate Power Using Recursion</a></li>
  <li><a href="/cpp-programming/examples/factorial-recursion">C++ program to Calculate Factorial of a Number Using Recursion</a></li>
</ul>

</div>
</section>

<!-- five menu sections -->
<section id="five1">
<h1>C++ Arrays</h1>
<div class="content">
    <p id="introduction">In C++, an array is a variable that can store multiple values of the same type. For example,</p>

<p>Suppose a class has <strong>27</strong> students, and we need to store all their grades. Instead of creating <strong>27</strong> separate variables, we can simply create an array:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">double</span> grade[<span class="hljs-number">27</span>];</code></pre>

<p>Here, <var>grade</var> is an array that can hold a maximum of <strong>27</strong> elements of <code>double</code> type.</p>

<p>In C++, the size and type of arrays cannot be changed after its declaration.</p>

<hr>
<h2 id="declaration">C++ Array Declaration</h2>

<pre style="max-height: 600px;"><code class="cpp hljs">dataType arrayName[arraySize];</code></pre>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> x[<span class="hljs-number">6</span>];</code></pre>

<p>Here,</p>

<ul>
  <li><code>int</code> - type of element to be stored</li>
  <li><var>x</var> - name of the array</li>
  <li><code>6</code> - size of the array</li>
</ul>

<hr>
<h2 id="elements">Access Elements in C++ Array</h2>

<p>In C++, each element in an array is associated with a number. The number is known as an <strong>array index</strong>. We can access elements of an array by using those indices.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// syntax to access array elements</span>
<span class="hljs-built_in">array</span>[index];</code></pre>

<p>Consider the array <var>x</var> we have seen above.</p>

<figure><img src="assets/images/cpp-array-declaration_0.png" title="Elements of an array in C++" alt="C++ Array Declaration" width="520" height="135">
  <figcaption>Elements of an array in C++</figcaption></figure>
<h3>Few Things to Remember:</h3>

<ul>
  <li>The array indices start with <strong>0</strong>. Meaning <var>x[0]</var> is the first element stored at index <strong>0</strong>.</li>
  <li>If the size of an array is <code>n</code>, the last element is stored at index <code>(n-1)</code>. In this example, <var>x[5]</var> is the last element.</li>
  <li>Elements of an array have consecutive addresses. </li>
</ul>

<p>For example, suppose the starting address of <code>x[0]</code> is <strong>2120</strong>.<br>
<br>
Then, the address of the next element <code>x[1]</code> will be <strong>2124</strong>, the address of <code>x[2]</code> will be <strong>2128</strong>, and so on.<br>
<br>
Here, the size of each element is increased by <strong>4</strong>. This is because the size of <code>int</code> is <strong>4</strong> bytes.</p>

<hr>
<h2 id="initialization">C++ Array Initialization</h2>

<p>In C++, it's possible to initialize an array during declaration. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// declare and initialize an array</span>
<span class="hljs-keyword">int</span> x[<span class="hljs-number">6</span>] = {<span class="hljs-number">19</span>, <span class="hljs-number">10</span>, <span class="hljs-number">8</span>, <span class="hljs-number">17</span>, <span class="hljs-number">9</span>, <span class="hljs-number">15</span>};</code></pre>

<figure><img src="assets/images/cpp-array-initialization_0.png" title="C++ Array elements and their data" alt="C++ Array Initialization" width="520" height="135">
  <figcaption>C++ Array elements and their data</figcaption></figure>
<p>Another method to initialize array during declaration:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// declare and initialize an array</span>
<span class="hljs-keyword">int</span> x[] = {<span class="hljs-number">19</span>, <span class="hljs-number">10</span>, <span class="hljs-number">8</span>, <span class="hljs-number">17</span>, <span class="hljs-number">9</span>, <span class="hljs-number">15</span>};</code></pre>

<p>Here, we have not mentioned the size of the array. In such cases, the compiler automatically computes the size.</p>

<hr>
<h3 id="empty-members">C++ Array With Empty Members</h3>

<p>In C++, if an array has a size <code>n</code>, we can store up to <var>n</var> number of elements in the array. However, what will happen if we store less than <code>n</code> number of elements.</p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// store only 3 elements in the array</span>
<span class="hljs-keyword">int</span> x[<span class="hljs-number">6</span>] = {<span class="hljs-number">19</span>, <span class="hljs-number">10</span>, <span class="hljs-number">8</span>};</code></pre>

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
  </div><div class="clearfix"></div><p>Here, the array <var>x</var> has a size of <code>6</code>. However, we have initialized it with only <code>3</code> elements.</p>

<p>In such cases, the compiler assigns random values to the remaining places. Often, this random value is simply <code>0</code>.</p>

<figure><img src="assets/images/cpp-array-empty-members_0.png" title="C++ Array with empty members" alt="C++ Array with empty members" width="520" height="181">
  <figcaption>Empty array members are automatically assigned the value 0</figcaption></figure>
<hr>
<h2 id="insert-elements">How to Insert and Print Array Elements?</h2>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> mark[<span class="hljs-number">5</span>] = {<span class="hljs-number">19</span>, <span class="hljs-number">10</span>, <span class="hljs-number">8</span>, <span class="hljs-number">17</span>, <span class="hljs-number">9</span>}

<span class="hljs-comment">// change 4th element to 9</span>
mark[<span class="hljs-number">3</span>] = <span class="hljs-number">9</span>;

<span class="hljs-comment">// take input from the user</span>
<span class="hljs-comment">// store the value at third position</span>
<span class="hljs-built_in">cin</span> &gt;&gt; mark[<span class="hljs-number">2</span>];


<span class="hljs-comment">// take input from the user</span>
<span class="hljs-comment">// insert at ith position</span>
<span class="hljs-built_in">cin</span> &gt;&gt; mark[i<span class="hljs-number">-1</span>];

<span class="hljs-comment">// print first element of the array</span>
<span class="hljs-built_in">cout</span> &lt;&lt; mark[<span class="hljs-number">0</span>];

<span class="hljs-comment">// print ith element of the array</span>
<span class="hljs-built_in">cout</span> &gt;&gt; mark[i<span class="hljs-number">-1</span>];</code></pre>

<hr>
<h2 id="example1">Example 1: Displaying Array Elements</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> numbers[<span class="hljs-number">5</span>] = {<span class="hljs-number">7</span>, <span class="hljs-number">5</span>, <span class="hljs-number">6</span>, <span class="hljs-number">12</span>, <span class="hljs-number">35</span>};

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The numbers are: "</span>;

<span class="hljs-comment">//  Printing array elements</span>
<span class="hljs-comment">// using range based for loop</span>
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> n : numbers) {
  <span class="hljs-built_in">cout</span> &lt;&lt; n &lt;&lt; <span class="hljs-string">"  "</span>;
}

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nThe numbers are: "</span>;

<span class="hljs-comment">//  Printing array elements</span>
<span class="hljs-comment">// using traditional for loop</span>
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">5</span>; ++i) {
  <span class="hljs-built_in">cout</span> &lt;&lt; numbers[i] &lt;&lt; <span class="hljs-string">"  "</span>;
}

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>The numbers are: 7  5  6  12  35
The numbers are: 7  5  6  12  35</samp></pre>

<p>Here, we have used a <a href="/cpp-programming/for-loop">for loop</a> to iterate from <code>i = 0</code> to <code>i = 4</code>. In each iteration, we have printed <code>numbers[i]</code>.</p>

<p>We again used a range-based <code>for</code> loop to print out the elements of the array. To learn more about this loop, check <a href="/cpp-programming/ranged-for-loop">C++ Ranged for Loop</a>.</p>

<hr>
<h2 id="example2">Example 2: Take Inputs from User and Store Them in an Array</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

<span class="hljs-keyword">int</span> numbers[<span class="hljs-number">5</span>];

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter 5 numbers: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

<span class="hljs-comment">//  store input from user to array</span>
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">5</span>; ++i) {
  <span class="hljs-built_in">cin</span> &gt;&gt; numbers[i];
}

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The numbers are: "</span>;

<span class="hljs-comment">//  print array elements</span>
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> n = <span class="hljs-number">0</span>; n &lt; <span class="hljs-number">5</span>; ++n) {
  <span class="hljs-built_in">cout</span> &lt;&lt; numbers[n] &lt;&lt; <span class="hljs-string">"  "</span>;
}

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter 5 numbers: 
11
12
13
14
15
The numbers are: 11  12  13  14  15</samp></pre>

<p>Once again, we have used a <code>for</code> loop to iterate from <code>i = 0</code> to <code>i = 4</code>. In each iteration, we took input from the user and stored it in <code>numbers[i]</code>.</p>

<p>Then, we used another <code>for</code> loop to print all the array elements.</p>

<hr>
<h2 id="out-bound">C++ Array Out of Bounds</h2>

<p>If we declare an array of size <strong>10</strong>, then the array will contain elements from index <strong>0</strong> to <strong>9</strong>.</p>

<p>However, if we try to access the element at index <strong>10</strong> or more than <strong>10</strong>, it will result in an undefined behavior.</p>

<p>This type of error is likely when we use a normal for loop and we access the array element using the <code>[]</code> operator. </p>

<p class="note-tip"><strong>Note</strong>:To overcome this type of error we should prefer <a href="/cpp-programming/ranged-for-loop">range based for loop</a> where no such operators are needed to access the array elements.</p>

<hr>
<h2 id="example3">Example 3: Display Sum and Average of Array Elements Using for Loop</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  
<span class="hljs-comment">// initialize an array without specifying size</span>
<span class="hljs-keyword">double</span> numbers[] = {<span class="hljs-number">7</span>, <span class="hljs-number">5</span>, <span class="hljs-number">6</span>, <span class="hljs-number">12</span>, <span class="hljs-number">35</span>, <span class="hljs-number">27</span>};

<span class="hljs-keyword">double</span> sum = <span class="hljs-number">0</span>;
<span class="hljs-keyword">double</span> count = <span class="hljs-number">0</span>;
<span class="hljs-keyword">double</span> average;

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The numbers are: "</span>;

<span class="hljs-comment">//  print array elements</span>
<span class="hljs-comment">// use of range-based for loop</span>
<span class="hljs-keyword">for</span> (<span class="hljs-keyword">const</span> <span class="hljs-keyword">double</span> &amp;n : numbers) {
  <span class="hljs-built_in">cout</span> &lt;&lt; n &lt;&lt; <span class="hljs-string">"  "</span>;

  <span class="hljs-comment">//  calculate the sum</span>
  sum += n;

  <span class="hljs-comment">// count the no. of array elements</span>
  ++count;
}

<span class="hljs-comment">// print the sum</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nTheir Sum = "</span> &lt;&lt; sum &lt;&lt; <span class="hljs-built_in">endl</span>;

<span class="hljs-comment">// find the average</span>
average = sum / count;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Their Average = "</span> &lt;&lt; average &lt;&lt; <span class="hljs-built_in">endl</span>;

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>The numbers are: 7  5  6  12  35  27
Their Sum = 92
Their Average = 15.3333</samp></pre>

<p>In this program:</p>

<ol>
  <li>We have initialized a <code>double</code> array named <var>numbers</var> but without specifying its size. We also declared three <code>double</code> variables: sum, <var>count</var>, and <var>average</var>.<br>

Here, <code>sum =0</code> and <code>count = 0</code>.</li>
  <li>Then we used a range-based <code>for</code> loop to print the array elements. In each iteration of the loop, we add the current array element to <var>sum</var>.</li>
  <li>We also increase the value of <var>count</var> by <code>1</code> in each iteration, so that we can get the size of the array by the end of the for loop.</li>
  <li>After printing all the elements, we print the sum and the average of all the numbers. The average of the numbers is given by <code>average = sum / count;</code></li>
</ol>

<hr>
<p><strong>Also Read</strong></p>

<ul>
  <li><a href="/cpp-programming/multidimensional-arrays">C++ Multidimensional Arrays</a></li>
  <li><a href="/cpp-programming/pointers-arrays">C++ Pointer and Arrays</a></li>
  <li><a href="/cpp-programming/vectors">C++ Vector</a></li>
  <li><a href="/cpp-programming/std-array">C++ std::Array</a></li>
</ul>

</div>
</section>
<section id="five2">
<h1>Passing Array to a Function in C++ Programming</h1>
<div class="content">
    <p id="introduction">In C++, we can pass arrays as an argument to a function. And, also we can return arrays from a function.</p>

<p>Before you learn about passing arrays as a function argument, make sure you know about <a href="/cpp-programming/arrays">C++ Arrays</a> and <a href="/cpp-programming/function">C++ Functions</a>.</p>

<hr>
<h2 id="passing-array">Syntax</h2>

<p>The syntax for passing an array to a function is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function">returnType <span class="hljs-title">functionName</span><span class="hljs-params">(dataType arrayName[])</span> </span>{
  <span class="hljs-comment">// code</span>
}</code></pre>

<hr>
<h3 id="example1">Example 1: Passing One-dimensional Array to a Function</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ Program to display marks of 5 students</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span> ARRAY_SIZE = <span class="hljs-number">5</span>;

<span class="hljs-comment">// declare function to display marks</span>
<span class="hljs-comment">// take a 1d array as parameter</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">int</span> m[])</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Displaying marks: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// display array elements    </span>
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; ARRAY_SIZE; ++i) {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Student "</span> &lt;&lt; i + <span class="hljs-number">1</span> &lt;&lt; <span class="hljs-string">": "</span> &lt;&lt; m[i] &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// declare and initialize an array</span>
  <span class="hljs-keyword">int</span> marks[ARRAY_SIZE] = {<span class="hljs-number">88</span>, <span class="hljs-number">76</span>, <span class="hljs-number">90</span>, <span class="hljs-number">61</span>, <span class="hljs-number">69</span>};
  
  <span class="hljs-comment">// call display function</span>
  <span class="hljs-comment">// pass array as argument</span>
  display(marks);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre>
<samp>Displaying marks: 
Student 1: 88
Student 2: 76
Student 3: 90
Student 4: 61
Student 5: 69</samp></pre>

<p>Here,</p>

<ol>
  <li>When we call a function by passing an array as the argument, only the name of the array is used.

<pre style="max-height: 600px;"><code class="cpp hljs">display(marks);</code></pre>

Here, the argument <var>marks</var> represent the memory address of the first element of array <var>marks[5]</var>.</li>
  <li>However, notice the parameter of the <code>display()</code> function.
<br>
<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">int</span> m[])</span></span></code></pre>

Here, we are just expecting an array of integers.

C++ handles passing an array to a function in this way to save memory and time.</li>
</ol>

<hr>
<h3 id="multidimensional-pass">Passing Multidimensional Array to a Function</h3>

<p>We can also pass <a href="/cpp-programming/multidimensional-arrays">Multidimensional arrays</a> as an argument to the function. For example,</p>

<h3>Example 2: Passing Multidimensional Array to a Function</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ Program to display the elements of two</span>
<span class="hljs-comment">// dimensional array by passing it to a function</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// define a function </span>
<span class="hljs-comment">// pass a 2d array as a parameter</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">int</span> n[][<span class="hljs-number">2</span>])</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Displaying Values: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">3</span>; ++i) {
      <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">2</span>; ++j) {
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"num["</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">"]["</span> &lt;&lt; j &lt;&lt; <span class="hljs-string">"]: "</span> &lt;&lt; n[i][j] &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
  }
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// initialize 2d array</span>
  <span class="hljs-keyword">int</span> num[<span class="hljs-number">3</span>][<span class="hljs-number">2</span>] = {
      {<span class="hljs-number">3</span>, <span class="hljs-number">4</span>},
      {<span class="hljs-number">9</span>, <span class="hljs-number">5</span>},
      {<span class="hljs-number">7</span>, <span class="hljs-number">1</span>}
  };

  <span class="hljs-comment">// call the function</span>
  <span class="hljs-comment">// pass a 2d array as an argument</span>
  display(num);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Displaying Values: 
num[0][0]: 3
num[0][1]: 4
num[1][0]: 9
num[1][1]: 5
num[2][0]: 7
num[2][1]: 1</samp></pre>

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
  </div><div class="clearfix"></div><p>In the above program, we have defined a function named <code>display()</code>. The function takes a two dimensional array, <code>int n[][2]</code> as its argument and prints the elements of the array.</p>

<p>While calling the function, we only pass the name of the two dimensional array as the function argument <code>display(num)</code>.</p>

<p class="note-tip"><strong>Note</strong>: It is not mandatory to specify the number of rows in the array. However, the number of columns should always be specified. This is why we have used <code>int n[][2]</code>.</p>

<p>We can also pass arrays with more than 2 dimensions as a function argument.</p>

<hr>
<h2 id="returning-array">C++ Returning an Array From a Function</h2>

<p>We can also return an array from the function. However, the actual array is not returned. Instead the address of the first element of the array is returned with the help of <a href="/cpp-programming/pointers">pointers</a>.</p>

<p>We will learn about returning arrays from a function in the coming tutorials.</p>

</div>
</section>
<section id="five3">
<h1>C++ Multidimensional Arrays</h1>
<div class="content">
    <p id="introduction">In C++, we can create an <a href="/cpp-programming/arrays">array</a> of an array, known as a multidimensional array. For example:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> x[<span class="hljs-number">3</span>][<span class="hljs-number">4</span>];</code></pre>

<p>Here, <var>x</var> is a two-dimensional array. It can hold a maximum of 12 elements.</p>

<p>We can think of this array as a table with 3 rows and each row has 4 columns as shown below.</p>

<figure><img src="assets/images/cpp-two-dimensional-array.png" title="C++ two dimensional array" alt="C++ two dimensional array" width="400" height="245">
  <figcaption>Elements in two-dimensional array in C++ Programming</figcaption></figure>
<p>Three-dimensional arrays also work in a similar way. For example:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">float</span> x[<span class="hljs-number">2</span>][<span class="hljs-number">4</span>][<span class="hljs-number">3</span>];</code></pre>

<p>This array <var>x</var> can hold a maximum of 24 elements.</p>

<p>We can find out the total number of elements in the array simply by multiplying its dimensions:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-number">2</span> x <span class="hljs-number">4</span> x <span class="hljs-number">3</span> = <span class="hljs-number">24</span></code></pre>

<hr>
<h2 id="initialization">Multidimensional Array Initialization</h2>

<p>Like a normal array, we can initialize a multidimensional array in more than one way.</p>

<h3>1. Initialization of two-dimensional array</h3>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> test[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>] = {<span class="hljs-number">2</span>, <span class="hljs-number">4</span>, <span class="hljs-number">5</span>, <span class="hljs-number">9</span>, <span class="hljs-number">0</span>, <span class="hljs-number">19</span>};</code></pre>

<p>The above method is not preferred. A better way to initialize this array with the same array elements is given below:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span>  test[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>] = { {<span class="hljs-number">2</span>, <span class="hljs-number">4</span>, <span class="hljs-number">5</span>}, {<span class="hljs-number">9</span>, <span class="hljs-number">0</span>, <span class="hljs-number">19</span>}};</code></pre>

<p>This array has 2 rows and 3 columns, which is why we have two rows of elements with 3 elements each.</p>

<figure><img src="assets/images/cpp-two-dimensional-array-initialization.png" title="C++ Two-dimensional array initialization" alt="C++ Two-dimensional array initialization" width="380" height="224">
  <figcaption>Initializing a two-dimensional array in C++</figcaption></figure>
<hr>
<h3>2. Initialization of three-dimensional array</h3>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> test[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>][<span class="hljs-number">4</span>] = {<span class="hljs-number">3</span>, <span class="hljs-number">4</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>, <span class="hljs-number">0</span>, <span class="hljs-number">-3</span>, <span class="hljs-number">9</span>, <span class="hljs-number">11</span>, <span class="hljs-number">23</span>, <span class="hljs-number">12</span>, <span class="hljs-number">23</span>, 
               <span class="hljs-number">2</span>, <span class="hljs-number">13</span>, <span class="hljs-number">4</span>, <span class="hljs-number">56</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>, <span class="hljs-number">9</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>, <span class="hljs-number">5</span>, <span class="hljs-number">1</span>, <span class="hljs-number">4</span>, <span class="hljs-number">9</span>};</code></pre>

<p>This is not a good way of initializing a three-dimensional array. A better way to initialize this array is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> test[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>][<span class="hljs-number">4</span>] = { 
                   { {<span class="hljs-number">3</span>, <span class="hljs-number">4</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>}, {<span class="hljs-number">0</span>, <span class="hljs-number">-3</span>, <span class="hljs-number">9</span>, <span class="hljs-number">11</span>}, {<span class="hljs-number">23</span>, <span class="hljs-number">12</span>, <span class="hljs-number">23</span>, <span class="hljs-number">2</span>} },
                   { {<span class="hljs-number">13</span>, <span class="hljs-number">4</span>, <span class="hljs-number">56</span>, <span class="hljs-number">3</span>}, {<span class="hljs-number">5</span>, <span class="hljs-number">9</span>, <span class="hljs-number">3</span>, <span class="hljs-number">5</span>}, {<span class="hljs-number">5</span>, <span class="hljs-number">1</span>, <span class="hljs-number">4</span>, <span class="hljs-number">9</span>} }
               };</code></pre>

<p>Notice the dimensions of this three-dimensional array.</p>

<p>The first dimension has the value <code>2</code>. So, the two elements comprising the first dimension are:</p>

<pre><samp>Element 1 = { {3, 4, 2, 3}, {0, -3, 9, 11}, {23, 12, 23, 2} }
Element 2 = { {13, 4, 56, 3}, {5, 9, 3, 5}, {5, 1, 4, 9} }</samp></pre>

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
  </div><div class="clearfix"></div><p>The second dimension has the value <code>3</code>. Notice that each of the elements of the first dimension has three elements each:</p>

<pre><samp>{3, 4, 2, 3}, {0, -3, 9, 11} and {23, 12, 23, 2} for Element 1.
{13, 4, 56, 3}, {5, 9, 3, 5} and {5, 1, 4, 9} for Element 2.</samp></pre>

<p>Finally, there are four <code>int</code> numbers inside each of the elements of the second dimension:</p>

<pre><samp>{3, 4, 2, 3}
{0, -3, 9, 11}
... .. ...
... .. ...</samp></pre>

<hr>
<h2 id="example1">Example 1: Two Dimensional Array</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ Program to display all elements</span>
<span class="hljs-comment">// of an initialised two dimensional array</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> test[<span class="hljs-number">3</span>][<span class="hljs-number">2</span>] = {{<span class="hljs-number">2</span>, <span class="hljs-number">-5</span>},
                    {<span class="hljs-number">4</span>, <span class="hljs-number">0</span>},
                    {<span class="hljs-number">9</span>, <span class="hljs-number">1</span>}};

  <span class="hljs-comment">// use of nested for loop</span>
  <span class="hljs-comment">// access rows of the array</span>
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">3</span>; ++i) {

      <span class="hljs-comment">// access columns of the array</span>
      <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">2</span>; ++j) {
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"test["</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">"]["</span> &lt;&lt; j &lt;&lt; <span class="hljs-string">"] = "</span> &lt;&lt; test[i][j] &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>test[0][0] = 2
test[0][1] = -5
test[1][0] = 4
test[1][1] = 0
test[2][0] = 9
test[2][1] = 1</samp></pre>

<p>In the above example, we have initialized a two-dimensional <code>int</code> array named <var>test</var> that has 3 "rows" and 2 "columns".</p>

<p>Here, we have used the nested <code>for</code> loop to display the array elements.</p>

<ul>
  <li>the outer loop from <code>i == 0</code> to <code>i == 2</code> access the rows of the array</li>
  <li>the inner loop from <code>j == 0</code> to <code>j == 1</code> access the columns of the array</li>
</ul>

<p>Finally, we print the array elements in each iteration.</p>

<hr>
<h2 id="example2">Example 2: Taking Input for Two Dimensional Array</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> numbers[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>];

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter 6 numbers: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// Storing user input in the array</span>
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i) {
      <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">3</span>; ++j) {
          <span class="hljs-built_in">cin</span> &gt;&gt; numbers[i][j];
      }
  }

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The numbers are: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">//  Printing array elements</span>
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i) {
      <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">3</span>; ++j) {
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"numbers["</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">"]["</span> &lt;&lt; j &lt;&lt; <span class="hljs-string">"]: "</span> &lt;&lt; numbers[i][j] &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter 6 numbers: 
1
2
3
4
5
6
The numbers are:
numbers[0][0]: 1
numbers[0][1]: 2
numbers[0][2]: 3
numbers[1][0]: 4
numbers[1][1]: 5
numbers[1][2]: 6</samp></pre>

<p>Here, we have used a <a href="/cpp-programming/nested-loops">nested for loop</a> to take the input of the 2d array. Once all the input has been taken, we have used another nested <code>for</code> loop to print the array members.</p>

<hr>
<h2 id="example3">Example 3: Three Dimensional Array</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ Program to Store value entered by user in</span>
<span class="hljs-comment">// three dimensional array and display it.</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// This array can store upto 12 elements (2x3x2)</span>
  <span class="hljs-keyword">int</span> test[<span class="hljs-number">2</span>][<span class="hljs-number">3</span>][<span class="hljs-number">2</span>] = {
                          {
                              {<span class="hljs-number">1</span>, <span class="hljs-number">2</span>},
                              {<span class="hljs-number">3</span>, <span class="hljs-number">4</span>},
                              {<span class="hljs-number">5</span>, <span class="hljs-number">6</span>}
                          }, 
                          {
                              {<span class="hljs-number">7</span>, <span class="hljs-number">8</span>}, 
                              {<span class="hljs-number">9</span>, <span class="hljs-number">10</span>}, 
                              {<span class="hljs-number">11</span>, <span class="hljs-number">12</span>}
                          }
                      };

  <span class="hljs-comment">// Displaying the values with proper index.</span>
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">2</span>; ++i) {
      <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> j = <span class="hljs-number">0</span>; j &lt; <span class="hljs-number">3</span>; ++j) {
          <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> k = <span class="hljs-number">0</span>; k &lt; <span class="hljs-number">2</span>; ++k) {
              <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"test["</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">"]["</span> &lt;&lt; j &lt;&lt; <span class="hljs-string">"]["</span> &lt;&lt; k &lt;&lt; <span class="hljs-string">"] = "</span> &lt;&lt; test[i][j][k] &lt;&lt; <span class="hljs-built_in">endl</span>;
          }
      }
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>test[0][0][0] = 1
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

<p>The basic concept of printing elements of a 3d array is similar to that of a 2d array.</p>

<p>However, since we are manipulating 3 dimensions, we use a nested for loop with 3 total loops instead of just 2:</p>

<ul>
  <li>the outer loop from <code>i == 0</code> to <code>i == 1</code> accesses the first dimension of the array</li>
  <li>the middle loop from <code>j == 0</code> to <code>j == 2</code> accesses the second dimension of the array</li>
  <li>the innermost loop from <code>k == 0</code> to <code>k == 1</code> accesses the third dimension of the array</li>
</ul>

<p>As we can see, the complexity of the array increases exponentially with the increase in dimensions.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/examples/add-matrix">C++ Program to Add Two Matrix Using Multi-dimensional Arrays</a></li>
  <li><a href="/cpp-programming/examples/matrix-multiplication">C++ Program to Multiply Two Matrix Using Multi-dimensional Arrays</a> </li>
</ul>

</div>
</section>
<section id="five4">
<h1>C++ String</h1>
<div class="content">
    <p>A string is a collection of characters. There are two types of strings commonly used in C++ :</p>

<ul>
  <li>Strings that are objects of string class (The Standard <a href="/cpp-programming/string-class">C++ Library String Class</a>)</li>
  <li>C-strings (C-style Strings)</li>
</ul>

<hr>
<h2 id="cstrings">C-strings</h2>

<p>In C programming, the collection of characters is stored in the form of <a href="/c-programming/c-arrays">arrays</a>. This is also supported in C++ programming. Hence it's called C-strings.</p>

<p>C-strings are arrays of type <code>char</code> terminated with a null character, that is, <code>\0</code> (ASCII value of null character is <strong>0</strong>).</p>

<hr>
<h2>How to define a C-string?</h2>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">char</span> str[] = <span class="hljs-string">"C++"</span>;</code></pre>

<p>In the above code, <code>str</code> is a string and it holds <strong>4</strong> characters.</p>

<p>Although <code>"C++"</code> has three characters, the null character <code>\0</code> is added to the end of the string automatically.</p>

<hr>
<h2>Alternative ways of defining a string</h2>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">char</span> str[<span class="hljs-number">4</span>] = <span class="hljs-string">"C++"</span>;
   
<span class="hljs-keyword">char</span> str[] = {<span class="hljs-string">'C'</span>,<span class="hljs-string">'+'</span>,<span class="hljs-string">'+'</span>,<span class="hljs-string">'\0'</span>};

<span class="hljs-keyword">char</span> str[<span class="hljs-number">4</span>] = {<span class="hljs-string">'C'</span>,<span class="hljs-string">'+'</span>,<span class="hljs-string">'+'</span>,<span class="hljs-string">'\0'</span>};</code></pre>

<p>Like arrays, it is not necessary to use all the space allocated for the string. For example:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">char</span> str[<span class="hljs-number">100</span>] = <span class="hljs-string">"C++"</span>;</code></pre>

<hr>
<h2>Example 1: C++ String to Read a Word</h2>

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
  </div><div class="clearfix"></div><p><strong>C++ program to display a string entered by user.</strong></p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">char</span> str[<span class="hljs-number">100</span>];

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a string: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; str;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nEnter another string: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; str;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered: "</span>&lt;&lt;str&lt;&lt;<span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a string: C++
You entered: C++

Enter another string: Programming is fun.
You entered: Programming</samp></pre>

<p>Notice that, in the second example, only <code>"Programming"</code> is displayed instead of <code>"Programming is fun"</code>.</p>

<p>This is because the extraction operator <code>&gt;&gt;</code> works as <code>scanf()</code> in C and considers a space <code>" "</code> as a terminating character.</p>

<hr>
<h2>Example 2: C++ String to read a line of text</h2>

<p><strong>C++ program to read and display an entire line entered by the user.</strong></p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">char</span> str[<span class="hljs-number">100</span>];
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a string: "</span>;
  <span class="hljs-built_in">cin</span>.get(str, <span class="hljs-number">100</span>);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a string: Programming is fun.
You entered: Programming is fun.</samp></pre>

<p>To read the text containing blank space, <code>cin.get</code> function can be used. This function takes two arguments.</p>

<p>The first argument is the name of the string (address of the first element of the string), and the second argument is the maximum size of the array.</p>

<p>In the above program, <var>str</var> is the name of the string and <code>100</code> is the maximum size of the array.</p>

<hr>
<h2 id="string">String Object</h2>

<p>In C++, you can also create a string object for holding strings.</p>

<p>Unlike using char arrays, string objects have no fixed length and can be extended as per your requirement.</p>

<hr>
<h2>Example 3: C++ string using string data type</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-comment">// Declaring a string object</span>
  <span class="hljs-built_in">string</span> str;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a string: "</span>;
  getline(<span class="hljs-built_in">cin</span>, str);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"You entered: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a string: Programming is fun.
You entered: Programming is fun.</samp></pre>

<p>In this program, a string <var>str</var> is declared. Then, the string is asked from the user.</p>

<p>Instead of using <code>cin&gt;&gt;</code> or <code>cin.get()</code> function, you can get the entered line of text using <code>getline()</code>.</p>

<p><code>getline()</code> function takes the input stream as the first parameter, which is <code>cin</code> and <code>str</code> as the location of the line to be stored.</p>

<hr>
<h2 id="pass-string">Passing String to a Function</h2>

<p>Strings are passed to a function in a similar way <a href="/cpp-programming/passing-arrays-function">arrays are passed to a function</a>.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">char</span> *)</span></span>;
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-built_in">string</span>)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-built_in">string</span> str1;
  <span class="hljs-keyword">char</span> str[<span class="hljs-number">100</span>];

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter a string: "</span>;
  getline(<span class="hljs-built_in">cin</span>, str1);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter another string: "</span>;
  <span class="hljs-built_in">cin</span>.get(str, <span class="hljs-number">100</span>, <span class="hljs-string">'\n'</span>);

  display(str1);
  display(str);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-keyword">char</span> s[])</span>
</span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Entered char array is: "</span> &lt;&lt; s &lt;&lt; <span class="hljs-built_in">endl</span>;
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">(<span class="hljs-built_in">string</span> s)</span>
</span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Entered string is: "</span> &lt;&lt; s &lt;&lt; <span class="hljs-built_in">endl</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter a string:  Programming is fun.
Enter another string:  Really?
Entered string is: Programming is fun.
Entered char array is: Really?</samp></pre>

<p>In the above program, two strings are asked to enter. These are stored in <var>str</var> and <var>str1</var> respectively, where <var>str</var> is a <code>char</code> array and <var>str1</var> is a <code>string</code> object.</p>

<p>Then, we have two functions <code>display()</code> that outputs the string onto the string.</p>

<p>The only difference between the two functions is the parameter. </p>

<p>The first <code>display()</code> function takes the <var>char</var> array as a parameter, while the second takes the <var>string</var> as a parameter.</p>

<p>This process is known as function overloading. Learn more about <a href="/cpp-programming/function-overloading">Function Overloading</a>.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/string-class">C++ String Class</a></li>
  <li><a href="/cpp-programming/library-function/cstring">C++ cstring</a></li>
      <li><a href="https://www.programiz.com/cpp-programming/string-float-conversion">C++ String to float/double and vice-versa</a></li>
     <li><a href="https://www.programiz.com/cpp-programming/string-int-conversion">C++ String to int and vice versa</a></li>
</ul>

</div>
</section>
<section id="five5">
<h1>C++ String Class</h1>
<div class="content">
    <p id="introduction">In C++, the <code>string</code> class is used to represent a sequence of characters as an object of the class.</p>

<p>We can access the various <code>string</code> class functions by including the <code>&lt;string&gt;</code> header in our file.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span></code></pre>

<hr>
<h2>String Class Functions</h2>

<p>The common functions that are used with the <code>string</code> class are.</p>

<div class="table-responsive">
<table border="0">
<tbody><tr>
<th>Function</th>
<th>Description</th>
</tr>
<tr>
<td><code>find()</code></td>
<td>Find a substring in the string.</td>
</tr>
<tr>
<td><code>rfind()</code></td>
<td>Find the last occurrence of a substring in the string. </td>
</tr>
<tr>
<td><code>append()</code></td>
<td>Append to the string.</td>
</tr>
<tr>
<td><code>insert()</code></td>
<td>Insert into the string.</td>
</tr>
<tr>
<td><code>erase()</code></td>
<td>Erase characters from the string.</td>
</tr>
<tr>
<td><code>replace()</code></td>
<td>Replace portions of the string.</td>
</tr>
<tr>
<td><code>compare()</code></td>
<td>Compare two strings.</td>
</tr>
</tbody></table>
</div>

<hr>
<h2 id="example1">Example 1: Find a Substring in the Given String</h2>

<p>The <code>find()</code> function searches the string for the first occurrence of the specified substring and returns the <strong>position of the first character of the first match</strong>.</p>

<p>The <code>rfind()</code> function searches the string for the last occurrence of the specified substring and returns the <strong>position of the first character of the last match</strong>. </p>

<p>For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">string</span> str = <span class="hljs-string">"Hello world, wonderful world!"</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"String: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;
  
<div class="line-highlight">    <span class="hljs-comment">// find the first occurrence</span>
  <span class="hljs-keyword">size_t</span> first_occurrence = str.find(<span class="hljs-string">"world"</span>);
  
  <span class="hljs-comment">// find the last occurrence</span>
  <span class="hljs-keyword">size_t</span> last_occurrence = str.rfind(<span class="hljs-string">"world"</span>);</div>
  
  <span class="hljs-keyword">if</span> (first_occurrence != <span class="hljs-built_in">string</span>::npos) {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"First occurrence: 'world' found at position: "</span> &lt;&lt; first_occurrence &lt;&lt; <span class="hljs-built_in">endl</span>;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Last occurrence: 'world' found at position: "</span> &lt;&lt; last_occurrence &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
  <span class="hljs-keyword">else</span> {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"'world' not found"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>String: Hello world, wonderful world!
First occurrence: 'world' found at position: 6
Last occurrence: 'world' found at position: 23</samp></pre>

<p>The line <code>if (first_occurrence != string::npos)</code> checks if the variable <var>first_occurrence</var> contains a valid position where the substring <code>world</code> was found within the string.</p>

<ul>
  <li>If <code>world</code> is <strong>found</strong> in string, <var>first_occurrence</var> will be set to the position of its first occurrence.</li>
  <li>If <code>world</code> is <strong>not found</strong>, it will be set to a special constant value <code>string::npos</code>, which indicates that the substring was not found in the string.</li>
</ul>

<p class="note-tip"><strong>Note</strong>: Both functions are case-sensitive. So, if our string was <code>Hello World, wonderful world!</code>, then the <code>find()</code> function would return <strong>23</strong> as the first occurrence of the substring.</p>

<hr>
<h2 id="example2">Example 2: Append to a String</h2>

<p>We can append a string to an existing string using the <code>append()</code> function. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">string</span> str = <span class="hljs-string">"Hello world,"</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Before: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;

<div class="line-highlight">    <span class="hljs-comment">//append the string</span>
  str.append(<span class="hljs-string">" Have a good day!"</span>);
</div>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"After: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Before: Hello world,
After: Hello world, Have a good day!</samp></pre>

<hr>
<h2 id="example3">Example 3: Insert a String at a Given Position</h2>

<p>We can insert a string at any given position using the <code>insert()</code> function. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">string</span> str = <span class="hljs-string">"Hello world, world!"</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Before: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;
  
<div class="line-highlight">    <span class="hljs-comment">// insert "beautiful" at the 13th index</span>
  str.insert(<span class="hljs-number">13</span>, <span class="hljs-string">" beautiful"</span>);</div>

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"After: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Before: Hello world, world!
After: Hello world,  beautifulworld!</samp></pre>

<p>Here, we have inserted the substring <code>beautiful</code> at the <strong>13th</strong> index of the string. Keep in mind that this doesn't add space at the end of the added string.</p>

<hr>
<h2 id="example4">Example 4: Erase N Characters From the Given Position</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">string</span> str = <span class="hljs-string">"Hello world, beautiful world!"</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Before: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;
  
<div class="line-highlight">    <span class="hljs-comment">// erase five characters starting from the seventh index</span>
  str.erase(<span class="hljs-number">7</span>, <span class="hljs-number">5</span>);</div>

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"After: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Before: Hello world, beautiful world!
After: Hello w beautiful world!</samp></pre>

<p>Here, we have removed five characters starting from the seventh index using the <code>erase()</code> function.</p>

<hr>
<h2 id="example5">Example 5: Replace N Characters Within A String</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">string</span> str = <span class="hljs-string">"Hello world, beautiful world!"</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Before: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;
  
<div class="line-highlight">    <span class="hljs-comment">// replace two characters with "Earth"</span>
  <span class="hljs-comment">// starting from the seventh index</span>
  str.replace(<span class="hljs-number">6</span>, <span class="hljs-number">2</span>, <span class="hljs-string">"Earth"</span>);</div>

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"After: "</span> &lt;&lt; str &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Before: Hello world, beautiful world!
After: Hello Earthrld, beautiful world!</samp></pre>

<p>Here, we have replaced the two characters (<code>wo</code>) with <code>Earth</code>. We can replace any length of string with any length of another string using the <code>replace()</code> function.</p>

<hr>
<h2 id="example6">Example 6: Compare Strings Alphabetically</h2>

<p>To get the lexicographic relations between strings, we use the <code>compare()</code> function. </p>

<p>The <code>compare()</code> function in the C++ <code>string</code> class returns an integer that indicates the lexicographical relationship between the compared strings. It returns:</p>

<ul>
  <li><strong>0</strong> - if the compared strings are equal.</li>
  <li>&lt; <strong>0</strong> - if the calling string is lexicographically less than the compared string.</li>
  <li>&gt; <strong>0</strong> - if the calling string is lexicographically greater than the compared string.</li>
</ul>

<p>For example, </p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">string</span> str1 = <span class="hljs-string">"Hello world"</span>;
  <span class="hljs-built_in">string</span> str2 = <span class="hljs-string">"Hello world"</span>;
  <span class="hljs-built_in">string</span> str3 = <span class="hljs-string">"Hello"</span>;
  <span class="hljs-built_in">string</span> str4 = <span class="hljs-string">"Hello world, What's Up?"</span>;
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"String 1: "</span> &lt;&lt; str1 &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"String 2: "</span> &lt;&lt; str2 &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"String 3: "</span> &lt;&lt; str3 &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"String 4: "</span> &lt;&lt; str4 &lt;&lt; <span class="hljs-built_in">endl</span>;
  
<div class="line-highlight">    <span class="hljs-comment">// compare the strings</span>
  <span class="hljs-built_in">cout</span> &lt;&lt;<span class="hljs-string">"Comparing String 1 and String 2: "</span>  &lt;&lt; str1.compare(str2) &lt;&lt; <span class="hljs-string">" (Equal)"</span> &lt;&lt;<span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt;<span class="hljs-string">"Comparing String 1 and String 3: "</span> &lt;&lt; str1.compare(str3) &lt;&lt; <span class="hljs-string">" (String 1 is Longer)"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt;<span class="hljs-string">"Comparing String 1 and String 4: "</span> &lt;&lt; str1.compare(str4) &lt;&lt;<span class="hljs-string">" (String 1 is Smaller)"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;</div>

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>String 1: Hello world
String 2: Hello world
String 3: Hello
String 4: Hello world, What's Up? 
Comparing String 1 and String 2: 0 (Equal)
Comparing String 1 and String 3: 6 (String 1 is Longer)
Comparing String 1 and String 4: -12 (String 1 is Smaller)</samp></pre>

<p>Here,</p>

<ul>
  <li><code>str1.compare(str2)</code> returns <strong>0</strong> because <var>str1</var> and <var>str2</var> are equal.</li>
  <li><code>str1.compare(str3)</code> returns a positive number because <var>str1</var> is lexicographically greater than <var>str3</var> (it has more characters).</li>
  <li><code>str1.compare(str4)</code> returns a negative number because <var>str1</var> is lexicographically less than <var>str4</var>.</li>
</ul>

</div>
</section>

<!-- six menu sections -->
<section id="six1">
<h1>C++ Pointers</h1>
<div class="content">
    <p id="introduction">In C++, pointers are variables that store the memory addresses of other variables.</p>

<hr>
<h2 id="address">Address in C++</h2>

<p>Every <a href="/cpp-programming/variables-literals">variable</a> we declare in our program has an associated location in the memory, which we call the memory address of the variable.</p>

<p>If we have a variable <var>var</var> in our program, <var>&amp;var</var> returns its memory address. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-comment">// declare variables</span>
  <span class="hljs-keyword">int</span> var1 = <span class="hljs-number">3</span>;
  <span class="hljs-keyword">int</span> var2 = <span class="hljs-number">24</span>;
  <span class="hljs-keyword">int</span> var3 = <span class="hljs-number">17</span>;

  <span class="hljs-comment">// print address of var1</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Address of var1: "</span>&lt;&lt; &amp;var1 &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// print address of var2</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Address of var2: "</span> &lt;&lt; &amp;var2 &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// print address of var3</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Address of var3: "</span> &lt;&lt; &amp;var3 &lt;&lt; <span class="hljs-built_in">endl</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Address of var1: 0x7fff5fbff8ac
Address of var2: 0x7fff5fbff8a8
Address of var3: 0x7fff5fbff8a4</samp></pre>

<p>Here, <code>0x</code> at the beginning represents the address in the hexadecimal form.</p>

<p>Notice that the first address differs from the second by <strong>4</strong> bytes, and the second address differs from the third by <strong>4</strong> bytes.</p>

<p>The difference is because the size of an <code>int</code>  is <strong>4</strong> bytes in a <strong>64-bit</strong> system.</p>

<p class="note-tip"><strong>Note:</strong> You may not get the same results when you run the program. This is because the address depends on the environment in which the program runs.</p>

<hr>
<h2 id="pointer-variable">C++ Pointers</h2>

<p>Here is how we can declare pointers:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> *point_var;</code></pre>

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
  </div><div class="clearfix"></div><p>Here, we have declared a variable <var>point_var</var> which is a pointer to an <code>int</code>.</p>

<p>We can also declare pointers in the following way:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span>* point_var; <span class="hljs-comment">// preferred syntax</span></code></pre>

<hr>
<h2 id="assign">Assigning Addresses to Pointers</h2>

<p>Here is how we can assign addresses to pointers:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> var = <span class="hljs-number">5</span>;
<span class="hljs-keyword">int</span>* point_var = &amp;var;</code></pre>

<p>Here, <code>5</code> is assigned to the variable <var>var</var>. And the address of <var>var</var> is assigned to the <var>point_var</var> pointer with the code <code>point_var = &amp;var</code>.</p>

<p class="note-tip"><strong>Note:</strong> It is a good practice to initialize pointers as soon as they are declared. </p>

<hr>
<h2 id="get-value">Get the Value from the Address Using Pointers</h2>

<p>To get the value pointed by a pointer, we use the <code>*</code> operator. For example:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> var = <span class="hljs-number">5</span>;

<span class="hljs-comment">// assign address of var to point_var</span>
<span class="hljs-keyword">int</span>* point_var = &amp;var;

<span class="hljs-comment">// access value pointed by point_var</span>
<span class="hljs-built_in">cout</span> &lt;&lt; *point_var &lt;&lt; <span class="hljs-built_in">endl</span>;   <span class="hljs-comment">// Output: 5</span></code></pre>

<p>In the above code, the address of var is assigned to <var>point_var</var>. We have used the <code>*point_var</code> to get the value stored in that address.</p>

<p>When <code>*</code> is used with pointers, it's called the <strong>dereference operator</strong>. It operates on a pointer and gives the value pointed by the address stored in the pointer. That is, <code>*point_var = var</code>.</p>

<p class="note-tip"><strong>Note:</strong> In C++, <var>point_var</var> and <var>*point_var</var> are completely different. We cannot do something like <code>*point_var = &amp;var;</code>. Here, point_var is a pointer that stores the address of variable it points to while <code>*point_var</code> returns the value stored at the address pointed by <var>point_var</var>.</p>

<hr>
<h2 id="example1">Example 1: Working of C++ Pointers</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> var = <span class="hljs-number">5</span>;

  <span class="hljs-comment">// store address of var</span>
  <span class="hljs-keyword">int</span>* point_var = &amp;var;

  <span class="hljs-comment">// print value of var</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"var = "</span> &lt;&lt; var &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// print address of var</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Address of var (&amp;var) = "</span> &lt;&lt; &amp;var &lt;&lt; <span class="hljs-built_in">endl</span>
       &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// print pointer point_var</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"point_var = "</span> &lt;&lt; point_var &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// print the content of the address point_var points to</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Content of the address pointed to by point_var (*point_var) = "</span> &lt;&lt; *point_var &lt;&lt; <span class="hljs-built_in">endl</span>;
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>var = 5
Address of var (&amp;var) = 0x61ff08

point_var = 0x61ff08
Content of the address pointed to by point_var (*point_var) = 5</samp></pre>

<figure><img src="assets/images/cpp-pointer-working_0.png" title="Working of C++ Pointers" alt="Working of C++ Pointers" width="460" height="301">
  <figcaption>Working of C++ pointers</figcaption></figure>
<hr>
<h2 id="changing-value">Changing Value Pointed by Pointers</h2>

<p>If <var>point_var</var> points to the address of <var>var</var>, we can change the value of <var>var</var> by using <var>*point_var</var>.</p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> var = <span class="hljs-number">5</span>;
<span class="hljs-keyword">int</span>* point_var = *var;

<span class="hljs-comment">// change value at address point_var</span>
*point_var = <span class="hljs-number">1</span>;

<span class="hljs-built_in">cout</span> &lt;&lt; var &lt;&lt; <span class="hljs-built_in">endl</span>; <span class="hljs-comment">// Output: 1</span></code></pre>

<p>Here, <var>point_var</var> and <code>&amp;var</code> have the same address; the value of <var>var</var> will also be changed when <var>*point_var</var> is changed.</p>

<hr>
<h2 id="example2">Example 2: Changing Value Pointed by Pointers</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> var = <span class="hljs-number">5</span>;

  <span class="hljs-comment">// store address of var</span>
  <span class="hljs-keyword">int</span>* point_var = &amp;var;

  <span class="hljs-comment">// print var</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"var = "</span> &lt;&lt; var &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// print *point_var</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"*point_var = "</span> &lt;&lt; *point_var &lt;&lt; <span class="hljs-built_in">endl</span>
       &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Changing value of var to 7:"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// change value of var to 7</span>
  var = <span class="hljs-number">7</span>;

  <span class="hljs-comment">// print var</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"var = "</span> &lt;&lt; var &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// print *point_var</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"*point_var = "</span> &lt;&lt; *point_var &lt;&lt; <span class="hljs-built_in">endl</span>
       &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Changing value of *point_var to 16:"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// change value of var to 16</span>
  *point_var = <span class="hljs-number">16</span>;

  <span class="hljs-comment">// print var</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"var = "</span> &lt;&lt; var &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// print *point_var</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"*point_var = "</span> &lt;&lt; *point_var &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>var = 5
*point_var = 5

Changing value of var to 7:
var = 7
*point_var = 7

Changing value of *point_var to 16:
var = 16
*point_var = 16</samp></pre>

<p>Here <var>point_var</var> holds the address of <var>var</var>, and by dereferencing <var>point_var</var> with <code>*point_var</code>, we can access and modify the value stored at that address, which in turn affects the original variable <var>var.</var></p>

<hr>
<h2 id="common-mistakes">Common Mistakes When Working with Pointers</h2>

<p>Suppose we want a pointer <var>point_var</var> to point to the address of <var>var</var>. Then,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> var = <span class="hljs-number">5</span>;

<span class="hljs-comment">// Wrong! </span>
<span class="hljs-comment">// point_var is an address but var is not</span>
<span class="hljs-keyword">int</span>* point_var = var;

<span class="hljs-comment">// Wrong!</span>
<span class="hljs-comment">// &amp;var is an address</span>
<span class="hljs-comment">// *point_var is the value stored in &amp;var</span>
*point_var = &amp;var;

<span class="hljs-comment">// Correct! </span>
<span class="hljs-comment">// point_var is an address and so is &amp;var</span>
point_var = &amp;var;

<span class="hljs-comment">// Correct!</span>
<span class="hljs-comment">// both *point_var and var are values</span>
*point_var = var;</code></pre>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/pointers-arrays">How to represent an array using a pointer?</a></li>
  <li><a href="/cpp-programming/pointers-function">How to use pointers with functions?</a></li>
  <li><a href="/cpp-programming/structure-pointer">How to use pointers with structures?</a></li>
  <li><a href="/cpp-programming/pointers-function">C++Pass by Reference</a></li>
</ul>  </div>
</section>
<section id="six2">
<h1>C++ Pointers and Arrays</h1>
<div class="content">
    <p id="introduction">In C++, <a href="/cpp-programming/pointers">Pointers</a> are <a href="https://www.programiz.com/cpp-programming/variables-literals">variables</a> that hold addresses of other variables. Not only can a pointer store the address of a single variable, it can also store the address of cells of an <a href="/cpp-programming/arrays">array</a>.</p>

<p>Consider this example:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> *ptr;
<span class="hljs-keyword">int</span> arr[<span class="hljs-number">5</span>];

<span class="hljs-comment">// store the address of the first</span>
<span class="hljs-comment">// element of arr in ptr</span>
ptr = arr;</code></pre>

<p>Here, <var>ptr</var> is a pointer variable while <var>arr</var> is an <code>int</code> array. The code <code>ptr = arr;</code> stores the address of the first element of the array in variable <var>ptr</var>.</p>

<p>Notice that we have used <code>arr</code> instead of <code>&amp;arr[0]</code>. This is because both are the same. So, the code below is the same as the code above.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> *ptr;
<span class="hljs-keyword">int</span> arr[<span class="hljs-number">5</span>];
ptr = &amp;arr[<span class="hljs-number">0</span>];</code></pre>

<p>The addresses for the rest of the array elements are given by <code>&amp;arr[1]</code>, <code>&amp;arr[2]</code>, <code>&amp;arr[3]</code>, and <code>&amp;arr[4]</code>.</p>

<hr>
<h2 id="point-all">Point to Every Array Elements</h2>

<p>Suppose we need to point to the fourth element of the array using the same pointer <var>ptr</var>.</p>

<p>Here, if <var>ptr</var> points to the first element in the above example then <code>ptr + 3</code> will point to the fourth element. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> *ptr;
<span class="hljs-keyword">int</span> arr[<span class="hljs-number">5</span>];
ptr = arr;

ptr + <span class="hljs-number">1</span> is equivalent to &amp;arr[<span class="hljs-number">1</span>];
ptr + <span class="hljs-number">2</span> is equivalent to &amp;arr[<span class="hljs-number">2</span>];
ptr + <span class="hljs-number">3</span> is equivalent to &amp;arr[<span class="hljs-number">3</span>];
ptr + <span class="hljs-number">4</span> is equivalent to &amp;arr[<span class="hljs-number">4</span>];</code></pre>

<p>Similarly, we can access the elements using the single pointer. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// use dereference operator</span>
*ptr == arr[<span class="hljs-number">0</span>];
*(ptr + <span class="hljs-number">1</span>) is equivalent to arr[<span class="hljs-number">1</span>];
*(ptr + <span class="hljs-number">2</span>) is equivalent to arr[<span class="hljs-number">2</span>];
*(ptr + <span class="hljs-number">3</span>) is equivalent to arr[<span class="hljs-number">3</span>];
*(ptr + <span class="hljs-number">4</span>) is equivalent to arr[<span class="hljs-number">4</span>];</code></pre>

<p>Suppose if we have initialized <code>ptr = &amp;arr[2];</code> then</p>

<pre style="max-height: 600px;"><code class="cpp hljs">ptr - <span class="hljs-number">2</span> is equivalent to &amp;arr[<span class="hljs-number">0</span>];
ptr - <span class="hljs-number">1</span> is equivalent to &amp;arr[<span class="hljs-number">1</span>]; 
ptr + <span class="hljs-number">1</span> is equivalent to &amp;arr[<span class="hljs-number">3</span>];
ptr + <span class="hljs-number">2</span> is equivalent to &amp;arr[<span class="hljs-number">4</span>];</code></pre>

<figure><img alt="Working of C++ Pointers with Arrays" height="253" src="assets/images/cpp-pointers-and-arrays.png" title="Working of C++ Pointers with Arrays" width="520">
  <figcaption>Working of C++ Pointers with Arrays</figcaption>
</figure>

<div class="note-tip">
  <p><strong>Note:</strong> The address between <var>ptr</var> and <var>ptr + 1</var> differs by 4 bytes. It is because <var>ptr</var> is a pointer to an <code>int</code> data. And, the size of int is 4 bytes in a 64-bit operating system.</p>

  <p>Similarly, if pointer <var>ptr</var> is pointing to <code>char</code> type data, then the address between <var>ptr</var> and <var>ptr + 1</var> is 1 byte. It is because the size of a character is 1 byte.</p>
</div>

<hr>
<h2 id="example1">Example 1: C++ Pointers and Arrays</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ Program to display address of each element of an array </span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  <span class="hljs-keyword">float</span> arr[<span class="hljs-number">3</span>];

  <span class="hljs-comment">// declare pointer variable</span>
  <span class="hljs-keyword">float</span> *ptr;
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Displaying address using arrays: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// use for loop to print addresses of all array elements</span>
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">3</span>; ++i)
  {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"&amp;arr["</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">"] = "</span> &lt;&lt; &amp;arr[i] &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

  <span class="hljs-comment">// ptr = &amp;arr[0]</span>
  ptr = arr;

  <span class="hljs-built_in">cout</span>&lt;&lt;<span class="hljs-string">"\nDisplaying address using pointers: "</span>&lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// use for loop to print addresses of all array elements</span>
  <span class="hljs-comment">// using pointer notation</span>
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">3</span>; ++i)
  {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"ptr + "</span> &lt;&lt; i &lt;&lt; <span class="hljs-string">" = "</span>&lt;&lt; ptr + i &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Displaying address using arrays: 
&amp;arr[0] = 0x61fef0
&amp;arr[1] = 0x61fef4
&amp;arr[2] = 0x61fef8

Displaying address using pointers: 
ptr + 0 = 0x61fef0
ptr + 1 = 0x61fef4
ptr + 2 = 0x61fef8</samp></pre>

<p>In the above program, we first simply printed the addresses of the array elements without using the pointer variable <var>ptr</var>.</p>

<p>Then, we used the pointer <var>ptr</var> to point to the address of <var>a[0]</var>, <code>ptr + 1</code> to point to the address of <var>a[1]</var>, and so on.</p>

<hr>
<p>In most contexts, array names decay to pointers. In simple words, array names are converted to pointers. That's the reason why we can use pointers to access elements of arrays.</p>

<p>However, we should remember that pointers and arrays are not the same.</p>

<p>There are a few cases where array names don't decay to pointers. To learn more, visit: <a href="https://stackoverflow.com/questions/17752978/exceptions-to-array-decaying-into-a-pointer">When does array name doesn't decay into a pointer?</a></p>

<hr>
<h2 id="example2">Example 2: Array name used as pointer</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ Program to insert and display data entered by using pointer notation.</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">float</span> arr[<span class="hljs-number">5</span>];
  
 <span class="hljs-comment">// Insert data using pointer notation</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter 5 numbers: "</span>;
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">5</span>; ++i) {

      <span class="hljs-comment">// store input number in arr[i]</span>
      <span class="hljs-built_in">cin</span> &gt;&gt; *(arr + i) ;

  }

  <span class="hljs-comment">// Display data using pointer notation</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Displaying data: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">5</span>; ++i) {

      <span class="hljs-comment">// display value of arr[i]</span>
      <span class="hljs-built_in">cout</span> &lt;&lt; *(arr + i) &lt;&lt; <span class="hljs-built_in">endl</span> ;

  }

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter 5 numbers: 2.5
3.5
4.5
5
2
Displaying data: 
2.5
3.5
4.5
5
2</samp></pre>

<p>Here,</p>

<ol>
  <li>
      <p>We first used the pointer notation to store the numbers entered by the user into the array <var>arr</var>.</p>

      <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cin</span> &gt;&gt; *(arr + i) ;</code></pre>

      <p>This code is equivalent to the code below:</p>

      <p>&nbsp;</p>

      <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cin</span> &gt;&gt; arr[i];</code></pre>

      <p>Notice that we haven't declared a separate pointer variable, but rather we are using the array name <var>arr</var> for the pointer notation.</p>

      <p>As we already know, the array name <var>arr</var> points to the first element of the array. So, we can think of <var>arr</var> as acting like a pointer.</p>
  </li>
  <li>
      <p>Similarly, we then used <a href="https://www.programiz.com/cpp-programming/for-loop">for</a> loop to display the values of <var>arr</var> using pointer notation.</p>

      <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cout</span> &lt;&lt; *(arr + i) &lt;&lt; <span class="hljs-built_in">endl</span> ;</code></pre>

      <p>This code is equivalent to</p>

      <pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cout</span> &lt;&lt; arr[i] &lt;&lt; <span class="hljs-built_in">endl</span> ;</code></pre>
  </li>
</ol>
</div>
</section>
<section id="six3">
<h1>C++ References</h1>
<div class="content">
    <p>In C++, we use a reference to create an alias for a variable. We can use the reference variable to access or modify the variable. </p>

<hr>
<h2 id="create-a-reference">Create a C++ Reference</h2>

<p>We use the ampersand sign to create a reference. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">string</span>&amp; ref_city = city;</code></pre>

<p>Here,</p>

<ul>
  <li><code>string</code> - datatype of the variable</li>
  <li><code>&amp;</code> - denotes we are creating a reference</li>
  <li><var>ref_city</var> - name of the reference variable</li>
  <li><var>city</var> - the variable for which reference is created</li>
</ul>

<hr>
<h3 id="example">Example: C++ Reference</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">string</span> city = <span class="hljs-string">"Paris"</span>;

  <span class="hljs-comment">// create a reference to the variable</span>
  <span class="hljs-built_in">string</span>&amp; ref_city = city;
  
  <span class="hljs-comment">// display the variable</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Variable Value: "</span> &lt;&lt; city &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Reference Value: "</span> &lt;&lt; ref_city &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Variable Value: Paris
Reference Value: Paris</samp></pre>

<p>In the above example, we have used the reference variable <code>ref_city</code> to display the value of the variable <code>city</code>.</p>

<hr>
<h2 id="modify-using-reference">Modify Variables Using References</h2>

<p>We can modify a variable by simply assigning a new value to the reference variable. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">string</span> city = <span class="hljs-string">"Paris"</span>;

  <span class="hljs-comment">// create a reference to the variable</span>
  <span class="hljs-built_in">string</span>&amp; ref_city = city;
  
  <span class="hljs-comment">// display the variable</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Variable Value = "</span> &lt;&lt; city &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Reference Value = "</span> &lt;&lt; ref_city &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// modify the variable using reference</span>
  ref_city = <span class="hljs-string">"New York"</span>;

  <span class="hljs-comment">// display the variable</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-built_in">endl</span> &lt;&lt; <span class="hljs-string">"After Modification: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span>  &lt;&lt; <span class="hljs-string">"Variable Value = "</span> &lt;&lt; city &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Reference Value = "</span> &lt;&lt; ref_city &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Variable Value: Paris
Reference Value: Paris

After Modification:
Variable Value: = New York
Reference Value: New York</samp></pre>

<hr>
<h2 id="important-points">Important Points </h2>

<p><strong>1. Placement of the <code>&amp;</code> sign</strong></p>

<p>We can place the <code>&amp;</code> sign with data type or with a variable while creating a reference. However, the standard practice is to use the sign along with the data type. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// create a variable</span>
<span class="hljs-built_in">string</span> city = <span class="hljs-string">"Paris"</span>;

<span class="hljs-comment">// valid but not a standard practice</span>
<span class="hljs-built_in">string</span> &amp;ref_city = city;

<span class="hljs-comment">// valid and a standard practice</span>
sring&amp; ref_city = city;</code></pre>

<p><strong>2. References Initialization</strong></p>

<p>We must initialize references at the time of declaration.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// create a variable</span>
<span class="hljs-built_in">string</span> city = <span class="hljs-string">"Paris"</span>;

<span class="hljs-comment">// incorrect code [reference not initialized]</span>
<span class="hljs-built_in">string</span>&amp; ref_city;
ref_city = city;

<span class="hljs-comment">// correct code</span>
<span class="hljs-built_in">string</span>&amp; ref_city = city;</code></pre>

<p><strong>3. Reference With a New Variable</strong></p>
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
  </div><div class="clearfix"></div><p>Once we create a reference to a variable, it cannot be changed to refer to another variable. For example, </p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-built_in">string</span> city1 = <span class="hljs-string">"Paris"</span>;

  <span class="hljs-comment">// create a reference to the variable</span>
  <span class="hljs-built_in">string</span>&amp; ref_city = city1;
  
  <span class="hljs-comment">// display the variable</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"city1 = "</span> &lt;&lt; city1 &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"ref_city = "</span> &lt;&lt; ref_city &lt;&lt; <span class="hljs-built_in">endl</span>;
  
  <span class="hljs-built_in">string</span> city2 = <span class="hljs-string">"New York"</span>;
  
  <span class="hljs-comment">// trying to modify the ref_city reference variable to refer to city2</span>
  <span class="hljs-comment">// but it assigns the value of city2 to the variable city1</span>
  ref_city = city2;

  <span class="hljs-comment">// display the variables</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-built_in">endl</span> &lt;&lt; <span class="hljs-string">"city1 = "</span> &lt;&lt; city1 &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"city2 = "</span> &lt;&lt; city2 &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"ref_city = "</span> &lt;&lt; ref_city &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>city1 = Paris
ref_city = Paris

city1 = New York
city2 = New York
ref_city = New York</samp></pre>

<p>Here, when we try to modify the reference variable <var>ref_city</var> to refer to the variable <var>city2</var> in the line <code>my_city = city2;</code>, the reference variable <var>my_city</var> is not modified to refer to <var>city2</var>. </p>

<p>Rather, the value of <var>city2</var> is assigned to the variable <var>city1</var>, as the reference variable <var>ref_city</var> refers to the variable <var>city1</var>.</p>

<hr>
<div class="faq-section"><h2 class="section-title faq-section__title">Frequently Asked Questions

</h2><div class="container"><div class="row"><div class="col-12"><div class="faq-area"><div class="accordion"><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">What are the types of references?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>There are two main types of references in C++:</p>

<ul>
  <li><code>lvalue</code> references</li>
  <li><code>rvalue</code> reference</li>
</ul>

<p><strong>lvalue references</strong></p>

<p><code>lvalue</code> is a variable or object, and it may exist beyond the expression it is created. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> a = <span class="hljs-number">5</span>;</code></pre>

<p>Here, we have created the variable <var>a</var> in this expression, however, it may be used in any other expression of the program. In fact, it can be used in the scope it is declared on.</p>

<p>As the name suggests, <code>lvalue</code> references are used to refer to lvalues (variables or objects).</p>

<p><strong>rvalue references</strong></p>

<p><code>rvalue</code> is a value (like literal, result of operator, return value of function, etc.) that doesn't exist beyond the expression that it is created on.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> a = <span class="hljs-number">5</span>;</code></pre>

<p>Here, <strong>5</strong> is the <code>rvalue</code>. It cannot be accessed from another expression.</p>

<p class="note-tip"><strong>Note:</strong> All references that we have used in this article are <code>lvalue</code> references. <code>rvalue</code> references are generally used in move semantics, which is beyond the scope of this tutorial.</p>

</div></div></div><div class="accordion__nodes"><div class="accordion-header"><span class="accordion-header__title">What are the differences between references and pointers?

</span><svg class="programiz-icon accordion-header__icon"><use xlink:href="/sites/all/themes/programiz/assets/feather-sprite.svg#chevron-right"></use></svg></div><div class="accordion-body"><div class="editor-contents--accordion"><p>1. A reference is an alias for a variable, however, a pointer is a different variable that stores the memory address of a variable. For example, </p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"s = "</span> &lt;&lt; s &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">string</span> s = <span class="hljs-string">"Paris"</span>;

<span class="hljs-built_in">string</span>* pointer_to_s = &amp;s;
<span class="hljs-comment">// prints the memory address of s</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"pointer_to_s = "</span> &lt;&lt; pointer_to_s &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">string</span>&amp; ref_s = s;
<span class="hljs-comment">// prints the string s</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"ref_s = "</span> &lt;&lt; ref_s &lt;&lt; <span class="hljs-built_in">endl</span>;</code></pre>

<p>2. We use the dereference operator <code>*</code> to access the value pointed by a pointer. However, we can directly use the reference without any operator.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// print the value of the variable using pointer</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"*pointer_to_s = "</span> &lt;&lt; *pointer_to_s &lt;&lt; <span class="hljs-built_in">endl</span>;

<span class="hljs-comment">// print the value of the variable using reference</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"ref_s = "</span> &lt;&lt; ref_s &lt;&lt; <span class="hljs-built_in">endl</span>;</code></pre>

<p>3. We can change the pointer to point to another variable. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// create variable city1 and city2</span>
<span class="hljs-built_in">string</span> city1 = <span class="hljs-string">"New York"</span>;
<span class="hljs-built_in">string</span> city2 = <span class="hljs-string">"Las Vegas"</span>;

<span class="hljs-comment">// create a pointer to city1</span>
<span class="hljs-built_in">string</span>* point_city = &amp;city1;

<span class="hljs-comment">// print the value pointed by point_city</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"*point_city = "</span> &lt;&lt; *point_city &lt;&lt; <span class="hljs-built_in">endl</span>;

<span class="hljs-comment">// change the pointer to point to city2</span>
point_city = &amp;city2;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"*point_city = "</span> &lt;&lt; *point_city &lt;&lt; <span class="hljs-built_in">endl</span>;</code></pre>

<p>However, we cannot change the reference to refer to another variable. </p>

</div></div></div></div></div></div></div></div></div>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/pointers-function">C++ Pass by Reference</a> </li>
  <li><a href="/cpp-programming/return-reference">C++ Return by Reference (programiz.com)</a></li>
</ul>

</div>
</section>
<section id="six4">
<h1>C++ Call by Reference: Using pointers</h1>
<div class="content">
    <p id="introduction">In the <a href="/cpp-programming/function">C++ Functions</a> tutorial, we learned about passing arguments to a function. This method used is called pass by value because the actual value is passed.</p>

<p>However, there is another way of passing arguments called <strong>pass by reference</strong>.</p>

<p>Pass by reference is a method of argument passing in functions where the <em>references</em> of actual parameters are passed to the function, rather than their values. </p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// function that takes value as parameter</span>

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">func1</span><span class="hljs-params">(<span class="hljs-keyword">int</span> num_val)</span> </span>{
  <span class="hljs-comment">// code</span>
}

<span class="hljs-comment">// function that takes reference as parameter</span>
<span class="hljs-comment">// notice the &amp; before the parameter</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">func2</span><span class="hljs-params">(<span class="hljs-keyword">int</span>&amp; num_ref)</span> </span>{
  <span class="hljs-comment">// code</span>
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> num = <span class="hljs-number">5</span>;

  <span class="hljs-comment">// pass by value</span>
  func1(num);

  <span class="hljs-comment">// pass by reference</span>
  func2(num);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p>Notice the <code>&amp;</code> in <code>void func2(int&amp; num_ref)</code>. This denotes that we are using the reference of the <a href="/cpp-programming/variables-literals">variable</a> as our parameter.</p>

<p>So, when we call the <code>func2()</code> function in <code>main()</code> by passing the variable <var>num</var> as an argument, we are actually passing the reference of the <var>num</var> variable instead of the value <strong>5</strong>.</p>

<hr>
<h2 id="example1">Example: Pass by Reference</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// function definition to swap values</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span>&amp; n1, <span class="hljs-keyword">int</span>&amp; n2)</span> </span>{
  <span class="hljs-keyword">int</span> temp;
  temp = n1;
  n1 = n2;
  n2 = temp;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// initialize variables</span>
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">1</span>, b = <span class="hljs-number">2</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Before swapping"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a = "</span> &lt;&lt; a &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"b = "</span> &lt;&lt; b &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// call function to swap numbers</span>
  swap(a, b);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nAfter swapping"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a = "</span> &lt;&lt; a &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"b = "</span> &lt;&lt; b &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Before swapping
a = 1
b = 2

After swapping
a = 2
b = 1</samp></pre>

<p>In this program, we passed the variables <var>a</var> and <var>b</var> to the <code>swap()</code> function. Notice the function definition,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span>&amp; n1, <span class="hljs-keyword">int</span>&amp; n2)</span></span></code></pre>

<p>Here, we used <code>&amp;</code> to denote that the function accepts references as its parameters.</p>

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
  </div><div class="clearfix"></div><p>Hence, the compiler can identify that instead of actual values, the reference of the variables is passed to function parameters.</p>

<p>In the <code>swap()</code> function, the function parameters <var>n1</var> and <var>n2</var> are pointing to the same value as the variables <var>a</var> and <var>b</var> respectively. Hence the swapping takes place on actual value.</p>

<hr>
<h2 id="const">Pass by const Reference</h2>

<p>When the values of variables do not need to be changed, we can pass them as <code>const</code> references.</p>

<p>Let's look at an example.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// function to add two numbers </span>
<span class="hljs-comment">// using const references</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">add</span><span class="hljs-params">(<span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span>&amp; num1, <span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span>&amp; num2)</span> </span>{
  <span class="hljs-keyword">return</span> num1 + num2;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> number1, number2;

  <span class="hljs-comment">// take input</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter the first number: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; number1;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter the second number: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; number2;

  <span class="hljs-comment">// call add function</span>
  <span class="hljs-keyword">int</span> sum = add(number1, number2);

  <span class="hljs-comment">// displaying the result</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The sum of "</span> &lt;&lt; number1 &lt;&lt; <span class="hljs-string">" and "</span> &lt;&lt; number2 &lt;&lt; <span class="hljs-string">" is "</span> &lt;&lt; sum &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter the first number: 1
Enter the second number: 2
The sum of 1 and 2 is 3</samp></pre>

<p>Here, we've used the <code>const</code> keyword to pass values using <code>const</code> references.</p>

<p>Using <code>const</code> references prevents the values from being changed inside the function. For example, let's try to use const references to swap two numbers.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// function definition to swap values</span>
<span class="hljs-comment">// using const references</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span>&amp; n1,<span class="hljs-keyword">const</span> <span class="hljs-keyword">int</span>&amp; n2)</span> </span>{
  <span class="hljs-keyword">int</span> temp;
  temp = n1;
  n1 = n2;
  n2 = temp;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// initialize variables</span>
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">1</span>, b = <span class="hljs-number">2</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Before swapping"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a = "</span> &lt;&lt; a &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"b = "</span> &lt;&lt; b &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// call function to swap numbers</span>
  swap(a, b);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nAfter swapping"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a = "</span> &lt;&lt; a &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"b = "</span> &lt;&lt; b &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>ERROR!
/tmp/RXT9OkJpWq.cpp: In function 'void swap(const int&amp;, const int&amp;)':
/tmp/RXT9OkJpWq.cpp:9:8: error: assignment of read-only reference 'n1'
  9 |     n1 = n2;
    |     ~~~^~~~
/tmp/RXT9OkJpWq.cpp:10:8: error: assignment of read-only reference 'n2'
 10 |     n2 = temp;
    |     ~~~^~~~~~</samp></pre>

<p>Here, we got an error because we tried to change the values of variables passed using <code>const</code> references.</p>

<p class="note-tip"><strong>Note</strong>: By using <code>const</code> references, we get more control over our code as we can explicitly determine which functions can and cannot change the values of variables. This enhances code safety and makes it easier to debug.</p>

<hr>
<h2 id="pointers">Pass by Pointers (Discouraged)</h2>

<p>The above task can be done using the pointers. To learn about pointers, visit <a href="/cpp-programming/pointers">C++ Pointers</a>.</p>

<p>Let's look at an example.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// function prototype with pointers as parameters</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span>*, <span class="hljs-keyword">int</span>*)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// initialize variables</span>
  <span class="hljs-keyword">int</span> a = <span class="hljs-number">1</span>, b = <span class="hljs-number">2</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Before swapping"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a = "</span> &lt;&lt; a &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"b = "</span> &lt;&lt; b &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// call function by passing variable addresses</span>
  swap(&amp;a, &amp;b);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nAfter swapping"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"a = "</span> &lt;&lt; a &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"b = "</span> &lt;&lt; b &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-comment">// function definition to swap numbers</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">swap</span><span class="hljs-params">(<span class="hljs-keyword">int</span>* n1, <span class="hljs-keyword">int</span>* n2)</span> </span>{
  <span class="hljs-keyword">int</span> temp;
  temp = *n1;
  *n1 = *n2;
  *n2 = temp;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Before swapping
a = 1
b = 2

After swapping
a = 2
b = 1</samp></pre>

<p>Here, we can see the output is the same as in the previous example. Notice the line,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// &amp;a is address of a</span>
<span class="hljs-comment">// &amp;b is address of b</span>
swap(&amp;a, &amp;b);</code></pre>

<p>Here, the address of the variable is passed during the function call rather than the variable.</p>

<p>Since the address is passed instead of the value, a dereference operator <code>*</code> must be used to access the value stored in that address.</p>

<pre style="max-height: 600px;"><code class="cpp hljs">temp = *n1;
*n1 = *n2;
*n2 = temp;</code></pre>

<p><code>*n1</code> and <code>*n2</code> gives the value stored at address <var>n1</var> and <var>n2</var> respectively.</p>

<p>Since <var>n1</var> and <var>n2</var> contain the addresses of <var>a</var> and <var>b</var>, anything is done to <code>*n1</code> and <var>*n2</var> will change the actual values of <var>a</var> and <var>b</var>.</p>

<p>Hence, when we print the values of <var>a</var> and <var>b</var> in the <code>main()</code> function, the values are changed.</p>

<div class="note-tip">
<p><strong>Warning</strong>: Using references instead of pointers is generally easier and less error-prone as it doesn't involve direct pointer operations.</p>

<p>Pointers should only be used to pass arguments in contexts where pointers are specifically needed or when interacting with C libraries.</p>

</div>
</div>
</section>
<section id="six5">
<h1>C++ Memory Management: new and delete</h1>
<div class="content">
    <p id="introduction">C++ allows us to allocate the memory dynamically in run time. This is known as dynamic memory allocation.</p>

<p>In other programming languages such as <a href="/java-programming">Java</a> and <a href="/python-programming">Python</a>, the compiler automatically manages the memories allocated to variables. But this is not the case in C++.</p>

<p>In C++, we need to deallocate the dynamically allocated memory manually after we have no use for the variable.</p>

<p>We can allocate and then deallocate memory dynamically using the <code>new</code> and <code>delete</code> operators respectively.</p>

<hr>
<h2 id="new-expression">C++ new Expression</h2>

<p>We can use the <code>new</code> expression to allocate memory in run time. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// declare an int pointer</span>
<span class="hljs-keyword">int</span>* point_var;

<span class="hljs-comment">// dynamically allocate memory</span>
<span class="hljs-comment">// using the new keyword </span>
point_var = <span class="hljs-keyword">new</span> <span class="hljs-keyword">int</span>;

<span class="hljs-comment">// assign value to allocated memory</span>
*point_var = <span class="hljs-number">45</span>;</code></pre>

<p>Here, we have dynamically allocated memory for an <code>int</code> variable using the <code>new</code> expression.</p>

<p>Notice that we have used the pointer <var>point_var</var> to allocate the memory dynamically. This is because the <code>new</code> expression returns the address of the memory location.</p>

<p>We can also allocate memory and initialize the value in the same step as:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// dynamically allocate memory</span>
<span class="hljs-comment">// and assign value</span>
<span class="hljs-keyword">int</span>* point_var = <span class="hljs-keyword">new</span> <span class="hljs-keyword">int</span>{<span class="hljs-number">45</span>};</code></pre>

<p>Using this syntax avoids uninitialized pointers. Uninitialized pointers may cause undefined behavior when dereferenced. So this is the preferred syntax.</p>

<p>The syntax for using the <code>new</code> expression is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">data_type* pointer_variable = <span class="hljs-keyword">new</span> data_type{value};</code></pre>

<hr>
<h2 id="delete-expression">delete Expression</h2>

<p>Once we no longer need to use a variable that we have declared dynamically, we can deallocate the memory occupied by the variable.</p>

<p>For this, we can use the <code>delete</code> expression. It returns the memory back to the operating system. This is known as <strong>memory deallocation</strong>.</p>

<p>The syntax for <code>delete</code> expression is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">delete</span> pointer_variable;</code></pre>

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
  </div><div class="clearfix"></div><p>Let's look at an example.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// dynamically allocate memory</span>
<span class="hljs-comment">// and assign int variable </span>
<span class="hljs-keyword">int</span>* point_var = <span class="hljs-keyword">new</span> <span class="hljs-keyword">int</span>{<span class="hljs-number">45</span>};

<span class="hljs-comment">// print the value stored in memory</span>
<span class="hljs-built_in">cout</span> &lt;&lt; *point_var; <span class="hljs-comment">// Output: 45</span>

<span class="hljs-comment">// deallocate the memory</span>
<span class="hljs-keyword">delete</span> point_var;

<span class="hljs-comment">// set pointer to nullptr</span>
point_var = <span class="hljs-literal">nullptr</span>;</code></pre>

<p>Here, we have dynamically allocated memory for an <code>int</code> variable using the pointer <var>point_var</var>.</p>

<p>After printing the contents of <var>point_var</var>, we deallocated the memory using <code>delete</code>.</p>

<p>It is a good practice to set pointer to <code>nullptr</code> after deallocating the memory to avoid undefined behavior if the pointer is dereferenced. </p>

<p class="note-tip"><strong>Note</strong>: Not deallocating memory properly can cause memory leaks which in turn causes the program to consume a large amount of memory. Proper use of the <code>delete</code> expression is essential to prevent memory leaks and ensure efficient memory management.</p>

<hr>
<h2 id="example1">Example 1: C++ Dynamic Memory Allocation</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// dynamically allocate memory</span>
  <span class="hljs-keyword">int</span>* point_int = <span class="hljs-keyword">new</span> <span class="hljs-keyword">int</span>{<span class="hljs-number">45</span>};
  <span class="hljs-keyword">float</span>* point_float = <span class="hljs-keyword">new</span> <span class="hljs-keyword">float</span>{<span class="hljs-number">45.45f</span>};

  <span class="hljs-built_in">cout</span> &lt;&lt; *point_int &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; *point_float &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-comment">// deallocate the memory</span>
  <span class="hljs-comment">// set pointers to nullptr</span>
  <span class="hljs-keyword">delete</span> point_int;

  <span class="hljs-keyword">delete</span> point_float;
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>45
45.45</samp></pre>

<p>In this program, we dynamically allocated memory to two variables of <code>int</code> and <code>float</code> types.</p>

<p>After assigning values to them and printing them, we finally deallocate the memories using the <code>delete</code> expression.</p>

<div class="note-tip">
<p><strong>Note</strong>: Dynamic memory allocation can make memory management more efficient, especially for arrays, where many times we may not know the size of the array until runtime.</p>

</div>
<hr>
<h2 id="example2">Example 2: C++ new and delete Expression for Arrays</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to store GPA of n number of students and display it</span>
<span class="hljs-comment">// where n is the number of students entered by the user</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-keyword">int</span> num;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter total number of students: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; num;
  <span class="hljs-keyword">float</span>* ptr;
  
  <span class="hljs-comment">// memory allocation of num number of floats</span>
  ptr = <span class="hljs-keyword">new</span> <span class="hljs-keyword">float</span>[num];
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter GPA of students."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; num; ++i) {
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Student"</span> &lt;&lt; i + <span class="hljs-number">1</span> &lt;&lt; <span class="hljs-string">": "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; *(ptr + i);
  }
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nDisplaying GPA of students."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; num; ++i) {
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Student"</span> &lt;&lt; i + <span class="hljs-number">1</span> &lt;&lt; <span class="hljs-string">": "</span> &lt;&lt; *(ptr + i) &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
  
  <span class="hljs-comment">// ptr memory is released</span>
  <span class="hljs-keyword">delete</span>[] ptr;
  ptr = <span class="hljs-literal">nullptr</span>;
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter total number of students: 4
Enter GPA of students.
Student1: 3.6
Student2: 3.1
Student3: 3.9
Student4: 2.9

Displaying GPA of students.
Student1: 3.6
Student2: 3.1
Student3: 3.9
Student4: 2.9</samp></pre>

<p>In this program, we have asked the user to enter the number of students and store it in the <var>num</var> variable.</p>

<p>Then, we have allocated the memory dynamically for the <code>float</code> array using <var>new</var>.</p>

<p>We enter data into the array (and later print them) using pointer notation.</p>

<p>After we no longer needed the array, we deallocated the array memory using the code:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">delete</span>[] ptr;.</code></pre>

<p>Notice the use of <code>[]</code> after <code>delete</code>. We use the square brackets <code>[]</code> in order to denote that the memory deallocation is that of an array.</p>

<hr>
<h2 id="example3">Example 3: C++ new and delete Expression for Objects</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Student</span> {</span>
  <span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">int</span> age;
  
  <span class="hljs-keyword">public</span>:
  
  <span class="hljs-comment">// constructor initializes age to 12</span>
  Student() : age(<span class="hljs-number">12</span>) {}
  
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">get_age</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Age = "</span> &lt;&lt; age &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// dynamically declare student object</span>
  Student* ptr = <span class="hljs-keyword">new</span> Student();
  
  <span class="hljs-comment">// call get_age() function</span>
  ptr-&gt;get_age();
  
  <span class="hljs-comment">// ptr memory is released</span>
  <span class="hljs-keyword">delete</span> ptr;
  
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Age = 12</samp></pre>

<p>In this program, we have created a <code>Student</code> class that has a private variable <var>age</var>.</p>

<p>We have initialized <var>age</var> to <code>12</code> in the <a href="/cpp-programming/constructors#default-constructor">default constructor</a> <code>Student()</code> and printed its value with the function <code>get_age()</code>.</p>

<p>In <code>main()</code>, we have created a <code>Student</code> object using the <code>new</code> expression and use the pointer <var>ptr</var> to point to its address.</p>

<p>The moment the object is created, the <code>Student()</code> constructor initializes <var>age</var> to <code>12</code>.</p>

<p>We then call the <code>get_age()</code> function using the code:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">ptr-&gt;get_age();</code></pre>

<p>Notice the arrow operator <code>-&gt;</code>. This operator is used to access class members using pointers.</p>

<hr>
<h2 id="why">Why Use Dynamic Memory Allocation?</h2>

<p>Dynamic memory allocation has several advantages, such as:</p>

<ul>
  <li><strong>Flexibility</strong>: Dynamic memory allocation allows us to allocate memory as needed during runtime. This flexibility is useful when the size of data structures is not known at compile time or when the size changes during program execution.</li>
</ul>

<ul>
  <li><strong>Data Structures</strong>: Data structures such as linked lists, trees, graphs, and resizable arrays (vectors in C++) often need to allocate memory dynamically to accommodate varying amounts of data.</li>
</ul>

<ul>
  <li><strong>Resource Management</strong>: We can allocate memory when needed and deallocate it when it's no longer required. This leads to better resource utilization.</li>
</ul>

<ul>
  <li><strong>Dynamic Arrays</strong>: In languages like C++, static arrays have fixed sizes determined at compile time. Dynamic memory allocation allows us to create arrays whose size can be determined during runtime.</li>
</ul>

<hr>
<p><strong>Read More:</strong></p>

<ul>
  <li><a href="/cpp-programming/vectors">C++ std::vector</a></li>
</ul>

</div>
</section>

<!-- seven menu sections -->
<section id="seven1">
<h1>C++ Structures</h1>
<div class="content">
    <p id="introduction">A structure is a collection of <a href="/cpp-programming/variables-literals#variables">variables</a> of different <a href="/cpp-programming/data-types">data types</a> and member functions under a single name. </p>

<p>It is similar to a <a href="/cpp-programming/object-class">class</a> as both hold a collection of data of different data types.</p>

<p>Suppose you want to store some information about a person: their <var>first_name</var>, <var>last_name</var>, <var>age</var>, and <var>salary</var>. </p>

<p>You can easily create different variables—<var>first_name</var>, <var>last_name</var>,  <var>age</var>, <var>salary</var>—to store this information separately.</p>

<p>However, in the future, you might want to store information about multiple people. </p>

<p>Now, you'd need to create different variables for each information per person: <var>first_name1</var>, <var>last_name1</var>, <var>age1</var>, <var>salary1</var>, <var>first_name2</var>, <var>last_name2</var>, <var>age2</var>, <var>salary2</var>, …</p>

<p>You can visualize how big and messy the code would look. Additionally, as there is no relation between the variables (information), it would be a daunting task to manage.</p>

<p>A better approach is to have a collection of all related information under a single name, such as <var>Person</var> and use it for every individual. </p>

<p>Now, the code looks much cleaner, more readable, and efficient as well.</p>

<p>This collection of all related information under a single name <var>Person</var> is a structure.</p>

<hr>
<h2 id="declare-structure">How to Declare a Structure in C++ Programming?</h2>

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
  </div><div class="clearfix"></div><p>The <code>struct</code> <a href="/cpp-programming/keywords-identifiers#keywords">keyword</a> defines a structure type followed by an <a href="/cpp-programming/keywords-identifiers#identifiers">identifier</a> (name of the structure).</p>

<p>Then, inside the curly braces, you can declare one or more members (declare variables inside curly braces) of that structure. For example:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span>
{</span>
  <span class="hljs-built_in">string</span> first_name;
  <span class="hljs-built_in">string</span> last_name;
  <span class="hljs-keyword">int</span> age;
  <span class="hljs-keyword">float</span> salary;
};</code></pre>

<p>Here, the structure <var>Person</var> is defined which has four members: <var>first_name, last_name</var>, <var>age</var>, and <var>salary</var>.</p>

<p>When a structure is defined, no memory is allocated.</p>

<p>The structure definition is only the blueprint for the creation of variables. You can imagine it as a data type. </p>

<p>When you define an integer as below:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">int</span> foo;</code></pre>

<p>The <code>int</code> specifies that variable <var>foo</var> can hold integer elements only. Similarly, structure definition only specifies what property a structure variable holds when it is defined.</p>

<p class="note-tip"><strong>Note: </strong>Remember to end the declaration with a semicolon <strong>(;)</strong>.</p>

<hr>
<h2 id="define-structure">How to Define a Structure Variable?</h2>

<p>Once you declare a structure <var>Person</var> as above, you can define a structure variable as:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">Person bill;</code></pre>

<p>Here, a structure variable <var>bill</var> is defined, which is of type structure <var>Person</var>.</p>

<p>Only when the structure variable is declared is the required memory allocated by the compiler.</p>

<hr>
<h2 id="access-member">How to Access Members of a Structure?</h2>

<p>The members of a structure variable are accessed using a <strong>dot (.)</strong> <a href="/cpp-programming/operators">operator</a>.</p>

<p>Suppose you want to access the age of the structure variable <var>bill</var> and assign <strong>50</strong> to it. You can perform this task by using the following code:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">bill.age = <span class="hljs-number">50</span>;</code></pre>

<hr>
<h2 id="example">Example: C++ Structure</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Program to assign data to members of a structure variable</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span>
{</span>
  <span class="hljs-built_in">string</span> first_name;
  <span class="hljs-built_in">string</span> last_name;
  <span class="hljs-keyword">int</span> age;
  <span class="hljs-keyword">float</span> salary;
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  Person p1;
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter first name: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; p1.first_name;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter last name: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; p1.last_name;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter age: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; p1.age;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter salary: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; p1.salary;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nDisplaying Information."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"First Name: "</span> &lt;&lt; p1.first_name &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Last Name: "</span> &lt;&lt; p1.last_name &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Age: "</span> &lt;&lt; p1.age &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Salary: "</span> &lt;&lt; p1.salary;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter first name: Jane
Enter last name: Smith
Enter age: 27
Enter salary: 10000

Displaying Information.
First Name: Jane
Last Name: Smith
Age: 27
Salary: 10000</samp></pre>

<p>Here the structure <var>Person</var> is declared which has four members: <var>first_name</var>, <var>last_name</var>, <var>age</var> and <var>salary</var>.</p>

<p>Inside the <code>main()</code> <a href="/cpp-programming/function">function</a>, a structure variable <var>p1</var> is defined. Then, the user is asked to enter information, and data entered by the user is displayed.</p>

<hr>
<h2 id="member-functions">Member Functions in C++ Structures</h2>

<p>In C++, structures can also have member functions.</p>

<p>These member functions are similar to regular functions but are defined within the scope of a structure. They can access and manipulate the data members of the structure directly.</p>

<p>We can declare a member function by defining the function within the structure definition.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
  <span class="hljs-built_in">string</span> first_name;
  <span class="hljs-built_in">string</span> last_name;
  <span class="hljs-keyword">int</span> age;
  <span class="hljs-keyword">float</span> salary;

  <span class="hljs-comment">// member function to display information about the person</span>
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayInfo</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"First Name: "</span> &lt;&lt; first_name &lt;&lt; <span class="hljs-built_in">endl</span>;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Last Name: "</span> &lt;&lt; last_name &lt;&lt; <span class="hljs-built_in">endl</span>;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Age: "</span> &lt;&lt; age &lt;&lt; <span class="hljs-built_in">endl</span>;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Salary: "</span> &lt;&lt; salary &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};</code></pre>

<p>In this example, the <code>Person</code> structure includes a member function, <code>displayInfo()</code> which displays the information about the person.</p>

<p>Let's look at an example.<br>
</p><div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
  <span class="hljs-built_in">string</span> first_name;
  <span class="hljs-built_in">string</span> last_name;
  <span class="hljs-keyword">int</span> age;
  <span class="hljs-keyword">float</span> salary;

  <span class="hljs-comment">// member function to display information about the person</span>
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display_info</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"First Name: "</span> &lt;&lt; first_name &lt;&lt; <span class="hljs-built_in">endl</span>;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Last Name: "</span> &lt;&lt; last_name &lt;&lt; <span class="hljs-built_in">endl</span>;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Age: "</span> &lt;&lt; age &lt;&lt; <span class="hljs-built_in">endl</span>;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Salary: "</span> &lt;&lt; salary &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Person p1;
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter first name: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; p1.first_name;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter last name: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; p1.last_name;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter age: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; p1.age;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter salary: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; p1.salary;

  <span class="hljs-comment">// display information using member function</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nDisplaying Information."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  p1.display_info();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter first name: Jane
Enter last name: Smith
Enter age: 27
Enter salary: 10000

Displaying Information.
First Name: Jane
Last Name: Smith
Age: 27
Salary: 10000</samp></pre>

<hr>
<p><strong>Also Read</strong></p>

<ul>
  <li><a href="/cpp-programming/structure-function">How to pass structures to functions?</a></li>
  <li><a href="/cpp-programming/structure-pointer">How to use pointers with structures?</a></li>
</ul>

</div>
</section>
<section id="seven2">
<h1>C++ Structure and Function</h1>
<div class="content">
    <p id="introduction">We can pass <a href="/cpp-programming/structure">structure</a> variables to a <a href="/cpp-programming/function">function</a> and return it from a function in the same way as normal data types.</p>

<hr>
<h2 id="pass-structure">Passing Structure to Function in C++</h2>

<p>A structure variable can be passed to a function just like any other variable.</p>

<p>Consider this example:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
  <span class="hljs-built_in">string</span> first_name;
  <span class="hljs-built_in">string</span> last_name;
  <span class="hljs-keyword">int</span> age;
  <span class="hljs-keyword">float</span> salary;
};

<span class="hljs-comment">// declare function with</span>
<span class="hljs-comment">// structure variable type as an argument</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display_data</span><span class="hljs-params">(<span class="hljs-keyword">const</span> Person&amp;)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// initialize the structure variable</span>
  Person p {<span class="hljs-string">"John"</span>, <span class="hljs-string">"Doe"</span>, <span class="hljs-number">22</span>, <span class="hljs-number">145000</span>};

  <span class="hljs-comment">// function call with </span>
  <span class="hljs-comment">// structure variable as an argument</span>
  display_data(p);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display_data</span><span class="hljs-params">(<span class="hljs-keyword">const</span> Person&amp; p)</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"First Name: "</span> &lt;&lt; p.first_name &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Last Name: "</span> &lt;&lt; p.last_name &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Age: "</span> &lt;&lt; p.age &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Salary: "</span> &lt;&lt; p.salary;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>First Name: John
Last Name: Doe
Age: 22
Salary: 145000</samp></pre>

<p>In this program, we passed the structure variable <var>p</var> by reference to the function <code>display_data()</code> to display the members of <code>p</code>.</p>

<hr>
<h2 id="return-structure">Return Structure From Function in C++</h2>

<p>We can also return a structure variable from a function. </p>

<p>Let's look at an example.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// define structure</span>
<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Person</span> {</span>
  <span class="hljs-built_in">string</span> first_name;
  <span class="hljs-built_in">string</span> last_name;
  <span class="hljs-keyword">int</span> age;
  <span class="hljs-keyword">float</span> salary;
};

<span class="hljs-comment">// declare functions</span>
<span class="hljs-function">Person <span class="hljs-title">get_data</span><span class="hljs-params">()</span></span>;
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display_data</span><span class="hljs-params">(<span class="hljs-keyword">const</span> Person&amp;)</span></span>;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  Person p = get_data();
  display_data(p);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}

<span class="hljs-comment">// define function to return structure variable</span>
<span class="hljs-function">Person <span class="hljs-title">get_data</span><span class="hljs-params">()</span> </span>{

  Person p;
  
  <span class="hljs-built_in">string</span> first_name;
  <span class="hljs-built_in">string</span> last_name;
  <span class="hljs-keyword">int</span> age;
  <span class="hljs-keyword">float</span> salary;
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter first name: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; first_name;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter last name: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; last_name;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter age: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; age;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter salary: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; salary;
  
  <span class="hljs-comment">// return structure variable</span>
  <span class="hljs-keyword">return</span> Person{first_name, last_name, age, salary};
}

<span class="hljs-comment">// define function to take</span>
<span class="hljs-comment">// structure variable as an argument</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display_data</span><span class="hljs-params">(<span class="hljs-keyword">const</span> Person&amp; p)</span> </span>{
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nDisplaying Information."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"First Name: "</span> &lt;&lt; p.first_name &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Last Name: "</span> &lt;&lt; p.last_name &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Age: "</span> &lt;&lt; p.age &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Salary: "</span> &lt;&lt; p.salary;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Enter first name: John
Enter last name: Doe
Enter age: 22
Enter salary: 145000

Displaying Information.
First Name: John
Last Name: Doe
Age: 22
Salary: 145000</samp></pre>

<p>In this program, we took user input for the structure variable  in the <code>get_data()</code> function and returned it from the function</p>

<p>Then we passed the structure variable <var>p</var> to <code>display_data()</code> function by reference, which displays the information.</p>

<hr>
<p><strong>Also Read:</strong></p>

<ul>
  <li><a href="/cpp-programming/examples/complex-number-add">C++ Program to Add Complex Numbers by Passing Structure to a Function</a></li>
</ul>

</div>
</section>
<section id="seven3">
<h1>C++ Pointers to Structure</h1>
<div class="content">
    <p>A <a href="/cpp-programming/pointers">pointer</a> variable can be created not only for built-in <a href="/cpp-programming/data-types">types</a> like (<code>int</code>, <code>float</code>, <code>double</code> etc.) but they can also be created for user defined types like <a href="/cpp-programming/structure">structure</a>.</p>

<p>If you do not know what pointers are, visit <a href="/cpp-programming/pointers">C++ pointers</a>.</p>

<hr>
<h2>Example: Pointers to Structure</h2>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Distance</span> {</span>
  <span class="hljs-keyword">int</span> feet;
  <span class="hljs-keyword">float</span> inch;
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Distance d;
  Distance* ptr = &amp;d;
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter feet: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; (*ptr).feet;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter inch: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; (*ptr).inch;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Displaying information."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Distance = "</span> &lt;&lt; (*ptr).feet &lt;&lt; <span class="hljs-string">" feet "</span> &lt;&lt; (*ptr).inch &lt;&lt; <span class="hljs-string">" inches"</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Enter feet: 4
Enter inch: 3.5
Displaying information.
Distance = 4 feet 3.5 inches</samp></pre>

<p>Here, the address of variable <var>d</var> is stored in the pointer variable <var>ptr</var>, which means <var>ptr</var> is pointing to variable <var>d</var>. </p>

<pre style="max-height: 600px;"><code class="cpp hljs">Distance* ptr = &amp;d;</code></pre>

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
  </div><div class="clearfix"></div><p>Then, the member function of variable <var>d</var> is accessed using the pointer.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cin</span> &gt;&gt; (*ptr).feet;</code></pre>

<div class="note-tip">
<p><strong>Notes:</strong></p>

<ul>
  <li>Since pointer <var>ptr</var> is pointing to variable <var>d</var> in this program, <code>(*ptr).inch</code> and <code>d.inch</code> are equivalent. Similarly, <code>(*ptr).feet</code> and <code>d.feet</code> are equivalent.</li>
  <li>Since the <code>.</code> operator has a higher <a href="/cpp-programming/operators-precedence-associativity">precedence</a> than the <code>*</code> operator, we enclose <code>*ptr</code> in brackets when using <code>(*ptr).inch</code>.</li>
</ul>

</div>
<hr>
<h2 id="arrow-operator">Arrow (-&gt;) Operator</h2>

<p>We can use the arrow (<var>-&gt;)</var> operator to access member variables and member functions of a structure variable through a pointer. </p>

<hr>
<h2 id="arrow-operator-variable-example">Accessing Member Variable Using Arrow (-&gt;) Operator Example</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Distance</span> {</span>
  <span class="hljs-keyword">int</span> feet;
  <span class="hljs-keyword">float</span> inch;
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Distance d;

  Distance* ptr = &amp;d;
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter feet: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; ptr-&gt;feet;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter inch: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; ptr-&gt;inch;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Displaying information."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Distance = "</span> &lt;&lt; ptr-&gt;feet &lt;&lt; <span class="hljs-string">" feet "</span> &lt;&lt; ptr-&gt;inch &lt;&lt; <span class="hljs-string">" inches"</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter feet: 4
Enter inch: 3.5
Displaying information.
Distance = 4 feet 3.5 inches</samp></pre>

<p>Here, the address of variable <var>d</var> is stored in the pointer variable <var>ptr</var> which means <var>ptr</var> is pointing to variable <var>d</var>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs">Distance* ptr = &amp;d;</code></pre>

<p>Then, the member variable of variable <var>d</var> is accessed using the pointer.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">cin</span> &gt;&gt; ptr-&gt;feet;</code></pre>

<p class="note-tip"><strong>Note:</strong> <code>(*ptr).inch</code> and <code>ptr-&gt;inch</code> are equivalent.</p>

<hr>
<h2 id="arrow-operator-function-example">Accessing Member Function Using Arrow (-&gt;) Operator Example</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">struct</span> <span class="hljs-title">Distance</span> {</span>
  <span class="hljs-keyword">int</span> feet;
  <span class="hljs-keyword">float</span> inch;
  
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print_distance</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Displaying Information."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Distance = "</span> &lt;&lt; feet &lt;&lt; <span class="hljs-string">" feet "</span> &lt;&lt; inch &lt;&lt; <span class="hljs-string">" inches"</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Distance d;

  Distance* ptr = &amp;d;
  
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter feet: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; ptr-&gt;feet;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter inch: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; ptr-&gt;inch;
  
  ptr-&gt;print_distance();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output:</strong></p>

<pre><samp>Enter feet: 4
Enter inch: 3.5
Displaying Information.
Distance = 4 feet 3.5 inches</samp></pre>

<p>Here, the member function of variable <var>d</var> is accessed using the pointer.</p>

<pre style="max-height: 600px;"><code class="cpp hljs">ptr-&gt;print_distance();</code></pre>

</div>
</section>
<section id="seven4">
<h1>C++ Enumeration</h1>
<div class="content">
    <p id="introduction">An <strong>enumeration</strong> is a user-defined data type that consists of integral constants. To define an enumeration, <a href="/cpp-programming/keywords-identifiers">keyword</a> <strong>enum</strong> is used.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">enum</span> season { spring, summer, autumn, winter };</code></pre>

<p>Here, the name of the enumeration is <var>season</var>.</p>

<p>And, <var>spring</var>, <var>summer</var> and <var>winter</var> are values of type <var>season</var>.</p>

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
  </div><div class="clearfix"></div><p>By default, <var>spring</var> is 0, <var>summer</var> is 1 and so on. You can change the default value of an enum element during declaration (if necessary).</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">enum</span> season 
{   spring = <span class="hljs-number">0</span>, 
  summer = <span class="hljs-number">4</span>, 
  autumn = <span class="hljs-number">8</span>,
  winter = <span class="hljs-number">12</span>
};</code></pre>

<hr>
<h2 id="enum-declaration">Enumerated Type Declaration</h2>

<p>When you create an enumerated type, only a blueprint for the variable is created. Here's how you can create variables of enum type.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">enum</span> boolean { <span class="hljs-literal">false</span>, <span class="hljs-literal">true</span> };

<span class="hljs-comment">// inside function</span>
<span class="hljs-keyword">enum</span> boolean check;</code></pre>

<p>Here, a variable <var>check</var> of type <code><strong>enum boolean</strong></code> is created.</p>

<p>Here is another way to declare the same <var>check</var> variable using different syntax.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">enum</span> boolean 
{ 
 <span class="hljs-literal">false</span>, <span class="hljs-literal">true</span>
} check;</code></pre>

<hr>
<h3 id="example1">Example: Enumeration Type</h3>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-keyword">enum</span> week { Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday };

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span>
</span>{
  week today;
  today = Wednesday;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Day "</span> &lt;&lt; today+<span class="hljs-number">1</span>;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Day 4</samp></pre>

<hr>
<h3 id="example2">Example: Changing Default Value of Enums</h3>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-keyword">enum</span> seasons { spring = <span class="hljs-number">34</span>, summer = <span class="hljs-number">4</span>, autumn = <span class="hljs-number">9</span>, winter = <span class="hljs-number">32</span>};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  seasons s;

  s = summer;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Summer = "</span> &lt;&lt; s &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Summer = 4</samp></pre>

<hr>
<h2 id="why-use-enums">Why are enums used in C++ programming?</h2>

<p>An enum variable takes only one value out of many possible values. Let us look at an example.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-keyword">enum</span> suit {
  club = <span class="hljs-number">0</span>,
  diamonds = <span class="hljs-number">10</span>,
  hearts = <span class="hljs-number">20</span>,
  spades = <span class="hljs-number">3</span>
} card;

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> 
</span>{
  card = club;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Size of enum variable "</span> &lt;&lt; <span class="hljs-keyword">sizeof</span>(card) &lt;&lt; <span class="hljs-string">" bytes."</span>;   
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p><strong>Output</strong></p>

<pre><samp>Size of enum variable 4 bytes.</samp></pre>

<p>It's because the size of an integer is 4 bytes. This makes enum a good choice to work with flags.</p>

<p>You can accomplish the same task using <a href="/cpp-programming/structure">C++ structures</a>. However, working with enums gives you efficiency along with flexibility.</p>

<hr>
<h3 id="how-to-use-enums">How to use enums for flags?</h3>

<p>Let us look at an example.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">enum</span> designFlags {
  ITALICS = <span class="hljs-number">1</span>,
  BOLD = <span class="hljs-number">2</span>,
  UNDERLINE = <span class="hljs-number">4</span>
} button;</code></pre>

<p>Suppose you are designing a button for a Windows application. You can set flags <code>ITALICS,</code> <code>BOLD</code> and <code>UNDERLINE</code> to work with text.</p>

<p>There is a reason why all the integral constants are powers of 2 in the above pseudocode.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// In binary</span>

ITALICS = <span class="hljs-number">00000001</span>
BOLD = <span class="hljs-number">00000010</span>
UNDERLINE = <span class="hljs-number">00000100</span> </code></pre>

<p>Since, the integral constants are power of 2, you can combine two or more flags at once without overlapping using <a href="/cpp-programming/bitwise-operators#or">bitwise OR | operator</a>. This allows you to choose two or more flags at once. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-keyword">enum</span> designFlags {
  ITALICS = <span class="hljs-number">1</span>,
  BOLD = <span class="hljs-number">2</span>,
  UNDERLINE = <span class="hljs-number">4</span>
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> 
</span>{
  <span class="hljs-keyword">int</span> myDesign = BOLD | UNDERLINE; 

      <span class="hljs-comment">//    00000010</span>
      <span class="hljs-comment">//  | 00000100</span>
      <span class="hljs-comment">//  ___________</span>
      <span class="hljs-comment">//    00000110</span>

  <span class="hljs-built_in">cout</span> &lt;&lt; myDesign;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p><strong>Output</strong></p>

<pre><samp>6</samp></pre>

<p>When the output is <strong>6</strong>, you always know that <var>BOLD</var> and <var>UNDERLINE</var> are used.</p>

<p>Also, you can add flags to your requirements.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">if</span> (myDesign &amp; ITALICS) {
  <span class="hljs-comment">// code for italics</span>
}</code></pre>

<p>Here, we have added italics to our design. Note, only code for italics is written inside the <a href="/cpp-programming/if-else">if statement</a>.</p>

<p>You can accomplish almost anything in C++ programming without using enumerations. However, they can be pretty handy in certain situations. That's what differentiates good programmers from great programmers.</p>

</div>
</section>

<!-- eight menu sections -->
<section id="eight1">
<h1>C++ Classes and Objects</h1>
<div class="content">
    <p id="introduction">Objects and classes are used to wrap related <a href="/cpp-programming/function">functions</a> and data in one place in C++.</p>

<p>Suppose we need to store the length, breadth, and height of a rectangular room and calculate its area and volume.</p>

<p>To handle this task, we can create three <a href="/cpp-programming/variables-literals#variables">variables</a>, say, <var>length</var>, <var>breadth</var>, and <var>height</var>, along with the functions <code>calculate_area()</code> and <code>calculate_volume()</code>.</p>

<p>However, in C++, rather than creating separate variables and functions, we can also wrap the related data and functions in a single place (by creating <strong>objects</strong>).</p>

<p>This programming paradigm is known as <a href="/cpp-programming/oop">object-oriented programming</a>.</p>

<p>But before we can create <strong>objects</strong> and use them in C++, we first need to learn about <strong>classes</strong>.</p>

<hr>
<h2 id="class">C++ Class</h2>

<p>A class is a blueprint for the object.</p>

<p>We can think of a class as a sketch (prototype) of a house. </p>

<p>It contains all the details about the floors, doors, windows, etc - we build the house based on these descriptions. </p>

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
  </div><div class="clearfix"></div><p>The house is the object.</p>

<hr>
<h3 id="class-definition">Create a Class</h3>

<p>A class is defined in C++ using the <a href="/cpp-programming/keywords-identifiers#keywords">keyword</a> <code>class</code> followed by the name of the class.</p>

<p>The body of the class is defined inside curly brackets and terminated by a semicolon at the end.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassName</span> {</span>
 <span class="hljs-comment">// some data</span>
 <span class="hljs-comment">// some functions</span>
};</code></pre>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Room</span> {</span>
  <span class="hljs-keyword">public</span>:
      <span class="hljs-keyword">double</span> length;
      <span class="hljs-keyword">double</span> breadth;
      <span class="hljs-keyword">double</span> height;   

      <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">calculate_area</span><span class="hljs-params">()</span></span>{   
          <span class="hljs-keyword">return</span> length * breadth;
      }

      <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">calculate_volume</span><span class="hljs-params">()</span></span>{   
          <span class="hljs-keyword">return</span> length * breadth * height;
      }

};</code></pre>

<p>Here, we defined a class named <code>Room</code>.</p>

<p>The variables <var>length</var>, <var>breadth</var>, and <var>height</var> declared inside the class are known as <strong>data members</strong>. </p>

<p>And the functions <code>calculate_area()</code> and <code>calculate_volume ()</code> are known as <strong>member functions</strong> of a class.</p>

<hr>
<h2 id="object">C++ Objects</h2>

<p>When a class is defined, only the specification for the object is defined; no memory or storage is allocated.</p>

<p>To use the data and access functions defined in the class, we need to create objects.</p>

<hr>
<h3 id="object-syntax">Syntax to Define Object in C++</h3>

<pre style="max-height: 600px;"><code class="cpp hljs">ClassName object_name;</code></pre>

<p>We can create objects of <code>Room</code> class (defined in the above example) as follows:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// sample function</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">sample_function</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// create objects</span>
  Room room1, room2;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span></span>{
  <span class="hljs-comment">// create objects </span>
  Room room3, room4;
}</code></pre>

<p>Here, two objects <var>room1</var> and <var>room2</var> of the <code>Room</code> class are created in <code>sample_function()</code>. </p>

<p>Similarly, the objects <var>room3</var> and <var>room4</var> are created in <code>main()</code>.</p>

<p>As we can see, we can create objects of a class in any function of the program. </p>

<p>We can also create objects of a class within the class itself or in other classes.</p>

<p>Also, we can create as many objects as we want from a single class.</p>

<hr>
<h2 id="access">C++ Access Data Members and Member Functions</h2>

<p>We can access the data members and member functions of a class by using a <code>.</code> (dot) <a href="/cpp-programming/operators">operator</a>. </p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs">room2.calculate_area();</code></pre>

<p>This will call the <code>calculate_area()</code> function inside the <code>Room</code> class for object <var>room2</var>.</p>

<p>Similarly, the data members can be accessed as:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">room1.length = <span class="hljs-number">5.5</span>;</code></pre>

<p>In this case, it initializes the <var>length</var> variable of <var>room1</var> to <code>5.5</code>.</p>

<hr>
<h2 id="example1">Example: Object and Class in C++ Programming</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Program to illustrate the working of</span>
<span class="hljs-comment">// objects and class in C++ Programming</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// create a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Room</span> {</span>

 <span class="hljs-keyword">public</span>:
  <span class="hljs-keyword">double</span> length;
  <span class="hljs-keyword">double</span> breadth;
  <span class="hljs-keyword">double</span> height;

  <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">calculate_area</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-keyword">return</span> length * breadth;
  }

  <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">calculate_volume</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-keyword">return</span> length * breadth * height;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// create object of Room class</span>
  Room room1;

  <span class="hljs-comment">// assign values to data members</span>
  room1.length = <span class="hljs-number">42.5</span>;
  room1.breadth = <span class="hljs-number">30.8</span>;
  room1.height = <span class="hljs-number">19.2</span>;

  <span class="hljs-comment">// calculate and display the area and volume of the room</span>
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of Room =  "</span> &lt;&lt; room1.calculate_area() &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Volume of Room =  "</span> &lt;&lt; room1.calculate_volume() &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Area of Room =  1309
Volume of Room =  25132.8</samp></pre>

<p>In this program, we have used the <code>Room</code> class and its object <var>room1</var> to calculate the area and volume of a room.</p>

<p>In <code>main()</code>, we assigned the values of <var>length</var>, <var>breadth</var>, and <var>height</var> with the code:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">room1.length = <span class="hljs-number">42.5</span>;
room1.breadth = <span class="hljs-number">30.8</span>;
room1.height = <span class="hljs-number">19.2</span>;</code></pre>

<p>We then called the functions <code>calculate_area()</code> and <code>calculate_volume()</code> to perform the necessary calculations.</p>

<p>Note the use of the keyword <code>public</code> in the program. This means the members are public and can be accessed anywhere from the program.</p>

<p>To learn more about <code>public</code> and other access specifiers, please visit our <a href="/cpp-programming/access-modifiers">C++ Class Access Modifiers</a> tutorial.</p>

<hr>
<p><strong>Also Read</strong></p>

<ul>
  <li><a href="/cpp-programming/constructors">C++ Constructors</a></li>
  <li><a href="/cpp-programming/pass-return-object-function">How to pass and return an object from a function?</a></li>
</ul>

</div>
</section>
<section id="eight2">
<h1>C++ Constructors</h1>
<div class="content">
    <p id="introduction">A constructor is a special member <a href="/cpp-programming/function">function</a> that is called automatically when an <a href="/cpp-programming/object-class#object">object</a> is created.</p>

<p>In C++, a constructor has the same name as that of the <a href="/cpp-programming/object-class#class">class</a>, and it does not have a return type. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span>  <span class="hljs-title">Wall</span> {</span>
<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// create a constructor</span>
  Wall() {
    <span class="hljs-comment">// code</span>
  }
};</code></pre>

<p>Here, the function <code>Wall()</code> is a constructor of the class <code>Wall</code>. Notice that the constructor</p>

<ul>
  <li>has the same name as the class,</li>
  <li>does not have a return type, and</li>
  <li>is <code>public</code></li>
</ul>

<hr>
<h2 id="default-constructor">C++ Default Constructor</h2>

<p>A constructor with no parameters is known as a <strong>default constructor</strong>. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate the use of default constructor</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// declare a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span>  <span class="hljs-title">Wall</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">double</span> length;

<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// default constructor to initialize variable</span>
  Wall()
    : length{<span class="hljs-number">5.5</span>} {
    <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Creating a wall."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
    <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Length = "</span> &lt;&lt; length &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
Wall wall1;
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Creating a Wall
Length = 5.5</samp></pre>

<p>Here, when the <var>wall1</var> object is created, the <code>Wall()</code> constructor is called. <code>length{5.5}</code> is invoked when the constructor is called, and sets the <var>length</var> <a href="/cpp-programming/variables-literals#variables">variable</a> of the object to <code>5.5</code>. </p>

<p class="note-tip"><strong>Note:</strong> If we have not defined any constructor, copy constructor, or move constructor in our class, then the C++ compiler will automatically create a default constructor with no parameters and empty body.</p>

<hr>
<h2 id="defaulted-constructor">Defaulted Constructor</h2>

<p>When we have to rely on default constructor to initialize the member variables of a class, we should explicitly mark the constructor as default in the following way:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">Wall() = <span class="hljs-keyword">default</span>;</code></pre>

<p>If we want to set a default value, then we should use value initialization. That is, we include the default value inside braces in the declaration of member variables in the follwing way.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">double</span> length {<span class="hljs-number">5.5</span>};</code></pre>

<p>Let's see an example:</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate the use of defaulted constructor</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// declare a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span>  <span class="hljs-title">Wall</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">double</span> length {<span class="hljs-number">5.5</span>};

<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// defaulted constructor to initialize variable</span>
  Wall() = <span class="hljs-keyword">default</span>;
  
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print_length</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"length = "</span> &lt;&lt; length &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
Wall wall1;
wall1.print_length();
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output:</strong></p>

<pre><samp>length = 5.5</samp></pre>

<hr>
<h2 id="parameterized-constructor">C++ Parameterized Constructor</h2>

<p>In C++, a constructor with parameters is known as a parameterized constructor. This is the preferred method to initialize member data. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to calculate the area of a wall</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// declare a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Wall</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">double</span> length;
  <span class="hljs-keyword">double</span> height;

<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// parameterized constructor to initialize variables</span>
  Wall(<span class="hljs-keyword">double</span> len, <span class="hljs-keyword">double</span> hgt)
    : length{len}
    , height{hgt} {
  }

  <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">calculateArea</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> length * height;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-comment">// create object and initialize data members</span>
<span class="hljs-function">Wall <span class="hljs-title">wall1</span><span class="hljs-params">(<span class="hljs-number">10.5</span>, <span class="hljs-number">8.6</span>)</span></span>;
<span class="hljs-function">Wall <span class="hljs-title">wall2</span><span class="hljs-params">(<span class="hljs-number">8.5</span>, <span class="hljs-number">6.3</span>)</span></span>;

<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of Wall 1: "</span> &lt;&lt; wall1.calculateArea() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of Wall 2: "</span> &lt;&lt; wall2.calculateArea();

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Area of Wall 1: 90.3
Area of Wall 2: 53.55</samp></pre>

<p>Here, we have defined a parameterized constructor <code>Wall()</code> that has two parameters: <code>double len</code> and <code>double hgt</code>. The values contained in these parameters are used to initialize the member variables <var>length</var> and <var>height</var>.</p>

<p><code>: length{len}, height{hgt}</code> is the member initializer list. </p>

<ul>
  <li><code>length{len}</code> initializes the member variable <var>length</var> with the value of the parameter <var>len</var></li>
  <li><code>height{hgt}</code> initializes the member variable <var>height</var> with the value of the parameter <var>hgt</var>.</li>
</ul>

<p>When we create an object of the <code>Wall</code> class, we pass the values for the member variables as arguments. The code for this is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function">Wall <span class="hljs-title">wall1</span><span class="hljs-params">(<span class="hljs-number">10.5</span>, <span class="hljs-number">8.6</span>)</span></span>;
<span class="hljs-function">Wall <span class="hljs-title">wall2</span><span class="hljs-params">(<span class="hljs-number">8.5</span>, <span class="hljs-number">6.3</span>)</span></span>;</code></pre>

<p>With the member variables thus initialized, we can now calculate the area of the wall with the <code>calculateArea()</code> method.</p>

<p class="note-tip"><strong>Note</strong>: A constructor is primarily used to initialize objects. They are also used to run a default code when an object is created.</p>

<hr>
<h2 id="initializer-list">C++ Member Initializer List</h2>

<p>Consider the constructor:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">Wall(<span class="hljs-keyword">double</span> len, <span class="hljs-keyword">double</span> hgt)
: length{len}
, height{hgt} {
}</code></pre>

<p>Here, </p>

<pre style="max-height: 600px;"><code class="cpp hljs">: length{len} 
,  height{hgt}</code></pre>

<p>is member initializer list. </p>

<p>The member initializer list is used to initialize the member variables of a class. </p>

<p>The order or initialization of the member variables is according to the order of their declaration in the class rather than their declaration in the member initializer list.</p>

<p>Since the member variables are declared in the class in the following order:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">double</span> length;
<span class="hljs-keyword">double</span> height;</code></pre>

<p>The <var>length</var> variable will be initialized first even if we define our constructor as following:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">Wall(<span class="hljs-keyword">double</span> hgt, <span class="hljs-keyword">double</span> len)
: height{hgt}
, length{len} {
}</code></pre>

<hr>
<h2 id="copy-constructor">C++ Copy Constructor</h2>

<p>The copy constructor in C++ is used to copy data from one object to another. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// declare a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Wall</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">double</span> length;
  <span class="hljs-keyword">double</span> height;

<span class="hljs-keyword">public</span>:

  <span class="hljs-comment">// initialize variables with parameterized constructor</span>
  Wall(<span class="hljs-keyword">double</span> len, <span class="hljs-keyword">double</span> hgt)
    : length{len}
    , height{hgt} {
  }

  <span class="hljs-comment">// copy constructor with a Wall object as parameter</span>
  <span class="hljs-comment">// copies data of the obj parameter</span>
  Wall(<span class="hljs-keyword">const</span> Wall&amp; obj)
    : length{obj.length}
    , height{obj.height} {
  }

  <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">calculateArea</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> length * height;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-comment">// create an object of Wall class</span>
<span class="hljs-function">Wall <span class="hljs-title">wall1</span><span class="hljs-params">(<span class="hljs-number">10.5</span>, <span class="hljs-number">8.6</span>)</span></span>;

<span class="hljs-comment">// copy contents of wall1 to wall2</span>
Wall wall2 = wall1;

<span class="hljs-comment">// print areas of wall1 and wall2</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of Wall 1: "</span> &lt;&lt; wall1.calculateArea() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of Wall 2: "</span> &lt;&lt; wall2.calculateArea();

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Area of Wall 1: 90.3
Area of Wall 2: 90.3</samp></pre>

<p>In this program, we have used a copy constructor to copy the contents of one object of the <code>Wall</code> class to another. The code of the copy constructor is:</p>

<pre style="max-height: 600px;"><code class="cpp hljs">Wall(<span class="hljs-keyword">const</span> Wall&amp; obj)
  : length{obj.length}
  , height{obj.height} {
}</code></pre>

<p>Notice that the parameter of this constructor has the address of an object of the <code>Wall</code> class.</p>

<p>We then assign the values of the variables of the <var>obj</var> object to the corresponding variables of the object, calling the copy constructor. This is how the contents of the object are copied.</p>

<p>In <code>main()</code>, we then create two objects <var>wall1</var> and <var>wall2</var> and then copy the contents of <var>wall1</var> to <var>wall2</var>:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// copy contents of wall1 to wall2</span>
Wall wall2 = wall1;</code></pre>

<p>Here, the <var>wall2</var> object calls its copy constructor by passing the reference of the <var>wall1</var> object as its argument.</p>

<hr>
<h2 id="default-copy-constructor">C++ Default Copy Constructor</h2>

<p>If we don't define any copy constructor, move constructor, or move assignment  in our class, then the C++ compiler will automatically create a default copy constructor that does memberwise copy assignment. It suffices in most cases. For example,</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// declare a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Wall</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">double</span> length;
  <span class="hljs-keyword">double</span> height;

<span class="hljs-keyword">public</span>:

  <span class="hljs-comment">// initialize variables with parameterized constructor</span>
  Wall(<span class="hljs-keyword">double</span> len, <span class="hljs-keyword">double</span> hgt)
    : length{len}
    , height{hgt} {
  }

  <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">calculateArea</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> length * height;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-comment">// create an object of Wall class</span>
<span class="hljs-function">Wall <span class="hljs-title">wall1</span><span class="hljs-params">(<span class="hljs-number">10.5</span>, <span class="hljs-number">8.6</span>)</span></span>;

<span class="hljs-comment">// copy contents of wall1 to wall2 by default copy constructor</span>
Wall wall2 = wall1;

<span class="hljs-comment">// print areas of wall1 and wall2</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of Wall 1: "</span> &lt;&lt; wall1.calculateArea() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of Wall 2: "</span> &lt;&lt; wall2.calculateArea();

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Area of Wall 1: 90.3
Area of Wall 2: 90.3</samp></pre>

<p>In this program, we have not defined a copy constructor. The compiler used the default copy constructor to copy the contents of one object of the <code>Wall</code> class to another. </p>

<hr>
<p><strong>Also Read</strong></p>

<ul>
  <li><a href="/cpp-programming/destructors">C++ Destructors</a></li>
  <li><a href="/cpp-programming/constructor-overloading">C++ Constructor Overloading</a></li>
  <li><a href="/cpp-programming/friend-function-class">C++ Friend Function and Classes</a></li>
</ul>

</div>
</section>
<section id="eight3">
<h1>C++ Constructor Overloading</h1>
<div class="content">
    <p id="introduction">Constructors can be overloaded in a similar way as <a href="/cpp-programming/function-overloading">function overloading</a>.</p>

<p>Overloaded constructors have the same name (name of the class) but the different number of arguments. Depending upon the number and type of arguments passed, the corresponding constructor is called.</p>

<hr>
<h2 id="example1">Example 1: Constructor overloading</h2>

<div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="unspecified-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate constructor overloading</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Person</span> {</span>
 <span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">int</span> age;

 <span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// 1. Constructor with no arguments</span>
  Person() {
      age = <span class="hljs-number">20</span>;
  }

  <span class="hljs-comment">// 2. Constructor with an argument</span>
  Person(<span class="hljs-keyword">int</span> a) {
      age = a;
  }

  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getAge</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-keyword">return</span> age;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Person person1, person2(<span class="hljs-number">45</span>);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Person1 Age = "</span> &lt;&lt; person1.getAge() &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Person2 Age = "</span> &lt;&lt; person2.getAge() &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div>

<p><strong>Output</strong></p>

<pre><samp>Person1 Age = 20
Person2 Age = 45</samp></pre>

<p>In this program, we have created a class <code>Person</code> that has a single variable <var>age</var>.</p>

<p>We have also defined two constructors <code>Person()</code> and <code>Person(int a)</code>:</p>

<ul>
  <li>When the object <var>person1</var> is created, the first constructor is called because we have not passed any argument. This constructor initializes <var>age</var> to <code>20</code>.</li>
  <li>When <var>person2</var> is created, the second constructor is called since we have passed <code>45</code> as an argument. This constructor initializes <var>age</var> to <code>45</code>.</li>
</ul>

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
  </div><div class="clearfix"></div><p>The function <code>getAge()</code> returns the value of <var>age</var>, and we use it to print the <var>age</var> of <var>person1</var> and <var>person2</var>.</p>

<hr>
<h2 id="example2">Example 2: Constructor overloading</h2>

<div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="unspecified-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate constructor overloading</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Room</span> {</span>
 <span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">double</span> length;
  <span class="hljs-keyword">double</span> breadth;

 <span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// 1. Constructor with no arguments</span>
  Room() {
      length = <span class="hljs-number">6.9</span>;
      breadth = <span class="hljs-number">4.2</span>;
  }

  <span class="hljs-comment">// 2. Constructor with two arguments</span>
  Room(<span class="hljs-keyword">double</span> l, <span class="hljs-keyword">double</span> b) {
      length = l;
      breadth = b;
  }
  <span class="hljs-comment">// 3. Constructor with one argument</span>
  Room(<span class="hljs-keyword">double</span> len) {
      length = len;
      breadth = <span class="hljs-number">7.2</span>;
  }

  <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">calculateArea</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-keyword">return</span> length * breadth;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Room room1, room2(<span class="hljs-number">8.2</span>, <span class="hljs-number">6.6</span>), room3(<span class="hljs-number">8.2</span>);

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"When no argument is passed: "</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of room = "</span> &lt;&lt; room1.calculateArea() &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nWhen (8.2, 6.6) is passed."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of room = "</span> &lt;&lt; room2.calculateArea() &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nWhen breadth is fixed to 7.2 and (8.2) is passed:"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of room = "</span> &lt;&lt; room3.calculateArea() &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div>

<p><strong>Output</strong></p>

<pre><samp>When no argument is passed: 
Area of room = 28.98

When (8.2, 6.6) is passed.
Area of room = 54.12

When breadth is fixed to 7.2 and (8.2) is passed:
Area of room = 59.04</samp></pre>

<ul>
  <li>When <var>room1</var> is created, the first constructor is called. <var>length</var> is initialized to <code>6.9</code> and <var>breadth</var> is initialized to <code>4.2</code>.</li>
  <li>When <var>room2</var> is created, the second constructor is called. We have passed the arguments <code>8.2</code> and <code>6.6</code>. <var>length</var> is initialized to the first argument <code>8.2</code> and <var>breadth</var> is initialized to <code>6.6</code>.</li>
  <li>When <var>room3</var> is created, the third constructor is called. We have passed one argument <code>8.2</code>. <var>length</var> is initialized to the argument <code>8.2</code>. <var>breadth</var> is initialized to the <code>7.2</code> by default.</li>
</ul>

<p><strong>Recommended Tutorial</strong>: <a href="/cpp-programming/function-overloading">C++ Function Overloading</a>.</p>
</div>
</section>
<section id="eight4">
<h1>C++ Destructors</h1>
<div class="content">
    <p id="introduction">A destructor is a special member <a href="/cpp-programming/function">function</a> that is called automatically when an <a href="/cpp-programming/object-class#object">object</a> goes out of scope or when we delete the object with the delete expression.</p>

<p>In C++, a destructor has the same name as that of the <a href="/cpp-programming/object-class#class">class</a>, and it does not have a return type. <code>~</code> precedes the identifier to indicate destructor. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span>  <span class="hljs-title">Wall</span> {</span>
<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// create a destructor</span>
  ~Wall() {
    <span class="hljs-comment">// code</span>
  }
};</code></pre>

<p>Here, <code>~Wall()</code> is a destructor of the class <code>Wall</code>. </p>

<div class="note-tip">
<p><strong>Note:</strong> If we don't define any destructor, move assignment, or move constructor in our class, then the C++ compiler will automatically create a default destructor with an empty body. It suffices in most cases.</p>

<p>However, if our class involves resource handling like dynamic memory allocation, we have to define a destructor and deallocate the resources in the destructor body.</p>

</div>
<hr>
<h2 id="dynamic-memory-allocation-class">Dynamic Memory Allocation in Class</h2>

<p>When our class has pointer members, the default copy constructor just assigns the value of member pointers of one object to the member pointers of another object, rather than allocating different memory addresses and copying the value pointed by the member pointers.</p>

<p>To allocate new memory address for the variable and copy the data, we have to declare a copy constructor. Moreover, we have to deallocate the memory using destructor.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// declare a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Wall</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">double</span>* length;
  <span class="hljs-keyword">double</span>* height;

<span class="hljs-keyword">public</span>:

  <span class="hljs-comment">// initialize variables with parameterized constructor</span>
  Wall(<span class="hljs-keyword">double</span> len = <span class="hljs-number">1.0</span>, <span class="hljs-keyword">double</span> hgt = <span class="hljs-number">1.0</span>)
    : length{<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{len}}
    , height{<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{hgt}} {
  }
  
  <span class="hljs-comment">// copy constructor with a Wall object as parameter</span>
  <span class="hljs-comment">// copies data of the obj parameter</span>
  Wall(<span class="hljs-keyword">const</span> Wall&amp; obj)
    : length{<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{*(obj.length)}}
    , height{<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{*(obj.height)}} {
  }
  
  <span class="hljs-keyword">void</span> setLength(<span class="hljs-keyword">double</span> len) {
      *length = len;
  }
  
  <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">calculateArea</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> *length * *height;
  }
  
  <span class="hljs-comment">// destructor to deallocate memory</span>
  ~Wall() {
      <span class="hljs-keyword">delete</span> length;
      <span class="hljs-keyword">delete</span> height;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-comment">// create an object of Wall class</span>
<span class="hljs-function">Wall <span class="hljs-title">wall1</span><span class="hljs-params">(<span class="hljs-number">10.5</span>, <span class="hljs-number">8.6</span>)</span></span>;

<span class="hljs-comment">// copy contents of wall1 to wall2 by copy constructor</span>
Wall wall2 = wall1;

<span class="hljs-comment">// change the length of wall2</span>
wall2.setLength(<span class="hljs-number">11.5</span>);

<span class="hljs-comment">// print areas of wall1 and wall2</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of Wall 1: "</span> &lt;&lt; wall1.calculateArea() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of Wall 2: "</span> &lt;&lt; wall2.calculateArea();

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Area of Wall 1: 90.3
Area of Wall 2: 98.9</samp></pre>

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
  </div><div class="clearfix"></div><p>Here, </p>

<pre style="max-height: 600px;"><code class="cpp hljs">Wall(<span class="hljs-keyword">const</span> Wall&amp; obj)
:length{<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{*(obj.length)}}
, height{<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{*(obj.height)}} {
}</code></pre>

<p>is the copy constructor. It takes an object <var>obj</var> of <code>Wall</code> as a <code>const</code> reference. </p>

<pre style="max-height: 600px;"><code class="cpp hljs">: length{<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{*(obj.length)}}
, height{<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{*(obj.height)}} </code></pre>

<p>is the initializer list that copies the data to new memory locations and initializes the length and height pointers accordingly.</p>

<ul>
  <li><code>*(obj.length)</code> is the value pointed by <code>length</code> pointer member of the argument object <var>obj</var></li>
  <li><code>new double{*(obj.length)}</code> dynamically allocates memory for <code>double</code> datatype with the value <code>*(obj.length)</code> and returns the memory address</li>
  <li><code>length{new double {*obj.length)}}</code> initializes the <code>length</code> variable of the new object with the new memory address.</li>
</ul>

<p>Similarly, 
</p><pre style="max-height: 600px;"><code class="cpp hljs">height{<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{*(obj.height)}}</code></pre>

<p>initializes the <code>height</code> pointer member of the new object.</p>

<p>When the objects <var>wall1</var> and <var>wall2</var> go out of scope, their respective destructor is invoked. The destructor deallocates the dynamic memory acquired by the objects.</p>

<hr>
<p><strong>Also Read</strong></p>

<ul>
  <li><a href="/cpp-programming/constructors">C++ Constructors</a></li>
  <li><a href="/cpp-programming/constructor-overloading">C++ Constructor Overloading</a></li>
  <li><a href="/cpp-programming/friend-function-class">C++ Friend Function and Classes</a></li>
</ul>

</div>
</section>
<section id="eight5">
<h1>C++ Access Modifiers</h1>
<div class="content">
    <p id="introduction">One of the main features of object-oriented programming languages such as C++ is <strong>data hiding</strong>.</p>

<p>Data hiding refers to restricting access to data members of a class. This is to prevent other functions and classes from tampering with the class data.</p>

<p>However, it is also important to make some member functions and member data accessible so that the hidden data can be manipulated indirectly.</p>

<p>The access modifiers of C++ allows us to determine which class members are accessible to other classes and functions, and which are not.</p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Patient</span> {</span>

  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">int</span> patientNumber;
      <span class="hljs-built_in">string</span> diagnosis;

  <span class="hljs-keyword">public</span>:

    <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">billing</span><span class="hljs-params">()</span> </span>{
        <span class="hljs-comment">// code</span>
    }

    <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">makeAppointment</span><span class="hljs-params">()</span> </span>{
        <span class="hljs-comment">// code</span>
    }
}; </code></pre>

<p>&nbsp;</p>

<p>Here, the variables <var>patientNumber</var> and <var>diagnosis</var> of the <code>Patient</code> class are hidden using the <code>private</code> keyword, while the member functions are made accessible using the <code>public</code> keyword.</p>

<hr>
<h2>Types of C++ Access Modifiers</h2>

<p>In C++, there are 3 access modifiers:</p>

<ul>
  <li><code>public</code></li>
  <li><code>private</code></li>
  <li><code>protected</code></li>
</ul>

<hr>
<h2 id="public">public Access Modifier</h2>

<ul>
  <li>The <code>public</code> keyword is used to create public members (data and functions).</li>
  <li>The public members are accessible from any part of the program.</li>
</ul>

<hr>
<h3 id="example1">Example 1: C++ public Access Modifier</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// define a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Sample</span> {</span>

  <span class="hljs-comment">// public elements</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-keyword">int</span> age;

  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayAge</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Age = "</span> &lt;&lt; age &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-comment">// declare a class object</span>
  Sample obj1;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter your age: "</span>;

  <span class="hljs-comment">// store input in age of the obj1 object</span>
  <span class="hljs-built_in">cin</span> &gt;&gt; obj1.age;

  <span class="hljs-comment">// call class function</span>
  obj1.displayAge();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Enter your age: 20
Age = 20</samp></pre>

<p>In this program, we have created a class named <code>Sample</code>, which contains a <code>public</code> variable <var>age</var> and a <code>public</code> function <code>displayAge()</code>.</p>

<p>In <code>main()</code>, we have created an object of the <code>Sample</code> class named <var>obj1</var>. We then access the <code>public</code> elements directly by using the codes <code>obj1.age</code> and <code>obj1.displayAge()</code>.</p>

<p>Notice that the <code>public</code> elements are accessible from <code>main()</code>. This is because&nbsp;<code>public</code> elements are accessible from all parts of the program.</p>

<hr>
<h2 id="private">private Access Modifier</h2>

<ul>
  <li>The <code>private</code> keyword is used to create private members (data and functions).</li>
  <li>The private members can only be accessed&nbsp;from within the class.</li>
  <li>However, friend classes and friend functions can access private members.</li>
</ul>

<hr>
<h3 id="example2">Example 2: C++ private Access Specifier</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// define a class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Sample</span> {</span>

  <span class="hljs-comment">// private elements</span>
 <span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">int</span> age;

  <span class="hljs-comment">// public elements</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayAge</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a)</span> </span>{
      age = a;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Age = "</span> &lt;&lt; age &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{

  <span class="hljs-keyword">int</span> ageInput;

  <span class="hljs-comment">// declare an object</span>
  Sample obj1;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter your age: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; ageInput;

  <span class="hljs-comment">// call function and pass ageInput as argument</span>
  obj1.displayAge(ageInput);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter your age: 20
Age = 20</samp></pre>

<p>In <code>main()</code>, the object <var>obj1</var> cannot directly access the class variable <var>age</var>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// error</span>
<span class="hljs-built_in">cin</span> &gt;&gt; obj1.age;</code></pre>

<p>We can only indirectly manipulate <var>age</var> through the public function <code>displayAge()</code>, since this function initializes <var>age</var>&nbsp;with the value of&nbsp;the argument passed to it i.e. the function parameter <code>int a</code>.</p>

<hr>
<h2 id="protected">protected Access Modifier</h2>

<p>Before we learn about the <code>protected</code> access specifier, make sure you know about <a href="/cpp-programming/inheritance">inheritance in C++</a>.</p>

<ul>
  <li>The <code>protected</code> keyword is used to create protected members (data and function).</li>
  <li>The protected members can be accessed within the class and from the derived class.</li>
</ul>

<hr>
<h3 id="example3">Example 3: C++ protected Access Specifier</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// declare parent class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Sample</span> {</span>
  <span class="hljs-comment">// protected elements</span>
 <span class="hljs-keyword">protected</span>:
  <span class="hljs-keyword">int</span> age;
};

<span class="hljs-comment">// declare child class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SampleChild</span> :</span> <span class="hljs-keyword">public</span> Sample {

 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayAge</span><span class="hljs-params">(<span class="hljs-keyword">int</span> a)</span> </span>{
      age = a;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Age = "</span> &lt;&lt; age &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-keyword">int</span> ageInput;

  <span class="hljs-comment">// declare object of child class</span>
  SampleChild child;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter your age: "</span>;
  <span class="hljs-built_in">cin</span> &gt;&gt; ageInput;

  <span class="hljs-comment">// call child class function</span>
  <span class="hljs-comment">// pass ageInput as argument</span>
  child.displayAge(ageInput);

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter your age: 20
Age = 20</samp></pre>

<p>Here, <code>SampleChild</code>&nbsp;is an inherited class that is derived from <code>Sample</code>. The variable <var>age</var> is declared in <code>Sample</code> with the <code>protected</code> keyword.</p>

<p>This means that <code>SampleChild</code> can access <var>age</var> since <code>Sample</code> is its parent class.</p>

<p>We see this as we have assigned the value of <var>age</var> in <code>SampleChild</code> even though <var>age</var> is declared in the <code>Sample</code> class.</p>

<hr>
<h2 id="summary">Summary: public, private, and protected</h2>

<ul>
  <li><code>public</code> elements can be accessed by all other classes and functions.</li>
  <li><code>private</code> elements cannot be accessed outside the class in which they are declared, except by <code>friend</code> classes and functions.</li>
  <li><code>protected</code> elements are just like the&nbsp;<code>private</code>, except they can be accessed by derived classes.</li>
</ul>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>Specifiers</th>
              <th>Same Class</th>
              <th>Derived Class</th>
              <th>Outside Class</th>
          </tr>
          <tr>
              <td><code>public</code></td>
              <td>Yes</td>
              <td>Yes</td>
              <td>Yes</td>
          </tr>
          <tr>
              <td><code>private</code></td>
              <td>Yes</td>
              <td>No</td>
              <td>No</td>
          </tr>
          <tr>
              <td><code>protected</code></td>
              <td>Yes</td>
              <td>Yes</td>
              <td>No</td>
          </tr>
      </tbody>
  </table>
</div>

<p class="note-tip"><strong>Note:</strong> By default, class members in C++ are <code>private</code>, unless specified otherwise.</p>
</div>
</section>
<section id="eight6">
<h1>C++ Encapsulation</h1>
<div class="content">
    <p id="introduction">Encapsulation is one of the key features of object-oriented programming. It involves the bundling of data members and functions inside a single class.</p>

<p>Bundling similar data members and functions inside a class together also helps in data hiding.</p>

<hr>
<h2 id="encapsulation">C++ Encapsulation</h2>

<p>In general, encapsulation is a process of wrapping similar code in one place.</p>

<p>In C++, we can bundle data members and functions that operate together inside a single class. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Rectangle</span> {</span>
<span class="hljs-keyword">public</span>:
  <span class="hljs-keyword">int</span> length;
  <span class="hljs-keyword">int</span> breadth;

  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getArea</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> length * breadth;
  }
};</code></pre>

<p>In the above program, the function <code>getArea()</code> calculates the area of a rectangle. To calculate the area, it needs length and breadth.</p>

<p>Hence, the data members (<var>length</var> and <var>breadth</var>) and the function <code>getArea()</code> are kept together in the <code>Rectangle</code> class.</p>

<figure><img alt="C++ Encapsulation" height="340" src="assets/images/cpp-encapsulation-implementation.png" title="C++ Encapsulation" width="320">
  <figcaption>Encapsulation in C++</figcaption></figure>
<hr>
<h3 id="example1">Example 1: C++ Encapsulation</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Program to calculate the area of a rectangle</span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Rectangle</span> {</span>
<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// Variables required for area calculation</span>
  <span class="hljs-keyword">int</span> length;
  <span class="hljs-keyword">int</span> breadth;

  <span class="hljs-comment">// Constructor to initialize variables</span>
  Rectangle(<span class="hljs-keyword">int</span> len, <span class="hljs-keyword">int</span> brth) : length(len), breadth(brth) {}

  <span class="hljs-comment">// Function to calculate area</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getArea</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> length * breadth;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-comment">// Create object of Rectangle class</span>
<span class="hljs-function">Rectangle <span class="hljs-title">rect</span><span class="hljs-params">(<span class="hljs-number">8</span>, <span class="hljs-number">6</span>)</span></span>;

<span class="hljs-comment">// Call getArea() function</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area = "</span> &lt;&lt; rect.getArea();

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Area = 48</samp></pre>

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
  </div><div class="clearfix"></div><p>In the above example, we are calculating the area of a rectangle.</p>

<p>To calculate an area, we need two variables: <var>length</var> and <var>breadth</var> and a function: <code>getArea()</code>. Hence, we bundled these variables and function inside a single class named <var>Rectangle</var>.</p>

<p>Here, the variables and functions can be accessed from other classes as well. Hence, this is not <strong>data hiding</strong>.</p>

<p>This is only <strong>encapsulation</strong>. We are just keeping similar codes together.</p>
<div class="note-tip">
<p><strong>Note:</strong> People often consider encapsulation as data hiding, but that's not entirely true.</p>

<p>Encapsulation refers to the bundling of related fields and methods together. This can be used to achieve data hiding. Encapsulation in itself is not data hiding.</p>
</div>
<hr>
<h2 id="why-encapsulation">Why Encapsulation?</h2>

<ul>
  <li>In C++, encapsulation helps us keep related data and functions together, which makes our code cleaner and easy to read.</li>
<ul>
  <li>It helps to control the modification of our data members.<br>
<br>
Consider a situation where we want the <var>length</var> field in a class to be non-negative. Here we can make the <var>length</var> variable private and apply the logic inside the method <code>setAge()</code>. For example,<br>
<br>
<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Rectangle</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">int</span> age;

<span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">setLength</span><span class="hljs-params">(<span class="hljs-keyword">int</span> len)</span> </span>{
    <span class="hljs-keyword">if</span> (len &gt;= <span class="hljs-number">0</span>)
      length = len;
  }
};</code></pre>

  </li>
</ul>

<ul>
  <li>The getter and setter functions provide <strong>read-only</strong> or <strong>write-only</strong> access to our class members. For example,<br>
<br>
<pre style="max-height: 600px;"><code class="cpp hljs">getLength()  <span class="hljs-comment">// provides read-only access</span>
setLength()  <span class="hljs-comment">// provides write-only access</span></code></pre>

  </li>
  <li>It helps to decouple components of a system. For example, we can encapsulate code into multiple bundles.<br>
<br>
These decoupled components (bundles) can be developed, tested, and debugged independently and concurrently. And any changes in a particular component do not have any effect on other components.</li>
  <li>We can also achieve data hiding using encapsulation. In <strong>Example 1</strong>, if we change the <var>length</var> and <var>breadth</var> variables into <code>private</code> or <code>protected</code>, then the access to these fields is restricted.<br>
<br>
And, they are kept hidden from outer classes. This is called <strong>data hiding</strong>.</li>
</ul>

<hr>
<h2 id="data-hiding">Data Hiding</h2>

<p>Data hiding is a way of restricting the access of our data members by hiding the implementation details. Encapsulation also provides a way for data hiding.</p>

<p>We can use <a href="/cpp-programming/access-modifiers">access modifiers</a> to achieve data hiding in C++. For example,</p>

<h3 id="example2">Example 2: C++ Data Hiding Using the private Specifier</h3>

</ul><div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Rectangle</span> {</span>
 <span class="hljs-keyword">private</span>:

  <span class="hljs-comment">// Variables required for area calculation</span>
  <span class="hljs-keyword">int</span> length;
  <span class="hljs-keyword">int</span> breadth;

 <span class="hljs-keyword">public</span>:

  <span class="hljs-comment">// Setter function for length</span>
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">setLength</span><span class="hljs-params">(<span class="hljs-keyword">int</span> len)</span> </span>{
    length = len;
  }

  <span class="hljs-comment">// Setter function for breadth</span>
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">setBreadth</span><span class="hljs-params">(<span class="hljs-keyword">int</span> brth)</span> </span>{
    breadth = brth;
  }

  <span class="hljs-comment">// Getter function for length</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getLength</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> length;
  }

  <span class="hljs-comment">// Getter function for breadth</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getBreadth</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> breadth;
  }
  <span class="hljs-comment">// Function to calculate area</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getArea</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> length * breadth;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
<span class="hljs-comment">// Create object of Rectangle class</span>
Rectangle rectangle1;

<span class="hljs-comment">// Initialize length using Setter function</span>
rectangle1.setLength(<span class="hljs-number">8</span>);

<span class="hljs-comment">// Initialize breadth using Setter function</span>
rectangle1.setBreadth(<span class="hljs-number">6</span>);

<span class="hljs-comment">// Access length using Getter function</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Length = "</span> &lt;&lt; rectangle1.getLength() &lt;&lt; <span class="hljs-built_in">endl</span>;

<span class="hljs-comment">// Access breadth using Getter function</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Breadth = "</span> &lt;&lt; rectangle1.getBreadth() &lt;&lt; <span class="hljs-built_in">endl</span>;

<span class="hljs-comment">// Call getArea() function</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area = "</span> &lt;&lt; rectangle1.getArea();

<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Length = 8
Breadth = 6
Area = 48</samp></pre>

<p>Here, we have made the <var>length</var> and <var>breadth</var> variables <code>private</code>.</p>

<p>This means that these variables cannot be directly accessed outside of the <code>Rectangle</code> class.</p>

<p>To access these private variables, we have used <code>public</code> functions <code>setLength()</code>, <code>getLength()</code>, <code>setBreadth()</code>, and <code>getBreadth()</code>. These are called getter and setter functions.</p>

<p>Making the variables <strong>private</strong> allowed us to restrict unauthorized access from outside the class. This is <strong>data hiding</strong>.</p>

<p>If we try to access the variables from the <code>main()</code> class, we will get an error.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// error: rectangle1.length is inaccessible</span>
rectangle1.length = <span class="hljs-number">8</span>;

<span class="hljs-comment">// error: rectangle1.breadth is inaccessible</span>
rectangle1.length = <span class="hljs-number">6</span>;</code></pre>

</div>
</section>
<section id="eight7">
<h1>C++ friend Function and friend Classes</h1>
<div class="content">
    <p id="introduction">Data hiding is a fundamental concept of <a href="https://www.programiz.com/cpp-programming/oop">object-oriented programming</a>. It restricts the access of private members from outside of the class.</p>

<p>Similarly, protected members can only be accessed by derived classes and are inaccessible from outside. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">MyClass</span> {</span>
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">int</span> member1;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  MyClass obj;

  <span class="hljs-comment">// Error! Cannot access private members from here.</span>
  obj.member1 = <span class="hljs-number">5</span>;
}</code></pre>

<p>However, there is a feature in C++ called <strong>friend functions</strong> that break this rule and allow us to access member functions from outside the class.</p>

<p>Similarly, there is a <strong>friend class</strong> as well, which we will learn later in this tutorial.</p>

<hr>
<h2 id="friend-function">friend Function in C++</h2>

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
  </div><div class="clearfix"></div><p>A <strong>friend function</strong> can access the <strong>private</strong> and <strong>protected</strong> data of a class. We declare a friend function using the <code>friend</code> keyword inside the body of the class.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">className</span> {</span>
  ... .. ...
  <span class="hljs-function"><span class="hljs-keyword">friend</span> returnType <span class="hljs-title">functionName</span><span class="hljs-params">(arguments)</span></span>;
  ... .. ...
}</code></pre>

<hr>
<h3 id="example1">Example 1: Working of friend Function</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate the working of friend function</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Distance</span> {</span>
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">int</span> meter;
      
      <span class="hljs-comment">// friend function</span>
      <span class="hljs-function"><span class="hljs-keyword">friend</span> <span class="hljs-keyword">int</span> <span class="hljs-title">addFive</span><span class="hljs-params">(Distance)</span></span>;

  <span class="hljs-keyword">public</span>:
      Distance() : meter(<span class="hljs-number">0</span>) {}
      
};

<span class="hljs-comment">// friend function definition</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">addFive</span><span class="hljs-params">(Distance d)</span> </span>{

  <span class="hljs-comment">//accessing private members from the friend function</span>
  d.meter += <span class="hljs-number">5</span>;
  <span class="hljs-keyword">return</span> d.meter;
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Distance D;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Distance: "</span> &lt;&lt; addFive(D);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Distance: 5</samp></pre>

<p>Here, <code>addFive()</code> is a friend function that can access both <strong>private</strong> and <strong>public</strong> data members.</p>

<p>Though this example gives us an idea about the concept of a friend&nbsp;function, it doesn't show any meaningful use.</p>

<p>A more meaningful use would be operating on <a href="https://www.programiz.com/cpp-programming/object-class#object">objects</a> of two different classes. That's when the friend function can be very helpful.</p>

<hr>
<h3 id="example2">Example 2: Add Members of Two Different Classes</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Add members of two different classes using friend functions</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// forward declaration</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassB</span>;</span>

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassA</span> {</span>
  
  <span class="hljs-keyword">public</span>:
      <span class="hljs-comment">// constructor to initialize numA to 12</span>
      ClassA() : numA(<span class="hljs-number">12</span>) {}
      
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">int</span> numA;
      
       <span class="hljs-comment">// friend function declaration</span>
       <span class="hljs-function"><span class="hljs-keyword">friend</span> <span class="hljs-keyword">int</span> <span class="hljs-title">add</span><span class="hljs-params">(ClassA, ClassB)</span></span>;
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassB</span> {</span>

  <span class="hljs-keyword">public</span>:
      <span class="hljs-comment">// constructor to initialize numB to 1</span>
      ClassB() : numB(<span class="hljs-number">1</span>) {}
  
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">int</span> numB;

      <span class="hljs-comment">// friend function declaration</span>
      <span class="hljs-function"><span class="hljs-keyword">friend</span> <span class="hljs-keyword">int</span> <span class="hljs-title">add</span><span class="hljs-params">(ClassA, ClassB)</span></span>;
};

<span class="hljs-comment">// access members of both classes</span>
<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">add</span><span class="hljs-params">(ClassA objectA, ClassB objectB)</span> </span>{
  <span class="hljs-keyword">return</span> (objectA.numA + objectB.numB);
}

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  ClassA objectA;
  ClassB objectB;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Sum: "</span> &lt;&lt; add(objectA, objectB);
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Sum: 13</samp></pre>

<p>In this program, <code>ClassA</code> and <code>ClassB</code> have declared <code>add()</code> as a friend function. Thus, this function can access <strong>private</strong> data of both classes.</p>

<p>One thing to notice here is the friend function inside <code>ClassA</code> is using the <code>ClassB</code>. However, we haven't defined <code>ClassB</code> at this point.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// inside classA </span>
<span class="hljs-function"><span class="hljs-keyword">friend</span> <span class="hljs-keyword">int</span> <span class="hljs-title">add</span><span class="hljs-params">(ClassA, ClassB)</span></span>;</code></pre>

<p>For this to work, we need a forward declaration of <code>ClassB</code> in our program.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// forward declaration</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassB</span>;</span></code></pre>

<hr>
<h2 id="friend-class">friend Class in C++</h2>

<p>We can also use a friend Class in C++ using the <code>friend</code> keyword. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassB</span>;</span>

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassA</span> {</span>
 <span class="hljs-comment">// ClassB is a friend class of ClassA</span>
 <span class="hljs-keyword">friend</span> <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassB</span>;</span>
 ... .. ...
}

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassB</span> {</span>
 ... .. ...
}</code></pre>

<p>When a class is declared a friend class, all the member functions of the friend class become friend functions.</p>

<p>Since <code>ClassB</code> is a friend class, we can access all members of <code>ClassA</code> from inside <code>ClassB</code>.</p>

<p>However, we cannot access members of <code>ClassB</code> from inside <code>ClassA</code>. It is because friend relation in C++ is only granted, not taken.</p>

<hr>
<h3 id="example3">Example 3: C++ friend Class</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate the working of friend class</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// forward declaration</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassB</span>;</span>

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassA</span> {</span>
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">int</span> numA;

      <span class="hljs-comment">// friend class declaration</span>
      <span class="hljs-keyword">friend</span> <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassB</span>;</span>

  <span class="hljs-keyword">public</span>:
      <span class="hljs-comment">// constructor to initialize numA to 12</span>
      ClassA() : numA(<span class="hljs-number">12</span>) {}
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ClassB</span> {</span>
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">int</span> numB;

  <span class="hljs-keyword">public</span>:
      <span class="hljs-comment">// constructor to initialize numB to 1</span>
      ClassB() : numB(<span class="hljs-number">1</span>) {}
  
  <span class="hljs-comment">// member function to add numA</span>
  <span class="hljs-comment">// from ClassA and numB from ClassB</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">add</span><span class="hljs-params">()</span> </span>{
      ClassA objectA;
      <span class="hljs-keyword">return</span> objectA.numA + numB;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  ClassB objectB;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Sum: "</span> &lt;&lt; objectB.add();
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Sum: 13</samp></pre>

<p>Here, <code>ClassB</code> is a friend class of <code>ClassA</code>. So, <code>ClassB</code> has access to the members of <code>classA</code>.</p>

<p>In <code>ClassB</code>, we have created a function <code>add()</code> that returns the sum of <var>numA</var> and <var>numB</var>.</p>

<p>Since <code>ClassB</code> is a friend class, we can create objects of <code>ClassA</code> inside of <code>ClassB</code>.</p>
<hr>
<p><strong>Also Read:</strong></p>
<ul>
<li><a href="https://programiz.com/cpp-programming/access-modifiers">C++ Access Modifiers</a></li>
</ul>
</div>
</section>

<!-- nine menu sections -->
<section id="nine1">
<h1>C++ Inheritance</h1>
<div class="content">
    <p id="introduction">Inheritance is one of the key features of <a href="https://www.programiz.com/cpp-programming/oop">Object-oriented programming in C++</a>. It allows us to create a new <a href="/cpp-programming/object-class">class</a> (derived class) from an existing class (base class).</p>

<p><strong>The derived class inherits the features from the base class</strong> and can have additional features of its own. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Animal</span> {</span>
  <span class="hljs-comment">// eat() function</span>
  <span class="hljs-comment">// sleep() function</span>
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span> :</span> <span class="hljs-keyword">public</span> Animal {
  <span class="hljs-comment">// bark() function</span>
};</code></pre>

<p>Here, the <code>Dog</code> class is derived from the <code>Animal</code> class. Since <code>Dog</code> is derived from <code>Animal</code>, members of <code>Animal</code> are accessible to <code>Dog</code>.</p>

<figure><img alt="Dog class inherits from the Animal class" height="413" src="assets/images/cpp-inheritance.png" title="C++ Inheritance" width="380">
  <figcaption>Inheritance in C++</figcaption>
</figure>

<p>Notice the use of the keyword <code>public</code> while inheriting Dog from Animal.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span> :</span> <span class="hljs-keyword">public</span> Animal {...};</code></pre>

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
  </div><div class="clearfix"></div><p>We can also use the keywords <code>private</code> and <code>protected</code> instead of <code>public</code>. We will learn about the differences between using <code>private</code>, <code>public</code> and <code>protected</code> later in this tutorial.</p>

<hr>
<h2 id="is-a">is-a relationship</h2>

<p>Inheritance is an <strong>is-a relationship</strong>. We use inheritance only if an <strong>is-a relationship</strong> is present between the two classes.</p>

<p>Here are some examples:</p>

<ul>
  <li>A car is a vehicle.</li>
  <li>Orange is a fruit.</li>
  <li>A surgeon is a doctor.</li>
  <li>A dog is an animal.</li>
</ul>

<hr>
<h2 id="example1">Example 1: Simple Example of C++ Inheritance</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate inheritance</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// base class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Animal</span> {</span>

 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">eat</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I can eat!"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">sleep</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I can sleep!"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-comment">// derived class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span> :</span> <span class="hljs-keyword">public</span> Animal {

 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">bark</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I can bark! Woof woof!!"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// Create object of the Dog class</span>
  Dog dog1;

  <span class="hljs-comment">// Calling members of the base class</span>
  dog1.eat();
  dog1.sleep();

  <span class="hljs-comment">// Calling member of the derived class</span>
  dog1.bark();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>I can eat!
I can sleep!
I can bark! Woof woof!!</samp></pre>

<p>Here, <var>dog1</var> (the object of derived class <code>Dog</code>) can access members of the base class <code>Animal</code>. It's because <code>Dog</code> is inherited from <code>Animal</code>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Calling members of the Animal class</span>
dog1.eat();
dog1.sleep();</code></pre>

<hr>
<h2 id="protected-members">C++ protected Members</h2>

<p>The access modifier <code>protected</code> is especially relevant when it comes to C++ inheritance.</p>

<p>Like <code>private</code> members, <code>protected</code> members are inaccessible outside of the class. However, they can be accessed by <strong>derived classes</strong> and <strong>friend classes/functions</strong>.</p>

<p>We need <code>protected</code> members if we want to hide the data of a class, but still want that data to be inherited by its derived classes.</p>

<p>To learn more about protected, refer to our <a href="/cpp-programming/access-modifiers">C++ Access Modifiers</a> tutorial.</p>

<hr>
<h3 id="example2">Example 2 : C++ protected Members</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate protected members</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;string&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// base class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Animal</span> {</span>

 <span class="hljs-keyword">private</span>:
  <span class="hljs-built_in">string</span> color;

 <span class="hljs-keyword">protected</span>:
  <span class="hljs-built_in">string</span> type;

 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">eat</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I can eat!"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">sleep</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I can sleep!"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">setColor</span><span class="hljs-params">(<span class="hljs-built_in">string</span> clr)</span> </span>{
      color = clr;
  }

  <span class="hljs-function"><span class="hljs-built_in">string</span> <span class="hljs-title">getColor</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-keyword">return</span> color;
  }
};

<span class="hljs-comment">// derived class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span> :</span> <span class="hljs-keyword">public</span> Animal {

 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">setType</span><span class="hljs-params">(<span class="hljs-built_in">string</span> tp)</span> </span>{
      type = tp;
  }

  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">displayInfo</span><span class="hljs-params">(<span class="hljs-built_in">string</span> c)</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I am a "</span> &lt;&lt; type &lt;&lt; <span class="hljs-built_in">endl</span>;
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"My color is "</span> &lt;&lt; c &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">bark</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I can bark! Woof woof!!"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// Create object of the Dog class</span>
  Dog dog1;

  <span class="hljs-comment">// Calling members of the base class</span>
  dog1.eat();
  dog1.sleep();
  dog1.setColor(<span class="hljs-string">"black"</span>);

  <span class="hljs-comment">// Calling member of the derived class</span>
  dog1.bark();
  dog1.setType(<span class="hljs-string">"mammal"</span>);

  <span class="hljs-comment">// Using getColor() of dog1 as argument</span>
  <span class="hljs-comment">// getColor() returns string data</span>
  dog1.displayInfo(dog1.getColor());

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>I can eat!
I can sleep!
I can bark! Woof woof!!
I am a mammal
My color is black</samp></pre>

<p>Here, the variable <var>type</var> is <code>protected</code> and is thus accessible from the derived class <code>Dog</code>. We can see this as we have initialized <code>type</code> in the <code>Dog</code> class using the <a href="https://www.programiz.com/cpp-programming/function">function</a> <code>setType()</code>.</p>

<p>On the other hand, the <code>private</code> variable <var>color</var> cannot be initialized in <code>Dog</code>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span> :</span> <span class="hljs-keyword">public</span> Animal {

  <span class="hljs-keyword">public</span>:
    <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">setColor</span><span class="hljs-params">(<span class="hljs-built_in">string</span> clr)</span> </span>{
        <span class="hljs-comment">// Error: member "Animal::color" is inaccessible</span>
        color = clr; 
    }
};</code></pre>

<p>Also, since the <code>protected</code> keyword hides data, we cannot access <var>type</var> directly from an object of <code>Dog</code> or <code>Animal</code> class.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Error: member "Animal::type" is inaccessible</span>
dog1.type = <span class="hljs-string">"mammal"</span>;</code></pre>

<hr>
<h2 id="access-modes">Access Modes in C++ Inheritance</h2>

<p>In our previous tutorials, we have learned about C++ access specifiers such as public, private, and protected.</p>

<p>So far, we have used the <code>public</code> keyword in order to inherit a class from a previously-existing base class. However, we can also use the <code>private</code> and <code>protected</code> keywords to inherit classes. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Animal</span> {</span>
  <span class="hljs-comment">// code</span>
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span> :</span> <span class="hljs-keyword">private</span> Animal {
  <span class="hljs-comment">// code</span>
};</code></pre>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Cat</span> :</span> <span class="hljs-keyword">protected</span> Animal {
  <span class="hljs-comment">// code</span>
};</code></pre>

<p>The various ways we can derive classes are known as <strong>access modes</strong>. These access modes have the following effect:</p>

<ol>
  <li><strong>public:</strong> If a derived class is declared in <code>public</code> mode, then the members of the base class are inherited by the derived class just as they are.</li>
  <li><strong>private:</strong> In this case, all the members of the base class become <code>private</code> members in the derived class.</li>
  <li><strong>protected:</strong> The <code>public</code> members of the base class become <code>protected</code> members in the derived class.</li>
</ol>

<p>The <code>private</code> members of the base class are always <code>private</code> in the derived class.</p>

<p>To learn more, visit our <a href="/cpp-programming/public-protected-private-inheritance">C++ public, private, protected inheritance</a> tutorial.</p>

<hr>
<h2 id="function-override">Member Function Overriding in Inheritance</h2>

<p>Suppose, base class and derived class have member functions with the same name and arguments.</p>

<p>If we create an object of the derived class and try to access that member function, the member function in the derived class is invoked instead of the one in the base class.</p>

<p>The member function of derived class overrides the member function of base class.</p>

<p>Learn more about <a href="/cpp-programming/function-overriding">Function overriding in C++</a>.</p>
</div>
</section>
<section id="nine2">
<h1>C++ Public, Protected and Private Inheritance</h1>
<div class="content">
    <p id="introduction">In <a href="/cpp-programming/inheritance">C++ inheritance</a>, we can derive a child <a href="https://www.programiz.com/cpp-programming/object-class">class</a> from the base class in different access modes. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
.... ... ....
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
.... ... ....
};</code></pre>

<p>Notice the <a href="https://www.programiz.com/cpp-programming/keywords-identifiers">keyword</a> <code>public</code> in the code</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base</code></pre>

<p>This means that we have created a derived class from the base class in <strong>public mode</strong>. Alternatively, we can also derive classes in <strong>protected</strong> or <strong>private</strong> modes.</p>

<p>These 3 keywords (<code>public</code>, <code>protected</code>, and <code>private</code>) are known as <strong>access specifiers</strong> in C++ inheritance.</p>

<hr>
<h2 id="syntax">public, protected and private inheritance in C++</h2>
<ul>
  <li><strong>public inheritance</strong> makes <code>public</code> members of the base class <code>public</code> in the derived class, and the <code>protected</code> members of the base class remain <code>protected</code> in the derived class.</li>
  <li><strong>protected inheritance</strong> makes the <code>public</code> and <code>protected</code> members of the base class <code>protected</code> in the derived class.</li>
  <li><strong>private inheritance</strong> makes the <code>public</code> and <code>protected</code> members of the base class <code>private</code> in the derived class.</li>
</ul>

<p class="note-tip"><strong>Note:</strong> <code>private</code> members of the base class are inaccessible to the derived class.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
<span class="hljs-keyword">public</span>:
  <span class="hljs-keyword">int</span> x;
<span class="hljs-keyword">protected</span>:
  <span class="hljs-keyword">int</span> y;
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">int</span> z;
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">PublicDerived</span>:</span> <span class="hljs-keyword">public</span> Base {
<span class="hljs-comment">// x is public</span>
<span class="hljs-comment">// y is protected</span>
<span class="hljs-comment">// z is not accessible from PublicDerived</span>
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ProtectedDerived</span>:</span> <span class="hljs-keyword">protected</span> Base {
<span class="hljs-comment">// x is protected</span>
<span class="hljs-comment">// y is protected</span>
<span class="hljs-comment">// z is not accessible from ProtectedDerived</span>
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">PrivateDerived</span>:</span> <span class="hljs-keyword">private</span> Base {
<span class="hljs-comment">// x is private</span>
<span class="hljs-comment">// y is private</span>
<span class="hljs-comment">// z is not accessible from PrivateDerived</span>
};</code></pre>

<hr>
<h2 id="example1">Example 1: C++ public Inheritance</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate the working of public inheritance</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">int</span> pvt = <span class="hljs-number">1</span>;

<span class="hljs-keyword">protected</span>:
  <span class="hljs-keyword">int</span> prot = <span class="hljs-number">2</span>;

<span class="hljs-keyword">public</span>:
  <span class="hljs-keyword">int</span> pub = <span class="hljs-number">3</span>;

  <span class="hljs-comment">// function to access private member</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getPVT</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> pvt;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">PublicDerived</span> :</span> <span class="hljs-keyword">public</span> Base {
<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// function to access protected member from Base</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getProt</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> prot;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
PublicDerived object1;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Private = "</span> &lt;&lt; object1.getPVT() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Protected = "</span> &lt;&lt; object1.getProt() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Public = "</span> &lt;&lt; object1.pub &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Private = 1
Protected = 2
Public = 3</samp></pre>

<p>Here, we have derived <code>PublicDerived</code> from <code>Base</code> in <strong>public mode</strong>.</p>

<p>As a result, in <code>PublicDerived</code>:</p>

<ul>
  <li><var>prot</var> is inherited as <strong>protected</strong>.</li>
  <li><var>pub</var> and <code>getPVT()</code> are inherited as <strong>public</strong>.</li>
  <li><var>pvt</var> is inaccessible since it is <strong>private</strong> in <code>Base</code>.</li>
</ul>

<p>Since <strong>private</strong> and <strong>protected</strong> members are not accessible from <code>main()</code>, we need to create public functions <code>getPVT()</code> and <code>getProt()</code> to access them:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Error: member "Base::pvt" is inaccessible</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Private = "</span> &lt;&lt; object1.pvt;

<span class="hljs-comment">// Error: member "Base::prot" is inaccessible</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Protected = "</span> &lt;&lt; object1.prot;</code></pre>

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
  </div><div class="clearfix"></div><p>Notice that the&nbsp;<code>getPVT()</code>&nbsp;function has been defined inside <code>Base</code>. But the&nbsp;<code>getProt()</code>&nbsp;function has been defined inside <code>PublicDerived</code>.</p>

<p>This is because <var>pvt</var>, which is <strong>private</strong> in <code>Base</code>, is inaccessible to <code>PublicDerived</code>.</p>

<p>However, <var>prot</var> is accessible to <code>PublicDerived</code>&nbsp;due to&nbsp;public inheritance. So, <code>getProt()</code>&nbsp;can access the protected&nbsp;variable from within&nbsp;<code>PublicDerived</code>.</p>

<hr>
<h3 id="public-access">Accessibility in public Inheritance</h3>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>Accessibility</th>
              <th>private members</th>
              <th>protected members</th>
              <th>public members</th>
          </tr>
          <tr>
              <td>Base Class</td>
              <td>Yes</td>
              <td>Yes</td>
              <td>Yes</td>
          </tr>
          <tr>
              <td>Derived Class</td>
              <td>No</td>
              <td>Yes</td>
              <td>Yes</td>
          </tr>
      </tbody>
  </table>
</div>

<hr>
<h2 id="example2">Example 2: C++ protected Inheritance</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate the working of protected inheritance</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">int</span> pvt = <span class="hljs-number">1</span>;

<span class="hljs-keyword">protected</span>:
  <span class="hljs-keyword">int</span> prot = <span class="hljs-number">2</span>;

 <span class="hljs-keyword">public</span>:
  <span class="hljs-keyword">int</span> pub = <span class="hljs-number">3</span>;

  <span class="hljs-comment">// function to access private member</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getPVT</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> pvt;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ProtectedDerived</span> :</span> <span class="hljs-keyword">protected</span> Base {
<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// function to access protected member from Base</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getProt</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> prot;
  }

  <span class="hljs-comment">// function to access public member from Base</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getPub</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> pub;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
ProtectedDerived object1;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Private cannot be accessed."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Protected = "</span> &lt;&lt; object1.getProt() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Public = "</span> &lt;&lt; object1.getPub() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p>Output</p>

<pre><samp>Private cannot be accessed.
Protected = 2
Public = 3</samp></pre>

<p>Here, we have derived <code>ProtectedDerived</code> from <code>Base</code> in <strong>protected mode</strong>.</p>

<p>As a result, in <code>ProtectedDerived</code>:</p>

<ul>
  <li><var>prot</var>, <var>pub</var> and <code>getPVT()</code> are inherited as <strong>protected</strong>.</li>
  <li><code>pvt</code> is inaccessible since it is <strong>private</strong> in <code>Base</code>.</li>
</ul>

<p>As we know, <strong>protected</strong> members cannot be directly accessed&nbsp;from outside the class. As a result, we cannot use <code>getPVT()</code> from <code>ProtectedDerived</code>.</p>

<p>That is also why we need to create the <code>getPub()</code> function in <code>ProtectedDerived</code> in order to access the <var>pub</var> variable.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Error: member "Base::getPVT()" is inaccessible</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Private = "</span> &lt;&lt; object1.getPVT();

<span class="hljs-comment">// Error: member "Base::pub" is inaccessible</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Public = "</span> &lt;&lt; object1.pub;</code></pre>

<hr>
<h3 id="protected-access">Accessibility in protected Inheritance</h3>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>Accessibility</th>
              <th>private members</th>
              <th>protected members</th>
              <th>public members</th>
          </tr>
          <tr>
              <td>Base Class</td>
              <td>Yes</td>
              <td>Yes</td>
              <td>Yes</td>
          </tr>
          <tr>
              <td>Derived Class</td>
              <td>No</td>
              <td>Yes</td>
              <td>Yes (inherited as protected variables)</td>
          </tr>
      </tbody>
  </table>
</div>

<hr>
<h2 id="example3">Example 3: C++ private Inheritance</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate the working of private inheritance</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-keyword">int</span> pvt = <span class="hljs-number">1</span>;

<span class="hljs-keyword">protected</span>:
  <span class="hljs-keyword">int</span> prot = <span class="hljs-number">2</span>;

<span class="hljs-keyword">public</span>:
  <span class="hljs-keyword">int</span> pub = <span class="hljs-number">3</span>;

  <span class="hljs-comment">// function to access private member</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getPVT</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> pvt;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">PrivateDerived</span> :</span> <span class="hljs-keyword">private</span> Base {
<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// function to access protected member from Base</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getProt</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> prot;
  }

  <span class="hljs-comment">// function to access private member</span>
  <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getPub</span><span class="hljs-params">()</span> </span>{
    <span class="hljs-keyword">return</span> pub;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
PrivateDerived object1;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Private cannot be accessed."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Protected = "</span> &lt;&lt; object1.getProt() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Public = "</span> &lt;&lt; object1.getPub() &lt;&lt; <span class="hljs-built_in">endl</span>;
<span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Private cannot be accessed.
Protected = 2
Public = 3</samp></pre>

<p>Here, we have derived <code>PrivateDerived</code> from <code>Base</code> in <strong>private mode</strong>.</p>

<p>As a result, in <code>PrivateDerived</code>:</p>

<ul>
  <li><var>prot</var>, <code>pub</code> and <code>getPVT()</code> are inherited as <strong>private</strong>.</li>
  <li><var>pvt</var> is inaccessible since it is <strong>private</strong> in <code>Base</code>.</li>
</ul>

<p>As we know, private members cannot be directly accessed from outside the class. As a result, we cannot use <code>getPVT()</code> from <code>PrivateDerived</code>.</p>

<p>That is also why we need to create the <code>getPub()</code> function in <code>PrivateDerived</code> in order to access the <var>pub</var> variable.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Error: member "Base::getPVT()" is inaccessible</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Private = "</span> &lt;&lt; object1.getPVT();

<span class="hljs-comment">// Error: member "Base::pub" is inaccessible</span>
<span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Public = "</span> &lt;&lt; object1.pub;</code></pre>

<hr>
<h3 id="private-access">Accessibility in private Inheritance</h3>

<div class="table-responsive">
  <table border="0">
      <tbody>
          <tr>
              <th>Accessibility</th>
              <th>private members</th>
              <th>protected members</th>
              <th>public members</th>
          </tr>
          <tr>
              <td>Base Class</td>
              <td>Yes</td>
              <td>Yes</td>
              <td>Yes</td>
          </tr>
          <tr>
              <td>Derived Class</td>
              <td>No</td>
              <td>Yes (inherited as private variables)</td>
              <td>Yes (inherited as private variables)</td>
          </tr>
      </tbody>
  </table>
</div>
</div>
</section>
<section id="nine3">
<h1>C++ Multiple, Multilevel and Hierarchical Inheritance</h1>
<div class="content">
    <p id="introduction"><a href="/cpp-programming/inheritance">Inheritance</a> is one of the core features of an <a href="/cpp-programming/oop">object-oriented</a> programming language. It allows software developers to derive a new <a href="/cpp-programming/object-class">class</a> from the existing class. The derived class inherits the features of the base class (existing class).</p>

<p>There are various models of inheritance in C++ programming.</p>

<hr>
<h2 id="multilevel-inheritance">C++ Multilevel Inheritance</h2>

<p>In C++ programming, not only can you derive a class from the base class but you can also derive a class from the derived class. This form of inheritance is known as multilevel inheritance.</p>

<pre><samp>class A { 
... .. ... 
};
class B: public A {
... .. ...
};
class C: public B {
... ... ...
};</samp></pre>

<p>Here, class <var>B</var> is derived from the base class <var>A</var> and the class <var>C</var> is derived from the derived class <var>B</var>.</p>

<hr>
<h3 id="example1">Example 1: C++ Multilevel Inheritance</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">A</span> {</span>
<span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">display</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span>&lt;&lt;<span class="hljs-string">"Base class content."</span>;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">B</span> :</span> <span class="hljs-keyword">public</span> A {};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">C</span> :</span> <span class="hljs-keyword">public</span> B {};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  C obj;
  obj.display();
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Base class content.</samp></pre>

<p>In this program, class <var>C</var> is derived from class <var>B</var> (which is derived from base class <var>A</var>).</p>

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
  </div><div class="clearfix"></div><p>The <var>obj</var> object of class <var>C</var> is defined in the <code>main()</code> function.</p>

<p>When the <code>display()</code> function is called, <code>display()</code> in class <var>A</var> is executed. It's because there is no <code>display()</code> function in class <var>C</var> and class <var>B</var>.</p>

<p>The compiler first looks for the <code>display()</code> function in class <var>C</var>. Since the <a href="/cpp-programming/function">function</a> doesn't exist there, it looks for the function in class <var>B</var> (as <var>C</var> is derived from <var>B</var>).</p>

<p>The function also doesn't exist in class <var>B</var>, so the compiler looks for it in class <var>A</var> (as <var>B</var> is derived from <var>A</var>).</p>

<p>If <code>display()</code> function exists in <var>C</var>, the compiler overrides <code>display()</code> of class <var>A</var> (because of <a href="/cpp-programming/function-overriding">member function overriding</a>).</p>

<hr>
<h2 id="multiple-inheritance">C++ Multiple Inheritance</h2>

<p>In C++ programming, a class can be derived from more than one parent. For example, A class <var>Bat</var> is derived from base classes <var>Mammal</var> and <var>WingedAnimal</var>. It makes sense because bat is a mammal as well as a winged animal.</p>

<figure><img src="assets/images/multiple-inheritance-example.png" title="C++ Multiple Inheritance Example" alt="C++ Multiple Inheritance Example" width="350" height="183">
  <figcaption>Multiple Inheritance</figcaption></figure>
<hr>
<h3 id="example2">Example 2: Multiple Inheritance in C++ Programming</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Mammal</span> {</span>
<span class="hljs-keyword">public</span>:
  Mammal() {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Mammals can give direct birth."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">WingedAnimal</span> {</span>
<span class="hljs-keyword">public</span>:
  WingedAnimal() {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Winged animal can flap."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Bat</span>:</span> <span class="hljs-keyword">public</span> Mammal, <span class="hljs-keyword">public</span> WingedAnimal {};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Bat b1;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Mammals can give direct birth.
Winged animal can flap.</samp></pre>

<hr>
<h3 id="ambiguity-multiple">Ambiguity in Multiple Inheritance</h3>

<p>The most obvious problem with multiple inheritance occurs during function overriding.</p>

<p>Suppose two base classes have the same function which is not overridden in the derived class.</p>

<p>If you try to call the function using the object of the derived class, the compiler shows error. It's because the compiler doesn't know which function to call. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">base1</span> {</span>
<span class="hljs-keyword">public</span>:
    <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">someFunction</span><span class="hljs-params">( )</span> </span>{....}  
};
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">base2</span> {</span>
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">someFunction</span><span class="hljs-params">( )</span> </span>{....} 
};
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">derived</span> :</span> <span class="hljs-keyword">public</span> base1, <span class="hljs-keyword">public</span> base2 {};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  derived obj;
  obj.someFunction() <span class="hljs-comment">// Error!  </span>
}</code></pre>

<p>This problem can be solved using the scope resolution function to specify which function to class either <var>base1</var> or <var>base2</var>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  obj.base1::someFunction( );  <span class="hljs-comment">// function of base1 class is called</span>
  obj.base2::someFunction();   <span class="hljs-comment">// function of base2 class is called.</span>
}</code></pre>

<hr>
<h2 id="hierarchical-inheritance">C++ Hierarchical Inheritance</h2>

<p>If more than one class is inherited from the base class, it's known as <a href="http://www.programtopia.net/cplusplus/docs/hierarchical-inheritance-c-programming?utm_source=programiz&amp;utm_campaign=display">hierarchical inheritance</a>. In hierarchical inheritance, all features that are common in child classes are included in the base class.</p>

<p>For example, Physics, Chemistry, Biology are derived from Science class. Similarly, Dog, Cat, Horse are derived from Animal class.</p>

<hr>
<h3>Syntax of Hierarchical Inheritance</h3>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">base_class</span> {</span>
   ... .. ...
}

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">first_derived_class</span>:</span> <span class="hljs-keyword">public</span> base_class {
   ... .. ...
}

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">second_derived_class</span>:</span> <span class="hljs-keyword">public</span> base_class {
   ... .. ...
}

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">third_derived_class</span>:</span> <span class="hljs-keyword">public</span> base_class {
   ... .. ...
}</code></pre>

<hr>
<h3 id="example3">Example 3: Hierarchical Inheritance in C++ Programming</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate hierarchical inheritance</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// base class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Animal</span> {</span>
<span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">info</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I am an animal."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-comment">// derived class 1</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Dog</span> :</span> <span class="hljs-keyword">public</span> Animal {
<span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">bark</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I am a Dog. Woof woof."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-comment">// derived class 2</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Cat</span> :</span> <span class="hljs-keyword">public</span> Animal {
<span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">meow</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"I am a Cat. Meow."</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// create object of Dog class</span>
  Dog dog1;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Dog Class:"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  dog1.info();  <span class="hljs-comment">// parent Class function</span>
  dog1.bark();

  <span class="hljs-comment">// create object of Cat class</span>
  Cat cat1;
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nCat Class:"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  cat1.info();  <span class="hljs-comment">// parent Class function</span>
  cat1.meow();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Dog Class:
I am an animal.
I am a Dog. Woof woof.

Cat Class:
I am an animal.
I am a Cat. Meow.</samp></pre>

<p>Here, both the <code>Dog</code> and <code>Cat</code> classes are derived from the <code>Animal</code> class. As such, both the derived classes can access the <code>info()</code> function belonging to the <code>Animal</code> class.</p>

<hr>
<h2 id="virtual-inheritance">C++ Virtual Inheritance</h2>

<p>Virtual inheritance is a C++ technique that makes sure that the grandchild derived classes inherit only one copy of a base class's member variables.</p>

<p>Let's consider the following class hierarchy.</p>

<figure><img src="assets/images/diamond-problem-inheritance.png" title="Diamond Problem in Inheritance" alt="Diamond Problem in Inheritance" width="350" height="300">
  <figcaption>Diamond Problem in Inheritance</figcaption></figure>
<p>Here, when <code>Bat</code> inherits from multiple classes; <code>Mammal</code> and <code>WingedAnimal</code> having the same base class; <code>Animal</code>, it may inherit multiple instances of the base class. This is known as the diamond problem.</p>

<p>We can avoid this problem using virtual inheritance.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
... .. ...
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived1</span> :</span> <span class="hljs-keyword">virtual</span> <span class="hljs-keyword">public</span> Base {
... .. ...
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived2</span> :</span> <span class="hljs-keyword">virtual</span> <span class="hljs-keyword">public</span> Base {
... .. ...
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived3</span> :</span> <span class="hljs-keyword">public</span> Derived1, <span class="hljs-keyword">public</span> Derived2 {
... ... ...
};</code></pre>

<p>Here, <code>Derived1</code> and <code>Derived2</code> both inherit from <code>Base</code> virtually, ensuring that <code>Derived3</code> will have only one set of <code>Base</code> member variables, even though it inherits from both <code>Derived1</code> and <code>Derived2</code>.</p>

<hr>
<h3 id="example4">Example 4: Virtual Inheritance</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// base class with a speciesName member variable</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Animal</span> {</span>
<span class="hljs-keyword">private</span>:
  <span class="hljs-built_in">string</span> species_name;

<span class="hljs-keyword">public</span>:

  <span class="hljs-comment">// constructor that accepts </span>
  <span class="hljs-comment">// a species name for initialization</span>
  Animal(<span class="hljs-keyword">const</span> <span class="hljs-built_in">string</span>&amp; name) : species_name(name) {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Animal constructor called"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }

  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">show_species</span><span class="hljs-params">()</span> <span class="hljs-keyword">const</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"This animal belongs to the species: "</span> &lt;&lt; species_name &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-comment">// WingedAnimal class with virtual inheritance from Animal</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">WingedAnimal</span> :</span> <span class="hljs-keyword">virtual</span> <span class="hljs-keyword">public</span> Animal {
<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// constructor that initializes </span>
  <span class="hljs-comment">// the Animal part of WingedAnimal</span>
  WingedAnimal(<span class="hljs-keyword">const</span> <span class="hljs-built_in">string</span>&amp; name) : Animal(name) {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"WingedAnimal constructor called"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-comment">// Mammal class with virtual inheritance from Animal</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Mammal</span> :</span> <span class="hljs-keyword">virtual</span> <span class="hljs-keyword">public</span> Animal {
<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// constructor that initializes </span>
  <span class="hljs-comment">// the Animal part of Mammal</span>
  Mammal(<span class="hljs-keyword">const</span> <span class="hljs-built_in">string</span>&amp; name) : Animal(name) {
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Mammals constructor called"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-comment">// Bat class inherits from WingedAnimal and Mammal</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Bat</span> :</span> <span class="hljs-keyword">public</span> WingedAnimal, <span class="hljs-keyword">public</span> Mammal {
<span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// Bat constructor</span>
  <span class="hljs-comment">// note that Animal's constructor will only be called once</span>
  <span class="hljs-comment">// due to virtual inheritance.</span>
  Bat() : Animal(<span class="hljs-string">"Bat"</span>), WingedAnimal(<span class="hljs-string">"Bat"</span>), Mammal(<span class="hljs-string">"Bat"</span>) {
  }

  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">show_info</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-built_in">endl</span> &lt;&lt; <span class="hljs-string">"It's a unique animal! Here are some details:"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
      
        <span class="hljs-comment">// show the species_name</span>
        <span class="hljs-comment">// demonstrating the shared member variable</span>
      show_species();
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Bat my_bat;
  my_bat.show_info();
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Animal constructor called
WingedAnimal constructor called
Mammals constructor called

It's a unique animal! Here are some details:
This animal belongs to the species: Bat</samp></pre>

<p>In this example, the <code>Bat</code> class is derived from both <code>WingedAnimal</code> and <code>Mammal</code>, which are in turn derived from <code>Animal</code> using virtual inheritance.</p>

<p>This ensures that only one <code>Animal</code> base class constructor is called when an instance of <code>Bat</code> is created and the <code>species_name</code> is set to <code>"Bat"</code>.</p>

<p class="note-tip"><strong>Note</strong>: In the above program, if the <code>virtual</code> keyword was not used, the <code>Bat</code> class would inherit multiple copies of the member variable of the <code>Animal</code> class. This would result in an error.</p>

</div>
</section>
<section id="nine4">
<h1>C++ Function Overriding</h1>
<div class="content">
    <p id="introduction">As we know, <a href="/cpp-programming/inheritance">inheritance</a> is a feature of <a href="/cpp-programming/oop">OOP</a> that allows us to create derived classes from a base <a href="/cpp-programming/object-class">class</a>. The derived classes inherit features of the base class.</p>

<p>Suppose we define the same <a href="/cpp-programming/function">function</a> in both the base class and the derived class. Now, when we call this function using the object of the derived class, the function of the derived class executes.</p>

<p>Here, the member function in the derived class shadows the member function in the base class. This is called shadowing the base class member function</p>

<hr>
<h2 id="example1">Example 1: C++ Shadowing Base Class Member Function</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate shadowing base class member function</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Base Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Derived Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Derived derived1;
  derived1.print();
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Derived Function</samp></pre>

<p>Here, the same function <code>print()</code> is defined in both <code>Base</code> and <code>Derived</code> classes.</p>

<p>So, when we call <code>print()</code> from the <code>Derived</code> object <var>derived1</var>, the <code>print()</code> from <code>Derived</code> is executed by shadowing the function in <code>Base</code>.</p>

<figure><img src="assets/images/cpp-function-overriding.png" title="Working of C++ Function Shadowing" alt="Working of C++ Function Shadowing" width="420" height="519">
  <figcaption>Working of function Shadowing in C++</figcaption></figure>
<p>As we can see, the function was shadowed because we called the function from an object of the <code>Derived</code> class.</p>

<p>Had we called the <code>print()</code> function from an object of the <code>Base</code> class, the function would not have been shadowed.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// Call function of Base class</span>
Base base1;
base1.print(); <span class="hljs-comment">// Output: Base Function</span></code></pre>

<hr>
<h2 id="shadowed-access">Access Shadowed Function in C++</h2>

<p>To access the shadowed function of the base class, we use the scope resolution operator <code>::</code>.</p>

<p>We can also access the shadowed function by using a <a href="/cpp-programming/pointers">pointer</a> of the base class to point to an object of the derived class and then calling the function from that pointer.</p>

<hr>
<h3 id="shadowed-access-example">Example 2: C++ Access Shadowed Function From the Base Class </h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to access shadowed function</span>
<span class="hljs-comment">// in main() using the scope resolution operator ::</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Base Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Derived Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Derived derived1, derived2;
  derived1.print();

  <span class="hljs-comment">// access print() function of the Base class</span>
  derived2.Base::print();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Derived Function
Base Function</samp></pre>

<p>Here, the statement</p>

<pre style="max-height: 600px;"><code class="cpp hljs">derived2.Base::print();</code></pre>

<p>accesses the <code>print()</code> function of the Base class.</p>

<figure><img src="assets/images/cpp-access-overridden-function-using-object.png" title="C++ Access Shadowed Function Using Derived Object" alt="C++ Access Shadowed Function Using Derived Object" width="420" height="472">
  <figcaption>Access Shadowed function using object of derived class in C++</figcaption></figure>
<hr>
<h3 id="example3">Example 3: C++ Call Shadowed Function From Derived Class</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to call the shadowed function</span>
<span class="hljs-comment">// from a member function of the derived class</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Base Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Derived Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;

      <span class="hljs-comment">// call overridden function</span>
      Base::print();
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Derived derived1;
  derived1.print();
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Derived Function
Base Function</samp></pre>

<p>In this program, we have called the base class member function inside the <code>Derived</code> class itself.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Derived Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
      Base::print();
  }
};</code></pre>

<p>Notice the code <code>Base::print();</code>, which calls the member function <code>print()</code> from the <code>Base</code> class inside the <code>Derived</code> class.</p>

<figure><img src="assets/images/cpp-access-overridden-function-inside-derived-class.png" title="C++ Access Shadowed Function Inside Derived Class" alt="C++ Access Shadowed Function Inside Derived Class" width="420" height="454">
  <figcaption>Access overridden function inside derived class in C++</figcaption></figure>
<hr>
<h3 id="example4">Example 4: C++ Call Shadowed Function Using Pointer</h3>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to access shadowed function using pointer</span>
<span class="hljs-comment">// of Base type that points to an object of Derived class</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Base Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Derived Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Derived derived1;

  <span class="hljs-comment">// pointer of Base type that points to derived1</span>
  Base* ptr = &amp;derived1;

  <span class="hljs-comment">// call function of Base class using ptr</span>
  ptr-&gt;print();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Base Function</samp></pre>

<p>In this program, we have created a pointer of <code>Base</code> type named <var>ptr</var>. This pointer points to the <code>Derived</code> object <var>derived1</var>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// pointer of Base type that points to derived1</span>
Base* ptr = &amp;derived1;</code></pre>

<p>When we call the <code>print()</code> function using <var>ptr</var>, it calls the member function from <code>Base</code>.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// call function of Base class using ptr</span>
ptr-&gt;print();</code></pre>

<p>This is because even though <var>ptr</var> points to a <code>Derived</code> object, it is actually of <code>Base</code> type. So, it calls the member function of <code>Base</code>.</p>

<p>In order to override the <code>Base</code> function instead of accessing it, we need to use <a href="/cpp-programming/virtual-functions">virtual functions</a> in the <code>Base</code> class.</p>

</div>
</section>
<section id="nine5">
<h1>C++ Virtual Functions</h1>
<div class="content">
    <p id="introduction">A virtual function is a member <a href="/cpp-programming/function">function</a> in the base <a href="/cpp-programming/object-class">class</a> that we expect to redefine in derived classes.</p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-comment">// code</span>
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-comment">// code</span>
  }
};</code></pre>

<p>The <var>print()</var> method in the <var>Derived</var> class <a href="/cpp-programming/function-overriding">shadows</a> the <var>print()</var> method in the <var>Base</var> class. </p>

<p>However, if we create a pointer of <code>Base</code> type to point to an object of <code>Derived</code> class and call the <code>print()</code> function, it calls the <code>print()</code> function of the <code>Base</code> class.</p>

<p>In other words, the member function of <code>Base</code> is not overridden.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Derived derived1;
  Base* base1 = &amp;derived1;

  <span class="hljs-comment">// calls function of Base class</span>
  base1-&gt;print();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre>

<p>To avoid this, we declare the <code>print()</code> function of the <code>Base</code> class as virtual by using the <code>virtual</code> keyword.</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">virtual</span> <span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> <span class="hljs-keyword">override</span> </span>{
      <span class="hljs-comment">// code</span>
  }
};</code></pre>

<p>If the virtual function is redefined in the derived class, the function in the derived class is executed even if it is called using a <a href="/cpp-programming/pointers">pointer</a> of the base class object pointing to a derived class object. In such a case, the function is said to be overridden. </p>

<p>Virtual functions are an integral part of polymorphism in C++. To learn more, check our tutorial on <a href="/cpp-programming/polymorphism">C++ Polymorphism</a>.</p>

<hr>
<h2 id="example1">Example 1: C++ virtual Function</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">virtual</span> <span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Base Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> <span class="hljs-keyword">override</span> </span>{
      <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Derived Function"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Derived derived1;

  <span class="hljs-comment">// pointer of Base type that points to derived1</span>
  Base* base1 = &amp;derived1;

  <span class="hljs-comment">// calls member function of Derived class</span>
  base1-&gt;print();

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

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
  </div><div class="clearfix"></div><p><strong>Output</strong></p>

<pre><samp>Derived Function</samp></pre>

<p>Here, we have declared the <code>print()</code> method of <code>Base</code> as <code>virtual</code>.</p>

<p>So, this function is overridden even when we use a pointer of <code>Base</code> type that points to the <code>Derived</code> object <var>derived1</var>.</p>

<figure><img src="assets/images/cpp-virtual-function.png" title="C++ Working of Virtual Functions" alt="C++ Working of Virtual Functions" width="460" height="515">
  <figcaption>Working of virtual functions in C++</figcaption></figure>
<hr>
<h2 id="override-specifier">C++ override Specifier</h2>

<p><a href="/cpp-programming/cpp-11">C++ 11</a> provides a new specifier <code>override</code> that is very useful to avoid common mistakes while using virtual functions.</p>

<p>This <code>override</code> specifier specifies the member functions of the derived classes that override the member function of the base class.</p>

<p>For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Base</span> {</span>
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">virtual</span> <span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-comment">// code</span>
  }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> <span class="hljs-keyword">override</span> </span>{
      <span class="hljs-comment">// code</span>
  }
};</code></pre>

<p>If we use a function prototype in <code>Derived</code> class and define that function outside of the class, then we use the following code:</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Derived</span> :</span> <span class="hljs-keyword">public</span> Base {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-comment">// function prototype</span>
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print</span><span class="hljs-params">()</span> <span class="hljs-keyword">override</span></span>;
};

<span class="hljs-comment">// function definition</span>
<span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">Derived::print</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// code</span>
}</code></pre>

<p>Here, <code>void print() override;</code> is the function prototype in the <code>Derived</code> class. The <code>override</code> <code>specifier</code> ensures that the <code>print()</code> function in <code>Base</code> class is overridden by the <code>print()</code> function in <code>Derived</code> class.</p>

<p>If we use function prototype in <code>Derived</code> class, then we use <code>override</code> specifier in the function declaration only, not in the definition.</p>

<hr>
<h3 id="override-use">Use of C++ override</h3>

<p>When using virtual functions, it is possible to make mistakes while declaring the member functions of the derived classes.</p>

<p>Using the <code>override</code> specifier prompts the compiler to display error messages when these mistakes are made.</p>

<p>Otherwise, the program will simply compile but the virtual function will not be overridden.</p>

<p>Some of these possible mistakes are:</p>

<ul>
  <li><strong>Functions with incorrect names:</strong> For example, if the virtual function in the base class is named <code>print()</code>, but we accidentally name the overriding function in the derived class as <code>pint()</code>.</li>
  <li><strong>Functions with different return types:</strong> If the virtual function is, say, of <code>void</code> type but the function in the derived class is of <code>int</code> type.</li>
  <li><strong>Functions with different parameters:</strong> If the parameters of the virtual function and the functions in the derived classes don't match.</li>
  <li>No virtual function is declared in the base class.</li>
</ul>

<hr>
<h2 id="virtual-destructor">Virtual Destructor</h2>

<p>When a derived class involves dynamic memory allocation, we have to deallocate the memory in its destructor. </p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Shape</span> {</span>
  <span class="hljs-keyword">public</span>:
      Shape() = <span class="hljs-keyword">default</span>;

      <span class="hljs-function"><span class="hljs-keyword">virtual</span> <span class="hljs-keyword">double</span> <span class="hljs-title">get_area</span><span class="hljs-params">()</span> <span class="hljs-keyword">const</span> </span>{
          <span class="hljs-keyword">return</span> <span class="hljs-number">0.0</span>;
      }

      ~Shape() = <span class="hljs-keyword">default</span>;
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Square</span>:</span> <span class="hljs-keyword">public</span> Shape {
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">double</span>* length;

  <span class="hljs-keyword">public</span>:
      Square(<span class="hljs-keyword">double</span> len = <span class="hljs-number">1.0</span>): length(<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{len}) {
      }

      <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">get_area</span><span class="hljs-params">()</span> <span class="hljs-keyword">const</span> <span class="hljs-keyword">override</span> </span>{
          <span class="hljs-keyword">return</span> *length * *length;
      }

      ~Square() {
          <span class="hljs-keyword">delete</span> length;
           <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"deleted length."</span> &lt;&lt; <span class="hljs-built_in">endl</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// Pointer to Square class pointing to Square object</span>
  Square* shape1 = <span class="hljs-keyword">new</span> Square(<span class="hljs-number">1.5</span>);
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"area of square: "</span> &lt;&lt; shape1-&gt;get_area() &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-comment">// invokes Square class destructor</span>
  <span class="hljs-keyword">delete</span> shape1;

  <span class="hljs-comment">// pointer to Shape class pointing to Square object</span>
  Shape* shape2 = <span class="hljs-keyword">new</span> Square(<span class="hljs-number">2.5</span>);
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"area of square: "</span> &lt;&lt; shape2-&gt;get_area() &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-comment">// invokes Shape class destructor</span>
  <span class="hljs-keyword">delete</span> shape2;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output:</strong></p>

<pre><samp>area of square: 2.25
deleted length.

area of square: 6.25</samp></pre>

<p>When we delete <var>shape1</var> which is a <var>Square*</var> pointing to a <var>Square</var> object, the destructor of the <var>Square</var> class is called, which deletes the dynamic memory acquired by the <var>Square</var> object.</p>

<p>However, if we delete <var>shape2</var> which is a <var>Shape*</var> pointing to a <var>Square</var> object, the destructor of the <var>Shape</var> class is called, which doesn't deallocate the dynamic memory acquired by the <var>Square</var> object.</p>

<p>If we declare the <code>Shape</code> class destructor as <code>virtual</code>, the <code>Square</code> class destructor is called when we delete a pointer to <var>Shape</var> class pointing to a <var>Square</var> object.</p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>

<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Shape</span> {</span>
  <span class="hljs-keyword">public</span>:
      Shape() = <span class="hljs-keyword">default</span>;

      <span class="hljs-function"><span class="hljs-keyword">virtual</span> <span class="hljs-keyword">double</span> <span class="hljs-title">get_area</span><span class="hljs-params">()</span> <span class="hljs-keyword">const</span> </span>{
          <span class="hljs-keyword">return</span> <span class="hljs-number">0.0</span>;
      }

      <span class="hljs-keyword">virtual</span> ~Shape() = <span class="hljs-keyword">default</span>;
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Square</span>:</span> <span class="hljs-keyword">public</span> Shape {
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">double</span>* length;

  <span class="hljs-keyword">public</span>:
      Square(<span class="hljs-keyword">double</span> len = <span class="hljs-number">1.0</span>): length(<span class="hljs-keyword">new</span> <span class="hljs-keyword">double</span>{len}) {
      }

      <span class="hljs-function"><span class="hljs-keyword">double</span> <span class="hljs-title">get_area</span><span class="hljs-params">()</span> <span class="hljs-keyword">const</span> <span class="hljs-keyword">override</span> </span>{
          <span class="hljs-keyword">return</span> *length * *length;
      }

      ~Square() {
          <span class="hljs-keyword">delete</span> length;
           <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"deleted length."</span> &lt;&lt; <span class="hljs-built_in">endl</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// Pointer to Square class pointing to Square object</span>
  Square* shape1 = <span class="hljs-keyword">new</span> Square(<span class="hljs-number">1.5</span>);
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"area of square: "</span> &lt;&lt; shape1-&gt;get_area() &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-comment">// invokes Square class destructor</span>
  <span class="hljs-keyword">delete</span> shape1;

  <span class="hljs-comment">// pointer to Shape class pointing to Square object</span>
  Shape* shape2 = <span class="hljs-keyword">new</span> Square(<span class="hljs-number">2.5</span>);
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"area of square: "</span> &lt;&lt; shape2-&gt;get_area() &lt;&lt; <span class="hljs-built_in">endl</span>;
  <span class="hljs-comment">// invokes square class destructor</span>
  <span class="hljs-keyword">delete</span> shape2;
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output:</strong></p>

<pre><samp>area of square: 2.25
deleted length.

area of square: 6.25
deleted length.</samp></pre>

<hr>
<h2 id="virtual-use">Use of C++ Virtual Functions</h2>

<p>Virtual functions are useful when we store a group of objects.</p>

<p>Suppose we have a base class <var>Employee</var> and derived classes <var>HourlyEmployee</var> and <var>RegularEmployee</var>. We can store <var>Employee*</var> pointers pointing to objects of both the derived classes in a collection of <var>Employee*</var>. </p>

<p>We can then call the virtual function using <var>Employee*</var> pointers. When we call the virtual function using <var>Employee*</var> pointers, the compiler invokes the function as defined in the respective derived class. </p>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to demonstrate the use of virtual function</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;vector&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Employee</span> {</span>
  <span class="hljs-keyword">private</span>:
      <span class="hljs-built_in">string</span> first_name;
      <span class="hljs-built_in">string</span> last_name;
  <span class="hljs-keyword">public</span>:
      Employee(<span class="hljs-built_in">string</span> fname, <span class="hljs-built_in">string</span> lname): first_name(fname), last_name(lname) {
      }
      <span class="hljs-function"><span class="hljs-built_in">string</span> <span class="hljs-title">get_full_name</span><span class="hljs-params">()</span> </span>{
          <span class="hljs-keyword">return</span> first_name + <span class="hljs-string">" "</span> + last_name;
      }
      <span class="hljs-comment">// virtual function to allow overriding</span>
      <span class="hljs-function"><span class="hljs-keyword">virtual</span> <span class="hljs-keyword">void</span> <span class="hljs-title">print_wage</span><span class="hljs-params">()</span> </span>{
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The employee's wage structure is not declared yet"</span> &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
      <span class="hljs-comment">// virtual destructor</span>
      <span class="hljs-keyword">virtual</span> ~Employee() {
      }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">HourlyEmployee</span>:</span> <span class="hljs-keyword">public</span> Employee {
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">double</span> hourly_wage;
  <span class="hljs-keyword">public</span>:
      HourlyEmployee(<span class="hljs-built_in">string</span> fname, <span class="hljs-built_in">string</span> lname, <span class="hljs-keyword">double</span> wage_per_hour): Employee(fname, lname), hourly_wage(wage_per_hour) {
          
      }
      <span class="hljs-comment">// overrides the function and provides proper implementation</span>
      <span class="hljs-comment">// according to the wage structure of HourlyEmployee</span>
      <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print_wage</span><span class="hljs-params">()</span> <span class="hljs-keyword">override</span> </span>{
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The hourly wage of "</span> &lt;&lt; get_full_name() &lt;&lt; <span class="hljs-string">" is "</span> &lt;&lt; hourly_wage &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
};

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">RegularEmployee</span>:</span> <span class="hljs-keyword">public</span> Employee {
  <span class="hljs-keyword">private</span>:
      <span class="hljs-keyword">double</span> monthly_wage;
  <span class="hljs-keyword">public</span>:
      RegularEmployee(<span class="hljs-built_in">string</span> fname, <span class="hljs-built_in">string</span> lname, <span class="hljs-keyword">double</span> wage_per_month): Employee(fname, lname), monthly_wage(wage_per_month) {
          
      }
      <span class="hljs-comment">// overrides the function and provides proper implementation</span>
      <span class="hljs-comment">// according to the wage structure of RegularEmployee</span>
      <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">print_wage</span><span class="hljs-params">()</span> <span class="hljs-keyword">override</span> </span>{
          <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"The monthly wage of "</span> &lt;&lt; get_full_name() &lt;&lt; <span class="hljs-string">" is "</span> &lt;&lt; monthly_wage &lt;&lt; <span class="hljs-built_in">endl</span>;
      }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  <span class="hljs-comment">// declare a vector to store Employee* pointers pointing to dervied class objects</span>
  <span class="hljs-built_in">vector</span>&lt;Employee*&gt; employees {<span class="hljs-keyword">new</span> HourlyEmployee(<span class="hljs-string">"John"</span>, <span class="hljs-string">"Doe"</span>, <span class="hljs-number">13.5</span>), <span class="hljs-keyword">new</span> RegularEmployee(<span class="hljs-string">"Jane"</span>, <span class="hljs-string">"Smith"</span>, <span class="hljs-number">3000.7</span>)};
  <span class="hljs-keyword">for</span>(Employee* employee: employees) {
      employee-&gt;print_wage();
  }
  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>The hourly wage of John Doe is 13.5
The monthly wage of Jane Smith is 3000.7</samp></pre>

<p>Here, the base class <var>Employee</var> has a virtual function <var>print_wage()</var>. The derived classes <var>HourlyEmployee</var> and <var>RegularEmployee</var> have their own implementation of the <var>print_wage()</var> function. </p>

<p>We have stored the <var>Employee*</var> pointers pointing to <var>HourlyEmployee</var> and <var>RegularEmployee</var> objects in a vector. </p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-built_in">vector</span>&lt;Employee*&gt; employees {<span class="hljs-keyword">new</span> HourlyEmployee(<span class="hljs-string">"John"</span>, <span class="hljs-string">"Doe"</span>, <span class="hljs-number">13.5</span>), <span class="hljs-keyword">new</span> RegularEmployee(<span class="hljs-string">"Jane"</span>, <span class="hljs-string">"Smith"</span>, <span class="hljs-number">3000.7</span>)};</code></pre>

<p>We then used ranged for loop to iterate through the pointers in the vector. </p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-keyword">for</span>(Employee* employee: employees) {
  employee-&gt;print_wage();
}</code></pre>

<p>Here, <code>employee-&gt;print_wage()</code> invokes the <code>print_wage()</code> function based on the type of object that the pointer employee points to.</p>

</div>
</section>
<section id="nine6">
<h1>C++ Abstract Class and Pure Virtual Function</h1>
<div class="content">
    <p id="introduction">Before we learn about pure virtual functions, be sure to check these tutorials:</p>

<ul>
  <li><a href="/cpp-programming/inheritance">C++ inheritance</a></li>
  <li><a href="/cpp-programming/virtual-functions">C++ virtual functions</a></li>
</ul>

<hr>
<h2 id="pure-virtual">C++ Pure Virtual Functions</h2>

<p>Pure virtual functions are used</p>

<ul>
  <li>if a function doesn't have any use in the base class</li>
  <li>but the function must be implemented by all its derived classes</li>
</ul>

<p>Let's take an example,</p>

<p>Suppose, we have derived <code>Triangle</code>, <code>Square</code> and <code>Circle</code> classes from the <code>Shape</code> class, and we want to calculate the area of all these shapes.</p>

<p>In this case, we can create a pure virtual function named <code>calculateArea()</code> in the <code>Shape</code>. Since it's a pure virtual function, all derived classes <code>Triangle</code>, <code>Square</code> and <code>Circle</code> must include the <code>calculateArea()</code> function with implementation.</p>

<p>A pure virtual function doesn't have the function body and it must end with <code>= 0</code>. For example,</p>

<pre style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Shape</span> {</span>
  <span class="hljs-keyword">public</span>:

    <span class="hljs-comment">// creating a pure virtual function</span>
    <span class="hljs-function"><span class="hljs-keyword">virtual</span> <span class="hljs-keyword">void</span> <span class="hljs-title">calculateArea</span><span class="hljs-params">()</span> </span>= <span class="hljs-number">0</span>;
};</code></pre>

<p class="note-tip"><strong>Note:</strong> The <code>= 0</code> syntax doesn't mean we are assigning 0 to the function. It's just the way we define pure virtual functions.</p>

<hr>
<h2 id="abstract-class">Abstract Class</h2>

<p>A class that contains a pure virtual function is known as an abstract class. In the above example, the class <code>Shape</code> is an abstract class.</p>

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
  </div><div class="clearfix"></div><p>We cannot create objects of an abstract class. However, we can derive classes from them, and use their data members and member functions (except pure virtual functions).</p>

<hr>
<h2 id="example">Example: C++ Abstract Class and Pure Virtual Function</h2>

<div class="code-editor"><div class="code-editor__area"><div class="pre-code-wrapper"><div title="Click to copy" class="copy-code-button"></div><pre class="cpp-exec" style="max-height: 600px;"><code class="cpp hljs"><span class="hljs-comment">// C++ program to calculate the area of a square and a circle</span>

<span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span>
<span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;

<span class="hljs-comment">// Abstract class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Shape</span> {</span>
 <span class="hljs-keyword">protected</span>:
  <span class="hljs-keyword">float</span> dimension;

 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">getDimension</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-built_in">cin</span> &gt;&gt; dimension;
  }

  <span class="hljs-comment">// pure virtual Function</span>
  <span class="hljs-function"><span class="hljs-keyword">virtual</span> <span class="hljs-keyword">float</span> <span class="hljs-title">calculateArea</span><span class="hljs-params">()</span> </span>= <span class="hljs-number">0</span>;
};

<span class="hljs-comment">// Derived class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Square</span> :</span> <span class="hljs-keyword">public</span> Shape {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">float</span> <span class="hljs-title">calculateArea</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-keyword">return</span> dimension * dimension;
  }
};

<span class="hljs-comment">// Derived class</span>
<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Circle</span> :</span> <span class="hljs-keyword">public</span> Shape {
 <span class="hljs-keyword">public</span>:
  <span class="hljs-function"><span class="hljs-keyword">float</span> <span class="hljs-title">calculateArea</span><span class="hljs-params">()</span> </span>{
      <span class="hljs-keyword">return</span> <span class="hljs-number">3.14</span> * dimension * dimension;
  }
};

<span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{
  Square square;
  Circle circle;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Enter the length of the square: "</span>;
  square.getDimension();
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of square: "</span> &lt;&lt; square.calculateArea() &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"\nEnter radius of the circle: "</span>;
  circle.getDimension();
  <span class="hljs-built_in">cout</span> &lt;&lt; <span class="hljs-string">"Area of circle: "</span> &lt;&lt; circle.calculateArea() &lt;&lt; <span class="hljs-built_in">endl</span>;

  <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
}</code></pre></div></div><div class="code-editor__action">
        <a href="/cpp-programming/online-compiler" class="btn btn--outlined-dark btn--smallest d-flex align-items-center run-code-button" target="_blank">
          Run Code >>
        </a>
      </div></div>

<p><strong>Output</strong></p>

<pre><samp>Enter the length of the square: 4
Area of square: 16

Enter radius of the circle: 5
Area of circle: 78.5</samp></pre>

<p>In this program, <code>virtual float calculateArea() = 0;</code> inside the <code>Shape</code> class is a pure virtual function.</p>

<p>That's why we must provide the implementation of <code>calculateArea()</code> in both of our derived classes, or else we will get an error.</p>
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