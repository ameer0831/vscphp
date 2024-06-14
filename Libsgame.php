<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Libsgame.php" method="get">
        color: <input type="text" name="color"><br>
        plural noun: <input type="text" name="plural noun"><br>
        celebrity: <input type="text" name="celebrity"><br>

        <input type="submit">
  </form>
  <br><br>
  <?php 
  $color = $_GET["color"];
  $pluralnoun =$_GET["pluralnoun"];
  $celebrity =$_GET["celebrity"];

  echo "Roses are $color <br>";
 echo "$pluralnoun are blue <br>";
 echo "i like $celebrity <br>";
  ?>
</body>
</html>