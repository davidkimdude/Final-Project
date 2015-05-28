<?php

//If not logged in, block users from looking.
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/head.php");
//If logged in, display the livescore and live chat.
if (authenticateUser(true)) {
    require_once(__DIR__ . "/controller/read-posts.php");
    require_once(__DIR__ . "/view/form.php");
} else {
    echo "You have to login to view this page.";
}
require_once(__DIR__ . "/view/foot.php");
