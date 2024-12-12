<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to update a analysis rule.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.UpdateAnalysisRuleRequest</code>
 */
class UpdateAnalysisRuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new analysis rule.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnalysisRule analysis_rule = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $analysis_rule = null;
    /**
     * Optional. The list of fields to be updated.
     * If the update_mask is not provided, the update will be applied to all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\ContactCenterInsights\V1\AnalysisRule $analysisRule Required. The new analysis rule.
     * @param \Google\Protobuf\FieldMask                          $updateMask   Optional. The list of fields to be updated.
     *                                                                          If the update_mask is not provided, the update will be applied to all
     *                                                                          fields.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\UpdateAnalysisRuleRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ContactCenterInsights\V1\AnalysisRule $analysisRule, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAnalysisRule($analysisRule)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\AnalysisRule $analysis_rule
     *           Required. The new analysis rule.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The list of fields to be updated.
     *           If the update_mask is not provided, the update will be applied to all
     *           fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new analysis rule.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnalysisRule analysis_rule = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\AnalysisRule|null
     */
    public function getAnalysisRule()
    {
        return $this->analysis_rule;
    }

    public function hasAnalysisRule()
    {
        return isset($this->analysis_rule);
    }

    public function clearAnalysisRule()
    {
        unset($this->analysis_rule);
    }

    /**
     * Required. The new analysis rule.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnalysisRule analysis_rule = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\AnalysisRule $var
     * @return $this
     */
    public function setAnalysisRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\AnalysisRule::class);
        $this->analysis_rule = $var;

        return $this;
    }

    /**
     * Optional. The list of fields to be updated.
     * If the update_mask is not provided, the update will be applied to all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The list of fields to be updated.
     * If the update_mask is not provided, the update will be applied to all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
