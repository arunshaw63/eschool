          <!-- Start Including Header -->

        <?php include('header.php');  ?>

          <!-- End Including Header -->



  
<!-- Start video background -->
<div class="container-fluid remove-vid-marg">
  <div>
      <video class="vid-parent" autoplay loop muted playsinline>
      <source src="video/banvid.mp4" type="video/mp4" />
      </video>
      <div class="vid-overlay"></div>

      <div class="vid-content">
         <h1 class="my-content">Welcome to iSchool</h1>
         <small class="my-content">Learn and Implement</small><br>
    <?php  
        if(!isset($_SESSION['is_login'])){
       echo '<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
       
        } else{
             echo ' <a href="student/studentProfile.php" class="btn btn-primary">My Profile</a>';
        }
    ?>
      </div>
  </div>
</div>
 
<!-- End video background -->



<!-- start text banner -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
    <h5><i class="fas fa-book-open mr-3"></i>100+ Online courses</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarntee*</h5>
    </div>
  </div>
</div>
<!-- end text banner -->





  <!-- Start including Popular Courses -->

        <div class="container mt-5">
<h1 class="text-center pop_cos">Popular Course</h1>
<!-- Start popular course 1st card deck-->

<?php
   $con = mysqli_connect("localhost","root","","ischool");
   $sql = "SELECT * FROM courses LIMIT 3";
   $result = $con->query($sql);
   if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
       $course_id = $row['course_id'];{

?>

<div class="card ml-3" style="width:30%;display:inline-block;margin-top:100px">

<a href="coursedetails.php?course_id=<?php echo $row['course_id'] ?>" class="btn" style="text-align:left;padding:0;margin:0">
  <img src="admin/courseimage/<?php echo $row['course_img'] ?>" class="card-img-top" alt="popular_courses"  />

  <div class="card-body">
    <h5 class="card-title"><?php echo $row['course_name'] ?></h5>
    <p class="card-text"><?php echo $row['course_desc'] ?></p>
  </div>
  </a>

<div class="card-footer">
  <p class="card-text d-inline">Price: <small><del>&#8377 <?php echo $row['course_original_price'] ?></del></small><span class="font-weigh-bolder"> &#8377 <?php echo $row['course_selling_price'] ?></span>
    <a href="coursedetails.php?course_id=<?php echo $row['course_id'] ?>" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
  </p>
</div>
</div>

      <?php
            }
              }
          }
      ?>

<!-- Start popular course 2nd card deck-->

<?php
   $con = mysqli_connect("localhost","root","","ischool");
   $sql = "SELECT * FROM courses LIMIT 3,3";
   $result = $con->query($sql);
   if( $result->num_rows > 0 ){
     while( $row = $result->fetch_assoc() ){
       $course_id = $row['course_id'];{

?>

<a href="coursedetails.php?course_id=<?php echo $row['course_id'] ?>" class="btn" style="text-align:left;padding:0;margin:0">

<div class="card mt-5 ml-3" style="width:30%;display:inline-block">

  <img src="admin/courseimage/<?php echo $row['course_img'] ?>" class="card-img-top" alt="popular_courses"  />
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['course_name'] ?></h5>
    <p class="card-text"><?php echo $row['course_desc'] ?></p>
  </div>
  </a>

<div class="card-footer">
  <p class="card-text d-inline">Price: <small><del>&#8377 <?php echo $row['course_original_price'] ?></del></small><span class="font-weigh-bolder"> &#8377 <?php echo $row['course_selling_price'] ?></span>
    <a href="coursedetails.php?course_id=<?php echo $row['course_id'] ?>" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
  </p>
</div>
</div>

      <?php
            }
              }
          }
      ?>
      <div class="text-center">
      <a href="coursespage.php" target="_blank" class="btn btn-danger btn-center mt-5">View All Courses</a>
      </div>
      
</div>


<!-- End popular course -->




        <!-- Start including Contact Us   -->

            <?php  include('contact.php');   ?>

        <!-- End include Contact us -->



<!-- Testimonial Start Here  -->

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-12">
        <h3 class="text-center">Student Feedback</h3>
            <div id="testimonial-slider" class="owl- mt-5">
               
                <?php
              
              include('dbconnection.php');
              $sql="SELECT s.stu_name,s.stu_occ,s.stu_img,f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id=f.stu_id ";
              $result=$con->query($sql);
              if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){      

             ?>
              <div class="testimonial">
                    <div class="pic">
                        <img src="student/stuimage/<?php echo $row['stu_img']  ?>" alt="fd_img">
                    </div>
                    <div class="testimonial-profile">
                        <h3 class="title"><?php echo $row['stu_name']  ?></h3>
                        <span class="post"><?php echo $row['stu_occ']  ?></span>
                    </div>
                    <p class="description"> <?php echo $row['f_content'];  ?>
                    </p>
              </div>
                    <?php } }  ?>              
               
                
            </div>
        </div>
    </div>
</div>
<script>
 
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
  </script>

        <!-- Start Including footer -->

            <?php include('footer.php');  ?>

        <!-- End Including footer -->

   


