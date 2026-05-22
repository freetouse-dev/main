<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST method</title>
</head>
<body>
    <h1>POST method</h1>
    <form action="" method="post">
        <span>
            <label for="username">Username</label>
            <input type="text" name="username">
        </span>
        <span>
            <label for="password">Password</label>
            <input type="password" name="password">
        </span>
        <input type="submit" value="Sign In">
    </form>
</body>
</html>

<?php
    $username = $_POST["username"];
    $username = $_POST["password"];

    // echo "</br>";
    // print_r($_POST["username"]);
    // echo "</br>";
    // print_r($_POST["password"]);

    echo "</br>";
    print_r(htmlspecialchars($_POST["username"]));
    echo "</br>";
    print_r(htmlspecialchars($_POST["password"]));
?>