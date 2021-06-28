 <!-- Start Including Header -->

 <?php include('header.php');  ?>

<!-- End Including Header -->
<!-- Start course page banner  -->

<div class="container-fluid bg-dark">
  <div class="row">
  <img src="./assets/images/courses2.jpg " alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow: 10px; opacity:0.4"  />

  </div>
</div>

<!-- end course page banner  -->

<div class="containmer jumbotron mb-5">
<div class="row">
<div class="col-md-4">
<h5>If Already Registered !! Login</h5>
<form id="stuLoginForm">
      
  <div class="form-group">
  <i class="fas fa-envelope"></i>
    <label for="stuLogemail" class="font-weight-bold">Email</label>
    <input type="text" class="form-control" id="stuLogemail" name="stuLogemail" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i>
    <label for="stuLogpass" class="font-weight-bold">  Password</label>
    <input type="password" class="form-control" id="stuLogpass" name="stuLogpass" placeholder="Password">
  </div>
  <div class="modal-footer">
       <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
</form><br>

<!-- End student Login form here -->
</div>

<div class="col-md-6 offset-md-1">
 <h5>New User !! Sign up</h5>
 
<!-- Start student registration form -->
     
        <!-- Start student registaration form here -->

        <form id="stuRegForm">
      <div class="form-group">
        <i class="fas fa-user"></i>
    <label for="stuname" class="font-weight-bold">Name</label>
    <small id="statusMsg1"></small>
    <input type="text" class="form-control" id="stuname" name="stuname" aria-describedby="emailHelp" placeholder="Enter name">
    
  </div >
  <div class="form-group">
  <i class="fas fa-envelope"></i>
    <label for="stuemail" class="font-weight-bold">Email</label>
    <small id="statusMsg2"></small>
    <input type="text" class="form-control" id="stuemail" name="stuemail" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="stuemail" name="stuemail" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i>
    <label for="stupass" class="font-weight-bold"> New Password</label>
    <small id="statusMsg3"></small>
    <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
  </div>  
  <span id="successMsg" ></span>
        <button type="button" onclick="addstu()"  class="btn btn-primary" id="signup" >Signup</button>
        
        <button type="button" class="btn btn-secondary" >Close</button>
</form >
      </div>
</div>
<!-- End student registration form -->
</div>
      </div>
     
    