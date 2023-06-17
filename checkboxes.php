<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form actions="checkboxes.php" method="post">
            PHP: <input type="checkbox" name="lenguajes[]" value="php"><br>
            Python: <input type="checkbox" name="lenguajes[]" value="python"><br>
            Golang: <input type ="checkbox" name="lenguajes[]" value="golang"><br>
            <input type="submit">
        </form>

        <?php 
            $lenguajes = $_POST["lenguajes"];
            echo $lenguajes[0];
        ?>

    </body>
</html>