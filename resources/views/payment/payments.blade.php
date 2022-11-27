<!DOCTYPE HTML>

<html lang = "en">

    <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    

    <link rel = "stylesheet" type = "text/css" href = "payments.css"/> 
    
    </head>

    <body>
          
        
        
        <div class="card border-dark mb-3" style="width: 70rem;" >
		
            <div class="card-body">
                <h3 class="card-title"><center>Make a payment</center></h3>
                <br>
                
            <p class="card-text">

                <form action="" method="post">
                    
                    <input type="radio" id="creditcard" name="payment" value="HTML">
                    <label for="creditcard">Credit Card Payment</label>
                    <input type="radio" id="debitcard" name="payment" value="CSS">
                    <label for="debitcard">Debit Card Payment</label>
                  <br>
                  <br>  
                  <div class="form-group">
                    <label for="name">Card holder's name</label>
                    <input type="text" class="form-control" id="name"  name="">
                    </div>
        
                    <div class="form-group">
                    <label for="cardnumder">Card number</label>
                    <input type="text" class="form-control" id="cardnumber" name="">
                    </div>
        
                    <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv"  name="">
                    </div>

                    Amount: <br>

                    <center><button type="button" class="btn btn-info">Pay</button></center>
                </form>

            </p>

        </div>
    </div>


    </body>

</html>