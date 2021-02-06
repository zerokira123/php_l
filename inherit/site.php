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
    //comments
        class Chef{
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }

        class ItalianChef extends Chef{
            function makePasta(){
                echo "The chef makes pasta <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes pizza <br>";
            }
        }

        $chef= new Chef();
        $chef->makeSpecialDish();

        $ichef= new ItalianChef();
        $ichef->makeSpecialDish();
        $ichef->makePasta();
    ?>
</body>
</html>