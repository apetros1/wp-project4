
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="checkoutstyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<?php

$check = $_GET['check'];
$from = $_GET['from'];
$to = $_GET['to'];
$departing = $_GET['departing'];
$returning = $_GET['returning'];
$adults = $_GET['adults'];
$children = $_GET['children'];
$cabinclass = $_GET['cabinclass'];

?>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="mailto:<?php $email ?>">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Full Name</label>
            <input type="text" id="cname" name="cardname" placeholder="John Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <input onclick="window.location.href = 'index.html';" type="submit" value="Complete Checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $adults+$children; ?></b></span></h4>
        <p>
        <?php echo $check; ?><br><br>
	From: <?php echo $from; ?><br>To: <?php echo $to; ?> <br><br>
	Adults: <?php echo $adults; ?> x $150.00 = $<?php $aprice=$adults*150; echo $aprice; ?><br><br>
         Children: <?php echo $children; ?> x $100.00 = $<?php $cprice=$children*100; echo $cprice; ?>
          
          <span class="price">$<?php $price=$aprice+$cprice; echo $price; ?></span>
      </p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$<?php $price*=1.08; echo $price; ?></b></span></p>
    </div>
  </div>
</div>

</body>
</html>


