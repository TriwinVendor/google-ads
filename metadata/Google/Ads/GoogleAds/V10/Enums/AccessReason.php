<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/enums/access_reason.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Enums;

class AccessReason
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
2google/ads/googleads/v10/enums/access_reason.protogoogle.ads.googleads.v10.enums"�
AccessReasonEnum"q
AccessReason
UNSPECIFIED 
UNKNOWN	
OWNED

SHARED
LICENSED

SUBSCRIBED

AFFILIATEDB�
"com.google.ads.googleads.v10.enumsBAccessReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

