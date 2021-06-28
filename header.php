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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

 <!-- Ajax -->
<script src="js/ajaxrequest.js"></script>

<!-- Owl Caraousel  -->

    <title>iSchool</title>
</head>
<body>
    <!--navbar start-->
    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" style="    background-color:#225470;
">
  <a class="navbar-brand" href="index.php">iSchool</a>
  <span class="navbar-text">Learn and Implement</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom-nav">
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="coursespage.php">Course</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="paymentstatus.php">Payment Status</a>
      </li>
      <?php
          session_start();
          if(isset($_SESSION['is_login'])){
            echo '<li class="nav-item custom-nav-item">
            <a class="nav-link" href="student/studentProfile.php">My Profile</a>
          </li>
          <li class="nav-item custom-nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>';
          }else{
              echo ' <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#"  data-toggle="modal" data-target="#stuLoginModalCenter">Login</a>
            </li>
            <li class="nav-item custom-nav-item" data-toggle="modal" data-target="#stuRegModalCenter">
              <a class="nav-link" href="#">Signup</a>
            </li>';
          }
      
      ?>


      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="admin/feedback.php">Feedback</a>
      </li>
    </ul>
  </div>
</nav>   
         
<!--navbar end-->