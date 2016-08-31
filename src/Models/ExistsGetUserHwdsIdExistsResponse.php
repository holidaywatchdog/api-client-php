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
class ExistsGetUserHwdsIdExistsResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var bool $exists public property
     */
    public $exists;

    /**
     * Constructor to set initial or default values of member properties
     * @param   bool              $exists   Initialization value for the property $this->exists
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->exists = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['exists'] = $this->exists;

        return $json;
    }
}