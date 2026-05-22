<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GET method</h1>
    <form action="" method="get">
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
    <a href="get_method2.php?product=bread&category=<b>grocery</b>">Product data</a>
</body>
</html>

<?php
    $username = $_GET["username"];
    $username = $_GET["password"];

    // echo "</br>";
    // print_r($_GET["username"]);
    // echo "</br>";
    // print_r($_GET["password"]);

    echo "</br>";
    print_r(htmlspecialchars($_GET["username"]));
    echo "</br>";
    print_r(htmlspecialchars($_GET["password"]));
?>