<?php

/** @phpstub */
class SyncReaderWriter
{
    /**
     * Constructs a new SyncReaderWriter object
     *
     * @param string $name
     * @param bool $autounlock
     */
    public function __construct($name = NULL, $autounlock = NULL)
    {
    }

    /**
     * Waits for a read lock
     *
     * @param integer $wait
     *
     * @return bool A boolean of TRUE if the lock was obtained, FALSE otherwise.
     */
    public function readlock($wait = NULL)
    {
    }

    /**
     * Releases a read lock
     *
     * @return bool A boolean of TRUE if the unlock operation was successful, FALSE otherwise.
     */
    public function readunlock()
    {
    }

    /**
     * Waits for an exclusive write lock
     *
     * @param integer $wait
     *
     * @return bool A boolean of TRUE if the lock was obtained, FALSE otherwise.
     */
    public function writelock($wait = NULL)
    {
    }

    /**
     * Releases a write lock
     *
     * @return bool A boolean of TRUE if the unlock operation was successful, FALSE otherwise.
     */
    public function writeunlock()
    {
    }
}