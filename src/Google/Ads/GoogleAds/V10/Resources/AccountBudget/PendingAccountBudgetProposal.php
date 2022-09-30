<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/account_budget.proto

namespace Google\Ads\GoogleAds\V10\Resources\AccountBudget;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A pending proposal associated with the enclosing account-level budget,
 * if applicable.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.resources.AccountBudget.PendingAccountBudgetProposal</code>
 */
class PendingAccountBudgetProposal extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>optional string account_budget_proposal = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $account_budget_proposal = null;
    /**
     * Output only. The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $proposal_type = 0;
    /**
     * Output only. The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>optional string name = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>optional string start_date_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_date_time = null;
    /**
     * Output only. A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>optional string purchase_order_number = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $purchase_order_number = null;
    /**
     * Output only. Notes associated with this budget.
     *
     * Generated from protobuf field <code>optional string notes = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $notes = null;
    /**
     * Output only. The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>optional string creation_date_time = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creation_date_time = null;
    protected $end_time;
    protected $spending_limit;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_budget_proposal
     *           Output only. The resource name of the proposal.
     *           AccountBudgetProposal resource names have the form:
     *           `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *     @type int $proposal_type
     *           Output only. The type of this proposal, e.g. END to end the budget associated
     *           with this proposal.
     *     @type string $name
     *           Output only. The name to assign to the account-level budget.
     *     @type string $start_date_time
     *           Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *     @type string $purchase_order_number
     *           Output only. A purchase order number is a value that helps users reference this budget
     *           in their monthly invoices.
     *     @type string $notes
     *           Output only. Notes associated with this budget.
     *     @type string $creation_date_time
     *           Output only. The time when this account-level budget proposal was created.
     *           Formatted as yyyy-MM-dd HH:mm:ss.
     *     @type string $end_date_time
     *           Output only. The end time in yyyy-MM-dd HH:mm:ss format.
     *     @type int $end_time_type
     *           Output only. The end time as a well-defined type, e.g. FOREVER.
     *     @type int|string $spending_limit_micros
     *           Output only. The spending limit in micros.  One million is equivalent to
     *           one unit.
     *     @type int $spending_limit_type
     *           Output only. The spending limit as a well-defined type, e.g. INFINITE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Resources\AccountBudget::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>optional string account_budget_proposal = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAccountBudgetProposal()
    {
        return isset($this->account_budget_proposal) ? $this->account_budget_proposal : '';
    }

    public function hasAccountBudgetProposal()
    {
        return isset($this->account_budget_proposal);
    }

    public function clearAccountBudgetProposal()
    {
        unset($this->account_budget_proposal);
    }

    /**
     * Output only. The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>optional string account_budget_proposal = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAccountBudgetProposal($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_budget_proposal = $var;

        return $this;
    }

    /**
     * Output only. The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getProposalType()
    {
        return $this->proposal_type;
    }

    /**
     * Output only. The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setProposalType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\AccountBudgetProposalTypeEnum\AccountBudgetProposalType::class);
        $this->proposal_type = $var;

        return $this;
    }

    /**
     * Output only. The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>optional string name = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Output only. The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>optional string name = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>optional string start_date_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStartDateTime()
    {
        return isset($this->start_date_time) ? $this->start_date_time : '';
    }

    public function hasStartDateTime()
    {
        return isset($this->start_date_time);
    }

    public function clearStartDateTime()
    {
        unset($this->start_date_time);
    }

    /**
     * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>optional string start_date_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * Output only. A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>optional string purchase_order_number = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return isset($this->purchase_order_number) ? $this->purchase_order_number : '';
    }

    public function hasPurchaseOrderNumber()
    {
        return isset($this->purchase_order_number);
    }

    public function clearPurchaseOrderNumber()
    {
        unset($this->purchase_order_number);
    }

    /**
     * Output only. A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>optional string purchase_order_number = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPurchaseOrderNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->purchase_order_number = $var;

        return $this;
    }

    /**
     * Output only. Notes associated with this budget.
     *
     * Generated from protobuf field <code>optional string notes = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getNotes()
    {
        return isset($this->notes) ? $this->notes : '';
    }

    public function hasNotes()
    {
        return isset($this->notes);
    }

    public function clearNotes()
    {
        unset($this->notes);
    }

    /**
     * Output only. Notes associated with this budget.
     *
     * Generated from protobuf field <code>optional string notes = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setNotes($var)
    {
        GPBUtil::checkString($var, True);
        $this->notes = $var;

        return $this;
    }

    /**
     * Output only. The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>optional string creation_date_time = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCreationDateTime()
    {
        return isset($this->creation_date_time) ? $this->creation_date_time : '';
    }

    public function hasCreationDateTime()
    {
        return isset($this->creation_date_time);
    }

    public function clearCreationDateTime()
    {
        unset($this->creation_date_time);
    }

    /**
     * Output only. The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>optional string creation_date_time = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCreationDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_date_time = $var;

        return $this;
    }

    /**
     * Output only. The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>string end_date_time = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->readOneof(15);
    }

    public function hasEndDateTime()
    {
        return $this->hasOneof(15);
    }

    /**
     * Output only. The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>string end_date_time = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Output only. The end time as a well-defined type, e.g. FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.TimeTypeEnum.TimeType end_time_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEndTimeType()
    {
        return $this->readOneof(6);
    }

    public function hasEndTimeType()
    {
        return $this->hasOneof(6);
    }

    /**
     * Output only. The end time as a well-defined type, e.g. FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.TimeTypeEnum.TimeType end_time_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEndTimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\TimeTypeEnum\TimeType::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>int64 spending_limit_micros = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSpendingLimitMicros()
    {
        return $this->readOneof(16);
    }

    public function hasSpendingLimitMicros()
    {
        return $this->hasOneof(16);
    }

    /**
     * Output only. The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>int64 spending_limit_micros = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSpendingLimitMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Output only. The spending limit as a well-defined type, e.g. INFINITE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.SpendingLimitTypeEnum.SpendingLimitType spending_limit_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSpendingLimitType()
    {
        return $this->readOneof(8);
    }

    public function hasSpendingLimitType()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. The spending limit as a well-defined type, e.g. INFINITE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.SpendingLimitTypeEnum.SpendingLimitType spending_limit_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSpendingLimitType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\SpendingLimitTypeEnum\SpendingLimitType::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->whichOneof("end_time");
    }

    /**
     * @return string
     */
    public function getSpendingLimit()
    {
        return $this->whichOneof("spending_limit");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PendingAccountBudgetProposal::class, \Google\Ads\GoogleAds\V10\Resources\AccountBudget_PendingAccountBudgetProposal::class);

