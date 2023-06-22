<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require('includes/config.php'); ?>
	<?php include("head.php") ?>
  <?php 
 if(isset($_GET['msg'])){
echo '<script type="text/javascript">';
echo ' alert("'.$_GET['msg'].'")';  
echo '</script>';}
?>
  
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

<!--carousel-->
	<div class="col-sm-8">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
    	<ol class="carousel-indicators">
      		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      		<li data-target="#myCarousel" data-slide-to="1"></li>
      		<li data-target="#myCarousel" data-slide-to="2"></li>
    	</ol>

    	<!-- Wrapper for slides -->
    	<div class="carousel-inner">
      		<div class="item active">
        		<img src="book_temp2.png" alt="Books1" style="width:100%;">
      		</div>

      		<div class="item">
       			 <img src="book_temp1.jpg" alt="book2" style="width:100%;">
      		</div>
    
  	    	<div class="item">
    	    	<img src="book_temp3.png" alt="book3" style="width:100%;">
      		</div>
    	</div>

    	<!-- Left and right controls -->
    	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
     	 	<span class="glyphicon glyphicon-chevron-left"></span>
      		<span class="sr-only">Previous</span>
    	</a>
    	<a class="right carousel-control" href="#myCarousel" data-slide="next">
      		<span class="glyphicon glyphicon-chevron-right"></span>
      		<span class="sr-only">Next</span>
    	</a>
  	  </div>

     
 
 
    <div id="p-float">
     
      <div class="p-float">
        <div class="p-float-in">

          <a href="details.php?id=43">
          <img src="upload_image/1445.jpg">
          <div>
             <h5 class="p-name">Himalayan Vignettes : The Garhwal and Sikkim Treks</h5>
            <h6 class="p-price"><span>&#8377;</span>2000</h6>
          </div>
        </a>
        </div>
      </div>

      <div class="p-float">
        <div class="p-float-in">
          <a href="details.php?id=34">
          <img src="upload_image/ART3.jpg"/>
          <div>
             <h5 class="p-name">The Rough Guide to the Earth?</h5>
            <h6 class="p-price"><span>&#8377;</span>650</h6>
          </div>
        </a>
        </div>
      </div>

      <div class="p-float">
        <div class="p-float-in">
          <a href="details.php?id=3">
          <img src="upload_image/ART6.jpg"/>
          <div>
             <h5 class="p-name">  
Close to Events-Works of Bikash Bhattacharjee</h5>
            <h6 class="p-price"><span>&#8377;</span>2000</h6>
          </div>
        </a>
        </div>
      </div>

      <div class="p-float">
        <div class="p-float-in">
          <a href="details.php?id=41">
          <img src="upload_image/yoga1.jpg"/>
          <div>
             <h5 class="p-name">Safe and Simple Steps to Fruitful Meditation</h5>
            <h6 class="p-price"><span>&#8377;</span>80</h6>
          </div>
        </a>
        </div>
      </div>

      <div class="p-float">
        <div class="p-float-in">
           <a href="details.php?id=46">
          <img src="upload_image/fic1.jpg"/>
          <div>
             <h5 class="p-name">The Missing</h5>
            <h6 class="p-price"><span>&#8377;</span>206</h6>
          </div></a>
        </div>
      </div>

       <div class="p-float">
        <div class="p-float-in">
          <a href="details.php?id=21">
          <img src="upload_image/bhartiya.jpg"/>
          <div>
             <h5 class="p-name">Bhartiya Vynjano ka khajana</h5>
            <h6 class="p-price"><span>&#8377;</span>350</h6>
          </div>
        </a>
        </div>
      </div>

       <div class="p-float">
        <div class="p-float-in">
          <a href="details.php?id=45">
          <img src="upload_image/comic1.jpg"/>
          <div>
             <h5 class="p-name">SPIDER MAN</h5>
            <h6 class="p-price"><span>&#8377;</span>606</h6>
          </div>
        </a>
        </div>
      </div>

      <div class="p-float">
        <div class="p-float-in">
          <a href="details.php?id=39">
          <img src="upload_image/cul1.jpg"/>
          <div>
             <h5 class="p-name">An ABC of Indian Culture</h5>
            <h6 class="p-price"><span>&#8377;</span>595</h6>
          </div>
        </a>
        </div>
      </div>

      <div class="p-float">
        <div class="p-float-in">
          <a href="details.php?id=14">
          <img src="upload_image/1861003382.jpg"/>
          <div>
             <h5 class="p-name">ASP Server Pages 3.0</h5>
            <h6 class="p-price"><span>&#8377;</span>950</h6>
          </div>
        </a>
        </div>
      </div>

      <div class="p-float">
        <div class="p-float-in">
          <a href="details.php?id=5">
          <img src="upload_image/ASTRO1.jpg"/>
          <div>
             <h5 class="p-name">YOGIS, DESTINY & THE WHEEL OF TIMEt</h5>
            <h6 class="p-price"><span>&#8377;</span>300</h6>
          </div>
        </a>
        </div>
      </div>
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
