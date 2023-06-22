<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                 
      </button>
      <a class="navbar-brand" href="index.php">Kitabe</a>
    </div>

    <div class="collapse navbar-collapse " id="my">
      
 <!--navbar topic-->
    	<ul class="nav navbar-nav" >
      		<li class="active"><a href="index.php">Home</a></li>
      		<li><a href="contact.php">Contact</a></li>
 	  		
    	</ul>


<!--logout and sign up-->
    	 
    	<ul class="nav navbar-nav navbar-right">
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>';
					}
					else
					{
						echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>';
					}
			?>

      <li>
        <a class="btn btn-default btn-sm ml-3" href="cart.php" style="
            
              border-bottom-width: 0px;
              border-right-width: 0px;
              border-left-width: 0px;
              padding-bottom: 5px;
              padding-top: 5px;
              border-top-width: 0px;
              margin-top: 10px; "><i class="glyphicon glyphicon-shopping-cart"></i> Cart
                   <!-- <span class="badge badge-light">3</span> -->
          </a>
      </li>
		 </ul>
		 

<!-- search bar-->
 		<form class="navbar-form navbar-right"  method="GET" action="search_result.php">
      		<div class="input-group">
        		<input type="text" class="form-control" placeholder="Search" name="s">
        			<div class="input-group-btn">
          				<button class="btn btn-default" type="submit" >
          				  <i class="glyphicon glyphicon-search"></i>
                    </button>
       			  </div>
      		</div>
    	</form>
 
    </div>
  </div>


  