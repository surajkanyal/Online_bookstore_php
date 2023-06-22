<?php session_start();
require('includes/config.php');
	$amount=$_POST['amt'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require('includes/config.php'); ?>
	<?php include('head.php') ?>
</head>
<body>

	<div class="container" style="background-color:#E6E9EB;">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
         		<div class="page-header">
					<h3> Shipping details</h3>
				</div>
            </div>
        </div>
    </div>
	<br/><br/>

	<div class="container">
  		<table class="table table-striped">
    			<thead>
      				<tr>
      				  	<th>Name</th>
        				<th>Contact n.o</th>
       					<th>Address</th>
       					
      				</tr>
   				 </thead>
   				 <tbody>
    				<?php
		             if(isset($_SESSION['status']))
          			 {
             			$user=$_SESSION['uid'];
          				 } 
				          $query="select * from user where u_id='$user'";

				      $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
 
	    			  while($row=mysqli_fetch_assoc($res))
						 {	
				    				echo '<tr> <td>'.$row['u_fnm'].'</td>
				    						<td>'.$row['u_contact'].'</td>
				    						<td>'.$row['u_address'].'</td>
				    						</tr';     		//print them
	    					}
					?>	
				
				</tbody>
		</table>

		<form action="profile.php" method="POST">	
 			<input type="hidden" name="id" value="<?php echo $user; ?>">
    		<button type="submit" style="float: right;" class="btn btn-primary ">Edit</button>
         </form>
        		
		<form method="post" action="PaytmKit/pgRedirect.php">
			<input id="ORDER_ID" type="hidden" tabindex="1" maxlength="20" size="20"
					name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
			<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value= "<?php if(isset($_SESSION['status']))
                 		   {
                  		    echo $_SESSION['uid'];
                  			  }
					       ?>"	>
			<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
			<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
				size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
			<input title="TXN_AMOUNT" type="hidden" tabindex="10"
				type="text" name="TXN_AMOUNT"value="<?php echo $amount; ?>">
						<br/><br/>
			<h4><b>Amount:</b></h4><span style="float: left;">&#8377;<?php echo $amount; ?></span>
						<br/><br/>
			<button type="submit" value="CheckOut" style="float: left;" class="btn btn-success">Pay now</button>
						<br/>
			</form>
   </body>

</html>