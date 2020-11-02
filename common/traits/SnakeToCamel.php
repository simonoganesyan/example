<?php
/**
 * @author Simon Oganesyan
 * @created 02.11.2020
 */

namespace common\traits;

trait SnakeToCamel
{
    /**
     *
     * @param  string $snakeCaseName
     * @param  string $delimiter
     *
     * @return null|string
     */
    public function snakeToCamel(string $snakeCaseName, $delimiter = '_'): ?string
    {
        $array = explode($delimiter, $snakeCaseName);
        $array = array_map( function( $value ) { return ucfirst($value); }, $array);

        return lcfirst( implode('', $array) );
    }
}