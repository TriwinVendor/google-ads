<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/enums/negative_geo_target_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Enums;

class NegativeGeoTargetType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v10/enums/negative_geo_target_type.protogoogle.ads.googleads.v10.enums"z
NegativeGeoTargetTypeEnum"]
NegativeGeoTargetType
UNSPECIFIED 
UNKNOWN
PRESENCE_OR_INTEREST
PRESENCEB�
"com.google.ads.googleads.v10.enumsBNegativeGeoTargetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

