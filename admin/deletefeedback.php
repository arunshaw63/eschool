<?php
                if(isset($_REQUEST['delete'])){
                    $id=$_REQUEST['id'];
                    $con=mysqli_connect("localhost","root","","ischool");
                    $sql="DELETE FROM feedback WHERE f_id='$id' ";
                   if( $con->query($sql) === TRUE){
                    echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
                   }else{
                       echo "Unable to delete data";
                   }


                }



                ?>