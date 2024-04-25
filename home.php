<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="css-typing">
        <h1>Hello, <span class="text_blue"><?php echo $_SESSION["username"] ?></span> Welcome to Our Website.</h1>
    </div>
</body>
</html>