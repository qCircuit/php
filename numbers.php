<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $num = -10;
            $num ++;
            echo abs($num);
            echo "<br>",pow($num, 2);
            echo "<br>",sqrt(-$num);
            echo "<br>",round(-$num+0.8);
            echo "<br>",ceil(-$num+0.2);
            echo "<br>",floor(-$num+0.8);
        ?>
    </body>
</html>