 <!-- Start Including Header -->

 <?php include('header.php');  ?>

<!-- End Including Header -->

<!-- Start course page banner  -->

<div class="container-fluid bg-dark">
  <div class="row">
  <img src="./assets/images/courses2.jpg " alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow: 10px; opacity:0.4"  />

  </div>
</div>

<!-- end course page banner  -->




   <!-- start Main Content  -->
<div class="container mt-5" >
  <h1 class="text-center testyheading p-4">Course Details </h1>
    <div class="row">
      <?php
      
      $con=mysqli_connect("localhost","root","","ischool");
      if(isset($_GET['course_id'])){
        $course_id=$_GET['course_id'];
        $_SESSION['course_id']=$course_id;
        $sql="SELECT * FROM courses WHERE course_id='$course_id' ";
        $result=$con->query($sql);
        $row=$result->fetch_assoc();
      }

      ?>
       <div class="col-md-4">
       <img src="assets/images/<?php echo $row['course_img'] ?>" alt="course_image" class="card-img-top img-thumbnail">
       </div>
       <div class="col-md-8">
       <div class="card-body">
      <h5 class="card-title"><b>Course Name</b> :<?php echo $row['course_name'] ?>:</h5>
      <p class="card-text"><b>Description</b> :<?php echo $row['course_desc'] ?> </p>
      <p class="card-text"><b>Duration</b> :<?php echo $row['course_duration'] ?> </p>

      <form action="checkout.php" method="post">

      <p class="card-text d-inline"><b>Price</b> :<small><del>&#8377 <?php echo $row['course_original_price'] ?></del></small><span class="font-weight-bolder">&#8377 <?php echo $row['course_selling_price'] ?></span> </p>
      
      <input type="hidden" name="id" value="<?php echo $row['course_original_price'] ?>" />
      <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>

      </form>
     <div>    
   </div>
  </div>  
</div>
    </div></div>
<div class="container mt-5">
  <div class="row">  
    <table class="table table-bordered table-hover">
      <thead class="thead">
        <tr>
          <th>Lesson No :</th>
          <th>Lesson Name :</th>
        </tr>
      </thead>
      <tbody>
      <?php
      
      $con=mysqli_connect("localhost","root","","ischool");     
       
        $sql="SELECT * FROM lesson ";
        $result=$con->query($sql);
        if($result->num_rows > 0 ){
          $num=0;
        while($row=$result->fetch_assoc()){   
          if($course_id==$row['course_id']){  
            $num++;

      ?>
      <tr>
        <th scope="row"><?php echo $num; ?></th>
        <td><?php echo $row['lesson_name'] ?></td>
      </tr>
      <?php  } } }?>
      </tbody>
    </table>
  </div>

</div>
   
 
            

   <!-- end Main Content  -->



 <!-- Start Including Footer -->

 <?php include('footer.php');  ?>

<!-- End Including Footer -->
