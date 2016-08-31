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
class Location implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $lft public property
     */
    public $lft;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $rgt public property
     */
    public $rgt;

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
     * @var double $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @maps is_original_description
     * @var double $isOriginalDescription public property
     */
    public $isOriginalDescription;

    /**
     * @todo Write general description for this property
     * @required
     * @maps keyword_type
     * @var double $keywordType public property
     */
    public $keywordType;

    /**
     * @todo Write general description for this property
     * @required
     * @maps target_geo_type
     * @var double $targetGeoType public property
     */
    public $targetGeoType;

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
     * @maps trip_id
     * @var double $tripId public property
     */
    public $tripId;

    /**
     * @todo Write general description for this property
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @var string $latitude public property
     */
    public $latitude;

    /**
     * @todo Write general description for this property
     * @var string $longitude public property
     */
    public $longitude;

    /**
     * @todo Write general description for this property
     * @maps redirect_id
     * @var double $redirectId public property
     */
    public $redirectId;

    /**
     * @todo Write general description for this property
     * @maps page_url
     * @var string $pageUrl public property
     */
    public $pageUrl;

    /**
     * @todo Write general description for this property
     * @maps binary_options
     * @var double $binaryOptions public property
     */
    public $binaryOptions;

    /**
     * @todo Write general description for this property
     * @maps date_removed
     * @var string $dateRemoved public property
     */
    public $dateRemoved;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $id                        Initialization value for the property $this->id                     
     * @param   string            $name                      Initialization value for the property $this->name                   
     * @param   double            $lft                       Initialization value for the property $this->lft                    
     * @param   double            $rgt                       Initialization value for the property $this->rgt                    
     * @param   double            $parentId                  Initialization value for the property $this->parentId               
     * @param   double            $type                      Initialization value for the property $this->type                   
     * @param   double            $isOriginalDescription     Initialization value for the property $this->isOriginalDescription  
     * @param   double            $keywordType               Initialization value for the property $this->keywordType            
     * @param   double            $targetGeoType             Initialization value for the property $this->targetGeoType          
     * @param   double            $metaNoIndex               Initialization value for the property $this->metaNoIndex            
     * @param   string            $dateCreated               Initialization value for the property $this->dateCreated            
     * @param   string            $dateUpdated               Initialization value for the property $this->dateUpdated            
     * @param   double            $tripId                    Initialization value for the property $this->tripId                 
     * @param   string            $description               Initialization value for the property $this->description            
     * @param   string            $latitude                  Initialization value for the property $this->latitude               
     * @param   string            $longitude                 Initialization value for the property $this->longitude              
     * @param   double            $redirectId                Initialization value for the property $this->redirectId             
     * @param   string            $pageUrl                   Initialization value for the property $this->pageUrl                
     * @param   double            $binaryOptions             Initialization value for the property $this->binaryOptions          
     * @param   string            $dateRemoved               Initialization value for the property $this->dateRemoved            
     */
    public function __construct()
    {
        if(20 == func_num_args())
        {
            $this->id                      = func_get_arg(0);
            $this->name                    = func_get_arg(1);
            $this->lft                     = func_get_arg(2);
            $this->rgt                     = func_get_arg(3);
            $this->parentId                = func_get_arg(4);
            $this->type                    = func_get_arg(5);
            $this->isOriginalDescription   = func_get_arg(6);
            $this->keywordType             = func_get_arg(7);
            $this->targetGeoType           = func_get_arg(8);
            $this->metaNoIndex             = func_get_arg(9);
            $this->dateCreated             = func_get_arg(10);
            $this->dateUpdated             = func_get_arg(11);
            $this->tripId                  = func_get_arg(12);
            $this->description             = func_get_arg(13);
            $this->latitude                = func_get_arg(14);
            $this->longitude               = func_get_arg(15);
            $this->redirectId              = func_get_arg(16);
            $this->pageUrl                 = func_get_arg(17);
            $this->binaryOptions           = func_get_arg(18);
            $this->dateRemoved             = func_get_arg(19);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                      = $this->id;
        $json['name']                    = $this->name;
        $json['lft']                     = $this->lft;
        $json['rgt']                     = $this->rgt;
        $json['parent_id']               = $this->parentId;
        $json['type']                    = $this->type;
        $json['is_original_description'] = $this->isOriginalDescription;
        $json['keyword_type']            = $this->keywordType;
        $json['target_geo_type']         = $this->targetGeoType;
        $json['meta_no_index']           = $this->metaNoIndex;
        $json['date_created']            = $this->dateCreated;
        $json['date_updated']            = $this->dateUpdated;
        $json['trip_id']                 = $this->tripId;
        $json['description']             = $this->description;
        $json['latitude']                = $this->latitude;
        $json['longitude']               = $this->longitude;
        $json['redirect_id']             = $this->redirectId;
        $json['page_url']                = $this->pageUrl;
        $json['binary_options']          = $this->binaryOptions;
        $json['date_removed']            = $this->dateRemoved;

        return $json;
    }
}