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

<!-- Start main Content  -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Lesson</h3>
    <form action="addLessonProcess.php" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
    <label class="form-label" for="course_id">Course ID</label>
        <input type="text" id="course_id" name="course_id" class="form-control" value="<?php if(isset($_SESSION['course_id'])) {echo $_SESSION['course_id']; } ?>" readonly/>            
    </div>

    <div class="form-group">
    <label class="form-label" for="course_name">Course Name</label>
        <input type="text" id="course_name" name="course_name" class="form-control" value="<?php if(isset($_SESSION['course_name'])) {echo $_SESSION['course_name']; } ?>"/>            
    </div>
    <div class="form-group">
    <label class="form-label" for="lesson_name">Lesson Name</label>
    <input type="text" name="lesson_name" id="lesson_name" class="form-control" />
  </div> 

    <div class="form-group">
    <label class="form-label" for="lesson_desc">Lesson Description</label>
    <input type="text" name="lesson_desc" id="lesson_desc" class="form-control" />        
    </div>  

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="lesson_link">Lesson Video Link</label>
    <input type="file" name="lesson_link" id="lesson_link" class="form-control" />
  </div>

  

  <!-- Submit button -->
  <div class="text-center">
  <button type="submit" class="btn btn-primary lessonSubmitBtn" id="lessonSubmitBtn" >Submit</button>
 <a href="lesson.php" class="btn btn-secondary">Close</a>
  </div>
  <?php if(isset($msg)) {echo $msg;}   ?>
</form>
</div>


<!-- End Main Content  -->


 <!-- Start Including footer file  -->

 <?php include('include/footer.php')  ?>

<!-- End Including footer file  -->