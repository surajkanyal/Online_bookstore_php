<?php session_start();
require('includes/config.php');


   $user = $_POST['id'];

    $query="SELECT * FROM user WHERE u_id = '$user'";

    $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
 
   $row = mysqli_fetch_assoc($res);
    

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


  <div class="container" style="background-color:#E6E9EB;">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2>
                    Shipping details</h2>
            </div>
        </div>
    </div>
    <br/><br/>

    <div class="container">
    
           <div class="col-md-8">
            <div class="well well-sm" style="
                       padding-bottom: 350px;
                    ">
                <form action="update_profile.php" method="POST">
                   
                    <div class="col-md-6">
                       
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="nm" value="<?php echo $row['u_fnm'] ?>" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="mail" value="<?php echo $row['u_email'] ?>" required="required" /></div>
                        </div>

                          <div class="form-group">
                            <label for="contact">
                                Contact no</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-phone"></span>
                                </span>
                                <input type="tel" pattern="[0-9]{10}" class="form-control" id="contact" name="no" value="<?php echo $row['u_contact'] ?>" required="required"/></div>
                        </div>

                          <div class="form-group">
                            <label for="Address ">
                                Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-home"></span>
                                </span>
                                <input type="text" class="form-control" id="Address "  name="address" value="<?php echo $row['u_address'] ?>" required="required" /></div>
                        </div>  
                      </div>

                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Update</button>
                    </div>
                      <input type="hidden" name="id" value="<?php echo $user; ?>">

            </form>    
          </div>
        </div>
      </div>
 </body>
</html>