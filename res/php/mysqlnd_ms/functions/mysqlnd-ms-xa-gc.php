<?php

/**
 * Garbage collects unfinished XA transactions after severe errors
 *
 * @phpstub
 *
 * @param mixed $connection
 * @param string $gtrid
 * @param boolean $ignore_max_retries
 *
 * @return int Returns true if garbage collection was successful. Otherwise, returns false
 */
function mysqlnd_ms_xa_gc($connection, $gtrid = NULL, $ignore_max_retries = NULL)
{
}