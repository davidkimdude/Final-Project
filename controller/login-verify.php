<?php

require_once(__DIR__ . "/../model/config.php");

//You can use this function to block non-users from looking at the posts.
function authenticateUser() {
    if (!isset($_SESSION["authenticated"])) {
        return false;
    } else {
        if ($_SESSION["authenticated"] != true) {
            return false;
        } else {
            return true;
        }
    }
}
