<?php

//If not logged in, block users from seeing this.
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/head.php");
//If logged in, display this.
if (authenticateUser(true)) {
    require_once(__DIR__ . "/test.php");
    require_once(__DIR__ . "/chat.php");
} else {
    echo "You have to login to view this page.";
}
require_once(__DIR__ . "/view/foot.php");
