<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\facebook\controllers;

use channels\facebook\payloads\FacebookCreatePayload;
use channels\facebook\payloads\FacebookUpdateChannelListPayload;
use channels\facebook\services\FacebookCreateService;
use channels\facebook\services\FacebookUpdateChannelListService;
use common\controllers\Controller;
use common\services\Response;

class FacebookController extends Controller
{
    /**
     *
     * @return Response
     */
    public function createAction():Response {

        try {

            $params = $this->getRequestParams();
            $result = (new FacebookCreateService())->create(new FacebookCreatePayload($params));
            return $this->createResponseSuccess(['response' => $result]);

        } catch (\Exception $e) {

            return $this->createResponseError($e);
        }
    }

    /**
     * @return Response
     */
    public function updateChannelListAction() {

        try {

            $params = $this->getRequestParams();
            $result = (new FacebookUpdateChannelListService())->update(new FacebookUpdateChannelListPayload($params));
            return $this->createResponseSuccess(['response' => $result]);

        } catch (\Exception $e) {

            return $this->createResponseError($e);

        }
    }
}