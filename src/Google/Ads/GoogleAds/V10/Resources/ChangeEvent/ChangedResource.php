<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/change_event.proto

namespace Google\Ads\GoogleAds\V10\Resources\ChangeEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A wrapper proto presenting all supported resources.
 * Only the resource of the change_resource_type will be set.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.resources.ChangeEvent.ChangedResource</code>
 */
class ChangedResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Set if change_resource_type == AD.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Ad ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad = null;
    /**
     * Output only. Set if change_resource_type == AD_GROUP.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroup ad_group = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_group = null;
    /**
     * Output only. Set if change_resource_type == AD_GROUP_CRITERION.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupCriterion ad_group_criterion = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_group_criterion = null;
    /**
     * Output only. Set if change_resource_type == CAMPAIGN.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Campaign campaign = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign = null;
    /**
     * Output only. Set if change_resource_type == CAMPAIGN_BUDGET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignBudget campaign_budget = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_budget = null;
    /**
     * Output only. Set if change_resource_type == AD_GROUP_BID_MODIFIER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupBidModifier ad_group_bid_modifier = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_group_bid_modifier = null;
    /**
     * Output only. Set if change_resource_type == CAMPAIGN_CRITERION.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignCriterion campaign_criterion = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_criterion = null;
    /**
     * Output only. Set if change_resource_type == FEED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Feed feed = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $feed = null;
    /**
     * Output only. Set if change_resource_type == FEED_ITEM.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.FeedItem feed_item = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $feed_item = null;
    /**
     * Output only. Set if change_resource_type == CAMPAIGN_FEED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignFeed campaign_feed = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_feed = null;
    /**
     * Output only. Set if change_resource_type == AD_GROUP_FEED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupFeed ad_group_feed = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_group_feed = null;
    /**
     * Output only. Set if change_resource_type == AD_GROUP_AD.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupAd ad_group_ad = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_group_ad = null;
    /**
     * Output only. Set if change_resource_type == ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Asset asset = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $asset = null;
    /**
     * Output only. Set if change_resource_type == CUSTOMER_ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CustomerAsset customer_asset = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $customer_asset = null;
    /**
     * Output only. Set if change_resource_type == CAMPAIGN_ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignAsset campaign_asset = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_asset = null;
    /**
     * Output only. Set if change_resource_type == AD_GROUP_ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupAsset ad_group_asset = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_group_asset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V10\Resources\Ad $ad
     *           Output only. Set if change_resource_type == AD.
     *     @type \Google\Ads\GoogleAds\V10\Resources\AdGroup $ad_group
     *           Output only. Set if change_resource_type == AD_GROUP.
     *     @type \Google\Ads\GoogleAds\V10\Resources\AdGroupCriterion $ad_group_criterion
     *           Output only. Set if change_resource_type == AD_GROUP_CRITERION.
     *     @type \Google\Ads\GoogleAds\V10\Resources\Campaign $campaign
     *           Output only. Set if change_resource_type == CAMPAIGN.
     *     @type \Google\Ads\GoogleAds\V10\Resources\CampaignBudget $campaign_budget
     *           Output only. Set if change_resource_type == CAMPAIGN_BUDGET.
     *     @type \Google\Ads\GoogleAds\V10\Resources\AdGroupBidModifier $ad_group_bid_modifier
     *           Output only. Set if change_resource_type == AD_GROUP_BID_MODIFIER.
     *     @type \Google\Ads\GoogleAds\V10\Resources\CampaignCriterion $campaign_criterion
     *           Output only. Set if change_resource_type == CAMPAIGN_CRITERION.
     *     @type \Google\Ads\GoogleAds\V10\Resources\Feed $feed
     *           Output only. Set if change_resource_type == FEED.
     *     @type \Google\Ads\GoogleAds\V10\Resources\FeedItem $feed_item
     *           Output only. Set if change_resource_type == FEED_ITEM.
     *     @type \Google\Ads\GoogleAds\V10\Resources\CampaignFeed $campaign_feed
     *           Output only. Set if change_resource_type == CAMPAIGN_FEED.
     *     @type \Google\Ads\GoogleAds\V10\Resources\AdGroupFeed $ad_group_feed
     *           Output only. Set if change_resource_type == AD_GROUP_FEED.
     *     @type \Google\Ads\GoogleAds\V10\Resources\AdGroupAd $ad_group_ad
     *           Output only. Set if change_resource_type == AD_GROUP_AD.
     *     @type \Google\Ads\GoogleAds\V10\Resources\Asset $asset
     *           Output only. Set if change_resource_type == ASSET.
     *     @type \Google\Ads\GoogleAds\V10\Resources\CustomerAsset $customer_asset
     *           Output only. Set if change_resource_type == CUSTOMER_ASSET.
     *     @type \Google\Ads\GoogleAds\V10\Resources\CampaignAsset $campaign_asset
     *           Output only. Set if change_resource_type == CAMPAIGN_ASSET.
     *     @type \Google\Ads\GoogleAds\V10\Resources\AdGroupAsset $ad_group_asset
     *           Output only. Set if change_resource_type == AD_GROUP_ASSET.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Resources\ChangeEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Set if change_resource_type == AD.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Ad ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\Ad|null
     */
    public function getAd()
    {
        return $this->ad;
    }

    public function hasAd()
    {
        return isset($this->ad);
    }

    public function clearAd()
    {
        unset($this->ad);
    }

    /**
     * Output only. Set if change_resource_type == AD.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Ad ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\Ad $var
     * @return $this
     */
    public function setAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\Ad::class);
        $this->ad = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroup ad_group = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\AdGroup|null
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    public function hasAdGroup()
    {
        return isset($this->ad_group);
    }

    public function clearAdGroup()
    {
        unset($this->ad_group);
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroup ad_group = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\AdGroup $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\AdGroup::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_CRITERION.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupCriterion ad_group_criterion = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\AdGroupCriterion|null
     */
    public function getAdGroupCriterion()
    {
        return $this->ad_group_criterion;
    }

    public function hasAdGroupCriterion()
    {
        return isset($this->ad_group_criterion);
    }

    public function clearAdGroupCriterion()
    {
        unset($this->ad_group_criterion);
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_CRITERION.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupCriterion ad_group_criterion = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\AdGroupCriterion $var
     * @return $this
     */
    public function setAdGroupCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\AdGroupCriterion::class);
        $this->ad_group_criterion = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Campaign campaign = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\Campaign|null
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    public function hasCampaign()
    {
        return isset($this->campaign);
    }

    public function clearCampaign()
    {
        unset($this->campaign);
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Campaign campaign = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\Campaign $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\Campaign::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN_BUDGET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignBudget campaign_budget = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\CampaignBudget|null
     */
    public function getCampaignBudget()
    {
        return $this->campaign_budget;
    }

    public function hasCampaignBudget()
    {
        return isset($this->campaign_budget);
    }

    public function clearCampaignBudget()
    {
        unset($this->campaign_budget);
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN_BUDGET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignBudget campaign_budget = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\CampaignBudget $var
     * @return $this
     */
    public function setCampaignBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\CampaignBudget::class);
        $this->campaign_budget = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_BID_MODIFIER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupBidModifier ad_group_bid_modifier = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\AdGroupBidModifier|null
     */
    public function getAdGroupBidModifier()
    {
        return $this->ad_group_bid_modifier;
    }

    public function hasAdGroupBidModifier()
    {
        return isset($this->ad_group_bid_modifier);
    }

    public function clearAdGroupBidModifier()
    {
        unset($this->ad_group_bid_modifier);
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_BID_MODIFIER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupBidModifier ad_group_bid_modifier = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\AdGroupBidModifier $var
     * @return $this
     */
    public function setAdGroupBidModifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\AdGroupBidModifier::class);
        $this->ad_group_bid_modifier = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN_CRITERION.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignCriterion campaign_criterion = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\CampaignCriterion|null
     */
    public function getCampaignCriterion()
    {
        return $this->campaign_criterion;
    }

    public function hasCampaignCriterion()
    {
        return isset($this->campaign_criterion);
    }

    public function clearCampaignCriterion()
    {
        unset($this->campaign_criterion);
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN_CRITERION.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignCriterion campaign_criterion = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\CampaignCriterion $var
     * @return $this
     */
    public function setCampaignCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\CampaignCriterion::class);
        $this->campaign_criterion = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == FEED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Feed feed = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\Feed|null
     */
    public function getFeed()
    {
        return $this->feed;
    }

    public function hasFeed()
    {
        return isset($this->feed);
    }

    public function clearFeed()
    {
        unset($this->feed);
    }

    /**
     * Output only. Set if change_resource_type == FEED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Feed feed = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\Feed $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\Feed::class);
        $this->feed = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == FEED_ITEM.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.FeedItem feed_item = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\FeedItem|null
     */
    public function getFeedItem()
    {
        return $this->feed_item;
    }

    public function hasFeedItem()
    {
        return isset($this->feed_item);
    }

    public function clearFeedItem()
    {
        unset($this->feed_item);
    }

    /**
     * Output only. Set if change_resource_type == FEED_ITEM.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.FeedItem feed_item = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\FeedItem $var
     * @return $this
     */
    public function setFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\FeedItem::class);
        $this->feed_item = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN_FEED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignFeed campaign_feed = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\CampaignFeed|null
     */
    public function getCampaignFeed()
    {
        return $this->campaign_feed;
    }

    public function hasCampaignFeed()
    {
        return isset($this->campaign_feed);
    }

    public function clearCampaignFeed()
    {
        unset($this->campaign_feed);
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN_FEED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignFeed campaign_feed = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\CampaignFeed $var
     * @return $this
     */
    public function setCampaignFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\CampaignFeed::class);
        $this->campaign_feed = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_FEED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupFeed ad_group_feed = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\AdGroupFeed|null
     */
    public function getAdGroupFeed()
    {
        return $this->ad_group_feed;
    }

    public function hasAdGroupFeed()
    {
        return isset($this->ad_group_feed);
    }

    public function clearAdGroupFeed()
    {
        unset($this->ad_group_feed);
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_FEED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupFeed ad_group_feed = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\AdGroupFeed $var
     * @return $this
     */
    public function setAdGroupFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\AdGroupFeed::class);
        $this->ad_group_feed = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_AD.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupAd ad_group_ad = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\AdGroupAd|null
     */
    public function getAdGroupAd()
    {
        return $this->ad_group_ad;
    }

    public function hasAdGroupAd()
    {
        return isset($this->ad_group_ad);
    }

    public function clearAdGroupAd()
    {
        unset($this->ad_group_ad);
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_AD.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupAd ad_group_ad = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\AdGroupAd $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\AdGroupAd::class);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Asset asset = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\Asset|null
     */
    public function getAsset()
    {
        return $this->asset;
    }

    public function hasAsset()
    {
        return isset($this->asset);
    }

    public function clearAsset()
    {
        unset($this->asset);
    }

    /**
     * Output only. Set if change_resource_type == ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.Asset asset = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\Asset $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\Asset::class);
        $this->asset = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == CUSTOMER_ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CustomerAsset customer_asset = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\CustomerAsset|null
     */
    public function getCustomerAsset()
    {
        return $this->customer_asset;
    }

    public function hasCustomerAsset()
    {
        return isset($this->customer_asset);
    }

    public function clearCustomerAsset()
    {
        unset($this->customer_asset);
    }

    /**
     * Output only. Set if change_resource_type == CUSTOMER_ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CustomerAsset customer_asset = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\CustomerAsset $var
     * @return $this
     */
    public function setCustomerAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\CustomerAsset::class);
        $this->customer_asset = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN_ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignAsset campaign_asset = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\CampaignAsset|null
     */
    public function getCampaignAsset()
    {
        return $this->campaign_asset;
    }

    public function hasCampaignAsset()
    {
        return isset($this->campaign_asset);
    }

    public function clearCampaignAsset()
    {
        unset($this->campaign_asset);
    }

    /**
     * Output only. Set if change_resource_type == CAMPAIGN_ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.CampaignAsset campaign_asset = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\CampaignAsset $var
     * @return $this
     */
    public function setCampaignAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\CampaignAsset::class);
        $this->campaign_asset = $var;

        return $this;
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupAsset ad_group_asset = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V10\Resources\AdGroupAsset|null
     */
    public function getAdGroupAsset()
    {
        return $this->ad_group_asset;
    }

    public function hasAdGroupAsset()
    {
        return isset($this->ad_group_asset);
    }

    public function clearAdGroupAsset()
    {
        unset($this->ad_group_asset);
    }

    /**
     * Output only. Set if change_resource_type == AD_GROUP_ASSET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.resources.AdGroupAsset ad_group_asset = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V10\Resources\AdGroupAsset $var
     * @return $this
     */
    public function setAdGroupAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Resources\AdGroupAsset::class);
        $this->ad_group_asset = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChangedResource::class, \Google\Ads\GoogleAds\V10\Resources\ChangeEvent_ChangedResource::class);

