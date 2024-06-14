<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    class book {
        var $title;
        var $author;
        var $pages;

        function __construct(){
            echo "new Book created <br>";
        }
    }

    $book1 = new book();
    $book1->title ="NelloreAmeer";
    $book1->author = "praba";
    $book1->pages =300;
    
    $book1 = new book();
    $book1->title ="ny name is ameer";
    $book1->author = "tolkien";
    $book1->pages =600;
    
    ?>
</body>
</html>