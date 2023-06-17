<?php 
    if (isset($_POST["submit"])) {
        $first = $_POST["first"];
        $last = $_POST["last"];
        $email = $_POST["email"];
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

        if (empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)) {
            header("Location: errors.php?signup=empty");
        } else {
            if (!filter_Var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: errors.php?signup=invalidemail");
            }
            else {
                echo "Sign up the user";
            }
        }

    } else {
        header("Location: errors.php?signup=error");
    }