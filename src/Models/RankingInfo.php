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
class RankingInfo implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $nbTypos public property
     */
    public $nbTypos;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $firstMatchedWord public property
     */
    public $firstMatchedWord;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $proximityDistance public property
     */
    public $proximityDistance;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $userScore public property
     */
    public $userScore;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $geoDistance public property
     */
    public $geoDistance;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $geoPrecision public property
     */
    public $geoPrecision;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $nbExactWords public property
     */
    public $nbExactWords;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $words public property
     */
    public $words;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $filters public property
     */
    public $filters;

    /**
     * @todo Write general description for this property
     * @required
     * @var MatchedGeoLocation $matchedGeoLocation public property
     */
    public $matchedGeoLocation;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $nbTypos              Initialization value for the property $this->nbTypos           
     * @param   integer           $firstMatchedWord     Initialization value for the property $this->firstMatchedWord  
     * @param   integer           $proximityDistance    Initialization value for the property $this->proximityDistance 
     * @param   integer           $userScore            Initialization value for the property $this->userScore         
     * @param   integer           $geoDistance          Initialization value for the property $this->geoDistance       
     * @param   integer           $geoPrecision         Initialization value for the property $this->geoPrecision      
     * @param   integer           $nbExactWords         Initialization value for the property $this->nbExactWords      
     * @param   integer           $words                Initialization value for the property $this->words             
     * @param   integer           $filters              Initialization value for the property $this->filters           
     * @param   MatchedGeoLocation   $matchedGeoLocation   Initialization value for the property $this->matchedGeoLocation
     */
    public function __construct()
    {
        if(10 == func_num_args())
        {
            $this->nbTypos            = func_get_arg(0);
            $this->firstMatchedWord   = func_get_arg(1);
            $this->proximityDistance  = func_get_arg(2);
            $this->userScore          = func_get_arg(3);
            $this->geoDistance        = func_get_arg(4);
            $this->geoPrecision       = func_get_arg(5);
            $this->nbExactWords       = func_get_arg(6);
            $this->words              = func_get_arg(7);
            $this->filters            = func_get_arg(8);
            $this->matchedGeoLocation = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['nbTypos']            = $this->nbTypos;
        $json['firstMatchedWord']   = $this->firstMatchedWord;
        $json['proximityDistance']  = $this->proximityDistance;
        $json['userScore']          = $this->userScore;
        $json['geoDistance']        = $this->geoDistance;
        $json['geoPrecision']       = $this->geoPrecision;
        $json['nbExactWords']       = $this->nbExactWords;
        $json['words']              = $this->words;
        $json['filters']            = $this->filters;
        $json['matchedGeoLocation'] = $this->matchedGeoLocation;

        return $json;
    }
}