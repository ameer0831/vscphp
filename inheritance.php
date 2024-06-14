<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Chef{ 
        function makeChicken(){
           echo "The chef makes chicken <br>";
        }
        function makeSalad(){
         echo "The chef makes salad <br>";
    }
     function makeSpecialDishf(){
    echo "The chef makes bbq ribs <br>";
   }
}
    $chef = new Chef();
   $chef->makeChicken();
   ?>
    
</body>
</html>