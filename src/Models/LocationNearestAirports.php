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
class LocationNearestAirports implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps airport_code
     * @var string $airportCode public property
     */
    public $airportCode;

    /**
     * @todo Write general description for this property
     * @required
     * @maps trip_id
     * @var double $tripId public property
     */
    public $tripId;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $airportCode    Initialization value for the property $this->airportCode 
     * @param   double            $tripId         Initialization value for the property $this->tripId      
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->airportCode  = func_get_arg(0);
            $this->tripId       = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['airport_code'] = $this->airportCode;
        $json['trip_id']      = $this->tripId;

        return $json;
    }
}