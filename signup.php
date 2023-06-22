
<!DOCTYPE html>
<html lang="en">
<head>
	<?phpif(isset($_GET['msg'])){
echo '<script type="text/javascript">';
echo ' alert("'.$_GET['msg'].'")';  
echo '</script>';}
?>
	<?php require('includes/config.php'); ?>
	<?php include('head.php') ?>
<style type="text/css">
	body {
		color: #fff;
		background-image: url('blur-book2.jpg');
		background-repeat: no-repeat;
 		 background-attachment: fixed;
 		 background-size: 100% 100%;
		font-family: 'Roboto', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 390px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}
</style>
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-inverse">
  <?php
						include("navbar.php");
	?>
</nav>

<!--signup form-->					
<div class="signup-form">
   <form action="register_data_check.php" method="POST">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
				<input type="text" class="form-control" name="fnm" placeholder="Full Name" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="unm" placeholder="Username" required="required">
			</div>
        </div>
     
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				
				 <input type="password" class="form-control"  name="pwd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="Password" class="form-control" name="cpwd" placeholder="Confirm Password" required="required">
			</div>
        </div>
           <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="mail" placeholder="Email Address" required="required">
			</div>
        </div>
         <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
				<input type="number" pattern="[0-9]{10}" title="please enter the correct number" class="form-control" name="contact" placeholder="mobile number" required="required">
			</div>
        </div>
           <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home"></i></span>
				<input type="text" class="form-control" name="state" placeholder="State" required="required">
			</div>
        </div>
           <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-address-book"></i></span>
				<input type="text" class="form-control" name="address" placeholder="Address" required="required">
			</div>
        </div>
          
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="index.php">Back to main page</a></div>
</div>


			<!-- start footer -->
			<div id="footer">
						<?php
							include("includes/footer.php");
						?>
			</div>
			
</body>
</html>                            