<?php


 if(!($_POST['stuPass']) == "" ){

    include('../dbconnection.php');
    $stuEmail=$_POST['stuEmail'];
    $stuPass=$_POST['stuPass'];
   

    $sql="UPDATE student SET stu_pass='$stuPass' WHERE stu_email='$stuEmail' ";
    $result=$con->query($sql);
    if($result == true){
        header('location:studentChangePass.php');
    }
   

}

?>