<?php

require_once(__DIR__ . "/../model/config.php");
//Sets the variable to log in users
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'");
//If username is not exactly same, block them from logging in.
"SELECT * FROM users WHERE BINARY username='$username'";
//Controls the login.
if ($query->num_rows == 1) {
    $row = $query->fetch_array();

    if ($row["password"] === crypt($password, $row["salt"])) {
        $_SESSION["authenticated"] = true;
        echo "<p>Login Successful</p>";
    } else {
        echo "<p>Invalid username and password</p>";
    }
} else {
    echo "<p>Invalid username and password</p>";
}
header("Location: " . $path . "home.php");
