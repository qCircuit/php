<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $phrase = "Leone";
            echo strtolower($phrase),"<br>";
            echo strtoupper($phrase),"<br>";
            echo strlen($phrase),"<br>";
            echo $phrase[0],"<br>";
            echo str_replace("Leo", "Neo", $phrase),"<br>";
            echo substr($phrase, 0, 3),"<br>";
        ?>

    </body>
</html>