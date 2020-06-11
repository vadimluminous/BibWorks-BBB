<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional information returned to client, such as debugging information.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.ResponseMetadata</code>
 */
class ResponseMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique id associated with this call.
     * This id is logged for tracking purposes.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *           A unique id associated with this call.
     *           This id is logged for tracking purposes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique id associated with this call.
     * This id is logged for tracking purposes.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique id associated with this call.
     * This id is logged for tracking purposes.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

