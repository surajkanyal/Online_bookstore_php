<?php
session_start(); //change it if dosent works

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");


// following files need to be included
require_once("lib/config_paytm.php");
require_once("lib/encdec_paytm.php");


$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

if($isValidChecksum == "TRUE") {

	$o_id;
	$t_id;
	$t_amt;
	$t_date;
 
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		echo "<a><u>back to index</b></a>";
	}


	if (isset($_POST) && count($_POST)>0 )
	{ 
		$success="TRUE";
		foreach($_POST as $paramName => $paramValue) {
				echo "</br>".$paramName."::-".$paramValue."</br>";
				if($paramName=="ORDERID")
					{$o_id=$paramValue;
					
					}

				if($paramName=="TXNID")
					{
						$t_id=$paramValue;
						
					}

				if($paramName=="TXNAMOUNT")
					{
						$t_amt=$paramValue;
						
					}


				if($paramName=="TXNDATE")
					{
						$t_date=$paramValue;
					
					}

		
				}
		

				if(isset($_SESSION['status']))
          			 {
             			$user=$_SESSION['uid'];
          				 } 

				header("location:http://localhost/kitabe/cart_his.php?user=".$user."&orderid=".$o_id."&txn_id=".$t_id."&amt=".$t_amt."&date=".$t_date);
	
	} 

	 

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>