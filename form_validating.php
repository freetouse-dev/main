<?php
    declare(strict_type=1);

    $name = $email = $website = $comment = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitizeData($_POST["name"]);
        $email = sanitizeData($_POST["email"]);
        $website = sanitizeData($_POST["website"]);
        $comment = sanitizeData($_POST["comment"]);
        $gender = sanitizeData($_POST["gender"]);
    }

    function sanitizeData(mixed $data): string {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <h2>PHP Form validation</h2>
    <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
    <?php
        echo "<h2>Your Input:</h2>";
        echo "Name : $name";
        echo "<br>";
        echo "Email : $email";
        echo "<br>";
        echo "Website : $website";
        echo "<br>";
        echo "Comment : $comment";
        echo "<br>";
        echo "Gender : $gender";
    ?>
</body>
</html>