<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/common/extensions.proto

namespace Google\Ads\GoogleAds\V10\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An extension that users can click on to send a text message to the
 * advertiser.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.common.TextMessageFeedItem</code>
 */
class TextMessageFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The business name to prepend to the message text.
     * This field is required.
     *
     * Generated from protobuf field <code>optional string business_name = 6;</code>
     */
    protected $business_name = null;
    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This field is required.
     *
     * Generated from protobuf field <code>optional string country_code = 7;</code>
     */
    protected $country_code = null;
    /**
     * The advertiser's phone number the message will be sent to. Required.
     *
     * Generated from protobuf field <code>optional string phone_number = 8;</code>
     */
    protected $phone_number = null;
    /**
     * The text to show in the ad.
     * This field is required.
     *
     * Generated from protobuf field <code>optional string text = 9;</code>
     */
    protected $text = null;
    /**
     * The message extension_text populated in the messaging app.
     *
     * Generated from protobuf field <code>optional string extension_text = 10;</code>
     */
    protected $extension_text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $business_name
     *           The business name to prepend to the message text.
     *           This field is required.
     *     @type string $country_code
     *           Uppercase two-letter country code of the advertiser's phone number.
     *           This field is required.
     *     @type string $phone_number
     *           The advertiser's phone number the message will be sent to. Required.
     *     @type string $text
     *           The text to show in the ad.
     *           This field is required.
     *     @type string $extension_text
     *           The message extension_text populated in the messaging app.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The business name to prepend to the message text.
     * This field is required.
     *
     * Generated from protobuf field <code>optional string business_name = 6;</code>
     * @return string
     */
    public function getBusinessName()
    {
        return isset($this->business_name) ? $this->business_name : '';
    }

    public function hasBusinessName()
    {
        return isset($this->business_name);
    }

    public function clearBusinessName()
    {
        unset($this->business_name);
    }

    /**
     * The business name to prepend to the message text.
     * This field is required.
     *
     * Generated from protobuf field <code>optional string business_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This field is required.
     *
     * Generated from protobuf field <code>optional string country_code = 7;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return isset($this->country_code) ? $this->country_code : '';
    }

    public function hasCountryCode()
    {
        return isset($this->country_code);
    }

    public function clearCountryCode()
    {
        unset($this->country_code);
    }

    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This field is required.
     *
     * Generated from protobuf field <code>optional string country_code = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

    /**
     * The advertiser's phone number the message will be sent to. Required.
     *
     * Generated from protobuf field <code>optional string phone_number = 8;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return isset($this->phone_number) ? $this->phone_number : '';
    }

    public function hasPhoneNumber()
    {
        return isset($this->phone_number);
    }

    public function clearPhoneNumber()
    {
        unset($this->phone_number);
    }

    /**
     * The advertiser's phone number the message will be sent to. Required.
     *
     * Generated from protobuf field <code>optional string phone_number = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * The text to show in the ad.
     * This field is required.
     *
     * Generated from protobuf field <code>optional string text = 9;</code>
     * @return string
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : '';
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * The text to show in the ad.
     * This field is required.
     *
     * Generated from protobuf field <code>optional string text = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * The message extension_text populated in the messaging app.
     *
     * Generated from protobuf field <code>optional string extension_text = 10;</code>
     * @return string
     */
    public function getExtensionText()
    {
        return isset($this->extension_text) ? $this->extension_text : '';
    }

    public function hasExtensionText()
    {
        return isset($this->extension_text);
    }

    public function clearExtensionText()
    {
        unset($this->extension_text);
    }

    /**
     * The message extension_text populated in the messaging app.
     *
     * Generated from protobuf field <code>optional string extension_text = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setExtensionText($var)
    {
        GPBUtil::checkString($var, True);
        $this->extension_text = $var;

        return $this;
    }

}

