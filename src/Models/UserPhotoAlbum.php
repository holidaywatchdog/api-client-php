<?php 
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ) on 08/31/2016
 */

namespace HolidayWatchdogAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class UserPhotoAlbum implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $userId public property
     */
    public $userId;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $reviewId public property
     */
    public $reviewId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps location_id
     * @var double $locationId public property
     */
    public $locationId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps accommodation_id
     * @var double $accommodationId public property
     */
    public $accommodationId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $subject public property
     */
    public $subject;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $date public property
     */
    public $date;

    /**
     * @todo Write general description for this property
     * @required
     * @maps create-date
     * @var string $createDate public property
     */
    public $createDate;

    /**
     * @todo Write general description for this property
     * @required
     * @maps country_name
     * @var string $countryName public property
     */
    public $countryName;

    /**
     * @todo Write general description for this property
     * @required
     * @maps region_name
     * @var string $regionName public property
     */
    public $regionName;

    /**
     * @todo Write general description for this property
     * @required
     * @maps city_name
     * @var string $cityName public property
     */
    public $cityName;

    /**
     * @todo Write general description for this property
     * @required
     * @maps accommodation_name
     * @var string $accommodationName public property
     */
    public $accommodationName;

    /**
     * @todo Write general description for this property
     * @maps uploader_name
     * @var string $uploaderName public property
     */
    public $uploaderName;

    /**
     * @todo Write general description for this property
     * @maps uploader_email
     * @var string $uploaderEmail public property
     */
    public $uploaderEmail;

    /**
     * @todo Write general description for this property
     * @maps uploader_ip
     * @var string $uploaderIp public property
     */
    public $uploaderIp;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $id                   Initialization value for the property $this->id                
     * @param   double            $userId               Initialization value for the property $this->userId            
     * @param   double            $reviewId             Initialization value for the property $this->reviewId          
     * @param   double            $locationId           Initialization value for the property $this->locationId        
     * @param   double            $accommodationId      Initialization value for the property $this->accommodationId   
     * @param   string            $subject              Initialization value for the property $this->subject           
     * @param   string            $date                 Initialization value for the property $this->date              
     * @param   string            $createDate           Initialization value for the property $this->createDate        
     * @param   string            $countryName          Initialization value for the property $this->countryName       
     * @param   string            $regionName           Initialization value for the property $this->regionName        
     * @param   string            $cityName             Initialization value for the property $this->cityName          
     * @param   string            $accommodationName    Initialization value for the property $this->accommodationName 
     * @param   string            $uploaderName         Initialization value for the property $this->uploaderName      
     * @param   string            $uploaderEmail        Initialization value for the property $this->uploaderEmail     
     * @param   string            $uploaderIp           Initialization value for the property $this->uploaderIp        
     */
    public function __construct()
    {
        if(15 == func_num_args())
        {
            $this->id                 = func_get_arg(0);
            $this->userId             = func_get_arg(1);
            $this->reviewId           = func_get_arg(2);
            $this->locationId         = func_get_arg(3);
            $this->accommodationId    = func_get_arg(4);
            $this->subject            = func_get_arg(5);
            $this->date               = func_get_arg(6);
            $this->createDate         = func_get_arg(7);
            $this->countryName        = func_get_arg(8);
            $this->regionName         = func_get_arg(9);
            $this->cityName           = func_get_arg(10);
            $this->accommodationName  = func_get_arg(11);
            $this->uploaderName       = func_get_arg(12);
            $this->uploaderEmail      = func_get_arg(13);
            $this->uploaderIp         = func_get_arg(14);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                 = $this->id;
        $json['userId']             = $this->userId;
        $json['reviewId']           = $this->reviewId;
        $json['location_id']        = $this->locationId;
        $json['accommodation_id']   = $this->accommodationId;
        $json['subject']            = $this->subject;
        $json['date']               = $this->date;
        $json['create-date']        = $this->createDate;
        $json['country_name']       = $this->countryName;
        $json['region_name']        = $this->regionName;
        $json['city_name']          = $this->cityName;
        $json['accommodation_name'] = $this->accommodationName;
        $json['uploader_name']      = $this->uploaderName;
        $json['uploader_email']     = $this->uploaderEmail;
        $json['uploader_ip']        = $this->uploaderIp;

        return $json;
    }
}