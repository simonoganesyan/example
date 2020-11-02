<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace common\controllers;

use common\services\Response;

class Controller
{
    /**
     *
     * @return array
     */
    protected function getRequestParams(){
        /****/
        return [
            'token' => 'zzz',
            /****/
        ];
    }

    /**
     *
     * @param array $data
     * @return Response
     */
    protected function createResponseSuccess(array $data = []):Response{
        /****/
        return new Response($data);
    }

    /**
     *
     * @param \Exception $e
     * @return Response
     */
    protected function createResponseError(\Exception $e):Response{
        /****/
        $data = [
            'error' => $e->getTraceAsString(),
            /****/
        ];
        return new Response($data);
    }
}