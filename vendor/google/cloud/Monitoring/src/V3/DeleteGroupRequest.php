<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `DeleteGroup` request. The default behavior is to be able to delete a
 * single group without any descendants.
 *
 * Generated from protobuf message <code>google.monitoring.v3.DeleteGroupRequest</code>
 */
class DeleteGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The group to delete. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * If this field is true, then the request means to delete a group with all
     * its descendants. Otherwise, the request means to delete a group only when
     * it has no descendants. The default value is false.
     *
     * Generated from protobuf field <code>bool recursive = 4;</code>
     */
    private $recursive = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The group to delete. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *     @type bool $recursive
     *           If this field is true, then the request means to delete a group with all
     *           its descendants. Otherwise, the request means to delete a group only when
     *           it has no descendants. The default value is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The group to delete. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The group to delete. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/groups/[GROUP_ID]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * If this field is true, then the request means to delete a group with all
     * its descendants. Otherwise, the request means to delete a group only when
     * it has no descendants. The default value is false.
     *
     * Generated from protobuf field <code>bool recursive = 4;</code>
     * @return bool
     */
    public function getRecursive()
    {
        return $this->recursive;
    }

    /**
     * If this field is true, then the request means to delete a group with all
     * its descendants. Otherwise, the request means to delete a group only when
     * it has no descendants. The default value is false.
     *
     * Generated from protobuf field <code>bool recursive = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRecursive($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive = $var;

        return $this;
    }

}

