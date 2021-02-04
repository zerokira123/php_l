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
       Name:r̥ <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
    //error_reporting(E_ERROR | E_PARSE);
    //error_reporting(E_ALL ^ E_WARNING); 
        $grades =array("jim" => "A+","Pam"=>"B-","Oscar"=>"C+");
        $grades["jim"] = "F";
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>