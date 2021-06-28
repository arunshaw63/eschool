<?php
 
 if(!isset($_SESSION)){
     session_start();
 }
 if(isset($_SESSION['is_login'])){
     $stuLogemail=$_SESSION['stuLogemail'];
 }
 if(isset($stuLogemail)){
    $con=mysqli_connect("localhost","root","","ischool");
     $sql="SELECT stu_img FROM student WHERE stu_email='$stuLogemail' ";
     $result=$con->query($sql);
     $row=$result->fetch_assoc();
    //  $stu_img=$row['stu_img'];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <!-- fontawesome css -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <!-- google font -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
 <!-- Ajax -->
<script src="js/ajaxrequest.js"></script>

    <title>iSchool</title>
</head>
<body>
 <!-- Top Navbar  -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top flex-md-nowrap p-0-shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="studentProfile.php">E-Learning</a>
 </nav>

  <!-- Sidebar -->
  <div class="container-fluid mb-5" style="margin-top:40px" >
    <div class="row ">
       <nav class="col-sm-2 bg-light sidebar py-5 d-print-none ">
          <div class="sidebar-sticky">
             <ul class="nav flex-column">
                <li class="nav-item mb-3">
                <img src="stuimage/<?php echo $row['stu_img'];   ?>" alt="stuimg" class="img-thumbnail rounded-circle">
                </li>

                <li class="nav-item ">
                <a class="nav-link" href="studentProfile.php">
                <i class="fas fa-user"></i>Profile<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                <a class="nav-link" href="myCourse.php">
                <i class="fab fa-accessible-icon"></i>My Courses</a>
                </li>

                <li class="nav-item ">
                <a class="nav-link" href="stufeedback.php">
                <i class="fab fa-accessible-icon"></i>Feedback</a>
                </li>

                <li class="nav-item ">
                <a class="nav-link" href="studentChangePass.php">
                <i class="fas fa-key"></i>Change Password</a>
                </li>

                <li class="nav-item ">
                <a class="nav-link" href="../logout.php">
                <i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
             </ul>
           </div>
       </nav>
    
