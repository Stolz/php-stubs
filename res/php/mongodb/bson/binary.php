<?php

namespace BSON;

/** @phpstub */
class Binary implements \BSON\Type
{
    const TYPE_FUNCTION = 1;
    const TYPE_GENERIC = 0;
    const TYPE_MD5 = 5;
    const TYPE_OLD_BINARY = 2;
    const TYPE_OLD_UUID = 3;
    const TYPE_USER_DEFINED = 128;
    const TYPE_UUID = 4;

    /**
     * Description
     *
     * @param string $data
     * @param string $subtype
     */
    public function __construct($data, $subtype)
    {
    }

    /**
     * Description
     *
     * @return ReturnType 
     */
    public function getSubType()
    {
    }
}