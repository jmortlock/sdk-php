<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/errordetails/v1/message.proto

namespace Temporal\Api\Errordetails\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.errordetails.v1.NamespaceInvalidStateFailure</code>
 */
class NamespaceInvalidStateFailure extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Current state of the requested namespace.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.NamespaceState state = 2;</code>
     */
    protected $state = 0;
    /**
     * Allowed namespace states for requested operation.
     * For example NAMESPACE_STATE_DELETED is forbidden for most operations but allowed for DescribeNamespace.
     *
     * Generated from protobuf field <code>repeated .temporal.api.enums.v1.NamespaceState allowed_states = 3;</code>
     */
    private $allowed_states;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type int $state
     *           Current state of the requested namespace.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allowed_states
     *           Allowed namespace states for requested operation.
     *           For example NAMESPACE_STATE_DELETED is forbidden for most operations but allowed for DescribeNamespace.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Errordetails\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Current state of the requested namespace.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.NamespaceState state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Current state of the requested namespace.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.NamespaceState state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\NamespaceState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Allowed namespace states for requested operation.
     * For example NAMESPACE_STATE_DELETED is forbidden for most operations but allowed for DescribeNamespace.
     *
     * Generated from protobuf field <code>repeated .temporal.api.enums.v1.NamespaceState allowed_states = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedStates()
    {
        return $this->allowed_states;
    }

    /**
     * Allowed namespace states for requested operation.
     * For example NAMESPACE_STATE_DELETED is forbidden for most operations but allowed for DescribeNamespace.
     *
     * Generated from protobuf field <code>repeated .temporal.api.enums.v1.NamespaceState allowed_states = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedStates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Temporal\Api\Enums\V1\NamespaceState::class);
        $this->allowed_states = $arr;

        return $this;
    }

}
