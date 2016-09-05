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
class RankingData implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps ranking_out_of
     * @var string $rankingOutOf public property
     */
    public $rankingOutOf;

    /**
     * @todo Write general description for this property
     * @required
     * @maps geo_location_id
     * @var string $geoLocationId public property
     */
    public $geoLocationId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps ranking_category
     * @var string $rankingCategory public property
     */
    public $rankingCategory;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $ranking public property
     */
    public $ranking;

    /**
     * @todo Write general description for this property
     * @required
     * @maps geo_location_name
     * @var string $geoLocationName public property
     */
    public $geoLocationName;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $rankingOutOf        Initialization value for the property $this->rankingOutOf     
     * @param   string            $geoLocationId       Initialization value for the property $this->geoLocationId    
     * @param   string            $rankingCategory     Initialization value for the property $this->rankingCategory  
     * @param   string            $ranking             Initialization value for the property $this->ranking          
     * @param   string            $geoLocationName     Initialization value for the property $this->geoLocationName  
     */
    public function __construct()
    {
        if(5 == func_num_args())
        {
            $this->rankingOutOf      = func_get_arg(0);
            $this->geoLocationId     = func_get_arg(1);
            $this->rankingCategory   = func_get_arg(2);
            $this->ranking           = func_get_arg(3);
            $this->geoLocationName   = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ranking_out_of']    = $this->rankingOutOf;
        $json['geo_location_id']   = $this->geoLocationId;
        $json['ranking_category']  = $this->rankingCategory;
        $json['ranking']           = $this->ranking;
        $json['geo_location_name'] = $this->geoLocationName;

        return $json;
    }
}