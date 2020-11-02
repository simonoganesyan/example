<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace channels\facebook\models;

use common\models\Model;

class FacebookChannels extends Model
{
    /**
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'created', ], 'integer'],
            [['channel_id',], 'string', 'length' => [1, 255]],
        ];
    }
}