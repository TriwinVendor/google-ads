<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/campaign_experiment_service.proto

namespace Google\Ads\GoogleAds\V10\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single update operation on a campaign experiment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.services.CampaignExperimentOperation</code>
 */
class CampaignExperimentOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    protected $update_mask = null;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           FieldMask that determines which resource fields are modified in an update.
     *     @type \Google\Ads\GoogleAds\V10\Resources\CampaignExperiment $update
     *           Update operation: The campaign experiment is expected to have a valid
     *           resource name.
     *     @type string $remove
     *           Remove operation: The campaign experiment is expected to have a valid
     *           resource name, in this format:
     *           `customers/{customer_id}/campaignExperiments/{campaign_experiment_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Services\CampaignExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Update operation: The campaign experiment is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignExperiment update = 1;</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\CampaignExperiment|null
     */
    public function getUpdate()
    {
        return $this->readOneof(1);
    }

    public function hasUpdate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Update operation: The campaign experiment is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignExperiment update = 1;</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\CampaignExperiment $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\CampaignExperiment::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove operation: The campaign experiment is expected to have a valid
     * resource name, in this format:
     * `customers/{customer_id}/campaignExperiments/{campaign_experiment_id}`
     *
     * Generated from protobuf field <code>string remove = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(2);
    }

    public function hasRemove()
    {
        return $this->hasOneof(2);
    }

    /**
     * Remove operation: The campaign experiment is expected to have a valid
     * resource name, in this format:
     * `customers/{customer_id}/campaignExperiments/{campaign_experiment_id}`
     *
     * Generated from protobuf field <code>string remove = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

