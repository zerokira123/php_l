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
        function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            }else if($num2 >= $num1 && $num2 >= $num3){
                return $num2;
            }else{
                return $num3;
            }
        }

        $big =getmax(60,60, 10);
        echo $big;
    ?>
</body>
</html>