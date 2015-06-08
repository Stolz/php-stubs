<?php

/**
 * Commits a distributed/XA transaction among MySQL servers
 *
 * @phpstub
 *
 * @param mixed $connection
 * @param string $gtrid
 *
 * @return int Returns true if the global transaction has been committed. Otherwise, returns false
 */
function mysqlnd_ms_xa_commit($connection, $gtrid)
{
}