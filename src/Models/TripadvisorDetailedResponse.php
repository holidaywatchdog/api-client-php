<?php 
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HolidayWatchdogAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class TripadvisorDetailedResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps percent_recommended
     * @var integer $percentRecommended public property
     */
    public $percentRecommended;

    /**
     * @todo Write general description for this property
     * @required
     * @var Subratings $subratings public property
     */
    public $subratings;

    /**
     * @todo Write general description for this property
     * @required
     * @maps review_rating_count
     * @var object $reviewRatingCount public property
     */
    public $reviewRatingCount;

    /**
     * @todo Write general description for this property
     * @required
     * @maps ranking_data
     * @var RankingData $rankingData public property
     */
    public $rankingData;

    /**
     * @todo Write general description for this property
     * @required
     * @var Review[] $reviews public property
     */
    public $reviews;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $percentRecommended    Initialization value for the property $this->percentRecommended 
     * @param   Subratings        $subratings            Initialization value for the property $this->subratings         
     * @param   object            $reviewRatingCount     Initialization value for the property $this->reviewRatingCount  
     * @param   RankingData       $rankingData           Initialization value for the property $this->rankingData        
     * @param   array             $reviews               Initialization value for the property $this->reviews            
     */
    public function __construct()
    {
        if(5 == func_num_args())
        {
            $this->percentRecommended  = func_get_arg(0);
            $this->subratings          = func_get_arg(1);
            $this->reviewRatingCount   = func_get_arg(2);
            $this->rankingData         = func_get_arg(3);
            $this->reviews             = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['percent_recommended'] = $this->percentRecommended;
        $json['subratings']          = $this->subratings;
        $json['review_rating_count'] = $this->reviewRatingCount;
        $json['ranking_data']        = $this->rankingData;
        $json['reviews']             = $this->reviews;

        return $json;
    }
}