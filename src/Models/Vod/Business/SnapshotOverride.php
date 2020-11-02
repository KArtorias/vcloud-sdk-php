<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Vcloud\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vcloud.Models.Vod.SnapshotOverride</code>
 */
class SnapshotOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * 被覆盖的截图模板Id, 支持ALL
     *
     * Generated from protobuf field <code>repeated string TemplateId = 1;</code>
     */
    private $TemplateId;
    /**
     * 截图时间, 单位ms, AIDynpost和Sprite类型不支持
     *
     * Generated from protobuf field <code>int32 OffsetTime = 2;</code>
     */
    protected $OffsetTime = 0;
    /**
     * 多Dynpost类型截取时间，单位ms
     *
     * Generated from protobuf field <code>repeated int32 OffsetTimeList = 3;</code>
     */
    private $OffsetTimeList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $TemplateId
     *           被覆盖的截图模板Id, 支持ALL
     *     @type int $OffsetTime
     *           截图时间, 单位ms, AIDynpost和Sprite类型不支持
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $OffsetTimeList
     *           多Dynpost类型截取时间，单位ms
     * }
     */
    public function __construct($data = NULL) {
        \Vcloud\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 被覆盖的截图模板Id, 支持ALL
     *
     * Generated from protobuf field <code>repeated string TemplateId = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * 被覆盖的截图模板Id, 支持ALL
     *
     * Generated from protobuf field <code>repeated string TemplateId = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->TemplateId = $arr;

        return $this;
    }

    /**
     * 截图时间, 单位ms, AIDynpost和Sprite类型不支持
     *
     * Generated from protobuf field <code>int32 OffsetTime = 2;</code>
     * @return int
     */
    public function getOffsetTime()
    {
        return $this->OffsetTime;
    }

    /**
     * 截图时间, 单位ms, AIDynpost和Sprite类型不支持
     *
     * Generated from protobuf field <code>int32 OffsetTime = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOffsetTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->OffsetTime = $var;

        return $this;
    }

    /**
     * 多Dynpost类型截取时间，单位ms
     *
     * Generated from protobuf field <code>repeated int32 OffsetTimeList = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOffsetTimeList()
    {
        return $this->OffsetTimeList;
    }

    /**
     * 多Dynpost类型截取时间，单位ms
     *
     * Generated from protobuf field <code>repeated int32 OffsetTimeList = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOffsetTimeList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->OffsetTimeList = $arr;

        return $this;
    }

}

