<?php

/*
class DbConnect
{

    private $host = 'localhost';
    private $dbName = 'Get_Move';
    private $user = 'root';
    private $pass = 'Veka0810!';

    public function connect()
    {
        try {
            $conn = new PDO('mysql:host=localhost; dbname=Get_Move',
                $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch( PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    }
    */



    $servername = "localhost";
    $username = "root";
    $password = "Veka0810!";
    $dbname = "Get_Move";

// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>