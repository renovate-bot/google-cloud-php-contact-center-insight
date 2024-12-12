<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\QaQuestion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata about the tuning operation for the question. Will only be set if a
 * scorecard containing this question has been tuned.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.QaQuestion.TuningMetadata</code>
 */
class TuningMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Total number of valid labels provided for the question at the time of
     * tuining.
     *
     * Generated from protobuf field <code>int64 total_valid_label_count = 1;</code>
     */
    protected $total_valid_label_count = 0;
    /**
     * A list of any applicable data validation warnings about the question's
     * feedback labels.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.DatasetValidationWarning dataset_validation_warnings = 2;</code>
     */
    private $dataset_validation_warnings;
    /**
     * Error status of the tuning operation for the question. Will only be set
     * if the tuning operation failed.
     *
     * Generated from protobuf field <code>string tuning_error = 3;</code>
     */
    protected $tuning_error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $total_valid_label_count
     *           Total number of valid labels provided for the question at the time of
     *           tuining.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dataset_validation_warnings
     *           A list of any applicable data validation warnings about the question's
     *           feedback labels.
     *     @type string $tuning_error
     *           Error status of the tuning operation for the question. Will only be set
     *           if the tuning operation failed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Total number of valid labels provided for the question at the time of
     * tuining.
     *
     * Generated from protobuf field <code>int64 total_valid_label_count = 1;</code>
     * @return int|string
     */
    public function getTotalValidLabelCount()
    {
        return $this->total_valid_label_count;
    }

    /**
     * Total number of valid labels provided for the question at the time of
     * tuining.
     *
     * Generated from protobuf field <code>int64 total_valid_label_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalValidLabelCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_valid_label_count = $var;

        return $this;
    }

    /**
     * A list of any applicable data validation warnings about the question's
     * feedback labels.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.DatasetValidationWarning dataset_validation_warnings = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatasetValidationWarnings()
    {
        return $this->dataset_validation_warnings;
    }

    /**
     * A list of any applicable data validation warnings about the question's
     * feedback labels.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.DatasetValidationWarning dataset_validation_warnings = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatasetValidationWarnings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\ContactCenterInsights\V1\DatasetValidationWarning::class);
        $this->dataset_validation_warnings = $arr;

        return $this;
    }

    /**
     * Error status of the tuning operation for the question. Will only be set
     * if the tuning operation failed.
     *
     * Generated from protobuf field <code>string tuning_error = 3;</code>
     * @return string
     */
    public function getTuningError()
    {
        return $this->tuning_error;
    }

    /**
     * Error status of the tuning operation for the question. Will only be set
     * if the tuning operation failed.
     *
     * Generated from protobuf field <code>string tuning_error = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTuningError($var)
    {
        GPBUtil::checkString($var, True);
        $this->tuning_error = $var;

        return $this;
    }

}

