<?php

/** @phpstub */
interface Yaf_Route_Interface
{
    /**
     * assemble a request
     *
     * @param array $info
     * @param array $query
     *
     * @return string 
     */
    public function assemble($info, $query = array());

    /**
     * route a request
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool 
     */
    public function route($request);
}