<?php
require('includes/config.php');	
	
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST['nm']) || empty($_POST['mail']) || empty($_POST['querry']))
		{
			$msg[]="Please full fill all requirement";
		}
		
				
		if(is_numeric($_POST['nm']))
		{
			$msg[]="Name must be in String Format...";
		}
		
		if(is_numeric($_POST['mail']))	
		{
			$msg[]="Name must be in appropriate Format...";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			$nam=$_POST['nm'];
			$email=$_POST['mail'];
			$request=$_POST['querry'];
			$subj=$_POST['sub'];
			
			$query="insert into contact(h_nm,h_email,h_querry,h_sub)
			values('$nam','$email','$request','$subj')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			
			header("location:index.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>