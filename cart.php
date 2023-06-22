
<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require('includes/config.php'); ?>
	<?php include('head.php') ?>
</head>
<body>

	<!--navbar-->
<nav class="navbar navbar-inverse">
  <?php
						include("navbar.php");
	?>
</nav>


<!-- Modal HTML -->
  <div class="container-fluid">
		<div class="col-sm-3">
					<!-- start leftnav -->
					<div id="leftnav">

							<h3 >Welcome to Online Bookstore
					
							</h3>
							
					
							<ul>
									<?php
										include("login.php");
									?>
									
									<li>
										<?php
											include("category.php");
										?>
									</li>
							</ul>	
					</div>
		<!-- end leftnav -->
		<div style="clear: both;">&nbsp;</div>
	</div>



	<div class="col-sm-8">
		<form action="proc_cart.php" method="POST">
			<h2> Your Cart</h2>
			<table class="table table-striped">
    			<thead>
      				<tr>
      				  	<th>Sn.o</th>
        				<th>Book</th>
       					<th>Qty</th>
       					<th>price</th>
      					<th>Remove</th>
      				</tr>
   				 </thead>
   				 <tbody>
    					<?php

									$Total= 0;
									$sno = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										
										echo '
											<tr>
												<td> '.$sno.'</td>
												<td> '.$x['nm'].'</td>
												<td> <input type="number" size="2" value="'.$x['qty'].'" name="'.$id.'" min="1"></td>
												<td> <span>&#8377;</span>'.$x['price'].'</td>
												<td> <a href="proc_cart.php?id='.$id.'"><span class="fa fa-trash" style="font-size:24px"></span></a>
											</tr>
										';
										$Total = $Total + ($x['qty']*$x['price']);
										$sno++;
									}
									}
								
								?>
      							   <tr>
     								 <th colspan="4">Total</th>
   									 
     								 <td><?php echo $Total; ?></td>
     								</tr>
   	
    			</tbody>
 			</table>
 		</form>
 				<div >
 				<form action="checkout.php" method="POST">	
 					<input type="hidden" name="amt" value="<?php echo $Total; ?>">
            			<button type="submit" style="float: right;" class="btn btn-primary ">Proceed to Checkout</button>
            		</form>
        		<a href="index.php"><button type="submit" style="float: left;" class="btn btn-success">Buy more Books</button></a>
        	</div><br><br>

 		<?php
 				include("includes/config.php");
 			
					if(isset($_SESSION['status']))
          			 {
             			$user=$_SESSION['uid'];
          				 } 

          			if(isset($user)){	 
          			 $query="select * from orders where u_id='$user'";
          			  $res=mysqli_query($conn,$query)or die("can't be executed");
 
	 			if(mysqli_num_rows($res)>0)
 		{
 			echo'<br>
 			<hr>
 			<h4>History</h4><hr><br>
 			<table class="table table-striped">
    			<thead>
      				<tr>
      				  	<th>sno</th>
        				<th>order_id</th>
       					<th>Amt</th>
       					<th>Date</th>
     					
      				</tr>
   				 </thead>
   				 <tbody>';
    					         
			
 				    $sno=1;
	    			  while($row=mysqli_fetch_assoc($res))
						 {	
				    				echo '<tr> <td>'.$sno.'</td>
				    						<td>'.$row['order_id'].'</td>
				    						<td>'.$row['txn_amt'].'</td>
				    						<td>'.$row['txn_Date'].'</td>
				    						</tr>';  
				    						$sno++;   		//print them
   	    	  					}
				
		echo'	</tbody>
	</table>';
		}
	}
	else{
		echo'<h2 style="float:right">please login to add books</h2>';
	}

 			
      		?>
      		<br/>
      		<br/>
    	
	</div>
</div>

<!-- start footer -->
			<div id="footer">
						<?php
							include("includes/footer.php");
						?>
			</div>
<!-- end footer -->

</body>
</html>