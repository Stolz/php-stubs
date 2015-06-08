<?php

/** @phpstub */
class MongoCommandCursor implements \MongoCursorInterface, \Iterator
{
    /**
     * Create a new command cursor
     *
     * @param MongoClient $connection
     * @param string $ns
     * @param array $command
     */
    public function __construct($connection, $ns, $command = array())
    {
    }

    /**
     * Limits the number of elements returned in one batch.
     *
     * @param int $batchSize
     *
     * @return MongoCommandCursor Returns this cursor.
     */
    public function batchSize($batchSize)
    {
    }

    /**
     * Create a new command cursor from an existing command response document
     *
     * @param MongoClient $connection
     * @param string $hash
     * @param array $document
     *
     * @return MongoCommandCursor Returns the new cursor.
     */
    public function createFromDocument($connection, $hash, $document)
    {
    }

    /**
     * Returns the current element
     *
     * @return array The current result document as an associative array. null will be returned
     *               if there is no result.
     */
    public function current()
    {
    }

    /**
     * Checks if there are results that have not yet been sent from the database
     *
     * @return bool Returns true if there are more results that have not yet been sent to the
     *              client, and false otherwise.
     */
    public function dead()
    {
    }

    /**
     * Get the read preference for this command
     *
     * @return array
     */
    public function getReadPreference()
    {
    }

    /**
     * Gets information about the cursor's creation and iteration
     *
     * @return array Returns the namespace, batch size, limit, skip, flags, query, and projected
     *               fields for this cursor. If the cursor has started iterating, additional
     *               information about iteration and the connection will be included.
     */
    public function info()
    {
    }

    /**
     * Returns the current resultaposs index within the result set
     *
     * @return int The current resultaposs index within the result set.
     */
    public function key()
    {
    }

    /**
     * Advances the cursor to the next result
     *
     * @return void null.
     */
    public function next()
    {
    }

    /**
     * Executes the command and resets the cursor to the start of the result set
     *
     * @return array The raw server result document.
     */
    public function rewind()
    {
    }

    /**
     * Set the read preference for this command
     *
     * @param string $read_preference
     * @param array $tags
     *
     * @return MongoCommandCursor Returns this cursor.
     */
    public function setReadPreference($read_preference, $tags = array())
    {
    }

    /**
     * Sets a client-side timeout for this command
     *
     * @param int $ms
     *
     * @return MongoCommandCursor This cursor.
     */
    public function timeout($ms)
    {
    }

    /**
     * Checks if the cursor is reading a valid result.
     *
     * @return bool true if the current result is not null, and false otherwise.
     */
    public function valid()
    {
    }
}