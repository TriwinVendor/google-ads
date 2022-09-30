<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V10\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeywordPlanService.GenerateForecastCurve][google.ads.googleads.v10.services.KeywordPlanService.GenerateForecastCurve].
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.services.GenerateForecastCurveRequest</code>
 */
class GenerateForecastCurveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the keyword plan to be forecasted.
     *
     * Generated from protobuf field <code>string keyword_plan = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $keyword_plan = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $keyword_plan
     *           Required. The resource name of the keyword plan to be forecasted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the keyword plan to be forecasted.
     *
     * Generated from protobuf field <code>string keyword_plan = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKeywordPlan()
    {
        return $this->keyword_plan;
    }

    /**
     * Required. The resource name of the keyword plan to be forecasted.
     *
     * Generated from protobuf field <code>string keyword_plan = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKeywordPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword_plan = $var;

        return $this;
    }

}

