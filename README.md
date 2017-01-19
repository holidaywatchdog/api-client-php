# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=HolidayWatchdogAPI-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the HolidayWatchdogAPI library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=HolidayWatchdogAPI-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=HolidayWatchdogAPI-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=HolidayWatchdogAPI-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=HolidayWatchdogAPI-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=HolidayWatchdogAPI-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=HolidayWatchdogAPI-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=HolidayWatchdogAPI-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=HolidayWatchdogAPI-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=HolidayWatchdogAPI-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=HolidayWatchdogAPI-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=HolidayWatchdogAPI-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=HolidayWatchdogAPI-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| authorization | Authorization Key |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$authorization = "ReplaceMe"; // Authorization Key

$client = new HolidayWatchdogAPIClient($authorization);
```

## Class Reference

### <a name="list_of_controllers"></a>List of Controllers

* [LocationController](#location_controller)
* [UserReviewController](#user_review_controller)
* [UserPhotoAlbumController](#user_photo_album_controller)
* [UserPhotoController](#user_photo_controller)
* [CruiseShipController](#cruise_ship_controller)
* [WarehousePagesController](#warehouse_pages_controller)
* [UserHwdController](#user_hwd_controller)
* [LocationNearestAirportsController](#location_nearest_airports_controller)
* [CruiseLineController](#cruise_line_controller)
* [ExternalMappingController](#external_mapping_controller)
* [CountryCurrenciesController](#country_currencies_controller)
* [UserReviewInternalCommentController](#user_review_internal_comment_controller)
* [SeoaliasController](#seoalias_controller)
* [AccommodationController](#accommodation_controller)
* [TripadvisorController](#tripadvisor_controller)

### <a name="location_controller"></a>![Class: ](https://apidocs.io/img/class.png ".LocationController") LocationController

#### Get singleton instance

The singleton instance of the ``` LocationController ``` class can be accessed from the API Client.

```php
$location = $client->getLocation();
```

#### <a name="get_location_find_by_id_location_nearest_airports"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.getLocationFindByIdLocationNearestAirports") getLocationFindByIdLocationNearestAirports

> Find a related item by id for location-nearest-airports.


```php
function getLocationFindByIdLocationNearestAirports(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for location-nearest-airports |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$result = $location->getLocationFindByIdLocationNearestAirports($fk, $id);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new Location();

$result = $location->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new Location();

$result = $location->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $location->find($filter);

```


#### <a name="get_location_with_path"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.getLocationWithPath") getLocationWithPath

> Returns array of locations that make up the path including the current location.


```php
function getLocationWithPath($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';

$result = $location->getLocationWithPath($id);

```


#### <a name="get_weather"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.getWeather") getWeather

> Returns latest weather information for this location.


```php
function getWeather($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';

$result = $location->getWeather($id);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $location->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $location->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $location->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $location->findById($id, $filter);

```


#### <a name="get_exists_get_locations_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.getExistsGetLocationsIdExists") getExistsGetLocationsIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetLocationsIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $location->getExistsGetLocationsIdExists($id);

```


#### <a name="delete_location_delete_location_nearest_airports"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.deleteLocationDeleteLocationNearestAirports") deleteLocationDeleteLocationNearestAirports

> Deletes all location-nearest-airports of this model.


```php
function deleteLocationDeleteLocationNearestAirports($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$location->deleteLocationDeleteLocationNearestAirports($id);

```


#### <a name="get_location_get_location_nearest_airports"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.getLocationGetLocationNearestAirports") getLocationGetLocationNearestAirports

> Queries location-nearest-airports of Location.


```php
function getLocationGetLocationNearestAirports(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| filter |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $location->getLocationGetLocationNearestAirports($id, $filter);

```


#### <a name="update_location_update_by_id_location_nearest_airports"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.updateLocationUpdateByIdLocationNearestAirports") updateLocationUpdateByIdLocationNearestAirports

> Update a related item by id for location-nearest-airports.


```php
function updateLocationUpdateByIdLocationNearestAirports(
        $fk,
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for location-nearest-airports |
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';
$data = new LocationNearestAirports();

$result = $location->updateLocationUpdateByIdLocationNearestAirports($fk, $id, $data);

```


#### <a name="delete_location_destroy_by_id_location_nearest_airports"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.deleteLocationDestroyByIdLocationNearestAirports") deleteLocationDestroyByIdLocationNearestAirports

> Delete a related item by id for location-nearest-airports.


```php
function deleteLocationDestroyByIdLocationNearestAirports(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for location-nearest-airports |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$location->deleteLocationDestroyByIdLocationNearestAirports($fk, $id);

```


#### <a name="create_location_create_location_nearest_airports"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.createLocationCreateLocationNearestAirports") createLocationCreateLocationNearestAirports

> Creates a new instance in location-nearest-airports of this model.


```php
function createLocationCreateLocationNearestAirports(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new LocationNearestAirports();

$result = $location->createLocationCreateLocationNearestAirports($id, $data);

```


#### <a name="get_location_count_location_nearest_airports"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.getLocationCountLocationNearestAirports") getLocationCountLocationNearestAirports

> Counts location-nearest-airports of Location.


```php
function getLocationCountLocationNearestAirports(
        $id,
        $where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$id = 'id';
$where = 'where';

$result = $location->getLocationCountLocationNearestAirports($id, $where);

```


#### <a name="update_locationupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.updateLocationupdateAttributes") updateLocationupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateLocationupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new Location();

$result = $location->updateLocationupdateAttributes($id, $data);

```


#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".LocationController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new Location();

$result = $location->updateAll($where, $data);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="user_review_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UserReviewController") UserReviewController

#### Get singleton instance

The singleton instance of the ``` UserReviewController ``` class can be accessed from the API Client.

```php
$userReview = $client->getUserReview();
```

#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new UserReview();

$result = $userReview->updateAll($where, $data);

```


#### <a name="update_user_reviewupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.updateUserReviewupdateAttributes") updateUserReviewupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateUserReviewupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new UserReview();

$result = $userReview->updateUserReviewupdateAttributes($id, $data);

```


#### <a name="get_user_review_count_user_review_internal_comments"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.getUserReviewCountUserReviewInternalComments") getUserReviewCountUserReviewInternalComments

> Counts user-review-internal-comments of UserReview.


```php
function getUserReviewCountUserReviewInternalComments(
        $id,
        $where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$id = 'id';
$where = 'where';

$result = $userReview->getUserReviewCountUserReviewInternalComments($id, $where);

```


#### <a name="create_user_review_create_user_review_internal_comments"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.createUserReviewCreateUserReviewInternalComments") createUserReviewCreateUserReviewInternalComments

> Creates a new instance in user-review-internal-comments of this model.


```php
function createUserReviewCreateUserReviewInternalComments(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new UserReviewInternalComment();

$result = $userReview->createUserReviewCreateUserReviewInternalComments($id, $data);

```


#### <a name="get_user_review_get_user_review_internal_comments"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.getUserReviewGetUserReviewInternalComments") getUserReviewGetUserReviewInternalComments

> Queries user-review-internal-comments of UserReview.


```php
function getUserReviewGetUserReviewInternalComments(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| filter |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $userReview->getUserReviewGetUserReviewInternalComments($id, $filter);

```


#### <a name="delete_user_review_destroy_by_id_user_review_internal_comments"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.deleteUserReviewDestroyByIdUserReviewInternalComments") deleteUserReviewDestroyByIdUserReviewInternalComments

> Delete a related item by id for user-review-internal-comments.


```php
function deleteUserReviewDestroyByIdUserReviewInternalComments(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-review-internal-comments |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$userReview->deleteUserReviewDestroyByIdUserReviewInternalComments($fk, $id);

```


#### <a name="update_user_review_update_by_id_user_review_internal_comments"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.updateUserReviewUpdateByIdUserReviewInternalComments") updateUserReviewUpdateByIdUserReviewInternalComments

> Update a related item by id for user-review-internal-comments.


```php
function updateUserReviewUpdateByIdUserReviewInternalComments(
        $fk,
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-review-internal-comments |
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';
$data = new UserReviewInternalComment();

$result = $userReview->updateUserReviewUpdateByIdUserReviewInternalComments($fk, $id, $data);

```


#### <a name="get_user_review_find_by_id_user_review_internal_comments"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.getUserReviewFindByIdUserReviewInternalComments") getUserReviewFindByIdUserReviewInternalComments

> Find a related item by id for user-review-internal-comments.


```php
function getUserReviewFindByIdUserReviewInternalComments(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-review-internal-comments |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$result = $userReview->getUserReviewFindByIdUserReviewInternalComments($fk, $id);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserReview();

$result = $userReview->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserReview();

$result = $userReview->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userReview->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $userReview->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userReview->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userReview->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $userReview->findById($id, $filter);

```


#### <a name="get_exists_get_user_reviews_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.getExistsGetUserReviewsIdExists") getExistsGetUserReviewsIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetUserReviewsIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userReview->getExistsGetUserReviewsIdExists($id);

```


#### <a name="delete_user_review_delete_user_review_internal_comments"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.deleteUserReviewDeleteUserReviewInternalComments") deleteUserReviewDeleteUserReviewInternalComments

> Deletes all user-review-internal-comments of this model.


```php
function deleteUserReviewDeleteUserReviewInternalComments($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$userReview->deleteUserReviewDeleteUserReviewInternalComments($id);

```


#### <a name="delete_user_review_destroy_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.deleteUserReviewDestroyUser") deleteUserReviewDestroyUser

> Deletes user of this model.


```php
function deleteUserReviewDestroyUser($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$userReview->deleteUserReviewDestroyUser($id);

```


#### <a name="create_user_review_create_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.createUserReviewCreateUser") createUserReviewCreateUser

> Creates a new instance in user of this model.


```php
function createUserReviewCreateUser(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new UserHwd();

$result = $userReview->createUserReviewCreateUser($id, $data);

```


#### <a name="update_user_review_update_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.updateUserReviewUpdateUser") updateUserReviewUpdateUser

> Update user of this model.


```php
function updateUserReviewUpdateUser(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new UserHwd();

$result = $userReview->updateUserReviewUpdateUser($id, $data);

```


#### <a name="get_user_review_get_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewController.getUserReviewGetUser") getUserReviewGetUser

> Fetches hasOne relation user.


```php
function getUserReviewGetUser(
        $id,
        $refresh = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| refresh |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$refresh = true;

$result = $userReview->getUserReviewGetUser($id, $refresh);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="user_photo_album_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UserPhotoAlbumController") UserPhotoAlbumController

#### Get singleton instance

The singleton instance of the ``` UserPhotoAlbumController ``` class can be accessed from the API Client.

```php
$userPhotoAlbum = $client->getUserPhotoAlbum();
```

#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new UserPhotoAlbum();

$result = $userPhotoAlbum->updateAll($where, $data);

```


#### <a name="update_user_photo_albumupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.updateUserPhotoAlbumupdateAttributes") updateUserPhotoAlbumupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateUserPhotoAlbumupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new UserPhotoAlbum();

$result = $userPhotoAlbum->updateUserPhotoAlbumupdateAttributes($id, $data);

```


#### <a name="get_user_photo_album_count_user_photos"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.getUserPhotoAlbumCountUserPhotos") getUserPhotoAlbumCountUserPhotos

> Counts user-photos of UserPhotoAlbum.


```php
function getUserPhotoAlbumCountUserPhotos(
        $id,
        $where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$id = 'id';
$where = 'where';

$result = $userPhotoAlbum->getUserPhotoAlbumCountUserPhotos($id, $where);

```


#### <a name="delete_user_photo_album_destroy_by_id_user_photos"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.deleteUserPhotoAlbumDestroyByIdUserPhotos") deleteUserPhotoAlbumDestroyByIdUserPhotos

> Delete a related item by id for user-photos.


```php
function deleteUserPhotoAlbumDestroyByIdUserPhotos(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-photos |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$userPhotoAlbum->deleteUserPhotoAlbumDestroyByIdUserPhotos($fk, $id);

```


#### <a name="update_user_photo_album_update_by_id_user_photos"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.updateUserPhotoAlbumUpdateByIdUserPhotos") updateUserPhotoAlbumUpdateByIdUserPhotos

> Update a related item by id for user-photos.


```php
function updateUserPhotoAlbumUpdateByIdUserPhotos(
        $fk,
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-photos |
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';
$data = new UserPhoto();

$result = $userPhotoAlbum->updateUserPhotoAlbumUpdateByIdUserPhotos($fk, $id, $data);

```


#### <a name="get_user_photo_album_find_by_id_user_photos"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.getUserPhotoAlbumFindByIdUserPhotos") getUserPhotoAlbumFindByIdUserPhotos

> Find a related item by id for user-photos.


```php
function getUserPhotoAlbumFindByIdUserPhotos(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-photos |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$result = $userPhotoAlbum->getUserPhotoAlbumFindByIdUserPhotos($fk, $id);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserPhotoAlbum();

$result = $userPhotoAlbum->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserPhotoAlbum();

$result = $userPhotoAlbum->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userPhotoAlbum->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $userPhotoAlbum->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userPhotoAlbum->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userPhotoAlbum->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $userPhotoAlbum->findById($id, $filter);

```


#### <a name="get_exists_get_user_photo_albums_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.getExistsGetUserPhotoAlbumsIdExists") getExistsGetUserPhotoAlbumsIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetUserPhotoAlbumsIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userPhotoAlbum->getExistsGetUserPhotoAlbumsIdExists($id);

```


#### <a name="delete_user_photo_album_delete_user_photos"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.deleteUserPhotoAlbumDeleteUserPhotos") deleteUserPhotoAlbumDeleteUserPhotos

> Deletes all user-photos of this model.


```php
function deleteUserPhotoAlbumDeleteUserPhotos($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$userPhotoAlbum->deleteUserPhotoAlbumDeleteUserPhotos($id);

```


#### <a name="create_user_photo_album_create_user_photos"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.createUserPhotoAlbumCreateUserPhotos") createUserPhotoAlbumCreateUserPhotos

> Creates a new instance in user-photos of this model.


```php
function createUserPhotoAlbumCreateUserPhotos(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new UserPhoto();

$result = $userPhotoAlbum->createUserPhotoAlbumCreateUserPhotos($id, $data);

```


#### <a name="get_user_photo_album_get_user_photos"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoAlbumController.getUserPhotoAlbumGetUserPhotos") getUserPhotoAlbumGetUserPhotos

> Queries user-photos of UserPhotoAlbum.


```php
function getUserPhotoAlbumGetUserPhotos(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| filter |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $userPhotoAlbum->getUserPhotoAlbumGetUserPhotos($id, $filter);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="user_photo_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UserPhotoController") UserPhotoController

#### Get singleton instance

The singleton instance of the ``` UserPhotoController ``` class can be accessed from the API Client.

```php
$userPhoto = $client->getUserPhoto();
```

#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new UserPhoto();

$result = $userPhoto->updateAll($where, $data);

```


#### <a name="update_user_photoupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.updateUserPhotoupdateAttributes") updateUserPhotoupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateUserPhotoupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new UserPhoto();

$result = $userPhoto->updateUserPhotoupdateAttributes($id, $data);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserPhoto();

$result = $userPhoto->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserPhoto();

$result = $userPhoto->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userPhoto->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $userPhoto->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userPhoto->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userPhoto->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $userPhoto->findById($id, $filter);

```


#### <a name="get_exists_get_user_photos_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.getExistsGetUserPhotosIdExists") getExistsGetUserPhotosIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetUserPhotosIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userPhoto->getExistsGetUserPhotosIdExists($id);

```


#### <a name="get_user_photo_get_user_photo_album"></a>![Method: ](https://apidocs.io/img/method.png ".UserPhotoController.getUserPhotoGetUserPhotoAlbum") getUserPhotoGetUserPhotoAlbum

> Fetches belongsTo relation user-photo-album.


```php
function getUserPhotoGetUserPhotoAlbum(
        $id,
        $refresh = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| refresh |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$refresh = true;

$result = $userPhoto->getUserPhotoGetUserPhotoAlbum($id, $refresh);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="cruise_ship_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CruiseShipController") CruiseShipController

#### Get singleton instance

The singleton instance of the ``` CruiseShipController ``` class can be accessed from the API Client.

```php
$cruiseShip = $client->getCruiseShip();
```

#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new CruiseShip();

$result = $cruiseShip->updateAll($where, $data);

```


#### <a name="update_cruise_shipupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.updateCruiseShipupdateAttributes") updateCruiseShipupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateCruiseShipupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new CruiseShip();

$result = $cruiseShip->updateCruiseShipupdateAttributes($id, $data);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new CruiseShip();

$result = $cruiseShip->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new CruiseShip();

$result = $cruiseShip->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $cruiseShip->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $cruiseShip->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $cruiseShip->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $cruiseShip->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $cruiseShip->findById($id, $filter);

```


#### <a name="get_exists_get_cruise_ships_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.getExistsGetCruiseShipsIdExists") getExistsGetCruiseShipsIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetCruiseShipsIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $cruiseShip->getExistsGetCruiseShipsIdExists($id);

```


#### <a name="delete_cruise_ship_destroy_cruise_lines"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.deleteCruiseShipDestroyCruiseLines") deleteCruiseShipDestroyCruiseLines

> Deletes cruise-lines of this model.


```php
function deleteCruiseShipDestroyCruiseLines($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$cruiseShip->deleteCruiseShipDestroyCruiseLines($id);

```


#### <a name="create_cruise_ship_create_cruise_lines"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.createCruiseShipCreateCruiseLines") createCruiseShipCreateCruiseLines

> Creates a new instance in cruise-lines of this model.


```php
function createCruiseShipCreateCruiseLines(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new CruiseLine();

$result = $cruiseShip->createCruiseShipCreateCruiseLines($id, $data);

```


#### <a name="update_cruise_ship_update_cruise_lines"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.updateCruiseShipUpdateCruiseLines") updateCruiseShipUpdateCruiseLines

> Update cruise-lines of this model.


```php
function updateCruiseShipUpdateCruiseLines(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new CruiseLine();

$result = $cruiseShip->updateCruiseShipUpdateCruiseLines($id, $data);

```


#### <a name="get_cruise_ship_get_cruise_lines"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseShipController.getCruiseShipGetCruiseLines") getCruiseShipGetCruiseLines

> Fetches hasOne relation cruise-lines.


```php
function getCruiseShipGetCruiseLines(
        $id,
        $refresh = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| refresh |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$refresh = true;

$result = $cruiseShip->getCruiseShipGetCruiseLines($id, $refresh);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="warehouse_pages_controller"></a>![Class: ](https://apidocs.io/img/class.png ".WarehousePagesController") WarehousePagesController

#### Get singleton instance

The singleton instance of the ``` WarehousePagesController ``` class can be accessed from the API Client.

```php
$warehousePages = $client->getWarehousePages();
```

#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".WarehousePagesController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $warehousePages->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".WarehousePagesController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $warehousePages->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".WarehousePagesController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $warehousePages->findOne($filter);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".WarehousePagesController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $warehousePages->findById($id, $filter);

```


#### <a name="get_exists_get_warehouse_pages_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".WarehousePagesController.getExistsGetWarehousePagesIdExists") getExistsGetWarehousePagesIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetWarehousePagesIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $warehousePages->getExistsGetWarehousePagesIdExists($id);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="user_hwd_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UserHwdController") UserHwdController

#### Get singleton instance

The singleton instance of the ``` UserHwdController ``` class can be accessed from the API Client.

```php
$userHwd = $client->getUserHwd();
```

#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserHwd();

$result = $userHwd->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserHwd();

$result = $userHwd->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userHwd->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $userHwd->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userHwd->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userHwd->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $userHwd->findById($id, $filter);

```


#### <a name="get_exists_get_user_hwds_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.getExistsGetUserHwdsIdExists") getExistsGetUserHwdsIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetUserHwdsIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userHwd->getExistsGetUserHwdsIdExists($id);

```


#### <a name="delete_user_hwd_delete_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.deleteUserHwdDeleteUserPhotoAlbums") deleteUserHwdDeleteUserPhotoAlbums

> Deletes all user-photo-albums of this model.


```php
function deleteUserHwdDeleteUserPhotoAlbums($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$userHwd->deleteUserHwdDeleteUserPhotoAlbums($id);

```


#### <a name="create_user_hwd_create_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.createUserHwdCreateUserPhotoAlbums") createUserHwdCreateUserPhotoAlbums

> Creates a new instance in user-photo-albums of this model.


```php
function createUserHwdCreateUserPhotoAlbums(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new UserPhotoAlbum();

$result = $userHwd->createUserHwdCreateUserPhotoAlbums($id, $data);

```


#### <a name="get_user_hwd_get_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.getUserHwdGetUserPhotoAlbums") getUserHwdGetUserPhotoAlbums

> Queries user-photo-albums of UserHwd.


```php
function getUserHwdGetUserPhotoAlbums(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| filter |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $userHwd->getUserHwdGetUserPhotoAlbums($id, $filter);

```


#### <a name="delete_user_hwd_delete_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.deleteUserHwdDeleteUserReviews") deleteUserHwdDeleteUserReviews

> Deletes all user-reviews of this model.


```php
function deleteUserHwdDeleteUserReviews($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$userHwd->deleteUserHwdDeleteUserReviews($id);

```


#### <a name="create_user_hwd_create_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.createUserHwdCreateUserReviews") createUserHwdCreateUserReviews

> Creates a new instance in user-reviews of this model.


```php
function createUserHwdCreateUserReviews(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new UserReview();

$result = $userHwd->createUserHwdCreateUserReviews($id, $data);

```


#### <a name="get_user_hwd_get_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.getUserHwdGetUserReviews") getUserHwdGetUserReviews

> Queries user-reviews of UserHwd.


```php
function getUserHwdGetUserReviews(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| filter |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $userHwd->getUserHwdGetUserReviews($id, $filter);

```


#### <a name="delete_user_hwd_destroy_by_id_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.deleteUserHwdDestroyByIdUserReviews") deleteUserHwdDestroyByIdUserReviews

> Delete a related item by id for user-reviews.


```php
function deleteUserHwdDestroyByIdUserReviews(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-reviews |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$userHwd->deleteUserHwdDestroyByIdUserReviews($fk, $id);

```


#### <a name="get_user_hwd_find_by_id_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.getUserHwdFindByIdUserReviews") getUserHwdFindByIdUserReviews

> Find a related item by id for user-reviews.


```php
function getUserHwdFindByIdUserReviews(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-reviews |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$result = $userHwd->getUserHwdFindByIdUserReviews($fk, $id);

```


#### <a name="update_user_hwd_update_by_id_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.updateUserHwdUpdateByIdUserReviews") updateUserHwdUpdateByIdUserReviews

> Update a related item by id for user-reviews.


```php
function updateUserHwdUpdateByIdUserReviews(
        $fk,
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-reviews |
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';
$data = new UserReview();

$result = $userHwd->updateUserHwdUpdateByIdUserReviews($fk, $id, $data);

```


#### <a name="get_user_hwd_find_by_id_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.getUserHwdFindByIdUserPhotoAlbums") getUserHwdFindByIdUserPhotoAlbums

> Find a related item by id for user-photo-albums.


```php
function getUserHwdFindByIdUserPhotoAlbums(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-photo-albums |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$result = $userHwd->getUserHwdFindByIdUserPhotoAlbums($fk, $id);

```


#### <a name="update_user_hwd_update_by_id_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.updateUserHwdUpdateByIdUserPhotoAlbums") updateUserHwdUpdateByIdUserPhotoAlbums

> Update a related item by id for user-photo-albums.


```php
function updateUserHwdUpdateByIdUserPhotoAlbums(
        $fk,
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-photo-albums |
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';
$data = new UserPhotoAlbum();

$result = $userHwd->updateUserHwdUpdateByIdUserPhotoAlbums($fk, $id, $data);

```


#### <a name="delete_user_hwd_destroy_by_id_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.deleteUserHwdDestroyByIdUserPhotoAlbums") deleteUserHwdDestroyByIdUserPhotoAlbums

> Delete a related item by id for user-photo-albums.


```php
function deleteUserHwdDestroyByIdUserPhotoAlbums(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-photo-albums |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$userHwd->deleteUserHwdDestroyByIdUserPhotoAlbums($fk, $id);

```


#### <a name="get_user_hwd_count_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.getUserHwdCountUserReviews") getUserHwdCountUserReviews

> Counts user-reviews of UserHwd.


```php
function getUserHwdCountUserReviews(
        $id,
        $where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$id = 'id';
$where = 'where';

$result = $userHwd->getUserHwdCountUserReviews($id, $where);

```


#### <a name="get_user_hwd_count_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.getUserHwdCountUserPhotoAlbums") getUserHwdCountUserPhotoAlbums

> Counts user-photo-albums of UserHwd.


```php
function getUserHwdCountUserPhotoAlbums(
        $id,
        $where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$id = 'id';
$where = 'where';

$result = $userHwd->getUserHwdCountUserPhotoAlbums($id, $where);

```


#### <a name="update_user_hwdupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.updateUserHwdupdateAttributes") updateUserHwdupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateUserHwdupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new UserHwd();

$result = $userHwd->updateUserHwdupdateAttributes($id, $data);

```


#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".UserHwdController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new UserHwd();

$result = $userHwd->updateAll($where, $data);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="location_nearest_airports_controller"></a>![Class: ](https://apidocs.io/img/class.png ".LocationNearestAirportsController") LocationNearestAirportsController

#### Get singleton instance

The singleton instance of the ``` LocationNearestAirportsController ``` class can be accessed from the API Client.

```php
$locationNearestAirports = $client->getLocationNearestAirports();
```

#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new LocationNearestAirports();

$result = $locationNearestAirports->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new LocationNearestAirports();

$result = $locationNearestAirports->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $locationNearestAirports->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $locationNearestAirports->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $locationNearestAirports->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $locationNearestAirports->deleteById($id);

```


#### <a name="get_exists_get_location_nearest_airports_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.getExistsGetLocationNearestAirportsIdExists") getExistsGetLocationNearestAirportsIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetLocationNearestAirportsIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $locationNearestAirports->getExistsGetLocationNearestAirportsIdExists($id);

```


#### <a name="get_location_nearest_airports_get_location"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.getLocationNearestAirportsGetLocation") getLocationNearestAirportsGetLocation

> Fetches belongsTo relation location.


```php
function getLocationNearestAirportsGetLocation(
        $id,
        $refresh = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| refresh |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$refresh = false;

$result = $locationNearestAirports->getLocationNearestAirportsGetLocation($id, $refresh);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $locationNearestAirports->findById($id, $filter);

```


#### <a name="update_location_nearest_airportsupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.updateLocationNearestAirportsupdateAttributes") updateLocationNearestAirportsupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateLocationNearestAirportsupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new LocationNearestAirports();

$result = $locationNearestAirports->updateLocationNearestAirportsupdateAttributes($id, $data);

```


#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new LocationNearestAirports();

$result = $locationNearestAirports->updateAll($where, $data);

```


#### <a name="search"></a>![Method: ](https://apidocs.io/img/method.png ".LocationNearestAirportsController.search") search

> Find nearest airport. Based on mapping table, then falls back on upper geos then to distance


```php
function search($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Location Id |



#### Example Usage

```php
$id = 'id';

$result = $locationNearestAirports->search($id);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="cruise_line_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CruiseLineController") CruiseLineController

#### Get singleton instance

The singleton instance of the ``` CruiseLineController ``` class can be accessed from the API Client.

```php
$cruiseLine = $client->getCruiseLine();
```

#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new CruiseLine();

$result = $cruiseLine->updateAll($where, $data);

```


#### <a name="update_cruise_lineupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.updateCruiseLineupdateAttributes") updateCruiseLineupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateCruiseLineupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new CruiseLine();

$result = $cruiseLine->updateCruiseLineupdateAttributes($id, $data);

```


#### <a name="get_cruise_line_count_cruise_ships"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.getCruiseLineCountCruiseShips") getCruiseLineCountCruiseShips

> Counts cruise-ships of CruiseLine.


```php
function getCruiseLineCountCruiseShips(
        $id,
        $where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$id = 'id';
$where = 'where';

$result = $cruiseLine->getCruiseLineCountCruiseShips($id, $where);

```


#### <a name="update_cruise_line_update_by_id_cruise_ships"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.updateCruiseLineUpdateByIdCruiseShips") updateCruiseLineUpdateByIdCruiseShips

> Update a related item by id for cruise-ships.


```php
function updateCruiseLineUpdateByIdCruiseShips(
        $fk,
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for cruise-ships |
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';
$data = new CruiseShip();

$result = $cruiseLine->updateCruiseLineUpdateByIdCruiseShips($fk, $id, $data);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new CruiseLine();

$result = $cruiseLine->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new CruiseLine();

$result = $cruiseLine->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $cruiseLine->find($filter);

```


#### <a name="delete_cruise_line_delete_cruise_ships"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.deleteCruiseLineDeleteCruiseShips") deleteCruiseLineDeleteCruiseShips

> Deletes all cruise-ships of this model.


```php
function deleteCruiseLineDeleteCruiseShips($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$cruiseLine->deleteCruiseLineDeleteCruiseShips($id);

```


#### <a name="create_cruise_line_create_cruise_ships"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.createCruiseLineCreateCruiseShips") createCruiseLineCreateCruiseShips

> Creates a new instance in cruise-ships of this model.


```php
function createCruiseLineCreateCruiseShips(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new CruiseShip();

$result = $cruiseLine->createCruiseLineCreateCruiseShips($id, $data);

```


#### <a name="get_cruise_line_get_cruise_ships"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.getCruiseLineGetCruiseShips") getCruiseLineGetCruiseShips

> Queries cruise-ships of CruiseLine.


```php
function getCruiseLineGetCruiseShips(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| filter |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $cruiseLine->getCruiseLineGetCruiseShips($id, $filter);

```


#### <a name="delete_cruise_line_destroy_by_id_cruise_ships"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.deleteCruiseLineDestroyByIdCruiseShips") deleteCruiseLineDestroyByIdCruiseShips

> Delete a related item by id for cruise-ships.


```php
function deleteCruiseLineDestroyByIdCruiseShips(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for cruise-ships |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$cruiseLine->deleteCruiseLineDestroyByIdCruiseShips($fk, $id);

```


#### <a name="get_cruise_line_find_by_id_cruise_ships"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.getCruiseLineFindByIdCruiseShips") getCruiseLineFindByIdCruiseShips

> Find a related item by id for cruise-ships.


```php
function getCruiseLineFindByIdCruiseShips(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for cruise-ships |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$result = $cruiseLine->getCruiseLineFindByIdCruiseShips($fk, $id);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $cruiseLine->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $cruiseLine->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $cruiseLine->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $cruiseLine->findById($id, $filter);

```


#### <a name="get_exists_get_cruise_lines_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".CruiseLineController.getExistsGetCruiseLinesIdExists") getExistsGetCruiseLinesIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetCruiseLinesIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $cruiseLine->getExistsGetCruiseLinesIdExists($id);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="external_mapping_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ExternalMappingController") ExternalMappingController

#### Get singleton instance

The singleton instance of the ``` ExternalMappingController ``` class can be accessed from the API Client.

```php
$externalMapping = $client->getExternalMapping();
```

#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new ExternalMapping();

$result = $externalMapping->updateAll($where, $data);

```


#### <a name="update_external_mappingupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.updateExternalMappingupdateAttributes") updateExternalMappingupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateExternalMappingupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new ExternalMapping();

$result = $externalMapping->updateExternalMappingupdateAttributes($id, $data);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new ExternalMapping();

$result = $externalMapping->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new ExternalMapping();

$result = $externalMapping->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $externalMapping->find($filter);

```


#### <a name="get_location_mapping"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.getLocationMapping") getLocationMapping

> TODO: Add a method description


```php
function getLocationMapping($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 39.6789682980995;

$result = $externalMapping->getLocationMapping($id);

```


#### <a name="get_accommodation_mapping"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.getAccommodationMapping") getAccommodationMapping

> TODO: Add a method description


```php
function getAccommodationMapping($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 39.6789682980995;

$result = $externalMapping->getAccommodationMapping($id);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $externalMapping->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $externalMapping->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $externalMapping->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $externalMapping->findById($id, $filter);

```


#### <a name="get_exists_get_external_mappings_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".ExternalMappingController.getExistsGetExternalMappingsIdExists") getExistsGetExternalMappingsIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetExternalMappingsIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $externalMapping->getExistsGetExternalMappingsIdExists($id);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="country_currencies_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CountryCurrenciesController") CountryCurrenciesController

#### Get singleton instance

The singleton instance of the ``` CountryCurrenciesController ``` class can be accessed from the API Client.

```php
$countryCurrencies = $client->getCountryCurrencies();
```

#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new CountryCurrencies();

$result = $countryCurrencies->updateAll($where, $data);

```


#### <a name="update_country_currenciesupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.updateCountryCurrenciesupdateAttributes") updateCountryCurrenciesupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateCountryCurrenciesupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new CountryCurrencies();

$result = $countryCurrencies->updateCountryCurrenciesupdateAttributes($id, $data);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new CountryCurrencies();

$result = $countryCurrencies->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new CountryCurrencies();

$result = $countryCurrencies->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $countryCurrencies->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $countryCurrencies->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $countryCurrencies->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $countryCurrencies->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $countryCurrencies->findById($id, $filter);

```


#### <a name="get_exists_get_country_currencies_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".CountryCurrenciesController.getExistsGetCountryCurrenciesIdExists") getExistsGetCountryCurrenciesIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetCountryCurrenciesIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $countryCurrencies->getExistsGetCountryCurrenciesIdExists($id);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="user_review_internal_comment_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UserReviewInternalCommentController") UserReviewInternalCommentController

#### Get singleton instance

The singleton instance of the ``` UserReviewInternalCommentController ``` class can be accessed from the API Client.

```php
$userReviewInternalComment = $client->getUserReviewInternalComment();
```

#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new UserReviewInternalComment();

$result = $userReviewInternalComment->updateAll($where, $data);

```


#### <a name="update_user_review_internal_commentupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.updateUserReviewInternalCommentupdateAttributes") updateUserReviewInternalCommentupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateUserReviewInternalCommentupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new UserReviewInternalComment();

$result = $userReviewInternalComment->updateUserReviewInternalCommentupdateAttributes($id, $data);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $userReviewInternalComment->findById($id, $filter);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserReviewInternalComment();

$result = $userReviewInternalComment->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new UserReviewInternalComment();

$result = $userReviewInternalComment->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userReviewInternalComment->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $userReviewInternalComment->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $userReviewInternalComment->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userReviewInternalComment->deleteById($id);

```


#### <a name="get_exists_get_user_review_internal_comments_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".UserReviewInternalCommentController.getExistsGetUserReviewInternalCommentsIdExists") getExistsGetUserReviewInternalCommentsIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetUserReviewInternalCommentsIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $userReviewInternalComment->getExistsGetUserReviewInternalCommentsIdExists($id);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="seoalias_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SeoaliasController") SeoaliasController

#### Get singleton instance

The singleton instance of the ``` SeoaliasController ``` class can be accessed from the API Client.

```php
$seoalias = $client->getSeoalias();
```

#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new Seoalias();

$result = $seoalias->updateAll($where, $data);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new Seoalias();

$result = $seoalias->create($data);

```


#### <a name="update_seoaliasupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.updateSeoaliasupdateAttributes") updateSeoaliasupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateSeoaliasupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new Seoalias();

$result = $seoalias->updateSeoaliasupdateAttributes($id, $data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new Seoalias();

$result = $seoalias->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $seoalias->find($filter);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $seoalias->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $seoalias->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $seoalias->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $seoalias->findById($id, $filter);

```


#### <a name="get_exists_get_seoaliases_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".SeoaliasController.getExistsGetSeoaliasesIdExists") getExistsGetSeoaliasesIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetSeoaliasesIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $seoalias->getExistsGetSeoaliasesIdExists($id);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="accommodation_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AccommodationController") AccommodationController

#### Get singleton instance

The singleton instance of the ``` AccommodationController ``` class can be accessed from the API Client.

```php
$accommodation = $client->getAccommodation();
```

#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.create") create

> Create a new instance of the model and persist it into the data source.


```php
function create($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new Accommodation();

$result = $accommodation->create($data);

```


#### <a name="update_upsert"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.updateUpsert") updateUpsert

> Update an existing model instance or insert a new one into the data source.


```php
function updateUpsert($data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| data |  ``` Optional ```  | Model instance data |



#### Example Usage

```php
$data = new Accommodation();

$result = $accommodation->updateUpsert($data);

```


#### <a name="find"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.find") find

> Find all instances of the model matched by filter from the data source.


```php
function find($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $accommodation->find($filter);

```


#### <a name="update_all"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.updateAll") updateAll

> Update instances of the model matched by where from the data source.


```php
function updateAll(
        $where = NULL,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$where = 'where';
$data = new Accommodation();

$result = $accommodation->updateAll($where, $data);

```


#### <a name="update_accommodationupdate_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.updateAccommodationupdateAttributes") updateAccommodationupdateAttributes

> Update attributes for a model instance and persist it into the data source.


```php
function updateAccommodationupdateAttributes(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | An object of model property name/value pairs |



#### Example Usage

```php
$id = 'id';
$data = new Accommodation();

$result = $accommodation->updateAccommodationupdateAttributes($id, $data);

```


#### <a name="get_accommodation_count_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccommodationCountUserReviews") getAccommodationCountUserReviews

> Counts user-reviews of Accommodation.


```php
function getAccommodationCountUserReviews(
        $id,
        $where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$id = 'id';
$where = 'where';

$result = $accommodation->getAccommodationCountUserReviews($id, $where);

```


#### <a name="get_accommodation_count_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccommodationCountUserPhotoAlbums") getAccommodationCountUserPhotoAlbums

> Counts user-photo-albums of Accommodation.


```php
function getAccommodationCountUserPhotoAlbums(
        $id,
        $where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$id = 'id';
$where = 'where';

$result = $accommodation->getAccommodationCountUserPhotoAlbums($id, $where);

```


#### <a name="create_accommodation_create_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.createAccommodationCreateUserPhotoAlbums") createAccommodationCreateUserPhotoAlbums

> Creates a new instance in user-photo-albums of this model.


```php
function createAccommodationCreateUserPhotoAlbums(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new UserPhotoAlbum();

$result = $accommodation->createAccommodationCreateUserPhotoAlbums($id, $data);

```


#### <a name="get_accommodation_count_commerce_mappings"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccommodationCountCommerceMappings") getAccommodationCountCommerceMappings

> Counts commerce-mappings of Accommodation.


```php
function getAccommodationCountCommerceMappings(
        $id,
        $where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$id = 'id';
$where = 'where';

$result = $accommodation->getAccommodationCountCommerceMappings($id, $where);

```


#### <a name="create_accommodation_create_commerce_mappings"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.createAccommodationCreateCommerceMappings") createAccommodationCreateCommerceMappings

> Creates a new instance in commerce-mappings of this model.


```php
function createAccommodationCreateCommerceMappings(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new ExternalMapping();

$result = $accommodation->createAccommodationCreateCommerceMappings($id, $data);

```


#### <a name="delete_accommodation_destroy_by_id_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.deleteAccommodationDestroyByIdUserReviews") deleteAccommodationDestroyByIdUserReviews

> Delete a related item by id for user-reviews.


```php
function deleteAccommodationDestroyByIdUserReviews(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-reviews |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$accommodation->deleteAccommodationDestroyByIdUserReviews($fk, $id);

```


#### <a name="update_accommodation_update_by_id_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.updateAccommodationUpdateByIdUserReviews") updateAccommodationUpdateByIdUserReviews

> Update a related item by id for user-reviews.


```php
function updateAccommodationUpdateByIdUserReviews(
        $fk,
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-reviews |
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';
$data = new UserReview();

$result = $accommodation->updateAccommodationUpdateByIdUserReviews($fk, $id, $data);

```


#### <a name="get_accommodation_find_by_id_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccommodationFindByIdUserReviews") getAccommodationFindByIdUserReviews

> Find a related item by id for user-reviews.


```php
function getAccommodationFindByIdUserReviews(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-reviews |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$result = $accommodation->getAccommodationFindByIdUserReviews($fk, $id);

```


#### <a name="delete_accommodation_destroy_by_id_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.deleteAccommodationDestroyByIdUserPhotoAlbums") deleteAccommodationDestroyByIdUserPhotoAlbums

> Delete a related item by id for user-photo-albums.


```php
function deleteAccommodationDestroyByIdUserPhotoAlbums(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-photo-albums |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$accommodation->deleteAccommodationDestroyByIdUserPhotoAlbums($fk, $id);

```


#### <a name="update_accommodation_update_by_id_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.updateAccommodationUpdateByIdUserPhotoAlbums") updateAccommodationUpdateByIdUserPhotoAlbums

> Update a related item by id for user-photo-albums.


```php
function updateAccommodationUpdateByIdUserPhotoAlbums(
        $fk,
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-photo-albums |
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';
$data = new UserPhotoAlbum();

$result = $accommodation->updateAccommodationUpdateByIdUserPhotoAlbums($fk, $id, $data);

```


#### <a name="get_accommodation_find_by_id_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccommodationFindByIdUserPhotoAlbums") getAccommodationFindByIdUserPhotoAlbums

> Find a related item by id for user-photo-albums.


```php
function getAccommodationFindByIdUserPhotoAlbums(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for user-photo-albums |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$result = $accommodation->getAccommodationFindByIdUserPhotoAlbums($fk, $id);

```


#### <a name="create_bulk_reindex_search"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.createBulkReindexSearch") createBulkReindexSearch

> TODO: Add a method description


```php
function createBulkReindexSearch(
        $startId,
        $endId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| startId |  ``` Required ```  | TODO: Add a parameter description |
| endId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$startId = 89.4510769631951;
$endId = 89.4510769631951;

$result = $accommodation->createBulkReindexSearch($startId, $endId);

```


#### <a name="get_nearest_accommodations"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getNearestAccommodations") getNearestAccommodations

> TODO: Add a method description


```php
function getNearestAccommodations(
        $id,
        $radius = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |
| radius |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 89.4510769631951;
$radius = 89.4510769631951;

$result = $accommodation->getNearestAccommodations($id, $radius);

```


#### <a name="get_photos"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getPhotos") getPhotos

> TODO: Add a method description


```php
function getPhotos($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 89.4510769631951;

$result = $accommodation->getPhotos($id);

```


#### <a name="get_nearest_accommodations_by_ip"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getNearestAccommodationsByIP") getNearestAccommodationsByIP

> TODO: Add a method description


```php
function getNearestAccommodationsByIP(
        $ip,
        $radius = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ip |  ``` Required ```  | TODO: Add a parameter description |
| radius |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ip = 'ip';
$radius = 89.4510769631951;

$result = $accommodation->getNearestAccommodationsByIP($ip, $radius);

```


#### <a name="delete_accommodation_destroy_by_id_commerce_mappings"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.deleteAccommodationDestroyByIdCommerceMappings") deleteAccommodationDestroyByIdCommerceMappings

> Delete a related item by id for commerce-mappings.


```php
function deleteAccommodationDestroyByIdCommerceMappings(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for commerce-mappings |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$accommodation->deleteAccommodationDestroyByIdCommerceMappings($fk, $id);

```


#### <a name="get_detailed_response"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getDetailedResponse") getDetailedResponse

> TODO: Add a method description


```php
function getDetailedResponse($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 89.4510769631951;

$result = $accommodation->getDetailedResponse($id);

```


#### <a name="get_count"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getCount") getCount

> Count instances of the model matched by where from the data source.


```php
function getCount($where = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| where |  ``` Optional ```  | Criteria to match model instances |



#### Example Usage

```php
$where = 'where';

$result = $accommodation->getCount($where);

```


#### <a name="find_one"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.findOne") findOne

> Find first instance of the model matched by filter from the data source.


```php
function findOne($filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | Filter defining fields, where, include, order, offset, and limit |



#### Example Usage

```php
$filter = 'filter';

$result = $accommodation->findOne($filter);

```


#### <a name="delete_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.deleteById") deleteById

> Delete a model instance by id from the data source.


```php
function deleteById($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $accommodation->deleteById($id);

```


#### <a name="find_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.findById") findById

> Find a model instance by id from the data source.


```php
function findById(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |
| filter |  ``` Optional ```  | Filter defining fields and include |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $accommodation->findById($id, $filter);

```


#### <a name="update_accommodation_update_by_id_commerce_mappings"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.updateAccommodationUpdateByIdCommerceMappings") updateAccommodationUpdateByIdCommerceMappings

> Update a related item by id for commerce-mappings.


```php
function updateAccommodationUpdateByIdCommerceMappings(
        $fk,
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for commerce-mappings |
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';
$data = new ExternalMapping();

$result = $accommodation->updateAccommodationUpdateByIdCommerceMappings($fk, $id, $data);

```


#### <a name="get_exists_get_accommodations_id_exists"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getExistsGetAccommodationsIdExists") getExistsGetAccommodationsIdExists

> Check whether a model instance exists in the data source.


```php
function getExistsGetAccommodationsIdExists($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Model id |



#### Example Usage

```php
$id = 'id';

$result = $accommodation->getExistsGetAccommodationsIdExists($id);

```


#### <a name="delete_accommodation_delete_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.deleteAccommodationDeleteUserReviews") deleteAccommodationDeleteUserReviews

> Deletes all user-reviews of this model.


```php
function deleteAccommodationDeleteUserReviews($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$accommodation->deleteAccommodationDeleteUserReviews($id);

```


#### <a name="get_accommodation_find_by_id_commerce_mappings"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccommodationFindByIdCommerceMappings") getAccommodationFindByIdCommerceMappings

> Find a related item by id for commerce-mappings.


```php
function getAccommodationFindByIdCommerceMappings(
        $fk,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fk |  ``` Required ```  | Foreign key for commerce-mappings |
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$fk = 'fk';
$id = 'id';

$result = $accommodation->getAccommodationFindByIdCommerceMappings($fk, $id);

```


#### <a name="create_accommodation_create_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.createAccommodationCreateUserReviews") createAccommodationCreateUserReviews

> Creates a new instance in user-reviews of this model.


```php
function createAccommodationCreateUserReviews(
        $id,
        $data = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| data |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$data = new UserReview();

$result = $accommodation->createAccommodationCreateUserReviews($id, $data);

```


#### <a name="get_accommodation_get_user_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccommodationGetUserReviews") getAccommodationGetUserReviews

> Queries user-reviews of Accommodation.


```php
function getAccommodationGetUserReviews(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| filter |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $accommodation->getAccommodationGetUserReviews($id, $filter);

```


#### <a name="delete_accommodation_delete_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.deleteAccommodationDeleteUserPhotoAlbums") deleteAccommodationDeleteUserPhotoAlbums

> Deletes all user-photo-albums of this model.


```php
function deleteAccommodationDeleteUserPhotoAlbums($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$accommodation->deleteAccommodationDeleteUserPhotoAlbums($id);

```


#### <a name="get_accommodation_get_user_photo_albums"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccommodationGetUserPhotoAlbums") getAccommodationGetUserPhotoAlbums

> Queries user-photo-albums of Accommodation.


```php
function getAccommodationGetUserPhotoAlbums(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| filter |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $accommodation->getAccommodationGetUserPhotoAlbums($id, $filter);

```


#### <a name="delete_accommodation_delete_commerce_mappings"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.deleteAccommodationDeleteCommerceMappings") deleteAccommodationDeleteCommerceMappings

> Deletes all commerce-mappings of this model.


```php
function deleteAccommodationDeleteCommerceMappings($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |



#### Example Usage

```php
$id = 'id';

$accommodation->deleteAccommodationDeleteCommerceMappings($id);

```


#### <a name="get_accommodation_get_commerce_mappings"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccommodationGetCommerceMappings") getAccommodationGetCommerceMappings

> Queries commerce-mappings of Accommodation.


```php
function getAccommodationGetCommerceMappings(
        $id,
        $filter = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | PersistedModel id |
| filter |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$filter = 'filter';

$result = $accommodation->getAccommodationGetCommerceMappings($id, $filter);

```


#### <a name="get_acc_id_by_ta_id"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getAccIdByTAId") getAccIdByTAId

> Convert TA ID to HWD id


```php
function getAccIdByTAId($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TA id to convert to HWD id |



#### Example Usage

```php
$id = 89.4510769631951;

$result = $accommodation->getAccIdByTAId($id);

```


#### <a name="get_nearest_accommodations_by_lat_lon"></a>![Method: ](https://apidocs.io/img/method.png ".AccommodationController.getNearestAccommodationsByLatLon") getNearestAccommodationsByLatLon

> TODO: Add a method description


```php
function getNearestAccommodationsByLatLon(
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
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| lat |  ``` Required ```  | TODO: Add a parameter description |
| lon |  ``` Required ```  | TODO: Add a parameter description |
| radius |  ``` Optional ```  | TODO: Add a parameter description |
| limit |  ``` Optional ```  | Number of results required |
| ratingMin |  ``` Optional ```  | TODO: Add a parameter description |
| ratingMax |  ``` Optional ```  | TODO: Add a parameter description |
| starsMin |  ``` Optional ```  | TODO: Add a parameter description |
| starsMax |  ``` Optional ```  | TODO: Add a parameter description |
| avgPriceMin |  ``` Optional ```  | TODO: Add a parameter description |
| avgPriceMax |  ``` Optional ```  | TODO: Add a parameter description |
| metaNoIndex |  ``` Optional ```  | If you want to return non indexed hotels in the results. Set to 1 for yes |



#### Example Usage

```php
$lat = 'lat';
$lon = 'lon';
$radius = 89.4510769631951;
$limit = 89;
$ratingMin = 89;
$ratingMax = 89;
$starsMin = 89;
$starsMax = 89;
$avgPriceMin = 89;
$avgPriceMax = 89;
$metaNoIndex = 89;

$result = $accommodation->getNearestAccommodationsByLatLon($lat, $lon, $radius, $limit, $ratingMin, $ratingMax, $starsMin, $starsMax, $avgPriceMin, $avgPriceMax, $metaNoIndex);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="tripadvisor_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TripadvisorController") TripadvisorController

#### Get singleton instance

The singleton instance of the ``` TripadvisorController ``` class can be accessed from the API Client.

```php
$tripadvisor = $client->getTripadvisor();
```

#### <a name="get_commerce_photo_get_tripadvisor_locations_id_commerce_photo"></a>![Method: ](https://apidocs.io/img/method.png ".TripadvisorController.getCommercePhotoGetTripadvisorLocationsIdCommercePhoto") getCommercePhotoGetTripadvisorLocationsIdCommercePhoto

> TODO: Add a method description


```php
function getCommercePhotoGetTripadvisorLocationsIdCommercePhoto($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';

$result = $tripadvisor->getCommercePhotoGetTripadvisorLocationsIdCommercePhoto($id);

```


#### <a name="get_reviews"></a>![Method: ](https://apidocs.io/img/method.png ".TripadvisorController.getReviews") getReviews

> TODO: Add a method description


```php
function getReviews($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';

$result = $tripadvisor->getReviews($id);

```


#### <a name="get_commerce_photo_get_tripadvisor_locations_id_photos"></a>![Method: ](https://apidocs.io/img/method.png ".TripadvisorController.getCommercePhotoGetTripadvisorLocationsIdPhotos") getCommercePhotoGetTripadvisorLocationsIdPhotos

> TODO: Add a method description


```php
function getCommercePhotoGetTripadvisorLocationsIdPhotos($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 89.4510769631951;

$result = $tripadvisor->getCommercePhotoGetTripadvisorLocationsIdPhotos($id);

```


#### <a name="get_accommodations_by_location"></a>![Method: ](https://apidocs.io/img/method.png ".TripadvisorController.getAccommodationsByLocation") getAccommodationsByLocation

> TODO: Add a method description


```php
function getAccommodationsByLocation(
        $id,
        $opts = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |
| opts |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 89.4510769631951;
$opts = 'opts';

$result = $tripadvisor->getAccommodationsByLocation($id, $opts);

```


#### <a name="get_location"></a>![Method: ](https://apidocs.io/img/method.png ".TripadvisorController.getLocation") getLocation

> TODO: Add a method description


```php
function getLocation($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 89.4510769631951;

$result = $tripadvisor->getLocation($id);

```


[Back to List of Controllers](#list_of_controllers)



