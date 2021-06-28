<?php
$con=mysqli_connect("localhost","root","","ischool");

//  Checking empty fields
if(($_POST['lesson_name'] == "") || ($_POST['lesson_desc'] == "") || ($_POST['course_id'] == "") ||($_POST['course_name'] == "") ) {
    
    $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2>Fill All Fields</div>';
}else{
$course_name=$_POST['course_name'];
$course_id=$_POST['course_id'];
$lesson_name=$_POST['lesson_name'];
$lesson_desc=$_POST['lesson_desc'];
$lesson_link=$_FILES['lesson_link']['name'];

   move_uploaded_file($lesson_link['tmp_name'],"courseimage/".$lesson_link['name']);


$sql="INSERT INTO lesson SET course_name='$course_name' ,course_id='$course_id' ,lesson_name='$lesson_name' ,lesson_desc='$lesson_desc' ,lesson_link='$lesson_link' ";

if( $con->query($sql) == TRUE){
    $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2>Lesson added Successfully</div>';

  }else {
    $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2>Unable to Add Lesson</div>';
  
  }
   header('location:lesson.php');
}

?>