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
        what was your grade?
        <input type="text" name="grade">
        <input type="submit">
        </form>
    <?php
    //error_reporting(E_ERROR | E_PARSE);
    //error_reporting(E_ALL ^ E_WARNING); 
        $grade = $_POST['grade'];
        
        switch($grade){
            case "A":
                echo "You did Amazing";
                break;
            
            case "B":
                echo "You did good";
                break;
            
            case "C":
                echo "You did nice";
                break;
            
            case "D":
                echo "Try better next Time";
                break;
            
            case "F":
                echo "You FAILED";
                break;
            
            default:
                echo "invalid grade";
        }

    ?>
</body>
</html>