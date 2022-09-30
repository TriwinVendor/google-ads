<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/keyword_plan_campaign_keyword_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Services;

class KeywordPlanCampaignKeywordService
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
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v10/enums/keyword_match_type.protogoogle.ads.googleads.v10.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
"com.google.ads.googleads.v10.enumsBKeywordMatchTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
Fgoogle/ads/googleads/v10/resources/keyword_plan_campaign_keyword.proto"google.ads.googleads.v10.resourcesgoogle/api/annotations.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
KeywordPlanCampaignKeywordR
resource_name (	B;�A�A5
3googleads.googleapis.com/KeywordPlanCampaignKeywordU
keyword_plan_campaign (	B1�A.
,googleads.googleapis.com/KeywordPlanCampaignH �
id	 (B�AH�
text
 (	H�Y

match_type (2E.google.ads.googleads.v10.enums.KeywordMatchTypeEnum.KeywordMatchType
negative (B�AH�:��A�
3googleads.googleapis.com/KeywordPlanCampaignKeywordVcustomers/{customer_id}/keywordPlanCampaignKeywords/{keyword_plan_campaign_keyword_id}B
_keyword_plan_campaignB
_idB
_textB
	_negativeB�
&com.google.ads.googleads.v10.resourcesBKeywordPlanCampaignKeywordProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3
�
Mgoogle/ads/googleads/v10/services/keyword_plan_campaign_keyword_service.proto!google.ads.googleads.v10.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
(MutateKeywordPlanCampaignKeywordsRequest
customer_id (	B�A_

operations (2F.google.ads.googleads.v10.services.KeywordPlanCampaignKeywordOperationB�A
partial_failure (
validate_only ("�
#KeywordPlanCampaignKeywordOperation/
update_mask (2.google.protobuf.FieldMaskP
create (2>.google.ads.googleads.v10.resources.KeywordPlanCampaignKeywordH P
update (2>.google.ads.googleads.v10.resources.KeywordPlanCampaignKeywordH J
remove (	B8�A5
3googleads.googleapis.com/KeywordPlanCampaignKeywordH B
	operation"�
)MutateKeywordPlanCampaignKeywordsResponse1
partial_failure_error (2.google.rpc.StatusZ
results (2I.google.ads.googleads.v10.services.MutateKeywordPlanCampaignKeywordResult"y
&MutateKeywordPlanCampaignKeywordResultO
resource_name (	B8�A5
3googleads.googleapis.com/KeywordPlanCampaignKeyword2�
!KeywordPlanCampaignKeywordService�
!MutateKeywordPlanCampaignKeywordsK.google.ads.googleads.v10.services.MutateKeywordPlanCampaignKeywordsRequestL.google.ads.googleads.v10.services.MutateKeywordPlanCampaignKeywordsResponse"e���F"A/v10/customers/{customer_id=*}/keywordPlanCampaignKeywords:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v10.servicesB&KeywordPlanCampaignKeywordServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v10/services;services�GAA�!Google.Ads.GoogleAds.V10.Services�!Google\\Ads\\GoogleAds\\V10\\Services�%Google::Ads::GoogleAds::V10::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

