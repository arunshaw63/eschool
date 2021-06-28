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
$con=mysqli_connect("localhost","root","","ischool");
$sql="SELECT * FROM courses";
$result=$con->query($sql);
$totalcourse=$result->num_rows;

$sql="SELECT * FROM student";
$result=$con->query($sql);
$totalstu=$result->num_rows;

$sql="SELECT * FROM courseorder";
$result=$con->query($sql);
$totalorder=$result->num_rows;


 ?>

<!-- End Including header file  -->




            <div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                            <div class="card-header">Courses</div>
                                <div class="crad-body">
                                    <h4 class="card-title"><?php echo $totalcourse  ?></h4>
                                    <a class="btn text-white" href="courses.php">View</a>
                                </div>
                            </div> 
                    </div>

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Students</div>
                                <div class="crad-body">
                                    <h4 class="card-title"><?php echo $totalstu  ?></h4>
                                    <a class="btn text-white" href="students.php">View</a>
                                </div>
                            </div> 
                    </div>

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-info mb-3" style="max-width:18rem;">
                            <div class="card-header">Sold</div>
                                <div class="crad-body">
                                    <h4 class="card-title"><?php echo $totalorder  ?></h4>
                                    <a class="btn text-white" href="sellReport.php">View</a>
                                </div>
                            </div>                    

                    </div>
                </div>
                <!-- Table  -->
                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">Course Ordered</p>
                    <table class="table">
                         <thead>
                             <tr>
                                 <th scopr="col">Order Id</th>
                                 <th scopr="col">Course Id</th>
                                 <th scopr="col">Student email</th>
                                 <th scopr="col">Order Date</th>
                                 <th scopr="col">Amout</th>
                                 <th scopr="col">action</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php
                         $con=mysqli_connect("localhost","root","","ischool");
                         $sql="SELECT * FROM courseorder ";
                         $result=$con->query($sql);
                         if($result->num_rows > 0){
                             while($row=$result->fetch_assoc()){   
                                           ?>
                             <tr>
                                 <th scope="row"><?php echo $row['order_id']  ?></th>
                                 
                                 <td><?php echo $row['co_id']  ?></td>
                                 <td><?php echo $row['stu_email']  ?></td>
                                 <td><?php echo $row['amount']  ?></td>
                                 <td><?php echo $row['order_data']  ?></td>

                                 <td><button type="submit" class="btn btn-secondary" name="delete" value="delete"><i class="far fa-trash-alt"></i></button></td>
                                 
                             </tr>
                             <?php } } ?>
                         </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   <!-- Start Including footer file  -->

<?php include('include/footer.php')  ?>

<!-- End Including footer file  -->