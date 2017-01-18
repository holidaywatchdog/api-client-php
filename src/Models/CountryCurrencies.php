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
class CountryCurrencies implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $precision public property
     */
    public $precision;

    /**
     * @todo Write general description for this property
     * @required
     * @maps country_name
     * @var string $countryName public property
     */
    public $countryName;

    /**
     * @todo Write general description for this property
     * @required
     * @maps currency_name
     * @var string $currencyName public property
     */
    public $currencyName;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $country         Initialization value for the property $this->country      
     * @param   string            $currency        Initialization value for the property $this->currency     
     * @param   double            $precision       Initialization value for the property $this->precision    
     * @param   string            $countryName     Initialization value for the property $this->countryName  
     * @param   string            $currencyName    Initialization value for the property $this->currencyName 
     */
    public function __construct()
    {
        if(5 == func_num_args())
        {
            $this->country       = func_get_arg(0);
            $this->currency      = func_get_arg(1);
            $this->precision     = func_get_arg(2);
            $this->countryName   = func_get_arg(3);
            $this->currencyName  = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['country']       = $this->country;
        $json['currency']      = $this->currency;
        $json['precision']     = $this->precision;
        $json['country_name']  = $this->countryName;
        $json['currency_name'] = $this->currencyName;

        return $json;
    }
}