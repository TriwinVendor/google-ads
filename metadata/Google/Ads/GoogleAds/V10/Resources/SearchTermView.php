<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/search_term_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class SearchTermView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/ads/googleads/v10/enums/search_term_targeting_status.protogoogle.ads.googleads.v10.enums"�
SearchTermTargetingStatusEnum"p
SearchTermTargetingStatus
UNSPECIFIED 
UNKNOWN	
ADDED
EXCLUDED
ADDED_EXCLUDED
NONEB�
"com.google.ads.googleads.v10.enumsBSearchTermTargetingStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
9google/ads/googleads/v10/resources/search_term_view.proto"google.ads.googleads.v10.resourcesgoogle/api/annotations.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
SearchTermViewF
resource_name (	B/�A�A)
\'googleads.googleapis.com/SearchTermView
search_term (	B�AH �?
ad_group (	B(�A�A"
 googleads.googleapis.com/AdGroupH�l
status (2W.google.ads.googleads.v10.enums.SearchTermTargetingStatusEnum.SearchTermTargetingStatusB�A:y�Av
\'googleads.googleapis.com/SearchTermViewKcustomers/{customer_id}/searchTermViews/{campaign_id}~{ad_group_id}~{query}B
_search_termB
	_ad_groupB�
&com.google.ads.googleads.v10.resourcesBSearchTermViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

