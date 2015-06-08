<?php

namespace MongoDB\Driver;

/** @phpstub */
class ReadPreference
{
    const RP_NEAREST = 10;
    const RP_PRIMARY = 1;
    const RP_PRIMARY_PREFERRED = 5;
    const RP_SECONDARY = 2;
    const RP_SECONDARY_PREFERRED = 6;

    /**
     * Description
     *
     * @param string $readPreference
     * @param array $tagSets
     */
    public function __construct($readPreference, $tagSets = array())
    {
    }
}