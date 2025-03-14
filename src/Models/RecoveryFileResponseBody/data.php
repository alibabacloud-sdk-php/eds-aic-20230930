<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The instance ID.
     *
     * @example acp-34pqe4r0kd9kn****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @description The task ID.
     *
     * @example t-5prhfo7wv1gjx****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
