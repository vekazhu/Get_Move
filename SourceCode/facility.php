<?php
class facility
{
    private $ObjectID;
    private $FacilityID;
    private $FacilityName;
    private $StreetNo;
    private $StreetName;
    private $StreetType;
    private $SuburbTown;
    private $Postcode;
    private $lat;
    private $lng;
    private $FacilitySportPlayedID;
    private $SportsPlayed;
    private $NumberFieldCourts;
    private $FieldSurfaceType;
    private $FacilityAge;
    private $FacilityCondition;
    private $Changerooms;
    private $LGA;
    private $conn;
    private $tableName = "SportsAndRecreation";
    private $dbName = "Get_Move";
    function setObjectID($ObjectID) { $this->ObjectID = $ObjectID; }
    function getObjectID() { return $this->ObjectID; }
    function setFacilityID($FacilityID) { $this->FacilityID = $FacilityID; }
    function getFacilityID() { return $this->FacilityID; }
    function setFacilityName($FacilityName) { $this->FacilityName = $FacilityName; }
    function getFacilityName() { return $this->FacilityName; }
    function setStreetNo($StreetNo) { $this->StreetNo = $StreetNo; }
    function getStreetNo() { return $this->StreetNo; }
    function setStreetName($StreetName) { $this->StreetName = $StreetName; }
    function getStreetName() { return $this->StreetName; }
    function setStreetType($StreetType) { $this->StreetType = $StreetType; }
    function getStreetType() { return $this->StreetType; }
    function setSuburbTown($SuburbTown) { $this->SuburbTown = $SuburbTown; }
    function getSuburbTown() { return $this->SuburbTown; }
    function setPostcode($Postcode) { $this->Postcode = $Postcode; }
    function getPostcode() { return $this->Postcode; }
    function setlat($lat) { $this->lat = $lat; }
    function getlat() { return $this->lat; }
    function setlng($lng) { $this->lng = $lng; }
    function getlng() { return $this->lng; }
    function setFacilitySportPlayedID($FacilitySportPlayedID) { $this->FacilitySportPlayedID = $FacilitySportPlayedID; }
    function getFacilitySportPlayedID() { return $this->FacilitySportPlayedID; }
    function setSportsPlayed($SportsPlayed) { $this->SportsPlayed = $SportsPlayed; }
    function getSportsPlayed() { return $this->SportsPlayed; }
    function setNumberFieldCourts($NumberFieldCourts) { $this->NumberFieldCourts = $NumberFieldCourts; }
    function getNumberFieldCourts() { return $this->NumberFieldCourts; }
    function setFieldSurfaceType($FieldSurfaceType) { $this->FieldSurfaceType = $FieldSurfaceType; }
    function getFieldSurfaceType() { return $this->FieldSurfaceType; }
    function setFacilityAge($FacilityAge) { $this->FacilityAge = $FacilityAge; }
    function getFacilityAge() { return $this->FacilityAge; }
    function setFacilityCondition($FacilityCondition) { $this->FacilityCondition = $FacilityCondition; }
    function getFacilityCondition() { return $this->FacilityCondition; }
    function setChangerooms($Changerooms) { $this->Changerooms = $Changerooms; }
    function getChangerooms() { return $this->Changerooms; }
    function setLGA($LGA) { $this->LGA = $LGA; }
    function getLGA() { return $this->LGA; }
    public function __construct()
    {
        require_once('DbConnect.php');
        $conn = new DbConnect;
        $this->conn = $conn->connect();
    }
    public function getAllFacilities()
    {
        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
                IS NOT NULL AND SportsPlayed LIKE 'Tennis%' OR SportsPlayed = 'Aerobics'
                OR SportsPlayed = 'Cycling' OR SportsPlayed = 'Dancing' OR SportsPlayed LIKE '%Fitness'
                OR SportsPlayed LIKE 'Fitness%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAerobics()
    {
        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
                IS NOT NULL AND SportsPlayed = 'Aerobics'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCycling()
    {
        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
                IS NOT NULL AND SportsPlayed = 'Cycling'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDancing()
    {
        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
                IS NOT NULL AND SportsPlayed = 'Dancing'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFitness()
    {
        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
                IS NOT NULL AND SportsPlayed LIKE '%Fitness' OR SportsPlayed LIKE 'Fitness%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTennis()
    {
        $sql = "SELECT * FROM $this->dbName.$this->tableName WHERE lat IS NOT NULL AND lng
                IS NOT NULL AND SportsPlayed LIKE 'Tennis%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>