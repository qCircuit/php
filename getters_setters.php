<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
        class Movie {
            public $title;
            private $rating;
        
            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }

            public function getRating(){
                return $this->rating;
            }

            public function setRating($rating){
                // $this->rating = $rating;
                $allowed_ratings = ["G", "PG", "PG-13", "R", "NC-17"];
                if (in_array($rating, $allowed_ratings)) {
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");
        // echo $avengers->rating;
        // echo "<br>";
        $avengers->setRating("Dog");
        echo "a".$avengers->getRating();
        ?>


    </body>
</html>