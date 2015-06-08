<?php

/** @phpstub */
class MongoDate
{
    /** @var int */
    public $usec;

    /** @var int */
    public $sec;

    /**
     * Creates a new date.
     *
     * @param int $sec
     * @param int $usec
     */
    public function __construct($sec = false, $usec = false)
    {
    }

    /**
     * Returns a string representation of this date
     *
     * @return string This date.
     */
    public function __toString()
    {
    }

    /**
     * Returns a DateTime object representing this date
     *
     * @return DateTime This date as a ``DateTime`` object.
     */
    public function toDateTime()
    {
    }
}