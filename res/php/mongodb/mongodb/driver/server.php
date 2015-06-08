<?php

namespace MongoDB\Driver;

/** @phpstub */
class Server
{
    const TYPE_ARBITER = 3;
    const TYPE_MONGOS = 1;
    const TYPE_PRIMARY = 5;
    const TYPE_SECONDARY = 4;
    const TYPE_STANDALONE = 2;

    /**
     * Description
     *
     * @param string $host
     * @param string $port
     * @param array $options
     * @param array $driverOptions
     */
    public function __construct($host, $port, $options = array(), $driverOptions = array())
    {
    }

    /**
     * Description
     *
     * @param string $namespace
     * @param BulkWrite $zwrite
     *
     * @return ReturnType 
     */
    public function executeBulkWrite($namespace, $zwrite)
    {
    }

    /**
     * Description
     *
     * @param string $db
     * @param Command $command
     *
     * @return ReturnType 
     */
    public function executeCommand($db, $command)
    {
    }

    /**
     * Description
     *
     * @param string $namespace
     * @param Query $zquery
     *
     * @return ReturnType 
     */
    public function executeQuery($namespace, $zquery)
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function getHost()
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function getInfo()
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function getLatency()
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function getPort()
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function getState()
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function getType()
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function isDelayed()
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function isPassive()
    {
    }
}