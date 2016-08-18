<?php 
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ) on 08/18/2016
 */

namespace HolidayWatchdogAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CruiseShip implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps average_rating
     * @var string $averageRating public property
     */
    public $averageRating;

    /**
     * @todo Write general description for this property
     * @required
     * @maps cruise_line_id
     * @var double $cruiseLineId public property
     */
    public $cruiseLineId;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps meta_no_index
     * @var double $metaNoIndex public property
     */
    public $metaNoIndex;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @maps total_ratings
     * @var double $totalRatings public property
     */
    public $totalRatings;

    /**
     * @todo Write general description for this property
     * @maps binary_options
     * @var double $binaryOptions public property
     */
    public $binaryOptions;

    /**
     * @todo Write general description for this property
     * @maps date_created
     * @var string $dateCreated public property
     */
    public $dateCreated;

    /**
     * @todo Write general description for this property
     * @maps date_removed
     * @var string $dateRemoved public property
     */
    public $dateRemoved;

    /**
     * @todo Write general description for this property
     * @maps date_updated
     * @var string $dateUpdated public property
     */
    public $dateUpdated;

    /**
     * @todo Write general description for this property
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @maps num_rooms
     * @var double $numRooms public property
     */
    public $numRooms;

    /**
     * @todo Write general description for this property
     * @maps page_url
     * @var string $pageUrl public property
     */
    public $pageUrl;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $averageRating    Initialization value for the property $this->averageRating 
     * @param   double            $cruiseLineId     Initialization value for the property $this->cruiseLineId  
     * @param   double            $id               Initialization value for the property $this->id            
     * @param   double            $metaNoIndex      Initialization value for the property $this->metaNoIndex   
     * @param   string            $name             Initialization value for the property $this->name          
     * @param   double            $totalRatings     Initialization value for the property $this->totalRatings  
     * @param   double            $binaryOptions    Initialization value for the property $this->binaryOptions 
     * @param   string            $dateCreated      Initialization value for the property $this->dateCreated   
     * @param   string            $dateRemoved      Initialization value for the property $this->dateRemoved   
     * @param   string            $dateUpdated      Initialization value for the property $this->dateUpdated   
     * @param   string            $description      Initialization value for the property $this->description   
     * @param   double            $numRooms         Initialization value for the property $this->numRooms      
     * @param   string            $pageUrl          Initialization value for the property $this->pageUrl       
     */
    public function __construct()
    {
        if(13 == func_num_args())
        {
            $this->averageRating  = func_get_arg(0);
            $this->cruiseLineId   = func_get_arg(1);
            $this->id             = func_get_arg(2);
            $this->metaNoIndex    = func_get_arg(3);
            $this->name           = func_get_arg(4);
            $this->totalRatings   = func_get_arg(5);
            $this->binaryOptions  = func_get_arg(6);
            $this->dateCreated    = func_get_arg(7);
            $this->dateRemoved    = func_get_arg(8);
            $this->dateUpdated    = func_get_arg(9);
            $this->description    = func_get_arg(10);
            $this->numRooms       = func_get_arg(11);
            $this->pageUrl        = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['average_rating'] = $this->averageRating;
        $json['cruise_line_id'] = $this->cruiseLineId;
        $json['id']             = $this->id;
        $json['meta_no_index']  = $this->metaNoIndex;
        $json['name']           = $this->name;
        $json['total_ratings']  = $this->totalRatings;
        $json['binary_options'] = $this->binaryOptions;
        $json['date_created']   = $this->dateCreated;
        $json['date_removed']   = $this->dateRemoved;
        $json['date_updated']   = $this->dateUpdated;
        $json['description']    = $this->description;
        $json['num_rooms']      = $this->numRooms;
        $json['page_url']       = $this->pageUrl;

        return $json;
    }
}