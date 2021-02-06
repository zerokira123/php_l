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
        First Number:<input type="number" step="0.0001" name="num1"> <br>
        OP: <input type="text" name="op"><br>
        Second Number:<input type="number" step="0.0001" name="num2"> <br>
        <input type="submit">
    </form>
    <?php
    //error_reporting(E_ERROR | E_PARSE);
   //error_reporting(E_ALL ^ E_WARNING); 
        $num1 =$_POST["num1"];
        $num2 =$_POST["num2"];
        $op = $_POST["op"];

        if($op == "+"){
            echo $num1 + $num2;
        }else if($op == "-"){
            echo $num1 - $num2;
        } else if($op == "/"){
            echo $num1 / $num2;
        } else if($op == "%"){
            echo $num1 % $num2;
        } else if($op == "*"){
            echo $num1 * $num2;
        } else{
            echo "INVALID VALUE";
        }
    ?>
</body>
</html>