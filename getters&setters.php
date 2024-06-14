<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
       class movie{
        public $title;
        public $rating;

        function __construct($title,$rating){
            $this->title = $title;
            $this->rating =$rating;
            
        }
     
       }

       $pushpa = new movie("pushpa","pushpa2");

       echo $pushpa->rating;
    ?>
</body>
</html>