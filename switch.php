<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="switch.php" method="post">
            grade: <input type="text" name="grade">
            <input type="submit">
        </form>
        <?php 
            $grade = $_POST["grade"];
            switch ($grade) {
                case "A": 
                    echo "AA";
                    break;
                case "B":
                    echo "BB";
                    break;
                case "C":
                    echo "CC";
                    break;
                case "D":
                    echo "DD";
                    break;
                case "F":
                    echo "FF";
                    break;
                default:
                    echo "Invalid";
            }
        ?>

    </body>
</html>