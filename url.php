<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="url.php" method="post">
            Contrasena: <input type="password" name="contrasena">
            <input type="submit">
        </form>
        <br><br>

        <?php 
            echo $_POST["contrasena"],"<br>";
        ?>

    </body>
</html>