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

        class Book{
            var $title;
            var $author;
            var $pages;
            function __construct($aTitle, $aAuthor, $apages){
                $this->title =$aTitle;
                $this->author = $aAuthor;
                $this->pages = $apages;
            }
        }

        $book1 = new Book("parasite", "sensei", 800);
        $book1->title = "HP";


        $book2 = new Book("Harry Potter","jk",900);


        echo $book1->title;
        echo "<br> $book2->title";

    ?>
</body>
</html>