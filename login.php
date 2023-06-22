


       
				
									<?php
										require('includes/config.php');
										if(isset($_SESSION['status']))
										{
											echo '<h2 style="color:darkred">Hello :  '.$_SESSION['unm'].'</h2>';
										}
										else
										{
											echo '<li><a href="#myModal" class="trigger-btn" data-toggle="modal"  style=" margin-top: 0px;
    													margin-bottom: 0px;"><button class="btn" id="log"><span class="glyphicon glyphicon-log-in"></span> Login</button></a>
    												
    											</li>


											<div id="myModal" class="modal fade">
														<div class="modal-dialog modal-login">
															<div class="modal-content">
																<div class="modal-header">				
																	<h4 class="modal-title">Login</h4>
                													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																</div>
															<div class="modal-body">
															<form action="login_data.php" method="POST">
																<div class="form-group">
																	<div class="input-group">
																		<span class="input-group-addon"><i class="fa fa-user"></i></span>
																		<input type="text" class="form-control" name="usernm" placeholder="Username" required="required">
																	</div>
																</div>
																<div class="form-group">
																	<div class="input-group">
																		<span class="input-group-addon"><i class="fa fa-lock"></i></span>
																		<input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
																	</div>
																</div>
																<div class="form-group">
																	<button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
																</div>
					
															</form>
														</div>
														<div class="modal-footer">Not have an account? <a href="signup.php">Create one</a></div>
														</div>
													</div>
												</div>';
										}
											?>