<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace common\jobs;

use common\services\Log;

class LogJob
{
    public string $message;

    public int $type;

    public function execute($queue): void {
        (new Log())->log($this->message, false);
    }
}