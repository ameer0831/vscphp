<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="checkboxes.php" method="post">
     Apples: <br><input type="checkbox" name="fruits[]" value="apples"><br>
     oranges: <br><input type="checkbox" name="fruits[]" value="oranges"><br>
     pears: <br><input type="checkbox" name="fruits[]" value="pears"><br>

      <input  type="submit">
    </form>
    <?php 
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    ?>
</body>
</html>