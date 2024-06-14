<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class book{
          var $title;
          var $author;
          var $pages;
        
            }
            $book1 = new book;
            $book1->title ="ameer nellore";
            $book1->author ="JK Rowling";

            echo $book1->title;
    
    ?>
</body>
</html>