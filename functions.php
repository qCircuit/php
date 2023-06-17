<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        function sayHi($nombre){
            echo "Hello $nombre";
        }
        function cubo($num) {
            return $num * $num * $num;
        }

        sayHi("Jim");
        echo "<br>",cubo(3);
        ?>

    </body>
</html>