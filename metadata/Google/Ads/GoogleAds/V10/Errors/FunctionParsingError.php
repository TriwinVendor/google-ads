<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/function_parsing_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class FunctionParsingError
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
�
<google/ads/googleads/v10/errors/function_parsing_error.protogoogle.ads.googleads.v10.errors"�
FunctionParsingErrorEnum"�
FunctionParsingError
UNSPECIFIED 
UNKNOWN
NO_MORE_INPUT
EXPECTED_CHARACTER
UNEXPECTED_SEPARATOR
UNMATCHED_LEFT_BRACKET
UNMATCHED_RIGHT_BRACKET
TOO_MANY_NESTED_FUNCTIONS
MISSING_RIGHT_HAND_OPERAND
INVALID_OPERATOR_NAME	/
+FEED_ATTRIBUTE_OPERAND_ARGUMENT_NOT_INTEGER

NO_OPERANDS
TOO_MANY_OPERANDSB�
#com.google.ads.googleads.v10.errorsBFunctionParsingErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

