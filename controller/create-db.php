<?php

//Gets the informations you need from config.php
require_once(__DIR__ . "/../model/config.php");

//Creates a table called posts
$query1 = $_SESSION["connection"]->query("CREATE TABLE posts ("
        //These shouldn't be empty
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if ($query1) {
    //If table is made, echo this.
    echo "<p>Succesfully created table: posts</p>";
}
//Creates a users table to store user infromation
$query = $_SESSION["connection"]->query("CREATE TABLE users ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "username varchar(30) NOT NULL,"
        . "email varchar(50) NOT NULL,"
        . "password char(128) NOT NULL,"
        . "salt char(128) NOT NULL,"
        . "PRIMARY KEY (id))");
//If table is successgully created, echo this.
if ($query) {
    echo "<p>Successfully created table: users</p>";
}