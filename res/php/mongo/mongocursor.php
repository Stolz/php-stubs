<?php

/** @phpstub */
class MongoCursor implements \MongoCursorInterface, \Iterator
{
    /** @var integer */
    public $timeout;

    /** @var boolean */
    public $slaveOkay;

    /**
     * Create a new cursor
     *
     * @param MongoClient $connection
     * @param string $ns
     * @param array $query
     * @param array $fields
     */
    public function __construct($connection, $ns, $query = array(), $fields = array())
    {
    }

    /**
     * Adds a top-level key/value pair to a query
     *
     * @param string $key
     * @param mixed $value
     *
     * @return MongoCursor Returns this cursor.
     */
    public function addOption($key, $value)
    {
    }

    /**
     * Sets whether this cursor will wait for a while for a tailable cursor to return more data
     *
     * @param bool $wait
     *
     * @return MongoCursor Returns this cursor.
     */
    public function awaitData($wait = true)
    {
    }

    /**
     * Limits the number of elements returned in one batch.
     *
     * @param int $batchSize
     *
     * @return MongoCursor Returns this cursor.
     */
    public function batchSize($batchSize)
    {
    }

    /**
     * Counts the number of results for this query
     *
     * @param bool $foundOnly
     *
     * @return int The number of documents returned by this cursor's query.
     */
    public function count($foundOnly = false)
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
     * Execute the query.
     *
     * @return void null.
     */
    public function doQuery()
    {
    }

    /**
     * Return an explanation of the query, often useful for optimization and debugging
     *
     * @return array Returns an explanation of the query.
     */
    public function explain()
    {
    }

    /**
     * Sets the fields for a query
     *
     * @param array $f
     *
     * @return MongoCursor Returns this cursor.
     */
    public function fields($f)
    {
    }

    /**
     * Advances the cursor to the next result, and returns that result
     *
     * @return array
     */
    public function getNext()
    {
    }

    /**
     * Get the read preference for this query
     *
     * @return array
     */
    public function getReadPreference()
    {
    }

    /**
     * Checks if there are any more elements in this cursor
     *
     * @return bool Returns if there is another element.
     */
    public function hasNext()
    {
    }

    /**
     * Gives the database a hint about the query
     *
     * @param mixed $index
     *
     * @return MongoCursor Returns this cursor.
     */
    public function hint($index)
    {
    }

    /**
     * Sets whether this cursor will timeout
     *
     * @param bool $liveForever
     *
     * @return MongoCursor Returns this cursor.
     */
    public function immortal($liveForever = true)
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
     * Returns the current resultaposs _id, or its index within the result set
     *
     * @return string|int The current resultaposs  as a string. If the result
     *                    has no , its numeric index within the result set will
     *                    be returned as an integer.
     */
    public function key()
    {
    }

    /**
     * Limits the number of results returned
     *
     * @param int $num
     *
     * @return MongoCursor Returns this cursor.
     */
    public function limit($num)
    {
    }

    /**
     * Sets a server-side timeout for this query
     *
     * @param int $ms
     *
     * @return MongoCursor This cursor.
     */
    public function maxTimeMS($ms)
    {
    }

    /**
     * Advances the cursor to the next result, and returns that result
     *
     * @return array Returns the next document.
     */
    public function next()
    {
    }

    /**
     * If this query should fetch partial results from  if a shard is down
     *
     * @param bool $okay
     *
     * @return MongoCursor Returns this cursor.
     */
    public function partial($okay = true)
    {
    }

    /**
     * Clears the cursor
     *
     * @return void null.
     */
    public function reset()
    {
    }

    /**
     * Returns the cursor to the beginning of the result set
     *
     * @return void null.
     */
    public function rewind()
    {
    }

    /**
     * Sets arbitrary flags in case there is no method available the specific flag
     *
     * @param int $flag
     * @param bool $set
     *
     * @return MongoCursor Returns this cursor.
     */
    public function setFlag($flag, $set = true)
    {
    }

    /**
     * Set the read preference for this query
     *
     * @param string $read_preference
     * @param array $tags
     *
     * @return MongoCursor Returns this cursor.
     */
    public function setReadPreference($read_preference, $tags = array())
    {
    }

    /**
     * Skips a number of results
     *
     * @param int $num
     *
     * @return MongoCursor Returns this cursor.
     */
    public function skip($num)
    {
    }

    /**
     * Sets whether this query can be done on a secondary [deprecated]
     *
     * @param bool $okay
     *
     * @return MongoCursor Returns this cursor.
     */
    public function slaveOkay($okay = true)
    {
    }

    /**
     * Use snapshot mode for the query
     *
     * @return MongoCursor Returns this cursor.
     */
    public function snapshot()
    {
    }

    /**
     * Sorts the results by given fields
     *
     * @param array $fields
     *
     * @return MongoCursor Returns the same cursor that this method was called on.
     */
    public function sort($fields)
    {
    }

    /**
     * Sets whether this cursor will be left open after fetching the last results
     *
     * @param bool $tail
     *
     * @return MongoCursor Returns this cursor.
     */
    public function tailable($tail = true)
    {
    }

    /**
     * Sets a client-side timeout for this query
     *
     * @param int $ms
     *
     * @return MongoCursor This cursor.
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