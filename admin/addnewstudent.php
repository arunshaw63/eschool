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

// $con=mysqli_connect("localhost","root","","ischool");
// if((isset($_REQUEST['newStuSubmitBtn']))){
// // Check empty fields 
// if(($_REQUEST['stu_name'] == " ") || ($_REQUEST['stu_email'] == " ") || ($_REQUEST['stu_pass'] == " ") || ($_REQUEST['stu_occ'] == " ")){
//     $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2>Fill all fields</div>';
// }else{
//     $stu_name=$_REQUEST['stu_name'];
//     $stu_email=$_REQUEST['stu_email'];
//     $stu_pass=$_REQUEST['stu_pass'];
//     $stu_occ=$_REQUEST['stu_occ'];

   
//     $sql="INSERT INTO student SET stu_name='$stu_name',stu_email='$stu_email',stu_pass='$stu_pass',stu_occ='$stu_occ'  ";
//     $con->query($sql);
// }
// }
// print_r($_REQUEST);
 ?>

<!-- End Including header file  -->

<!-- Start main Content  -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="addstudentdb.php" method="post">
    
    <div class="form-group">
    <label class="form-label" for="stu_name">Name</label>
        <input type="text" id="stu_name" name="stu_name" class="form-control" />            
    </div>

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="stu_email">Email</label>
    <input type="text" name="stu_email" id="stu_email" class="form-control" />
  </div>

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="stu_pass">Password</label>
    <input type="text" name="stu_pass" id="stu_pass" class="form-control" />
  </div>

  <!-- Email input -->
  <div class="form-group">
    <label class="form-label" for="stu_occ">Occupation</label>
    <input type="text" name="stu_occ" id="stu_occ" class="form-control" />
  </div>

  <!-- Submit button -->
  <div class="text-center">
  <button type="submit" class="btn btn-primary newStuSubmitBtn" id="newStuSubmitBtn" >Submit</button>
 <a href="students.php" class="btn btn-secondary">Close</a>
  </div>
  <?php if(isset($msg)) {echo $msg;}   ?>
</form>
</div>


<!-- End Main Content  -->


 <!-- Start Including footer file  -->

 <?php include('include/footer.php')  ?>

<!-- End Including footer file  -->