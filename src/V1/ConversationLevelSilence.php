<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Conversation-level silence data.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.ConversationLevelSilence</code>
 */
class ConversationLevelSilence extends \Google\Protobuf\Internal\Message
{
    /**
     * Amount of time calculated to be in silence.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration silence_duration = 1;</code>
     */
    protected $silence_duration = null;
    /**
     * Percentage of the total conversation spent in silence.
     *
     * Generated from protobuf field <code>float silence_percentage = 2;</code>
     */
    protected $silence_percentage = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $silence_duration
     *           Amount of time calculated to be in silence.
     *     @type float $silence_percentage
     *           Percentage of the total conversation spent in silence.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Amount of time calculated to be in silence.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration silence_duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSilenceDuration()
    {
        return $this->silence_duration;
    }

    public function hasSilenceDuration()
    {
        return isset($this->silence_duration);
    }

    public function clearSilenceDuration()
    {
        unset($this->silence_duration);
    }

    /**
     * Amount of time calculated to be in silence.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration silence_duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSilenceDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->silence_duration = $var;

        return $this;
    }

    /**
     * Percentage of the total conversation spent in silence.
     *
     * Generated from protobuf field <code>float silence_percentage = 2;</code>
     * @return float
     */
    public function getSilencePercentage()
    {
        return $this->silence_percentage;
    }

    /**
     * Percentage of the total conversation spent in silence.
     *
     * Generated from protobuf field <code>float silence_percentage = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setSilencePercentage($var)
    {
        GPBUtil::checkFloat($var);
        $this->silence_percentage = $var;

        return $this;
    }

}
