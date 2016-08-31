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
class UserReviewController extends BaseController {

    /**
     * @var UserReviewController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return UserReviewController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Update instances of the model matched by where from the data source.
     * @param  string         $where     Optional parameter: Criteria to match model instances
     * @param  Models\UserReview $data      Optional parameter: An object of model property name/value pairs
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
        $_queryBuilder = $_queryBuilder.'/user-reviews/update';

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
     * @param  string         $id       Required parameter: PersistedModel id
     * @param  Models\UserReview $data     Optional parameter: An object of model property name/value pairs
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateUserReviewupdateAttributes (
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}';

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

        return $mapper->map($response->body, new Models\UserReview());
    }
        
    /**
     * Counts user-review-internal-comments of UserReview.
     * @param  string     $id        Required parameter: PersistedModel id
     * @param  string     $where     Optional parameter: Criteria to match model instances
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getUserReviewCountUserReviewInternalComments (
                $id,
                $where = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user-review-internal-comments/count';

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

        return $mapper->map($response->body, new Models\UserReviewCountUserReviewInternalCommentsResponse());
    }
        
    /**
     * Creates a new instance in user-review-internal-comments of this model.
     * @param  string                        $id       Required parameter: PersistedModel id
     * @param  Models\UserReviewInternalComment $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createUserReviewCreateUserReviewInternalComments (
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user-review-internal-comments';

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

        return $mapper->map($response->body, new Models\UserReviewInternalComment());
    }
        
    /**
     * Queries user-review-internal-comments of UserReview.
     * @param  string     $id         Required parameter: PersistedModel id
     * @param  string     $filter     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getUserReviewGetUserReviewInternalComments (
                $id,
                $filter = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user-review-internal-comments';

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

        return $mapper->mapArray($response->body, array(), new Models\UserReviewInternalComment());
    }
        
    /**
     * Delete a related item by id for user-review-internal-comments.
     * @param  string     $fk     Required parameter: Foreign key for user-review-internal-comments
     * @param  string     $id     Required parameter: PersistedModel id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteUserReviewDestroyByIdUserReviewInternalComments (
                $fk,
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user-review-internal-comments/{fk}';

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
     * Update a related item by id for user-review-internal-comments.
     * @param  string                        $fk       Required parameter: Foreign key for user-review-internal-comments
     * @param  string                        $id       Required parameter: PersistedModel id
     * @param  Models\UserReviewInternalComment $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateUserReviewUpdateByIdUserReviewInternalComments (
                $fk,
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user-review-internal-comments/{fk}';

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

        return $mapper->map($response->body, new Models\UserReviewInternalComment());
    }
        
    /**
     * Find a related item by id for user-review-internal-comments.
     * @param  string     $fk     Required parameter: Foreign key for user-review-internal-comments
     * @param  string     $id     Required parameter: PersistedModel id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getUserReviewFindByIdUserReviewInternalComments (
                $fk,
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user-review-internal-comments/{fk}';

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

        return $mapper->map($response->body, new Models\UserReviewInternalComment());
    }
        
    /**
     * Create a new instance of the model and persist it into the data source.
     * @param  Models\UserReview $data     Optional parameter: Model instance data
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function create (
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/';

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
     * Update an existing model instance or insert a new one into the data source.
     * @param  Models\UserReview $data     Optional parameter: Model instance data
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateUpsert (
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/';

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
        $_queryBuilder = $_queryBuilder.'/user-reviews/';

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
        $_queryBuilder = $_queryBuilder.'/user-reviews/count';

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
        $_queryBuilder = $_queryBuilder.'/user-reviews/findOne';

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

        return $mapper->map($response->body, new Models\UserReview());
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
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}';

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
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}';

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

        return $mapper->map($response->body, new Models\UserReview());
    }
        
    /**
     * Check whether a model instance exists in the data source.
     * @param  string     $id     Required parameter: Model id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getExistsGetUserReviewsIdExists (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/exists';

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

        return $mapper->map($response->body, new Models\ExistsGetUserReviewsIdExistsResponse());
    }
        
    /**
     * Deletes all user-review-internal-comments of this model.
     * @param  string     $id     Required parameter: PersistedModel id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteUserReviewDeleteUserReviewInternalComments (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user-review-internal-comments';

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
     * Deletes user of this model.
     * @param  string     $id     Required parameter: PersistedModel id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteUserReviewDestroyUser (
                $id) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user';

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
     * Creates a new instance in user of this model.
     * @param  string      $id       Required parameter: PersistedModel id
     * @param  Models\UserHwd $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createUserReviewCreateUser (
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user';

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

        return $mapper->map($response->body, new Models\UserHwd());
    }
        
    /**
     * Update user of this model.
     * @param  string      $id       Required parameter: PersistedModel id
     * @param  Models\UserHwd $data     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateUserReviewUpdateUser (
                $id,
                $data = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user';

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

        return $mapper->map($response->body, new Models\UserHwd());
    }
        
    /**
     * Fetches hasOne relation user.
     * @param  string     $id          Required parameter: PersistedModel id
     * @param  bool       $refresh     Optional parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getUserReviewGetUser (
                $id,
                $refresh = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/user-reviews/{id}/user';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'      => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'refresh' => var_export($refresh, true),
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

        return $mapper->map($response->body, new Models\UserHwd());
    }
        

}