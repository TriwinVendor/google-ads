<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/common/keyword_plan_common.proto

namespace Google\Ads\GoogleAds\V10\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Monthly search volume.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.common.MonthlySearchVolume</code>
 */
class MonthlySearchVolume extends \Google\Protobuf\Internal\Message
{
    /**
     * The year of the search volume (e.g. 2020).
     *
     * Generated from protobuf field <code>optional int64 year = 4;</code>
     */
    protected $year = null;
    /**
     * The month of the search volume.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
     */
    protected $month = 0;
    /**
     * Approximate number of searches for the month.
     * A null value indicates the search volume is unavailable for
     * that month.
     *
     * Generated from protobuf field <code>optional int64 monthly_searches = 5;</code>
     */
    protected $monthly_searches = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $year
     *           The year of the search volume (e.g. 2020).
     *     @type int $month
     *           The month of the search volume.
     *     @type int|string $monthly_searches
     *           Approximate number of searches for the month.
     *           A null value indicates the search volume is unavailable for
     *           that month.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Common\KeywordPlanCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The year of the search volume (e.g. 2020).
     *
     * Generated from protobuf field <code>optional int64 year = 4;</code>
     * @return int|string
     */
    public function getYear()
    {
        return isset($this->year) ? $this->year : 0;
    }

    public function hasYear()
    {
        return isset($this->year);
    }

    public function clearYear()
    {
        unset($this->year);
    }

    /**
     * The year of the search volume (e.g. 2020).
     *
     * Generated from protobuf field <code>optional int64 year = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setYear($var)
    {
        GPBUtil::checkInt64($var);
        $this->year = $var;

        return $this;
    }

    /**
     * The month of the search volume.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * The month of the search volume.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMonth($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\MonthOfYearEnum\MonthOfYear::class);
        $this->month = $var;

        return $this;
    }

    /**
     * Approximate number of searches for the month.
     * A null value indicates the search volume is unavailable for
     * that month.
     *
     * Generated from protobuf field <code>optional int64 monthly_searches = 5;</code>
     * @return int|string
     */
    public function getMonthlySearches()
    {
        return isset($this->monthly_searches) ? $this->monthly_searches : 0;
    }

    public function hasMonthlySearches()
    {
        return isset($this->monthly_searches);
    }

    public function clearMonthlySearches()
    {
        unset($this->monthly_searches);
    }

    /**
     * Approximate number of searches for the month.
     * A null value indicates the search volume is unavailable for
     * that month.
     *
     * Generated from protobuf field <code>optional int64 monthly_searches = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMonthlySearches($var)
    {
        GPBUtil::checkInt64($var);
        $this->monthly_searches = $var;

        return $this;
    }

}

