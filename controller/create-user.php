<?php

require_once(__DIR__ . "/../model/config.php");
//Sets the variable to store user information
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
//Give password thier own id
$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
//Display dots instead of password
$hashedPassword = crypt($password, $salt);

$query1 = $_SESSION["connection"]->query("SELECT username FROM users WHERE username='$username'");
//Put these informations into the users table
if ($query1->num_rows == 0) {
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            . "email = '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt'");
    //If successed, send them to home.
    //If did not, echo error.
    if ($query) {
        header("Location: " . $path . "index.php");
    } else {
        echo"<p>" . $_SESSION["connection"]->error . "</p>";
    }
} else {
    header("Location: " . $path . "home.php");
}