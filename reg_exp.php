<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Regex Modifier: i</h2>
    <?php
    $txt = "W3Schools";
    $pattern = "/s/i";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: m</h2>
    <?php
    $txt = "you are better than\nyou think";
    $pattern = "/^you/m";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: [co]</h2>
    <?php
    $txt = "W3Schools.com";
    $pattern = "/[co]/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: [^eo]</h2>
    <?php
    $txt = "Welcome";
    $pattern = "/[^eo]/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: [e-o]</h2>
    <?php
    $txt = "Welcome";
    $pattern = "/[e-o]/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: [T-e]</h2>
    <?php
    $txt = "Welcome to W3Schools";
    $pattern = "/[T-e]/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: [A-Z]</h2>
    <?php
    $txt = "Welcome to W3Schools";
    $pattern = "/[A-Z]/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: [123]</h2>
    <?php
    $txt = "W3Schools has been live since 1999";
    $pattern = "/[123]/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: [0-5]</h2>
    <?php
    $txt = "Call 555-2368";
    $pattern = "/[0-5]/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: cat|dog|fish</h2>
    <?php
    $txt = "We have three dogs, one fish, but no cats";
    $pattern = "/cat|dog|fish/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>  

    <h2>Regex Modifier: .</h2>
    <?php
    $txt = "W3Schools has been live since 1999.";
    $pattern = "/./";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>

    <h2>Regex Modifier: ^W3</h2>
    <?php
    $txt = "W3Schools";
    $pattern = "/^W3/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 

    <h2>Regex Modifier: World$</h2>
    <?php
    $txt = "Hello World";
    $pattern = "/World$/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 

    <h2>Regex Modifier: \d</h2>
    <?php
    $txt = "W3Schools has been live since 1999";
    $pattern = "/\d/";;
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 

    <h2>Regex Modifier: \D</h2>
    <?php
    $txt = "W3Schools has been live since 1999";
    $pattern = "/\D/";;
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 

    <h2>Regex Modifier: \s</h2>
    <?php
    $txt = "W3Schools has been live since 1999";
    $pattern = "/\s/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>

    <h2>Regex Modifier: \S</h2>
    <?php
    $txt = "W3Schools has been live since 1999";
    $pattern = "/\S/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 

    <h2>Regex Modifier: \w</h2>
    <?php
    $txt = "W3Schools.com";
    $pattern = "/\w/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>

    <h2>Regex Modifier: \w</h2>
    <?php
    $txt = "W3Schools.com";
    $pattern = "/\W/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 

    <h2>Regex Modifier: \b</h2>
    <?php
    $txt = "Hello World";
    $pattern = "/\bHel/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>

    <h2>Regex Modifier: \u</h2>
    <?php
    $txt = "W3Schools has been live since 1999";
    $pattern = "/\u{0039}/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 

    <h2>Regex Modifier: +</h2>
    <?php
    $txt = "W3Schools has been live since 1999";
    $pattern = "/n+/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 

    <h2>Regex Modifier: o{3}</h2>
    <?php
    $txt = "W3Schools is goood";
    $pattern = "/o{3}/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 

    <h2>Regex Modifier: o{2,5}</h2>
    <?php
    $txt = "W3Schools is gooood";
    $pattern = "/o{2,5}/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?>

    <h2>Regex Modifier: o{3,}</h2>
    <?php
    $txt = "W3Schools is goooooood";
    $pattern = "/o{3,}/";
    echo "Occurences of the letter ($pattern) in the text $txt : ";
    echo preg_match_all($pattern, $txt);
    echo "</br>";
    echo "Each match was replaced by a # character : ";
    echo preg_replace($pattern, "#", $txt);
    ?> 
</body>
</html>