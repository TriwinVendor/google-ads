<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/feed.proto

namespace Google\Ads\GoogleAds\V10\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FeedAttributes define the types of data expected to be present in a Feed. A
 * single FeedAttribute specifies the expected type of the FeedItemAttributes
 * with the same FeedAttributeId. Optionally, a FeedAttribute can be marked as
 * being part of a FeedItem's unique key.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.resources.FeedAttribute</code>
 */
class FeedAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the attribute.
     *
     * Generated from protobuf field <code>optional int64 id = 5;</code>
     */
    protected $id = null;
    /**
     * The name of the attribute. Required.
     *
     * Generated from protobuf field <code>optional string name = 6;</code>
     */
    protected $name = null;
    /**
     * Data type for feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.FeedAttributeTypeEnum.FeedAttributeType type = 3;</code>
     */
    protected $type = 0;
    /**
     * Indicates that data corresponding to this attribute is part of a
     * FeedItem's unique key. It defaults to false if it is unspecified. Note
     * that a unique key is not required in a Feed's schema, in which case the
     * FeedItems must be referenced by their feed_item_id.
     *
     * Generated from protobuf field <code>optional bool is_part_of_key = 7;</code>
     */
    protected $is_part_of_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           ID of the attribute.
     *     @type string $name
     *           The name of the attribute. Required.
     *     @type int $type
     *           Data type for feed attribute. Required.
     *     @type bool $is_part_of_key
     *           Indicates that data corresponding to this attribute is part of a
     *           FeedItem's unique key. It defaults to false if it is unspecified. Note
     *           that a unique key is not required in a Feed's schema, in which case the
     *           FeedItems must be referenced by their feed_item_id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the attribute.
     *
     * Generated from protobuf field <code>optional int64 id = 5;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * ID of the attribute.
     *
     * Generated from protobuf field <code>optional int64 id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The name of the attribute. Required.
     *
     * Generated from protobuf field <code>optional string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the attribute. Required.
     *
     * Generated from protobuf field <code>optional string name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Data type for feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.FeedAttributeTypeEnum.FeedAttributeType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Data type for feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.FeedAttributeTypeEnum.FeedAttributeType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\FeedAttributeTypeEnum\FeedAttributeType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Indicates that data corresponding to this attribute is part of a
     * FeedItem's unique key. It defaults to false if it is unspecified. Note
     * that a unique key is not required in a Feed's schema, in which case the
     * FeedItems must be referenced by their feed_item_id.
     *
     * Generated from protobuf field <code>optional bool is_part_of_key = 7;</code>
     * @return bool
     */
    public function getIsPartOfKey()
    {
        return isset($this->is_part_of_key) ? $this->is_part_of_key : false;
    }

    public function hasIsPartOfKey()
    {
        return isset($this->is_part_of_key);
    }

    public function clearIsPartOfKey()
    {
        unset($this->is_part_of_key);
    }

    /**
     * Indicates that data corresponding to this attribute is part of a
     * FeedItem's unique key. It defaults to false if it is unspecified. Note
     * that a unique key is not required in a Feed's schema, in which case the
     * FeedItems must be referenced by their feed_item_id.
     *
     * Generated from protobuf field <code>optional bool is_part_of_key = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPartOfKey($var)
    {
        GPBUtil::checkBool($var);
        $this->is_part_of_key = $var;

        return $this;
    }

}

