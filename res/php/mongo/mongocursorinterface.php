<?php

/** @phpstub */
interface MongoCursorInterface extends \Iterator
{
    /**
     * Limits the number of elements returned in one batch.
     *
     * @param int $batchSize
     *
     * @return MongoCursorInterface Returns this cursor.
     */
    public function batchSize($batchSize);

    /**
     * Checks if there are results that have not yet been sent from the database
     *
     * @return bool Returns true if there are more results that have not yet been sent to the
     *              client, and false otherwise.
     */
    public function dead();

    /**
     * Get the read preference for this query
     *
     * @return array
     */
    public function getReadPreference();

    /**
     * Gets information about the cursor's creation and iteration
     *
     * @return array Returns the namespace, batch size, limit, skip, flags, query, and projected
     *               fields for this cursor. If the cursor has started iterating, additional
     *               information about iteration and the connection will be included.
     */
    public function info();

    /**
     * Set the read preference for this query
     *
     * @param string $read_preference
     * @param array $tags
     *
     * @return MongoCursorInterface Returns this cursor.
     */
    public function setReadPreference($read_preference, $tags = array());

    /**
     * Sets a client-side timeout for this query
     *
     * @param int $ms
     *
     * @return MongoCursorInterface Returns this cursor.
     */
    public function timeout($ms);
}