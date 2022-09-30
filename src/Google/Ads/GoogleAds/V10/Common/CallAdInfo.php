<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V10\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A call ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.common.CallAdInfo</code>
 */
class CallAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The country code in the ad.
     *
     * Generated from protobuf field <code>string country_code = 1;</code>
     */
    protected $country_code = '';
    /**
     * The phone number in the ad.
     *
     * Generated from protobuf field <code>string phone_number = 2;</code>
     */
    protected $phone_number = '';
    /**
     * The business name in the ad.
     *
     * Generated from protobuf field <code>string business_name = 3;</code>
     */
    protected $business_name = '';
    /**
     * First headline in the ad.
     *
     * Generated from protobuf field <code>string headline1 = 11;</code>
     */
    protected $headline1 = '';
    /**
     * Second headline in the ad.
     *
     * Generated from protobuf field <code>string headline2 = 12;</code>
     */
    protected $headline2 = '';
    /**
     * The first line of the ad's description.
     *
     * Generated from protobuf field <code>string description1 = 4;</code>
     */
    protected $description1 = '';
    /**
     * The second line of the ad's description.
     *
     * Generated from protobuf field <code>string description2 = 5;</code>
     */
    protected $description2 = '';
    /**
     * Whether to enable call tracking for the creative. Enabling call
     * tracking also enables call conversions.
     *
     * Generated from protobuf field <code>bool call_tracked = 6;</code>
     */
    protected $call_tracked = false;
    /**
     * Whether to disable call conversion for the creative.
     * If set to `true`, disables call conversions even when `call_tracked` is
     * `true`.
     * If `call_tracked` is `false`, this field is ignored.
     *
     * Generated from protobuf field <code>bool disable_call_conversion = 7;</code>
     */
    protected $disable_call_conversion = false;
    /**
     * The URL to be used for phone number verification.
     *
     * Generated from protobuf field <code>string phone_number_verification_url = 8;</code>
     */
    protected $phone_number_verification_url = '';
    /**
     * The conversion action to attribute a call conversion to. If not set a
     * default conversion action is used. This field only has effect if
     * `call_tracked` is set to `true`. Otherwise this field is ignored.
     *
     * Generated from protobuf field <code>string conversion_action = 9;</code>
     */
    protected $conversion_action = '';
    /**
     * The call conversion behavior of this call ad. It can use its own call
     * conversion setting, inherit the account level setting, or be disabled.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.CallConversionReportingStateEnum.CallConversionReportingState conversion_reporting_state = 10;</code>
     */
    protected $conversion_reporting_state = 0;
    /**
     * First part of text that can be appended to the URL in the ad. Optional.
     *
     * Generated from protobuf field <code>string path1 = 13;</code>
     */
    protected $path1 = '';
    /**
     * Second part of text that can be appended to the URL in the ad. This field
     * can only be set when `path1` is also set. Optional.
     *
     * Generated from protobuf field <code>string path2 = 14;</code>
     */
    protected $path2 = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $country_code
     *           The country code in the ad.
     *     @type string $phone_number
     *           The phone number in the ad.
     *     @type string $business_name
     *           The business name in the ad.
     *     @type string $headline1
     *           First headline in the ad.
     *     @type string $headline2
     *           Second headline in the ad.
     *     @type string $description1
     *           The first line of the ad's description.
     *     @type string $description2
     *           The second line of the ad's description.
     *     @type bool $call_tracked
     *           Whether to enable call tracking for the creative. Enabling call
     *           tracking also enables call conversions.
     *     @type bool $disable_call_conversion
     *           Whether to disable call conversion for the creative.
     *           If set to `true`, disables call conversions even when `call_tracked` is
     *           `true`.
     *           If `call_tracked` is `false`, this field is ignored.
     *     @type string $phone_number_verification_url
     *           The URL to be used for phone number verification.
     *     @type string $conversion_action
     *           The conversion action to attribute a call conversion to. If not set a
     *           default conversion action is used. This field only has effect if
     *           `call_tracked` is set to `true`. Otherwise this field is ignored.
     *     @type int $conversion_reporting_state
     *           The call conversion behavior of this call ad. It can use its own call
     *           conversion setting, inherit the account level setting, or be disabled.
     *     @type string $path1
     *           First part of text that can be appended to the URL in the ad. Optional.
     *     @type string $path2
     *           Second part of text that can be appended to the URL in the ad. This field
     *           can only be set when `path1` is also set. Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The country code in the ad.
     *
     * Generated from protobuf field <code>string country_code = 1;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * The country code in the ad.
     *
     * Generated from protobuf field <code>string country_code = 1;</code>
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
     * The phone number in the ad.
     *
     * Generated from protobuf field <code>string phone_number = 2;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * The phone number in the ad.
     *
     * Generated from protobuf field <code>string phone_number = 2;</code>
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
     * The business name in the ad.
     *
     * Generated from protobuf field <code>string business_name = 3;</code>
     * @return string
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * The business name in the ad.
     *
     * Generated from protobuf field <code>string business_name = 3;</code>
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
     * First headline in the ad.
     *
     * Generated from protobuf field <code>string headline1 = 11;</code>
     * @return string
     */
    public function getHeadline1()
    {
        return $this->headline1;
    }

    /**
     * First headline in the ad.
     *
     * Generated from protobuf field <code>string headline1 = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadline1($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline1 = $var;

        return $this;
    }

    /**
     * Second headline in the ad.
     *
     * Generated from protobuf field <code>string headline2 = 12;</code>
     * @return string
     */
    public function getHeadline2()
    {
        return $this->headline2;
    }

    /**
     * Second headline in the ad.
     *
     * Generated from protobuf field <code>string headline2 = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadline2($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline2 = $var;

        return $this;
    }

    /**
     * The first line of the ad's description.
     *
     * Generated from protobuf field <code>string description1 = 4;</code>
     * @return string
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * The first line of the ad's description.
     *
     * Generated from protobuf field <code>string description1 = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription1($var)
    {
        GPBUtil::checkString($var, True);
        $this->description1 = $var;

        return $this;
    }

    /**
     * The second line of the ad's description.
     *
     * Generated from protobuf field <code>string description2 = 5;</code>
     * @return string
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * The second line of the ad's description.
     *
     * Generated from protobuf field <code>string description2 = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription2($var)
    {
        GPBUtil::checkString($var, True);
        $this->description2 = $var;

        return $this;
    }

    /**
     * Whether to enable call tracking for the creative. Enabling call
     * tracking also enables call conversions.
     *
     * Generated from protobuf field <code>bool call_tracked = 6;</code>
     * @return bool
     */
    public function getCallTracked()
    {
        return $this->call_tracked;
    }

    /**
     * Whether to enable call tracking for the creative. Enabling call
     * tracking also enables call conversions.
     *
     * Generated from protobuf field <code>bool call_tracked = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCallTracked($var)
    {
        GPBUtil::checkBool($var);
        $this->call_tracked = $var;

        return $this;
    }

    /**
     * Whether to disable call conversion for the creative.
     * If set to `true`, disables call conversions even when `call_tracked` is
     * `true`.
     * If `call_tracked` is `false`, this field is ignored.
     *
     * Generated from protobuf field <code>bool disable_call_conversion = 7;</code>
     * @return bool
     */
    public function getDisableCallConversion()
    {
        return $this->disable_call_conversion;
    }

    /**
     * Whether to disable call conversion for the creative.
     * If set to `true`, disables call conversions even when `call_tracked` is
     * `true`.
     * If `call_tracked` is `false`, this field is ignored.
     *
     * Generated from protobuf field <code>bool disable_call_conversion = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableCallConversion($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_call_conversion = $var;

        return $this;
    }

    /**
     * The URL to be used for phone number verification.
     *
     * Generated from protobuf field <code>string phone_number_verification_url = 8;</code>
     * @return string
     */
    public function getPhoneNumberVerificationUrl()
    {
        return $this->phone_number_verification_url;
    }

    /**
     * The URL to be used for phone number verification.
     *
     * Generated from protobuf field <code>string phone_number_verification_url = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumberVerificationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number_verification_url = $var;

        return $this;
    }

    /**
     * The conversion action to attribute a call conversion to. If not set a
     * default conversion action is used. This field only has effect if
     * `call_tracked` is set to `true`. Otherwise this field is ignored.
     *
     * Generated from protobuf field <code>string conversion_action = 9;</code>
     * @return string
     */
    public function getConversionAction()
    {
        return $this->conversion_action;
    }

    /**
     * The conversion action to attribute a call conversion to. If not set a
     * default conversion action is used. This field only has effect if
     * `call_tracked` is set to `true`. Otherwise this field is ignored.
     *
     * Generated from protobuf field <code>string conversion_action = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_action = $var;

        return $this;
    }

    /**
     * The call conversion behavior of this call ad. It can use its own call
     * conversion setting, inherit the account level setting, or be disabled.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.CallConversionReportingStateEnum.CallConversionReportingState conversion_reporting_state = 10;</code>
     * @return int
     */
    public function getConversionReportingState()
    {
        return $this->conversion_reporting_state;
    }

    /**
     * The call conversion behavior of this call ad. It can use its own call
     * conversion setting, inherit the account level setting, or be disabled.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.CallConversionReportingStateEnum.CallConversionReportingState conversion_reporting_state = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setConversionReportingState($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\CallConversionReportingStateEnum\CallConversionReportingState::class);
        $this->conversion_reporting_state = $var;

        return $this;
    }

    /**
     * First part of text that can be appended to the URL in the ad. Optional.
     *
     * Generated from protobuf field <code>string path1 = 13;</code>
     * @return string
     */
    public function getPath1()
    {
        return $this->path1;
    }

    /**
     * First part of text that can be appended to the URL in the ad. Optional.
     *
     * Generated from protobuf field <code>string path1 = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setPath1($var)
    {
        GPBUtil::checkString($var, True);
        $this->path1 = $var;

        return $this;
    }

    /**
     * Second part of text that can be appended to the URL in the ad. This field
     * can only be set when `path1` is also set. Optional.
     *
     * Generated from protobuf field <code>string path2 = 14;</code>
     * @return string
     */
    public function getPath2()
    {
        return $this->path2;
    }

    /**
     * Second part of text that can be appended to the URL in the ad. This field
     * can only be set when `path1` is also set. Optional.
     *
     * Generated from protobuf field <code>string path2 = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setPath2($var)
    {
        GPBUtil::checkString($var, True);
        $this->path2 = $var;

        return $this;
    }

}

