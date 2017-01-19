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
class LocationNearestAirports implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps trip_id
     * @var double $tripId public property
     */
    public $tripId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps airport_code
     * @var string $airportCode public property
     */
    public $airportCode;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $tripId         Initialization value for the property $this->tripId      
     * @param   string            $airportCode    Initialization value for the property $this->airportCode 
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->tripId       = func_get_arg(0);
            $this->airportCode  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['trip_id']      = $this->tripId;
        $json['airport_code'] = $this->airportCode;

        return $json;
    }
}