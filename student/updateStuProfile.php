<?php
if(($_POST['stuName']) == "" || ($_POST['stuOcc']) || ($_POST['stuImg'])){

    include('../dbconnection.php');
    $stuEmail=$_POST['stuEmail'];
    $stuName=$_POST['stuName'];
    $stuOcc=$_POST['stuOcc'];
    $stuImage=$_FILES['stuImg'];
    $stuimgname=$_FILES['stuImg']['name'];
    move_uploaded_file($stuImage['tmp_name'],'stuimage/'.$stuImage['name']);

    $sql="UPDATE student SET stu_name='$stuName',stu_occ='$stuOcc',stu_img='$stuimgname' WHERE stu_email='$stuEmail' ";
    $result=$con->query($sql);
    if($result == true){
        header('location:studentProfile.php');
    }


}

?>