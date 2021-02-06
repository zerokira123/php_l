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
    $luckynumbers = array(4, 8, 14, 16, 23, 42);

    for($i = 0; $i<count($luckynumbers); $i++){

        echo "$luckynumbers[$i] <br>";

    }

    ?>
</body>
</html>