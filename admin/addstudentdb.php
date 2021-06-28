<?php
    
// Check empty fields 
if(($_REQUEST['stu_name'] == " ") || ($_REQUEST['stu_email'] == " ") || ($_REQUEST['stu_pass'] == " ") || ($_REQUEST['stu_occ'] == " ")){
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2>Fill all fields</div>';
}else{
    $stu_name=$_REQUEST['stu_name'];
    $stu_email=$_REQUEST['stu_email'];
    $stu_pass=$_REQUEST['stu_pass'];
    $stu_occ=$_REQUEST['stu_occ'];
    $con=mysqli_connect("localhost","root","","ischool");
   
    $sql="INSERT INTO student SET stu_name='$stu_name',stu_email='$stu_email',stu_pass='$stu_pass',stu_occ='$stu_occ'  ";
    if( $con->query($sql) == TRUE){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2>Course added Successfully</div>';
        header('location:courses.php');
    
      }else {
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2>Unable to Add Courses</div>';
      
      }
      
}


?>