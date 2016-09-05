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
class HighlightResult implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var Source $source public property
     */
    public $source;

    /**
     * @todo Write general description for this property
     * @required
     * @var Name $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param   Source            $source   Initialization value for the property $this->source
     * @param   Name              $name     Initialization value for the property $this->name  
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->source = func_get_arg(0);
            $this->name   = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['source'] = $this->source;
        $json['name']   = $this->name;

        return $json;
    }
}