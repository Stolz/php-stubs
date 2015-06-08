<?php

/** @phpstub */
class MongoLog
{
    const ALL = 31;
    const CON = 2;
    const FINE = 4;
    const INFO = 2;
    const IO = 4;
    const NONE = 0;
    const PARSE = 16;
    const POOL = 1;
    const RS = 1;
    const SERVER = 8;
    const WARNING = 1;

    /** @var int */
    private $module;

    /** @var int */
    private $level;

    /** @var int */
    private $callback;

    /**
     * Gets the previously set callback function
     *
     * @return callable Returns the callback function, or false if not set yet.
     */
    public function getCallback()
    {
    }

    /**
     * Gets the level(s) currently being logged
     *
     * @return int Returns the level(s) currently being logged.
     */
    public function getLevel()
    {
    }

    /**
     * Gets the module(s) currently being logged
     *
     * @return int Returns the module(s) currently being logged.
     */
    public function getModule()
    {
    }

    /**
     * Sets a callback function to be invoked for events
     *
     * @param callable $log_function
     *
     * @return void 
     */
    public function setCallback($log_function)
    {
    }

    /**
     * Sets the level(s) to be logged
     *
     * @param int $level
     *
     * @return void
     */
    public function setLevel($level)
    {
    }

    /**
     * Sets the module(s) to be logged
     *
     * @param int $module
     *
     * @return void
     */
    public function setModule($module)
    {
    }
}