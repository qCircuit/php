<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
        $title = "Mi primera publicacion";
        $author = "yo";
        $wordCount = 111;
        include "article-header.php" 
        ?>
        
        <p>Texto</p>
        
        <?php 
        include "useful-tools.php";
        sayHi("mikee");
        echo "<br>".$feetInMile;
        ?>
        
        <?php include "footer.html" ?>
        

    </body>
</html>