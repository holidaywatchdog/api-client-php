<?php 
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ) on 09/05/2016
 */

namespace HolidayWatchdogAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GetLocationWithPathResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var object $locations public property
     */
    public $locations;

    /**
     * Constructor to set initial or default values of member properties
     * @param   object            $locations   Initialization value for the property $this->locations
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->locations = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['locations'] = $this->locations;

        return $json;
    }
}