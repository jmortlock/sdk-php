<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ScheduleListInfo is an abbreviated set of values from Schedule and ScheduleInfo
 * that's returned in ListSchedules.
 *
 * Generated from protobuf message <code>temporal.api.schedule.v1.ScheduleListInfo</code>
 */
class ScheduleListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * From spec:
     * Some fields are dropped from this copy of spec: timezone_data
     *
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleSpec spec = 1;</code>
     */
    protected $spec = null;
    /**
     * From action:
     * Action is a oneof field, but we need to encode this in JSON and oneof fields don't work
     * well with JSON. If action is start_workflow, this is set:
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 2;</code>
     */
    protected $workflow_type = null;
    /**
     * From state:
     *
     * Generated from protobuf field <code>string notes = 3;</code>
     */
    protected $notes = '';
    /**
     * Generated from protobuf field <code>bool paused = 4;</code>
     */
    protected $paused = false;
    /**
     * From info (maybe fewer entries):
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.ScheduleActionResult recent_actions = 5;</code>
     */
    private $recent_actions;
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp future_action_times = 6 [(.gogoproto.stdtime) = true];</code>
     */
    private $future_action_times;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Schedule\V1\ScheduleSpec $spec
     *           From spec:
     *           Some fields are dropped from this copy of spec: timezone_data
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *           From action:
     *           Action is a oneof field, but we need to encode this in JSON and oneof fields don't work
     *           well with JSON. If action is start_workflow, this is set:
     *     @type string $notes
     *           From state:
     *     @type bool $paused
     *     @type array<\Temporal\Api\Schedule\V1\ScheduleActionResult>|\Google\Protobuf\Internal\RepeatedField $recent_actions
     *           From info (maybe fewer entries):
     *     @type array<\Google\Protobuf\Timestamp>|\Google\Protobuf\Internal\RepeatedField $future_action_times
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * From spec:
     * Some fields are dropped from this copy of spec: timezone_data
     *
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleSpec spec = 1;</code>
     * @return \Temporal\Api\Schedule\V1\ScheduleSpec|null
     */
    public function getSpec()
    {
        return $this->spec;
    }

    public function hasSpec()
    {
        return isset($this->spec);
    }

    public function clearSpec()
    {
        unset($this->spec);
    }

    /**
     * From spec:
     * Some fields are dropped from this copy of spec: timezone_data
     *
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleSpec spec = 1;</code>
     * @param \Temporal\Api\Schedule\V1\ScheduleSpec $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Schedule\V1\ScheduleSpec::class);
        $this->spec = $var;

        return $this;
    }

    /**
     * From action:
     * Action is a oneof field, but we need to encode this in JSON and oneof fields don't work
     * well with JSON. If action is start_workflow, this is set:
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 2;</code>
     * @return \Temporal\Api\Common\V1\WorkflowType|null
     */
    public function getWorkflowType()
    {
        return $this->workflow_type;
    }

    public function hasWorkflowType()
    {
        return isset($this->workflow_type);
    }

    public function clearWorkflowType()
    {
        unset($this->workflow_type);
    }

    /**
     * From action:
     * Action is a oneof field, but we need to encode this in JSON and oneof fields don't work
     * well with JSON. If action is start_workflow, this is set:
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 2;</code>
     * @param \Temporal\Api\Common\V1\WorkflowType $var
     * @return $this
     */
    public function setWorkflowType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowType::class);
        $this->workflow_type = $var;

        return $this;
    }

    /**
     * From state:
     *
     * Generated from protobuf field <code>string notes = 3;</code>
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * From state:
     *
     * Generated from protobuf field <code>string notes = 3;</code>
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
     * Generated from protobuf field <code>bool paused = 4;</code>
     * @return bool
     */
    public function getPaused()
    {
        return $this->paused;
    }

    /**
     * Generated from protobuf field <code>bool paused = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setPaused($var)
    {
        GPBUtil::checkBool($var);
        $this->paused = $var;

        return $this;
    }

    /**
     * From info (maybe fewer entries):
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.ScheduleActionResult recent_actions = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecentActions()
    {
        return $this->recent_actions;
    }

    /**
     * From info (maybe fewer entries):
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.ScheduleActionResult recent_actions = 5;</code>
     * @param array<\Temporal\Api\Schedule\V1\ScheduleActionResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecentActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\ScheduleActionResult::class);
        $this->recent_actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp future_action_times = 6 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFutureActionTimes()
    {
        return $this->future_action_times;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp future_action_times = 6 [(.gogoproto.stdtime) = true];</code>
     * @param array<\Google\Protobuf\Timestamp>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFutureActionTimes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Timestamp::class);
        $this->future_action_times = $arr;

        return $this;
    }

}
