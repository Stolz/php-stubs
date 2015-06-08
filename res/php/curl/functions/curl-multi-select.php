<?php

/**
 * Wait for activity on any curl_multi connection
 *
 * @phpstub
 *
 * @param resource $mh
 * @param float $timeout
 *
 * @return int On success, returns the number of descriptors contained in
 *             the descriptor sets. This may be 0 if there was no activity on any
 *             of the descriptors. On failure, this function will return -1 on a select
 *             failure (from the underlying select system call).
 */
function curl_multi_select($mh, $timeout = 1)
{
}