<?php session_start();
	require('includes/config.php');
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require('includes/config.php'); ?>
	<?php include('head.php') ?>

</head>
<body>
    <nav class="navbar navbar-inverse">
  <?php
                        include("navbar.php");
    ?>
</nav>


<div class="container">
	<div class="page-header">
		<h2><?php echo $row['b_nm']; ?></h2>
	</div>	
	<div class="col-sm-3">
		<?php
			echo' <img src="'.$row['b_img'].'"style="
    height: 300px;
    padding-top: 0px;
    margin-top: 50px;">';
			?>
	</div>

	<div class="col-sm-4">
		<div class="page-header"><h3><u>Book Details</u></h3>
		</div>
		<?php
			echo '<h5><b> ISBN:</b></h5><p>'.$row['b_isbn'].'</p>
			 <h5><b> Publisher:</b></h5><p>'.$row['b_publisher'].'</p>
			 <h5><b> Edition:</b></h5><p>'.$row['b_edition'].'</p>
			 <h5><b> Price:</b></h5><p>'.$row['b_price'].'</p>';

				echo '<br/><br/>'; 
			if(isset($_SESSION['status']))
			 {
				echo ' <a class="btn btn-primary" href="proc_cart.php?nm='.$row['b_nm'].'&price='.$row['b_price'].'&ISBN='.$row['b_isbn'].'">
						<i class="glyphicon glyphicon-shopping-cart">Add toCart</i></a></td>';
			}
			else
			{
				echo ' <a class="btn btn-primary" href="index.php"> <h4>Please Login to add to cart</h4></a>';
				
			}

		?>
	</div>
	<div class="col-sm-4">
		<div class="page-header"><h3><u>Book Description</u></h3>
		</div>
		<?php 

			echo '<p>'.$row['b_desc'].'</p>';

		?>
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
