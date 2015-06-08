<?php

/** @phpstub */
class MongoWriteBatch
{
    const COMMAND_DELETE = 3;
    const COMMAND_INSERT = 1;
    const COMMAND_UPDATE = 2;

    /**
     * Creates a new batch of write operations
     */
    public function __construct()
    {
    }

    /**
     * Adds a write operation to a batch
     *
     * @param array $item
     *
     * @return bool Returns true on success and throws an exception on failure.
     */
    public function add($item)
    {
    }

    /**
     * Executes a batch of write operations
     *
     * @param array $write_options
     *
     * @return array Returns an array containing statistical information for the full batch.
     *               If the batch had to be split into multiple batches, the return value will aggregate
     *               the values from individual batches and return only the totals.
     */
    public function execute($write_options)
    {
    }
}