

<?php
if(!isset($_SESSION)){
    session_start();
}
    include('stuinclude/header.php');
    $con=mysqli_connect("localhost","root","","ischool");
    
    if(isset($_SESSION['is_login'])){
        $stuemail=$_SESSION['stuLogemail'];
    }else{
        header('location:../index.php');
    }
    
        $sql="SELECT * FROM student WHERE stu_email='$stuemail' ";
        $result=$con->query($sql);
        if($result->num_rows ==1 ){
            $row=$result->fetch_assoc();
            $stuId=$row['stu_id'];
            $stuName=$row['stu_name'];
            $stuOcc=$row['stu_occ'];
            $stuImg=$row['stu_img'];
        }
     // Update
      //   if(isset($_REQUEST['updateStuNameBtn'])){
      //   $stuName=$_REQUEST['stuName'];
      //   $stuOcc=$_REQUEST['stuOcc'];
      //   $stu_image=$_FILES['stuImg']['name'];
      //   $stu_image_temp=$_FILES['stuImg']['tmp_name'];
      //   $img_folder='stuimage/'.$stu_image;

      //   move_uploaded_file($stu_image_temp,$img_folder);
      //   $con=mysqli_connect("localhost","root","","ischool");

      //           $sql="UPDATE student SET stu_name='$stuName',stu_occ='$stuOcc' WHERE stu_email='$stu_email' ";
      //   if($con->query($sql)  == TRUE){
      // $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully !<div>';
      // header('location:studentProfile.php');
      //   }else{
      //       $msg='<div class="alert alert-info col-sm-6 ml-5 mt-2">Unable to Update !</div>';
      //   }
      
      //   }
   
   
 ?>
 <div class="col-sm-6 mt-5 ml-5 mb-5">
 <form action="updateStuProfile.php" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
    <label class="form-label" for="stuId">Student ID</label>
        <input type="text" id="stuId" name="stuId" value="<?php echo $stuId; ?>" class="form-control" readonly/>            
    </div>

    <div class="form-group">
    <label class="form-label" for="stuEmail">Email</label>
        <input type="text" id="stuEmail" name="stuEmail" value="<?php echo $stuemail;   ?>" class="form-control" readonly />            
    </div>

    <div class="form-group">
    <label class="form-label" for="stuName">Name</label>
        <input type="text" id="stuName" name="stuName" class="form-control" value="<?php echo $row['stu_name'];  ?>" >        
    </div>  

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="stuOcc">Occupation</label>
    <input type="text" name="stuOcc" id="stuOcc" class="form-control" value="<?php echo $row['stu_occ']  ?>" />
  </div>

  <!-- Image input -->
  <div class="form-group">
    <label class="form-label" for="stuImg">Student  Image </label>    
    <input type="file" name="stuImg" class="form-control-file" id="stuImg" />
  </div>
  

  <!-- Submit button -->
  <div class="text-center">
  
  <button type="submit" class="btn btn-primary updateStuNameBtn" id="updateStuNameBtn" >Update</button>
 <a href="course.php" class="btn btn-secondary">Close</a>

  </div>
<?php  if(isset($passMsg)) {echo $passMsg; }   ?>
</form>
  </div>


 <!-- Start Including Footer -->

 <?php include('../footer.php');  ?>

<!-- End Including Footer -->