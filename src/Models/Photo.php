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
class Photo implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @required
     * @maps cloudinary_path
     * @var string $cloudinaryPath public property
     */
    public $cloudinaryPath;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $caption public property
     */
    public $caption;

    /**
     * @todo Write general description for this property
     * @required
     * @maps published_date
     * @var string $publishedDate public property
     */
    public $publishedDate;

    /**
     * @todo Write general description for this property
     * @required
     * @maps is_blessed
     * @var bool $isBlessed public property
     */
    public $isBlessed;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $id                Initialization value for the property $this->id             
     * @param   string            $url               Initialization value for the property $this->url            
     * @param   string            $cloudinaryPath    Initialization value for the property $this->cloudinaryPath 
     * @param   string            $type              Initialization value for the property $this->type           
     * @param   string            $caption           Initialization value for the property $this->caption        
     * @param   string            $publishedDate     Initialization value for the property $this->publishedDate  
     * @param   bool              $isBlessed         Initialization value for the property $this->isBlessed      
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->id              = func_get_arg(0);
            $this->url             = func_get_arg(1);
            $this->cloudinaryPath  = func_get_arg(2);
            $this->type            = func_get_arg(3);
            $this->caption         = func_get_arg(4);
            $this->publishedDate   = func_get_arg(5);
            $this->isBlessed       = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']              = $this->id;
        $json['url']             = $this->url;
        $json['cloudinary_path'] = $this->cloudinaryPath;
        $json['type']            = $this->type;
        $json['caption']         = $this->caption;
        $json['published_date']  = $this->publishedDate;
        $json['is_blessed']      = $this->isBlessed;

        return $json;
    }
}