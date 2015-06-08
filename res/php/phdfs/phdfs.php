<?php

/** @phpstub */
class phdfs
{
    public $port;
    public $host;

    /**
     * Description
     *
     * @param string $ip
     * @param string $port
     */
    public function __construct($ip, $port)
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function __destruct()
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function connect()
    {
    }

    /**
     * Description
     *
     * @param string $source_file
     * @param string $destination_file
     *
     * @return ReturnType 
     */
    public function copy($source_file, $destination_file)
    {
    }

    /**
     * Description
     *
     * @param string $path
     *
     * @return ReturnType 
     */
    public function create_directory($path)
    {
    }

    /**
     * Description
     *
     * @param string $path
     *
     * @return ReturnType 
     */
    public function delete($path)
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function disconnect()
    {
    }

    /**
     * Description
     *
     * @param string $path
     *
     * @return ReturnType 
     */
    public function exists($path)
    {
    }

    /**
     * Description
     *
     * @param string $path
     *
     * @return ReturnType 
     */
    public function file_info($path)
    {
    }

    /**
     * Description
     *
     * @param string $path
     *
     * @return ReturnType 
     */
    public function list_directory($path)
    {
    }

    /**
     * Description
     *
     * @param string $path
     * @param string $length
     *
     * @return ReturnType 
     */
    public function read($path, $length = NULL)
    {
    }

    /**
     * Description
     *
     * @param string $old_path
     * @param string $new_path
     *
     * @return ReturnType 
     */
    public function rename($old_path, $new_path)
    {
    }

    /**
     * Description
     *
     * @param string $path
     *
     * @return ReturnType 
     */
    public function tell($path)
    {
    }

    /**
     * Description
     *
     * @param string $path
     * @param string $buffer
     * @param string $mode
     *
     * @return ReturnType 
     */
    public function write($path, $buffer, $mode = NULL)
    {
    }
}