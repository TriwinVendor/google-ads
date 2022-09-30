<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/customer_conversion_goal_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Services;

class CustomerConversionGoalService
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v10/enums/conversion_action_category.protogoogle.ads.googleads.v10.enums"�
ConversionActionCategoryEnum"�
ConversionActionCategory
UNSPECIFIED 
UNKNOWN
DEFAULT
	PAGE_VIEW
PURCHASE

SIGNUP
DOWNLOAD
ADD_TO_CART
BEGIN_CHECKOUT	
SUBSCRIBE_PAID

PHONE_CALL_LEAD
IMPORTED_LEAD
SUBMIT_LEAD_FORM
BOOK_APPOINTMENT
REQUEST_QUOTE
GET_DIRECTIONS
OUTBOUND_CLICK
CONTACT

ENGAGEMENT
STORE_VISIT

STORE_SALE
QUALIFIED_LEAD
CONVERTED_LEADB�
"com.google.ads.googleads.v10.enumsBConversionActionCategoryProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
6google/ads/googleads/v10/enums/conversion_origin.protogoogle.ads.googleads.v10.enums"�
ConversionOriginEnum"�
ConversionOrigin
UNSPECIFIED 
UNKNOWN
WEBSITE
GOOGLE_HOSTED
APP
CALL_FROM_ADS	
STORE
YOUTUBE_HOSTEDB�
"com.google.ads.googleads.v10.enumsBConversionOriginProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
Agoogle/ads/googleads/v10/resources/customer_conversion_goal.proto"google.ads.googleads.v10.resources6google/ads/googleads/v10/enums/conversion_origin.protogoogle/api/annotations.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerConversionGoalN
resource_name (	B7�A�A1
/googleads.googleapis.com/CustomerConversionGoalg
category (2U.google.ads.googleads.v10.enums.ConversionActionCategoryEnum.ConversionActionCategoryU
origin (2E.google.ads.googleads.v10.enums.ConversionOriginEnum.ConversionOrigin
biddable (:y�Av
/googleads.googleapis.com/CustomerConversionGoalCcustomers/{customer_id}/customerConversionGoals/{category}~{source}B�
&com.google.ads.googleads.v10.resourcesBCustomerConversionGoalProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3
�
Hgoogle/ads/googleads/v10/services/customer_conversion_goal_service.proto!google.ads.googleads.v10.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"�
$MutateCustomerConversionGoalsRequest
customer_id (	B�A[

operations (2B.google.ads.googleads.v10.services.CustomerConversionGoalOperationB�A
validate_only ("�
CustomerConversionGoalOperation/
update_mask (2.google.protobuf.FieldMaskL
update (2:.google.ads.googleads.v10.resources.CustomerConversionGoalH B
	operation"
%MutateCustomerConversionGoalsResponseV
results (2E.google.ads.googleads.v10.services.MutateCustomerConversionGoalResult"q
"MutateCustomerConversionGoalResultK
resource_name (	B4�A1
/googleads.googleapis.com/CustomerConversionGoal2�
CustomerConversionGoalService�
MutateCustomerConversionGoalsG.google.ads.googleads.v10.services.MutateCustomerConversionGoalsRequestH.google.ads.googleads.v10.services.MutateCustomerConversionGoalsResponse"a���B"=/v10/customers/{customer_id=*}/customerConversionGoals:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v10.servicesB"CustomerConversionGoalServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v10/services;services�GAA�!Google.Ads.GoogleAds.V10.Services�!Google\\Ads\\GoogleAds\\V10\\Services�%Google::Ads::GoogleAds::V10::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

