<?php session_start();

	if(isset($_GET['nm']) and isset($_GET['price']) and isset($_GET['ISBN']))
	{
			
	
			$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"price"=>$_GET['price'],"isbn"=>$_GET['ISBN'],"qty"=>"1");
			header("location:cart.php");
		
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location:cart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location:cart.php");
		}
	}


?>