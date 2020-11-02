<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\common\payloads;


use common\payloads\Payload;

class ChannelCreatePayload extends Payload
{
    public int $userId;
}