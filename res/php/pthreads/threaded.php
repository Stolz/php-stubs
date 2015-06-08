<?php

/** @phpstub */
class Threaded implements \Traversable, \Countable, \ArrayAccess
{
    /**
     * Manipulation
     *
     * @param integer $size
     * @param boolean $preserve
     *
     * @return array An array of items from the objects property table
     */
    public function chunk($size, $preserve)
    {
    }

    /**
     * Manipulation
     *
     * @return integer 
     */
    public function count()
    {
    }

    /**
     * Runtime Manipulation
     *
     * @param string $class
     *
     * @return bool A boolean indication of success
     */
    public function extend($class)
    {
    }

    /**
     * Creation
     *
     * @param Closure $run
     * @param Closure $construct
     * @param array $args
     *
     * @return Threaded A new anonymous Threaded object
     */
    public function from($run, $construct = NULL, $args = array())
    {
    }

    /**
     * Error Detection
     *
     * @return array array containing the termination conditions of the referenced object
     */
    public function getTerminationInfo()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isRunning()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isTerminated()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isWaiting()
    {
    }

    /**
     * Synchronization
     *
     * @return boolean A boolean indication of success
     */
    public function lock()
    {
    }

    /**
     * Manipulation
     *
     * @param mixed $from
     * @param mixed $overwrite
     *
     * @return boolean A boolean indication of success
     */
    public function merge($from, $overwrite = NULL)
    {
    }

    /**
     * Synchronization
     *
     * @return boolean A boolean indication of success
     */
    public function notify()
    {
    }

    /**
     * Manipulation
     *
     * @return boolean The last item from the objects property table
     */
    public function pop()
    {
    }

    /**
     * Execution
     *
     * @return void The methods return value, if used, will be ignored
     */
    public function run()
    {
    }

    /**
     * Manipulation
     *
     * @return mixed The first item from the objects property table
     */
    public function shift()
    {
    }

    /**
     * Synchronization
     *
     * @phpstub-variable-parameters
     *
     * @param Closure $block
     * @param mixed $_
     *
     * @return mixed The return value from the block
     */
    public function synchronized($block, $_ = NULL)
    {
    }

    /**
     * Synchronization
     *
     * @return boolean A boolean indication of success
     */
    public function unlock()
    {
    }

    /**
     * Synchronization
     *
     * @param integer $timeout
     *
     * @return boolean A boolean indication of success
     */
    public function wait($timeout = NULL)
    {
    }
}