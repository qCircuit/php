<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="input.php" method="get">
            Nombre: <input type="text" name="nombre">
            <br>
            Edad: <input type="number" name="edad">
            <input type="submit">
        </form>
        Tu nombre: <?php 
            echo $_GET["nombre"]
        ?>
        <br>
        Tu edad: <?php 
            echo $_GET["edad"]
        ?>
    </body>
</html>