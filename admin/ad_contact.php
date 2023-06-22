<?php 
session_start();
require('includes/config.php');


	$q="select * from contact";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");

	
	?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require('includes/config.php'); ?>
		<?php include('head.php'); ?>

 <?php 
 if(isset($_GET['msg'])){
echo '<script type="text/javascript">';
echo ' alert("Succesfully deleted")';  
echo '</script>';}
?>

</head>
<body>

	<!--navbar-->
<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                 
      </button>
      <a class="navbar-brand" href="ad_index.php">Kitabe</a>
    </div>

    <div class="collapse navbar-collapse " id="my">
      
 <!--navbar topic-->
    	<ul class="nav navbar-nav" >
      		<li class="active"><a href="ad_index.php">Home</a></li>
      	  <li><a href="ad_category.php">Category</a></li>
      	    <li><a href="ad_order.php">Order</a></li>
          <li class="dropdown">
        		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Books
        		<span class="caret"></span></a>
        		<ul class="dropdown-menu">
        			<li><a href="ad_addbook.php">Add Books</a></li>
          			<li><a href="ad_delbooks.php">Delete Books</a></li>
          		</ul>
     	  </li>
          <li><a href="ad_contact.php">Contact</a></li>
    	</ul>


<!--logout-->
    	 
    	<ul class="nav navbar-nav navbar-right">
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
		
		 </ul>
		 
 
    </div>
  </div>
</nav>

<div class="cotainer">
			
				<table class="table table-striped">
    				<thead>
      					<tr>
      		
								<th WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></th>
								<th style="color:darkgreen" WIDTH='20%'><b><u>NAME</u></b></th>
								<th style="color:darkgreen" WIDTH='20%'><b><u>EMAIL</u></b></th>
								<th style="color:darkgreen" WIDTH='50%'><b><u>QUERY</u></b></th>
								<th style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr> 
										<td>'.$count.'</td>
										<td>'.$row['h_nm'].'</td>
										<td>'.$row['h_email'].'</td>
										<td>'.$row['h_querry'].'</td>
										<td><a href="process_del_contact.php?sid='.$row['h_id'].'"><i class="fa fa-trash"></i></a></td>
												
									
									</tr>';
									$count++;
							}
						?>
					</tbody>

					</tABLE>
				
			</div>

	<div id="footer">
			<?php
				include("includes/footer.php");
			?>
</div>
<!-- end footer -->
</body>
</html>