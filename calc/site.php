<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>

<body>
    <form action='site.php' method="get">
        <input type="number" name="num1" > + 
        <input type="number" name="num2" >
        <input type="submit">
    </form>

    <?php 
    if (isset($_GET["num1"],$_GET["num2"]))
    {
        $total = $_GET["num1"] + $_GET["num2"];
        echo "TOTAL: $total"; 
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