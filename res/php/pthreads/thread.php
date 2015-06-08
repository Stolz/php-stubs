<?php

/** @phpstub */
class Thread extends \Threaded implements \Countable, \Traversable, \ArrayAccess
{
    /**
     * Execution
     *
     * @return void 
     */
    public function detach()
    {
    }

    /**
     * Identification
     *
     * @return integer A numeric identity
     */
    public function getCreatorId()
    {
    }

    /**
     * Identification
     *
     * @return Thread An object representing the currently executing Thread
     */
    public function getCurrentThread()
    {
    }

    /**
     * Identification
     *
     * @return integer A numeric identity
     */
    public function getCurrentThreadId()
    {
    }

    /**
     * Identification
     *
     * @return integer A numeric identity
     */
    public function getThreadId()
    {
    }

    /**
     * Execution
     *
     * @return mixed The return value of the Callable
     */
    public function globally()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isJoined()
    {
    }

    /**
     * State Detection
     *
     * @return boolean boolean indication of state
     */
    public function isStarted()
    {
    }

    /**
     * Synchronization
     *
     * @return boolean A boolean indication of success
     */
    public function join()
    {
    }

    /**
     * Execution
     *
     * @return void A boolean indication of success
     */
    public function kill()
    {
    }

    /**
     * Execution
     *
     * @param integer $options
     *
     * @return boolean A boolean indication of success
     */
    public function start($options = NULL)
    {
    }
}