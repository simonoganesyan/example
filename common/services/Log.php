<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace common\services;


use common\jobs\LogJob;

class Log
{
    public const TYPE_FILE = 1;
    public const TYPE_DB = 2;

    /**
     *
     * @param string $message
     * @param int $type
     * @param bool $queue
     */
    public static function log(string $message, int $type = self::TYPE_FILE, bool $queue = true){

        if($queue) {
            //какой-то queue, например rabbit
            $queueLog->push(new LogJob(/**  */));
            return;
        }

        /** логирование */
    }
}