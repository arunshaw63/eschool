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
            
        }

        // if(isset($_REQUEST['submitFeedbackBtn'])){
        //     if($_REQUEST['f_content'] == ""){
        //         $msg='<div class="alert alert-danger col-sm-6 mt-2 ml-5" role="alert">Fill all fields</div>';
        //     }else{
        //         $f_content=$_REQUEST['f_content'];
        //         $sql="INSERT INTO feedback SET stu_id='$stuId' AND f_content='$f_content' ";
        //         if($con->query($sql) == TRUE){
        //             $msg='<div class="alert alert-danger col-sm-6 mt-2 ml-5" role="alert">Feedback submited successfully !</div>';
        //         } else{
        //             $msg='<div class="alert alert-danger col-sm-6 mt-2 ml-5" role="alert">Unable submit Feedback   !</div>';
        //         }

        //     }
        // }

?>

<div class="col-sm-6 mt-5">
<form action="feedbackDb.php" method="post">
    
    <div class="form-group">
    <label class="form-label" for="stuId">Student ID</label>
        <input type="text" id="stuId" name="stuId" class="form-control" value="<?php if(isset($stuId)) {echo $stuId;} ?>" readonly/>            
    </div>

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="f_content">Write Feedback :</label>
    <textarea row="2" name="f_content" id="f_content" class="form-control" ></textarea>
  </div>
  
  <!-- Submit button -->
  <div class="text-center">
  <button type="submit" class="btn btn-primary submitFeedbackBtn" id="submitFeedbackBtn" >Submit</button>
 
  </div>
  <?php if(isset($msg)) {echo $msg;} print_r($_REQUEST);  ?>
</form>
</div>
<!-- Start Including Footer -->

 <?php include('../footer.php');  ?>

<!-- End Including Footer -->