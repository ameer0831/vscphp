<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    function getmax($num1,$num2){
        if($num1 > $num2){
            return $num1;
        }else{
            return $num2;
        }
    }
    echo getmax(400,30);
    
    ?>
</body>
</html>