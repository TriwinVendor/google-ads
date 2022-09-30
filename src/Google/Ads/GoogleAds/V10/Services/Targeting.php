<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V10\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The targeting for which traffic metrics will be reported.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.services.Targeting</code>
 */
class Targeting extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the selected location. Plannable location IDs can be
     * obtained from [ReachPlanService.ListPlannableLocations][google.ads.googleads.v10.services.ReachPlanService.ListPlannableLocations].
     *
     * Generated from protobuf field <code>optional string plannable_location_id = 6;</code>
     */
    protected $plannable_location_id = null;
    /**
     * Targeted age range.
     * An unset value is equivalent to targeting all ages.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ReachPlanAgeRangeEnum.ReachPlanAgeRange age_range = 2;</code>
     */
    protected $age_range = 0;
    /**
     * Targeted genders.
     * An unset value is equivalent to targeting MALE and FEMALE.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v10.common.GenderInfo genders = 3;</code>
     */
    private $genders;
    /**
     * Targeted devices.
     * If not specified, targets all applicable devices. Applicable devices vary
     * by product and region and can be obtained from
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v10.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v10.common.DeviceInfo devices = 4;</code>
     */
    private $devices;
    /**
     * Targetable network for the ad product.
     * If not specified, targets all applicable networks. Applicable networks vary
     * by product and region and can be obtained from
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v10.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ReachPlanNetworkEnum.ReachPlanNetwork network = 5;</code>
     */
    protected $network = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plannable_location_id
     *           Required. The ID of the selected location. Plannable location IDs can be
     *           obtained from [ReachPlanService.ListPlannableLocations][google.ads.googleads.v10.services.ReachPlanService.ListPlannableLocations].
     *     @type int $age_range
     *           Targeted age range.
     *           An unset value is equivalent to targeting all ages.
     *     @type \Google\Ads\GoogleAds\V10\Common\GenderInfo[]|\Google\Protobuf\Internal\RepeatedField $genders
     *           Targeted genders.
     *           An unset value is equivalent to targeting MALE and FEMALE.
     *     @type \Google\Ads\GoogleAds\V10\Common\DeviceInfo[]|\Google\Protobuf\Internal\RepeatedField $devices
     *           Targeted devices.
     *           If not specified, targets all applicable devices. Applicable devices vary
     *           by product and region and can be obtained from
     *           [ReachPlanService.ListPlannableProducts][google.ads.googleads.v10.services.ReachPlanService.ListPlannableProducts].
     *     @type int $network
     *           Targetable network for the ad product.
     *           If not specified, targets all applicable networks. Applicable networks vary
     *           by product and region and can be obtained from
     *           [ReachPlanService.ListPlannableProducts][google.ads.googleads.v10.services.ReachPlanService.ListPlannableProducts].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the selected location. Plannable location IDs can be
     * obtained from [ReachPlanService.ListPlannableLocations][google.ads.googleads.v10.services.ReachPlanService.ListPlannableLocations].
     *
     * Generated from protobuf field <code>optional string plannable_location_id = 6;</code>
     * @return string
     */
    public function getPlannableLocationId()
    {
        return isset($this->plannable_location_id) ? $this->plannable_location_id : '';
    }

    public function hasPlannableLocationId()
    {
        return isset($this->plannable_location_id);
    }

    public function clearPlannableLocationId()
    {
        unset($this->plannable_location_id);
    }

    /**
     * Required. The ID of the selected location. Plannable location IDs can be
     * obtained from [ReachPlanService.ListPlannableLocations][google.ads.googleads.v10.services.ReachPlanService.ListPlannableLocations].
     *
     * Generated from protobuf field <code>optional string plannable_location_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPlannableLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->plannable_location_id = $var;

        return $this;
    }

    /**
     * Targeted age range.
     * An unset value is equivalent to targeting all ages.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ReachPlanAgeRangeEnum.ReachPlanAgeRange age_range = 2;</code>
     * @return int
     */
    public function getAgeRange()
    {
        return $this->age_range;
    }

    /**
     * Targeted age range.
     * An unset value is equivalent to targeting all ages.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ReachPlanAgeRangeEnum.ReachPlanAgeRange age_range = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAgeRange($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\ReachPlanAgeRangeEnum\ReachPlanAgeRange::class);
        $this->age_range = $var;

        return $this;
    }

    /**
     * Targeted genders.
     * An unset value is equivalent to targeting MALE and FEMALE.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v10.common.GenderInfo genders = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGenders()
    {
        return $this->genders;
    }

    /**
     * Targeted genders.
     * An unset value is equivalent to targeting MALE and FEMALE.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v10.common.GenderInfo genders = 3;</code>
     * @param \Google\Ads\GoogleAds\V10\Common\GenderInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGenders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V10\Common\GenderInfo::class);
        $this->genders = $arr;

        return $this;
    }

    /**
     * Targeted devices.
     * If not specified, targets all applicable devices. Applicable devices vary
     * by product and region and can be obtained from
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v10.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v10.common.DeviceInfo devices = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * Targeted devices.
     * If not specified, targets all applicable devices. Applicable devices vary
     * by product and region and can be obtained from
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v10.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v10.common.DeviceInfo devices = 4;</code>
     * @param \Google\Ads\GoogleAds\V10\Common\DeviceInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDevices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V10\Common\DeviceInfo::class);
        $this->devices = $arr;

        return $this;
    }

    /**
     * Targetable network for the ad product.
     * If not specified, targets all applicable networks. Applicable networks vary
     * by product and region and can be obtained from
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v10.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ReachPlanNetworkEnum.ReachPlanNetwork network = 5;</code>
     * @return int
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Targetable network for the ad product.
     * If not specified, targets all applicable networks. Applicable networks vary
     * by product and region and can be obtained from
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v10.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ReachPlanNetworkEnum.ReachPlanNetwork network = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\ReachPlanNetworkEnum\ReachPlanNetwork::class);
        $this->network = $var;

        return $this;
    }

}

