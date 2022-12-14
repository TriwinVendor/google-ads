<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/string_length_error.proto

namespace Google\Ads\GoogleAds\V10\Errors\StringLengthErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible string length errors.
 *
 * Protobuf type <code>google.ads.googleads.v10.errors.StringLengthErrorEnum.StringLengthError</code>
 */
class StringLengthError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The specified field should have a least one non-whitespace character in
     * it.
     *
     * Generated from protobuf enum <code>EMPTY = 4;</code>
     */
    const PBEMPTY = 4;
    /**
     * Too short.
     *
     * Generated from protobuf enum <code>TOO_SHORT = 2;</code>
     */
    const TOO_SHORT = 2;
    /**
     * Too long.
     *
     * Generated from protobuf enum <code>TOO_LONG = 3;</code>
     */
    const TOO_LONG = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PBEMPTY => 'PBEMPTY',
        self::TOO_SHORT => 'TOO_SHORT',
        self::TOO_LONG => 'TOO_LONG',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StringLengthError::class, \Google\Ads\GoogleAds\V10\Errors\StringLengthErrorEnum_StringLengthError::class);

