<?php 
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HolidayWatchdogAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Subratings implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps Cleanliness
     * @var string $cleanliness public property
     */
    public $cleanliness;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Sleep Quality
     * @var string $sleepQuality public property
     */
    public $sleepQuality;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Value
     * @var string $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Service
     * @var string $service public property
     */
    public $service;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Location
     * @var string $location public property
     */
    public $location;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Rooms
     * @var string $rooms public property
     */
    public $rooms;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $cleanliness     Initialization value for the property $this->cleanliness  
     * @param   string            $sleepQuality    Initialization value for the property $this->sleepQuality 
     * @param   string            $value           Initialization value for the property $this->value        
     * @param   string            $service         Initialization value for the property $this->service      
     * @param   string            $location        Initialization value for the property $this->location     
     * @param   string            $rooms           Initialization value for the property $this->rooms        
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->cleanliness   = func_get_arg(0);
            $this->sleepQuality  = func_get_arg(1);
            $this->value         = func_get_arg(2);
            $this->service       = func_get_arg(3);
            $this->location      = func_get_arg(4);
            $this->rooms         = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Cleanliness']   = $this->cleanliness;
        $json['Sleep Quality'] = $this->sleepQuality;
        $json['Value']         = $this->value;
        $json['Service']       = $this->service;
        $json['Location']      = $this->location;
        $json['Rooms']         = $this->rooms;

        return $json;
    }
}