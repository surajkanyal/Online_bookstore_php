<?php session_start();

require('includes/config.php');
	
	

			
	
			$password= $_POST['pwd'];
			$unm=$_POST['usernm'];
			
			$q="select * from user where u_unm='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if(password_verify($password, $row['u_pwd']))
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['upwd']=$row['u_pwd'];
					$_SESSION['uid']=$row['u_id'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm']!="admin")
					{
						header("location:index.php");
					}
					else
					{
						header("location:admin/ad_index.php");
					}
				}
				
				else
				{
					
					header("location:index.php?msg=Incorrect password");
				}
			}
			else
			{
				
				header("location:index.php?msg=Invalid user");
			}
		
			
?>