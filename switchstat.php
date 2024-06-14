<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switchstat.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php  
    $grade = $_POST["grade"];
    switch($grade){
        case"A";
        echo"you did amazing!";
        break;
        case "B";
        echo"you did pretty good !";
    }    
    
    ?>
</body>
</html>