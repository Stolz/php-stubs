<?php

/**
 * Calculates the fingerprint, or digest, of a given X.509 certificate
 *
 * @phpstub
 *
 * @param mixed $x509
 * @param string $hash_algorithm
 * @param bool $raw_output
 *
 * @return bool Returns a string containing the calculated certificate fingerprint as lowercase hexits unless  is set to true in which case the raw binary representation of the message digest is returned.
 */
function openssl_x509_fingerprint($x509, $hash_algorithm = 'sha1', $raw_output = false)
{
}