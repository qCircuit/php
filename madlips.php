<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="madlips.php" method="get">
            Color: <input type="text" name="color"><br>
            Sustantivo plural: <input type="text" name="sustantivo_plural"><br>
            Lenguaje: <input type="text" name="lenguaje"><br>
            <input type="submit">
        </form>
        <?php 
            $color = $_GET["color"];
            $sustantivo_plural = $_GET["sustantivo_plural"];
            $lenguaje = $_GET["lenguaje"];
            echo  "Roses are $color <br>";
            echo "$sustantivo_plural are blue <br>";
            echo "I love $lenguaje <br>";
        ?>

    </body>
</html>