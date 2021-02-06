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
        class Book{
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;
        $book1->title = "HARRY POTTER";
        $book1->author = "JK ROWLING";
        $book1->pages = 400;

        $book2 = new Book;
        $book2->title = "PARASITE";
        $book2->author = "SENSEI";
        $book2->pages = 700;

        echo $book1->title;
        echo "<br> $book2->title";
 

        ?>
</body>
</html>