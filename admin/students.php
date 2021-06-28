            <!-- Start Including header file  -->

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

            <!-- End Including header file  -->



     <!-- Main Content  -->
     <div class="col-sm-9 mt-5 ">
                    <p class="bg-dark text-white p-2">List of Students </p>
                    <table class="table">
                         <thead>
                             <tr>
                                 <th scopr="col">Student Id</th>
                                 <th scopr="col">Name</th>
                                 <th scopr="col">Email</th>
                                 <th scopr="col">Actionstu                             </tr>
                         </thead>
                         <tbody>
                         <?php
                         $con=mysqli_connect("localhost", "root", "","ischool");

                         $sql="SELECT * FROM student ";
                         $result=$con->query($sql);
                         if($result->num_rows > 0){
                             while($row=$result->fetch_assoc()){


                         ?>
                             <tr>
                                 <th scope="row"><?php echo $row['stu_id'];  ?></th>

                                 <td><?php echo $row['stu_name'];  ?></td>

                                 <td><?php echo $row['stu_email'];?></td>
                                 <td>
                                 <form action="editstudent.php" method="POST" class="d-inline">
                                     <input 
                                     type="hidden" 
                                     id="id"
                                     name="id"
                                     value="<?php echo $row['stu_id'];  ?>" />
                                    <button  
                                     type="submit" 
                                     class="btn btn-info mr-3" name="edit" value="edit">
                                     <i class="fas fa-pen"></i>
                                     
                                    </button>
                                    </form>

                                    <form action="deletestudent.php" method="POST" class="d-inline">
                                     <input 
                                     type="hidden" 
                                     id="id"
                                     name="id"
                                     value="<?php echo $row['stu_id'];  ?>" />
                                     
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

                  
                <div >
                    <a class="btn btn-danger box" href="addnewstudent.php"><i class="fas fa-plus fa-2x"></i></a>
                </div>
  

                </div>

                <!--Start Plus Icon  -->
                <!--End Plus Icon  -->



            <!-- Start Including footer file  -->

            <?php include('include/footer.php')  ?>

            <!-- End Including footer file  -->