<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Animation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="signup-form">
        <h2>Create an account</h2>
        <div class="css-typing" id="typeing_text">
            <p id="text1">
            </p>
            <p id="text2">
            </p>
        </div>
        <div id="input-container" style="display:none;">
            <form id="myForm" action="process.php" method="POST">
                <input type="email" name="email" id="email" placeholder="Enter Your Email">
                <input type="submit" name="register" id="submit" value="Sign up">
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>