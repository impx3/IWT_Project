<?php
	include_once 'config.php';

	//error_reporting(E_ALL);
	//ini_set('display_errors', '1');
?>

<?php
	$chname = $_POST["name"];
	$cardnum = $_POST["cardno"];
	$cvvno = $_POST["cvv"];
	$expirydate = $_POST["expdate"];
	$payamount = $_POST["amount"];

	$sql = "INSERT INTO creditcardpayments (Card_Holder_Name,Card_Number,CVV_Number,Expiration_Date,Total_Amount) VALUES ('$chname','$cardnum','$cvvno','$expirydate','$payamount')";
	
	if (mysqli_query($conn, $sql)){
		header("Location: paymentdone.php");
		echo "<script>alert ('Record inserted successfully')</script>";
	   
	}	
	else {
		echo "<script>alert ('Error in insertion')</script>";
	}	
	
	//close the connection
	mysqli_close($conn);
?>        