<?php

//Make up the database

class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    public $error;

    //Builds the database
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connection = new mysqli($host, $username, $password);

        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }

        $exists = $this->connection->select_db($database);

        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database");

            if ($query) {
                echo "<p>Successfully created a database: " . $database . "</p>";
            }
        } else {
            
        }
    }

    //Connects the website and database.
    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

    //Closes connection.
    public function closeConnection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    //Use query to connect to the database
    public function query($string) {
        $this->openConnection();

        $query = $this->connection->query($string);

        if (!$query) {
            $this->error = $this->connection->error;
        }

        $this->closeConnection();

        return $query;
    }

}
