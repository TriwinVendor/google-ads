<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/enums/custom_interest_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Enums;

class CustomInterestType
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
9google/ads/googleads/v10/enums/custom_interest_type.protogoogle.ads.googleads.v10.enums"t
CustomInterestTypeEnum"Z
CustomInterestType
UNSPECIFIED 
UNKNOWN
CUSTOM_AFFINITY
CUSTOM_INTENTB�
"com.google.ads.googleads.v10.enumsBCustomInterestTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

