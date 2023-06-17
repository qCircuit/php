<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            $amigos = array("Juan", "Pedro", "Maria");
            $amigos[2] = 400;
            for ($i = 0;$i < count($amigos);$i++)
                echo $amigos[$i],"<br>";
        ?>

    </body>
</html>