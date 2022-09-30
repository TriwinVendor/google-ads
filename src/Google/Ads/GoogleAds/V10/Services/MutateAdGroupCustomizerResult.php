<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/ad_group_customizer_service.proto

namespace Google\Ads\GoogleAds\V10\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the ad group customizer mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.services.MutateAdGroupCustomizerResult</code>
 */
class MutateAdGroupCustomizerResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated AdGroupCustomizer with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupCustomizer ad_group_customizer = 2;</code>
     */
    protected $ad_group_customizer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V10\Resources\AdGroupCustomizer $ad_group_customizer
     *           The mutated AdGroupCustomizer with only mutable fields after mutate.
     *           The field will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Services\AdGroupCustomizerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated AdGroupCustomizer with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupCustomizer ad_group_customizer = 2;</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\AdGroupCustomizer|null
     */
    public function getAdGroupCustomizer()
    {
        return $this->ad_group_customizer;
    }

    public function hasAdGroupCustomizer()
    {
        return isset($this->ad_group_customizer);
    }

    public function clearAdGroupCustomizer()
    {
        unset($this->ad_group_customizer);
    }

    /**
     * The mutated AdGroupCustomizer with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupCustomizer ad_group_customizer = 2;</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\AdGroupCustomizer $var
     * @return $this
     */
    public function setAdGroupCustomizer($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\AdGroupCustomizer::class);
        $this->ad_group_customizer = $var;

        return $this;
    }

}

