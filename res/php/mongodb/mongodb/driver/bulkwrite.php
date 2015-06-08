<?php

namespace MongoDB\Driver;

/** @phpstub */
class BulkWrite implements \Countable
{
    /**
     * Create new BulkWrite
     *
     * @param boolean $ordered
     */
    public function __construct($ordered = true)
    {
    }

    /**
     * Count expected roundtrips
     *
     * @return int Returns number of sub-bulkes.
     */
    public function count()
    {
    }

    /**
     * Add a delete operation to the bulk
     *
     * @param array|object $filter
     * @param array $deleteOptions
     *
     * @return void 
     */
    public function delete($filter, $deleteOptions = array())
    {
    }

    /**
     * Add a insert operation to the bulk
     *
     * @param array|object $document
     *
     * @return MongoDB\Driver\ObjectID If the  did not have an _id, a
     *                                 ``BSON\ObjectID`` will be generated and returned.
     *                                 Otherwise no value is returned.
     */
    public function insert($document)
    {
    }

    /**
     * Add an update operation to the bulk
     *
     * @param array|object $filter
     * @param array|object $newObj
     * @param array $updateOptions
     *
     * @return void 
     */
    public function update($filter, $newObj, $updateOptions = array())
    {
    }
}