<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/common/dates.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Common;

class Dates
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
2google/ads/googleads/v10/enums/month_of_year.protogoogle.ads.googleads.v10.enums"�
MonthOfYearEnum"�
MonthOfYear
UNSPECIFIED 
UNKNOWN
JANUARY
FEBRUARY	
MARCH	
APRIL
MAY
JUNE
JULY

AUGUST	
	SEPTEMBER

OCTOBER
NOVEMBER
DECEMBERB�
"com.google.ads.googleads.v10.enumsBMonthOfYearProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
+google/ads/googleads/v10/common/dates.protogoogle.ads.googleads.v10.commongoogle/api/annotations.proto"W
	DateRange

start_date (	H �
end_date (	H�B
_start_dateB
	_end_date"�
YearMonthRange9
start (2*.google.ads.googleads.v10.common.YearMonth7
end (2*.google.ads.googleads.v10.common.YearMonth"e
	YearMonth
year (J
month (2;.google.ads.googleads.v10.enums.MonthOfYearEnum.MonthOfYearB�
#com.google.ads.googleads.v10.commonB
DatesProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/common;common�GAA�Google.Ads.GoogleAds.V10.Common�Google\\Ads\\GoogleAds\\V10\\Common�#Google::Ads::GoogleAds::V10::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

