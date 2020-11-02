<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\common\services;

use channels\common\interfaces\IChannelCreate;
use channels\common\payloads\ChannelCreatePayload;

abstract class ChannelCreateService implements IChannelCreate
{
    protected ChannelCreatePayload $payload;

    /**
     *
     * @param ChannelCreatePayload $payload
     * @throws \Exception
     */
    protected function init(ChannelCreatePayload $payload){

        $this->payload = $payload;

        $this->checkPayload();

        $this->checkUser();

        $this->checkAlreadyExist();
    }

    /**
     *
     * @throws \Exception
     */
    protected function checkPayload(){
        if(empty($this->payload->userId)){
            throw new \Exception('Не передан id юзера', 400);
        }
    }

    protected function checkUser(){
        /**  */
    }

    abstract protected function checkAlreadyExist();

    abstract protected function save();
}