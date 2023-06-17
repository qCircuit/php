<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa) {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if ($this->gpa >= 3.5) {
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Mike", "Art", 3.8);
        
        echo $student1->hasHonors();
        echo "<br>";
        echo $student2->hasHonors();

        ?>

    </body>
</html>