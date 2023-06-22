<?php session_start();
require('includes/config.php');
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

<div class="container-fluid">
	<div class="col-sm-3">
					<h2 style=" color: white;
    							padding-right: 15px;
  		   						 padding-bottom: 8px;
    							margin-top: 20px;
 						   		background-color: darkslategray;">Categories</h2>
										<ul style="padding-top: 5px;
    											   padding-right: 5px;
    											   padding-bottom: 5px;
      											   padding-left: 15px;
    											   background-color: antiquewhite;">
											<?php
										
			
												$query="select * from category ";
			
												$res=mysqli_query($conn,$query);
											
												while($row=mysqli_fetch_assoc($res))
												{
													echo '<li>'.$row["cat_nm"].'</li>';
													//pass catid not catnm
												}
					
												
											?>
										</ul>

	</div>

	<div class="col-sm-8">

		<form action='process_addcategory.php' method='POST'>
			<div class="form-group">
				<div class="input-group">
					<h4><b>Add Category:</b></h4><input type="text" class="form-control" name="cat" size="25" placeholder="Category" required="required">
				</div>
       		</div>

       		 <div class="form-group">
           		 <button type="submit" class="btn btn-primary ">ADD</button>
        	</div>
    	</form>

    		<div class= "page-header">
    		</div>

				<form action='process_delcategory.php' method='POST'>
									
					<div class="form-group">
						<div class="input-group">
							<h4><b>Delete Category:</b></h4>
							<select class="form-control" name="del">
								<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option >".$row['cat_nm']."</option>";
												
												
											}
											
								?>
							</select>
											
						</div>
       				 </div>
   	
							
							 <div class="form-group">
           						 <button type="submit" class="btn btn-primary ">DELETE</button>
      					  	</div>
				</form>

	</div>
</div>

<div id="footer">
			<?php
				include("includes/footer.php");
			?>
</div>
<!-- end footer -->
</body>
</html>