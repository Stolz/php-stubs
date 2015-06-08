<?php

/** @phpstub */
class Pool
{
    protected $workers;
    protected $work;
    protected $size;
    protected $last;
    protected $ctor;
    protected $class;

    /**
     * Creates a new Pool of Workers
     *
     * @param integer $size
     * @param string $class
     * @param array $ctor
     *
     * @return Pool the new Pool
     */
    public function __construct($size, $class, $ctor = array())
    {
    }

    /**
     * Collect references to completed tasks
     *
     * @param Callable $collector
     *
     * @return void void
     */
    public function collect($collector)
    {
    }

    /**
     * Resize the Pool
     *
     * @param integer $size
     *
     * @return void void
     */
    public function resize($size)
    {
    }

    /**
     * Shutdown all Workers
     *
     * @return void void
     */
    public function shutdown()
    {
    }

    /**
     * Submits an object for execution
     *
     * @param Threaded $task
     *
     * @return integer the identifier of the Worker executing the object
     */
    public function submit($task)
    {
    }

    /**
     * Submits an object for execution
     *
     * @param integer $worker
     * @param Threaded $task
     *
     * @return integer the identifier of the Worker that accepted the object
     */
    public function submitTo($worker, $task)
    {
    }
}