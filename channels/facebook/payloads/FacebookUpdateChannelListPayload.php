<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\facebook\payloads;


use common\payloads\Payload;

class FacebookUpdateChannelListPayload extends Payload
{
    public string $code;
}