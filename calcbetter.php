<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="calcbetter.php" method="post">
            1st Num: <input type="number" step="0.1" name="num1"><br> 
            OP: <input type="text" name="op"><br> 
            2nd Num: <input type="number" step="0.1" name="num2"><br> 
            <input type="submit"> 
        </form>
        <?php 
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if ($op == "+"){
                echo $num1+$num2;
            } elseif ($op == "-") {
                echo $num1+$num2;
            } elseif ($op == "*") {
                echo $num1*$num2;
            } elseif ($op == "/") {
                echo $num1/$num2;
            } else {
                echo "invalid operator";
            }
        ?>

    </body>
</html>