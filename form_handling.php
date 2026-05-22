<?php
    $name = $_POST["name"];
    echo "Name value : $name</br></br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <form action="welcome.php" method="POST">
        <span>
            <label for="name">Name</label>
            <input type="text" name="name">
        </span></br></br>
        <span>
            <label for="email">Email </label>
            <input type="email" name="email">
        </span></br></br>
        <input type="submit" value="Save Data">
    </form>
</body>
</html>