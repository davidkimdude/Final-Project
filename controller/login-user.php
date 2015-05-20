<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'");
    
    "SELECT * FROM users WHERE BINARY username='$username'";
    
    if($query->num_rows == 1) {
        $row = $query->fetch_array();
        
        if($row["password"] === crypt($password, $row["salt"])) {
            $_SESSION["authenticated"] = true;
            echo "<p>Login Successful</p>";
        }
        else{
            echo "<p>Invalid username and password</p>";
        }
    }
    else{
        echo "<p>Invalid username and password</p>";
    }
    echo "<form method='link' action='../index.php'>
          <input  type='submit' value='Back'>
          </form>";