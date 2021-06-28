<?php

if(!isset($_SESSION)){
    session_start();
}
// include('dbconnection.php');

$con=mysqli_connect("localhost", "root", "","ischool");
if(isset($_POST['checkLogemail']) && isset($_POST['adminLogemail']) && isset($_POST['adminLogpass']) ) {

$adminLogemail=$_POST['adminLogemail'];
$adminLogpass =$_POST['adminLogpass'];

// echo "adminLogemail";

$sql= " SELECT * FROM admin WHERE admin_email='$adminLogemail' AND admin_pass='$adminLogpass' ";

$result=$con->query($sql);
$row=$result->num_rows;

if($row == 1){
    $_SESSION['is_admin_login']=true;
    $_SESSION['adminLogemail']=$adminLogemail;
    echo json_encode($row);

}else{
    echo json_encode($row);
}


}
?>