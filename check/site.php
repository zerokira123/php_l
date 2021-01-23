<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>

<body>
<form action="site.php" method="post">
    Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
    Pearls:<input type="checkbox" name="fruits[]" value="pearls"><br>
    <input type="submit">
</form>

    <?php
    //error_reporting(E_ERROR | E_PARSE);
    //error_reporting(E_ALL ^ E_WARNING); 
        $fruits =$_POST["fruits"];
        echo $fruits[0];
    ?>
</body>
</html>