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
//  // Database connection
//  $con=mysqli_connect("localhost","root","","ischool");

// if(isset($_POST['courseSubmitBtn'])){

// //  Checking empty fields
// if(($_POST['course_name'] == "") || ($_POST['course_desc'] == "") || ($_POST['course_author'] == "") ||($_POST['course_duration'] == "") ||($_POST['course_selling_price'] == "") || ($_POST['course_original_price'] == "") ) {
    
//     $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2>Fill All Fields</div>';
// }else{

//    $course_name=$_POST['course_name'];
//    $course_desc=$_POST['course_desc'];
//    $course_author=$_POST['course_author'];
//    $course_duration=$_POST['course_duration'];
//    $course_selling_price=$_POST['course_selling_price'];
//    $course_original_price=$_POST['course_original_price'];
//    $course_image=$_FILES['course_image'];
//    move_uploaded_file($course_image['tmp_name'],"../assets/image/courseimage/".$course_image['name']);

//    $sql="INSERT INTO courses SET course_name='$course_name' ,course_desc='$course_desc' ,course_author='$course_author' ,course_duration='$course_duration' ,course_selling_price='$course_selling_price' ,course_original_price='$course_original_price'  ";
//     // $con->query($sql);
//   if( $con->query($sql) == TRUE){
//     $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2>Course added Successfully</div>';

//   }else {
//     $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2>Unable to Add Courses</div>';
  
//   }
//    header('location:courses.php');


// }

// }

 ?>

<!-- End Including header file  -->

<!-- Start main Content  -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Courses</h3>
    <form action="addCourseDb.php" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
    <label class="form-label" for="course_name">Course Name</label>
        <input type="text" id="course_name" name="course_name" class="form-control" />            
    </div>

    <div class="form-group">
    <label class="form-label" for="course_desc">Course Description</label>
        <textarea row="2" id="course_desc" name="course_desc" class="form-control" ></textarea>        
    </div>  

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="course_author">Author</label>
    <input type="text" name="course_author" id="course_author" class="form-control" />
  </div>

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="course_duration">Course Duration</label>
    <input type="text" name="course_duration" id="course_duration" class="form-control" />
  </div>

  <!-- Email input -->
  <div class="form-group">
    <label class="form-label" for="course_original_price">Course Original Price</label>
    <input type="text" name="course_original_price" id="course_original_price" class="form-control" />
  </div>

  <!-- Number input -->
  <div class="form-group">
    <label class="form-label" for="course_selling_price">Course Selling Price</label>
    <input type="text" name="course_selling_price" id="course_selling_price" class="form-control" />

  </div>

  <!-- Image input -->
  <div class="form-group">
    <label class="form-label" for="course_image">Course Image </label>
    <input type="file" name="course_image" class="form-control-file" id="course_image" />
  </div>
  

  <!-- Submit button -->
  <div class="text-center">
  <button type="submit" class="btn btn-primary courseSubmitBtn" id="courseSubmitBtn" >Submit</button>
 <a href="course.php" class="btn btn-secondary">Close</a>
  </div>
  <?php if(isset($msg)) {echo $msg;}   ?>
</form>
</div>


<!-- End Main Content  -->


 <!-- Start Including footer file  -->

 <?php include('include/footer.php')  ?>

<!-- End Including footer file  -->