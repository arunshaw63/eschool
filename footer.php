



<!-- Start Social -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-twitter mr-3"></i>twitter</a>
    </div>
    <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-facebook mr-3"></i>facebook</a>
</div>
    <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-instagram mr-3"></i>instagram</a>
    </div>
    <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp mr-3"></i>whatsapp</a>
    </div>   






  </div>
</div>
<!-- End Social -->

<!-- Start about -->
<div class="container-fluid p-4" style="background-color: #e9ecef;">
  <div class="container" style="background-color: #e9ecef;">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About Us</h5>
        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Mauris blandit aliquet elit.</p>
      </div>
      <div class="col-sm">
        <h5>Category</h5>
            <ul id="footer_cat">
                  <li><i class="fas fa-desktop"></i><a class="text-dark" href="#">Web Development</a></li>
                  <li><i class="fas fa-pencil-alt"></i><a class="text-dark" href="#">Web Design</a></li>
                  <li><i class="fab fa-android"></i><a class="text-dark" href="#">Android Development</a></li>
                  <li><i class="fab fa-apple"></i><a class="text-dark" href="#">iOS Development</a></li>
                  <li><i class="fas fa-table"></i><a class="text-dark" href="#">Data Analyst</a></li>        
            </ul>
      </div>
      <div class="col-sm ">
        <h5>Contact Us</h5>
        <ul id="footer_contact">
              <li><i class="fas fa-building"></i><a>E-Learning pvt ltd</a> </li>
              <li><i class="fas fa-home"></i><a>Near Victoria Memorial <br>Kolkata,WB</a></li>
              <li><i class="fas fa-phone-square-alt"></i><a>Ph: 1234567890</a></li>
              
        </ul>    

      </div>
    </div>
  </div>
</div>

<!-- startEnd about -->

<footer class="container-fluid bg-dark text-center p-2">
 <small class="text-white">
    Copyright &copy; 2021 || Design by Arun Kr Shaw ||<a href="#" data-toggle="modal" data-target="#adminLoginModalCenter"> Admin Login</a>
</small>

</footer >

<!-- Start student registration form -->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Start student registaration form here -->

   <?php include('studentRegistration.php');   ?>

       <!-- End student registaration form here -->
      </div>

      <div class="modal-footer">
       <span id="successMsg" ></span>
        <button type="button" onclick="addstu()"  class="btn btn-primary" id="signup" >Signup</button>
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End student registration form -->





<!-- Start student Login form -->

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Start student login form here -->

  <form id="stuLoginForm">
      
  <div class="form-group">
  <i class="fas fa-envelope"></i>
    <label for="stuLogemail" class="font-weight-bold">Email</label>
    <input type="text" class="form-control" id="stuLogemail" name="stuLogemail" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i>
    <label for="stuLogpass" class="font-weight-bold"> New Password</label>
    <input type="password" class="form-control" id="stuLogpass" name="stuLogpass" placeholder="Password">
  </div>
  
</form>
<!-- End student Login form here -->
      </div>
      <div class="modal-footer">
       <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- End student Login form -->






<!-- Start Admin Login form -->

<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Start Admin login form here -->
        
   <form id="adminLoginform">
    
  <div class="form-group">
  <i class="fas fa-envelope"></i>
    <label for="adminLogemail" class="font-weight-bold">Email</label>
    <input type="email" class="form-control" id="adminLogemail" name="adminLogemail" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i>
    <label for="adminLogpass" class="font-weight-bold"> New Password</label>
    <input type="password" class="form-control" id="adminLogpass" name="adminLogpass" placeholder="Password">
  </div>
  
</form>
<!-- End Admin Login form here -->
      </div>
      <div class="modal-footer">
        <span id="statusAdminLogMsg"></span>
        <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Admin Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- End Admin Login form -->

<script type="text/javascript" src="js/adminajaxrequest.js"></script>
</body>
</html>