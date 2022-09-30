<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/bidding.proto

namespace Google\Ads\GoogleAds\V8\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bidding strategy that helps you maximize revenue while
 * averaging a specific target return on ad spend (ROAS).
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.common.TargetRoas</code>
 */
class TargetRoas extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The desired revenue (based on conversion data) per unit of spend.
     * Value must be between 0.01 and 1000.0, inclusive.
     *
     * Generated from protobuf field <code>double target_roas = 4;</code>
     */
    protected $target_roas = null;
    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     * This should only be set for portfolio bid strategies.
     *
     * Generated from protobuf field <code>int64 cpc_bid_ceiling_micros = 5;</code>
     */
    protected $cpc_bid_ceiling_micros = null;
    /**
     * Minimum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     * This should only be set for portfolio bid strategies.
     *
     * Generated from protobuf field <code>int64 cpc_bid_floor_micros = 6;</code>
     */
    protected $cpc_bid_floor_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $target_roas
     *           Required. The desired revenue (based on conversion data) per unit of spend.
     *           Value must be between 0.01 and 1000.0, inclusive.
     *     @type int|string $cpc_bid_ceiling_micros
     *           Maximum bid limit that can be set by the bid strategy.
     *           The limit applies to all keywords managed by the strategy.
     *           This should only be set for portfolio bid strategies.
     *     @type int|string $cpc_bid_floor_micros
     *           Minimum bid limit that can be set by the bid strategy.
     *           The limit applies to all keywords managed by the strategy.
     *           This should only be set for portfolio bid strategies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The desired revenue (based on conversion data) per unit of spend.
     * Value must be between 0.01 and 1000.0, inclusive.
     *
     * Generated from protobuf field <code>double target_roas = 4;</code>
     * @return float
     */
    public function getTargetRoas()
    {
        return isset($this->target_roas) ? $this->target_roas : 0.0;
    }

    public function hasTargetRoas()
    {
        return isset($this->target_roas);
    }

    public function clearTargetRoas()
    {
        unset($this->target_roas);
    }

    /**
     * Required. The desired revenue (based on conversion data) per unit of spend.
     * Value must be between 0.01 and 1000.0, inclusive.
     *
     * Generated from protobuf field <code>double target_roas = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setTargetRoas($var)
    {
        GPBUtil::checkDouble($var);
        $this->target_roas = $var;

        return $this;
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     * This should only be set for portfolio bid strategies.
     *
     * Generated from protobuf field <code>int64 cpc_bid_ceiling_micros = 5;</code>
     * @return int|string
     */
    public function getCpcBidCeilingMicros()
    {
        return isset($this->cpc_bid_ceiling_micros) ? $this->cpc_bid_ceiling_micros : 0;
    }

    public function hasCpcBidCeilingMicros()
    {
        return isset($this->cpc_bid_ceiling_micros);
    }

    public function clearCpcBidCeilingMicros()
    {
        unset($this->cpc_bid_ceiling_micros);
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     * This should only be set for portfolio bid strategies.
     *
     * Generated from protobuf field <code>int64 cpc_bid_ceiling_micros = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

    /**
     * Minimum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     * This should only be set for portfolio bid strategies.
     *
     * Generated from protobuf field <code>int64 cpc_bid_floor_micros = 6;</code>
     * @return int|string
     */
    public function getCpcBidFloorMicros()
    {
        return isset($this->cpc_bid_floor_micros) ? $this->cpc_bid_floor_micros : 0;
    }

    public function hasCpcBidFloorMicros()
    {
        return isset($this->cpc_bid_floor_micros);
    }

    public function clearCpcBidFloorMicros()
    {
        unset($this->cpc_bid_floor_micros);
    }

    /**
     * Minimum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     * This should only be set for portfolio bid strategies.
     *
     * Generated from protobuf field <code>int64 cpc_bid_floor_micros = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCpcBidFloorMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cpc_bid_floor_micros = $var;

        return $this;
    }

}

