<?php

namespace Voximplant\Resources\Params;

class SQ_SetQueueInfoParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var number ID of the smart queue to search for */
    public $sq_queue_id;

    /** @var string Name of the smart queue to search for. Can be used instead of sq_queue_id */
    public $sq_queue_name;

    /** @var string New smart queue name within the application, up to 100 characters */
    public $new_sq_queue_name;

    /** @var string Agent selection strategy for calls. Accepts one of the following values: "MOST_QUALIFIED", "LEAST_QUALIFIED", "MAX_WAITING_TIME" */
    public $call_agent_selection;

    /** @var string Agent selection strategy for messages. Accepts one of the following values: "MOST_QUALIFIED", "LEAST_QUALIFIED", "MAX_WAITING_TIME". Equals to the **call_agent_selection** value by default */
    public $im_agent_selection;

    /** @var string Strategy of prioritizing CALL-type requests for service. Accepts one of the following values: "MAX_PRIORITY", "MAX_WAITING_TIME" */
    public $call_task_selection;

    /** @var string Strategy of prioritizing IM-type requests for service. Accepts one of the following values: "MAX_PRIORITY", "MAX_WAITING_TIME". Equals to the **call_task_selection** value by default */
    public $im_task_selection;

    /** @var string Agent selection strategy, applied when it is not possible to wait for a suitable free agent. Currently not used */
    public $fallback_agent_selection;

    /** @var string Comment, up to 200 characters */
    public $description;

    /** @var number Maximum time in minutes that a CALL-type request can remain in the queue without being assigned to an agent */
    public $call_max_waiting_time;

    /** @var number Maximum time in minutes that an IM-type request can remain in the queue without being assigned to an agent */
    public $im_max_waiting_time;

    /** @var number Maximum size of the queue with CALL-type requests */
    public $call_max_queue_size;

    /** @var number Maximum size of the queue with IM-type requests */
    public $im_max_queue_size;

    /** @var number The queue's priority from 1 to 100 */
    public $priority;
}
