 <!-- Start Including header file  -->

           <?php 
            if(!isset($_SESSION)){
                session_start();
            }
            include('include/header.php');
            include('../dbconnection.php');

            if(isset($_SESSION['is_admin_login'])){
                $adminEmail=$_SESSION['adminLogemail'];

            }else{
                header('location:../index.php');
            }
            
            ?>

<!-- End Including header file  -->

<!-- Main content start Here  -->
<div class="col-sm-9 mt-5 mx-3">
<form action="" class="mt-3 form-inline d-print-none">
<div class="form-group mr-3">
<label for="checkid">Enter course ID : </label>
<input type="text" name="checkid" id="checkid" class="form-control"  />
</div>
<button type="submit" class="btn btn-danger">Search</button>
</form>

<?php
$sql="SELECT course_id FROM courses ";
$result=$con->query($sql);
while($row=$result->fetch_assoc()){
    if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_id']){
        $sql="SELECT * FROM courses WHERE course_id={$_REQUEST['checkid']} ";
        $result=$con->query($sql);
        $row=$result->fetch_assoc();
        if(($row['course_id']) == $_REQUEST['checkid']){
            $_SESSION['course_id']=$row['course_id'];
            $_SESSION['course_name']=$row['course_name'];
            ?>
            <h3 class="bg-dark text-white mt-5 p-2">Course ID :<?php if(isset($row['course_id'])) {echo $row['course_id'];}  ?> Course Name:<?php if(isset($row['course_name'])) {echo $row['course_name'];}  ?></h3>
            <?php

        }
    }
}
?>

<!-- Main content end Here  -->

                    <!--Start Plus Icon  -->
                    <?php
                    if(isset($_SESSION['course_id'])){

                    ?>
                    <div >
                    <a class="btn btn-danger box" href="addLesson.php"><i class="fas fa-plus fa-2x"></i></a>
                   </div>
                   <?php  } ?>

                  
                    <table class="table">
                    <thead>
                             <tr>
                                 <th scopr="col">Lesson Id</th>
                                 <th scopr="col">Lesson Name</th>
                                 <th scopr="col">Lesson Link</th>
                                 <th scopr="col">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php

                        $sql="SELECT * FROM lesson WHERE course_id={$_REQUEST['checkid']} ";
                        $result=$con->query($sql);
                        if($result->num_rows > 0){
                        while($row=$result->fetch_assoc()){

                       ?>
                         <tr>
                         <th scope="row"><?php echo $row['lesson_id'];  ?></th>
                         <td><?php echo $row['lesson_name'];  ?></td>
                         <td><?php echo $row['lesson_link'];?></td>
                         <td>
                         <form action="editlesson.php" method="POST" class="d-inline">
                        <input 
                        type="hidden" 
                        id="id"
                        name="id"
                        value="<?php echo $row['lesson_id'];  ?>" />
                        <button  
                        type="submit" 
                        class="btn btn-info mr-3" name="edit" value="edit">
                         <i class="fas fa-pen"></i>
                                     
                        </button>
                        </form>

                        <form action="" method="POST" class="d-inline">
                        <input 
                        type="hidden" 
                        id="id"
                        name="id"
                        value="<?php echo $row['lesson_id'];  ?>" />                                     
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

                    </table>
                   </div>
                   <?php
                   if(isset($_REQUEST['delete'])){
                       $sql=" DELETE FROM lesson WHERE lesson_id={$_REQUEST['id']} ";
                       if($con->query($sql) == TRUE){
                           echo '<meta http-equiv="refresh" content="0;URL=?deleted" ';
                       } else {
                           echo "Unable to delete data";
                       }
                   }


                   ?>
                   <!--End Plus Icon  -->


<!-- Start Including footer file  -->

              <?php include('include/footer.php')  ?>

<!-- End Including footer file  -->