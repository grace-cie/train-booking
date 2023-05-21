<?php

namespace UserInitName;

use mysqli;

// include_once('../model/DBConn.php');
class User extends DbConnection
{

    public function __construct()
    {

        parent::__construct();
    }

    public function check_login($username, $password)
    {

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $query = $this->connection->query($sql);

        if ($query->num_rows > 0) {
            $row = $query->fetch_array();
            return $this->details($row['id']);
        } else {
            return false;
        }
    }

    public function addUser($username, $fname, $lname, $email, $password)
    {
        $findByEmail = "SELECT * FROM users WHERE email = '$email'";
        $query = $this->connection->query($findByEmail);
        $row = !($query->num_rows === 0);
        if ($row) {
            return false;
        } else {
            $sql = "INSERT INTO users(`username`, `fname`, `lname`, `email`, `password`) VALUES ('$username', '$fname', '$lname', '$email', '$password')";
            if ($this->connection->query($sql))
                return true;
        }
    }

    public function details($sql)
    {

        $sqlQuery = "SELECT * FROM users WHERE id = '" . $sql . "'";

        $query = $this->connection->query($sqlQuery);

        $row = $query->fetch_array();

        return $row;
    }

    public function escape_string($value)
    {

        return $this->connection->real_escape_string($value);
    }
}

class DbConnection
{

    private $host = 'localhost';
    private $username = 'root';
    private $password = 'KmJsYDN)vLSiLzwj';
    private $database = 'flightbook';

    protected $connection;

    public function __construct()
    {

        if (!isset($this->connection)) {

            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this->connection;
    }
}