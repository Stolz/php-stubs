<?php

/**
 * Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param array $array1
 * @param array $array2
 * @param array $_
 * @param callable $value_compare_func
 * @param callable $key_compare_func
 *
 * @return array Returns an array containing all the values of
 *               that are present in all the arguments.
 */
function array_uintersect_uassoc($array1, $array2, $_ = array(), $value_compare_func, $key_compare_func)
{
}