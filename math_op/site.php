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
        $num = 10;
        $num *= 25;
        echo "$num <br>";
        echo abs(-9.990);// absolute
        echo "<br> $num <br>";
        echo pow(2, 4),"<br>";//poweer
        echo sqrt(144),"<br>";//square root
        echo max(2, 10),"<br>";// tells which number is bigger
        echo min(2, 10),"<br>";// tells which number is smaller
        echo round(3.5),"<br>";// round the decimal number
        echo ceil(3.4),"<br>";// round it up no mater what
        echo floor(3.9),"<br>";// round it down no mater what
    ?>
</body>
</html>