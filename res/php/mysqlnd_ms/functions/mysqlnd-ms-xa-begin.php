<?php

/**
 * Starts a distributed/XA transaction among MySQL servers
 *
 * @phpstub
 *
 * @param mixed $connection
 * @param string $gtrid
 * @param int $timeout
 *
 * @return int Returns true if there is no open local or global transaction and a new global
 *             transaction can be started. Otherwise, returns false
 */
function mysqlnd_ms_xa_begin($connection, $gtrid, $timeout = NULL)
{
}