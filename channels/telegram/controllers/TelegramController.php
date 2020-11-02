<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\telegram\controllers;

use common\controllers\Controller;
use common\services\Response;

class TelegramController extends Controller
{
    /**
     *
     * @return Response
     */
    public function createAction():Response {

        try {

            /****/
            return $this->createResponseSuccess();

        } catch (\Exception $e) {

            return $this->createResponseError($e);
        }
    }

    public function triggerEventAction() {

        try {

            /****/
            return $this->createResponseSuccess();

        } catch (\Exception $e) {

            return $this->createResponseError($e);

        }
    }
}