   <!-- Start Including header file  -->

   <?php 
       if(!isset($_SESSION)){
        session_start();
    }
    include('include/header.php');
    if(isset($_SESSION['is_admin_login'])){
        $adminEmail=$_SESSION['adminLogemail'];

    }else{
        header('location:../index.php');
    }
    
   ?>

<!-- End Including header file  -->

<!-- Start Main Content  -->


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Student Details</h3>

            <?php

            $con=mysqli_connect("localhost", "root", "","ischool");
            if(isset($_REQUEST['edit'])){

            $id=$_POST['id'];
            $sql= "SELECT * FROM student WHERE stu_id='$id' ";
            $result=$con->query($sql);
            $row=$result->fetch_assoc();

         }
            ?>

<form action="editstudentprocess.php" method="post">
<div class="form-group">
    <label class="form-label" for="stu_id">Student ID</label>
        <input type="text" id="stu_id" name="stu_id" class="form-control" value="<?php if(isset($row['stu_id'])) {echo $row['stu_id']; }  ?>"  readonly/>            
    </div>

    <div class="form-group">
    <label class="form-label" for="stu_name">Name</label>
        <input type="text" id="stu_name" name="stu_name" class="form-control" value="<?php if(isset($row['stu_name'])) {echo $row['stu_name']; }  ?>"/>            
    </div>

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="stu_email">Email</label>
    <input type="text" name="stu_email" id="stu_email" class="form-control" value="<?php if(isset($row['stu_email'])) {echo $row['stu_email']; }  ?>"/>
  </div>

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="stu_pass">Password</label>
    <input type="text" name="stu_pass" id="stu_pass" class="form-control" value="<?php if(isset($row['stu_pass'])) {echo $row['stu_pass']; }  ?>"/>
  </div>

  <!-- Email input -->
  <div class="form-group">
    <label class="form-label" for="stu_occ">Occupation</label>
    <input type="text" name="stu_occ" id="stu_occ" class="form-control" value="<?php if(isset($row['stu_occ'])) {echo $row['stu_occ']; }  ?>"/>
  </div>

  <!-- Submit button -->
  <div class="text-center">
  <button type="submit" class="btn btn-primary newStuSubmitBtn" id="newStuSubmitBtn" >Update </button>
 <a href="students.php" class="btn btn-secondary">Close</a>
  </div>
  <?php if(isset($msg)) {echo $msg;}   ?>
</form>
</div>

<!-- End Main Content  -->


 <!-- Start Including footer file  -->

 <?php include('include/footer.php')  ?>

<!-- End Including footer file  -->