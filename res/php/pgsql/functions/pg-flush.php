<?php

/**
 * Flush outbound query data on the connection
 *
 * @phpstub
 *
 * @param resource $connection
 *
 * @return mixed Returns true if the flush was successful or no data was waiting to be
 *               flushed,  if part of the pending data was flushed but
 *               more remains.
 */
function pg_flush($connection)
{
}