<?php

/** @phpstub */
class SyncMutex
{
    /**
     * Constructs a new SyncMutex object
     *
     * @param string $name
     */
    public function __construct($name = NULL)
    {
    }

    /**
     * Waits for an exclusive lock
     *
     * @param integer $wait
     *
     * @return bool A boolean of TRUE if the lock was obtained, FALSE otherwise.
     */
    public function lock($wait = NULL)
    {
    }

    /**
     * Unlocks the mutex
     *
     * @param bool $all
     *
     * @return bool A boolean of TRUE if the unlock operation was successful, FALSE otherwise.
     */
    public function unlock($all = NULL)
    {
    }
}