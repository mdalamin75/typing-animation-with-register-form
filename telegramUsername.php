<?php session_start(); ?>
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
            <p id="text1"></p>
            <p id="telegramUsername">
            </p>
        </div>
        <div id="input-container" style="display:none;">
            <form id="myForm" action="process.php" method="POST">
                <input type="text" name="telegram_username" id="text" placeholder="Enter telegram username">
                <input type="submit" name="telegram_username_submit" id="submit" value="Submit">
            </form>
        </div>
    </div>
    <script>
        const text1 = "Thank you <?php echo $_SESSION['username'] ?>";
        const telegramUsername = "Enter your Telegram Username";
        const delay = 100; // Delay between typing each character

        let index1 = 0;
        let index2 = 0;

        function type() {
            const textSpan1 = document.getElementById('text1');
            const textSpan2 = document.getElementById('telegramUsername');

            if (index1 < text1.length) {
                textSpan1.textContent += text1[index1];
                index1++;
                setTimeout(type, delay);
            }else if (index2 < telegramUsername.length) {
                textSpan2.textContent += telegramUsername[index2];
                index2++;
                setTimeout(type, delay);
            } else {
                const inputContainer = document.getElementById('input-container');
                inputContainer.style.display = 'block';
            }
        }

        type();


    </script>
</body>

</html>