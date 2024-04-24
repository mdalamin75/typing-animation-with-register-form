<?php
session_start();
require_once("db.php");


// Registration Logic
if (isset($_POST["register"])) {
    // Get the data from register page
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);


    $sql = ("INSERT into user_info(username,name,password) values('$username','$name','$password')");

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION["username"] = $username;
        $_SESSION["name"] = $name;
        header("location: index.php");
    } else {
        echo "Register failed";
    }
}

// Login Logic
if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = ("SELECT * from user_info where username= '$username' and password='$password'");
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $fetch = mysqli_fetch_array($result);
        $_SESSION["username"] = $username;
        $_SESSION["name"] = $fetch["name"];
        header("location: home.php");
    } else {
        echo "Wrong username or password";
        echo "<br/><br/><a href='index.php'>Try Again</a>";
    }
}

// Logout Logic
if (isset($_GET["logout"])) {
    session_destroy();
    header("location: index.php");
}
?>