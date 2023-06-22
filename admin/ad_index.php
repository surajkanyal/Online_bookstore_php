
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require('includes/config.php'); ?>
	<?php include('head.php')?>

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

<!-- Modal HTML -->
  <div class="container-fluid">
		<div class="page-header">

			<h2 style="text-align:center;">Welcome to Online Bookstore:<b>Kitabe</b></h2>
			

		</div>
		<img src="shelf_of_books.png" style="
			display: block;
			margin-left: auto;
			margin-right: auto;
    		width: 800px;
   			 height: 500px; 

		"/>
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