<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\facebook\services;


class FacebookGetByIdService
{
    /**
     *
     * @param string $channelId
     * @return object
     */
    public function get(string $channelId):object {

        /** какой-то кеш-сервис, например Redis */
        $channel = $cache->getOrSet($this->getKey($channelId), function () use ($channelId) {
            return $this->getFromDb($channelId);
        }, CACHE_LIFE_TIME);
    }

    /**
     *
     * @param string $channelId
     * @return string
     */
    private function getKey(string $channelId):string {

        return 'facebook_' . $channelId;
    }

    /**
     *
     * @param string $channelId
     * @return object
     */
    private function getFromDb(string $channelId):object {
        /**  */
        return new \stdClass();
    }
}