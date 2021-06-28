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
//    if(isset($_REQUEST['requpdate'])){
//     //   Checking for empty fields 
//     if(($_REQUEST['course_name'] == " ") ||($_REQUEST['course_desc'] == " ") ||($_REQUEST['course_author'] == " ") ||($_REQUEST['course_duration'] == " ") ||($_REQUEST['course_selling_price'] == " ") ||($_REQUEST['course_original_price'] == " ") ){
//         // msg display if required field is missing
//         $msg='<div class="alert alertwarning col-sm-6 ml-5 mt-2" role="alert">Fill all fields  </div>';
    // }else{
        // Assigning user value to variables 
        // $cid=$_REQUEST['course_id'];
        // $cname=$_REQUEST['course_name'];
        // $cdesc=$_REQUEST['course_desc'];
        // $cauthor=$_REQUEST['course_author'];
        // $cduration=$_REQUEST['course_duration'];
        // $cselling_price=$_REQUEST['course_selling_price'];
        // $c_original_price=$_REQUEST['course_original_price'];

        // $sql="UPDATE courses SET course_id='$cid',course_name='$cname',course_desc='$cdesc',course_author='$cauthor',course_duration='$cduration',course_selling_price='$cselling_price',course_original_price='$c_original_price' WHERE course_id='$cid' ";
        // if($con->query($sql)  == TRUE){
        //     $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully !<div>';
        // }else{/
        //     $msg='<div class="alert alert-info col-sm-6 ml-5 mt-2">Unable to Update !</div>';
//         }
//     }
//    }
//    print_r($_REQUEST);
   ?>

<!-- End Including header file  -->

<!-- Start Main Content  -->


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course Details</h3>

            <?php

            $con=mysqli_connect("localhost", "root", "","ischool");
            if(isset($_REQUEST['edit'])){

            $id=$_POST['id'];
            $sql= "SELECT * FROM courses WHERE course_id='$id' ";
            $result=$con->query($sql);
            $row=$result->fetch_assoc();

         }
            ?>

    <form action="editprocess.php" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
    <label class="form-label" for="course_id">Course ID</label>
        <input type="text" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])) {echo $row['course_id']; }  ?>" class="form-control" readonly/>            
    </div>

    <div class="form-group">
    <label class="form-label" for="course_name">Course Name</label>
        <input type="text" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])) {echo $row['course_name']; }  ?>" class="form-control" />            
    </div>

    <div class="form-group">
    <label class="form-label" for="course_desc">Course Description</label>
        <textarea row="2" id="course_desc" name="course_desc" class="form-control" value="" ><?php if(isset($row['course_desc'])) {echo $row['course_desc']; }  ?></textarea>        
    </div>  

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="course_author">Author</label>
    <input type="text" name="course_author" id="course_author" class="form-control" value="<?php if(isset($row['course_author'])) {echo $row['course_author']; }  ?>" />
  </div>

  <!-- Text input -->
  <div class="form-group">
    <label class="form-label" for="course_duration">Course Duration</label>
    <input type="text" name="course_duration" id="course_duration" class="form-control" value="<?php if(isset($row['course_duration'])) {echo $row['course_duration']; }  ?>" />
  </div>

  <!-- Email input -->
  <div class="form-group">
    <label class="form-label" for="course_original_price">Course Original Price</label>
    <input type="text" name="course_original_price" id="course_original_price" class="form-control" value="<?php if(isset($row['course_original_price'])) {echo $row['course_original_price']; }  ?>"/>
  </div>

  <!-- Number input -->
  <div class="form-group">
    <label class="form-label" for="course_selling_price">Course Selling Price</label>
    <input type="text" name="course_selling_price" id="course_selling_price" class="form-control" value="<?php if(isset($row['course_selling_price'])) {echo $row['course_selling_price']; }  ?>"/>

  </div>

  <!-- Image input -->
  <div class="form-group">
    <label class="form-label" for="course_image">Course Image </label>
    <img src="courseimage/<?php if(isset($row['course_img'])) {echo $row['course_img']; }  ?>" alt="image" class="img-thumbnail" />
    <input type="file" name="course_image" class="form-control-file" id="course_image" />
  </div>
  

  <!-- Submit button -->
  <div class="text-center">
  
  <button type="submit" class="btn btn-primary requpdate" id="requpdate" >Update</button>
 <a href="course.php" class="btn btn-secondary">Close</a>
  </div>
<?php  if(isset($msg)) {echo $msg; }  ?>
</form>
</div>

<!-- End Main Content  -->


 <!-- Start Including footer file  -->

 <?php include('include/footer.php')  ?>

<!-- End Including footer file  -->