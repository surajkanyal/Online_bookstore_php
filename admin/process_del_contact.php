<?php

	require('includes/config.php');
			
			$query="delete from contact where h_id =".$_GET['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:ad_contact.php?msg=success");

?>