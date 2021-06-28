<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom css  -->
    <link rel="stylesheet" href="../css/adminstyle.css">
    <title>Dashboard</title>
</head>
<body>
   <!-- Top navbar  -->
   <nav class="navbar navbar-darkfixed-top p-0 shadow" style="background-color: #225470;">
       <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="admindashboard.php"> E-Learning</a><small>Admin Area</small>
    </nav>

    <!-- Sidebar  -->
    <div class="container-fluid mb-5" >
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i>Daskboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php"><i class="fab fa-accessible-icon"></i>Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lesson.php"><i class="fas fa-tachometer-alt"></i>Lessons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="students.php"><i class="fas fa-users"></i>Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sellReport.php"><i class="fas fa-table"></i>Sell Repoprt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminPaymentStatus.php"><i class="fas fa-table"></i>Payment Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feedback.php"><i class="fab fa-accessible-icon"></i>Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminchangepass.php"><i class="fas fa-key"></i>Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>