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
class Review implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $date public property
     */
    public $date;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $summary public property
     */
    public $summary;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $author public property
     */
    public $author;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $rating public property
     */
    public $rating;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $date      Initialization value for the property $this->date   
     * @param   string            $summary   Initialization value for the property $this->summary
     * @param   string            $author    Initialization value for the property $this->author 
     * @param   string            $rating    Initialization value for the property $this->rating 
     * @param   string            $title     Initialization value for the property $this->title  
     * @param   string            $url       Initialization value for the property $this->url    
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->date    = func_get_arg(0);
            $this->summary = func_get_arg(1);
            $this->author  = func_get_arg(2);
            $this->rating  = func_get_arg(3);
            $this->title   = func_get_arg(4);
            $this->url     = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['date']    = $this->date;
        $json['summary'] = $this->summary;
        $json['author']  = $this->author;
        $json['rating']  = $this->rating;
        $json['title']   = $this->title;
        $json['url']     = $this->url;

        return $json;
    }
}