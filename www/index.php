<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */
require_once __DIR__ . '/../config/environment.php';

if (defined('XHPROF_ENABLED') && XHPROF_ENABLED) {
    xhprof_enable(XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);
}
/**  */