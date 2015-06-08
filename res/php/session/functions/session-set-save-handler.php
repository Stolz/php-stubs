<?php

/**
 * Sets user-level session storage functions
 *
 * @phpstub
 *
 * @param callable $open
 * @param callable $close
 * @param callable $read
 * @param callable $write
 * @param callable $destroy
 * @param callable $gc
 * @param callable $create_sid
 *
 * @return bool
 */
function session_set_save_handler($open, $close, $read, $write, $destroy, $gc, $create_sid = NULL)
{
}

/**
 * Sets user-level session storage functions
 *
 * @phpstub
 *
 * @param SessionHandlerInterface $sessionhandler
 * @param bool $register_shutdown
 *
 * @return bool
 */
function session_set_save_handler($sessionhandler, $register_shutdown = true)
{
}