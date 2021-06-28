<?php
 include('stuinclude/header.php');
 
 
 
 if(isset($_SESSION['is_login'])){
     $stuemail=$_SESSION['stuLogemail'];
 }else{
     header('location:../index.php');
 }
?>

<div class="container mt-5 col-sm-9">
<div class="col-sm-6">
<form action="updateStudentPassword.php
" method="post" enctype="multipart/form-data">

       <?php
        $sql="SELECT * FROM student WHERE stu_email='$stuemail' ";
        $result=$con->query($sql);
        if($result->num_rows ==1 ){
            $row=$result->fetch_assoc();
            $stuId=$row['stu_id'];
            $stuName=$row['stu_name'];
            $stuOcc=$row['stu_occ'];
            $stuImg=$row['stu_img'];
        }
       ?>
    <div class="form-group">
    <label class="form-label" for="stuEmail">Email</label>
        <input type="text" id="stuEmail" name="stuEmail" l" value="<?php echo $stuemail;   ?>" class="form-control" readonly />            
    </div>       
    <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="stuPass">New Password</label>
    <input type="text" name="stuPass" id="stuPass" class="form-control" ?>
  </div>
  
  <!-- Submit button -->
  <div class="text-center">
  
  <button type="submit" class="btn btn-primary changePasswordBtn" id="changePassword" >Change Password</button>
 <a href="course.php" class="btn btn-secondary">Close</a>

  </div>
<?php  if(isset($passMsg)) {echo $passMsg; }   ?>
</form>
</div>
</div>
<?php include('../footer.php');  ?>