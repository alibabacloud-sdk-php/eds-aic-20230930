<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketResponseBody;

use AlibabaCloud\Tea\Model;

class instanceConnectionModels extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * @example aig-1uzb6heg797z3****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The ID of the cloud phone instance.
     *
     * @example acp-ajxvwo1u0hqvd****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the task.
     *
     * @example cn-hangzhou@c9f5c2e8-f5c4-4b01-8602-000cae94****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The state of the task.
     *
     * @example FINISHED
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The ticket used to connect to the cloud phone instance.
     *
     * @example piVE58_AdmVSVW7SEW3*AE5*p8mmO5gvItsNOmv4S_f_cNpoU_BOTwChTBoNM1ZJeedfK9zxYnbN5hossqIZCr6t7SGxRigm2Cb4fGaCdBZWIzmgdHq6sXXZQg4KFWufyvpeV*0*Cm58slMT1tJw3****
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'instanceId' => 'InstanceId',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'ticket' => 'Ticket',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceConnectionModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }

        return $model;
    }
}
