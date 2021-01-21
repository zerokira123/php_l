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
        $pharse = "Tobi or not to be";
                   //0123456789.......
        $age = 30;
        $gpa = 30.3;
        $ismale = false;
        //null; these are the data types in php
        echo "<em><strong> $pharse </strong></em>";
        echo "<br> <hr>";
        echo strtolower($pharse);
        echo "<br>";
        echo strtoupper($pharse);
        echo "<br>";
        echo strlen($pharse);
        echo "<br>";
        echo $pharse[3];// tells char in that index
        echo "<br>";
        echo str_replace("Tobi", "obito", $pharse);
        echo "<br>";
        echo substr($pharse, 8, 3);
    ?>
</body>
</html>