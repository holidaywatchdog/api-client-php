<?php 
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ) on 09/05/2016
 */

namespace HolidayWatchdogAPILib\Models;

use JsonSerializable;

/**
 * An Algolia Search Accommodation Object
 */
class AccommodationDetailedAlgolia implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $source public property
     */
    public $source;

    /**
     * @todo Write general description for this property
     * @required
     * @maps location_id
     * @var integer $locationId public property
     */
    public $locationId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps owner_id
     * @var string $ownerId public property
     */
    public $ownerId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps trip_id
     * @var integer $tripId public property
     */
    public $tripId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $address1 public property
     */
    public $address1;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $address2 public property
     */
    public $address2;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $postcode public property
     */
    public $postcode;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $telephone public property
     */
    public $telephone;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @maps total_ratings
     * @var integer $totalRatings public property
     */
    public $totalRatings;

    /**
     * @todo Write general description for this property
     * @required
     * @maps average_rating
     * @var double $averageRating public property
     */
    public $averageRating;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $stars public property
     */
    public $stars;

    /**
     * @todo Write general description for this property
     * @required
     * @maps type_id
     * @var integer $typeId public property
     */
    public $typeId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $longitude public property
     */
    public $longitude;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $latitude public property
     */
    public $latitude;

    /**
     * @todo Write general description for this property
     * @required
     * @maps num_rooms
     * @var integer $numRooms public property
     */
    public $numRooms;

    /**
     * @todo Write general description for this property
     * @required
     * @maps redirect_accommodation_id
     * @var integer $redirectAccommodationId public property
     */
    public $redirectAccommodationId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps redirect_id
     * @var string $redirectId public property
     */
    public $redirectId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps meta_no_index
     * @var integer $metaNoIndex public property
     */
    public $metaNoIndex;

    /**
     * @todo Write general description for this property
     * @required
     * @maps page_url
     * @var string $pageUrl public property
     */
    public $pageUrl;

    /**
     * @todo Write general description for this property
     * @required
     * @maps binary_options
     * @var integer $binaryOptions public property
     */
    public $binaryOptions;

    /**
     * @todo Write general description for this property
     * @required
     * @maps desc_overview
     * @var string $descOverview public property
     */
    public $descOverview;

    /**
     * @todo Write general description for this property
     * @required
     * @maps desc_room_information
     * @var string $descRoomInformation public property
     */
    public $descRoomInformation;

    /**
     * @todo Write general description for this property
     * @required
     * @maps desc_facilities
     * @var string $descFacilities public property
     */
    public $descFacilities;

    /**
     * @todo Write general description for this property
     * @required
     * @maps desc_food_drink
     * @var string $descFoodDrink public property
     */
    public $descFoodDrink;

    /**
     * @todo Write general description for this property
     * @required
     * @maps date_created
     * @var string $dateCreated public property
     */
    public $dateCreated;

    /**
     * @todo Write general description for this property
     * @required
     * @maps date_updated
     * @var string $dateUpdated public property
     */
    public $dateUpdated;

    /**
     * @todo Write general description for this property
     * @required
     * @maps date_removed
     * @var string $dateRemoved public property
     */
    public $dateRemoved;

    /**
     * @todo Write general description for this property
     * @required
     * @maps location_path
     * @var array $locationPath public property
     */
    public $locationPath;

    /**
     * @todo Write general description for this property
     * @required
     * @var Photo[] $photos public property
     */
    public $photos;

    /**
     * An array of information from Tripadvisor
     * @required
     * @var TripadvisorDetailedResponse $tripadvisor public property
     */
    public $tripadvisor;

    /**
     * Any external mappings to commerce partners. E.g Package Holidays with Traveltek
     * @required
     * @maps commerce-mappings
     * @var array $commerceMappings public property
     */
    public $commerceMappings;

    /**
     * Algolia record Id
     * @required
     * @var string $objectID public property
     */
    public $objectID;

    /**
     * @todo Write general description for this property
     * @required
     * @maps _highlightResult
     * @var HighlightResult $highlightResult public property
     */
    public $highlightResult;

    /**
     * Any ranking information for the search this object belongs to. Distance, rating etc.
     * @required
     * @maps _rankingInfo
     * @var RankingInfo $rankingInfo public property
     */
    public $rankingInfo;

    /**
     * Algolia Lat Lon information
     * @maps _geoloc
     * @var Geoloc $geoloc public property
     */
    public $geoloc;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $id                          Initialization value for the property $this->id                       
     * @param   string            $source                      Initialization value for the property $this->source                   
     * @param   integer           $locationId                  Initialization value for the property $this->locationId               
     * @param   string            $ownerId                     Initialization value for the property $this->ownerId                  
     * @param   integer           $tripId                      Initialization value for the property $this->tripId                   
     * @param   string            $address1                    Initialization value for the property $this->address1                 
     * @param   string            $address2                    Initialization value for the property $this->address2                 
     * @param   string            $postcode                    Initialization value for the property $this->postcode                 
     * @param   string            $telephone                   Initialization value for the property $this->telephone                
     * @param   string            $url                         Initialization value for the property $this->url                      
     * @param   string            $name                        Initialization value for the property $this->name                     
     * @param   string            $description                 Initialization value for the property $this->description              
     * @param   integer           $totalRatings                Initialization value for the property $this->totalRatings             
     * @param   double            $averageRating               Initialization value for the property $this->averageRating            
     * @param   integer           $stars                       Initialization value for the property $this->stars                    
     * @param   integer           $typeId                      Initialization value for the property $this->typeId                   
     * @param   string            $longitude                   Initialization value for the property $this->longitude                
     * @param   string            $latitude                    Initialization value for the property $this->latitude                 
     * @param   integer           $numRooms                    Initialization value for the property $this->numRooms                 
     * @param   integer           $redirectAccommodationId     Initialization value for the property $this->redirectAccommodationId  
     * @param   string            $redirectId                  Initialization value for the property $this->redirectId               
     * @param   integer           $metaNoIndex                 Initialization value for the property $this->metaNoIndex              
     * @param   string            $pageUrl                     Initialization value for the property $this->pageUrl                  
     * @param   integer           $binaryOptions               Initialization value for the property $this->binaryOptions            
     * @param   string            $descOverview                Initialization value for the property $this->descOverview             
     * @param   string            $descRoomInformation         Initialization value for the property $this->descRoomInformation      
     * @param   string            $descFacilities              Initialization value for the property $this->descFacilities           
     * @param   string            $descFoodDrink               Initialization value for the property $this->descFoodDrink            
     * @param   string            $dateCreated                 Initialization value for the property $this->dateCreated              
     * @param   string            $dateUpdated                 Initialization value for the property $this->dateUpdated              
     * @param   string            $dateRemoved                 Initialization value for the property $this->dateRemoved              
     * @param   array             $locationPath                Initialization value for the property $this->locationPath             
     * @param   array             $photos                      Initialization value for the property $this->photos                   
     * @param   TripadvisorDetailedResponse   $tripadvisor                 Initialization value for the property $this->tripadvisor              
     * @param   array             $commerceMappings            Initialization value for the property $this->commerceMappings         
     * @param   string            $objectID                    Initialization value for the property $this->objectID                 
     * @param   HighlightResult   $highlightResult             Initialization value for the property $this->highlightResult          
     * @param   RankingInfo       $rankingInfo                 Initialization value for the property $this->rankingInfo              
     * @param   Geoloc            $geoloc                      Initialization value for the property $this->geoloc                   
     */
    public function __construct()
    {
        if(39 == func_num_args())
        {
            $this->id                        = func_get_arg(0);
            $this->source                    = func_get_arg(1);
            $this->locationId                = func_get_arg(2);
            $this->ownerId                   = func_get_arg(3);
            $this->tripId                    = func_get_arg(4);
            $this->address1                  = func_get_arg(5);
            $this->address2                  = func_get_arg(6);
            $this->postcode                  = func_get_arg(7);
            $this->telephone                 = func_get_arg(8);
            $this->url                       = func_get_arg(9);
            $this->name                      = func_get_arg(10);
            $this->description               = func_get_arg(11);
            $this->totalRatings              = func_get_arg(12);
            $this->averageRating             = func_get_arg(13);
            $this->stars                     = func_get_arg(14);
            $this->typeId                    = func_get_arg(15);
            $this->longitude                 = func_get_arg(16);
            $this->latitude                  = func_get_arg(17);
            $this->numRooms                  = func_get_arg(18);
            $this->redirectAccommodationId   = func_get_arg(19);
            $this->redirectId                = func_get_arg(20);
            $this->metaNoIndex               = func_get_arg(21);
            $this->pageUrl                   = func_get_arg(22);
            $this->binaryOptions             = func_get_arg(23);
            $this->descOverview              = func_get_arg(24);
            $this->descRoomInformation       = func_get_arg(25);
            $this->descFacilities            = func_get_arg(26);
            $this->descFoodDrink             = func_get_arg(27);
            $this->dateCreated               = func_get_arg(28);
            $this->dateUpdated               = func_get_arg(29);
            $this->dateRemoved               = func_get_arg(30);
            $this->locationPath              = func_get_arg(31);
            $this->photos                    = func_get_arg(32);
            $this->tripadvisor               = func_get_arg(33);
            $this->commerceMappings          = func_get_arg(34);
            $this->objectID                  = func_get_arg(35);
            $this->highlightResult           = func_get_arg(36);
            $this->rankingInfo               = func_get_arg(37);
            $this->geoloc                    = func_get_arg(38);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                        = $this->id;
        $json['source']                    = $this->source;
        $json['location_id']               = $this->locationId;
        $json['owner_id']                  = $this->ownerId;
        $json['trip_id']                   = $this->tripId;
        $json['address1']                  = $this->address1;
        $json['address2']                  = $this->address2;
        $json['postcode']                  = $this->postcode;
        $json['telephone']                 = $this->telephone;
        $json['url']                       = $this->url;
        $json['name']                      = $this->name;
        $json['description']               = $this->description;
        $json['total_ratings']             = $this->totalRatings;
        $json['average_rating']            = $this->averageRating;
        $json['stars']                     = $this->stars;
        $json['type_id']                   = $this->typeId;
        $json['longitude']                 = $this->longitude;
        $json['latitude']                  = $this->latitude;
        $json['num_rooms']                 = $this->numRooms;
        $json['redirect_accommodation_id'] = $this->redirectAccommodationId;
        $json['redirect_id']               = $this->redirectId;
        $json['meta_no_index']             = $this->metaNoIndex;
        $json['page_url']                  = $this->pageUrl;
        $json['binary_options']            = $this->binaryOptions;
        $json['desc_overview']             = $this->descOverview;
        $json['desc_room_information']     = $this->descRoomInformation;
        $json['desc_facilities']           = $this->descFacilities;
        $json['desc_food_drink']           = $this->descFoodDrink;
        $json['date_created']              = $this->dateCreated;
        $json['date_updated']              = $this->dateUpdated;
        $json['date_removed']              = $this->dateRemoved;
        $json['location_path']             = $this->locationPath;
        $json['photos']                    = $this->photos;
        $json['tripadvisor']               = $this->tripadvisor;
        $json['commerce-mappings']         = $this->commerceMappings;
        $json['objectID']                  = $this->objectID;
        $json['_highlightResult']          = $this->highlightResult;
        $json['_rankingInfo']              = $this->rankingInfo;
        $json['_geoloc']                   = $this->geoloc;

        return $json;
    }
}