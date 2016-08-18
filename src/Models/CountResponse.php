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
class CountResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var double $count public property
     */
    public $count;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $count   Initialization value for the property $this->count
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->count = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['count'] = $this->count;

        return $json;
    }
}