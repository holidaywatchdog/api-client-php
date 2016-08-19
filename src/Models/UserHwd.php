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
class UserHwd implements JsonSerializable {
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
     * @var string $country public property
     */
    public $country;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $county public property
     */
    public $county;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @required
     * @maps first_name
     * @var string $firstName public property
     */
    public $firstName;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $lang public property
     */
    public $lang;

    /**
     * @todo Write general description for this property
     * @required
     * @maps last_name
     * @var string $lastName public property
     */
    public $lastName;

    /**
     * @todo Write general description for this property
     * @required
     * @maps last_visit
     * @var double $lastVisit public property
     */
    public $lastVisit;

    /**
     * @todo Write general description for this property
     * @required
     * @maps mobile_number
     * @var string $mobileNumber public property
     */
    public $mobileNumber;

    /**
     * @todo Write general description for this property
     * @required
     * @maps opt_out_email
     * @var double $optOutEmail public property
     */
    public $optOutEmail;

    /**
     * @todo Write general description for this property
     * @required
     * @maps phone_number
     * @var string $phoneNumber public property
     */
    public $phoneNumber;

    /**
     * @todo Write general description for this property
     * @required
     * @maps post_code
     * @var string $postCode public property
     */
    public $postCode;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $state public property
     */
    public $state;

    /**
     * @todo Write general description for this property
     * @required
     * @maps time_zone
     * @var string $timeZone public property
     */
    public $timeZone;

    /**
     * @todo Write general description for this property
     * @required
     * @maps user_reg_date
     * @var double $userRegDate public property
     */
    public $userRegDate;

    /**
     * @todo Write general description for this property
     * @required
     * @maps user_type
     * @var double $userType public property
     */
    public $userType;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $username public property
     */
    public $username;

    /**
     * @todo Write general description for this property
     * @required
     * @maps username_clean
     * @var string $usernameClean public property
     */
    public $usernameClean;

    /**
     * @todo Write general description for this property
     * @maps fb_email
     * @var string $fbEmail public property
     */
    public $fbEmail;

    /**
     * @todo Write general description for this property
     * @maps fb_user_id
     * @var double $fbUserId public property
     */
    public $fbUserId;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $address1         Initialization value for the property $this->address1      
     * @param   string            $address2         Initialization value for the property $this->address2      
     * @param   string            $country          Initialization value for the property $this->country       
     * @param   string            $county           Initialization value for the property $this->county        
     * @param   string            $email            Initialization value for the property $this->email         
     * @param   string            $firstName        Initialization value for the property $this->firstName     
     * @param   double            $id               Initialization value for the property $this->id            
     * @param   string            $lang             Initialization value for the property $this->lang          
     * @param   string            $lastName         Initialization value for the property $this->lastName      
     * @param   double            $lastVisit        Initialization value for the property $this->lastVisit     
     * @param   string            $mobileNumber     Initialization value for the property $this->mobileNumber  
     * @param   double            $optOutEmail      Initialization value for the property $this->optOutEmail   
     * @param   string            $phoneNumber      Initialization value for the property $this->phoneNumber   
     * @param   string            $postCode         Initialization value for the property $this->postCode      
     * @param   string            $state            Initialization value for the property $this->state         
     * @param   string            $timeZone         Initialization value for the property $this->timeZone      
     * @param   double            $userRegDate      Initialization value for the property $this->userRegDate   
     * @param   double            $userType         Initialization value for the property $this->userType      
     * @param   string            $username         Initialization value for the property $this->username      
     * @param   string            $usernameClean    Initialization value for the property $this->usernameClean 
     * @param   string            $fbEmail          Initialization value for the property $this->fbEmail       
     * @param   double            $fbUserId         Initialization value for the property $this->fbUserId      
     */
    public function __construct()
    {
        if(22 == func_num_args())
        {
            $this->address1       = func_get_arg(0);
            $this->address2       = func_get_arg(1);
            $this->country        = func_get_arg(2);
            $this->county         = func_get_arg(3);
            $this->email          = func_get_arg(4);
            $this->firstName      = func_get_arg(5);
            $this->id             = func_get_arg(6);
            $this->lang           = func_get_arg(7);
            $this->lastName       = func_get_arg(8);
            $this->lastVisit      = func_get_arg(9);
            $this->mobileNumber   = func_get_arg(10);
            $this->optOutEmail    = func_get_arg(11);
            $this->phoneNumber    = func_get_arg(12);
            $this->postCode       = func_get_arg(13);
            $this->state          = func_get_arg(14);
            $this->timeZone       = func_get_arg(15);
            $this->userRegDate    = func_get_arg(16);
            $this->userType       = func_get_arg(17);
            $this->username       = func_get_arg(18);
            $this->usernameClean  = func_get_arg(19);
            $this->fbEmail        = func_get_arg(20);
            $this->fbUserId       = func_get_arg(21);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['address1']       = $this->address1;
        $json['address2']       = $this->address2;
        $json['country']        = $this->country;
        $json['county']         = $this->county;
        $json['email']          = $this->email;
        $json['first_name']     = $this->firstName;
        $json['id']             = $this->id;
        $json['lang']           = $this->lang;
        $json['last_name']      = $this->lastName;
        $json['last_visit']     = $this->lastVisit;
        $json['mobile_number']  = $this->mobileNumber;
        $json['opt_out_email']  = $this->optOutEmail;
        $json['phone_number']   = $this->phoneNumber;
        $json['post_code']      = $this->postCode;
        $json['state']          = $this->state;
        $json['time_zone']      = $this->timeZone;
        $json['user_reg_date']  = $this->userRegDate;
        $json['user_type']      = $this->userType;
        $json['username']       = $this->username;
        $json['username_clean'] = $this->usernameClean;
        $json['fb_email']       = $this->fbEmail;
        $json['fb_user_id']     = $this->fbUserId;

        return $json;
    }
}