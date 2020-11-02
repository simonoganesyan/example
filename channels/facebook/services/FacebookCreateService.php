<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\facebook\services;

use channels\common\payloads\ChannelCreatePayload;
use channels\common\services\ChannelCreateService;
use common\services\Log;
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

        $this->save();

        $this->log();

        return [/**  */];
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
     */
    private function log(){
        Log::log('Канал создан');
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
