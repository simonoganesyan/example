<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\common\interfaces;


interface IChannelRemove
{
    public function remove(ChannelRemovePayload $payload): bool;
}