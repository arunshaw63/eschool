<?php
        $con=mysqli_connect("localhost", "root", "","ischool");

        $cid=$_REQUEST['course_id'];
        $cname=$_REQUEST['course_name'];
        $cdesc=$_REQUEST['course_desc'];
        $cauthor=$_REQUEST['course_author'];
        $cduration=$_REQUEST['course_duration'];
        $cselling_price=$_REQUEST['course_selling_price'];
        $c_original_price=$_REQUEST['course_original_price'];
        $course_image=$_FILES['course_image'];
        $course_img=$_FILES['course_image']['name'];

        move_uploaded_file($course_image['tmp_name'],"courseimage/".$course_image['name']);


                $sql="UPDATE courses SET course_id='$cid',course_name='$cname',course_desc='$cdesc',course_author='$cauthor',course_duration='$cduration',course_selling_price='$cselling_price',course_original_price='$c_original_price',course_img='$course_img' WHERE course_id='$cid' ";
        if($con->query($sql)  == TRUE){
      $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully !<div>';
      header('location:courses.php');
        }else{
            $msg='<div class="alert alert-info col-sm-6 ml-5 mt-2">Unable to Update !</div>';
        }
     
   
   

?>