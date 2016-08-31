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
class Source implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $matchLevel public property
     */
    public $matchLevel;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $matchedWords public property
     */
    public $matchedWords;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $value          Initialization value for the property $this->value       
     * @param   string            $matchLevel     Initialization value for the property $this->matchLevel  
     * @param   array             $matchedWords   Initialization value for the property $this->matchedWords
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->value        = func_get_arg(0);
            $this->matchLevel   = func_get_arg(1);
            $this->matchedWords = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['value']        = $this->value;
        $json['matchLevel']   = $this->matchLevel;
        $json['matchedWords'] = $this->matchedWords;

        return $json;
    }
}