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
class WarehousePages implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var double $accommodationId public property
     */
    public $accommodationId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $receivedAt public property
     */
    public $receivedAt;

    /**
     * @todo Write general description for this property
     * @var string $affiliate public property
     */
    public $affiliate;

    /**
     * @todo Write general description for this property
     * @var string $anonymousId public property
     */
    public $anonymousId;

    /**
     * @todo Write general description for this property
     * @var string $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @var double $cityId public property
     */
    public $cityId;

    /**
     * @todo Write general description for this property
     * @var string $contextIp public property
     */
    public $contextIp;

    /**
     * @todo Write general description for this property
     * @var string $contextPagePath public property
     */
    public $contextPagePath;

    /**
     * @todo Write general description for this property
     * @var string $contextPageReferrer public property
     */
    public $contextPageReferrer;

    /**
     * @todo Write general description for this property
     * @var string $contextPageTitle public property
     */
    public $contextPageTitle;

    /**
     * @todo Write general description for this property
     * @var string $contextPageUrl public property
     */
    public $contextPageUrl;

    /**
     * @todo Write general description for this property
     * @var string $contextUserAgent public property
     */
    public $contextUserAgent;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $accommodationId       Initialization value for the property $this->accommodationId    
     * @param   string            $id                    Initialization value for the property $this->id                 
     * @param   string            $receivedAt            Initialization value for the property $this->receivedAt         
     * @param   string            $affiliate             Initialization value for the property $this->affiliate          
     * @param   string            $anonymousId           Initialization value for the property $this->anonymousId        
     * @param   string            $city                  Initialization value for the property $this->city               
     * @param   double            $cityId                Initialization value for the property $this->cityId             
     * @param   string            $contextIp             Initialization value for the property $this->contextIp          
     * @param   string            $contextPagePath       Initialization value for the property $this->contextPagePath    
     * @param   string            $contextPageReferrer   Initialization value for the property $this->contextPageReferrer
     * @param   string            $contextPageTitle      Initialization value for the property $this->contextPageTitle   
     * @param   string            $contextPageUrl        Initialization value for the property $this->contextPageUrl     
     * @param   string            $contextUserAgent      Initialization value for the property $this->contextUserAgent   
     */
    public function __construct()
    {
        if(13 == func_num_args())
        {
            $this->accommodationId     = func_get_arg(0);
            $this->id                  = func_get_arg(1);
            $this->receivedAt          = func_get_arg(2);
            $this->affiliate           = func_get_arg(3);
            $this->anonymousId         = func_get_arg(4);
            $this->city                = func_get_arg(5);
            $this->cityId              = func_get_arg(6);
            $this->contextIp           = func_get_arg(7);
            $this->contextPagePath     = func_get_arg(8);
            $this->contextPageReferrer = func_get_arg(9);
            $this->contextPageTitle    = func_get_arg(10);
            $this->contextPageUrl      = func_get_arg(11);
            $this->contextUserAgent    = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accommodationId']     = $this->accommodationId;
        $json['id']                  = $this->id;
        $json['receivedAt']          = $this->receivedAt;
        $json['affiliate']           = $this->affiliate;
        $json['anonymousId']         = $this->anonymousId;
        $json['city']                = $this->city;
        $json['cityId']              = $this->cityId;
        $json['contextIp']           = $this->contextIp;
        $json['contextPagePath']     = $this->contextPagePath;
        $json['contextPageReferrer'] = $this->contextPageReferrer;
        $json['contextPageTitle']    = $this->contextPageTitle;
        $json['contextPageUrl']      = $this->contextPageUrl;
        $json['contextUserAgent']    = $this->contextUserAgent;

        return $json;
    }
}