<?php
session_start();
$users = json_decode(file_get_contents("db.json"), true);

function validate($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username-phone"]) && isset($_POST["password"])) {
        $usernameOrPhone = validate($_POST["username-phone"]);
        $password = validate($_POST["password"]);

        if (empty($usernameOrPhone)) {
            header("Location: index.php?error=Username or Phone is required");
            exit();
        }
        if (empty($password)) {
            header("Location: index.php?error=Password is required");
            exit();
        }

        $found = false;
        foreach ($users as $user) {
            if (
                ($user["username"] === $usernameOrPhone || $user["phone"] === $usernameOrPhone)
                && $user["password"] === $password
            ) {
                $found = true;
                $_SESSION['username'] = $user["username"];
                header("Location: home.php");
                exit();
            }
        }
        if (!$found) {
            header("Location: index.php?error=Invalid username or password");
            exit();
        }
    } else {
        header("Location: index.php?error=Invalid form submission");
        exit();
    }
}
