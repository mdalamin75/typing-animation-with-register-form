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
            <p id="username">
            </p>
        </div>
        <div id="input-container" style="display:none;">
            <form id="myForm" action="process.php" method="POST">
                <input type="text" name="username" id="text" placeholder="Enter Your Username">
                <input type="submit" name="username_submit" id="username_submit" value="Submit">
            </form>
        </div>
    </div>
    <script>
        const username = "Enter your username";
        // const text2 = "Let's get started!";
        const delay = 100; // Delay between typing each character

        let index1 = 0;
        let index2 = 0;

        function type() {
            const textSpan1 = document.getElementById('username');

            if (index1 < username.length) {
                textSpan1.textContent += username[index1];
                index1++;
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