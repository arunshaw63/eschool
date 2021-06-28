<?php
   $con=mysqli_connect("localhost","root","","ischool");
   session_start();
   if(!isset($_SESSION['stuLogemail'])){
      
      header('location:loginorsignup.php');
   }else{
    header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    $stuEmail=$_SESSION['stuLogemail'];
?>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="GENERATOR" content="Evrsoft First Page">

  <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
<link rel="stylesheet" href="css/style.css">
  <title>checkout</title>
 </head>
 <body>
 <div class="container mt-5">
   <div class="row">
     <div class="col-sm-6 offset-sm-3 jumbotron">
        <h3 class="mb-5">Welcome to E-Learning Payment Page</h3>

        <form method="post" action="PaytmKit/pgRedirect.php">

		<div class="form-group row">
          <label for="ORDER_ID" class="col-sm-4 col-form-label">ORDER_ID::*</label>
            <div class="col-sm-8">
                <input  class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"	value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
            </div>
        </div>		
				
        <div class="form-group row">
		   <label class="col-sm-4 col-form-label" for="CUST_ID">Student email ::*</label>
            <div class="col-sm-8">  
					<input class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" readonly value="<?php if(isset($stuEmail)) {echo $stuEmail;}  ?>">
            </div>
        </div>

        <div class="form-group row">
		  <label class="col-sm-4 col-form-label" for="TXN_AMOUNT">Amount*</label>
            <div class="col-sm-8">  
				<input class="form-control" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						 value="<?php if(isset($_POST['id'])) {echo $_POST['id'];} ?>" readonly>
					
            </div>
        </div>	
					<!-- <label>INDUSTRY_TYPE_ID ::*</label> -->
					<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
				
				
				
					<!-- <label>Channel ::*</label> -->
					<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					
				<div class="text-center">
                   <input value="CheckOut" type="submit"	onclick="" class="btn btn-primary">
                      <a href="./courses.php" class="btn btn-secondary">Cancel</a>
                </div>
		
	</form>
    <small class="form-text text-muted">Note :Complete Payment by Clicking checkout Button</small>
     </div>
   
   </div>
   
 </div>
 
 </body>
</html>
<?php  }  ?>