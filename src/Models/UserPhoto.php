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
class UserPhoto implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var double $counter public property
     */
    public $counter;

    /**
     * @todo Write general description for this property
     * @required
     * @maps display_format
     * @var double $displayFormat public property
     */
    public $displayFormat;

    /**
     * @todo Write general description for this property
     * @required
     * @maps do_not_feature
     * @var double $doNotFeature public property
     */
    public $doNotFeature;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $filename public property
     */
    public $filename;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps original_filename
     * @var string $originalFilename public property
     */
    public $originalFilename;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $text public property
     */
    public $text;

    /**
     * @todo Write general description for this property
     * @required
     * @maps user_photo_album_id
     * @var double $userPhotoAlbumId public property
     */
    public $userPhotoAlbumId;

    /**
     * @todo Write general description for this property
     * @maps album_id
     * @var double $albumId public property
     */
    public $albumId;

    /**
     * @todo Write general description for this property
     * @var double $approved public property
     */
    public $approved;

    /**
     * @todo Write general description for this property
     * @maps blessed_id
     * @var double $blessedId public property
     */
    public $blessedId;

    /**
     * @todo Write general description for this property
     * @maps category_mask
     * @var double $categoryMask public property
     */
    public $categoryMask;

    /**
     * @todo Write general description for this property
     * @var string $hash public property
     */
    public $hash;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $counter               Initialization value for the property $this->counter            
     * @param   double            $displayFormat         Initialization value for the property $this->displayFormat      
     * @param   double            $doNotFeature          Initialization value for the property $this->doNotFeature       
     * @param   string            $filename              Initialization value for the property $this->filename           
     * @param   double            $id                    Initialization value for the property $this->id                 
     * @param   string            $originalFilename      Initialization value for the property $this->originalFilename   
     * @param   string            $text                  Initialization value for the property $this->text               
     * @param   double            $userPhotoAlbumId      Initialization value for the property $this->userPhotoAlbumId   
     * @param   double            $albumId               Initialization value for the property $this->albumId            
     * @param   double            $approved              Initialization value for the property $this->approved           
     * @param   double            $blessedId             Initialization value for the property $this->blessedId          
     * @param   double            $categoryMask          Initialization value for the property $this->categoryMask       
     * @param   string            $hash                  Initialization value for the property $this->hash               
     */
    public function __construct()
    {
        if(13 == func_num_args())
        {
            $this->counter             = func_get_arg(0);
            $this->displayFormat       = func_get_arg(1);
            $this->doNotFeature        = func_get_arg(2);
            $this->filename            = func_get_arg(3);
            $this->id                  = func_get_arg(4);
            $this->originalFilename    = func_get_arg(5);
            $this->text                = func_get_arg(6);
            $this->userPhotoAlbumId    = func_get_arg(7);
            $this->albumId             = func_get_arg(8);
            $this->approved            = func_get_arg(9);
            $this->blessedId           = func_get_arg(10);
            $this->categoryMask        = func_get_arg(11);
            $this->hash                = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['counter']             = $this->counter;
        $json['display_format']      = $this->displayFormat;
        $json['do_not_feature']      = $this->doNotFeature;
        $json['filename']            = $this->filename;
        $json['id']                  = $this->id;
        $json['original_filename']   = $this->originalFilename;
        $json['text']                = $this->text;
        $json['user_photo_album_id'] = $this->userPhotoAlbumId;
        $json['album_id']            = $this->albumId;
        $json['approved']            = $this->approved;
        $json['blessed_id']          = $this->blessedId;
        $json['category_mask']       = $this->categoryMask;
        $json['hash']                = $this->hash;

        return $json;
    }
}