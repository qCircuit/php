<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            class Book {
                var $title;
                var $author;
                var $pages;

                function __construct($aTitle, $aAuthor, $aPages) {
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }
            }


            $book1 = new Book("Harry", "JKR", 400);
            $book2 = new Book("Rings", "Tolkien", 800);

            echo "$book1->title<br>";
            echo "$book2->author<br>";

        ?>

    </body>
</html>