<?php
include('../dbconnection.php');

if(isset($_POST['course_name']) || isset($_POST['course_desc']) ||isset($_POST['course_author']) ||isset($_POST['course_duration']) ||isset($_POST['course_original_price']) ||isset($_POST['course_selling_price']) ||isset($_POST['course_image'])){

  $course_name=$_POST['course_name'];
  $course_desc=$_POST['course_desc'];
  $course_author=$_POST['course_author'];
  $course_duration=$_POST['course_duration'];
  $course_original_price=$_POST['course_original_price'];
  $course_selling_price=$_POST['course_selling_price'];
  $course_image=$_FILES['course_image'];
  $course_img=$_FILES['course_image']['name'];

   move_uploaded_file($course_image['tmp_name'],"courseimage/".$course_image['name']);;
 
  $sql="INSERT INTO courses SET course_name='$course_name',course_desc='$course_desc',course_author='$course_author',course_duration='$course_duration',course_original_price='$course_original_price',course_selling_price='$course_selling_price',course_img='$course_img' ";

  $result=$con->query($sql);
  if($result===true){
    header('location:courses.php');
  }else{
    echo "Data not submitted";
  }

}


?>