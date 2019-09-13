<?php


class DbConnect
{
    private $host = "127.0.0.1";
    private $dbName = "GetMove";
    private $user = "root";
    private $pass = "root";

    public function connect()
    {
        try {
            $conn = new PDO('mysql:host=' . $this->host . '; dbname' . $this->dbName,
                $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
        $conn = mysqli_connect("127.0.0.1","root","root", "GetMove");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
}