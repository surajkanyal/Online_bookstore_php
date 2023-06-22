<?php session_start();
require('includes/config.php');

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
                    Contact us</h2>
            </div>
        </div>
    </div>
<br/><br/>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="contact_data.php" method="POST">
                   <div class="row">
                    <div class="col-md-6">
                       
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="nm" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="mail" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="sub" class="form-control" required="required">
                                <option value="service" name="sub">General Customer Service</option>
                                <option value="suggestions" name="sub">Suggestions</option>
                                <option value="product" name="sub">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="message">
                                Message</label>
                            <textarea  id="message" class="form-control" rows="9" cols="25" required="required" name="querry" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                New Delhi<br>
                Delhi(110021)<br>
                <abbr title="Phone">
                    P:</abbr>
                123445678
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">Bookkwale@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

    <!-- start footer -->
                <div id="footer" style="margin-top:200px">
                            <?php
                                include("includes/footer.php");
                            ?>
                </div>
    <!-- end footer -->
</body>
</html>