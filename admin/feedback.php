<?php
   if(!isset($_SESSION)){
    session_start();
}
include('include/header.php');
if(isset($_SESSION['is_admin_login'])){
    $adminEmail=$_SESSION['adminLogemail'];

}else{
    header('location:../index.php');
}

?>
 <!-- Main Content  -->
 <div class="col-sm-9 mt-5 ">
                    <p class="bg-dark text-white p-2">List of Feedbacks </p>
                    <table class="table">
                         <thead>
                             <tr>
                                 <th scopr="col">Feedback Id</th>
                                 <th scopr="col">Content</th>
                                 <th scopr="col">Student ID</th>
                                 <th scopr="col">Action                             </tr>
                         </thead>
                         <tbody>
                         <?php
                         $con=mysqli_connect("localhost", "root", "","ischool");
                          $sql="SELECT * FROM feedback ";
                          $result=$con->query($sql);
                          if($result-> num_rows >0 ){

                               while($row=$result->fetch_assoc()){
                                   
                         ?>
                             <tr>
                                 <th scope="row"><?php echo $row['f_id'];  ?></th>                        

                                 <td><?php echo $row['f_content'];?></td>

                                 <td><?php echo $row['stu_id'];  ?></td>

                                 <td>                              

                                    <form action="" method="POST" class="d-inline">
                                     <input 
                                     type="hidden" 
                                     id="id"
                                     name="id"
                                     value="<?php echo $row['f_id'];  ?>" />
                                     
                                    <button 
                                     type="submit" 
                                     class="btn btn-danger mr-3" name="delete" 
                                     value="delete">
                                     <i class="fas fa-trash"></i>
                                    </button>
                                    </form >
                                    </td>
                                 
                             </tr>
                             <?php } } ?>
                         </tbody>
                   
                </div>
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

                   <!-- Start Including footer file  -->

            <?php include('include/footer.php')  ?>

<!-- End Including footer file  -->