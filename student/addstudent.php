<?php

if(!isset($_SESSION)){
    session_start();
}
// include('dbconnection.php');

$con=mysqli_connect("localhost", "root", "","ischool");

// Check email already registered
    if(isset($_POST['checkemail']) && isset($_POST['stuemail']) ){
        $stuemail = $_POST['stuemail'];

        $sql= " SELECT stu_email FROM student WHERE stu_email='$stuemail' ";
        $result = $con->query($sql);
        $row = $result->num_rows;
        echo json_encode($row);
    }

// Signup
$con=mysqli_connect('localhost','root','','ischool');

if( isset( $_POST['stuname'] ) && isset( $_POST['stuemail'] ) && isset( $_POST['stupass'] )){
    $stuname=$_POST['stuname'];
    $stuemail=$_POST['stuemail'];
    $stupass=$_POST['stupass'];

    $sql="INSERT INTO student SET stu_name='$stuname',stu_email='$stuemail',stu_pass='$stupass' ";
    if($con->query($sql) == TRUE){
        echo json_encode("OK");
    }else{
        echo json_encode("failed");
    }

}

// /check Login verification

    
  if( isset( $_POST['checkLogemail'] ) && isset( $_POST['stuLogemail']) && isset( $_POST['stuLogpass'] ) ) {

    $stuLogemail = $_POST['stuLogemail'];
    $stuLogpass = $_POST['stuLogpass'];

    $sql= " SELECT * FROM student WHERE stu_email = '$stuLogemail' AND stu_pass = '$stuLogpass' ";

    $result = $con-> query( $sql );
    $row = $result-> num_rows;

    if($row == 1){
        $_SESSION['is_login'] = true;
        $_SESSION['stuLogemail'] = $stuLogemail;
        echo json_encode($row);

    }else{
        echo json_encode($row);
    }
}

?>