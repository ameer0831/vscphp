<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bbcalculator.php" method="Post">
   first num <br><input type="number" name="num1"><br>
      OP:<br><input type="textbox" name="op"><br>
      second num: <br><input type="number" name="num2"><br>


<input type="submit">
    </form>


    <?php  
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $OP = $_POST["OP"];
    
    ?>
</body>
</html>