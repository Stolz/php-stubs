<?php

/** @phpstub */
class SyncEvent
{
    /**
     * Constructs a new SyncEvent object
     *
     * @param string $name
     * @param bool $manual
     */
    public function __construct($name = NULL, $manual = NULL)
    {
    }

    /**
     * Fires/sets the event
     *
     * @return bool A boolean of TRUE if the event was fired, FALSE otherwise.
     */
    public function fire()
    {
    }

    /**
     * Resets a manual event
     *
     * @return bool A boolean value of TRUE if the object was successfully reset, FALSE otherwise.
     */
    public function reset()
    {
    }

    /**
     * Waits for the event to be fired/set
     *
     * @param integer $wait
     *
     * @return bool A boolean of TRUE if the event was fired, FALSE otherwise.
     */
    public function wait($wait = NULL)
    {
    }
}