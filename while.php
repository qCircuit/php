<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            $index = 1;
            while ($index <= 3) {
                echo "$index <br>";
                $index++;
            }
            echo "<br>";
            do {
                echo "$index <br>";
                $index++;
            } while ($index <=3);
        ?>

    </body>
</html>