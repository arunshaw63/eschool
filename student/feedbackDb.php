<?php

$con=mysqli_connect("localhost","root","","ischool");
$f_content=$_POST['f_content'];
$stuId=$_POST['stuId'];
$sql="INSERT INTO feedback SET stu_id='$stuId',f_content='$f_content' ";
$con->query($sql);
header('location:stufeedback.php');
print_r($_REQUEST);
?>