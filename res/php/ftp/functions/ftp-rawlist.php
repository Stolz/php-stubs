<?php

/**
 * Returns a detailed list of files in the given directory
 *
 * @phpstub
 *
 * @param resource $ftp_stream
 * @param string $directory
 * @param bool $recursive
 *
 * @return mixed Returns an array where each element corresponds to one line of text. Returns
 *               false when passed  is invalid.
 */
function ftp_rawlist($ftp_stream, $directory, $recursive = false)
{
}