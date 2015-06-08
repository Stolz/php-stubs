<?php

namespace MongoDB\Driver;

/** @phpstub */
class Cursor implements \Traversable
{
    /**
     * Description
     *
     * @param Server $server
     * @param string $responseDocument
     */
    public function __construct($server, $responseDocument)
    {
    }

    /**
     * Returns the CursorId for this cursor
     *
     * @return MongoDB\Driver\CursorId 
     */
    public function getId()
    {
    }

    /**
     * Returns the Server object to which this cursor is attached
     *
     * @return MongoDB\Driver\Server 
     */
    public function getServer()
    {
    }

    /**
     * Checks if a cursor is still alive
     *
     * @return bool 
     */
    public function isDead()
    {
    }

    /**
     * Sets a type map to use for BSON unserialization
     *
     * @param array $typemap
     *
     * @return void 
     */
    public function setTypeMap($typemap)
    {
    }

    /**
     * Returns an array of all result documents for this cursor
     *
     * @return array 
     */
    public function toArray()
    {
    }
}