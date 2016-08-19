<?php 
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ) on 08/19/2016
 */

namespace HolidayWatchdogAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CruiseLine implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps average_rating
     * @var string $averageRating public property
     */
    public $averageRating;

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
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps is_original_escription
     * @var double $isOriginalEscription public property
     */
    public $isOriginalEscription;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $lft public property
     */
    public $lft;

    /**
     * @todo Write general description for this property
     * @required
     * @maps meta_no_index
     * @var double $metaNoIndex public property
     */
    public $metaNoIndex;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @maps parent_id
     * @var double $parentId public property
     */
    public $parentId;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $rgt public property
     */
    public $rgt;

    /**
     * @todo Write general description for this property
     * @required
     * @maps total_ratings
     * @var double $totalRatings public property
     */
    public $totalRatings;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var double $cruiseShipId public property
     */
    public $cruiseShipId;

    /**
     * @todo Write general description for this property
     * @maps date_deleted
     * @var string $dateDeleted public property
     */
    public $dateDeleted;

    /**
     * @todo Write general description for this property
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @maps page_url
     * @var string $pageUrl public property
     */
    public $pageUrl;

    /**
     * @todo Write general description for this property
     * @maps redirect_id
     * @var double $redirectId public property
     */
    public $redirectId;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $averageRating            Initialization value for the property $this->averageRating         
     * @param   string            $dateCreated              Initialization value for the property $this->dateCreated           
     * @param   string            $dateUpdated              Initialization value for the property $this->dateUpdated           
     * @param   double            $id                       Initialization value for the property $this->id                    
     * @param   double            $isOriginalEscription     Initialization value for the property $this->isOriginalEscription  
     * @param   double            $lft                      Initialization value for the property $this->lft                   
     * @param   double            $metaNoIndex              Initialization value for the property $this->metaNoIndex           
     * @param   string            $name                     Initialization value for the property $this->name                  
     * @param   double            $parentId                 Initialization value for the property $this->parentId              
     * @param   double            $rgt                      Initialization value for the property $this->rgt                   
     * @param   double            $totalRatings             Initialization value for the property $this->totalRatings          
     * @param   double            $type                     Initialization value for the property $this->type                  
     * @param   double            $cruiseShipId             Initialization value for the property $this->cruiseShipId          
     * @param   string            $dateDeleted              Initialization value for the property $this->dateDeleted           
     * @param   string            $description              Initialization value for the property $this->description           
     * @param   string            $pageUrl                  Initialization value for the property $this->pageUrl               
     * @param   double            $redirectId               Initialization value for the property $this->redirectId            
     */
    public function __construct()
    {
        if(17 == func_num_args())
        {
            $this->averageRating          = func_get_arg(0);
            $this->dateCreated            = func_get_arg(1);
            $this->dateUpdated            = func_get_arg(2);
            $this->id                     = func_get_arg(3);
            $this->isOriginalEscription   = func_get_arg(4);
            $this->lft                    = func_get_arg(5);
            $this->metaNoIndex            = func_get_arg(6);
            $this->name                   = func_get_arg(7);
            $this->parentId               = func_get_arg(8);
            $this->rgt                    = func_get_arg(9);
            $this->totalRatings           = func_get_arg(10);
            $this->type                   = func_get_arg(11);
            $this->cruiseShipId           = func_get_arg(12);
            $this->dateDeleted            = func_get_arg(13);
            $this->description            = func_get_arg(14);
            $this->pageUrl                = func_get_arg(15);
            $this->redirectId             = func_get_arg(16);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['average_rating']         = $this->averageRating;
        $json['date_created']           = $this->dateCreated;
        $json['date_updated']           = $this->dateUpdated;
        $json['id']                     = $this->id;
        $json['is_original_escription'] = $this->isOriginalEscription;
        $json['lft']                    = $this->lft;
        $json['meta_no_index']          = $this->metaNoIndex;
        $json['name']                   = $this->name;
        $json['parent_id']              = $this->parentId;
        $json['rgt']                    = $this->rgt;
        $json['total_ratings']          = $this->totalRatings;
        $json['type']                   = $this->type;
        $json['cruiseShipId']           = $this->cruiseShipId;
        $json['date_deleted']           = $this->dateDeleted;
        $json['description']            = $this->description;
        $json['page_url']               = $this->pageUrl;
        $json['redirect_id']            = $this->redirectId;

        return $json;
    }
}