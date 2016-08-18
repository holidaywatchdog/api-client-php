<?php 
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ) on 08/18/2016
 */

namespace HolidayWatchdogAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class UserReviewInternalComment implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $comment public property
     */
    public $comment;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $createDate public property
     */
    public $createDate;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $isstatus public property
     */
    public $isstatus;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $reviewid public property
     */
    public $reviewid;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $userid public property
     */
    public $userid;

    /**
     * @todo Write general description for this property
     * @var double $actiontype public property
     */
    public $actiontype;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $comment      Initialization value for the property $this->comment   
     * @param   string            $createDate   Initialization value for the property $this->createDate
     * @param   double            $id           Initialization value for the property $this->id        
     * @param   double            $isstatus     Initialization value for the property $this->isstatus  
     * @param   double            $reviewid     Initialization value for the property $this->reviewid  
     * @param   double            $userid       Initialization value for the property $this->userid    
     * @param   double            $actiontype   Initialization value for the property $this->actiontype
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->comment    = func_get_arg(0);
            $this->createDate = func_get_arg(1);
            $this->id         = func_get_arg(2);
            $this->isstatus   = func_get_arg(3);
            $this->reviewid   = func_get_arg(4);
            $this->userid     = func_get_arg(5);
            $this->actiontype = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['comment']    = $this->comment;
        $json['createDate'] = $this->createDate;
        $json['id']         = $this->id;
        $json['isstatus']   = $this->isstatus;
        $json['reviewid']   = $this->reviewid;
        $json['userid']     = $this->userid;
        $json['actiontype'] = $this->actiontype;

        return $json;
    }
}