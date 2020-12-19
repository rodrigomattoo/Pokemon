<?php

class Database{


    private $connection;

    public function __construct($servername, $username, $password, $dbname)
    {
        $conn = mysqli_connect(
            $servername,
            $username,
            $password,
            $dbname
            );
        if (!$conn) {

            die("Conenection failes: " . mysqli_connect_error());
        }
        $this->connection = $conn;
    }

    public function executeQuery($sql)
    {
        $result = mysqli_query($this->connection, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }

    public function execute($sql)
    {
        return mysqli_query($this->connection, $sql);

    }
}