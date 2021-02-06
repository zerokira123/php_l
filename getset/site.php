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
        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setrating($rating){
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                    $this->rating = $rating;
                }else{
                    $this->rating ="NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");
                    // G, PG, PG-13, R, NR

        echo $avengers->getRating();
        echo $avengers->setRating( "dG");
        echo $avengers->getRating();
    ?>
</body>
</html>