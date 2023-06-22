<?php
 session_start();
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

			
			<!-- start page -->

	
						
				<div class="col-sm-8">
						<div class="page-header">
    							<h1><?php 
    							require('includes/config.php');

											$search=$_GET['s'];
											echo 'Search Result :'.$search; ?></h1>      
 						 </div>
							<div id="p-float">
									<?php	
										
										require('includes/config.php');

											$search=$_GET['s'];
										
											$count_query="select count(*) as total from book where b_nm like '%$search%'";
											$count_res=mysqli_query($conn,$count_query) or die("Can't Execute Query..");
											$count=mysqli_fetch_assoc($count_res);
											$c=$count['total'];
											$query="select *from book where b_nm like '%$search%'";
												
											$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
												
									   if($c!=0){
										while($row=mysqli_fetch_assoc($res))
										{
											
											
											echo' 
											
 											 <div class="p-float" style=" height: 250px;">
        										<div class="p-float-in" style="height: 237px;"">
        											<a href="details.php?id='.$row['b_id'].'">
															<img src="'.$row['b_img'].'" >
															<br>
  										        	
          										
           										  <h5 class="p-name">'.$row['b_nm'].'</h5>
            								  	  <h6 class="p-price"> <span>&#8377;</span>
														'.$row['b_price'].'</h6>

            								  	  </a>

         										</div>
         									  </div>';
										} 
									  }

									  else{
									  			
									  			echo'<img src="404_page.jpg">';
										  	}
										
      									?>
      						</div>
      									
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
