<?php

namespace MongoDB\Driver;

/** @phpstub */
class Manager
{
    /**
     * Create new MongoDB Manager
     *
     * @param string $uri
     * @param array $options
     * @param array $driverOptions
     */
    public function __construct($uri, $options = array(), $driverOptions = array())
    {
    }

    /**
     * Execute one or more write operations
     *
     * @param string $namespace
     * @param MongoDB\Driver\BulkWrite $bulk
     * @param MongoDB\Driver\WriteConcern $writeConcern
     *
     * @return MongoDB\Driver\WriteResult
     */
    public function executeBulkWrite($namespace, $bulk, $writeConcern = NULL)
    {
    }

    /**
     * Execute a MongoDB database command
     *
     * @param string $db
     * @param MongoDB\Driver\Command $command
     * @param MongoDB\Driver\ReadPreference $readPreference
     *
     * @return MongoDB\Driver\Cursor Returns ``MongoDB\Driver\Cursor`` on success, .
     */
    public function executeCommand($db, $command, $readPreference = NULL)
    {
    }

    /**
     * Convenience method for a single delete operation
     *
     * @param string $namespace
     * @param array|object $filter
     * @param array $deleteOptions
     * @param MongoDB\Driver\WriteConcern $writeConcern
     *
     * @return MongoDB\Driver\WriteResult
     */
    public function executeDelete($namespace, $filter, $deleteOptions = array(), $writeConcern = NULL)
    {
    }

    /**
     * Convenience method for a single insert operation
     *
     * @param string $namespace
     * @param array|object $document
     * @param MongoDB\Driver\WriteConcern $writeConcern
     *
     * @return MongoDB\Driver\WriteResult
     */
    public function executeInsert($namespace, $document, $writeConcern = NULL)
    {
    }

    /**
     * Execute a MongoDB query
     *
     * @param string $namespace
     * @param MongoDB\Driver\Query $query
     * @param MongoDB\Driver\ReadPreference $readPreference
     *
     * @return MongoDB\Driver\Cursor Returns ``MongoDB\Driver\Cursor`` on success, .
     */
    public function executeQuery($namespace, $query, $readPreference = NULL)
    {
    }

    /**
     * Convenience method for a single update operation
     *
     * @param string $namespace
     * @param array|object $filter
     * @param array|object $newObj
     * @param array $updateOptions
     * @param MongoDB\Driver\WriteConcern $writeConcern
     *
     * @return MongoDB\Driver\WriteResult
     */
    public function executeUpdate($namespace, $filter, $newObj, $updateOptions = array(), $writeConcern = NULL)
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function getServers()
    {
    }

    /**
     * Preselect MongoDB node
     *
     * @param MongoDB\Driver\ReadPreference $readPreference
     *
     * @return MongoDB\Driver\Server Returns an instance of ``MongoDB\Driver\Server`` ready for action.
     */
    public function selectServer($readPreference)
    {
    }
}