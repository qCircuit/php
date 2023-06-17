<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="assoc_arrays.php" method="post">
            <input type="text" name="estudiante">
            <input type="submit">
        </form>
        <?php
            $grades = array("J"=>100, "K"=>90, "L"=>80);
            $grades["M"]=70;
            echo count($grades)."<br>".$grades["M"];    
            echo "<br>".$grades[$_POST["estudiante"]]."<br>";
        ?>

    </body>
</html>