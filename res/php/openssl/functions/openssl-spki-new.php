<?php

/**
 * Generate a new signed public key and challenge
 *
 * @phpstub
 *
 * @param resource $privkey
 * @param string $challenge
 * @param int $algorithm
 *
 * @return string Returns a signed public key and challenge string or NULL on failure.
 */
function openssl_spki_new(&$privkey, &$challenge, $algorithm = false)
{
}