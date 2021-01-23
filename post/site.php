<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>

<body>

    <form action="site.php" method="post">// post method hides the data or variable in url 
    Password:<input type="password" name="ps">
    <br>
    <input type="submit">
    </form>
    <br>

    <?php
    //error_reporting(E_ERROR | E_PARSE);
    //error_reporting(E_ALL ^ E_WARNING); 
    echo $_POST["ps"];
    ?>
</body>
</html>