<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V10\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Url Seed
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.services.UrlSeed</code>
 */
class UrlSeed extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>optional string url = 2;</code>
     */
    protected $url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *           The URL to crawl in order to generate keyword ideas.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>optional string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return isset($this->url) ? $this->url : '';
    }

    public function hasUrl()
    {
        return isset($this->url);
    }

    public function clearUrl()
    {
        unset($this->url);
    }

    /**
     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>optional string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

