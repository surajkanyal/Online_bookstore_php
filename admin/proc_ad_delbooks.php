<?php
require('includes/config.php');

			$query="delete from book where b_id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:ad_delbooks.php");

?>