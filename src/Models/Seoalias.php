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
class Seoalias implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $score public property
     */
    public $score;

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
     * @var double $flags public property
     */
    public $flags;

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
     * @maps alias_from
     * @var string $aliasFrom public property
     */
    public $aliasFrom;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $id            Initialization value for the property $this->id         
     * @param   double            $score         Initialization value for the property $this->score      
     * @param   double            $locationId    Initialization value for the property $this->locationId 
     * @param   double            $flags         Initialization value for the property $this->flags      
     * @param   string            $aliasText     Initialization value for the property $this->aliasText  
     * @param   string            $aliasFrom     Initialization value for the property $this->aliasFrom  
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->id          = func_get_arg(0);
            $this->score       = func_get_arg(1);
            $this->locationId  = func_get_arg(2);
            $this->flags       = func_get_arg(3);
            $this->aliasText   = func_get_arg(4);
            $this->aliasFrom   = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']          = $this->id;
        $json['score']       = $this->score;
        $json['location_id'] = $this->locationId;
        $json['flags']       = $this->flags;
        $json['alias_text']  = $this->aliasText;
        $json['alias_from']  = $this->aliasFrom;

        return $json;
    }
}