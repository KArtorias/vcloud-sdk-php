<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_upload.proto

namespace Vcloud\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vcloud.Models.Vod.QueryData</code>
 */
class QueryData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Vcloud.Models.Vod.QueryUploadResult Data = 1;</code>
     */
    protected $Data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Vcloud\Models\Vod\Business\QueryUploadResult $Data
     * }
     */
    public function __construct($data = NULL) {
        \Vcloud\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Vcloud.Models.Vod.QueryUploadResult Data = 1;</code>
     * @return \Vcloud\Models\Vod\Business\QueryUploadResult
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Generated from protobuf field <code>.Vcloud.Models.Vod.QueryUploadResult Data = 1;</code>
     * @param \Vcloud\Models\Vod\Business\QueryUploadResult $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Vcloud\Models\Vod\Business\QueryUploadResult::class);
        $this->Data = $var;

        return $this;
    }

}

