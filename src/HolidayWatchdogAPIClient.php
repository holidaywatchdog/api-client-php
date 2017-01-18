<?php
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HolidayWatchdogAPILib;

use HolidayWatchdogAPILib\Controllers;

/**
 * HolidayWatchdogAPI client class
 */
class HolidayWatchdogAPIClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct($authorization = NULL)
    {
        Configuration::$authorization = $authorization ? $authorization : Configuration::$authorization;
    }
 
    /**
     * Singleton access to Location controller
     * @return Controllers\LocationController The *Singleton* instance
     */
    public function getLocation()
    {
        return Controllers\LocationController::getInstance();
    }
 
    /**
     * Singleton access to UserReview controller
     * @return Controllers\UserReviewController The *Singleton* instance
     */
    public function getUserReview()
    {
        return Controllers\UserReviewController::getInstance();
    }
 
    /**
     * Singleton access to UserPhotoAlbum controller
     * @return Controllers\UserPhotoAlbumController The *Singleton* instance
     */
    public function getUserPhotoAlbum()
    {
        return Controllers\UserPhotoAlbumController::getInstance();
    }
 
    /**
     * Singleton access to UserPhoto controller
     * @return Controllers\UserPhotoController The *Singleton* instance
     */
    public function getUserPhoto()
    {
        return Controllers\UserPhotoController::getInstance();
    }
 
    /**
     * Singleton access to CruiseShip controller
     * @return Controllers\CruiseShipController The *Singleton* instance
     */
    public function getCruiseShip()
    {
        return Controllers\CruiseShipController::getInstance();
    }
 
    /**
     * Singleton access to WarehousePages controller
     * @return Controllers\WarehousePagesController The *Singleton* instance
     */
    public function getWarehousePages()
    {
        return Controllers\WarehousePagesController::getInstance();
    }
 
    /**
     * Singleton access to UserHwd controller
     * @return Controllers\UserHwdController The *Singleton* instance
     */
    public function getUserHwd()
    {
        return Controllers\UserHwdController::getInstance();
    }
 
    /**
     * Singleton access to LocationNearestAirports controller
     * @return Controllers\LocationNearestAirportsController The *Singleton* instance
     */
    public function getLocationNearestAirports()
    {
        return Controllers\LocationNearestAirportsController::getInstance();
    }
 
    /**
     * Singleton access to CruiseLine controller
     * @return Controllers\CruiseLineController The *Singleton* instance
     */
    public function getCruiseLine()
    {
        return Controllers\CruiseLineController::getInstance();
    }
 
    /**
     * Singleton access to ExternalMapping controller
     * @return Controllers\ExternalMappingController The *Singleton* instance
     */
    public function getExternalMapping()
    {
        return Controllers\ExternalMappingController::getInstance();
    }
 
    /**
     * Singleton access to CountryCurrencies controller
     * @return Controllers\CountryCurrenciesController The *Singleton* instance
     */
    public function getCountryCurrencies()
    {
        return Controllers\CountryCurrenciesController::getInstance();
    }
 
    /**
     * Singleton access to UserReviewInternalComment controller
     * @return Controllers\UserReviewInternalCommentController The *Singleton* instance
     */
    public function getUserReviewInternalComment()
    {
        return Controllers\UserReviewInternalCommentController::getInstance();
    }
 
    /**
     * Singleton access to Seoalias controller
     * @return Controllers\SeoaliasController The *Singleton* instance
     */
    public function getSeoalias()
    {
        return Controllers\SeoaliasController::getInstance();
    }
 
    /**
     * Singleton access to Accommodation controller
     * @return Controllers\AccommodationController The *Singleton* instance
     */
    public function getAccommodation()
    {
        return Controllers\AccommodationController::getInstance();
    }
 
    /**
     * Singleton access to Tripadvisor controller
     * @return Controllers\TripadvisorController The *Singleton* instance
     */
    public function getTripadvisor()
    {
        return Controllers\TripadvisorController::getInstance();
    }
}