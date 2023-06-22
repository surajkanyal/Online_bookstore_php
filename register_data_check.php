<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail']) || empty($_POST['state']) || empty($_POST['address']) )
		{
			$msg.="Please full fill all requirement";
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
			$msg.="Please Enter your Password Again.....";
		}
		
		if(!preg_match( "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['mail']))
		{
			$msg.="Please Enter Your Valid Email Address...";
		}
		
		
		if(strlen($_POST['pwd'])>10)
		{
			$msg.="Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['fnm']))
		{
			$msg.="Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:signup.php?msg=".$msg.".");
		}
		else
		{
			$querry="select u_unm from user";
			$re=mysqli_query($conn,$querry) or die("Can't Execute Query...");
			$f=0;
			while($roe=mysqli_fetch_assoc($re)){

				if($_POST('unm')==$roe('u_unm')){
					$f=1;
					break;
				}

			}
			if($f==0){
			$fnm=$_POST['fnm'];
			$unm=$_POST['unm'];
			$pwd= password_hash($_POST['pwd'], PASSWORD_DEFAULT);
			$email=$_POST['mail'];
			$contact=$_POST['contact'];
			$state=$_POST['state'];
			$address=$_POST['address'];
			
			
			$query="insert into user(u_fnm,u_unm,u_pwd,u_email,u_contact,u_state,u_address)
			values('$fnm','$unm','$pwd','$email','$contact','$state','$address')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
				
			header("location:index.php?msg= you are succesfully registered");
		}
		else{
			header("location:signup.php?msg=Username already exist.please choose the another one")
		}
	}
	}
	else
	{
		header("location:index.php?msg=".$msg".");
	}
?>