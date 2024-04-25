<?php
session_start();
require_once("db.php");


// Registration Logic
if (isset($_POST["register"])) {

    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    $sql = ("INSERT into user_email(email) values('$email')");

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION["email"] = $email;
        header("location: username.php");
    } else {
        echo "Register failed";
    }
}

// Username Logic
if (isset($_POST["username_submit"])) {

    $username = mysqli_real_escape_string($conn, $_POST["username"]);

    $sql = ("INSERT into username(username) values('$username')");

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION["username"] = $username;
        header("location: telegramUsername.php");
    } else {
        echo "username submit failed";
    }
}
// Telegram Username Logic
if (isset($_POST["telegram_username_submit"])) {

    $telegram_username = mysqli_real_escape_string($conn, $_POST["telegram_username"]);

    $sql = ("INSERT into telegram_username(telegram_username) values('$telegram_username')");

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION["telegram_username"] = $telegram_username;
        header("location: home.php");
    } else {
        echo "telegram_username submit failed";
    }
}
?>