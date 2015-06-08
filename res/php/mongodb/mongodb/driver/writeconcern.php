<?php

namespace MongoDB\Driver;

/** @phpstub */
class WriteConcern
{
    const MAJORITY = 'majority';

    /**
     * Construct immutable WriteConcern
     *
     * @param string $wstring
     * @param integer $wtimeout
     * @param boolean $journal
     * @param boolean $fsync
     */
    public function __construct($wstring, $wtimeout = NULL, $journal = NULL, $fsync = NULL)
    {
    }
}