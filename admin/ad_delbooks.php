<?php 
session_start();
require('includes/config.php');

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require('includes/config.php'); ?>
	<?php include('head.php'); ?>
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

<div class="container">
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>SN.O</th>
        <th>NAME</th>
        <th>PUBLISHER</th>
        <th>ISBN</th>
        <th>PRICE</th>
        <th>IMAGE</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    	<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'</td>
										<td>'.$row['b_nm'].'</td>
										<td>'.$row['b_publisher'].'</td>
										<td>'.$row['b_isbn'].'</td>
										<td>'.$row['b_price'].'</td>';
							echo '<td><img src="../'.$row['b_img'].'"width="50"/>';
										
										
							echo 	'<td><a href="proc_ad_delbooks.php?id='.$row['b_id'].'"><span class="fa fa-trash fa-lg" ></a></td>
												
									
									</tr>';
									$count++;
							}
						?>
    </tbody>
  </table>
</div>
			
<div id="footer">
			<?php
				include("includes/footer.php");
			?>
</div>
<!-- end footer -->
</body>
</html>