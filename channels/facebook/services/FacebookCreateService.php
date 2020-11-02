<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\facebook\services;

use channels\common\payloads\ChannelCreatePayload;
use channels\common\services\ChannelCreateService;
use Exception;

class FacebookCreateService extends ChannelCreateService
{

    /**
     *
     * @param ChannelCreatePayload $payload
     * @return array
     * @throws Exception
     */
    public function create(ChannelCreatePayload $payload) : array {

        $this->init($payload);

        /**  */

        return $this->save();
    }

    /**
     *
     * @throws Exception
     */
    protected function checkAlreadyExist(){

        $channel = (new FacebookGetByIdService())->get($this->payload->channelId);

        if(!empty($channel)) {
            throw new Exception('Канал уже создан', 403);
        }
    }

    /**
     *
     * @return array
     */
    protected function save()
    {
        /**  */
        return [/**  */];
    }
}