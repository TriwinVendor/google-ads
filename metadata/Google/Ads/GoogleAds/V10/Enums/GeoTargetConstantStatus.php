<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/enums/geo_target_constant_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Enums;

class GeoTargetConstantStatus
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
?google/ads/googleads/v10/enums/geo_target_constant_status.protogoogle.ads.googleads.v10.enums"x
GeoTargetConstantStatusEnum"Y
GeoTargetConstantStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVAL_PLANNEDB�
"com.google.ads.googleads.v10.enumsBGeoTargetConstantStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

