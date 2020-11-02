<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\common\interfaces;

use channels\common\payloads\ChannelCreatePayload;

interface IChannelCreate
{
    public function create(ChannelCreatePayload $payload): array;
}