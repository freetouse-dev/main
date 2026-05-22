<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Simple GET method content</h2>
    <?php 
        $product = $_GET["product"];
        $category = $_GET["category"];

        // echo $product, "</br>";
        // echo $category, "</br>";

        echo htmlspecialchars($product), "</br>";
        echo htmlspecialchars($category), "</br>";
    ?>
</body>
</html>