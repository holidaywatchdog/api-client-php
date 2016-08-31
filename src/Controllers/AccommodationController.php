<?php
/*
 * HolidayWatchdogAPI
 *
 * This file was automatically generated for Holiday Watchdog by APIMATIC v2.0 ( https://apimatic.io ) on 08/31/2016
 */

namespace HolidayWatchdogAPILib\Controllers;

use HolidayWatchdogAPILib\APIException;
use HolidayWatchdogAPILib\APIHelper;
use HolidayWatchdogAPILib\Configuration;
use HolidayWatchdogAPILib\Models;
use HolidayWatchdogAPILib\Http\HttpRequest;
use HolidayWatchdogAPILib\Http\HttpResponse;
use HolidayWatchdogAPILib\Http\HttpMethod;
use HolidayWatchdogAPILib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class AccommodationController extends BaseController {

    /**
     * @var AccommodationController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return AccommodationController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Create a new instance of the model and persist it into the data source.
     * @param  Models\Accommodation $data     Optional parameter: Model instance data
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function create (
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\Accommodation());
    }
        
    /**
     * Update an existing model instance or insert a new one into the data source.
     * @param  Models\Accommodation $data     Optional parameter: Model instance data
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateUpsert (
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\Accommodation());
    }
        
    /**
     * Find all instances of the model matched by filter from the data source.
     * @param  string     $filter     Optional parameter: Filter defining fields, where, include, order, offset, and limit
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function find (
                $filter = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter' => $filter,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\Accommodation());
    }
        
    /**
     * Update instances of the model matched by where from the data source.
     * @param  string            $where     Optional parameter: Criteria to match model instances
     * @param  Models\Accommodation $data      Optional parameter: An object of model property name/value pairs
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateAll (
                $where = NULL,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/update';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'where' => $where,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Update attributes for a model instance and persist it into the data source.
     * @param  string            $id       Required parameter: PersistedModel id
     * @param  Models\Accommodation $data     Optional parameter: An object of model property name/value pairs
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateAccommodationupdateAttributes (
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'   => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\Accommodation());
    }
        
    /**
     * Counts user-reviews of Accommodation.
     * @param  string     $id        Required parameter: PersistedModel id
     * @param  string     $where     Optional parameter: Criteria to match model instances
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccommodationCountUserReviews (
                $id,
                $where = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-reviews/count';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'    => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'where' => $where,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\AccommodationCountUserReviewsResponse());
    }
        
    /**
     * Counts user-photo-albums of Accommodation.
     * @param  string     $id        Required parameter: PersistedModel id
     * @param  string     $where     Optional parameter: Criteria to match model instances
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccommodationCountUserPhotoAlbums (
                $id,
                $where = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-photo-albums/count';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'    => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'where' => $where,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\AccommodationCountUserPhotoAlbumsResponse());
    }
        
    /**
     * Creates a new instance in user-photo-albums of this model.
     * @param  string             $id       Required parameter: PersistedModel id
     * @param  Models\UserPhotoAlbum $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createAccommodationCreateUserPhotoAlbums (
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-photo-albums';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'   => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\UserPhotoAlbum());
    }
        
    /**
     * Counts commerce-mappings of Accommodation.
     * @param  string     $id        Required parameter: PersistedModel id
     * @param  string     $where     Optional parameter: Criteria to match model instances
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccommodationCountCommerceMappings (
                $id,
                $where = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/commerce-mappings/count';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'    => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'where' => $where,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\AccommodationCountCommerceMappingsResponse());
    }
        
    /**
     * Creates a new instance in commerce-mappings of this model.
     * @param  string              $id       Required parameter: PersistedModel id
     * @param  Models\ExternalMapping $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createAccommodationCreateCommerceMappings (
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/commerce-mappings';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'   => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\ExternalMapping());
    }
        
    /**
     * Delete a related item by id for user-reviews.
     * @param  string     $fk     Required parameter: Foreign key for user-reviews
     * @param  string     $id     Required parameter: PersistedModel id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAccommodationDestroyByIdUserReviews (
                $fk,
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-reviews/{fk}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'fk' => $fk,
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }
    }
        
    /**
     * Update a related item by id for user-reviews.
     * @param  string         $fk       Required parameter: Foreign key for user-reviews
     * @param  string         $id       Required parameter: PersistedModel id
     * @param  Models\UserReview $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateAccommodationUpdateByIdUserReviews (
                $fk,
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-reviews/{fk}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'fk'   => $fk,
            'id'   => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\UserReview());
    }
        
    /**
     * Find a related item by id for user-reviews.
     * @param  string     $fk     Required parameter: Foreign key for user-reviews
     * @param  string     $id     Required parameter: PersistedModel id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccommodationFindByIdUserReviews (
                $fk,
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-reviews/{fk}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'fk' => $fk,
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\UserReview());
    }
        
    /**
     * Delete a related item by id for user-photo-albums.
     * @param  string     $fk     Required parameter: Foreign key for user-photo-albums
     * @param  string     $id     Required parameter: PersistedModel id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAccommodationDestroyByIdUserPhotoAlbums (
                $fk,
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-photo-albums/{fk}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'fk' => $fk,
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }
    }
        
    /**
     * Update a related item by id for user-photo-albums.
     * @param  string             $fk       Required parameter: Foreign key for user-photo-albums
     * @param  string             $id       Required parameter: PersistedModel id
     * @param  Models\UserPhotoAlbum $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateAccommodationUpdateByIdUserPhotoAlbums (
                $fk,
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-photo-albums/{fk}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'fk'   => $fk,
            'id'   => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\UserPhotoAlbum());
    }
        
    /**
     * Find a related item by id for user-photo-albums.
     * @param  string     $fk     Required parameter: Foreign key for user-photo-albums
     * @param  string     $id     Required parameter: PersistedModel id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccommodationFindByIdUserPhotoAlbums (
                $fk,
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-photo-albums/{fk}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'fk' => $fk,
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\UserPhotoAlbum());
    }
        
    /**
     * @todo Add general description for this endpoint
     * @param  double     $startId      Required parameter: Example: 
     * @param  double     $endId        Required parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createBulkReindexSearch (
                $startId,
                $endId) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/reindex-search';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //prepare parameters
        $_parameters = array (
            'start_id' => $startId,
            'end_id'   => $endId
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * @todo Add general description for this endpoint
     * @param  double     $id         Required parameter: Example: 
     * @param  double     $radius     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getNearestAccommodations (
                $id,
                $radius = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/nearby-accommodations';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'     => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'radius' => $radius,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\Accommodation());
    }
        
    /**
     * @todo Add general description for this endpoint
     * @param  double     $id     Required parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPhotos (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/photos';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * @todo Add general description for this endpoint
     * @param  string     $ip         Required parameter: Example: 
     * @param  double     $radius     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getNearestAccommodationsByIP (
                $ip,
                $radius = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/nearest-by-ip-address';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'ip'     => $ip,
            'radius' => $radius,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\Accommodation());
    }
        
    /**
     * Delete a related item by id for commerce-mappings.
     * @param  string     $fk     Required parameter: Foreign key for commerce-mappings
     * @param  string     $id     Required parameter: PersistedModel id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAccommodationDestroyByIdCommerceMappings (
                $fk,
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/commerce-mappings/{fk}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'fk' => $fk,
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }
    }
        
    /**
     * @todo Add general description for this endpoint
     * @param  double     $id     Required parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getDetailedResponse (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/detailed';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Count instances of the model matched by where from the data source.
     * @param  string     $where     Optional parameter: Criteria to match model instances
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCount (
                $where = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/count';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'where' => $where,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\CountResponse());
    }
        
    /**
     * Find first instance of the model matched by filter from the data source.
     * @param  string     $filter     Optional parameter: Filter defining fields, where, include, order, offset, and limit
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function findOne (
                $filter = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/findOne';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter' => $filter,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\Accommodation());
    }
        
    /**
     * Delete a model instance by id from the data source.
     * @param  string     $id     Required parameter: Model id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteById (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Find a model instance by id from the data source.
     * @param  string     $id         Required parameter: Model id
     * @param  string     $filter     Optional parameter: Filter defining fields and include
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function findById (
                $id,
                $filter = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'     => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter' => $filter,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\Accommodation());
    }
        
    /**
     * Update a related item by id for commerce-mappings.
     * @param  string              $fk       Required parameter: Foreign key for commerce-mappings
     * @param  string              $id       Required parameter: PersistedModel id
     * @param  Models\ExternalMapping $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateAccommodationUpdateByIdCommerceMappings (
                $fk,
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/commerce-mappings/{fk}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'fk'   => $fk,
            'id'   => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\ExternalMapping());
    }
        
    /**
     * Check whether a model instance exists in the data source.
     * @param  string     $id     Required parameter: Model id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getExistsGetAccommodationsIdExists (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/exists';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\ExistsGetAccommodationsIdExistsResponse());
    }
        
    /**
     * Deletes all user-reviews of this model.
     * @param  string     $id     Required parameter: PersistedModel id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAccommodationDeleteUserReviews (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-reviews';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }
    }
        
    /**
     * Find a related item by id for commerce-mappings.
     * @param  string     $fk     Required parameter: Foreign key for commerce-mappings
     * @param  string     $id     Required parameter: PersistedModel id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccommodationFindByIdCommerceMappings (
                $fk,
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/commerce-mappings/{fk}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'fk' => $fk,
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\ExternalMapping());
    }
        
    /**
     * Creates a new instance in user-reviews of this model.
     * @param  string         $id       Required parameter: PersistedModel id
     * @param  Models\UserReview $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createAccommodationCreateUserReviews (
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-reviews';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'   => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($data));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\UserReview());
    }
        
    /**
     * Queries user-reviews of Accommodation.
     * @param  string     $id         Required parameter: PersistedModel id
     * @param  string     $filter     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccommodationGetUserReviews (
                $id,
                $filter = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-reviews';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'     => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter' => $filter,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\UserReview());
    }
        
    /**
     * Deletes all user-photo-albums of this model.
     * @param  string     $id     Required parameter: PersistedModel id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAccommodationDeleteUserPhotoAlbums (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-photo-albums';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }
    }
        
    /**
     * Queries user-photo-albums of Accommodation.
     * @param  string     $id         Required parameter: PersistedModel id
     * @param  string     $filter     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccommodationGetUserPhotoAlbums (
                $id,
                $filter = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/user-photo-albums';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'     => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter' => $filter,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\UserPhotoAlbum());
    }
        
    /**
     * Deletes all commerce-mappings of this model.
     * @param  string     $id     Required parameter: PersistedModel id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAccommodationDeleteCommerceMappings (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/commerce-mappings';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }
    }
        
    /**
     * Queries commerce-mappings of Accommodation.
     * @param  string     $id         Required parameter: PersistedModel id
     * @param  string     $filter     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccommodationGetCommerceMappings (
                $id,
                $filter = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/{id}/commerce-mappings';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'     => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter' => $filter,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\ExternalMapping());
    }
        
    /**
     * @todo Add general description for this endpoint
     * @param  string      $lat               Required parameter: Example: 
     * @param  string      $lon               Required parameter: Example: 
     * @param  double      $radius            Optional parameter: Example: 
     * @param  integer     $limit             Optional parameter: Number of results required
     * @param  integer     $ratingMin         Optional parameter: Example: 
     * @param  integer     $ratingMax         Optional parameter: Example: 
     * @param  integer     $starsMin          Optional parameter: Example: 
     * @param  integer     $starsMax          Optional parameter: Example: 
     * @param  integer     $avgPriceMin       Optional parameter: Example: 
     * @param  integer     $avgPriceMax       Optional parameter: Example: 
     * @param  integer     $metaNoIndex       Optional parameter: If you want to return non indexed hotels in the results. Set to 1 for yes
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getNearestAccommodationsByLatLon (
                $lat,
                $lon,
                $radius = NULL,
                $limit = NULL,
                $ratingMin = NULL,
                $ratingMax = NULL,
                $starsMin = NULL,
                $starsMax = NULL,
                $avgPriceMin = NULL,
                $avgPriceMax = NULL,
                $metaNoIndex = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accommodations/nearest-by-latlon';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'lat'           => $lat,
            'lon'           => $lon,
            'radius'        => $radius,
            'limit'         => $limit,
            'rating_min'    => $ratingMin,
            'rating_max'    => $ratingMax,
            'stars_min'     => $starsMin,
            'stars_max'     => $starsMax,
            'avg_price_min' => $avgPriceMin,
            'avg_price_max' => $avgPriceMax,
            'meta_no_index' => $metaNoIndex,
            'Authorization' => Configuration::$authorization,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'holidaywatchdog-api-client',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\Accommodation());
    }
        

}