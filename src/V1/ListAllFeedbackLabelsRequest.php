<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for listing all feedback labels.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.ListAllFeedbackLabelsRequest</code>
 */
class ListAllFeedbackLabelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of all feedback labels per project.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of feedback labels to return in the response.
     * A valid page size ranges from 0 to 100,000 inclusive. If the page size is
     * zero or unspecified, a default page size of 100 will be chosen. Note that a
     * call might return fewer results than the requested page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The value returned by the last `ListAllFeedbackLabelsResponse`.
     * This value indicates that this is a continuation of a prior
     * `ListAllFeedbackLabels` call and that the system should return the next
     * page of data.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. A filter to reduce results to a specific subset in the entire
     * project. Supports disjunctions (OR) and conjunctions (AND).
     * Supported fields:
     * * `issue_model_id`
     * * `qa_question_id`
     * * `min_create_time`
     * * `max_create_time`
     * * `min_update_time`
     * * `max_update_time`
     * * `feedback_label_type`: QUALITY_AI, TOPIC_MODELING
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. The parent resource of all feedback labels per project. Please see
     *                       {@see ContactCenterInsightsClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\ListAllFeedbackLabelsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of all feedback labels per project.
     *     @type int $page_size
     *           Optional. The maximum number of feedback labels to return in the response.
     *           A valid page size ranges from 0 to 100,000 inclusive. If the page size is
     *           zero or unspecified, a default page size of 100 will be chosen. Note that a
     *           call might return fewer results than the requested page size.
     *     @type string $page_token
     *           Optional. The value returned by the last `ListAllFeedbackLabelsResponse`.
     *           This value indicates that this is a continuation of a prior
     *           `ListAllFeedbackLabels` call and that the system should return the next
     *           page of data.
     *     @type string $filter
     *           Optional. A filter to reduce results to a specific subset in the entire
     *           project. Supports disjunctions (OR) and conjunctions (AND).
     *           Supported fields:
     *           * `issue_model_id`
     *           * `qa_question_id`
     *           * `min_create_time`
     *           * `max_create_time`
     *           * `min_update_time`
     *           * `max_update_time`
     *           * `feedback_label_type`: QUALITY_AI, TOPIC_MODELING
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of all feedback labels per project.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of all feedback labels per project.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of feedback labels to return in the response.
     * A valid page size ranges from 0 to 100,000 inclusive. If the page size is
     * zero or unspecified, a default page size of 100 will be chosen. Note that a
     * call might return fewer results than the requested page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of feedback labels to return in the response.
     * A valid page size ranges from 0 to 100,000 inclusive. If the page size is
     * zero or unspecified, a default page size of 100 will be chosen. Note that a
     * call might return fewer results than the requested page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The value returned by the last `ListAllFeedbackLabelsResponse`.
     * This value indicates that this is a continuation of a prior
     * `ListAllFeedbackLabels` call and that the system should return the next
     * page of data.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The value returned by the last `ListAllFeedbackLabelsResponse`.
     * This value indicates that this is a continuation of a prior
     * `ListAllFeedbackLabels` call and that the system should return the next
     * page of data.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. A filter to reduce results to a specific subset in the entire
     * project. Supports disjunctions (OR) and conjunctions (AND).
     * Supported fields:
     * * `issue_model_id`
     * * `qa_question_id`
     * * `min_create_time`
     * * `max_create_time`
     * * `min_update_time`
     * * `max_update_time`
     * * `feedback_label_type`: QUALITY_AI, TOPIC_MODELING
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A filter to reduce results to a specific subset in the entire
     * project. Supports disjunctions (OR) and conjunctions (AND).
     * Supported fields:
     * * `issue_model_id`
     * * `qa_question_id`
     * * `min_create_time`
     * * `max_create_time`
     * * `min_update_time`
     * * `max_update_time`
     * * `feedback_label_type`: QUALITY_AI, TOPIC_MODELING
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}
