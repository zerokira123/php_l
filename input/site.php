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
        ?>
    
    <form action="site.php" method="get">
        Name: <input type="text" name="username">
        <br>
        Age: <input typpe="text" name="age"> 
        <br>
        <input type="submit">
        
    </form>
    <br>

    <?php 
        if (isset($_GET["username"]))
        {
        
            echo "Your name is ", $_GET["username"]; 
            echo "<br>";
            echo "Your age is  ", $_GET["age"];
        } 
        else 
        {
            $username = null;
            $age = null;
            echo "no username or age is entered";
        }
    ?>



</body>
</html>