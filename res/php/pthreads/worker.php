<?php

/** @phpstub */
class Worker extends \Thread implements \Traversable, \Countable, \ArrayAccess
{
    /**
     * Stack Analysis
     *
     * @return integer An numeric value
     */
    public function getStacked()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isShutdown()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isWorking()
    {
    }

    /**
     * Synchronization
     *
     * @return boolean 
     */
    public function shutdown()
    {
    }

    /**
     * Stacking
     *
     * @param Threaded $work
     *
     * @return integer The new length of the stack
     */
    public function stack(&$work)
    {
    }

    /**
     * Stacking
     *
     * @param Threaded $work
     *
     * @return integer The new length of the stack
     */
    public function unstack(&$work = NULL)
    {
    }
}