<?php
	include_once 'config.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Payment Done</title>
		<link rel = "stylesheet" type = "text/css" href = "payment.css">
        <link rel="stylesheet" type = "text/css" href="footerstyle2.css">
        <script src="https://kit.fontawesome.com/c6f63b3b85.js" crossorigin="anonymous"></script>
		
	</head>
    <body background = "imgs/background.jpg" id = "image" >
    <?php 
        include 'vheader.php';
    ?> 
    <div class="container-fluid vh-100 d-flex justify-content-center mt-0">
    <br/>
    <center>
        <table border ="1px solid" width = "75%" color = "cyan">
        <tr>
        <th class="col1">Card_Holder_Name</th>
        <th class="col1">Amount</th>
        <th class="col1">Transaction_No</th></tr>
    <?php
    $sql = "SELECT * FROM creditcardpayments";
    $result = $conn->query($sql);

    if ($result->num_rows>0){
        echo "<br/>Record inserted successfully";
        while ($row = $result->fetch_assoc()){
        
        echo "<tr><td>".$row["Card_Holder_Name"]."</td><td>".$row["Total_Amount"]."</td><td>".$row["Transaction_No"]."</td></tr>";
        } 
    } else {
        echo "<tr><td colspan='3'>Empty Rows</td></tr>";
    }
  
    mysqli_close($conn);
    ?>  </table>
    </center>
    <?php 
        include 'footerPay.php';
    ?>
    </div>
    </body>
</html>     