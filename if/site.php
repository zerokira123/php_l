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
        $isMale = false;
        $istall = false;
        if($isMale && $istall){
            echo"you are tall Male";
        }else if($isMale && !$istall) {
            echo "you are a small boy"; 
        }else if(!$isMale && $istall){
            echo "you are not male but you are Tall";
        }else{
            echo "you are not male and not tall";
        }
    ?>
</body>
</html>