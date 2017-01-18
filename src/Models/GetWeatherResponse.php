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
class GetWeatherResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var object $weather public property
     */
    public $weather;

    /**
     * Constructor to set initial or default values of member properties
     * @param   object            $weather   Initialization value for the property $this->weather
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->weather = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['weather'] = $this->weather;

        return $json;
    }
}