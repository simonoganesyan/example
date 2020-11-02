<?php

namespace channels\facebook\payloads;

use channels\common\payloads\ChannelCreatePayload;

/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

class FacebookCreatePayload extends ChannelCreatePayload
{
    public string $channelId;
}