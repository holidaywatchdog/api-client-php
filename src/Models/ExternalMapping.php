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
class ExternalMapping implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps provider_id
     * @var double $providerId public property
     */
    public $providerId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps trip_id
     * @var double $tripId public property
     */
    public $tripId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps external_id
     * @var string $externalId public property
     */
    public $externalId;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $status public property
     */
    public $status;

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
     * @maps additional_data
     * @var string $additionalData public property
     */
    public $additionalData;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $providerId        Initialization value for the property $this->providerId     
     * @param   double            $tripId            Initialization value for the property $this->tripId         
     * @param   string            $externalId        Initialization value for the property $this->externalId     
     * @param   double            $status            Initialization value for the property $this->status         
     * @param   string            $dateCreated       Initialization value for the property $this->dateCreated    
     * @param   string            $dateUpdated       Initialization value for the property $this->dateUpdated    
     * @param   string            $additionalData    Initialization value for the property $this->additionalData 
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->providerId      = func_get_arg(0);
            $this->tripId          = func_get_arg(1);
            $this->externalId      = func_get_arg(2);
            $this->status          = func_get_arg(3);
            $this->dateCreated     = func_get_arg(4);
            $this->dateUpdated     = func_get_arg(5);
            $this->additionalData  = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['provider_id']     = $this->providerId;
        $json['trip_id']         = $this->tripId;
        $json['external_id']     = $this->externalId;
        $json['status']          = $this->status;
        $json['date_created']    = $this->dateCreated;
        $json['date_updated']    = $this->dateUpdated;
        $json['additional_data'] = $this->additionalData;

        return $json;
    }
}