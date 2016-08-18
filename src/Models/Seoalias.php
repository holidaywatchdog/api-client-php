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
class Seoalias implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps alias_from
     * @var string $aliasFrom public property
     */
    public $aliasFrom;

    /**
     * @todo Write general description for this property
     * @required
     * @maps alias_text
     * @var string $aliasText public property
     */
    public $aliasText;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $flags public property
     */
    public $flags;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps location_id
     * @var double $locationId public property
     */
    public $locationId;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $score public property
     */
    public $score;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $aliasFrom     Initialization value for the property $this->aliasFrom  
     * @param   string            $aliasText     Initialization value for the property $this->aliasText  
     * @param   double            $flags         Initialization value for the property $this->flags      
     * @param   double            $id            Initialization value for the property $this->id         
     * @param   double            $locationId    Initialization value for the property $this->locationId 
     * @param   double            $score         Initialization value for the property $this->score      
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->aliasFrom   = func_get_arg(0);
            $this->aliasText   = func_get_arg(1);
            $this->flags       = func_get_arg(2);
            $this->id          = func_get_arg(3);
            $this->locationId  = func_get_arg(4);
            $this->score       = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['alias_from']  = $this->aliasFrom;
        $json['alias_text']  = $this->aliasText;
        $json['flags']       = $this->flags;
        $json['id']          = $this->id;
        $json['location_id'] = $this->locationId;
        $json['score']       = $this->score;

        return $json;
    }
}