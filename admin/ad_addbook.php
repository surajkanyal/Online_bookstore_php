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
	
   		<form action='proc_ad_addbook.php' method='POST' enctype="multipart/form-data"  style="border-style:dashed; border-color:lightcyan; background-color:seashell;">
	
			<div class="form-group">
				<div class="input-group">
					<b>Name:</b><input type="text" class="form-control" name="name" placeholder="Book Name" required="required">
				</div>
        	</div>
        <div class="form-group">
			<div class="input-group">
				<select class="form-control" name="cat">
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

            <b>Description:</b> <textarea  class="form-control" rows="9" cols="25" required="required" name="description" placeholder="Description........"></textarea>
         </div>
		
		<div class="form-group">
			<div class="input-group">
				<b>	Publisher:</b>
				<input type="text" class="form-control" name="publisher" placeholder="Publisher" required="required">
			</div>
        </div>

         <div class="form-group">
			<div class="input-group">
				<b>Edition:</b><input type="text" class="form-control" name="edition" placeholder="Edition" required="required">
			</div>
        </div>

           <div class="form-group">
			<div class="input-group">
				<b>ISBN:</b><input type="text" class="form-control" name="isbn" placeholder="ISBN" required="required">
			</div>
        </div>
           <div class="form-group">
			<div class="input-group">
				<b>Price:<span>&#8377;</span></b><input type="number" class="form-control" name="price" placeholder="PRICE" required="required">
			</div>
        </div>
          
        <div class="form-group">
			<b>Image:</b>
						<input type="file" class="form-control" place-holder="Image" name="img" size="35" required="required">
						
						
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg"> Upload </button>
        </div>
    </form>
</div>


				
						
</body>
</html>