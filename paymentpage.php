<!DOCTYPE html>
<html>
	<head>
		<title>Payment</title>
		<link rel = "stylesheet" type = "text/css" href = "payment.css">
	</head>

    <body>
    <?php 
        include 'check.php';
        include 'vheader.php';
    ?>   
    
	    <center><br/><br/>
                
                <button class = "bttn1" type = "button" id = "btn1" onclick = "loadData ('btn1') ">
                   <img src = "imgs/mastercard.png" id = "icon"></button>&nbsp;&nbsp;
                <button class = "bttn1" type = "button" id = "btn2" onclick = "loadData ('btn2') ">
                    <img src = "imgs/paypal.png" id = "icon"></button>&nbsp;&nbsp;
                <button class = "bttn1" type = "button" id = "btn3" onclick = "loadData ('btn3') ">
                    <img src = "imgs/eftPay2.png" id = "icon"></button>

            <br/><br/>
            
            <img id = "image1" src = "imgs/paymentoptions.png"><br/>
            
            <p class = "text1" id = "method1">
                <font size = "30" class = "a1">Select a payment method to proceed...</font>
            </p>
         
            <script>
            function loadData (name) {

                if (name == "btn1"){       //responsive
                    document.getElementById("method1").innerHTML = '<form action ="payment.php" method="post" id="method1" onsubmit="return validateCardNumber();">' +
                '<input type="text" name="name" placeholder=" Name of Card Holder" required><br/><br/>' +
                '<input type="text" name="cardno" placeholder="Card Number" id = "card_number card_number_error" pattern = "^[0-9]{16}" required><br><br/>' +
                '<input type="text" name="cvv" placeholder="CVV" id = "CVV_number CVV_number_error" pattern = "^[0-9]{3}" required><br/><br/>' +
                '<input type="date" name="expdate" placeholder="Expiry Date" required><br/><br/>' +
                '<input type="text" name="amount" placeholder="Amount eg:10000.00" id = "amount_error" pattern = "^[0-9]+(?:\.[0-9]{2})?$" required><br/><br/>' +
                '<input type = "checkbox" id = "checkBox" onclick = "return enableButton();"><label> reCAPTCHA</label> <br/><br>' +
                '<input type="submit" value="Submit Payment" name="submit" id = "submitBtn" class="submitBttn"></center>' +
                '</form>';
                document.getElementById ("image1").src = "imgs/mastercard.png";
                
                }
                else if (name == "btn2"){       
                    document.getElementById ("method1").innerHTML = '<form action="https://www.paypal.com/cgi-bin/webscr" id="method1" method="post">'+ 
                    '<h2>Log-in to pay with PayPal</h2>' +
                    '<input type="email" name="email" placeholder="Email" required><br/><br/>'+ 
                    '<input type = "password" id = "pwd"  placeholder="Password" required><br/><br/>' +
                    '<input type="submit" value="Log in to PayPal" name="submit" class="submitBttn"><br/>' +
                    '<a href = "https://www.paypal.com/authflow/email-recovery/?redirectUri=%252Fsignin%252F%253Fcountry.x%253DLK%2526locale.x%253Den_LK">Forgot Email?</a><br/>' +
                    '</form> ';
                    document.getElementById ("image1").src = "imgs/paypal.png";
                
                }
                else {    //not responsive
                    document.getElementById ("method1").innerHTML = '<form action ="payment.php" method="post" id="method1" onsubmit = "return validateAccNumber() && validateAmountToPay();">' +
                    '<input type="text" name="accname" placeholder="Name of Account Holder" required><br/><br/>'+
                    '<input type="text" name="accnum" placeholder="Account Number" id = "accnum_error" pattern = "^[0-9]{12}" required><br/><br/>' + 
                    '<input type="text" name="eftamount" placeholder="Amount" id = "amount_error" pattern = "^[0-9]+(?:\.[0-9]{2})?$" required><br><br/>' +
                    'Payment method :&nbsp;<select name="paymethod" class="select" required><option value = "directdeposit">Direct Deposit</option></select><br/><br/>' + 'Upload receipt<br/>' +
                    '<input type="file" name="receipt" placeholder="Upload receipt" required accept="image/jpeg, image/png"><br/><br/>' +
                    '<input type="submit" value="Submit Payment" name="submit" class="submitBttn">';
                    document.getElementById ("image1").src = "imgs/eftPay2.png";
                }
            }    
            
            </script>
        </center>  
            <?php 
                include 'footerPay.php';
            ?>
        
     </body>
</html>         

