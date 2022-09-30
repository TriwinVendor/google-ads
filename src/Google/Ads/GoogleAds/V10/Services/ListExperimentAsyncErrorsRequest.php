<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/experiment_service.proto

namespace Google\Ads\GoogleAds\V10\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ExperimentService.ListExperimentAsyncErrors][google.ads.googleads.v10.services.ExperimentService.ListExperimentAsyncErrors].
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.services.ListExperimentAsyncErrorsRequest</code>
 */
class ListExperimentAsyncErrorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the experiment from which to retrieve the async
     * errors.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. Use the value obtained from
     * `next_page_token` in the previous response in order to request
     * the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    protected $page_token = '';
    /**
     * Number of elements to retrieve in a single page.
     * When a page request is too large, the server may decide to
     * further limit the number of returned resources.
     * The maximum page size is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Required. The name of the experiment from which to retrieve the async
     *           errors.
     *     @type string $page_token
     *           Token of the page to retrieve. If not specified, the first
     *           page of results will be returned. Use the value obtained from
     *           `next_page_token` in the previous response in order to request
     *           the next page of results.
     *     @type int $page_size
     *           Number of elements to retrieve in a single page.
     *           When a page request is too large, the server may decide to
     *           further limit the number of returned resources.
     *           The maximum page size is 1000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Services\ExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the experiment from which to retrieve the async
     * errors.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Required. The name of the experiment from which to retrieve the async
     * errors.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. Use the value obtained from
     * `next_page_token` in the previous response in order to request
     * the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. Use the value obtained from
     * `next_page_token` in the previous response in order to request
     * the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Number of elements to retrieve in a single page.
     * When a page request is too large, the server may decide to
     * further limit the number of returned resources.
     * The maximum page size is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of elements to retrieve in a single page.
     * When a page request is too large, the server may decide to
     * further limit the number of returned resources.
     * The maximum page size is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

