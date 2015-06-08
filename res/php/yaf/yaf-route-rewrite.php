<?php

/** @phpstub */
class Yaf_Route_Rewrite extends \Yaf_Route_Interface implements \Yaf_Route_Interface
{
    protected $_verify;
    protected $_route;
    protected $_default;

    /**
     * Yaf_Route_Rewrite constructor
     *
     * @param string $match
     * @param array $route
     * @param array $verify
     */
    public function __construct($match, $route, $verify = array())
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
     * @return bool 
     */
    public function route($request)
    {
    }
}