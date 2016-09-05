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
class Geoloc implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var double $lat public property
     */
    public $lat;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $lng public property
     */
    public $lng;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $lat   Initialization value for the property $this->lat
     * @param   double            $lng   Initialization value for the property $this->lng
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->lat = func_get_arg(0);
            $this->lng = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['lat'] = $this->lat;
        $json['lng'] = $this->lng;

        return $json;
    }
}