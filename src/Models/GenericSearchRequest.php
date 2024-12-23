<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class GenericSearchRequest extends Model
{
    /**
     * @var string
     */
    public $industry;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @example OneWeek
     *
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'industry'  => 'industry',
        'page'      => 'page',
        'query'     => 'query',
        'sessionId' => 'sessionId',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->timeRange) {
            $res['timeRange'] = $this->timeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenericSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['timeRange'])) {
            $model->timeRange = $map['timeRange'];
        }

        return $model;
    }
}
