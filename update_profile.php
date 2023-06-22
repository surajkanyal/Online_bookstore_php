<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(!preg_match( "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['mail']))
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
		}
		

		
		if(is_numeric($_POST['nm']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		

		if($msg!="")
		{
			header("location:profile.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['nm'];
			$email=$_POST['mail'];
			$contact=$_POST['no'];
			$address=$_POST['address'];
			$uid=$_POST['id'];
			
		
			
			
			$query="update user set u_fnm='$fnm',u_email='$email',u_contact='$contact',u_address='$address'
							where u_id='$uid'";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
				
			header("location:cart.php");
		}
	}
	else
	{
		header("location:profile.php");
	}
?>