<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/common/audiences.proto

namespace Google\Ads\GoogleAds\V10\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contiguous age range.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.common.AgeSegment</code>
 */
class AgeSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * Minimum age to include. A minimum age must be specified and must be
     * at least 18.
     *
     * Generated from protobuf field <code>optional int32 min_age = 1;</code>
     */
    protected $min_age = null;
    /**
     * Maximum age to include.
     *
     * Generated from protobuf field <code>optional int32 max_age = 2;</code>
     */
    protected $max_age = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_age
     *           Minimum age to include. A minimum age must be specified and must be
     *           at least 18.
     *     @type int $max_age
     *           Maximum age to include.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Common\Audiences::initOnce();
        parent::__construct($data);
    }

    /**
     * Minimum age to include. A minimum age must be specified and must be
     * at least 18.
     *
     * Generated from protobuf field <code>optional int32 min_age = 1;</code>
     * @return int
     */
    public function getMinAge()
    {
        return isset($this->min_age) ? $this->min_age : 0;
    }

    public function hasMinAge()
    {
        return isset($this->min_age);
    }

    public function clearMinAge()
    {
        unset($this->min_age);
    }

    /**
     * Minimum age to include. A minimum age must be specified and must be
     * at least 18.
     *
     * Generated from protobuf field <code>optional int32 min_age = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMinAge($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_age = $var;

        return $this;
    }

    /**
     * Maximum age to include.
     *
     * Generated from protobuf field <code>optional int32 max_age = 2;</code>
     * @return int
     */
    public function getMaxAge()
    {
        return isset($this->max_age) ? $this->max_age : 0;
    }

    public function hasMaxAge()
    {
        return isset($this->max_age);
    }

    public function clearMaxAge()
    {
        unset($this->max_age);
    }

    /**
     * Maximum age to include.
     *
     * Generated from protobuf field <code>optional int32 max_age = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxAge($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_age = $var;

        return $this;
    }

}

