<?php

   $con=mysqli_connect("localhost","root","","ischool");
   if(!isset($_SESSION)){
       session_start();
   }

   if(isset($_SESSION['is_login'])){
    $stuEmail=$_SESSION['stuLogemail'];
     
   }else{
    header('location:index.php');
   }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body> 
 
<div class="container-fluid bg-success p-2">
<h3>Welcome to E Learning</h3>
<a class="btn btn-danger" href="mycourse.php">My courses</a>  
</div>

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-3 border-right">
        <h4 class="text-center">Lesson</h4>
          <ul id="playlist" class="nav flex-column">
          <?php
          if(isset($_GET['course_id'])){
              $course_id=$_GET['course_id'];
              $sql="SELECT * FROM lesson WHERE course_id='$course_id' ";
              $result=$con->query($sql);
              if($result->num_rows > 0){
                  while($row=$result->fetch_assoc()){                  

          ?>
          <li class="nav-item border-bottom py-2" movieurl='<?php echo $row['lesson_link']; ?>' style="cursor:pointer;"><?php echo $row['lesson_name'];  ?></li>
         
          <?php  } } } ?>
          </ul>
        
      </div>
      <div class="col-sm-8">
        <video id="videoarea" src="" class="mt-5 w-75 ml-2 controls">
        </video>
      </div>
   </div>
</div>
<script src="../js/custom.js"></script>
</body>
</html>