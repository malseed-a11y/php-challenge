<?php
session_start();
if (file_exists("db.json")) {
    $users = json_decode(file_get_contents("db.json"), true);
} else {
    $users = [];
}

function validate($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

function signup($username, $password, $phone, $users)
{


    $found = false;

    foreach ($users as $user) {
        if ($user["username"] === $username || $user["phone"] === $phone) {
            echo "<p style='color:red;'>Signup failed! Username '$username' or phone '$phone' is already taken.</p>";
            $found = true;
            break;
        }
    }
    if ($found) {
        return;
    }


    if (!$found) {
        $users[] = ["username" => $username, "password" => $password, "phone" => $phone];

        $fp = fopen("db.json", "w");
        fwrite($fp, json_encode($users));
        fclose($fp);

        echo "<p style='color:green;font-weight:bold;font-size:1.2em;text-align:center;padding:10px;background-color:#dff0d8;border-radius:5px;margin-bottom:20px;'>Signup successful! <a href='index.php' style='color:green;text-decoration:underline;'>Login now</a></p>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = validate($_POST["username"]);
    $password = validate($_POST["password"]);
    $phone = validate($_POST["phone"]);

    signup($username, $password, $phone, $users);
}
