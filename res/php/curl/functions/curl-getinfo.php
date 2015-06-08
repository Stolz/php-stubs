<?php

/**
 * Get information regarding a specific transfer
 *
 * @phpstub
 *
 * @param resource $ch
 * @param int $opt
 *
 * @return mixed If  is given, returns its value.
 *               Otherwise, returns an associative array with the following elements
 *               (which correspond to ), or false on failure:
 *               
 *               Note that private data is not included in the associative array and must be retrieved individually with the  option.
 */
function curl_getinfo($ch, $opt = false)
{
}