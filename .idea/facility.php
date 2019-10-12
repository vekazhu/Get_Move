<?php
function dbConnect()
{
    
   //$conn = mysqli_connect("127.0.0.1","root","2003","GetMove");
    $conn = mysqli_connect("127.0.0.1","getmoveuser","1234","getmove");
    if (!$conn)
    {
        die('Connection failed: ' . mysqli_connect_error());
    }
    return $conn;
}

function getAllFacility()
{
    $conn = dbConnect();
    $allData = mysqli_query($conn, "select FacilityName, lat, lng, SportsPlayed, SuburbTown, StreetNo, StreetName,
    StreetType from sportandrec");

    $rows = array();
    while($r = mysqli_fetch_assoc($allData))
    {$rows[] = $r;}

    $indexed = array_map('array_values', $rows);
    echo json_encode($indexed);
    if (!$rows) {return null;}
}






//    function getAllFacilities()
//    {
//        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
//                IS NOT NULL AND SportsPlayed LIKE 'Tennis%' OR SportsPlayed = 'Aerobics'
//                OR SportsPlayed = 'Cycling' OR SportsPlayed = 'Dancing' OR SportsPlayed LIKE '%Fitness'
//                OR SportsPlayed LIKE 'Fitness%'";
//        $stmt = $this->conn->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }
//
//    function getAerobics()
//    {
//        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
//                IS NOT NULL AND SportsPlayed = 'Aerobics'";
//        $stmt = $this->conn->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }
//
//    function getCycling()
//    {
//        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
//                IS NOT NULL AND SportsPlayed = 'Cycling'";
//        $stmt = $this->conn->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }
//
//    function getDancing()
//    {
//        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
//                IS NOT NULL AND SportsPlayed = 'Dancing'";
//        $stmt = $this->conn->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }
//
//    function getFitness()
//    {
//        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
//                IS NOT NULL AND SportsPlayed LIKE '%Fitness' OR SportsPlayed LIKE 'Fitness%'";
//        $stmt = $this->conn->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }
//
//    function getTennis()
//    {
//        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
//                IS NOT NULL AND SportsPlayed LIKE 'Tennis%'";
//        $stmt = $this->conn->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }
//}
?>