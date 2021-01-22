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
        color:<input type="text" name="col" > <br>
        plural noun:<input type="text" name="pn" ><br>
        clebrity:<input type="text" name="celeb" ><br>
        <input type="submit">
        
    </form>

    <?php 
    if(isset($_GET["col"],$_GET["pn"],$_GET["celeb"]))
    {
        $col = $_GET["col"];
        $pn = $_GET["pn"];
        $celeb =$_GET["celeb"];
    echo "Roses are $col <br>";
    echo "  $pn are blue <br>";
    echo "i love $celeb <br>";
    }
    else{
        $_GET["col"] = null;
        $_GET["pn"] = null;
        $_GET["celeb"] = null;

         echo  "<br> Enter the values in form";
    }   


    ?>
</body>
</html>