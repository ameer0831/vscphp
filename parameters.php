<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="parameters.php" method="get">
      Name:<br><input type="text" name="name"><br>

      <input  type="submit">
    </form>
    <br><br>
    <?php
    echo $_GET["name"];
    ?>
</body>
</html>