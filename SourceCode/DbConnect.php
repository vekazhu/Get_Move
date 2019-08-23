<?php


class DbConnect
{
    private $host = 'localhost';
    private $dbName = 'Get_Move';
    private $user = 'root';
    private $pass = 'Veka0810!';

    public function connect()
    {
        try {
            $conn = new PDO('mysql:host=' . $this->host . '; dbname=' .
                $this->dbName, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    }

}