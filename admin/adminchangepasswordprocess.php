<?php
// if(isset($_REQUEST['adminPassUpdateBtn'])){

// }
if(isset($_SESSION['is_admin_login'])){
    $adminEmail=$_SESSION['adminLogemail'];
}

include('../dbconnection.php');
$inputEmail=$_POST['inputEmail'];
$adminPass=$_POST['adminPass'];
$sql="UPDATE admin SET admin_pass='$adminPass' WHERE admin_email='$inputEmail' ";

$result=($con->query($sql));
if($result == true){
    header('location:adminchangepass.php');
    }
print_r($result);


?>