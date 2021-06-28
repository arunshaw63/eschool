


<!-- Start popular course -->
<div class="container mt-5">
<h1 class="text-center" style="margin-bottom: 100px;">Popular Course</h1>
<!-- Start popular course 1st card deck-->

<?php
   $con=mysqli_connect("localhost","root","","ischool");
   $sql="SELECT * FROM courses";
   $result=$con->query($sql);
   if($result->num_rows > 0){
     while($row=$result->fetch_assoc()){
       $course_id=$row['course_id'];{

?>

<a href="coursedetails.php?course_id=<?php echo $row['course_id'] ?>" class="btn" style="text-align:left;padding:0;margin:0">

<div class="card ml-3 mb-5" style="width:30%;display:inline-block">

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
</div>


<!-- End popular course -->


