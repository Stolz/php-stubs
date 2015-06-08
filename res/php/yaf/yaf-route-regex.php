<?php

/** @phpstub */
class Yaf_Route_Regex extends \Yaf_Route_Interface implements \Yaf_Route_Interface
{
    protected $_verify;
    protected $_route;
    protected $_maps;
    protected $_default;

    /**
     * Yaf_Route_Regex constructor
     *
     * @param string $match
     * @param array $route
     * @param array $map
     * @param array $verify
     * @param string $reverse
     */
    public function __construct($match, $route, $map = array(), $verify = array(), $reverse = NULL)
    {
    }

    /**
     * Assemble a url
     *
     * @param array $info
     * @param array $query
     *
     * @return string 
     */
    public function assemble($info, $query = array())
    {
    }

    /**
     * The route purpose
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool If the pattern given by the first parameter of
     *              matche the request
     *              uri, return true, otherwise return false.
     */
    public function route($request)
    {
    }
}