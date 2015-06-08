<?php

/**
 * Add an event to the set of monitored events
 *
 * @phpstub
 *
 * @param resource $event
 * @param int $timeout
 *
 * @return bool returns true on success or false on error.
 */
function event_add($event, $timeout = -1)
{
}

/**
 * Add an event to the set of monitored events
 *
 * @phpstub-alias-of event_add
 * @phpstub
 *
 * @param resource $event
 * @param int $timeout
 *
 * @return bool returns true on success or false on error.
 */
function event_timer_add($event, $timeout = -1)
{
}