<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/common/click_location.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Common;

class ClickLocation
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
�
4google/ads/googleads/v10/common/click_location.protogoogle.ads.googleads.v10.common"�
ClickLocation
city (	H �
country (	H�
metro (	H�
most_specific	 (	H�
region
 (	H�B
_cityB

_countryB
_metroB
_most_specificB	
_regionB�
#com.google.ads.googleads.v10.commonBClickLocationProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/common;common�GAA�Google.Ads.GoogleAds.V10.Common�Google\\Ads\\GoogleAds\\V10\\Common�#Google::Ads::GoogleAds::V10::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

