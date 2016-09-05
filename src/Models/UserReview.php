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
class UserReview implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps accommodation_id
     * @var double $accommodationId public property
     */
    public $accommodationId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps user_id
     * @var double $userId public property
     */
    public $userId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps reviewer_email
     * @var string $reviewerEmail public property
     */
    public $reviewerEmail;

    /**
     * @todo Write general description for this property
     * @required
     * @maps reviewer_name
     * @var string $reviewerName public property
     */
    public $reviewerName;

    /**
     * @todo Write general description for this property
     * @required
     * @maps reviewer_ip
     * @var string $reviewerIp public property
     */
    public $reviewerIp;

    /**
     * @todo Write general description for this property
     * @required
     * @maps travel_date
     * @var string $travelDate public property
     */
    public $travelDate;

    /**
     * @todo Write general description for this property
     * @required
     * @maps create_date
     * @var string $createDate public property
     */
    public $createDate;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $tourop public property
     */
    public $tourop;

    /**
     * @todo Write general description for this property
     * @required
     * @maps tourop_recommend
     * @var double $touropRecommend public property
     */
    public $touropRecommend;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $rating public property
     */
    public $rating;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $comment public property
     */
    public $comment;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $approved public property
     */
    public $approved;

    /**
     * @todo Write general description for this property
     * @required
     * @maps profanity_filter
     * @var double $profanityFilter public property
     */
    public $profanityFilter;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $source public property
     */
    public $source;

    /**
     * @todo Write general description for this property
     * @var string $board public property
     */
    public $board;

    /**
     * @todo Write general description for this property
     * @maps room_rating
     * @var double $roomRating public property
     */
    public $roomRating;

    /**
     * @todo Write general description for this property
     * @maps pool_rating
     * @var double $poolRating public property
     */
    public $poolRating;

    /**
     * @todo Write general description for this property
     * @maps beach_rating
     * @var double $beachRating public property
     */
    public $beachRating;

    /**
     * @todo Write general description for this property
     * @maps service_rating
     * @var double $serviceRating public property
     */
    public $serviceRating;

    /**
     * @todo Write general description for this property
     * @maps dining_rating
     * @var double $diningRating public property
     */
    public $diningRating;

    /**
     * @todo Write general description for this property
     * @maps amenities_rating
     * @var double $amenitiesRating public property
     */
    public $amenitiesRating;

    /**
     * @todo Write general description for this property
     * @maps approved_date
     * @var string $approvedDate public property
     */
    public $approvedDate;

    /**
     * @todo Write general description for this property
     * @maps management_response
     * @var double $managementResponse public property
     */
    public $managementResponse;

    /**
     * @todo Write general description for this property
     * @maps positive_votes
     * @var double $positiveVotes public property
     */
    public $positiveVotes;

    /**
     * @todo Write general description for this property
     * @maps negative_votes
     * @var double $negativeVotes public property
     */
    public $negativeVotes;

    /**
     * @todo Write general description for this property
     * @maps validation_code
     * @var string $validationCode public property
     */
    public $validationCode;

    /**
     * @todo Write general description for this property
     * @maps duplicate_flag
     * @var double $duplicateFlag public property
     */
    public $duplicateFlag;

    /**
     * @todo Write general description for this property
     * @maps value_rating
     * @var double $valueRating public property
     */
    public $valueRating;

    /**
     * @todo Write general description for this property
     * @maps food_rating
     * @var double $foodRating public property
     */
    public $foodRating;

    /**
     * @todo Write general description for this property
     * @maps cleaniness_rating
     * @var double $cleaninessRating public property
     */
    public $cleaninessRating;

    /**
     * @todo Write general description for this property
     * @maps location_rating
     * @var double $locationRating public property
     */
    public $locationRating;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $id                    Initialization value for the property $this->id                 
     * @param   double            $accommodationId       Initialization value for the property $this->accommodationId    
     * @param   double            $userId                Initialization value for the property $this->userId             
     * @param   string            $reviewerEmail         Initialization value for the property $this->reviewerEmail      
     * @param   string            $reviewerName          Initialization value for the property $this->reviewerName       
     * @param   string            $reviewerIp            Initialization value for the property $this->reviewerIp         
     * @param   string            $travelDate            Initialization value for the property $this->travelDate         
     * @param   string            $createDate            Initialization value for the property $this->createDate         
     * @param   string            $tourop                Initialization value for the property $this->tourop             
     * @param   double            $touropRecommend       Initialization value for the property $this->touropRecommend    
     * @param   double            $rating                Initialization value for the property $this->rating             
     * @param   string            $comment               Initialization value for the property $this->comment            
     * @param   string            $title                 Initialization value for the property $this->title              
     * @param   double            $approved              Initialization value for the property $this->approved           
     * @param   double            $profanityFilter       Initialization value for the property $this->profanityFilter    
     * @param   string            $source                Initialization value for the property $this->source             
     * @param   string            $board                 Initialization value for the property $this->board              
     * @param   double            $roomRating            Initialization value for the property $this->roomRating         
     * @param   double            $poolRating            Initialization value for the property $this->poolRating         
     * @param   double            $beachRating           Initialization value for the property $this->beachRating        
     * @param   double            $serviceRating         Initialization value for the property $this->serviceRating      
     * @param   double            $diningRating          Initialization value for the property $this->diningRating       
     * @param   double            $amenitiesRating       Initialization value for the property $this->amenitiesRating    
     * @param   string            $approvedDate          Initialization value for the property $this->approvedDate       
     * @param   double            $managementResponse    Initialization value for the property $this->managementResponse 
     * @param   double            $positiveVotes         Initialization value for the property $this->positiveVotes      
     * @param   double            $negativeVotes         Initialization value for the property $this->negativeVotes      
     * @param   string            $validationCode        Initialization value for the property $this->validationCode     
     * @param   double            $duplicateFlag         Initialization value for the property $this->duplicateFlag      
     * @param   double            $valueRating           Initialization value for the property $this->valueRating        
     * @param   double            $foodRating            Initialization value for the property $this->foodRating         
     * @param   double            $cleaninessRating      Initialization value for the property $this->cleaninessRating   
     * @param   double            $locationRating        Initialization value for the property $this->locationRating     
     */
    public function __construct()
    {
        if(33 == func_num_args())
        {
            $this->id                  = func_get_arg(0);
            $this->accommodationId     = func_get_arg(1);
            $this->userId              = func_get_arg(2);
            $this->reviewerEmail       = func_get_arg(3);
            $this->reviewerName        = func_get_arg(4);
            $this->reviewerIp          = func_get_arg(5);
            $this->travelDate          = func_get_arg(6);
            $this->createDate          = func_get_arg(7);
            $this->tourop              = func_get_arg(8);
            $this->touropRecommend     = func_get_arg(9);
            $this->rating              = func_get_arg(10);
            $this->comment             = func_get_arg(11);
            $this->title               = func_get_arg(12);
            $this->approved            = func_get_arg(13);
            $this->profanityFilter     = func_get_arg(14);
            $this->source              = func_get_arg(15);
            $this->board               = func_get_arg(16);
            $this->roomRating          = func_get_arg(17);
            $this->poolRating          = func_get_arg(18);
            $this->beachRating         = func_get_arg(19);
            $this->serviceRating       = func_get_arg(20);
            $this->diningRating        = func_get_arg(21);
            $this->amenitiesRating     = func_get_arg(22);
            $this->approvedDate        = func_get_arg(23);
            $this->managementResponse  = func_get_arg(24);
            $this->positiveVotes       = func_get_arg(25);
            $this->negativeVotes       = func_get_arg(26);
            $this->validationCode      = func_get_arg(27);
            $this->duplicateFlag       = func_get_arg(28);
            $this->valueRating         = func_get_arg(29);
            $this->foodRating          = func_get_arg(30);
            $this->cleaninessRating    = func_get_arg(31);
            $this->locationRating      = func_get_arg(32);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                  = $this->id;
        $json['accommodation_id']    = $this->accommodationId;
        $json['user_id']             = $this->userId;
        $json['reviewer_email']      = $this->reviewerEmail;
        $json['reviewer_name']       = $this->reviewerName;
        $json['reviewer_ip']         = $this->reviewerIp;
        $json['travel_date']         = $this->travelDate;
        $json['create_date']         = $this->createDate;
        $json['tourop']              = $this->tourop;
        $json['tourop_recommend']    = $this->touropRecommend;
        $json['rating']              = $this->rating;
        $json['comment']             = $this->comment;
        $json['title']               = $this->title;
        $json['approved']            = $this->approved;
        $json['profanity_filter']    = $this->profanityFilter;
        $json['source']              = $this->source;
        $json['board']               = $this->board;
        $json['room_rating']         = $this->roomRating;
        $json['pool_rating']         = $this->poolRating;
        $json['beach_rating']        = $this->beachRating;
        $json['service_rating']      = $this->serviceRating;
        $json['dining_rating']       = $this->diningRating;
        $json['amenities_rating']    = $this->amenitiesRating;
        $json['approved_date']       = $this->approvedDate;
        $json['management_response'] = $this->managementResponse;
        $json['positive_votes']      = $this->positiveVotes;
        $json['negative_votes']      = $this->negativeVotes;
        $json['validation_code']     = $this->validationCode;
        $json['duplicate_flag']      = $this->duplicateFlag;
        $json['value_rating']        = $this->valueRating;
        $json['food_rating']         = $this->foodRating;
        $json['cleaniness_rating']   = $this->cleaninessRating;
        $json['location_rating']     = $this->locationRating;

        return $json;
    }
}