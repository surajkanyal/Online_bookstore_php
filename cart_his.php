<?php session_start(); 

require('includes/config.php');



$u_id=$_GET['user'];
$o_id=$_GET['orderid'];
$t_id=$_GET['txn_id'];
$amt=$_GET['amt'];
$date=$_GET['date'];


									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										
										
										$ord .= $x['nm'].'/'.$x['isbn'].' * '.$x['qty'].' , ';
									}
								}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$query="insert into orders(order_id,u_id,txn_id,txn_amt,txn_date,order_detail) 
			values('$o_id','$u_id','$t_id','$amt','$date','$ord')";
     if(mysqli_query($conn,$query)){
           mysqli_free_result($result);
          	header("location:http://localhost/kitabe/cart.php");
          			} 
		else{
						echo "Error: " . $query . "<br>" . mysqli_error($conn);
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
  						exit();
					}
					?>