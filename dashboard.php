<?php
error_reporting(0);
session_start();
require "connection.php";
$id=$_SESSION['email'];
// echo $id;

$sql="SELECT * FROM registration WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($query);
$result=mysqli_fetch_assoc($query);

if($row != 1){
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        .left_side {
            background-color: rgb(210, 219, 255);
            border-right: 1px solid black;

        }

        .img {
            text-align: center;
            padding-top: 2%;
        }

        .user_image {
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 1px 2px 3px 4px rgb(0, 0, 0, 0.2);
        }


        .content {
            /* padding-left: 3%; */
            margin-top: 8%;
        }

        a{
            text-decoration: none;
            color: black;
        }
         .h4{
            
            padding: 5%;
            cursor: pointer;
            text-decoration-style: none;
        }

        .h4:hover {
            background-color: black;
            color: white;
        }

        i {
            padding-right: 6%;
            
        }

    

        .Dashboard_content {
            padding-top: 8%;
        }

        .java,
        .php,
        .c,
        .python {
            border: 2px solid black;
            text-align: center;
            border-radius: 30px;
            padding: 1%;
            cursor: pointer;


        }

        .java:hover,
        .php:hover,
        .c:hover,
        .python:hover {
            box-shadow: 1px 2px 2px 3px rgba(0, 0, 0, 0.1);
            background-color: azure;
            /* transform: translate(10%, 10%); */
            /* transform:matrix(1,-0.2,0,1,0,10) ; */
            transform:scaleZ(20) ;
        }
    </style>
    <title>Dashboard</title>
</head>

<body>
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 left_side p-0" style="min-height:100vh;">
                <div class="img">
                    <a href="<?php echo $result['image']?>"><img class="user_image" src="<?php echo $result['image']?>" width="100px"
                            height="100px"></a>
                    <h3>Hello! <?php echo $result['name']?></h3>
                    <!-- <button class="btn btn-primary" style="width: 60%;">View Profile</button> -->
                </div>

                <div class="content">
                    <a id="a" href="#" ><h4 class="h4" ><i class="fa-solid fa-house"></i>Dashboard</h4></a>
                    <a href="java.php" ><h4 class="h4" ><i class="fa-brands fa-java"></i>Java</h4></a>
                    <a href="python.php"><h4 class="h4"><i class="fa-brands fa-python"></i>Python</h4></a>
                    <a href="php.php"><h4 class="h4"><i class="fa-brands fa-c">++</i>C++</h4></a>
                    <a href="c.php"><h4 class="h4"><i class="fa-brands fa-c"></i>Language C</h4></a>
                    <a href="logout.php"><h4 class="h4"><i class="fa-solid fa-right-from-bracket"></i>Logout</h4></a>
                </div>
            </div>
            <div class="col-sm-9 right_side p-4">
                <h2>Dashboard</h2>
                <div class="btn-logout" style="text-align: right;">
                    <a href="logout.php"><button class="btn btn-primary" style="align-items: right;">Logout</button></a>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 lang-dashboard" style="margin-top: 3%;">
                          <div class="row"> 
                            <div class="col-sm-5  php">
                                <a href="java.php"><img src="assets/images/java.png" width="150px" height="150px" style="margin-right: 4%;"></a>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5 c">
                                <a href="python.php"><img src="assets/images/Python_logo.png" width="150px" height="150px"></a>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div> 
                    <div class="col-sm-1"></div>
                <!-- </div> -->
                    <!-- </div> -->
                    <div class="col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 lang-dashboard" style="margin-top: 3%;">
                        <div class="row">
                            <div class="col-sm-5  php">
                                <a href="c++.php"><img src="assets/images/c++_logo2.png" width="200px" height="150px" style="margin-right: 4%;"></a>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5 c">
                                <a href="c.php"><img src="assets/images/c_logo2.png" width="150px" height="150px"></a>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div> 


            </div>
        </div>
    </div>
    </div>
</body>

</html>