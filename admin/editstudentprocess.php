<?php
        $stuid=$_REQUEST['stu_id'];
        $stuname=$_REQUEST['stu_name'];
        $stuemail=$_REQUEST['stu_email'];
        $stupass=$_REQUEST['stu_pass'];
        $stuocc=$_REQUEST['stu_occ'];
       
        $con=mysqli_connect("localhost", "root", "","ischool");

                $sql="UPDATE student SET stu_id='$stuid',stu_name='$stuname',stu_email='$stuemail',stu_pass='$stupass',stu_occ='$stuocc' WHERE stu_id='$stuid' ";
        if($con->query($sql)  == TRUE){
      $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully !<div>';
      header('location:students.php');
        }else{
            $msg='<div class="alert alert-info col-sm-6 ml-5 mt-2">Unable to Update !</div>';
        }
     
   
   

?>