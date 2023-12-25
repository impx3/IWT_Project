<html>
<head><title>Check</title></head>

<script>
    function validateCardNumber() {
    const cardNumber = document.getElementById('card_number').value;
    const CVVNumber = document.getElementById('CVV_number').value;
        if (cardNumber.length == 16 && CVVNumber.length == 3) {
            return true;
        }
        else{
            alert('Invalid Card Number or CVV');
            return false;
        }
    }

function validateAccNumber() {
    const AccNumber = document.getElementById('accnum').value;
    if (AccNumber.length == 12) {
        return true;
    }
    else {
        alert('Invalid Account Number');
        return false;
    } 
}

function validateAmountToPay() {
    const AmountToPay = document.getElementById('eftamount').value;
    if (parseFloat(amountToPay) > 0) {
            return true;
    } 
    else {
        alert('Invalid Amount');
        return false;
    }
}

function enableButton(){
    if (document.getElementById("checkBox").checked){
        document.getElementById ("submitBtn").disabled = false;
    }
    else {
      document.getElementById ("submitBtn").disabled = true; 
    }
}
</script></html>