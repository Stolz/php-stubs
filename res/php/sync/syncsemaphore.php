<?php

/** @phpstub */
class SyncSemaphore
{
    /**
     * Constructs a new SyncSemaphore object
     *
     * @param string $name
     * @param integer $initialval
     * @param bool $autounlock
     */
    public function __construct($name = NULL, $initialval = NULL, $autounlock = NULL)
    {
    }

    /**
     * Decreases the count of the semaphore or waits
     *
     * @param integer $wait
     *
     * @return bool A boolean of TRUE if the lock operation was successful, FALSE otherwise.
     */
    public function lock($wait = NULL)
    {
    }

    /**
     * Increases the count of the semaphore
     *
     * @param integer $prevcount
     *
     * @return bool A boolean of TRUE if the unlock operation was successful, FALSE otherwise.
     */
    public function unlock(&$prevcount = NULL)
    {
    }
}