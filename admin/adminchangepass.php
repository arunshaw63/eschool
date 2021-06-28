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

if(isset($_REQUEST['adminPassUpdateBtn'])){
    // if(($_REQUEST['adminPass'] == "")){
        // Msg displayed if required field is empty 

    $con=mysqli_connect("localhost","root","","ischool");
      $sql="SELECT * FROM admin WHERE admin_email='$adminEmail' ";
      $result=$con->query($sql);
      if($result->num_rows == 1){
          $adminPass=$_REQUEST['adminPass'];
          $sql=" UPDATE admin SET admin='$adminPass' WHERE admin_email='$adminemail' ";
          if($con->query($sql) == TRUE){
   $passMsg='<div class="alert alert-success col-sm-6 ml-5mt-2" role="alert">Updated successfully !</div>';
          }else{
            $passMsg='<div class="alert alert-danger col-sm-6 ml-5mt-2" role="alert">Unable to Update !</div>'; 
          }
      }
}
 ?>

<!-- End Including header file  -->

<!-- Start main Content  -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Change Admin Password</h3>
    <form action="adminchangepasswordprocess.php" method="post">
    

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="inputEmail">Email</label>
    <input type="text" name="inputEmail" id="inputEmail" class="form-control" value="<?php echo $adminEmail;  ?>"/>
  </div>

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="inputnewpass">New Password</label>
    <input type="text" name="adminPass" id="inputnewpass" class="form-control" />
  </div>

  <!-- Submit button -->
  <div class="text-center">
  <button type="submit" class="btn btn-danger adminPassUpdateBtn" id="adminPassUpdateBtn" >Update</button>
 <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
  <?php if(isset($passMsg)) {echo $passMsg;}   ?>
</form>
</div>


<!-- End Main Content  -->


 <!-- Start Including footer file  -->

 <?php include('include/footer.php')  ?>

<!-- End Including footer file  -->