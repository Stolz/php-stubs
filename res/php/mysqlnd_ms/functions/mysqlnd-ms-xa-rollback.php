<?php

/**
 * Rolls back a distributed/XA transaction among MySQL servers
 *
 * @phpstub
 *
 * @param mixed $connection
 * @param string $gtrid
 *
 * @return int Returns true if the global transaction has been rolled back. Otherwise, returns false
 */
function mysqlnd_ms_xa_rollback($connection, $gtrid)
{
}