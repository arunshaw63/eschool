<!-- DELETE CODES START HERE -->

<?php
                    if(isset($_POST['delete'])){

                    $con=mysqli_connect("localhost", "root", "","ischool");
                    $id=$_REQUEST['id'];
                    $sql="DELETE FROM courses WHERE course_id='$id'  ";
                    
                    if($con->query($sql) == TRUE){
                        // echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
                        header('location:courses.php');
                    } else {
                        echo "Unable to delete data";
                    }
                   
                    }
                    ?>

                    <!-- DELETE CODES END HERE  -->