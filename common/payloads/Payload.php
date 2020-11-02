<?php
/**
 * @author Simon Oganesyan
 */

namespace common\payloads;

use common\traits\SnakeToCamel;

class Payload
{
    use SnakeToCamel;

    /**
     *
     * @param $props
     */
    public function __construct($props)
    {
        $this->setProperties($props);
    }

    /**
     *
     * @param array $props
     */
    public function setProperties(array $props){

        foreach ($props as $k => $v) {
            $propName = $this->snakeToCamel($k);
            if(property_exists($this, $propName)){
                $this->$propName = $v;
            }
        }
    }
}