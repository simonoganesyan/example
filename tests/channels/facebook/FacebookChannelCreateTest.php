<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace tests\channels\facebook;

use channels\facebook\payloads\FacebookCreatePayload;
use channels\facebook\services\FacebookCreateService;
use TestHelper;

class FacebookChannelCreateTest
{
    public function testCreate(){

        $user = TestHelper::createUser();

        $data = (new FacebookCreateService())->create(
            new FacebookCreatePayload(
                [
                    'userId' => $user->id,
                    'channelId' => 'zzz',
                ]
            )
        );

        TestHelper::assertTrue(!empty($data['id']));
    }
}