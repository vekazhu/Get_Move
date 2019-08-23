<?php


class sports
{
    private $ObjectID;
    private $FacilityID;
    private $FacilityName;
    private $StreetNo;
    private $StreetName;
    private $StreetType;
    private $SuburbTown;
    private $Postcode;
    private $Latitude;
    private $Longitude;
    private $FacilitySportPlayedID;
    private $SportsPlayed;
    private $NumberFieldCourts;
    private $FieldSurfaceType;
    private $FacilityAge;
    private $FacilityCondition;
    private $Changerooms;
    private $LGA;

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
    function setLatitude($Latitude) { $this->Latitude = $Latitude; }
    function getLatitude() { return $this->Latitude; }
    function setLongitude($Longitude) { $this->Longitude = $Longitude; }
    function getLongitude() { return $this->Longitude; }
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

    }


}
?>