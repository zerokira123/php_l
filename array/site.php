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
        $friends = array("kevin","karen","kira");
        $friends[1] = "akira";//changing the value in index
        echo $friends[1];
        echo "<br>";
        $friends[4] = "karen";// adding another string to the index of array
        echo $friends[4];
        echo count($friends);
        ?>
</body>
</html>