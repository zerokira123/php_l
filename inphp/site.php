<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>

<body>
    <?php
    //error_reporting(E_ERROR | E_PARSE);
    //error_reporting(E_ALL ^ E_WARNING); 
    //comments
        $title= "the one";
        $author= "kira";
        $wordcount = 400;
        include "article-header.php>";
        include "ut.php";
        echo "<br>";
        sayHi("kira");
        echo "<br> $feetInMile";
    ?>
</body>
</html>